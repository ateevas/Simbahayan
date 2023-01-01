<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/annual.css" />
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/dashboard.css" />
    <?php
		include('../cdn/cdn.php');
		?>
</head>
<?php
	include('../nav_master/nav.php');
	?>
<div class="title">
    <div class="inner_title">
        <div class="title_container">
            <h1>Dashboard</h1>
        </div>
    </div>
</div>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="list-group list-group-flush my-3">
                <a href="dashboard.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Archives</a>
                <a href="target.php"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Target</a>
            </div>
        </div>
        <!-- sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle" style="color: goldenrod"></i>
                    <h2 class="fs-2 m-0" style="color: gray">UST Simbahayan</h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class="row my-5">
                <h3 class="fs-4 mb-3">View Report</h3>
                <div class="col">
                    <table class="table bg-white rounded shadow-sm table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Report</th>
                                <th scope="col">Date</th>
                                <th scope="col">Audit</th>
                            </tr>
                        </thead>
                        <tbody id="tbody_data">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
get_finalapproved();

function generate_pdf(obj) {
    localStorage.setItem('final_pdf_id', $(obj).data('user_id'));
    window.location.href = "http://localhost/Simbahayan/simbahayan-ui/php/pdf_page.php";
}

function get_finalapproved() {
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_finalapproved"
        },
        complete: function(response) {
            $('#tbody_data').html(response.responseText);
        }
    })
}
</script>