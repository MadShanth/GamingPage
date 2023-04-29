<?php

require_once "config.php";

$name = $dob = $email = $password = "";

if(!empty($_POST["id"])) {
    $id = $_POST["id"];

    $input_name = trim($_POST["name"]);
    $name = $input_name;

    $input_dob = trim($_POST["dob"]);
    $dob = $input_dob;

    $input_email = trim($_POST["email"]);
    $email = $input_email;

    $input_password = trim($_POST["password"]);
    $password = $input_password;

    $sql = "UPDATE users SET name=?, dob=?, email=?, pssword=? WHERE id=?";

    if ($stmt = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_dob, $param_email, $param_password);

        $param_name = $name;
        $param_dob = $dob;
        $param_email = $email;
        $param_password = $password;

        if (mysqli_stmt_execute($stmt)) {
            header("location: login.php");
            exit();
        } else {
            echo "Something went wrong. Please contact the administrator";
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
}
?>

<html>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width", initial-scale="1.0">
    <title>Join Us</title>
    <link rel="stylesheet" href="/css/Login.css" >
    <script src="https://kit.fontawesome.com/e4252a0130.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="form-box">
        <h1 id="title">Sign Up</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-group">
                <div class="input-field" id="namefield">
                    <i class="fa-solid fa-signature"></i>
                    <input type="text" name="name" placeholder="Name" required>
                </div>

                <div class="input-field" id="DOBfield">
                    <i class="fa-solid fa-calendar"></i>
                    <input type="date" name="dob" placeholder="Date Of Birth" required
                           min="1900-01-01" max="2022-12-31" >
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-at"></i>
                    <input type="E-mail" name="email" placeholder="E-mail" required>
                </div>

                <div class="input-field">
                    <i class="fa-solid fa-ghost"></i>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <p>Lost password <a href="#">click here</a></p>
            </div><br>
            <div class="btn-field">
                <button type="button" id="signupbtn" >Sign up</button>
                <button type="button" id="loginbtn" class="disable">Login</button>
            </div>
        </form>
    </div>
</div>

<script>
    let signupbtn = document.getElementById("signupbtn");
    let loginbtn = document.getElementById("loginbtn");
    let namefield = document.getElementById("namefield");
    let title = document.getElementById("title");
    let DOBfield = document.getElementById("DOBfield");


    loginbtn.onclick = function(){
        namefield.style.maxHeight = "0";
        DOBfield.style.maxHeight= "0";
        title.innerHTML = "Login"
        signupbtn.classList.add("disable");
        loginbtn.classList.remove("disable");
    }

    signupbtn.onclick = function(){
        namefield.style.maxHeight = "60px";
        DOBfield.style.maxHeight= "60px";
        title.innerHTML = "Sign up"
        signupbtn.classList.remove("disable");
        loginbtn.classList.add("disable");
    }

</script>
</body>
</html>

