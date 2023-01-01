<style type="text/css">
    body {
        overflow: hidden !important;
    }
</style>
<nav class="navbar bg-secondary">
    <div class=" container-fluid mb-2 ">
        <div class="d-flex flex-row bd-highlight mb-0 ">

            <div class="mb-0 bd-highlight align-self-center"><a class="navbar-brand" href="#"><img
                        src="http://localhost/Simbahayan/coordinator/pictures/ustlogo.png" alt="" width="60" height="60"
                        class="d-inline-block align-text-top"></a></div>
            <div class="mb-0 bd-highlight align-self-center">
                <a class="navbar-brand" href="#">
                    <img src="http://localhost/Simbahayan/coordinator/pictures/white.png" alt="" width="100" height="60"
                        class="d-inline-block align-text-top">
                </a>
            </div>


            <div class="context-container">
                <div class="context mb-0 bd-highlight align-self-center">
                    <p class="navbar-specialtext1 mb-0" id="ust">University of Santo Tomas</p>
                    <p class="navbar-specialtext2 mb-0 " id="simbahayan">Simbahayan</p>
                    <p class="navbar-specialtext1 mb-0" id="comdev">Community Development Office</p>

                </div>
            </div>
        </div>

    </div>
</nav>

<!-- Navigation bar -->
<div class="navigation-container">
    <div class="navigation">
        <ul class="itembar nav nav justify-content-center
        
         bg-warning mb-2  h-10  " id="pills-tab" role="tablist">
            <li class="nav-item active  ">
                <a class="nav-link  text-dark" href="profile.php">Profile <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="pending.php" aria-expanded="false">
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
    window.location.href = "http://localhost/Simbahayan/login-page/php/role.php";
}
</script>