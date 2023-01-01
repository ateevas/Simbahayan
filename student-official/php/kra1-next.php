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
        <hr/>
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
                <td><input id="ceras_NCHP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="ceras_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="ceras_NPM" type="number" value="0"></td>

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
                <td><input id="sfas_NSDP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="sfas_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="sfas_NPM" type="number" value="0"></td>

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
                <td><input id="ejas_NESAP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="ejas_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="ejas_NPM" type="number" value="0"></td>

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
                <td><input id="hlas_NFHP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="hlas_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="hlas_NPM" type="number" value="0"></td>

            </tr>

        </tbody>
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"> Community Organization Formed</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td>No. of Communities/ Institutions Served under each Community Organization Formed
                </td>
                <td><input id="cofs_nciscof" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>
                    No. of Participants/ Members under each Community Organization Formed</td>
                <td><input id="cofs_npmcof" type="number" value="0"></td>
            </tr>

        </tbody>
    </table>

    <div class="button-container">
        <div class="button-wrapper">
            <a class="btn btn-dark" href="kra1.php" role="button">Prev</a>
            <button type="button" onclick="btnSave()" data-bs-target='#approval' data-bs-toggle='modal' class="btn btn-warning">Save</button>
            <div class="modal fade" id="approval" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Community Development Report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
function btnSave() {   //-- Not attached to any "onlcick" --//
//-- Cultural Life --//
    var ceras_NCHP = $('#ceras_NCHP').val();
    var ceras_NCIS = $('#ceras_NCIS').val();
    var ceras_NPM = $('#ceras_NPM').val();
    //array
    var ceras_arr = [ceras_NCHP, ceras_NCIS, ceras_NPM];
    localStorage.setItem('ceras_arr', ceras_arr);

//-- Sports for all --//
    var sfas_NSDP = $('#sfas_NSDP').val();
    var sfas_NCIS = $('#sfas_NCIS').val();
    var sfas_NPM = $('#sfas_NPM').val();
    //array
    var sfas_arr = [sfas_NSDP, sfas_NCIS, sfas_NPM];
    localStorage.setItem('sfas_arr', sfas_arr);

//-- Environmental Justice for all --//
    var ejas_NESAP = $('#ejas_NESAP').val();
    var ejas_NCIS = $('#ejas_NCIS').val();
    var ejas_NPM = $('#ejas_NPM').val();
    //array
    var ejas_arr = [ejas_NESAP, ejas_NCIS, ejas_NPM];
    localStorage.setItem('ejas_arr', ejas_arr);

//-- Holistic Life for all --//
    var hlas_NFHP = $('#hlas_NFHP').val();
    var hlas_NCIS = $('#hlas_NCIS').val();
    var hlas_NPM = $('#hlas_NPM').val();
    //array
    var hlas_arr = [hlas_NFHP, hlas_NCIS, hlas_NPM];
    localStorage.setItem('hlas_arr', hlas_arr);

    //-- Organization Formed --//
    var cofs_nciscof = $('#cofs_nciscof').val();
    var cofs_npmcof = $('#cofs_npmcof').val();
    //array
    var cofs_arr = [cofs_nciscof, cofs_npmcof];
    localStorage.setItem('cofs_arr', cofs_arr);
}
function btnSubmit() {
    let kra_id = localStorage.getItem('kra_selected_id');
    let college_id = localStorage.getItem('selected_college_id');
     $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "save_kra1",
            user_id: localStorage.getItem('user_id'),
            hs_arr: localStorage.getItem('hs_arr'),
            es_arr: localStorage.getItem('es_arr'),
            ggs_arr: localStorage.getItem('ggs_arr'),
            ejs_arr: localStorage.getItem('ejs_arr'),
            cls_arr: localStorage.getItem('cls_arr'),
            efas_arr: localStorage.getItem('efas_arr'),
            ceras_arr: localStorage.getItem('ceras_arr'),
            sfas_arr: localStorage.getItem('sfas_arr'),
            ejas_arr: localStorage.getItem('ejas_arr'),
            hlas_arr: localStorage.getItem('hlas_arr'),
            cofs_arr: localStorage.getItem('cofs_arr'),
            kra_id: kra_id,
            college_id: college_id
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