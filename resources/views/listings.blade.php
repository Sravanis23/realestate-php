<!-- resources/views/listings.blade.php -->
@extends('app')

@section('title', 'Listings')

@section('content')
<h2>Property Listings</h2>
<p>Here you can see all the active property listings.</p>

<div class="row">
    <!-- Listing 1 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="https://via.placeholder.com/400x200?text=Property+Image" class="card-img-top" alt="Property Image">
            <div class="card-body">
                <h5 class="card-title">Modern Family Home</h5>
                <p class="card-text">Spacious family home located in the suburbs, perfect for those seeking a quiet life with proximity to the city.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Price:</strong> $350,000</li>
                    <li class="list-group-item"><strong>Bedrooms:</strong> 4</li>
                    <li class="list-group-item"><strong>Bathrooms:</strong> 3</li>
                    <li class="list-group-item"><strong>Area:</strong> 2,500 sqft</li>
                    <li class="list-group-item"><strong>Location:</strong> Suburbs, City A</li>
                    <li class="list-group-item"><strong>Property Type:</strong> House</li>
                </ul>
                <a href="#" class="btn btn-primary mt-3">View Details</a>
            </div>
        </div>
    </div>

    <!-- Listing 2 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="https://via.placeholder.com/400x200?text=Property+Image" class="card-img-top" alt="Property Image">
            <div class="card-body">
                <h5 class="card-title">Luxury City Apartment</h5>
                <p class="card-text">A luxurious apartment located in the heart of the city, offering stunning views and modern amenities.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Price:</strong> $500,000</li>
                    <li class="list-group-item"><strong>Bedrooms:</strong> 3</li>
                    <li class="list-group-item"><strong>Bathrooms:</strong> 2</li>
                    <li class="list-group-item"><strong>Area:</strong> 1,800 sqft</li>
                    <li class="list-group-item"><strong>Location:</strong> Downtown, City B</li>
                    <li class="list-group-item"><strong>Property Type:</strong> Apartment</li>
                </ul>
                <a href="#" class="btn btn-primary mt-3">View Details</a>
            </div>
        </div>
    </div>

    <!-- Listing 3 -->
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="https://via.placeholder.com/400x200?text=Property+Image" class="card-img-top" alt="Property Image">
            <div class="card-body">
                <h5 class="card-title">Cozy Cottage Retreat</h5>
                <p class="card-text">A peaceful cottage located in the countryside, perfect for a weekend getaway or a second home.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Price:</strong> $250,000</li>
                    <li class="list-group-item"><strong>Bedrooms:</strong> 2</li>
                    <li class="list-group-item"><strong>Bathrooms:</strong> 1</li>
                    <li class="list-group-item"><strong>Area:</strong> 1,200 sqft</li>
                    <li class="list-group-item"><strong>Location:</strong> Countryside, City C</li>
                    <li class="list-group-item"><strong>Property Type:</strong> Cottage</li>
                </ul>
                <a href="#" class="btn btn-primary mt-3">View Details</a>
            </div>
        </div>
    </div>
</div>
@endsection
