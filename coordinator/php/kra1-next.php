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
                <td><input id="clers_NCHP" type="number" value="0"></td>
                <td><input id="clert_NCHP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="clers_NCIS" type="number" value="0"></td>
                <td><input id="clert_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="clers_NPM" type="number" value="0"></td>
                <td><input id="clert_NPM" type="number" value="0"></td>

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
                <td><input id="sfat_NSDP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="sfas_NCIS" type="number" value="0"></td>
                <td><input id="sfat_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="sfas_NPM" type="number" value="0"></td>
                <td><input id="sfat_NPM" type="number" value="0"></td>

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
                <td><input id="efjas_NESAP" type="number" value="0"></td>
                <td><input id="efjat_NESAP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="efjas_NCIS" type="number" value="0"></td>
                <td><input id="efjat_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="efjas_NPM" type="number" value="0"></td>
                <td><input id="efjat_NPM" type="number" value="0"></td>

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
                <td><input id="hlat_NFHP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="hlas_NCIS" type="number" value="0"></td>
                <td><input id="hlat_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="hlas_NPM" type="number" value="0"></td>
                <td><input id="hlat_NPM" type="number" value="0"></td>

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
    //-- Cultural Life --//
    //Status 
    var clers_NCHP = $('#clers_NCHP').val();
    var clers_NCIS = $('#clers_NCIS').val();
    var clers_NPM = $('#clers_NPM').val();
    //Target 
    var clert_NCHP = $('#clert_NCHP').val();
    var clert_NCIS = $('#clert_NCIS').val();
    var clert_NPM = $('#clert_NPM').val();
    //array
    var clers_arr = [clers_NCHP, clers_NCIS, clers_NPM];
    var clert_arr = [clert_NCHP, clert_NCIS, clert_NPM];
    localStorage.setItem('clers_arr', clers_arr);
    localStorage.setItem('clert_arr', clert_arr);



    //-- Sports for all --//
    //Status 
    var sfas_NSDP = $('#sfas_NSDP').val();
    var sfas_NCIS = $('#sfas_NCIS').val();
    var sfas_NPM = $('#sfas_NPM').val();
    //Target 
    var sfat_NSDP = $('#sfat_NSDP').val();
    var sfat_NCIS = $('#sfat_NCIS').val();
    var sfat_NPM = $('#sfat_NPM').val();
    //array
    var sfas_arr = [sfas_NSDP, sfas_NCIS, sfas_NPM];
    var sfat_arr = [sfat_NSDP, sfat_NCIS, sfat_NPM];
    localStorage.setItem('sfas_arr', sfas_arr);
    localStorage.setItem('sfat_arr', sfat_arr);



    //-- Environmental Justice for all --//
    //Status 
    var efjas_NESAP = $('#efjas_NESAP').val();
    var efjas_NCIS = $('#efjas_NCIS').val();
    var efjas_NPM = $('#efjas_NPM').val();
    //Target 
    var efjat_NESAP = $('#efjat_NESAP').val();
    var efjat_NCIS = $('#efjat_NCIS').val();
    var efjat_NPM = $('#efjat_NPM').val();
    //array
    var efjas_arr = [efjas_NESAP, efjas_NCIS, efjas_NPM];
    var efjat_arr = [efjat_NESAP, efjat_NCIS, efjat_NPM];
    localStorage.setItem('efjas_arr', efjas_arr);
    localStorage.setItem('efjat_arr', efjat_arr);



    //-- Holistic Life for all --//
    //Status 
    var hlas_NFHP = $('#hlas_NFHP').val();
    var hlas_NCIS = $('#hlas_NCIS').val();
    var hlas_NPM = $('#hlas_NPM').val();
    //Target 
    var hlat_NFHP = $('#hlat_NFHP').val();
    var hlat_NCIS = $('#hlat_NCIS').val();
    var hlat_NPM = $('#hlat_NPM').val();
    //array
    var hlas_arr = [hlas_NFHP, hlas_NCIS, hlas_NPM];
    var hlat_arr = [hlat_NFHP, hlat_NCIS, hlat_NPM];
    localStorage.setItem('hlas_arr', hlas_arr);
    localStorage.setItem('hlat_arr', hlat_arr);

    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "update2_kra1",
            user_id: user_id,

            clers_arr: localStorage.getItem('clers_arr'),
            clert_arr: localStorage.getItem('clert_arr'),
            sfas_arr: localStorage.getItem('sfas_arr'),
            sfat_arr: localStorage.getItem('sfat_arr'),
            efjas_arr: localStorage.getItem('efjas_arr'),
            efjat_arr: localStorage.getItem('efjat_arr'),
            hlas_arr: localStorage.getItem('hlas_arr'),
            hlat_arr: localStorage.getItem('hlat_arr')

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


            var clers_arr = data[0].clers_arr.split(",");
            $('#clers_NCHP').val(clers_arr[0]);
            $('#clers_NCIS').val(clers_arr[1]);
            $('#clers_NPM').val(clers_arr[2]);
            var clert_arr = data[0].clert_arr.split(",");
            $('#clert_NCHP').val(clert_arr[0]);
            $('#clert_NCIS').val(clert_arr[1]);
            $('#clert_NPM').val(clert_arr[2]);

            var sfas_arr = data[0].sfas_arr.split(",");
            $('#sfas_NSDP').val(sfas_arr[0]);
            $('#sfas_NCIS').val(sfas_arr[1]);
            $('#sfas_NPM').val(sfas_arr[2]);
            var sfat_arr = data[0].sfat_arr.split(",");
            $('#sfat_NSDP').val(sfat_arr[0]);
            $('#sfat_NCIS').val(sfat_arr[1]);
            $('#sfat_NPM').val(sfat_arr[2]);

            var efjas_arr = data[0].efjas_arr.split(",");
            $('#efjas_NESAP').val(efjas_arr[0]);
            $('#efjas_NCIS').val(efjas_arr[1]);
            $('#efjas_NPM').val(efjas_arr[2]);
            var efjat_arr = data[0].efjat_arr.split(",");
            $('#efjat_NESAP').val(efjat_arr[0]);
            $('#efjat_NCIS').val(efjat_arr[1]);
            $('#efjat_NPM').val(efjat_arr[2]);

            var hlas_arr = data[0].hlas_arr.split(",");
            $('#hlas_NFHP').val(hlas_arr[0]);
            $('#hlas_NCIS').val(hlas_arr[1]);
            $('#hlas_NPM').val(hlas_arr[2]);
            var hlat_arr = data[0].hlat_arr.split(",");
            $('#hlat_NFHP').val(hlat_arr[0]);
            $('#hlat_NCIS').val(hlat_arr[1]);
            $('#hlat_NPM').val(hlat_arr[2]);


        }
    })
}
</script>