<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/kra2.css" />
    <title>KRA 2</title>
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
                <button type="button" class="btn btn-warning approve" data-bs-toggle="modal"
                    data-bs-target="#approval">Approve</button>
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
                    <div class="modal-body">Approve the Annual Report? It cannot be undone</div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn btn-warning" onclick="approve_kra2simbahayan()">Yes</button>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<script type="text/javascript">
get_kra2datafromuseridsimbahayan();

function approve_kra2simbahayan() {
    let college_id = localStorage.getItem('selected_college_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "approve_kra2simbahayan",
            college_id: college_id
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText);
            if (data['status'] == "updated") {
                alert('successfully updated!');
                window.location.href = "http://localhost/Simbahayan/simbahayan-ui/php/kra-select.php";
            } else {
                alert('unknown error occured');
                location.reload();
            }
        }
    })
}

function get_kra2datafromuseridsimbahayan() {
    let user_id = localStorage.getItem('selected_user_id');
    let college_id = localStorage.getItem('selected_college_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra2datafromuseridsimbahayan",
            user_id: user_id,
            college_id: college_id
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText);

            let npus_totalarr=[];
            for(var key in data) {
                var npus_arr = data[key].npus_arr.split(",").map(Number);
                let npus_counter=[];
                for (let index = 0; index < npus_arr.length; index++) {
                    npus_counter.push(npus_arr[index]);
                }
                npus_totalarr.push(npus_counter);
            }
            let npus_final_arr = npus_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#npus_IDCD').val(npus_final_arr[0]);
            $('#npus_SAA').val(npus_final_arr[1]);
            $('#npus_CER').val(npus_final_arr[2]);
            $('#npus_SL').val(npus_final_arr[3]);

            let nput_totalarr=[];
            for(var key in data) {
                var nput_arr = data[key].nput_arr.split(",").map(Number);
                let nput_counter=[];
                for (let index = 0; index < nput_arr.length; index++) {
                    nput_counter.push(nput_arr[index]);
                }
                nput_totalarr.push(nput_counter);
            }
            let nput_final_arr = nput_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#nput_IDCD').val(nput_final_arr[0]);
            $('#nput_SAA').val(nput_final_arr[1]);
            $('#nput_CER').val(nput_final_arr[2]);
            $('#nput_SL').val(nput_final_arr[3]);


            let nppus_totalarr=[];
            for(var key in data) {
                var nppus_arr = data[key].nppus_arr.split(",").map(Number);
                let nppus_counter=[];
                for (let index = 0; index < nppus_arr.length; index++) {
                    nppus_counter.push(nppus_arr[index]);
                }
                nppus_totalarr.push(nppus_counter);
            }
            let nppus_final_arr = nppus_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#nppus_SORG').val(nppus_final_arr[0]);
            $('#nppus_STU').val(nppus_final_arr[1]);
            $('#nppus_FAC').val(nppus_final_arr[2]);
            $('#nppus_ADM').val(nppus_final_arr[3]);
            $('#nppus_SSTA').val(nppus_final_arr[4]);
            $('#nppus_ALU').val(nppus_final_arr[5]);


            let npput_totalarr=[];
            for(var key in data) {
                var npput_arr = data[key].npput_arr.split(",").map(Number);
                let npput_counter=[];
                for (let index = 0; index < npput_arr.length; index++) {
                    npput_counter.push(npput_arr[index]);
                }
                npput_totalarr.push(npput_counter);
            }
            let npput_final_arr = npput_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#npput_SORG').val(npput_final_arr[0]);
            $('#npput_STU').val(npput_final_arr[1]);
            $('#npput_FAC').val(npput_final_arr[2]);
            $('#npput_ADM').val(npput_final_arr[3]);
            $('#npput_SSTA').val(npput_final_arr[4]);
            $('#npput_ALU').val(npput_final_arr[5]);


            let nrpfcs_totalarr=[];
            for(var key in data) {
                var nrpfcs_arr = data[key].nrpfcs_arr.split(",").map(Number);
                let nrpfcs_counter=[];
                for (let index = 0; index < nrpfcs_arr.length; index++) {
                    nrpfcs_counter.push(nrpfcs_arr[index]);
                }
                nrpfcs_totalarr.push(nrpfcs_counter);
            }
            let nrpfcs_final_arr = nrpfcs_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#nrpfcs_LOC').val(nrpfcs_final_arr[0]);
            $('#nrpfcs_INT').val(nrpfcs_final_arr[1]);


            let nrpfct_totalarr=[];
            for(var key in data) {
                var nrpfct_arr = data[key].nrpfct_arr.split(",").map(Number);
                let nrpfct_counter=[];
                for (let index = 0; index < nrpfct_arr.length; index++) {
                    nrpfct_counter.push(nrpfct_arr[index]);
                }
                nrpfct_totalarr.push(nrpfct_counter);
            }
            let nrpfct_final_arr = nrpfct_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#nrpfct_LOC').val(nrpfct_final_arr[0]);
            $('#nrpfct_INT').val(nrpfct_final_arr[1]);

            let nps_totalarr=[];
            for(var key in data) {
                var nps_arr = data[key].nps_arr.split(",").map(Number);
                let nps_counter=[];
                for (let index = 0; index < nps_arr.length; index++) {
                    nps_counter.push(nps_arr[index]);
                }
                nps_totalarr.push(nps_counter);
            }
            let nps_final_arr = nps_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#nps_LOC').val(nps_final_arr[0]);
            $('#nps_INT').val(nps_final_arr[1]);

            let npt_totalarr=[];
            for(var key in data) {
                var npt_arr = data[key].npt_arr.split(",").map(Number);
                let npt_counter=[];
                for (let index = 0; index < npt_arr.length; index++) {
                    npt_counter.push(npt_arr[index]);
                }
                npt_totalarr.push(npt_counter);
            }
            let npt_final_arr = npt_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#npt_LOC').val(npt_final_arr[0]);
            $('#npt_INT').val(npt_final_arr[1]);
        }
    })
}
</script>