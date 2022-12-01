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

    <div class="title-wrapper m-2">
      <h3>Community Development Report</h3>
    </div>
    <div class="kra-1">KRA 2: Thomasian engagement as agents of social transformation</div>
    <!------Accordion------------------------->
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

      <!-------->

      <div class="button-wrapper">
        <button onclick="kra2_Savebtn()" type="button" class="btn btn-warning">Save</button>
        <a class="btn btn-dark" href="kra2-next.php" role="button">Next</a>
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


<script type="text/javascript"> 
function kra2_Savebtn(){
  var s_PUIDCD = $('#s_PUIDCD').val(); //Institutional Development
  var t_PUIDCD = $('#t_PUIDCD').val();

  var s_PSAA = $('#s_PSAA').val(); //Social Awareness
  var t_PSAA = $('#t_PSAA').val();

  var s_PUCER = $('#s_PUCER').val(); //Community-engaged
  var t_PUCER = $('#t_PUCER').val();

  var s_PUL = $('#s_PUL').val(); //Underservice-learning
  var t_PUL = $('#t_PUL').val();  

  alert("1: " + s_PUIDCD + "\n"
    + "2: " + t_PUIDCD + "\n"

    + "3: " + s_PSAA + "\n"
    + "4: " + t_PSAA + "\n"

    + "5: " + s_PUCER + "\n"
    + "6: " + t_PUCER + "\n"

    + "7: " + s_PUL + "\n"
    + "8: " + t_PUL + "\n"
    );
}

</script>