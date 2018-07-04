<!-- INCLUDE ../header.tpl -->

<div class="detail-top">
    <div class="top-img" id="topimg" style="background:url({WEBSITE_SOURCE_URL}/img/media/banner-00.png) center center no-repeat;background-size: cover;height: 500px;">
    </div>
</div>

<div class="box1Bg box1Cen" id="alliance-bg">
    <div class="container ">
        <!--begin 会员新闻-->
        <div class="box1Top wow" data-wow-delay="0.5s">
            <!-- <img src="{WEBSITE_SOURCE_URL}/img/alliance/member-news-title.png" class="img-responsive"> -->
        </div>
        <ul class="box1Cen list-unstyled list-inline text-center" id="member-news-show">
            <!-- <li class="wow">
                <a href="?m=media&a=newsDetail&news_id=1">
                <div class="box1CenCon">
                    <div class="row">
                        <div class="col-md-4 col-xs-4 left-show">
                            <div class="img-show text-left">
                                <img src="{WEBSITE_SOURCE_URL}/img/alliance/new.png" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-8 col-xs-8 right-show text-left">
                            <h4><b>医疗新领域医疗新领域医疗新领域医疗新领域医疗新领域</b></h4>
                            <p>2017-12-12 18:36:03</p>
                            <p class="show-detail">凭借专业精神和极致的服务，凭借专业精神和极致的服务，凭借专业精神和极致的服务，凭借专业精神和极致的服务致的服务，凭借专业精神和极致的服务</p>
                        </div>
                    </div>
                </div>
                </a>
            </li> -->
        </ul>
        <div class="clearfix"></div>
        <!-- 分页 -->
        <div class="btn-img text-center">
            <nav aria-label="Page navigation">
              <ul class="pagination page-show">
                
              </ul>
        </nav>
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

        //渲染数据
        loadingArr = ['#member-news-show'];
        showLoading();
        //加载数据
        //请求数据并渲染页面
        var params = {
            currentPage: 1,
            pageSize: 8,
            status: 1,
            // newstype: 2
        };
        var getNewsData = function(){
            $.ajax({
                url: '?m=alliance&a=getNewsData',
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
                        var listStr = '';
                        var pageStr = '';
                        if(res.resData.items && res.resData.items.length){
                            $.each(res.resData.items, function(index, val) {
                                 listStr += '<li class="wow"><a href="?m=media&a=newsDetail&news_id=' + val.news_id + '"><div class="box1CenCon"><div class="row"><div class="col-md-4 col-xs-4 left-show"><div class="img-show text-left"><img src="{imgPath}/news/' + val.news_pic + '" class="img-responsive"></div></div><div class="col-md-8 col-xs-8 right-show text-left"><h4><b>' + val.news_title + '</b></h4><p>' + val.update_date + '</p><p class="show-detail"><small>' + delHtmlTag(val.news_content) + '</small></p></div></div></div></a></li>';
                            });
                            if(res.resData.items.length % 2 !== 0){
                                listStr += '<li></li>';
                            }
                        }

                        if(res.resData.page && res.resData.page.total){
                            //是否显示前一页
                            if(params.currentPage != 1){
                                pageStr +=  '<li><a href="javascript:;" class="changePage" aria-label="Previous" data="' + (params.currentPage - 1) + '"><span aria-hidden="true" style="color:#337ab7;">&laquo;</span></a></li>';
                            }
                            //显示总页数
                            var pageTotal =  Math.ceil(parseInt(res.resData.page.total)/params.pageSize);
                            for (var i = 1; i <= pageTotal; i++) {
                                var ss = ''
                                if(params.currentPage === i){
                                    ss = ' style="background-color:#9DC040;" ';
                                }
                                pageStr += '<li><a href="javascript:;" ' + ss + ' class="changePage" data="' + i + '">' + i + '</a></li>'; 
                                
                            }
                            //是否显示下一页
                            console.log(params.currentPage , pageTotal);
                            if(params.currentPage !== pageTotal){
                                pageStr += '<li><a href="javascript:;" class="changePage" aria-label="Next" data="' + (params.currentPage + 1) + '"><span aria-hidden="true" style="color:#337ab7;">&raquo;</span></a></li>';
                                // console.log(pageStr);
                            }

                        }
                        $('#member-news-show').html(listStr);
                        $('.page-show').html(pageStr);
                        //change
                        $('.page-show .changePage').click(function(event) {
                            params.currentPage = parseInt($(this).attr('data'));
                            // console.log(params)
                            getNewsData();
                        });
                        
                    }
                }
            })
        }

        getNewsData();
            
    })
        
</script>
<!-- INCLUDE ../footer.tpl -->