<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Pharmacy Site</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8fa5bd5302.js" crossorigin="anonymous"></script>
</head>
<body>
    
<header>
    <div class="logo">
        <h6>Pharmacy</h6>
        <img src="imgs-P2/logo.png" alt="Logo">
        <h6>Abbass</h6>
    </div>
    <nav>
        <ul>
            <li><a class="home" href="#">Home</a></li>
            <li><a href="other-pages/service.php">Service</a></li>
            <li><a id="propose" href="#">About us</a></li>
            <li><a href="#footer">Visit</a></li>
        </ul>
    </nav>
</header>

<section>
    <div class="card">
        <h1>Your Pharmacy, Your Health</h1>
        <hr>
        <p>
            Here you'll find everything you need for your well-being
            your well-being: medicines, health advice and care products.
            We're here to support you and offer you quality service.
        </p>
        <a id="lien" href="other-pages/service.php"
        style="text-decoration: none; background-color: black;
        color: white; padding: 10px 20px; border-radius: 5px; cursor: pointer;
        text-align: center;font-family: sans-serif"
        >Start</a>
    </div>
</section>
<div id="about" class="about" style="background-color: grey">
    <div class="box">
        <i id="xmark" class="fa-solid fa-xmark"></i>
        <h1>About us</h1>
        <p>
            Our pharmacy is dedicated to providing personalized, quality healthcare
            to every customer. We believe in the importance of listening to you
            and advice to offer you solutions tailored to your specific needs.
        </p>
        <p>
            Our team of experienced pharmacists is always available to provide you with
            advice on medicines, treatments and care products,
            and care products. Whether you need a prescription, advice on self-medication
            or wellness products, we're here to help.
        </p>
        <p>
            We are committed to offering you quality products,
            carefully selected to meet the highest standards.
            Your health is our priority, and we strive to provide you with
            exceptional service at every visit.
        </p>
    </div>
</div>

<footer>
    <div id="footer" class="left">
        <h1>Contact us</h1>
        <p>
            Your health, our priority. Discover our products <br>
            and services for optimal well-being.
        </p>
        <ul>
            <li><a href="https://web.facebook.com/rammal.abbass/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="mailto:rammalabbass.ar@gmail.com"><i class="fa-brands fa-google"></i></a></li>
            <li><a href="https://www.linkedin.com/in/abbass-rammal-b480b01b9/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="https://github.com/Alzorg" target="_blank"><i class="fa-brands fa-github"></i></a></li>
        </ul>
    </div>

    <div class="right">
        <div class="b1">
            <i class="fa-solid fa-globe"></i>
            <h5>pharmacy.com</h5>
        </div>
        <div class="b2">
            <i class="fa-regular fa-envelope"></i>
            <h5> rammalabbass.ar@gmail.com</h5>
        </div>
    </div>
</footer>
    <script src="script.js"></script>
</body>
</html>