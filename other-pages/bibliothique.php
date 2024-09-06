<?php 
$pdo = new PDO('mysql:host=localhost;dbname=pharmacy' , 'root' , '');

$sql = 'SELECT * FROM info';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product library</title>
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
            <li><a  href="../index.php">Home</a></li>
            <li><a  href="service.php">Service</a></li>
            <li><a href="#footer">Follow</a></li>
        </ul>
    </nav>
</header>

<section>
    <div class="b1">
        <h1>Product library</h1>
        <table class="table2">
            <tr>
                <th>Reference</th>
                <th>Product name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Description</th>
                <th>Expiration date</th>
                <th>Action</th>
            </tr>

            <tr>
                <?php 
                if($products) {
                foreach($products as $product) {
                ?>
                <td><?php echo htmlspecialchars($product['ref']) ?></td>
                <td><?php echo htmlspecialchars($product['nom']) ?></td>
                <td><?php echo htmlspecialchars($product['categorie']) ?></td>
                <td><?php echo htmlspecialchars($product['prix']) ?></td>
                <td><?php echo htmlspecialchars($product['description']) ?></td>
                <td><?php echo htmlspecialchars($product['date_expiration']) ?></td>
                <td class="lien" >
                    <a href="supprimer.php?ref=<?php echo $product['ref'] ?>" onclick="return confirm('Do you want to delete ?')"><i class="fa-solid fa-trash-alt"></i></a>
                    <a href="modifier.php?ref=<?php echo $product['ref'] ?>" ><i class="fa-solid fa-edit"></i></a>
                </td>
            </tr>
            <?php 
            }
        } else {
            echo '<tr><td colspan="7" align="center">No products available.</td></tr>';
        }
        ?>
        </table>
    </div>
</section>


<footer>
    <div id="footer" class="left">
        <h1>Get in Touch</h1>
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
            <h5>pharmacia.com</h5>
        </div>
        <div class="b2">
            <i class="fa-regular fa-envelope"></i>
            <h5>rammalabbass.ar@gmail.com</h5>
        </div>
    </div>
</footer>
</body>
</html>