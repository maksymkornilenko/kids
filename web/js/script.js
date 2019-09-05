// var countElem = $('#form-count'),
//     priceElem = $('.dropdown-list');
// countElem.on('change', function () {
//     calculate();
// });
// priceElem.on('change', function () {
//     calculate();
// });

// function calculate() {
//     var sum = 0,
//         countVal = countElem.val(),
//         priceVal = priceElem.val();
//     if (countVal === undefined || countVal === NaN) {
//         countVal = 1;
//     }
//     if (countVal === 0 || priceVal === 0 || countVal === null || priceVal === null) {
//         $('#form-sum').val(sum);
//     } else {
//         sum = countVal * priceVal;
//         $('.price-value').text(priceVal);
//         $('#form-sum').val(sum);
//     }
// }

// function sendForm() {
//     var form = $("#contact-form").serialize();
//
//     $.ajax({
//         type: "POST",
//         url: "/site/check",
//         data: form,
//         success: function (data) {
//             if (data.success == 1) {
//                 console.log(data);
//                 $("#form-modal").modal('hide');
//                 $('#answer-modal').modal('show');
//             } else {
//                 $("#form-modal").modal('hide');
//                 $('#error-modal').modal('show');
//             }
//         },
//         error: function () {
//             $("#form-modal").modal('hide');
//             $('#error-modal').modal('show');
//         },
//     });
// }
//
// countElem.blur(function () {
//     if ($(this).val() == '') {
//         $(this).val(parseInt(1)).change();
//         calculate();
//     }
// });
// $("#minus").click(function () {
//     if (isNaN(countElem.val())) {
//         countElem.val(parseInt(1));
//         calculate();
//     }
//     if (countElem.val() <= 1) {
//         countElem.val(1);
//         calculate();
//     } else {
//         countElem.val(parseInt(countElem.val()) - 1);
//         calculate();
//     }
// });
// $("#plus").click(function () {
//     if (isNaN(countElem.val())) {
//         countElem.val(parseInt(1));
//     }
//     countElem.val(parseInt(countElem.val()) + 1);
//     calculate();
// });

// $("#nextmodal").click(function () {
//     var formName = $('#form-name').val();
//     var tel = $('#form-tel').val();
//     var city = $('#form-city').val();
//     if (formName != '' && tel != '' && city != '') {
//         sendForm();
//     }
// });

//Фрагмент кода для работы с корзиной
/**
 * функция открытия корзины
 */
$('.open-order').click(function () {
    var product = $(this).data('product');
    console.log(product);
    $('#form-modal').modal('show');
    var res = $('.dropdown-list').val(product);
    $('.price-value').text(res.val());
    $(".t706__carticon-imgwrap").css({display: 'none'});
});
$('.dropdown-list').change(function () {
    var product = $(".dropdown-list").find(":selected").data("product");
    console.log(product);
    $('#form-modal').modal('show');
    var res = $('.dropdown-list').val(product);
    $('.price-value').text(res.val());
    $(".t706__carticon-imgwrap").css({display: 'none'});
});
/**
 * функция отображения корзины
 * @param cart
 */
function showCart(cart) {
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
}

/**
 * вызов модального окна корзины при нажатии на корзину
 */
$('.shopping-cart').on('click', function (e) {
    $(".t706__carticon_showed").css({display: 'none'});
    e.preventDefault();
    $.ajax({
        url: '/cart/show',
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            $("#form-modal").modal('hide');
            showCart(res);
        },
        error: function (res) {
            res = 'error';
            $("#form-modal").modal('hide');
            showCart(res);
        }
    });
});
/**
 * добавление в корзину
 */
$('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id = $(".dropdown-list").find(":selected").data("id"),
        count = $(".dropdown-list").find(":selected").data('count'),
        gender = $(".gender").find(":selected").data('id');
    $(".t706__carticon_showed").css({display: 'none'});
    $.ajax({
        url: '/cart/add',
        data: {id: id, count: count, gender: gender},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            $("#form-modal").modal('hide');
            showCart(res);
        },
        error: function (res) {
            res = 'error';
            $("#form-modal").modal('hide');
            showCart(res);
        }
    });
});

/**
 * удаление одной позиции из корзины
 */
$('#cart .modal-body').on('click', function (e) {
    $(document).ready(function ($) {
        $("#orders-phone").mask('8(099)999-99-99');
    });
});
/**
 * функция удаления одной позиции товара при нажатии на крестик
 */
