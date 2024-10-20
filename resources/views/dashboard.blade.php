<!-- resources/views/dashboard.blade.php -->
@extends('app')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1>Welcome to your Dashboard</h1>
        <p>Manage your listings, view analytics, and track activity.</p>
    </div>
</div>

<!-- Carousel -->
<div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#propertyCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#propertyCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#propertyCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://via.placeholder.com/1200x400?text=Property+1" class="d-block w-100" alt="Property 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Beautiful Family Home</h5>
                <p>Located in the suburbs with 4 bedrooms and 3 bathrooms.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/1200x400?text=Property+2" class="d-block w-100" alt="Property 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Modern Apartment</h5>
                <p>Luxury apartment in the city center with breathtaking views.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://via.placeholder.com/1200x400?text=Property+3" class="d-block w-100" alt="Property 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Cozy Cottage</h5>
                <p>A peaceful getaway in the countryside with 2 bedrooms.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Dashboard Cards -->
<div class="row mt-5">
    <div class="col-lg-4 col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Total Listings</h5>
                <p class="card-text display-4">24</p>
                <a href="{{ url('/listings') }}" class="btn btn-primary">View Listings</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Active Offers</h5>
                <p class="card-text display-4">12</p>
                <a href="#" class="btn btn-success">View Offers</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Pending Inquiries</h5>
                <p class="card-text display-4">5</p>
                <a href="#" class="btn btn-warning">View Inquiries</a>
            </div>
        </div>
    </div>
</div>

<!-- Recent Activity Table -->
<div class="row mt-5">
    <div class="col-md-12">
        <h3>Recent Activity</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Property</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Family Home in Suburbs</td>
                    <td><span class="badge bg-success">Listed</span></td>
                    <td>2024-10-20</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Luxury Apartment</td>
                    <td><span class="badge bg-danger">Sold</span></td>
                    <td>2024-10-19</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Cozy Cottage</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                    <td>2024-10-18</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
