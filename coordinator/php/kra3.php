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


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> People's Organizations</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Government Agencies or LGUs</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Non-Government Organizations</td>
                <td><input type="number" value="0"></td>

            </tr>


            <tr>
                <th scope="row"></th>
                <td> Basic Educational Institutions</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Local Higher Educational Institutions</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>International Higher Educational Institutions</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Faith-Based/Church-Based Organization</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Professional/Business Organizations</td>
                <td><input type="number" value="0"></td>

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
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Government Agencies or LGUs</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Non-Government Organizations</td>
                <td><input type="number" value="0"></td>

            </tr>


            <tr>
                <th scope="row"></th>
                <td> Basic Educational Institutions</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Local Higher Educational Institutions</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>International Higher Educational Institutions</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Faith-Based/Church-Based Organization</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Professional/Business Organizations</td>
                <td><input type="number" value="0"></td>

            </tr>


            <br>

            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" id="training">Number of Training/Course Offerings on Commnunity Engagement and
                        Organizing</th>
                    <td scope="col"><input type="number" value="0"></td>


                </tr>
            </thead>



            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col" id="training">Number of Participants in Training/Course offereings on Community
                        Engagement and
                        Organizing</th>
                    <td scope="col"><input type="number" value="0"></td>


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
    var POs_MM = $("#POs_MM").val();
    var POs_CDAA = $("#POs_CDAA").val();
    var POt_MM = $("#POt_MM").val();
    var POt_CDAA = $("#POt_CDAA").val();

    //array
    var pos_arr = [POs_MM, POs_CDAA];
    var pot_arr = [POt_MM, POt_CDAA];

    localStorage.setItem('pos_arr', pos_arr);
    localStorage.setItem('pot_arr', pot_arr);


    var pos_arr = [POs_MM, POs_CDAA];
    var pot_arr = [POt_MM, POt_CDAA];


    // SETTING IT TO LOCAL STORAGE
    localStorage.setItem("pos_arr", pos_arr);
    localStorage.setItem("pot_arr", pot_arr);


    var GAs_MM = $("#GAs_MM").val();
    var GAs_CDAA = $("#GAs_CDAA").val();
    var GAt_MM = $("#GAt_MM").val();
    var GAt_CDAA = $("#GAt_CDAA").val();

    //array
    var gas_arr = [GAs_MM, GAs_CDAA];
    var gat_arr = [GAt_MM, GAt_CDAA];
    localStorage.setItem('gas_arr', gas_arr);
    localStorage.setItem('gat_arr', gat_arr);



    var NGOs_MM = $("#NGOs_MM").val();
    var NGOs_CDAA = $("#NGOs_CDAA").val();
    var NGOt_MM = $("#NGOt_MM").val();
    var NGOt_CDAA = $("#NGOt_CDAA").val();

    //array
    var ngos_arr = [NGOs_MM, NGOs_CDAA];
    var ngot_arr = [NGOt_MM, NGOt_CDAA];
    localStorage.setItem('ngos_arr', ngos_arr);
    localStorage.setItem('ngot_arr', ngot_arr);


    var BEIs_MM = $("#BEIs_MM").val();
    var BEIs_CDAA = $("#BEIs_CDAA").val();
    var BEIt_MM = $("#BEIt_MM").val();
    var BEIt_CDAA = $("#BEIt_CDAA").val();

    //array
    var beis_arr = [BEIs_MM, BEIs_CDAA];
    var beit_arr = [BEIt_MM, BEIt_CDAA];
    localStorage.setItem('beis_arr', beis_arr);
    localStorage.setItem('beit_arr', beit_arr);

    let user_id = localStorage.getItem('selected_user_id');

    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "update1_kra3",
            user_id: user_id,
            pos_arr: localStorage.getItem('pos_arr'),
            pot_arr: localStorage.getItem('pot_arr'),
            gas_arr: localStorage.getItem('gas_arr'),
            gat_arr: localStorage.getItem('gat_arr'),
            ngos_arr: localStorage.getItem('ngos_arr'),
            ngot_arr: localStorage.getItem('ngot_arr'),
            beis_arr: localStorage.getItem('beis_arr'),
            beit_arr: localStorage.getItem('beit_arr')
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
            var pos_arr = data[0].pos_arr.split(",");
            $('#POs_MM').val(pos_arr[0]);
            $('#POs_CDAA').val(pos_arr[1]);
            var pot_arr = data[0].pot_arr.split(",");
            $('#POt_MM').val(pot_arr[0]);
            $('#POt_CDAA').val(pot_arr[1]);
            var gas_arr = data[0].gas_arr.split(",");
            $('#GAs_MM').val(gas_arr[0]);
            $('#GAs_CDAA').val(gas_arr[1]);
            var gat_arr = data[0].gat_arr.split(",");
            $('#GAt_MM').val(gat_arr[0]);
            $('#GAt_CDAA').val(gat_arr[1]);
            var ngos_arr = data[0].ngos_arr.split(",");
            $('#NGOs_MM').val(ngos_arr[0]);
            $('#NGOs_CDAA').val(ngos_arr[1]);
            var ngot_arr = data[0].ngot_arr.split(",");
            $('#NGOt_MM').val(ngot_arr[0]);
            $('#NGOt_CDAA').val(ngot_arr[1]);
            var beis_arr = data[0].beis_arr.split(",");
            $('#BEIs_MM').val(beis_arr[0]);
            $('#BEIs_CDAA').val(beis_arr[1]);
            var beit_arr = data[0].beit_arr.split(",");
            $('#BEIt_MM').val(beit_arr[0]);
            $('#BEIt_CDAA').val(beit_arr[1]);
        }
    })
}
</script>