<nav class="navbar">
    <div class="nav-container">
        <a href="{{ url('/') }}" class="logo-link">
            <img class="logo" src="{{ asset('images/Masafa Logo.png') }}" alt="Masafa Logo">
        </a>
        
        <div class="nav-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <div class="nav-wrapper">
            <ul class="nav-links">
                <li class="mobile-only-logo">
                    <img src="{{ asset('images/Masafa Logo.png') }}" alt="Masafa Logo">
                </li>

                <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active-page' : '' }}">HOME</a></li>
                <li><a href="{{ url('/services') }}" class="{{ Request::is('services') ? 'active-page' : '' }}">SERVICES</a></li>
                <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active-page' : '' }}">ABOUT</a></li>
                <li><a href="{{ url('/gallery') }}" class="{{ Request::is('gallery') ? 'active-page' : '' }}">GALLERY</a></li>
                <li><a href="{{ url('/contacts') }}" class="{{ Request::is('contacts') ? 'active-page' : '' }}">CONTACTS</a></li>
                
                <li class="nav-divider"></li>

                <li class="mobile-cta-wrapper">
                    <a href="{{ url('/contacts') }}" class="nav-cta full-width">REQUEST A QUOTE</a>
                </li>

                <li class="mobile-socials">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
        </div>

        <a href="{{ url('/contacts') }}" class="nav-cta desktop-cta">REQUEST A QUOTE</a>
    </div>
</nav>