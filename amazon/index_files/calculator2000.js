var calculatorBlocks = document.querySelectorAll('.js-calculator-block');

Array.prototype.slice.call(calculatorBlocks).forEach(function (el) {
    calculatorInit(el);
});

function calculatorInit(el) {
    var buttonCalculate = el.querySelector('.js-button-calculate');
    var sumErrorMessage = el.querySelector('.js-sum-error-message'); // Calculator euro
    var initialSum = el.querySelector('.js-initial-sum');
    var finalAmount = el.querySelector('.js-final-amount');

    initialSum.addEventListener('input', function () {
        var onlyNumbers = /^\d+(\.\d{0,2})?$/;
        if (!onlyNumbers.test(this.value)) this.value = this.value.slice(0, this.value.length - 1);
        if (this.value.length > 12) this.value = this.value.slice(0, 12);
    });

    initialSum.addEventListener('keyup', function (event) {
        if (event.keyCode === 13) {
            calculate();
        }
    });

    buttonCalculate.addEventListener('click', calculate);

    function potencialCalc(number, multiply) {
        return (number * multiply) % 1 === 0 ? number * multiply : (number * multiply).toFixed(2);
    }

    function calculate() {
        var initial_value = initialSum.value;
        var coefficient = 0;

        sumErrorMessage.classList.remove('show-error');

        if (initial_value < 2000) {
            sumErrorMessage.classList.add('show-error');
            finalAmount.setAttribute('value', '');
            return;
        }

        if (initial_value == 2000) {
            coefficient = 2;
        } else if (initial_value > 2000 && initial_value < 4000) {
            coefficient = 2.5;
        } else if (initial_value >= 4000 && initial_value < 8000) {
            coefficient = 3.5;
        } else if (initial_value >= 8000 && initial_value < 15000) {
            coefficient = 5;
        } else if (initial_value >= 15000) {
            coefficient = 5.5;
        }

        var result = potencialCalc(initial_value, coefficient);

        finalAmount.setAttribute('value', result);
    }
}