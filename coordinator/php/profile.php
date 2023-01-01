<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profile</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/cooridnator/css/profile.css" />
    <?php
			include('../cdn/cdn.php');
		?>
</head>

<body>
    <?php
			include('../nav_master/nav.php');
		?>
    <!-- Profile Menu -->
    <div class="container-xl px-4 mt-4">
        <hr class="mt-0 mb-4" />
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <div id="display-image">
                            <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png" alt="User Icon"
                                width="50" height="50">
                        </div>
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-0">Display picture will be available soon.</div>
                        <!-- Profile picture upload button-->
                        <!-- <input type="file" id="image-input" accept="image/jpeg, image/png, image/jpg" /> -->
                        <!-- <button class="btn btn-warning" id="image-input" type="button">Upload new image</button> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="fname">First name</label>
                                    <input class="form-control edit_form" id="fname" type="text"
                                        placeholder="Enter your first name" readonly />
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="lname">Last name</label>
                                    <input class="form-control edit_form" id="lname" type="text"
                                        placeholder="Enter your last name" readonly />
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="id_number">ID number</label>
                                    <input class="form-control edit_form" id="id_number" type="text"
                                        placeholder="Enter your Student Number" readonly />
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="college">College/Faculty</label>
                                    <select id="college" class="form-control edit_form" disabled="true" readonly>
                                    </select>
                                </div>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="email">Email address</label>
                                <input class="form-control edit_form" id="email" type="email"
                                    placeholder="Enter your email address"
                                    value="joshuafujiyama.cabangal.cics@ust.edu.ph" readonly />
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="contact">Phone number</label>
                                    <input class="form-control edit_form" id="contact" type="number"
                                        placeholder="Enter your phone number" value="555-123-4567" readonly />
                                </div>
                                 <div class="col-md-6">
                                    <label class="small mb-1" for="org">Organization</label>
                                    <input class="form-control edit_form" id="org" type="text"
                                        placeholder="Enter your Organization" value="" readonly />
                                </div>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-warning" style="display: none;" id="save_edit"
                                onclick="saveEditFields(this)" type="button">Save</button>
                            <button class="btn btn-warning" id="edit" onclick="openFields(this)"
                                type="button">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
getColleges();

function saveEditFields() {
    var user_id = localStorage.getItem('user_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "save_userinfo",
            user_id: user_id,
            fname: $('#fname').val(),
            lname: $('#lname').val(),
            id_number: $('#id_number').val(),
            college: $('#college').val(),
            email: $('#email').val(),
            contact: $('#contact').val(),
            bday: $('#bday').val(),
            position: $('#position').val(),
            org: $('#org').val(),
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText);
            location.reload();
        }
    })
}

function openFields(obj) {
    $('.edit_form').removeAttr('readonly');
    $('.edit_form').removeAttr('disabled');
    $(obj).hide();
    $('#save_edit').show();
}

function getColleges() {
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_colleges"
        },
        complete: function(response) {
            $('#college').html(response.responseText);
            loadUserInfo();
        }
    })
}

function loadUserInfo() {
    var user_id = localStorage.getItem('user_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_userinfo",
            user_id: user_id
        },
        complete: function(response) {
            console.log(response.responseText);
            var data = JSON.parse(response.responseText);
            $('#fname').val(data[0]['fname']);
            $('#lname').val(data[0]['lname']);
            $('#id_number').val(data[0]['id_num']);
            $("#college").val(data[0]['college']).change();
            $('#email').val(data[0]['email']);
            $('#contact').val(data[0]['contact']);
            $('#bday').val(data[0]['bday']);
            $('#position').val(data[0]['position']);
            $('#org').val(data[0]['organization']);
        }
    })
}
</script>