<?php 
    include_once 'header.php';
?>

<style>
    .container-md{
        padding-bottom: 1%;
        padding-top: 1%;
    }
    .container{
        text-align: center;
    }
    body{
        background-color: #CB9172;
        color:white;
    }
    .btn{
        width:20%;
        font-size: 1.2em;
    }
    #label{
        font-size: 1.2em;
    }
    legend{
        font-size: 2.5em;
    }
    #spacer{
        height: 30.8vh;
    }
</style>

<script> //make this page active in the nav
    let temp = document.getElementById("login");
    temp.className="nav-link active";
</script>
<section class="signup-form">
<br><br><br><br>
<div class="container-md">
    <form action="includes/login.inc.php" method="post">
    <legend>Login!</legend>
    <div class="row mb-3">
        <label for="inputEmail" class="col-sm-2 col-form-label" id="label">Email/Username</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Username/Email" name="uid">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputPassword" class="col-sm-2 col-form-label" id="label">Password</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
        </div>
    </div>
    <div class="container">
        <button type="submit" class="btn btn-outline-light" name="submit">Login</button>
    </div>
    </form>
    <div class="container" id="spacer"></div>
</div>
</section>

<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyInput"){
            echo '<script>alert("Please fill all fields")</script>';
        }
        else if($_GET["error"] == "wrongLogin"){
            echo '<script>alert("User does not exist")</script>';
        }
        else if($_GET["error"] == "incorrectPasssword"){
            echo '<script>alert("Entered password is not correct")</script>';
        }
        else if ($_GET["error"] == "sessionError"){
            echo '<script>alert("Please Login")</script>';
        }
        else if($_GET["error"] == "none"){
            echo '<script>alert("Registration successful!")</script>';
        }
    }
?>

<?php 
include_once 'footer.php';
?>