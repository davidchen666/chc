<!-- INCLUDE ../header.tpl -->
<!-- INCLUDE ./header.tpl -->

<!-- 内容 -->
<div class="total">
	<div class="my-msg"></div>
	<div class="my-loading"></div>
	<!--参会报名-->
	<div id="r-sign-up" style="display: none;">
		<div class="container">
			<div class="box1Top wow h-title" data-wow-delay="0.5s">
	        	<img src="{WEBSITE_SOURCE_URL}/img/events/detail/children/r-title.png" class="img-responsive">
	    	</div>
			<div class="box1Cen text-center words road-content-total" style="display: none;"> 
				<h4 class="blue"><b class="road-title"><span ></span><small> </small></b></h4>
				<p class="blue"><b class="road-second-title"></b></p>
				<p class="text-left road-content"></p>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left road-target-total" style="display: none;">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;<room>活动宗旨</room></h4></li>
				</ul>
				<div class="words top-null">
					<p class="road-target"></p>
				</div>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left road-guide-total" style="display: none;">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;<room>专业指导</room></h4></li>
				</ul>
				<div class="words top-null road-guide">
					<!-- <p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p> -->
				</div>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left road-course-total" style="display: none;">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;<room>课程安排</room></h4></li>
				</ul>
				<div class="words top-null road-course">
					<!-- <p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p> -->
				</div>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left road-signup-intro-total" style="display: none;">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;<room>路演项目报名</room></h4></li>
				</ul>
				<div class="words top-null road-signup-intro">
					<!-- <p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p>
					<p>内容就快进借口借口借口借口</p> -->
				</div>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list table-left road-achieve-total" style="display: none;">
				<ul class="list-group">
				    <li class="list-group-item text-left top-bg"><h4> | &nbsp;&nbsp;<room>您将获得</room></h4></li>
				</ul>
				<div class="words top-null road-achieve">
					<!-- <p>内容就快进借口借口借内容就快进借口借口借口借口内容就快进借口借口借口借口内容就快进借口借口借口借口口借口</p> -->
				</div>
			</div>
			<div class="box1Cen list-unstyled list-inline text-left table-list road-register" style="display: none;">
				<ul class="list-group">
				    <li class="list-group-item text-center top-bg"><h4>会议时间：<span class="events-date"></span>	</h4></li>
				</ul>
				<div class="row top-null">
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>公司名称*</p></label>
						    <input type="text" class="form-control cname">
					  	</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
						    <label for="name"><p>联系人姓名*</p></label>
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
						    <label for="name"><p>电话/手机*</p></label>
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
				<div class="row">
					<div class="col-md-5">
						<p>
							<b>上传商业计划书（仅支持PPT、PDF格式）</b>
							<!-- <input id="uploadImage" type="file" name="photoimage" class="fimg1"/> -->
							<!-- <a href="javascript:;" class="uploadFile"><input id="file_upload" name="file_upload" type="file" multiple="false">
							</a> -->
						</p>
					</div>
					<div class="col-md-2">
						<a href="javascript:;" class="a-upload">
	                        <input type="file" name="file1" id="file1" class="form-control doUpload" />
	                        递交商业计划书 
	                    </a>
						<!-- <input id="file_upload" name="file_upload" type="file" multiple="false"> -->
					</div>
					<div class="col-md-4">
						<span class="upload-msg" style="color:red;display: none;">请等待,正在上传...</span>
						<span class="msg" style="color:red;display: none;"></span>
					</div>
				</div>
				<div class="row words">
					<div class="col-md-12 road-warn">
						<!-- <p><small>1.请真实填写以上信息，我们会对该信息保密，不会泄露给第三方或用于其他商业目的；</small></p>
						<p><small>2.提交申请后，我们将在1-3个工作日内与您联系，请耐心等待；</small></p>
						<p><small>3.相关问题请咨询：021-50726900，project@chconsultant.com。</small></p> -->
					</div>
				</div>
				<div class="btn-img text-center">
		            <a href="###" "email me"><img id="addData" src="{WEBSITE_SOURCE_URL}/img/events/detail/children/sign-btn.png" alt=""></a>
		        </div>
			</div>

		</div>
	</div>
