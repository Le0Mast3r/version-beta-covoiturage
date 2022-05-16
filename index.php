<?php include('./database/connection.php') ?>
<?php
if(isset($_SESSION['user_id'])){
    header("location:index.php");
}
if(isset($_POST['login'])){
$errors = "";
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$password = filter_var($_POST["passe"], FILTER_SANITIZE_STRING);
if(empty($email)){
    $errors.= '<div class="alert alert-danger">Veuillez entrer votre email</div>';
}
if(empty($password)){
    $errors.= '<div class="alert alert-danger">Veuillez entrer votre mot de passe</div>';
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors .= '<div class="alert alert-danger">Email invalide</div>';   
}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$password = hash('sha256', $password);
//check if user exists
$sql = "SELECT * FROM drivers WHERE email='$email' AND password='$password'";
$result = mysqli_query($con, $sql);
if(!$result){
    $errors.= '<div class="alert alert-danger">Erreur réessayer!</div>';
}
//If email & password don't match print error
$count = mysqli_num_rows($result);
if($count !== 1){
    $errors.= '<div class="alert alert-danger">Email ou mot de passe est incorrect!</div>';
}
if($errors){
    echo $errors;
}else {
    //log the user in: Set session variables
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['logged'] = true;
    $_SESSION['user_id']=$row['user_id'];
    $_SESSION['username']=$row['username'];
    $_SESSION['email']=$row['email'];
    
    if(empty($_POST['remember'])){
        //If remember me is not checked
        header("location:index.php");
    }
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nt9asmo Tri9</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="row clearfix">
                <img src="./img/logo.png" alt="Logo" class="logo">
                <ul class="main-nav animated slideInDown" id="check-class">
                    <li><a href="#">Accueil</a></li>
                    <li ><a href="#">Chercher</a></li>
                    <li><a href="#"  >Identifier</a></li>
                    
                    <li><a href="./registration.php">Inscrire</a></li>
                </ul>
                <a href="#" class="mobile-icon"  onclick="slideshow()"><i class="fa fa-bars"></i></a>
            </div>
        </nav>
        <div class="main-content-header">
          <h1>BIENVENUE À <span class="colorchange"> NT9ASMO TRI9 </span>. <br> cliquez | voyagez | économisez 
          </h1>
              <a href="#" class="btn btn-full">Click to Order</a>
              <a href="#" class="btn btn-nav">Show More..</a>
        </div>
        
    </header>
    <div class="popup" id="popup">
        <div class="popup-content">
            
            <form method="post" action="index.php">
                        <img src="./img/signs.png" alt="Close" class="close">
                        <img src="./img/social.png" alt="User"> 
                        <input  type="email" name="email" id="email" placeholder="Email" maxlength="50">
                        <input  type="password" name="passe" id="passe" placeholder="Mot de passe" maxlength="30">
                        <button type="submit" class="btn btn-full" name="login">Login</button><br>
                        <a href="#">Forgot password?</a>
                        <div class="alerady-has-account" style="color:#fff;">
                        <a href="#">Vous n'avez pas de compte? S'inscrire!</a> 
                    </div>
              </form>
        </div>
    </div>
    <section class="home container mb-5">
        <div class="row mt-5">
          <div class="col-lg-6 mt-5 py-5 pl-5">
            <img
              class="animated zoomIn img-fluid"
              src="./img/car2-5.png"
              alt=""
            />
          </div>
          <div class="col-lg-6 my-auto">
            <div class="row">
              <div class="home-content offset-lg-1 col-lg-10">
                <h2 class=" delay-1s pb-3 ">
                    Êtes-vous chauffeur?
                </h2>
                <p class="pb-3">
                    Nous créons de nouvelles façons de vous soutenir. Gagnez selon votre horaire
                    Ajustez la conduite autour de ce qui compte le plus. Conduisez à tout moment et n'importe quel jour de la semaine.
                </p>
              <a href="#" target="_blank"><button class="btn btn-info">Créer un compte
                </button></a>
                <a href="#" id="button"><button class="btn btn-success">S'inscrire</button></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    <script>
        var modal = document.getElementById('popup');
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
        }


        document.getElementById("button").addEventListener("click",function(){
        document.querySelector(".popup").style.display = "flex";
        });
        document.querySelector(".close").addEventListener("click",function(){
            document.querySelector(".popup").style.display = "none";
        });
    </script>

</body>
</html>