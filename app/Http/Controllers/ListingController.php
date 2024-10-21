<?php
namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;


class ListingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'bedrooms' => 'required|integer|min:1',
            'bathrooms' => 'required|integer|min:1',
            'area' => 'required|integer|min:1',
            'location' => 'required|string|max:255',
            'property_type' => 'required|string',
            'image' => 'nullable|image|max:2048', // Optional image
        ]);

        try {
            Listing::create($request->all()); // Ensure the model is set up correctly
            return redirect()->back()->with('success', 'Listing created successfully!');
        } catch (\Illuminate\Database\QueryException $e) {
            // Log the error or display a user-friendly message
            return redirect()->back()->withErrors(['error' => 'Database error: ' . $e->getMessage()]);
        }
    }

    public function index() {
        $listings = Listing::all();  // Fetch all listings from the database
        return view('listings', compact('listings'));  // Pass the listings to the Blade view
    }
    
}
