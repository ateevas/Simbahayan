<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA 2</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/kra2.css" />
    <?php
			include('../cdn/cdn.php');
		?>
</head>

<body>
    <?php
			include('../nav_master/nav.php');
		?>
    <div class="title-wrapper m-2">
        <h3>Annual Report</h3>
    </div>
    <div class="kra-1">KRA 2: Thomasian engagement as agents of social transformation</div>
    <br />
    <table class="table table-borderless w-50 table-sm mx-auto">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Number of Projects Under the University Community Development (UCDP), Particulary on the
                    following:</th>
                <th scope="col">Status</th>
                <th scope="col">Target</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>Institutional Development for Community Development</td>
                <td><input readonly id="npus_IDCD" type="number" value="0"></td>
                <td><input readonly id="nput_IDCD" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Social Awareness and Advocacy</td>
                <td><input readonly id="npus_SAA" type="number" value="0"></td>
                <td><input readonly id="nput_SAA" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Community-Engaged Research</td>
                <td><input readonly id="npus_CER" type="number" value="0"></td>
                <td><input readonly id="nput_CER" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Service-Learning</td>
                <td><input readonly id="npus_SL" type="number" value="0"></td>
                <td><input readonly id="nput_SL" type="number" value="0"></td>

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
                <td><input readonly id="nppus_SORG" type="number" value="0"></td>
                <td><input readonly id="npput_SORG" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Students</td>
                <td><input readonly id="nppus_STU" type="number" value="0"></td>
                <td><input readonly id="npput_STU" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Faculty</td>
                <td><input readonly id="nppus_FAC" type="number" value="0"></td>
                <td><input readonly id="npput_FAC" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Administrators</td>
                <td><input readonly id="nppus_ADM" type="number" value="0"></td>
                <td><input readonly id="npput_ADM" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Support Staff</td>
                <td><input readonly id="nppus_SSTA" type="number" value="0"></td>
                <td><input readonly id="npput_SSTA" type="number" value="0"></td>

            </tr>

            <tr>
                <th scope="row"></th>
                <td>Alumni</td>
                <td><input readonly id="nppus_ALU" type="number" value="0"></td>
                <td><input readonly id="npput_ALU" type="number" value="0"></td>

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
                <td><input readonly id="nrpfcs_LOC" type="number" value="0"></td>
                <td><input readonly id="nrpfct_LOC" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>International</td>
                <td><input readonly id="nrpfcs_INT" type="number" value="0"></td>
                <td><input readonly id="nrpfct_INT" type="number" value="0"></td>

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
                <td><input readonly id="nps_LOC" type="number" value="0"></td>
                <td><input readonly id="npt_LOC" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>International</td>
                <td><input readonly id="nps_INT" type="number" value="0"></td>
                <td><input readonly id="npt_INT" type="number" value="0"></td>

            </tr>

        </tbody>
    </table>


    <!-- Button trigger modal -->
    <div class="button-container">
        <div class="button-wrapper">
            <div class="button-wrapper">
                <a class="btn btn-warning" id="edit_btn" onclick="edit_kra2()" href="#" role="button">Edit</a>
                <a class="btn btn-warning" id="save_btn" style="display: none;" onclick="save_kra2()" href="#"
                    role="button">Save</a>
                <button type="button" class="btn btn-warning approve" data-bs-toggle="modal"
                    data-bs-target="#approval">Next</button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="approval" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Annual Report Approval</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">Save all the changes made for KRA 2?</div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-warning" onclick="approve_kra2coordinator()">Yes</button>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<script type="text/javascript">
get_lock();

function get_lock() {
    if (localStorage.getItem('edit_lock') == "1") {
        $('#edit_btn').addClass("disabled");
        $('#edit_btn').attr("disabled", "disabled");
        $('.approve').addClass("disabled");
        $('.approve').attr("disabled", "disabled");
    }
}
get_kra2datafromuserid();



