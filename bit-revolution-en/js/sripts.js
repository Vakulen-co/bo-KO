$(document).ready(function() {
    $('.scroll-top-btn').on('click', function(event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('html, body').animate({
            scrollTop: top
        }, 800);
        setTimeout(function() {
            window.location = id;
        }, 700);
    });

    $("input#name1, input#namee").on("keypress", function(e) {

        let char = /["a-zA-Z]/;
        let val = String.fromCharCode(e.which);
        let test = char.test(val);

        if (!test) return false
    });
    $("input#lastname1, input#lastnamee").on("keypress", function(e) {

        let char = /["a-zA-Z]/;
        let val = String.fromCharCode(e.which);
        let test = char.test(val);

        if (!test) return false
    });

    $("input.telephone").on("keypress", function(e) {

        let char = /["0-9]/;
        let val = String.fromCharCode(e.which);
        let test = char.test(val);

        if (!test) return false
    });

    $("input.telephone").on("blur", function(e) {

        let l = $(this).val().length;
        if (l < 8) {
            $(this).addClass('error');
            $(this).next().addClass('active')
        } else if (l >= 8 || l == 0) {
            $(this).next().removeClass('active')
            $(this).removeClass('error');
        } else if (l > 16) {
            $this.val($this.val().substr(0, 16));
        }
    });

    $("input.telephone").on("keyup", function(e) {
        var $this = $(this);
        if ($this.val().length > 16)
            $this.val($this.val().substr(0, 16));
    });

    $("input.password").on("blur", function(e) {

        let l = $(this).val().length;
        if (l < 6) {
            $(this).addClass('error');
            $(this).next().addClass('active')
        } else if (l >= 11 || l == 0) {
            $(this).next().removeClass('active')
            $(this).removeClass('error');
        } else if (l > 16) {
            $this.val($this.val().substr(0, 16));
        }
    });

    $("input.password").on("keyup", function(e) {
        var $this = $(this);
        if ($this.val().length > 16)
            $this.val($this.val().substr(0, 16));
    });

    $("input.telephone").on("keyup", function(e) {
        var $this = $(this);
        if ($this.val().length > 16)
            $this.val($this.val().substr(0, 16));
    });

    // Устанавливаем обработчик потери фокуса для всех полей ввода текста
    $('input#name, input#email, textarea#message').unbind().blur(function() {
        // Для удобства записываем обращения к атрибуту и значению каждого поля в переменные
        var id = $(this).attr('id');
        var val = $(this).val();

        // После того, как поле потеряло фокус, перебираем значения id, совпадающие с id данного поля
        switch (id) {
            // Проверка поля "Имя"
            case 'name':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/; // используем регулярное выражение

                // Eсли длина имени больше 2 символов, оно не пустое и удовлетворяет рег. выражению,
                // то добавляем этому полю класс .not_error,
                // и ниже в контейнер для ошибок выводим слово " Принято", т.е. валидация для этого поля пройдена успешно

                if (val.length > 2 && val != '' && rv_name.test(val)) {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').text('Принято')
                        .css('color', 'green')
                        .animate({
                            'paddingLeft': '10px'
                        }, 400)
                        .animate({
                            'paddingLeft': '5px'
                        }, 400);
                } else {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').html('поле "Имя" обязательно для заполнения<br>, длина имени должна составлять не менее 2 символов<br>, поле должно содержать только русские или латинские буквы')
                        .css('color', 'red')
                        .animate({
                            'paddingLeft': '10px'
                        }, 400)
                        .animate({
                            'paddingLeft': '5px'
                        }, 400);
                }
                break;
            case 'lastname':
                var rv_name = /^[a-zA-Zа-яА-Я]+$/; // используем регулярное выражение

                // Eсли длина имени больше 2 символов, оно не пустое и удовлетворяет рег. выражению,
                // то добавляем этому полю класс .not_error,
                // и ниже в контейнер для ошибок выводим слово " Принято", т.е. валидация для этого поля пройдена успешно

                if (val.length > 2 && val != '' && rv_name.test(val)) {
                    $(this).addClass('not_error');
                    $(this).next('.error-box').text('Принято')
                        .css('color', 'green')
                        .animate({
                            'paddingLeft': '10px'
                        }, 400)
                        .animate({
                            'paddingLeft': '5px'
                        }, 400);
                } else {
                    $(this).removeClass('not_error').addClass('error');
                    $(this).next('.error-box').html('поле "Имя" обязательно для заполнения<br>, длина имени должна составлять не менее 2 символов<br>, поле должно содержать только русские или латинские буквы')
                        .css('color', 'red')
                        .animate({
                            'paddingLeft': '10px'
                        }, 400)
                        .animate({
                            'paddingLeft': '5px'
                        }, 400);
                }
                break;

                // Проверка email
            case 'email':
                var rv_email = /^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
                if (val != '' && rv_email.test(val)) {
                    $(this).removeClass('error');
                    $(this).addClass('not_error');
                } else {
                    $(this).removeClass('not_error').addClass('error');

                }
                break;
        } // end switch(...)
    }); // end blur()
}); // end script

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}