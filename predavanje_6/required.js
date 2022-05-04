function required() {
    var nameCheck = document.forms["myForm"]["name"].value;
    var emailCheck = document.forms["myForm"]["email"].value;
    if (nameCheck == "") {
        alert("Please enter your name");
        return false;
    }
    if (emailCheck == "") {
        alert("Please enter ypur email");
        return false;
    }

}


<!-- <?php
            $nameError = "";
            $emailError = "";
            $websiteError = "";
            $genderError = "";

            echo "<pre>";

            $name = "";
            $email = "";
            $website = "";
            $comment = "";
            $gender = "";
            if (isset($_POST["name"])) {
                return $name = $_POST["name"];
            } else {
                return $nameError = "Please enter your name";
            }
            if (isset($_POST["email"]) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return $email = $_POST["email"];
            } else {
                return $emailError = "Please enter your email";
            }

            // var_dump($name);
            // $checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

            echo "</pre>";

            $message = "";
            if (isset($_POST['submit'])) { //check if form was submitted
                $input = $_POST['inputText']; //get input text
                $message = "Success! You entered: " . $input;
            }


            // isset, filter_var, preg_match()
            // var_dump($_POST);
            ?> -->