<!-- INCLUDE ../footer.tpl -->
<script type="text/javascript">
	//加载flash
	// if (window.ActiveXObject) {
 //        var s = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
 //        if(!s){
 //            alert('请将您的浏览器设置falsh插件在此网站上始终允许！');
 //        }
 //    } else {
 //        var s = navigator.plugins['Shockwave Flash'];
 //        if(!s){
 //            alert('请将您的浏览器设置falsh插件在此网站上始终允许！');
 //        }
 //    }
	//渲染数据
	loadingArr = ['.my-loading'];
	// var rStr = $('.road-register').html();
	showLoading();
	var showData = function(res){
		// $('.road-register').html(rStr);
		if(res.roadShowData){
			var roadObj = res.roadShowData;
			if(roadObj.road_title || roadObj.road_second_title || roadObj.road_intro){
				$('.road-title').html(roadObj.road_title);
				$('.road-second-title').html(roadObj.road_second_title);
				$('.road-content').html(getNewStr(roadObj.road_intro));
				$('.road-content-total').show();
			}
			if(roadObj.road_target){
				if(roadObj.road_target_rename){
					$('.road-target-total room').html(roadObj.road_target_rename);
				}
				$('.road-target').html(getNewStr(roadObj.road_target));
				$('.road-target-total').show();
			}	
			if(roadObj.road_guide){
				if(roadObj.road_guide_rename){
					$('.road-guide-total room').html(roadObj.road_guide_rename);
				}
				$('.road-guide').html(getNewStr(roadObj.road_guide));
				$('.road-guide-total').show();
			}
			if(roadObj.road_achieve){
				if(roadObj.road_achieve_rename){
					$('.road-achieve-total room').html(roadObj.road_achieve_rename);
				}
				$('.road-achieve').html(getNewStr(roadObj.road_achieve));
				$('.road-achieve-total').show();
			}
			if(roadObj.road_course){
				if(roadObj.road_course_rename){
					$('.road-course-total room').html(roadObj.road_course_rename);
				}
				$('.road-course').html(getNewStr(roadObj.road_course));
				$('.road-course-total').show();
			}
			if(roadObj.road_signup_intro){
				if(roadObj.road_signup_intro_rename){
					$('.road-signup-intro-total room').html(roadObj.road_signup_intro_rename);
				}
				$('.road-signup-intro').html(getNewStr(roadObj.road_signup_intro));
				$('.road-signup-intro-total').show();
			}
			$('.road-register').show();
			$('#r-sign-up').show();
			$('.road-warn').html(getNewStr(roadObj.road_warn));
			$('.events-date').html(roadObj.road_begin_date + ' ~ '+ roadObj.road_end_date);
		}else{
			$('.my-msg').html('<h3 class="text-center black" style="padding-top:80px;padding-bottom:100px;">暂无该活动。</h3>');
		}
		
	}

	//报名
