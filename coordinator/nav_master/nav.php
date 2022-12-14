<nav class="navbar bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand" href="profile.php">

            <img src="http://localhost/Simbahayan/coordinator/pictures/ustlogo.png" alt="Logo" width="70" height="70"
                class="d-inline-block align-text-middle" />

        </a>
    </div>
</nav>
<!-- Navigation bar -->
<div class="navigation-container">
    <div class="navigation">
        <ul class="nav nav justify-content-center bg-warning mb-3 rounded mt-3 " id="pills-tab" role="tablist">
            <li class="nav-item active  ">
                <a class="nav-link  text-dark" href="profile.php">Profile <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="annual.php" aria-expanded="false">
                    Annual Report Approval
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="changepass.php">Change Password</a></li>
                    <li><a class="dropdown-item" href="manage.php">Manage Student</a></li>
                </ul>
            </li>
            <li class="nav-item active">
                <a class="nav-link  text-dark" href="contact.php">Contact <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <button data-bs-toggle="modal" data-bs-target="#logout_modal" class="btn btn-link text-dark"
                    style="text-decoration: none; box-shadow: none;">Logout</button>
            </li>
        </ul>
    </div>
</div>
<!-- Navigation bar end S-->

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