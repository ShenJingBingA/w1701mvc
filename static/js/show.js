$(function(){
    /*
    *   关注者    张三
    *   被关注者  李四
    * */
    $(".guanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=add",
            type:"post",
            data:{near:location.href,mid:$(".stitle").attr("mid")},
            success:function(e){
                if(e==="no"){
                    $(".loginBox").css("display","block");
                }else if(e==="ok"){
                    $(".guanzhu").css("display","none");
                    $(".cancelguanzhu").css("display","block");
                }
            }
        })
    })

    /*取消关注*/

    $(".cancelguanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=guanzhu&a=del",
            type:"post",
            data:{mid:$(".stitle").attr("mid")},
            success:function(e){
                if(e==="ok"){
                    $(".guanzhu").css("display","block");
                    $(".cancelguanzhu").css("display","none");
                }
            }
        })
    })

})