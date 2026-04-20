@extends('layouts.app')

@section('title', 'Contacts | Masafa Specialist Land Cruiser Conversions')

@section('content')
<section class="gallery-hero-section">
    <div class="hero-overlay">
        <div class="container hero-content-wrapper">
            <h1 class="gallery-headline">CONTACTS</h1>
            <p class="gallery-subheadline">
                Consult with our Land Cruiser Specialists regarding your fleet requirements.
            </p>
        </div>
    </div>
</section>

<section class="contact-form-section reveal-on-scroll">
    <div class="contact-main-wrapper">
        
        <div class="contact-content-row">
            
            <div class="contact-form-column">
                <div class="section-header">
                    <span class="label-plum">SEND MESSAGE</span>
                    <h2 class="heading-black">Initialize your <span class="italic-plum">project.</span></h2>
                </div>

                @if(session('success'))
    <div style="background: #1a1a1a; color: #d4af37; padding: 15px; border: 1px solid #d4af37; margin-bottom: 20px; text-align: center; border-radius: 4px;">
        {{ session('success') }}
    </div>
@endif

<div class="masafa-form-section">
    {{-- Alerts - Styled to sit outside the form grid --}}
    @if(session('success'))
        <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb; font-family: sans-serif;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #f5c6cb; font-family: sans-serif;">
            {{ session('error') }}
        </div>
    @endif

    <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
        @csrf 
        
        {{-- IMPORTANT: Controller needs this field to pass validation --}}
        <input type="hidden" name="location" value="Homepage Inquiry">

        <div class="form-row" style="display: flex; gap: 20px; margin-bottom: 15px;">
            <div class="form-group" style="flex: 1;">
                <label>Full Name</label>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" class="input-field" required style="width: 100%;">
            </div>
            <div class="form-group" style="flex: 1;">
                <label>Company</label>
                <input type="text" name="company" value="{{ old('company') }}" placeholder="Company/Operation" class="input-field" style="width: 100%;">
            </div>
        </div>

        <div class="form-row" style="display: flex; gap: 20px; margin-bottom: 15px;">
            <div class="form-group" style="flex: 1;">
                <label>E-mail</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail address" class="input-field" required style="width: 100%;">
            </div>
            <div class="form-group" style="flex: 1;">
                <label>Phone Number</label>
                <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+254..." class="input-field" required style="width: 100%;">
            </div>
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label>Subject</label>
            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="e.g. Fleet Expansion" class="input-field" required style="width: 100%;">
        </div>

        <div class="form-group" style="margin-bottom: 20px;">
            <label>Message</label>
            <textarea name="message" placeholder="Describe your technical requirements..." class="input-field message-area" required style="width: 100%; min-height: 120px;">{{ old('message') }}</textarea>
        </div>

        <button type="submit" class="submit-btn" style="cursor: pointer;">Submit</button>
    </form>
</div>
            </div>

            <div class="contact-info-column">
                <div class="section-header">
                    <span class="label-plum">OUR DETAILS</span>
                    <h2 class="heading-black">Find <span class="italic-plum">us.</span></h2>
                </div>

                <div class="info-details-stack">
                    <div class="info-block">
                        <span class="info-label">Direct Line</span>
                        <p class="info-value">+254 721 519 537</p>
                        <p class="info-sub">Mon–Fri: 07:00–17:00 EAT<br>Saturday: 08:00–12:00 EAT</p>
                    </div>

                    <div class="info-block">
                        <span class="info-label">Engineering Inquiries</span>
                        <p class="info-value">info@masafabodyfabricators.com</p>
                    </div>

                    <div class="info-block">
                        <span class="info-label">Workshop Address</span>
                        <p class="info-value">Thindigua Kiambu Rd, Opposite<br>The Green Zone Apartments<br>Nairobi, Kenya</p>
                        <!--<p class="info-sub">Workshop inspections by appointment only</p>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.74837564619!2d36.8378!3d-1.2215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f170000000000%3A0x0!2zMcKwMTMnMTcuNCJTIDM2wrA1MCcxNi4xIkU!5e0!3m2!1sen!2ske!4v1710000000000!5m2!1sen!2ske" 
                width="100%" 
                height="500" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>

    </div>
</section>
@endsection