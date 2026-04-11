@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
<section class="contacts-hero-section">
        <div class="contacts-hero-content">
            <h1 class="contacts-title">CONTACTS</h1>
            <p class="contacts-subtitle">
                Get in touch with our Land Cruiser Specialists </p>
        </div>
    </section>
    
    <section class="contact-form-section">
    <div class="contact-main-wrapper">
        
        <div class="contact-content-row">
            
            <div class="contact-form-column">
                <div class="section-header">
                    <span class="label-plum">SEND MESSAGE</span>
                    <h2 class="heading-black">Tell us what <span class="italic-plum">you need.</span></h2>
                </div>

                <form action="#" class="masafa-contact-form">
                    <div class="form-grid">
                        <div class="input-group">
                            <label>Full Name</label>
                            <input type="text" placeholder="Your Name">
                        </div>
                        <div class="input-group">
                            <label>Company</label>
                            <input type="text" placeholder="Company/Operation">
                        </div>
                        <div class="input-group">
                            <label>E-mail</label>
                            <input type="email" placeholder="E-mail address">
                        </div>
                        <div class="input-group">
                            <label>Phone Number</label>
                            <input type="text" placeholder="+254 700 000 00">
                        </div>
                    </div>

                    <div class="input-group full-width">
                        <label>Country / Location</label>
                        <input type="text" placeholder="Where is your operation based?">
                    </div>

                    <div class="input-group full-width">
                        <label>Subject</label>
                        <input type="text">
                    </div>

                    <div class="input-group full-width">
                        <label>Message</label>
                        <textarea rows="5"></textarea>
                    </div>

                    <button type="submit" class="masafa-submit-btn">Submit Request</button>
                </form>
            </div>

            <div class="contact-info-column">
                <div class="section-header">
                    <span class="label-plum">OUR DETAILS</span>
                    <h2 class="heading-black">Find <span class="italic-plum">us.</span></h2>
                </div>

                <div class="info-details-stack">
                    <div class="info-block">
                        <span class="info-label">Phone</span>
                        <p class="info-value">+254 721 519 537</p>
                        <p class="info-sub">Mon–Fri: 07:00–17:00 EAT<br>Saturday: 8:00–12:00<br>Sunday: Closed</p>
                    </div>

                    <div class="info-block">
                        <span class="info-label">Email</span>
                        <p class="info-value">info@masafabodyfabri.co.ke</p>
                        <p class="info-sub">Mon–Fri: 07:00–17:00 EAT<br>Saturday: 8:00–12:00<br>Sunday: Closed</p>
                    </div>

                    <div class="info-block">
                        <span class="info-label">Workshop Address</span>
                        <p class="info-value">Thindigua Kiambu Rd, Opposite<br>The Green Zone Apartments<br>Nairobi, Kenya</p>
                        <p class="info-sub">Workshop visits by appointment</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-map-container">
             <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.946327045353!2d36.8378516!3d-1.2057914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3fb8f3956425%3A0x633d2627e7f9f38c!2sThe%20Green%20Zone%20Apartments!5e0!3m2!1sen!2ske!4v1712650000000!5m2!1sen!2ske" 
                width="1200" 
                height="500" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>

    </div>
</section>

@endsection