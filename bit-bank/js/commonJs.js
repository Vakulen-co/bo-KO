;
$.urlParam = function(name) {
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results == null) {
        return null;
    } else {
        return results[1] || 0;
    }
};
$(document).ready(function() {

    //монтируем адресс_________________________________________
    var tmp = location.hostname.replace('www.', '');
    var tmpProtocol = window.location.protocol;
    var tmpIf = $('form').attr('method');

    if (tmpProtocol == "https:") {
        tmp = location.hostname.replace('www.', '').replace(/^[^.]{2,3}\./, '')
        tmp = '/sign-up';
        console.log('for https= ' + tmp)
    } else {
        tmp = '/sign-up';
        console.log('for http= ' + tmp)
    }

    var forms = $('form');
    for (var i = 0; i < forms.length; i++) {
        if (forms[i].method == "post") {

        }
    }

    //END монтируем адресс_________________________________________

    // Добавляем поле всегда current_url_____________________________________
    // if (tmpIf == "post" || tmpIf == "POST"){
    var nameUrl = window.location.host;
    $(document).find('form').append('<input type="hidden" name="current_url" value="' + nameUrl + '"></input>')
    // }
    //END Добавляем поле current_url_____________________________________


    // сбор незавершенных лидов_____________________________________
    function send_on_timer_full_optIns() {

        var action_form_data; // данные с формы
        var timer_for_send; // переменная для таймера при потере фокуса на инпуте
        var timer_for_send_if_stopped_tapping; // переменная для таймера при вводе информации в инпут
        var timer_for_keyPress = 3500; // время между последним введенным символом и отправкой инфы (долюно быть больше чем время на потерю фокуса)
        var timer_for_blurForm = 3000; // время между потерей фокуса на инпуте
        // var link_for_send_data = 'http://localhost:3000/';
        var protocol_tmp = location.protocol;
        var link_for_send_data = location.hostname.replace(/[a-z]{2}\./, '');
        link_for_send_data = protocol_tmp + '//cabinet.' + link_for_send_data + '/unSuccessReg';

        $('input').on('keyup', function() { // событие остановки ввода текста в инпут и отправка по таймеру
            action_form_data = $(this.form).serialize();
            // console.log('tapping...');
            clearTimeout(timer_for_send_if_stopped_tapping); // чистим предыдущий таймер, после каждого символа

            timer_for_send_if_stopped_tapping = setTimeout(function() { // новый таймер для отправки после последнего введенного символа
                // console.log('timer_for_send_if_stopped_tapping');
                clearTimeout(timer_for_send); // убераем таймер на потерю фокуса, потому что уже отправили инфу
                $.post(link_for_send_data, action_form_data);
            }, timer_for_keyPress);

        });

        $('input').on('blur', function() { // событие потери фокуса на форме и отправка по таймеру

            action_form_data = $(this.form).serialize();
            // console.log('data in form = ',action_form_data);

            timer_for_send = setTimeout(function() { // новый таймер для отправки после потери фокуса
                // console.log('send data');
                clearTimeout(timer_for_send_if_stopped_tapping); // чистим предыдущий таймер, после каждого ввода символов
                $.post(link_for_send_data, action_form_data);
            }, timer_for_blurForm);

            $(this.form).find('input').not($(this)).on('focus', function() { // событие фокуса на форме и отключение таймера на потерю фокуса
                clearTimeout(timer_for_send);
            });
        });
    }
    send_on_timer_full_optIns();

    //END сбор незавершенных лидов_____________________________________


});


