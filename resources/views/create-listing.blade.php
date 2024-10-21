@extends('app')

@section('title', 'Post a Listing')

@section('content')
<h2>Post a New Listing</h2>

<!-- Display success or error messages -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('/store-listing') }}" enctype="multipart/form-data"> <!-- Include enctype for file uploads -->
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Listing Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price ($)</label>
        <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
    </div>

    <div class="mb-3">
        <label for="bedrooms" class="form-label">Number of Bedrooms</label>
        <input type="number" class="form-control" id="bedrooms" name="bedrooms" min="1" value="{{ old('bedrooms') }}" required>
    </div>

    <div class="mb-3">
        <label for="bathrooms" class="form-label">Number of Bathrooms</label>
        <input type="number" class="form-control" id="bathrooms" name="bathrooms" min="1" value="{{ old('bathrooms') }}" required>
    </div>

    <div class="mb-3">
        <label for="area" class="form-label">Area (in square feet)</label>
        <input type="number" class="form-control" id="area" name="area" value="{{ old('area') }}" required>
    </div>

    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" placeholder="City, Neighborhood, etc." value="{{ old('location') }}" required>
    </div>

    <div class="mb-3">
        <label for="property_type" class="form-label">Property Type</label>
        <select class="form-select" id="property_type" name="property_type" required>
            <option value="House" {{ old('property_type') == 'House' ? 'selected' : '' }}>House</option>
            <option value="Apartment" {{ old('property_type') == 'Apartment' ? 'selected' : '' }}>Apartment</option>
            <option value="Condo" {{ old('property_type') == 'Condo' ? 'selected' : '' }}>Condo</option>
            <option value="Land" {{ old('property_type') == 'Land' ? 'selected' : '' }}>Land</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Upload Property Image</label>
        <input type="file" class="form-control" id="image" name="image" accept="image/*">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
