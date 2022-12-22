<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA 1</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/kra1.css" />
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
    <div class="kra-1">KRA 1: Self-reliant, interdependent, and empowered partner communities and institutions</div>
    <table class="table table-borderless w-50 table-sm mx-auto">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Cultural Life, Expression and Rootedness for all (Culture and Heritage Development)</th>
                <th scope="col">Status</th>
                <th scope="col">Target</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>No. of Culture and Heritage Projects</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>
        </tbody>


        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"> Sports for all (Sports Development)</th>
                <th scope="col"></th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Sports Development Projects</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>


            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Environmental Justice for all (Environmental Sustainability and Action; Disaster
                        Risk Reduction and
                        Management)</th>
                    <th scope="col"></th>


                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Environmental Sustainability and Action Projects</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>



            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"> Holistic Life for all (Family and Household Development)</th>
                    <th scope="col"></th>


                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Family and Household Projects</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input type="number" value="0"></td>
                <td><input type="number" value="0"></td>

            </tr>

        </tbody>
    </table>

    <div class="button-container">
        <div class="button-wrapper">
            <a class="btn btn-warning" id="edit_btn" onclick="edit_kra3()" href="#" role="button">Edit</a>
            <button type="button" onclick="btnSave()" class="btn btn-warning">Save</button>
            <a class="btn btn-dark" href="kra1.php" role="button">Prev</a>

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
get_lock();

function get_lock() {
    if (localStorage.getItem('edit_lock') == "1") {
        $('#edit_btn').addClass("disabled");
        $('#edit_btn').attr("disabled", "disabled");
        $('.approve').addClass("disabled");
        $('.approve').attr("disabled", "disabled");
    }
}

