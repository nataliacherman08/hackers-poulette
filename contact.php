<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8' />
    <title>Contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href="assets/style/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <?php include 'cible.php'?>

    <?php
        $countries = [
            "BE" => "Belgium",
            "FR" => "France",
            "NL" => "Netherlands",
            "DE" => "Germany",
            "LU" => "Luxembourg"
        ]
    ?>
    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#"><img class='logo' src='assets/img/logo.png' alt='logo hackers poulette'/></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Contact page-->
    <section class='contact-container'>

        <section class='left-col'>
        </section>

        <div class='right-col'>
                <h1>We want hear from you</h1>

                <!--Form-->
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <!--Firstname-->
                    <div class="form-group">
                        <label for="firstname" class="form-label">First name :</label>
                        <input type="text" class="form-control" name="firstname" id="firstname">
                        <span class="error">* <?php echo $firstnameErr?></span>
                    </div>

                    <!--Lastname-->
                    <div class="form-group">
                        <label for="lastname" class="form-label">Last name :</label>
                        <input type="text" class="form-control" name="lastname" id="lastname">
                        <span class="error">* <?php echo $lastnameErr?></span>
                    </div>

                    <!--Gender-->
                    <div>
                        <label for="gender">Gender :</label>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input " name="gender" value="male"> MALE
                            <input type="radio" class="form-check-input" name="gender" value="female"> FEMALE
                            <input type="radio" class="form-check-input" name="gender" value="other"> OTHER
                            </label>
                        </div>
                        <span class="error">* <?php echo $genderErr?></span>
                    </div>

                    <!--Email-->
                    <div class="form-group">
                        <label for="email" class="form-label">Email address:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                        <span class="error">* <?php echo $emailErr?></span>
                    </div>

                    <!--Country-->
                    <div class="form-group">
                        <label for="country" class="form-label">Country :</label>
                        <select class="form-select" name="country" id="country">
                            <option disabled">Choose a country</option>
                            <?php
                            foreach($countries as $key => $value){
                                echo '<option value="'.$key.'">'.$value.'</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <!--Subject-->
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject :</label>
                        <select class="form-select" name="subject" id="subject">
                            <option disabled">Choose a subject</option>
                            <option value="questions">Questions</option>
                            <option value="comments">Comments</option>
                            <option value="suggestions">Suggestions</option>
                        </select>
                    </div>

                    <!--Message-->
                    <div class="form-group">
                        <label for="message" class="form-label">Your message :</label>
                        <textarea class="form-control" id="textArea" rows="3" placeholder="Type your message" name="message"></textarea>
                        <span class="error">* <?php echo $messageErr?></span>
                    </div>

                    <!--Submit-->
                    <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
        </div>

    <div class="theme-switch-wrapper">
        <label class="theme-switch" for="checkbox">
            <input type="checkbox" id="checkbox" />
            <div class="slider round"></div>
        </label>
        <div class="description">Dark Mode</div>
    </div>

    </section>

<script src="assets/script/script.js"></script>
</body>

</html>