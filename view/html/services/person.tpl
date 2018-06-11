<!-- INCLUDE ../header.tpl -->
<div class="headSpace"></div>
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="banBg imgFull">
                    <!-- <img src="{WEBSITE_SOURCE_URL}/img/about/banner-00.png" class="img-responsive"> -->
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
        <div class="box1Top wow fadeInUp" data-wow-delay="0.5s">
            <img src="{WEBSITE_SOURCE_URL}/img/services/title.png" class="img-responsive">
        </div>
        
        <div class="showContent container person">
            <div class="row">
                <div class="line-box text-center">
                    <p>核心团队成员拥有10年以上医疗行业人力资源管理经验</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 my-step my-step-1 text-center">
                    <p class="my-title">医疗专业人才服务</p>
                    <p><small>为企业匹配最合适人才,Passion for person to find persons with passion;实现行业内人才良性发展;完善企业续任者。</small></p>
                </div>
                <div class="col-md-3 my-step my-step-2 text-center">
                    <p class="my-title">医疗企业人力资源服务平台</p>
                    <p><small>平台可无缝对接公司各项人力资源需求,做您企业的标准"插件",更为灵活机动。</small></p>
                </div>
                <div class="col-md-3 my-step my-step-3 text-center">
                    <p class="my-title">企业人力资源审计</p>
                    <p><small>人力资本分析,人才盘点,人力资源整合、股权激励方案等提升人力资本效能。</small></p>
                </div>
                <div class="col-md-3 my-step my-step-4 text-center">
                    <p class="my-title">各类顾问、培训需求</p>
                    <p><small>产学研究各类高端人才地圈可满足各项咨询、培训需求、员工心理动能管理。</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="my-box2Bg">
        <div class="container">
            <ul class="list-unstyled list-inline text-center" id="my-high-people">
                <li class="wow fadeInUp">
                    <div class="single-show border-bottom">
                        <div class="box1Bot text-center wow fadeInUp">
                            <h4>行业人脉</h4>
                        </div>
                        <div>
                            <p>来自医疗器械行业的多位资深合伙人，50%的员工具有微创、美敦力、巴德等国内外知名医疗公司从业经验，行业内人员地图式“检索”、专业度甚至是职业口碑的洞察。</p>
                        </div>
                    </div>
                    <div class="single-show">
                        <div class="box1Bot text-center wow fadeInUp">
                            <h4>同为医疗人,你的渴求我们解决</h4>
                        </div>
                        <div>
                            <p>带着从医疗领域一路走来的历练，我们愿意帮您贴心解决企业根本——“人“的各方面问题。</p>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp my-middle-bg">
                    <div class="middle-show box1Bot" style="display:none;">
                        <div class="single-img-middle">
                            <img src="{WEBSITE_SOURCE_URL}/img/services/circle.png" alt="">
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp">
                    <div class="single-show border-bottom">
                        <div class="box1Bot text-center wow fadeInUp">
                            <h4>专业的顾问团队</h4>
                        </div>
                        <div>
                            <p>团队成员由管理学博士/国家注册心理咨询师/企业私董会教练组成，10年以上大型医疗上市公司资深人力资源管理经验。</p>
                        </div>
                    </div>
                    <div class="single-show">
                        <div class="box1Bot text-center wow fadeInUp">
                            <h4>多年品牌会议积累</h4>
                        </div>
                        <div>
                            <p>CHC行业内标杆会议，1000+跨国巨头，上市公司，本土潜力公司尽数在握，高端人才资源丰富多样。</p>
                        </div>
                    </div>
                </li>
            </ul>
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

    
    // loadingArr = ['.showContent'];
    // showLoading();
    // //加载数据
    // //请求数据并渲染页面
    // var params = {id: 2};
    // $.ajax({
    //     url: '?m=about&a=getPage',
    //     type: 'POST',
    //     data: params,
    //     success: function(res){
    //         res = $.parseJSON(res);
    //         closeLoading();
    //         if(res.resCode !== 200){
    //             // alert(res.resData);
    //             $('body').html('<h1 class="text-center" style="color:black;padding-top:100px;">HELLO ERROR: '+res.resData +'</h1>');
    //             return false;
    //         }else{
    //             // showData(res.resData);
    //             $('.imgFull').attr('style','background-image: url("{imgPath}/about/' + res.resData[0].pic + '"); 100% 100% center')
    //             // $('.imgFull img').attr('src', '{imgPath}/about/' + res.resData[0].pic);
    //             // console.log($('.imgFull img').attr('src'));
    //             $('.showContent').html(res.resData[0].content);
    //             // if(localStorage.getItem(events_id) !== $('#topimg').attr('style')){
    //             //     //存储图片
    //             //     localStorage.setItem(events_id,$('#topimg').attr('style'));
    //             // }
    //         }
    //     }
    // })

})
</script>
<!-- INCLUDE ../footer.tpl -->