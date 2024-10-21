<!-- resources/views/partials/footer.blade.php -->
<footer class="bg-light text-center text-sm-start mt-5 small">
    <div class="container p-4">
        <div class="row">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">About Us</h5>
                <p>
                    We are a leading real estate platform providing high-quality listings of properties for sale and rent. Our goal is to help you find your dream home or investment property.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}" class="text-dark">Home</a></li>
                    <li><a href="{{ url('/listings') }}" class="text-dark">Listings</a></li>
                    <li><a href="{{ url('/dashboard') }}" class="text-dark">Dashboard</a></li>
                    <li><a href="{{ url('/contact') }}" class="text-dark">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Contact</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> 123 Real Estate St., City, Country</li>
                    <li><i class="fas fa-phone"></i> +1 123 456 7890</li>
                    <li><i class="fas fa-envelope"></i> info@realestate.com</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="text-center p-3 bg-dark text-white">
        &copy; 2024 RealEstate. All Rights Reserved.
    </div>
</footer>
