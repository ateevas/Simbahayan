<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/pdf_page.css" />
    <link rel="stylesheet" href="http://localhost/Simbahayan/simbahayan-ui/css/print.css" />
    <title>KRAs and KPIs</title>
    <?php
        include('../cdn/cdn.php');
        ?>
</head>

<body>

    <div class="logo">
        <img src="http://localhost/Simbahayan/simbahayan-ui/pictures/ustlogo.png" alt="" width="60" height="60"
            class="d-inline-block align-text-top">
        <img src="http://localhost/Simbahayan/simbahayan-ui/pictures/white.png" alt="" width="100" height="60"
            class="d-inline-block align-text-top">
    </div>
    <div class="title-container">

        <div class="title-wrapper">
            <h2>University of Santo Tomas
                <p>Simbahayan Community Development Office </p>
                <p>Key Results Area - Key Performance Indicator (KRA/KPI) Monitoring Report
                </p>
            </h2>

        </div>
    </div>

    <div class="table-container">
        <div class="table-wrapper">
            <!-- KRA 1 -->
            <table class="table table-sm table-bordered ">
                <thead>
                    <tr>
                        <th scope="col" id="kra" rowspan="11">
                            <center>KRA 1</center>
                        </th>
                        <th scope="col">Self-reliant, interdependent, and empowered partner communities and institutions
                        </th>
                        <th scope="col">Status Total</th>
                        <th scope="col">Target Total</th>
                    </tr>
                </thead>
                <tbody class="thead-gold">
                    <tr>
                        <td class="align-middle" scope="col" id="kra" rowspan="11">
                            <center><b>1</b></center>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">Number of Community Development and Advocacy projects under each of the
                            following
                            categories:
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">a. Health for all (Health and wellness development)</td>
                        <td id="hs_total" class="align-middle text-center fw-bold"></td>
                        <td id="ht_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <td scope="row">b. Education for all (Equitable and inclusive education)</td>
                        <td id="es_total" class="align-middle text-center fw-bold"></td>
                        <td id="et_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <td scope="row">c. Good governance for all (Leadership, organizational development,
                            and good governance)</td>
                        <td id="ggs_total" class="align-middle text-center fw-bold"></td>
                        <td id="ggt_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <td scope="row">d. Economic justice for all (Employability and social enterprise)
                        </td>
                        <td id="ejs_total" class="align-middle text-center fw-bold"></td>
                        <td id="ejt_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <td scope="row">e. Christ’s love for all (Socio-pastoral ministry and evangelization)
                        </td>
                        <td id="cls_total" class="align-middle text-center fw-bold"></td>
                        <td id="clt_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <td scope="row">f. Cultural Life, Expression and Rootedness for all (Culture and Heritage
                            Development
                        </td>
                        <td id="ceras_total" class="align-middle text-center fw-bold"></td>
                        <td id="cerat_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <td scope="row">g. Sports for all (Sports development)
                        </td>
                        <td id="sfas_total" class="align-middle text-center fw-bold"></td>
                        <td id="sfat_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <td scope="row">h. Environmental Justice for all (Environmental sustainability and action;
                            disaster
                            risk
                            reduction and management

                        </td>
                        <td id="ejas_total" class="align-middle text-center fw-bold"></td>
                        <td id="ejat_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <td scope="row">i. Holistic Life for all (Family and household development)</td>
                        <td id="hlas_total" class="align-middle text-center fw-bold"></td>
                        <td id="hlat_total" class="align-middle text-center fw-bold"></td>

                    </tr>
                    <!--TOTAL-->
                    <tr>
                        <td scope="row"></td>
                        <td class="align-middle text-center fw-bold">Total</td>
                        <td id="ncdaps_total" class="align-middle text-center fw-bold"></td>
                        <td id="ncdapt_total" class="align-middle text-center fw-bold"></td>

                    </tr>


                    <tr>
                        <td>
                            <center><b>2</b></center>
                        </td>
                        <th>Number of community organizations formed</th>
                        <td id="cofs_total" class="align-middle text-center fw-bold"></td>
                        <td id="coft_total" class="align-middle text-center fw-bold"></td>

                    </tr>

                    <tr>
                        <th scope="row">
                            <center>3</center>
                        </th>
                        <th>Number of communities/institutions served</th>
                        <td class="align-middle text-center fw-bold"></td>
                        <td class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row">

                        <td scope="row">a. Under each project category </td>
                        </th>
                        <td class="align-middle text-center fw-bold"></td>
                        <td class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <th scope="row">
                        <td scope="row">a.1 Health for all </td>
                        </th>
                        <td id="s_ncis_hfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_hfa" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.2 Education for all </td>
                        </th>
                        <td id="s_ncis_efa" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_efa" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.3 Good Governance for all </td>
                        </th>
                        <td id="s_ncis_gga" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_gga" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.4 Economic Justice for all </td>
                        </th>
                        <td id="s_ncis_eja" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_eja" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.5 Christ's love for all </td>
                        </th>
                        <td id="s_ncis_cla" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_cla" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.6 Cultural life, Expression and Rootedness for all </td>
                        </th>
                        <td id="s_ncis_cler" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_cler" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.7 Sports for all</td>
                        </th>
                        <td id="s_ncis_sfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_sfa" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.8 Environmental Justice for all </td>
                        </th>
                        <td id="s_ncis_ejfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_ejfa" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.9 Holistic Life for all </td>
                        </th>
                        <td id="s_ncis_hlfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_hlfa" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <!--TOTAL-->
                    <tr>
                        <td scope="row"></td>
                        <td class="align-middle text-center fw-bold">Total</td>
                        <td id="s_ncis_total" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_total" class="align-middle text-center fw-bold"></td>

                    </tr>


                    <tr>
                        <th scope="row">
                            </td>
                        <td scope="row">b. Under each community organization formed
                        </td>
                        <td id="s_ncis_uecof" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncis_uecof" class="align-middle text-center fw-bold"></td>

                    <tr>
                        <th scope="row">
                            <center>4</td>
                        <th>Number of participants/members</th> 
                        <td class="align-middle text-center fw-bold"></td>
                        <td class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <td scope="row">
                        </td>
                        <td scope="row">a. Under each project category
                            </th>
                        <td class="align-middle text-center fw-bold"></td>
                        <td class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row">

                        <td scope="row">a.1 Health for all </td>
                        </th>
                        <td id="s_npm_hfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_hfa" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.2 Education for all </td>
                        </th>
                        <td id="s_npm_efa" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_efa" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.3 Good Governance for all </td>
                        </th>
                        <td id="s_npm_ggfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_ggfa" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.4 Economic Justice for all </td>
                        </th>
                        <td id="s_npm_ejfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_ejfa" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.5 Christ's love for all </td>
                        </th>
                        <td id="s_npm_clfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_clfa" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row">

                        <td scope="row">a.6 Cultural life, Expression and Rootedness for all </td>
                        </th>
                        <td id="s_npm_cler" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_cler" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.7 Sports for all</td>
                        </th>
                        <td id="s_npm_sfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_sfa" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.8 Environmental Justice for all </td>
                        </th>
                        <td id="s_npm_ejfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_ejfa" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">a.9 Holistic Life for all </td>
                        </th>
                        <td id="s_npm_hlfa" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_hlfa" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <!--TOTAL-->
                    <tr>
                        <td scope="row"></td>
                        <td class="align-middle text-center fw-bold">Total</td>
                        <td id="s_npm_total" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_total" class="align-middle text-center fw-bold"></td>

                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td scope="row">b. Under each community organization formed
                        </td>
                        <td id="s_npm_uecof" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_uecof" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-end fw-bold">Total: </td>
                        <td id="final_kra1status" class="align-middle text-center fw-bold"></td>
                        <td id="final_kra1target" class="align-middle text-center fw-bold"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>



    <!-- KRA 2 -->
    <div class="table-container">
        <div class="table-wrapper">
            <table class="table table-sm table-bordered ">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">KRA 2</th>
                        <th scope="col">Thomasian engagement as agents of social transformation</th>
                        <th scope="col">Status Total</th>
                        <th scope="col">Target Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">5</th>
                        <th>Number of projects under the University Community Development Program (UCDP), particularly
                            on the
                            following:</th>
                        <td class="align-middle text-center fw-bold"></td>
                        <td class="align-middle text-center fw-bold"></td>

                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">a. Institutional Development for Community Development
                        </td>
                        <td id="s_npua_idcd" class="align-middle text-center fw-bold"></td>
                        <td id="t_npua_idcd" class="align-middle text-center fw-bold"></td>
                        
                        

                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">b. Social Awareness and Advocacy
                        </td>
                        <td id="s_npua_saa" class="align-middle text-center fw-bold"></td>
                        <td id="t_npua_saa" class="align-middle text-center fw-bold"></td>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">c. Community-Engaged Research
                        </td>
                        <td id="s_npua_cer" class="align-middle text-center fw-bold"></td>
                        <td id="t_npua_cer" class="align-middle text-center fw-bold"></td>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">d. Service-Learning
                        </td>
                        <td id="s_npua_sl" class="align-middle text-center fw-bold"></td>
                        <td id="t_npua_sl" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center fw-bold">Total: </td>
                        <td id="s_npua_total" class="align-middle text-center fw-bold"></td>
                        <td id="t_npua_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <th>Number of projects under the University Community Development Program (UCDP), particularly
                            on the
                            following:</th>
                        <td class="align-middle text-center fw-bold"></td>
                        <td iclass="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td scope="row">a. student organizations
                        </td>
                        <td id="s_npub_sgs" class="align-middle text-center fw-bold"></td>
                        <td id="t_npub_sgs" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">b. students
                        </td>
                        <td id="s_npub_stu" class="align-middle text-center fw-bold"></td>
                        <td id="t_npub_stu" class="align-middle text-center fw-bold"></td>
                    </tr>
                    </tr>
                    <tr>
                        <td scope="row">
                            </th>
                        <td scope="row">c. faculty
                        </td>
                        <td id="s_npub_fal" class="align-middle text-center fw-bold"></td>
                        <td id="t_npub_fal" class="align-middle text-center fw-bold"></td>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">d. administrators
                        </td>
                        <td id="s_npub_adm" class="align-middle text-center fw-bold"></td>
                        <td id="t_npub_adm" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td scope="row">e. support staff
                        </td>
                        <td id="s_npub_ssta" class="align-middle text-center fw-bold"></td>
                        <td id="t_npub_ssta" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td scope="row">f. alumni
                        </td>
                        <td id="s_npub_alum" class="align-middle text-center fw-bold"></td>
                        <td id="t_npub_alum" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="text-center fw-bold">Total: </td>
                        <td id="s_npub_total" class="align-middle text-center fw-bold"></td>
                        <td id="t_npub_total" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <th scope="row">7</th>
                        <th>Number of research presentations in fora/conferences
                        </th>
                        <td class="align-middle text-center fw-bold"></td>
                        <td class="align-middle text-center fw-bold"></td>
                    </tr>
                    

                    <tr>
                        <th scope="row"></th>
                        <td scope="row">a. local
                        </td>
                        <td id="s_npuc_local" class="align-middle text-center fw-bold"></td>
                        <td id="t_npuc_local" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">b. international
                        </td>
                        <td id="s_npuc_int" class="align-middle text-center fw-bold"></td>
                        <td id="t_npuc_int" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="text-center fw-bold">Total: </td>
                        <td id="s_npuc_total" class="align-middle text-center fw-bold"></td>
                        <td id="t_npuc_total" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">8</th>
                        <th>Number of publications
                        </th>
                        <td class="align-middle text-center fw-bold"></td>
                        <td class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td scope="row">a. local
                        </td>
                        <td id="s_npud_local" class="align-middle text-center fw-bold"></td>
                        <td id="t_npud_local" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">b. international
                        </td>
                        <td id="s_npud_int" class="align-middle text-center fw-bold"></td>
                        <td id="t_npud_int" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <td colspan="2" class="text-center fw-bold">Total: </td>
                        <td id="s_npud_total" class="align-middle text-center fw-bold"></td>
                        <td id="t_npud_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>







    <!-- KRA 3 -->
    <div class="table-container">
        <div class="table-wrapper">
            <table class="table table-sm table-bordered ">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">KRA 3</th>
                        <th scope="col">Dynamic Community Development External Partnerships and Networks</th>
                        <th scope="col">Status Total</th>
                        <th scope="col">Target Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">9</th>
                        <th>Number of MOA/MOU with various external partner groups:</th>
                        <td class="align-middle text-center fw-bold"></td>
                        <td class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">a. People’s Organizations </td>
                        <td id="s_nmw_po" class="align-middle text-center fw-bold"></td>
                        <td id="t_nmw_po" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">b. Government Agencies or LGUs</td>
                        <td id="s_nmw_lgu" class="align-middle text-center fw-bold"></td>
                        <td id="t_nmw_lgu" class="align-middle text-center fw-bold"></td>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">c. Non- Government Organizations </td>
                        <td id="s_nmw_ngo" class="align-middle text-center fw-bold"></td>
                        <td id="t_nmw_ngo" class="align-middle text-center fw-bold"></td>
                    </tr>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">d. Basic Educational Institutions</td>
                        <td id="s_nmw_bei" class="align-middle text-center fw-bold"></td>
                        <td id="t_nmw_bei" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">e. Local Higher Educational Institutions</td>
                        <td id="s_nmw_lhei" class="align-middle text-center fw-bold"></td>
                        <td id="t_nmw_lhei" class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row"></th>
                        <td scope="row">f. International Higher Educational Institutions</td>
                        <td id="s_nmw_ihei" class="align-middle text-center fw-bold"></td>
                        <td id="t_nmw_ihei" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td scope="row">g. Faith-based/Church-based Organizations </td>
                        <td id="s_nmw_cbo" class="align-middle text-center fw-bold"></td>
                        <td id="t_nmw_cbo" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <th scope="row"></th>
                        <td scope="row">h. Professional/Business Organizations
                        </td>
                        <td id="s_nmw_pbo" class="align-middle text-center fw-bold"></td>
                        <td id="t_nmw_pbo" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <!--TOTAL-->
                    <tr>
                        <td scope="row"></td>
                        <td class="align-middle text-center fw-bold">Total</td>
                        <td id="s_nmw_total" class="align-middle text-center fw-bold"></td>
                        <td id="t_nmw_total" class="align-middle text-center fw-bold"></td>

                    </tr>

                    <tr>
                        <th scope="row">10</th>
                        <th>Number of community development and advocacy activities with each external partner
                            group
                        </th>
                        <td class="align-middle text-center fw-bold"></td>
                        <td class="align-middle text-center fw-bold"></td>
                    </tr>
                    <tr>
                        <th scope="row">

                        <td scope="row">a. People's Organizations </td>
                        </th>
                        <td id="s_ncda_po" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncda_po" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">b. Government Agencies or LGUs </td>
                        </th>
                        <td id="s_ncda_lgu" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncda_lgu" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">c. Non-Government Organizations </td>
                        </th>
                        <td id="s_ncda_ngo" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncda_ngo" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">d. Basic Educational Institutions </td>
                        </th>
                        <td id="s_ncda_bei" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncda_bei" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">e. Local Higher Educational Institutions </td>
                        </th>
                        <td id="s_ncda_lhei" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncda_lhei" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">f. International Higher Educational Institutions </td>
                        </th>
                        <td id="s_ncda_ihei" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncda_ihei" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">g. Faith-Based/Church-based Organizations</td>
                        </th>
                        <td id="s_ncda_cbo" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncda_cbo" class="align-middle text-center fw-bold"></td>
                    </tr>


                    <tr>
                        <th scope="row">

                        <td scope="row">h. Professional/Business Organizations </td>
                        </th>
                        <td id="s_ncda_pbo" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncda_pbo" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <!--TOTAL-->
                    <tr>
                        <td scope="row"></td>
                        <td class="align-middle text-center fw-bold">Total</td>
                        <td id="s_ncda_total" class="align-middle text-center fw-bold"></td>
                        <td id="t_ncda_total" class="align-middle text-center fw-bold"></td>

                    </tr>

                    <tr>
                        <th scope="row">11</th>
                        <th>Number of training/course offerings on Community Engagement and Organizing</th>
                        <td id="s_tco_total" class="align-middle text-center fw-bold"></td>
                        <td id="t_tco_total" class="align-middle text-center fw-bold"></td>
                    </tr>

                    <tr>
                        <th scope="row">12</th>
                        <th>Number of participants in training/course offerings on Community Engagement and
                            Organizing:
                        </th>
                        <td id="s_ptco_total" class="align-middle text-center fw-bold"></td>
                        <td id="t_ptco_total" class="align-middle text-center fw-bold"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="container text-end">
        <a id="button1" class="btn btn-lg btn-warning" href="dashboard.php">Go back to Dashboard</a>
        <button id="button2" class="btn btn-lg btn-warning" onclick=" window.print(); ">Print</button>
    </div>
