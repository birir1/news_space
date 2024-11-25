<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1a1a2e; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); font-family: 'Times New Roman', Times, serif;">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Navbar Right Section - Favicon, Research, Email, Website -->
        <div class="d-flex align-items-center">
            <a href="{{ url('/') }}" class="navbar-brand me-3">
                <img src="{{ asset('favicon.ico') }}" alt="favicon" style="width: 30px; height: 30px;">
            </a>
            <a class="nav-link text-white me-3" href="{{ url('/research') }}" style="font-size: 1rem;">Research</a>
            <a class="nav-link text-white me-3" href="mailto:info@example.com" style="font-size: 1rem;">Email</a>
            <a class="nav-link text-white" href="{{ url('/website') }}" style="font-size: 1rem;">Website</a>
        </div>

        <!-- Brand Name -->
        <a class="navbar-brand" href="{{ url('/') }}" style="font-size: 1.8rem; color: #f1f1f1; font-weight: 600; text-transform: uppercase; letter-spacing: 2px;">
            <i class="fas fa-newspaper" style="margin-right: 8px;"></i> News Space
        </a>

        <!-- Navbar Left Section - Sign In, Sign Up, Contribute -->
        <div class="d-flex align-items-center">
            <a class="nav-link text-white me-3" href="{{ url('/sign-in') }}" style="font-size: 1rem;">Sign In</a>
            <a class="nav-link text-white me-3" href="{{ url('/sign-up') }}" style="font-size: 1rem;">Sign Up</a>
            <a class="nav-link text-white" href="{{ url('/contribute') }}" style="font-size: 1rem;">Contribute</a>
        </div>
    </div>
</nav>
