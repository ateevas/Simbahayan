<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRAs and KPIs</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/download.css"/>
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
          <h1> Download KRAs and KPIs </h1>
          <hr />
          <br />
              <div class="download">
            <button onclick="btnDL()" type="button">Download KRAs and KPIs</button>
          </div>
         
          </div>
        </div>
      </div>
    </div>

  </body>
</html>

<script type="text/javascript">
  function btnDL(){

    alert("Downloaded");
  }


</script>