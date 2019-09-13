// var countElem = $('#form-count'),
//     priceElem = $('.dropdown-list');
// countElem.on('change', function () {
//     calculate();
// });
// priceElem.on('change', function () {
//     calculate();
// });
//
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
//
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
//
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
 * function for open cart
 */
$('.open-order').click(function () {
    var product = $(this).data('product');
    $('#form-modal').modal('show');
    var res = $('.dropdown-list').val(product);
    $('.price-value').text(res.val());
    $(".t706__carticon-imgwrap").css({display: 'none'});
});
/**
 *
 */
$('.phoneicon').click(function () {
    $('#callback-modal').modal('show');
});
/**
 *function for change product and them price inside modal window
 */
$('.dropdown-list').change(function () {
    var product = $(".dropdown-list").find(":selected").data("product");
    var res = $('.dropdown-list').val(product);
    $('.price-value').text(res.val());
    $(".t706__carticon-imgwrap").css({display: 'none'});
});
/**
 * function for show cart
 * @param cart
 */
function showCart(cart) {
    $('#cart .modal-body2').html(cart);
    $('#cart').modal();
}
function showAnswer(callback) {
    $('#answer-callback-modal .modal-body2').html(callback);
    $('#answer-callback-modal').modal();
}

/**
 * function for show cart in modal window when click on cart picture
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
            if ($('.t706__cartwin-count').text() == '') {
                $('.t706__cartwin-bottom').css({display: 'none'});
            } else {
                $('.t706__cartwin-bottom').css({display: 'block'});
            }
        },
        error: function (res) {
            res = 'error';
            $("#form-modal").modal('hide');
            showCart(res);
        }
    });
});
/**
 * function for add product to cart
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
            $('.t706__cartwin-bottom').css({display: 'block'});
        },
        error: function (res) {
            res = 'error';
            $("#form-modal").modal('hide');
            showCart(res);
            $('.t706__cartwin-bottom').css({display: 'none'});
        }
    });
});

/**
 * mask for phone
 */
$(document).ready(function ($) {
    $("#clientssec-phone").mask('8(099)999-99-99');
    $("#callback-phone").mask('8(099)999-99-99');
});
/**
 * function for delete one product position when clickon chest
 */
$('#cart .modal-body').on('click', '.del-item', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    $.ajax({
        url: '/cart/delete',
        data: {id: id},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            showCart(res);
            console.log('del-item');
            if ($('.t706__cartwin-count').text() == '') {
                $('.t706__cartwin-bottom').css({display: 'none'});
                $("#cart").on("hidden.bs.modal", function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: '/cart/redirect',
                    });
                });
                $("#cart").on(".close", function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: '/cart/redirect',
                    });
                });
            } else {
                $('.t706__cartwin-bottom').css({display: 'block'});
            }
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
/**
 * function for clear cart from all products
 */
$('#cart .modal-body').on('click', '.clearCart', function (e) {
    e.preventDefault();
    $.ajax({
        url: '/cart/clear',
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            console.log('clearcart');
            showCart(res);
            $("#cart").on("hidden.bs.modal", function (e) {
                e.preventDefault();
                $.ajax({
                    url: '/cart/redirect',
                });
            });
            $("#cart").on(".close", function (e) {
                e.preventDefault();
                $.ajax({
                    url: '/cart/redirect',
                });
            });
            $('.t706__cartwin-bottom').css({display: 'none'});
        },
        error: function (res) {
            res = 'error';
            showCart(res);
            $('.t706__cartwin-bottom').css({display: 'none'});
        }
    });
});
/**
 * function for add to cart when click on plus
 */
$('#cart .modal-body').on('click', '#plus-cart', function (e) {
    e.preventDefault();
    var id = $(this).data("id"),
        count = $(this).data('count'),
        gender = $(this).data('gender');
    var $link = $(e.target);
    if (!$link.data('lockedAt') || +new Date() - $link.data('lockedAt') > 190) {
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
    }
});

/**
 * function for input count of products
 */
function inputCount() {
    var count = $('#message').val();
    var id = $('#message').data('id');
    var gender = $('#message').data('gender');
    if (count <= 0) {
        count = 1;
    }
    if (count == undefined || id == undefined || gender == undefined) {
        return false;
    } else {
        $.ajax({
            url: '/cart/change',
            data: {id: id, count: count, gender: gender},
            type: 'get',
            success: function (res) {
                if (!res) res = 'cart empty';
                showCart(res);
                $(this).replaceWith("<span class='t706__product-quantity cart-count' data-id=" + $('#message').data("id") + " data-gender=" + $('#message').data("gender") + ">" + $('#message').val() + "</span>");
            },
            error: function (res) {
                res = 'error';
                showCart(res);
            }
        });
    }

}

/**
 * callback function inputCount when change count of products
 */
$('#cart .modal-body').on('change', '#message', function (e) {
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '-30px'});
    inputCount();
});
/**
 * callback input field for change count of products
 */
$('#cart .modal-body').on('click', '.cart-count', function (e) {
    $(this).replaceWith("<input class='t706__product-quantity cartcount' min='1' type='number'data-id=" + $(this).data('id') + " data-gender=" + $(this).data('gender') + " id='message' name='message' autofocus class='manFl' value=" + $(this).text() + ">");
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '-36px'});
});
/**
 * return span tag after change
 */
$('#cart .modal-body').on('blur', '#message', function (e) {
    $(this).replaceWith("<span class='t706__product-quantity cart-count' data-id=" + $(this).data("id") + " data-gender=" + $(this).data("gender") + ">" + $(this).val() + "</span>");
    $('.t706__product-plusminus').css({position: 'relative'});
    $('.t706__product-plusminus').css({left: '0px'});
});
/**
 * function for remove and delete product when click on minus
 */
$('#cart .modal-body').on('click', '#minus-cart', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var count = $(this).data('count');
    var gender = $(this).data('gender');
    var $link = $(e.target);
    if (!$link.data('lockedAt') || +new Date() - $link.data('lockedAt') > 190) {
        $.ajax({
            url: '/cart/remove',
            data: {id: id, count: count, gender: gender},
            type: 'get',
            success: function (res) {
                if (!res) res = 'cart empty';
                showCart(res);
                if ($('.t706__cartwin-count').text() == '') {
                    $("#cart").on("hidden.bs.modal", function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: '/cart/redirect',
                        });
                    });
                    $("#cart").on(".close", function (e) {
                        e.preventDefault();
                        $.ajax({
                            url: '/cart/redirect',
                        });
                    });
                    $('.t706__cartwin-bottom').css({display: 'none'});
                } else {
                    $('.t706__cartwin-bottom').css({display: 'block'});
                }
            },
            error: function (res) {
                res = 'error';
                showCart(res);
            }
        });
    }
    $link.data('lockedAt', +new Date());
});
/**
 * function for choice area and city of this area
 */
$('#cart .modal-body').on('change', '#orders-area', function (e) {
    e.preventDefault();
    var area = $(this).find(":selected").val();
    var areatext = $(this).find(":selected").text();
    $.ajax({
        url: '/cart/area',
        data: {value: area, text:areatext},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            res = JSON.parse(res);
            $('#orders-city').empty().append('<option value=" ">Выберите город...</option>' + res);
            if ($('#orders-area').val() == '') {
                $('#orders-warehouse').empty();
                $('#orders-city').empty();
                $('.control-label').css({color: '#000'})
                $('.select2-selection').css({borderColor: '#ccc'})
            }
            $('#orders-warehouse').empty();
            $('.control-label').css({color: '#000'})
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});
/**
 * function for choice city and warehouse of Nova Poshta
 */
$('#cart .modal-body').on('change', '#orders-city', function (e) {
    e.preventDefault();
    var city = $(this).find(":selected").val();
    $.ajax({
        url: '/cart/city',
        data: {city: city},
        type: 'get',
        success: function (res) {
            if (!res) res = 'cart empty';
            res = JSON.parse(res);
            $('#orders-warehouse').empty().append('<option value=" ">Выберите отделение Новой почты...</option>' + res);
            if ($('#orders-city').val() == null) {
                $('#orders-warehouse').empty();
            }
        },
        error: function (res) {
            res = 'error';
            showCart(res);
        }
    });
});

/**
 *function for send order
 */
$('#cart .modal-body').on('click', '.sendOrder', function (e) {
    var name = $('#clientssec-name').val();
    var phone = $('#clientssec-phone').val();
    var mail = $('#clientssec-email').val();
    var area = $('#orders-area').find(":selected").text();
    var city = $('#orders-city').find(":selected").text();
    var warehouse = $('#orders-warehouse').find(":selected").text();
    name = name.trim();
    mail = mail.trim();
    e.preventDefault();
     if ($('#clientssec-phone').val().length == 0 || $('#clientssec-phone').val().length == 0 || $('#clientssec-phone').val().length == 0 || $('#orders-area').val().length == 0 || $('#orders-city').val().length == 0 || $('#orders-warehouse').val().length == 0) {
         $('.error-send').text('Заполните все поля перед оформлением заказа.');
         $('.error-send').css({color: '#a94442'});
     }else if($('.help-block').text()!=''){
         $('.error-send').text('Заполните все поля перед оформлением заказа.');
         $('.error-send').css({color: '#a94442'});
     } else {
         $.ajax({
             url: '/cart/view',
             data: {name: name, phone: phone, mail: mail, area: area, city: city, warehouse: warehouse},
             type: 'post',
             success: function (res) {
                 if (!res) res = 'cart empty';
                 showCart(res);
                 $('.t706__cartwin-bottom').css({display: 'none'});
                 $("#cart").on("hidden.bs.modal", function (e) {
                     e.preventDefault();
                     $.ajax({
                         url: '/cart/redirect'
                     });
                 });
                 $("#cart").on(".close", function (e) {
                     e.preventDefault();
                     $.ajax({
                         url: '/cart/redirect'
                     });
                 });
             },
             error: function (res) {
                 res = 'error';
                 showCart(res);
             }
         });
     }
});
/**
 * function for show picture of cart after close modal window of order
 */
$("#cart").on("hidden.bs.modal", function (e) {
    e.preventDefault();
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
    $('#cart').modal('hide');
    $("div.modal-backdrop").remove()
});
/**
 * function for show picture of cart after close modal window of product
 */
$("#form-modal").on("hidden.bs.modal", function () {
    $(".t706__carticon-imgwrap").css({display: 'block'});

});
$(document).ready(function() {

    var btn = $('#button');
    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '30');
    });

});

