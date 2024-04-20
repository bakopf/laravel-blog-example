<footer class="footer bg-dark text-white">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="Logo" class="img-fluid">
                <p class="mt-3">123 Street, City, Country</p>
                <p>+1234567890</p>
                <p>info@example.com</p>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('datenschutz') }}" class="text-white">Datenschutz</a></li>
                    <li><a href="{{ route('impressum') }}" class="text-white">Impressum</a></li>
                    <li><a href="{{ route('kontakt') }}" class="text-white">Kontakt</a></li>
                </ul>
            </div>
            <div class="col-lg-6">
                <!-- Additional links or content can be added here -->
            </div>
        </div>
    </div>
</footer>
