<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zh-CN" class="no-js">
<!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <title>{title}</title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=0.3, user-scalable=1"/>
        <script src="{WEBSITE_SOURCE_URL}/js/lib/vendor/jquery.1.9.1.min.js"></script>
        <link href="{WEBSITE_SOURCE_URL}/js/resources/css/public.css" rel="stylesheet" type="text/css"/>
        <link id="style_themes" href="{WEBSITE_SOURCE_URL}/js/resources/css/themes-default.css" rel="stylesheet"
              type="text/css"/>
        <link rel="stylesheet" href="{WEBSITE_SOURCE_URL}/js/docui/default.min.css">
        <link rel="stylesheet" href="{WEBSITE_SOURCE_URL}/css/my.css">
        <link rel="stylesheet" href="{WEBSITE_SOURCE_URL}/css/events.css">
    </head>
<body>
    <div class="total">
<!--begin header -->
        <div class="header">
            <div class="logo-new">
                <div class="logo-img"><a href="?m=index&a=index"><img src="{WEBSITE_SOURCE_URL}/img/home/logo.png" alt=""></a></div>
            </div>
            <div class="lavlist">
                <ul class="nav nav-pills">
                    <li role="presentation" class="{events}">
                        <!-- <a href="?m=events&a=index"><p>品牌会议</p><p>EVENTS</p></a> -->
                        <a href="?m=events&a=index"><p>品牌会议</p></a>
                    </li>
                    <li role="presentation" class="{alliance}">
                        <!-- <a href="?m=alliance&a=index"><p>产品联盟</p><p>ALLIANCE</p></a> -->
                        <a href="?m=alliance&a=index"><p>产品联盟</p></a>
                    </li>
                    <li role="presentation" class="{banking}">
                        <!-- <a href="?m=banking&a=index"><p>精品投行</p><p><span>INVESTMENT</span><span>BANKING</span></p></a> -->
                        <a href="?m=banking&a=index"><p>精品投行</p></a>
                    </li>
                    <li role="presentation" class="{services}">
                        <!-- <a href="?m=services&a=index"><p>咨询服务</p><p>SERVICES</p></a> -->
                        <a href="?m=services&a=index"><p>咨询服务</p></a>
                    </li>
                    <li role="presentation" class="{media}">
                        <!-- <a href="?m=media&a=index"><p>医疗传媒</p><p>MEDIA</p></a> -->
                        <a href="?m=media&a=index"><p>医疗传媒</p></a>
                    </li>
                    <li role="presentation" class="{about}">
                        <!-- <a href="?m=about&a=index"><p>关于我们</p><p>ABOUT</p></a> -->
                        <a href="?m=about&a=index"><p>关于我们</p></a>
                    </li>
                    <!-- <li role="presentation"><div class="language"><a href="#"><img src="{WEBSITE_SOURCE_URL}/img/home/中英文-b.png"></a></div></li> --> 
                </ul>
            </div>
        </div>
<!--end header -->

<script>
    // $("h3").css("opacity","0.5"); 
    $(window).bind("scroll", function(){ 
        var top = $(this).scrollTop(); // 当前窗口的滚动距离
        if(top > 50){
            $(".header").css("opacity","1"); 
        }else{
            $(".header").css("opacity","0.5"); 
        }
        // console.log(top);   
    });
    
</script>