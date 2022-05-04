<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
</head>


<body>
    <?php
    $nameError = $emailError = $websiteError = $genderError = "";
    $name = $email = $website = $comment = $gender = "";

    if (isset($_POST['submitButton'])) {
        $email = $_POST["email"];
        $name = $_POST["name"];
        $website = $_POST["website"];
        $comment = $_POST["comment"];

        if ($name == "") {
            $nameError = "Please enter your name";
        } else if ($name = !ctype_alpha($name)) {
            $nameError = "Name field should only contain letters";
            $name = "Invalid Name";
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Please enter valid email address";
        }

        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteError = "Please enter valid web address";
        }

        if (isset($_POST['gender'])) {
            $gender = $_POST["gender"];
        } else {
            $genderError = "Please choose your gender";
        }
    }
    ?>

    <h2>PHP Form Validation</h2>
    <p style="color:red"> * Required fields</p>
    <form method="post" action="">
        Name: <input type="text" name="name">
        <span style="color:red">* <?php echo $nameError ?> </span>
        <br><br>

        E-mail: <input type="text" name="email">
        <span style="color:red">* <?php echo $emailError ?> </span>
        <br><br>

        Website: <input type="text" name="website" placeholder="http://...">
        <span style="color:red"> <?php echo "* " . $websiteError ?> </span>
        <br><br>

        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>

        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <span style="color:red">* <?php echo $genderError ?> </span>
        <br><br>
        <input type="submit" name="submitButton" value="Submit">
    </form>
    <br><br>
    <h2>Your input:</h2>
    <br><br>
    <style>
        .output {
            font-style: italic;
            font-weight: bold
        }
    </style>
    <p>Your name is: <span class="output"> <?php echo $name . "<br>" ?> </span>
    <p>Your email is: <span class="output"> <?php echo $email . "<br>" ?> </span>
    <p>Your website is: <span class="output"> <?php echo $website . "<br>" ?> </span>
    <p>Your comment is: <span class="output"> <?php echo $comment . "<br>" ?> </span>
    <p>Your gender is: <span class="output"> <?php echo $gender . "<br>" ?> </span>

    </p>
</body>

</html>