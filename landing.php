<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Nexus | Smart Hospitality Management System</title>
    
    <!-- Design System & Stylesheets -->
    <link rel="stylesheet" href="./css/nexus-design-system.css">
    <link rel="stylesheet" href="./css/landing.css">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: rgba(15, 23, 42, 0.95); backdrop-filter: blur(10px); border-bottom: 1px solid rgba(255, 255, 255, 0.1);">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="landing.php">
                <i class="fa-solid fa-gem nexus-logo-icon" style="font-size: 24px; margin-right: 10px;"></i>
                <span class="nexus-logo-text" style="font-size: 20px;">THE NEXUS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rooms">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#why">Why Nexus</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="login.php" class="btn btn-sm cta-secondary" style="padding: 0.5rem 1.5rem;">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1920&q=80'); background-size: cover; background-position: center;">
        <!-- Performance Note: Hero image loads immediately for best first impression -->
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-badge" data-aos="fade-down">
                <i class="fa-solid fa-award"></i> Smart Hospitality Platform
            </div>
            <h1 class="hero-title" data-aos="fade-up">Smart Hospitality Starts at The Nexus</h1>
            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="100">
                Experience the future of hotel management with intelligent room allocation, automated billing, and seamless guest services.
            </p>
            <div class="hero-cta-group" data-aos="fade-up" data-aos-delay="200">
                <a href="#rooms" class="cta-primary">
                    <i class="fa-solid fa-bed me-2"></i>Book a Smart Room
                </a>
                <a href="login.php" class="cta-secondary">
                    <i class="fa-solid fa-right-to-bracket me-2"></i>Admin / Staff Login
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-item">
                    <i class="fa-solid fa-building"></i>
                    <span class="stat-number">4</span>
                    <span class="stat-label">Room Types</span>
                </div>
                <div class="stat-item">
                    <i class="fa-solid fa-users"></i>
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Support</span>
                </div>
                <div class="stat-item">
                    <i class="fa-solid fa-star"></i>
                    <span class="stat-number">100%</span>
                    <span class="stat-label">Digital</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Smart Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Smart System Features</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                Technology-assisted management designed for efficiency and simplicity
            </p>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fa-solid fa-brain"></i>
                    </div>
                    <h3 class="feature-title">Smart Room Allocation</h3>
                    <p class="feature-description">
                        Automated room assignment based on availability, room type preferences, and booking patterns for optimal resource management.
                    </p>
                </div>

                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <h3 class="feature-title">Automated Billing System</h3>
                    <p class="feature-description">
                        Dynamic pricing calculation including room rates, bed surcharges, and meal plans with instant total computation.
                    </p>
                </div>

                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Real-Time Availability</h3>
                    <p class="feature-description">
                        Live tracking of room inventory with instant updates on bookings, cancellations, and occupancy rates.
                    </p>
                </div>

                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fa-solid fa-receipt"></i>
                    </div>
                    <h3 class="feature-title">Digital Invoice Generation</h3>
                    <p class="feature-description">
                        Printable invoices with detailed billing breakdown, automatically generated from booking and payment records.
                    </p>
                </div>

                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fa-solid fa-gauge-high"></i>
                    </div>
                    <h3 class="feature-title">Centralized Admin Dashboard</h3>
                    <p class="feature-description">
                        Comprehensive control panel with analytics, charts, and management tools for bookings, payments, rooms, and staff.
                    </p>
                </div>

                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <h3 class="feature-title">Data Export Capability</h3>
                    <p class="feature-description">
                        Export booking and payment data to Excel format for reporting, analysis, and record-keeping purposes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Room Experience Section -->
    <section id="rooms" class="rooms-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Experience Our Rooms</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                Choose from our carefully designed accommodation options
            </p>
            
            <div class="rooms-grid">
                <!-- Superior Room -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="room-image-container">
                        <!-- Performance: Lazy loading for better page speed -->
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?w=800&q=80" 
                             alt="Superior Room - Luxury Hotel Suite"
                             class="room-image-inline"
                             loading="lazy"
                             width="400"
                             height="300">
                        <div class="room-badge">Premium</div>
                    </div>
                    <div class="room-content">
                        <h3 class="room-title">Superior Room</h3>
                        <div class="room-amenities">
                            <i class="fa-solid fa-wifi" title="WiFi"></i>
                            <i class="fa-solid fa-burger" title="Food"></i>
                            <i class="fa-solid fa-spa" title="Spa"></i>
                            <i class="fa-solid fa-dumbbell" title="Gym"></i>
                            <i class="fa-solid fa-person-swimming" title="Pool"></i>
                        </div>
                        <p style="color: #cbd5e1; font-size: 0.9rem; margin-bottom: 1.5rem;">
                            All-inclusive experience with premium amenities
                        </p>
                        <button class="room-cta" onclick="window.location.href='index.php'">
                            Book Now - $320/day
                        </button>
                    </div>
                </div>

                <!-- Deluxe Room -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="room-image-container">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=800&q=80" 
                             alt="Deluxe Room - Comfortable Modern Suite"
                             class="room-image-inline"
                             loading="lazy"
                             width="400"
                             height="300">
                        <div class="room-badge">Popular</div>
                    </div>
                    <div class="room-content">
                        <h3 class="room-title">Deluxe Room</h3>
                        <div class="room-amenities">
                            <i class="fa-solid fa-wifi" title="WiFi"></i>
                            <i class="fa-solid fa-burger" title="Food"></i>
                            <i class="fa-solid fa-spa" title="Spa"></i>
                            <i class="fa-solid fa-dumbbell" title="Gym"></i>
                        </div>
                        <p style="color: #cbd5e1; font-size: 0.9rem; margin-bottom: 1.5rem;">
                            Comfortable stay with essential luxury services
                        </p>
                        <button class="room-cta" onclick="window.location.href='index.php'">
                            Book Now - $220/day
                        </button>
                    </div>
                </div>

                <!-- Guest House -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="room-image-container">
                        <img src="https://images.unsplash.com/photo-1591088398332-8a7791972843?w=800&q=80" 
                             alt="Guest House - Cozy Accommodation"
                             class="room-image-inline"
                             loading="lazy"
                             width="400"
                             height="300">
                        <div class="room-badge">Cozy</div>
                    </div>
                    <div class="room-content">
                        <h3 class="room-title">Guest House</h3>
                        <div class="room-amenities">
                            <i class="fa-solid fa-wifi" title="WiFi"></i>
                            <i class="fa-solid fa-burger" title="Food"></i>
                            <i class="fa-solid fa-spa" title="Spa"></i>
                        </div>
                        <p style="color: #cbd5e1; font-size: 0.9rem; margin-bottom: 1.5rem;">
                            Homely atmosphere with quality amenities
                        </p>
                        <button class="room-cta" onclick="window.location.href='index.php'">
                            Book Now - $180/day
                        </button>
                    </div>
                </div>

                <!-- Single Room -->
                <div class="room-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="room-image-container">
                        <img src="https://images.unsplash.com/photo-1598928506311-c55ded91a20c?w=800&q=80" 
                             alt="Single Room - Budget Friendly Option"
                             class="room-image-inline"
                             loading="lazy"
                             width="400"
                             height="300">
                        <div class="room-badge">Budget</div>
                    </div>
                    <div class="room-content">
                        <h3 class="room-title">Single Room</h3>
                        <div class="room-amenities">
                            <i class="fa-solid fa-wifi" title="WiFi"></i>
                            <i class="fa-solid fa-burger" title="Food"></i>
                        </div>
                        <p style="color: #cbd5e1; font-size: 0.9rem; margin-bottom: 1.5rem;">
                            Affordable comfort with core services
                        </p>
                        <button class="room-cta" onclick="window.location.href='index.php'">
                            Book Now - $150/day
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why The Nexus Section -->
    <section id="why" class="why-nexus-section">
        <div class="container">
            <div class="why-content">
                <h2 class="section-title" data-aos="fade-up">Why The Nexus?</h2>
                <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                    Built for modern hospitality management with technology-assisted efficiency
                </p>
                
                <div class="why-points">
                    <div class="why-point" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-point-icon">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <h3 class="why-point-title">Technology-Assisted</h3>
                        <p class="why-point-text">
                            Leverages systematic automation for room allocation, billing calculations, and inventory management
                        </p>
                    </div>

                    <div class="why-point" data-aos="fade-up" data-aos-delay="200">
                        <div class="why-point-icon">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <h3 class="why-point-title">Efficient Operations</h3>
                        <p class="why-point-text">
                            Streamlined workflows reduce manual tasks, minimize errors, and save time for both staff and guests
                        </p>
                    </div>

                    <div class="why-point" data-aos="fade-up" data-aos-delay="300">
                        <div class="why-point-icon">
                            <i class="fa-solid fa-puzzle-piece"></i>
                        </div>
                        <h3 class="why-point-title">Simple to Use</h3>
                        <p class="why-point-text">
                            Intuitive interface design makes the system accessible for users with varying technical expertise
                        </p>
                    </div>

                    <div class="why-point" data-aos="fade-up" data-aos-delay="400">
                        <div class="why-point-icon">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                        <h3 class="why-point-title">User-Friendly</h3>
                        <p class="why-point-text">
                            Designed with both guests and administrators in mind, ensuring smooth experience for all users
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="landing-footer">
        <div class="footer-content">
            <div class="footer-logo">THE NEXUS</div>
            <p class="footer-disclaimer">
                <i class="fa-solid fa-graduation-cap me-2"></i>
                Educational Project - Smart Hospitality Management System<br>
                Course Demonstration of PHP & MySQL Hotel Management
            </p>
            
            <div class="footer-social">
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="mailto:info@thenexus.com" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
            </div>
            
            <div class="footer-copyright">
                &copy; 2026 The Nexus. Built for academic demonstration purposes.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>
</body>
</html>
