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
    var nmoas_POS = $("#nmoas_POS").val();
    var nmoas_LGU = $("#nmoas_LGU").val();
    var nmoas_NGO = $("#nmoas_NGO").val();
    var nmoas_BEI = $("#nmoas_BEI").val();
    var nmoas_LHEI = $("#nmoas_LHEI").val();
    var nmoas_IHEI = $("#nmoas_IHEI").val();
    var nmoas_CBO = $("#nmoas_CBO").val();
    var nmoas_PBO = $("#nmoas_PBO").val();
    //Target
    var nmoat_POS = $("#nmoat_POS").val();
    var nmoat_LGU = $("#nmoat_LGU").val();
    var nmoat_NGO = $("#nmoat_NGO").val();
    var nmoat_BEI = $("#nmoat_BEI").val();
    var nmoat_LHEI = $("#nmoat_LHEI").val();
    var nmoat_IHEI = $("#nmoat_IHEI").val();
    var nmoat_CBO = $("#nmoat_CBO").val();
    var nmoat_PBO = $("#nmoat_PBO").val();
    //array
    var nmoas_arr = [nmoas_POS, nmoas_LGU, nmoas_NGO, nmoas_BEI, nmoas_LHEI, nmoas_IHEI, nmoas_CBO, nmoas_PBO];
    var nmoat_arr = [nmoat_POS, nmoat_LGU, nmoat_NGO, nmoat_BEI, nmoat_LHEI, nmoat_IHEI, nmoat_CBO, nmoat_PBO];
    localStorage.setItem('nmoas_arr', nmoas_arr);
    localStorage.setItem('nmoat_arr', nmoat_arr);


    //-- Number of Community Development and Advocacy Activities --//
    //Status
    var ncdaas_POS = $("#ncdaas_POS").val();
    var ncdaas_LGU = $("#ncdaas_LGU").val();
    var ncdaas_NGO = $("#ncdaas_NGO").val();
    var ncdaas_BEI = $("#ncdaas_BEI").val();
    var ncdaas_LHEI = $("#ncdaas_LHEI").val();
    var ncdaas_IHEI = $("#ncdaas_IHEI").val();
    var ncdaas_CBO = $("#ncdaas_CBO").val();
    var ncdaas_PBO = $("#ncdaas_PBO").val();
    //Target
    var ncdaat_POS = $("#ncdaat_POS").val();
    var ncdaat_LGU = $("#ncdaat_LGU").val();
    var ncdaat_NGO = $("#ncdaat_NGO").val();
    var ncdaat_BEI = $("#ncdaat_BEI").val();
    var ncdaat_LHEI = $("#ncdaat_LHEI").val();
    var ncdaat_IHEI = $("#ncdaat_IHEI").val();
    var ncdaat_CBO = $("#ncdaat_CBO").val();
    var ncdaat_PBO = $("#ncdaat_PBO").val();
    //array
    var ncdaas_arr = [ncdaas_POS, ncdaas_LGU, ncdaas_NGO, ncdaas_BEI, ncdaas_LHEI, ncdaas_IHEI, ncdaas_CBO, ncdaas_PBO];
    var ncdaat_arr = [ncdaat_POS, ncdaat_LGU, ncdaat_NGO, ncdaat_BEI, ncdaat_LHEI, ncdaat_IHEI, ncdaat_CBO, ncdaat_PBO];
    localStorage.setItem('ncdaas_arr', ncdaas_arr);
    localStorage.setItem('ncdaat_arr', ncdaat_arr);


    //-- Number of Training/Course Offerings --//
    //Status
    var ntco_stat = $("#ntco_stat").val();
    //Target
    var ntco_targ = $("#ntco_targ").val();
    //array
    var arr_ntco_stat = [ntco_stat];
    var arr_ntco_targ = [ntco_targ];
    localStorage.setItem('arr_ntco_stat', arr_ntco_stat);
    localStorage.setItem('arr_ntco_targ', arr_ntco_targ);


    //-- Number of Participants in Training/Course offereings --//
    //Status
    var nptco_stat = $("#nptco_stat").val();
    //Target
    var nptco_targ = $("#nptco_targ").val();
    //array
    var arr_nptco_stat = [nptco_stat];
    var arr_nptco_targ = [nptco_targ];
    localStorage.setItem('arr_nptco_stat', arr_nptco_stat);
    localStorage.setItem('arr_nptco_targ', arr_nptco_targ);


    let user_id = localStorage.getItem('selected_user_id');
    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "update1_kra3",
            user_id: user_id,
            nmoas_arr: localStorage.getItem('nmoas_arr'),
            nmoat_arr: localStorage.getItem('nmoat_arr'),
            ncdaas_arr: localStorage.getItem('ncdaas_arr'),
            ncdaat_arr: localStorage.getItem('ncdaat_arr'),
            arr_ntco_stat: localStorage.getItem('arr_ntco_stat'),
            arr_ntco_targ: localStorage.getItem('arr_ntco_targ'),
            arr_nptco_stat: localStorage.getItem('arr_nptco_stat'),
            arr_nptco_targ: localStorage.getItem('arr_nptco_targ')

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
get_kra3datafromuserid();

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

            var nmoas_arr = data[0].nmoas_arr.split(",");
            $('#nmoas_POS').val(nmoas_arr[0]);
            $('#nmoas_LGU').val(nmoas_arr[1]);
            $('#nmoas_NGO').val(nmoas_arr[2]);
            $('#nmoas_BEI').val(nmoas_arr[3]);
            $('#nmoas_LHEI').val(nmoas_arr[4]);
            $('#nmoas_IHEI').val(nmoas_arr[5]);
            $('#nmoas_CBO').val(nmoas_arr[6]);
            $('#nmoas_PBO').val(nmoas_arr[7]);

            let nmoat_arr = data[0].nmoat_arr;
            if(nmoat_arr != "") {
                let nmoat_arr = data[0].nmoat_arr.split(",");
                $('#nmoat_POS').val(nmoas_arr[0]);
                $('#nmoat_LGU').val(nmoas_arr[1]);
                $('#nmoat_NGO').val(nmoas_arr[2]);
                $('#nmoat_BEI').val(nmoas_arr[3]);
                $('#nmoat_LHEI').val(nmoas_arr[4]);
                $('#nmoat_IHEI').val(nmoas_arr[5]);
                $('#nmoat_CBO').val(nmoas_arr[6]);
                $('#nmoat_PBO').val(nmoas_arr[7]);
            }
            

            var ncdaas_arr = data[0].ncdaas_arr.split(",");
            $('#ncdaas_POS').val(ncdaas_arr[0]);
            $('#ncdaas_LGU').val(ncdaas_arr[1]);
            $('#ncdaas_NGO').val(ncdaas_arr[2]);
            $('#ncdaas_BEI').val(ncdaas_arr[3]);
            $('#ncdaas_LHEI').val(ncdaas_arr[4]);
            $('#ncdaas_IHEI').val(ncdaas_arr[5]);
            $('#ncdaas_CBO').val(ncdaas_arr[6]);
            $('#ncdaas_PBO').val(ncdaas_arr[7]);
            let ncdaat_arr = data[0].ncdaat_arr;
            if(ncdaat_arr != "") {
                let ncdaat_arr = data[0].ncdaat_arr.split(",");
                $('#ncdaat_POS').val(ncdaat_arr[0]);
                $('#ncdaat_LGU').val(ncdaat_arr[1]);
                $('#ncdaat_NGO').val(ncdaat_arr[2]);
                $('#ncdaat_BEI').val(ncdaat_arr[3]);
                $('#ncdaat_LHEI').val(ncdaat_arr[4]);
                $('#ncdaat_IHEI').val(ncdaat_arr[5]);
                $('#ncdaat_CBO').val(ncdaat_arr[6]);
                $('#ncdaat_PBO').val(ncdaat_arr[7]);
            }
           
            let arr_ntco_stat = data[0].arr_ntco_stat;
            if(arr_ntco_stat != "") {
                $('#ntco_stat').val(arr_ntco_stat);
            }
            let arr_ntco_targ = data[0].arr_ntco_targ;
            if(arr_ntco_targ != "") {
                $('#ntco_targ').val(arr_ntco_targ);
            }

            let arr_nptco_stat = data[0].arr_nptco_stat;
            if(arr_nptco_stat != "") {
                $('#nptco_stat').val(arr_nptco_stat);
            }
            let arr_nptco_targ = data[0].arr_nptco_targ;
            if(arr_nptco_targ != "") {
                $('#nptco_targ').val(arr_nptco_targ);
            }
        }
    })
}
</script>