var countElem = $('#form-count'),
    priceElem = $('.dropdown-list');
countElem.on('change', function () {
    calculate();
});
priceElem.on('change', function () {
    calculate();
});
$(document).ready(function ($) {
    $("#form-tel").mask('8(099)999-99-99');
});

function calculate() {
    var sum = 0,
        countVal = countElem.val(),
        priceVal = priceElem.val();
    if (countVal === undefined || countVal === NaN) {
        countVal = 1;
    }
    if (countVal === 0 || priceVal === 0 || countVal === null || priceVal === null) {
        $('#form-sum').val(sum);
    } else {
        sum = countVal * priceVal;
        $('.price-value').text(priceVal);
        $('#form-sum').val(sum);
    }
}

function sendForm() {
    var form = $("#contact-form").serialize();

    $.ajax({
        type: "POST",
        url: "/site/check",
        data: form,
        success: function (data) {
            if (data.success == 1) {
                console.log(data);
                $("#form-modal").modal('hide');
                $('#answer-modal').modal('show');
            } else {
                $("#form-modal").modal('hide');
                $('#error-modal').modal('show');
            }
        },
        error: function () {
            $("#form-modal").modal('hide');
            $('#error-modal').modal('show');
        },
    });
}

countElem.blur(function () {
    if ($(this).val() == '') {
        $(this).val(parseInt(1)).change();
        calculate();
    }
});
$('.open-order').click(function () {
    var product = $(this).data('product');
    $('#form-modal').modal('show');
    var res = $('#form-list').val(product);
    $('#form-price').val(res.val());
    calculate();
});
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
 * функция отображения корзины
 * @param cart
 */
function showCart(cart) {
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
}

/**
 * вызов модального окна корзины
 */
$('.shopping-cart').on('click', function (e) {
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
    console.log(id);
    console.log(count);
    console.log(gender);
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
$('#cart .modal-body').on('click', '.del-item', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    console.log(id);
    $.ajax({
        url: '/cart/delete',
        data: {id: id},
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
$('#cart .modal-body').on('click', '#plus-cart', function (e) {
    e.preventDefault();
    var id = $(this).data("id"),
        count = $(this).data('count'),
        gender = $(this).data('gender');
    console.log(id);
    console.log(count);
    console.log(gender);
    $.ajax({
        url: '/cart/add',
        data: {id: id, count: count, gender: gender},
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
$('#cart .modal-body').on('change', '.cart-count', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var count = $(this).val();
    if (count < 0) {
        count = 1;
    }
    $.ajax({
        url: '/cart/change',
        data: {id: id, count: count},
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
$('#cart .modal-body').on('click', '#minus-cart', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var count = $(this).data('count');
    var gender = $(this).data('gender');
    $.ajax({
        url: '/cart/remove',
        data: {id: id, count: count, gender: gender},
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
$("#minus-cart").click(function () {
    if (isNaN(countElem.val())) {
        countElem.val(parseInt(1));
        calculate();
    }
    if (countElem.val() <= 1) {
        countElem.val(1);
        calculate();
    } else {
        countElem.val(parseInt(countElem.val()) - 1);
        calculate();
    }
});
$("#plus-cart").click(function () {
    if (isNaN(countElem.val())) {
        countElem.val(parseInt(1));
    }
    countElem.val(parseInt(countElem.val()) + 1);
    calculate();
});
$('.sendOrder').on('click', function (e) {
    e.preventDefault();
    console.log(1)
    $.ajax({
        url: '/cart/view',
        type: 'get',
    });
});
//==================================================================================================

