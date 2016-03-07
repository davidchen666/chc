/**
 * Created with JetBrains PhpStorm.
 * User: david
 * Date: 16-2-24
 * Time: 下午4:52
 * To change this template use File | Settings | File Templates.
 */
define(function (require, exports, module) {

//    require('./jsoneditor.css');
//    require('./jsoneditor');
//    require('./asset/ace/ace');
//    require('./asset/jsonlint/jsonlint');
    require('./dist/jsoneditor.css');
    require('./dist/jsoneditor');
    var g = window;

    function jsJsonEditor(seletor, options) {
        var rs = getDataList(seletor, options);

        function getDataList(seletor, options) {
            options.dataSource(options, function (dataSource) {
                //格式化模板数据
                var rsData = formatDataSource(dataSource);
                var container = document.getElementById(seletor);
                //展示右侧面板函数
                options.showTab = function (jsonOb) {
                    console.log(jsonOb);
                    //获得当前节点的type,然后根据不同的type展示右侧辅助模板
                    var dataType = getDataTypeByNode(jsonOb);
                    console.log(dataType);
                    //获得改节点是否需要右侧辅助模板
                    var templateActionRs = templateAction(dataType, jsonOb);
//                    var jsonData = jsonOb.editor.get();
//                    console.log(jsonData);
                };
                console.log(rsData);
                options.rsTemplateJson = rsData.rsTemplateJson;
                options.seletorID = seletor;
                var container = document.getElementById(seletor);
                var editor = new JSONEditor(container, options, rsData.rsTextShowJson);
                //显示默认的模板
                setDefaultTemplate(seletor, rsData.rsTemplateJson, editor);
                editor.setMode("tree");
                editor.expandAll();

                $("#getJsonData").click(function () {
                    alert(editor.getText());
                    console.log(editor.get());
                });
            });
        };
    }

    //格式化模板数据
    function formatDataSource(dataSource) {
        var rs = {};
        var rsTemplateJson
        var rsTextShowJson;
        rs.rsTextShowJson = formatJson(dataSource.basic);
        rs.rsTemplateJson = getJsonTemplate(dataSource.basic);
        return rs;
    }

    //格式化json模板到展示
    function formatJson(jsonData) {
        var rsJson = {};
        $(jsonData).each(function (e) {
            var fname = this.fieldsName;
            var ftype = this.type;
            switch (this.type) {
                case 'String':
                    rsJson[fname] = "";
                    break;
                case 'Article':
                    rsJson[fname] = {"type": "Article", "info": "", "value": ""};
                    break;
                case 'File':
                    rsJson[fname] = {"type": "Media", "info": "", value: ""};
                    break;
                case 'City':
                    rsJson[fname] = {"type": "City", "info": "", value: ""};
                    break;
                case 'Industry':
                    rsJson[fname] = {"type": "Industry", "info": "", value: ""};
                    break;
                case 'Object':
                    rsJson[fname] = formatJson(this.default);
                    break;
            }
            ;
            //console.log(this);
        });
        return rsJson;
    }

    //取得模板数据
    function getJsonTemplate(jsonData) {
        var rsJson = new Array();
        $(jsonData).each(function (e) {
            if (this.type === 'Object') {
                rsJson.push(this);
            }
        });
        return rsJson;
    }

    //默认模板弹出
    function setDefaultTemplate(seletor, jsonData, editor) {
        var button = '<button class="btn btn-primary" type="button">标准按钮</button>';
        var buttonHtml = "";
        $(jsonData).each(function () {
            buttonHtml += '<button class="btn btn-primary _templateClick" type="button">' + this.fieldsName + '</button>\n\r';
        });
        $("#" + seletor + "ShowTab").html(buttonHtml);
        $("._templateClick").click(function () {
//            editor.focus();
            var templateClick = editor.search($(this).text());
            console.log(templateClick);
            var nowNode = templateClick[0].node;
            var cloneData = nowNode.clone();
            var parent = nowNode.parent;
//            var nowIndex = templateClick[0].node.getIndex();
            parent.insertAfter(cloneData, nowNode);
            cloneData.focus();
//            editor.expandAll();
        });
    }

    //获得当前节点的数据类型:
    function getDataTypeByNode(node) {
        var nodeLev = node.getLevel();
        var nodeParent = node.parent;
        var nodeType = 'Default';
        console.log(nodeLev);
        if (nodeLev === 0) {
            nodeType = 'TopOne';
        }
        else {
            $(nodeParent.childs).each(function () {
                if (this.field === 'type') {
//                console.log(this.value);
                    nodeType = this.value;
                }
            });
        }
        return nodeType;
//        console.log(nodeParent);
    }

    //展示模板
    function templateAction(type, node) {
        var rs = {};
        switch (type) {
            case 'TopOne':
                console.log(node);
                setDefaultTemplate(node.editor.options.seletorID, node.editor.options.rsTemplateJson, node.editor);
                break;
            case 'Default':
                var nodeLev = node.getLevel();
                $("#jsonEditorIDShowTabAlt").html("请填写相关信息");
                $("#jsonEditorIDShowTab").html("");
                break;
            case 'Industry':
                $("#jsonEditorIDShowTabAlt").html("请选择行业");
                var interHtml = '<table><tr><td><select class="form-control input-small" id="industry">' +
                    '</select></td>' +
                    '<td><select class="form-control input-small" id="pindustry">' +
                    '<option value="0">无</option>' +
                    '</select></td>' +
                    '<td width="50"></td><td><button class="btn btn-primary" type="button" id="industryDone">确认</button></td></tr></table>';
                $("#jsonEditorIDShowTab").html(interHtml);
                //选择行业
                $.ajax({
                    type: 'post', url: 'http://10.10.21.163/iaggregator_admin/index.php?m=industry&a=selectIndustry', beforeSend: function () {
                    },
                    success: function (data) {
                        var arr = jQuery.parseJSON(data);
                        var html = '<option  value="0">请选择行业</option>';
                        for (var i = 0; i < arr.length; i++) {
                            html += ' <option  value="' + arr[i]['id'] + '">' + arr[i]['industry_name'] + '</option>';
                        }
                        $('#industry').html(html);
                    }
                });
                //大行业改变
                $(document.body).on('change', '#industry', function (e) {
                    var pid = $(this).val();
                    $.post('http://10.10.21.163/iaggregator_admin/index.php?m=industry&a=selectPIndustry', {
                        pid: pid
                    }, function (data) {
                        if (data != 0) {
                            var arr = jQuery.parseJSON(data);
                            var html = '';
                            for (var i = 0; i < arr.length; i++) {
                                html += ' <option value="' + arr[i]['id'] + '">' + arr[i]['industry_name'] + '</option>';
                            }
                            $('#pindustry').html(html);
                        } else {
                            $('#pindustry option').remove();
                            html += ' <option value="0" >无</option>';
                            $('#pindustry').html(html);
                        }
                    });
                });
                $("#industryDone").click(function () {
                    var industry = $("#insdutry").val();
                    if (industry === '0') {
                        $p.com.alert("请选择行业", "warning");
                    } else {
                        var industryValue = $("#industry").find("option:selected").text() + " " + $("#pindustry").find("option:selected").text();
                        var industryID = $("#pindustry").val();
                        //console.log(insdustryValue + '--' + industryID);
                        var nodeParent = node.parent;
                        $(nodeParent.childs).each(function () {
                            if (this.field === 'info') {
                                $(this.dom.value).html(industryValue);
                                $(this.dom.value).removeClass("jsoneditor-empty");
                                this.focus();
                            }
                            if (this.field === 'value') {
                                $(this.dom.value).html(industryID);
                                $(this.dom.value).removeClass("jsoneditor-empty");
                                this.focus();
                            }
                        });
//                        console.log(node);
//                        $(node.dom.value).html(cityValue);
//                        $(node.dom.value).removeClass("jsoneditor-empty");
                    }
                });
                break;
            case 'City':
                $("#jsonEditorIDShowTabAlt").html("请选择城市");
                var interHtml = '<table><tr><td><select class="form-control input-small" id="province">' +
                    '</select></td>' +
                    '<td><select class="form-control input-small" id="city">' +
                    '<option value="0">无</option>' +
                    '</select></td>' +
                    '<td width="50"></td><td><button class="btn btn-primary" type="button" id="cityDone">确认</button></td></tr></table>';
                $("#jsonEditorIDShowTab").html(interHtml);
                //选择省市
                $.ajax({
                    type: 'post',
                    url: '../../../index.php?m=service&a=listProCity',
                    beforeSend: function () {
                    },
                    success: function (data) {
                        var arr = jQuery.parseJSON(data);
                        arr = arr.content;
                        var html = '<option  value="0">请选择省市</option>';
                        for (var i = 0; i < arr.length; i++) {
                            html += ' <option  value="' + arr[i]['provindex'] + '">' + arr[i]['proname'] + '</option>';
                        }
                        $('#province').html(html);
                    }
                });
                //大行业改变
                $(document.body).on('change', '#province', function (e) {
                    var pid = $(this).val();
                    $.post('../../../index.php?m=service&a=listProCityIndex', {
                        ProvIndex: pid
                    }, function (data) {
                        if (data != 0) {
                            var arr = jQuery.parseJSON(data);
                            arr = arr.content;
                            var html = '';
                            for (var i = 0; i < arr.length; i++) {
                                html += ' <option value="' + arr[i]['cityindex'] + '">' + arr[i]['cityname'] + '</option>';
                            }
                            $('#city').html(html);
                        } else {
                            $('#city option').remove();
                            html += ' <option value="0" >无</option>';
                            $('#city').html(html);
                        }
                    });
                });
                $("#cityDone").click(function () {
                    var province = $("#province").val();
                    if (province === '0') {
                        $p.com.alert("请选择省市", "warning");
                    } else {
                        var cityValue = $("#province").find("option:selected").text() + " " + $("#city").find("option:selected").text();
                        var cityID = $("#city").val();
                        //console.log(cityValue + '--' + cityID);
                        var nodeParent = node.parent;
                        $(nodeParent.childs).each(function () {
                            if (this.field === 'info') {
                                $(this.dom.value).html(cityValue);
                                $(this.dom.value).removeClass("jsoneditor-empty");
                                this.focus();
                            }
                            if (this.field === 'value') {
                                $(this.dom.value).html(cityID);
                                $(this.dom.value).removeClass("jsoneditor-empty");
                                this.focus();
                            }
                        });
//                        console.log(node);
//                        $(node.dom.value).html(cityValue);
//                        $(node.dom.value).removeClass("jsoneditor-empty");
                    }
                });

                break;
            case 'Media':
                $("#jsonEditorIDShowTabAlt").html("请上传文件");
                var interHtml = '<form class="form-inline" role="form" id="yourformID-form" action="" method="post">' +
                    '<div class="input-group">' +
                    '<div class="form-group margin-right-10">' +
                    '<input size="50" maxlength="50" class="form-control" id="file_info" name="q" type="text" placeholder="请填写文件描述">' +
                    '</div>' +
                    '<div class="form-group margin-right-10 mt15">' +
                    '<button class="btn btn-primary " type="button" id="uploadfile">选择文件</button>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<button class="btn btn-primary" type="button" id="mediaDone" file_name="0"> 确认 </button>' +
                    '</div>' +
                    '</div>' +
                    '</form>';
                $("#jsonEditorIDShowTab").html(interHtml);
                require('../../plugins/uploadify/module');
                var params = {
                    'button_image_url': "../plugins/uploadify/swf_upload_button.png",
                    'button_width': "78",
                    'button_height': "30",
                    'button_placeholder_id': "uploadfile",

                    'swf': '../plugins/uploadify/uploadify.swf',
                    'uploader': '../../../index.php?m=service&a=uploadFile',
                    onUploadSuccess: function (file, data, response) {
                        data = $.trim(data);
                        if (data === 'error') {
                            $p.com.alert("文件上传错误", "warning");
                        }
                        else {
                            $("#mediaDone").attr("file_name", data);

                        }
                        console.log(data);
                    }
                }
                $p.plugin.irsUpload($('#uploadfile'), params);
                $("#mediaDone").click(function () {
                    var file_name = $(this).attr("file_name");
                    var file_info = $("#file_info").val();
                    $.ajax({
                        type: 'post',
                        url: '../../../index.php?m=service&a=addMedia',
                        data: {"data": {"file_name": file_name, "file_info": file_info}},
                        beforeSend: function () {
                        },
                        success: function (data) {
                            var nodeParent = node.parent;
                            $(nodeParent.childs).each(function () {
                                if (this.field === 'info') {
                                    $(this.dom.value).html(file_info);
                                    $(this.dom.value).removeClass("jsoneditor-empty");
                                    this.focus();
                                }
                                if (this.field === 'value') {
                                    $(this.dom.value).html(data);
                                    $(this.dom.value).removeClass("jsoneditor-empty");
                                    this.focus();
                                }
                            });
                        }
                    });
                });
                break;
            case 'Article':

                $("#jsonEditorIDShowTabAlt").html("在以下编辑器中编辑文章后确认");
                window.UEDITOR_HOME_URL = '/iresearch_ui/public/js/plugins/ueditor/';
                var interHtml = '<script type="text/javascript" charset="utf-8" src="' + window.UEDITOR_HOME_URL + 'ueditor.config.js"></script>' +
                    '<script type="text/javascript" charset="utf-8" src="' + window.UEDITOR_HOME_URL + 'ueditor.all.min.js">' +
                    ' </script><script id="editor" type="text/plain" style="width:100%;height:300px;"></script>' +
                    '<button class="btn btn-primary mt10" type="button" id="articleDone" >确认</button>';
                $("#jsonEditorIDShowTab").html(interHtml);
//                require('../ueditor/ueditor.config');
//                require('../ueditor/ueditor.all.min');
                var ue = UE.getEditor('editor');
                $("#articleDone").click(function () {
                    console.log(ue.getContent());
                    $.ajax({
                        type: 'post',
                        url: '../../../index.php?m=service&a=addArticle',
                        data: {"data": {"article": ue.getContent()}},
                        beforeSend: function () {
                        },
                        success: function (data) {
                            var rs = data;
                            console.log(rs);
                            var nodeParent = node.parent;
                            $(nodeParent.childs).each(function () {
                                if (this.field === 'value') {
                                    $(this.dom.value).html(rs);
                                    $(this.dom.value).removeClass("jsoneditor-empty");
                                    this.focus();
                                }
                                if (this.field === 'info') {
                                    this.focus;
                                }
                            });
                        }
                    });
                });
                break;
        }

        return rs;
    }

    g[PagurianAlias].plugin.jsonEditor = function (seletor, options) {
        var jsonEditor = new jsJsonEditor(seletor, options);
        return jsonEditor;
    }

});