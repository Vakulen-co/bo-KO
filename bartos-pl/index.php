<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="pl" style="margin-top:0 !important;">

<head>
    <base href="<?php echo $base ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="./bartos_files/forms_native.min.css">
    <link rel="stylesheet" href="./bartos_files/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="./bartos_files/mtm_favicon.ico">

    <link rel="stylesheet" href="./bartos_files/main.min.css">
    <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700');
        html {
            overflow-x: hidden;
        }

        body {
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: 400;
            color: #000;
            line-height: normal;
            font-size: 1em;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-bottom: 0;
        }

        p {
            margin-top: 0;
            margin-bottom: 0;
        }

        .row {
            max-width: 100%;
            margin: 0 auto;
        }

        .form-check {
            padding-left: 0;
            padding: 0 14px;
        }

        .submit_btn_wrapper {
            text-align: left;
        }

        #img18 {
            display: none;
        }

        .form_wrapper label {
            display: block;
            margin-bottom: 13px;
        }

        .mainForm .form-group input,
        .mainForm .form-group select {
            text-align: left;
            font-size: 1.8rem;
            height: auto;
            height: 5.4rem;
            border-style: solid;
            border-width: 2px;
            border-color: #96949b;
            border-radius: 5px;
            background-color: rgba(46, 42, 56, .4);
            width: 100%;
            font-size: 1.6rem;
            font-family: 'Roboto', sans-serif;
            line-height: 1.2;
            font-weight: 300;
            padding-left: 3rem;
            padding-right: 3rem;
            color: #fff;
            transition: all .4s;
        }

        .submit_btn {
            color: #ffffff;
            background-color: #f39c12;
            display: inline-block;
            font-size: 2em;
            font-weight: 400;
            -webkit-border-radius: 10px;
            border-radius: 25px;
            cursor: pointer;
            border: 0;
            width: 100%;
            text-align: center !important;
            padding: 10px;
        }

        .submit_btn:hover {
            color: #ffffff;
        }

        .rtl .styled-select {
            background: none;
        }

        .agree_wrapper {
            padding: 0px 16px;
        }

        .iagree span,
        .iagree {
            color: #fff !important;
        }

        span.popup_terms_link {
            color: #09c7ff !important;
            cursor: pointer;
        }

        #mainForm,
        .mainForm {
            max-width: 1250px;
            margin: 0 auto;
        }

        .form-head {
            font-size: 17px;
            color: #f5931c;
            text-align: center;
            padding: 15px 20px;
            font-weight: 400;
        }

        .form-head b {
            display: block;
            color: #4bcaff;
            font-weight: 400;
        }

        .form-wrap {
            background-color: rgba(0, 0, 0, 0.7);
            -webkit-border-radius: 10px;
            border-radius: 10px;
            width: 300px;
            z-index: 35;
            position: relative;
            margin: 0 auto;
            max-width: 100%;
        }

        .arrow-img {
            position: absolute;
            left: -90px
        }

        .form_wrapper input,
        .form_wrapper select {}

        .form_wrapper {}

        .form_wrapper .col-md-5 {
            width: 100%;
            max-width: none;
            -webkit-box-flex: 1;
            -webkit-flex: auto;
            -ms-flex: auto;
            flex: auto;
            margin: 0 auto;
            display: block;
            padding-left: 15px;
        }

        .eu-trading-involves {
            display: block;
            margin: 10px auto;
            text-align: left;
            color: #fff;
            font-size: 12px;
        }

        .form_wrapper .col-md-7 {
            width: 100%;
            max-width: 91%;
            -webkit-box-flex: 1;
            -webkit-flex: auto;
            -ms-flex: auto;
            flex: auto;
            margin: 0 auto;
            display: block;
        }

        h2.form_title {
            font-weight: 300;
            font-size: 40px;
        }

        #wrapper-top {
            position: relative;
            overflow: hidden;
            min-width: 100%;
            background-color: #eee;
        }

        .logo-top {
            position: relative;
            max-width: 220px;
        }

        .bg-top {
            max-width: none;
            min-width: 100%;
            left: 50%;
            position: absolute;
            display: block;
            bottom: 0px;
            min-height: 100%;
            -webkit-transform: translate(-50%, 0);
            -ms-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }

        .top-content {
            position: relative;
            z-index: 34;
            right: 0;
            left: 0;
            top: 0;
            padding: 1em 0 2em;
        }

        .top-h1 {
            max-width: 100%;
            position: relative;
            text-align: left;
            font-size: 2em;
            font-weight: 400;
            z-index: 10;
            color: #194d6c;
            padding: 0 60px;
        }

        .top-h1 .top-h1-b {
            display: block;
            text-align: left;
            color: #00ae66;
            font-weight: 700;
            font-size: 0.81em
        }

        .h1-bold {
            color: #09c7ff;
        }

        .h1-small {
            font-size: 0.84em;
        }

        .top-h2 {
            color: #000000;
            font-size: 1.3em;
            padding: 0 10px;
            font-weight: 100;
        }

        .top-h2-b {
            display: block;
            font-weight: 700;
            margin: 10px 0;
        }

        .book-top {
            position: absolute;
            bottom: 0;
        }

        .referral-wrap {
            padding-top: 3em;
        }

        .referral-head {
            text-align: center;
            text-transform: uppercase;
            color: #194d6c;
            font-weight: 700;
            font-size: 16px
        }

        .referral-bonus {
            text-align: center;
            text-transform: uppercase;
            color: #194d6c;
            font-weight: 400;
            font-size: 53px
        }

        .referral-letter {
            background-color: #4bcaff;
            border: 5px solid #fff;
            padding: 10px 15px;
            font-size: 20px;
            text-align: center;
        }

        .referral-code {
            margin: 0 auto;
            display: table;
        }

        #steps {
            background-color: #03111e;
            -webkit-background-size: cover;
            background-size: cover;
            background-image: url('./bartos_files/XT_Special_offers_EN_v1_top.jpg');
            background-repeat: no-repeat;
            background-position: center;
        }

        .steps-title {
            color: #04b511;
            text-align: center;
            font-size: 3em;
            text-transform: uppercase;
            font-weight: 700;
            padding-top: 1em;
        }

        .steps-title-b {
            display: block;
            font-size: 1.6em;
        }

        .steps-h2 {
            color: #616168;
            font-size: 1.5em;
            text-align: center;
        }

        .steps-h3 {
            color: #1e4464;
            font-size: 2em;
            font-weight: 300
        }

        .step-container {
            margin: 1em auto 3em;
            max-width: 100%;
        }

        .step-img {
            margin: 0px auto;
            display: block;
        }

        .step-head {
            color: #030c1b;
            display: block;
            font-size: 16px;
            font-weight: 600;
            vertical-align: top;
            padding: 20px 10px;
            text-align: center;
            margin: 0 auto;
        }

        .agree_wrapper label {
            display: inline-block;
        }

        .step-content {
            margin: 0px 0;
            font-size: 17px;
            color: #616168;
            font-weight: 400;
            max-width: 100%;
            text-transform: none;
            text-align: center;
        }

        .step-bottom {
            font-size: 15px;
            color: #142e45;
            font-weight: 400;
        }

        .girl-img {
            position: absolute;
            left: -20px;
            bottom: -70px;
        }

        #footer-form {
            background-color: #102d45;
        }

        footer {
            background-color: #333a4d;
            color: #ffffff;
            padding: 4em 0;
            text-align: center;
        }

        .left-arrow {
            position: absolute;
            top: 180px;
            left: 130px;
        }

        .right-arrow {
            position: absolute;
            top: 180px;
            right: 130px;
        }

        @media only screen and (max-width: 1200px) {
            .step-head {
                width: auto;
                display: block
            }
            .left-arrow {
                top: 155px;
                left: 60px;
            }
            .right-arrow {
                top: 155px;
                right: 60px;
            }
        }

        @media only screen and (max-width: 991px) {
            #footer-form .col {
                -ms-flex-preferred-size: 0;
                -webkit-flex-basis: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                flex-grow: 1;
                max-width: 100%;
                float: none;
            }
            .submit_btn {
                width: 100%;
            }
            .left-arrow {
                display: none;
            }
            .right-arrow {
                display: none;
            }
            .top-h1,
            .top-h2,
            .top-h1 .top-h1-b {
                text-align: center;
            }
            .cfd-top {
                margin: 0 auto;
                display: block;
            }
            .bg-top,
            .note {
                left: -600px;
            }
            .top-h1,
            .top-h2 {
                padding: 0;
            }
            .note-text {
                position: static;
                padding: 10px;
                background-color: #03130e;
            }
            .note-auther {
                margin: 0 auto;
            }
            .top-row {
                -webkit-box-orient: vertical;
                -webkit-box-direction: reverse;
                -webkit-flex-direction: column-reverse;
                -ms-flex-direction: column-reverse;
                flex-direction: column-reverse;
            }
        }

        @media only screen and (max-width: 768px) {
            body {
                font-size: 0.8em;
            }
            #steps {
                background-image: url();
                padding-bottom: 1em;
            }
            .steps-h2 {
                padding: 0;
            }
            .tablet-img {
                margin: 1em auto;
                display: block;
                max-width: 40%;
            }
            .cfd-top {
                max-width: 100%;
            }
            .top-h1 {
                float: none;
            }
            .yellow-button {
                padding: 20px 60px
            }
            .note-text {
                text-align: left;
            }
            .girl-img {
                position: relative;
                bottom: auto;
                left: auto;
                max-width: 64%;
                margin: 0 auto;
                display: block;
            }
            .step-container {
                margin: 1em auto;
                min-height: 0;
            }
            .note-auther,
            .note-auther2 {
                color: #ff9900;
            }
            .credit-terms {
                color: #ff9900;
                text-align: center
            }
            .credit-content-wrap,
            .credit-terms {
                padding-right: 0em;
                padding-left: 0em;
            }
            .credit-text1,
            .credit-text2 {
                text-align: center
            }
            .bottom-text {
                text-align: center;
            }
            #cta2 .button-wrap {
                text-align: center;
            }
            .logo-top {
                left: 3%;
                max-width: 54%;
            }
        }

        @media only screen and (max-width: 550px) {
            body {
                font-size: 0.62em;
            }
            .arrow-img {
                display: none;
            }
            .top-h1 {
                font-size: 1.8em;
            }
            .top-h2 {
                font-size: 1.75em;
            }
            .bg-top,
            .note {
                left: -1100px;
            }
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <style>
        .btn {
            transition: all .3s ease !important;
            color: #fff !important;
            padding-top: 0.75rem !important;
            padding-bottom: 0.75rem !important;
            font-weight: 700 !important;
            font-family: Open Sans, sans-serif !important;
            border-radius: 0.25rem !important;
            background-color: #F16C13 !important;
            width: 100% !important;
            height: auto !important;
            cursor: pointer;
        }

        .btn:hover {
            color: #fff !important;
            background-image: linear-gradient(180deg, #F16C13, rgba(86, 166, 0, 0)) !important;
        }

        .header-flag.sections:before {
            bottom: 38px;
            top: auto;
        }

        .header-flag {
            position: relative;
        }

        .blue-text {
            background: #064572;
            color: aliceblue;
            padding: .2em;
        }

        .iti {
            width: 100%;
        }

        .iti__flag-container {
            right: 110%;
        }

        .formWrapper .sv-skin * {
            box-sizing: border-box;
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
            font-size: 74%;
            padding: 0px 10px;
            line-height: 2.5em;
            background-color: #f1f1e9;
            border: 1px solid #000;
            border-radius: 25px;
            -webkit-box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            -moz-box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            box-shadow: 5px 5px 30px 0px rgba(92, 87, 92, 0.66);
            top: 100%;
            left: 23%;
        }

        .error-block img {
            display: inline;
        }

        .error-block::before,
        .error-block::after {
            content: '';
            position: absolute;
            left: 70px;
            top: -15px;
            border: 5px solid transparent;
            border-bottom: 10px solid #000;
        }

        .error-block::after {
            border-bottom: 10px solid #f1f1e9;
            bottom: 60px;
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
            font-size: 74%;
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
            left: -24%;
        }

        .error-msag img {
            display: inline;
        }

        .error-msag::before,
        .error-msag::after {
            content: '';
            position: absolute;
            left: 50px;
            top: -15px;
            border: 5px solid transparent;
            border-bottom: 10px solid #000;
        }

        .error-msag::after {
            border-bottom: 10px solid #ecece4;
            bottom: 31px;
        }

        .valid-msag {
            color: #00C900;
            display: inline;
            position: absolute;
            font-size: 74%;
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

        .valid-msag img {
            display: inline;
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

        .preloaders {
            display: none;
            position: absolute;
            top: -17px;
            left: 0px;
            width: 100%;
            height: 107%;
            border-radius: 11px;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.5);
            padding-top: 35%;
        }

        .preloaders2 {
            display: none;
        }

        body.preloader {
            position: relative;
        }

        body.preloader .preloaders2 {
            display: block;
            position: fixed;
            top: -17px;
            left: 0px;
            width: 100%;
            height: 107%;
            border-radius: 11px;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.5);
            padding-top: 20%;
        }

        /* @media (min-width: 768px) {
        .sv-skin .fieldset.fr {
            margin-top: -4px !important;
        }
    } */

        .lead-form-submit {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.08), 0 3px 6px rgba(0, 0, 0, 0.16);
            border: 0;
            line-height: 1em;
            color: #fff;
            -webkit-transition: all 250ms ease-in-out;
            -moz-transition: all 250ms ease-in-out;
            -o-transition: all 250ms ease-in-out;
            -ms-transition: all 250ms ease-in-out;
            transition: all 250ms ease-in-out;
            background-color: #1468a0 !important;
            border-radius: 0;
            padding: 1em 2em !important;
            width: auto !important;
            height: auto !important;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 18px;
            border-color: #1468a0 !important;
            margin: 0 auto !important;
        }

        .custom_btn {
            -webkit-transition: all .5s ease-in-out;
            -moz-transition: all .5s ease-in-out;
            -o-transition: all .5s ease-in-out;
            -ms-transition: all .5s ease-in-out;
            border-radius: 24px !important;
            margin: 15px auto !important;
            border: none !important;
            text-shadow: none !important;
            border-radius: 6px !important;
            background-color: #7ed321 !important;
            color: #ffffff;
            cursor: pointer;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
        }

        .custom_btn:hover {
            opacity: .8;
        }

        .form-holder-body {
            padding: 0 10px;
        }

        #formfull {
            position: relative;
        }

        #formfull {
            width: 400px;
            margin-right: auto;
            margin-left: auto;
            /* max-width: 90%; */
        }
    </style>
    <!-- Open Graph -->
    <?php $seoText = 'Witamy!'; ?>
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
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $FacebookPixel ?>&ev=ViewContent&noscript=1"/>
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

