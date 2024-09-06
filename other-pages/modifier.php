<?php
$pdo = new PDO('mysql:host=localhost;dbname=pharmacy', 'root', '');

$ref = $_GET['ref'];

if(isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $categorie = $_POST['categorie'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $sql = 'UPDATE info SET 
    nom =? ,
    categorie =? ,
    prix =? ,
    description =?,
    date_expiration =?  
    WHERE ref = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $categorie, $prix, $description, $date, $ref]);
    header('Location: bibliothique.php');
    exit();
}

$sql = 'SELECT * FROM info WHERE ref = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$ref]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify a product</title>
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
            <h1>Modify a product</h1>
            <table>
                <tr>
                    <td>Product name :</td>
                    <td><input type="text" name="nom" value="<?php echo htmlspecialchars($product['nom']); ?>"></td>
                </tr>

                <tr>
                    <td>Category :</td>
                    <td>
                        <select name="categorie">
                            <option value="already" disabled><?php echo htmlspecialchars($product['categorie']); ?></option>
                            <option value="Médicaments en vente libre">Over the counter medicines</option>
                            <option value="Produits de soins de la peau">Skin care products</option>
                            <option value="Suppléments alimentaires">Food supplements</option>
                            <option value="Soins pour bébés">Baby care</option>
                            <option value="Produits de santé naturelle">Natural health products</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Price :</td>
                    <td><input type="text" name="prix" value="<?php echo htmlspecialchars($product['prix']); ?>"></td>
                </tr>

                <tr>
                    <td>Description :</td>
                    <td>
                        <textarea name="description"><?php echo htmlspecialchars($product['description']); ?></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Reference :</td>
                    <td><input type="text" name="ref" value="<?php echo htmlspecialchars($product['ref']); ?>"></td>
                </tr>

                <tr>
                    <td>Expiry date :</td>
                    <td><input type="date" name="date" value="<?php echo htmlspecialchars($product['date_expiration']); ?>"></td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Modifier"></td>
                </tr>
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
