$("#plus").click(function() {
    var $count = $("#form-count");
    if (isNaN($count.val())){
        $count.val(parseInt(1));
        $count.change();
        calculate();
    }
    $count.val(parseInt($count.val()) + 1);
    $count.change();
    calculate();
});
$("#form-count").blur(function(){
    if($(this).val() == ''){
        $(this).val(parseInt(1)).change();
        calculate();
    }
});
$("#minus").click(function() {
    var $count = $("#form-count");
    if (isNaN($count.val())){
        $count.val(parseInt(1));
        $count.change();
        calculate();
    }
    if($count.val()<=1){
       $count.val(parseInt(1));
        $count.change();
        calculate();
    }else{
        $count.val(parseInt($count.val()) - 1);
        $count.change();
        calculate();
    }
});
// function getChar(event) {
//     if (event.which == null) {
//         if (event.keyCode < 32)
//             return null;
//         return String.fromCharCode(event.keyCode) // IE
//     }
//     if (event.which != 0 && event.charCode != 0) {
//         if (event.which < 32)
//             return null;
//         return String.fromCharCode(event.which) // остальные
//     }
//     return null; // специальная клавиша
// }
// var plus;
// plus = document.getElementById('plus');
// var minus;
// minus=document.getElementById('minus');
var moneyElem;
moneyElem= document.getElementById('form-count');
if(document.getElementById('form-count').value==undefined||document.getElementById('form-count').value==NaN){
    document.getElementById('form-count').value=1;
}
// moneyElem.onkeydown = function(e) {
//     if(!((e.keyCode > 95 && e.keyCode < 106)
//         || (e.keyCode > 47 && e.keyCode < 58)
//         || e.keyCode == 8)) {
//         return false;
//     }
// }
// moneyElem.onkeypress = function (e) {
//     e = e || event;
//     var chr = getChar(e);
//     if (e.ctrlKey || e.altKey || chr == null)
//         return; // специальная клавиша
//     if (chr < '0' || chr > '9')
//         return false;
// }
// клавиатура, вставить/вырезать клавиатурой
moneyElem.onkeyup = calculate;
moneyElem.oninput = calculate;
var monthsElem = document.getElementById('form-list');
monthsElem.onchange = calculate;
function calculate() {
    var sum = +moneyElem.value;
    if(moneyElem==0||monthsElem==0||moneyElem==null||monthsElem==null){
        sum=0;
        document.getElementById('form-sum').value = sum;
    }else {
        sum = sum * (monthsElem.value);
        document.getElementById('form-price').value=monthsElem.value;
        document.getElementById('form-sum').value = sum;
    }
}
calculate();

