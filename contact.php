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

        <div class="right-col">
                <h1>We want hear from you</h1>
                    <form>
                        <div class="col-md-12">
                            <label for="validationDefault01" class="form-label">First name</label>
                            <input type="text" class="form-control" id="validationDefault01" required>
                        </div>

                        <div class="col-md-12">
                            <label for="validationDefault02" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" required>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Woman
                            </label>
                        </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Man
                            </label>
                        </div>

                        <div class="col-md-12">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                        </div>

                        <div class="col-md-12">
                            <label for="validationDefault04" class="form-label">Country</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option value="1">Belgium</option>
                                <option value="2">France</option>
                                <option value="3">Germany</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="validationDefault04" class="form-label">Subject</label>
                            <select class="form-select" id="validationDefault04" required>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

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