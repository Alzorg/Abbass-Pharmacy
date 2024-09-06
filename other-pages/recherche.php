<?php 
$pdo = new PDO('mysql:host=localhost;dbname=pharmacy', 'root', '');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product search</title>
    <link rel="stylesheet" href="general.css">
    <script src="https://kit.fontawesome.com/8fa5bd5302.js" crossorigin="anonymous"></script>
</head>
<body>
    
<header>
    <div class="logo">
        <h6>Pharmacy</h6>
        <img src="../imgs-P2/logo.png" alt="Logo">
        <h6>Abbass</h6>
    </div>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a class="home" href="service.php">Service</a></li>
            <li><a href="#footer">Follow</a></li>
        </ul>
    </nav>
</header>

    <form action="" method="POST">
        <section>
            <div class="b1">
                <h1>Product search</h1>
                <table class="table1">
                    <tr>
                        <td>Search field :</td>
                        <td><input type="text" name="ref" placeholder="Product reference..."></td>
                    </tr>
                    
                    <tr>
                        <td><input type="submit" name="submit" value="Recherche"></td>
                    </tr>
                </table>

                <table class="table2" border="1">
                    <tr>
                        <th>Reference</th>
                        <th>Product name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Expiration date</th>
                    </tr>
                    <?php 
                    if (isset($_POST['submit'])) {
                        $ref = $_POST['ref'];
                        $sql = "SELECT * FROM info WHERE ref = ?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute([$ref]);
                        $product = $stmt->fetch(PDO::FETCH_ASSOC);

                        if ($product) {
                            echo "<tr>
                                    <td>{$product['ref']}</td>
                                    <td>{$product['nom']}</td>
                                    <td>{$product['categorie']}</td>
                                    <td>{$product['prix']}</td>
                                    <td>{$product['description']}</td>
                                    <td>{$product['date_expiration']}</td>
                                </tr>";
                        } else {
                            echo "<tr>
                                    <td colspan='6'>No products found for this reference.</td>
                                </tr>";
                        }
                    }
                    ?>
                </table>
            </div>
        </section>
    </form>

    <footer>
    <div id="footer" class="left">
        <h1>Contact us</h1>
        <p>
            Your health, our priority. Discover our products <br>
            and services for optimal well-being.
        </p>
        <ul>
            <li><a href="https://web.facebook.com/mohamed.azouagh.140" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li><a href="https://www.youtube.com/@wademsi3283" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="mailto:wademsi01@gmail.com"><i class="fa-brands fa-google"></i></a></li>
            <li><a href="https://www.linkedin.com/in/azouagh-mohamed-15765a301/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
            <li><a href="https://github.com/W4de27" target="_blank"><i class="fa-brands fa-github"></i></a></li>
        </ul>
    </div>

    <div class="right">
        <div class="b1">
            <i class="fa-solid fa-globe"></i>
            <h5>pharmacy.com</h5>
        </div>
        <div class="b2">
            <i class="fa-regular fa-envelope"></i>
            <h5>rammalabbass.ar@gmail.com</h5>
        </div>
    </div>
</footer>
</body>
</html>
