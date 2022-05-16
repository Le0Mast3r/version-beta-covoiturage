<?php 
    session_start();
    // Initialise Variables 
    $username = "";
    $password = "";
    $errors = array();
    // Connect Database 
    $db = mysqli_connect('localhost','root','','dbcar') or die("Could not connect to database");
    // Register User
    if(isset($_POST['reg_user'])){
        $username = mysqli_real_escape_string($db,$_POST['username']);
        $email = mysqli_real_escape_string($db,$_POST['email']);
        $password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db,$_POST['password_2']);
        // Form Validation
        if(empty($username)){
            array_push($errors,"Username Is Required");
        }
        if(empty($email)){
            array_push($errors,"Email Is Required");
        }
        if(empty($password_1)){
            array_push($errors,"Password Is Required");
        }
        if($password_1 != $password_2){
            array_push($errors,"Password Do Not Match");
        }
    
    
    // Check Database For Existing User With Same Username
    $user_check_query = "select * from users where username = '$username' OR email = '$email' limit 1";
    $results = mysqli_query($db,$user_check_query);
    $user = mysqli_fetch_assoc($results);
    if($user['username'] === $username){
        array_push($errors,"Username Aleardy Exist");
    }
    if($user['email'] === $email){
        array_push($errors,"This Email id Aleardy has a registred Username");
    }
    // Register User
    if(count($errors) == 0 ){
        // $password = md5($password_1);
        $password = hash('sha256', $password_1);

        $query = "insert into users(username,email,password) values('$username','$email','$password')";
        mysqli_query($db,$query);
        $_SESSION['username'] = $username ;
        $_SESSION['success'] = "You're now logged in";
        header('location: index.php');
    }
}
    // Login User
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
      
        if (empty($username)) {
            array_push($errors, "<div class='alert alert-danger mx-auto' role='alert'>
            <center>Username is required</center>
          </div>");
        }
        if (empty($password)) {
            array_push($errors, "<div class='alert alert-danger' role='alert'>
            <center>Password is required</center>
          </div>");
        }
      
        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results) == 1) {
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in";
              header('location: ./add.php');
            }else {
                array_push($errors, "<div class='alert alert-danger' role='alert'>
                    <center>Mauvaise combinaison nom d'utilisateur ou mot de passe</center>
                </div>");
                
            }
        }
    }
      
   
?>
