<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>
<header style="border-bottom: 1px solid blue; padding: 10px">
    <a style="margin-left: 100px" href="/login.php">Login</a>
    <a style="float: right; margin-right: 100px" href="/register.php">Register</a>
</header>
<?php

session_start();
// echo "<pre>";
// var_dump($_SESSION);
// $successRegister = "You have registered successfully";
// echo "</pre>";

$fNameError = $lNameError = $emailError = $passwordError = $confirPasswordError = $successRegister = "";
$fName = $lName = $email = $password = $confirmPassword = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if (empty($_POST["fName"])) {
        var_dump($_POST["fName"]);
        $fNameError = "Please enter your name";
    } else if ($_POST["fName"] = !ctype_alpha($_POST["fName"])) {
        $fNameError = "Name field should only contain letters";
    } else {
        $_SESSION["fName"] = $fName;
    }

    if (empty($_POST["lName"])) {
        $lNameError = "Please enter your name";
    } else if ($_POST["lName"] = !ctype_alpha($_POST["lName"])) {
        $lNameError = "Name field should only contain letters";
    } else {
        $_SESSION["lName"] = $lName;
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Please enter valid email address";
    } else {
        $_SESSION["email"] = $email;
    }

    if (strlen($_POST["password"]) < 8) {
        $passwordError = "Password must be at least 8 characters long";
    }

    if ($_POST["confirmPassword"] != $_POST["password"]) {
        $confirPasswordError = "Password is not the same";
    } else {
        $_SESSION["password"] = $password;
    }
    foreach ($_SESSION as $el) {
        // if () {
        //     header("Location: login.php");
        // }
        var_dump($el);
    }
}
?>

<body>
    <h1 style="text-align:center">Register</h1>
    <p style="text-align:center; color:red"> * Required fields</p>
    <form style="text-align:center;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        First Name: <input type="text" name="fName" placeholder="Jon">
        <span style="color:red">* <?php echo $fNameError ?> </span>
        <br><br>

        Last Name: <input type="text" name="lName" placeholder="Doe">
        <span style="color:red">* <?php echo $lNameError ?> </span>
        <br><br>

        E-mail: <input type="email" name="email" placeholder="example@email.com">
        <span style="color:red">* <?php echo $emailError ?> </span>
        <br><br>

        Password: <input type="password" name="password" placeholder="At least 8 characters">
        <span style="color:red"> <?php echo "* " . $passwordError ?> </span>
        <br><br>

        Confirm Password: <input type="password" name="confirmPassword" placeholder="Confirm the password">
        <span style="color:red"> <?php echo "* " . $confirPasswordError ?> </span>
        <br><br>
        <input type="submit" name="submitButton" value="Submit">
        <br><br>
        <span style="color:green"><?php echo $successRegister ?> </span>

    </form>
    <br><br>
</body>
<footer style="border-top: 1px solid blue;position: fixed; left: 0;bottom: 0;width: 100%; text-align: center">Sva prava zadrzana <?php echo date("Y") ?></footer>

</html>