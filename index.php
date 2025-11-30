<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS Landing Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="#">QuickPOS</a>
            </div>
            <nav>
                <ul id="nav-links">
                    <li><a href="#features">Features</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#signup" class="btn">Sign Up</a></li>
                </ul>
                <div id="menu-toggle">&#9776;</div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="hero-container">
            <h1>The Last POS System You’ll Ever Need</h1>
            <p>Manage your business efficiently with QuickPOS</p>
            <a href="#signup" class="btn">Get Started for Free</a>
            <img src="mockup.png" alt="POS Mockup">
        </div>
    </section>

    <!-- Features Section -->
    <section id="features">
        <div class="container features-container">
            <h2>Key Features</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <img src="icons/inventory.png" alt="Inventory Management">
                    <h3>Inventory Management</h3>
                    <p>Easily track your stock and products in real-time.</p>
                </div>
                <div class="feature-card">
                    <img src="icons/analytics.png" alt="Sales Analytics">
                    <h3>Sales Analytics</h3>
                    <p>Get detailed insights into sales trends and revenue.</p>
                </div>
                <div class="feature-card">
                    <img src="icons/integration.png" alt="Easy Integration">
                    <h3>Easy Integration</h3>
                    <p>Connect QuickPOS with your favorite apps seamlessly.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
</body>
</html>