$(function(){
	var fileName = '';
	function doUpload() {
		$('.msg').hide();
		$('.upload-msg').show();
        var formData = new FormData();
        // formData.append("token", token);
        formData.append("file", $('#file1')[0].files[0]);
        // formData.append("file2", $('#file2')[0].files[0]);
        // formData.append("file3", $('#file3')[0].files[0]);
        $.ajax({  
             url: '?m=events&a=uploadFile' ,  
             type: 'post',  
             data: formData,
             cache: false,
             processData: false,
             contentType: false,
             // async: false
        }).done(function(res) {
        	sleep(1000);
        	$('.upload-msg').hide();
        	$('.msg').show();
        	res = $.parseJSON(res);
            console.log(res);
            if(res.resCode === 200){
            	$('.msg').html('上传成功。');
                fileName = res.resData.newname;
            }else{
            	$('.msg').html('上传失败,<br>'+res.resData);
                fileName = '';
            }
            
        }).fail(function(res) {
            fileName = '';
        });
    }
    
    $('.doUpload').change(function(event) {
        doUpload();
    });
    // var showMsg = function(){
    	// $('.msg').html('正在上传');
    // }
	//upload
	// $('#file_upload').uploadify({
	// 	'swf'      : 'public/img/uploadify.swf',
	// 	'uploader' : '?m=events&a=uploadFile',
	// 	'auto'    : true, //是否自动上传 false关闭自动上传 true 选中文件后自动上传
	// 	'buttonClass' : 'mybtn', //自定义按钮的样式
	//     // 'buttonImage' : 'public/img/events/detail/children/upload-project.png',
	//     'buttonText'  : '选择文件', //按钮显示的字迹
	//     //'fileObjName' : 'mytest'  //后台接收的时候就是$_FILES['mytest'] 
	//     // 'checkExisting' : '/uploadify/check-exists.php', //检查文件是否已经存在 返回0或者1
	//     // 'fileSizeLimit' : '100KB', //上传文件大小的限制
	//     // 'fileTypeDesc'  : '你需要一些文件',//可选择的文件的描述
	//     // 'fileTypeExts'  : '*.gif; *.jpg; *.png', //文件的允许上传的类型

	//      //上传的时候发生的事件
	//     'onUploadStart' : function(file){
	//       		// console.log('开始上传了');
	//       		$('.msg').html(file.name+"开始上传了");
	//   	},
	//   	 'uploadLimit'   : 10, //设置最大上传文件的数量
	//     /*
	//     'onUploadComplete' : function(result){
	//         for (var i in result.post){
	//          alert(i+':::'+result[i]);
	//         }
	//        },
	//     */
	//     //文件上传成功的时候
	//     'onUploadSuccess' : function(file, data, response) {
	//   		fileName = '';
	//      	if(data){
	//      		 data = $.parseJSON(data)
	//      		// console.log('11--',file, '22--',data, '33--',response);
	//      		if(data.resCode === 400){
	//      			// alert('上传失败！' + data.resData);
	//      			$('.msg').html('上传失败！' + data.resData);
	//      			return;
	//      		}else{
	//      			console.log(data.resData);
	//      			$('.msg').html(data.resData.name+' 上传成功！');
	//      			fileName = data.resData.newname;
	//      		}
	//      	}
	     	
	//     },
	//     //
	//     'onUploadError' : function(file, errorCode, errorMsg, errorString) {
	//     	console.log('1--'+file, '2--'+errorCode, '3--'+errorMsg, '4--'+errorString);
	//     	// alert(file.name + '上传失败原因:' + errorString); 
	//     },
	//     'itemTemplate' : '追加到每个上传节点的html',
	//     'height'  : 33, //设置高度 button
	//     'width'  : 131, //设置宽度
	//     'onDisable' : function(){
	//       	alert('您禁止上传');
	//     },
	//     'onEnable'  : function(){
	//       	// alert('您可以继续上传了');
	//     },
	//     //当文件选中的时候
	//     'onSelect'  : function(file){
	//       	// alert(file.name+"已经添加到队列");
	//       	$('.msg').html(file.name+"已经添加到队列");
	//     }

	// });
	// $('#file_upload-button').css("background","#A6CB42");
	// $('#file_upload-button').css("line-height","30px");

	//提交参加报名
	$('#addData').click(function(event) {
		var _cData = {};
		//获取公司相关数据
		_cData.cname = $('.cname').val();
		_cData.uname = $('.uname').val();
		_cData.ujob = $('.ujob').val();
		_cData.umobile = $('.umobile').val();
		_cData.uemail = $('.uemail').val();
		_cData.fname = fileName;
		_cData.events_id = events_id;
		
		//判断必填项是否填写
		if(!_cData.events_id){
			alert('不能获取到会议id');
			return;
		}
		if(!_cData.cname){
			alert('公司名称不能为空。');
			return;
		}
		if(!_cData.uname){
			alert('负责人姓名不能为空。');
			return;
		}
		if(!_cData.ujob){
			alert('负责人职位不能为空。');
			return;
		}
		if(!_cData.umobile){
			alert('负责人电话不能为空。');
			return;
		}
		if(!_cData.uemail){
			alert('负责人邮箱地址不能为空。');
			return;
		}
		if(!_cData.fname){
			alert('请上传商业计划书。');
			return;
		}
		if(!confirm('确认提交以上信息吗？')){
			return;
		}
		// console.log('all',_cData,JSON.stringify(_cData));

		$.ajax({
			url: '?m=events&a=addRSignUp',
			type: 'POST',
			data: _cData,
			dataType: 'json',
			success: function(res){
				console.log(res);
				if(res.resCode === 200){
					if(res.resData.cid){
						alert('恭喜你！报名成功！');
						$('.cname').val('');
						$('.uname').val('');
						$('.ujob').val('');
						$('.umobile').val('');
						$('.uemail').val('');
					}else{
						alert('信息提交失败');
					}
					
					// $("#success").alert();
				}else{
					alert('信息提交失败,' + res.resData);
					// alert();
					// $("#error").alert();
				}
			}
		})
		
	});
})
</script>