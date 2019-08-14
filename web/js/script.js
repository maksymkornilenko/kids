function getChar(event) {
    if (event.which == null) {
        if (event.keyCode < 32) return null;
        return String.fromCharCode(event.keyCode) // IE
    }

    if (event.which != 0 && event.charCode != 0) {
        if (event.which < 32) return null;
        return String.fromCharCode(event.which) // остальные
    }

    return null; // специальная клавиша
}
function calculate() {
    var sum = +countElem.value;
    if(countElem==0||priceElem==0||countElem==null||priceElem==null){
        sum=0;
        document.getElementById('form-sum').value = sum;
    }else {
        sum = sum * (priceElem.value);
        document.getElementById('form-price').value=priceElem.value;
        document.getElementById('form-sum').value = sum;
    }
}
function sendForm(){
    var form = $("#contact-form").serialize();

    $.ajax({
        type: "POST",
        url: "/site/check",
        data: form,
        success: function(data) {
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
$(document).ready(function($){
    $("#form-tel").mask('8(099)999-99-99');
});
$(".dropdown").click(function(){
    $('#form-modal').modal('show');
    $('select option[value="300"]').prop('selected', true);
    document.getElementById('form-price').value=300;
    calculate();
});
$("#dropdown").click(function(){
    $('#form-modal').modal('show');
    $('select option[value="300"]').prop('selected', true);
    document.getElementById('form-price').value=300;
    calculate();
});
$("#dropdown2").click(function(){
    $('#form-modal').modal('show');
    $('select option[value="300"]').prop('selected', true);
    document.getElementById('form-price').value=300;
    calculate();
});
$("#nextmodal").click(function(){
    var formName = $('#form-name').val();
    var tel = $('#form-tel').val();
    var city = $('#form-city').val();
    if(formName!='' && tel!='' && city!=''){
        sendForm();
    }
});
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
var countElem;
countElem= document.getElementById('form-count');
if(countElem+".value"==undefined||countElem+".value"==NaN){
    document.getElementById('form-count').value=1;
}
countElem.onkeyup = calculate;
countElem.oninput = calculate;
var priceElem = document.getElementById('form-list');
priceElem.onchange = calculate;
countElem.onkeypress = function(e) {
    e = e || event;
    var chr = getChar(e);
    if (e.ctrlKey || e.altKey || chr == null) return; // специальная клавиша
    if (chr < '0' || chr > '9') return false;
};