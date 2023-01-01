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
<<<<<<< HEAD


// -------------------------------------------------------------------------------------------------






=======
get_kra2datafromuserid();
>>>>>>> b6b5109da662180839e220ff61ca0911d7a38058
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