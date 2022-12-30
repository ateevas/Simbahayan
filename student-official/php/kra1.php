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
    <hr />
    <div class="title-wrapper m-2">
        <h3>Community Development Report</h3>
    </div>
    <div class="kra-1">KRA 1: Self-reliant, Interdependent, and Empowered Partner Communities and Institutions</div>
    <br>

    <table class="table table-borderless w-50 table-sm mx-auto">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Health for All (Health and Wellness Development)</th>
                <th scope="col">Status</th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Health and Wellness Development Projects</td>
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
                <th scope="col">Education for all (Equitable and Inclusive Education)</th>
                <th scope="col"></th>


            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Equitable and Inclusive Education Projects</td>
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
                    <th scope="col"> Economic justice for all (Employability and Social Enterprise)</th>
                    <th scope="col"></th>


                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Employability and Social Enterprise Projects</td>
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
                    <th scope="col">Christ's love for all (Socio-pastoral Ministry and Evangelization)</th>
                    <th scope="col"></th>


                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Socio-Pastoral Ministry and Evangelization Projects</td>
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
                    <th scope="col">Education for all (Equitable and Inclusive Education)</th>
                    <th scope="col"></th>


                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row"></th>
                <td> No. of Health and Wellness Development Projects</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Status No. of Participants/ Members</td>
                <td><input type="number" value="0"></td>

            </tr>
        </tbody>
    </table>
    <div class="button-container">
        <div class="button-wrapper">
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
function btnNext() {
    //----------------------- Health for All -----------------------//
    var hs_HWDP = $('#hs_HWDP').val();
    var hs_CIS = $('#hs_CIS').val();
    var hs_PM = $('#hs_PM').val();
    var ht_HWDP = $('#ht_HWDP').val();
    var ht_CIS = $('#ht_CIS').val();
    var ht_PM = $('#ht_PM').val();
    var hs_arr = new Array(hs_HWDP, hs_CIS, hs_PM);
    var ht_arr = [ht_HWDP, ht_CIS, ht_PM];
    localStorage.setItem('hs_arr', hs_arr);
    localStorage.setItem('ht_arr', ht_arr);
    //----------------------- Education for All -----------------------//
    var es_EIEP = $('#es_EIEP').val();
    var es_CIS = $('#es_CIS').val();
    var es_PM = $('#es_PM').val();
    var et_EIEP = $('#et_EIEP').val();
    var et_CIS = $('#et_CIS').val();
    var et_PM = $('#et_PM').val();
    var es_arr = [es_EIEP, es_CIS, es_PM];
    var et_arr = [et_EIEP, et_CIS, et_PM];
    localStorage.setItem('es_arr', es_arr);
    localStorage.setItem('et_arr', et_arr);
    //----------------------- Good Governance for All -----------------------//
    var ggs_LODGGP = $('#ggs_LODGGP').val();
    var ggs_CIS = $('#ggs_CIS').val();
    var ggs_PM = $('#ggs_PM').val();
    var ggt_LODGGP = $('#ggt_LODGGP').val();
    var ggt_CIS = $('#ggt_CIS').val();
    var ggt_PM = $('#ggt_PM').val();
    var ggs_arr = [ggs_LODGGP, ggs_CIS, ggs_PM];
    var ggt_arr = [ggt_LODGGP, ggt_CIS, ggt_PM];
    localStorage.setItem('ggs_arr', ggs_arr);
    localStorage.setItem('ggt_arr', ggt_arr);
    //----------------------- Economic Justice for All -----------------------//
    var ejs_ESEP = $('#ejs_ESEP').val();
    var ejs_CIS = $('#ejs_CIS').val();
    var ejs_PM = $('#ejs_PM').val();
    var ejt_ESEP = $('#ejt_ESEP').val();
    var ejt_CIS = $('#ejt_CIS').val();
    var ejt_PM = $('#ejt_PM').val();
    var ejs_arr = [ejs_ESEP, ejs_CIS, ejs_PM];
    var ejt_arr = [ejt_ESEP, ejt_CIS, ejt_PM];
    localStorage.setItem('ejs_arr', ejs_arr);
    localStorage.setItem('ejt_arr', ejt_arr);
    //----------------------- Christ Love for All -----------------------//
    var cls_SPMEP = $('#cls_SPMEP').val();
    var cls_CIS = $('#cls_CIS').val();
    var cls_PM = $('#cls_PM').val();
    var clt_SPMEP = $('#clt_SPMEP').val();
    var clt_CIS = $('#clt_CIS').val();
    var clt_PM = $('#clt_PM').val();
    var cls_arr = [cls_SPMEP, cls_CIS, cls_PM];
    var clt_arr = [clt_SPMEP, clt_CIS, clt_PM];
    localStorage.setItem('cls_arr', cls_arr);
    localStorage.setItem('clt_arr', clt_arr);
    window.location.href = "http://localhost/Simbahayan/student-official/php/kra1-next.php";
}
</script>