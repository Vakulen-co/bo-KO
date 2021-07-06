(function ($) {

    $.SwalError = $.SwalError || {};

    $.SwalError.showErrors = function (errors) {

        let errorText = '';

        errors.forEach(function (val) {

            if (val.attribute !== 'scope' && val.message !== undefined && val.message !== null) {
                errorText = errorText + val.message + '\n';
            }

            /*if(typeof val === 'object') {
                Object.keys(val).forEach(key1 => {
                    let val1 = val[key1];
                    switch (typeof val1) {
                        case 'object':
                            Object.keys(val1).forEach(key2 => {
                                let val2 = val1[key2];
                                if (typeof val2 === 'string') {
                                    errorText = errorText + val2 + "\n";
                                }
                            });
                            break;
                        case 'string':
                            errorText = errorText + val1 + "\n";
                            break;
                    }
                });
            }*/

        });

        swal({
            title: '',
            text: errorText,
            type: 'error',
        });

    }

})(jQuery);