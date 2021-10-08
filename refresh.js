function refresh() {
 
    var data=$("#input").val();
 
    var messageDTO={
        result:data
    };
 
    $.ajax({
        url: "OrderInfo.php",
        data: messageDTO,
        type:"POST",
    }).done(function (fragment) {
        $("#search").replaceWith(fragment);
    });
}