</body>

</html>
<script type="text/javascript">
get_kra1datafromuserid();

function get_kra1datafromuserid() {
    let user_id = localStorage.getItem('final_pdf_id');
    let college_id = localStorage.getItem('final_college_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra1datafromuserid",
            user_id: user_id,
            college_id: college_id
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText)
            console.log(response.responseText);

            let hs_totalarr=[];
            for(var key in data) {
                var hs_arr = data[key].hs_arr.split(",").map(Number);
                let hs_counter=[];
                for (let index = 0; index < hs_arr.length; index++) {
                    hs_counter.push(hs_arr[index]);
                }
                hs_totalarr.push(hs_counter);
            }
            let hs_final_arr = hs_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#hs_total').html(hs_final_arr[0]);

            let ht_totalarr=[];
            for(var key in data) {
                var ht_arr = data[key].ht_arr.split(",").map(Number);
                let ht_counter=[];
                for (let index = 0; index < ht_arr.length; index++) {
                    ht_counter.push(ht_arr[index]);
                }
                ht_totalarr.push(ht_counter);
            }
            let ht_final_arr = ht_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ht_total').html(ht_final_arr[0]);


            let es_totalarr=[];
            for(var key in data) {
                var es_arr = data[key].es_arr.split(",").map(Number);
                let es_counter=[];
                for (let index = 0; index < es_arr.length; index++) {
                    es_counter.push(es_arr[index]);
                }
                es_totalarr.push(es_counter);
            }
            let es_final_arr = es_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#es_total').html(es_final_arr[0]);

            var et_arr = data[0].et_arr.split(",");
            var et_total = parseInt(et_arr[0])
            $('#et_total').html(et_total);

            var ggs_arr = data[0].ggs_arr.split(",");
            var ggs_total = parseInt(ggs_arr[0]);
            $('#ggs_total').html(ggs_total);

            var ggt_arr = data[0].ggt_arr.split(",");
            var ggt_total = parseInt(ggt_arr[0]);
            $('#ggt_total').html(ggt_total);

            var ejs_arr = data[0].ejs_arr.split(",");
            var ejs_total = parseInt(ejs_arr[0]);
            $('#ejs_total').html(ejs_total);

            var ejt_arr = data[0].ejt_arr.split(",");
            var ejt_total = parseInt(ejt_arr[0]);
            $('#ejt_total').html(ejt_total);

            var cls_arr = data[0].cls_arr.split(",");
            var cls_total = parseInt(cls_arr[0]);
            $('#cls_total').html(cls_total);

            var clt_arr = data[0].clt_arr.split(",");
            var clt_total = parseInt(clt_arr[0]);
            $('#clt_total').html(clt_total);

            var fhds_arr = data[0].fhds_arr.split(",");
            var fhds_total = parseInt(fhds_arr[0]);
            $('#fhds_total').html(fhds_total);

            var fhdt_arr = data[0].fhdt_arr.split(",");
            var fhdt_total = parseInt(fhdt_arr[0]);
            $('#fhdt_total').html(fhdt_total);

            var cahds_arr = data[0].cahds_arr.split(",");
            var cahds_total = parseInt(cahds_arr[0]);
            $('#cahds_total').html(cahds_total);

            var cahdt_arr = data[0].cahdt_arr.split(",");
            var cahdt_total = parseInt(cahdt_arr[0]);
            $('#cahdt_total').html(cahdt_total);

            var sds_arr = data[0].sds_arr.split(",");
            var sds_total = parseInt(sds_arr[0]);
            $('#sds_total').html(sds_total);

            var sdt_arr = data[0].sdt_arr.split(",");
            var sdt_total = parseInt(sdt_arr[0]);
            $('#sdt_total').html(sdt_total);

            var drrms_arr = data[0].drrms_arr.split(",");
            var drrms_total = parseInt(drrms_arr[0]);
            $('#drrms_total').html(drrms_total);

            var drrmt_arr = data[0].drrmt_arr.split(",");
            var drrmt_total = parseInt(drrmt_arr[0]);
            $('#drrmt_total').html(drrmt_total);

            var cofs_arr = data[0].cofs_arr.split(",");
            var cofs_total = parseInt(cofs_arr[0]);
            $('#cofs_total').html(cofs_total);

            var coft_arr = data[0].coft_arr.split(",");
            var coft_total = parseInt(coft_arr[0]);
            $('#coft_total').html(coft_total);

            var kra1_epc1 = parseInt(hs_arr[0]) + parseInt(es_arr[0]) + parseInt(ggs_arr[0]) + parseInt(
                    ejs_arr[0]) + parseInt(cls_arr[0]) + parseInt(fhds_arr[0]) + parseInt(cahds_arr[0]) +
                parseInt(sds_arr[0]) + parseInt(drrms_arr[0]);
            var kra1_epc2 = parseInt(ht_arr[0]) + parseInt(et_arr[0]) + parseInt(ggt_arr[0]) + parseInt(
                    ejt_arr[0]) + parseInt(clt_arr[0]) + parseInt(fhdt_arr[0]) + parseInt(cahdt_arr[0]) +
                parseInt(sdt_arr[0]) + parseInt(drrmt_arr[0]);

            $('#uapc_s').html(kra1_epc1);
            $('#uapc_t').html(kra1_epc2);


            var kra1_epc3 = parseInt(cofs_arr[0]);
            var kra1_epc4 = parseInt(coft_arr[0]);
            $('#uecof_s').html(kra1_epc3);
            $('#uecof_t').html(kra1_epc4);


            var kra1_epc5 = parseInt(hs_arr[1]) + parseInt(es_arr[1]) + parseInt(ggs_arr[1]) + parseInt(
                    ejs_arr[1]) + parseInt(cls_arr[1]) + parseInt(fhds_arr[1]) + parseInt(cahds_arr[1]) +
                parseInt(sds_arr[1]) + parseInt(drrms_arr[1]);
            var kra1_epc6 = parseInt(ht_arr[1]) + parseInt(et_arr[1]) + parseInt(ggt_arr[1]) + parseInt(
                    ejt_arr[1]) + parseInt(clt_arr[1]) + parseInt(fhdt_arr[1]) + parseInt(cahdt_arr[1]) +
                parseInt(sdt_arr[1]) + parseInt(drrmt_arr[1]);

            $('#uapca_s').html(kra1_epc5);
            $('#uapca_t').html(kra1_epc6);



            var kra1_epc11 = parseInt(hs_arr[2]) + parseInt(es_arr[2]) + parseInt(ggs_arr[2]) + parseInt(
                    ejs_arr[2]) + parseInt(cls_arr[2]) + parseInt(fhds_arr[2]) + parseInt(cahds_arr[2]) +
                parseInt(sds_arr[2]) + parseInt(drrms_arr[2]);
            var kra1_epc12 = parseInt(ht_arr[2]) + parseInt(et_arr[2]) + parseInt(ggt_arr[2]) + parseInt(
                    ejt_arr[2]) + parseInt(clt_arr[2]) + parseInt(fhdt_arr[2]) + parseInt(cahdt_arr[2]) +
                parseInt(sdt_arr[2]) + parseInt(drrmt_arr[2]);
            $('#uecof_ss').html(kra1_epc11);
            $('#uecof_tt').html(kra1_epc12);

            var kra1_epc7 = parseInt(cofs_arr[2]);
            var kra1_epc8 = parseInt(coft_arr[2]);
            $('#uecofb_s').html(parseInt(cofs_arr[2]));
            $('#uecofb_t').html(parseInt(coft_arr[2]));


            var kra1_epc9 = parseInt(cofs_arr[1]);
            var kra1_epc10 = parseInt(coft_arr[1]);
            $('#uecofbb_s').html(parseInt(cofs_arr[1]));
            $('#uecofbb_t').html(parseInt(coft_arr[1]));


            var final_kra1status = hs_total + es_total + ggs_total + ejs_total + cls_total + fhds_total +
                cahds_total + sds_total + drrms_total + kra1_epc1 + kra1_epc3 + kra1_epc5 + kra1_epc7 +
                kra1_epc9 + kra1_epc11;
            $('#final_kra1status').html(final_kra1status);

            var final_kra1target = ht_total + et_total + ggt_total + ejt_total + clt_total + fhdt_total +
                cahdt_total + sdt_total + drrmt_total + kra1_epc2 + kra1_epc4 + kra1_epc6 + kra1_epc8 +
                kra1_epc10 + kra1_epc12;
            $('#final_kra1target').html(final_kra1target);
            get_kra2datafromuserid();
        }
    })
}
get_kra2datafromuserid();
function get_kra2datafromuserid() {
    let user_id = localStorage.getItem('final_pdf_id');
    let college_id = localStorage.getItem('final_college_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra2datafromuserid",
            user_id: user_id,
            college_id: college_id
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText);
            console.log(data)


            let npus_totalarr=[];
            for(var key in data) {
                var npus_arr = data[key].npus_arr.split(",").map(Number);
                let npus_counter=[];
                for (let index = 0; index < npus_arr.length; index++) {
                    npus_counter.push(npus_arr[index]);
                }
                npus_totalarr.push(npus_counter);
            }
            let npus_final_arr = npus_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npua_idcd').html(npus_final_arr[0]);
            $('#s_npua_saa').html(npus_final_arr[1]);
            $('#s_npua_cer').html(npus_final_arr[2]);
            $('#s_npua_sl').html(npus_final_arr[3]);

            let nput_totalarr=[];
            for(var key in data) {
                var nput_arr = data[key].nput_arr.split(",").map(Number);
                let nput_counter=[];
                for (let index = 0; index < nput_arr.length; index++) {
                    nput_counter.push(nput_arr[index]);
                }
                nput_totalarr.push(nput_counter);
            }
            let nput_final_arr = nput_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npua_idcd').html(nput_final_arr[0]);
            $('#t_npua_saa').html(nput_final_arr[1]);
            $('#t_npua_cer').html(nput_final_arr[2]);
            $('#t_npua_sl').html(nput_final_arr[3]);


            let nppus_totalarr=[];
            for(var key in data) {
                var nppus_arr = data[key].nppus_arr.split(",").map(Number);
                let nppus_counter=[];
                for (let index = 0; index < nppus_arr.length; index++) {
                    nppus_counter.push(nppus_arr[index]);
                }
                nppus_totalarr.push(nppus_counter);
            }
            let nppus_final_arr = nppus_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npub_sgs').html(nppus_final_arr[0]);
            $('#s_npub_stu').html(nppus_final_arr[1]);
            $('#s_npub_fal').html(nppus_final_arr[2]);
            $('#s_npub_adm').html(nppus_final_arr[3]);
            $('#s_npub_ssta').html(nppus_final_arr[4]);
            $('#s_npub_alum').html(nppus_final_arr[5]);

            let npput_totalarr=[];
            for(var key in data) {
                var npput_arr = data[key].npput_arr.split(",").map(Number);
                let npput_counter=[];
                for (let index = 0; index < npput_arr.length; index++) {
                    npput_counter.push(npput_arr[index]);
                }
                npput_totalarr.push(npput_counter);
            }
            let npput_final_arr = npput_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npub_sgs').html(npput_final_arr[0]);
            $('#t_npub_stu').html(npput_final_arr[1]);
            $('#t_npub_fal').html(npput_final_arr[2]);
            $('#t_npub_adm').html(npput_final_arr[3]);
            $('#t_npub_ssta').html(npput_final_arr[4]);
            $('#t_npub_alum').html(npput_final_arr[5]);

            let nrpfcs_totalarr=[];
            for(var key in data) {
                var nrpfcs_arr = data[key].nrpfcs_arr.split(",").map(Number);
                let nrpfcs_counter=[];
                for (let index = 0; index < nrpfcs_arr.length; index++) {
                    nrpfcs_counter.push(nrpfcs_arr[index]);
                }
                nrpfcs_totalarr.push(nrpfcs_counter);
            }
            let nrpfcs_final_arr = nrpfcs_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npuc_local').html(nrpfcs_final_arr[0]);
            $('#s_npuc_int').html(nrpfcs_final_arr[1]);


            let nrpfct_totalarr=[];
            for(var key in data) {
                var nrpfct_arr = data[key].nrpfct_arr.split(",").map(Number);
                let nrpfct_counter=[];
                for (let index = 0; index < nrpfct_arr.length; index++) {
                    nrpfct_counter.push(nrpfct_arr[index]);
                }
                nrpfct_totalarr.push(nrpfct_counter);
            }
            let nrpfct_final_arr = nrpfct_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npuc_local').html(nrpfct_final_arr[0]);
            $('#t_npuc_int').html(nrpfct_final_arr[1]);


            let nps_totalarr=[];
            for(var key in data) {
                var nps_arr = data[key].nps_arr.split(",").map(Number);
                let nps_counter=[];
                for (let index = 0; index < nps_arr.length; index++) {
                    nps_counter.push(nps_arr[index]);
                }
                nps_totalarr.push(nps_counter);
            }
            let nps_final_arr = nps_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npud_local').html(nps_final_arr[0]);
            $('#s_npud_int').html(nps_final_arr[1]);


            let npt_totalarr=[];
            for(var key in data) {
                var npt_arr = data[key].npt_arr.split(",").map(Number);
                let npt_counter=[];
                for (let index = 0; index < npt_arr.length; index++) {
                    npt_counter.push(npt_arr[index]);
                }
                npt_totalarr.push(npt_counter);
            }
            let npt_final_arr = npt_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npud_local').html(npt_final_arr[0]);
            $('#t_npud_int').html(npt_final_arr[1]);

            $('#s_npud_total').html(nps_final_arr[0]+nps_final_arr[1]);
            $('#t_npud_total').html(npt_final_arr[0]+npt_final_arr[1]);

            $('#s_npuc_total').html(nrpfcs_final_arr[0]+nrpfcs_final_arr[1]);
            $('#t_npuc_total').html(nrpfct_final_arr[0]+nrpfct_final_arr[1]);

            $('#s_npub_total').html(nppus_final_arr[0]+nppus_final_arr[1]+nppus_final_arr[2]+nppus_final_arr[3]+nppus_final_arr[4]+nppus_final_arr[5]);
            $('#t_npub_total').html(npput_final_arr[0]+npput_final_arr[1]+npput_final_arr[2]+npput_final_arr[3]+npput_final_arr[4]+npput_final_arr[5]);

            $('#s_npua_total').html(npus_final_arr[0]+npus_final_arr[1]+npus_final_arr[2]+npus_final_arr[3]);
            $('#t_npua_total').html(nput_final_arr[0]+nput_final_arr[1]+nput_final_arr[2]+nput_final_arr[3]);


            get_kra3datafromuserid();

        }
    })
}


