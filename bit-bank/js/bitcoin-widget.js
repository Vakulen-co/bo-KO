/*Переменная в которой задан шаблон HTML разметки виджета (Начало)*/
var bitcoin_widget__template = `
<div id="bitcoin-widget">

    <div class="bitcoin-widget-close">
    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-double-left" class="bitcoin-widget-close__item" role="img" viewBox="0 0 448 512"><path fill="#fff" d="M223.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L319.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L393.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34zm-192 34l136 136c9.4 9.4 24.6 9.4 33.9 0l22.6-22.6c9.4-9.4 9.4-24.6 0-33.9L127.9 256l96.4-96.4c9.4-9.4 9.4-24.6 0-33.9L201.7 103c-9.4-9.4-24.6-9.4-33.9 0l-136 136c-9.5 9.4-9.5 24.6-.1 34z"/></svg>
    </div>
    

    <div class="bitcoin-widget-show">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-double-right" class="bitcoin-widget-show__item" role="img" viewBox="0 0 448 512"><path fill="#fff" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z"/></svg>
    </div>
    
    <div class="bitcoin-widget-crypto-group">
            <ul id="bitcoin-widget-coin-list">
            <li class="bitcoin-widget-list-item widget-bitcoin">
            <div class="bitcoin-widget-list-item__title-group">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="bitcoin" class="bitcoin" role="img" viewBox="0 0 512 512"><path fill="FFAD02" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zm-141.651-35.33c4.937-32.999-20.191-50.739-54.55-62.573l11.146-44.702-27.213-6.781-10.851 43.524c-7.154-1.783-14.502-3.464-21.803-5.13l10.929-43.81-27.198-6.781-11.153 44.686c-5.922-1.349-11.735-2.682-17.377-4.084l.031-.14-37.53-9.37-7.239 29.062s20.191 4.627 19.765 4.913c11.022 2.751 13.014 10.044 12.68 15.825l-12.696 50.925c.76.194 1.744.473 2.829.907-.907-.225-1.876-.473-2.876-.713l-17.796 71.338c-1.349 3.348-4.767 8.37-12.471 6.464.271.395-19.78-4.937-19.78-4.937l-13.51 31.147 35.414 8.827c6.588 1.651 13.045 3.379 19.4 5.006l-11.262 45.213 27.182 6.781 11.153-44.733a1038.209 1038.209 0 0 0 21.687 5.627l-11.115 44.523 27.213 6.781 11.262-45.128c46.404 8.781 81.299 5.239 95.986-36.727 11.836-33.79-.589-53.281-25.004-65.991 17.78-4.098 31.174-15.792 34.747-39.949zm-62.177 87.179c-8.41 33.79-65.308 15.523-83.755 10.943l14.944-59.899c18.446 4.603 77.6 13.717 68.811 48.956zm8.417-87.667c-7.673 30.736-55.031 15.12-70.393 11.292l13.548-54.327c15.363 3.828 64.836 10.973 56.845 43.035z"/></svg>
                <h5 class="bitcoin-widget-coin-name">Bitcoin -</h5>
                &nbsp;
                                <div class="custom-dropdown">
                  <select disabled>
                    <option value="USD">$</option>
                    <option value="EUR">€</option>
                    <option value="GBP">£</option>
                  </select>
                </div>
                <h5 class="bitcoin-widget-coin-value">loading</h5>
            </div>

            </li>
        </ul>
</div>

</div>
`
/*Переменная в которой задан шаблон HTML разметки виджета (Конец)*/


