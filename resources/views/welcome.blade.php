@extends('layouts.app')

@section('title', 'Safari Vehicle Conversion Specialists')

@section('content')
<section class="hero-section">
    <div class="hero-bg-wrapper">
        <div class="hero-slide" style="background-image: linear-gradient(226deg, rgba(0, 0, 0, 0.8) 0%, rgba(39, 39, 39, 0.8) 100%), url('{{ asset('images/hero.jpg') }}');"></div>
        <div class="hero-slide" style="background-image: linear-gradient(226deg, rgba(0, 0, 0, 0.8) 0%, rgba(39, 39, 39, 0.8) 100%), url('{{ asset('images/49.jpg') }}');"></div>
        <div class="hero-slide" style="background-image: linear-gradient(226deg, rgba(0, 0, 0, 0.8) 0%, rgba(39, 39, 39, 0.8) 100%), url('{{ asset('images/p-1 (2).jpg') }}');"></div>    
    </div>

    <div class="hero-content">
        <h1 class="hero-title">
            Built for the <br>
            <span class="italic-brand">Wild.</span> Engineered <br>
            to Last.
        </h1>
        
        <p class="hero-description">
            East Africa's most trusted Toyota Land Cruiser conversion specialists.<br>
            From stripped chassis to fully-fitted safari fleets, every build is<br>
            engineered to dominate the terrain and outlast the journey.
        </p>

        <div class="hero-btns">
            <a href="{{ url('/services') }}" class="btn-primary">View Services</a>
            <a href="{{ url('/contacts') }}" class="btn-secondary">Request a Quote</a>
        </div>
    </div>
</section>

<section class="fleet-scroll-section">
    <div class="fleet-container">
        <h2 class="fleet-title">Featured Fleet Solutions</h2>
        
        <div class="fleet-slider">
            <div class="fleet-track">
                <img src="{{ asset('images/9.jpg') }}"  alt="Masafa Build 4">
                <img src="{{ asset('images/9.jpg') }}" alt="Masafa Build 1">
                <img src="{{ asset('images/15.jpg') }}"  alt="Masafa Build 2">
                <img src="{{ asset('images/13.jpg') }}"  alt="Masafa Build 3">
                <img src="{{ asset('images/10.jpg') }}"  alt="Masafa Build 4">
                <img src="{{ asset('images/12.jpg') }}"  alt="Masafa Build 1">
                <img src="{{ asset('images/11.jpg') }}"  alt="Masafa Build 2">
                <img src="{{ asset('images/14.jpg') }}"  alt="Masafa Build 3">
                <img src="{{ asset('images/9.jpg') }}"  alt="Masafa Build 4">
                <img src="{{ asset('images/15.jpg') }}"  alt="Masafa Build 2">
                <img src="{{ asset('images/10.jpg') }}"  alt="Masafa Build 4">
                <img src="{{ asset('images/12.jpg') }}"  alt="Masafa Build 1">
            </div>
        </div>
    </div>
</section>

<section class="about-section reveal-on-scroll">
    <div class="about-container">
        <div class="about-image">
            <img src="{{ asset('images/about.jpg') }}" alt="Custom Land Cruiser conversion in the bush">
        </div>

        <div class="about-content">
            <div class="section-header">
                <span class="sub-headline" style="color: #000000;">Who We Are</span>
                <h2 class="section-title">
                    Engineering for Africa’s<span class="italic-plum">Toughest Expeditions.</span>
                </h2>
            </div>
            
            <p class="about-text">
                Since 2016, Masafa has been the silent backbone of East African tourism.
                We don’t just build bodies; we re-engineer the Toyota Land Cruiser
                70-Series to withstand the relentless demands of the African bush.
            </p>

            <a href="{{ url('/about') }}" class="btn-story">Learn More</a>
        </div>
    </div>
</section>

