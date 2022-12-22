<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Community Development Report</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/student-official/css/kra1.css" />

    <?php
			include('../cdn/cdn.php');
		?>
</head>

<body>
    <?php
		include('../nav_master/nav.php');
		?>
    <div class="title-wrapper m-2">
        <h3>Community Development Report</h3>
    </div>
    <div class="kra-1">KRA 1: Self-reliant, Interdependent, and Empowered Partner Communities and Institutions</div>
    <br>

    <table class="table table-borderless w-50 table-sm mx-auto">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Cultural Life, Expression and Rootedness for all (Culture and Heritage Development)</th>
                <th scope="col">Status</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>No. of Culture and Heritage Projects</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
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

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
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

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
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

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input type="number" value="0"></td>

            </tr>

        </tbody>
    </table>

    <div class="button-container">
        <div class="button-wrapper">
            <a class="btn btn-dark" href="kra1.php" role="button">Prev</a>
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
function btnSave() {
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


    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "save_kra1",
            user_id: localStorage.getItem('user_id'),
            hs_arr: localStorage.getItem('hs_arr'),
            ht_arr: localStorage.getItem('ht_arr'),
            es_arr: localStorage.getItem('es_arr'),
            et_arr: localStorage.getItem('et_arr'),
            ggs_arr: localStorage.getItem('ggs_arr'),
            ggt_arr: localStorage.getItem('ggt_arr'),
            ejs_arr: localStorage.getItem('ejs_arr'),
            ejt_arr: localStorage.getItem('ejt_arr'),
            cls_arr: localStorage.getItem('cls_arr'),
            clt_arr: localStorage.getItem('clt_arr'),
            cahds_arr: localStorage.getItem('cahds_arr'),
            cahdt_arr: localStorage.getItem('cahdt_arr'),
            sds_arr: localStorage.getItem('sds_arr'),
            sdt_arr: localStorage.getItem('sdt_arr'),
            drrms_arr: localStorage.getItem('drrms_arr'),
            drrmt_arr: localStorage.getItem('drrmt_arr'),
            fhds_arr: localStorage.getItem('fhds_arr'),
            fhdt_arr: localStorage.getItem('fhdt_arr'),
            cofs_arr: localStorage.getItem('cofs_arr'),
            coft_arr: localStorage.getItem('coft_arr'),
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