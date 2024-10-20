<?php
// app/Http/Controllers/ListingController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listings');
    }

    public function create()
    {
        return view('create-listing');
    }

    public function store(Request $request)
    {
        // Logic to store the listing
    }
}
