<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA 3</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/kra3.css" />
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
    <div class="kra-1">KRA 3: Dynamic Community Development External Partnerships and Networks</div>
    <table class="table table-borderless w-50 table-sm mx-auto">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Number of MOA/MOU with various External Partner Groups:</th>
                <th scope="col">Status</th>
                <th scope="col">Target</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> People's Organizations</td>
                <td><input id="nmoas_POS" type="number" value="0"></td>
                <td><input id="nmoat_POS" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Government Agencies or LGUs</td>
                <td><input id="nmoas_LGU" type="number" value="0"></td>
                <td><input id="nmoat_LGU" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Non-Government Organizations</td>
                <td><input id="nmoas_NGO" type="number" value="0"></td>
                <td><input id="nmoat_NGO" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Basic Educational Institutions</td>
                <td><input id="nmoas_BEI" type="number" value="0"></td>
                <td><input id="nmoat_BEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Local Higher Educational Institutions</td>
                <td><input id="nmoas_LHEI" type="number" value="0"></td>
                <td><input id="nmoat_LHEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>International Higher Educational Institutions</td>
                <td><input id="nmoas_IHEI" type="number" value="0"></td>
                <td><input id="nmoat_IHEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Faith-Based/Church-Based Organization</td>
                <td><input id="nmoas_CBO" type="number" value="0"></td>
                <td><input id="nmoat_CBO" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Professional/Business Organizations</td>
                <td><input id="nmoas_PBO" type="number" value="0"></td>
                <td><input id="nmoat_PBO" type="number" value="0"></td>
            </tr>
        </tbody>
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Number of Community Development and Advocacy Activities with each External Partner Group
                </th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> People's Organizations</td>
                <td><input id="ncdaas_POS" type="number" value="0"></td>
                <td><input id="ncdaat_POS" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Government Agencies or LGUs</td>
                <td><input id="ncdaas_LGU" type="number" value="0"></td>
                <td><input id="ncdaat_LGU" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Non-Government Organizations</td>
                <td><input id="ncdaas_NGO" type="number" value="0"></td>
                <td><input id="ncdaat_NGO" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Basic Educational Institutions</td>
                <td><input id="ncdaas_BEI" type="number" value="0"></td>
                <td><input id="ncdaat_BEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Local Higher Educational Institutions</td>
                <td><input id="ncdaas_LHEI" type="number" value="0"></td>
                <td><input id="ncdaat_LHEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>International Higher Educational Institutions</td>
                <td><input id="ncdaas_IHEI" type="number" value="0"></td>
                <td><input id="ncdaat_IHEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Faith-Based/Church-Based Organization</td>
                <td><input id="ncdaas_CBO" type="number" value="0"></td>
                <td><input id="ncdaat_CBO" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Professional/Business Organizations</td>
                <td><input id="ncdaas_PBO" type="number" value="0"></td>
                <td><input id="ncdaat_PBO" type="number" value="0"></td>
            </tr>
            <br>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" id="training">Number of Training/Course Offerings on Commnunity Engagement and
                        Organizing</th>
                    <td scope="col"><input id="ntco_stat" type="number" value="0"></td>
                    <td scope="col"><input id="ntco_targ" type="number" value="0"></td>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" id="training">Number of Participants in Training/Course offereings on Community
                        Engagement and
                        Organizing</th>
                    <td scope="col"><input id="nptco_stat" type="number" value="0"></td>
                    <td scope="col"><input id="nptco_targ" type="number" value="0"></td>
                </tr>
            </thead>
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
                        <button type="button" class="btn btn-warning" onclick="approve_kra3coordinator()">Yes</button>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

<script type="text/javascript">
get_kra3datafromuseridsimbahayan();

