<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Community Development Report</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/student-official/css/kra3.css" />
    <?php
			include('../cdn/cdn.php');
		?>
</head>

<body>
    <?php
			include('../nav_master/nav.php');
		?>
    <hr />
    <div class="title-wrapper m-2">
        <h3>Community Development Report</h3>
    </div>
    <div class="kra-1">KRA 3: Dynamic Community Development External Partnerships and Networks</div>
    <br>

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
                <td><input id="nmoas_PO" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Government Agencies or LGUs</td>
                <td><input id="nmoas_LGU" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Non-Government Organizations</td>
                <td><input id="nmoas_NGO" type="number" value="0"></td>

            </tr>


            <tr>
                <th scope="row"></th>
                <td> Basic Educational Institutions</td>
                <td><input id="nmoas_BEI" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Local Higher Educational Institutions</td>
                <td><input id="nmoas_LHEI" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>International Higher Educational Institutions</td>
                <td><input id="nmoas_IHEI" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Faith-Based/Church-Based Organization</td>
                <td><input id="nmoas_CBO" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Professional/Business Organizations</td>
                <td><input id="nmoas_PBO" type="number" value="0"></td>

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
                <td><input id="ncdaas_PO" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Government Agencies or LGUs</td>
                <td><input id="ncdaas_LGU" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Non-Government Organizations</td>
                <td><input id="ncdaas_NGO" type="number" value="0"></td>

            </tr>


            <tr>
                <th scope="row"></th>
                <td> Basic Educational Institutions</td>
                <td><input id="ncdaas_BEI" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Local Higher Educational Institutions</td>
                <td><input id="ncdaas_LHEI" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>International Higher Educational Institutions</td>
                <td><input id="ncdaas_IHEI" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Faith-Based/Church-Based Organization</td>
                <td><input id="ncdaas_CBO" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> Professional/Business Organizations</td>
                <td><input id="ncdaas_PBO" type="number" value="0"></td>

            </tr>


            <br>






        </tbody>
    </table>
    <div class="button-container">
        <div class="button-wrapper">
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
function btnSave() { //-- Not attached to any "onlcick" --//

    //-- Number of MOA/MOU --//
    var nmoas_PO = $('#nmoas_PO').val();
    var nmoas_LGU = $('#nmoas_LGU').val();
    var nmoas_NGO = $('#nmoas_NGO').val();
    var nmoas_BEI = $('#nmoas_BEI').val();
    var nmoas_LHEI = $('#nmoas_LHEI').val();
    var nmoas_IHEI = $('#nmoas_IHEI').val();
    var nmoas_CBO = $('#nmoas_CBO').val();
    var nmoas_PBO = $('#nmoas_PBO').val();  

    var nmoas_arr = new Array(nmoas_PO, nmoas_LGU, nmoas_NGO, nmoas_BEI, nmoas_LHEI, nmoas_IHEI, nmoas_CBO, nmoas_PBO);
    localStorage.setItem('nmoas_arr', nmoas_arr);

    //-- Number of Community Development --//

    var ncdaas_PO = $('#ncdaas_PO').val();
    var ncdaas_LGU = $('#ncdaas_LGU').val();
    var ncdaas_NGO = $('#ncdaas_NGO').val();
    var ncdaas_BEI = $('#ncdaas_BEI').val();
    var ncdaas_LHEI = $('#ncdaas_LHEI').val();
    var ncdaas_IHEI = $('#ncdaas_IHEI').val();
    var ncdaas_CBO = $('#ncdaas_CBO').val();
    var ncdaas_PBO = $('#ncdaas_PBO').val();  

    var ncdaas_arr = new Array(ncdaas_PO, ncdaas_LGU, ncdaas_NGO, ncdaas_BEI, ncdaas_LHEI, ncdaas_IHEI, ncdaas_CBO, ncdaas_PBO);
    localStorage.setItem('ncdaas_arr', ncdaas_arr);

}

function btnSubmit() {
    let kra_id = localStorage.getItem('kra_selected_id');
    let college_id = localStorage.getItem('selected_college_id');
    $.ajax({
        url: url,
        type: "POST",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "save_kra3",
            kra_id: kra_id,
            college_id: college_id,
            user_id: localStorage.getItem('user_id'),
            nmoas_arr: localStorage.getItem('nmoas_arr'),
            ncdaas_arr: localStorage.getItem('ncdaas_arr')
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