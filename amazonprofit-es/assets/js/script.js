$(document).ready(function() {
    var initial = document.getElementById('initial-value');
    var potencial = document.getElementById('potencial-value');
    var calc_btn = document.getElementsByClassName('calc-btn')[0];
    var err_msg_calculator = document.getElementsByClassName('error-msg-calc')[0];
    var calculator_values = "";

    calc_btn.addEventListener('click', function() {
        var initial_value = initial.value;
        calculator_values += initial_value + " ";
        err_msg_calculator.innerHTML = '';

        if (initial_value < 200) {
            potencial.value = '';
            err_msg_calculator.innerHTML = 'Inversión mínima: 200 $';
            err_msg_calculator.style.color = 'red';
        } else if (initial_value == 200) {
            potencial.value = initial_value * 2;
            err_msg_calculator.innerHTML = '';
        } else if (initial_value > 200 && initial_value < 500) {
            potencial.value = initial_value * 2.5;
            err_msg_calculator.innerHTML = '';
        } else if (initial_value >= 500 && initial_value < 1000) {
            potencial.value = initial_value * 3.5;
            err_msg_calculator.innerHTML = '';
        } else if (initial_value >= 1000 && initial_value < 5000) {
            potencial.value = initial_value * 5;
            err_msg_calculator.innerHTML = '';
        } else if (initial_value >= 5000) {
            potencial.value = initial_value * 5.5;
            err_msg_calculator.innerHTML = '';
        }
    });
    $(".lp-action").click(function(event) {
        event.preventDefault();
        document.getElementById("formfull").scrollIntoView({
            block: "center",
            behavior: "smooth"
        });
    });
});