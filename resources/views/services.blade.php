@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
    <section class="services-hero">
        <div class="services-hero-content">
            <h1 class="services-title">SERVICES</h1>
            <p class="services-subtitle">
                Comprehensive Toyota Land Cruiser<br/>
                solutions tailored to your needs
            </p>
        </div>
    </section>

<section class="offerings-section"> <div class="container">
        <div class="section-header">
            <span class="sub-label">OUR SERVICES</span>
            <h2 class="section-title">What we <span class="italic-plum">offer</span></h2>
            <p class="section-desc">
                At Masafa, we specialize exclusively in Toyota Land Cruisers, 
                offering a comprehensive range of services to enhance, maintain, 
                and customize your vehicle.
            </p>
        </div>

        <div class="services-grid">
            <div class="service-card reveal-on-scroll">
                <img src="{{ asset('images/masafa-1.jpg') }}" alt="Game Viewer Conversions">
                <div class="card-body">
                    <h3>Game Viewer Conversions</h3>
                    <p>Custom game viewer conversions for safari and wildlife viewing operations, designed for optimal visibility and comfort.</p>
                    <a href="#game-viewer" class="learn-more">Learn More <i class="arrow-icon">→</i></a>
                </div>
            </div>

            <div class="service-card reveal-on-scroll">
                <img src="{{ asset('images/masafa-2.jpg') }}" alt="Land Cruiser Accessories">
                <div class="card-body">
                    <h3>Land Cruiser Accessories</h3>
                    <p>Premium accessories to enhance your Toyota Land Cruiser's performance, comfort, and capability in any terrain.</p>
                    <a href="#expedition" class="learn-more">Learn More <i class="arrow-icon">→</i></a>
                </div>
            </div>

            <div class="service-card reveal-on-scroll">
                <img src="{{ asset('images/masafa-3.jpg') }}" alt="Maintenance & Repairs">
                <div class="card-body">
                    <h3>Maintenance & Repairs</h3>
                    <p>Specialized maintenance and repair services for Toyota Land Cruisers, performed by experienced technicians.</p>
                    <a href="#accessories" class="learn-more">Learn More <i class="arrow-icon">→</i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="game-viewer" class="service-detail bg-light" reveal-on-scroll>
    <div class="container flex-row">
        <div class="detail-image">
            <img src="{{ asset('images/masafa-1.jpg') }}" alt="Game Viewer Conversions">
        </div>
        <div class="detail-info">
            <h2 class="detail-title">Game Viewer Conversions</h2>
            <p class="detail-desc">Our game viewer conversions transform Toyota Land Cruisers into the perfect safari vehicles, designed for optimal wildlife viewing while ensuring passenger comfort and safety.</p>
            
            <h3 class="feature-heading">Features include:</h3>
            <ul class="feature-list">
                <li>Elevated seating arrangements for optimal visibility</li>
                <li>Custom roof configurations for shade and photography</li>
                <li>Reinforced chassis and suspension for off-road performance</li>
                <li>Storage solutions for equipment and refreshments</li>
                <li>Custom electrical systems for charging and lighting</li>
            </ul>
            <a href="{{ url('/contacts') }}" class="btn-plum">Inquire About Game Viewer Conversions</a>
        </div>
    </div>
</section>

<section id="expedition" class="service-detail" reveal-on-scroll>
     <div class="container flex-row row-reverse">
        <div class="detail-image">
            <img src="{{ asset('images/masafa-1.jpg') }}" alt="Game Viewer Conversions">
        </div>
        <div class="detail-info">
            <h2 class="detail-title">Game Viewer Conversions</h2>
            <p class="detail-desc">Our game viewer conversions transform Toyota Land Cruisers into the perfect safari vehicles, designed for optimal wildlife viewing while ensuring passenger comfort and safety.</p>
            
            <h3 class="feature-heading">Features include:</h3>
            <ul class="feature-list">
                <li>Elevated seating arrangements for optimal visibility</li>
                <li>Custom roof configurations for shade and photography</li>
                <li>Reinforced chassis and suspension for off-road performance</li>
                <li>Storage solutions for equipment and refreshments</li>
                <li>Custom electrical systems for charging and lighting</li>
            </ul>
            <a href="{{ url('/contacts') }}" class="btn-plum">Inquire About Game Viewer Conversions</a>
        </div>
    </div>
</section>

<section id="expedition" class="service-detail" reveal-on-scroll>
    <div class="container flex-row row-reverse">
        <div class="detail-image">
            <img src="{{ asset('images/masafa-2.jpg') }}" alt="Expedition Conversions">
        </div>
        <div class="detail-info">
            <h2 class="detail-title">Expedition Conversions</h2>
            <p class="detail-desc">Transform your Land Cruiser into the ultimate expedition vehicle. Whether you're planning an overland adventure or need a reliable vehicle for remote expeditions, we build the perfect solution.</p>
            
            <h3 class="feature-heading">Our Conversions include:</h3>
            <ul class="feature-list">
                <li>6-Door Conversions</li>
                <li>Canopy Conversions</li>
                <li>Interior Customization</li>
                <li>Camping and expedition conversions</li>
            </ul>
            <a href="{{ url('/contacts') }}" class="btn-plum">Schedule Maintenance</a>
        </div>
    </div>
</section>

<section id="accessories" class="service-detail bg-light">
    <div class="container flex-row">
        <div class="detail-image">
            <img src="{{ asset('images/masafa-3.jpg') }}" alt="Land Cruiser Accessories">
        </div>
        <div class="detail-info">
            <h2 class="detail-title">Land Cruiser Accessories</h2>
            <p class="detail-desc">We offer a wide range of premium accessories specifically designed for Toyota Land Cruisers, enhancing their performance, comfort, and capability in any environment.</p>
            
            <h3 class="feature-heading">Available Accessories include:</h3>
            <ul class="feature-list">
                <li>Bull bars and vehicle protection equipment</li>
                <li>Winches and recovery gear</li>
                <li>Suspension upgrades and lift kits</li>
                <li>Roof racks and storage solutions</li>
                <li>Lighting systems and electrical upgrades</li>
            </ul>
            <a href="{{ url('/contacts') }}" class="btn-plum">Explore Land Cruiser Accessories</a>
        </div>
    </div>
</section>

@include('components.cta')

    @endsection