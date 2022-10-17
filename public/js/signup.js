$(function (){
    $("input:submit").on("click",function (e){
        if (!($("#pass").val() == $("#cpass").val()))
        {
            e.preventDefault();
            $(".signup-error").show()
        }

    })

    $("#cpass").on("keyup",function (){
        $(this).css({
            'color':'red'
        })
        if ($("#pass").val() == $("#cpass").val())
        {
           $(this).css({
               'color':'black'
           })
        }

    })
})