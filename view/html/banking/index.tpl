<!-- INCLUDE ../header.tpl -->
<div class="headSpace"></div>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="banBg imgFull">
                    <img src="{WEBSITE_SOURCE_URL}/img/banking/banner-00.png" class="img-responsive">
                    <!-- <img src="{img_url}" class="img-responsive"> -->
                </div>
                <div class="slide-caption ">
                    <div class="caption-content">
                        <div class="banImg ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banDot">
        <div class="container">
            <!-- <span class="swiper-pagination"></span> -->
        </div>
    </div>
    <div class="banBtn"></div>
    <!-- <div class="banBtn-new">
        <img src="{WEBSITE_SOURCE_URL}/img/home/down-btn.png" alt="">
    </div> -->
</div>

<div class="box1Bg box1Cen" id="alliance-bg">
    <div class="container ">
        <!--begin 业务介绍 -->
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
            <img src="{WEBSITE_SOURCE_URL}/img/about/about-title.png" class="img-responsive">
        </div>
        <!--end 业务介绍 -->

        <!--begin 服务流程 -->
        <div class="box1Top wow fadeInUp banking-service" data-wow-delay="0.5s">
            <img src="{WEBSITE_SOURCE_URL}/img/banking/service-title.png" class="img-responsive">
            <div class="box1Cen">
                <div class="my-content">
                    <div class="my-left">
                        <a href="javascript:;" class="changeStep">
                            <div class="one">
                                <img src="{WEBSITE_SOURCE_URL}/img/banking/selected-1.png" alt="" class="img-responsive">
                                <span class="word-title-show text-center"> <span>01 </span> 初步接触</span>
                            </div>
                        </a>
                        <a href="javascript:;" class="changeStep">
                            <div class="two">
                                <img src="{WEBSITE_SOURCE_URL}/img/banking/origintal-2.png" alt="" class="img-responsive">
                                <span class="word-title-show text-center black"> <span>02 </span> 初步接触</span>
                            </div>
                        </a>
                        <a href="javascript:;" class="changeStep">
                            <div class="three">
                                <img src="{WEBSITE_SOURCE_URL}/img/banking/origintal-3.png" alt="" class="img-responsive">
                                <span class="word-title-show text-center"> <span>03 </span> 初步接触</span>
                            </div>
                        </a>
                        <a href="javascript:;" class="changeStep">
                            <div class="four">
                                <img src="{WEBSITE_SOURCE_URL}/img/banking/origintal-4.png" alt="" class="img-responsive">
                                <span class="word-title-show text-center black"> <span>04 </span> 初步接触</span>
                            </div>
                        </a>
                        <a href="javascript:;" class="changeStep">
                            <div class="five">
                                <img src="{WEBSITE_SOURCE_URL}/img/banking/origintal-5.png" alt="" class="img-responsive">
                                <span class="word-title-show text-center"> <span>05 </span> 初步接触</span>
                            </div>
                        </a>
                    </div>
                    <div class="my-right"></div>
                </div>
                
            </div>
            <div class="clearfix"></div>
        </div>
        <!--end 服务流程 -->

        <!--begin 合作机构-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="{WEBSITE_SOURCE_URL}/img/banking/partner-title.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="friends-show">
            <li class="wow">
                <div class="box1CenCon logo-show "><img src="{WEBSITE_SOURCE_URL}/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/ali.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/ali.png" class="img-responsive"></div>
            </li>
        </ul>
        <div class="btn-img text-center">
            <a href="javascript:;"><img src="{WEBSITE_SOURCE_URL}/img/alliance/learn-more.png" alt=""></a>
        </div>
        <!--end 合作机构-->
    </div>
</div>

<script>
$(function(){
//     $('header').attr('class','headerBg navbar-fixed-top active');
//     // console.log($('header').attr('class'));
//     $(window).scroll(function(event) {
//         // console.log($('header').attr('class'));
//         $('header').attr('class','headerBg navbar-fixed-top active');
//     });

    
//     loadingArr = ['.showContent'];
//     showLoading();
//     //加载数据
//     //请求数据并渲染页面
//     var params = {id: 3};
//     $.ajax({
//         url: '?m=about&a=getPage',
//         type: 'POST',
//         data: params,
//         success: function(res){
//             res = $.parseJSON(res);
//             closeLoading();
//             if(res.resCode !== 200){
//                 // alert(res.resData);
//                 $('body').html('<h1 class="text-center" style="color:black;padding-top:100px;">HELLO ERROR: '+res.resData +'</h1>');
//                 return false;
//             }else{
//                 // showData(res.resData);
//                 $('.imgFull').attr('style','background-image: url("{imgPath}/about/' + res.resData[0].pic + '"); 100% 100% center')
//                 // $('.imgFull img').attr('src', '{imgPath}/about/' + res.resData[0].pic);
//                 // console.log($('.imgFull img').attr('src'));
//                 $('.showContent').html(res.resData[0].content);
//                 // if(localStorage.getItem(events_id) !== $('#topimg').attr('style')){
//                 //     //存储图片
//                 //     localStorage.setItem(events_id,$('#topimg').attr('style'));
//                 // }
//             }
//         }
//     })

})
</script>
<!-- INCLUDE ../footer.tpl -->