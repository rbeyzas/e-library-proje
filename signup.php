<?php require_once("inc/connect.php"); 

if(@$_COOKIE["giris"]=="1"){
    header("Location: index.php");
    exit();
}


?>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Library Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/lightbox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
<div class="container login-container">
            <div class="row d-flex justify-content-center">
            <div class="col-md-3">
            </div>
                <div class="col-md-6 login-form-2">
                    <h3>Sign Up</h3>
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name ="user" placeholder="Kullanıcı Adı *" value="<?=@$_POST["user"]?>" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mail" placeholder="E-mail *" value="<?=@$_POST["mail"]?>" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Şifre *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password2" placeholder="Şifre tekrarı *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" name="signup"/>
                        </div>
                        <?php




                        if(@$_POST["signup"]){

                            $user=$_POST["user"];
                            $password=$_POST["password"];
                            $password2=$_POST["password2"];
                            $mail=$_POST["mail"];

                            /* Eposta ve kullanıcı adı kontrol alanı */
                            $sql = mysqli_query($conn, "select count(*) as kulvar from users where user_kid='$user' or user_email='$mail' ");
                            while($satir=mysqli_fetch_array($sql))
                            {
                                $kullanicikontrol=$satir['kulvar'];
                            }
                            if(!$user || !$password || !$password2 || !$mail){
                                echo "Lütfen tüm alanları doldurunuz!";
                            }else if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                                echo "E posta adresi hatalı";
                            }else if($password!=$password2){
                                echo "Girilen şifreler uyuşmuyor";
                            }else{
                                
                                if($kullanicikontrol>0){
                                    echo "Girilen kullanıcı adı veya e-posta adresi zaten kullanılıyor.";
                                }else{
                                    $sql = "INSERT INTO users (user_kid, user_email, user_pass) VALUES ('".$user."', '".$mail."', '".$password."')";
                                    if (mysqli_query($conn, $sql)) {    
                                          echo "Kayıt gerçekleştirildi!";
                                          header("Location: signin.php"); 
                                    } else {
                                          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                    }
                                    mysqli_close($conn);        
                                }

                                

                            }


                 
                        }


?>                            
                    </form>
                </div>
            </div>
        </div>

     <script src="assets/js/custom.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
    </body>

</html>