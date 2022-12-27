<?php
		include('../cdn/cdn.php');
		?>
<nav class="navbar bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="profile.php">
            <img src="../pictures/ustlogo.png" alt="Logo" width="70" height="70"
                class="d-inline-block align-text-middle" />


            <span style="color: black;">Simbahayan Portal</span>

        </a>
        <img src="../pictures/white.png" alt="Logo" width="120" height="70" class="d-inline-block align-text-middle" />
    </div>
</nav>

<link rel="stylesheet" href="http://localhost/Simbahayan/student-official/css/nav.css" />


<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ">
                    <a class=" nav-link mx-2 active" aria-current="page"
                        href="http://localhost/Simbahayan/student-official/php/profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="http://localhost/Simbahayan/student-official/php/reports.php">KRA and
                        KPI Monitoring Report</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item"
                                href="http://localhost/Simbahayan/student-official/php/changepass.php">Change
                                Password</a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#">Logout</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="logout_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <label for="message-text" class="col-form-label"><b>Are you sure you want to logout?</b></label>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-light mx-3" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-danger" onclick="clear_all()">Yes</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
function clear_all() {
    localStorage.clear();
    window.location.href = "http://localhost/Simbahayan/login-page/php/login.php";
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>