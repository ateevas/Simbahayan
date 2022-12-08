<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRAs and KPIs</title>
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
          <h1>Annual Reports</h1>
          <br />
          <br />
        </div>
      </div>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>College</th>
          <th>ID number</th>
          <th>Email</th>
          <th>Date</th>
          <th>Status</th>
          <th>Manage</th>
        </tr>
      </thead>
      <tbody id="tbody_data">
      </tbody>
    </table>
  </body>
</html>
<script type="text/javascript">
  get_allsubmittedkra();
function get_allsubmittedkra() {
  $.ajax({
      url: url,
      type: "GET",
      data: {
        csrf_token: "{{ csrf_token() }}",
        tag: "get_allsubmittedkra"
      },
      complete: function (response) {
        $('#tbody_data').html(response.responseText);
      }
    })
}
</script>
