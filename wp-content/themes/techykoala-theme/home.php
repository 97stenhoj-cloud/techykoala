<?php
/**
 * The main template file - Homepage
 *
 * @package TechyKoala
 */

get_header(); ?>

<main class="site-main">
    
    <!-- Hero Section -->
    <section class="hero" style="min-height: 90vh;">
        <div class="container">
            <div class="hero-content">
                <div style="font-size: 6rem; margin-bottom: 30px; animation: float 3s ease-in-out infinite;">🐨</div>
                <h1 style="font-size: clamp(3rem, 6vw, 5rem);">Building Connections<br>That Matter</h1>
                <p style="font-size: 1.4rem; max-width: 700px; margin: 0 auto 50px;">We create cozy digital experiences that bring people together. Technology should feel warm, friendly, and deeply human.</p>
                <div class="hero-buttons">
                    <a href="/connect" class="btn btn-primary" style="font-size: 1.2rem; padding: 20px 45px;">Explore Connect App ✨</a>
                    <a href="#story" class="btn btn-secondary" style="font-size: 1.2rem; padding: 20px 45px;">Our Story</a>
                </div>
                <div style="margin-top: 60px; opacity: 0.6; font-size: 0.9rem;">
                    <p>Trusted by thousands of users worldwide 🌍</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section id="story" class="section" style="background: rgba(255, 255, 255, 0.4);">
        <div class="container">
            <div class="grid grid-2" style="align-items: center; gap: 60px;">
                <div>
                    <h2 style="margin-bottom: 30px;">We Believe in the Power of Connection 💜</h2>
                    <p style="font-size: 1.2rem; line-height: 1.8; margin-bottom: 20px;">
                        In a world of endless notifications and algorithmic feeds, we're building something different. 
                        Something that puts people first. Something that feels like home.
                    </p>
                    <p style="font-size: 1.2rem; line-height: 1.8; margin-bottom: 30px;">
                        TechyKoala started with a simple question: <em>What if technology could feel cozy?</em> 
                        What if our apps could be as warm and welcoming as a conversation with a good friend?
                    </p>
                    <a href="#mission" class="btn btn-secondary">Learn More About Our Mission</a>
                </div>
                <div class="card" style="background: linear-gradient(135deg, var(--primary-purple), var(--primary-pink)); padding: 80px 60px; text-align: center; color: white;">
                    <div style="font-size: 4rem; margin-bottom: 20px;">🌟</div>
                    <h3 style="color: white; font-size: 2rem; margin-bottom: 15px;">Our Impact</h3>
                    <div style="font-size: 3rem; font-weight: 800; margin-bottom: 10px;">10k+</div>
                    <p style="font-size: 1.2rem; color: rgba(255,255,255,0.9);">Active users building meaningful connections every day</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Product -->
    <section class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 60px;">
                <span style="display: inline-block; background: linear-gradient(135deg, var(--primary-pink), var(--accent-peach)); color: white; padding: 8px 20px; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 20px;">
                    OUR FLAGSHIP PRODUCT
                </span>
                <h2 style="font-size: clamp(2.5rem, 5vw, 4rem);">Meet Connect</h2>
                <p style="font-size: 1.3rem; color: var(--text-primary); max-width: 700px; margin: 20px auto 0;">
                    The app that makes staying in touch feel effortless
                </p>
            </div>
            
            <div class="grid grid-2" style="gap: 40px; align-items: center;">
                <div class="card" style="background: linear-gradient(135deg, #fef3c7, #fed7aa); padding: 60px 40px; text-align: center; min-height: 400px; display: flex; align-items: center; justify-content: center;">
                    <div>
                        <div style="font-size: 8rem; margin-bottom: 20px;">📱</div>
                        <p style="font-size: 1.1rem; color: var(--text-dark); font-weight: 600;">Beautiful. Simple. Yours.</p>
                    </div>
                </div>
                
                <div>
                    <div style="margin-bottom: 30px;">
                        <div style="font-size: 2.5rem; margin-bottom: 10px;">✨</div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Cozy Design</h3>
                        <p style="font-size: 1.1rem; line-height: 1.7;">Soft gradients, smooth animations, and an interface that feels like home.</p>
                    </div>
                    
                    <div style="margin-bottom: 30px;">
                        <div style="font-size: 2.5rem; margin-bottom: 10px;">⚡</div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Lightning Fast</h3>
                        <p style="font-size: 1.1rem; line-height: 1.7;">Connect in seconds. No complicated setup, no learning curve.</p>
                    </div>
                    
                    <div style="margin-bottom: 30px;">
                        <div style="font-size: 2.5rem; margin-bottom: 10px;">🔒</div>
                        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Privacy First</h3>
                        <p style="font-size: 1.1rem; line-height: 1.7;">Your conversations are yours. No ads, no data selling. Period.</p>
                    </div>
                    
                    <a href="/connect" class="btn btn-primary" style="margin-top: 20px;">Explore Connect →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section id="mission" class="section" style="background: rgba(255, 255, 255, 0.3);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px; font-size: clamp(2.5rem, 5vw, 3.5rem);">What Drives Us</h2>
            <div class="grid grid-2">
                <div class="card" style="padding: 50px;">
                    <div style="font-size: 3.5rem; margin-bottom: 20px;">🎯</div>
                    <h3 style="font-size: 2rem; margin-bottom: 20px;">Our Mission</h3>
                    <p style="font-size: 1.2rem; line-height: 1.8;">
                        To create technology that brings people closer together, not pushes them apart. 
                        We're building digital spaces that feel warm, safe, and genuinely human.
                    </p>
                </div>
                <div class="card" style="padding: 50px;">
                    <div style="font-size: 3.5rem; margin-bottom: 20px;">💡</div>
                    <h3 style="font-size: 2rem; margin-bottom: 20px;">Our Vision</h3>
                    <p style="font-size: 1.2rem; line-height: 1.8;">
                        A world where technology is cozy, welcoming, and intuitive. Where every digital 
                        experience is crafted with care, empathy, and genuine consideration for people.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="section">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px; font-size: clamp(2.5rem, 5vw, 3.5rem);">What We Stand For</h2>
            <div class="grid grid-3">
                <div class="card" style="text-align: center; padding: 40px;">
                    <div style="font-size: 3.5rem; margin-bottom: 20px;">🤝</div>
                    <h3 style="font-size: 1.4rem; margin-bottom: 15px;">Human-First Design</h3>
                    <p style="line-height: 1.7;">Every pixel, every interaction starts with understanding real human needs, emotions, and behaviors.</p>
                </div>
                <div class="card" style="text-align: center; padding: 40px;">
                    <div style="font-size: 3.5rem; margin-bottom: 20px;">✨</div>
                    <h3 style="font-size: 1.4rem; margin-bottom: 15px;">Cozy & Welcoming</h3>
                    <p style="line-height: 1.7;">Technology should feel like a warm hug, not a cold interface. We design for comfort and joy.</p>
                </div>
                <div class="card" style="text-align: center; padding: 40px;">
                    <div style="font-size: 3.5rem; margin-bottom: 20px;">🌱</div>
                    <h3 style="font-size: 1.4rem; margin-bottom: 15px;">Thoughtful Growth</h3>
                    <p style="line-height: 1.7;">We grow sustainably, listening to our community and evolving with intention and care.</p>
                </div>
                <div class="card" style="text-align: center; padding: 40px;">
                    <div style="font-size: 3.5rem; margin-bottom: 20px;">🚀</div>
                    <h3 style="font-size: 1.4rem; margin-bottom: 15px;">Bold Innovation</h3>
                    <p style="line-height: 1.7;">We're not afraid to challenge the status quo and reimagine what digital experiences can be.</p>
                </div>
                <div class="card" style="text-align: center; padding: 40px;">
                    <div style="font-size: 3.5rem; margin-bottom: 20px;">🛡️</div>
                    <h3 style="font-size: 1.4rem; margin-bottom: 15px;">Privacy & Trust</h3>
                    <p style="line-height: 1.7;">Your data is yours. We build trust through transparency and unwavering respect for privacy.</p>
                </div>
                <div class="card" style="text-align: center; padding: 40px;">
                    <div style="font-size: 3.5rem; margin-bottom: 20px;">💜</div>
                    <h3 style="font-size: 1.4rem; margin-bottom: 15px;">Community Love</h3>
                    <p style="line-height: 1.7;">Our users aren't just customers—they're partners in building something meaningful together.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials/Social Proof -->
    <section class="section" style="background: rgba(255, 255, 255, 0.4);">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 60px;">What People Are Saying</h2>
            <div class="grid grid-3">
                <div class="card">
                    <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px; font-style: italic;">
                        "Connect feels like the app I've been waiting for. It's beautiful, thoughtful, and actually helps me stay close to the people I care about."
                    </p>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, var(--primary-purple), var(--primary-pink)); border-radius: 50%;"></div>
                        <div>
                            <strong>Sarah M.</strong>
                            <div style="font-size: 0.9rem; color: var(--text-light);">Designer</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px; font-style: italic;">
                        "Finally, an app that doesn't make me feel overwhelmed. TechyKoala gets what people actually need."
                    </p>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, var(--primary-pink), var(--accent-peach)); border-radius: 50%;"></div>
                        <div>
                            <strong>James K.</strong>
                            <div style="font-size: 0.9rem; color: var(--text-light);">Developer</div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px; font-style: italic;">
                        "The design is just *chef's kiss*. Every detail feels intentional and warm. Love it!"
                    </p>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, var(--accent-peach), var(--soft-cream)); border-radius: 50%;"></div>
                        <div>
                            <strong>Emma L.</strong>
                            <div style="font-size: 0.9rem; color: var(--text-light);">Student</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="text-align: center; padding: 120px 0;">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto;">
                <div style="font-size: 4rem; margin-bottom: 30px;">🚀</div>
                <h2 style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 30px;">Ready to Experience Connect?</h2>
                <p style="font-size: 1.3rem; margin-bottom: 50px; line-height: 1.7;">
                    Join our growing community and discover what meaningful digital connections feel like.
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="/connect" class="btn btn-primary" style="font-size: 1.2rem; padding: 22px 50px;">Get Connect Now</a>
                    <a href="/connect#features" class="btn btn-secondary" style="font-size: 1.2rem; padding: 22px 50px;">See All Features</a>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}
</style>

<?php get_footer(); ?>
