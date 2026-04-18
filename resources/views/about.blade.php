@extends('layouts.app')

@section('title', 'About Masafa | Specialist Land Cruiser Conversions')

@section('content')
<section class="about-hero-section">
    <div class="hero-overlay">
        <div class="container hero-content-wrapper">
            <h1 class="about-headline">About Us</h1>
            <p class="about-subheadline">Redefining the Safari Engineering Standard</p>
        </div>
    </div>
</section>

<section class="mission-vision-section">
    <div class="mv-block">
        <div class="mv-content-box">
            <h2 class="block-title">Our Mission</h2>
            <p class="block-text">
                To engineer the ultimate safari machines through <br>
                precision craftsmanship, hand-welded structural integrity, <br>
                and an uncompromising commitment to the African wild.
            </p>
        </div>
    </div>

    <div class="mv-block divider-left">
        <div class="mv-content-box">
            <h2 class="block-title">Our Vision</h2>
            <p class="block-text">
                To be the definitive global benchmark for safari vehicle architecture, 
                where every Masafa conversion is recognized as a masterpiece of bespoke engineering.
            </p>
        </div>
    </div>
</section>

<section class="story-section reveal-on-scroll">
    <div class="story-container">
        <div class="story-col-img">
            <img src="{{ asset('images/about.jpg') }}" alt="Masafa Workshop - Precision Engineering">
        </div>
        <div class="story-col-text">
            <h2 class="story-heading">
                <span class="text-black">Our</span> 
                <span class="text-italic-plum">Story</span>
            </h2>
            <div class="story-copy">
                <p>Established in 2026 in Nairobi, Masafa was born from a decade of observation in the harshest environments of the African bush. We witnessed a recurring pattern: standard safari vehicles failing under pressure.</p>
                
                <p>These breakdowns were rarely mechanical; they were structural. Standard bodies, chassis extensions, and interior fittings simply weren't designed to withstand the relentless vibrations and skeletal stress of long-range off-road expeditions.</p>
                
                <p>We recognized that a safari vehicle is only as strong as its weakest weld. We set out to bridge the gap between basic fabrication and true automotive engineering, moving away from the "body shop" mentality to create a dedicated engineering house focused exclusively on the Toyota Land Cruiser platform.</p>
            </div>
        </div>
    </div>
</section>

<section class="people-section reveal-on-scroll">
    <div class="container">
        <div class="people-header">
            <span class="sub-label">The Masafa Standard</span>
            <h2 class="main-heading">
                Hand-Welded <br>
                <span class="peach-italic">Precision.</span>
            </h2>
            <p class="header-intro">
                Behind every build is a team of master fabricators with decades of field experience.<br>
                They don't just build vehicles; they engineer safety for when you are <br>
                300km from the nearest town and the terrain turns hostile.
            </p>
        </div>

        <div class="values-grid">
            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-hammer"></i></div>
                <h3 class="value-title">Bespoke Fabrication</h3>
                <p class="value-text">Every 6-seater extension and body panel is hand-welded using GI Zinc-coated sheets, ensuring a rust-free life cycle even in high-salinity or swampy terrains.</p>
            </div>
            
            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-route"></i></div>
                <h3 class="value-title">Field-Proven Design</h3>
                <p class="value-text">Our designs are born from the field. We understand where chassis stress occurs and reinforce those specific junctions before failure ever has a chance to start.</p>
            </div>

            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-microscope"></i></div>
                <h3 class="value-title">Zero-Tolerance Quality</h3>
                <p class="value-text">We set internal tolerance standards tighter than the industry norm. If a weld or a roof shock alignment doesn't meet our spec, it is redone. No exceptions.</p>
            </div>

            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-handshake-angle"></i></div>
                <h3 class="value-title">Lifecycle Partnership</h3>
                <p class="value-text">We don't just deliver and disappear. Masafa provides ongoing technical guidance and fleet maintenance support to ensure your ROI remains high for years.</p>
            </div>

            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-award"></i></div>
                <h3 class="value-title">Documented Compliance</h3>
                <p class="value-text">ISO 9001:2015 certified and fully NTSA compliant. Our documentation ensures your fleet meets all legal and safety requirements for commercial operation.</p>
            </div>

            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-shield-halved"></i></div>
                <h3 class="value-title">Structural Warranty</h3>
                <p class="value-text">We provide a comprehensive structural warranty on every conversion. We back our builds because we know exactly what they can withstand.</p>
            </div>
        </div>
    </div>
</section>

@include('components.cta')

@endsection