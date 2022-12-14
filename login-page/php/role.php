<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/role.css" />

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

            <!--Select Role-->
            <div class="select-role-container">
                <div class="select-role">
                    <h2>Select your Role</h2>
                </div>
            </div>

            <!--Choose Role-->
            <div class="card-container">

                <div class="row row-cols-1 row-cols-md-3 g-4 ">
                    <div class="col">
                        <div class="card h-100">

                            <div class="card-body">
                                <h5 class="card-title">Student</h5>
                                <div class="images">
                                    <img src="http://localhost/Simbahayan/login-page/pictures/student.png" alt=""
                                        width="150px" height="150px">
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">

                            <div class="card-body">
                                <h5 class="card-title">CD Coordinator</h5>
                                <div class="images">
                                    <img src="http://localhost/Simbahayan/login-page/pictures/coordinator.png" alt=""
                                        width="150px" height="150px">
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">

                            <div class="card-body">
                                <h5 class="card-title">Simbahayan Staff</h5>
                                <div class="images">
                                    <img src="http://localhost/Simbahayan/login-page/pictures/staff.png" alt=""
                                        width="150px" height="150px">
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted"></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>