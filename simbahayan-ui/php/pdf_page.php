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
                        <td colspan="2" class="text-end fw-bold">Total: </td>
                        <td id="final_kra2status" class="align-middle text-center fw-bold"></td>
                        <td id="final_kra2target" class="align-middle text-center fw-bold"></td>
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
                    <tr>
                        <td colspan="2" class="text-end fw-bold">Total: </td>
                        <td id="final_kra3status" class="align-middle text-center fw-bold"></td>
                        <td id="final_kra3target" class="align-middle text-center fw-bold"></td>
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
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra1datafromuserid",
            user_id: user_id
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText)

            var hs_arr = data[0].hs_arr.split(",");
            var hs_total = parseInt(hs_arr[0]);
            $('#hs_total').html(hs_total);

            var ht_arr = data[0].ht_arr.split(",");
            var ht_total = parseInt(ht_arr[0])
            $('#ht_total').html(ht_total);

            var es_arr = data[0].es_arr.split(",");
            var es_total = parseInt(es_arr[0])
            $('#es_total').html(es_total);

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

function get_kra2datafromuserid() {
    let user_id = localStorage.getItem('final_pdf_id');
    $.ajax({
        url: url,
        type: "GET",
        data: {
            csrf_token: "{{ csrf_token() }}",
            tag: "get_kra2datafromuserid",
            user_id: user_id
        },
        complete: function(response) {
            var data = JSON.parse(response.responseText);
            console.log(data)

            var s_puidcd_arr = data[0].s_puidcd_arr.split(",");
            var s_puidcd_total = parseInt(s_puidcd_arr[0]);
            $('#s_puidcd_total').html(s_puidcd_total);

            var t_puidcd_arr = data[0].t_puidcd_arr.split(",");
            var t_puidcd_total = parseInt(t_puidcd_arr[0]);
            $('#t_puidcd_total').html(t_puidcd_total);

            var s_psaa_arr = data[0].s_psaa_arr.split(",");
            var s_psaa_total = parseInt(s_psaa_arr[0]);
            $('#s_psaa_total').html(s_psaa_total);

            var t_psaa_arr = data[0].t_psaa_arr.split(",");
            var t_psaa_total = parseInt(t_psaa_arr[0]);
            $('#t_psaa_total').html(t_psaa_total);

            var s_pucer_arr = data[0].s_pucer_arr.split(",");
            var s_pucer_total = parseInt(s_pucer_arr[0]);
            $('#s_pucer_total').html(s_pucer_total);

            var t_pucer_arr = data[0].t_pucer_arr.split(",");
            var t_pucer_total = parseInt(t_pucer_arr[0]);
            $('#t_pucer_total').html(t_pucer_total);

            var s_pul_arr = data[0].s_pul_arr.split(",");
            var s_pul_total = parseInt(s_pul_arr[0]);
            $('#s_pul_total').html(s_pul_total);

            var t_pul_arr = data[0].t_pul_arr.split(",");
            var t_pul_total = parseInt(t_pul_arr[0]);
            $('#t_pul_total').html(t_pul_total);

            var udcps_arr = data[0].udcps_arr.split(",");
            $("#UDCPs_NSO").html(udcps_arr[0]);
            $("#UDCPs_NStu").html(udcps_arr[1]);
            $("#UDCPs_NFac").html(udcps_arr[2]);
            $("#UDCPs_NAdmin").html(udcps_arr[3]);
            $("#UDCPs_NSS").html(udcps_arr[4]);
            $("#UDCPs_NAlumni").html(udcps_arr[5]);
            var udcps_total = parseInt(udcps_arr[0]) + parseInt(udcps_arr[1]) + parseInt(udcps_arr[2]) +
                parseInt(udcps_arr[3]) + parseInt(udcps_arr[4]) + parseInt(udcps_arr[5]);


            var udcpt_arr = data[0].udcpt_arr.split(",");
            $("#UDCPt_NSO").html(udcpt_arr[0]);
            $("#UDCPt_NStu").html(udcpt_arr[1]);
            $("#UDCPt_NFac").html(udcpt_arr[2]);
            $("#UDCPt_NAdmin").html(udcpt_arr[3]);
            $("#UDCPt_NSS").html(udcpt_arr[4]);
            $("#UDCPt_NAlumni").html(udcpt_arr[5]);
            var udcpt_total = parseInt(udcpt_arr[0]) + parseInt(udcpt_arr[1]) + parseInt(udcpt_arr[2]) +
                parseInt(udcpt_arr[3]) + parseInt(udcpt_arr[4]) + parseInt(udcpt_arr[5]);


            var fcs_arr = data[0].fcs_arr.split(",");
            $("#fcs_RPLFC").html(fcs_arr[0]);
            $("#fcs_RPIFC").html(fcs_arr[1]);
            var fcs_total = parseInt(fcs_arr[0]) + parseInt(fcs_arr[1]);

            var fct_arr = data[0].fct_arr.split(",");
            $("#fct_RPLFC").html(fct_arr[0]);
            $("#fct_RPIFC").html(fct_arr[1]);
            var fct_total = parseInt(fct_arr[0]) + parseInt(fct_arr[1]);

            var ps_arr = data[0].ps_arr.split(",");
            $("#ps_NLP").html(ps_arr[0]);
            $("#ps_IP").html(ps_arr[1]);
            var ps_total = parseInt(ps_arr[0]) + parseInt(ps_arr[1]);

            var pt_arr = data[0].pt_arr.split(",");
            $("#pt_NLP").html(pt_arr[0]);
            $("#pt_IP").html(pt_arr[1]);
            var pt_total = parseInt(pt_arr[0]) + parseInt(pt_arr[1]);


            var final_kra2status = s_puidcd_total + s_psaa_total + s_pucer_total + s_pul_total +
                udcps_total + fcs_total + ps_total;
            $('#final_kra2status').html(final_kra2status);

            var final_kra2target = t_puidcd_total + t_psaa_total + t_pucer_total + t_pul_total +
                udcpt_total + fct_total + pt_total;
            $('#final_kra2target').html(final_kra2target);

            get_kra3datafromuserid();

        }
    })
}

