<!-- INCLUDE ../header.tpl -->
<!-- INCLUDE ./header.tpl -->

<!-- 内容 -->
<div class="total">
	<div class="my-loading"></div>
	<!--关于会议-->
	<div id="intro-list">
		<div class="container">
			<div class="intro-list-total" style="display: none;">
				<div class="box1Top wow h-title" data-wow-delay="0.5s">
		        	<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/about-events-title.png" class="img-responsive">
		    	</div>
				<div class="box1Cen list-unstyled list-inline text-left word-long about-content">
					<!-- <p>近年来，以微创外科为代表的“手术流程”板块将继续成为增长热点，并将作为未来医学发展的重要方向。微创外科行业内也不断涌现了许多颠覆性的创新产品，如 3D腹腔镜、机器人外科手术系统 及 NOTES 等微创技术。有数据显示，在外科手术器械领域的全球市场规模约150~200亿美元，其中美国约占30%市场份额，而中国的市场份额为8%，对比欧美成熟市场，中国市场还有很大的提升空间。</p>
					<p>在此背景下， CHC医疗咨询将主办第三届中国微创外科及手术机器人产业投资CEO论坛，以“百亿市场下的微创外科精准治疗”为主题，邀请全球微创外科临床专家、产业界以及专业投资者，共同探讨微创技术在中国的创新发展及手术机器人在微创外科产业的应用趋势。届时，来自美敦力，强生，波士顿科学， Stryker， Karl Storz，Olympus，乐普，迈瑞，瑞奇外科，法兰克曼、安瀚医疗等全球微创外科领军企业将受邀参加论坛发言，共话中国微创技术新发展。</p> -->
				</div>
			</div>
				
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left invite-company-total" style="display: none;">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;部分拟邀企业</h4></li>
				</ul>
				<div class="row invite-company">
					<!-- <div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div> -->
				</div>
			</div>
			
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left invite-disarmament-total" style="display: none;">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;部分拟邀机构</h4></li>
				</ul>
				<div class="row invite-disarmament">
					<!-- <div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div>
					<div class="col-md-3"><p>111</p></div> -->
				</div>
			</div>

		</div>
	</div>
	
</div>
<!-- INCLUDE ../footer.tpl -->
<script type="text/javascript">
	loadingArr = ['.my-loading'];
	showLoading();
	var showData = function(res){
		//关于会议
		if(res.infoData.events_about){
			$('#intro-list .about-content').html(getNewStr(res.infoData.events_about));
			$('.intro-list-total').show();
		}
		
		//拟邀企业
		if(res.infoData.events_about_invite_company){
			var company_str = '';
			var invite_company_arr = res.infoData.events_about_invite_company.split("\n");
			$.each(invite_company_arr, function(index, val) {
				company_str += '<div class="col-md-3"><p>'+ val +'</p></div>';
			});
			$('.invite-company').html(company_str);
			$('.invite-company-total').show();
		}
		
		//拟邀机构
		if(res.infoData.events_about_invite_disarmament){
			var disarmament_str = '';
			var invite_disarmament_arr = res.infoData.events_about_invite_disarmament.split("\n");
			$.each(invite_disarmament_arr, function(index, val) {
				disarmament_str += '<div class="col-md-3"><p>'+ val +'</p></div>';
			});
			$('.invite-disarmament').html(disarmament_str);
			$('.invite-disarmament-total').show();
		}
		
			
	}
</script>