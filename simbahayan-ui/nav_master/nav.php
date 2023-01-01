<style type="text/css">
body {
    overflow-x: hidden !important;
}
</style>
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
                    <a class=" nav-link active" aria-current="page"
                        href="http://localhost/Simbahayan/simbahayan-ui/php/profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Simbahayan/simbahayan-ui/php/pending.php">
                        Annual Report Approval
                    </a>
                </li>

                <li class="nav-item dropstart">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item"
                                href="http://localhost/Simbahayan/simbahayan-ui/php/manage-edit.php">
                                Manage Community Development Coordinators</a>
                        </li>
                        <li><a class="dropdown-item" href="http://localhost/Simbahayan/simbahayan-ui/php/dashboard.php">
                                Dashboard</a>
                        </li>
                        <li><a class="dropdown-item"
                                href="http://localhost/Simbahayan/simbahayan-ui/php/changepass.php">Change
                                Password</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/Simbahayan/simbahayan-ui/php/contact.php">
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="modal" href="#logout_modal" class="nav-link">Logout</a>
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