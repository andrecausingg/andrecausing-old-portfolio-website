$(document).ready(function(){
    var a = 0;
    $("#btnHamburgerJs").click(function(){
        $("#btnHamburgerJs").toggleClass("open");
        if(a == 0){
            a = 1;
            $(".overlay").css("display", "block"); 
        }else{
            a = 0;
            $(".overlay").css("display", "none"); 
        }
    });


    $("#btnRatesSubmit").click(function(e){
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var budget = $('#budget').val();
        var details = $('#details').val();

            $.ajax({
                type: "POST",
                url: "mail.php",
                data: "Name="+name+"&Email="+email+"&Budget="+budget+"&Details="+details
            });
    });
});