$(document).ready(function($){
    $("#form-tel").mask('8(099)999-99-99');
});
$(".dropdown").click(function(){
    $('#form-modal').modal('show');
    $('select option[value="300"]').prop('selected', true);
    document.getElementById('form-price').value=300;
});
$("#dropdown").click(function(){
    $('#form-modal').modal('show');
    $('select option[value="300"]').prop('selected', true);
    document.getElementById('form-price').value=300;
});
$("#dropdown2").click(function(){
    $('#form-modal').modal('show');
    $('select option[value="300"]').prop('selected', true);
    document.getElementById('form-price').value=300;
});
$("#nextmodal").click(function(){
    return sendForm();

});
function sendForm(){
    var form = $("#contact-form").serialize();

    $.ajax({
        type: "POST",
        url: "/site/check",
        data: form,
        //    beforeSend: function() {
        //    // тут нужно кнопке поставить disable
        //},
        success: function(data) {
            //console.log(data);
            //var obj = $.parseJSON(data);
            //console.log(data.success);
            if (data.success == 1) {
                $("#form-modal").modal('hide');
                $('#answer-modal').modal('show');
            } else {
                $("#form-modal").modal('hide');
                $('#error-modal').modal('show');
            }
        },
        error: function() {
            $("#form-modal").modal('hide');
            $('#error-modal').modal('show');
        },
    });
}
$('#order300uah').click(function () {
    $('#form-modal').modal('show');
    $('select option[value="300"]').prop('selected', true);
    document.getElementById('form-price').value=300;
    calculate();
});
$('#order500uah').click(function () {
    $('#form-modal').modal('show');
    $('select option[value="500"]').prop('selected', true);
    document.getElementById('form-price').value=500;
    calculate();
});
$('#order600uah').click(function () {
    $('#form-modal').modal('show');
    $('select option[value="600"]').prop('selected', true);
    document.getElementById('form-price').value=600;
    calculate();
});
$('#order900uah').click(function () {
    $('#form-modal').modal('show');
    $('select option[value="900"]').prop('selected', true);
    document.getElementById('form-price').value=900;
    calculate();
});
//script tilda
// $(document).ready(function () {
//     /* нужно заменить на код блока  Zero выполняющего роль меню */
//     var blockMenuID = '#rec118279887';
//     //Добавляем класс с фиксацией
//     $(blockMenuID).addClass('fixed');
//     //Когда начался скролл экрана
//     $(window).scroll(function () {
//         var top = $(document).scrollTop();
//         //Если перемещение больше 5 px
//         if (top >= 5) {
//             //То добавляем к меню наш фон
//             $(blockMenuID).addClass('fonmenu');
//         } else {
//             //Если поднялись наверх, то удаляем фон
//             $(blockMenuID).removeClass('fonmenu');
//
//         }
//     });
// });
//
// $(document).ready(function () {
//     t396_init('118279961');
// });
//
// $(document).ready(function () {
//     /* нужно заменить на код блока  Zero выполняющего роль меню */
//     var blockMenuID = '#rec118279961';
//     //Добавляем класс с фиксацией
//     $(blockMenuID).addClass('fixed');
//     //Когда начался скролл экрана
//     $(window).scroll(function () {
//         var top = $(document).scrollTop();
//         //Если перемещение больше 5 px
//         if (top >= 5) {
//             //То добавляем к меню наш фон
//             $(blockMenuID).addClass('fonmenu');
//         } else {
//             //Если поднялись наверх, то удаляем фон
//             $(blockMenuID).removeClass('fonmenu');
//
//         }
//     });
// });
// $(document).ready(function () {
//     $("#rec118280123").attr('data-animationappear', 'off');
//     $("#rec118280123").css('opacity', '1');
//     t450_initMenu('118280123');
// });
// $(document).ready(function () {
//     setTimeout(function () {
//         t_menusub_init('118280123');
//     }, 500);
// });
// $(document).ready(function () {
//     tcart__init('118280141');	/* hack for Android */
//     var ua = navigator.userAgent.toLowerCase();
//     var isAndroid = (ua.indexOf("android") > -1);
//     if (isAndroid) {
//         $('.t-body').addClass('t-body_scrollable-hack-for-android');
//         $('head').append("<style>@media screen and (max-width: 560px) {\n.t-body_scrollable-hack-for-android {\noverflow: visible !important;\n}\n}\n</style>");
//         console.log('Android css hack was inited');
//     }
// });
// $(document).ready(function () {
//     setTimeout(function () {
//         var $root = $('html, body');
//         $('a[href*="#"]:not([href="#"],.carousel-control,.t-carousel__control,[href^="#price"],[href^="#popup"],[href^="#prodpopup"],[href^="#order"])').click(function () {
//             var target = $(this.hash);
//             if (target.length == 0) {
//                 target = $('a[name="' + this.hash.substr(1) + '"]');
//             }
//             if (target.length == 0) {
//                 return true;
//             }
//             $root.animate({scrollTop: target.offset().top + 3}, 500);
//             return false;
//         });
//     }, 500);
// });
// $(document).ready(function () {
//     $('.t190').css("display", "none");
//     $(window).bind('scroll', t_throttle(function () {
//         if ($(window).scrollTop() > $(window).height()) {
//             if ($('.t190').css('display') == "none") {
//                 $('.t190').css("display", "block");
//             }
//         } else {
//             if ($('.t190').css('display') == "block") {
//                 $('.t190').css("display", "none");
//             }
//         }
//     }, 200));
// });
// $(document).ready(function () {
//     t396_init('118067737');
// });
// $(document).ready(function () {
//     t396_init('118072628');
// });
// $(document).ready(function () {
//     t766_init('118409153');
// });
// $(document).ready(function () {
//     t396_init('118281239');
// });
// $(document).ready(function () {
//     t396_init('118283685');
// });
// $(document).ready(function () {
//     t396_init('118358563');
// });
// $(document).ready(function () {
//     t396_init('118386186');
// });
// $(document).ready(function () {
//     t396_init('118392163');
// });
// $(document).ready(function () {
//     t396_init('118417775');
// });
// if (!window.mainTracker) {
//     window.mainTracker = 'tilda';
// }
// (function (d, w, k, o, g) {
//     var n = d.getElementsByTagName(o)[0], s = d.createElement(o), f = function () {
//         n.parentNode.insertBefore(s, n);
//     };
//     s.type = "text/javascript";
//     s.async = true;
//     s.key = k;
//     s.id = "tildastatscript";
//     s.src = g;
//     if (w.opera == "[object Opera]") {
//         d.addEventListener("DOMContentLoaded", f, false);
//     } else {
//         f();
//     }
// })(document, window, '657f10b021259e231ce8742df9bc5cc5', 'script', 'https://stat.tildacdn.com/js/tildastat-0.2.min.js');
// if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent)) === false && typeof (sessionStorage) != 'undefined' && sessionStorage.getItem('visited') !== 'y') {
//     var style = document.createElement('style');
//     style.type = 'text/css';
//     style.innerHTML = '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
//     document.getElementsByTagName('head')[0].appendChild(style);
//     $(document).ready(function () {
//         $('.t-records').addClass('t-records_animated');
//         setTimeout(function () {
//             $('.t-records').addClass('t-records_visible');
//             sessionStorage.setItem('visited', 'y');
//         }, 400);
//     });
// }
//script tilda



