<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Community Development Report</title>
		<link rel="stylesheet" href="http://localhost/Simbahayan/student-official/css/kra2-next.css"/>
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
		<div class="accordion accordion-flush" id="accordionFlushExample">
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingOne">
				<button
				class="accordion-button collapsed"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#flush-collapseOne"
				aria-expanded="false"
				aria-controls="flush-collapseOne"
				>
				Number of participants in the projects under the UDCP
				<!--Number of DATA submitted -->
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
						<!-- accordion-list -->
						<div class="container">
							<div class="row">
								<div class="col"><h3>Status No.</h3></div>
								<div class="col"><h3>Target No.</h3></div>
								<div class="w-100"></div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Status no. -->
											No. of Student Organizations
											<input id="UDCPs_NSO" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Students
											<input id="UDCPs_NStu" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Faculty
											<input id="UDCPs_NFac" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Administratiors
											<input id="UDCPs_NAdmin" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Support Staff
											<input id="UDCPs_NSS" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Alumni
											<input id="UDCPs_NAlumni" placeholder="0" type="number"/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											No. of Student Organizations
											<input id="UDCPt_NSO" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Students
											<input id="UDCPt_NStu" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Faculty
											<input id="UDCPt_NFac" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Administratiors
											<input id="UDCPt_NAdmin" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Support Staff
											<input id="UDCPt_NSS" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Alumni
											<input id="UDCPt_NAlumni" placeholder="0" type="number"/>
										</li>
									</ul>
								</div>
								<!-- Targer No.-->
							</div>
						</div>
						<!-- accordion-list  -->
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingFive">
				<button
				class="accordion-button collapsed"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#flush-collapseFive"
				aria-expanded="false"
				aria-controls="flush-collapseFive"
				>
				Research presentation in fora/ conference
				<!-- Number of DATA submitted -->
				<div class="header-num-wrapper">
					<div class="header-num">
					</div>
				</div>
				<!-- Number of DATA submitted -->
				</button>
				</h2>
				<div
					id="flush-collapseFive"
					class="accordion-collapse collapse"
					aria-labelledby="flush-headingFive"
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
											No. of Research Presentation in Local Fora/ Conference
											<input id="fcs_RPLFC" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Research Presentation in International Fora/ Conference
											<input id="fcs_RPIFC" placeholder="0" type="number"/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											No. of Research Presentation in Local Fora/ Conference
											<input id="fct_RPLFC" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											No. of Research Presentation in International Fora/ Conference
											<input id="fct_RPIFC" placeholder="0" type="number"/>
										</li>
									</ul>
								</div>
								<!-- Targer No.-->
							</div>
						</div>
						<!-- accordion-list  -->
					</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="flush-headingSix">
				<button
				class="accordion-button collapsed"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#flush-collapseSix"
				aria-expanded="false"
				aria-controls="flush-collapseSix"
				>
				Publications
				<!-- Number of DATA submitted -->
				<div class="header-num-wrapper">
					<div class="header-num">
					</div>
				</div>
				<!--Number of DATA submitted -->
				</button>
				</h2>
				<div
					id="flush-collapseSix"
					class="accordion-collapse collapse"
					aria-labelledby="flush-headingSix"
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
											Status No. of Local Publications
											<input id="ps_NLP" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											Status No. of International Publications
											<input id="ps_IP" placeholder="0" type="number"/>
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of Local Publications
											<input id="pt_NLP" placeholder="0" type="number"/>
										</li>
										<li class="list-group-item">
											Target No. of International Publications
											<input id="pt_IP" placeholder="0" type="number"/>
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
				<button onclick="kra2Next_Savebtn()" type="button" class="btn btn-warning">Save</button>
				<a class="btn btn-dark" href="kra2.php" role="button">Prev</a>
			</div>
		</div>
	</body>
</html>


