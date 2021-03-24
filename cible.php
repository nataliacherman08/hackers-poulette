<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $genderErr = $emailErr = $countryErr = $subjectErr = $messageErr = "";
$firstname = $lastname = $gender = $email = $country = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //Firstname
    if (empty($_POST["firstname"])) {
        $firstnameErr = "First name is required";
    } else {
        $firstname = test_input($_POST["firstname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
            $firstnameErr = "Only letters and white space allowed";
        } elseif (!filter_var($firstname, FILTER_SANITIZE_STRING)) {
            $firstnameErr = "Invalid";
        }
    }

    //Lastname
    if (empty($_POST["lastname"])) {
        $lastnameErr = "Last name is required";
    } else {
        $lastname = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
            $lastnameErr = "Only letters and white space allowed";
        } elseif (!filter_var($lastname, FILTER_SANITIZE_STRING)) {
            $lastnameErr = "Invalid";
        }
    }

    //Gender
    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    
    //Email
    if (empty($_POST["email"])) {
        $emailErr = "Email address is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } elseif (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
            $emailErr = "Invalid";
        }
    }

    //Country
    if (empty($_POST["country"])) {
        $countryErr = "";
    } else {
        $country = test_input($_POST["country"]);
    }

    //Subject
    if (empty($_POST["subject"])) {
        $subjectErr = "";
    } else {
        $subject = test_input($_POST["subject"]);
    }
    
    //Message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$message)) {
            $messageErr = "Invalid URL";
        } elseif (!filter_var($message, FILTER_SANITIZE_STRING)) {
            $messageErr = "Invalid";
        }
    }
}
//var_dump($_POST);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $gender;
echo "<br>";
echo $email;
echo "<br>";
echo $subject;
echo "<br>";
echo $message;*/
?>