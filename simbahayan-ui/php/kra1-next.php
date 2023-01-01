<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/kra1.css" />
    <title>KRA 1</title>
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
                <td><input id="ceras_NCHP" type="number" value="0"></td>
                <td><input id="cerat_NCHP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="ceras_NCIS" type="number" value="0"></td>
                <td><input id="cerat_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="ceras_NPM" type="number" value="0"></td>
                <td><input id="cerat_NPM" type="number" value="0"></td>
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
                <td><input id="ejas_NESAP" type="number" value="0"></td>
                <td><input id="ejat_NESAP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="ejas_NCIS" type="number" value="0"></td>
                <td><input id="ejat_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="ejas_NPM" type="number" value="0"></td>
                <td><input id="ejat_NPM" type="number" value="0"></td>
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
    var ceras_NCHP = $('#ceras_NCHP').val();
    var ceras_NCIS = $('#ceras_NCIS').val();
    var ceras_NPM = $('#ceras_NPM').val();
    //Target 
    var cerat_NCHP = $('#cerat_NCHP').val();
    var cerat_NCIS = $('#cerat_NCIS').val();
    var cerat_NPM = $('#cerat_NPM').val();
    //array
    var ceras_arr = [ceras_NCHP, ceras_NCIS, ceras_NPM];
    var cerat_arr = [cerat_NCHP, cerat_NCIS, cerat_NPM];
    localStorage.setItem('ceras_arr', ceras_arr);
    localStorage.setItem('cerat_arr', cerat_arr);

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
    var ejas_NESAP = $('#ejas_NESAP').val();
    var ejas_NCIS = $('#ejas_NCIS').val();
    var ejas_NPM = $('#ejas_NPM').val();
    //Target 
    var ejat_NESAP = $('#ejat_NESAP').val();
    var ejat_NCIS = $('#ejat_NCIS').val();
    var ejat_NPM = $('#ejat_NPM').val();
    //array
    var ejas_arr = [ejas_NESAP, ejas_NCIS, ejas_NPM];
    var ejat_arr = [ejat_NESAP, ejat_NCIS, ejat_NPM];
    localStorage.setItem('ejas_arr', ejas_arr);
    localStorage.setItem('ejat_arr', ejat_arr);

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
            ceras_arr: localStorage.getItem('ceras_arr'),
            cerat_arr: localStorage.getItem('cerat_arr'),
            sfas_arr: localStorage.getItem('sfas_arr'),
            sfat_arr: localStorage.getItem('sfat_arr'),
            ejas_arr: localStorage.getItem('ejas_arr'),
            ejat_arr: localStorage.getItem('ejat_arr'),
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
function approve_kra1simbahayan() {
    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "approve_kra1simbahayan",
            user_id: user_id
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
            var ceras_arr = data[0].ceras_arr.split(",");
            $('#ceras_NCHP').val(ceras_arr[0]);
            $('#ceras_NCIS').val(ceras_arr[1]);
            $('#ceras_NPM').val(ceras_arr[2]);
            let cerat_arr = data[0].cerat_arr;
            if(cerat_arr != "") {
                let cerat_arr = data[0].cerat_arr.split(",");
                $('#cerat_NCHP').val(cerat_arr[0]);
                $('#cerat_NCIS').val(cerat_arr[1]);
                $('#cerat_NPM').val(cerat_arr[2]);
            }
           

            var sfas_arr = data[0].sfas_arr.split(",");
            $('#sfas_NSDP').val(sfas_arr[0]);
            $('#sfas_NCIS').val(sfas_arr[1]);
            $('#sfas_NPM').val(sfas_arr[2]);
            let sfat_arr = data[0].sfat_arr;
            if(sfat_arr != "") {
                let sfat_arr = data[0].sfat_arr.split(",");
                $('#sfat_NSDP').val(sfat_arr[0]);
                $('#sfat_NCIS').val(sfat_arr[1]);
                $('#sfat_NPM').val(sfat_arr[2]);
            }
            var ejas_arr = data[0].ejas_arr.split(",");
            $('#ejas_NESAP').val(ejas_arr[0]);
            $('#ejas_NCIS').val(ejas_arr[1]);
            $('#ejas_NPM').val(ejas_arr[2]);
            let ejat_arr = data[0].ejat_arr;
            if(ejat_arr != "") {
                let ejat_arr = data[0].ejat_arr.split(",");
                $('#ejat_NESAP').val(ejat_arr[0]);
                $('#ejat_NCIS').val(ejat_arr[1]);
                $('#ejat_NPM').val(ejat_arr[2]);
            }
            
            var hlas_arr = data[0].hlas_arr.split(",");
            $('#hlas_NFHP').val(hlas_arr[0]);
            $('#hlas_NCIS').val(hlas_arr[1]);
            $('#hlas_NPM').val(hlas_arr[2]);
            let hlat_arr = data[0].hlat_arr;
            if(hlat_arr != "") {
                let hlat_arr = data[0].hlat_arr.split(",");
                $('#hlat_NFHP').val(hlat_arr[0]);
                $('#hlat_NCIS').val(hlat_arr[1]);
                $('#hlat_NPM').val(hlat_arr[2]);
        }
    })
}
</script>