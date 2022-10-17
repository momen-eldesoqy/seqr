$(function (){
    var img = $(".step4img img");
    var btn = $(".link_butt");
    $(".btnUp").on("keyup",function (){
        var type = $(this).data('type');
        var content = $(this).val();
        switch (type)
        {
            case "tele":
                content = "tel: " + content ;
                break;
            case "sms":
                content = "smsto:" + content ;
                break;
            case "skype":
                content = "skype:"+content+"?call";
        }
        $.ajax({
            method : 'POST',
            url : '/flowcode/create',
            data : {data : content},
            success : function (response , status , xhr){
                if (status == "success")
                {
                    img.attr("src",response);
                    btn.attr("href",response);
                }
            }
        })

    })
    $(".emailSub").on("click",function (){
        var to = $("#mailTo").val();
        var sub = $("#subject").val();
        var body = $("#body").val();

        var content = "mailto:"+to+"?subject="+sub+"&body="+body;

        $.ajax({
            method : 'POST',
            url : '/flowcode/create',
            data : {data : content},
            success : function (response , status , xhr){
                if (status == "success")
                {
                    img.attr("src",response);
                    btn.attr("href",response);
                }
            }
        })

    })
    $(".busSub").on("click",function (){
        var name = $("#name").val();
        var phone = $("#phone").val();
        var email = $("#email").val();
        var org = $("#org").val();

        var content  = 'BEGIN:VCARD'+"\n";
        content+= 'VERSION:2.1'+"\n";
        content+= 'N:'+name+"\n";
        content+= 'ORG:'+org+"\n";
        content+= 'TEL;WORK;VOICE:'+phone+"\n";
        content+= 'EMAIL:'+email+"\n";
        content+='END:VCARD';



        $.ajax({
            method : 'POST',
            url : '/flowcode/create',
            data : {data : content},
            success : function (response , status , xhr){
                if (status == "success")
                {
                    img.attr("src",response);
                    btn.attr("href",response);
                }
            }
        })

    })
    $(".survey").on("click",function (){
        var content = $(this).data('link');
        console.log(content);
        $.ajax({
            method : 'POST',
            url : '/flowcode/create',
            data : {data : content},
            success : function (response , status , xhr){
                if (status == "success")
                {
                    img.attr("src",response);
                    btn.attr("href",response);
                }
            }
        })

    })

})