<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>KRA 3</title>
		<link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/kra3.css"/>
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
		<div class="kra-1">KRA 3: Dynamic Community Development External Partnerships and Networks</div>
		<div class="accordion accordion-flush" id="accordionFlushExample">
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingOne">
				<button
				class="accordion-button collapsed"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#flush-collapseOne"
				aria-expanded="false"
				aria-controls="flush-collapseOne "
				>
				People's Organizations
				<!-- Number of DATA submitted -->
				<div class="header-num-wrapper">
					<div class="header-num">
					</div>
				</div>
				<!-- Number of DATA submitted -->
				</button>
				</h2>
				<div
					id="flush-collapseOne"
					class="accordion-collapse collapse"
					aria-labelledby="flush-headingOne"
					data-bs-parent="#accordionFlushExample"
					>
					<div class="accordion-body">
						<!-- Accordion-list -->
						<div class="container">
							<div class="row">
								<div class="col"><h3>Status No.</h3></div>
								<div class="col"><h3>Target No.</h3></div>
								<div class="w-100"></div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Status no.-->
											No. of MOU/MOA
											<input class="form-control input_number" id="POs_MM" placeholder="0" type="number" readonly/>
										</li>
										<li class="list-group-item">
											No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="POs_CDAA" placeholder="0" type="number"  readonly/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											No. of MOU/MOA
											<input class="form-control input_number" id="POt_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="POt_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<!--Targer No.-->
							</div>
						</div>
						<!-- Accordion-list -->
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingTwo">
				<button
				class="accordion-button collapsed"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#flush-collapseTwo"
				aria-expanded="false"
				aria-controls="flush-collapseTwo"
				>
				Government Agencies or LGUs
				<!-- Number of DATA submitted -->
				<div class="header-num-wrapper">
					<div class="header-num">
					</div>
				</div>
				<!-- Number of DATA submitted -->
				</button>
				</h2>
				<div
					id="flush-collapseTwo"
					class="accordion-collapse collapse"
					aria-labelledby="flush-headingTwo"
					data-bs-parent="#accordionFlushExample"
					>
					<div class="accordion-body">
						<!-- Accordion-list -->
						<div class="container">
							<div class="row">
								<div class="col"><h3>Status No.</h3></div>
								<div class="col"><h3>Target No.</h3></div>
								<div class="w-100"></div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Status no.-->
											Status No. of MOU/MOA
											<input class="form-control input_number" id="GAs_MM" placeholder="0" type="number" readonly  />
										</li>
										<li class="list-group-item">
											Status No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="GAs_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Target no.-->
											Target No. of MOU/MOA
											<input class="form-control input_number" id="GAt_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Target No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="GAt_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<!-- Target No.-->
							</div>
						</div>
						<!-- accordion-list-->
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingThree">
				<button
				class="accordion-button collapsed"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#flush-collapseThree"
				aria-expanded="false"
				aria-controls="flush-collapseThree"
				>
				Non- Government Organizations
				<!-- Number of DATA submitted -->
				<div class="header-num-wrapper">
					<div class="header-num">
					</div>
				</div>
				<!-- Number of DATA submitted -->
				</button>
				</h2>
				<div
					id="flush-collapseThree"
					class="accordion-collapse collapse"
					aria-labelledby="flush-headingThree"
					data-bs-parent="#accordionFlushExample"
					>
					<div class="accordion-body">
						<!-- accordion-list -->
						<div class="container">
							<div class="row">
								<div class="col"><h3>Status No.</h3></div>
								<div class="col"><h3>Target No.</h3></div>
								<div class="w-100"></div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Status no.-->
											Status No. of MOU/MOA
											<input class="form-control input_number" id="NGOs_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Status No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="NGOs_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of MOU/MOA
											<input class="form-control input_number" id="NGOt_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Target No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="NGOt_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<!-- Targer No. -->
							</div>
						</div>
						<!-- Accordion-list -->
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingFour">
				<button
				class="accordion-button collapsed"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#flush-collapseFour"
				aria-expanded="false"
				aria-controls="flush-collapseFour"
				>
				Basic Educational Institutions
				<!-- Number of DATA submitted -->
				<div class="header-num-wrapper">
					<div class="header-num">
					</div>
				</div>
				<!-- Number of DATA submitted -->
				</button>
				</h2>
				<div
					id="flush-collapseFour"
					class="accordion-collapse collapse"
					aria-labelledby="flush-headingFour"
					data-bs-parent="#accordionFlushExample"
					>
					<div class="accordion-body">
						<!-- Accordion-list -->
						<div class="container">
							<div class="row">
								<div class="col"><h3>Status No.</h3></div>
								<div class="col"><h3>Target No.</h3></div>
								<div class="w-100"></div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Status no.-->
											Status No. of MOU/MOA
											<input class="form-control input_number" id="BEIs_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Status No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="BEIs_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of MOU/MOA
											<input class="form-control input_number" id="BEIt_MM" placeholder="0" type="number" readonly />
										</li>
										<li class="list-group-item">
											Target No. of Community Development and Advocacy Activities
											<input class="form-control input_number" id="BEIt_CDAA" placeholder="0" type="number" readonly />
										</li>
									</ul>
								</div>
								<!-- Targer No.-->
									</div>
						</div>
				<!-- accordion-list -->
					</div>
				</div>
			</div>
			<div class="button-wrapper">
	        <a class="btn btn-warning" id="edit_btn" onclick="edit_kra3()" href="#" role="button">Edit</a>
		  	<a class="btn btn-warning" id="save_btn" style="display: none;" onclick="save_kra3()" href="#" role="button">Save</a>
	        <a class="btn btn-warning" href="kra3-next.php" role="button">Next</a>
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
  get_kra3datafromuserid();
  function save_kra3() {
	var POs_MM = $("#POs_MM").val();
	var POs_CDAA = $("#POs_CDAA").val();
	var POt_MM = $("#POt_MM").val();
	var POt_CDAA = $("#POt_CDAA").val();

	//array
	var pos_arr = [POs_MM,POs_CDAA];
	var pot_arr = [POt_MM,POt_CDAA];

	localStorage.setItem('pos_arr', pos_arr);
	localStorage.setItem('pot_arr', pot_arr);


	var pos_arr = [POs_MM,POs_CDAA];
	var pot_arr = [POt_MM,POt_CDAA];


	// SETTING IT TO LOCAL STORAGE
	localStorage.setItem("pos_arr", pos_arr);
	localStorage.setItem("pot_arr", pot_arr);


	var GAs_MM = $("#GAs_MM").val();
	var GAs_CDAA = $("#GAs_CDAA").val();
	var GAt_MM = $("#GAt_MM").val();
	var GAt_CDAA = $("#GAt_CDAA").val();

	//array
	var gas_arr = [GAs_MM,GAs_CDAA];
	var gat_arr = [GAt_MM,GAt_CDAA];
	localStorage.setItem('gas_arr', gas_arr);
	localStorage.setItem('gat_arr', gat_arr);



	var NGOs_MM = $("#NGOs_MM").val();
	var NGOs_CDAA = $("#NGOs_CDAA").val();
	var NGOt_MM = $("#NGOt_MM").val();
	var NGOt_CDAA = $("#NGOt_CDAA").val();

	//array
	var ngos_arr = [NGOs_MM,NGOs_CDAA];
	var ngot_arr = [NGOt_MM,NGOt_CDAA];
	localStorage.setItem('ngos_arr', ngos_arr);
	localStorage.setItem('ngot_arr', ngot_arr);


	var BEIs_MM = $("#BEIs_MM").val();
	var BEIs_CDAA = $("#BEIs_CDAA").val();
	var BEIt_MM = $("#BEIt_MM").val();
	var BEIt_CDAA = $("#BEIt_CDAA").val();

	//array
	var beis_arr = [BEIs_MM,BEIs_CDAA];
	var beit_arr = [BEIt_MM,BEIt_CDAA];
	localStorage.setItem('beis_arr', beis_arr);
	localStorage.setItem('beit_arr', beit_arr);

  let user_id = localStorage.getItem('selected_user_id');

  $.ajax({
  url: url,
  type: "POST",
  data: {
	csrf_token: "{{ csrf_token() }}",
	tag: "update1_kra3", 
	user_id: user_id,
	pos_arr: localStorage.getItem('pos_arr'),
	pot_arr: localStorage.getItem('pot_arr'),
	gas_arr: localStorage.getItem('gas_arr'),
	gat_arr: localStorage.getItem('gat_arr'),
	ngos_arr: localStorage.getItem('ngos_arr'),
	ngot_arr: localStorage.getItem('ngot_arr'),
	beis_arr: localStorage.getItem('beis_arr'),
	beit_arr: localStorage.getItem('beit_arr')
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
function edit_kra3() {
	$('.input_number').removeAttr('readonly');
	$('#save_btn').show();
	$('#edit_btn').hide();
}
  get_kra3datafromuserid();
  function get_kra3datafromuserid(){
    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
      url: url,
      type: "GET",
      data: {
        csrf_token: "{{ csrf_token() }}",
        tag: "get_kra3datafromuserid",
        user_id: user_id
      },
      complete: function (response) {
        var data = JSON.parse(response.responseText);
        var pos_arr = data[0].pos_arr.split(",");
        $('#POs_MM').val(pos_arr[0]);
        $('#POs_CDAA').val(pos_arr[1]);
        var pot_arr = data[0].pot_arr.split(",");
        $('#POt_MM').val(pot_arr[0]);
        $('#POt_CDAA').val(pot_arr[1]);
        var gas_arr = data[0].gas_arr.split(",");
        $('#GAs_MM').val(gas_arr[0]);
        $('#GAs_CDAA').val(gas_arr[1]);
        var gat_arr = data[0].gat_arr.split(",");
        $('#GAt_MM').val(gat_arr[0]);
        $('#GAt_CDAA').val(gat_arr[1]);
        var ngos_arr = data[0].ngos_arr.split(",");
        $('#NGOs_MM').val(ngos_arr[0]);
        $('#NGOs_CDAA').val(ngos_arr[1]);
        var ngot_arr = data[0].ngot_arr.split(",");
        $('#NGOt_MM').val(ngot_arr[0]);
        $('#NGOt_CDAA').val(ngot_arr[1]);
        var beis_arr = data[0].beis_arr.split(",");
        $('#BEIs_MM').val(beis_arr[0]);
        $('#BEIs_CDAA').val(beis_arr[1]);
        var beit_arr = data[0].beit_arr.split(",");
        $('#BEIt_MM').val(beit_arr[0]);
        $('#BEIt_CDAA').val(beit_arr[1]);
      }
    })
  }
</script>