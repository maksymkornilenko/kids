$("#plus").click(function() {
    var $count = $("#form-count");
    $count.val(parseInt($count.val()) + 1);
    $count.change();
    calculate();
});
$("#minus").click(function() {
    var $count = $("#form-count");
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

function getChar(event) {
    if (event.which == null) {
        if (event.keyCode < 32)
            return null;
        return String.fromCharCode(event.keyCode) // IE
    }
    if (event.which != 0 && event.charCode != 0) {
        if (event.which < 32)
            return null;
        return String.fromCharCode(event.which) // остальные
    }
    return null; // специальная клавиша
}
var plus;
plus = document.getElementById('plus');
var minus=document.getElementById('minus');
var moneyElem = document.getElementById('form-count');
moneyElem.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
        || (e.keyCode > 47 && e.keyCode < 58)
        || e.keyCode == 8)) {
        return false;
    }
}
moneyElem.onkeypress = function (e) {
    e = e || event;
    var chr = getChar(e);
    if (e.ctrlKey || e.altKey || chr == null)
        return; // специальная клавиша
    if (chr < '0' || chr > '9')
        return false;
}
// клавиатура, вставить/вырезать клавиатурой
moneyElem.onkeyup = calculate;
// любые действия, кроме IE. В IE9 также работает, кроме удаления
moneyElem.oninput = calculate;
moneyElem.onpropertychange = function () { // для IE8- изменение значения, кроме удаления
    event.propertyName == "value" && calculate();
}
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
    $('#test1').modal('show')
})
