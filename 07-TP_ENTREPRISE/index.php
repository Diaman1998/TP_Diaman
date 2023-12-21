<?php require_once 'bdd.php' ?>
 <!-- require_once permet d'importer le fichier bdd.php dans index.php  -->
<?php // OPEN PHP

$request = $sql->prepare("SELECT * FROM employes");
$request->execute();
$result = $request->fetchAll(PDO::FETCH_ASSOC);

/// INSERT INTO 


if(isset($_POST['valider']))
{
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $sexe = $_POST['sexe'];
    $service = $_POST['service'];
    $salaire = $_POST['salaire'];

    $req = $sql->prepare("INSERT INTO employes VALUES (null, :prenom, :nom, :sexe, :service, now(), :salaire)" );
    $req->bindParam(':prenom', $prenom );
    $req->bindParam(':nom', $nom );
    $req->bindParam(':sexe', $sexe );
    $req->bindParam(':service', $service );
    $req->bindParam(':salaire', $salaire );
    $req->execute();

}


// echo '<pre>';
// print_r($result);
// echo '</pre>';

// CLOSE PHP ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TP ENTREPRISE 🏟</h1>
    <form method='POST'>
        <label for="prenom">Prenom :</label>
        <input 
            type="text" 
            id="prenom" 
            placeholder="Votre prenom..." 
            name="prenom" 
        />
        <label for="nom">nom :</label>
        <input 
            type="text" 
            id="nom" 
            placeholder="Votre nom..." 
            name="nom" 
        />
        <select name="sexe">
            <option>Votre sexe </option>
            <option value='f'>Femme</option>
            <option value='m'>Homme</option>
        </select>
        <select name="service">
            <option>Votre service</option>
            <option value='commercial'>Commercial</option>
            <option value='production'>Production</option>
            <option value='informatique'>Informatique</option>
            <option value='juridique'>Juridique</option>
        </select>
        <label for="salaire">salaire :</label>
        <input 
            type="number" 
            id="salaire" 
            placeholder="Votre salaire..." 
            name="salaire" 
        />
        <button name="valider">s'inscrire</button>
    </form>
    <?php foreach($result as $value):  ?>
        <p> 
            Prenom : <?php echo $value['prenom'];  ?>  
            Nom : <?php echo $value['nom'];  ?>
        </p>
        <p>
            Salaire : <?= $value['salaire'];  ?>
        </p>
    <?php endforeach; ?>
</body>
</html>