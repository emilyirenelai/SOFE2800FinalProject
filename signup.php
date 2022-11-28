<?php 
    include_once 'header.php';
?>

<script>
    let temp = document.getElementById("signup");
    temp.className="nav-link active";
</script>

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
    legend{
        font-size: 2.5em;
    }
    #label{
        font-size: 1.2em;
    }
</style>

<section class="signup-form">
<br><br><br>
    <!--<h2>Sign up!</h2>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="Full name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="Uname" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="passwordRepeat" placeholder="Repeat Password">
                <button type="submit" name="submit">Sign Up!</button>
            </form>-->
<div class="container-md">
    <form action="includes/signup.inc.php" method="post">
    <legend>Sign Up!</legend>
    <div class="row mb-3">
        <label for="name" class="col-sm-2 col-form-label" id="label">Full name:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Full name" name="name">
        </div>
    </div>
    <div class="row mb-3">
        <label for="email" class="col-sm-2 col-form-label" id="label">Email:</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Email" name="email">
        </div>
    </div>
    <div class="row mb-3">
        <label for="username" class="col-sm-2 col-form-label" id="label">Username:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="username" placeholder="Username" name="Uname">
        </div>
    </div>
    <div class="row mb-3">
        <label for="pwd" class="col-sm-2 col-form-label" id="label">Password:</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
        </div>
    </div>
    <div class="row mb-3">
        <label for="pwdr" class="col-sm-2 col-form-label" id="label">Re-enter Password:</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="pwdr" placeholder="Re-enter Password" name="passwordRepeat">
        </div>
    </div>
    <div class="row mb-3">
        <label for="cardNo" class="col-sm-2 col-form-label" id="label">Card Number:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="cardNo" placeholder="XXXXXXXXXXXXXXXX" name="cardNo" maxlength="16">
        </div>
    </div>
    <div class="row mb-3">
        <label for="cardname" class="col-sm-2 col-form-label" id="label">Name On Card:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="cardname" placeholder="Name" name="cardName">
        </div>
    </div>
    <div class="row mb-3">
        <label for="cardCVC" class="col-sm-2 col-form-label" id="label">Card CVC:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="cardCVC" placeholder="CVC" name="cardCVC" maxlength="3">
        </div>
    </div>
    <div class="container">
        <button type="submit" class="btn btn-outline-light" name="submit">Sign up</button>
    </div>
    </form>
</div>
</section>

<?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyInput"){
            echo '<script>alert("Please fill all fields")</script>';
        }
        else if($_GET["error"] == "invalidUsername"){
            echo '<script>alert("Username must include only letters and numbers")</script>';
        }
        else if($_GET["error"] == "invalidEmail"){
            echo '<script>alert("Entered email is not valid")</script>';
        }
        else if($_GET["error"] == "passwordMismatch"){
            echo '<script>alert("Repeated password does not match entered password")</script>';
        }
        else if($_GET["error"] == "usernameTaken"){
            echo '<script>alert("Username or email is already in the system")</script>';
        }
    }
?>

<?php 
include_once 'footer.php';
?>