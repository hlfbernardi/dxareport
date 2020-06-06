<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<html lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145074312-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-145074312-1');
    </script>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-5656373481263190",
            enable_page_level_ads: true
        });
    </script>
    
<script type='text/javascript' src='//pl15234264.passeura.com/d1/12/95/d11295cb8a5757dea05525bf9bed1b66.js'></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dxareportstyle.css">
    <title>DXA Report</title>
    <link rel='shortcut icon' href='favicon.png' type='image/x-icon' />
</head>

<body>
    <div class="container">

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="index.php">DXA Report</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="index.php">T-score<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="formzscore.php">Z-score</a>
                        <a class="nav-item nav-link" href="formwrist.php">Forearm</a>
                        <a class="nav-item nav-link disabled" href="formbc.php" tabindex="-1" aria-disabled="true">Body Composition</a>
                    </div>
                </div>
            </nav>
            <div class="paypal">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="6W8RPFW6HWZ7A" />
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                    <img alt="" border="0" src="https://www.paypal.com/en_BR/i/scr/pixel.gif" width="1" height="1" />
                </form>
            </div>

        </header>

        <div class="jumbotron">
       
        <script type="text/javascript">
  var uid = '246171';
  var wid = '506031';
</script>
<script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>


            <div class="media">
                <img src="img/logodxareport1.png" class="align-self-start mr-3" alt="logo dxareport">
                <div class="media-body">
                    <h3>Welcome!</h3>
                    <p>This formulary was build to help you to make DXA structured reports.</p>
                    <p>The template follows the International Society for Clinical Densitometry (ISCD) positions: <a href="https://www.iscd.org/official-positions/">ISCD</a></p>
                    <p>For children, adolescents, premenopausal women and men age less than 50, choose the <a href="formzscore.php">Z-score </a>formulary.</p>
                </div>
            </div>
        </div>
        <div class="jumbotron">
            <form class="formulario" method="post" id="formulario" action="tscore.php">

                <fieldset >
                    <legend>Clinical Data:</legend>

                    <div class="form-group row">
                        <label for="patientname" class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nome" name="nome" maxlength="100" placeholder="Patient Name">
                        </div>
                    </div>

                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-10 custom-control custom-radio">
                            <div class="form-check">
                                <input class="custom-control-input" type="radio" id="sexfem" name="sexo" value="Female" checked>
                                <label class="custom-control-label" for="sexfem">
                                    Female
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="custom-control-input" type="radio" id="sexmasc" name="sexo" value="Male">
                                <label class="custom-control-label" for="sexmasc">
                                    Male
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthdate" class="col-sm-2 col-form-label">Birth Date:</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="dnasc" name="dnasc">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="examdate" class="col-sm-2 col-form-label">Exam Date:</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="dexame" name="dexame">
                        </div>
                    </div>
                </fieldset>
                <fieldset >
                    <legend>Indication(s):</legend>
                    <div class="form-group row">
                        <div class="col-sm-2">Select those that apply:</div>
                        <div class="col-sm-10">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="indica[]" id="inlineCheckbox1" value="Women aged 65 and older">
                                <label class="custom-control-label" for="inlineCheckbox1">Women aged 65 and older</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="indica[]" id="inlineCheckbox2" value="Men aged 70 and older">
                                <label class="custom-control-label" for="inlineCheckbox2">Men aged 70 and older</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="indica[]" id="inlineCheckbox3" value="Low body weight">
                                <label class="custom-control-label" for="inlineCheckbox3">Low body weight</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="indica[]" id="inlineCheckbox4" value="Prior fracture">
                                <label class="custom-control-label" for="inlineCheckbox4">Prior fracture</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="indica[]" id="inlineCheckbox5" value="High risk medication use">
                                <label class="custom-control-label" for="inlineCheckbox5">High risk medication use</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="indica[]" id="inlineCheckbox6" value="Disease or condition associated with bone loss">
                                <label class="custom-control-label" for="inlineCheckbox6">Disease or condition associated with bone loss</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="indica[]" id="inlineCheckbox7" value="Adults with a fragility fracture">
                                <label class="custom-control-label" for="inlineCheckbox7">Adults with a fragility fracture</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="indica[]" id="inlineCheckbox8" value="Anyone being considered for pharmacologic therapy">
                                <label class="custom-control-label" for="inlineCheckbox8">Anyone being considered for pharmacologic therapy</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="indica[]" id="inlineCheckbox9" value="Anyone being treated, to monitor treatment effect">
                                <label class="custom-control-label" for="inlineCheckbox9">Anyone being treated, to monitor treatment effect</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="indica[]" id="inlineCheckbox10" value="Anyone not receiving therapy in whom evidence of bone loss would lead to treatment">
                                <label class="custom-control-label" for="inlineCheckbox10">Anyone not receiving therapy in whom evidence of bone loss would lead to treatment</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputRefphysician" class="col-sm-2 col-form-label">Referring Physician:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="refphy" id="refphy" placeholder="Dr. Smart">
                        </div>
                    </div>

                </fieldset>

                <fieldset class="form-group">

                    <legend>Lumbar Spine:</legend>

                    <div class="form-group row">
                        <label for="tsspine" class="col-sm-2 col-form-label">T-score Lumbar</label>
                        <div class="col-sm-4">
                            <input pattern="^-?[0-9][0-9\.]+$" required title="Use this dotted decimal number format:-1.0" type="text" class="form-control" id="tslomb" name="tslomb" size="4" maxlength="4" placeholder="ex: -2.8">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="bmdspine" class="col-sm-2 col-form-label">BMD Lumbar</label>
                        <div class="col-sm-4">
                            <input pattern="^-?[0-9][0-9\.]+$" required title="Use this format: 0.861" type="text" class="form-control" id="dmolomb" name="dmolomb" size="5" maxlength="5" placeholder="ex: 0.681">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="seglombar" class="col-sm-2 col-form-label">Lumbar Levels</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="slombar" id="seglombar">
                                <option selected value="(L1-L4)">(L1-L4) </option>
                                <option value="(L2-L4)">(L2-L4)</option>
                                <option value="(L3-L4)">(L3-L4)</option>
                                <option value="(L1-L3)">(L1-L3)</option>
                                <option value="(L1-L2)">(L1-L2)</option>
                                <option value="(L2-L3)">(L2-L3)</option>
                            </select>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <legend>Hip:</legend>
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Side:</legend>
                        <div class="col-sm-10 custom-control custom-radio ">
                            <div class="form-check">
                                <input class="custom-control-input" type="radio" name="side" id="side1" value="LEFT" checked>
                                <label class="custom-control-label" for="side1">Left</label>
                            </div>
                            <div class="form-check">
                                <input class="custom-control-input" type="radio" name="side" id="side2" value="RIGHT">
                                <label class="custom-control-label" for="side2">Right</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tsfemneck" class="col-sm-2 col-form-label">T-score Femoral Neck:</label>
                        <div class="col-sm-4">
                            <input type="text" pattern="^-?[0-9][0-9\.]+$" required title="Use this dotted decimal number format:-1.5" class="form-control" id="tscolo" name="tscolo" size="4" maxlength="4" placeholder="ex: -1.8">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bmdfemneck" class="col-sm-2 col-form-label">BMD Femoral NecK:</label>
                        <div class="col-sm-4">
                            <input type="text" pattern="^-?[0-9][0-9\.]+$" required title="Use this format: 0.861" class="form-control" id="dmocolo" name="dmocolo" size="5" maxlength="5" placeholder="ex: 0.961">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tsthip" class="col-sm-2 col-form-label">T-score Total Hip:</label>
                        <div class="col-sm-4">
                            <input type="text" pattern="^-?[0-9][0-9\.]+$" required title="Use this dotted decimal number format:-2.0" class="form-control" id="tsft" name="tsft" size="4" maxlength="4" placeholder="ex: -1.4">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="bmdthip" class="col-sm-2 col-form-label">BMD Total Hip:</label>
                        <div class="col-sm-4">
                            <input type="text" pattern="^-?[0-9][0-9\.]+$" required title="Use this format: 0.861" class="form-control" id="dmoft" name="dmoft" size="5" maxlength="5" placeholder="ex: 0.739">
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <legend>Coments:</legend>
                    <p>Statement regarding technical quality,artifacts,and reason(s) for exclusion of vertebral bodies and/or other skeletal sites.:</p>
                    <div class="form-group row">
                        <label for="coments" class="col-sm-2 col-form-label">Technical Quality:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="coments" id="coments" maxlength="100" placeholder="Proper exam.">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="seglombar" class="col-sm-2 col-form-label">Densitometer</label>
                        <div class="col-sm-4">
                            <select class="form-control" name="densito" id="densito">
                                <option selected value="GE-lUNAR">GE-LUNAR</option>
                                <option value="Hologic">Hologic</option>
                                <option value="Norland">Norland</option>
                                <option value="DMS/Medlink">DMS/Medlink</option>
                                <option value="Mindways QCT">Mindways QCT</option>
                                <option value="Swissray">Swissray</option>
                                <option value="BM Tech">BM Tech</option>
                                <option value="Eurotech">Eurotech</option>
                            </select>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="form-group">
                    <legend>Prior Exam:</legend>
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Has prior study to compare?</legend>
                        <div class="col-sm-10 custom-control custom-radio">
                            <div class="form-check">
                                <input class="custom-control-input" type="radio" id="comparayes" name="compara" value="yes">
                                <label class="custom-control-label" for="comparayes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="custom-control-input" type="radio" id="comparano" name="compara" value="no" checked>
                                <label class="custom-control-label" for="comparano">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="priorexame" class="col-sm-2 col-form-label">Prior Exame Date</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="dataant" name="dataant">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="priols" class="col-sm-2 col-form-label">Prior Lumbar Spine BMD</label>
                        <div class="col-sm-4">
                            <input type="text" pattern="^-?[0-9][0-9\.]+$" title="Use this format: 0.758" class="form-control" id="dmolombant" name="dmolombant" size="5" maxlength="5" placeholder="ex: 1.342">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="priofn" class="col-sm-2 col-form-label">Prior Femoral Neck BMD</label>
                        <div class="col-sm-4">
                            <input type="text" pattern="^-?[0-9][0-9\.]+$" title="Use this format: 0.965" class="form-control" id="dmocoloant" name="dmocoloant" size="5" maxlength="5" placeholder="ex: 0.835">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="prioth" class="col-sm-2 col-form-label">Prior Total Hip BMD</label>
                        <div class="col-sm-4">
                            <input type="text" pattern="^-?[0-9][0-9\.]+$" title="Use this format: 0.741" class="form-control" id="dmoftant" name="dmoftant" size="5" maxlength="5" placeholder="ex: 0.984">
                        </div>
                    </div>
                </fieldset>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>

        <div class="jumbotron">
            <div class="media">
                <fieldset class="form-group">
                    <legend>Fracture Risk:</legend>
                    <p>To evaluate fracture risk in patients in accordance with the ISCD/NOF recommendations, visit FRAX site.:
                        <a href="https://www.sheffield.ac.uk/FRAX/index.aspx">FRAX</a></p>
            </div>
            </fieldset>
        </div>

        <div class="jumbotron rodape">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="https://www.iscd.org/">International Society for Clinical Densitometry</a></li>
                            <li><a href="https://www.nof.org/">National Osteoporosis Foundation</a></li>
                            <li><a href="https://www.rsna.org/">RSNA</a></li>
                            <li><a href="privacy.php">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5>Contact</h5>
                        <p>
                            Phone: +5511 977003843 <br>
                            E-mail: hmbradiologia@gmail.com<br>
                        </p>
                    </div>
                    <div class="col-12 col-md-4">
                        <h5>Connect</h5>
                        <ul>
                            <li><a href="https://www.facebook.com/pericia.radiologia">Facebook</a></li>
                            <li><a href="https://www.twitter.com/Hmbradiologia1">Twiter</a></li>
                            <li><a href="https://www.linkedin.com/in/helio-luiz-fernando-bernardi-ab375550/">Linkedin</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>