$(function(){

    //关闭
    $(".loginCloseBtn").click(function(){
        $(".loginBox").css("display","none");
    })

    $(".regCloseBtn").click(function(){
        $(".regBox").css("display","none");
    })

    //跳转
    $(".regBtn").click(function(){
        $(".loginBox").css("display","none");
        $(".regBox").css("display","block");
    })

    $(".loginBtn").click(function(){
        $(".loginBox").css("display","block");
        $(".regBox").css("display","none");
    })

    $(".regBox,.loginBox").submit(function(){
        return false;
    })


//判断登陆状态
    $(".info").click(function(){
        $.ajax({
            url:"index.php?m=index&f=info&a=add",
            success:function(e){
                if(e=="nologin"){

                    $(".loginBox").css("display","block");
                    $(".regBox").css("display","none");
                }else if(e=="ok"){
                    location.href="index.php?m=index&f=info"
                }
            }
        })
    })


    //注册

    $(".willReg").click(function(){
        var str=$(".regBox").serialize();
        $.ajax({
            url:"index.php?m=index&f=login&a=reg",
            type:"post",
            data:str,
            success:function(e){

                $(".errorMessage").html(e).css("display","block").css("animation","opacity 2s linear");

                $(".errorMessage")[0].addEventListener("webkitAnimationEnd",function(){
                    $(".errorMessage").css("display","none")
                })

                if(e=="ok"){
                    $(".regBox input").val("");
                }

            }
        })
    })

    //登陆
    $(".willLogin").click(function(){
        var str=$(".loginBox").serialize();
        $.ajax({
            url:"index.php?m=index&f=login&a=willLogin",
            type:"post",
            data:str,
            success:function(e){
                $(".errorMessage").html(e).css("display","block").css("animation","opacity 2s linear");

                $(".errorMessage")[0].addEventListener("webkitAnimationEnd",function(){
                    $(".errorMessage").css("display","none")
                })


                if(e=="ok,即将跳转...."){
                    setTimeout(function(){

                        location.href="index.php";
                    },1000)
                }
            }


        })
    })

    //退出登陆

    $(".logout").click(function(){
        $.ajax({
            url:"index.php?m=index&f=login&a=logout",
            type:"post",
            success:function(e){
                if(e=="ok"){
                    $(".errorMessage").html("即将退出...").css("display","block").css("animation","opacity 2s linear");

                    $(".errorMessage")[0].addEventListener("webkitAnimationEnd",function(){
                        $(".errorMessage").css("display","none")
                    })



                    setTimeout(function(){

                        location.href="index.php";
                    },1000)


                }
            }
        })
    })
})