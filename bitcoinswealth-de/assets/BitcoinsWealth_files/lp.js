$(document).ready(function() {

    var phoneUtil = i18n.phonenumbers.PhoneNumberUtil.getInstance();
    var formLoader = $('.formLoader');
    var urlParams = new URLSearchParams(window.location.search.substring(1));

    $('.formLead').find('.formCountry').val(countryCode);

    $('.formLead').find('.formPrefix').val($('option:selected', $('.formLead').find('.formCountry')).attr('data_prefix'));

    $('.formLead').find('.formCountry').change(function() {

        $(this).parents('.formLead').find('.formPrefix').val($('option:selected', this).attr('data_prefix'));

        var errorElem = $(this).parents('.formLead').find('.formCountryError');
        errorElem.text('');
        errorElem.hide();

        var val = $(this).val();
        if (val == '') {
            errorElem.text(errorMessages.countryEmpty);
            errorElem.show();
        } else {
            $(this).parents('.formLead').find('.formPrefixError').hide();
        }

        $(this).parents('.formLead').find('.formPhone').keyup();

    });

    $('.formLead').find('.formFname').keyup(function() {

        var format = /[ !\d@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var errorElem = $(this).parents('.formLead').find('.formFnameError');
        errorElem.text('');
        errorElem.hide();

        var val = $(this).val();
        if (val == '') {
            errorElem.text(errorMessages.fNameEmpty);
            errorElem.show();
        } else if (val.length < 2) {
            errorElem.text(errorMessages.fNameTooShort);
            errorElem.show();
        } else if (format.test(val)) {
            errorElem.text(errorMessages.fNameInvalid);
            errorElem.show();
        }

    });

    $('.formLead').find('.formLname').keyup(function() {

        var format = /[!\d@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
        var errorElem = $(this).parents('.formLead').find('.formLnameError');
        errorElem.text('');
        errorElem.hide();

        var val = $(this).val();
        if (val == '') {
            errorElem.text(errorMessages.lNameEmpty);
            errorElem.show();
        } else if (val.length < 2) {
            errorElem.text(errorMessages.lNameTooShort);
            errorElem.show();
        } else if (format.test(val)) {
            errorElem.text(errorMessages.lNameInvalid);
            errorElem.show();
        }

    });

    $('.formLead').find('.formEmail').keyup(function() {

        var errorElem = $(this).parents('.formLead').find('.formEmailError');
        errorElem.text('');
        errorElem.hide();

        var val = $(this).val();
        if (val == '') {
            errorElem.text(errorMessages.emailEmpty);
            errorElem.show();
        } else if (!isEmail(val)) {
            errorElem.text(errorMessages.emailInvalid);
            errorElem.show();
        }

    });


    $('.formLead').find('.formPassword').keyup(function() {

        var format = /^.{1,6}$/;
        var errorElem = $(this).parents('.formLead').find('.formPasswordError');
        errorElem.text('');
        errorElem.hide();

        var val = $(this).val();
        if (val == '') {
            errorElem.text(errorMessages.passwordEmpty);
            errorElem.show();
            /*        } else if(!isPassword(val)) {
                        errorElem.text(errorMessages.passwordInvalid);
                        errorElem.show();*/

        } else if (format.test(val)) {
            errorElem.text(errorMessages.passwordInvalid);
            errorElem.show();
        }

    });

    $('.formLead').find('.formPassword2').keyup(function() {

        var format = /^.{1,6}$/;
        var errorElem = $(this).parents('.formLead').find('.formPassword2Error');

        var pass = $('.formLead').find('.formPassword');

        errorElem.text('');
        errorElem.hide();

        var val = $(this).val();

        if (val == '') {
            errorElem.text(errorMessages.password2Empty);
            errorElem.show();
        } else if ( /*format.test(val) && */ pass.val() != val) {
            errorElem.text(errorMessages.password2Invalid);
            errorElem.show();
        }

    });



    $('.formLead').find('.formPrefix').keyup(function() {

        var format = /^\d+$/;
        var errorElem = $(this).parents('.formLead').find('.formPrefixError');
        errorElem.text('');
        errorElem.hide();

        var val = $(this).val();
        if (val == '') {
            errorElem.text(errorMessages.prefixEmpty);
            errorElem.show();
        } else if (!format.test(val)) {
            errorElem.text(errorMessages.prefixInvalid);
            errorElem.show();
        }

    });

    $('.formLead').find('.formPhone').keyup(function() {

        var format = /^\d+$/;
        var errorElem = $(this).parents('.formLead').find('.formPhoneError');
        errorElem.text('');
        errorElem.hide();

        //var cstm_attr = $('.formLead').find('.formPhone').attr("valid");

        var val = $(this).val();
        var pCode = $(this).parents('.formLead').find('.formPrefix').val();
        var cCode = $(this).parents('.formLead').find('.formCountry').val();
        var Cattr = $(this).find('.formPhone').attr("valid");
        var parsedPhone = '';
        try {
            parsedPhone = phoneUtil.parse(pCode + val, cCode, Cattr);
        } catch (err) {
            parsedPhone = '';
        }
        if (Cattr) {
            valid = true;
        } else if (val == '') {
            $(this).find('.valid-btn').attr('error', 'show');
            errorElem.text(errorMessages.phoneEmpty);
            errorElem.show();
        } else if (val.length < 4) {
            $(this).find('.valid-btn').attr('error', 'show');
            errorElem.text(errorMessages.phoneTooShort);
            errorElem.show();
        } else if (!format.test(val)) {
            $(this).find('.valid-btn').attr('error', 'show');
            errorElem.text(errorMessages.phoneInvalid);
            errorElem.show();
        } else if (parsedPhone == '') {
            $(this).find('.valid-btn').attr('error', 'show');
            errorElem.text(errorMessages.phoneInvalid);
            errorElem.show();
        } else if (parsedPhone != '' && !phoneUtil.isValidNumber(parsedPhone)) {
            $(this).find('.valid-btn').attr('error', 'show');
            errorElem.text(errorMessages.phoneInvalid);
            errorElem.show();
        }

    });


    $('.formLead').find('.formTos').change(function() {

        var errorElem = $(this).parents('.formLead').find('.formTosError');
        errorElem.text('');
        errorElem.hide();

        var val = $(this).is(':checked');

        if (!val) {
            errorElem.text(errorMessages.checkTos);
            errorElem.show();
        }

    });

    if ($(this).find('.formLname').val() == '') {
        var fullName = $(this).find('.formFname').val().split(' ');
        if (typeof fullName[1] != 'undefined') {
            $(this).find('.formFname').val(fullName[0]);
            $(this).find('.formLname').val(fullName[1]);
        }
    }

    var busy = 0;
    $('.formLead').submit(function(e) {
        e.preventDefault();
        if (busy == 0) {
            busy = 1;

            formLoader.show();
            var valid = true;

            var formIpVal = $(this).find('.formIp').val();
            var formTransIdVal = $(this).find('.formTransId').val();
            var formOfferIdVal = $(this).find('.formOfferId').val();
            var formAffIdVal = $(this).find('.formAffId').val();
            var formAffSubVal = $(this).find('.formAffSub').val();
            var formLangVal = $(this).find('.formLang').val();


            if (typeof $(this).find('.formFname').val() !== 'undefined') {

                var fName = $(this).find('.formFname');
                var fNameVal = $(this).find('.formFname').val();
                var fNameError = $(this).find('.formFnameError');

                var format = /[ !\d@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
                fNameError.text('');
                fNameError.hide();
                if (fNameVal == '') {
                    fNameError.text(errorMessages.fNameEmpty);
                    fNameError.show();
                    valid = false;
                } else if (fNameVal.length < 2) {
                    fNameError.text(errorMessages.fNameTooShort);
                    fNameError.show();
                    valid = false;
                } else if (format.test(fNameVal)) {
                    fNameError.text(errorMessages.fNameInvalid);
                    fNameError.show();
                    valid = false;
                }

            }

            if (typeof $(this).find('.formLname').val() !== 'undefined') {

                var lName = $(this).find('.formLname');
                var lNameVal = $(this).find('.formLname').val();
                var lNameError = $(this).find('.formLnameError');

                var format = /[!\d@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
                lNameError.text('');
                lNameError.hide();
                if (typeof lNameVal != 'undefined' && lNameVal == '') {
                    lNameError.text(errorMessages.lNameEmpty);
                    lNameError.show();
                    valid = false;
                } else if (typeof lNameVal != 'undefined' && lNameVal.length < 2) {
                    lNameError.text(errorMessages.lNameTooShort);
                    lNameError.show();
                    valid = false;
                } else if (typeof lNameVal != 'undefined' && format.test(lNameVal)) {
                    lNameError.text(errorMessages.lNameInvalid);
                    lNameError.show();
                    valid = false;
                }

            }

            if (typeof $(this).find('.formEmail').val() !== 'undefined') {

                var email = $(this).find('.formEmail');
                var emailVal = $(this).find('.formEmail').val();
                var emailError = $(this).find('.formEmailError');

                emailError.text('');
                emailError.hide();

                if (emailVal == '') {
                    emailError.text(errorMessages.emailEmpty);
                    emailError.show();
                    valid = false;
                } else if (!isEmail(emailVal)) {
                    emailError.text(errorMessages.emailInvalid);
                    emailError.show();
                    valid = false;
                }

            }


            if (typeof $(this).find('.formPassword').val() !== 'undefined') {

                var password = $(this).find('.formPassword');
                var passwordVal = $(this).find('.formPassword').val();
                var passwordError = $(this).find('.formPasswordError');

                var format = /^.{1,6}$/;
                passwordError.text('');
                passwordError.hide();

                if (passwordVal == '') {
                    passwordError.text(errorMessages.passwordEmpty);
                    passwordError.show();
                    valid = false;
                } else if (passwordVal.length < 6) {
                    passwordError.text(errorMessages.passwordTooShort);
                    passwordError.show();
                    valid = false;
                } else if (format.test(passwordVal)) {
                    passwordError.text(errorMessages.passwordInvalid);
                    passwordError.show();
                    valid = false;
                }

            }

            if (typeof $(this).find('.formPassword2').val() !== 'undefined') {

                var password = $(this).find('.formPassword2');
                var passwordVal = $(this).find('.formPassword2').val();
                var passwordError = $(this).find('.formPassword2Error');
                var pass = $(this).find('.formPassword').val();

                var format = /^.{1,6}$/;
                passwordError.text('');
                passwordError.hide();

                if (passwordVal == '') {
                    passwordError.text(errorMessages.password2Empty);
                    passwordError.show();
                    valid = false;
                } else if (passwordVal.length < 6) {
                    passwordError.text(errorMessages.passwordTooShort);
                    passwordError.show();
                    valid = false;
                } else if ( /*format.test(passwordVal) && */ passwordVal != pass) {
                    passwordError.text(errorMessages.password2Invalid);
                    passwordError.show();
                    valid = false;
                }

            }









            if (typeof $(this).find('.formCountry').val() !== 'undefined') {

                var country = $(this).find('.formCountry');
                var countryVal = $(this).find('.formCountry').val();
                var countryError = $(this).find('.formCountryError');

                countryError.text('');
                countryError.hide();

                if (countryVal == '') {
                    countryError.text(errorMessages.countryEmpty);
                    countryError.show();
                    valid = false;
                }

                var prefix = $(this).find('.formPrefix');
                var prefixVal = $(this).find('.formPrefix').val();
                var prefixError = $(this).find('.formPrefixError');

                var format = /^\d+$/;
                prefixError.text('');
                prefixError.hide();

                if (prefixVal == '') {
                    prefixError.text(errorMessages.prefixEmpty);
                    prefixError.show();
                    valid = false;
                } else if (!format.test(prefixVal)) {
                    prefixError.text(errorMessages.prefixInvalid);
                    prefixError.show();
                    valid = false;
                }

            }

            if (typeof $(this).find('.formPhone').val() !== 'undefined') {

                var phone = $(this).find('.formPhone');
                var phoneCode = $(this).find('.formPrefix').val();
                var phoneVal = $(this).find('.formPhone').val();
                var phoneAttr = $(this).find('.formPhone').attr("valid");
                var phoneError = $(this).find('.formPhoneError');
                //console.log("attr " + phoneAttr);
                var format = /^\d+$/;
                phoneError.text('');
                phoneError.hide();
                var parsedPhone = '';
                try {
                    parsedPhone = phoneUtil.parse(phoneCode + phoneVal, countryVal, phoneAttr);
                } catch (err) {
                    parsedPhone = '';
                }
                if (phoneAttr) {
                    valid = true;
                } else if (typeof phoneVal != 'undefined' && phoneVal == '') {
                    $(this).find('.valid-btn').attr('error', 'show');
                    phoneError.text(errorMessages.phoneEmpty);
                    phoneError.show();
                    valid = false;
                } else if (typeof phoneVal != 'undefined' && phoneVal.length < 4) {
                    $(this).find('.valid-btn').attr('error', 'show');
                    phoneError.text(errorMessages.phoneTooShort);
                    phoneError.show();
                    valid = false;
                } else if (typeof phoneVal != 'undefined' && !format.test(phoneVal)) {
                    $(this).find('.valid-btn').attr('error', 'show');
                    phoneError.text(errorMessages.phoneInvalid);
                    phoneError.show();
                    valid = false;
                } else if (parsedPhone == '') {
                    $(this).find('.valid-btn').attr('error', 'show');
                    phoneError.text(errorMessages.phoneInvalid);
                    phoneError.show();
                    valid = false;
                } else if (parsedPhone != '' && !phoneUtil.isValidNumber(parsedPhone)) {
                    $(this).find('.valid-btn').attr('error', 'show');
                    phoneError.text(errorMessages.phoneInvalid);
                    phoneError.show();
                    valid = false;
                }

            }

            if (typeof $(this).find('.formPhone').val() !== 'undefined') {

                var tos = $(this).find('.formTos');
                var tosVal = $(this).find('.formTos').is(':checked');
                var tosError = $(this).find('.formTosError');

                tosError.text('');
                tosError.hide();

                if (!tosVal) {
                    tosError.text(errorMessages.checkTos);
                    tosError.show();
                    valid = false;
                }

            }


            if ($('#modal-poppp2').length != 0) {
                valid = false;
            }


            if ($smsVerify == true) {
                valid = true;
            }


            if ($(this).find('.formSend').val() == 0) {
                valid = false;
            }

            var sw5 = $(this).find('.formSw5').val();
            var sw6 = $(this).find('.formSw6').val();
            var cAmount = ($(this).find('#cAmount').length > 0) ? $(this).find('#cAmount').val() : '';
            var cWallet = ($(this).find('#cWallet').length > 0) ? $(this).find('#cWallet').val() : '';
            var formType = ($(this).find('.formType').length > 0) ? $(this).find('.formType').val() : '';
            var lp_affiliate_id = urlParams.get('Affiliate_ID') || '';
            var lp_request_id = urlParams.get('Request_ID') || '';
            var lp_source = urlParams.get('Source') || '';
            var lp_s1 = urlParams.get('s1') || '';
            var lp_s2 = urlParams.get('s2') || '';
            var lp_s3 = urlParams.get('s3') || '';
            var lp_s4 = urlParams.get('s4') || '';
            var lp_s5 = lp_request_id;

            if (valid) {
                var urlQuery = 'firstName=' + fNameVal +
                    '&lastName=' + lNameVal +
                    '&email=' + emailVal +
                    '&password=' + passwordVal +
                    '&phone=' + prefixVal + phoneVal +
                    '&ip=' + formIpVal +
                    '&country=' + countryVal +
                    '&Affiliate_ID=' + lp_affiliate_id +
                    '&Request_ID=' + lp_request_id +
                    '&Source=' + lp_source +
                    '&s1=' + lp_s1 +
                    '&s2=' + lp_s2 +
                    '&s3=' + lp_s3 +
                    '&s4=' + lp_s4 +
                    '&s5=' + lp_s5 +
                    '&transactionId=' + formTransIdVal +
                    '&offerId=' + formOfferIdVal +
                    '&affiliateId=' + formAffIdVal +
                    '&affiliateSub=' + formAffSubVal +
                    '&source=' + source;

                $.post('/include/handler.php', {
                    "firstName": fNameVal,
                    "lastName": lNameVal,
                    "email": emailVal,
                    "password": passwordVal,
                    "country": countryVal,
                    "prefix": prefixVal,
                    "phone": phoneVal,
                    "tos": tosVal,
                    "ip": formIpVal,
                    "transactionId": formTransIdVal,
                    "affiliateId": formAffIdVal,
                    "affiliateSub": formAffSubVal,
                    "offerId": formOfferIdVal,
                    "lang": formLangVal,
                    "buyer": (typeof buyer != 'undefined' && buyer == "crypto") ? buyer : '',
                    "source": source,
                    "pageurl": pageurl,
                    "camount": cAmount,
                    "cwallet": cWallet,
                    //-------------------------------LeadsPedia----------------------------------------
                    'lp_s1': urlParams.get('s1'),
                    'lp_s2': urlParams.get('s2'),
                    'lp_s3': urlParams.get('s3'),
                    'lp_s4': urlParams.get('s4'),
                    'lp_s5': urlParams.get('s5'),
                    'lp_request_id': lp_request_id,
                    'lp_source': lp_source,
                    'lp_dob': urlParams.get('dob'),
                    //---------------------------------------------------------------------------------
                }, function(res) {
                    if (siteurl == "http://cedex.com") {
                        var resp = JSON.parse(res);
                        if (sw5 == "yes") {
                            if (sw6 == "1" || sw6 == "2") {
                                location.href = '/cedex_tnx_b/' + lang + '?' + urlQuery + '&buyer=' + resp.Buyer + '&contractID=' + resp.contractID + '&autoLogin=' + resp.AutoLoginLink;
                            } else {
                                location.href = '/cedex_tnx_c/' + lang + '?' + urlQuery + '&buyer=' + resp.Buyer + '&contractID=' + resp.contractID + '&autoLogin=' + resp.AutoLoginLink;
                            }
                        } else {
                            location.href = '/cedex_tnx_a/' + lang + '?' + urlQuery + '&buyer=' + resp.Buyer + '&contractID=' + resp.contractID + '&autoLogin=' + resp.AutoLoginLink;
                        }
                    } else if (formType == "site" || phoneAttr == false) {
                        formLoader.hide();
                        //window.top.location.href='https://cryptotrades.news/thank-you-subscribing/';
                        var resp = JSON.parse(res);
                        location.href = '/thank-you/' + lang + '?' + urlQuery + '&buyer=' + resp.Buyer + '&fromSite=1' + '&contractID=' + resp.contractID + '&autoLogin=' + resp.AutoLoginLink;
                        //jQuery('body').append('<div class="mModalOverlay"></div><div class="mThankYouModal">'+errorMessages.tnxMessage+'</div>');
                    } else if (siteurl == "https://cryptotrades.news") {
                        var resp = JSON.parse(res);
                        location.href = 'https://cryptotrades.news/thank-you-subscribing/?' + urlQuery + '&buyer=' + resp.Buyer + '&contractID=' + resp.contractID + '&autoLogin=' + resp.AutoLoginLink;
                    } else {
                        if (typeof buyer != 'undefined' && buyer == "crypto") {
                            var resp = JSON.parse(res);
                            console.log('first');
                            if (typeof resp.AutoLoginLink != 'undefined' && resp.AutoLoginLink != '') {
                                console.log('first1');
                                location.href = resp.AutoLoginLink;
                                location.href = '/thank-you/' + lang + '?' + urlQuery + '&buyer=' + resp.Buyer + '&redirUrl=' + encodeURI(resp.AutoLoginLink) + '&contractID=' + resp.contractID + '&autoLogin=' + resp.AutoLoginLink;
                            } else if (typeof resp.Buyer != 'undefined' && resp.Buyer == 'termasu') {
                                console.log('first2');
                                location.href = '/thank-you/' + lang + '?' + urlQuery + '&buyer=' + resp.Buyer + '&FormAutoLoginUser=' + emailVal + '&contractID=' + resp.contractID + '&autoLogin=' + resp.AutoLoginLink;
                            } else {
                                console.log('first3');
                                location.href = '/thank-you/' + lang + '?' + urlQuery + '&buyer=' + resp.Buyer + '&contractID=' + resp.contractID + '&autoLogin=' + resp.AutoLoginLink;
                            }
                        } else {
                            if (res != 'undefined') {
                                var resp = JSON.parse(res);
                            } else {
                                var resp = [];
                            }
                            console.log(resp);
                            var resp = JSON.parse(res);
                            if (typeof resp.Buyer != 'undefined' && resp.Buyer == 'termasu') {
                                console.log('second1');
                                location.href = '/thank-you/' + lang + '?' + urlQuery + '&buyer=' + resp.Buyer + '&FormAutoLoginUser=' + emailVal + '&contractID=' + resp.contractID + '&autoLogin=' + resp.AutoLoginLink;
                            } else {
                                console.log('second2');
                                location.href = '/thank-you/' + lang + '?' + urlQuery + '&buyer=' + resp.Buyer + '&contractID=' + resp.contractID + '&autoLogin=' + resp.AutoLoginLink;
                            }
                            formLoader.hide();
                            busy = 0;
                        }
                    }
                });

            } else {
                busy = 0;
                formLoader.hide();
            }
        }

    });

});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}