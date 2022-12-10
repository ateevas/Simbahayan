<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>KRA 1</title>
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
		<div class="kra-1">KRA 1: Self-reliant, interdependent, and empowered partner communities and institutions</div>
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
				aria-controls="flush-collapseOne "
				>
				Cultural Life, Expression and Rootedness for all (Culture and heritage development)
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
											Status No. of Culture and Heritage Projects
											<input readonly id="cahds_CHP" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Status No. of Communities/ Institutions Served
											<input readonly id="cahds_CIS" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Status No. of Participants/ Members
											<input readonly id="cahds_PM" placeholder="0" type="number"  />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of Culture and Heritage Projects
											<input readonly id="cahdt_CHP" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Target No. of Communities/ Institutions Served
											<input readonly id="cahdt_CIS" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Target No. of Participants/ Members
											<input readonly id="cahdt_PM" placeholder="0" type="number"  />
										</li>
									</ul>
								</div>
								<!-- Targer No. -->
							</div>
						</div>
						<!-- accordion-list -->
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
				Sports for all (Sports development)
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
											Status No. of Sports Development Projects
											<input readonly id="sds_SDP" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Status No. of Communities/ Institutions Served
											<input readonly id="sds_CIS" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Status No. of Participants/ Members
											<input readonly id="sds_PM" placeholder="0" type="number"  />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of Sports Development Projects
											<input readonly id="sdt_SDP" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Target No. of Communities/ Institutions Served
											<input readonly id="sdt_CIS" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Target No. of Participants/ Members
											<input readonly id="sdt_PM" placeholder="0" type="number"  />
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
				<h2 class="accordion-header" id="flush-headingThree">
				<button
				class="accordion-button collapsed"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#flush-collapseThree"
				aria-expanded="false"
				aria-controls="flush-collapseThree"
				>
				Environmental Justice for all (Environmental sustainability and action; disaster risk reduction and
				management)
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
											Status No. of Environmental Sustainability and Action Projects
											<input readonly id="drrms_ESAP" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Status No. of Communities/ Institutions Served
											<input readonly id="drrms_CIS" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Status No. of Participants/ Members
											<input readonly id="drrms_PM" placeholder="0" type="number"  />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of Sustainability and Action Projects
											<input readonly id="drrmt_SAP" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Target No. of Communities/ Institutions Served
											<input readonly id="drrmt_CIS" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Target No. of Participants/ Members
											<input readonly id="drrmt_PM" placeholder="0" type="number"  />
										</li>
									</ul>
								</div>
								<!-- Target No.-->
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
				Holistic Life for all (Family and household development)
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
											Status No. of Family and Household Projects
											<input readonly id="fhds_FHP" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Status No. of Communities/ Institutions Served
											<input readonly id="fhds_CIS" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Status No. of Participants/ Members
											<input readonly id="fhds_PM" placeholder="0" type="number"  />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of Family and Household Projects
											<input readonly id="fhdt_FHP" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Target No. of Communities/ Institutions Served
											<input readonly id="fhdt_CIS" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Target No. of Participants/ Members
											<input readonly id="fhdt_PM" placeholder="0" type="number"  />
										</li>
									</ul>
								</div>
								<!-- Target No. -->
							</div>
						</div>
						<!-- Accordion-list -->
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
				Community organizations formed
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
						<!--- Accordion-list -->
						<div class="container">
							<div class="row">
								<div class="col"><h3>Status No.</h3></div>
								<div class="col"><h3>Target No.</h3></div>
								<div class="w-100"></div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Status no. -->
											Status No. of Community Organization Formed
											<input readonly id="cofs_COF" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Status No. of Communities/ Institutions Served under each Community Organization Formed
											<input readonly id="cofs_CISCOF" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Status No. of Participants/ Members under each Community Organization Formed
											<input readonly id="cofs_PMCOF" placeholder="0" type="number"  />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Target no. -->
											Target No. of Community Organization Formed
											<input readonly id="coft_COF" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Target No. of Communities/ Institutions Served under each Community Organization Formed
											<input readonly id="coft_CISCOF" placeholder="0" type="number"  />
										</li>
										<li class="list-group-item">
											Target No. of Participants/ Members under each Community Organization Formed
											<input readonly id="coft_PMCOF" placeholder="0" type="number"  />
										</li>
									</ul>
								</div>
								<!-- Targer No.-->
							</div>
						</div>
						<!-- Accordion-list -->
					</div>
				</div>
			</div>
			<div class="button-wrapper">
				<a class="btn btn-warning" href="#" role="button">Edit</a>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#approval">Approve</button>
				<!-- Modal -->
				<div
					class="modal fade"
					id="approval"
					tabindex="-1"
					role="dialog"
					aria-labelledby="exampleModalCenterTitle"
					aria-hidden="true"
					>
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Annual Report Approval</h5>
								 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">Approve the Annual Report? It cannot be undone</div>
							<div class="modal-footer d-flex justify-content-between">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
								<button type="button" class="btn btn-warning" onclick="approve_kra1coordinator()">Yes</button>
							</div>
						</div>
					</div>
				</div>
				<a class="btn btn-dark" href="kra1.php" role="button">Prev</a>
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
function approve_kra1coordinator() {
	let user_id=localStorage.getItem('selected_user_id');
	 $.ajax({
      url: url,
      type: "GET",
      data: {
        csrf_token: "{{ csrf_token() }}",
        tag: "approve_kra1coordinator",
        user_id: user_id
      },
      complete: function (response) {
       var data = JSON.parse(response.responseText);
	    if(data['status'] == "updated") {
	    	alert('successfully updated!');
	    	window.location.href="http://localhost/Simbahayan/coordinator/php/kra-select.php";
	    } else {
	    	alert('unknown error occured');
	    	location.reload();
	    }
      }
    })
}

