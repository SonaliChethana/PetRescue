<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stray Saver - Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <style>
               * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #fff;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .logo img {
            height: 40px;
            margin-right: 10px;
            border-radius: 50px;
        }
        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #000;
            background-color: #f8f8f8;
        }
        nav a:hover {
            text-decoration: underline;
            color: #d84d1f;
        }               
        .dashboard-text h2 {
            display: flex;
            flex-direction: column;
            font-size: 3em;
            color: #ee9d2b;
        }
        #footer {
            background-color: #333;
            color: #fcf8fb;
            padding: 40px 20px;
            display: flex;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1 1 300px;
            margin-bottom: 30px;
        }

        .section-content {
            padding: 0 20px;
        }

        .section-content h2 {
            font-size: 24px;
            margin-bottom: 15px;
            color: #f393ec;
        }

        .section-content p,
        .section-content ul {
            color: #f393ec;
            line-height: 1.6;
        }

        .section-content ul {
            padding: 0;
            list-style: none;
        }

        .section-content ul li {
            margin-bottom: 10px;
        }

        .section-content ul li a {
            color: #f393ec;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .section-content ul li a:hover {
            color: #f393ec;
        }

        .social-icons {
            display: flex;
            align-items: center; /* Center align items vertically */
        }

        .social-icons a {
            margin-right: 15px;
            transition: transform 0.3s ease; /* Smooth transition for hover effect */
        }

        .social-icons a:last-child {
            margin-right: 0; /* Remove margin-right from the last child to prevent extra space */
        }

        .social-icons a img {
            width: 30px; /* Set a specific width for the icons */
            height: 30px; /* Set a specific height for the icons */
            border-radius: 50%; /* Make the icons circular */
            transition: opacity 0.3s ease; /* Smooth transition for opacity */
        }

        .social-icons a:hover {
            transform: translateY(-3px); /* Move the icon up slightly on hover */
        }

        .social-icons a:hover img {
            opacity: 0.7; /* Reduce opacity of the icon on hover */
        }


        .footer-bottom {
            text-align: center;
            padding: 15px 0;
            background-color: #a93ca9;
            color: #e9a2db;
            font-size: 14px;
            width: 100%;
        }

</style>
</head>
<body>
    <header>
        <div class="logo">
        <img src="images/logo2.jpg" alt="Stray Saver">
        <h1>Stray Saver</h1>
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">About Us</a>
            <a href="Login.php">Login</a>
            <a href="dogProfile.php">Profile</a> 
        </nav>
    </header>
    <main>
        <div class="dashboard-section">
            <img src="images/puppy.jpg" alt="Dog Image">
            <div class="dashboard-text">
                <h2>In every stray, a story untold;  In every click, a life unfolds.❣</h2>
                <p>Welcome to the dashboard for our stray dog saving initiative.</p>
            </div>
        </div>
        <div class="quick-access-section">
            <h2>Quick Access</h2>
            <div class="quick-access-buttons">
                <div class="quick-access-item">
                    <a href="ReportStray.php"><img src="images/speaker.jpg" alt="Report a Stray"></a>
                    <h3>Report a Stray</h3>
                    <p>Help a dog in need</p>
                </div>
                <div class="quick-access-item">
                    <a href="Emergency.php"><img src="images/emergency.jpg" alt="Emergency Rescue"></a>
                    <h3>Emergency Rescue</h3>
                    <p>Immediate assistance</p>
                </div>
                <div class="quick-access-item">
                <a href="lostfound.php"><img src="images/search.png" alt="Reunite Paws"></a>
                <h3>Reunite Paws</h3>
                    <p>Find lost dogs</p>
                </div>
                <div class="quick-access-item">
                    <a href="Volunteer.php"><img src="images/volunteer.png" alt="Volunteer"></a>
                    <h3>Volunteer</h3>
                    <p>Join our cause</p>
                </div>
                <div class="quick-access-item">
                    <a href="ShelterFoster.php"><img src="images/adoption.jpg" alt="Adoption"></a>
                    <h3>Shelters and Fosters</h3>
                    <p>Provide a home</p>
                </div>
            </div>
        </div>
        <div class="map-section">
            <img src="images/banner.jpg" alt="Dog Icons">
        </div>
    </main>
    <div id="footer">
        <div class="footer-section">
            <div class="section-content about">
                <h2>About Us</h2>
                <p>StraySaver is dedicated to helping stray dogs find loving homes and providing support to pet owners in need. Join us in making a difference.</p>
            </div>
        </div>
        <div class="footer-section">
            <div class="section-content contact">
                <h2>Contact Us</h2>
                <ul>
                <li><a href="mailto:stray@gmail.com">stray@gmail.com</a></li>
                <li>074-5694236</li>
                    <li>Dickmens rd, Colombo 3, Sri Lanka</li>
                </ul>
            </div>
        </div>
        <div class="footer-section">
            <div class="section-content social">
                <h2>Follow Us</h2>
                <div class="social-icons">
                    <a href="#"><img src="images/facebook.jpg" alt="Facebook"></a>
                    <a href="#"><img src="images/twitter.jpg" alt="Twitter"></a>
                    <a href="#"><img src="images/instagram.jpg" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2024 StraySaver. All Rights Reserved.
        </div>
   </div>

</body>
</html>
