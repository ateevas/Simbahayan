<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KRA 1</title>
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/kra1.css" />

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
                <td><input id="hs_NHWDP" type="number" value="0"></td>
                <td><input id="ht_NHWDP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="hs_NCIS" type="number" value="0"></td>
                <td><input id="ht_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="hs_NPM" type="number" value="0"></td>
                <td><input id="ht_NPM" type="number" value="0"></td>

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
                <td><input id="es_NEIEP" type="number" value="0"></td>
                <td><input id="et_NEIEP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="es_NCIS" type="number" value="0"></td>
                <td><input id="et_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="es_NPM" type="number" value="0"></td>
                <td><input id="et_NPM" type="number" value="0"></td>
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
                <td><input id="ggs_NHWDP" type="number" value="0"></td>
                <td><input id="ggt_NHWDP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="ggs_NCIS" type="number" value="0"></td>
                <td><input id="ggt_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="ggs_NPM" type="number" value="0"></td>
                <td><input id="ggt_NPM" type="number" value="0"></td>
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
                <td><input id="ejs_NESEP" type="number" value="0"></td>
                <td><input id="ejt_NESEP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="ejs_NCIS" type="number" value="0"></td>
                <td><input id="ejt_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="ejs_NPM" type="number" value="0"></td>
                <td><input id="ejt_NPM" type="number" value="0"></td>
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
                <td><input id="cls_NSMEP" type="number" value="0"></td>
                <td><input id="clt_NSMEP" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Communities/ Institutions Served</td>
                <td><input id="cls_NCIS" type="number" value="0"></td>
                <td><input id="clt_NCIS" type="number" value="0"></td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td> No. of Participants/ Members</td>
                <td><input id="cls_NPM" type="number" value="0"></td>
                <td><input id="clt_NPM" type="number" value="0"></td>
            </tr>
    </table>

    <div class="d-flex flex-row-reverse bd-highlight w-50 mx-auto">
        <a class="btn btn-dark" href="kra1-next.php" role="button">Next</a>
    </div>
</body>

</html>
<script type="text/javascript">

get_kra1datafromuseridsimbahayan();

