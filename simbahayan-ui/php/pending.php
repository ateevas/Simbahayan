<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>KRAs and KPIs</title>
		<?php
		include('../cdn/cdn.php');
		?>
	</head>
	<body>
		<?php
		include('../nav_master/nav.php');
		?>
		<div class="contact_title">
			<div class="inner_container">
				<div class="contact_container">
					<h1>Annual Reports</h1>
					<br />
					<br />
				</div>
			</div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Coordinator</th>
					<th>College</th>
					<th>ID number</th>
					<th>Email</th>
					<th>Date</th>
					<th>Status</th>
					<th>Manage</th>
				</tr>
			</thead>
			<tbody id="tbody_data">
			</tbody>
		</table>
	</body>
=======
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRAs and KPIs</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/pending.css"/>



    <?php 
      include('../cdn/cdn.php');
    ?>

</head>
<body>
  <?php 
    include('../nav_master/nav.php');
  ?>


    <div class="contact_title">
      <div class="inner_container">
        <div class="contact_container">
          <h1>Pending Annual Reports</h1>
          <br />
          <br />
        </div>
      </div>
    </div>

    <table class="table">
      <thead>
      <tbody class="table-group-divider">
        <tr>
          <th scope="row"></th>
          <!--Name-->
          <td>Name</td>
           <!--College-->
           <td>College</td>
          <!--IDnumber-->
          <td>ID number</td>
          <!--Email-->
          <td>Email</td>
          <!--PassedKRA/KPI-->
          <td>Time Passed</td>
          <!--TimePassed-->
          <td>Status</td>
          <!--Status-->
          <td>Manage</td>
          <!--Manage-->
          <td></td>
        </tr>
      </thead>
      </tbody>
  

      <tbody class="table-group-divider">
        <tr>
          <th scope="row"><input type="checkbox" /></th>
          <!--Name-->
          <td>Joshua</td>
          <!--College-->
          <td>CICS</td>
          <!--IDnumber-->
          <td>Otto</td>
          <!--Email-->
          <td>@mdo</td>
          <!--PassedKRA/KPI-->
          <td>@mdo</td>
          <!--TimePassed-->
          <td>@mdo</td>
          <!--Manage-->
          <td><a href="#">View</a></td>
          <td>...</td>
        </tr>
        <tr>
          <th scope="row"><input type="checkbox" /></th>
     <!--Name-->
     <td>Joshua</td>
     <!--College-->
     <td>CICS</td>
     <!--IDnumber-->
     <td>Otto</td>
     <!--Email-->
     <td>joshuafujiyama.cabangal@ust.edu.ph</td>
     <!--PassedKRA/KPI-->
     <td>@mdo</td>
     <!--TimePassed-->
     <td>@mdo</td>
     <!--Manage-->
     <td><a href="#">View</a></td>
     <td>...</td>
        </tr>
        <tr>
          <th scope="row"><input type="checkbox" /></th>
       <!--Name-->
       <td>Joshua</td>
       <!--College-->
       <td>CICS</td>
       <!--IDnumber-->
       <td>Otto</td>
       <!--Email-->
       <td>@mdo</td>
       <!--PassedKRA/KPI-->
       <td>@mdo</td>
       <!--TimePassed-->
       <td>@mdo</td>
       <!--Manage-->
       <td><a href="#">View</a></td>
       <td>...</td>
        </tr>
      </tbody>
    </table>



  </body>
>>>>>>> 4025b588e276cfe620d73e3bf5ee78c52f78c427
</html>
<script type="text/javascript">
get_allsubmittedkrasimbahayan();
function get_allsubmittedkrasimbahayan() {
  $.ajax({
		url: url,
		type: "GET",
		data: {
		  csrf_token: "{{ csrf_token() }}",
		  tag: "get_allsubmittedkrasimbahayan"
		},
		complete: function (response) {
		  $('#tbody_data').html(response.responseText);
		}
	 })
}
function goto_kra_select(obj){
	 localStorage.setItem('selected_user_id', $(obj).data('user_id'));
	 window.location.href="http://localhost/Simbahayan/simbahayan-ui/php/kra-select.php";
}
</script>
