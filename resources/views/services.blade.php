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

    <section class="offerings-section"> 
        <div class="container">
            <div class="section-header">
                <span class="sub-label">OUR EXPERTISE</span>
                <h2 class="section-title">What we <span class="italic-plum">offer</span></h2>
                <p class="section-desc">
                    At Masafa, we specialize exclusively in Toyota Land Cruisers, 
                    offering heavy-duty engineering to enhance, maintain, 
                    and customize your vehicle for the African wilderness.
                </p>
            </div>

            <div class="services-grid">
                <div class="service-card reveal-on-scroll">
                    <img src="{{ asset('images/masafa-1.jpg') }}" alt="Safari Body Conversions">
                    <div class="card-body">
                        <h3>Safari Body Conversions</h3>
                        <p>Specialized 6-seater extensions built with corrosion-resistant GI zinc-coated sheets for longevity in harsh environments.</p>
                        <a href="#safari-conversions" class="learn-more">Explore features<i class="arrow-icon">→</i></a>
                    </div>
                </div>

                <div class="service-card reveal-on-scroll">
                    <img src="{{ asset('images/masafa-2.jpg') }}" alt="Expedition Outfitting">
                    <div class="card-body">
                        <h3>Expedition Outfitting</h3>
                        <p>Complete overlanding setups featuring signature pop-up roofs, gas-shock systems, and premium interior insulation.</p>
                        <a href="#expedition" class="learn-more">Explore Features <i class="arrow-icon">→</i></a>
                    </div>
                </div>

                <div class="service-card reveal-on-scroll">
                    <img src="{{ asset('images/masafa-3.jpg') }}" alt="Accessories & Electrical">
                    <div class="card-body">
                        <h3>Accessories & Electrical</h3>
                        <p>Heavy-duty protection gear and advanced power solutions including inverters and multi-socket charging stations.</p>
                        <a href="#accessories" class="learn-more">Explore features<i class="arrow-icon">→</i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="safari-conversions" class="service-detail bg-light" reveal-on-scroll>
        <div class="container flex-row">
            <div class="detail-image">
                <img src="{{ asset('images/masafa-1.jpg') }}" alt="Safari Body Conversions">
            </div>
            <div class="detail-info">
                <h2 class="detail-title">Safari Body Conversions</h2>
                <p class="detail-desc">Our flagship service transforms standard Land Cruisers into high-capacity safari rigs. We utilize specialized fabrication techniques to ensure every build withstands the rigors of off-road tourism.</p>
                
                <h3 class="feature-heading">Technical Specifications:</h3>
                <ul class="feature-list">
                    <li>Standard body conversion extended to a 6-seater configuration</li>
                    <li>Body built using high-grade GI zinc-coated steel sheets</li>
                    <li>Elevated windscreen for enhanced panoramic wildlife viewing</li>
                    <li>Big sliding windows for optimal ventilation and photography</li>
                    <li>Heavy-duty floor mats and specialized rear tools compartment</li>
                    <li>Reinforced chassis integrity for extended vehicle life</li>
                </ul>
                <a href="{{ url('/contacts') }}" class="btn-plum">Inquire About Conversions</a>
            </div>
        </div>
    </section>

    <section id="expedition" class="service-detail" reveal-on-scroll>
        <div class="container flex-row row-reverse">
            <div class="detail-image">
                <img src="{{ asset('images/masafa-2.jpg') }}" alt="Expedition Outfitting">
            </div>
            <div class="detail-info">
                <h2 class="detail-title">Expedition Outfitting</h2>
                <p class="detail-desc">We bridge the gap between rugged utility and passenger comfort. Our expedition builds are designed for long-distance travel where reliability and climate control are paramount.</p>
                
                <h3 class="feature-heading">Comfort & Utility Features:</h3>
                <ul class="feature-list">
                    <li>Signature pop-up roof with heavy-duty gas shocks</li>
                    <li>Front-access hatch for versatile spotting opportunities</li>
                    <li>Premium roof padding and sound/thermal lining</li>
                    <li>Flexible seating: 4 full-recliners and 2 non-recliner seats</li>
                    <li>Integrated luggage rack systems for extended gear storage</li>
                    <li>Double side-steps for easy cabin entry and exit</li>
                </ul>
                <a href="{{ url('/contacts') }}" class="btn-plum">Build Your Expedition Rig</a>
            </div>
        </div>
    </section>

    <section id="accessories" class="service-detail bg-light">
        <div class="container flex-row">
            <div class="detail-image">
                <img src="{{ asset('images/masafa-3.jpg') }}" alt="Accessories & Electrical">
            </div>
            <div class="detail-info">
                <h2 class="detail-title">Accessories & Electrical</h2>
                <p class="detail-desc">Custom-fitted protection and power management systems. We ensure your Land Cruiser is equipped with the necessary tools to keep your electronics running and your bodywork protected.</p>
                
                <h3 class="feature-heading">Electrical & Exterior Add-ons:</h3>
                <ul class="feature-list">
                    <li>Professional-grade Inverter systems for 240V power</li>
                    <li>Strategically placed 4-socket charging stations</li>
                    <li>Heavy-duty Bullbar and front-end protection</li>
                    <li>Dual rear tyre carriers for long-range peace of mind</li>
                    <li>Integrated lighting systems and recovery mounting points</li>
                    <li>Customized tools compartments for organized field repairs</li>
                </ul>
                <a href="{{ url('/contacts') }}" class="btn-plum">Explore Accessories</a>
            </div>
        </div>
    </section>

    @include('components.cta')
@endsection