function get_kra1datafromuseridsimbahayan() {
    let college_id = localStorage.getItem('selected_college_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra1datafromuseridsimbahayan",
            college_id: college_id
        },
        complete: function(response) {
            console.log(response.responseText); 
            var data = JSON.parse(response.responseText);

            let hs1_totalarr=[];
            for(var key in data) {
                var hs_arr = data[key].hs_arr.split(",").map(Number);
                let hs_counter=[];
                for (let index = 0; index < hs_arr.length; index++) {
                    hs_counter.push(hs_arr[index]);
                }
                hs1_totalarr.push(hs_counter);
            }
            let hs1_final_arr = hs1_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#hs_NHWDP').val(hs1_final_arr[0]);
            $('#hs_NCIS').val(hs1_final_arr[1]);
            $('#hs_NPM').val(hs1_final_arr[2]);

            let ht1_totalarr=[];
            for(var key in data) {
                var ht_arr = data[key].ht_arr.split(",").map(Number);
                let ht_counter=[];
                for (let index = 0; index < ht_arr.length; index++) {
                    ht_counter.push(ht_arr[index]);
                }
                ht1_totalarr.push(ht_counter);
            }
            let ht1_final_arr = ht1_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ht_NHWDP').val(ht1_final_arr[0]);
            $('#ht_NCIS').val(ht1_final_arr[1]);
            $('#ht_NPM').val(ht1_final_arr[2]);
            //ES
            let es1_totalarr=[];
            for(var key in data) {
                var es_arr = data[key].es_arr.split(",").map(Number);
                let es_counter=[];
                for (let index = 0; index < es_arr.length; index++) {
                    es_counter.push(es_arr[index]);
                }
                es1_totalarr.push(es_counter);
            }
            let es1_final_arr = es1_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#es_NEIEP').val(es1_final_arr[0]);
            $('#es_NCIS').val(es1_final_arr[1]);
            $('#es_NPM').val(es1_final_arr[2]);
            //ET
            let et1_totalarr=[];
            for(var key in data) {
                var et_arr = data[key].et_arr.split(",").map(Number);
                let et_counter=[];
                for (let index = 0; index < et_arr.length; index++) {
                    et_counter.push(et_arr[index]);
                }
                et1_totalarr.push(et_counter);
            }
            let et1_final_arr = et1_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#et_NEIEP').val(et1_final_arr[0]);
            $('#et_NCIS').val(et1_final_arr[1]);
            $('#et_NPM').val(et1_final_arr[2]);


            let ggs_totalarr=[];
            for(var key in data) {
                var ggs_arr = data[key].ggs_arr.split(",").map(Number);
                let ggs_counter=[];
                for (let index = 0; index < ggs_arr.length; index++) {
                    ggs_counter.push(ggs_arr[index]);
                }
                ggs_totalarr.push(ggs_counter);
            }
            let ggs_final_arr = ggs_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ggs_NHWDP').val(ggs_final_arr[0]);
            $('#ggs_NCIS').val(ggs_final_arr[1]);
            $('#ggs_NPM').val(ggs_final_arr[2]);
            console.log(ggs_final_arr);

            let ggt_totalarr=[];
            for(var key in data) {
                var ggt_arr = data[key].ggt_arr.split(",").map(Number);
                let ggt_counter=[];
                for (let index = 0; index < ggt_arr.length; index++) {
                    ggt_counter.push(ggt_arr[index]);
                }
                ggt_totalarr.push(ggt_counter);
            }
            let ggt_final_arr = ggt_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ggt_NHWDP').val(ggt_final_arr[0]);
            $('#ggt_NCIS').val(ggt_final_arr[1]);
            $('#ggt_NPM').val(ggt_final_arr[2]);



            let ejs_totalarr=[];
            for(var key in data) {
                var ejs_arr = data[key].ejs_arr.split(",").map(Number);
                let ejs_counter=[];
                for (let index = 0; index < ejs_arr.length; index++) {
                    ejs_counter.push(ejs_arr[index]);
                }
                ejs_totalarr.push(ejs_counter);
            }
            let ejs_final_arr = ejs_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ejs_NESEP').val(ejs_final_arr[0]);
            $('#ejs_NCIS').val(ejs_final_arr[1]);
            $('#ejs_NPM').val(ejs_final_arr[2]);
            console.log(ejs_final_arr);

            let ejt_totalarr=[];
            for(var key in data) {
                var ejt_arr = data[key].ejt_arr.split(",").map(Number);
                let ejt_counter=[];
                for (let index = 0; index < ejt_arr.length; index++) {
                    ejt_counter.push(ejt_arr[index]);
                }
                ejt_totalarr.push(ejt_counter);
            }
            let ejt_final_arr = ejt_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ejt_NESEP').val(ejt_final_arr[0]);
            $('#ejt_NCIS').val(ejt_final_arr[1]);
            $('#ejt_NPM').val(ejt_final_arr[2]);
            console.log(ejt_final_arr);



            let cls_totalarr=[];
            for(var key in data) {
                var cls_arr = data[key].cls_arr.split(",").map(Number);
                let cls_counter=[];
                for (let index = 0; index < cls_arr.length; index++) {
                    cls_counter.push(cls_arr[index]);
                }
                cls_totalarr.push(cls_counter);
            }
            let cls_final_arr = cls_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#cls_NSMEP').val(cls_final_arr[0]);
            $('#cls_NCIS').val(cls_final_arr[1]);
            $('#cls_NPM').val(cls_final_arr[2]);
            console.log(cls_final_arr);

            let clt_totalarr=[];
            for(var key in data) {
                var clt_arr = data[key].clt_arr.split(",").map(Number);
                let clt_counter=[];
                for (let index = 0; index < clt_arr.length; index++) {
                    clt_counter.push(clt_arr[index]);
                }
                clt_totalarr.push(clt_counter);
            }
            let clt_final_arr = clt_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#clt_NSMEP').val(clt_final_arr[0]);
            $('#clt_NCIS').val(clt_final_arr[1]);
            $('#clt_NPM').val(clt_final_arr[2]);
            console.log(clt_final_arr);

  
        }
    })
}
</script>