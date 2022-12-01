<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
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
    <div class="kra-1">KRA 1: Self-reliant, interdependent, and empowered partner communities and institutions</div>
    <!------Accordion------------------------->

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

            <!-----Number of DATA submitted------->
            <div class="header-num-wrapper">
              <div class="header-num">
                <input class="form-control" type="number" placeholder="0" readonly />
              </div>
            </div>
            <!-----Number of DATA submitted------->
          </button>
        </h2>

        <div
          id="flush-collapseOne"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            <!-----------------accordion-list ----------------->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Status no.-->
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
                <!----Targer No.-->
              </div>
            </div>
            <!-----------------accordion-list ----------------->
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

            <!-----Number of DATA submitted------->
            <div class="header-num-wrapper">
              <div class="header-num">
                <input class="form-control" type="number" placeholder="0" readonly />
              </div>
            </div>
            <!-----Number of DATA submitted------->
          </button>
        </h2>
        <div
          id="flush-collapseTwo"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            <!-----------------accordion-list ----------------->
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
                <!----Targer No.-->
              </div>
            </div>
            <!-----------------accordion-list ----------------->
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

            <!-----Number of DATA submitted------->
            <div class="header-num-wrapper">
              <div class="header-num">
                <input class="form-control" type="number" placeholder="0" readonly />
              </div>
            </div>
            <!-----Number of DATA submitted------->
          </button>
        </h2>
        <div
          id="flush-collapseThree"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            <!-----------------accordion-list ----------------->
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
                <!----Target No.-->
              </div>
            </div>
            <!-----------------accordion-list ----------------->
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

            <!-----Number of DATA submitted------->
            <div class="header-num-wrapper">
              <div class="header-num">
                <input class="form-control" type="number" placeholder="0" readonly />
              </div>
            </div>
            <!-----Number of DATA submitted------->
          </button>
        </h2>
        <div
          id="flush-collapseFour"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingFour"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            <!-----------------accordion-list ----------------->
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
                <!----Targer No.-->
              </div>
            </div>
            <!-----------------accordion-list ----------------->
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

            <!-----Number of DATA submitted------->
            <div class="header-num-wrapper">
              <div class="header-num">
                <input class="form-control" type="number" placeholder="0" readonly />
              </div>
            </div>
            <!-----Number of DATA submitted------->
          </button>
        </h2>
        <div
          id="flush-collapseFive"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingFive"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            <!-----------------accordion-list ----------------->
            <div class="container">
              <div class="row">
                <div class="col"><h3>Status No.</h3></div>
                <div class="col"><h3>Target No.</h3></div>
                <div class="w-100"></div>
                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Status no.-->
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
                      <!---Target no.-->
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
                <!----Targer No.-->
              </div>
            </div>
            <!-----------------accordion-list ----------------->
          </div>
        </div>
      </div>
      <div class="button-wrapper">
        <button onclick="btnSave()" type="button" class="btn btn-warning">Save</button>
        <a onclick="btnNext()" class="btn btn-dark" href="kra1-next.php" role="button">Next</a>
      </div>
    </div>

    <!---javascript bootstrap-->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
=======
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
				<div class="header-num-wrapper">
					<div class="header-num">
						<input class="form-control" type="number" placeholder="0" readonly />
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
				<div class="header-num-wrapper">
					<div class="header-num">
						<input class="form-control" type="number" placeholder="0" readonly />
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
				<div class="header-num-wrapper">
					<div class="header-num">
						<input class="form-control" type="number" placeholder="0" readonly />
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
				<div class="header-num-wrapper">
					<div class="header-num">
						<input class="form-control" type="number" placeholder="0" readonly />
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
				<div class="header-num-wrapper">
					<div class="header-num">
						<input class="form-control" type="number" placeholder="0" readonly />
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
				<button onclick="btnSave()" type="button" class="btn btn-warning">Save</button>
				<a onclick="btnNext()" class="btn btn-dark" href="kra1-next.php" role="button">Next</a>
			</div>
		</div>
		<!---javascript bootstrap-->
		<script
		src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
		integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
		crossorigin="anonymous"
		></script>
		<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
		integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
		crossorigin="anonymous"
		></script>
		<script
		src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"
		></script>
		<script
		src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"
		></script>
		<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"
		></script>
	</body>
