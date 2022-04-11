<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title>Login</title>
</head>

<body>

    <div>
        <!-- blue circle background -->
        <div class="d-none d-lg-block ball register bg-gradient position-absolute h-75 rounded">
            <h3 class="fw-bolder mt-3 text-center text-white pt-4">
                Curriculum Undergraduate
            </h3>
        </div>

        <!-- Register Section -->

        <div class="container register__form active">
            <div class="row vh-100 w-100 align-self-center">
                <div class="col-12 col-lg-6 col-xl-6 px-5 form-auth-register">
                    <div class="row vh-100">
                        <div class="col align-self-center p-5 w-100">
                            <h3 class="fw-bolder mt-3">REGISTER HERE !</h3>
                            <p class="fw-lighter fs-6">
                                Have an account,
                                <span id="signUp" role="button" class="text-info"><a href="login.php"
                                        style="text-decoration: none">Sign In</a></span>
                            </p>
                            <!-- form login section -->
                            <form action="" class="mt-5">
                                <div class="mb-3">
                                    <label for="InputName" class="form-label">Name</label>
                                    <input type="text" id="InputName"
                                        class="form-control text-indent shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3"
                                        placeholder="Your Name" />
                                </div>
                                <div class="mb-3">
                                    <label for="InputEmail" class="form-label">Email</label>
                                    <input type="email" id="InputEmail"
                                        class="form-control text-indent shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3"
                                        placeholder="name@example.com" />
                                </div>
                                <div class="mb-4">
                                    <label for="InputPassword" class="form-label">Password</label>
                                    <div class="d-flex position-relative">
                                        <input type="password" id="InputPassword"
                                            name="password" placeholder="your password"
                                            class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" />
                                        <span @click="togglePassword1" class="password__icon text-dark fs-4 fw-bold bi bi-eye-slash"
                                            ></span>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="InputConfirmPassword" class="form-label">Confirm Password</label>
                                    <div class="d-flex position-relative">
                                        <input type="password" id="InputConfirmPassword"
                                            name="confirm_password" placeholder="confirm password"
                                            class="form-control text-indent auth__password shadow-sm bg-grey-light border-0 rounded-pill fw-lighter fs-7 p-3" />
                                        <span @click="togglePassword2" class="password__icon text-dark fs-4 fw-bold bi bi-eye-slash"
                                            ></span>
                                    </div>
                                </div>
                                <div class="pt-3" style="margin-bottom: -10px">
                                    <div class="row mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="dropdownCheck" />
                                            <label class="form-check-label" for="dropdownCheck">
                                                By signing in, I agree to the CU Privacy Statement and
                                                Terms of Service.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-outline-light btn-lg rounded-pill mt-4 w-100">
                                        Register
                                    </button>
                                </div>
                            </form>
                            <div class="separator mt-5 text-white">
                                Or Sign up with social platforms
                            </div>
                            <div class="row text-center" style="color: #ffffff">
                                <div class="col mt-3">
                                    <a href="" class="btn btn-outline-light border-2 rounded-thumbnail"><i
                                            class="bi bi-facebook fs-5"></i></a>
                                </div>
                                <div class="col mt-3">
                                    <a href="" class="btn btn-outline-light border-2 rounded-thumbnail"><i
                                            class="bi bi-linkedin fs-5"></i></a>
                                </div>
                                <div class="col mt-3">
                                    <a href="" class="btn btn-outline-light border-2 rounded-thumbnail"><i
                                            class="bi bi-twitter fs-5"></i></a>
                                </div>
                                <div class="col my-3">
                                    <a href="" class="btn btn-outline-light border-2 rounded-thumbnail"><i
                                            class="bi bi-google fs-5"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-none d-lg-block col-lg-6 col-xl-6">
            <div class="row vh-100" style="padding-top: 35%; margin-left: 113%">
                <div class="col align-self-center text-center">
                    <img src="assets/img/welcome.png" width="350" class="bounce" alt="" />
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>