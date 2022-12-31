<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA 3</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/coordinator/css/kra3.css" />
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
                <td><input id="nmaos_POS" type="number" value="0"></td>
                <td><input id="nmaot_POS" type="number" value="0"></td>


            </tr>
            <tr>
                <th scope="row"></th>
                <td>Government Agencies or LGUs</td>
                <td><input id="nmaos_LGU" type="number" value="0"></td>
                <td><input id="nmaot_LGU" type="number" value="0"></td>


            </tr>
            <tr>
                <th scope="row"></th>
                <td> Non-Government Organizations</td>
                <td><input id="nmaos_NGO" type="number" value="0"></td>
                <td><input id="nmaot_NGO" type="number" value="0"></td>


            </tr>


            <tr>
                <th scope="row"></th>
                <td> Basic Educational Institutions</td>
                <td><input id="nmaos_BEI" type="number" value="0"></td>
                <td><input id="nmaot_BEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Local Higher Educational Institutions</td>
                <td><input id="nmaos_LHEI" type="number" value="0"></td>
                <td><input id="nmaot_LHEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>International Higher Educational Institutions</td>
                <td><input id="nmaos_IHEI" type="number" value="0"></td>
                <td><input id="nmaot_IHEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Faith-Based/Church-Based Organization</td>
                <td><input id="nmaos_CBO" type="number" value="0"></td>
                <td><input id="nmaot_CBO" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Professional/Business Organizations</td>
                <td><input id="nmaos_PBO" type="number" value="0"></td>
                <td><input id="nmaot_PBO" type="number" value="0"></td>
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
                <td><input id="ncdas_POS" type="number" value="0"></td>
                <td><input id="ncdat_POS" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>Government Agencies or LGUs</td>
                <td><input id="ncdas_LGU" type="number" value="0"></td>
                <td><input id="ncdat_LGU" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Non-Government Organizations</td>
                <td><input id="ncdas_NGO" type="number" value="0"></td>
                <td><input id="ncdat_NGO" type="number" value="0"></td>
            </tr>


            <tr>
                <th scope="row"></th>
                <td> Basic Educational Institutions</td>
                <td><input id="ncdas_BEI" type="number" value="0"></td>
                <td><input id="ncdat_BEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Local Higher Educational Institutions</td>
                <td><input id="ncdas_LHEI" type="number" value="0"></td>
                <td><input id="ncdat_LHEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td>International Higher Educational Institutions</td>
                <td><input id="ncdas_IHEI" type="number" value="0"></td>
                <td><input id="ncdat_IHEI" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Faith-Based/Church-Based Organization</td>
                <td><input id="ncdas_CBO" type="number" value="0"></td>
                <td><input id="ncdat_CBO" type="number" value="0"></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td> Professional/Business Organizations</td>
                <td><input id="ncdas_PBO" type="number" value="0"></td>
                <td><input id="ncdat_PBO" type="number" value="0"></td>
            </tr>


            <br>

            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" id="training">Number of Training/Course Offerings on Commnunity Engagement and
                        Organizing</th>
                    <td scope="col"><input id="ntco_STAT" type="number" value="0"></td>
                    <td scope="col"><input id="ntco_TARG" type="number" value="0"></td>

                </tr>
            </thead>



            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" id="training">Number of Participants in Training/Course offereings on Community
                        Engagement and
                        Organizing</th>
                    <td scope="col"><input id="nptco_STAT" type="number" value="0"></td>
                    <td scope="col"><input id="nptco_TARG" type="number" value="0"></td>

                </tr>
            </thead>





        </tbody>
    </table>

    <!-- Button trigger modal -->
    <div class="button-container">
        <div class="button-wrapper">
            <div class="button-wrapper">
                <a class="btn btn-warning" id="edit_btn" onclick="edit_kra3()" href="#" role="button">Edit</a>
                <a class="btn btn-warning" id="save_btn" style="display: none;" onclick="save_kra3()" href="#"
                    role="button">Save</a>
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
get_lock();

function get_lock() {
    if (localStorage.getItem('edit_lock') == "1") {
        $('#edit_btn').addClass("disabled");
        $('#edit_btn').attr("disabled", "disabled");
        $('.approve').addClass("disabled");
        $('.approve').attr("disabled", "disabled");
    }
}
get_kra3datafromuserid();

