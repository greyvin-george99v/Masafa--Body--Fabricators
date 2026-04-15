@extends('layouts.app')

@section('title', 'Safari Vehicle Conversion Specialists')

@section('content')
    <section class="hero-section">

  <div class="hero-content">
    <h1 class="hero-title">
      Built for the <br>
      <span class="italic-brand">Wild.</span> Engineered <br>
      to Last.
    </h1>
    
    <p class="hero-description">
      East Africa's most trusted Toyota Land Cruiser conversion specialists.<br>
      From stripped chassis to fully-fitted safari fleet, every build is<br>
      engineered to dominate the terrain and outlast the journey.
    </p>

    <div class="hero-btns">
      <a href="{{ url('/services') }}" class="btn-primary">View Services</a>
      <a href="{{ url('/contacts') }}" class="btn-secondary">Request a Quote</a>
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
        <span class="sub-headline">Who We Are</span>
        <h2 class="section-title">
          Engineered <span class="italic-plum">for the wild.</span>
        </h2>
      </div>
      
      <p class="about-text">
        Masafa was founded in 2008 after watching standard safari vehicles fail repeatedly in the African bush. 
        Not because of engines — but because the bodies, chassis, and fittings were never engineered for 
        this terrain. We set out to change that.
      </p>

      <a href="{{ url('/about') }}" class="btn-story">OUR STORY</a>
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
                We don't build vehicles, we engineer experiences that operators trust with their reputation and their guests' lives.
            </p>

            <div class="eng-features">
                <div class="feature-item">
                    <span class="feature-num">01</span>
                    <div class="feature-text">
                        <h3>Chassis Reinforcement</h3>
                        <p>Precision-welded extension rails with gusset plating at all high-stress junctions. Rated for 3.5T GVW on corrugated terrain.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <span class="feature-num">02</span>
                    <div class="feature-text">
                        <h3>Steel Body Fabrication</h3>
                        <p>Full custom body built from 2mm cold-rolled steel. Every panel hand-fitted and seam-sealed before primer application.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <span class="feature-num">03</span>
                    <div class="feature-text">
                        <h3>Pop-Up Roof Mechanism</h3>
                        <p>Proprietary strut design with gas-assisted lift. Wind-rated to 80km/h when fully deployed. Tool-free operation.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <span class="feature-num">04</span>
                    <div class="feature-text">
                        <h3>Interior Fit-Out</h3>
                        <p>Marine-grade upholstery, integrated charging systems, and noise-dampening insulation throughout the cabin.</p>
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
        <span class="sub-headline">Our Conversions</span>
        <h2 class="section-title">Built for <span class="italic-plum">every terrain</span></h2>
      </div>
      <a href="#" class="view-services-link">
        View Services 
        <span class="arrow-icon">→</span>
      </a>
    </div>

    <div class="services-grid">
      
      <article class="service-card">
        <div class="card-image">
          <img src="{{ asset('images/masafa-1.jpg') }}" alt="Game Viewer Conversions">
        </div>
        <div class="card-body">
          <div class="card-content">
            <h3>Safari Body Conversions</h3>
            <p>Specialized 6-seater extensions built with corrosion-resistant GI zinc-coated sheets for longevity in harsh environments.</p>
          </div>
          <a href="{{ url('/services#game-viewer') }}" class="learn-more">
              Explore feau <span class="arrow-icon">→</span>
          </a>
        </div>
      </article>

      <article class="service-card">
        <div class="card-image">
          <img src="{{ asset('images/masafa-2.jpg') }}" alt="Land Cruiser Accessories">
        </div>
        <div class="card-body">
          <div class="card-content">
            <h3>Land Cruiser Accessories</h3>
            <p>Premium accessories to enhance your Toyota Land Cruiser's performance, comfort, and capability in any terrain.</p>
          </div>
          <a href="{{ url('/services#expedition') }}" class="learn-more">
              Learn More <span class="arrow-icon">→</span>
          </a>
        </div>
      </article>

      <article class="service-card">
        <div class="card-image">
          <img src="{{ asset('images/masafa-3.jpg') }}" alt="Maintenance & Repairs">
        </div>
        <div class="card-body">
          <div class="card-content">
            <h3>Maintenance & Repairs</h3>
            <p>Specialized maintenance and repair services for Toyota Land Cruisers, performed by experienced technicians.</p>
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
            <p>Understand your operation, terrain, <br/>and fleet requirements in detail.</p>
          </div>
        </div>

        <div class="process-step">
          <div class="step-circle">2</div>
          <div class="step-content">
            <h3>Design Brief</h3>
            <p>Custom specification sheet with full engineering drawings for approval.</p>
          </div>
        </div>

        <div class="process-step">
          <div class="step-circle">3</div>
          <div class="step-content">
            <h3>Fabrication</h3>
            <p>Chassis prep, body fabrication, and mechanical build under one roof.</p>
          </div>
        </div>

        <div class="process-step">
          <div class="step-circle">4</div>
          <div class="step-content">
            <h3>Quality Check</h3>
            <p>72-hour terrain simulation and full structural sign-off before dispatch.</p>
          </div>
        </div>

        <div class="process-step">
          <div class="step-circle">5</div>
          <div class="step-content">
            <h3>Delivery</h3>
            <p>Direct delivery or CKD export with full documentation and warranty.</p>
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
          time and date, excellent servic.e”
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
        Tell us about your operation and we'll put together a detailed conversion proposal.
      </p>
      
      <div class="benefit-pills">
        <div class="pill"><span class="dot"></span> 48HR Response</div>
        <div class="pill"><span class="dot"></span> No Obligation</div>
        <div class="pill"><span class="dot"></span> Confidential</div>
      </div>
    </div>

    <form class="contact-form">
      <div class="form-row">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" placeholder="Your Name" class="input-field active-field">
        </div>
        <div class="form-group">
          <label>Company</label>
          <input type="text" placeholder="Company/Operation" class="input-field">
        </div>
      </div>

      <div class="form-group">
        <label>E-mail</label>
        <input type="email" placeholder="E-mail address" class="input-field">
      </div>

      <div class="form-group">
        <label>Subject</label>
        <input type="text" class="input-field">
      </div>

      <div class="form-group">
        <label>Message</label>
        <textarea class="input-field message-area"></textarea>
      </div>

      <button type="submit" class="submit-btn">Submit Request</button>
    </form>

  </div>
</section>




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
    