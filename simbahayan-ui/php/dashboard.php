<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dash board</title>




    <link rel="stylesheet" href="/simbahayan-ui/css/dashboard.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />




  </head>
  <body>





    <nav class="navbar bg-secondary">
      <div class="container-fluid">
        <a class="navbar-brand" href="profile.html">
          <img
            src="ustlogo.png"
            alt="Logo"
            width="70"
            height="70"
            class="d-inline-block align-text-middle"
          />
          <span>Simbahayan Portal</span>
        </a>
      </div>
    </nav>






    <div class="title">
      <div class="inner_title">
        <div class="title_container">
          <h1>Dashboard</h1>
        </div>
      </div>
    </div>

    <body>
      <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
          <div class="list-group list-group-flush my-3">
            <a
              href="/simbahayan-ui/html/dashboard.html"
              class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
              >Archives</a
            >
            <a
              href="/simbahayan-ui/html/target.html"
              class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
              >Target</a
            >
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Important</a>
            <a
              href="/simbahayan-ui/html/profile.html"
              class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
              >Back to Main Menu</a
            >
          </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
              <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle" style="color: goldenrod"></i>
              <h2 class="fs-2 m-0" style="color: gray">UST Simbahayan</h2>
            </div>

            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>

          <div class="row my-5">
            <h3 class="fs-4 mb-3">View Report</h3>
            <div class="col">
              <table class="table bg-white rounded shadow-sm table-hover">
                <thead>
                  <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Report</th>
                    <th scope="col">Date</th>
                    <th scope="col">Audit</th>
                    <th scope="col">File Size</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Filename.pdf</td>
                    <td>02/21/2012</td>
                    <td>Last Edited By Enrico Alfonso</td>
                    <td>100MB</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Filename.pdf</td>
                    <td>02/21/2012</td>
                    <td>Last Edited By Joshua Cabangal</td>
                    <td>100MB</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Filename.pdf</td>
                    <td>02/21/2012</td>
                    <td>Last Edited By Miguel Tan</td>
                    <td>100MB</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Filename.pdf</td>
                    <td>02/21/2012</td>
                    <td>Last Edited By</td>
                    <td>100MB</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Filename.pdf</td>
                    <td>02/21/2012</td>
                    <td>Last Edited By</td>
                    <td>100MB</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- /#page-content-wrapper -->

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
      <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
          el.classList.toggle("toggled");
        };
      </script>
    </body>
  </body>
</html>