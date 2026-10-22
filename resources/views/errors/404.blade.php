@extends('layouts.app')

@section('title', 'Page Not Found | Masafa Body Fabricators')

@section('content')
<section class="error-section">
    <div class="error-container">

        <div class="error-code-wrap">
            <span class="error-code">404</span>
        </div>

        <div class="error-content">
            <p class="error-label">Error 404</p>
            <h1 class="error-title">Off the Beaten Track</h1>
            <p class="error-text">
                The page you're looking for doesn't exist or has moved.
                Let's get you back on the road.
            </p>

            <div class="error-actions">
                <a href="{{ url('/') }}" class="error-btn error-btn-primary">Back to Home</a>
                <a href="{{ url('/contacts') }}" class="error-btn error-btn-outline">Request a Quote</a>
            </div>
        </div>

        <div class="error-links">
            <span class="error-links-title">Or visit:</span>
            <a href="{{ url('/services') }}">Services</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/gallery') }}">Gallery</a>
            <a href="{{ url('/contacts') }}">Contacts</a>
        </div>

    </div>
</section>
@endsection