get_kra3datafromuserid();

function get_kra3datafromuserid() {
    let user_id = localStorage.getItem('final_pdf_id');
    let college_id = localStorage.getItem('final_college_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra3datafromuserid",
            user_id: user_id,
            college_id: college_id
        },
        complete: function(response) {
            console.log(response.responseText);
            var data = JSON.parse(response.responseText);

            // $('#s_nmw_po').html();
            // $('#t_nmw_po').html();

            // nmoas_arr
            // nmoat_arr

            let nmoas_totalarr=[];
            for(var key in data) {
                var nmoas_arr = data[key].nmoas_arr.split(",").map(Number);
                let nmoas_counter=[];
                for (let index = 0; index < nmoas_arr.length; index++) {
                    nmoas_counter.push(nmoas_arr[index]);
                }
                nmoas_totalarr.push(nmoas_counter);
            }
            let nmoas_final_arr = nmoas_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_nmw_po').html(nmoas_final_arr[0]);
            $('#s_nmw_lgu').html(nmoas_final_arr[1]);
            $('#s_nmw_ngo').html(nmoas_final_arr[2]);
            $('#s_nmw_bei').html(nmoas_final_arr[3]);
            $('#s_nmw_lhei').html(nmoas_final_arr[4]);
            $('#s_nmw_ihei').html(nmoas_final_arr[5]);
            $('#s_nmw_cbo').html(nmoas_final_arr[6]);
            $('#s_nmw_pbo').html(nmoas_final_arr[7]);

            let nmoat_totalarr=[];
            for(var key in data) {
                var nmoat_arr = data[key].nmoat_arr.split(",").map(Number);
                let nmoat_counter=[];
                for (let index = 0; index < nmoat_arr.length; index++) {
                    nmoat_counter.push(nmoat_arr[index]);
                }
                nmoat_totalarr.push(nmoat_counter);
            }
            let nmoat_final_arr = nmoat_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_nmw_po').html(nmoat_final_arr[0]);
            $('#t_nmw_lgu').html(nmoat_final_arr[1]);
            $('#t_nmw_ngo').html(nmoat_final_arr[2]);
            $('#t_nmw_bei').html(nmoat_final_arr[3]);
            $('#t_nmw_lhei').html(nmoat_final_arr[4]);
            $('#t_nmw_ihei').html(nmoat_final_arr[5]);
            $('#t_nmw_cbo').html(nmoat_final_arr[6]);
            $('#t_nmw_pbo').html(nmoat_final_arr[7]);


            let ncdaas_totalarr=[];
            for(var key in data) {
                var ncdaas_arr = data[key].ncdaas_arr.split(",").map(Number);
                let ncdaas_counter=[];
                for (let index = 0; index < ncdaas_arr.length; index++) {
                    ncdaas_counter.push(ncdaas_arr[index]);
                }
                ncdaas_totalarr.push(ncdaas_counter);
            }
            let ncdaas_final_arr = ncdaas_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncda_po').html(ncdaas_final_arr[0]);
            $('#t_ncda_lgu').html(ncdaas_final_arr[1]);
            $('#t_ncda_ngo').html(ncdaas_final_arr[2]);
            $('#t_ncda_bei').html(ncdaas_final_arr[3]);
            $('#t_ncda_lhei').html(ncdaas_final_arr[4]);
            $('#t_ncda_ihei').html(ncdaas_final_arr[5]);
            $('#t_ncda_cbo').html(ncdaas_final_arr[6]);
            $('#t_ncda_pbo').html(ncdaas_final_arr[7]);



            let ncdaat_totalarr=[];
            for(var key in data) {
                var ncdaat_arr = data[key].ncdaat_arr.split(",").map(Number);
                let ncdaat_counter=[];
                for (let index = 0; index < ncdaat_arr.length; index++) {
                    ncdaat_counter.push(ncdaat_arr[index]);
                }
                ncdaat_totalarr.push(ncdaat_counter);
            }
            let ncdaat_final_arr = ncdaat_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncda_po').html(ncdaat_final_arr[0]);
            $('#s_ncda_lgu').html(ncdaat_final_arr[1]);
            $('#s_ncda_ngo').html(ncdaat_final_arr[2]);
            $('#s_ncda_bei').html(ncdaat_final_arr[3]);
            $('#s_ncda_lhei').html(ncdaat_final_arr[4]);
            $('#s_ncda_ihei').html(ncdaat_final_arr[5]);
            $('#s_ncda_cbo').html(ncdaat_final_arr[6]);
            $('#s_ncda_pbo').html(ncdaat_final_arr[7]);

            

            let arr_ntco_stat_totalarr=[];
            for(var key in data) {
                var arr_ntco_stat_arr = data[key].arr_ntco_stat.split(",").map(Number);
                let arr_ntco_stat_counter=[];
                for (let index = 0; index < arr_ntco_stat_arr.length; index++) {
                    arr_ntco_stat_counter.push(arr_ntco_stat_arr[index]);
                }
                arr_ntco_stat_totalarr.push(arr_ntco_stat_counter);
            }
            let arr_ntco_stat_final_arr = arr_ntco_stat_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_tco_total').html(arr_ntco_stat_final_arr[0]);

            let arr_ntco_targ_totalarr=[];
            for(var key in data) {
                var arr_ntco_targ_arr = data[key].arr_ntco_targ.split(",").map(Number);
                let arr_ntco_targ_counter=[];
                for (let index = 0; index < arr_ntco_targ_arr.length; index++) {
                    arr_ntco_targ_counter.push(arr_ntco_targ_arr[index]);
                }
                arr_ntco_targ_totalarr.push(arr_ntco_targ_counter);
            }
            let arr_ntco_targ_final_arr = arr_ntco_targ_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_tco_total').html(arr_ntco_targ_final_arr[0]);


            let arr_nptco_stat_totalarr=[];
            for(var key in data) {
                var arr_nptco_stat_arr = data[key].arr_nptco_stat.split(",").map(Number);
                let arr_nptco_stat_counter=[];
                for (let index = 0; index < arr_nptco_stat_arr.length; index++) {
                    arr_nptco_stat_counter.push(arr_nptco_stat_arr[index]);
                }
                arr_nptco_stat_totalarr.push(arr_nptco_stat_counter);
            }
            let arr_nptco_stat_final_arr = arr_nptco_stat_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ptco_total').html(arr_nptco_stat_final_arr[0]);

            let arr_nptco_targ_totalarr=[];
            for(var key in data) {
                var arr_nptco_targ_arr = data[key].arr_nptco_targ.split(",").map(Number);
                let arr_nptco_targ_counter=[];
                for (let index = 0; index < arr_nptco_targ_arr.length; index++) {
                    arr_nptco_targ_counter.push(arr_nptco_targ_arr[index]);
                }
                arr_nptco_targ_totalarr.push(arr_nptco_targ_counter);
            }
            let arr_nptco_targ_final_arr = arr_nptco_targ_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ptco_total').html(arr_nptco_targ_final_arr[0]);

            $('#s_nmw_total').html(nmoas_final_arr[0]+nmoas_final_arr[1]+nmoas_final_arr[2]+nmoas_final_arr[3]+nmoas_final_arr[4]+nmoas_final_arr[5]+nmoas_final_arr[6]+nmoas_final_arr[7]);
            $('#t_nmw_total').html(nmoat_final_arr[0]+nmoat_final_arr[1]+nmoat_final_arr[2]+nmoat_final_arr[3]+nmoat_final_arr[4]+nmoat_final_arr[5]+nmoat_final_arr[6]+nmoat_final_arr[7]);
            
            $('#s_ncda_total').html(ncdaas_final_arr[0]+ncdaas_final_arr[1]+ncdaas_final_arr[2]+ncdaas_final_arr[3]+ncdaas_final_arr[4]+ncdaas_final_arr[5]+ncdaas_final_arr[6]+ncdaas_final_arr[7]);
            $('#t_ncda_total').html(ncdaat_final_arr[0]+ncdaat_final_arr[1]+ncdaat_final_arr[2]+ncdaat_final_arr[3]+ncdaat_final_arr[4]+ncdaat_final_arr[5]+ncdaat_final_arr[6]+ncdaat_final_arr[7]);
            
            // window.print();
        }
    })
}
</script>