>>>>>>> ebcab374f0dc23e4713768ebe826df73333132a1
</html>
<script type="text/javascript">
function btnSave(){
//----------------------- Healh for All -----------------------//
var hs_HWDP = $('#hs_HWDP').val();
var hs_CIS = $('#hs_CIS').val();
var hs_PM = $('#hs_PM').val();
var ht_HWDP = $('#ht_HWDP').val();
var ht_CIS = $('#ht_CIS').val();
var ht_PM = $('#ht_PM').val();
//----------------------- Education for All -----------------------//
var es_EIEP = $('#es_EIEP').val();
var es_CIS = $('#es_CIS').val();
var es_PM = $('#es_PM').val();
var et_EIEP = $('#et_EIEP').val();
var et_CIS = $('#et_CIS').val();
var et_PM = $('#et_PM').val();
//----------------------- Good Governance for All -----------------------//
var ggs_LODGGP = $('#ggs_LODGGP').val();
var ggs_CIS = $('#ggs_CIS').val();
var ggs_PM = $('#ggs_PM').val();
var ggt_LODGGP = $('#ggt_LODGGP').val();
var ggt_CIS = $('#ggt_CIS').val();
var ggt_PM = $('#ggt_PM').val();
//----------------------- Economic Justice for All -----------------------//
var ejs_ESEP = $('#ejs_ESEP').val();
var ejs_CIS = $('#ejs_CIS').val();
var ejs_PM = $('#ejs_PM').val();
var ejt_ESEP = $('#ejt_ESEP').val();
var ejt_CIS = $('#ejt_CIS').val();
var ejt_PM = $('#ejt_PM').val();
//----------------------- Christ Love for All -----------------------//
var cls_SPMEP = $('#cls_SPMEP').val();
var cls_CIS = $('#cls_CIS').val();
var cls_PM = $('#cls_PM').val();
var clt_SPMEP = $('#clt_SPMEP').val();
var clt_CIS = $('#clt_CIS').val();
var clt_PM = $('#clt_PM').val();
alert("Health for All " + "\n"
+ "Status No. of Health and Wellness Development Projects: " + hs_HWDP + "\n"
+ "Status No. of Communities/ Institutions Served: " + hs_CIS + "\n"
+ "Status No. of Participants/ Members: " + hs_PM + "\n"
+ "Target No. of Health and Wellness Development Projects: " + ht_HWDP+ "\n"
+ "Target No. of Communities/ Institutions Served: " + ht_CIS + "\n"
+ "Target No. of Participants/ Members: " + ht_PM + "\n"
+ "Education for All " + "\n"
+ "Status No. of Equitable and Inclusive Education Projects: " + es_EIEP + "\n"
+ "Status No. of Communities/ Institutions Served: " + es_CIS + "\n"
+ "Status No. of Participants/ Members: " + es_PM + "\n"
+ "Target No. of Equitable and Inclusive Education Projects: " + et_EIEP + "\n"
+ "Target No. of Communities/ Institutions Served: " + et_CIS + "\n"
+ "Target No. of Participants/ Members: " + et_PM + "\n"
+ "Good Governance for All " + "\n"
+ "Status No. of Leadership, Organizational Development, and Good Governance Projects: " + ggs_LODGGP + "\n"
+ "Status No. of Communities/ Institutions Served: " + ggs_CIS + "\n"
+ "Status No. of Participants/ Members: " + ggs_PM + "\n"
+ "Target No. of Leadership, Organizational Development, and Good Governance Projects: " + ggt_LODGGP+ "\n"
+ "Target No. of Communities/ Institutions Served: " + ggt_CIS + "\n"
+ "Target No. of Participants/ Members: " + ggt_PM + "\n"
+ "Economic Justice for All " + "\n"
+ "Status No. of Leadership, Organizational Development, and Good Governance Projects: " + ejs_ESEP + "\n"
+ "Status No. of Communities/ Institutions Served: " + ejs_CIS + "\n"
+ "Status No. of Participants/ Members: " + ejs_PM + "\n"
+ "Target No. of Leadership, Organizational Development, and Good Governance Projects: " + ejt_ESEP + "\n"
+ "Target No. of Communities/ Institutions Served: " + ejt_CIS + "\n"
+ "Target No. of Participants/ Members: " + ejt_PM + "\n"
+ "Christ Love for all" + "\n"
+ "Status No. of Socio-Pastoral Ministry and Evangelization Projects: " + cls_SPMEP + "\n"
+ "Status No. of Communities/ Institutions Served: " + cls_CIS + "\n"
+ "Status No. of Participants/ Members: " + cls_PM + "\n"
+ "Target No. of Socio-Pastoral Ministry and Evangelization Projects: " + clt_SPMEP + "\n"
+ "Target No. of Communities/ Institutions Served: " + clt_CIS + "\n"
+ "Target No. of Participants/ Members: " + clt_PM );
}
</script>
<script type="text/javascript">
function btnNext(){
/*alert(
);*/
}
</script>