/*Переменная в которой задан шаблон стилей CSS виджета (Начало)*/
var bitcoin_widget__css = `

<style>
#bitcoin-widget {
   position: fixed;
       display: flex;
           justify-content: space-around;
    bottom: 10px;
    left: 10px;
  color: #CCDAE5;
  background: #383A48;
  border-radius: 15px;
  z-index: 5;
  width: 285px;
  height: 90px;
  box-shadow: 1px -7px 20px 6px rgba(0, 0, 0, 0.25);
      padding: 2px 20px;
      -webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;
      z-index: 9999;
}



#bitcoin-widget h5 {
    font-size: 16px;
}

#bitcoin-widget .bitcoin-widget-list-item__title-group svg {
width: 50px;
fill: #f8a137;
}

#bitcoin-widget .bitcoin-widget-crypto-group {
width: 100%;
    align-items: center;
    justify-content: center;
    display: flex;
}

#bitcoin-widget ul,
#bitcoin-widget li {
    margin: 0;
    padding: 0;
}

#bitcoin-widget li {
list-style: none;
    display: flex;
}

#bitcoin-widget .bitcoin-widget-list-item__title-group {
    display: flex;
    align-items: center;
}

#bitcoin-widget .bitcoin-widget-coin-name {
margin-left: 5px;
    margin-bottom: 0;
        margin-top: 0;
}

#bitcoin-widget .bitcoin-widget-coin-value {
    margin: 0;
    line-height: 1.5;
}
#bitcoin-widget .bitcoin-widget-close,
 #bitcoin-widget .bitcoin-widget-show {
    width: 20px;
    position: absolute;
    top: 5px;
    right: 10px;

}

 #bitcoin-widget .bitcoin-widget-show {
 display: none;
 }

#bitcoin-widget .bitcoin-widget-close__item,
 #bitcoin-widget .bitcoin-widget-show__item {
    cursor: pointer;
}

/* Custom dropdown */
.custom-dropdown {
  position: relative;
  display: inline-block;
  vertical-align: middle;
    margin: 5px 0;
}

.custom-dropdown select {
direction: rtl;
    background-color: #383a48;
    color: #ffffff;
    font-size: inherit;
    padding: 0em 0.2em;
    padding-left: 1.6em;
    border: 0;
    margin: 0;
    border-radius: 3px;
    text-indent: 0.01px;
    text-overflow: '';
    -moz-appearance:none; /* Firefox */
    -webkit-appearance:none; /* Safari and Chrome */
    appearance:none;
}

.custom-dropdown::after, 
.custom-dropdown::before {
  content: "";
  position: absolute;
  pointer-events: none;
}

.custom-dropdown::before{ /*  Custom dropdown arrow */
    content: "\\25BC";
    height: 1em;
    font-size: .625em;
    line-height: 1;
    left: 0.8em;
    top: 50%;
    margin-top: -.5em;
}

.custom-dropdown::after { /*  Custom dropdown arrow cover */
    width: 1.5em;
    left: 0;
    top: 0;
    bottom: 0;
    border-radius: 0 3px 3px 0;
}

.custom-dropdown select[disabled] {
  color: rgba(255,255,255,0.37);
}

.custom-dropdown select[disabled]::before {
  color: rgba(255,255,255,0.36);
}

.custom-dropdown::after {
background-color: rgba(0,0,0,.15);
}

.custom-dropdown::before {
    color: rgba(255, 255, 255, 0.4);
}

@media (max-width: 1024px) {
    #bitcoin-widget {
    display: none;
    }
}

</style>
`

/*Переменная в которой задан шаблон стилей CSS виджета (Конец)*/

function showWidget(time = 1000) {
    $('.bitcoin-widget-show').hide();
    $('#bitcoin-widget').animate({
        opacity: 1,
        left: "+=250",
        // height: "toggle"
    }, time, function() {
        $('.bitcoin-widget-crypto-group, .bitcoin-widget-close').fadeIn();

    });
}

function hideWidget(time = 1000) {
    $('.bitcoin-widget-crypto-group, .bitcoin-widget-close').hide();
    $('#bitcoin-widget').animate({
        opacity: 0.5,
        left: "-=250",
        // height: "toggle"
    }, time, function() {

        $('.bitcoin-widget-show').fadeIn();
    });
}


if (!(/Android|webOS|iPhone|iPod|iPad|BlackBerry/i.test(navigator.userAgent))) {
    var widget_currency = $('#widget-script').attr('data-widget-cur');
    var autocurr;


    /*Заезжалки-выезжалки (Начало)*/

    $(document).on('click', '.bitcoin-widget-close__item', function() {
        hideWidget();
    })

    $(document).on('click', '.bitcoin-widget-show__item', function() {
        showWidget();
    })

    /*Заезжалки-выезжалки (Конец)*/

    /*Основная функция (Начало)*/
    $.ajax({
            // url: '/btcrates',
            url: 'https://api.coinbase.com/v2/prices/spot?currency=EUR',
            dataType: 'json'
        })
        .done(function(data) {
            $('.bitcoin-widget-coin-value').text('€ ' + Math.round((data.data.amount) * 100) / 100);


        })
        .fail(function(data) {
            $('#bitcoin_widget__template').hide();

        })


    /*Основная функция (Конец)*/


    $('body').append(bitcoin_widget__css); // стили
    $('body').append(bitcoin_widget__template); // разметка
    hideWidget(0);

}