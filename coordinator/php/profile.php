<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>

    <?php 
      include('../cdn/cdn.php');
    ?>

  </head>
  <body>
    <?php 
      include('../nav_master/nav.php');
    ?>
<<<<<<< HEAD
=======

>>>>>>> 7b16fcb7b490ff590a392129fac47e0c887dd727
    <div class="welcome-container">
      <div class="welcome-inner">
        <div class="welcome-context">
          <h1>Welcome <span id='fname' style="text-transform: capitalize;"></span>!</h1>
            <p>
              You may now access the features of the UST Simbahayan Portal!
            </p>
        </div>
      </div>
    </div>

    <!-- bootstrap -->
    <div
      id="carouselExampleIndicators"
      class="carousel slide"
      data-bs-ride="true"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="../pictures/SIMBAHAYAN-20161208-Cagayan-Relief-06.jpg" class="d-block w-100" alt="..."/>
        </div>
        <div class="carousel-item">
          <img src="../pictures/image 6.png" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="../pictures/image 7.png" class="d-block w-100" alt="..." />
        </div>
      </div>
      
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </body>
</html>
<script type="text/javascript">
  get_coordinatorinfo();

  function get_coordinatorinfo() {
    let user_id=localStorage.getItem('user_id');
     $.ajax({
      url: url,
      type: "GET",
      data: {
        csrf_token: "{{ csrf_token() }}",
        tag: "get_userinfo",
        user_id: user_id
      },
      complete: function (response) {
        // console.log(response.responseText);
        var data = JSON.parse(response.responseText);
        $('#fname').html(data[0]['fname']);
      }
    })
  }
</script>
