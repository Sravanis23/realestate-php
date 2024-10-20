<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">RealEstate</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('listings') ? 'active' : '' }}" href="{{ url('/listings') }}">Listings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('create-listing') ? 'active' : '' }}" href="{{ url('/create-listing') }}">Post a Listing</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
