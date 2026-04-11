@extends('layouts.app')

@section('title', 'About Masafa | Specialist Land Cruiser Conversions')

@section('content')
 <section class="about-hero-section">
    <div class="hero-overlay">
        <div class="container hero-content-wrapper">
            <h1 class="about-headline">About Us</h1>
            <p class="about-subheadline">Redefining the Safari Standard</p>
        </div>
    </div>
</section>

<section class="mission-vision-section">
    <div class="mv-block">
        <div class="mv-content-box">
            <h2 class="block-title">Our Mission</h2>
            <p class="block-text">
                To engineer the ultimate safari machines through <br>
                precision craftsmanship, hand-welded integrity, <br>
                and an uncompromising commitment to the African wild.
            </p>
        </div>
    </div>

    <div class="mv-block divider-left">
        <div class="mv-content-box">
            <h2 class="block-title">Our Vision</h2>
            <p class="block-text">
                To be the definitive global benchmark for safari vehicle architecture, 
                where every Masafa build is recognized as a masterpiece of bespoke craftsmanship.
            </p>
        </div>
    </div>
</section>


<section class="story-section">
    <div class="story-container">
        <div class="story-col-img">
            <img src="{{ asset('images/about.jpg') }}" alt="Masafa Workshop">
        </div>
        <div class="story-col-text">
            <h2 class="story-heading">
                <span class="text-black">Our</span> 
                <span class="text-italic-plum">Story</span>
            </h2>
            <div class="story-copy">
                <p>Masafa was established in 2008 in Nairobi, Kenya, born from a decade of observation in the harshest environments of the African bush. At the time, the industry was witnessing a recurring pattern of failure among standard safari vehicles.</p>
                <p>These breakdowns were rarely a result of engine or mechanical neglect; instead, they were structural. The standard bodies, chassis extensions, and interior fittings of the era simply were not engineered to withstand the relentless vibrations and skeletal stress of off-road expeditions.</p>
                <p>We recognized that a safari vehicle is only as strong as its weakest weld. We set out to bridge the gap between basic fabrication and true automotive engineering, moving away from the "body shop" mentality to create a dedicated engineering house.</p>
            </div>
        </div>
    </div>
</section>

<section class="people-section">
    <div class="container">
        <div class="people-header">
            <span class="sub-label">Our People</span>
            <h2 class="main-heading">
                Hand-Welded <br>
                <span class="peach-italic">Precision.</span>
            </h2>
            <p class="header-intro">
                Behind every Masafa build is a team of master fabricators with decades of combined field experience.<br>
                They don't just build vehicles, they understand what happens when those vehicles<br>
                are 300km from the nearest town and the terrain turns hostile.
            </p>
        </div>

        <div class="values-grid">
            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-hammer"></i></div>
                <h3 class="value-title">Hand-Welded Precision</h3>
                <p class="value-text">To engineer the ultimate safari machines through precision craftsmanship, hand-welded integrity, and an uncompromising commitment to the African wild.</p>
            </div>
            
            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-route"></i></div>
                <h3 class="value-title">Field-Tested Knowledge</h3>
                <p class="value-text">Our senior fabricators have each spent years in the field — understanding first-hand where vehicles fail, what the terrain demands, and how to build for it before problems occur.</p>
            </div>

            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-microscope"></i></div>
                <h3 class="value-title">No-Compromise Standards</h3>
                <p class="value-text">We set our own tolerance standards — tighter than the industry norm. If a component or a weld doesn't meet our internal spec, it is redone. Every time. No exceptions.</p>
            </div>

            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-handshake-angle"></i></div>
                <h3 class="value-title">Operator Partnership</h3>
                <p class="value-text">We don't disappear after delivery. Our team remains available for questions, adjustments, and service guidance for the full life of the vehicle.</p>
            </div>

            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-award"></i></div>
                <h3 class="value-title">Certified Excellence</h3>
                <p class="value-text">ISO 9001:2015 certified. Toyota Authorised Modifier. NTSA compliant on every build. Our certifications reflect a commitment to documented, repeatable quality.</p>
            </div>

            <div class="value-card">
                <div class="icon-box"><i class="fa-solid fa-shield-halved"></i></div>
                <h3 class="value-title">Structural Warranty</h3>
                <p class="value-text">Five-year structural warranty on every conversion. We back every build because we know exactly what went into it and exactly what it can withstand.</p>
            </div>
        </div>
    </div>
</section>

@include('components.cta')

@endsection