<script type="text/javascript">
  function kra2Next_Savebtn(){
// --------- Num. of Participants ---------
	 var UDCPs_NSO = $("#UDCPs_NSO").val(); //UDCP: Status No.
	 var UDCPs_NStu = $("#UDCPs_NStu").val();
	 var UDCPs_NFac = $("#UDCPs_NFac").val();
	 var UDCPs_NAdmin = $("#UDCPs_NAdmin").val();
	 var UDCPs_NSS = $("#UDCPs_NSS").val();
	 var UDCPs_NAlumni = $("#UDCPs_NAlumni").val();

	 var UDCPt_NSO = $("#UDCPt_NSO").val(); //UDCP: Target No.
	 var UDCPt_NStu = $("#UDCPt_NStu").val();
	 var UDCPt_NFac = $("#UDCPt_NFac").val();
	 var UDCPt_NAdmin = $("#UDCPt_NAdmin").val();
	 var UDCPt_NSS = $("#UDCPt_NSS").val();
	 var UDCPt_NAlumni = $("#UDCPt_NAlumni").val();
	 //array
	 var udcps_arr = [UDCPs_NSO,UDCPs_NStu,UDCPs_NFac,UDCPs_NAdmin,UDCPs_NSS,UDCPs_NAlumni];
	 var udcpt_arr = [UDCPt_NSO,UDCPt_NStu,UDCPt_NFac,UDCPt_NAdmin,UDCPt_NSS,UDCPt_NAlumni];
	 localStorage.setItem('udcps_arr', udcps_arr);
	 localStorage.setItem('udcpt_arr', udcpt_arr);
	 
// --------- Research Presentation ---------
	 var fcs_RPLFC = $("#fcs_RPLFC").val(); //Fora/Conference: Status No.
	 var fcs_RPIFC = $("#fcs_RPIFC").val();

	 var fct_RPLFC = $("#fct_RPLFC").val(); //Fora/Conference: Target No.
	 var fct_RPIFC = $("#fct_RPIFC").val();
	 //array
	 var fcs_arr = [fcs_RPLFC,fcs_RPIFC];
	 var fct_arr = [fct_RPLFC,fct_RPIFC];
	 localStorage.setItem('fcs_arr', fcs_arr);
	 localStorage.setItem('fct_arr', fct_arr);


// --------- Publications ---------
	 var ps_NLP = $("#ps_NLP").val(); //Publication: Status No.
	 var ps_IP = $("#ps_IP").val();

	 var pt_NLP = $("#pt_NLP").val(); //Publication: Target No.
	 var pt_IP = $("#pt_IP").val();
	 //array
	 var ps_arr = [ps_NLP,ps_IP];
	 var pt_arr = [pt_NLP,pt_IP];
	 localStorage.setItem('ps_arr', ps_arr);
	 localStorage.setItem('pt_arr', pt_arr);


$.ajax({
  url: url,
  type: "POST",
  data: {
	 csrf_token: "{{ csrf_token() }}",
	 tag: "save_kra2", 
	 user_id: localStorage.getItem('user_id'),
	 s_puidcd_arr: localStorage.getItem('s_puidcd_arr'),
	 t_puidcd_arr: localStorage.getItem('t_puidcd_arr'),
	 s_psaa_arr: localStorage.getItem('s_psaa_arr'),
	 t_psaa_arr: localStorage.getItem('t_psaa_arr'),
	 s_pucer_arr: localStorage.getItem('s_pucer_arr'),
	 t_pucer_arr: localStorage.getItem('t_pucer_arr'),
	 s_pul_arr: localStorage.getItem('s_pul_arr'),
	 t_pul_arr: localStorage.getItem('t_pul_arr'),
	 udcps_arr: localStorage.getItem('udcps_arr'),
	 udcpt_arr: localStorage.getItem('udcpt_arr'),
	 fcs_arr: localStorage.getItem('fcs_arr'),
	 fct_arr: localStorage.getItem('fcs_arr'),
	 ps_arr: localStorage.getItem('ps_arr'),
	 pt_arr: localStorage.getItem('pt_arr') 
  },
  complete: function (response) {
	 console.log(response.responseText);
	 var data = JSON.parse(response.responseText);
	 if(data['status'] == "ok") {
		alert("successfully saved!");
		window.location.href="http://localhost/Simbahayan/student-official/php/kra-select.php"
	 } else {
		alert("Unknown error occured. Please try again.")
	 }
  }
})

  }
</script>