get_kra1datafromuserid();
  function get_kra1datafromuserid(){
    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
      url: url,
      type: "GET",
      data: {
        csrf_token: "{{ csrf_token() }}",
        tag: "get_kra1datafromuserid",
        user_id: user_id
      },
      complete: function (response) {
        var data = JSON.parse(response.responseText);
        console.log(data);
        var cahds_arr = data[0].cahds_arr.split(",");
        $('#cahds_CHP').val(cahds_arr[0]);
        $('#cahds_CIS').val(cahds_arr[1]);
        $('#cahds_PM').val(cahds_arr[2]);
        var cahdt_arr = data[0].cahdt_arr.split(",");
        $('#cahdt_CHP').val(cahdt_arr[0]);
        $('#cahdt_CIS').val(cahdt_arr[1]);
        $('#cahdt_PM').val(cahdt_arr[2]);
        var sds_arr = data[0].sds_arr.split(",");
        $('#sds_SDP').val(sds_arr[0]);
        $('#sds_CIS').val(sds_arr[1]);
        $('#sds_PM').val(sds_arr[2]);
        var sdt_arr = data[0].sdt_arr.split(",");
        $('#sdt_SDP').val(sdt_arr[0]);
        $('#sdt_CIS').val(sdt_arr[1]);
        $('#sdt_PM').val(sdt_arr[2]);
        var drrms_arr = data[0].drrms_arr.split(",");
        $('#drrms_ESAP').val(drrms_arr[0]);
        $('#drrms_CIS').val(drrms_arr[1]);
        $('#drrms_PM').val(drrms_arr[2]);
        var drrmt_arr = data[0].drrmt_arr.split(",");
        $('#drrmt_SAP').val(drrmt_arr[0]);
        $('#drrmt_CIS').val(drrmt_arr[1]);
        $('#drrmt_PM').val(drrmt_arr[2]);
        var fhds_arr = data[0].fhds_arr.split(",");
        $('#fhds_FHP').val(fhds_arr[0]);
        $('#fhds_CIS').val(fhds_arr[1]);
        $('#fhds_PM').val(fhds_arr[2]);
        var fhdt_arr = data[0].fhdt_arr.split(",");
        $('#fhdt_FHP').val(fhdt_arr[0]);
        $('#fhdt_CIS').val(fhdt_arr[1]);
        $('#fhdt_PM').val(fhdt_arr[2]);
        var cofs_arr = data[0].cofs_arr.split(",");
        $('#cofs_COF').val(cofs_arr[0]);
        $('#cofs_CISCOF').val(cofs_arr[1]);
        $('#cofs_PMCOF').val(cofs_arr[2]);
        var coft_arr = data[0].coft_arr.split(",");
        $('#coft_COF').val(coft_arr[0]);
        $('#coft_CISCOF').val(coft_arr[1]);
        $('#coft_PMCOF').val(coft_arr[2]);
     }
    })
  }
</script>

