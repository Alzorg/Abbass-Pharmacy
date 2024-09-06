<?php 
$pdo = new PDO('mysql:host=localhost;dbname=pharmacy', 'root', '');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a product</title>
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
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="service.php">Service</a></li>
            <li><a href="#footer">Suivre</a></li>
        </ul>
    </nav>
</header>

<form action="" method="POST">
    <section>
        <div class="b1">
            <h1>Add a Product</h1>
            <table>
                <tr>
                    <td>Product Name :</td>
                    <td><input type="text" name="nom"></td>
                </tr>

                <tr>
                    <td>Category :</td>
                    <td>
                        <select name="select">
                            <option value="Médicaments en vente libre">Over the counter medications</option>
                            <option value="Produits de soins de la peau">Skin care products</option>
                            <option value="Suppléments alimentaires">Dietary supplements</option>
                            <option value="Soins pour bébés">Baby care</option>
                            <option value="Produits de santé naturelle">Natural health products</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Price :</td>
                    <td><input type="text" name="prix"></td>
                </tr>

                <tr>
                    <td>Description :</td>
                    <td>
                        <textarea name="description"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Reference :</td>
                    <td><input type="text" name="ref"></td>
                </tr>

                <tr>
                    <td>Expiration date :</td>
                    <td><input type="date" name="date"></td>
                </tr>

                <tr>
                    <td colspan="2"><input type="submit" value="Ajoute" name="submit"></td>
                </tr>
            </table>
            <?php 
if (isset($_POST['submit'])) {
    $ref = $_POST['ref'];
    $nom = $_POST['nom'];
    $categorie = $_POST['select'];
    $prix = $_POST['prix'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    if(!empty($ref) && !empty($nom) && !empty($categorie) && !empty($prix) && !empty($description) && !empty($date)) {
        $sql = 'INSERT INTO info VALUES (?,?,?,?,?,?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$ref,$nom,$categorie,$prix,$description,$date]);
        header('Location: bibliothique.php');
        exit();
    } else {
echo '<span class="error"> Veuillez remplir tous les champs obligatoires avant de soumettre le formulaire. </span>';
}
} 
            ?>
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
