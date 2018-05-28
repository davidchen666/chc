<!-- INCLUDE ../header.tpl -->

<div class="headSpace"></div>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="banBg imgFull"><img src="{WEBSITE_SOURCE_URL}/img/home/big-banner-new.png" class="img-responsive"></div>
                <div class="slide-caption ">
                    <div class="caption-content">
                        <div class="banImg ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="0.3s">
                        	<!-- <img src="{WEBSITE_SOURCE_URL}/default/upload/image/201709/01/0759452902.png" 
                        	class="img-responsive"> -->
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
    <!-- <div class="banBtn"></div> -->
    <!-- <div class="banBtn-new">
        <img src="{WEBSITE_SOURCE_URL}/img/home/down-btn.png" alt="">
    </div> -->
</div>
<div class="box1Bg">
	<div class="container">
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
        	<!-- <img src="{WEBSITE_SOURCE_URL}/default/upload/image/201711/22/0237043191.jpg" class="img-responsive"> -->
        	<img src="{WEBSITE_SOURCE_URL}/img/home/events-title.png" class="img-responsive">
    	</div>
        <ul class="box1Cen list-unstyled list-inline text-center">
        	<li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/ceo2018" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-1-a.png" class="img-responsive"></a></div>
            	<p>医疗健康</p>
            </li>
        	<li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/ivd2018" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-2-a.png" class="img-responsive"></a></div>
            	<p>IVD/精准医疗</p>
            </li>
        	<li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/CDI2017" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-3-a.png" class="img-responsive"></a></div>
            	<p>心脑血管</p>
            </li>
        	<li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/czevent-2017" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-4-a.png" class="img-responsive"></a></div>
            	<p>骨科/生物材料</p>
            </li>
            <li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/mis2018" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-5-a.png" class="img-responsive"></a></div>
            	<p>微创外科</p>
            </li>
            <li class="wow fadeInUp">
            	<div class="box1CenCon"><a href="http://www.chconsultant.com/zh/summit/mis2018" target="_blank"><img src="{WEBSITE_SOURCE_URL}/img/home/icon-6-a.png" class="img-responsive"></a></div>
            	<p>医疗机器人</p>
            </li>
        </ul>
        <div class="box1Bot text-center wow fadeInUp">
        	<!-- <img src="{WEBSITE_SOURCE_URL}/default/upload/image/201708/07/0515513976.png" class="img-responsive"> -->
        	<p>聚焦于医疗健康产业，始终锁定与关注最具潜力的细分领域，每年举办多场产业高峰论坛，</p>
			<p>高度链接产业界、学术界、资本界、并以医疗企业高管、投资机构合伙人、医院及研发机构专家为主要参会人群。</p>
			<p>CHC医疗健康系列峰会已成为行业标杆论坛，是中国的JP Morgan医健大会。</p>
   		</div>
   		<div class="box1Bot text-center wow fadeInUp">
            <a href="?m=events&a=index">
                <button type="button" class="btn btn-default">了解更多</button>
            </a>
   			<!-- <img src="{WEBSITE_SOURCE_URL}/img/home/get-more.png" class="img-responsive"> -->
   		</div>
	</div>
</div>
<script>
    $('.box1Bg .box1Cen .img-responsive').hover(function(){
        var obj = $('.box1Bg .box1Cen .img-responsive');
        $.each(obj, function(index, val) {
            var defaultStr = $(this).attr('src').replace('b.png','a.png');
            val.src = defaultStr;
            var cObj = $(this).parent().parent().next();
            cObj.attr('style', 'color:#ffffff');
        });
        var hoverStr = $(this).attr('src').replace('a.png','b.png');
        $(this).attr('src',hoverStr);
        var cObj_new = $(this).parent().parent().next();
        cObj_new.attr('style', 'color:#9DC040');
    }, function() {
    })
</script>
<!--
<div class="box2Bg">
	<div class="container">
    	<div class="box2Tit wow fadeInUp">
    		<img src="{WEBSITE_SOURCE_URL}/img/home/high-hunter-title.png" class="img-responsive" alt="高端猎头">
    	</div>
        <ul class="list-unstyled list-inline text-center">
            <li class="wow fadeInUp">
            	<div class="box2Img-new" class="text-center"><img src="{WEBSITE_SOURCE_URL}/img/home/pic-1.png" class="img-responsive"></div>
            	<div>
            		<h5 class="text-center">软件工程师(医疗器械行业)</h5>
		      		<h6>SOFTWARE ENGINEER</h6>
		      		<h6 class="text-left detail-list">
		      			<p>1、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      			<p>2、软件工程师(医疗器械行业)软件工程师(医疗器械行业)</p>
		      			<p>3、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      		</h6>
            	</div>
            	<div class="box1Bot text-center wow fadeInUp">
                    <button type="button" class="btn btn-default">了解更多</button>
		   		</div>
        	</li>
        	<li class="wow fadeInUp">
            	<div class="box2Img-new"><img src="{WEBSITE_SOURCE_URL}/img/home/pic-2.png" class="img-responsive"></div>
            	<div>
            		<h5>软件工程师(医疗器械行业)</h5>
		      		<h6>SOFTWARE ENGINEER</h6>
		      		<h6 class="text-left detail-list">
		      			<p>1、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      			<p>2、软件工程师(医疗器械行业)软件工程师(医疗器械行业)</p>
		      			<p>3、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      		</h6>
            	</div>
            	<div class="box1Bot text-center wow fadeInUp">
                    <button type="button" class="btn btn-default">了解更多</button>
		   		</div>
        	</li>
        	<li class="wow fadeInUp">
            	<div class="box2Img-new"><img src="{WEBSITE_SOURCE_URL}/img/home/pic-3.png" class="img-responsive"></div>
            	<div>
            		<h5>软件工程师(医疗器械行业)</h5>
		      		<h6>SOFTWARE ENGINEER</h6>
		      		<h6 class="text-left detail-list">
		      			<p>1、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      			<p>2、软件工程师(医疗器械行业)软件工程师(医疗器械行业)</p>
		      			<p>3、软件工程师(医疗器械行业)软件工程师(医疗器械行业)的哈哈哈哈哈啊哈</p>
		      		</h6>
            	</div>
            	<div class="box1Bot text-center wow fadeInUp">
                    <button type="button" class="btn btn-default">了解更多</button>
		   		</div>
        	</li>
        </ul>
    </div>