$('#cart .modal-body').on('click', '.del-item', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var name = $('#orders-name').val();
    var phone = $('#orders-phone').val();
    var mail = $('#orders-email').val();
    $.ajax({
        url: '/cart/delete',
        data: {id: id},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
            $('#orders-name').val(name);
            $('#orders-phone').val(phone);
            $('#orders-email').val(mail);
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
/**
 * очистка корзины
 */
$('.clearCart').on('click', function (e) {
    e.preventDefault();
    $.ajax({
        url: '/cart/clear',
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
/**
 * функция добавления единицы товара при клике на плюс
 */
$('#cart .modal-body').on('click', '#plus-cart', function (e) {
    e.preventDefault();
    var id = $(this).data("id"),
        count = $(this).data('count'),
        gender = $(this).data('gender');
    var name = $('#orders-name').val();
    var phone = $('#orders-phone').val();
    var mail = $('#orders-email').val();
    $.ajax({
        url: '/cart/add',
        data: {id: id, count: count, gender: gender},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
            $('#orders-name').val(name);
            $('#orders-phone').val(phone);
            $('#orders-email').val(mail);
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
/**
 *
 */
$('#cart .modal-body').on('click', '.cart-count', function (e) {
    $(this).replaceWith("<input class='t706__product-quantity .cart-count' type='number'data-id="+$(this).data('id')+" data-gender="+$(this).data('gender')+" id='message' name='message' autofocus class='manFl' value="+$(this).text()+">");
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '-36px'});
});
$('#cart .modal-body').on('change', '#message', function (e) {
    $(this).replaceWith("<span class='t706__product-quantity cart-count' data-id="+$(this).data("id")+" data-gender="+$(this).data("gender")+">"+$(this).val()+"</span>");
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '0px'});
    var count=$(this).val();
    var id = $(this).data('id');
    var gender = $(this).data('gender');
    console.log(count);
    console.log(id);
    console.log(gender);
    var name = $('#orders-name').val();
    var phone = $('#orders-phone').val();
    var mail = $('#orders-email').val();
    $.ajax({
        url: '/cart/change',
        data: {id: id, count: count, gender: gender},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
            $('#orders-name').val(name);
            $('#orders-phone').val(phone);
            $('#orders-email').val(mail);
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });

});
$('#cart .modal-body').on('blur', '#message', function (e) {
    $(this).replaceWith("<span class='t706__product-quantity cart-count' data-id="+$(this).data("id")+" data-gender="+$(this).data("gender")+">"+$(this).val()+"</span>");
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '0px'});
});
/**
 * функция удаления единицы товара при клике на минус
 */
$('#cart .modal-body').on('click', '#minus-cart', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var count = $(this).data('count');
    var gender = $(this).data('gender');
    var name = $('#orders-name').val();
    var phone = $('#orders-phone').val();
    var mail = $('#orders-email').val();
    var city = $('#orders-city').find(":selected").val();
    $.ajax({
        url: '/cart/remove',
        data: {id: id, count: count, gender: gender},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
            $('#orders-name').val(name);
            $('#orders-phone').val(phone);
            $('#orders-email').val(mail);
            $
            $('#orders-city').val(city);
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
/**
 * функция для выбора области и города
 */
$('#cart .modal-body').on('change', '#orders-area', function (e) {
    e.preventDefault();
    var area = $(this).find(":selected").val();
    var name = $('#orders-name').val();
    var phone = $('#orders-phone').val();
    var mail = $('#orders-email').val();
    if ($(this).find(":selected").text()=='АРК'){
        $('.error-area').text('Данная область не обслуживается Новой почтой, выберите другую область');
        $(".error-area").css({color: 'red'});
    }else {
        $.ajax({
            url: '/cart/area',
            data: {value: area, name: name, phone: phone, mail: mail},
            type: 'get',
            success: function (res) {
                if (!res) res = 'cart empty';
                showCart(res);
                $('#orders-area').val(area);
                $('#orders-name').val(name);
                $('#orders-phone').val(phone);
                $('#orders-email').val(mail);
            },
            error: function (res) {
                res = 'error';
                showCart(res);
            }
        });
    }
});
/**
 * функция для выбора города и отделения
 */
$('#cart .modal-body').on('change', '#orders-city', function (e) {
    e.preventDefault();
    var area = $('#orders-area').find(":selected").val();
    var city = $(this).find(":selected").val();
    var name = $('#orders-name').val();
    var phone = $('#orders-phone').val();
    var mail = $('#orders-email').val();
    $.ajax({
        url: '/cart/city',
        data: {value: area, city: city,},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
            $('#orders-area').val(area);
            $('#orders-city').val(city);
            $('#orders-name').val(name);
            $('#orders-phone').val(phone);
            $('#orders-email').val(mail);
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
/**
 * функция отправки заказа
 */
$('#cart .modal-body').on('change', '#orders-name', function (e) {
    e.preventDefault();
    var name = $('#orders-name').val();
    if (name.length == 0) {
        $('.error-name').text('Введите пожалуйста имя');
        $(".error-name").css({color: 'red'});
    } else if (name.trim().length == 0) {
        $('.error-name').text('Введите пожалуйста имя');
        $(".error-name").css({color: 'red'});
    } else {
        $('.error-name').text('');
    }

});

function validatePhone($phone) {
    var phoneReg = /^(8)[(](\d{3})[)](\d{3})[-](\d{2})[-](\d{2})/;
    return phoneReg.test($phone);
}

$('#cart .modal-body').on('change', '#orders-phone', function (e) {
    e.preventDefault();
    var phone = $('#orders-phone').val();
    if (phone.length == 0) {
        $('.error-phone').text('Введите пожалуйста телефон');
        $(".error-phone").css({color: 'red'});
    } else if (!validatePhone(phone)) {
        $('.error-phone').text('Телефон, должно быть в формате 8(XXX)XXX-XX-XX');
        $(".error-phone").css({color: 'red'});
    } else {
        $('.error-phone').text('');
    }
});

function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    return emailReg.test($email);
}

$('#cart .modal-body').on('change', '#orders-email', function (e) {
    e.preventDefault();
    var mail = $('#orders-email').val();
    if (mail.length == 0) {
        $('.error-email').text('Введите пожалуйста e-mail');
        $(".error-email").css({color: 'red'});
    } else if (!validateEmail(mail)) {
        $('.error-email').text('Введённое в поле значение не отвечает характеристикам e-mail, пожалуйста введите корректный e-mail');
        $(".error-email").css({color: 'red'});
    } else {
        $('.error-email').text('');

    }
});
$('.sendOrder').on('click', function (e) {

    var name = $('#orders-name').val();
    var phone = $('#orders-phone').val();
    var mail = $('#orders-email').val();
    var area = $('#orders-area').find(":selected").text();
    var city = $('#orders-city').find(":selected").text();
    var warehouse = $('#orders-warehouse').find(":selected").text();
    name = name.trim();
    mail = mail.trim();
    e.preventDefault();
    if (name.length == 0) {
        $('.error-name').text('Введите пожалуйста имя');
        $(".error-name").css({color: 'red'});
    } else if (phone.length == 0) {
        $('.error-phone').text('Введите пожалуйста номер телефона');
        $(".error-phone").css({color: 'red'});
    }else if(!validatePhone(phone)){
        $('.error-phone').text('Телефон, должно быть в формате 8(XXX)XXX-XX-XX');
        $(".error-phone").css({color: 'red'});
    }else if(!validateEmail(mail)){
        $('.error-email').text('Введённое в поле значение не отвечает характеристикам e-mail, пожалуста введите корректный e-mail');
        $(".error-email").css({color: 'red'});
    } else if (mail.length == 0) {
        $('.error-email').text('Введите пожалуйста e-mail');
        $(".error-email").css({color: 'red'});
    } else if ($('#orders-area').find(":selected").val() == '') {
        $('.error-area').text('Введите пожалуйста область');
        $(".error-area").css({color: 'red'});
    }else if ($('#orders-area').find(":selected").text() == 'АРК') {
        $('.error-area').text('Данная область не обслуживается Новой почтой, выберите другую область');
        $(".error-area").css({color: 'red'});
    } else if ($('#orders-city').find(":selected").val() == '') {
        $('.error-city').text('Введите пожалуйста город');
        $(".error-city").css({color: 'red'});
    } else if ($('#orders-warehouse').find(":selected").val() == '') {
        $('.error-warehouse').text('Введите пожалуйста отделение Новой почты');
        $(".error-warehouse").css({color: 'red'});
    } else {
        $.ajax({
            url: '/cart/view',
            data: {name: name, phone: phone, mail: mail, area: area, city: city, warehouse: warehouse},
            type: 'post',
            success: function (res) {
                if (!res) res = 'cart empty';
                showCart(res);

            },
            error: function (res) {
                res = 'error';
                showCart(res);
            }
        });
    }
});
$("#cart").on("hidden.bs.modal", function () {
    var sum = $(".t706__cartwin-prodamount").text();
    var count = $(".t706__cartwin-count").text();

    if (count != '') {
        $(".t706__carticon-text").text(sum);
        $(".t706__carticon-counter").text(count);
        $(".t706__carticon_showed").css({display: 'block'});
    } else {
        $(".t706__carticon-text").text('Ваша корзина пуста');
        $(".t706__carticon-counter").text("0");
        $(".t706__carticon_showed").css({display: 'block'});
    }

});
$("#form-modal").on("hidden.bs.modal", function () {
    $(".t706__carticon-imgwrap").css({display: 'block'});
});
// $(".gender").on('change',function () {
//     var gender = $(".gender").find(":selected").data('id');
//     if(gender==1){
//         $('.modalimg').replaceWith('<div class="modalimg"><img src="/img/ironman.png"></div>');
//     }else {
//         $('.modalimg').replaceWith('<div class="modalimg"><img src="/img/Modalpicture.png"></div>');
//     }
//     console.log(gender);
// });
//==================================================================================================