<!-- INCLUDE ../header.tpl -->
<!-- INCLUDE ./header.tpl -->

<!-- 内容 -->
<div class="total">
	<div class="my-loading"></div>
	<!--演讲-->
	<div id="speaker-list" style="display: none;">
		<div class="container">
			<div class="box1Top wow h-title" data-wow-delay="0.5s">
	        	<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/speaker-title.png" class="img-responsive">
	    	</div>
			<div class="speaker-total">			
				<!-- <div class="box1Cen list-unstyled list-inline text-left table-list table-left">
					<ul class="list-group">
					    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;大会主席</h4></li>
					</ul>
					<div class="speaker-main"> -->
						<!-- <div class="full-line">
							<div class="full-left-show text-center">
								<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/a.png" class="img-responsive">
							</div>
							<div class="full-right-show">
								<h4><b>刘道志 博士</b> <span>山蓝资本创始及执行合伙人</span></h4>
								<p>刘道志博士是山蓝资本的创始及执行合伙人，在创办山蓝资本之前，曾经担任上海微创医疗器械集团（香港上市公司 股票代码00853）新兴业务资深副总裁，负责微创医疗集团的收购、兼并和投资业务，刘道志博士也是微创医疗早期核心创业团队成员，也曾任研发中心资深副总裁和微创医疗全资子公司上海微创骨科医疗科技有限公司总经理。在加入微创医疗之前，刘道志博士作为生物材料专家在包括日本国立材料研究所、澳大利亚Wollongong大学和天津大学等多所大学及研究机构工作10余年，刘道志博士获得天津南开大学理学学士和博士学位，是英国牛津大学博士后。刘道志博士也是上海市首批领军人才，中国生物医学工程学会理事、中国生物材料学会理事、上海欧美同学会暨上海归国留学人员联合会理事、上海交通大学兼职教授、上海交通大学教育部数字医学工程技术中心专家委员会委员、上海理工大学兼职教授。</p>
							</div>
						</div> -->
					<!-- </div>
					
				</div> -->

				<!-- <div class="box1Cen list-unstyled list-inline text-left table-list table-left">
					<ul class="list-group">
					    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;特邀嘉宾</h4></li>
					</ul>
					<div class="speaker-invite"> -->
						<!-- <div class="full-line">
							<div class="full-left-show text-center">
								<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/a.png" class="img-responsive">
							</div>
							<div class="full-right-show">
								<h4><b>刘道志 博士</b> <span>山蓝资本创始及合伙人</span></h4>
								<p>上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才。上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才</p>
							</div>
						</div>
						<div class="full-line">
							<div class="full-left-show text-center">
								<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/a.png" class="img-responsive">
							</div>
							<div class="full-right-show">
								<h4><b>刘道志 博士</b> <span>山蓝资本创始及合伙人</span></h4>
								<p>上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才。上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才，上海首批领军人才</p>
							</div>
						</div> -->
					<!-- </div>
						
				</div> -->
			</div>
		</div>
	</div>
	<br><br>
<!-- INCLUDE ../footer.tpl -->
<script>
	//加载ing
	loadingArr = ['.my-loading'];
	showLoading();
	//计算full 高度
	var getHeight = function(str){
		var line = Math.ceil(str.length/51);
		if(line > 5){
			return line*33 + 'px';
		}else{
			return '';
		}
	}
	var showData = function(res){
		//演讲嘉宾
		if(res.speakerData){
			// var speaker_mainStr = '';
			// //主讲嘉宾
			// if(res.speakerData.events_speaker_main){
			// 	$.each(res.speakerData.events_speaker_main, function(index, val) {
			// 		speaker_mainStr += '<div class="full-line"><div class="full-left-show text-center"><img src="{imgPath}/speaker/'+ val.speaker_pic +'" class="img-responsive img-circle"></div><div class="full-right-show"><h4><b>' + val.speaker_name + ' ' + val.speaker_honor + '</b> <span>' + val.speaker_identity + '</span></h4><p>'+ val.speaker_detail_intro +'</p></div></div>';
			// 	});
			// }
			// // console.log(speaker_mainStr);
			// $('.speaker-main').html(speaker_mainStr);
			// //邀请嘉宾
			// var speaker_inviteStr = '';
			// if(res.speakerData.events_speaker_invite){
			// 	$.each(res.speakerData.events_speaker_invite, function(index, val) {
			// 		speaker_inviteStr += '<div class="full-line"><div class="full-left-show text-center"><img src="{imgPath}/speaker/'+ val.speaker_pic +'" class="img-responsive img-circle"></div><div class="full-right-show"><h4><b>' + val.speaker_name + ' ' + val.speaker_honor + '</b> <span>' + val.speaker_identity + '</span></h4><p>'+ val.speaker_detail_intro +'</p></div></div>';
			// 	});
			// }
			// $('.speaker-invite').html(speaker_inviteStr);\
			var speaker_Str = '';
			$.each(res.speakerData.events_speaker, function(key, item) {
				speaker_Str += '<div class="box1Cen list-unstyled list-inline text-left table-list table-left"><ul class="list-group"><li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;' + item.speaker_type + '</h4></li></ul><div class="speaker-main">';
				console.log(item);
				$.each(item.speaker_data, function(index, val) {
					// console.log(val);
					 speaker_Str += '<div class="full-line" style="height:' + getHeight(val.speaker_detail_intro) + '"><div class="full-left-show text-center"><img src="{imgPath}/speaker/'+ val.speaker_pic +'" class="img-responsive img-circle"></div><div class="full-right-show"><h4><b>' + val.speaker_name + ' ' + val.speaker_honor + '</b> <span>' + val.speaker_identity + '</span></h4><p>'+ val.speaker_detail_intro +'</p></div></div>';
				});
				speaker_Str += '</div></div>';
			});
			$('.speaker-total').html(speaker_Str);
			$('#speaker-list').show();
			
		}
	}
		
</script>