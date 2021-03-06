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
            <!-- <li class="wow fadeInUp">
                <div class="single" class="text-left">
                    <div class="add-shadow"><a href="http://www.chconsultant.com/zh/summit/ivd2018" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/events/pic_0510.png" class="img-responsive"></a></div>
                    <div class="two-show left-show" class="text-left">
                        <p class="text-left">第五届中国IVD产业投资与并购CEO论坛</p>
                        <p class="text-left">时间：2018年6月28-29日 &nbsp;&nbsp;  地点：上海</p>
                    </div>
                    <div class="two-show right-show"><a href="http://www.chconsultant.com/zh/summit/ivd2018/apply-register" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/events/record-2.png" alt=""></a></div>
                    <div class="clearfix"></div>
                </div>
            </li> -->
            <!-- <li class="wow fadeInUp">
                <div class="single" class="text-left">
                    <div class="add-shadow"><a href="http://www.chconsultant.com/zh/summit/CDI2018" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/events/pic3.png" class="img-responsive"></a></div>
                    <div class="two-show left-show" class="text-left">
                        <p class="text-left">第五届中国心血管健康产业投资与并购CEO论坛</p>
                        <p class="text-left">时间：2018年9月 &nbsp;  地点：天津生态城世茂希尔顿酒店</p>
                    </div>
                    <div class="two-show right-show"><a href="http://www.chconsultant.com/zh/summit/CDI2018/apply-register" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/events/record-2.png" alt=""></a></div>
                    <div class="clearfix"></div>
                </div>
            </li> -->
        </ul>
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
            <img src="{WEBSITE_SOURCE_URL}/img/events/events-back.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center">
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://old.chconsultant.com/zh/summit/ceo2018">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-1-a.png" class="img-responsive"></div>
                	<p>医疗健康产业</p>
                </a>
            </li>
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://old.chconsultant.com/zh/summit/ivd2018">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-2-a.png" class="img-responsive"></div>
                	<p>IVD及精准医疗</p>
                </a>
            </li>
        	<li class="wow fadeInUp">
                <a target="_blank" href="?m=events&a=detail&events_id=33">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-3-a.png" class="img-responsive"></div>
                	<p>心脑血管</p>
                </a>
            </li>
        	<li class="wow fadeInUp">
                <a target="_blank" href="http://old.chconsultant.com/zh/summit/czevent-2017/history">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-4-a.png" class="img-responsive"></div>
                	<p>骨科/生物材料</p>
                </a>
            </li>
            <li class="wow fadeInUp">
                <a target="_blank" href="http://old.chconsultant.com/zh/summit/mis2018/history">
                	<div class="box1CenCon"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-5-a.png" class="img-responsive"></div>
                	<p>微创外科</p>
                </a>
            </li>
            <li class="wow fadeInUp">
                <a target="_blank" href="http://old.chconsultant.com/zh/summit/mis2018/history">
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
            <!-- <li class="wow">
                <a href="http://www.qimingvc.com/index.html" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-1.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.legendcapital.com.cn" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-2.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.cowincapital.com.cn" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-3.jpg" class="img-responsive"></div>
                </a>
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
                <a href="http://www.highlightcapital.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-10.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-11.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/z-12.jpg" class="img-responsive"></div>
            </li> -->
            <li class="wow">
                <a href="http://www.qimingvc.com/index.html" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/may-1.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.legendcapital.com.cn" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/may-2.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.cowincapital.com.cn" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/may-3.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.highlightcapital.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/may-4.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.lyfecapital.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/may-5.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.medtronic.com/cn-zh/index.html" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/may-6.png" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.szgig.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/may-7.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.sunlandfund.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/may-8.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.wsgr.com" target="_blank">
                    <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/may-9-new.jpg" class="img-responsive"></div>
                </a>
            </li>
            <li class="wow">
                <a href="http://www.ftzfund.com.cn/" target="_blank">
                    <div class="box1CenCon logo-show"><img src="http://www.chconsultant.com/chc-api/uploads/media/20180706140810-8594120180706140810-85941.jpg" class="img-responsive"></div>
                </a>
            </li>
            
        </ul>
        <!--媒体-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <img src="{WEBSITE_SOURCE_URL}/img/events/media-title.png" class="img-responsive">
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="friends-show">
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/1.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/2.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/3.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/4.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/5.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/6.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/7.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/8.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/9.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/10.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/11.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/12.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/13.jpg" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/14.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/15.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/16.png" class="img-responsive"></div>
            </li>
            <li class="wow">
                <div class="box1CenCon logo-show"><img src="{WEBSITE_SOURCE_URL}/img/events/logo/media/17.jpg" class="img-responsive"></div>
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
    // $('.right-show').hover(function() {
    //     $(this).children('a').children('img').attr('src', '{WEBSITE_SOURCE_URL}/img/events/record-2.png');
    // }, function() {
    //     $(this).children('a').children('img').attr('src', '{WEBSITE_SOURCE_URL}/img/events/record-1.png');
    // });


    //加载ing
    loadingArr = ['#big-show'];
    showLoading();

    $(function(){
        var getLastEvents = function(){
            $.ajax({
                url: '?m=events&a=getLastEvents',
                success: function(ret){
                    var res = $.parseJSON(ret);
                    console.log(res);
                    var allStr = '';
                    if(res.resCode === 200){
                        if(res.resData && res.resData.length){
                            $.each(res.resData, function(index, val) {
                                 allStr += '<li class="wow fadeInUp"><div class="single" class="text-left"><div class="add-shadow"><a href="?m=events&a=detail&events_id=' + val.events_id + '" target="_blank"><img src="{imgPath}/events/' + val.past_pic + '" class="img-responsive"></a></div><div class="two-show left-show" class="text-left"><p class="text-left">' + val.events_name + '</p><p class="text-left">时间：' + val.events_begin_date + ' &nbsp;&nbsp;  地点：' + val.events_city + '</p></div><div class="two-show right-show"><a href="?m=events&a=mSignUp&events_id='+ val.events_id +'" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/events/record-2.png" alt=""></a></div><div class="clearfix"></div></div></li>';
                            });
                        }
                    }
                    $('#big-show').html(allStr);
                }
            })
            
        }
        getLastEvents();
    })
</script>
<!-- INCLUDE ../footer.tpl -->