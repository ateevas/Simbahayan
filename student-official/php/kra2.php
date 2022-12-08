DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Community Development Report</title>
		<?php
		include('../cdn/cdn.php');
		?>
	</head>
	<body>
		<?php
		include('../nav_master/nav.php');
		?>
		<div class="title-wrapper m-2">
			<h3>Community Development Report</h3>
		</div>
		<div class="kra-1">KRA 2: Thomasian engagement as agents of social transformation</div>
		<!-- Accordion -->
		<br />
		<div class="accordion accordion-flush" id="accordionFlushExample">
			<!--Status and Target NO. -->
			<div class="row">
				<div class="col-6 col-md-4"></div>
				<div class="col-6 col-md-4"><h4>Status No.</h4></div>
				<div class="col-6 col-md-4"><h4>Target No.</h4></div>
			</div>
			<br />
			<!--UCDP Projects (Not Dropdown) -->
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp"><h3>Projects under Institutional Development for Community Development</h3>
				</div>
				<div class="col-6 col-md-4"><input id="s_PUIDCD" placeholder="0" type="number"/></div>
				<div class="col-6 col-md-3"><input id="t_PUIDCD" placeholder="0" type="number"/></div>
			</div>
			<hr/>
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp"><h3>Projects under Social Awareness and Advocacy</h3></div>
				<div class="col-6 col-md-4"><input id="s_PSAA" placeholder="0" type="number"/></div>
				<div class="col-6 col-md-3"><input id="t_PSAA" placeholder="0" type="number"/></div>
			</div>
			<hr />
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp"><h3>Projects Under Community-engaged research</h3></div>
				<div class="col-6 col-md-4"><input id="s_PUCER" placeholder="0" type="number"/></div>
				<div class="col-6 col-md-3"><input id="t_PUCER" placeholder="0" type="number" /></div>
			</div>
			<hr />
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp"><h3>Projects Underservice-learning</h3></div>
				<div class="col-6 col-md-4"><input id="s_PUL" placeholder="0" type="number"/></div>
				<div class="col-6 col-md-3"><input id="t_PUL" placeholder="0" type="number"/></div>
			</div>
			<div class="button-wrapper">
				<button onclick="kra2_Nextbtn()" type="button" class="btn btn-dark">Next</button>
			</div>
		</div>
	</body>
</html>

<script type="text/javascript"> 
function kra2_Nextbtn(){
  var s_PUIDCD = $('#s_PUIDCD').val(); //Institutional Development
  var t_PUIDCD = $('#t_PUIDCD').val();
  //array
  var s_puidcd_arr=[s_PUIDCD];
  var t_puidcd_arr=[t_PUIDCD];
  localStorage.setItem('s_puidcd_arr', s_puidcd_arr);
  localStorage.setItem('t_puidcd_arr', t_puidcd_arr);


  var s_PSAA = $('#s_PSAA').val(); //Social Awareness
  var t_PSAA = $('#t_PSAA').val();
  //array
  var s_psaa_arr=[s_PSAA];
  var t_psaa_arr=[t_PSAA];
  localStorage.setItem('s_psaa_arr', s_psaa_arr);
  localStorage.setItem('t_psaa_arr', t_psaa_arr);


  var s_PUCER = $('#s_PUCER').val(); //Community-engaged
  var t_PUCER = $('#t_PUCER').val();
  //array
  var s_pucer_arr=[s_PUCER];
  var t_pucer_arr=[t_PUCER];
  localStorage.setItem('s_pucer_arr', s_pucer_arr);
  localStorage.setItem('t_pucer_arr', t_pucer_arr);


  var s_PUL = $('#s_PUL').val(); //Underservice-learning
  var t_PUL = $('#t_PUL').val(); 
  //array 
  var s_pul_arr=[s_PUL];
  var t_pul_arr=[t_PUL];
  localStorage.setItem('s_pul_arr', s_pul_arr);
  localStorage.setItem('t_pul_arr', t_pul_arr);

  window.location.href="http://localhost/Simbahayan/student-official/php/kra2-next.php"

}

</script>