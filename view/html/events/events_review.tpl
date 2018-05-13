<!-- INCLUDE ../header.tpl -->
<!-- INCLUDE ./header.tpl -->

<!-- 内容 -->
<div class="total">
	<div class="my-loading"></div>
	<!--review-->
	<div id="review-list" class="my-list" style="display: none;">
		<div class="container">
			<div class="box1Top wow h-title" data-wow-delay="0.5s">
	        	<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/review-title.png" class="img-responsive">
	    	</div>
			<ul class="box1Cen list-unstyled list-inline text-center review-list">
	        	<!-- <li class="wow">
	            	<div class="box1CenCon" style="height: 300px;">
	            		<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/b1.png" class="img-responsive">
	            		<p>2018年就快捷键家就快捷键尽快尽快将</p>
	            	</div>
	            </li> -->
	            
	        </ul>
			
		</div>
	</div>
<!-- INCLUDE ../footer.tpl -->
<script>
	//reviewData
	loadingArr = ['.my-loading'];
	showLoading();
	var showData = function(res){
		var reviewStr = '';
		if(res.reviewData){
			$.each(res.reviewData, function(index, val) {
				 reviewStr += '<li class="wow"><a href="?m=events&a=detail&events_id=' + val.events_id + '" title=""><div class="box1CenCon" style="height:180px;"><img style="height:100px" src="{imgPath}/events/'+ val.past_pic +'" class="img-responsive"><p>' + val.past_title + '</p></div></a></li>'
			});
			//补充
			if(res.reviewData.length % 4 != 0){
				var num = 4 - (res.reviewData.length % 4);
				for (var i = 1; i <= num; i++) {
					reviewStr += '<li></li>';
				}
			}
			$('.my-list').show();
			$('.review-list').html(reviewStr);
		}
		
	}
</script>