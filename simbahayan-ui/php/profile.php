<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRAs and KPIs</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/profile.css" />
    <?php
		include('../cdn/cdn.php');
		?>

</head>

<body>
    <?php
		include('../nav_master/nav.php');
		?>
    <div class="background">
        <div class="welcome-container">
            <div class="welcome-inner">
                <div class="welcome-context">
                    <h1 class="animate__animated animate__fadeInLeft">Welcome <span id='fname'
                            style="text-transform: capitalize;"></span>!</h1>
                    <p class="animate__animated animate__fadeInLeft">
                        You may now access the features of the UST Simbahayan Portal!
                    </p>
                </div>
            </div>
        </div>


        <!--Carousell-->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators animate__animated animate__fadeInLeft">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../pictures/IMG_2109.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../pictures/_MG_4627.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../pictures/_MG_4903.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../pictures/_MG_7323.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../pictures/IMG_2109.JPG" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



</body>

</html>
<script type="text/javascript">
get_coordinatorinfo();

function get_coordinatorinfo() {
    let user_id = localStorage.getItem('user_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_userinfo",
            user_id: user_id
        },
        complete: function(response) {
            // console.log(response.responseText);
            var data = JSON.parse(response.responseText);
            $('#fname').html(data[0]['fname']);
        }
    })
}
</script>