$(function() {
    var aff_preland = $.urlParam('aff_id'); //запомним аффа для приленда
    var aff_land = $.urlParam('affiliate_id'); // запомним аффа для ленда
    var tmp = location.hostname.replace('www.', '');
    var tmpIf = $('form').attr('method');
    // console.log(tmp)


    //отработка пикселя_________________________________________
    // if($.urlParam('fpp')){
    var facebook_px_id = ($.urlParam('fbid') || $.urlParam('px'));
    // }
    // if(!facebook_px_id){
    //    		facebook_px_id = 363316310740483;
    // }

    var is_fb_pixel_on_page = $('body').html().search(/facebook.com\/tr\?id=/) != -1;

    if (facebook_px_id && !is_fb_pixel_on_page && aff_preland != 1 && aff_land != 1) {
        $('body').prepend('<img style="display:none;"  src="https://www.facebook.com/tr?id=' + facebook_px_id + '&ev=PageView&noscript=1" width="1px" height="1px">');
        // console.log('subject pixel')
    }
    //END отработка пикселя_________________________________________


    // Прячем попАп по запросу____________________________________
    if ($.urlParam('bp') == 1) {
        $('.hover-modal').hide();
    }
    // END Прячем попАп по запросу____________________________________



    // специальная фича для андрея_________________________________________
    // if (tmpIf == "post" || tmpIf == "POST"){	//разделение на ленд
    // 	if(aff_land == 1){
    // 		$('body').prepend('<img style="display:none;"  src="https://www.facebook.com/tr?id=' + facebook_px_id + '&ev=AddToCart&noscript=1" width="1px" height="1px">');
    // 		// console.log('land for Andrew')
    // 	}
    // }else {										//разделение на приленд
    // 	if(aff_preland == 1){			
    // 		$('body').prepend('<img style="display:none;"  src="https://www.facebook.com/tr?id=' + facebook_px_id + '&ev=ViewContent&noscript=1" width="1px" height="1px">');
    // 		// console.log('preland for Andrew')
    // 	}
    // }
    //END специальная фича для андрея_________________________________________

});

// добавление инпутов + инклуд и юрл параметров 
(function() {

    function getSearchParameters() {
        var prmstr = window.location.search.substr(1);
        return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
    }

    function transformToAssocArray(prmstr) {
        var params = {};
        var prmarr = prmstr.split("&");
        for (var i = 0; i < prmarr.length; i++) {
            var tmparr = prmarr[i].split("=");
            params[tmparr[0]] = decodeURIComponent(tmparr[1]);
        }
        return params;
    }

    var params = getSearchParameters();

    Object.keys(params).map(function(key, index) {
        // console.log(params[key]);
        if (key != 'aff_id' & key != 'affiliate_id' & key != 'session_id' & key != 'session' & key != 'email' & key != 'first_name' & key != 'last_name') {

            for (i = 0; i < document.forms.length; i++) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", key);
                hiddenField.setAttribute("value", params[key]);
                document.forms[i].appendChild(hiddenField);
            }
        }

    });


})();

// добавление данных из рефферера

(function() {

    function getSearchParameters() {
        var prmstr = document.referrer.split('?')[1];
        return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
    }

    function transformToAssocArray(prmstr) {
        var params = {};
        var prmarr = prmstr.split("&");
        for (var i = 0; i < prmarr.length; i++) {
            var tmparr = prmarr[i].split("=");
            params[tmparr[0]] = tmparr[1];
        }
        return params;
    }

    var params = getSearchParameters();

    var tmp_session = document.getElementsByClassName('session_id');
    var tmp_affiliate = document.getElementsByClassName('affiliate_id');

    Object.keys(params).map(function(key, index) {
        if (key == 'session') {
            // console.log('start session key')
            for (var i = 0; i < tmp_session.length; i++) {
                if (tmp_session[i].value == '') {
                    tmp_session[i].value = params[key]
                }
            }
        }

        if (key == 'aff_id') {
            // console.log('start aff key')
            for (var i = 0; i < tmp_session.length; i++) {
                if (tmp_affiliate[i].value == '') {
                    tmp_affiliate[i].value = params[key]
                }
            }
        }
    });


})();


function makeSendAdress() {
    var protocol = location.protocol;
    var tmp = location.hostname.replace(/[a-z]{2}\./, '');
    tmp = protocol + '//cabinet.' + tmp + '/api/register';
    return '/signup';
}

function setLocation(curLoc) {
    try {
        history.pushState(null, null, curLoc);
        return;
    } catch (e) {}
    location.hash = '#' + curLoc;
}

