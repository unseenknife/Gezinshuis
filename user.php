<?php
require "requires/help.php";
// see if user is loggedin
if(!$_SESSION['loginstatus']){
    header('Location: ./login.php');
}?>


<?php require 'requires/head.php'; ?>
<?php require 'requires/sidenav.php'; ?>


<section class="user">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto">

                <div class="container content">
                    Welkom <?= $_SESSION["user"]->fname ." ". $_SESSION["user"]->tussenvoegsel ." ". $_SESSION["user"]->lname;?>
                </div>

            </div>
        </div>
    </div>
    
</section>

<?php require 'requires/foot.php'; ?>