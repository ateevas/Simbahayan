<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRAs and KPIs</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/pending.css"/>
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
  let college_id=localStorage.getItem('college_id');
  $.ajax({
      url: url,
      type: "GET",
      data: {
        csrf_token: "{{ csrf_token() }}",
        tag: "get_allsubmittedkra",
        college_id:college_id
      },
      complete: function (response) {
        $('#tbody_data').html(response.responseText);
      }
    })
}
function goto_kra_select(obj){
    localStorage.setItem('selected_user_id', $(obj).data('user_id'));
    localStorage.setItem('selected_kra_id', $(obj).data('kra_id'));
    window.location.href="http://localhost/Simbahayan/coordinator/php/kra-select.php";
}
</script>
