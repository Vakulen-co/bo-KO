<?php 
include_once 'config.php'; 
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <base href="<?php echo $base ?>">
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin Bank</title>

    <link href="images/favicon.png" rel="shortcut icon" type="image/png">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/checkbox-svg.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <style>
        @media screen and (max-width: 768px) {
            .container .row .confirm-text_links {
                max-width: 100%;
                margin-left: 0;
                width: 100%;
                flex: auto;
            }
            section {
                overflow: hidden;
            }
            .privacy-checkbox {
                color: #fff;
            }
        }

        .form-block-2.whitee .checkboxStle {
            margin-top: 55px;
        }

        #myform2 .btn-popup {
            bottom: 75px;
        }
    </style>

    <style type="text/css">
        /* basic form style */

        .ainvesting .eu-trading-involves,
        .mtm-6 .eu-trading-involves {
            display: none;
        }

        .custom-dropdown {
            display: none !important;
        }

        .zr_rest .btnCancel {
            width: 300px;
            text-align: left;
        }

        .rtl .zr_rest .btnCancel {
            direction: ltr;
        }

        .el #bottom_form .submit_btn {
            font-size: 18px;
        }

        .rtl option {
            direction: ltr;
        }

        .rtl select:-moz-locale-dir(ltr) {
            direction: ltr;
            text-align: right;
            padding-right: 5px;
        }

        #bottom_form .submit_btn_wrapper {
            width: 100%;
            margin: auto;
        }

        .agree_wrapper {
            padding-left: 15px;
            padding-right: 15px;
        }

        .iagree_input.error+.agreeToTerms,
        .agreeTerms.error+.iagree,
        .iagree_input.error+.iagree,
        .agreeTerms.error+.agreeToTerms {
            border: 2px solid red;
        }

        .rtl .agree_wrapper {
            float: right;
        }

        #bottom_form .short_disclaimer {
            padding-right: 15px;
            float: left !important;
            padding-left: 15px;
        }

        #bottom_form .col-md-4.short_disclaimer {
            float: right !important;
        }

        .styled-select select {
            -webkit-appearance: none;
            border: 1px solid #CCC;
            background: transparent;
            -webkit-text-fill-color: grey;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
        }

        .styled-select select:focus {
            box-shadow: none;
            outline: none;
        }

        .styled-select {
            background: url(arrow_down.png) no-repeat right 7px #fff;
            margin: 5px 0;
            height: 40px;
            line-height: 31px;
            font-size: 14px;
            border-radius: 4px;
        }

        .flags_form .countryWithPhone {
            border: 1px solid #ccc;
            position: relative;
            float: left;
            height: 40px;
            margin-top: 5px;
            width: 100%;
            border-radius: 5px;
            background: white;
        }

        .flags_form .styled-select {
            background: none !important;
            width: 100%;
            height: auto;
            margin: 3px 0;
            float: left;
        }

        .flags_form .fields_wrapper {
            top: 20px;
            position: relative;
        }

        .flags_form #phoneNumber {
            width: 150px;
            border: none;
            height: auto;
            float: left;
            box-shadow: none;
            position: absolute;
            left: 80px;
        }

        .rtl .flags_form #phoneNumber {
            left: 45px;
            direction: ltr;
        }

        .flags_form .top {
            margin: 20px 0 10px 0px;
        }

        .flags_form .before_code {
            position: absolute;
            left: 45px;
            z-index: 99;
            line-height: 36px;
        }

        .rtl .flags_form .before_code {
            left: 7px;
            direction: ltr;
            font-size: 14px;
            width: 16px;
        }

        .flags_form #countryCode {
            width: 50px;
            border: none;
            height: auto;
            float: left;
            box-shadow: none;
            position: absolute;
            left: 50px;
        }

        .rtl .flags_form #countryCode {
            float: right;
            left: 15px;
            z-index: 99;
            width: 36px;
            margin: 0;
            margin-top: 9px;
            padding: 0;
            direction: ltr;
        }

        .rtl .styled-select {
            background: url(arrow_down.png) no-repeat 3px 7px #fff;
            margin: 5px 0;
            height: 40px;
            line-height: 31px;
            font-size: 14px;
            border-radius: 4px;
        }

        .styled-select select::-ms-expand {
            display: none;
        }

        @media (max-width: 800px) {
            .exit_popup {
                display: none !important;
            }
        }

        @media (max-width: 800px) {
            #bottom_form .short_disclaimer {
                float: left !important;
            }
            #bottom_form .submit_btn {
                background-size: contain !important;
            }
            .flags_form .submit_btn {
                background-size: contain !important;
                margin-top: 25px;
            }
        }

        #bottom_form .submit_btn {
            width: 100%;
            height: 60px;
            top: 10px;
            position: relative;
            padding: 0px;
            font-size: 20px;
            border-radius: 4px;
            margin: 5px 0 10px;
        }

        .flags_form .submit_btn {
            top: 10px;
        }

        .de #bottom_form .submit_btn {
            font-size: 18px;
        }

        #bottom_form label {
            margin: 0;
        }

        #bottom_form select {
            font-size: 14px !important;
            width: 100%;
            height: 40px;
            color: grey;
        }

        #bottom_form select.form_elem_countryId {
            padding-left: 5px;
            -moz-padding-start: 0px;
        }

        #exitForm select.form_elem_countryIdExitForm {
            padding-left: 5px;
            -moz-padding-start: 2px;
        }

        #bottom_form input {
            height: 40px;
            margin: 5px 0;
            padding: 0.375em;
            width: 100%;
            background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0));
            border: 1px solid #eaeaea;
            border: 1px solid rgba(51, 51, 51, 0.1);
            color: #707070;
            hyphens: none;
            line-height: normal;
            background-color: #f7f7f7;
            border-radius: 0;
            font-size: 16px;
            line-height: 1.5;
            max-width: 100%;
            vertical-align: baseline;
            font-family: "Noto Serif", serif;
            box-sizing: inherit;
        }

        input:focus,
        textarea:focus {
            background-color: #fff;
            border: 1px solid rgba(51, 51, 51, 0.3);
            color: #333;
        }

        #bottom_form input.iagree_input {
            margin: 0;
        }

        #bottom_form input::-webkit-input-placeholder {
            color: grey;
        }

        #bottom_form input:-moz-placeholder {
            /* Firefox 18- */
            color: grey;
        }

        #bottom_form input::-moz-placeholder {
            /* Firefox 19+ */
            color: grey;
        }

        #bottom_form input:-ms-input-placeholder {
            color: grey;
        }

        #bottom_form select::-webkit-input-placeholder {
            color: grey;
        }

        #bottom_form select:-moz-placeholder {
            /* Firefox 18- */
            color: grey;
        }

        #bottom_form select::-moz-placeholder {
            /* Firefox 19+ */
            color: grey;
        }

        #bottom_form select:-ms-input-placeholder {
            color: grey;
        }

        #bottom_form .form_wrapper {
            width: 100%;
            position: relative;
            float: left;
        }

        #bottom_form .form_elem_countryCode {
            width: 22%;
        }

        #bottom_form .areaCode {
            width: 22%;
        }

        .rtl #bottom_form .form_elem_countryCode,
        .rtl #bottom_form .areaCode {
            float: left;
        }

        #customerLeadEmail {
            color: #555 !important;
        }

        #bottom_form #phoneNumber {
            width: 75%;
            float: right;
        }

        #bottom_form .top {
            margin: 10px 0;
        }

        #bottom_form div.short_disclaimer .eu-trading-involves {
            float: right;
        }

        @media (max-width: 979px) {
            #bottom_form div.short_disclaimer .eu-trading-involves {
                float: left;
            }
            #restricted_country .inner {
                top: 20px !important;
            }
        }

        /* popup_box Styles*/

        #restricted_country {
            display: none;
            /* Hide the DIV */
            position: fixed;
            height: 100%;
            width: 100%;
            background: #000000;
            left: 0;
            opacity: 0.95;
            z-index: 9999999;
            top: 0;
        }

        #restricted_country .inner_wrapper {
            position: relative;
            width: 700px;
            margin: auto;
            height: auto;
            max-width: 100%;
        }

        #restricted_country .inner {
            margin: auto;
            width: 700px;
            height: auto;
            padding: 10px;
            background: white;
            top: 100px;
            border-radius: 4px;
            max-width: 100%;
            position: relative;
            color: black;
            float: left;
        }

        /* popup_terms popup_box Styles*/

        #popup_terms {
            display: none;
            /* Hide the DIV */
            position: fixed;
            height: 100%;
            width: 100%;
            background: #000000;
            left: 0;
            opacity: 0.95;
            z-index: 9999999;
            top: 0;
        }

        #popup_terms .inner_wrapper {
            position: relative;
            width: 700px;
            margin: auto;
            height: auto;
            max-width: 100%;
        }

        #popup_terms .inner {
            margin: auto;
            width: 700px;
            height: auto;
            padding: 10px;
            background: white;
            top: 100px;
            border-radius: 4px;
            max-width: 100%;
            position: relative;
            color: black;
            float: left;
        }

        /* MTM popup_box Styles*/

        #mtm_popup {
            display: none;
        }

        .page-template-live_text_template #bottom_form .form_wrapper.mtm_form #phoneNumber {
            width: 100%;
        }

        .pnlRestrButtons {
            margin-top: 30px;
        }

        .btnApprove {
            float: right !important;
        }

        .page-template-live_text_template.rtl .top.row div {
            float: right !important;
            text-align: right;
        }

        @media(max-width:990px) {
            .flags_form .fields_wrapper {
                margin-bottom: 20px;
            }
        }

        #side_form .flags_form .fields_wrapper {
            margin-bottom: 20px;
        }

        #bottom_form .flags_form #phoneNumber {
            background: transparent;
            width: 130px;
        }

        #side_form .flags_form #phoneNumber {
            background: transparent;
            width: 170px;
        }

        .whiteLabel_form #phoneNumber {
            width: 100% !important;
        }


        /* exit form style */

        .exit_popup,
        .custom_exit_popup {
            width: 100%;
            position: fixed;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            left: 0;
            z-index: 99999;
            top: 0;
            display: none;
        }

        .inner_exitpopup,
        .inner_custom_exit_popup {
            background-repeat: no-repeat;
            width: 700px;
            margin: auto;
            top: 100px;
            height: 500px;
            position: relative;
        }

        .inner_custom_exit_popup {
            background-color: #fff;
            max-width: 100%;
        }

        #exitForm {
            width: 250px;
            float: right;
            position: relative;
            top: 140px;
            right: 20px;
        }

        .rtl #exitForm {
            width: 250px;
            float: left;
            position: relative;
            top: 120px;
            right: auto;
            left: 20px;
        }

        form#exitForm input,
        form#exitForm select {
            width: 100%;
            border-radius: 3px;
            height: 25px;
            line-height: normal;
            margin: 0;
            -webkit-text-fill-color: #aaa;
        }

        #exitForm .styled-select {
            margin: 0;
            height: auto;
            line-height: normal;
            background: url(arrow_down.png) no-repeat right 0px #fff;
            line-height: normal;
        }

        .rtl #exitForm .styled-select {
            background: url(arrow_down.png) no-repeat left 0px #fff;
        }

        form#exitForm input#emailOpt {
            width: 15px;
            margin: 0;
        }

        form#exitForm input#sendDataExitForm {
            height: auto;
            -webkit-text-fill-color: inherit;
            font-size: 18px;
        }

        form#exitForm span.error {
            font-size: 11px;
            color: red;
        }

        form#exitForm label {
            font-size: 11px;
            color: red;
        }

        .closeExitPopup {
            position: absolute;
            top: -28px;
            color: #fff;
            right: 0;
            font-size: 18px;
            cursor: pointer;
        }

        .rtl .closeExitPopup {
            right: auto;
            left: 0;
        }

        span.popup_terms_link {
            color: #08c;
            cursor: pointer;
        }

        span.popup_terms_link:hover {
            text-decoration: underline;
        }

        #bottom_form .form_wrapper.short_form {
            padding-top: 30px;
        }

        #bottom_form .form_wrapper.short_form .submit_btn {
            top: -10px;
        }

        @media(max-width:990px) {
            #bottom_form .form_wrapper.short_form .submit_btn {
                top: 0 !important;
                margin: 10px 0;
            }
        }

        @media(min-width:990px) {
            .livetext_form .flags_form.sideFlagsForm .submit_btn {
                margin-top: 23px !important;
            }
        }

        span.close_popup {
            cursor: pointer;
            font-size: 18px;
            border: 1px solid #000;
            border-radius: 5px;
            padding: 5px 8px;
        }

        span.eu-trading-involves span {
            font-size: 10px !important;
            font-weight: 600;
        }

        /* error validations */

        span.error {
            position: relative;
            top: -15px;
            background: #f5e9ce;
            padding: 6px;
            border: 1px #5b5b5b;
            word-wrap: normal;
            border-style: dashed;
            z-index: 9999;
            display: table-cell;
        }

        span#countryCode-error {
            top: 15px;
        }

        span#agreeToBeContacted-error {
            top: 0px;
            color: red !important;
        }

        .form_wrapper label {
            height: 0;
            display: inline;
        }

        #side_form .areaCode {
            width: 22%;
        }

        body.xtrade #restricted_country {
            /* only xt popup */
            background: rgba(228, 228, 228, 0.5);
            opacity: 1;
        }

        .xtrade #restricted_country .pnlRestrButtons a,
        .xtrade #restricted_country .pnlRestrButtons span,
        .xtrade #restricted_country .pnlRestrButtons a:hover,
        .xtrade #restricted_country .pnlRestrButtons span:hover {
            /*only affect xt popup */
            background: #0ac8ff;
            border-radius: 0px;
            border: none;
            box-shadow: 2px 2px 2px #ababab;
        }

        body.xtrade #restricted_country .inner strong,
        body.xtrade #restricted_country .inner b {
            /* only xt popup */
            color: #0b0051;
        }

        body.xtrade #restricted_country .inner {
            /* only xt popup */
            border-radius: 0px;
            border: 1px solid #051229;
            color: #051229;
        }

        #bottom_form .nocountry #phoneNumber {
            width: 100%;
        }

        #side_form .nocountry #phoneNumber {
            width: 100%;
        }

        #bottom_form span#iagree_input-error {
            color: red !important;
        }

        #bottom_form span#agreeTerms-error {
            top: 0px;
        }


        .termsAgreeCol {
            line-height: 15px;
            padding-left: 0;
            float: left;
        }

        #side_form .termsAgreeCol {
            margin-top: 10px;
        }

        #side_form .termsAgreeCol #agreeToBeContacted {
            margin-bottom: 0px;
        }

        .fullwidth-bottomForm span.areaCodePend {
            display: none;
        }

        .buttonReg {
            width: 100%;
            height: 60px;
            top: 10px;
            position: relative;
            padding: 0px;
            border-radius: 4px;
            margin: 5px 0 20px;
            background-size: contain !important;
            -webkit-appearance: button;
            background-color: #333;
            border: 0;
            color: #fff;
            cursor: pointer;
            font-family: "Noto Sans", sans-serif;
            font-size: 12px;
            font-size: 18px;
            font-weight: 700;
            padding: 0.7917em 1.5em;
            max-width: 100%;
            vertical-align: baseline;
        }

        #email-error-valid-msg {
            left: 10%;
        }

        .agent {
            height: 0px !important;
            padding: 0px !important;
            line-height: 0px !important;
            border: 0px !important;
        }

        .error-block {
            display: inline;
            color: red;
            position: absolute;
            z-index: 100;
            text-align: left;
            font-size: 13px;
            padding: 0px 10px;
            line-height: 2.5em;
            background-color: #f1f1e9;
            border: 1px solid #000;
            border-radius: 25px;
            -webkit-box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            -moz-box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            top: 100%;
            left: 25%;
        }

        .error-block::before,
        .error-block::after {
            content: '';
            position: absolute;
            left: 23px;
            top: -15px;
            border: 5px solid transparent;
            border-bottom: 10px solid #000;
        }

        .error-block::after {
            border-bottom: 10px solid #f1f1e9;
            bottom: 60px;
        }

        .iti__flag-container {
            right: 120%;
        }

        .iti__flag {
            background-image: url("telcountry/build/img/flags.png");
        }

        @media (-webkit-min-device-pixel-ratio: 2),
        (min-resolution: 192dpi) {
            .iti__flag {
                background-image: url("telcountry/build/img/flags@2x.png");
            }
        }

        .error-msag {
            display: inline;
            color: red;
            position: absolute;
            font-size: 13px;
            z-index: 100;
            padding: 0px 10px;
            line-height: 2.5em;
            background-color: #f1f1e9;
            border: 1px solid #000;
            border-radius: 25px;
            -webkit-box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            -moz-box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            top: 100%;
            left: 0%;
            text-align: right;
        }



        .error-msag::before,
        .error-msag::after {
            content: '';
            position: absolute;
            left: 23px;
            top: -15px;
            border: 5px solid transparent;
            border-bottom: 10px solid #000;
        }

        .error-msag::after {
            border-bottom: 10px solid #ecece4;
            bottom: 110%;
        }

        .valid-msag {
            color: #00C900;
            display: inline;
            position: absolute;
            font-size: 100%;
            z-index: 100;
            text-align: left;
            padding: 0px 10px;
            line-height: 2.5em;
            background-color: #f1f1e9;
            border: 1px solid #000;
            border-radius: 25px;
            -webkit-box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            -moz-box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            top: 100%;
            left: 20%;
        }

        input.error {
            border: 1px solid #FF7C7C;
        }

        .hide {
            display: none;
        }

        .cssload-thecube {
            width: 73px;
            height: 73px;
            margin: 0 auto;
            margin-top: 49px;
            position: relative;
            transform: rotateZ(45deg);
            -o-transform: rotateZ(45deg);
            -ms-transform: rotateZ(45deg);
            -webkit-transform: rotateZ(45deg);
            -moz-transform: rotateZ(45deg);
        }

        .cssload-thecube .cssload-cube {
            position: relative;
            transform: rotateZ(45deg);
            -o-transform: rotateZ(45deg);
            -ms-transform: rotateZ(45deg);
            -webkit-transform: rotateZ(45deg);
            -moz-transform: rotateZ(45deg);
        }

        .cssload-thecube .cssload-cube {
            float: left;
            width: 50%;
            height: 50%;
            position: relative;
            transform: scale(1.1);
            -o-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
        }

        .cssload-thecube .cssload-cube:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgb(43, 160, 199);
            animation: cssload-fold-thecube 2.76s infinite linear both;
            -o-animation: cssload-fold-thecube 2.76s infinite linear both;
            -ms-animation: cssload-fold-thecube 2.76s infinite linear both;
            -webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
            -moz-animation: cssload-fold-thecube 2.76s infinite linear both;
            transform-origin: 100% 100%;
            -o-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            -webkit-transform-origin: 100% 100%;
            -moz-transform-origin: 100% 100%;
        }

        .cssload-thecube .cssload-c2 {
            transform: scale(1.1) rotateZ(90deg);
            -o-transform: scale(1.1) rotateZ(90deg);
            -ms-transform: scale(1.1) rotateZ(90deg);
            -webkit-transform: scale(1.1) rotateZ(90deg);
            -moz-transform: scale(1.1) rotateZ(90deg);
        }

        .cssload-thecube .cssload-c3 {
            transform: scale(1.1) rotateZ(180deg);
            -o-transform: scale(1.1) rotateZ(180deg);
            -ms-transform: scale(1.1) rotateZ(180deg);
            -webkit-transform: scale(1.1) rotateZ(180deg);
            -moz-transform: scale(1.1) rotateZ(180deg);
        }

        .cssload-thecube .cssload-c4 {
            transform: scale(1.1) rotateZ(270deg);
            -o-transform: scale(1.1) rotateZ(270deg);
            -ms-transform: scale(1.1) rotateZ(270deg);
            -webkit-transform: scale(1.1) rotateZ(270deg);
            -moz-transform: scale(1.1) rotateZ(270deg);
        }

        .cssload-thecube .cssload-c2:before {
            animation-delay: 0.35s;
            -o-animation-delay: 0.35s;
            -ms-animation-delay: 0.35s;
            -webkit-animation-delay: 0.35s;
            -moz-animation-delay: 0.35s;
        }

        .cssload-thecube .cssload-c3:before {
            animation-delay: 0.69s;
            -o-animation-delay: 0.69s;
            -ms-animation-delay: 0.69s;
            -webkit-animation-delay: 0.69s;
            -moz-animation-delay: 0.69s;
        }

        .cssload-thecube .cssload-c4:before {
            animation-delay: 1.04s;
            -o-animation-delay: 1.04s;
            -ms-animation-delay: 1.04s;
            -webkit-animation-delay: 1.04s;
            -moz-animation-delay: 1.04s;
        }

        @keyframes cssload-fold-thecube {
            0%,
            10% {
                transform: perspective(136px) rotateX(-180deg);
                opacity: 0;
            }
            25%,
            75% {
                transform: perspective(136px) rotateX(0deg);
                opacity: 1;
            }
            90%,
            100% {
                transform: perspective(136px) rotateY(180deg);
                opacity: 0;
            }
        }

        @-o-keyframes cssload-fold-thecube {
            0%,
            10% {
                -o-transform: perspective(136px) rotateX(-180deg);
                opacity: 0;
            }
            25%,
            75% {
                -o-transform: perspective(136px) rotateX(0deg);
                opacity: 1;
            }
            90%,
            100% {
                -o-transform: perspective(136px) rotateY(180deg);
                opacity: 0;
            }
        }

        @-ms-keyframes cssload-fold-thecube {
            0%,
            10% {
                -ms-transform: perspective(136px) rotateX(-180deg);
                opacity: 0;
            }
            25%,
            75% {
                -ms-transform: perspective(136px) rotateX(0deg);
                opacity: 1;
            }
            90%,
            100% {
                -ms-transform: perspective(136px) rotateY(180deg);
                opacity: 0;
            }
        }

        @-webkit-keyframes cssload-fold-thecube {
            0%,
            10% {
                -webkit-transform: perspective(136px) rotateX(-180deg);
                opacity: 0;
            }
            25%,
            75% {
                -webkit-transform: perspective(136px) rotateX(0deg);
                opacity: 1;
            }
            90%,
            100% {
                -webkit-transform: perspective(136px) rotateY(180deg);
                opacity: 0;
            }
        }

        @-moz-keyframes cssload-fold-thecube {
            0%,
            10% {
                -moz-transform: perspective(136px) rotateX(-180deg);
                opacity: 0;
            }
            25%,
            75% {
                -moz-transform: perspective(136px) rotateX(0deg);
                opacity: 1;
            }
            90%,
            100% {
                -moz-transform: perspective(136px) rotateY(180deg);
                opacity: 0;
            }
        }

        .subscription .modal-content .button {
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            width: 300px;
            max-width: 90%;
        }

        @media screen and (max-width: 768px) {
            #country_prefix {
                margin-left: 13px !important;
            }
        }

        @media screen and (max-width: 415px) {
            .iti {
                width: 100% !important;
            }
            #country_prefix {
                margin-left: 1px !important;
                width: 75px !important;
                max-width: unset !important;
            }
        }

        article,
        aside,
        dialog,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block;
            /* overflow-x: hidden; */
        }

        .iti {
            margin: 5px 0;
            width: 100%;
        }

        .preloaders {
            display: none;
            position: absolute;
            top: -17px;
            left: -7px;
            width: 106%;
            height: 110%;
            border-radius: 0;
            z-index: 99999999;
            background: rgba(0, 0, 0, 0.5);
            padding-top: 35%;
        }


        .row {
            position: relative;
        }

        @media (max-width: 767px) {
            .container {
                padding-left: .5rem;
                padding-right: .5rem;
            }
            .sm\:p-5 {
                padding: 0.25rem;
            }
        }

        input {
            height: 40px!important;
        }

        input[type = tel] {
            height: inherit!important;
        }

        button[type=submit] {        
            background: #3a2da3;
            color: #fff;
            border: none;
        }
    </style>

        <!-- Open Graph -->
    <?php $seoText = 'Добро пожаловать!'; ?>
    <meta name="description" content="<? echo $seoText; ?>"/>
    <meta name="keywords" content="<? echo $seoText; ?>"/>
    <meta property="og:title" content="<? echo $seoText; ?>"/>
    <meta property="og:description" content="<? echo $seoText; ?>"/>
    <meta property="og:image" content="<? echo $base; ?>video/1.png"/>
    <meta property="og:image:width" content="450"/>
    <meta property="og:image:height" content="450"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?php echo $base; ?>"/>
    <link rel="canonical" href="<?php echo $base; ?>"/>
    <!-- Pixel -->
    <meta name="pixel_id" content="<?php echo $FacebookPixel; ?>">
    <?php if($FacebookPixel) : ?>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $FacebookPixel ?>&ev=PageView&noscript=1"/>
    <?php endif; ?>

    <?php if($TiktokPixel) : ?>
    <script>
        !function (w, d, t) {
            w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
            ttq.load('<?php echo $TiktokPixel; ?>');
            ttq.page();
        }(window, document, 'ttq');
    </script>
    <?php endif; ?>

    <?php if($GooglePixel) : ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-<?php echo $GooglePixel; ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-<?php echo $GooglePixel; ?>');
        </script>
    <?php endif; ?>