function get_kra3datafromuserid() {
    let user_id = localStorage.getItem('final_pdf_id');
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
            $('#POs_MM').html(pos_arr[0]);
            $('#POs_CDAA').html(pos_arr[1]);
            var pos_total = parseInt(pos_arr[0]) + parseInt(pos_arr[1]);






            var pot_arr = data[0].pot_arr.split(",");
            $('#POt_MM').html(pot_arr[0]);
            $('#POt_CDAA').html(pot_arr[1]);
            var pot_total = parseInt(pot_arr[0]) + parseInt(pot_arr[1]);



            var gas_arr = data[0].gas_arr.split(",");
            $('#GAs_MM').html(gas_arr[0]);
            $('#GAs_CDAA').html(gas_arr[1]);
            var gas_total = parseInt(gas_arr[0]) + parseInt(gas_arr[1]);


            var gat_arr = data[0].gat_arr.split(",");
            $('#GAt_MM').html(gat_arr[0]);
            $('#GAt_CDAA').html(gat_arr[1]);
            var gat_total = parseInt(gat_arr[0]) + parseInt(gat_arr[1]);

            var ngos_arr = data[0].ngos_arr.split(",");
            $('#NGOs_MM').html(ngos_arr[0]);
            $('#NGOs_CDAA').html(ngos_arr[1]);
            var ngos_total = parseInt(ngos_arr[0]) + parseInt(ngos_arr[1]);



            var ngot_arr = data[0].ngot_arr.split(",");
            $('#NGOt_MM').html(ngot_arr[0]);
            $('#NGOt_CDAA').html(ngot_arr[1]);
            var beis_arr = data[0].beis_arr.split(",");
            $('#BEIs_MM').html(beis_arr[0]);
            $('#BEIs_CDAA').html(beis_arr[1]);
            var beit_arr = data[0].beit_arr.split(",");
            $('#BEIt_MM').html(beit_arr[0]);
            $('#BEIt_CDAA').html(beit_arr[1]);

            var lheis_arr = data[0].lheis_arr.split(",");
            $("#LHEIs_MM").html(lheis_arr[0]);
            $("#LHEIs_CDAA").html(lheis_arr[1]);
            var lheit_arr = data[0].lheit_arr.split(",");
            $("#LHEIt_MM").html(lheit_arr[0]);
            $("#LHEIt_CDAA").html(lheit_arr[1]);
            var iheis_arr = data[0].iheis_arr.split(",");
            $("#IHEIs_MM").html(iheis_arr[0]);
            $("#IHEIs_CDAA").html(iheis_arr[1]);
            var iheit_arr = data[0].iheit_arr.split(",");
            $("#IHEIt_MM").html(iheit_arr[0]);
            $("#IHEIt_CDAA").html(iheit_arr[1]);
            var cbos_arr = data[0].cbos_arr.split(",");
            $("#CBOs_MM").html(cbos_arr[0]);
            $("#CBOs_CDAA").html(cbos_arr[1]);
            var cbot_arr = data[0].cbot_arr.split(",");
            $("#CBOt_MM").html(cbot_arr[0]);
            $("#CBOt_CDAA").html(cbot_arr[1]);
            var pbos_arr = data[0].pbos_arr.split(",");
            $("#PBOs_MM").html(pbos_arr[0]);
            $("#PBOs_CDAA").html(pbos_arr[1]);
            var pbot_arr = data[0].pbot_arr.split(",");
            $("#PBOt_MM").html(pbot_arr[0]);
            $("#PBOt_CDAA").html(pbot_arr[1]);
            var tccs_arr = data[0].tccs_arr.split(",");
            $("#TCCs_MM").html(tccs_arr[0]);
            $("#TCCs_CDAA").html(tccs_arr[1]);
            var tcct_arr = data[0].tcct_arr.split(",");
            $("#TCCt_MM").html(tcct_arr[0]);
            $("#TCCt_CDAA").html(tcct_arr[1]);


            var kra311s = parseInt(tccs_arr[0]) + parseInt(tccs_arr[1]);
            var kra311t = parseInt(tcct_arr[0]) + parseInt(tcct_arr[1]);


            var final_kra310s = parseInt(pos_arr[0]) + parseInt(gas_arr[0]) + parseInt(ngos_arr[0]) +
                parseInt(beis_arr[0]) + parseInt(lheis_arr[0]) + parseInt(iheis_arr[0]) + parseInt(cbos_arr[
                    0]) + parseInt(pbos_arr[0]);
            $('#kra310s').html(final_kra310s);

            var final_kra310t = parseInt(pot_arr[0]) + parseInt(gat_arr[0]) + parseInt(ngot_arr[0]) +
                parseInt(beit_arr[0]) + parseInt(iheit_arr[0]) + parseInt(iheit_arr[0]) + parseInt(cbot_arr[
                    0]) + parseInt(pbot_arr[0]);
            $('#kra310t').html(final_kra310t);

            var final_kra311s = parseInt(pos_arr[1]) + parseInt(gas_arr[1]) + parseInt(ngos_arr[1]) +
                parseInt(beis_arr[1]) + parseInt(lheis_arr[1]) + parseInt(iheis_arr[1]) + parseInt(cbos_arr[
                    1]) + parseInt(pbos_arr[1]);
            var final_kra311t = parseInt(pos_arr[1]) + parseInt(gas_arr[1]) + parseInt(ngos_arr[1]) +
                parseInt(beis_arr[1]) + parseInt(lheis_arr[1]) + parseInt(iheis_arr[1]) + parseInt(cbos_arr[
                    1]) + parseInt(pbos_arr[1]);

            var final_kra3status = kra311s + final_kra310s + final_kra311s;
            $('#final_kra3status').html(final_kra3status);

            var final_kra3target = kra311t + final_kra310t + final_kra311t;
            $('#final_kra3target').html(final_kra3target);
            // window.print();
        }
    })
}
</script>