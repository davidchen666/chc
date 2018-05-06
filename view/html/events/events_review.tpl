<!-- INCLUDE ../header.tpl -->
<!-- INCLUDE ./header.tpl -->

<!-- 内容 -->
<div class="total">

	<!--review-->
	<div id="review-list">
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
	loadingArr = ['.review-list'];
	showLoading();
	var showData = function(res){
		var reviewStr = '';
		if(res.reviewData){
			$.each(res.reviewData, function(index, val) {
				 reviewStr += '<li class="wow"><div class="box1CenCon" style="height:300px;"><img style="height:200px" src="{imgPath}/events/'+ val.past_pic +'" class="img-responsive"><p>' + val.past_title + '</p></div></li>'
			});
		}
		$('.review-list').html(reviewStr);
	}
</script>