<?php get_header(); ?>

<main id="primary" class="site-main front-page">

    <!-- Section 1: Hero -->
    <section id="hero" class="hero-section full-height">
        <div class="video-background">
            <!-- Replace with actual video URL if available -->
            <div class="video-overlay"></div>
            <video autoplay muted loop playsinline id="hero-video">
                <source src="https://assets.mixkit.co/videos/preview/mixkit-concert-crowd-in-a-dark-room-with-blue-lights-4007-large.mp4" type="video/mp4">
            </video>
        </div>
        <div class="hero-content" data-aos="fade-up">
            <h1 class="dj-name">dj3sva</h1>
            <p class="tagline">ELECTRONIC MUSIC & DARK VIBES</p>
            <a href="#music" class="cta-button">LISTEN NOW</a>
        </div>
        <div class="scroll-indicator">
            <span>SCROLL</span>
        </div>
    </section>

    <!-- Section 2: About Me -->
    <section id="about" class="about-section section-padding">
        <div class="container">
            <div class="about-grid">
                <div class="about-image" data-aos="fade-right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile.png" alt="dj3sva profile">
                </div>
                <div class="about-text" data-aos="fade-left">
                    <h2 class="section-title">BIOGRAPHY</h2>
                    <p class="bio">DJ dj3sva is a rising force in the underground electronic scene. With a focus on minimalist techno and atmospheric house, his sets are designed to take the audience on a cinematic journey.</p>
                    <p class="trajectory">Starting from local warehouses to international stages, his trajectory is marked by a deep understanding of rhythm and a unique aesthetic approach to sound.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Music / Sets -->
    <section id="music" class="music-section section-padding">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">LATEST SETS</h2>
            <div class="music-grid">
                <div class="music-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="embed-container">
                        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/123456789&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                    </div>
                    <h3>SUMMER VIBES 2024</h3>
                </div>
                <div class="music-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="embed-container">
                        <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/123456789&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                    </div>
                    <h3>DARK TECHNO MIX</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Events -->
    <section id="events" class="events-section section-padding">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">UPCOMING EVENTS</h2>
            <div class="events-list">
                <div class="event-row" data-aos="fade-up">
                    <div class="event-date">MAY 15, 2026</div>
                    <div class="event-venue">WAREHOUSE PROJECT</div>
                    <div class="event-location">SANTIAGO, CHILE</div>
                    <div class="event-cta"><a href="#" class="ticket-btn">TICKETS</a></div>
                </div>
                <div class="event-row" data-aos="fade-up">
                    <div class="event-date">JUN 02, 2026</div>
                    <div class="event-venue">CLUB UNDERGROUND</div>
                    <div class="event-location">VALPARAISO, CHILE</div>
                    <div class="event-cta"><a href="#" class="ticket-btn">TICKETS</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Gallery -->
    <section id="gallery" class="gallery-section section-padding">
        <div class="container-fluid">
            <h2 class="section-title text-center" data-aos="fade-up">GALLERY</h2>
            <div class="gallery-grid">
                <div class="gallery-item" data-aos="zoom-in"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/performance-1.png" alt="Live show 1"></div>
                <div class="gallery-item" data-aos="zoom-in"><img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?auto=format&fit=crop&q=80&w=800" alt="Live show 2"></div>
                <div class="gallery-item" data-aos="zoom-in"><img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?auto=format&fit=crop&q=80&w=800" alt="Live show 3"></div>
                <div class="gallery-item" data-aos="zoom-in"><img src="https://images.unsplash.com/photo-1459749411177-042180ce673c?auto=format&fit=crop&q=80&w=800" alt="Live show 4"></div>
            </div>
        </div>
    </section>

    <!-- Section 6: Contact -->
    <section id="contact" class="contact-section section-padding">
        <div class="container">
            <h2 class="section-title text-center" data-aos="fade-up">GET IN TOUCH</h2>
            <div class="contact-wrapper">
                <div class="contact-info" data-aos="fade-right">
                    <h3>BOOKING & ENQUIRIES</h3>
                    <p>For booking and collaboration requests, please use the form or email us directly.</p>
                    <p class="email">booking@dj3sva.cl</p>
                </div>
                <div class="contact-form-container" data-aos="fade-left">
                    <form id="minimal-contact-form">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="NAME" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="EMAIL" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="MESSAGE" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="submit-btn">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
