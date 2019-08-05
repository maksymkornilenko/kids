$(".plus").click(function() {
    var $count = $(".singleInfo__price");
    $count.val(parseInt($count.val()) + 1);
    $count.change();
});
$(".minus").click(function() {
    var $count = $(".singleInfo__price");
        $count.val(parseInt($count.val()) - 1);
        $count.change();
    }
});
function myFunction() {
    var count=document.getElementsByClassName("singleInfo__price")[0].value;
    var price = document.getElementById("change").value;
    price=+price;
    var sum=count*price;
    document.getElementById("demo").innerHTML = sum;
}
