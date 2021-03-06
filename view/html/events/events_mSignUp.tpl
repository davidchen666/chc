<!-- INCLUDE ../header.tpl -->
<!-- INCLUDE ./header.tpl -->

<!-- 内容 -->
<div class="total">

	<!--参会报名-->
	<div id="m-sign-up">
		<div class="container">
			<div class="box1Top wow h-title" data-wow-delay="0.5s">
	        	<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/m-title.png" class="img-responsive">
	    	</div>
			<ul class="box1Cen list-unstyled list-inline text-center price-list">
	        	<!-- <li class="wow">
	            	<div class="box1CenCon">
	            		<div class="img-img img-one">
	            			<h4 class="white top"><b>1800元/人</b></h4>
	            			<h4 class="footer">早鸟价</h4>
	            			<p><small>3月1日前报名并付费</small></p>
	            		</div>
	            	</div>
	            </li>-->
	        </ul>
			<div class="box1Cen list-unstyled list-inline text-left table-list">
				<ul class="list-group">
				    <li class="list-group-item text-center top-bg"><h4>会议时间：<span class="events-date">2018/03/21 ~ 2018/03/21</span></h4></li>
				</ul>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>参加人数*</p></label>
						    <!-- <input type="text" class="form-control"> -->
						    <select class="form-control countNum" >
						      <option value='0' selected>请选择</option>
						      <option value='1'>1</option>
						      <option value='2'>2</option>
						      <option value='3'>3</option>
						      <option value='4'>4</option>
						      <option value='5'>5</option>
						      <option value='6'>6</option>
						      <option value='7'>7</option>
						      <option value='8'>8</option>
						      <option value='9'>9</option>
						    </select>
					  	</div>
					</div>
				</div>
				<div class="row" id="userList-single" style="display:none;">
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>姓名*</p></label>
						    <input type="text" class="form-control uname">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>职务*</p></label>
						    <input type="text" class="form-control ujob">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>电话*</p></label>
						    <input type="text" class="form-control umobile">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>邮箱*</p></label>
						    <input type="text" class="form-control uemail">
					  	</div>
					</div>
				</div>
				<div class="row" id="userList">
					
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label for="name"><p>公司名称*</p></label>
						    <input type="text" class="form-control com_name">
					  	</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						    <label for="name"><p>公司发票抬头*</p></label>
						    <input type="text" class="form-control com_Invoices_title">
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label for="name"><p>公司税号*</p></label>
						    <input type="text" class="form-control com_duty_num">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>电话*</p></label>
						    <input type="text" class="form-control com_phone">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>传真</p></label>
						    <input type="text" class="form-control com_fax">
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label for="name"><p>邮政地址*</p></label>
						    <input type="text" class="form-control com_postal_addr">
					  	</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>邮编</p></label>
						    <input type="text" class="form-control com_postal_code">
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group com_field">
						    <label for="name"><p>所属领域*</p></label>
						    <p class="higher"><input type="radio" name="field" value="1"> 医疗企业/产品领域</p>
						    <p class="higher"><input type="radio" name="field" value="2"> 产业上游/中间服务供应商</p>
						    <p class="higher"><input type="radio" name="field" value="3"> 投资银行/咨询机构/律师事务所/会计事务所</p>
						    <p class="higher"><input type="radio" name="field" value="3"> 医学专家和科研机构</p>
						    <p class="higher"><input type="radio" name="field" value="3"> 医学园区</p>
						    <p class="higher"><input type="radio" name="field" value="3"> 媒体记者</p>
						    <p class="higher"><input type="radio" name="field" value="3"> 其他</p>
					  	</div>
					</div>
					<div class="col-md-6">
						<div class="form-group from_data">
						    <label for="name"><p>您是通过什么平台获知本次会议的</p></label>
						   	<p class="higher"><input type="radio" name="from_data" value="1"> EDM（电子邮件）</p>
						    <p class="higher"><input type="radio" name="from_data" value="2"> 微信</p>
						    <p class="higher"><input type="radio" name="from_data" value="3"> 媒体网站</p>
						    <p class="higher"><input type="radio" name="from_data" value="4"> 网上搜索</p>
						    <p class="higher"><input type="radio" name="from_data" value="5"> 他人推荐</p>
						    <p class="higher"><input type="radio" name="from_data" value="6"> 其他</p>
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p><small>注意：</small></p>
						<p><small>1.“*” 为必填项，谢谢配合；</small></p>
						<p><small>2.请正确填写个人基本信息，我们将以您提交的参会者姓名为准，制作参会确认函与胸牌；</small></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text-center">请输入验证码：<input type="text" style="width:15%;" class="verify_code"> <span class="codeVal black" style="background: pink;">8901</span> 为了防止恶意添加资料，请输入验证码</p>
					</div>
				</div>
				<div class="btn-img text-center">
		            <a href="javascript:;"><img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/m-btn.png" alt=""></a>
		        </div>
			</div>

		</div>
	</div>

	<!--关于参会-->
	<div id="m-sign-up-about">
		<div class="container">
	        <div class="box1Top wow h-title" data-wow-delay="0.5s">
	        	<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/m-about.png" class="img-responsive">
	    	</div>
	        <div class="box1Cen warn-list">
	        	<p class="blue"><b>注意事项</b></p>
	        	<div class="attention">
	        		
	        	</div>
				<!-- <p>1、快进看就看见了看借口借口尽快尽快将</p>
				<p>2、快进看就看见了看借口借口尽快尽快将</p>
				<p>3、快进看就看见了看借口借口尽快尽快将</p>
				<p>4、快进看就看见了看借口借口尽快尽快将</p>
				<p>5、快进看就看见了看借口借口尽快尽快将</p>
				<p>6、快进看就看见了看借口借口尽快尽快将</p> -->
				<p class="blue"><b>付费及开票</b></p>
				<div class="cost-intro">
					
				</div>
				<!-- <p>1、快进看就看见了看借口借口尽快尽快将</p>
				<p>2、快进看就看见了看借口借口尽快尽快将</p>
				<p>3、快进看就看见了看借口借口尽快尽快将</p> -->
	        </div>
	    </div>
	</div>

