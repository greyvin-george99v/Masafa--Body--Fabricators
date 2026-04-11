@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<section class="gallery-hero-section">
    <div class="hero-overlay">
        <div class="container hero-content-wrapper">
            <h1 class="gallery-headline">Gallery</h1>
            <p class="gallery-subheadline">From reinforced chassis architecture to proprietary pop-up roof systems,</br> 
                explore the builds that define the modern safari standard.</p>
        </div>
    </div>
</section>

<section class="gallery-showcase">
    <div class="gallery-container">
        <div class="gallery-header">
            <h2 class="showcase-title">Project <span class="plum-italic">Showcase.</span></h2>
            <p class="showcase-desc">
                Browse through our gallery of Toyota Land Cruiser projects, including game viewer conversions and accessory installations.
            </p>
        </div>

        <div class="filter-bar">
            <button class="filter-pill active" data-filter="all">All</button>
            <button class="filter-pill" data-filter="game-viewers">Game Viewers</button>
            <button class="filter-pill" data-filter="conversions">Conversions</button>
            <button class="filter-pill" data-filter="projects">Projects</button>
        </div>

        <div class="showcase-grid">
            <img src="{{ asset('images/p-1 (1).jpg') }}" class="gallery-img game-viewers" alt="Masafa Project">
            <img src="{{ asset('images/p-1 (2).jpg') }}" class="gallery-img conversions" alt="Masafa Project">
            <img src="{{ asset('images/p-1 (3).jpg') }}" class="gallery-img projects" alt="Masafa Project">
            <img src="{{ asset('images/p-1 (4).jpg') }}" class="gallery-img game-viewers" alt="Masafa Project">
            <img src="{{ asset('images/p-1 (5).jpg') }}" class="gallery-img conversions" alt="Masafa Project">
            <img src="{{ asset('images/p-1 (6).jpg') }}" class="gallery-img projects" alt="Masafa Project">
        </div>
    </div>
</section>

<section class="visit-section">
    <div class="visit-container">
        <div class="visit-header">
            <span class="plum-label">Send Message</span>
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
                    <h3 class="card-title">Workshop Visit</h3>
                    <p class="card-text">Book a guided tour of our fabrication floor. See a build in progress. Meet the team. Understand the process before you commit.</p>
                </div>
            </div>

            <div class="visit-card">
                <div class="icon-box">
                    <i class="fa-solid fa-clipboard-list"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">Book a Consultation</h3>
                    <p class="card-text">Schedule a formal consultation with our engineering team. Bring your fleet requirements — we'll bring the solutions. In-person or via video call.</p>
                </div>
            </div>

            <div class="visit-card">
                <div class="icon-box">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div class="card-content">
                    <h3 class="card-title">48-Hour Response</h3>
                    <p class="card-text">Submit a quote request and receive a detailed engineering proposal within 48 business hours. Specification, timeline, and pricing — all in one document.</p>
                </div>
            </div>
        </div>
    </div>
</section>


 @endsection