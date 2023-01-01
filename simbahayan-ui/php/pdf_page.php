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
                        <td id="s_npm_eja" class="align-middle text-center fw-bold"></td>
                        <td id="t_npm_eja" class="align-middle text-center fw-bold"></td>
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

<!-------------------------------------------------------------------------------------------------------------------->


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





            let et_totalarr=[];
            for(var key in data) {
                var et_arr = data[key].et_arr.split(",").map(Number);
                let et_counter=[];
                for (let index = 0; index < et_arr.length; index++) {
                    et_counter.push(et_arr[index]);
                }
                et_totalarr.push(et_counter);
            }
            let et_final_arr = et_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#et_total').html(et_final_arr[0]);


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
            $('#ggs_total').html(ggs_final_arr[0]);


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
            $('#ggt_total').html(ggt_final_arr[0]);


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
            $('#ejs_total').html(ejs_final_arr[0]);



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
            $('#ejt_total').html(ejt_final_arr[0]);




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
            $('#cls_total').html(cls_final_arr[0]);



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
            $('#clt_total').html(clt_final_arr[0]);


            let ceras_totalarr=[];
            for(var key in data) {
                var ceras_arr = data[key].ceras_arr.split(",").map(Number);
                let ceras_counter=[];
                for (let index = 0; index < ceras_arr.length; index++) {
                    ceras_counter.push(ceras_arr[index]);
                }
                ceras_totalarr.push(ceras_counter);
            }
            let ceras_final_arr = ceras_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ceras_total').html(ceras_final_arr[0]);



            let cerat_totalarr=[];
            for(var key in data) {
                var cerat_arr = data[key].cerat_arr.split(",").map(Number);
                let cerat_counter=[];
                for (let index = 0; index < cerat_arr.length; index++) {
                    cerat_counter.push(cerat_arr[index]);
                }
                cerat_totalarr.push(cerat_counter);
            }
            let cerat_final_arr = cerat_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#cerat_total').html(cerat_final_arr[0]);


            let sfas_totalarr=[];
            for(var key in data) {
                var sfas_arr = data[key].sfas_arr.split(",").map(Number);
                let sfas_counter=[];
                for (let index = 0; index < sfas_arr.length; index++) {
                    sfas_counter.push(sfas_arr[index]);
                }
                sfas_totalarr.push(sfas_counter);
            }
            let sfas_final_arr = sfas_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#sfas_total').html(sfas_final_arr[0]);


            let sfat_totalarr=[];
            for(var key in data) {
                var sfat_arr = data[key].sfat_arr.split(",").map(Number);
                let sfat_counter=[];
                for (let index = 0; index < sfat_arr.length; index++) {
                    sfat_counter.push(sfat_arr[index]);
                }
                sfat_totalarr.push(sfat_counter);
            }
            let sfat_final_arr = sfat_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#sfat_total').html(sfat_final_arr[0]);




            let ejas_totalarr=[];
            for(var key in data) {
                var ejas_arr = data[key].ejas_arr.split(",").map(Number);
                let ejas_counter=[];
                for (let index = 0; index < ejas_arr.length; index++) {
                    ejas_counter.push(ejas_arr[index]);
                }
                ejas_totalarr.push(ejas_counter);
            }
            let ejas_final_arr = ejas_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ejas_total').html(ejas_final_arr[0]);


            let ejat_totalarr=[];
            for(var key in data) {
                var ejat_arr = data[key].ejat_arr.split(",").map(Number);
                let ejat_counter=[];
                for (let index = 0; index < ejat_arr.length; index++) {
                    ejat_counter.push(ejat_arr[index]);
                }
                ejat_totalarr.push(ejat_counter);
            }
            let ejat_final_arr = ejat_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#ejat_total').html(ejat_final_arr[0]);





            let hlas_totalarr=[];
            for(var key in data) {
                var hlas_arr = data[key].hlas_arr.split(",").map(Number);
                let hlas_counter=[];
                for (let index = 0; index < hlas_arr.length; index++) {
                    hlas_counter.push(hlas_arr[index]);
                }
                hlas_totalarr.push(hlas_counter);
            }
            let hlas_final_arr = hlas_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#hlas_total').html(hlas_final_arr[0]);




            let hlat_totalarr=[];
            for(var key in data) {
                var hlat_arr = data[key].hlat_arr.split(",").map(Number);
                let hlat_counter=[];
                for (let index = 0; index < hlat_arr.length; index++) {
                    hlat_counter.push(hlat_arr[index]);
                }
                hlat_totalarr.push(hlat_counter);
            }
            let hlat_final_arr = hlat_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#hlat_total').html(hlat_final_arr[0]);


          let cofs_totalarr=[];
            for(var key in data) {
                var cofs_arr = data[key].cofs_arr.split(",").map(Number);
                let cofs_counter=[];
                for (let index = 0; index < cofs_arr.length; index++) {
                    cofs_counter.push(cofs_arr[index]);
                }
                cofs_totalarr.push(cofs_counter);
            }
            let cofs_final_arr = cofs_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#cofs_total').html(cofs_final_arr[0]);

          let coft_totalarr=[];
            for(var key in data) {
                var coft_arr = data[key].coft_arr.split(",").map(Number);
                let coft_counter=[];
                for (let index = 0; index < coft_arr.length; index++) {
                    coft_counter.push(coft_arr[index]);
                }
                coft_totalarr.push(coft_counter);
            }
            let coft_final_arr = coft_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#coft_total').html(coft_final_arr[0]);

          let sncis_hfa_totalarr=[];
            for(var key in data) {
                var sncis_hfa_arr = data[key].sncis_hfa_arr.split(",").map(Number);
                let sncis_hfa_counter=[];
                for (let index = 0; index < sncis_hfa_arr.length; index++) {
                    sncis_hfa_counter.push(sncis_hfa_arr[index]);
                }
                sncis_hfa_totalarr.push(sncis_hfa_counter);
            }
            let sncis_hfa_final_arr = sncis_hfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncis_hfa').html(sncis_hfa_final_arr[0]);



          let tncis_hfa_totalarr=[];
            for(var key in data) {
                var tncis_hfa_arr = data[key].tncis_hfa_arr.split(",").map(Number);
                let tncis_hfa_counter=[];
                for (let index = 0; index < tncis_hfa_arr.length; index++) {
                    tncis_hfa_counter.push(tncis_hfa_arr[index]);
                }
                tncis_hfa_totalarr.push(tncis_hfa_counter);
            }
            let tncis_hfa_final_arr = tncis_hfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncis_hfa').html(tncis_hfa_final_arr[0]);

          let sncis_efa_totalarr=[];
            for(var key in data) {
                var sncis_efa_arr = data[key].sncis_efa_arr.split(",").map(Number);
                let sncis_efa_counter=[];
                for (let index = 0; index < sncis_efa_arr.length; index++) {
                    sncis_efa_counter.push(sncis_efa_arr[index]);
                }
                sncis_efa_totalarr.push(sncis_efa_counter);
            }
            let sncis_efa_final_arr = sncis_efa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncis_efa').html(sncis_efa_final_arr[0]);



        let tncis_efa_totalarr=[];
            for(var key in data) {
                var tncis_efa_arr = data[key].tncis_efa_arr.split(",").map(Number);
                let tncis_efa_counter=[];
                for (let index = 0; index < tncis_efa_arr.length; index++) {
                    tncis_efa_counter.push(tncis_efa_arr[index]);
                }
                tncis_efa_totalarr.push(tncis_efa_counter);
            }
            let tncis_efa_final_arr = tncis_efa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncis_efa').html(tncis_efa_final_arr[0]);


       let sncis_gga_totalarr=[];
            for(var key in data) {
                var sncis_gga_arr = data[key].sncis_gga_arr.split(",").map(Number);
                let sncis_gga_counter=[];
                for (let index = 0; index < sncis_gga_arr.length; index++) {
                    sncis_gga_counter.push(sncis_gga_arr[index]);
                }
                sncis_gga_totalarr.push(sncis_gga_counter);
            }
            let sncis_gga_final_arr = sncis_gga_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncis_gga').html(sncis_gga_final_arr[0]);

       let tncis_gga_totalarr=[];
            for(var key in data) {
                var tncis_gga_arr = data[key].tncis_gga_arr.split(",").map(Number);
                let tncis_gga_counter=[];
                for (let index = 0; index < tncis_gga_arr.length; index++) {
                    tncis_gga_counter.push(tncis_gga_arr[index]);
                }
                tncis_gga_totalarr.push(tncis_gga_counter);
            }
            let tncis_gga_final_arr = tncis_gga_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncis_gga').html(tncis_gga_final_arr[0]);


       let sncis_eja_totalarr=[];
            for(var key in data) {
                var sncis_eja_arr = data[key].sncis_eja_arr.split(",").map(Number);
                let sncis_eja_counter=[];
                for (let index = 0; index < sncis_eja_arr.length; index++) {
                    sncis_eja_counter.push(sncis_eja_arr[index]);
                }
                sncis_eja_totalarr.push(sncis_eja_counter);
            }
            let sncis_eja_final_arr = sncis_eja_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncis_eja').html(sncis_eja_final_arr[0]);

       let tncis_eja_totalarr=[];
            for(var key in data) {
                var tncis_eja_arr = data[key].tncis_eja_arr.split(",").map(Number);
                let tncis_eja_counter=[];
                for (let index = 0; index < tncis_eja_arr.length; index++) {
                    tncis_eja_counter.push(tncis_eja_arr[index]);
                }
                tncis_eja_totalarr.push(tncis_eja_counter);
            }
            let tncis_eja_final_arr = tncis_eja_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncis_eja').html(tncis_eja_final_arr[0]);


       let sncis_cla_totalarr=[];
            for(var key in data) {
                var sncis_cla_arr = data[key].sncis_cla_arr.split(",").map(Number);
                let sncis_cla_counter=[];
                for (let index = 0; index < sncis_cla_arr.length; index++) {
                    sncis_cla_counter.push(sncis_cla_arr[index]);
                }
                sncis_cla_totalarr.push(sncis_cla_counter);
            }
            let sncis_cla_final_arr = sncis_cla_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncis_cla').html(sncis_cla_final_arr[0]);


       let tncis_cla_totalarr=[];
            for(var key in data) {
                var tncis_cla_arr = data[key].tncis_cla_arr.split(",").map(Number);
                let tncis_cla_counter=[];
                for (let index = 0; index < tncis_cla_arr.length; index++) {
                    tncis_cla_counter.push(tncis_cla_arr[index]);
                }
                tncis_cla_totalarr.push(tncis_cla_counter);
            }
            let tncis_cla_final_arr = tncis_cla_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncis_cla').html(tncis_cla_final_arr[0]);









       let sncis_cler_totalarr=[];
            for(var key in data) {
                var sncis_cler_arr = data[key].sncis_cler_arr.split(",").map(Number);
                let sncis_cler_counter=[];
                for (let index = 0; index < sncis_cler_arr.length; index++) {
                    sncis_cler_counter.push(sncis_cler_arr[index]);
                }
                sncis_cler_totalarr.push(sncis_cler_counter);
            }
            let sncis_cler_final_arr = sncis_cler_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncis_cler').html(sncis_cler_final_arr[0]);




       let tncis_cler_totalarr=[];
            for(var key in data) {
                var tncis_cler_arr = data[key].tncis_cler_arr.split(",").map(Number);
                let tncis_cler_counter=[];
                for (let index = 0; index < tncis_cler_arr.length; index++) {
                    tncis_cler_counter.push(tncis_cler_arr[index]);
                }
                tncis_cler_totalarr.push(tncis_cler_counter);
            }
            let tncis_cler_final_arr = tncis_cler_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncis_cler').html(tncis_cler_final_arr[0]);



       let sncis_sfa_totalarr=[];
            for(var key in data) {
                var sncis_sfa_arr = data[key].sncis_sfa_arr.split(",").map(Number);
                let sncis_sfa_counter=[];
                for (let index = 0; index < sncis_sfa_arr.length; index++) {
                    sncis_sfa_counter.push(sncis_sfa_arr[index]);
                }
                sncis_sfa_totalarr.push(sncis_sfa_counter);
            }
            let sncis_sfa_final_arr = sncis_sfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncis_sfa').html(sncis_sfa_final_arr[0]);


       let tncis_sfa_totalarr=[];
            for(var key in data) {
                var tncis_sfa_arr = data[key].tncis_sfa_arr.split(",").map(Number);
                let tncis_sfa_counter=[];
                for (let index = 0; index < tncis_sfa_arr.length; index++) {
                    tncis_sfa_counter.push(tncis_sfa_arr[index]);
                }
                tncis_sfa_totalarr.push(tncis_sfa_counter);
            }
            let tncis_sfa_final_arr = tncis_sfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncis_sfa').html(tncis_sfa_final_arr[0]);


       let sncis_ejfa_totalarr=[];
            for(var key in data) {
                var sncis_ejfa_arr = data[key].sncis_ejfa_arr.split(",").map(Number);
                let sncis_ejfa_counter=[];
                for (let index = 0; index < sncis_ejfa_arr.length; index++) {
                    sncis_ejfa_counter.push(sncis_ejfa_arr[index]);
                }
                sncis_ejfa_totalarr.push(sncis_ejfa_counter);
            }
            let sncis_ejfa_final_arr = sncis_ejfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncis_ejfa').html(sncis_ejfa_final_arr[0]);

       let tncis_ejfa_totalarr=[];
            for(var key in data) {
                var tncis_ejfa_arr = data[key].tncis_ejfa_arr.split(",").map(Number);
                let tncis_ejfa_counter=[];
                for (let index = 0; index < tncis_ejfa_arr.length; index++) {
                    tncis_ejfa_counter.push(tncis_ejfa_arr[index]);
                }
                tncis_ejfa_totalarr.push(tncis_ejfa_counter);
            }
            let tncis_ejfa_final_arr = tncis_ejfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncis_ejfa').html(tncis_ejfa_final_arr[0]);

       let sncis_hlfa_totalarr=[];
            for(var key in data) {
                var sncis_hlfa_arr = data[key].sncis_hlfa_arr.split(",").map(Number);
                let sncis_hlfa_counter=[];
                for (let index = 0; index < sncis_hlfa_arr.length; index++) {
                    sncis_hlfa_counter.push(sncis_hlfa_arr[index]);
                }
                sncis_hlfa_totalarr.push(sncis_hlfa_counter);
            }
            let sncis_hlfa_final_arr = sncis_hlfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncis_hlfa').html(sncis_hlfa_final_arr[0]);



       let tncis_hlfa_totalarr=[];
            for(var key in data) {
                var tncis_hlfa_arr = data[key].tncis_hlfa_arr.split(",").map(Number);
                let tncis_hlfa_counter=[];
                for (let index = 0; index < tncis_hlfa_arr.length; index++) {
                    tncis_hlfa_counter.push(tncis_hlfa_arr[index]);
                }
                tncis_hlfa_totalarr.push(tncis_hlfa_counter);
            }
            let tncis_hlfa_final_arr = tncis_hlfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncis_hlfa').html(tncis_hlfa_final_arr[0]);






        let sncis_uecof_totalarr=[];
            for(var key in data) {
                var sncis_uecof_arr = data[key].sncis_uecof_arr.split(",").map(Number);
                let sncis_uecof_counter=[];
                for (let index = 0; index < sncis_uecof_arr.length; index++) {
                    sncis_uecof_counter.push(sncis_uecof_arr[index]);
                }
                sncis_uecof_totalarr.push(sncis_uecof_counter);
            }
            let sncis_uecof_final_arr = sncis_uecof_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_ncis_uecof').html(sncis_uecof_final_arr[0]);









       let tncis_uecof_totalarr=[];
            for(var key in data) {
                var tncis_uecof_arr = data[key].tncis_uecof_arr.split(",").map(Number);
                let tncis_uecof_counter=[];
                for (let index = 0; index < tncis_uecof_arr.length; index++) {
                    tncis_uecof_counter.push(tncis_uecof_arr[index]);
                }
                tncis_uecof_totalarr.push(tncis_uecof_counter);
            }
            let tncis_uecof_final_arr = tncis_uecof_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_ncis_uecof').html(tncis_uecof_final_arr[0]);


       let snpm_hfa_totalarr=[];
            for(var key in data) {
                var snpm_hfa_arr = data[key].snpm_hfa_arr.split(",").map(Number);
                let snpm_hfa_counter=[];
                for (let index = 0; index < snpm_hfa_arr.length; index++) {
                    snpm_hfa_counter.push(snpm_hfa_arr[index]);
                }
                snpm_hfa_totalarr.push(snpm_hfa_counter);
            }
            let snpm_hfa_final_arr = snpm_hfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npm_hfa').html(snpm_hfa_final_arr[0]);





      let tnpm_hfa_totalarr=[];
            for(var key in data) {
                var tnpm_hfa_arr = data[key].tnpm_hfa_arr.split(",").map(Number);
                let tnpm_hfa_counter=[];
                for (let index = 0; index < tnpm_hfa_arr.length; index++) {
                    tnpm_hfa_counter.push(tnpm_hfa_arr[index]);
                }
                tnpm_hfa_totalarr.push(tnpm_hfa_counter);
            }
            let tnpm_hfa_final_arr = tnpm_hfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npm_hfa').html(tnpm_hfa_final_arr[0]);



      let snpm_efa_totalarr=[];
            for(var key in data) {
                var snpm_efa_arr = data[key].snpm_efa_arr.split(",").map(Number);
                let snpm_efa_counter=[];
                for (let index = 0; index < snpm_efa_arr.length; index++) {
                    snpm_efa_counter.push(snpm_efa_arr[index]);
                }
                snpm_efa_totalarr.push(snpm_efa_counter);
            }
            let snpm_efa_final_arr = snpm_efa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npm_efa').html(snpm_efa_final_arr[0]);








      let tnpm_efa_totalarr=[];
            for(var key in data) {
                var tnpm_efa_arr = data[key].tnpm_efa_arr.split(",").map(Number);
                let tnpm_efa_counter=[];
                for (let index = 0; index < tnpm_efa_arr.length; index++) {
                    tnpm_efa_counter.push(tnpm_efa_arr[index]);
                }
                tnpm_efa_totalarr.push(tnpm_efa_counter);
            }
            let tnpm_efa_final_arr = tnpm_efa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npm_efa').html(tnpm_efa_final_arr[0]);



      let snpm_ggfa_totalarr=[];
            for(var key in data) {
                var snpm_ggfa_arr = data[key].snpm_ggfa_arr.split(",").map(Number);
                let snpm_ggfa_counter=[];
                for (let index = 0; index < snpm_ggfa_arr.length; index++) {
                    snpm_ggfa_counter.push(snpm_ggfa_arr[index]);
                }
                snpm_ggfa_totalarr.push(snpm_ggfa_counter);
            }
            let snpm_ggfa_final_arr = snpm_ggfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npm_ggfa').html(snpm_ggfa_final_arr[0]);


      let tnpm_ggfa_totalarr=[];
            for(var key in data) {
                var tnpm_ggfa_arr = data[key].tnpm_ggfa_arr.split(",").map(Number);
                let tnpm_ggfa_counter=[];
                for (let index = 0; index < tnpm_ggfa_arr.length; index++) {
                    tnpm_ggfa_counter.push(tnpm_ggfa_arr[index]);
                }
                tnpm_ggfa_totalarr.push(tnpm_ggfa_counter);
            }
            let tnpm_ggfa_final_arr = tnpm_ggfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npm_ggfa').html(tnpm_ggfa_final_arr[0]);


      let snpm_ejfa_totalarr=[];
            for(var key in data) {
                var snpm_ejfa_arr = data[key].snpm_ejfa_arr.split(",").map(Number);
                let snpm_ejfa_counter=[];
                for (let index = 0; index < snpm_ejfa_arr.length; index++) {
                    snpm_ejfa_counter.push(snpm_ejfa_arr[index]);
                }
                snpm_ejfa_totalarr.push(snpm_ejfa_counter);
            }
            let snpm_ejfa_final_arr = snpm_ejfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npm_ejfa').html(snpm_ejfa_final_arr[0]);





      let tnpm_ejfa_totalarr=[];
            for(var key in data) {
                var tnpm_ejfa_arr = data[key].tnpm_ejfa_arr.split(",").map(Number);
                let tnpm_ejfa_counter=[];
                for (let index = 0; index < tnpm_ejfa_arr.length; index++) {
                    tnpm_ejfa_counter.push(tnpm_ejfa_arr[index]);
                }
                tnpm_ejfa_totalarr.push(tnpm_ejfa_counter);
            }
            let tnpm_ejfa_final_arr = tnpm_ejfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npm_ejfa').html(tnpm_ejfa_final_arr[0]);



      let snpm_clfa_totalarr=[];
            for(var key in data) {
                var snpm_clfa_arr = data[key].snpm_clfa_arr.split(",").map(Number);
                let snpm_clfa_counter=[];
                for (let index = 0; index < snpm_clfa_arr.length; index++) {
                    snpm_clfa_counter.push(snpm_clfa_arr[index]);
                }
                snpm_clfa_totalarr.push(snpm_clfa_counter);
            }
            let snpm_clfa_final_arr = snpm_clfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npm_clfa').html(snpm_clfa_final_arr[0]);





  
      let tnpm_clfa_totalarr=[];
            for(var key in data) {
                var tnpm_clfa_arr = data[key].tnpm_clfa_arr.split(",").map(Number);
                let tnpm_clfa_counter=[];
                for (let index = 0; index < tnpm_clfa_arr.length; index++) {
                    tnpm_clfa_counter.push(tnpm_clfa_arr[index]);
                }
                tnpm_clfa_totalarr.push(tnpm_clfa_counter);
            }
            let tnpm_clfa_final_arr = tnpm_clfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npm_clfa').html(tnpm_clfa_final_arr[0]);






  
      let snpm_cler_totalarr=[];
            for(var key in data) {
                var snpm_cler_arr = data[key].snpm_cler_arr.split(",").map(Number);
                let snpm_cler_counter=[];
                for (let index = 0; index < snpm_cler_arr.length; index++) {
                    snpm_cler_counter.push(snpm_cler_arr[index]);
                }
                snpm_cler_totalarr.push(snpm_cler_counter);
            }
            let snpm_cler_final_arr = snpm_cler_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npm_cler').html(snpm_cler_final_arr[0]);







      let tnpm_cler_totalarr=[];
            for(var key in data) {
                var tnpm_cler_arr = data[key].tnpm_cler_arr.split(",").map(Number);
                let tnpm_cler_counter=[];
                for (let index = 0; index < tnpm_cler_arr.length; index++) {
                    tnpm_cler_counter.push(tnpm_cler_arr[index]);
                }
                tnpm_cler_totalarr.push(tnpm_cler_counter);
            }
            let tnpm_cler_final_arr = tnpm_cler_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npm_cler').html(tnpm_cler_final_arr[0]);







      let snpm_sfa_totalarr=[];
            for(var key in data) {
                var snpm_sfa_arr = data[key].snpm_sfa_arr.split(",").map(Number);
                let snpm_sfa_counter=[];
                for (let index = 0; index < snpm_sfa_arr.length; index++) {
                    snpm_sfa_counter.push(snpm_sfa_arr[index]);
                }
                snpm_sfa_totalarr.push(snpm_sfa_counter);
            }
            let snpm_sfa_final_arr = snpm_sfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npm_sfa').html(snpm_sfa_final_arr[0]);





      let tnpm_sfa_totalarr=[];
            for(var key in data) {
                var tnpm_sfa_arr = data[key].tnpm_sfa_arr.split(",").map(Number);
                let tnpm_sfa_counter=[];
                for (let index = 0; index < tnpm_sfa_arr.length; index++) {
                    tnpm_sfa_counter.push(tnpm_sfa_arr[index]);
                }
                tnpm_sfa_totalarr.push(tnpm_sfa_counter);
            }
            let tnpm_sfa_final_arr = tnpm_sfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npm_sfa').html(tnpm_sfa_final_arr[0]);






      let snpm_eja_totalarr=[];
            for(var key in data) {
                var snpm_eja_arr = data[key].snpm_eja_arr.split(",").map(Number);
                let snpm_eja_counter=[];
                for (let index = 0; index < snpm_eja_arr.length; index++) {
                    snpm_eja_counter.push(snpm_eja_arr[index]);
                }
                snpm_eja_totalarr.push(snpm_eja_counter);
            }
            let snpm_eja_final_arr = snpm_eja_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npm_eja').html(snpm_eja_final_arr[0]);





      let tnpm_eja_totalarr=[];
            for(var key in data) {
                var tnpm_eja_arr = data[key].tnpm_eja_arr.split(",").map(Number);
                let tnpm_eja_counter=[];
                for (let index = 0; index < tnpm_eja_arr.length; index++) {
                    tnpm_eja_counter.push(tnpm_eja_arr[index]);
                }
                tnpm_eja_totalarr.push(tnpm_eja_counter);
            }
            let tnpm_eja_final_arr = tnpm_eja_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npm_eja').html(tnpm_eja_final_arr[0]);




      let snpm_hlfa_totalarr=[];
            for(var key in data) {
                var snpm_hlfa_arr = data[key].snpm_hlfa_arr.split(",").map(Number);
                let snpm_hlfa_counter=[];
                for (let index = 0; index < snpm_hlfa_arr.length; index++) {
                    snpm_hlfa_counter.push(snpm_hlfa_arr[index]);
                }
                snpm_hlfa_totalarr.push(snpm_hlfa_counter);
            }
            let snpm_hlfa_final_arr = snpm_hlfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npm_hlfa').html(snpm_hlfa_final_arr[0]);








      let tnpm_hlfa_totalarr=[];
            for(var key in data) {
                var tnpm_hlfa_arr = data[key].tnpm_hlfa_arr.split(",").map(Number);
                let tnpm_hlfa_counter=[];
                for (let index = 0; index < tnpm_hlfa_arr.length; index++) {
                    tnpm_hlfa_counter.push(tnpm_hlfa_arr[index]);
                }
                tnpm_hlfa_totalarr.push(tnpm_hlfa_counter);
            }
            let tnpm_hlfa_final_arr = tnpm_hlfa_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npm_hlfa').html(tnpm_hlfa_final_arr[0]);



      let snpm_uecof_totalarr=[];
            for(var key in data) {
                var snpm_uecof_arr = data[key].snpm_uecof_arr.split(",").map(Number);
                let snpm_uecof_counter=[];
                for (let index = 0; index < snpm_uecof_arr.length; index++) {
                    snpm_uecof_counter.push(snpm_uecof_arr[index]);
                }
                snpm_uecof_totalarr.push(snpm_uecof_counter);
            }
            let snpm_uecof_final_arr = snpm_uecof_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#s_npm_uecof').html(snpm_uecof_final_arr[0]);



      let tnpm_uecof_totalarr=[];
            for(var key in data) {
                var tnpm_uecof_arr = data[key].tnpm_uecof_arr.split(",").map(Number);
                let tnpm_uecof_counter=[];
                for (let index = 0; index < tnpm_uecof_arr.length; index++) {
                    tnpm_uecof_counter.push(tnpm_uecof_arr[index]);
                }
                tnpm_uecof_totalarr.push(tnpm_uecof_counter);
            }
            let tnpm_uecof_final_arr = tnpm_uecof_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#t_npm_uecof').html(tnpm_uecof_final_arr[0]);




      let final_kra1status_totalarr=[];
            for(var key in data) {
                var final_kra1status_arr = data[key].final_kra1status_arr.split(",").map(Number);
                let final_kra1status_counter=[];
                for (let index = 0; index < final_kra1status_arr.length; index++) {
                    final_kra1status_counter.push(final_kra1status_arr[index]);
                }
                final_kra1status_totalarr.push(final_kra1status_counter);
            }
            let final_kra1status_final_arr = final_kra1status_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#final_kra1status').html(final_kra1status_final_arr[0]);




      let final_kra1target_totalarr=[];
            for(var key in data) {
                var final_kra1target_arr = data[key].final_kra1target_arr.split(",").map(Number);
                let final_kra1target_counter=[];
                for (let index = 0; index < final_kra1target_arr.length; index++) {
                    final_kra1target_counter.push(final_kra1target_arr[index]);
                }
                final_kra1target_totalarr.push(final_kra1target_counter);
            }
            let final_kra1target_final_arr = final_kra1target_totalarr.reduce((a, b) => a.map((c, i) => c + b[i]));
            $('#final_kra1target').html(final_kra1target_final_arr[0]);
            get_kra2datafromuserid();
        }
    })
}


// -------------------------------------------------------------------------------------------------






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