<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Community Development Report</title>
		<link rel="stylesheet" href="http://localhost/Simbahayan/student-official/css/kra2.css"/>
		<?php
			include('../cdn/cdn.php');
		?>
	</head>
	<body>
		<?php
			include('../nav_master/nav.php');
		?>
		<hr />
		<div class="title-wrapper m-2">
			<h3>Community Development Report</h3>
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
				Health for all (Health and wellness development)
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
											Status No. of Health and Wellness Development Projects
											<input id="hs_HWDP" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Status No. of Communities/ Institutions Served
											<input id="hs_CIS" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Status No. of Participants/ Members
											<input id="hs_PM" placeholder="0" type="number" />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of Health and Wellness Development Projects
											<input id="ht_HWDP" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Target  No. of Communities/ Institutions Served
											<input id="ht_CIS" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Target No. of Participants/ Members
											<input id="ht_PM" placeholder="0" type="number" />
										</li>
									</ul>
								</div>
								<!-- Target No.-->
							</div>
						</div>
						<!--accordion-list -->
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
				Education for all (Equitable and inclusive education)
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
											Status No. of Equitable and Inclusive Education Projects
											<input id="es_EIEP" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Status No. of Communities/ Institutions Served
											<input id="es_CIS" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Status No. of Participants/ Members
											<input id="es_PM" placeholder="0" type="number" />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of Equitable and Inclusive Education Projects
											<input id="et_EIEP" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Target No. of Communities/ Institutions Served
											<input id="et_CIS" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Target No. of Participants/ Members
											<input id="et_PM" placeholder="0" type="number" />
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
				Good governance for all (Leadership, organizational development, and good governance)
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
											Status No. of Leadership, Organizational Development, and Good Governance Projects
											<input id="ggs_LODGGP" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Status No. of Communities/ Institutions Served
											<input id="ggs_CIS" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Status No. of Participants/ Members
											<input id="ggs_PM" placeholder="0" type="number" />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of Leadership, Organizational Development, and Good Governance Projects
											<input id="ggt_LODGGP" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Target No. of Communities/ Institutions Served
											<input id="ggt_CIS" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Target No. of Participants/ Members
											<input id="ggt_PM" placeholder="0" type="number" />
										</li>
									</ul>
								</div>
								<!-- Target No.-->
							</div>
						</div>
						<!-- accordion-list -->
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
				Economic justice for all (Employability and social enterprise)
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
											Status No. of Employability and Social Enterprise Projects
											<input id="ejs_ESEP" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Status No. of Communities/ Institutions Served
											<input id="ejs_CIS" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Status No. of Participants/ Members
											<input id="ejs_PM" placeholder="0" type="number" />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!---Target no.-->
											Target No. of Employability and Social Enterprise Projects
											<input id="ejt_ESEP" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Target No. of Communities/ Institutions Served
											<input id="ejt_CIS" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Target No. of Participants/ Members
											<input id="ejt_PM" placeholder="0" type="number" />
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
				<h2 class="accordion-header" id="flush-headingFive">
				<button
				class="accordion-button collapsed"
				type="button"
				data-bs-toggle="collapse"
				data-bs-target="#flush-collapseFive"
				aria-expanded="false"
				aria-controls="flush-collapseFive"
				>
				Christ's love for all (Socio-pastoral ministry and evangelization)
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
											<!-- Status no. -->
											Status No. of Socio-Pastoral Ministry and Evangelization Projects
											<input id="cls_SPMEP" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Status No. of Communities/ Institutions Served
											<input id="cls_CIS" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Status No. of Participants/ Members
											<input id="cls_PM" placeholder="0" type="number" />
										</li>
									</ul>
								</div>
								<div class="col">
									<ul class="list-group">
										<li class="list-group-item">
											<!-- Target no. -->
											Target No. of Socio-Pastoral Ministry and Evangelization Projects
											<input id="clt_SPMEP" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Target No. of Communities/ Institutions Served
											<input id="clt_CIS" placeholder="0" type="number" />
										</li>
										<li class="list-group-item">
											Target No. of Participants/ Members
											<input id="clt_PM" placeholder="0" type="number" />
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
			<div class="button-wrapper">
				<button onclick="btnNext()" class="btn btn-dark" type="button">Next</button>
			</div>
		</div>
	</body>
</html>
<script type="text/javascript">
function btnNext(){ 
//----------------------- Health for All -----------------------//
var hs_HWDP = $('#hs_HWDP').val();
var hs_CIS = $('#hs_CIS').val();
var hs_PM = $('#hs_PM').val();
var ht_HWDP = $('#ht_HWDP').val();
var ht_CIS = $('#ht_CIS').val();
var ht_PM = $('#ht_PM').val();
var hs_arr=new Array(hs_HWDP, hs_CIS, hs_PM);
var ht_arr=[ht_HWDP, ht_CIS, ht_PM];
localStorage.setItem('hs_arr', hs_arr);
localStorage.setItem('ht_arr', ht_arr);
//----------------------- Education for All -----------------------//
var es_EIEP = $('#es_EIEP').val();
var es_CIS = $('#es_CIS').val();
var es_PM = $('#es_PM').val();
var et_EIEP = $('#et_EIEP').val();
var et_CIS = $('#et_CIS').val();
var et_PM = $('#et_PM').val();
var es_arr=[es_EIEP, es_CIS, es_PM];
var et_arr=[et_EIEP, et_CIS, et_PM];
localStorage.setItem('es_arr', es_arr);
localStorage.setItem('et_arr', et_arr);
//----------------------- Good Governance for All -----------------------//
var ggs_LODGGP = $('#ggs_LODGGP').val();
var ggs_CIS = $('#ggs_CIS').val();
var ggs_PM = $('#ggs_PM').val();
var ggt_LODGGP = $('#ggt_LODGGP').val();
var ggt_CIS = $('#ggt_CIS').val();
var ggt_PM = $('#ggt_PM').val();
var ggs_arr=[ggs_LODGGP, ggs_CIS, ggs_PM];
var ggt_arr=[ggt_LODGGP, ggt_CIS, ggt_PM];
localStorage.setItem('ggs_arr', ggs_arr);
localStorage.setItem('ggt_arr', ggt_arr);
//----------------------- Economic Justice for All -----------------------//
var ejs_ESEP = $('#ejs_ESEP').val();
var ejs_CIS = $('#ejs_CIS').val();
var ejs_PM = $('#ejs_PM').val();
var ejt_ESEP = $('#ejt_ESEP').val();
var ejt_CIS = $('#ejt_CIS').val();
var ejt_PM = $('#ejt_PM').val();
var ejs_arr=[ejs_ESEP, ejs_CIS, ejs_PM];
var ejt_arr=[ejt_ESEP, ejt_CIS, ejt_PM];
localStorage.setItem('ejs_arr', ejs_arr);
localStorage.setItem('ejt_arr', ejt_arr);
//----------------------- Christ Love for All -----------------------//
var cls_SPMEP = $('#cls_SPMEP').val();
var cls_CIS = $('#cls_CIS').val();
var cls_PM = $('#cls_PM').val();
var clt_SPMEP = $('#clt_SPMEP').val();
var clt_CIS = $('#clt_CIS').val();
var clt_PM = $('#clt_PM').val();
var cls_arr=[cls_SPMEP, cls_CIS, cls_PM];
var clt_arr=[clt_SPMEP, clt_CIS, clt_PM];
localStorage.setItem('cls_arr', cls_arr);
localStorage.setItem('clt_arr', clt_arr);
window.location.href="http://localhost/Simbahayan/student-official/php/kra1-next.php";
}
</script>