<section class="engineering-section reveal-on-scroll">
    <div class="engineering-container">
        <div class="eng-image-wrapper">
            <img src="{{ asset('images/engineering.jpg') }}" alt="Land Cruiser Body Fabrication">
        </div>

        <div class="eng-content-stack">
            <div class="eng-header">
                <span class="eng-label">The Engineering</span>
                <h2 class="eng-title">
                    Where <span class="italic-peach">Raw Steel</span><br>
                    Meets Precision.
                </h2>
            </div>

            <p class="eng-description">
                Every vehicle that leaves our workshop carries the full weight of 15 years of safari engineering expertise. 
                We don't just build vehicles; we engineer experiences that operators trust with their reputation and their guests' lives.
            </p>

            <div class="eng-features">
                <div class="feature-item">
                    <span class="feature-num">01</span>
                    <div class="feature-text">
                        <h3>Chassis & Body Extensions</h3>
                        <p>Specialized 6-seater extensions utilizing GI zinc-coated steel sheets for maximum corrosion resistance and structural integrity in harsh environments.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <span class="feature-num">02</span>
                    <div class="feature-text">
                        <h3>Pop-Up Roof Engineering</h3>
                        <p>Signature roof designs featuring heavy-duty gas shocks for effortless operation and front-access hatches for panoramic wildlife viewing.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <span class="feature-num">03</span>
                    <div class="feature-text">
                        <h3>Off-Grid Electricals</h3>
                        <p>Advanced power management including professional inverter systems and multi-socket charging stations integrated seamlessly into the cabin.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <span class="feature-num">04</span>
                    <div class="feature-text">
                        <h3>Interior Fit-Out</h3>
                        <p>Ergonomic cabin design with recliner seating options, thermal roof padding, and industrial-grade noise-dampening insulation.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="conversions-section reveal-on-scroll">
    <div class="conversions-container">
        <div class="conversions-header">
            <div class="header-text">
                <span class="sub-headline" style="color: #000000;">Our Conversions</span>
                <h2 class="section-title">Built for <span class="italic-plum">every terrain</span></h2>
            </div>
            <a href="{{ url('/services') }}" class="view-services-link">
                View All Services 
                <span class="arrow-icon">→</span>
            </a>
        </div>

        <div class="services-grid">
            <article class="service-card">
                <div class="card-image">
                    <img src="{{ asset('images/masafa-1.jpg') }}" alt="Safari Body Conversions">
                </div>
                <div class="card-body">
                    <div class="card-content">
                        <h3>Safari Body Conversions</h3>
                        <p>Specialized 6-seater extensions and elevated windscreens built with high-grade zinc-coated sheets for unmatched durability.</p>
                    </div>
                    <a href="{{ url('/services#safari-conversions') }}" class="learn-more">
                        Explore Features <span class="arrow-icon">→</span>
                    </a>
                </div>
            </article>

            <article class="service-card">
                <div class="card-image">
                    <img src="{{ asset('images/masafa-2.jpg') }}" alt="Expedition Outfitting">
                </div>
                <div class="card-body">
                    <div class="card-content">
                        <h3>Expedition Outfitting</h3>
                        <p>Complete overlanding setups including pop-up roofs, reinforced luggage racks, and dual rear tyre carriers for long-range travel.</p>
                    </div>
                    <a href="{{ url('/services#expedition') }}" class="learn-more">
                        Learn More <span class="arrow-icon">→</span>
                    </a>
                </div>
            </article>

            <article class="service-card">
                <div class="card-image">
                    <img src="{{ asset('images/masafa-3.jpg') }}" alt="Accessories & Repairs">
                </div>
                <div class="card-body">
                    <div class="card-content">
                        <h3>Maintenance & Accessories</h3>
                        <p>From heavy-duty bullbars and winches to specialized suspension upgrades and routine Land Cruiser maintenance.</p>
                    </div>
                    <a href="{{ url('/services#accessories') }}" class="learn-more">
                        Learn More <span class="arrow-icon">→</span>
                    </a>
                </div>
            </article>
        </div>
    </div>
</section>

<hr class="section-divider">

<section class="process-section reveal-on-scroll">
  <div class="process-container">
    
    <div class="process-header">
      <span class="sub-headline plum">How we work</span>
      <h2 class="section-title">
        From <span class="italic-plum">Order</span> to Expedition
      </h2>
    </div>

    <div class="timeline-wrapper">
      <div class="timeline-line"></div>
      
      <div class="steps-container">
        <div class="process-step">
          <div class="step-circle">1</div>
          <div class="step-content">
            <h3>Consultation</h3>
            <p>Assess your fleet needs, from seating <br/>requirements to terrain specifics.</p>
          </div>
        </div>

        <div class="process-step">
          <div class="step-circle">2</div>
          <div class="step-content">
            <h3>Design Brief</h3>
            <p>Drafting the build specs including electrical <br/>load and body configurations.</p>
          </div>
        </div>

        <div class="process-step">
          <div class="step-circle">3</div>
          <div class="step-content">
            <h3>Fabrication</h3>
            <p>Body extensions and steelwork using <br/>precision-cut zinc-coated sheets.</p>
          </div>
        </div>

        <div class="process-step">
          <div class="step-circle">4</div>
          <div class="step-content">
            <h3>Interior Fit-Out</h3>
            <p>Installing gas-shock roofs, upholstery, <br/>and custom inverter power systems.</p>
          </div>
        </div>

        <div class="process-step">
          <div class="step-circle">5</div>
          <div class="step-content">
            <h3>Delivery</h3>
            <p>Final inspection and dispatch of your <br/>battle-ready safari vehicle.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonial-section reveal-on-scroll">
    <div class="testimonial-container">
        <div class="testimonial-slider">
            <div class="testimonial-content active">
                <blockquote class="quote-text">
                    “Everything done at masafa body fabrication is up to<br>
                    <span class="highlight-peach">total satisfaction</span> and above all the work is done in exact<br>
                    time and date, excellent service.”
                </blockquote>
                <div class="client-profile">
                    <div class="client-avatar"><span>A</span></div>
                    <div class="client-details">
                        <p class="client-name">Antony Mureithi</p>
                        <p class="client-meta">Client - Kenya</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-content">
                <blockquote class="quote-text">
                    “The engineering precision on our <span class="highlight-peach">custom safari fleet</span> was 
                    outstanding. Masafa is truly the leader in vehicle conversions.”
                </blockquote>
                <div class="client-profile">
                    <div class="client-avatar"><span>S</span></div>
                    <div class="client-details">
                        <p class="client-name">Samuel Okoth</p>
                        <p class="client-meta">Tour Operator - Tanzania</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-content">
                <blockquote class="quote-text">
                    “Professional service from start to finish. The <span class="highlight-peach">build quality</span> 
                    exceeded our expectations for rugged terrain use.”
                </blockquote>
                <div class="client-profile">
                    <div class="client-avatar"><span>J</span></div>
                    <div class="client-details">
                        <p class="client-name">Jane Mwangi</p>
                        <p class="client-meta">Logistics Manager - Kenya</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-controls">
            <button class="control-btn prev" aria-label="Previous">←</button>
            <button class="control-btn next" aria-label="Next">→</button>
        </div>

        <div class="quote-decoration"></div>
    </div>
