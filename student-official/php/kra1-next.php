<!DOCTYPE html>
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

    <!--navigation bar---->
    <div class="navigation-container">
      <div class="navigation">
        <ul class="nav nav justify-content-center bg-warning mb-3 rounded mt-3" id="pills-tab" role="tablist">
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/student-official/html/profile.html"
              >Profile <span class="sr-only"></span
            ></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/student-official/html/kra-select.html"
              >Community Development Report <span class="sr-only"></span
            ></a>
          </li>

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-dark"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="/student-official/html/changepass.html">Change Password</a>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/student-official/html/contact.html"
              >Contact <span class="sr-only"></span
            ></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-dark" href="/login-page/html/login.html">Logout <span class="sr-only"></span></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
        </div>
      </div>
    </div>
    <!-----------------navigation bar end----------->

    <hr />

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
            Cultural Life, Expression and Rootedness for all (Culture and heritage development)

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
                      Status No. of Culture and Heritage Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>

                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of Culture and Heritage Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
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
            Sports for all (Sports development)

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
                      Status No. of Sports Development Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>

                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of Sports Development Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
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
            Environmental Justice for all (Environmental sustainability and action; disaster risk reduction and
            management)

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
                      Status No. of Environmental Sustainability and Action Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of Sustainability and Action Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>

                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
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
            Holistic Life for all (Family and household development)

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
                      Status No. of Family and Household Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of Family and Household Projects

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Participants/ Members

                      <input placeholder="0" type="number" readonly />
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
            Community organizations formed

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
                      Status No. of Community Organization Formed

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Communities/ Institutions Served under each Community Organization Formed

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Status No. of Participants/ Members under each Community Organization Formed

                      <input placeholder="0" type="number" readonly />
                    </li>
                  </ul>
                </div>

                <div class="col">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <!---Target no.-->
                      Target No. of Community Organization Formed

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Communities/ Institutions Served under each Community Organization Formed

                      <input placeholder="0" type="number" readonly />
                    </li>
                    <li class="list-group-item">
                      Target No. of Participants/ Members under each Community Organization Formed

                      <input placeholder="0" type="number" readonly />
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
        <a class="btn btn-dark" href="kra1.php" role="button">Prev</a>
        <button type="button" class="btn btn-warning">Save</button>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#approval">Submit</button>

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
                <h5 class="modal-title" id="exampleModalLongTitle">Community Development Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">Are you sure you want to submit report?</div>
              <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-warning">Yes</button>
              </div>
            </div>
          </div>
        </div>
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
</html>