function save_kra3() {
    //-- Number of MOA/MOU --//
    //Status
    var nmaos_POS = $("#nmaos_POS").val();
    var nmaos_LGU = $("#nmaos_LGU").val();
    var nmaos_NGO = $("#nmaos_NGO").val();
    var nmaos_BEI = $("#nmaos_BEI").val();
    var nmaos_LHEI = $("#nmaos_LHEI").val();
    var nmaos_IHEI = $("#nmaos_IHEI").val();
    var nmaos_CBO = $("#nmaos_CBO").val();
    var nmaos_PBO = $("#nmaos_PBO").val();
    //Target
    var nmaot_POS = $("#nmaot_POS").val();
    var nmaot_LGU = $("#nmaot_LGU").val();
    var nmaot_NGO = $("#nmaot_NGO").val();
    var nmaot_BEI = $("#nmaot_BEI").val();
    var nmaot_LHEI = $("#nmaot_LHEI").val();
    var nmaot_IHEI = $("#nmaot_IHEI").val();
    var nmaot_CBO = $("#nmaot_CBO").val();
    var nmaot_PBO = $("#nmaot_PBO").val();
    //array
    var nmaos_arr = [nmaos_POS, nmaos_LGU, nmaos_NGO, nmaos_BEI, nmaos_LHEI, nmaos_IHEI, nmaos_CBO, nmaos_PBO];
    var nmaot_arr = [nmaot_POS, nmaot_LGU, nmaot_NGO, nmaot_BEI, nmaot_LHEI, nmaot_IHEI, nmaot_CBO, nmaot_PBO];
    localStorage.setItem('nmaos_arr', nmaos_arr);
    localStorage.setItem('nmaot_arr', nmaot_arr);


    //-- Number of Community Development and Advocacy Activities --//
    //Status
    var ncdas_POS = $("#ncdas_POS").val();
    var ncdas_LGU = $("#ncdas_LGU").val();
    var ncdas_NGO = $("#ncdas_NGO").val();
    var ncdas_BEI = $("#ncdas_BEI").val();
    var ncdas_LHEI = $("#ncdas_LHEI").val();
    var ncdas_IHEI = $("#ncdas_IHEI").val();
    var ncdas_CBO = $("#ncdas_CBO").val();
    var ncdas_PBO = $("#ncdas_PBO").val();
    //Target
    var ncdat_POS = $("#ncdat_POS").val();
    var ncdat_LGU = $("#ncdat_LGU").val();
    var ncdat_NGO = $("#ncdat_NGO").val();
    var ncdat_BEI = $("#ncdat_BEI").val();
    var ncdat_LHEI = $("#ncdat_LHEI").val();
    var ncdat_IHEI = $("#ncdat_IHEI").val();
    var ncdat_CBO = $("#ncdat_CBO").val();
    var ncdat_PBO = $("#ncdat_PBO").val();
    //array
    var ncdas_arr = [ncdas_POS, ncdas_LGU, ncdas_NGO, ncdas_BEI, ncdas_LHEI, ncdas_IHEI, ncdas_CBO, ncdas_PBO];
    var ncdat_arr = [ncdat_POS, ncdat_LGU, ncdat_NGO, ncdat_BEI, ncdat_LHEI, ncdat_IHEI, ncdat_CBO, ncdat_PBO];
    localStorage.setItem('ncdas_arr', ncdas_arr);
    localStorage.setItem('ncdat_arr', ncdat_arr);


    //-- Number of Training/Course Offerings --//
    //Status
    var ntco_STAT = $("#ntco_STAT").val();
    //Target
    var ntco_TARG = $("#ntco_TARG").val();
    //array
    var arr_ntco_STAT = [ntco_STAT];
    var arr_ntco_TARG = [ntco_TARG];
    localStorage.setItem('arr_ntco_STAT', arr_ntco_STAT);
    localStorage.setItem('arr_ntco_TARG', arr_ntco_TARG);


    //-- Number of Participants in Training/Course offereings --//
    //Status
    var nptco_STAT = $("#nptco_STAT").val();
    //Target
    var nptco_TARG = $("#nptco_TARG").val();
    //array
    var arr_nptco_STAT = [nptco_STAT];
    var arr_nptco_TARG = [nptco_TARG];
    localStorage.setItem('arr_nptco_STAT', arr_nptco_STAT);
    localStorage.setItem('arr_nptco_TARG', arr_nptco_TARG);


    let user_id = localStorage.getItem('selected_user_id');

    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "update1_kra3",
            user_id: user_id,
            nmaos_arr: localStorage.getItem('nmaos_arr'),
            nmaot_arr: localStorage.getItem('nmaot_arr'),
            ncdas_arr: localStorage.getItem('ncdas_arr'),
            ncdat_arr: localStorage.getItem('ncdat_arr'),
            arr_ntco_STAT: localStorage.getItem('arr_ntco_STAT'),
            arr_ntco_TARG: localStorage.getItem('arr_ntco_TARG'),
            arr_nptco_STAT: localStorage.getItem('arr_nptco_STAT'),
            arr_nptco_TARG: localStorage.getItem('arr_nptco_TARG')

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

function edit_kra3() {
    $('.input_number').removeAttr('readonly');
    $('#save_btn').show();
    $('#edit_btn').hide();
}

function get_kra3datafromuserid() {
    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra3datafromuserid",
            user_id: user_id
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText);
            var nmaos_arr = data[0].nmaos_arr.split(",");
            $('#nmaos_POS').val(nmaos_arr[0]);
            $('#nmaos_LGU').val(nmaos_arr[1]);
            $('#nmaos_NGO').val(nmaos_arr[2]);
            $('#nmaos_BEI').val(nmaos_arr[3]);
            $('#nmaos_LHEI').val(nmaos_arr[4]);
            $('#nmaos_IHEI').val(nmaos_arr[5]);
            $('#nmaos_CBO').val(nmaos_arr[6]);
            $('#nmaos_PBO').val(nmaos_arr[7]);
            var nmaot_arr = data[0].nmaot_arr.split(",");
            $('#POt_MM').val(nmaot_arr[0]);
            $('#POt_CDAA').val(nmaot_arr[1]);
            $('#POt_MM').val(nmaot_arr[2]);
            $('#POt_CDAA').val(nmaot_arr[3]);
            $('#POt_MM').val(nmaot_arr[4]);
            $('#POt_CDAA').val(nmaot_arr[5]);
            $('#POt_MM').val(nmaot_arr[6]);
            $('#POt_CDAA').val(nmaot_arr[7]);

            var ncdas_arr = data[0].ncdas_arr.split(",");
            $('#ncdas_POS').val(ncdas_arr[0]);
            $('#ncdas_LGU').val(ncdas_arr[1]);
            $('#ncdas_NGO').val(ncdas_arr[2]);
            $('#ncdas_BEI').val(ncdas_arr[3]);
            $('#ncdas_LHEI').val(ncdas_arr[4]);
            $('#ncdas_IHEI').val(ncdas_arr[5]);
            $('#ncdas_CBO').val(ncdas_arr[6]);
            $('#ncdas_PBO').val(ncdas_arr[7]);
            var ncdat_arr = data[0].ncdat_arr.split(",");
            $('#ncdat_POS').val(ncdat_arr[0]);
            $('#ncdat_LGU').val(ncdat_arr[1]);
            $('#ncdat_NGO').val(ncdat_arr[2]);
            $('#ncdat_BEI').val(ncdat_arr[3]);
            $('#ncdat_LHEI').val(ncdat_arr[4]);
            $('#ncdat_IHEI').val(ncdat_arr[5]);
            $('#ncdat_CBO').val(ncdat_arr[6]);
            $('#ncdat_PBO').val(ncdat_arr[7]);

            var arr_ntco_STAT = data[0].arr_ntco_STAT.split(",");
            $('#ntco_STAT').val(arr_ntco_STAT[0]);
            var arr_ntco_TARG = data[0].arr_ntco_TARG.split(",");
            $('#ntco_TARG').val(arr_ntco_TARG[0]);

            var arr_nptco_STAT = data[0].arr_nptco_STAT.split(",");
            $('#nptco_STAT').val(arr_nptco_STAT[0]);
            var arr_nptco_TARG = data[0].arr_nptco_TARG.split(",");
            $('#nptco_TARG').val(arr_nptco_TARG[0]);

        }
    })
}
</script>