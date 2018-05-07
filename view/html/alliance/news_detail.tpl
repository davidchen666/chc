<!-- INCLUDE ../header.tpl -->
<div class="headSpace"></div>

<div class="box1Bg box1Cen" id="alliance-bg">
	<div class="container showContent" style="padding: 10px;padding-top: 80px;">
        <div style="background: #fff; padding:15px;">
            <h2 style="color:black; padding-bottom: 10px;background: #fff;" class="titleShow"></h2>
            <span style="color:silver;background: #fff;" class="dateShow"></span>
            <div class="news-content" style="padding-top: 30px;"></div>
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

        var news_id = getQueryString('news_id');
        if(!news_id){
            $('body').html('<h1 class="text-center" style="color:black;padding-top:100px;">HELLO ERROR: 您访问的地址不正确。请检查链接参数。</h1>');
            return;
        }else{
            //渲染数据
            loadingArr = ['.showContent .news-content'];
            showLoading();
            //加载数据
            //请求数据并渲染页面
            var params = {newsid: news_id};
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
                        // showData(res.resData);
                        // $('.imgFull').attr('style','background-image: url("{imgPath}/about/' + res.resData[0].pic + '"); 100% 100% center')
                        // $('.imgFull img').attr('src', '{imgPath}/about/' + res.resData[0].pic);
                        // console.log($('.imgFull img').attr('src'));
                        $('.showContent .titleShow').html(res.resData.items[0].news_title);
                        $('.news-content').html(res.resData.items[0].news_content);
                        $('.dateShow').html('发表时间： ' + res.resData.items[0].create_date);
                        // if(localStorage.getItem(events_id) !== $('#topimg').attr('style')){
                        //     //存储图片
                        //     localStorage.setItem(events_id,$('#topimg').attr('style'));
                        // }
                    }
                }
            })
        }
            
	})
	    
</script>
<!-- INCLUDE ../footer.tpl -->