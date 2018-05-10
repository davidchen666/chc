<!-- INCLUDE ../header.tpl -->
<div class="headSpace"></div>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="banBg imgFull"><img src="{WEBSITE_SOURCE_URL}/img/events/banner-00.png" class="img-responsive"></div>
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

<div class="box1Bg" id="events-bg">
	<div class="container">
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
        	<img src="{WEBSITE_SOURCE_URL}/img/events/coming-title.png" class="img-responsive">
    	</div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="big-show">
            <li class="wow fadeInUp">
                <div class="single" class="text-left">
                    <div class="add-shadow"><img src="{WEBSITE_SOURCE_URL}/img/events/pic_0510.png" class="img-responsive"></div>
                    <div class="two-show left-show" class="text-left">
                        <p class="text-left"><small>第三届中国微创外科及手术机器人产业投资与并购CEO论坛</small></p>
                        <p class="text-left">时间：2018年6月28-29日 &nbsp;&nbsp;  地点：<small>上海</small></p>
                    </div>
                    <div class="two-show right-show"><a href="http://www.chconsultant.com/zh/summit/MIS2018/apply-register" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/events/record-1.png" alt=""></a></div>
                    <div class="clearfix"></div>
                </div>
            </li>
            <li class="wow fadeInUp">
                <div class="single" class="text-left">
                    <div class="add-shadow"><img src="{WEBSITE_SOURCE_URL}/img/events/pic2.png" class="img-responsive"></div>
                    <div class="two-show left-show" class="text-left">
                        <p class="text-left"><small>第七届中国医疗健康产业投资与并购CEO论坛</small></p>
                        <p class="text-left">时间：2018年4月18-20日 &nbsp;&nbsp;  地点：上海东郊宾馆</p>
                    </div>
                    <div class="two-show right-show"><a href="http://www.chconsultant.com/zh/summit/ceo2018/apply-register" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/events/record-1.png" alt=""></a></div>
                    <div class="clearfix"></div>
                </div>
            </li>
        </ul>
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
            <img src="{WEBSITE_SOURCE_URL}/img/events/events-back.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center">
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/ceo2018/history">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-1-a.png" class="img-responsive"></div>
                	<p>医疗健康产业</p>
                </a>
            </li>
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/ivd2017/history">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-2-a.png" class="img-responsive"></div>
                	<p>IVD及精准医疗</p>
                </a>
            </li>
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/cdi2017/history">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-3-a.png" class="img-responsive"></div>
                	<p>心脑血管</p>
                </a>
            </li>
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/czevent-2017/history">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-4-a.png" class="img-responsive"></div>
                	<p>骨科/生物材料</p>
                </a>
            </li>
            <li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/mis2018/history">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-5-a.png" class="img-responsive"></div>
                	<p>微创外科</p>
                </a>
            </li>
            <li class="wow fadeInUp">
                <a target="_blank" href="http://www.chconsultant.com/zh/summit/mis2018/history">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-6-a.png" class="img-responsive"></div>
                	<p>医疗机器人</p>
                </a>
            </li>
        </ul>

<script>
    $('.box1Bg .box1Cen .img-responsive').hover(function(){
        var obj = $('.box1Bg .box1Cen .img-responsive');
        $.each(obj, function(index, val) {
            var defaultStr = $(this).attr('src').replace('b.png','a.png');
            val.src = defaultStr;
            var cObj = $(this).parent().next();
            cObj.attr('style', 'color:#ffffff');
        });
        var hoverStr = $(this).attr('src').replace('a.png','b.png');
        $(this).attr('src',hoverStr);
        var cObj_new = $(this).parent().next();
        cObj_new.attr('style', 'color:#9DC040');
    }, function() {
    })
