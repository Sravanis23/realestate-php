@extends('app')

@section('title', 'Listings')

@section('content')
<h2>Property Listings</h2>
<p>Here you can see all the active property listings.</p>

<div class="row">
    @if($listings->isEmpty())
        <p>No listings available at the moment.</p>
    @else
        @foreach($listings as $listing)
        <div class="col-md-4 mb-4">
            <div class="card">
                <!-- Display the image if available, otherwise show placeholder -->
                <img src="{{ $listing->image ? asset('storage/' . $listing->image) : 'https://via.placeholder.com/400x200?text=Property+Image' }}" class="card-img-top" alt="Property Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $listing->title }}</h5>
                    <p class="card-text">{{ Str::limit($listing->description, 100) }}</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Price:</strong> ${{ number_format($listing->price) }}</li>
                        <li class="list-group-item"><strong>Bedrooms:</strong> {{ $listing->bedrooms }}</li>
                        <li class="list-group-item"><strong>Bathrooms:</strong> {{ $listing->bathrooms }}</li>
                        <li class="list-group-item"><strong>Area:</strong> {{ number_format($listing->area) }} sqft</li>
                        <li class="list-group-item"><strong>Location:</strong> {{ $listing->location }}</li>
                        <li class="list-group-item"><strong>Property Type:</strong> {{ $listing->property_type }}</li>
                    </ul>
                    <a href="{{ url('/listings/' . $listing->id) }}" class="btn btn-primary mt-3">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    @endif
</div>
@endsection
