<?php 
include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <base href="<?php echo $base ?>">
  <script>
    window.START_LOAD_TIME = Date.now();
  </script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="mask-icon" href="assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5" />
  <link rel="shortcut icon" href="assets/img/favicons/favicon.ico" />
  <meta name="msapplication-config" content="assets/img/favicons/browserconfig.xml" />
  <title>The Ethereum Code</title>
  <style>
    #header .header-content {
      padding-right: 0;
    }

    #top-iframe2 {
      width: 1012px;
      height: 105px;
      margin-top: 15px;
    }

    #top-iframe {
      width: 100%;
      height: 314px;
      max-width: 100vw;
    }

    .intl-tel-input .selected-flag {
      width: 110px !important;
    }

    .intl-tel-input .selected-dial-code {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 45%;
    }

    .send_order {
      background: #e89234;
      color: #fff;
      width: 100%;
      text-align: center;
      font-size: 16px !important;
      font-weight: 600;
    }
    button[type="submit"] {
    margin-bottom: 20px!important;
    width: 100%!important;
    border-radius: 3px!important;
    text-transform: uppercase!important;
    color: #fff!important;
    padding: 20px 10px!important;
    font-weight: 700!important;
    font-size: 18px!important;
    border: none!important;
    outline: none!important;
    position: relative!important;
    transition: all ease .3s!important;
    cursor: pointer!important;
    top: 0!important;
    box-shadow: 0 0 15px 0 rgb(253 104 4)!important;
    background: #fd6804!important;
    background: linear-gradient(
90deg
,rgba(253,104,4,1) 0%,rgba(254,157,38,1) 100%)!important;
}

input:not([type=checkbox]) {
    border-radius: .25rem!important;
    width: 100%!important;
    height: 40px!important;
    background-color: #ededed!important;
    border: none!important;
    padding: 0 15px!important;
    outline: none!important;
    font-size: 16px!important;
    font-weight: 400!important;
    color: #000!important;
    text-align: center!important;
}

  </style>
  <link href="assets/css/index.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn-addict.site/addict-new/css/app.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <meta property="og:title" content="The Ethereum Code" />

  <!-- Open Graph -->
  <?php $seoText = 'Welcome!'; ?>
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