(function() {
    var parametrsTmp = location.search;

    if ($.urlParam("domain")) {
        parametrsTmp = parametrsTmp.replace('pixelsettings=' + $.urlParam("pixelsettings"), '')
        //change URL
        setLocation(parametrsTmp)
    } else {
        if (parametrsTmp.match(/[0-9]{10,}/)) { //проверка на наличие цифр пикселя
            parametrsTmp = parametrsTmp.replace('pixelsettings=' + $.urlParam("pixelsettings"), 'domain=' + $.urlParam("pixelsettings"))
        } else {
            parametrsTmp = parametrsTmp.replace('pixelsettings=' + $.urlParam("pixelsettings"), '')
        }
        //change URL
        setLocation(parametrsTmp)
    }
})();

//validation block
const regex_first_last_name = new RegExp('^([A-Za-z\xAA\xB5\xBA\xC0-\xD6\xD8-\xF6\xF8-\u02C1\u02C6-\u02D1\u02E0-\u02E4\u02EC\u02EE\u0370-\u0374\u0376\u0377\u037A-\u037D\u037F\u0386\u0388-\u038A\u038C\u038E-\u03A1\u03A3-\u03F5\u03F7-\u0481\u048A-\u052F\u0531-\u0556\u0559\u0561-\u0587\u05D0-\u05EA\u05F0-\u05F2\u0620-\u064A\u066E\u066F\u0671-\u06D3\u06D5\u06E5\u06E6\u06EE\u06EF\u06FA-\u06FC\u06FF\u0710\u0712-\u072F\u074D-\u07A5\u07B1\u07CA-\u07EA\u07F4\u07F5\u07FA\u0800-\u0815\u081A\u0824\u0828\u0840-\u0858\u08A0-\u08B4\u08B6-\u08BD\u0904-\u0939\u093D\u0950\u0958-\u0961\u0971-\u0980\u0985-\u098C\u098F\u0990\u0993-\u09A8\u09AA-\u09B0\u09B2\u09B6-\u09B9\u09BD\u09CE\u09DC\u09DD\u09DF-\u09E1\u09F0\u09F1\u0A05-\u0A0A\u0A0F\u0A10\u0A13-\u0A28\u0A2A-\u0A30\u0A32\u0A33\u0A35\u0A36\u0A38\u0A39\u0A59-\u0A5C\u0A5E\u0A72-\u0A74\u0A85-\u0A8D\u0A8F-\u0A91\u0A93-\u0AA8\u0AAA-\u0AB0\u0AB2\u0AB3\u0AB5-\u0AB9\u0ABD\u0AD0\u0AE0\u0AE1\u0AF9\u0B05-\u0B0C\u0B0F\u0B10\u0B13-\u0B28\u0B2A-\u0B30\u0B32\u0B33\u0B35-\u0B39\u0B3D\u0B5C\u0B5D\u0B5F-\u0B61\u0B71\u0B83\u0B85-\u0B8A\u0B8E-\u0B90\u0B92-\u0B95\u0B99\u0B9A\u0B9C\u0B9E\u0B9F\u0BA3\u0BA4\u0BA8-\u0BAA\u0BAE-\u0BB9\u0BD0\u0C05-\u0C0C\u0C0E-\u0C10\u0C12-\u0C28\u0C2A-\u0C39\u0C3D\u0C58-\u0C5A\u0C60\u0C61\u0C80\u0C85-\u0C8C\u0C8E-\u0C90\u0C92-\u0CA8\u0CAA-\u0CB3\u0CB5-\u0CB9\u0CBD\u0CDE\u0CE0\u0CE1\u0CF1\u0CF2\u0D05-\u0D0C\u0D0E-\u0D10\u0D12-\u0D3A\u0D3D\u0D4E\u0D54-\u0D56\u0D5F-\u0D61\u0D7A-\u0D7F\u0D85-\u0D96\u0D9A-\u0DB1\u0DB3-\u0DBB\u0DBD\u0DC0-\u0DC6\u0E01-\u0E30\u0E32\u0E33\u0E40-\u0E46\u0E81\u0E82\u0E84\u0E87\u0E88\u0E8A\u0E8D\u0E94-\u0E97\u0E99-\u0E9F\u0EA1-\u0EA3\u0EA5\u0EA7\u0EAA\u0EAB\u0EAD-\u0EB0\u0EB2\u0EB3\u0EBD\u0EC0-\u0EC4\u0EC6\u0EDC-\u0EDF\u0F00\u0F40-\u0F47\u0F49-\u0F6C\u0F88-\u0F8C\u1000-\u102A\u103F\u1050-\u1055\u105A-\u105D\u1061\u1065\u1066\u106E-\u1070\u1075-\u1081\u108E\u10A0-\u10C5\u10C7\u10CD\u10D0-\u10FA\u10FC-\u1248\u124A-\u124D\u1250-\u1256\u1258\u125A-\u125D\u1260-\u1288\u128A-\u128D\u1290-\u12B0\u12B2-\u12B5\u12B8-\u12BE\u12C0\u12C2-\u12C5\u12C8-\u12D6\u12D8-\u1310\u1312-\u1315\u1318-\u135A\u1380-\u138F\u13A0-\u13F5\u13F8-\u13FD\u1401-\u166C\u166F-\u167F\u1681-\u169A\u16A0-\u16EA\u16F1-\u16F8\u1700-\u170C\u170E-\u1711\u1720-\u1731\u1740-\u1751\u1760-\u176C\u176E-\u1770\u1780-\u17B3\u17D7\u17DC\u1820-\u1877\u1880-\u1884\u1887-\u18A8\u18AA\u18B0-\u18F5\u1900-\u191E\u1950-\u196D\u1970-\u1974\u1980-\u19AB\u19B0-\u19C9\u1A00-\u1A16\u1A20-\u1A54\u1AA7\u1B05-\u1B33\u1B45-\u1B4B\u1B83-\u1BA0\u1BAE\u1BAF\u1BBA-\u1BE5\u1C00-\u1C23\u1C4D-\u1C4F\u1C5A-\u1C7D\u1C80-\u1C88\u1CE9-\u1CEC\u1CEE-\u1CF1\u1CF5\u1CF6\u1D00-\u1DBF\u1E00-\u1F15\u1F18-\u1F1D\u1F20-\u1F45\u1F48-\u1F4D\u1F50-\u1F57\u1F59\u1F5B\u1F5D\u1F5F-\u1F7D\u1F80-\u1FB4\u1FB6-\u1FBC\u1FBE\u1FC2-\u1FC4\u1FC6-\u1FCC\u1FD0-\u1FD3\u1FD6-\u1FDB\u1FE0-\u1FEC\u1FF2-\u1FF4\u1FF6-\u1FFC\u2071\u207F\u2090-\u209C\u2102\u2107\u210A-\u2113\u2115\u2119-\u211D\u2124\u2126\u2128\u212A-\u212D\u212F-\u2139\u213C-\u213F\u2145-\u2149\u214E\u2183\u2184\u2C00-\u2C2E\u2C30-\u2C5E\u2C60-\u2CE4\u2CEB-\u2CEE\u2CF2\u2CF3\u2D00-\u2D25\u2D27\u2D2D\u2D30-\u2D67\u2D6F\u2D80-\u2D96\u2DA0-\u2DA6\u2DA8-\u2DAE\u2DB0-\u2DB6\u2DB8-\u2DBE\u2DC0-\u2DC6\u2DC8-\u2DCE\u2DD0-\u2DD6\u2DD8-\u2DDE\u2E2F\u3005\u3006\u3031-\u3035\u303B\u303C\u3041-\u3096\u309D-\u309F\u30A1-\u30FA\u30FC-\u30FF\u3105-\u312D\u3131-\u318E\u31A0-\u31BA\u31F0-\u31FF\u3400-\u4DB5\u4E00-\u9FD5\uA000-\uA48C\uA4D0-\uA4FD\uA500-\uA60C\uA610-\uA61F\uA62A\uA62B\uA640-\uA66E\uA67F-\uA69D\uA6A0-\uA6E5\uA717-\uA71F\uA722-\uA788\uA78B-\uA7AE\uA7B0-\uA7B7\uA7F7-\uA801\uA803-\uA805\uA807-\uA80A\uA80C-\uA822\uA840-\uA873\uA882-\uA8B3\uA8F2-\uA8F7\uA8FB\uA8FD\uA90A-\uA925\uA930-\uA946\uA960-\uA97C\uA984-\uA9B2\uA9CF\uA9E0-\uA9E4\uA9E6-\uA9EF\uA9FA-\uA9FE\uAA00-\uAA28\uAA40-\uAA42\uAA44-\uAA4B\uAA60-\uAA76\uAA7A\uAA7E-\uAAAF\uAAB1\uAAB5\uAAB6\uAAB9-\uAABD\uAAC0\uAAC2\uAADB-\uAADD\uAAE0-\uAAEA\uAAF2-\uAAF4\uAB01-\uAB06\uAB09-\uAB0E\uAB11-\uAB16\uAB20-\uAB26\uAB28-\uAB2E\uAB30-\uAB5A\uAB5C-\uAB65\uAB70-\uABE2\uAC00-\uD7A3\uD7B0-\uD7C6\uD7CB-\uD7FB\uF900-\uFA6D\uFA70-\uFAD9\uFB00-\uFB06\uFB13-\uFB17\uFB1D\uFB1F-\uFB28\uFB2A-\uFB36\uFB38-\uFB3C\uFB3E\uFB40\uFB41\uFB43\uFB44\uFB46-\uFBB1\uFBD3-\uFD3D\uFD50-\uFD8F\uFD92-\uFDC7\uFDF0-\uFDFB\uFE70-\uFE74\uFE76-\uFEFC\uFF21-\uFF3A\uFF41-\uFF5A\uFF66-\uFFBE\uFFC2-\uFFC7\uFFCA-\uFFCF\uFFD2-\uFFD7\uFFDA-\uFFDC.-]\\s{0,}?)+$');

