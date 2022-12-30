<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css" />

    <?php 
			include('../cdn/cdn.php');
		?>

</head>

<body>
    <div class="background-image">

        <?php 
			include('../nav_master/nav.php');
		?>

        <div class="background">

            <!--Student-->

            <div class="student-container">
                <div class="student">
                    <div class="student-wrapper">
                        <h2>Student</h2>
                    </div>
                </div>
            </div>


            <section class="background vh-100" id="background"
                style="background-image: url('http://localhost/Simbahayan/login-page/pictures/30.png'); background-size: cover;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center mt-3 h-100">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <div class="card shadow-2-strong" style="border-radius: 1rem">
                                <div class="card-body p-5 text-center">
                                    <h3 class="mb-5">Sign in</h3>
                                    <form method="post" action="">
                                        <div class="form-outline mb-4">
                                            <input name="email" type="email" id="email"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <input name="password" type="password" id="password"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <!-- Checkbox -->
                                        <!--   <div class="form-check d-flex justify-content-start mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                        <label class="form-check-label" for="form1Example3"> Remember password </label>
                      </div> -->
                                        <button class="btn btn-warning btn-lg btn-block" type="button"
                                            onclick="login(this)">Login</button>
                                    </form>

                                    <hr class="my-4" />
                                    <div class="register-wrapper">
                                        <h3>Don't Have an Account?</h3>
                                    </div>
                                    <div class="parent-here">
                                        <div class="here-wrapper">
                                            <a href="../register/php/register.php">Register </a>
                                        </div>
                                    </div>

                                    <div class="forgot-wrapper">
                                        <a href="/login-page/php/forgetpass.php">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
                crossorigin="anonymous">
            </script>

            <script>
            function login() {
                var email = $("#email").val();
                var password = $("#password").val();

                if (email !== "" && password !== "") {
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: {
                            csrf_token: "{{ csrf_token() }}",
                            tag: "login",
                            email: email,
                            password: password,
                        },
                        complete: function(data) {
                            var res = JSON.parse(data.responseText);

                            switch (res['status']) {
                                case 'ok': // login success
                                    localStorage.setItem('user_id', res['id']);
                                    localStorage.setItem('user_role', res['user_role']);
                                    localStorage.setItem('college_id', res['college']);
                                    localStorage.setItem('password', res['password']);
                                    switch (res['user_role']) {
                                        case 1: //student
                                            if(res['user_verification'] == "0") {
                                                alert("The account is not verified yet. Please contact the coordinator to verify your account.")
                                            } else {
                                                if(res['user_status'] == "0") {
                                                    alert("The account is has set to inactive state. Please contact the coordinator to update your account.")
                                                } else {
                                                    window.location.href = "http://localhost/Simbahayan/student-official/php/profile.php";
                                                }
                                            }                                   
                                        break;
                                        case 2: //cd
                                            window.location.href =
                                                "http://localhost/Simbahayan/coordinator/php/profile.php";
                                            break;
                                        case 3: //staff;
                                            window.location.href =
                                                "http://localhost/Simbahayan/simbahayan-ui/php/profile.php";
                                            break;
                                        case 4: //admin;
                                            window.location.href =
                                                "http://localhost/Simbahayan/admin/php/admin.php";
                                            break;
                                    }

                                    break;
                                case 'error_1': // mali password
                                    alert("email or password is incorrect");
                                    break;
                                case 'error_2': // both mali
                                    alert("email or password is incorrect");
                                    break;
                            }
                        },
                    });
                } else {
                    alert("input all missing fields");
                }
            }
            </script>
        </div>
</body>

</html>