<body class="show">
  <div id="popup_risk" class="popupinfo popbox lazy-load" data-popbox-id="popup_risk">
    <div class="exit_popup_overlay"></div>
    <a class="close_button" data-popbox-close="popup_risk"></a>
    <div class="popup_content">
      <div class="popup_content_inner">
        <div class="popup-content-wrapper">
          <div class="popup-header"></div>
        </div>
        <div class="popup-form-wrapper">
          <p class="text">
            <a name="_GoBack"></a>Full Risk Disclosure Statement
          </p>
          <p class="text"><br /></p>
          <p class="text">INFORMATION ON THIS SITE:</p>
          <p class="text"><br /></p>
          <p class="text">
            'The Ethereum Code' sales videois fictitious and was produced to
            portray the potential of 'The Ethereum Code' 3rd party signals
            software. Actors have been used topresent this opportunity and it
            should be viewed for entertainmentpurposes. We do not guarantee
            income or success, and example resultsin the video and anywhere
            else on this website do not represent anindication of future
            success or earnings.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            Information on 'The Ethereum Code' should not be seen as a
            recommendation to trade binary options. 'The Ethereum Code'
            provides you with links to free binary optionstrading software
            that enables you to receive free binary signals from3rd parties.
            'The Ethereum Code' is not licensed nor authorized toprovide
            advice on investing and related matters. Information on thewebsite
            is not, nor should it be seen as investment advice. Clientswithout
            sufficient knowledge should seek individual advice from
            anauthorized source. Binary options trading entails significant
            risksand there is a chance that clients could lose their
            investments.Therefore, we strongly advice that you read ours and
            3rd party fullterms and conditions. Past performance is not a
            guarantee of futurereturns. Most importantly, do not invest money
            you cannot afford tolose.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            You are responsible for any decisionmade by you based on
            information on this site. 'The Ethereum Code' and its directors,
            employees or agents accept no liability for lossor damage
            (including, without limitation, any special, direct,indirect or
            consequential loss or damage or other losses or damage ofwhatever
            kind) that arise out of or relate to the use of this site,software
            or its contents.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            You may only participate in binaryoptions trading if you are of
            legal age and if it is legally allowedin the jurisdiction from
            where you are accessing the binary tradingplatform. It is your
            responsibility to check your local regulationsbefore trading onlin
          </p>
          <p class="text"><br /></p>
          <p class="text">COPYRIGHTS:</p>
          <p class="text"><br /></p>
          <p class="text">
            This site and the products and servicesoffered on this site are
            not associated, affiliated, endorsed, orsponsored by any brand
            shown on this website nor have they beenreviewed tested or
            certified by any of these brands. All trademarks,logos, and
            service marks displayed are registered and/or
            unregisteredTrademarks of their respective owners.
          </p>
          <p class="text"><br /></p>
          <p class="text">HYPERLINKS AND THIRD PARTIES:</p>
          <p class="text"><br /></p>
          <p class="text">
            'The Ethereum Code' has not reviewedand accepts no responsibility
            for any information on any otherwebsite that you access by a
            hyperlink from this site, or forinformation on other websites that
            you came to this site from. 'The Ethereum Code' accepts no
            liability for loss or damage (including,without limitation, any
            special, direct, indirect or consequentialloss or damage or other
            losses or damages of whatever kind) thatarises out of access to,
            or the use of, any website linked by ahyperlink to this site or
            any information contained on that site.
          </p>
          <p class="text"><br /></p>
          <p class="text">RISKS INHERENT IN TRADING THROUGH THEINTERNET:</p>
          <p class="text"><br /></p>
          <p class="text">
            Binary options are options that pay apre-determined, fixed amount,
            depending on whether or not an eventoccurs at the time the
            Contract expires. Because Binary Options canhave only one of two
            possible outcomes, they allow a simple “Yes orNo” approach.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            Like traditional options, BinaryOptions are based on an underlying
            asset such as currencies,commodities, indexes or stocks, however
            one of the most significantdifferences from traditional options,
            among others, is that there canbe only two outcomes for the
            option, either the client is paid thereturn upon the occurrence of
            the event, or the client loses theinvestment amount.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            Trading in Binary Options isspeculative and involves a high degree
            of risk and can result in theloss of your entire investment.
            Therefore, trading in Binary Optionsis appropriate only for
            persons who understand and are willing toassume the economic,
            legal and other risks involved in suchtransactions.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            You should be satisfied that BinaryOptions trading is suitable for
            you in light of your financialcircumstances and attitude towards
            risk. You should not engage inspeculative Binary Options trading
            unless you understand the basicaspects of such trading and its
            risks. If you are in any doubt as towhether Binary Option trading
            is appropriate and suitable for you,please seek independent advice
            from a financial consultingprofessional, as 'The Ethereum Code'
            does not provide such advice.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            It is the Client’s responsibility,taking into account his personal
            circumstances and financialresources, to take particular care and
            make careful considerationsindependently, both prior to applying
            for engaging in Binary Options with 'The Ethereum Code' and our
            selected brokers and prior tomaking any individual order.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            Where the Client does not understandthe risks involved in applying
            for a trading account with the Companyor in making any individual
            order, the Client should seek advice andconsultation from an
            independent Financial Advisor. If the Clientcontinues to not
            understand the risks involved in trading in BinaryOptions, the
            Client should not trade at all.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            You are advised that the Binary Optionsoffered by our selected
            brokers are not always traded under the rulesof any recognized,
            designated or regulated exchange.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            Consequently, engaging in Binary Optiontrading may expose you to
            substantially greater risks thaninvestments which are so traded.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            The Client must acknowledge thatengaging in Binary Options poses a
            great risk of incurring losses andthe Client must accept that he
            is willing to undertake this risk.
          </p>
          <p class="text"><br /></p>
          <p class="text">LEGAL RESTRICTIONS</p>
          <p class="text"><br /></p>
          <p class="text">
            Laws regarding financial trading andcontracts may be different
            throughout the world. It is reader’sobligation to ensure that the
            use of 'The Ethereum Code' is fullycompliant with any law,
            regulation or directive applicable in theircountry of residence.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            The ability to access 'The Ethereum Code' or any related website
            found from a link on 'The Ethereum Code' does not mean that our
            services or any related activities arelegal under the laws of your
            country of residence. These services andthose of our affiliates
            should not be used by anyone in anyjurisdiction in which these
            services are not authorized or unlawful.All users are required and
            responsible to check trading regulationsabout binary options
            brokers in their respective countries beforeopening an account at
            a broker offered on our website or before using 'The Ethereum
            Code' services.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            If you are form the USA, it is highlyimportant to note that some
            of the binary options brokers and serviceproviders are not
            regulated within the United States. They are notconnected,
            affiliated or supervised by any of the regulatory agencies-
            Commodity Futures Trading Commission (CFTC), National
            FuturesAssociation (NFA), Securities and Exchange Commission (SEC)
            or theFinancial Industry Regulatory Authority (FINRA).
          </p>
          <p class="text"><br /></p>
          <p class="text">ACKNOWLEDGEMENT</p>
          <p class="text"><br /></p>
          <p class="text">
            As a visitor to this site, you aretaken to have read, understood
            and agreed to be bound by thisDisclosure Statement. Visitors to
            this site do so on their owninitiative and are responsible for
            complying with relevant locallaws.
          </p>
          <p class="text"><br /></p>
          <p class="text">
            This product does not guarantee incomeor success, and examples of
            the product owner's and other person'sresults do not represent an
            indication of future success or earnings.
          </p>
          <p class="text"><br /></p>
        </div>
      </div>
    </div>
  </div>
  <div id="popup_terms" class="popupinfo popbox lazy-load" data-popbox-id="popup_terms">
    <div class="exit_popup_overlay"></div>
    <a class="close_button" data-popbox-close="popup_terms"></a>
    <div class="popup_content">
      <div class="popup_content_inner">
        <div class="popup-content-wrapper">
          <div class="popup-header"></div>
        </div>
        <div class="popup-form-wrapper">
          <p class="text">NOTE ON TRANSLATION</p>
          <p class="text">
            <a name="_GoBack"></a>These Website Terms of Service may have been
            translated into various languages for the convenience of 'The
            Ethereum Code' Users. While the translation is correct to the best
            of 'The Ethereum Code' s knowledge, 'The Ethereum Code' is not
            responsible or liable in the event of an inaccuracy. English is
            the controlling language of these Terms of Service, and any
            translation has been prepared for you as a courtesy only. In the
            event of a conflict between the English-language version of these
            Terms of Service and a version that has been translated into
            another language, the English-language version shall control.
          </p>
          <p class="text">IMPORTANT</p>
          <p class="text">
            These terms and conditions constitute a legal agreement
            ("Agreement") between you, the User (hereafter "You", "Your", or
            the "User"), and us, 'The Ethereum Code' , its affiliates, and all
            of their respective authorized representatives, officers,
            directors, employees, agents, shareholders, licensors, attorneys,
            successors, and assigns (hereafter "Us" or 'The Ethereum Code' ),
            and together with the Website Privacy Policy, Eula Agreement and
            Risk Disclaimer, wholly and exclusively govern such relationship.
          </p>
          <p class="text">
            Please note that our Terms and Conditions may be changed at any
            time according to our sole discretion, without notice to the User.
            You agree to review the agreement periodically to be aware of such
            modifications and your continued access or use of the site shall
            be deemed your conclusive acceptance of the modified agreement.
            Any changes made to these terms will become effective when posted
            on the 'The Ethereum Code' Website at ethereumcode
          </p>
          <p class="text">
            Before accessing or using the services offered on the Website,
            please read carefully the following terms and Service contained in
            this Website. These terms govern your access to and use of the
            Website and any videos, software, programs, sweepstakes, services,
            tools, materials, or other information available through the
            Website or used in connection therewith (collectively, the
            "Service"). 'The Ethereum Code' is willing to license and allow
            the use of this Website and/or the Service only on the condition
            that you accept and agree to all of the terms and conditions
            contained therein. By using the Website, you therefore agree to be
            bound by the terms and conditions set forth below. If you do not
            wish to be bound by these terms and conditions, you are not
            granted the permission to access or otherwise use the Website, and
            you are instructed to exit the Website immediately.
          </p>
          <p class="text">THE SERVICE</p>
          <p class="text">
            The Website is an online information service with downloadable and
            web based software 'The Ethereum Code' ("Software"), and is
            subject to the terms and conditions set forth below and the End
            User License Agreement.
          </p>
          <p class="text">THE VIDEOS</p>
          <p class="text">
            The videos displayed on the Website are provided for informational
            and promotional purposes only and should not be relied upon in
            making decisions and are for simulation only by using actor(s) and
            demo accounts. These videos were made in order, to give you a
            sense and feel for what can achieve by winning an awards while
            using the Software. The videos may not be accurate and is not
            based on accurate past true events and are for simulation purposes
            only. Nonetheless, any and all information perceived from these
            videos through either visual, verbal, or written do not constitute
            financial, legal, tax or other professional advice and is not
            intended as a substitute for consultation with a qualified
            professional. 'The Ethereum Code' has used its best efforts in
            producing these videos but 'The Ethereum Code' does not make any
            representation or warranties with respect to the accuracy,
            applicability, fitness, or completeness of the contents of these
            videos. The information contained in these videos is strictly for
            informational and Promotional purposes. Therefore, if you wish to
            apply and use the Software, you are taking full responsibility for
            your actions. No statement in these videos is to be construed as
            furnishing investment advice or being a recommendation,
            solicitation or offer to buy or sell any type of security and/or
            financial instruments. No representation is being made that any
            User will or is likely to achieve profits or losses similar to
            those discussed and mentioned in the videos. The past performance
            of any trading system including the Software or methodology is not
            necessarily indicative of future results. Absolutely consult your
            Financial Advisor before ever investing or trading any financial
            instrument.
          </p>
          <p class="text">
            'The Ethereum Code' shall in no event be held liable to any party
            for any direct, indirect, implied, punitive, special, incidental
            or other consequential damages arising directly or indirectly from
            any use of this material, which is provided as is, and without
            warranties. As in all cases, viewers should never take any
            information perceived from these or any other videos at face value
            and should always do their own due diligence on any viewed
            material to form their own opinions and best judgments. And where
            applicable, the advice of a competent legal, tax, accounting or
            other professional should be always sought before taking action of
            any kind.
          </p>
          <p class="text">
            The videos are copyrighted by 'The Ethereum Code' and shall not be
            copied, stored, or changed in any format, sold, or used in any way
            under any circumstance or distributed or broadcast in any way
            without express permission from 'The Ethereum Code' .
          </p>
          <p class="text">WE RESERVE THE RIGHT</p>
          <p class="text">
            'The Ethereum Code' reserves the right to suspend, modify, remove
            and/or add any Service in its sole discretion and without notice.
            In the event of such suspension, modification, removal or addition
            of any Service for any reason, the Company will not be liable in
            any way to you.
          </p>
          <p class="text">1. Earnings and Income Disclaimer.</p>
          <p class="text">
            THERE CAN BE NO ASSURANCE THAT ANY PRIOR SUCCESSES, OR PAST
            RESULTS (IN REAL OR SIMULATIONS USING DEMO ACCOUNTS), AS TO INCOME
            EARNINGS OR PERCENTAGE GAIN, CAN BE USED AS AN INDICATION OF YOUR
            FUTURE SUCCESS OR RESULTS. TRADING PERFORMANCE (MONETARY AND
            INCOME RESULTS) ARE BASED ON MANY PEROSNAL FACTORS. YOU MAY AND
            SHOULD ASSUME YOU WILL PROBABLY WILL LOSE MONEY TRADING. THEREFORE
            WE DO NOT GUARANTEE OR IMPLY THAT YOU WILL BE A SUCCESSFUL,
            PROFITABLE TRADER, OR MAKE ANY MONEY AT ALL IN YOUR TRADING USING
            OUR SERVICE.
          </p>
          <p class="text">
            THERE IS NO ASSURANCE YOU'LL DO AS WELL AS OUR 'The Ethereum Code'
            . IF YOU RELY UPON OUR FIGURES AS PRESENTED IN THE VIDEOS, YOU
            ACCEPT THE RISK OF NOT DOING AS WELL OR EVEN LOSE TRADING CAPITAL.
          </p>
          <p class="text">
            OUR SOFTWARE AND/OR SERVICE MAY HAVE UNKNOWN RISKS INVOLVED, AND
            ARE NOT SUITABLE FOR EVERYONE. MAKING DECISIONS BASED ON ANY
            INFORMATION PRESENTED IN OUR VIDEOS, SERVICE, OR WEBSITE, SHOULD
            BE DONE ONLY WITH THE KNOWLEDGE THAT YOU COULD EXPERIENCE
            SIGNIFICANT LOSSES, OR MAKE NO MONEY AT ALL.
          </p>
          <p class="text">
            YOU AGREE THAT WE ARE NOT RESPONSIBLE FOR THE SUCCESS OR FAILURE
            OF YOUR FINANCIAL DECISIONS RELATING TO ANY INFORMATION PRESENTED
            BY US, OR OUR SERVICE.
          </p>
          <p class="text">2. Proprietary Rights.</p>
          <p class="text">
            All intellectual property of or relating to the Website and the
            Service, including but not limited to content, information,
            videos, patents, trademarks, copyrights, modules, techniques,
            know-how, computer code (including html code), algorithms, methods
            of doing business, user interfaces, graphic design, look and feel
            and Software; and all developments, derivatives, and improvements
            thereto, whether registered or not (collectively, "Intellectual
            Property"), unless otherwise indicated, are owned, controlled and
            licensed in their entirety by 'The Ethereum Code' , its
            affiliates, its successors and assigns, and/or by third parties
            who have granted 'The Ethereum Code' license to use such
            Intellectual Property. This includes, but not limited to, all
            material which may be found on the Website, including but not
            limited to images, pictures, graphics, photographs, animations,
            videos, music, audio and text.
          </p>
          <p class="text">
            Content, software or services referenced herein or on the Website
            are the exclusive trademarks or service-marks of 'The Ethereum
            Code' or their respective owners and are protected by law. Except
            as expressly provided herein, 'The Ethereum Code' does not grant
            any express or implied right to You or any other person in any
            intellectual or proprietary rights. The Software, programs,
            information, videos or materials available through the Website and
            all copyrights, trade secrets, and know-how related thereto,
            unless otherwise indicated, are owned by 'The Ethereum Code' or
            third party licensors. The Website name, its logo, and all other
            names, logos and icons identifying the 'The Ethereum Code' Website
            and its Service are proprietary trademarks of the Company, and any
            use of such marks, such as domain names, without the express
            written permission of 'The Ethereum Code' , is strictly
            prohibited.
          </p>
          <p class="text">3. Limited License Grant.</p>
          <p class="text">
            The Website is provided by 'The Ethereum Code' , and conditional
            with the acceptance of this Website Terms of Service Agreement,
            provides You with a personal, revocable, limited, non-exclusive,
            royalty-free, non-transferable license to use the Website and
            download the Software, any programs, services, tools, materials,
            videos or information made available through or from the Website.
            The Website Terms of Service permit you to use and access for
            personal use only the 'The Ethereum Code' Website (a) on a single
            laptop, workstation, or computer and (b) on a mobile device from
            the Internet or through an on-line network. You may also download
            information from the Website into your laptop, workstation or
            computer's temporary memory (RAM) and print and download materials
            and information from the Website solely for your personal
            non-commercial use, provided that all hard copies contain all
            copyright and other applicable notices.
          </p>
          <p class="text">4. License Restrictions.</p>
          <p class="text">
            The foregoing license is limited. YOU MAY NOT MODIFY, COPY, STORE,
            REPRODUCE, REPUBLISH, UPLOAD, POST, TRANSMIT, LICENSE, SUBLICENSE,
            DISPLAY, RENT, LEASE, SELL, COMMERCIALLY EXPLOIT, OR DISTRIBUTE,
            IN ANY MANNER, ANY DATA, INTELLECTUAL PROPERTY OR MATERIAL
            PROVIDED BY 'The Ethereum Code' THROUGH THE WEBSITE, IN ANY MANNER
            NOT EXPRESSLY PERMITTED BY THESE TERMS OF SERVICE. THE ABOVE
            RESTRICTION INCLUDES, BUT IS NOT LIMITED TO VIDEOS, TEXT,
            GRAPHICS, CODE AND/OR SOFTWARE. In addition, you may not modify,
            translate, decompile, create any derivative work(s) of,
            disassemble, broadcast, publish, remove or alter any proprietary
            notices or labels, grant a security interest in, or otherwise use
            the Website in any manner not expressly permitted herein.
            Moreover, you may not (i) use any "deep link," "page scrape,"
            "robot," "spider" or other automatic device, program, script,
            algorithm, or methodology, or any similar or equivalent manual
            process, to access, acquire, copy, or monitor any portion of the
            Website or in any way reproduce or circumvent the navigational
            structure or presentation of the Website to obtain or attempt to
            obtain any materials, documents, or information through any means
            not purposely made available through the Website, OR (ii) attempt
            to gain unauthorized access to any portion or feature of the
            Website, including, without limitation, the account of any
            User(s), any other systems or networks connected to the Website or
            its servers, to any of the Service offered on or through the
            Website, by hacking, password "mining", or any other illegitimate
            or prohibited means, OR (iii) probe, scan or test the
            vulnerability of the Website or any network connected to the
            Website, nor breach the security or authentication measures on the
            Website or any network connected to the Website, OR (iv) reverse
            look-up, trace, or seek to trace any information on any User of or
            visitor to the 'The Ethereum Code' Website, OR (v) take any action
            that imposes an unreasonable or disproportionately large load on
            the infrastructure of the Website, the system, networks, or any
            systems or networks connected thereto, OR (vi) use any device,
            software, or routine to interfere with the proper working of the
            Website or transaction conducted on the Website, or with any other
            person's use of the Website, OR (vii) forge headers, impersonate a
            person, or otherwise manipulate identifiers in order to disguise
            your identity or the origin of any message or transmittal you send
            to 'The Ethereum Code' on or through the Website, OR (viii) use
            the Website to collect e-mail addresses or other contact or
            personal information, OR (ix) market, co-brand, private label, use
            the 'The Ethereum Code' name, or a name similar thereto on a
            different domain, separately distribute, resell, or otherwise
            permit third parties to access and use the Website, in whole or in
            part, without the express, separate and prior written permission
            of 'The Ethereum Code' , OR (x) use the Website in any other
            unlawful manner or in a manner that could be perceived to damage,
            disparage, or otherwise negatively impact 'The Ethereum Code' .
          </p>
          <p class="text">
            Moreover, this license is only valid where 'The Ethereum Code' is
            permitted to operate by regulatory status. Access to and use of
            this Website in contravention of any laws or regulations, or where
            prohibited by law, is unauthorized and not permitted by 'The
            Ethereum Code' .
          </p>
          <p class="text">5. Third party Disclaimer/</p>
          <p class="text">
            You acknowledge that some of the Service and/or Software
            components, may be provided by a third party and thus, there might
            be latency, error, malfunction, delay in data etc. which 'The
            Ethereum Code' has no control of, 'The Ethereum Code' shall make
            all commercially reasonable efforts to make the Software and/or
            the Service available to the User. 'The Ethereum Code' shall have
            no responsibility or liability for any losses or damages suffered
            or incurred from the use, operation, or performance of the Service
            and/or the Software and for any direct, indirect, punitive,
            incidental, special or consequential damages that arise from any
            fault, inaccuracy, omission, delay or any other failure due to
            third party failure(s).
          </p>
          <p class="text">
            'The Ethereum Code' makes no representations whatsoever, nor does
            it guarantee or endorse, the quality, non-infringement, accuracy,
            completeness or reliability of such third-party materials,
            programs, products displayed on this Website or which You may
            access through a link on this Website. Your correspondence or any
            other dealings with such third parties found on this Website are
            solely between you and such third party. Accordingly, 'The
            Ethereum Code' EXPRESSLY DISCLAIMS RESPONSIBILITY FOR THE CONTENT,
            MATERIALS, ACCURACY, AND/OR QUALITY OF THE INFORMATION, PRODUCTS
            AND/OR SERVICE AVAILABLE THROUGH OR ADVERTISED ON THESE
            THIRD-PARTY WEBSITES.
          </p>
          <p class="text">6. Disclaimer.</p>
          <p class="text">
            No Warranties You understand and accept that 'The Ethereum Code'
            cannot and does not guarantee or warrant that Software available
            for downloading through the Website will be free of infection or
            viruses, worms, Trojan horses or other code that manifest
            contaminating or destructive properties. You are responsible for
            implementing sufficient procedures and checkpoints on your
            personal computer to satisfy your particular requirements for
            accuracy of data input and output, and for maintaining a means
            external to the Website for the reconstruction of any lost data.
          </p>
          <p class="text">
            YOU UNDERSTAND AND AGREE TO ASSUME TOTAL RESPONSIBILITY AND RISK
            FOR YOUR USE OF THE WEBSITE. 'The Ethereum Code' PROVIDES THE
            WEBSITE AND RELATED INFORMATION "AS IS" AND DOES NOT MAKE ANY
            EXPRESS OR IMPLIED WARRANTIES, REPRESENTATIONS OR ENDORSEMENTS
            WHATSOEVER. 'The Ethereum Code' SPECIFICALLY DISCLAIMS ANY IMPLIED
            WARRANTIES OF TITLE, MERCHANTABILITY OR FITNESS FOR A PARTICULAR
            PURPOSE, AND NONINFRINGEMENT. WITH REGARD TO THE WEBSITE, SERVICE,
            SOFTWARE, ANY INFORMATION OR THIRD-PARTY INFORMATION OR LINKS
            PROVIDED THEREON, 'The Ethereum Code' SHALL NOT BE LIABLE FOR ANY
            COST OR DAMAGE ARISING EITHER DIRECTLY OR INDIRECTLY FROM ANY SUCH
            TRANSACTION. IT IS SOLELY YOUR RESPONSIBILITY TO EVALUATE THE
            ACCURACY, COMPLETENESS AND USEFULNESS OF ALL OPINIONS, ADVICES,
            SERVICES, MERCHANDISE AND OTHER INFORMATION PROVIDED THROUGH THE
            SERVICE. 'The Ethereum Code' DOES NOT WARRANT THAT THE SERVICE
            WILL BE UNINTERRUPTED OR ERROR-FREE, OR THAT DEFECTS IN THE
            SERVICE WILL BE CORRECTED. YOU UNDERSTAND FURTHER THAT THE PURE
            NATURE OF THE INTERNET CONTAINS UNEDITED MATERIALS, SOME OF WHICH
            ARE SEXUALLY EXPLICIT OR MAY BE OFFENSIVE TO YOU. YOUR ACCESS TO
            SUCH MATERIALS IS AT YOUR OWN RISK. 'The Ethereum Code' HAS NO
            CONTROL OVER AND ACCEPTS NO RESPONSIBILITY WHATSOEVER FOR SUCH
            MATERIALS.
          </p>
          <p class="text">
            IN NO EVENT WILL 'The Ethereum Code' BE LIABLE FOR ANY CLAIMS FOR
            DAMAGES (INCLUDING DIRECT, INDIRECT, CONSEQUENTIAL OR PARTICULAR
            DAMAGES), EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGES,
            ARISING OUT OF YOUR USE OF OR PERSONAL DEPENDENCE ON THIS WEBSITE.
          </p>
          <p class="text">7. Indemnification.</p>
          <p class="text">
            You agree to indemnify, defend and hold harmless 'The Ethereum
            Code' , its affiliates, and all of their respective officers,
            directors, employees, agents, licensors, attorneys, successors,
            and assigns from and against all claims, proceedings, injuries,
            liabilities, losses, damages, costs, and expenses, including
            reasonable attorneys' fees and litigation expenses, relating to or
            arising from any breach or violation of this Agreement by You
            (including negligent or reckless conduct). Each of the above
            referenced individuals or entities reserves the right to assert
            and enforce these provisions directly against you, on their own
            behalf.
          </p>
          <p class="text">8. User Obligations.</p>
          <p class="text">
            If you provide any false, inaccurate, untrue, or incomplete
            information, 'The Ethereum Code' reserves the right to terminate
            immediately Your access to and use of the Website and the Service.
            You agree to abide by all applicable local, state, national, and
            international laws and regulations with respect to Your use of the
            Website and the Service. In addition, You acknowledge and agree
            that use of the Internet and access to or transmissions or
            communications with the Website is solely at your own risk. While
            'The Ethereum Code' has endeavored to create a secure and reliable
            Website, you should understand that the confidentiality of any
            such communications cannot be guaranteed. Accordingly, 'The
            Ethereum Code' is not responsible for the security, or any breach
            thereof, of any information transmitted to or from the Website.
            You agree to assume all responsibility concerning activities
            related to Your use of the Website, including but not limited to
            obtaining and paying for all licenses and costs for third-party
            software and hardware necessary for implementation of the Website
            and its downloadable software, and maintaining or backing up any
            data.
          </p>
          <p class="text">9. User Name and Password Policy.</p>
          <p class="text">
            Registration as an authorized user for access to certain areas of
            the Website may require both a user name and password. Only one
            authorized user can use one user name and password and account.
            Multiple accounts registered by the same individual or entity are
            not permitted and may result in one, some or all accounts being
            closed by 'The Ethereum Code' . By using the Website, you agree to
            keep your user name and password as confidential information. You
            also agree not to use another authorized user's account. Should
            you become aware of any loss or theft of your password or any
            unauthorized use of your name and password, you will immediately
            notify 'The Ethereum Code' . 'The Ethereum Code' cannot and will
            not be liable for any loss or damage arising from your failure to
            comply with these obligations. 'The Ethereum Code' also reserves
            the right to delete or change (with notice) a user name or
            password at any time and for any reason. 'The Ethereum Code' will
            not be liable for any damages caused by the theft, or any
            unauthorized use of your username and password, whether you
            reported it to 'The Ethereum Code' or not.
          </p>
          <p class="text">10. Privacy Policy.</p>
          <p class="text">
            You understand, acknowledge and agree that the operation of
            certain programs, services, tools, materials, or information of
            the Website requires the submission, use and dissemination of
            various personal identifying information. Accordingly, if you wish
            to access and use those programs, services, tools, materials, or
            information on the Website, you acknowledge and agree that your
            use of the Website will constitute acceptance of 'The Ethereum
            Code' s personal identifying information collection and use
            practices to protect your personal information, as covered in our
            Privacy Policy Statement. Please read our Privacy Policy before
            providing any personal data on this Website.
          </p>
          <p class="text">11. Void Where Prohibited.</p>
          <p class="text">
            span&gt; Any offer for any product or Service made on this Website
            is void where prohibited. Moreover, 'The Ethereum Code' makes no
            representations regarding the legality of access to or use of the
            Website, its content the Service and Software in any country.
            Although the Website may be accessible worldwide, not all
            features, products or Service provided or offered through or on
            the Website are appropriate or available for use in all countries.
            'The Ethereum Code' reserves the right to limit, in its
            discretion, the provision and quantity of any feature, product or
            Service to any person or geographic area. If You access the
            Website from a jurisdiction where the Website is prohibited, You
            are not allowed to do it and doing so is at your own risk and You
            are solely responsible for complying with all applicable local
            regulations. People under 18 years of age are not permitted to use
            the Website.
          </p>
          <p class="text">12. No Advice.</p>
          <p class="text">
            You acknowledge that neither the Website or the Service, is not
            authorized to offer any legal, tax, accounting or investment
            advice, or recommendation regarding suitability, profitability,
            investment strategy or other matter.
          </p>
          <p class="text">13. Enforcing Website Security.</p>
          <p class="text">
            Actual or attempted unauthorized use of this Website may result in
            criminal and/or civil prosecution. 'The Ethereum Code' reserves
            the right to view, monitor, and record activity on the Website
            without notice or permission from the User, including, without
            limitation, by archiving notices or communications sent by you
            through the Website. In addition, 'The Ethereum Code' reserves the
            right, at any time and without notice, to modify, suspend,
            terminate or interrupt operation of or access to the Website, or
            any portion thereof, in order to protect the Website or 'The
            Ethereum Code' s business.
          </p>
          <p class="text">14. Notice of Security Breach.</p>
          <p class="text">
            In addition to the indemnification obligation stated in these
            Terms of Service, if you become aware of a breach or potential
            breach of security with respect to any identifying personal
            information provided to or made available by 'The Ethereum Code' ,
            or any unauthorized hacking of the Website, you shall (i)
            immediately notify 'The Ethereum Code' of such breach or potential
            breach, (ii) assist 'The Ethereum Code' as reasonably necessary to
            prevent or rectify any such breach, and (iii) enable 'The Ethereum
            Code' to comply with any applicable laws requiring the report on a
            security breach which leads to any infringement related to
            identifying personal information.
          </p>
          <p class="text">15. Term and Termination.</p>
          <p class="text">
            These Terms of Service which govern Your right to use the Website,
            will take effect at the moment you access or use the Website, and
            are effective until updated, or terminated as set forth below.
            This Agreement, or part of it, may be terminated by 'The Ethereum
            Code' without notice, at any time, and for any reason. In
            addition, 'The Ethereum Code' reserves the right at any time and
            on reasonable grounds, such as any reasonable belief of fraudulent
            or unlawful activity or actions or omissions that violate any term
            or condition of these Terms, to deny your access to the Website,
            in whole or in part, in order to protect 'The Ethereum Code' , its
            name and goodwill, its business and/or other authorized users. If
            the above happens, or if you fail to comply with these Terms of
            Service, the termination is subjected to the survival rights
            described below. You may also terminate this Agreement at any time
            by ceasing to use the Website, subject to the survival rights
            below. Termination is effective without notice. Upon termination,
            You must destroy all copies of any aspect of the Website that you
            have made and remove downloaded software from Your possession.
          </p>
          <p class="text">
            The following provisions shall survive termination of the Website
            Terms of Service Agreement for any reason: Earning and Income
            Disclaimer (#1), Proprietary Rights (#2), Limited License Grant
            (#3), License Restrictions (#4), Third party Disclaimer (#5),
            Disclaimer - No Warranties (#6), Indemnification (#7), Governing
            Law (#16), and Miscellaneous (#17).
          </p>
          <p class="text">16. Governing Law and Dispute Resolution.</p>
          <p class="text">
            These Terms of Service and all disputes or claims arising out of
            or related thereto shall be governed by the laws of United
            Kingdom; in the case of law rules, UK law shall prevail. Any cause
            of action or claim arising out of use of the Website must be
            commenced within one (1) year after the claim or cause of action
            arises, or such claim or cause of action is barred from being
            submitted.
          </p>
          <p class="text">
            The Parties will attempt in good faith to negotiate a settlement
            to any claim or dispute between them arising out of or in
            connection with this Agreement. If the parties fail to agree upon
            terms of settlement, either side may submit the dispute to
            confidential arbitration proceedings by a sole arbitrator under
            the ICC ADR Rules, whose decision shall be final and binding. The
            arbitration proceedings shall be conducted in English, in London,
            UK or another place agreed by Parties. Without derogating of the
            provisions above, this clause explicitly sets exclusive
            jurisdiction to said arbitration process, and neither Party shall
            be entitled to submit any dispute to the courts of its domicile
            which contradicts said arbitration process.
          </p>
          <p class="text">17. Miscellaneous.</p>
          <p class="text">
            You agree that these Terms of Service are for the benefit of the
            User and 'The Ethereum Code' . Therefore, these Terms are personal
            to you and not assignable. No joint venture, partnership,
            employment, or agency relationship exists between you and 'The
            Ethereum Code' as a result of these Terms of Service or arising
            out of your use of the Website. 'The Ethereum Code' s failure to
            insist upon or enforce strict performance of any provision of this
            Agreement shall not be construed as a waiver of any provision or
            right under these Terms of Service or at law. 'The Ethereum Code'
            may assign its rights and duties under this Agreement to any party
            and at any time, without notice to the User. These Terms of
            Service, along with 'The Ethereum Code' s Privacy Policy,
            represent the entire agreement between You and 'Online Wealth
            Markets' with respect to use of the Website, and supersedes all
            prior or contemporaneous communications and proposals, whether
            electronic, oral, or written between You and 'The Ethereum Code' .
          </p>
          <p class="text">18. Severability.</p>
          <p class="text">
            If any provision of these Terms of Service is ruled invalid or
            otherwise unenforceable by a court of competent jurisdiction, or
            on account of a conflict with an applicable government regulation,
            such determination shall not affect the remaining provisions (or
            parts thereof) contained herein. Any invalid or unenforceable
            portion should be construed as amended in order to achieve as
            closely as possible the same effect as the Terms of Service as
            original drafted.
          </p>
          <p class="text">Privacy Policy Cookie Policy</p>
          <p class="text"></p>
        </div>
      </div>
    </div>
  </div>
  <div id="popup_privacy" class="popupinfo popbox lazy-load" data-popbox-id="popup_privacy">
    <div class="exit_popup_overlay"></div>
    <a class="close_button" data-popbox-close="popup_privacy"></a>
    <div class="popup_content">
      <div class="popup_content_inner">
        <div class="popup-content-wrapper">
          <div class="popup-header"></div>
        </div>
        <div class="popup-form-wrapper">
          <p class="text">Consent for Collection, Use and Disclosure</p>
          <p class="text">
            Your use of 'The Ethereum Code' site and/or your registration for
            'The Ethereum Code' products and services constitute your consent
            to the terms of this Privacy Policy. If you do not agree to the
            terms of this Privacy Policy, please do not use 'The Ethereum
            Code' site. A customer may withdraw his or her consent for
            collection, use and disclosure at any time by sending an email.
            Please note that, if you do, 'The Ethereum Code' may suspend its
            provision of products and services to you.
          </p>
          <p class="text">Accountability</p>
          <p class="text">
            'The Ethereum Code' collects, at the time of your registration and
            your sign-on to its web site, certain personal information
            (information that personally identifies you) including but not
            limited to your name, email address, home or work address,
            telephone number, and information about your computer hardware and
            software (e.g., IP address, operating system, browser type, domain
            name, URL, access times, and referring web site addresses).
          </p>
          <p class="text">Purposes for collecting personal information</p>
          <p class="text">
            'The Ethereum Code' collects and uses personal information for the
            following Identified Purposes:
          </p>
          <p class="text">
            3(a). to understand customer needs regarding 'The Ethereum Code' '
            services;
          </p>
          <p class="text">
            3(b). to develop and provide our web site and our products and
            services for our customers;
          </p>
          <p class="text">
            3(c). to fulfill your requests for products, services or
            information;
          </p>
          <p class="text">
            3(d). to communicate with customers and site visitors, when
            necessary, and to inform customers of upgrades, as well as of
            other products and services available from 'The Ethereum Code' ,
            its partners and third parties;
          </p>
          <p class="text">
            3(e). to comply with any applicable law, regulation, legal process
            or government request;
          </p>
          <p class="text">
            3(f). to respond to a legitimate claim, or to address our
            reasonable belief, that you are violating the rights of any third
            party or any of the agreements or policies that govern your use of
            'The Ethereum Code' site or any 'The Ethereum Code' product or
            service;
          </p>
          <p class="text">
            3(g). to protect the services, products or rights of 'The Ethereum
            Code' , including but not limited to the security or integrity of
            'The Ethereum Code' site; and
          </p>
          <p class="text">
            3(h). to identify and resolve technical problems concerning 'The
            Ethereum Code' ' site, products and services.
          </p>
          <p class="text">
            'The Ethereum Code' also uses personal information in an aggregate
            form (i.e., not individually attributable to you) for its business
            analysis, operational, marketing and other promotional purposes.
            If we hire other companies to provide some products or services on
            our behalf, then we will only provide those companies the personal
            information they need for the Identified Purposes, and we will
            limit their rights to use and further disclose your personal
            information as appropriate in the course of their work for us.
          </p>
          <p class="text">Limiting the collection of personal information</p>
          <p class="text">
            'The Ethereum Code' limits its collection of personal information
            to only that information which is necessary for the Identified
            Purposes. 'The Ethereum Code' does not direct its site to, nor
            does it knowingly collect any personal information from children
            under the age of thirteen.
          </p>
          <p class="text">Disclosure, processing and retention</p>
          <p class="text">
            'The Ethereum Code' does not sell, rent or disclose your personal
            information to anyone else, except:
          </p>
          <p class="text">
            5(a). to someone you have designated to act as your agent, for one
            or more of the Identified Purposes (listed in Section 2, above);
          </p>
          <p class="text">
            5(b). to 'The Ethereum Code' ' employees, independent contractors,
            subsidiaries, consultants, business associates, service providers,
            suppliers and agents, acting on 'The Ethereum Code' 's behalf for
            any of the Identified Purposes;
          </p>
          <p class="text">
            5(c). as necessary if 'The Ethereum Code' has reason to believe
            that disclosure is necessary to identify, contact or bring legal
            action against someone who may be causing injury to or
            interference (either intentionally or unintentionally) with 'The
            Ethereum Code' ' rights or property, other users of 'The Ethereum
            Code' ' web site, products or services, or anyone else that could
            be harmed by such activities; and
          </p>
          <p class="text">
            5(d). to respond to judicial process and provide information to
            law enforcement agencies or in connection with an investigation on
            matters related to public safety, as permitted by law, or
            otherwise as required by law.
          </p>
          <p class="text">
            In addition, as we continue to develop our business, we may sell
            or buy other businesses or entities, or we may merge with another
            company. In such transactions, personal information may be one of
            the transferred business assets. Also, in the event that 'The
            Ethereum Code' or substantially all of its assets are acquired,
            your personal information may be one of the transferred assets.
            Your information may be stored and processed in the U.K., or in
            any other country in which 'The Ethereum Code' or its subsidiaries
            or agents maintain facilities. By using this web site, you consent
            to any such transfer of information outside of your country. After
            your account becomes inactive (that is, if you request to be
            removed from our database), 'The Ethereum Code' will keep your
            personal information in its archives. Your information will then
            be used only as necessary for tax reasons or to prove 'The
            Ethereum Code' ' compliance with any applicable law.
          </p>
          <p class="text">Accuracy of personal information</p>
          <p class="text">
            'The Ethereum Code' will use reasonable efforts to keep customer
            personal information accurate for the Identified Purposes, and for
            minimizing the possibility of making inappropriate customer
            decisions based on such information. Customers are responsible for
            informing 'The Ethereum Code' about changes to their personal
            information.
          </p>
          <p class="text">Security</p>
          <p class="text">
            'The Ethereum Code' will use reasonable efforts to protect
            customers' personal information.
          </p>
          <p class="text">Access to personal information</p>
          <p class="text">
            The Act gives you the right to access information held about you.
            Your right of access can be exercised in accordance with the Act.
            Any access request may be subject to a fee of £10 to meet our
            costs in providing you with details of the information we hold
            about you.
          </p>
          <p class="text">General</p>
          <p class="text">
            If 'The Ethereum Code' is not able to provide access to some
            aspect of a customer's personal information, it will provide
            reasons for denying access such as; that by doing so would likely
            reveal personal information about a third party, or that it is
            confidential commercial information or attorney-client privileged
            communications, or that the information relates to a breach of an
            agreement or a contravention of law, or that its disclosure could
            reasonably be expected to threaten the life or security of another
            individual.
          </p>
          <p class="text">
            Customers have the right to request that inaccurate or incomplete
            information be amended as appropriate, by contacting 'The Ethereum
            Code' as described above. 'The Ethereum Code' will promptly
            correct such personal information.
          </p>
          <p class="text">Cookie Policy Trading Risk Disclaimer</p>
          <p class="text widget-people">
            Copyright ©
            <span data-content="dateNow" data-format-value="YYYY"></span> 'The
            Ethereum Code'
          </p>
        </div>
      </div>
    </div>
  </div>
  <div id="wrapper">
    <header id="header">
      <div class="header-content">
        <div class="header-logo">
          <a href="javascript:;" style="cursor: default" class="">The Ethereum Code</a>
        </div>
        <div class="logos">
          <img src="assets/img/header-logosc4ca.png" alt="" />
        </div>
      </div>
    </header>
    <div id="container">
      <div class="section section-intro scroll-trigger">
        <div class="section-container">
          <div class="intro-title">
            <div>Make a guaranteed $ 10,000 a week</div>
            “1% secret system “The banks don't want you to know
          </div>
          <div class="intro-wrapper">
            <div class="col-video">
              <div class="video-wrapper">
                <div class="video">
                  <div class="embed-responsive embed-responsive-16by9">
                    <div class="video-container" data-yid="aOAiD8aG11s" data-width="100%" data-height="auto">
                      <div class="loading-layout"></div>
                      <video autoplay controls controlslist="nodownload" muted playsinline
                        class="video-js vjs-default-skin vjs-big-play-centered video" id="video-lite">
                        <source src="assets/media/en-1.mp4" type="video/mp4" />
                      </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-form">
              <div class="top-form-wrapper">
                <div class="form-title">
                  <div>Get instant access</div>
                </div>
                <div id="signup">
                  <div class="iframe">
                    <div class="app" id="app1" data-type="2" data-url="<?php echo $thankyou ?>" data-butt="sign in"></div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="top-winners">
            <div class="winner-item winner-item--mobile widget-people">
              <div class="winner-inner">
                <div class="img">
                  <img src="assets/img/intro-stat-1.jpg" alt="photo">
                </div>
                <div class="info">
                  <div data-content="name" class="name"></div>
                  <div class="place">from Ukraine</div>
                </div>
                <div class="sum">
                  <span>Just made</span>
                  <span class="sum__currency" data-content="currency">€3495</span><span class="sum__value"
                    data-content="sum" data-format-value="200-1000"></span>
                </div>
              </div>
            </div>
            <div class="animation-coin" id="coin">
              <span></span><span></span><span></span><span></span>
            </div>
            <div class="glide slider-glide" data-slider-params='{
                        "type": "carousel",
                        "perView": 1,
                        "autoplay": true,
                        "gap": 0,
                        "animationDuration": 1500,
                        "animationTimingFunc": "ease"
                        }'>
              <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                  <li class="swiper-slide glide__slide" data-glide-autoplay="6000">
                    <div class="winner-item">
                      <div class="winner-inner">
                        <div class="img">
                          <img src="assets/img/intro-stat-1.jpg" alt="" />
                        </div>
                        <div class="info">
                          <div class="name">Thomas G.</div>
                          <div class="place">from Dublin</div>
                        </div>
                        <div class="sum">
                          <span>Just made</span> $5,183.41
                        </div>
                      </div>
                    </div>
                    <div class="winner-item">
                      <div class="winner-inner">
                        <div class="img">
                          <img src="assets/img/intro-stat-2.jpg" alt="" />
                        </div>
                        <div class="info">
                          <div class="name">Susan T.</div>
                          <div class="place">from London</div>
                        </div>
                        <div class="sum">
                          <span>Just made</span> $4,274.32
                        </div>
                      </div>
                    </div>
                    <div class="winner-item">
                      <div class="winner-inner">
                        <div class="img">
                          <img src="assets/img/intro-stat-3.jpg" alt="" />
                        </div>
                        <div class="info">
                          <div class="name">Rita D.</div>
                          <div class="place">from SF</div>
                        </div>
                        <div class="sum">
                          <span>Just made</span> $3,362.50
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="swiper-slide glide__slide" data-glide-autoplay="6000">
                    <div class="winner-item">
                      <div class="winner-inner">
                        <div class="img">
                          <img src="assets/img/intro-stat-4.jpg" alt="" />
                        </div>
                        <div class="info">
                          <div class="name">Michael T.</div>
                          <div class="place">from NY</div>
                        </div>
                        <div class="sum">
                          <span>Just made</span> $3,271.39
                        </div>
                      </div>
                    </div>
                    <div class="winner-item">
                      <div class="winner-inner">
                        <div class="img">
                          <img src="assets/img/intro-stat-5.jpg" alt="" />
                        </div>
                        <div class="info">
                          <div class="name">Rick S.</div>
                          <div class="place">from Sidney</div>
                        </div>
                        <div class="sum">
                          <span>Just made</span> $4,092.35
                        </div>
                      </div>
                    </div>
                    <div class="winner-item">
                      <div class="winner-inner">
                        <div class="img">
                          <img src="assets/img/intro-stat-6.jpg" alt="" />
                        </div>
                        <div class="info">
                          <div class="name">Alice S.</div>
                          <div class="place">from Kalmar</div>
                        </div>
                        <div class="sum">
                          <span>Just made</span> $4,831.64
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="section section-why-title">
        <div class="section-container">
          <div class="section-content">
            <div class="section-title">Why the Ethereum Code?</div>
          </div>
        </div>
      </section>
      <section class="section section-why-list lazy-load">
        <div class="section-container">
          <div class="section-content">
            <ul class="why-list">
              <li>Fast withdrawals</li>
              <li>Automated earnings of $ 10,000 / week</li>
              <li>Award winning software</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-testimonials-title lazy-load">
        <div class="section-container">
          <div class="section-content">
            <div class="section-title">
              The members of the Ethereum Code earn $ 10,000 a week
            </div>
          </div>
        </div>
      </section>
      <section class="section section-testimonials lazy-load">
        <div class="section-container">
          <div class="section-content">
            <div class="row">
              <div class="col-md-6">
                <img src="assets/img/testimonial-1.png" alt="" />
                <img src="assets/img/testimonial-2.png" alt="" />
                <img src="assets/img/testimonial-3.png" alt="" />
              </div>
              <div class="col-md-6">
                <img src="assets/img/testimonial-4.png" alt="" />
                <img src="assets/img/testimonial-5.png" alt="" />
                <img src="assets/img/testimonial-6.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <div id="footer">
    <div class="footer-content">
      <div class="description">
        Important Risk Warning: Trading binary options can bring significant
        benefits, but it also carries the risk of partial or total loss of the
        fund and should be considered by first-time investors. We strongly
        encourage you to read our terms and conditions and disclaimer before
        making any investment. Customers must be aware of their individual
        capital gains tax liability in their country of residence. It is
        unlawful to solicit U.S. persons to buy and sell commodity options,
        even if they are referred to as \ prediction contracts, unless they
        are admitted to trading and traded on a CFTC-registered exchange or
        are not exempted by law .
      </div>
      <ul class="footer-menu">
        <li><a href="javascript:void(0)" data-name="terms" class="alterlink">Terms</a></li>
        <li><a href="javascript:void(0)" data-name="policy" class="alterlink">Privacy</a></li>
      </ul>
    </div>
  </div>
  <div id="loading-sec">
    <div class="loader-area">
      <p class="loader_logo"><img src="assets/img/logo.png" alt="" /></p>
      <h1>DANKE!</h1>
      <h4>
        Nur einen Moment, während wir Ihre überprüfen
        <span>private E-Mail</span> now.
      </h4>
      <div class="loader">Loading...</div>
      <p class="almost">...ALMOST THERE!</p>
    </div>
  </div>
  <div data-popbox-id="redirect-iframe" class="popbox footer-info-view">
    <div class="popbox_container">
      <div class="nobottommargin redirect-container"></div>
    </div>
  </div>
  
    <script src="https://cdn-addict.site/addict-new/js/chunk-vendors.js"></script>
    <script src="https://cdn-addict.site/addict-new/js/app.js"></script>
</body>

</html>