function save_kra2() {

    //-- Number of Projects Under UCDP --//
    //Status
    var npus_IDCD = $('#npus_IDCD').val(); 
    var npus_SAA = $('#npus_SAA').val();
    var npus_CER = $('#npus_CER').val(); 
    var npus_SL = $('#npus_SL').val();
    //Target
    var nput_IDCD = $('#nput_IDCD').val(); 
    var nput_SAA = $('#nput_SAA').val();
    var nput_CER = $('#nput_CER').val(); 
    var nput_SL = $('#nput_SL').val();
    //array
    var npus_arr = [npus_IDCD, npus_SAA, npus_CER, npus_SL];
    var nput_arr = [nput_IDCD, nput_SAA, nput_CER, nput_SL];
    localStorage.setItem('npus_arr', npus_arr);
    localStorage.setItem('nput_arr', nput_arr);


    //-- Number of Participants in the Projects Under the UCDP --//
    //Status
    var nppus_SORG = $('#nppus_SORG').val(); 
    var nppus_STU = $('#nppus_STU').val();
    var nppus_FAC = $('#nppus_FAC').val(); 
    var nppus_ADM = $('#nppus_ADM').val();
    var nppus_SSTA = $('#nppus_SSTA').val(); 
    var nppus_ALU = $('#nppus_ALU').val();
    //Target
    var npput_SORG = $('#npput_SORG').val(); 
    var npput_STU = $('#npput_STU').val();
    var npput_FAC = $('#npput_FAC').val(); 
    var npput_ADM = $('#npput_ADM').val();
    var npput_SSTA = $('#npput_SSTA').val(); 
    var npput_ALU = $('#npput_ALU').val();
    //array
    var nppus_arr = [nppus_SORG, nppus_STU, nppus_FAC, nppus_ADM, nppus_SSTA, nppus_ALU];
    var npput_arr = [npput_SORG, npput_STU, npput_FAC, npput_ADM, npput_SSTA, npput_ALU];
    localStorage.setItem('nppus_arr', nppus_arr);
    localStorage.setItem('npput_arr', npput_arr);


    //-- Number of Research Presentations in Fora/Conferences --//
    //Status
    var nrpfcs_LOC = $('#nrpfcs_LOC').val(); 
    var nrpfcs_INT = $('#nrpfcs_INT').val();
    //Target
    var nrpfct_LOC = $('#nrpfct_LOC').val(); 
    var nrpfct_INT = $('#nrpfct_INT').val();
    //array
    var nrpfcs_arr = [nrpfcs_LOC, nrpfcs_INT];
    var nrpfct_arr = [nrpfct_LOC, nrpfct_INT];
    localStorage.setItem('nrpfcs_arr', nrpfcs_arr);
    localStorage.setItem('nrpfct_arr', nrpfct_arr);

    //-- Number of Publications --//
    //Status
    var nps_LOC = $('#nps_LOC').val(); 
    var nps_INT = $('#nps_INT').val();
    //Target
    var npt_LOC = $('#npt_LOC').val(); 
    var npt_INT = $('#npt_INT').val();
    //array
    var nps_arr = [nps_LOC, nps_INT];
    var npt_arr = [npt_LOC, npt_INT];
    localStorage.setItem('nps_arr', nps_arr);
    localStorage.setItem('npt_arr', npt_arr);




    let user_id = localStorage.getItem('selected_user_id');
    let kra_id = localStorage.getItem('selected_kra_id');
    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "update1_kra2",
            user_id: user_id,
            kra_id: kra_id,
            npus_arr: localStorage.getItem('npus_arr'),
            nput_arr: localStorage.getItem('nput_arr'),
            nppus_arr: localStorage.getItem('nppus_arr'),
            npput_arr: localStorage.getItem('npput_arr'),
            nrpfcs_arr: localStorage.getItem('nrpfcs_arr'),
            nrpfct_arr: localStorage.getItem('nrpfct_arr'),
            nps_arr: localStorage.getItem('nps_arr'),
            npt_arr: localStorage.getItem('npt_arr')
        },
        complete: function(response) {
            console.log(response.responseText);
            var data = JSON.parse(response.responseText);
            if (data['status'] == "ok") {
                alert("successfully saved!");
                location.reload();
            } else {
                alert("Unknown error occured. Please try again.")
            }
        }
    })

}

