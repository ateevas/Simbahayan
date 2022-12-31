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
                <th scope="col">Health for All (Health and Wellness Development)</th>
                <th scope="col">Status</th>
                <th scope="col">Target</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Health and Wellness Development Projects</td>
                <td><input id="hwds_NHWDP" type="number" value="0"></td>
                <td><input id="hwdt_NHWDP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="hwds_NCIS" type="number" value="0"></td>
                <td><input id="hwdt_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="hwds_NPM" type="number" value="0"></td>
                <td><input id="hwdt_NPM" type="number" value="0"></td>

            </tr>
        </tbody>


        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Education for all (Equitable and Inclusive Education)</th>
                <th scope="col"></th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Equitable and Inclusive Education Projects</td>
                <td><input id="eies_NEIEP" type="number" value="0"></td>
                <td><input id="eiet_NEIEP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="eies_NCIS" type="number" value="0"></td>
                <td><input id="eiet_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="eies_NPM" type="number" value="0"></td>
                <td><input id="eiet_NPM" type="number" value="0"></td>

            </tr>


            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Good governance for all (Leadership, Organizational Development, and Good
                        Governance)</th>
                    <th scope="col"></th>


                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Leadership, Organizational Development, and Good Governance
                    Projects</td>
                <td><input id="ggas_NLODGGP" type="number" value="0"></td>
                <td><input id="ggat_NLODGGP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="ggas_NCIS" type="number" value="0"></td>
                <td><input id="ggat_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="ggas_NPM" type="number" value="0"></td>
                <td><input id="ggat_NPM" type="number" value="0"></td>

            </tr>



            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"> Economic justice for all (Employability and Social Enterprise)</th>
                    <th scope="col"></th>


                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Employability and Social Enterprise Projects</td>
                <td><input id="ejas_NESEP" type="number" value="0"></td>
                <td><input id="ejat_NESEP" type="number" value="0"></td>

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
                    <th scope="col">Christ's love for all (Socio-pastoral Ministry and Evangelization)</th>
                    <th scope="col"></th>


                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Socio-Pastoral Ministry and Evangelization Projects</td>
                <td><input id="clas_NSMEP" type="number" value="0"></td>
                <td><input id="clat_NSMEP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="clas_NCIS" type="number" value="0"></td>
                <td><input id="clat_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="clas_NPM" type="number" value="0"></td>
                <td><input id="clat_NPM" type="number" value="0"></td>

            </tr>
        </tbody>
    </table>
    <div class="button-container">
        <div class="button-wrapper">
            <a class="btn btn-warning" id="edit_btn" onclick="edit_kra3()" href="#" role="button">Edit</a>
            <button type="button" onclick="btnSave()" class="btn btn-warning">Save</button>
            <a class="btn btn-dark" href="kra1-next.php" role="button">Next</a>

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
    //-- Health for All --//
    //Status
    var hwds_NHWDP = $('#hwds_NHWDP').val();
    var hwds_NCIS = $('#hwds_NCIS').val();
    var hwds_NPM = $('#hwds_NPM').val();
    //Target
    var hwdt_NHWDP = $('#hwdt_NHWDP').val();
    var hwdt_NCIS = $('#hwdt_NCIS').val();
    var hwdt_NPM = $('#hwdt_NPM').val();

    var hwds_arr = new Array(hwds_NHWDP, hwds_NCIS, hwds_NPM);
    var hwdt_arr = [hwdt_NHWDP, hwdt_NCIS, hwdt_NPM];
    localStorage.setItem('hwds_arr', hwds_arr);
    localStorage.setItem('hwdt_arr', hwdt_arr);


    //-- Education for all --//
    //Status
    var eies_NEIEP = $('#eies_NEIEP').val();
    var eies_NCIS = $('#eies_NCIS').val();
    var eies_NPM = $('#eies_NPM').val();
    //Target
    var eiet_NEIEP = $('#eiet_NEIEP').val();
    var eiet_NCIS = $('#eiet_NCIS').val();
    var eiet_NPM = $('#eiet_NPM').val();


    var eies_arr = new Array(eies_NEIEP, eies_NCIS, eies_NPM);
    var eiet_arr = [eiet_NEIEP, eiet_NCIS, eiet_NPM];
    localStorage.setItem('eies_arr', eies_arr);
    localStorage.setItem('eiet_arr', eiet_arr);


    //-- Good governance for all --//
    //Status
    var ggas_NLODGGP = $('#ggas_NLODGGP').val();
    var ggas_NCIS = $('#ggas_NCIS').val();
    var ggas_NPM = $('#ggas_NPM').val();
    //Target
    var ggat_NLODGGP = $('#ggat_NLODGGP').val();
    var ggat_NCIS = $('#ggat_NCIS').val();
    var ggat_NPM = $('#ggat_NPM').val();

    var ggas_arr = new Array(ggas_NLODGGP, ggas_NCIS, ggas_NPM);
    var ggat_arr = [ggat_NLODGGP, ggat_NCIS, ggat_NPM];
    localStorage.setItem('ggas_arr', ggas_arr);
    localStorage.setItem('ggat_arr', ggat_arr);


    //-- Economic justice for all --//
    //Status
    var ejas_NESEP = $('#ejas_NESEP').val();
    var ejas_NCIS = $('#ejas_NCIS').val();
    var ejas_NPM = $('#ejas_NPM').val();
    //Target
    var ejat_NESEP = $('#ejat_NESEP').val();
    var ejat_NCIS = $('#ejat_NCIS').val();
    var ejat_NPM = $('#ejat_NPM').val();

    var ejas_arr = new Array(ejas_NESEP, ejas_NCIS, ejas_NPM);
    var ejat_arr = [ejat_NESEP, ejat_NCIS, ejat_NPM];
    localStorage.setItem('ejas_arr', ejas_arr);
    localStorage.setItem('ejat_arr', ejat_arr);

    //-- Christ's love for all --//
    //Status
    var clas_NSMEP = $('#clas_NSMEP').val();
    var clas_NCIS = $('#clas_NCIS').val();
    var clas_NPM = $('#clas_NPM').val();
    //Target
    var clat_NSMEP = $('#clat_NSMEP').val();
    var clat_NCIS = $('#clat_NCIS').val();
    var clat_NPM = $('#clat_NPM').val();

    var clas_arr = new Array(clas_NSMEP, clas_NCIS, clas_NPM);
    var clat_arr = [clat_NSMEP, clat_NCIS, clat_NPM];
    localStorage.setItem('clas_arr', clas_arr);
    localStorage.setItem('clat_arr', clat_arr);


    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "update1_kra1",
            user_id: user_id,

            hwds_arr: localStorage.getItem('hwds_arr'),
            hwdt_arr: localStorage.getItem('hwdt_arr'),
            eies_arr: localStorage.getItem('eies_arr'),
            eiet_arr: localStorage.getItem('eiet_arr'),
            ggas_arr: localStorage.getItem('ggas_arr'),
            ggat_arr: localStorage.getItem('ggat_arr'),
            ejas_arr: localStorage.getItem('ejas_arr'),
            ejat_arr: localStorage.getItem('ejat_arr'),
            clas_arr: localStorage.getItem('clas_arr'),
            clat_arr: localStorage.getItem('clat_arr')
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
            var hwds_arr = data[0].hwds_arr.split(",");
            $('#hwds_NHWDP').val(hwds_arr[0]);
            $('#hwds_NCIS').val(hwds_arr[1]);
            $('#hwds_NPM').val(hwds_arr[2]);
            var hwdt_arr = data[0].hwdt_arr.split(",");
            $('#hwdt_NHWDP').val(hwdt_arr[0]);
            $('#hwdt_NCIS').val(hwdt_arr[1]);
            $('#hwdt_NPM').val(hwdt_arr[2]);

            var eies_arr = data[0].eies_arr.split(",");
            $('#eies_NEIEP').val(eies_arr[0]);
            $('#eies_NCIS').val(eies_arr[1]);
            $('#eies_NPM').val(eies_arr[2]);
            var eiet_arr = data[0].eiet_arr.split(",");
            $('#eiet_NEIEP').val(eiet_arr[0]);
            $('#eiet_NCIS').val(eiet_arr[1]);
            $('#eiet_NPM').val(eiet_arr[2]);

            var ggas_arr = data[0].ggas_arr.split(",");
            $('#ggas_NLODGGP').val(ggas_arr[0]);
            $('#ggas_NCIS').val(ggas_arr[1]);
            $('#ggas_NPM').val(ggas_arr[2]);
            var ggat_arr = data[0].ggat_arr.split(",");
            $('#ggat_NLODGGP').val(ggat_arr[0]);
            $('#ggat_NCIS').val(ggat_arr[1]);
            $('#ggat_NPM').val(ggat_arr[2]);

            var ejas_arr = data[0].ejas_arr.split(",");
            $('#ejas_NESEP').val(ejas_arr[0]);
            $('#ejas_NCIS').val(ejas_arr[1]);
            $('#ejas_NPM').val(ejas_arr[2]);
            var ejat_arr = data[0].ejat_arr.split(",");
            $('#ejat_NESEP').val(ejat_arr[0]);
            $('#ejat_NCIS').val(ejat_arr[1]);
            $('#ejat_NPM').val(ejat_arr[2]);

            var clas_arr = data[0].clas_arr.split(",");
            $('#clas_NSMEP').val(clas_arr[0]);
            $('#clas_NCIS').val(clas_arr[1]);
            $('#clas_NPM').val(clas_arr[2]);
            var clat_arr = data[0].clat_arr.split(",");
            $('#clat_NSMEP').val(clat_arr[0]);
            $('#clat_NCIS').val(clat_arr[1]);
            $('#clat_NPM').val(clat_arr[2]);

        }
    })
}
</script>