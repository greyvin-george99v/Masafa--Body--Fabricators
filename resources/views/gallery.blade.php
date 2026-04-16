@extends('layouts.app')

@section('title', 'Gallery | Masafa Safari Vehicle Architecture')

@section('content')
<section class="gallery-hero-section">
    <div class="hero-overlay">
        <div class="container hero-content-wrapper">
            <h1 class="gallery-headline">Gallery</h1>
            <p class="gallery-subheadline">
                From reinforced chassis architecture to proprietary pop-up roof systems,<br> 
                explore the builds that define the modern safari standard.
            </p>
        </div>
    </div>
</section>

<section class="gallery-showcase reveal-on-scroll">
    <div class="gallery-container">
        <div class="gallery-header">
            <h2 class="showcase-title">Project <span class="plum-italic">Showcase.</span></h2>
            <p class="showcase-desc">
                A technical record of our bespoke Land Cruiser engineering—ranging from full-body game viewer conversions to heavy-duty structural reinforcements.
            </p>
        </div>

        <div class="filter-bar">
            <button class="filter-pill active" data-filter="all">All Builds</button>
            <button class="filter-pill" data-filter="game-viewers">Game Viewers</button>
            <button class="filter-pill" data-filter="conversions">Chassis Conversions</button>
            <button class="filter-pill" data-filter="projects">Special Projects</button>
        </div>

        <div class="showcase-grid">
            <img src="{{ asset('images/p-1 (1).jpg') }}" class="gallery-img game-viewers" alt="Masafa Game Viewer Conversion">
            <img src="{{ asset('images/p-1 (2).jpg') }}" class="gallery-img conversions" alt="Structural Chassis Extension">
            <img src="{{ asset('images/p-1 (3).jpg') }}" class="gallery-img projects" alt="Custom Safari Expedition Rig">
            <img src="{{ asset('images/p-1 (4).jpg') }}" class="gallery-img game-viewers" alt="Toyota Land Cruiser Modification">
            <img src="{{ asset('images/p-1 (5).jpg') }}" class="gallery-img conversions" alt="Proprietary Pop-up Roof System">
            <img src="{{ asset('images/p-1 (6).jpg') }}" class="gallery-img projects" alt="Heavy Duty Safari Build">
        </div>
    </div>
</section>

<section class="visit-section reveal-on-scroll">
    <div class="visit-container">
        <div class="visit-header">
            <span class="plum-label">Engineering Transparency</span>
            <h2 class="visit-heading">
                Come and see us <span class="plum-italic">build.</span>
            </h2>
        </div>

        <div class="visit-grid">
            <div class="visit-card">
                <div class="icon-box">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Workshop Inspection</h3>
                    <p class="card-text">We invite fleet operators to our Nairobi facility for a transparent look at our fabrication floor. See our "zero-tolerance" welding process firsthand.</p>
                </div>
            </div>

            <div class="visit-card">
                <div class="icon-box">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Technical Consultation</h3>
                    <p class="card-text">Map out your fleet requirements with our design leads. We provide in-person or virtual briefings on vehicle stability, safety, and weight distribution.</p>
                </div>
            </div>

            <div class="visit-card">
                <div class="icon-box">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">48-Hour Response</h3>
                    <p class="card-text">Our engineering house operates with precision. All quote requests receive a detailed technical brief and production timeline within 48 business hours.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection