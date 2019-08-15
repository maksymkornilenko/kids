var countElem = $('#form-count'),
    priceElem = $('#form-list');
countElem.on('change', function(){
    calculate();
});
priceElem.on('change', function(){
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
        $('#form-price').val(priceVal);
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
$("#minus").click(function () {
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
$("#plus").click(function () {
    if (isNaN(countElem.val())) {
        countElem.val(parseInt(1));
    }
    countElem.val(parseInt(countElem.val()) + 1);
    calculate();
});

$("#nextmodal").click(function () {
    var formName = $('#form-name').val();
    var tel = $('#form-tel').val();
    var city = $('#form-city').val();
    if (formName != '' && tel != '' && city != '') {
        sendForm();
    }
});

/**
 * функция для вызова модального окна
 * @param cart
 */
function showCart(cart) {
    $('#cart.modal-body').html(cart);
    $('#cart').modal();
}