function save_kra1() {
    //Status in Cultural Life
    var cahds_CHP = $('#cahds_CHP').val();
    var cahds_CIS = $('#cahds_CIS').val();
    var cahds_PM = $('#cahds_PM').val();
    //Target in Cultural Life
    var cahdt_CHP = $('#cahdt_CHP').val();
    var cahdt_CIS = $('#cahdt_CIS').val();
    var cahdt_PM = $('#cahdt_PM').val();
    //array
    var cahds_arr = [cahds_CHP, cahds_CIS, cahds_PM];
    var cahdt_arr = [cahdt_CHP, cahdt_CIS, cahdt_PM];
    localStorage.setItem('cahds_arr', cahds_arr);
    localStorage.setItem('cahdt_arr', cahdt_arr);
    //Status & Target in Sports for all
    var sds_SDP = $('#sds_SDP').val();
    var sds_CIS = $('#sds_CIS').val();
    var sds_PM = $('#sds_PM').val();
    var sdt_SDP = $('#sdt_SDP').val();
    var sdt_CIS = $('#sdt_CIS').val();
    var sdt_PM = $('#sdt_PM').val();
    //array
    var sds_arr = [sds_SDP, sds_CIS, sds_PM];
    var sdt_arr = [sdt_SDP, sdt_CIS, sdt_PM];
    localStorage.setItem('sds_arr', sds_arr);
    localStorage.setItem('sdt_arr', sdt_arr);
    //Status & Target in Environmental Justice
    var drrms_ESAP = $('#drrms_ESAP').val();
    var drrms_CIS = $('#drrms_CIS').val();
    var drrms_PM = $('#drrms_PM').val();
    var drrmt_SAP = $('#drrmt_SAP').val();
    var drrmt_CIS = $('#drrmt_CIS').val();
    var drrmt_PM = $('#drrmt_PM').val();
    //array
    var drrms_arr = [drrms_ESAP, drrms_CIS, drrms_PM];
    var drrmt_arr = [drrmt_SAP, drrmt_CIS, drrmt_PM];
    localStorage.setItem('drrms_arr', drrms_arr);
    localStorage.setItem('drrmt_arr', drrmt_arr);
    //Status & Target in Holistic Life
    var fhds_FHP = $('#fhds_FHP').val();
    var fhds_CIS = $('#fhds_CIS').val();
    var fhds_PM = $('#fhds_PM').val();
    var fhdt_FHP = $('#fhdt_FHP').val();
    var fhdt_CIS = $('#fhdt_CIS').val();
    var fhdt_PM = $('#fhdt_PM').val();
    //array
    var fhds_arr = [fhds_FHP, fhds_CIS, fhds_PM];
    var fhdt_arr = [fhdt_FHP, fhdt_CIS, fhdt_PM];
    localStorage.setItem('fhds_arr', fhds_arr);
    localStorage.setItem('fhdt_arr', fhdt_arr);
    //Status & Target in Community Organization
    var cofs_COF = $('#cofs_COF').val();
    var cofs_CISCOF = $('#cofs_CISCOF').val();
    var cofs_PMCOF = $('#cofs_PMCOF').val();
    var coft_COF = $('#coft_COF').val();
    var coft_CISCOF = $('#coft_CISCOF').val();
    var coft_PMCOF = $('#coft_PMCOF').val();
    //array
    var cofs_arr = [cofs_COF, cofs_CISCOF, cofs_PMCOF];
    var coft_arr = [coft_COF, coft_CISCOF, coft_PMCOF];
    localStorage.setItem('cofs_arr', cofs_arr);
    localStorage.setItem('coft_arr', coft_arr);

    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "update2_kra1",
            user_id: user_id,
            cahds_arr: localStorage.getItem('cahds_arr'),
            cahdt_arr: localStorage.getItem('cahdt_arr'),
            sds_arr: localStorage.getItem('sds_arr'),
            sdt_arr: localStorage.getItem('sdt_arr'),
            drrms_arr: localStorage.getItem('drrms_arr'),
            drrmt_arr: localStorage.getItem('drrmt_arr'),
            fhds_arr: localStorage.getItem('fhds_arr'),
            fhdt_arr: localStorage.getItem('fhdt_arr'),
            cofs_arr: localStorage.getItem('cofs_arr'),
            coft_arr: localStorage.getItem('coft_arr')
        },
        complete: function(response) {
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

function edit_kra1() {
    $('.input_number').removeAttr('readonly');
    $('#save_btn').show();
    $('#edit_btn').hide();
}

function approve_kra1coordinator() {
    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "approve_kra1coordinator",
            user_id: user_id
        },
        complete: function(response) {
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

get_kra1datafromuserid();

function get_kra1datafromuserid() {
    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra1datafromuserid",
            user_id: user_id
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText);
            console.log(data);
            var cahds_arr = data[0].cahds_arr.split(",");
            $('#cahds_CHP').val(cahds_arr[0]);
            $('#cahds_CIS').val(cahds_arr[1]);
            $('#cahds_PM').val(cahds_arr[2]);
            var cahdt_arr = data[0].cahdt_arr.split(",");
            $('#cahdt_CHP').val(cahdt_arr[0]);
            $('#cahdt_CIS').val(cahdt_arr[1]);
            $('#cahdt_PM').val(cahdt_arr[2]);
            var sds_arr = data[0].sds_arr.split(",");
            $('#sds_SDP').val(sds_arr[0]);
            $('#sds_CIS').val(sds_arr[1]);
            $('#sds_PM').val(sds_arr[2]);
            var sdt_arr = data[0].sdt_arr.split(",");
            $('#sdt_SDP').val(sdt_arr[0]);
            $('#sdt_CIS').val(sdt_arr[1]);
            $('#sdt_PM').val(sdt_arr[2]);
            var drrms_arr = data[0].drrms_arr.split(",");
            $('#drrms_ESAP').val(drrms_arr[0]);
            $('#drrms_CIS').val(drrms_arr[1]);
            $('#drrms_PM').val(drrms_arr[2]);
            var drrmt_arr = data[0].drrmt_arr.split(",");
            $('#drrmt_SAP').val(drrmt_arr[0]);
            $('#drrmt_CIS').val(drrmt_arr[1]);
            $('#drrmt_PM').val(drrmt_arr[2]);
            var fhds_arr = data[0].fhds_arr.split(",");
            $('#fhds_FHP').val(fhds_arr[0]);
            $('#fhds_CIS').val(fhds_arr[1]);
            $('#fhds_PM').val(fhds_arr[2]);
            var fhdt_arr = data[0].fhdt_arr.split(",");
            $('#fhdt_FHP').val(fhdt_arr[0]);
            $('#fhdt_CIS').val(fhdt_arr[1]);
            $('#fhdt_PM').val(fhdt_arr[2]);
            var cofs_arr = data[0].cofs_arr.split(",");
            $('#cofs_COF').val(cofs_arr[0]);
            $('#cofs_CISCOF').val(cofs_arr[1]);
            $('#cofs_PMCOF').val(cofs_arr[2]);
            var coft_arr = data[0].coft_arr.split(",");
            $('#coft_COF').val(coft_arr[0]);
            $('#coft_CISCOF').val(coft_arr[1]);
            $('#coft_PMCOF').val(coft_arr[2]);
        }
    })
}
</script>