$('.sendCallbackForm').on('click', function (e) {
    var name = $('#callback-name').val();
    var phone = $('#callback-phone').val();
    console.log(name);
    console.log(phone);
    name = name.trim();
    e.preventDefault();
    if ($('#callback-name').val().length == 0 || $('#callback-phone').val().length == 0) {
        return false;
    } else {
        $.ajax({
            url: '/site/callback',
            data: {name: name, phone: phone},
            type: 'post',
            success: function (res) {
                if (!res) res = 'empty';
                $('#callback-modal').modal('hide');
                showAnswer(res);
                $("#answer-callback-modal").on("hidden.bs.modal", function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: '/cart/redirect',
                    });
                });
                $("#answer-callback-modal").on(".close", function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: '/cart/redirect',
                    });
                });
            },
            error: function (res) {
                res = 'error';
                $('#callback-modal').modal('hide');
                showAnswer(res);
            }
        });
    }
});
//==================================================================================================
// var textWait = "Подождите! Выполняется загрузка...";
// var orderId = ' . ($model->id ? $model->id : 0) . ';
// $("document").ready(function() {
//     ' . ($model->delivery_id == 4 || $model->delivery_id == 2 ? 'getRegionList(' . ($model->id ? $model->id : 0) . ');' : '') . '
// });
// $("#js_delivery_region_title").change(function() {
//     if ($("#crmorder-delivery_id").val() == 4 || $("#crmorder-delivery_id").val() == 2) {
//         getCityList();
//     }
// });
//
// $("#js_delivery_city").change(function() {
//     if ($("#crmorder-delivery_id").val() == 4 || $("#crmorder-delivery_id").val() == 2) {
//         getWarehouseList();
//     }
// });
//
// function resetRegion() {
//     $("#select2-crmorder-delivery_region_title-container").html(textWait);
// }
// function resetCity() {
//     $("#select2-crmorder-delivery_city-container").html(textWait);
// }
// function resetWarehouseField() {
//     $("#crmorder-delivery_department_id").html(textWait);
//     $("#select2-crmorder-delivery_department_id-container").html(textWait);
// }
//
// function getWarehouseList(orderId) {
//     resetWarehouseField();
//     if ($("#crmorder-delivery_id").val() == 4 || $("#crmorder-delivery_id").val() == 2) {
//         var url = "/delivery/get-select-option?deliveryId=" + $("#crmorder-delivery_id").val() + "&type=2&code=" + $("#crmorder-delivery_city").val();
//         if (orderId > 0) {
//             url += "&orderId=" + orderId;
//         }
//         $.ajax({
//             url: url,
//             success: function (data) {
//                 if (data.options) {
//                     $("#crmorder-delivery_department_id").html(data.options);
//                 }
//             }
//         });
//     } else {
//         var url = "/order/get-select-options?type=2";
//         var cityName = $("#crmorder-delivery_city").val();
//         if (cityName != "") { url += "&cityName=" + cityName; }
//         url += "&deliveryId=" + $("#crmorder-delivery_id").val();
//         $.ajax({
//             url: url,
//             success: function (data) {
//                 if (data.options) {
//                     $("#crmorder-delivery_department_id").html(data.options);
//                 }
//             }
//         });
//     }
// }
//
// function getCityList(orderId) {
//     resetCity();
//     resetWarehouseField();
//     if ($("#crmorder-delivery_id").val() == 4 || $("#crmorder-delivery_id").val() == 2) {
//         var url = "/delivery/get-select-option?deliveryId=" + $("#crmorder-delivery_id").val() + "&type=1&code=" + $("#crmorder-delivery_region_title").val();
//         if (orderId > 0) {
//             url += "&orderId=" + orderId;
//         }
//         $.ajax({
//             url: url,
//             success: function (data) {
//                 if (data.options) {
//                     $("#crmorder-delivery_city").html(data.options);
//                     getWarehouseList(orderId);
//                 }
//             },
//             beforeSend: function() {
//                 $("#crmorder-delivery_department_id").html("<option value=\"\"></option>");
//             }
//         });
//     } else {
//         var url = "/order/get-select-options?type=1";
//         var areaName = $("#crmorder-delivery_region_title").val();
//         if (areaName != "") { url += "&areaName=" + areaName; }
//         url += "&deliveryId=" + $("#crmorder-delivery_id").val();
//         $.ajax({
//             url: url,
//             success: function (data) {
//                 if (data.options) {
//                     $("#crmorder-delivery_city").html(data.options);
//                 }
//             },
//             beforeSend: function() {
//                 //$("#crmorder-delivery_department_id").html("<option value=0>Список пуст! Сначала нужно выбрать город!</option>");
//                 $("#crmorder-delivery_department_id").html("<option value=\"\"></option>");
//             }
//         });
//     }
// }
//
// function getRegionList(orderId) {
//     if ($("#crmorder-delivery_id").val() == 4 || $("#crmorder-delivery_id").val() == 2) {
//         var url = "/delivery/get-select-option?deliveryId=" + $("#crmorder-delivery_id").val() + "&type=0";
//         if (orderId > 0) {
//             url += "&orderId=" + orderId;
//         }
//         $.ajax({
//             url: url,
//             success: function (data) {
//                 if (data.options) {
//                     $("#crmorder-delivery_region_title").html(data.options);
//                     getCityList(orderId);
//                 }
//             },
//             beforeSend: function() {
//                 $("#crmorder-delivery_city").html("<option value=\"\"></option>");
//                 $("#crmorder-delivery_department_id").html("<option value=\"\"></option>");
//             }
//         });
//     } else {
//         var url = "/order/get-select-options?type=0&areaName=&cityName=&orderId=0&deliveryId=" + $("#crmorder-delivery_id").val();
//         //var areaName = $("#crmorder-delivery_region_title").val();
//         //if (areaName != "") { url += "&areaName=" + areaName; }
//         $.ajax({
//             url: url,
//             success: function (data) {
//                 if (data.options) {
//                     $("#crmorder-delivery_region_title").html(data.options);
//                 }
//             },
//             beforeSend: function() {
//                 //$("#crmorder-delivery_city").html("<option value=0>Список пуст! Сначала нужно выбрать область!</option>");
//                 //$("#crmorder-delivery_department_id").html("<option value=0>Список пуст! Сначала нужно выбрать город!</option>");
//                 $("#crmorder-delivery_city").html("<option value=\"\"></option>");
//                 $("#crmorder-delivery_department_id").html("<option value=\"\"></option>");
//             }
//         });
//     }
// }