function rebuidEmail(this_element) {
    this_element.val(this_element.val().replace(/[\.+]{2,}/g, '.').replace(/^\.+/g, '').replace(/\.+$/g, '').replace(/[,\/]/g, '.')); // заменяем повторяющиеся точки на одну, убираем точки вначале и в конце, заменяем запятую и слеш на точку

    //=========
    this_element.val(this_element.val().replace(/[.]+\s+com$/g, '.com').replace(/\s+com$/g, '.com')); // убираем лишние точки и пробелы перед com
    this_element.val(this_element.val().replace(/[.]+\s+ru$/g, '.ru').replace(/\s+ru$/g, '.ru')); // убираем лишние точки и пробелы перед ru
    this_element.val(this_element.val().replace(/[.]+\s+net$/g, '.net').replace(/\s+net$/g, '.net')); // убираем лишние точки и пробелы перед net
    this_element.val(this_element.val().replace(/[.]+\s+ua$/g, '.ua').replace(/\s+ua$/g, '.ua')); // убираем лишние точки и пробелы перед ua
    //=========

    var brokenDomainsGmail = ['gmil', 'gmaail', 'gmaij', 'gmaila', 'googlemail', 'jimail', 'gmailcom', 'gimailcom', 'gaiml', 'gemail', 'gilmei', 'gmael', 'gmaol', 'gamail', 'gamil', 'glail', 'gmaik'];
    brokenDomainsGmail.forEach((element) => { // правка домена gmail
        this_element.val(this_element.val().replace(element, 'gmail'));
    });

    var brokenDomainsYandex = ['yande[', 'jandex'];
    brokenDomainsYandex.forEach((element) => { // правка домена yandex
        this_element.val(this_element.val().replace(element, 'yandex'));
    });

    var brokenDomainsMail = ['email', 'meil'];
    brokenDomainsMail.forEach((element) => { // правка домена mail.ru
        this_element.val(this_element.val().replace(element, 'mail'));
    });

    //=========
    this_element.val(this_element.val().replace(/gmail$/g, 'gmail.com')); // правка на домен первого уровня
    this_element.val(this_element.val().replace(/mail$/g, 'mail.ru')); // правка на домен первого уровня
    this_element.val(this_element.val().replace(/mail\.ry$/g, 'mail.ru')); // правка на домен первого уровня
    //=========
    this_element.val(this_element.val().replace(/\s+/g, '').replace(/[/.]{2,}/g, '.')); // убираем лишние пробелы и повторяющиеся точки
    this_element.val(this_element.val().replace(/@\s+/g, '@').replace(/\s+@/g, '@')); // убираем лишние пробелы до и после собачки
    this_element.val(this_element.val().replace(/[.]+@/g, '@').replace(/@[.]+/g, '@')); // убираем лишние точки до и после собачки
}