</section>

<section class="contact-section reveal-on-scroll">
    <div class="contact-container">
        <div class="contact-info">
            <div class="contact-header">
                <span class="sub-headline plum">Start Your Build</span>
                <h2 class="section-title">
                    Ready to build <br>your <span class="italic-plum">fleet?</span>
                </h2>
            </div>
            <p class="contact-description">
                Share your mission requirements with our engineering team, and we’ll draft a technical proposal tailored for your terrain.
            </p>
            
            <div class="benefit-pills">
                <div class="pill"><span class="dot"></span> 48HR Response</div>
                <div class="pill"><span class="dot"></span> No-Obligation</div>
                <div class="pill"><span class="dot"></span> Fleet-Ready Pricing</div>
            </div>
        </div>

        <div class="contact-form-wrapper">
            <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                @csrf 
                
                {{-- Move Alerts INSIDE the form so they align with the inputs --}}
                @if(session('success'))
                    <div class="alert alert-success" style="color: #155724; background-color: #d4edda; border: 1px solid #c3e6cb; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-weight: 600; font-family: sans-serif; font-size: 14px; text-align: center;">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger" style="color: #721c24; background-color: #f8d7da; border: 1px solid #f5c6cb; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-weight: 600; font-family: sans-serif; font-size: 14px; text-align: center;">
                        {{ session('error') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-warning" style="color: #856404; background-color: #fff3cd; border: 1px solid #ffeeba; padding: 15px; border-radius: 5px; margin-bottom: 20px; font-family: sans-serif; font-size: 13px;">
                        <ul style="margin: 0; padding-left: 15px;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                {{-- Hidden location field for the Controller --}}
                <input type="hidden" name="location" value="Homepage Inquiry">

                <div class="form-row">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" class="input-field" required>
                    </div>
                    <div class="form-group">
                        <label>Company</label>
                        <input type="text" name="company" value="{{ old('company') }}" placeholder="Company/Operation" class="input-field">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail address" class="input-field" required>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="e.g. +254..." class="input-field" required>
                    </div>
                </div>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name="subject" value="{{ old('subject') }}" placeholder="e.g. Fleet Expansion or Custom Expedition Build" class="input-field" required>
                </div>

                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" placeholder="Describe your terrain challenges or specific seating and power needs..." class="input-field message-area" required>{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
    </div>
</section>

<a href="https://api.whatsapp.com/send?phone=254721519537&text=Hello%20Masafa!%20🇰🇪%0AI%20would%20like%20to%20discuss%20a%20custom%20Land%20Cruiser%20build.%20Do%20you%20have%20slots%20available%20for%20a%20new%20conversion?" 
   class="whatsapp-float" 
   target="_blank" 
   rel="noopener noreferrer">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="whatsapp-icon">
    <span class="whatsapp-text">Chat with us</span>
</a>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const slides = document.querySelectorAll('.testimonial-content');
        const nextBtn = document.querySelector('.control-btn.next');
        const prevBtn = document.querySelector('.control-btn.prev');
        let currentIndex = 0;

        function showSlide(index) {
            slides[currentIndex].classList.remove('active');
            currentIndex = (index + slides.length) % slides.length;
            slides[currentIndex].classList.add('active');
        }

        if(nextBtn && prevBtn) {
            nextBtn.addEventListener('click', () => showSlide(currentIndex + 1));
            prevBtn.addEventListener('click', () => showSlide(currentIndex - 1));
        }
    });
</script>
@endpush