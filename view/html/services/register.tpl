<!-- INCLUDE ../header.tpl -->
<div class="detail-top">
    <div class="top-img" id="topimg" style="background:url() center center no-repeat;background-size: cover;height: 500px;">
    </div>
</div>

<div class="box1Bg box1Cen" id="alliance-bg">
    <div class="container ">
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
            <!-- <img src="{WEBSITE_SOURCE_URL}/img/about/about-title.png" class="img-responsive"> -->
        </div>
        
        <div class="showContent">
            
        </div>
    </div>
</div>

<script>
$(function(){
    $('header').attr('class','headerBg navbar-fixed-top active');
    // console.log($('header').attr('class'));
    $(window).scroll(function(event) {
        // console.log($('header').attr('class'));
        $('header').attr('class','headerBg navbar-fixed-top active');
    });

    
    loadingArr = ['.showContent'];
    showLoading();
    //加载数据
    //请求数据并渲染页面
    var params = {id: 3};
    $.ajax({
        url: '?m=about&a=getPage',
        type: 'POST',
        data: params,
        success: function(res){
            res = $.parseJSON(res);
            closeLoading();
            if(res.resCode !== 200){
                // alert(res.resData);
                $('body').html('<h1 class="text-center" style="color:black;padding-top:100px;">HELLO ERROR: '+res.resData +'</h1>');
                return false;
            }else{
                // showData(res.resData);
                // $('.imgFull').attr('style','background-image: url("{imgPath}/about/' + res.resData[0].pic + '"); 100% 100% center')
                $('#topimg').attr('style','background:url("{imgPath}/about/' + res.resData[0].pic + '") center center no-repeat;background-size: cover;height: 500px;');
                // $('.imgFull img').attr('src', '{imgPath}/about/' + res.resData[0].pic);
                // console.log($('.imgFull img').attr('src'));
                $('.showContent').html(res.resData[0].content);
                // if(localStorage.getItem(events_id) !== $('#topimg').attr('style')){
                //     //存储图片
                //     localStorage.setItem(events_id,$('#topimg').attr('style'));
                // }
            }
        }
    })

})
</script>
<!-- INCLUDE ../footer.tpl -->