function approve_kra3coordinator() {
    let college_id = localStorage.getItem('selected_college_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "approve_kra3simbahayan",
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


function get_kra3datafromuseridsimbahayan() {
    let user_id = localStorage.getItem('selected_user_id');
    let college_id = localStorage.getItem('selected_college_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra3datafromuseridsimbahayan",
            user_id: user_id,
            college_id: college_id
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText);


            let nmoas_totalarr=[];
            for(var key in data) {
                var nmoas_arr = data[key].nmoas_arr.split(",").map(Number);
                let nmoas_counter=[];
                for (let index = 0; index < nmoas_arr.length; index++) {
                    nmoas_counter.push(nmoas_arr[index]);
                }
                nmoas_totalarr.push(nmoas_counter);
            }
            let nmoas_final_arr = nmoas_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#nmoas_POS').val(nmoas_final_arr[0]);
            $('#nmoas_LGU').val(nmoas_final_arr[1]);
            $('#nmoas_NGO').val(nmoas_final_arr[2]);
            $('#nmoas_BEI').val(nmoas_final_arr[3]);
            $('#nmoas_LHEI').val(nmoas_final_arr[4]);
            $('#nmoas_IHEI').val(nmoas_final_arr[5]);
            $('#nmoas_CBO').val(nmoas_final_arr[6]);
            $('#nmoas_PBO').val(nmoas_final_arr[7]);
            console.log(nmoas_final_arr);


            let nmoat_totalarr=[];
            for(var key in data) {
                var nmoat_arr = data[key].nmoat_arr.split(",").map(Number);
                let nmoat_counter=[];
                for (let index = 0; index < nmoat_arr.length; index++) {
                    nmoat_counter.push(nmoat_arr[index]);
                }
                nmoat_totalarr.push(nmoat_counter);
            }
            let nmoat_final_arr = nmoat_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#nmoat_POS').val(nmoat_final_arr[0]);
            $('#nmoat_LGU').val(nmoat_final_arr[1]);
            $('#nmoat_NGO').val(nmoat_final_arr[2]);
            $('#nmoat_BEI').val(nmoat_final_arr[3]);
            $('#nmoat_LHEI').val(nmoat_final_arr[4]);
            $('#nmoat_IHEI').val(nmoat_final_arr[5]);
            $('#nmoat_CBO').val(nmoat_final_arr[6]);
            $('#nmoat_PBO').val(nmoat_final_arr[7]);
            console.log(nmoat_final_arr);


            let ncdaas_totalarr=[];
            for(var key in data) {
                var ncdaas_arr = data[key].ncdaas_arr.split(",").map(Number);
                let ncdaas_counter=[];
                for (let index = 0; index < ncdaas_arr.length; index++) {
                    ncdaas_counter.push(ncdaas_arr[index]);
                }
                ncdaas_totalarr.push(ncdaas_counter);
            }
            let ncdaas_final_arr = ncdaas_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ncdaas_POS').val(ncdaas_final_arr[0]);
            $('#ncdaas_LGU').val(ncdaas_final_arr[1]);
            $('#ncdaas_NGO').val(ncdaas_final_arr[2]);
            $('#ncdaas_BEI').val(ncdaas_final_arr[3]);
            $('#ncdaas_LHEI').val(ncdaas_final_arr[4]);
            $('#ncdaas_IHEI').val(ncdaas_final_arr[5]);
            $('#ncdaas_CBO').val(ncdaas_final_arr[6]);
            $('#ncdaas_PBO').val(ncdaas_final_arr[7]);
            console.log(ncdaas_final_arr);



            let ncdaat_totalarr=[];
            for(var key in data) {
                var ncdaat_arr = data[key].ncdaat_arr.split(",").map(Number);
                let ncdaat_counter=[];
                for (let index = 0; index < ncdaat_arr.length; index++) {
                    ncdaat_counter.push(ncdaat_arr[index]);
                }
                ncdaat_totalarr.push(ncdaat_counter);
            }
            let ncdaat_final_arr = ncdaat_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ncdaat_POS').val(ncdaat_final_arr[0]);
            $('#ncdaat_LGU').val(ncdaat_final_arr[1]);
            $('#ncdaat_NGO').val(ncdaat_final_arr[2]);
            $('#ncdaat_BEI').val(ncdaat_final_arr[3]);
            $('#ncdaat_LHEI').val(ncdaat_final_arr[4]);
            $('#ncdaat_IHEI').val(ncdaat_final_arr[5]);
            $('#ncdaat_CBO').val(ncdaat_final_arr[6]);
            $('#ncdaat_PBO').val(ncdaat_final_arr[7]);
            console.log(ncdaat_final_arr);

            let ntcos_totalarr=[];
            for(var key in data) {
                var arr_ntco_stat = data[key].arr_ntco_stat.split(",").map(Number);
                let ntcos_counter=[];
                for (let index = 0; index < arr_ntco_stat.length; index++) {
                    ntcos_counter.push(arr_ntco_stat[index]);
                }
                ntcos_totalarr.push(ntcos_counter);
            }
            let ntcos_final_arr = ntcos_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ntco_stat').val(ntcos_final_arr[0]);
            console.log(ntcos_final_arr);



            let ntcot_totalarr=[];
            for(var key in data) {
                var arr_ntco_targ = data[key].arr_ntco_targ.split(",").map(Number);
                let ntcot_counter=[];
                for (let index = 0; index < arr_ntco_targ.length; index++) {
                    ntcot_counter.push(arr_ntco_targ[index]);
                }
                ntcot_totalarr.push(ntcot_counter);
            }
            let ntcot_final_arr = ntcot_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ntco_targ').val(ntcot_final_arr[0]);
            console.log(ntcot_final_arr);

            let nptcos_totalarr=[];
            for(var key in data) {
                var arr_nptco_stat = data[key].arr_nptco_stat.split(",").map(Number);
                let nptcos_counter=[];
                for (let index = 0; index < arr_nptco_stat.length; index++) {
                    nptcos_counter.push(arr_nptco_stat[index]);
                }
                nptcos_totalarr.push(nptcos_counter);
            }
            let nptcos_final_arr = nptcos_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#nptco_stat').val(nptcos_final_arr[0]);
            console.log(nptcos_final_arr);


            let nptcot_totalarr=[];
            for(var key in data) {
                var arr_nptco_targ = data[key].arr_nptco_targ.split(",").map(Number);
                let nptcot_counter=[];
                for (let index = 0; index < arr_nptco_targ.length; index++) {
                    nptcot_counter.push(arr_nptco_targ[index]);
                }
                nptcot_totalarr.push(nptcot_counter);
            }
            let nptcot_final_arr = nptcot_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#nptco_targ').val(nptcot_final_arr[0]);
            console.log(nptcot_final_arr);

        }
    })
}
</script>