</script>

        <!--战略伙伴-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="{WEBSITE_SOURCE_URL}/img/events/friends-title.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="friends-show">
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-1.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-2.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-3.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-4.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-5.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-6.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-7.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-8.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-9.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-10.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-11.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-12.jpg" class="img-responsive"></div>
            </li>
        </ul>
        <!--媒体-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="{WEBSITE_SOURCE_URL}/img/events/media-title.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="friends-show">
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-1.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-2.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-3.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-4.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-5.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-6.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-7.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-8.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-9.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-10.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-11.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-12.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-13.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/media-14.png" class="img-responsive"></div>
            </li>
        </ul>

        <!-- last -->
        <div id="bottom-show">
            <div class="box1Cen box1CenCon">
                <div class="wow list-unstyled list-inline text-center bg-up">
                    <div class="bg-up-inner">
                        <div class="small-top text-left"><img src="{WEBSITE_SOURCE_URL}/img/events/green-logo.png"></div>
                        <div class="inner-box-up"></div>
                    </div>
                </div>
                <div class="wow list-unstyled list-inline text-center bg-down">
                    <div class="bg-down-inner">
                        <div class="inner-box-down">
                            <div class="detail-intro text-left">
                                <p>为了促进医疗健康行业的发展，也为关注及从事医疗健康产业的企业、机构、园区等提供更过的增值服务，我们每年举办多场医疗健康产业发展与投资并购的高峰论坛。</p>
                            <p>始终聚焦并关注最具潜力的细分领域，如IVD及精准医疗、心脑血管及神经介入、骨科及生物材料、微创外科及手术机器人、智能医疗、口腔及齿科等、高度链接产业界、学术界、资本界，并以医疗企业高管、投资机构合伙人、医院及研发机构专家为主要参会人群。CHC医疗健康系列峰会已成为行业标杆论坛，是中国的 JP Morgan 医健大会。</p>
                            </div>
                            <ul class="box1Cen list-unstyled list-inline text-center" id="detail-list">
                                <li class="wow">
                                    <div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/events/icon1.png" class="img-responsive"></div>
                                    <p>搭建企业高层商务交流平台</p>
                                </li>
                                <li class="wow">
                                    <div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/events/icon2.png" class="img-responsive"></div>
                                    <p>产业投资与并购项目合作</p>
                                </li>
                                <li class="wow">
                                    <div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/events/icon3.png" class="img-responsive"></div>
                                    <p>企业品牌展示与推广</p>
                                </li>
                                <li class="wow">
                                    <div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/events/icon4.png" class="img-responsive"></div>
                                    <p>结交行业顶尖专家</p>
                                </li>
                                <li class="wow">
                                    <div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/events/icon5.png" class="img-responsive"></div>
                                    <p>了解最新行业趋势前沿技术</p>
                                </li>
                            </ul>
                            <div id="detail-contact">
                                >>>>>> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{WEBSITE_SOURCE_URL}/img/events/icon-phone.png" alt=""> 021-68581087 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="{WEBSITE_SOURCE_URL}/img/events/icon-mail.png" alt=""> registration@chconsultant.com
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                 &lt;&lt;&lt;&lt;&lt;&lt; 
                            </div>
                            <!--<ul class="box1Cen list-unstyled list-inline text-center" id="detail-contact">
                                <li class="wow">
                                    <p>&gt;&gt;&gt;&gt;&gt;&gt;</p>
                                </li>
                                <li class="wow">
                                    <p><img src="{WEBSITE_SOURCE_URL}/img/events/icon-phone.png">021-68581087</p>
                                </li>
                                <li class="wow" width="40%">
                                    <p><img src="{WEBSITE_SOURCE_URL}/img/events/icon-mail.png">registration@chconsultant.com</p>
                                </li>
                                <li class="wow">
                                    <p> &lt;&lt;&lt;&lt;&lt;&lt; </p>
                                </li>
                                
                            </ul>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>

<script>
    //立刻报名hover事件
    $('.right-show').hover(function() {
        $(this).children('a').children('img').attr('src', '{WEBSITE_SOURCE_URL}/img/events/record-2.png');
    }, function() {
        $(this).children('a').children('img').attr('src', '{WEBSITE_SOURCE_URL}/img/events/record-1.png');
    });
</script>
<!-- INCLUDE ../footer.tpl -->