<nav class="navbar bg-secondary">
	<div class="container-fluid">
		<a class="navbar-brand" href="/CD coordinator UI/html/profile.html">
			<img src="http://localhost/Simbahayan/coordinator/pictures/ustlogo.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-middle"
			/>
			<span>Simbahayan Portal</span>
		</a>
	</div>
</nav>

<!-- navigation bar -->
<div class="navigation-container">
	<div class="navigation">
		<ul class="nav nav justify-content-center bg-warning mb-3 rounded mt-3" id="pills-tab" role="tablist">
				<li class="nav-item active">
					<a class="nav-link text-dark" href="../php/profile.php">Profile <span class="sr-only"></span></a>
				</li>
				<li class="nav-item active"><a class="nav-link text-dark" href="../php/kra-select.php">Community Development Report<span class="sr-only"></span></a>
				</li>
			<li class="nav-item dropdown">
				<a
					class="nav-link dropdown-toggle text-dark"
					href="#"
					id="navbarDropdownMenuLink"
					role="button"
					data-toggle="dropdown"
					aria-haspopup="true"
					aria-expanded="false"
					>
					Account
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="/student-official/html/changepass.html">Change Password</a>
				</div>
			</li>
			<li class="nav-item active">
				<a class="nav-link text-dark" href="../php/contact.php"
				>Contact <span class="sr-only"></span></a>
			</li>
			<li class="nav-item active">
				<button data-bs-toggle="modal" data-bs-target="#logout_modal" class="btn btn-link text-dark" style="text-decoration: none; box-shadow: none;">Logout</button>
			</li>
		</ul>
	</div>
</div>

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
		window.location.href="http://localhost/Simbahayan/login-page/php/login.php";
	}
</script>