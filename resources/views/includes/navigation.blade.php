<!-- Navigation with Logout Dropdown -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container">
        <!-- Logo and Name -->
        <a class="navbar-brand" href="{{ route('frontpage') }}">
            <img src="{{ asset('assets/images/logos/logo.svg') }}" alt="Logo" width="30" height="30" class="d-inline-block align-top">
            My Blog
        </a>

        <!-- Burger Menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Add your other navigation links here -->
            </ul>

            <!-- Authentication Links -->
            <ul class="navbar-nav ml-auto">
                @guest
                    <!-- Login link for guest users -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                @else
                    <!-- Logout dropdown for authenticated users -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <!-- Dropdown menu -->
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <!-- User details -->
                            <div class="dropdown-item-text">
                                <p class="mb-1">{{ Auth::user()->email }}</p>
                                <!-- Divider -->
                                <div class="dropdown-divider"></div>
                                <!-- Logout link -->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link">Logout</button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
