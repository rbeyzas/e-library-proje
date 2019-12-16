<button class="toggle-nav" data-toggle="collapse">
                <i class="fa fa-bars"></i>
            </button>
            <div class="logo">
                <a href="index.php">
                    <img src="assets/img/logo.jpg">
                </a>
            </div>                                       
            <div class="nav">
                <ul>
                    <li>
                        <a <?php if($pagenum==1) { ?>style="color:#fec200;box-shadow: 0px 3px 0px #fec200;" <?php } ?> href="index.php">Home</a>
                    </li>
                    <li>
                       <a <?php if($pagenum==2) { ?>style="color:#fec200;box-shadow: 0px 3px 0px #fec200;" <?php } ?> href="allbooks.php">All Books</a>
                    </li>
                    <li>
                        <a <?php if($pagenum==3) { ?>style="color:#fec200;box-shadow: 0px 3px 0px #fec200;" <?php } ?>href="reservation.php">How to Make a Reservation?</a>  <!--dropdown -->
                    </li>                    
                    <li>
                        <a <?php if($pagenum==4) { ?>style="color:#fec200;box-shadow: 0px 3px 0px #fec200;" <?php } ?> href="contact.php">Contact</a>
                    </li>
                    <li>
<?php

if(@$_COOKIE["giris"]=="1"){
    echo "Welcome to <u>".@$_COOKIE['kid']."!</u>";
    echo ' <a href="logout.php">Log out</a>';
}else{?>
                   <button type="button" class="btn btn-danger"><a href="signin.php">Sign In</a></button>
                    </li>
                    <li>
                   <button type="button" class="btn btn-danger"><a href="signup.php">Sign Up</a></button>
<?php }
?>

                    </li>
                   
                </ul>
            </div>