function approve_kra2coordinator() {
    let user_id = localStorage.getItem('selected_user_id');
    let kra_id = localStorage.getItem('selected_kra_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "approve_kra2coordinator",
            user_id: user_id,
            kra_id: kra_id
        },
        complete: function(response) {
            console.log(response.responseText);
            var data = JSON.parse(response.responseText);
            if (data['status'] == "updated") {
                alert('successfully updated!');
                window.location.href = "http://localhost/Simbahayan/coordinator/php/kra-select.php";
            } else {
                alert('unknown error occured');
                location.reload();
            }
        }
    })
}

function edit_kra2() {
    $('input').removeAttr('readonly');
    $('#save_btn').show();
    $('#edit_btn').hide();
}

function get_kra2datafromuserid() {
    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra2datafromuserid",
            user_id: user_id
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText);
            var npus_arr = data[0].npus_arr.split(",");
            $('#npus_IDCD').val(npus_arr[0]);
            $('#npus_SAA').val(npus_arr[1]);
            $('#npus_CER').val(npus_arr[2]);
            $('#npus_SL').val(npus_arr[3]);
            let nput_arr = data[0].nput_arr;
            if(nput_arr != "") {
                let nput_arr = data[0].nput_arr.split(",");
                $('#nput_IDCD').val(nput_arr[0]);
                $('#nput_SAA').val(nput_arr[1]);
                $('#nput_CER').val(nput_arr[2]);
                $('#nput_SL').val(nput_arr[3]);
            }
            
            var nppus_arr = data[0].nppus_arr.split(",");
            $('#nppus_SORG').val(nppus_arr[0]);
            $('#nppus_STU').val(nppus_arr[1]);
            $('#nppus_FAC').val(nppus_arr[2]);
            $('#nppus_ADM').val(nppus_arr[3]);
            $('#nppus_SSTA').val(nppus_arr[4]);
            $('#nppus_ALU').val(nppus_arr[5]);

            let npput_arr = data[0].npput_arr;
            if(npput_arr != "") {
                let npput_arr = data[0].npput_arr.split(",");
                $('#npput_SORG').val(npput_arr[0]);
                $('#npput_STU').val(npput_arr[1]);
                $('#npput_FAC').val(npput_arr[2]);
                $('#npput_ADM').val(npput_arr[3]);
                $('#npput_SSTA').val(npput_arr[4]);
                $('#npput_ALU').val(npput_arr[5]);
            }
            


            var nrpfcs = data[0].nrpfcs_arr.split(",");
            $('#nrpfcs_LOC').val(nrpfcs[0]);
            $('#nrpfcs_INT').val(nrpfcs[1]);
            let nrpfct_arr = data[0].nrpfct_arr;
            if(nrpfct_arr != "") {
                let nrpfct_arr = data[0].nrpfct_arr.split(",");
                $('#nrpfct_LOC').val(nrpfct_arr[0]);
                $('#nrpfct_INT').val(nrpfct_arr[1]);
            }
           

            var nps_arr = data[0].nps_arr.split(",");
            $('#nps_LOC').val(nps_arr[0]);
            $('#nps_INT').val(nps_arr[1]);
            let npt_arr = data[0].npt_arr;
            if(npt_arr != "") {
                let npt_arr = data[0].npt_arr.split(",");
                $('#npt_LOC').val(npt_arr[0]);
                $('#npt_INT').val(npt_arr[1]);
            }
        }
    })
}
</script>