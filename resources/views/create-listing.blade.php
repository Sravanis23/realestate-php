<!-- resources/views/create-listing.blade.php -->
@extends('app')

@section('title', 'Post a Listing')

@section('content')
<h2>Post a New Listing</h2>
<form method="POST" action="{{ url('/store-listing') }}">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Listing Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price ($)</label>
        <input type="number" class="form-control" id="price" name="price" required>
    </div>

    <div class="mb-3">
        <label for="bedrooms" class="form-label">Number of Bedrooms</label>
        <input type="number" class="form-control" id="bedrooms" name="bedrooms" min="1" required>
    </div>

    <div class="mb-3">
        <label for="bathrooms" class="form-label">Number of Bathrooms</label>
        <input type="number" class="form-control" id="bathrooms" name="bathrooms" min="1" required>
    </div>

    <div class="mb-3">
        <label for="area" class="form-label">Area (in square feet)</label>
        <input type="number" class="form-control" id="area" name="area" required>
    </div>

    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" placeholder="City, Neighborhood, etc." required>
    </div>

    <div class="mb-3">
        <label for="property_type" class="form-label">Property Type</label>
        <select class="form-select" id="property_type" name="property_type" required>
            <option value="House">House</option>
            <option value="Apartment">Apartment</option>
            <option value="Condo">Condo</option>
            <option value="Land">Land</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Upload Property Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
