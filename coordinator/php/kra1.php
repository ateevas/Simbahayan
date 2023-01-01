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
                <td><input readonly id="hs_NHWDP" type="number" value="0"></td>
                <td><input readonly id="ht_NHWDP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input readonly id="hs_NCIS" type="number" value="0"></td>
                <td><input readonly id="ht_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input readonly id="hs_NPM" type="number" value="0"></td>
                <td><input readonly id="ht_NPM" type="number" value="0"></td>

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
                <td><input readonly id="es_NEIEP" type="number" value="0"></td>
                <td><input readonly id="et_NEIEP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input readonly id="es_NCIS" type="number" value="0"></td>
                <td><input readonly id="et_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input readonly id="es_NPM" type="number" value="0"></td>
                <td><input readonly id="et_NPM" type="number" value="0"></td>

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
                <td><input readonly id="ggs_NLODGGP" type="number" value="0"></td>
                <td><input readonly id="ggt_NLODGGP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input readonly id="ggs_NCIS" type="number" value="0"></td>
                <td><input readonly id="ggt_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input readonly id="ggs_NPM" type="number" value="0"></td>
                <td><input readonly id="ggt_NPM" type="number" value="0"></td>

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
                <td><input readonly id="ejs_NESEP" type="number" value="0"></td>
                <td><input readonly id="ejt_NESEP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input readonly id="ejs_NCIS" type="number" value="0"></td>
                <td><input readonly id="ejt_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input readonly id="ejs_NPM" type="number" value="0"></td>
                <td><input readonly id="ejt_NPM" type="number" value="0"></td>

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
                <td><input readonly id="cls_NSMEP" type="number" value="0"></td>
                <td><input readonly id="clt_NSMEP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input readonly id="cls_NCIS" type="number" value="0"></td>
                <td><input readonly id="clt_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input readonly id="cls_NPM" type="number" value="0"></td>
                <td><input readonly id="clt_NPM" type="number" value="0"></td>

            </tr>
        </tbody>
    </table>
    <div class="button-container">
        <div class="button-wrapper">
            <a class="btn btn-warning" id="edit_btn" onclick="edit_kra1()" href="#" role="button">Edit</a>
            <button style="display: none" id="save_btn" type="button" onclick="btnSave()" class="btn btn-warning">Save</button>
            <a class="btn btn-dark" href="kra1-next.php" role="button">Next</a>

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
get_lock();

function get_lock() {
    if (localStorage.getItem('edit_lock') == "1") {
        $('#edit_btn').addClass("disabled");
        $('#edit_btn').attr("disabled", "disabled");
        $('.approve').addClass("disabled");
        $('.approve').attr("disabled", "disabled");
    }
}