</head>


    
    <div class="hover-modal"></div>
    
    <!-- INTRO SECTION 1 START -->
    <section class="intro-section-1" style="padding: 15px 0 10px 0;">
        <div style="display: inline-block;position: absolute;top: 4px;left: 50%;transform: translateX(-50%);font-size: .5em;opacity: .5;font-family: inherit;">-&nbsp;Advertorial&nbsp;-</div>

        <div class="container">
            <p class="intro-p">
                <b data-i18n="warning">Внимание</b>: <span data-i18n="due-to"> В связи с высоким вниманием медиа, мы закроем регистрацию </span><b>
            <b><span class="tomorrow-date">05/07/2019</span> - <span data-i18n="">Поспешите!</span>
            </b><span class="countdown-span" id="timer">05:30</span></b>
            </p>
        </div>
    </section>
    <!-- INTRO SECTION 1 END -->
    <!-- INTRO SECTION 2 START -->
    <section class="intro-section-2">
        <div class="container">
            <div class="intro-part-2">
                <img src="images/logo1.png" alt="logo" class="logo">
                <div class="exclusive-offers-wrapper intro-margin-div none">
                    <div>
                        <span class="purple" data-i18n="">Экслюзивное предложение для</span>
                        <!--<br>-->
                        <span class="red" data-i18n="">Трэйдеров </span>
                        <span class="purple country-name-geo" data-i18n=""></span>
                        <span class="red gtd-geo-country-name"></span>
                    </div>
                    <img data-init="country-flag" height="50" class="flag-pic">
                </div>
                <div class="dynamic-person-div none">
                    <div class="dynamic-person-img-wrapper">
                        <img src="images/25.jpg" alt="" class="dynamic-person-img">
                    </div>
                    <p class="dynamic-person-p">
                        <span class="dynamic-person-name-span">
                            Nikole C.
                            </span>
                        <br>
                        <span data-i18n="">заработок</span>
                        <br>
                        <span data-init="visitor-currency-symbol" class="dollar-shake">
                        <span class="currency">$</span>
                        </span>
                        <span class="dynamic-person-sum-span">350</span>

                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- INTRO SECTION 2 END -->
    <!-- VIDEO FORM SECTION START -->  
    <section class="video-form-section">
        <div class="container">
            <h1 class="video-header" data-i18n="">Bitcoin Делает Людей Богатыми</h1>
            <p class="video-subheader"><span data-i18n="">И ты можешь стать</span>
                <span class="yellow" data-i18n=""> Следующим Миллионером...</span></p>
            <div class="row" style="margin-bottom: -157px;">
                <div class="col-md-12 col-lg-8">
                    <div class="video video-wrapper" style="display: flex;">
                        <video style="width: 100%;" id="video" controls="controls" poster="video/video.jpg" allowfullscreen="">
                            <source src="video/video.mp4" type="video/mp4"> 
                        </video>
                        <div class="play-btn"></div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="form-container" id="form">
                        <h1 class="formHeader" >Измените свою жизнь сегодня</h1>
                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Зарегистрироваться"></div>
                    </div>

                </div>
                
                <!---->
            </div>

        </div>

    </section>

    <!-- INTRO SECTION MOBILE END -->
    <!-- LOGOS SECTION START -->
    <section class="logos-section">
        <div class="container">
            <div class="logos-wrapper">
                <img src="images/bitgo.png" class="logo" alt="bitgo logo">
                <img src="images/norton.png" class="logo" alt="norton logo">
                <img src="images/secure-trading.png" class="logo" alt="secure trading logo">
                <img src="images/mcafee.png" class="logo" alt="mcafee logo">
                <!-- <div class="bet">
                <div class="bid-wrapper">
                    <span class="orange" data-i18n>BID</span>
                    <span class="green bid-ask-span"><span data-init="visitor-currency-symbol"><span
                            class="currency">$</span></span>6769.42</span>
                </div>
                <div class="ask-wrapper">
                    <span class="gray" data-i18n>ASK</span>
                    <span class="gray bid-ask-span"><span data-init="visitor-currency-symbol"><span
                            class="currency">$</span></span>6771.08</span>
                </div>
            </div> -->
            </div>
        </div>
    </section>
    <!-- LOGOS SECTION END -->
    <!-- JOIN US SECTION START -->
    <section class="join-us-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="join-us-header">
                        <span data-i18n="">Присоединяйся и Стань богатым
                    </span>
                        <span style="color: #5F3394" data-i18n="">c Bitcoin Bank!</span>
                    </h1>
                    <br>
                    <p class="join-us-p">
                        <span data-i18n="">
                        Bitcoin Bank это эксклюзивная группа для людей которые поверили и втянулись в безумие Bitcoin и заработали на нём целое состояние. Наши члены каждый месяц наслаждаются отдыхом по всему миру, в то время как зарабатывают деньги на своем ноутбуке всего за несколько минут «работы» каждый день.
                    </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- JOIN US SECTION END -->
    <!-- FAKE NEWS SECTION START -->
    <!-- FAKE NEWS SECTION END -->
    <!-- TESTIMONIALS SECTION START -->
    <section class="testimonials-section">
        <div class="container-fluid">
            <h1 class="testimonials-header purple" data-i18n="">Реальные отзывы от наших участников </h1>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-1">
                        <div class="testimonial-intro-text white">
                            <span data-i18n="">Владимир И.</span> <br>
                            <span data-i18n="">Пермь</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n="">Прибыль</span>: <span data-init="visitor-currency-symbol"><span
                                class="currency">$</span></span>10,987.98</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>'Я был участником системы Bitcoin Bank всего 47 дней. Но моя жизнь уже изменилась! Я не только
                            заработал мои первые <span
                                    class="currency">$</span>10,000, я так же встретил самых удивительных людей в
                            процессе. Спасибо, Bitcoin Bank!'</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-2">
                        <div class="testimonial-intro-text white">
                            <span data-i18n="">Зоя А.</span> <br>
                            <span data-i18n="">Ижевск</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n="">Прибыль</span>: <span data-init="visitor-currency-symbol"><span
                                class="currency">$</span></span>6,109.09</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>'Теперь я знаю как это жить мечтой. Я больше не чувствую будто я вне игры пока другие
                            веселятся. Bitcoin Bank позволил мне рано уйти работы и быть одним из 1%
                            счастливчиков.'</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-3">
                        <div class="testimonial-intro-text white">
                            <span data-i18n="">Марк К.</span> <br>
                            <span data-i18n="">Москва</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n="">Прибыль</span>: <span data-init="visitor-currency-symbol"><span
                                class="currency">$</span></span>8,938.79</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>'Как ни странно, я был инвестором в одной из компаний в Москва-сити и никогда не видел ничего
                            подобного за свой 10 летний стаж там. Мои коллеги думали что я сумасшедший когда я ушёл с
                            работы чтобы инвестировать в программу Bitcoin Bank. Заработав <span
                                    class="currency">$</span>38,459 чистой прибыли, мои бывшие коллеги УМОЛЯЮТ меня
                            рассказать им как у меня получилось!'</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-lg-3 no-padding">
                    <div class="testimonial-wrapper testimonial-wrapper-4">
                        <div class="testimonial-intro-text white">
                            <span data-i18n="">Жанна Н.</span><br>
                            <span data-i18n="">Владивосток</span> <br>
                            <span class="yellow testimonial-profit-span"><span data-i18n="">Прибыль</span>: <span data-init="visitor-currency-symbol"><span
                                class="currency">$</span></span>7,234.98</span>
                        </div>
                        <div class="testimonial-hover-text">
                            <i>'Две недели назад меня уволили. Без вариантов, я думала моя жизнь кончена. Теперь я
                            зарабатываю <span class="currency">$</span>1,261.42 каждый день. Впервые за 2 месяца я не в
                            долгах. Спасибо, Bitcoin Bank!'
                        </i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIALS SECTION END -->
    <!-- FEATURES SECTION START -->
    <section class="features-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img src="images/feature-img-1.png" class="feature-img" alt="feature 1">
                        </div>
                        <h5 class="feature-header" data-i18n="">Точность Лазера</h5>
                        <p class="feature-description" data-i18n="">В мире нет другого торгового приложения как Bitcoin Bank, которое дает 99.4% точности. Поэтому наши участники со всего мира доверяют нам удваивать и утраивать их тяжело заработанные деньги.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img src="images/feature-img-2.png" class="feature-img" alt="feature 1">
                        </div>
                        <h5 class="feature-header" data-i18n="">Улучшенная технология</h5>
                        <p class="feature-description" data-i18n="">Программа Bitcoin Bank была создана самыми продвинутыми технологиями торговли в мире. Программа опережает рынок на 0.01 секунды. Этот 'скачек времени' позволяет Bitcoin Bank быть самой точной и быстрой программой в мире.</p>
                    </div>
                </div>
                <div class="col-lg-4 feature-wrapper-col">
                    <div class="feature-wrapper">
                        <div class="feature-img-wrapper">
                            <img src="images/feature-img-3.png" class="feature-img" alt="feature 1">
                        </div>
                        <h5 class="feature-header" data-i18n="">Программа выигрывающая награды</h5>
                        <p class="feature-description" data-i18n="">Приложение Bitcoin Bank выиграло множество наград. Недавно мы имели честь получить награду '#1', в категории торговых программ от Торговой US Ассоциации.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURES SECTION END -->
    <!-- LIVE RESULTS SECTION START-->
    <section class="live-results-section text-center">
        <div class="container relative">
            <div class="live-results-table-wrapper">
                <button class="yellow-btn join-now-btn scroll-top-btn" onclick="topFunction()">
                <span> Присоединиться!</span>
            </button>
                <h1 class="dark-purple bold live-results-header" data-i18n="">Таблица доходов в реальном времени</h1>
                <table class="live-results-table">
                    <thead class="thead">
                        <tr>
                            <th class="dark-purple padding-left-td" data-i18n="">Имя</th>
                            <th class="dark-purple padding-left-td" data-i18n="">Доход</th>
                            <th class="dark-purple padding-left-td" data-i18n="">Время Сделки</th>
                            <th class="dark-purple padding-left-td" data-i18n="">Криптовалюта</th>
                            <th class="dark-purple padding-left-td" data-i18n="">Результат</th>
                        </tr>
                    </thead>
                    <tbody class="tbody">
                        <tr>
                            <td class="bold">Зоя Румянцевa.
                                <!--<span class="td-text"> a réalisé une transaction...</span>--></td>
                            <td class="bold"><span class="currency">$</span>996</td>
                            <td class="trade-time-td padding-left-td">18/7/2019</td>
                            <td>ETH/LTC</td>
                            <td><img src="images/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Денис Черемнов.
                                <!--<span class="td-text"> a réalisé une transaction...</span>--></td>
                            <td class="bold"><span class="currency">$</span>815</td>
                            <td class="trade-time-td padding-left-td">18/7/2019</td>
                            <td>EOS/ETH</td>
                            <td><img src="images/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Арина Алексеевa.
                                <!--<span class="td-text"> a réalisé une transaction...</span>--></td>
                            <td class="bold"><span class="currency">$</span>481</td>
                            <td class="trade-time-td padding-left-td">18/7/2019</td>
                            <td>EOS/ETH</td>
                            <td><img src="images/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Ефим Щеглов.
                                <!--<span class="td-text"> a réalisé une transaction...</span>--></td>
                            <td class="bold"><span class="currency">$</span>1294</td>
                            <td class="trade-time-td padding-left-td">18/7/2019</td>
                            <td>BTC/ETH</td>
                            <td><img src="images/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Юрий Кац.
                                <!--<span class="td-text"> a réalisé une transaction...</span>--></td>
                            <td class="bold"><span class="currency">$</span>1224</td>
                            <td class="trade-time-td padding-left-td">18/7/2019</td>
                            <td>EOS/ETH</td>
                            <td><img src="images/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Валентин Жданов.
                                <!--<span class="td-text"> a réalisé une transaction...</span>--></td>
                            <td class="bold"><span class="currency">$</span>434</td>
                            <td class="trade-time-td padding-left-td">18/7/2019</td>
                            <td>EOS/ETH</td>
                            <td><img src="images/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Рената Герасимовa.
                                <!--<span class="td-text"> a réalisé une transaction...</span>--></td>
                            <td class="bold"><span class="currency">$</span>924</td>
                            <td class="trade-time-td padding-left-td">18/7/2019</td>
                            <td>BTC/ETH</td>
                            <td><img src="images/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Дарья Евсеевa.
                                <!--<span class="td-text"> a réalisé une transaction...</span>--></td>
                            <td class="bold"><span class="currency">$</span>532</td>
                            <td class="trade-time-td padding-left-td">18/7/2019</td>
                            <td>ETH/LTC</td>
                            <td><img src="images/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold">Владислав Моисеенко.
                                <!--<span class="td-text"> a réalisé une transaction...</span>--></td>
                            <td class="bold"><span class="currency">$</span>951</td>
                            <td class="trade-time-td padding-left-td">18/7/2019</td>
                            <td>EOS/ETH</td>
                            <td><img src="images/tick.png" alt="tick"></td>
                        </tr>
                        <tr>
                            <td class="bold last-td">Филипп Харинов.
                                <!--<span class="td-text"> a réalisé une transaction...</span>--></td>
                            <td class="bold last-td"><span class="currency">$</span>1151</td>
                            <td class="trade-time-td padding-left-td last-td">18/7/2019</td>
                            <td class="last-td">EOS/ETH</td>
                            <td class="last-td"><img src="images/tick.png" alt="tick"></td>
                        </tr>


                    </tbody>
                </table>
                <div class="currency--table-hide" style="display: none;"></div>
            </div>
        </div>
    </section>
    <!-- LIVE RESULTS SECTION END -->
    <!-- HOW IT WORKS SECTION START -->
    <section class="how-it-works-section text-center">
        <div class="container">
            <div class="how-it-works-wrapper">
                <h1 class="dark-purple bold how-it-works-header" data-i18n="">Как это работает</h1>
                <div class="row">
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-1">
                            <h3 class="step-header white step-header-1" data-i18n="">Шаг 1</h3>
                            <div class="step-img-wrapper">
                                <img src="images/step-img-1.png" alt="step 1" class="step-img">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n="">Регистрация на сайте</h5>
                            <p class="step-description" data-i18n="">Как только ваша регистрация будет принята, вы автоматически становитесь новым пользователем системы Bitcoin Bank. Вы получите возможность пользоваться торговой системой бесплатно.</p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper step-wrapper-2">
                            <h3 class="step-header white step-header-2" data-i18n="">Шаг 2</h3>
                            <div class="step-img-wrapper">
                                <img src="images/step-img-2.png" alt="step 2" class="step-img">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n="">Пополните ваш аккаунт</h5>
                            <p class="step-description">
                                <span data-i18n="">Как любой другой бизнес, вам нужен стартовый капитал чтобы начать. Чтобы начать получать прибыль с системой Bitcoin Bank, вы должны инвестировать <span
                                    class="currency">$</span>250 или больше.</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 no-padding step-wrapper-col">
                        <div class="step-wrapper last-step-wrapper step-wrapper-3">
                            <h3 class="step-header white step-header-3" data-i18n="">Шаг 3</h3>
                            <div class="step-img-wrapper">
                                <img src="images/step-img-3.png" alt="step 3" class="step-img">
                            </div>
                            <h5 class="step-subheader bold dark-purple" data-i18n="">Финиш</h5>
                            <p class="step-description" data-i18n="">Нажмите 'торговать' чтобы насладится точной и автоматической торговлей созданной по выигрышному алгоритму. Вы также можете перевести систему в ручной режим, если предпочитаете торговать сами.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how-it-works-btn-wrapper">
            <button class="yellow-btn open-free-account-btn scroll-top-btn" onclick="topFunction()">
            <span data-i18n="">Открыть бесплатный аккаунт</span>
        </button>
        </div>
    </section>
    <!-- HOW IT WORKS SECTION END -->
    <!-- FAQ SECTION START -->
    <section class="faq-section">
        <div class="container">
            <h2 class="faq-section-header text-center dark-purple bold" data-i18n="">Часто задаваемые вопросы</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-1">
                                <h4 class="faq-question light-purple bold" data-i18n="">Какой результат я могу ожидать?</h4>
                                <p class="faq-answer">Пользователи Bitcoin Bank обычно получают минимальную прибыль в размере
                                    <span class="currency">$</span>1100 ежедневно.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-2">
                                <h4 class="faq-question light-purple bold" data-i18n="">Как много часов в день мне придётся работать?
                                </h4>
                                <p class="faq-answer" data-i18n="">Наши пользователи работают в среднем 20 минут в день, а то и меньше. Программа берет на себя всю торговую работу, поэтому она минимизирует Ваше рабочее время.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-3">
                                <h4 class="faq-question light-purple bold" data-i18n="">Какая максимальная прибыль которую я могу получить?</h4>
                                <p class="faq-answer" data-i18n="">С Bitcoin Bank ваша прибыль не имеет границ. Некоторые пользователи заработали первый миллион всего за 61 день.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-4">
                                <h4 class="faq-question light-purple bold" data-i18n="">Сколько стоит программа?</h4>
                                <p class="faq-answer" data-i18n="">Пользователи системы Bitcoin Bank получают копию программы бесплатно. Чтобы стать пользователем, просто заполните форму на этой странице.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-5">
                                <h4 class="faq-question light-purple bold" data-i18n="">Является ли эта система MLM или партнерским маркетингом?</h4>
                                <p class="faq-answer" data-i18n="">Наша система не является MLM, партнерским маркетингом или чем-либо еще. Эта система выигрывает торги с вероятностью в 99.4%.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <div class="faq-wrapper faq-wrapper-6">
                                <h4 class="faq-question light-purple bold" data-i18n="">Берет ли система комиссию?</h4>
                                <p class="faq-answer" data-i18n="">В системе нет скрытых комиссий и комиссии брокера. Все ваши деньги на 100% ваши и вы можете с легкостью вывести их в любое время, без задержек.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ SECTION END -->
    <!-- PRE-FOOTER SECTION START -->
    <section class="pre-footer-section">
        <div class="container">
            <button class="pre-footer-btn scroll-top-btn" onclick="topFunction()">
            <span data-i18n="">НАЧАТЬ СЕЙЧАС</span>
        </button>
        </div>
    </section>
    <!-- PRE-FOOTER SECTION END -->
    <!-- FOOTER START -->
    <footer class="footer text-center">
        <div class="container">
            <!-- <ul class="footer-ul">
                <li><a  href="javascript:void(0)" >Условия пользования</a></li>
                <li><a  href="javascript:void(0)" >Политика конфиденциальности</a></li>

            </ul> -->
            <img src="images/logo1.png" class="footer-logo" alt="logo">
        </div>
    </footer>

    <script>
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>



    <link rel="stylesheet" type="text/css" href="css/css_1.css">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/pop-up.css">
    <link rel="stylesheet" href="css/select2.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/device.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>


</body>

</html>