<body>
  
    <div id="wrapper">
        <div class="first">
            <div class="box">
                <h3 class="first__h3">Handlowiec I TRENER BIZNESOWY</h3>
                <h2 class="first__h2"> Bartosz Frącki</h2>
                <p class="first__p">Wprowadza nowy<br><b>kurs szkoleniowy:</b></p>
                <p class="first__quote"><span>7 BEZPIECZNYCH I NIEZAWODNYCH METOD</span><br>DLA ZAROBKU NA RYNKU WALUTOWYM:
                    <br>jak handlować z przyjemnością</p>
                <div class="first__block">
                    <h4 class="first__block--h4">Za darmo!</h4>
                    <p class="first__block--p">Tylko 20 kopii </p>
                    <h5 class="first__block--h5">Pozostało: <b>9 kopii</b></h5><a href="#subs" class="first__block--btn go_to"> <span class="s-arr"></span>POBIERZ TERAZ!</a>
                </div>
            </div>
        </div>
        <div class="second box me-class-sifyoxukbl-mt-50-WIVLQEBPDRSFXUTKGHOJ-rd-class">
            <h2 class="second__title">O czym teraz marzysz?</h2>
            <div class="second__list">
                <div class="second__list--item"><img src="./bartos_files/icon1.png" alt="">
                    <p>Stabilny wysoki dochód</p>
                </div>
                <div class="second__list--item"><img src="./bartos_files/icon2.png" alt="">
                    <p>Podróżować po całym świecie</p>
                </div>
                <div class="second__list--item"><img src="./bartos_files/icon3.png" alt="">
                    <p>Luksusowy samochód</p>
                </div>
                <div class="second__list--item"><img src="./bartos_files/icon4.png" alt="">
                    <p>Własny duży dom</p>
                </div>
            </div>
        </div>
        <div class="third me-class-fmibagjywnel-mt-50-UMQGDJBEOHAZIVPSCXWRN-rd-class">
            <div class="box">
                <h2 class="third__title">Przekuj swoje marzenia w rzeczywistość teraz!</h2>
                <p class="third__subtitle">Twój sposób na realizację:</p>
                <div class="third__list">
                    <div class="third__list--item">
                        <h3 class="third__list--title"><span>01</span>Dzisiaj</h3>
                        <p class="third__list--text"><span>Pobierz </span>bezpłatny kurs wideo, podczas gdy on jest wolnym dostępie
                        </p>
                    </div>
                    <div class="third__list--item">
                        <h3 class="third__list--title"><span>02</span>Jutro</h3>
                        <p class="third__list--text">Szczegółowo <span>studiuj </span>szkoleniowy kurs wideo</p>
                    </div>
                    <div class="third__list--item">
                        <h3 class="third__list--title"><span>03</span>Pojutrze</h3>
                        <p class="third__list--text"><span>Wykorzystaj </span>wiedzę w praktyce i osiągnij zysk</p>
                    </div>
                    <div class="third__list--item">
                        <h3 class="third__list--title"><span>04</span>Już wkrótce</h3>
                        <p class="third__list--text"><span>Zdobądź </span>wszystko, o czym marzysz</p>
                    </div>
                </div>
                <div class="third__block">
                    <h4 class="first__block--h4">Za darmo!</h4>
                    <p class="first__block--p">Tylko 20 kopii </p>
                    <h5 class="first__block--h5">Pozostało: <b>9 kopii</b></h5><a href="#subs" class="first__block--btn go_to"> <span class="s-arr"></span>POBIERZ TERAZ!</a>
                </div>
            </div>
        </div>
        <div class="fourth me-class-ordygievsaxu-mt-50-JVZIPCGQKUXLTRSNOD-rd-class">
            <div class="box">
                <h2 class="fourth__title">Ten kurs jest dla ciebie, jeśli:</h2>
                <ul class="fourth__list">
                    <li><span class="s-check"></span>potrzebujesz <b>dodatkowego zarobku</b></li>
                    <li><span class="s-check"></span>masz <b>już dość</b> pracy <b>za grosze</b></li>
                    <li><span class="s-check"></span>chcesz się stać <b>niezależny finansowo;</b></li>
                    <li><span class="s-check"></span>jesteś gotów <b>realizować </b>swoje marzenia;</li>
                    <li><span class="s-check"></span>chcesz <b>pracować </b>tylko <b>na siebie;</b></li>
                    <li><span class="s-check"></span>marzysz <b>być wolnym</b></li>
                </ul>
                <img src="./bartos_files/man.png" alt="" class="fourth__img">
            </div>
        </div>
        <div class="fifth me-class-zoegkxdbhpany-mt-50-HZMFXWKGRBCPVEOSQNTUJDLT-rd-class">
            <div class="box">
                <div class="fifth__block">
                    <h2 class="fifth__title">O mnie<span>(tylko fakty)</span></h2>
                    <ul class="fifth__list">
                        <li>Mam <span>48 lat</span></li>
                        <li>Zarabiam już na handlu <span>15 lat</span></li>
                        <li>Średni miesięczny dochód w 2017 r: <span>22 453 USD</span></li>
                        <li>Moja własność:<br>samochód
                            <span>Maserati Ghibli, </span><span>dom na przedmieściach Londynu</span> wart 310 tysięcy dolarów
                        </li>
                        <li>Dwoje dzieci:<br> syn ukończył studia w Londynie, córka – 3 kurs uniwersytetu w Zurychu
                        </li>
                        <li>Stan ogólny: więcej <span>2,6 miliona dolarów</span></li>
                    </ul>
                    <p class="fifth__text">«<i>Zrealizowałem swoje marzenie i pomogę<br>ci w tym.</i>»</p>
                    <p class="fifth__p">Z poważaniem, Bartosz Frącki</p>
                </div>
            </div>
        </div>
        <div class="sixth me-class-oxcnqgeutwvlj-mt-50-KNXLTPDTHJOMVAUSEFBIGRWCQ-rd-class">
            <div class="box">
                <h2 class="sixth__title">Najnowsze opinie od naszych uczestników kursu</h2>
                <div class="sixth__item">
                    <div class="sixth__item--block">
                        <div class="sixth__item--img s-foto"></div>
                        <p class="sixth__item--text">Wojciech, 25 lat</p>
                    </div>
                    <div class="sixth__item--com">
                        <p>Udało mi się całkowicie zapoznać z kursem, wyjaśnienia strategii Borisa są proste. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <br>Inspirują mnie pomysły i jestem pewien, że pomogą mi one w dalszym handlu. Boris &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dziękuję,
                            to jest bardzo fajne.</p>
                    </div>
                </div>
                <div class="sixth__item left">
                    <div class="sixth__item--com">
                        <p>Nie ma za co, Wojciech! Zawsze cieszę się, gdy moi uczniowie są zainspirowani, a zwłaszcza kiedy &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ich
                            marzenia się spełniają. <br>Odniesiesz sukces!</p>
                    </div>
                    <div class="sixth__item--block">
                        <div class="sixth__item--img s-fotoc"></div>
                        <p class="sixth__item--text">Bartosz Frącki</p>
                    </div>
                </div>
                <div class="sixth__item">
                    <div class="sixth__item--block">
                        <div class="sixth__item--img s-foto"></div>
                        <p class="sixth__item--text">Zofia, 29 lat</p>
                    </div>
                    <div class="sixth__item--com">
                        <p>Witam. Strategia Zeitnot naprawdę się spodobała, szykownie wdrążona, można jej wydać&nbsp;mało czasu i wycisnąć dobre pieniądze. Popracuję z nią, a potem zapewne odejdę od głównej pracy i przejdę do bardziej dochodowych strategii.
                            Dziękuję Boris.</p>
                    </div>
                </div>
                <div class="sixth__item left">
                    <div class="sixth__item--com">
                        <p>Dzień dobry, Zofia! Tak, jest to strategia oszczędzająca czas i akceptujesz właściwą.Jest rozwiązanie – gdy tylko wzrośnie rentowność i wolumen obrotu, zastosuj inne metody. Więc ty&nbsp;możesz zmaksymalizować przychody. Pisz, zadawaj
                            pytania. Powodzenia</p>
                    </div>
                    <div class="sixth__item--block">
                        <div class="sixth__item--img s-fotoc"></div>
                        <p class="sixth__item--text">Bartosz Frącki</p>
                    </div>
                </div>
                <div class="sixth__item">
                    <div class="sixth__item--block">
                        <div class="sixth__item--img s-foto"></div>
                        <p class="sixth__item--text">Czesław, 48 lat</p>
                    </div>
                    <div class="sixth__item--com">
                        <p>Podwójny cios to dobra strategia na szybkie pieniądze, bardzo skuteczna. Nigdy nie myślałem&nbsp;że można tyle wygrać w tak krótkim czasie. Dziękuję</p>
                    </div>
                </div>
                <div class="sixth__item left">
                    <div class="sixth__item--com">
                        <p>Czesław, „jackpot” to wygrana w kasynie, szczęście i nic więcej. „Podwójny cios” to gwarancja&nbsp;stabilnego zarobku, codziennie pozwalająca na uzupełnienie portfela.</p>
                    </div>
                    <div class="sixth__item--block">
                        <div class="sixth__item--img s-fotoc"></div>
                        <p class="sixth__item--text">Bartosz Frącki</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="last me-class-jyrmgbvqhpcftlun-mt-50-GNTQJKLEUHXCSTZRFIOWBPA-rd-class">
            <div class="box">
                <h2 class="last__title">Wątpisz? Czy masz jakieś inne pomysły? </h2>
                <div class="last__block">
                    <div class="last__block--item">
                        <h3 class="last__block--title">JEŚLI OPUSZCZASZ STRONĘ</h3>
                        <ul class="last__block--list">
                            <li>Wszystko pozostaje tak samo</li>
                            <li>Pieniądze NIE PRZYMNOżONE</li>
                            <li>Marzenia pozostają marzeniami</li>
                            <li>Życie jest nadal nudne i rutynowe</li>
                            <li>Żałujesz za opuszczenie strony</li>
                            <li>Wróciłeś, ale kurs nie jest już dostępny lub jest sprzedawany za pełnym kosztem – 150 tysięcy złotych
                            </li>
                        </ul>
                        <div class="last__block--smile">
                            <div class="s-smile"></div>
                            <p>Nie możesz go kupić dla siebie, twoje życie jest nadal nudne i beznadziejne!</p>
                        </div>
                        <h4 class="last__block--text">Nie podoba ci się ta opcja?</h4>
                    </div>
                    <div class="last__block--item right">
                        <h3 class="last__block--title">JEŚLI POBRANY KURS WIDEO ZA DARMO</h3>
                        <ul class="last__block--list">
                            <li>Zapoznaliśmy się i zobaczyliśmy, że ZARABIANIE jest prawdziwe</li>
                            <li>Zastosowałeś wiedzę i zacząłeś zarabiać</li>
                            <li>Życie zmienia się na lepsze, stać cię na więcej niż wcześniej</li>
                            <li>Kupujesz pierwszy przedmiot (dom, samochód itp.), o którym od dawna marzyłeś</li>
                            <li>Żyjesz dla własnej przyjemności, nie zależąc od nikogo</li>
                        </ul>
                        <div class="last__block--smile">
                            <div class="s-smilec"></div>
                            <p>Wszystkie twoje marzenia spełniają się jeden po drugim. Jesteś szczęśliwą i odnoszącą sukcesy osobą!
                            </p>
                        </div>
                        <h4 class="last__block--text">Podoba tę opcję?</h4>
                    </div>
                </div>
                <h2 id="formfull" class="last__title">Pośpiesz się, aby pobrać kurs bezpośrednio <span>teraz ZA DARMO!</span></h2>
                <div id="subs" class="last__box">
                    <!-- <div class="form-wrap mainForm" id="subs"> -->
                        <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="Zarejestruj się"></div>
                    <!-- </div> -->

                    <div class="last__box--time">
                        <div class="last__box--img">
                            <div class="s-clock"></div>
                        </div>
                        <h3 class="last__box--text">Pozostało:<span>kopii:</span></h3>
                        <p class="last__box--num">9<span>/20</span></p>
                        <div class="last__box--line"></div>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <footer>
        <div id="footer_disclaimer" class="container">
            <p>Usługi MTM nie powinny być traktowane jako profesjonalne doradztwo kupna lub sprzedaży transkacji CFD oraz innych produktów finansowych.<br> Korzystanie z brokera jest wyłącznie ryzykiemklienta oraz jego decyzją. Wszelkie informacje reklamowane
                tutaj, nie są koniecznie w czasie rzeczywistym i mogą być nieprecyzyjne. <br> Handel produktami finansowymi niesie ze sobą ryzyko potencjalnej utraty inwestowanego kapitału. Przed podjęciem decyzji o handlu, należy się zapoznać z Regulaminem
                oraz ze wszystkimi klauzulami ryzyka.<br> <a href="javascript:void(0)" data-name="policy" class="alterlink">Polityka prywatności</a> . <a href="javascript:void(0)" data-name="terms" class="alterlink">Warunki i Zasady</a></p>
            <p style="text-align: center;"><img class="alignnone size-full wp-image-1758" src="./bartos_files/pl_b.png" alt="" width="146" height="62"></p>

        </div>

    </footer>
    <script>
        window.addEventListener('load', function() {
            $("a[href^='#']").on("click", function(e) {
                e.preventDefault()
                $("html, body").animate({
                    scrollTop: $($(this).attr("href")).offset().top
                }, 1000);
                return false;
            });
            
        });
    </script>

<script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
<script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>