function btnSave() {
    //-- Health for All --//
    //Status
    var hs_NHWDP = $('#hs_NHWDP').val();
    var hs_NCIS = $('#hs_NCIS').val();
    var hs_NPM = $('#hs_NPM').val();
    //Target
    var ht_NHWDP = $('#ht_NHWDP').val();
    var ht_NCIS = $('#ht_NCIS').val();
    var ht_NPM = $('#ht_NPM').val();

    var hs_arr = new Array(hs_NHWDP, hs_NCIS, hs_NPM);
    var ht_arr = [ht_NHWDP, ht_NCIS, ht_NPM];
    localStorage.setItem('hs_arr', hs_arr);
    localStorage.setItem('ht_arr', ht_arr);


    //-- Education for all --//
    //Status
    var es_NEIEP = $('#es_NEIEP').val();
    var es_NCIS = $('#es_NCIS').val();
    var es_NPM = $('#es_NPM').val();
    //Target
    var et_NEIEP = $('#et_NEIEP').val();
    var et_NCIS = $('#et_NCIS').val();
    var et_NPM = $('#et_NPM').val();


    var es_arr = new Array(es_NEIEP, es_NCIS, es_NPM);
    var et_arr = [et_NEIEP, et_NCIS, et_NPM];
    localStorage.setItem('es_arr', es_arr);
    localStorage.setItem('et_arr', et_arr);


    //-- Good governance for all --//
    //Status
    var ggs_NLODGGP = $('#ggs_NLODGGP').val();
    var ggs_NCIS = $('#ggs_NCIS').val();
    var ggs_NPM = $('#ggs_NPM').val();
    //Target
    var ggt_NLODGGP = $('#ggt_NLODGGP').val();
    var ggt_NCIS = $('#ggt_NCIS').val();
    var ggt_NPM = $('#ggt_NPM').val();

    var ggs_arr = new Array(ggs_NLODGGP, ggs_NCIS, ggs_NPM);
    var ggt_arr = [ggt_NLODGGP, ggt_NCIS, ggt_NPM];
    localStorage.setItem('ggs_arr', ggs_arr);
    localStorage.setItem('ggt_arr', ggt_arr);


    //-- Economic justice for all --//
    //Status
    var ejs_NESEP = $('#ejs_NESEP').val();
    var ejs_NCIS = $('#ejs_NCIS').val();
    var ejs_NPM = $('#ejs_NPM').val();
    //Target
    var ejt_NESEP = $('#ejt_NESEP').val();
    var ejt_NCIS = $('#ejt_NCIS').val();
    var ejt_NPM = $('#ejt_NPM').val();

    var ejs_arr = new Array(ejs_NESEP, ejs_NCIS, ejs_NPM);
    var ejt_arr = [ejt_NESEP, ejt_NCIS, ejt_NPM];
    localStorage.setItem('ejs_arr', ejs_arr);
    localStorage.setItem('ejt_arr', ejt_arr);

    //-- Christ's love for all --//
    //Status
    var cls_NSMEP = $('#cls_NSMEP').val();
    var cls_NCIS = $('#cls_NCIS').val();
    var cls_NPM = $('#cls_NPM').val();
    //Target
    var clt_NSMEP = $('#clt_NSMEP').val();
    var clt_NCIS = $('#clt_NCIS').val();
    var clt_NPM = $('#clt_NPM').val();

    var cls_arr = new Array(cls_NSMEP, cls_NCIS, cls_NPM);
    var clt_arr = [clt_NSMEP, clt_NCIS, clt_NPM];
    localStorage.setItem('cls_arr', cls_arr);
    localStorage.setItem('clt_arr', clt_arr);


    let user_id = localStorage.getItem('selected_user_id');
    let kra_id = localStorage.getItem('selected_kra_id');
    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "update1_kra1",
            user_id: user_id,
            kra_id: kra_id,
            hs_arr: localStorage.getItem('hs_arr'),
            ht_arr: localStorage.getItem('ht_arr'),
            es_arr: localStorage.getItem('es_arr'),
            et_arr: localStorage.getItem('et_arr'),
            ggs_arr: localStorage.getItem('ggs_arr'),
            ggt_arr: localStorage.getItem('ggt_arr'),
            ejs_arr: localStorage.getItem('ejs_arr'),
            ejt_arr: localStorage.getItem('ejt_arr'),
            cls_arr: localStorage.getItem('cls_arr'),
            clt_arr: localStorage.getItem('clt_arr')
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
    $('input').removeAttr('readonly');
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

            console.log(response.responseText);                                                                                     
            var data = JSON.parse(response.responseText);
            var hs_arr = data[0].hs_arr.split(",");
            $('#hs_NHWDP').val(hs_arr[0]);
            $('#hs_NCIS').val(hs_arr[1]);
            $('#hs_NPM').val(hs_arr[2]);
            let ht_arr = data[0].ht_arr;
            if(ht_arr != "") {
                let ht_arr = data[0].ht_arr.split(",");
                $('#ht_NHWDP').val(ht_arr[0]);
                $('#ht_NCIS').val(ht_arr[1]);
                $('#ht_NPM').val(ht_arr[2]);
            }
           

            var es_arr = data[0].es_arr.split(",");
            $('#es_NEIEP').val(es_arr[0]);
            $('#es_NCIS').val(es_arr[1]);
            $('#es_NPM').val(es_arr[2]);
            let et_arr = data[0].et_arr;
            if(et_arr != "") {
                let et_arr = data[0].et_arr.split(",");
                $('#et_NEIEP').val(et_arr[0]);
                $('#et_NCIS').val(et_arr[1]);
                $('#et_NPM').val(et_arr[2]);
            }

            var ggs_arr = data[0].ggs_arr.split(",");
            $('#ggs_NLODGGP').val(ggs_arr[0]);
            $('#ggs_NCIS').val(ggs_arr[1]);
            $('#ggs_NPM').val(ggs_arr[2]);
            let ggt_arr = data[0].ggt_arr;
            if(ggt_arr != "") {
                let ggt_arr = data[0].ggt_arr.split(",");
                $('#ggt_NLODGGP').val(ggt_arr[0]);
                $('#ggt_NCIS').val(ggt_arr[1]);
                $('#ggt_NPM').val(ggt_arr[2]);
            }

            var ejs_arr = data[0].ejs_arr.split(",");
            $('#ejs_NESEP').val(ejs_arr[0]);
            $('#ejs_NCIS').val(ejs_arr[1]);
            $('#ejs_NPM').val(ejs_arr[2]);
            let ejt_arr = data[0].ejt_arr;
            if(ejt_arr != "") {
                let ejt_arr = data[0].ejt_arr.split(",");
                $('#ejt_NESEP').val(ejt_arr[0]);
                $('#ejt_NCIS').val(ejt_arr[1]);
                $('#ejt_NPM').val(ejt_arr[2]);
            }

            var cls_arr = data[0].cls_arr.split(",");
            $('#cls_NSMEP').val(cls_arr[0]);
            $('#cls_NCIS').val(cls_arr[1]);
            $('#cls_NPM').val(cls_arr[2]);
            let clt_arr = data[0].clt_arr;
            if(clt_arr != "") {
                let clt_arr = data[0].clt_arr.split(",");
                $('#clt_NSMEP').val(clt_arr[0]);
                $('#clt_NCIS').val(clt_arr[1]);
                $('#clt_NPM').val(clt_arr[2]);
            }
        }
    })
}
</script>