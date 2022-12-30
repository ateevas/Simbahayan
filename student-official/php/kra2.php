<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Community Development Report</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/student-official/css/kra2.css" />
    <?php
			include('../cdn/cdn.php');
		?>
</head>

<body>
    <?php
			include('../nav_master/nav.php');
		?>
    <hr/>
    <div class="title-wrapper m-2">
        <h3>Community Development Report</h3>
    </div>
    <div class="kra-1">KRA 2: Thomasian engagement as agents of social transformation</div>
    <br>

    <table class="table table-borderless w-50 table-sm mx-auto">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Number of Projects Under the University Community Development (UCDP), Particulary on the
                    following:</th>
                <th scope="col">Status</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>Institutional Development for Community Development</td>
                <td><input id="npus_IDCD" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Social Awareness and Advocacy</td>
                <td><input id="npus_SAA" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Community-Engaged Research</td>
                <td><input id="npus_CER" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Service-Learning</td>
                <td><input id="npus_SL" type="number" value="0"></td>

            </tr>
        </tbody>


        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Number of Participants in the Projects Under the UCDP, Representing each of the
                    following sectors:</th>
                <th scope="col"></th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> Student Organizations</td>
                <td><input id="nppus_SORG" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Students</td>
                <td><input id="nppus_STU" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Faculty</td>
                <td><input id="nppus_FAL" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Administrators</td>
                <td><input id="nppus_ADM" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Support Staff</td>
                <td><input id="nppus_SSTA" type="number" value="0"></td>

            </tr>

            <tr>
                <th scope="row"></th>
                <td>Alumni</td>
                <td><input id="nppus_ALU" type="number" value="0"></td>

            </tr>



            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Number of Research Presentations in Fora/Conferences</th>
                    <th scope="col"></th>


                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>Local</td>
                <td><input id="nrpfcs_LOC" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>International</td>
                <td><input id="nrpfcs_INT" type="number" value="0"></td>

            </tr>

            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Number of Publications</th>
                    <th scope="col"></th>


                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>Local</td>
                <td><input id="nps_LOC" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>International</td>
                <td><input id="nps_INT" type="number" value="0"></td>

            </tr>







        </tbody>
    </table>
    <div class="button-container">
        <div class="button-wrapper">
            <button type="button" onclick="btnSave()" class="btn btn-warning">Save</button>

            <div class="modal fade" id="approval" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
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
                            <button onclick="btnSubmit()" type="button" class="btn btn-warning">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
<script type="text/javascript">
function btnNext() {  //-- Not attached to any "onlcick" --//

//-- Number of Projects Under the UCDP --//

    var npus_IDCD = $('#npus_IDCD').val();
    var npus_SAA = $('#npus_SAA').val();
    var npus_CER = $('#npus_CER').val();
    var npus_SL = $('#npus_SL').val();
    var npus_arr = new Array(npus_IDCD, npus_SAA, npus_CER, npus_SL);
    localStorage.setItem('npus_arr', npus_arr);

//-- Number of Participants in the Projects Under the UCDP --//

    var nppus_SORG = $('#nppus_SORG').val();
    var nppus_STU = $('#nppus_STU').val();
    var nppus_FAL = $('#nppus_FAL').val();
    var nppus_ADM = $('#nppus_ADM').val();
    var nppus_SSTA = $('#nppus_SSTA').val();
    var nppus_ALU = $('#nppus_ALU').val();
    var nppus_arr = new Array(nppus_SORG, nppus_STU, nppus_FAL, nppus_ADM, nppus_SSTA, nppus_ALU);
    localStorage.setItem('nppus_arr', nppus_arr);

//-- Number of Research Presentations in Fora/Conferences --//

    var nrpfcs_LOC = $('#nrpfcs_LOC').val();
    var nrpfcs_INT = $('#nrpfcs_INT').val();
    var nrpfcs_arr = new Array(nrpfcs_LOC, nrpfcs_INT);
    localStorage.setItem('nrpfcs_arr', nrpfcs_arr);

//-- Number of Publications --//

    var nps_LOC = $('#nps_LOC').val();
    var nps_INT = $('#nps_INT').val();
    var nps_arr = new Array(nps_LOC, nps_INT);
    localStorage.setItem('nps_arr', nps_arr);


    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "save_kra2",
            user_id: localStorage.getItem('user_id'),

            npus_arr: localStorage.getItem('npus_arr'),
            nppus_arr: localStorage.getItem('nppus_arr'),
            nrpfcs_arr: localStorage.getItem('nrpfcs_arr'),
            nps_arr: localStorage.getItem('nps_arr')
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText);
            if (data['status'] == "ok") {
                alert("successfully saved!");
                window.location.href = "http://localhost/Simbahayan/student-official/php/kra-select.php";
            } else {
                alert("Unknown error occured. Please try again.")
            }
        }
    })

}
</script>