</div>
-->
<div class="box3Bg">
    <div class="box3OverLay">
        <div class="container">
            <div class="box2Tit wow fadeInUp"><img src="{WEBSITE_SOURCE_URL}/img/home/jingpin-title.png" class="img-responsive"></div>
            <div class="box3Item wow fadeInUp">
                <div class="box1Bot text-center wow fadeInUp">
                    <button type="button" class="btn btn-default">了解更多</button>
		   		</div>
            </div>
        </div>
    </div>
</div>
    
<div class="box2Bg">
    <div class="container">
        <div class="box2Tit wow fadeInUp">
            <img src="{WEBSITE_SOURCE_URL}/img/home/jinzhunrencai-title.png" class="img-responsive" alt="精准人才">
        </div>
        <ul class="list-unstyled list-inline text-center" id="high-people">
            <li class="wow fadeInUp">
                <div class="single-show border-bottom">
                    <div class="img-head" class="text-center"><img src="{WEBSITE_SOURCE_URL}/img/home/1-0.png" class="img-responsive hover-1"></div>
                    <div class="box1Bot text-center wow fadeInUp">
                        <button type="button" class="btn btn-primary btn-sm">行业人脉</button>
                    </div>
                    <div>
                        <p>来自医疗器械行业的多位资深合伙人，50%的员工具有微创、美敦力、巴德等国内外知名医疗公司从业经验，行业内人员地图式“检索”、专业度甚至是职业口碑的洞察。</p>
                    </div>
                </div>
                <div class="single-show">
                    <div class="img-head" class="text-center"><img src="{WEBSITE_SOURCE_URL}/img/home/3-0.png" class="img-responsive hover-3"></div>
                    <div class="box1Bot text-center wow fadeInUp">
                        <button type="button" class="btn btn-primary btn-sm">同为医疗人,你的渴求我们解决</button>
                    </div>
                    <div>
                        <p>带着从医疗领域一路走来的历练，我们愿意帮您贴心解决企业根本——“人“的各方面问题。</p>
                    </div>
                </div>
            </li>
            <li class="wow fadeInUp middle-bg">
                <div class="middle-show box1Bot" style="display:none;">
                    <div class="single-img-middle">
                        <img src="{WEBSITE_SOURCE_URL}/img/home/circle.png" alt="">
                    </div>
                </div>
            </li>
            <li class="wow fadeInUp">
                <div class="single-show border-bottom">
                    <div class="img-head" class="text-center"><img src="{WEBSITE_SOURCE_URL}/img/home/2-0.png" class="img-responsive hover-2"></div>
                    <div class="box1Bot text-center wow fadeInUp">
                        <button type="button" class="btn btn-primary btn-sm">专业的顾问团队</button>
                    </div>
                    <div>
                        <p>团队成员由管理学博士/国家注册心理咨询师/企业私董会教练组成，10年以上大型医疗上市公司资深人力资源管理经验。</p>
                    </div>
                </div>
                <div class="single-show">
                    <div class="img-head" class="text-center"><img src="{WEBSITE_SOURCE_URL}/img/home/4-0.png" class="img-responsive hover-4"></div>
                    <div class="box1Bot text-center wow fadeInUp">
                        <button type="button" class="btn btn-primary btn-sm">多年品牌会议积累</button>
                    </div>
                    <div>
                        <p>CHC行业内标杆会议，1000+跨国巨头，上市公司，本土潜力公司尽数在握，高端人才资源丰富多样。</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<script>
    //hover效果
    $('#high-people .single-show').hover(function(){
        var objNew = $('.single-show .img-responsive');
        $.each(objNew, function(index, val) {
            var defaultStr = $(this).attr('src').replace('-1.png','-0.png');
            val.src = defaultStr;
        });
        var hoverStr = $(this).children('div').children('img').attr('src').replace('-0.png','-1.png');
        $(this).children('div').children('img').attr('src',hoverStr);
        $('.single-show button').attr('class', 'btn btn-primary btn-sm');
        $(this).children('div').eq(1).children('button').attr('class', 'btn btn-warning btn-sm');
    }, function() {
    })
</script>

<!-- INCLUDE ../footer.tpl -->