<script type="text/javascript">
	//加载ing
	loadingArr = ['.price-list','.attention','.cost-intro'];
	// var rStr = $('.table-list').html();
	showLoading();
	var showData = function(res){
		// $('.table-list').html(rStr);
		if(res.infoData){
			$('.attention').html(getNewStr(res.infoData.events_register_attention));
			$('.cost-intro').html(getNewStr(res.infoData.events_register_cost_intro));
			$('.events-date').html(res.baseData.events_begin_date + ' ~ '+ res.baseData.events_end_date);
			if(res.infoData.events_register_cost){
				var priceArr = res.infoData.events_register_cost.split("\n");
				var priceStr= '';
				$.each(priceArr, function(index, val) {
					var littleArr = val.split("->");
					priceStr += '<li class="wow"><div class="box1CenCon"><div class="img-img img-one"><h4 class="white top"><b>' + littleArr[1] + '</b></h4><h4 class="footer">' + littleArr[0] + '</h4><p><small>' + littleArr[2] + '</small></p></div></div></li>';
				});
				$('.price-list').html(priceStr);
			}
		}
	}

	var getVerifyCode = function(){
		$.ajax({
			url: '?m=events&a=getVerifyCode',
			type: 'GET',
			success: function(res){
				
				res = $.parseJSON(res);
				console.log(res);
            	if(res.resCode === 200){
					$('.codeVal').html(res.resData.code);
				}else{
					alert('出现异常');
				}
			}
		})
	}

	//报名相关操作
	$(function(){
		getVerifyCode();
		//获取页面相关信息
		$('.countNum').change(function(event) {
			// console.log($('.countNum').val());
			var num = parseInt($('.countNum').val());
			var allStr = '';
			var str = $('#userList-single').html();
			$('#userList').html('');
			for (var i = num; i > 0; i--) {
				allStr += str;
			};
			$('#userList').html(allStr);
		});
		//提交参加报名
		$('.btn-img img').click(function(event) {
			var _cData = {};
			_cData.uData = [];
			// var uData = $('#userList .uname');
			// console.log(uData);
			//获取公司相关数据
			// uData = $('#userList');
			var uNameData = $('#userList .uname');
			var uJobData = $('#userList .ujob');
			var uMobileData = $('#userList .umobile');
			var uEmailData = $('#userList .uemail');
			_cData.countNum = $('.countNum').val();
			_cData.com_name = $('.com_name').val();
			_cData.com_Invoices_title = $('.com_Invoices_title').val();
			_cData.com_duty_num = $('.com_duty_num').val();
			_cData.com_phone = $('.com_phone').val();
			_cData.com_fax = $('.com_fax').val();
			_cData.com_postal_addr = $('.com_postal_addr').val();
			_cData.com_postal_code = $('.com_postal_code').val();
			_cData.com_field = $('.com_field input:radio:checked').val();
			_cData.from = $('.from_data input:radio:checked').val();
			_cData.verify_code = $('.verify_code').val();
			_cData.events_id = events_id;
			//判断必填项是否填写
			if(!_cData.events_id){
				alert('不能获取到会议id');
				return;
			}
			if(!_cData.countNum || _cData.countNum === '0'){
				alert('参加人数不能为空。');
				return;
			}else{
				//判断用户名，职务，电话，邮箱是否匹配
				for (var i = 0; i < uNameData.length; i++) {
					// console.log(uNameData[i].value , uMobileData[i].value , uEmailData[i].value)
					if(uNameData[i] && uNameData[i].value && uJobData[i].value && uMobileData[i].value && uEmailData[i].value){
						_cData.uData.push(
							{
								uname: uNameData[i].value,
								ujob: uJobData[i].value,
								umobile: uMobileData[i].value,
								uemail: uEmailData[i].value
							}
							);
					}else{
						alert('用户名，职务，电话不能为空。');
						return;
					}
				};
				if(_cData.uData.length !== parseInt($('.countNum').val())){
					alert('用户名，职务，电话不能为空');
					return;
				}
				// _cData.uData = JSON.stringify(_cData.uData);
			}
			// console.log(_cData)
			if(!_cData.com_name){
				alert('公司名称不能为空。');
				return;
			}
			if(!_cData.com_Invoices_title){
				alert('公司发票抬头不能为空。');
				return;
			}
			if(!_cData.com_duty_num){
				alert('公司税号不能为空。');
				return;
			}
			if(!_cData.com_phone){
				alert('电话不能为空。');
				return;
			}
			if(!_cData.com_postal_addr){
				alert('邮政地址不能为空。');
				return;
			}
			if(!_cData.com_field){
				alert('所属领域不能为空。');
				return;
			}
			if(!_cData.from){
				alert('您是通过什么平台获知本次会议的不能为空。');
				return;
			}
			if(!_cData.verify_code){
				alert('验证码不能为空。');
				return;
			}
			if(!confirm('确认提交以上信息吗？')){
				return;
			}
			// console.log('all',_cData,JSON.stringify(_cData));

			$.ajax({
				url: '?m=events&a=addMSignUp',
				type: 'POST',
				data: _cData,
				dataType: 'json',
				success: function(res){
					// console.log(res);
					if(res.resData.cid){
						alert('恭喜你！报名成功！');
						$('.countNum').val();
						$('.com_name').val();
						$('.com_Invoices_title').val();
						$('.com_duty_num').val();
						$('.com_phone').val();
						$('.com_fax').val();
						$('.com_postal_addr').val();
						$('.com_postal_code').val();
						$('.com_field input:radio:checked').val();
						$('.from_data input:radio:checked').val();
						$('.verify_code').val();
					}else{
						alert('信息提交失败,' + res.resData);
					}
					getVerifyCode();
				}
			})
			
		});
	})
		
</script>
<!-- INCLUDE ../footer.tpl