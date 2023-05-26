connexion.php
<?php
// Connexion à la base de données avec PDO
$servername = "localhost"; // Remplacez par l'adresse du serveur de base de données
$username = "root"; // Remplacez par votre nom d'utilisateur de base de données
$password = ""; // Remplacez par votre mot de passe de base de données
$dbname = "youtube"; // Remplacez par le nom de votre base de données

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Gérer les erreurs de connexion en mode exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("La connexion à la base de données a échoué : " . $e->getMessage());
}

// Supposons que vous récupérez les informations d'authentification depuis un formulaire
$email = $_POST['email']; // Remplacez par le nom du champ d'entrée de l'e-mail dans votre formulaire
$password = $_POST['password']; // Remplacez par le nom du champ d'entrée du mot de passe dans votre formulaire

// Requête préparée pour vérifier les informations d'authentification
$sql = "SELECT * FROM utilisateurs WHERE email = :email";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':email', $email);
$stmt->execute();

// Vérification du résultat de la requête
if ($stmt->rowCount() == 1) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $storedPassword = $row['password'];
    
    // Vérification du mot de passe haché
    if (password_verify($password, $storedPassword)) {
        // Authentification réussie
        $userType = $row["type"];
        $_SESSION['logged_in'] = true;
        // Rediriger vers la page souhaitée après la connexion
         if ($userType == "SuperAdmin") {
            header("Location: index.html"); // Redirection vers index.html
            exit();
        } elseif ($userType == "Admin") {
            header("Location: indexx.html"); // Redirection vers index.php
            exit();
        } else {
            // Cas où le type d'utilisateur n'est ni "super admin" ni "admin"
            // Effectuez les actions nécessaires pour un utilisateur différent ici
        }

      //   header("Location: index.html");

        $dateConnexion = date('Y-m-d H:i:s');
        $sqlInsert = "INSERT INTO historique (email, date_connexion) VALUES (:email, :dateConnexion)";
        $stmtInsert =  $conn->prepare($sqlInsert);
        $stmtInsert->bindParam(':email', $email);
        $stmtInsert->bindParam(':dateConnexion', $dateConnexion);
        $stmtInsert->execute();

       
    } else {
        // Authentification échouée
        echo "Alert ('connexion echoue')";
    }
} else {
    // Authentification échouée
    echo "Identifiants invalides";
}
// Code d'authentification ici...





// Fermeture de la connexion à la base de données
$conn = null;
?>