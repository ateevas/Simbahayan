<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>KRA 2</title>
		<link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/kra2.css"/>
		<?php
			include('../cdn/cdn.php');
		?>
	</head>
	<body>
		<?php
			include('../nav_master/nav.php');
		?>
		<div class="title-wrapper m-2">
			<h3>Annual Report</h3>
		</div>
		<div class="kra-1">KRA 2: Thomasian engagement as agents of social transformation</div>
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
				<div class="col-6 col-md-4" id="ucdp">
					<h3>Projects under Institutional Development for Community Development</h3>
				</div>
				<div class="col-6 col-md-4"><input class="form-control input_number" readonly id="s_PUIDCD" placeholder="0" type="number"/></div>
				<div class="col-6 col-md-3"><input class="form-control input_number" readonly id="t_PUIDCD" placeholder="0" type="number"/></div>
			</div>
			<hr />
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp"><h3>Projects under Social Awareness and Advocacy</h3></div>
				<div class="col-6 col-md-4"><input class="form-control input_number" readonly id="s_PSAA" placeholder="0" type="number" /></div>
				<div class="col-6 col-md-3"><input class="form-control input_number" readonly id="t_PSAA" placeholder="0" type="number" /></div>
			</div>
			<hr />
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp"><h3>Projects Under Community-engaged research</h3></div>
				<div class="col-6 col-md-4"><input class="form-control input_number" readonly id="s_PUCER" placeholder="0" type="number" /></div>
				<div class="col-6 col-md-3"><input class="form-control input_number" readonly id="t_PUCER" placeholder="0" type="number" /></div>
			</div>
			<hr />
			<div class="row">
				<div class="col-6 col-md-4" id="ucdp"><h3>Projects Underservice-learning</h3></div>
				<div class="col-6 col-md-4"><input class="form-control input_number" readonly id="s_PUL" placeholder="0" type="number" /></div>
				<div class="col-6 col-md-3"><input class="form-control input_number" readonly id="t_PUL" placeholder="0" type="number" /></div>
			</div>
			<div class="button-wrapper">
				<a class="btn btn-warning" id="edit_btn" onclick="edit_kra2()" href="#" role="button">Edit</a>
		  		<a class="btn btn-warning" id="save_btn" style="display: none;" onclick="save_kra2()" href="#" role="button">Save</a>
				<a class="btn btn-dark" href="kra2-next.php" role="button">Next</a>
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
	get_lock();
	function get_lock() {
		if(localStorage.getItem('edit_lock') == "1") {
			$('#edit_btn').addClass("disabled");
			$('#edit_btn').attr("disabled","disabled");
			$('.approve').addClass("disabled");
			$('.approve').attr("disabled","disabled");
		}
	}
get_kra2datafromuserid();
function save_kra2() {
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

  let user_id = localStorage.getItem('selected_user_id');

  $.ajax({
  url: url,
  type: "POST",
  data: {
	 csrf_token: "{{ csrf_token() }}",
	 tag: "update1_kra2", 
	 user_id: user_id,
	 s_puidcd_arr: localStorage.getItem('s_puidcd_arr'),
	 t_puidcd_arr: localStorage.getItem('t_puidcd_arr'),
	 s_psaa_arr: localStorage.getItem('s_psaa_arr'),
	 t_psaa_arr: localStorage.getItem('t_psaa_arr'),
	 s_pucer_arr: localStorage.getItem('s_pucer_arr'),
	 t_pucer_arr: localStorage.getItem('t_pucer_arr'),
	 s_pul_arr: localStorage.getItem('s_pul_arr'),
	 t_pul_arr: localStorage.getItem('t_pul_arr')
  },
  complete: function (response) {
	 console.log(response.responseText);
	 var data = JSON.parse(response.responseText);
	 if(data['status'] == "ok") {
		alert("successfully saved!");
		location.reload();
	 } else {
		alert("Unknown error occured. Please try again.")
	 }
  }
})

}
function edit_kra2() {
	$('.input_number').removeAttr('readonly');
	$('#save_btn').show();
	$('#edit_btn').hide();
}
function get_kra2datafromuserid(){
	let user_id = localStorage.getItem('selected_user_id');
	$.ajax({
		url: url,
		type: "GET",
		data: {
			csrf_token: "{{ csrf_token() }}",
			tag: "get_kra2datafromuserid",
			user_id: user_id
		},
		complete: function (response) {
			var data = JSON.parse(response.responseText);
			var s_puidcd_arr = data[0].s_puidcd_arr.split(",");
			$('#s_PUIDCD').val(s_puidcd_arr[0]);
			var t_puidcd_arr = data[0].t_puidcd_arr.split(",");
			$('#t_PUIDCD').val(t_puidcd_arr[0]);
			var s_psaa_arr = data[0].s_psaa_arr.split(",");
			$('#s_PSAA').val(s_psaa_arr[0]);
			var t_psaa_arr = data[0].t_psaa_arr.split(",");
			$('#t_PSAA').val(t_psaa_arr[0]);
			var s_pucer_arr = data[0].s_pucer_arr.split(",");
			$('#s_PUCER').val(s_pucer_arr[0]);
			var t_pucer_arr = data[0].t_pucer_arr.split(",");
			$('#t_PUCER').val(t_pucer_arr[0]);
			var s_pul_arr = data[0].s_pul_arr.split(",");
			$('#s_PUL').val(s_pul_arr[0]);
			var t_pul_arr = data[0].t_pul_arr.split(",");
			$('#t_PUL').val(t_pul_arr[0]);
		}
	})
}
</script>