<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 
session_start();
include("./captcha/captcha.php");

?>                            
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- InstanceBegin template="/Templates/italiano.dwt.php" codeOutsideHTMLIsLocked="false" -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- InstanceBeginEditable name="doctitle" --><title>La Perla del Golfo Restaurant - Briatico - Contattaci</title>
        <!-- InstanceEndEditable --><!-- InstanceEndEditable
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link rel="icon" href="grafica/favicon.png" type="image/png">
        <script type="text/javascript" src="js/global.js"></script> -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/css.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="grafica/favicon.png" type="image/png">
        <script type="text/javascript" src="js/global.js">
        </script>
        <script type="text/javascript" src="js/jquery.min.js">
        </script>
        <script type="text/javascript" src="js/jquery.easing.min.js">
        </script>
        <link rel="stylesheet" href="js/supersized/supersized.css" type="text/css" media="screen">
        <link rel="stylesheet" href="js/supersized/supersized.shutter.css" type="text/css" media="screen">
        <script src="js/jquery.pngFix.pack.js">
        </script>
        <script src="js/config.js">
        </script>
        <link rel="stylesheet" href="js/colorbox/colorbox.css">
        <script type="text/javascript" src="js/colorbox/jquery.colorbox.js">
        </script>
        <!-- InstanceBeginEditable name="head" -->
        <meta name="description" content="I sapori del mare in uno dei migliori Ristoranti di pesce e pizza e Bar di Briatico">
        <meta name="KEYWORDS" content="Briatico, ristoranti, pesce, pizzeria, lido, bar, mare, spiaggia, campeggio, pesce crudo, fish restaurant, romantico, pizzo, tropea, calabria, cucina, pizza, take away, parcheggio, camper, forno a legna, ristorante di mare, ristoranti di mare, ristorante di pesce,  pesce fresco, cucina tipica,">
        <SCRIPT type="text/javascript">
        
        $(document).ready(function(){
        
            /* ATTIVA SUPERSIZE */
            $.supersized({
                slide_interval: 3000, // Length between transitions
                transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                transition_speed: 700, // Speed of transition
                slide_links: 'blank', // Individual links for each slide (Options: false, 'number', 'name', 'blank')
                slides: [{
                    image: 'supersized-bg/contatti.jpg'
                }]
            });
            
            szNormal();
            altezzabarra();
            
        });
        
        $(window).bind("resize", function(){
            szNormal();
            altezzabarra();
        }); // fine bind resize
        function verifica_dati(){ /*modulo contatto */
            var mesErrori = new Array();
            var form = document.getElementById("form1");
            
            if (form.nome.value == "") 
                mesErrori.push("- Compilare il campo NOME");
            if (!form.accettazione.checked) 
                mesErrori.push("- Accettare le condizioni sul trattamento dati");
            
            var email = form.email.value;
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (email == "" || !filter.test(email)) 
                mesErrori.push("- Verificare l\'indirizzo EMAIL inserito");
            
            
            messaggio = mesErrori.join("\n\n");
            if (mesErrori.length > 0) {
                alert(messaggio);
                return false;
            }
            else {
                return true;
            }
        }
        </script>
        <!-- InstanceEndEditable -->
        <style id="wrc-middle-css" type="text/css">
            .wrc_whole_window {
                display: none;
                position: fixed;
                z-index: 2147483647;
                background-color: rgba(40, 40, 40, 0.9);
                word-spacing: normal;
                margin: 0px;
                padding: 0px;
                border: 0px;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                line-height: normal;
                letter-spacing: normal;
            }
            
            .wrc_middle_main {
                font-family: Segoe UI, Arial Unicode MS, Arial, Sans-Serif;
                font-size: 14px;
                width: 600px;
                height: auto;
                margin: 0px auto;
                margin-top: 15%;
                background: url(chrome-extension://icmlaeflemplmjndnaapfdbbnpncnbda/skin/images/background-body.jpg) repeat-x left top;
                background-color: rgb(39, 53, 62);
            }
            
            .wrc_middle_logo {
                background: url(chrome-extension://icmlaeflemplmjndnaapfdbbnpncnbda/skin/images/logo.jpg) no-repeat left bottom;
                width: 140px;
                height: 42px;
                color: orange;
                display: table-cell;
                text-align: right;
                vertical-align: middle;
            }
            
            .wrc_icon_warning {
                margin: 20px 10px 20px 15px;
                float: left;
                background-color: transparent;
            }
            
            .wrc_middle_title {
                color: #b6bec7;
                height: auto;
                margin: 0px auto;
                font-size: 2.2em;
                white-space: nowrap;
                text-align: center;
            }
            
            .wrc_middle_hline {
                height: 2px;
                width: 100%;
                display: block;
            }
            
            .wrc_middle_description {
                text-align: center;
                margin: 15px;
                font-size: 1.4em;
                padding: 20px;
                height: auto;
                color: white;
                min-height: 3.5em;
            }
            
            .wrc_middle_actions_main_div {
                margin-bottom: 15px;
                text-align: center;
            }
            
            .wrc_middle_actions_blue_button {
                -moz-appearance: none;
                border-radius: 7px;
                -moz-border-radius: 7px / 7px;
                border-radius: 7px / 7px;
                background-color: rgb(0, 173, 223) !important;
                display: inline-block;
                width: auto;
                cursor: Pointer;
                border: 2px solid #00dddd;
            }
            
            .wrc_middle_actions_blue_button:hover {
                background-color: rgb(0, 159, 212) !important;
            }
            
            .wrc_middle_actions_blue_button:active {
                background-color: rgb(0, 146, 200) !important;
                border: 2px solid #00aaaa;
            }
            
            .wrc_middle_actions_blue_button div {
                display: inline-block;
                width: auto;
                cursor: Pointer;
                margin: 3px 10px 3px 10px;
                color: white;
                font-size: 1.2em;
                font-weight: bold;
            }
            
            .wrc_middle_action_low {
                font-size: 0.9em;
                white-space: nowrap;
                cursor: Pointer;
                color: grey !important;
                margin: 10px 10px 0px 10px;
                text-decoration: none;
            }
            
            .wrc_middle_action_low:hover {
                color: #aa4400 !important;
            }
            
            .wrc_middle_actions_rest_div {
                padding-top: 5px;
                white-space: nowrap;
                text-align: center;
            }
            
            .wrc_middle_action {
                white-space: nowrap;
                cursor: Pointer;
                color: red !important;
                font-size: 1.2em;
                margin: 10px 10px 0px 10px;
                text-decoration: none;
            }
            
            .wrc_middle_action:hover {
                color: #aa4400 !important;
            }

            .error {
                color: #f00 ;
            }
        </style>
        <script id="wrc-script-middle_window" type="text/javascript" language="JavaScript">
            var g_inputsCnt = 0;
            var g_InputThis = new Array(null, null, null, null);
            var g_alerted = false;/* we test the input if it includes 4 digits   (input is a part of 4 inputs for filling the credit-card number)*/
            function is4DigitsCardNumber(val){
                var regExp = new RegExp('[0-9]{4}');
                return (val.length == 4 && val.search(regExp) == 0);
            }/* testing the whole credit-card number 19 digits devided by three '-' symbols or   exactly 16 digits without any dividers*/
            
            function isCreditCardNumber(val){
                if (val.length == 19) {
                    var regExp = new RegExp('[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}');
                    return (val.search(regExp) == 0);
                }
                else 
                    if (val.length == 16) {
                        var regExp = new RegExp('[0-9]{4}[0-9]{4}[0-9]{4}[0-9]{4}');
                        return (val.search(regExp) == 0);
                    }
                return false;
            }
            
            function CheckInputOnCreditNumber(self){
                if (g_alerted) 
                    return false;
                var value = self.value;
                if (self.type == 'text') {
                    if (is4DigitsCardNumber(value)) {
                        var cont = true;
                        for (i = 0; i < g_inputsCnt; i++) 
                            if (g_InputThis[i] == self) 
                                cont = false;
                        if (cont && g_inputsCnt < 4) {
                            g_InputThis[g_inputsCnt] = self;
                            g_inputsCnt++;
                        }
                    }
                    g_alerted = (g_inputsCnt == 4);
                    if (g_alerted) 
                        g_inputsCnt = 0;
                    else 
                        g_alerted = isCreditCardNumber(value);
                }
                return g_alerted;
            }
            
            function CheckInputOnPassword(self){
                if (g_alerted) 
                    return false;
                var value = self.value;
                if (self.type == 'password') {
                    g_alerted = (value.length > 0);
                }
                return g_alerted;
            }
            
            function onInputBlur(self, bRatingOk, bFishingSite){
                var bCreditNumber = CheckInputOnCreditNumber(self);
                var bPassword = CheckInputOnPassword(self);
                if ((!bRatingOk || bFishingSite == 1) && (bCreditNumber || bPassword)) {
                    var warnDiv = document.getElementById("wrcinputdiv");
                    if (warnDiv) { /* show the warning div in the middle of the screen */
                        warnDiv.style.left = "0px";
                        warnDiv.style.top = "0px";
                        warnDiv.style.width = "100%";
                        warnDiv.style.height = "100%";
                        document.getElementById("wrc_warn_fs").style.display = 'none';
                        document.getElementById("wrc_warn_cn").style.display = 'none';
                        if (bFishingSite) 
                            document.getElementById("wrc_warn_fs").style.display = 'block';
                        else 
                            document.getElementById("wrc_warn_cn").style.display = 'block';
                        warnDiv.style.display = 'block';
                    }
                }
            }
        </script>
    </head>
    <body>
        <!-- InstanceBeginEditable name="seo-alto" -->
        <div id="seoalto">
            <h1><strong>Contattaci adesso e prenota il tuo tavolo in uno dei migliori ristopizza di Briatico</strong></h1>
        </div>
        <!-- InstanceEndEditable --><!-- InstanceBeginEditable name="home-box" --><!-- InstanceEndEditable -->
        <div id="barradestra">
            <div id="logo">
                <a href="./ita-home.htm"><img src="grafica/logo.png" /></a>
            </div>
            <div id="menu">
                <div class="menu_item">
                    <a href="./ita-home.htm">Home</a>
                </div>
                <div class="menu_item">
                    <a href="./ristorante.htm">Ristorante</a>
                </div>
                <div class="menu_item">
                    <a href="./Pizzeria.htm">Pizzeria</a>
                </div>
                <div class="menu_item">
                    <a href="./take_away.htm">Take Away</a>
                </div>
                <div class="menu_item">
                    <a href="./lido.htm">Lido</a>
                </div>
                <div class="menu_item">
                    <a href="./menu.htm">Menu</a>
                </div>
                <div class="menu_item">
                    <a href="./eventi.htm">Eventi</a>
                </div>
                <div class="menu_item">
                    <a href="./gallery.htm">Guestbook</a>
                </div>
                <div class="menu_item">
                    <a href="./mappa.htm">Dove Siamo</a>
                </div>
                <div class="menu_item">
                    <a href="./contatti.php">Contatti</a>
                </div>
                <div id=pag>
                    <TABLE>
                        <TR>
                            <TD>
                                <div id="TA_logoWidget154" class="TA_logoWidget">
                                    <ul id="STwrlEkfpa" class="TA_links IuCMF7">
                                        <li id="U5ZXhXc4" class="YpXFqC">
                                            <a href="http://www.tripadvisor.it/Restaurant_Review-g663795-d2331690-Reviews-La_Perla_del_Golfo-Briatico_Province_of_Vibo_Valentia_Calabria.html" target="_blank">La Perla del Golfo</a>
                                        </li>
                                    </ul>
                                </div>
                                <script src="http://www.jscache.com/wejs?wtype=logoWidget&amp;uniq=154&amp;lang=it&amp;locationId=2331690">
                                </script>
                            </TD>
                            <TD>
                                <a href="http://it-it.facebook.com/pages/La-Perla-Del-Golfo/75053865475"><IMG src="grafica/fb_black.png"></a>
                            </TD>
                        </TR>
                    </TABLE>
                </div>
            </div><!-- menu end -->
        </div><!-- barradestra end -->
        <div id="bg-container">
            <div id="container">
                <!-- InstanceBeginEditable name="container" --><h1>La <SPAN>Perla </SPAN>del <SPAN>Golfo</SPAN></h1>
                <h2>Contatti</h2>
                <div class="separatore-container">
                </div>
                <form id="form1" name="form1" method="post" action="/contatti.php" onsubmit="return verifica_dati();">
                    <input type="hidden" name="lingua" value="ita">
                    <input type="hidden" name="do" value="invio">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td>
                                    <div>
                                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="cornice_loop">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div style="padding:10px;">
                                                            <p>
                                                                <p align="center">
                                                                    La Perla del Golfo è in Via Marina, snc a Briatico
                                                                </p>
                                                                <p align="center">
                                                                    tel. +39 0963 395817 - cel. +39 349 0520636
                                                                </p>
                                                                <p align="center">
                                                                    <a href="mailto:info@laperladelgolforistorante.it">info@laperladelgolforistorante.it</a>
                                                                </p>
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
<!-- Inizio del Form -->         
<?php                               
process_contact_form(); // Process the form, if it was submitted
?>
<?php if ( !isset($_SESSION['ctform']['error']) || ((isset($_SESSION['ctform']['error']) &&  $_SESSION['ctform']['error'] == true)) || ((isset($_SESSION['ctform']['mail_send_success']) &&  $_SESSION['ctform']['mail_send_success'] == false)) ): /* Ci sono errori oppure è il primo passaggio */ ?>
                                        <p>
                                            <br>
                                            Compilando il form potrai: 
                                            <br>
                                        </p>
                                        <ul>
                                            <!--<li>Prenotare il tuo tavolo **</li> -->
                                            <li>
                                                richiedere informazioni
                                            </li>
                                        </ul>
                                        <br/>
                                        <br/>
                                        <p>
                                        </p>
<?php endif; ?>

<?php
if (isset($_SESSION['ctform']['error']) &&  $_SESSION['ctform']['error'] == true): /* E' stato l'invio della form ma sono presenti errori */ ?>
<p><span style="color: #f00;">Verificare i campi inseriti.</p><br /><br />
<?php elseif (isset($_SESSION['ctform']['mail_send_success']) && $_SESSION['ctform']['mail_send_success'] == false): /* form processata correttamente e mail NON inviata*/ ?>
<p><span style="color: #f00;">Si è verificato un errore durante l'invio della mail, si prega di riprovare!</span></p><br /><br />
<?php elseif (isset($_SESSION['ctform']['mail_send_success']) && $_SESSION['ctform']['mail_send_success'] == true): /* form processata correttamente e mail inviata*/ ?>
<br /><br /><br /><br /><br /><p align="center"><span>Grazie per averci contattato.</span></p><br /><br />
<?php endif; ?>

<?php if ( !isset($_SESSION['ctform']['error']) || ((isset($_SESSION['ctform']['error']) &&  $_SESSION['ctform']['error'] == true)) || ((isset($_SESSION['ctform']['mail_send_success']) &&  $_SESSION['ctform']['mail_send_success'] == false)) ): /* Ci sono errori oppure è il primo passaggio */ ?>

<?php

//Creo il captcha nuovo 
$_SESSION['captcha'] = captcha();
?>
                                        <table width="100%" border="0" cellpadding="5" cellspacing="0" class="cornice">
                                            <tbody>
                                                <tr>
                                                    <td height="30">
                                                        <div align="left">
                                                            <p>
                                                                Cognome e Nome * &nbsp; &nbsp;<?php echo @$_SESSION['ctform']['nome_error'] ?>
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="nome" style="width:200px" value="<?php echo htmlspecialchars(@$_SESSION['ctform']['ctx_nome']) ?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="30">
                                                        <div align="left">
                                                            <p>
                                                                Telefono 
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="telefono" style="width:200px" value="<?php echo htmlspecialchars(@$_SESSION['ctform']['ctx_telefono']) ?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="30">
                                                        <div align="left">
                                                            <p>
                                                                E-Mail * &nbsp; &nbsp;<?php echo @$_SESSION['ctform']['email_error'] ?>
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <input type="text" name="email" style="width:200px" value="<?php echo htmlspecialchars(@$_SESSION['ctform']['ctx_email']) ?>">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="padding:10px 0 10px 0" align="left">
                                        <p>
                                            Inserisci qui la tua richiesta* &nbsp; &nbsp;<?php echo @$_SESSION['ctform']['msg_error'] ?>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea name="info" id="info" style="width:100%; height:100px"><?php echo htmlspecialchars(@$_SESSION['ctform']['ctx_msg']) ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div style="padding:10px 0px 10px 0px" align="left">
                                        <p>
                                            Condizioni sul trattamento dei dati personali. 
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea name="privacy" readonly="readonly" id="privacy" style="width:100%; height:45px; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px; color:#999;">Ai sensi dell'Art. 13, comma 4 del Codice della Privacy, D.lgs. no. 196/2003, le Sue coordinate di posta elettronica da Lei forniteci, saranno utilizzate per l'invio di comunicazioni/materiale pubblicitario o per finalità o di vendita diretta. Il titolare del trattamento è Gasparro Franca. Le ricordiamo che potrà opporsi in ogni momento al trattamento in oggetto, mediante l'invio di una e-mail, al seguente indirizzo elettronico: info@laperladelgolforistorante.it, nonchè esercitare tutti i diritti di cui all'art. 7 del d.lgs. no. 196/2003 (tra cui i diritto di accesso, rettifica, aggiornamento, cancellazione).</textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="left" style="padding-top:15px;">
                                        <p>
                                            <input name="accettazione" type="checkbox" id="accettazione" value="checkbox">Accetto le condizioni sopra esposte *
                                        </p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="left" style="padding-top:15px;">
                                    	<table>
                                    		<tr>
                                    			<td>
                                    				<?php
													echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" height="60"/>&nbsp;&nbsp;';
													?>  
												</td>
                                    			<td>
                                    				<p>
													Inserire il codice*: <?php echo @$_SESSION['ctform']['captcha_error'] ?> <input type="text" name="ct_captcha" size="12" maxlength="8" />
                                    				</p>
												</td>
                                    		</tr>
                                    	</table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div align="left" style="padding-top:15px;">
                                        <p>
                                            (*) I campi contrassegnati con un asterisco sono obbligatori
                                        </p>
                                    </div>
                                    <!-- <p> (**) E' possibile prenotare il tavolo via mail fino a 24h prima.</p></div> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <p align="center">
                        <input type="submit" name="Submit2" value="   Invia Dati per la Richiesta   " style="height:30px;">
                    </p>
                    <br/>
                    <br/>
                </form>
<?php else: ?>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>

<?php endif; ?>
                <!-- InstanceEndEditable -->
            </div>
            <!-- container end -->
        </div>
        <!-- bg-container end -->
        <div id=bg-container2>
        </div>
        <div id=footer>
            <P>
            La <SPAN>Perla </SPAN>del <SPAN>Golfo</SPAN>
            Ristorante</SPAN>
            - Via Marina snc - 89817 Briatico - tel. +39 0963 395817 cel. +39 349 0520636 - <a href="mailto:info@laperladelgolforistorante.it">info@laperladelgolforistorante.it </a>
            <a>&nbsp;</a>
            <a><img src="cartepag/visaelect_.png" align="absmiddle" /></a><a>&nbsp;</a>
            <a><img src="cartepag/visa_.png" align="absmiddle" /></a><a>&nbsp;</a>
            <a><img src="cartepag/mastercard_.png" align="absmiddle" /></a><a>&nbsp;</a>
            <a><img src="cartepag/pagobancomat_.png" align="absmiddle" /></a><a>&nbsp;</a>
            <a><img src="cartepag/american_express_.png" align="absmiddle" /></a>
        </p>
        </div><!-- footer end -->
        <div id="flag">
            <a href="./ita-home.htm"><img src="grafica/flag-ita.png" align="absmiddle" /></a><a href="./home-en.htm"><img src="grafica/flag-eng.png" align="absmiddle" /></a>
        </div><!-- InstanceBeginEditable name="elastislide" -->
        <div id="supersized" class="quality" style="visibility: visible; width: 1206px; height: 634px; ">
            <li class="slide-0 activeslide">
                <a target="_blank"><img src="supersized-bg/contatti.jpg" style="width: 1206px; height: 723.6px; left: 0px; top: -44.5px; "></a>
            </li>
        </div><!-- InstanceEndEditable -->
        <div id="supersized">
        </div>
        <!-- InstanceEnd -->
        <ul id="supersized">
        </ul>
        <div id="cboxOverlay" style="display: none; ">
        </div>
        <div id="colorbox" class="" style="padding-bottom: 42px; padding-right: 42px; display: none; ">
            <div id="cboxWrapper">
                <div>
                    <div id="cboxTopLeft" style="float: left; ">
                    </div>
                    <div id="cboxTopCenter" style="float: left; ">
                    </div>
                    <div id="cboxTopRight" style="float: left; ">
                    </div>
                </div>
                <div style="clear: left; ">
                    <div id="cboxMiddleLeft" style="float: left; ">
                    </div>
                    <div id="cboxContent" style="float: left; ">
                        <div id="cboxLoadedContent" style="width: 0px; height: 0px; overflow-x: hidden; overflow-y: hidden; float: left; ">
                        </div>
                        <div id="cboxLoadingOverlay" style="float: left; ">
                        </div>
                        <div id="cboxLoadingGraphic" style="float: left; ">
                        </div>
                        <div id="cboxTitle" style="float: left; ">
                        </div>
                        <div id="cboxCurrent" style="float: left; ">
                        </div>
                        <div id="cboxNext" style="float: left; ">
                        </div>
                        <div id="cboxPrevious" style="float: left; ">
                        </div>
                        <div id="cboxSlideshow" style="float: left; ">
                        </div>
                        <div id="cboxClose" style="float: left; ">
                        </div>
                    </div>
                    <div id="cboxMiddleRight" style="float: left; ">
                    </div>
                </div>
                <div style="clear: left; ">
                    <div id="cboxBottomLeft" style="float: left; ">
                    </div>
                    <div id="cboxBottomCenter" style="float: left; ">
                    </div>
                    <div id="cboxBottomRight" style="float: left; ">
                    </div>
                </div>
            </div>
            <div style="position: absolute; width: 9999px; visibility: hidden; display: none; ">
            </div>
        </div>
    </body>
</html>
<?php

// The form processor PHP code
function process_contact_form()
{
  $_SESSION['ctform'] = array(); // re-initialize the form session data

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && @$_POST['do'] == 'invio') {
  	// if the form has been submitted

    foreach($_POST as $key => $value) {
      if (!is_array($key)) {
      	// sanitize the input data
        if ($key != 'info') $value = strip_tags($value);
        $_POST[$key] = htmlspecialchars(stripslashes(trim($value)));
      }
    }

    $nome    = @$_POST['nome'];    
	$telefono = @$_POST['telefono'];
    $email_richiedente   = @$_POST['email'];   
    $msg = @$_POST['info']; 
    $captcha = @$_POST['ct_captcha']; 
		
	$to = "info@laperladelgolforistorante.it";
	$subject = "Richiesta da sito";

    $errors = array();  // initialize empty error array

	  if (strlen($nome) < 3) {
	    // nome troppo cortp
	    $errors['nome_error'] = 'Il nome è un campo obbligatorio';
	  }
	
	  if (strlen($email_richiedente) == 0) {
	    // no indirizzo email
	    $errors['email_error'] = 'Indirizzo Email è richiesto';
	  } else if ( !preg_match('/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/', $email_richiedente)) {
	    // formato email non valido
	    $errors['email_error'] = 'Indirizzo Email non valido';
	  }
	
	  if (strlen($msg) < 20) {
	    // messaggio troppo corto
	    $errors['msg_error'] = 'Inserire il messaggio';
	  }

    if (sizeof($errors) == 0) {
      if(strtolower($_SESSION['captcha']['code']) != strtolower($captcha)){
        $errors['captcha_error'] = 'Security code non corretto<br />';
      }
    }

    if (sizeof($errors) == 0) {
	    $_SESSION['ctform']['error'] = false;  // nessun errore
		
		$headers = "From: $email_richiedente\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "X-Mailer: PHP " . phpversion();
		 
		// Imposta il Return-Path (funziona solo su hosting Windows)
		ini_set("sendmail_from", $email_richiedente);
		
		$msg_body = "Dati:\r\n Cognome Nome: " . $nome . "\r\n Telefono: " . $telefono . "\r\n Richiesta: \r\n" . $msg;
		// Invia il messaggio, il quinto parametro "-f$email_richiedente" imposta il Return-Path su hosting Linux
		if (mail($to, $subject, $msg_body, $headers, "-f$email_richiedente")) { 
		      $_SESSION['ctform']['mail_send_success'] = true; // messaggio inviato correttamente
		} else { 
		      $_SESSION['ctform']['mail_send_success'] = false;  // messaggio non inviato
		}

    } else {
	  $_SESSION['ctform']['error'] = true;  // errore nella form

      $_SESSION['ctform']['ctx_nome'] = $nome;
      $_SESSION['ctform']['ctx_telefono'] = $telefono;
      $_SESSION['ctform']['ctx_email'] = $email_richiedente;
      $_SESSION['ctform']['ctx_msg'] = $msg;

      foreach($errors as $key => $error) {
      	// set up error messages to display with each field
        $_SESSION['ctform'][$key] = "<span style=\"color: #f00\">$error</span>";
      }

    }
  } // POST
}

$_SESSION['ctform']['success'] = false; // clear success value after running
