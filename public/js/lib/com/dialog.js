/**
 * [demo]
 * $p.ui.dialog({
 *     id:"#btn_"
 *     onClickSubmit:function(){
 *
 *     }
 * });
 */
define(function(require, exports, module) {

    var g = window;



    function Dialog() {

        var _id = '_' + (Math.random() * 1E18).toString(36).slice(0, 5).toUpperCase();

        var this_selector;

        var template = "";

        template += '<div class="modal fade" id="modal' + _id + '" >';
        template += '  <div class="modal-dialog ">';
        template += '        <div class="modal-content">';
        template += '            <div class="modal-header">';
        template += '                <button aria-hidden="true" data-dismiss="modal" class="close" type="button"></button>';
        template += '                <h4 class="modal-title">{title}</h4>';
        template += '            </div>';
        template += '            <div class="modal-message"></div>';
        template += '            <div class="modal-body">{body}</div>';
        template += '            <div class="modal-footer">';
        template += '                <span class="submit-waiting"></span>';
        template += '                <button id="btn_submit' + _id + '" class="btn btn-primary" type="button">{btn_submit}</button>';
        template += '                <button id="btn_cancel'+_id + '"data-dismiss="modal" class="btn btn-default" type="button">{btn_cancel}</button>';
        template += '            </div>';
        template += '        </div>';
        template += '    </div>';
        template += '</div>';


        function resetForm(form) {

            var form_element_list = form.find("input,textarea");
            form_element_list.each(function() {
                if ($(this).attr('type') === "text" || $(this).attr('type') === "hidden" || $(this).get(0).tagName === "TEXTAREA") {
                    $(this).val("");
                }
            });

            form.find(".help-block").each(function() {
                var tip = $(this).data("tip");
                if (tip) {
                    $(this).text(tip).addClass("tip");
                } else {
                    $(this).text("");
                }
            });
        }


        this.init = function(seletor, options) {



            var modal = this;



            //初始化模版
            this.tpl = $p.tpl(template, $.extend({
                "title": "提示信息",
                "btn_submit": "确定",
                "btn_cancel": "取消",
                "body": "你好，我是一个模式对话框。"
            }, options));

            $("body").append(this.tpl);

            var form = $("#modal" + _id + " form");

            if (seletor) {
                //给按钮绑定事件
                $(document).delegate(seletor, 'click', function() {
                    var params = $(this).data("params");
                    this_selector = $(this); //选择器本身
                    modal.params = eval("(" + params + ")") || {};
                    modal.show();
                    if (typeof options.initForm === "function") {
                        options.initForm(modal, form, modal.params,this_selector); //回调中增加选择器本身
                    }
                    //按钮是否显示
                    if (!options.display_btn) {
                        $("#btn_submit"+_id).remove();
                        $("#btn_cancel"+_id).remove();
                    }
                    //大窗口
                    if (options.big_dialog) {
                        $("#modal" + _id + "> .modal-dialog").attr('class', "modal-dialog-lg ");
                        $("#DataTables_Table_0_wrapper").find(".bottom").attr("style", "display:block");
                    }
                });
            }

            this.element = $("#modal" + _id);

            var submit_form = function (){
                var data = form.serializeArray() || [];
                //jquery.validate 验证表单
                if (form.length && typeof form.valid === "function" && !form.valid()) {
                    return false;
                }

                //手动验证表单
                if (form.length && typeof options.validate === "function" && !options.validate(modal, data, modal.params)) {
                    return false;
                }

                //提交表单数据
                if (typeof options.submit === "function") {
                    $(this).addClass("disabled").prop("disabled", true);
                    $("#modal" + _id + " .submit-waiting").html('<i class="fa fa-spinner fa-spin"></i>');
                    options.submit(modal, data, modal.params, this_selector);
                }
            };

            //提交按钮绑定事件
            $("#btn_submit" + _id).click(function() {submit_form();});

            //绑定回车提交提交
            $("#btn_submit" +_id).bind('keydown',function(e){
                var k = e.which;
                if (k === 13){
                    submit_form();
                }
            });

            return this;
        };

        this.complete = function(data, valid) {

            $("#modal" + _id + " .submit-waiting").html('');
            $('#modal' + _id + " .btn").removeClass("disabled").removeAttr("disabled");

        };

        this.show = function() {

            resetForm($("#modal" + _id + " form"));
            $('#modal' + _id + " .submit-waiting").html("");
            $('#modal' + _id + " .modal-message").html("");
            $('#modal' + _id + " .btn").removeClass("disabled").removeAttr("disabled");
            $('#modal' + _id).modal('show');
            return this;
        };

        this.hide = function() {
            $('#modal' + _id).modal('hide');
            return this;
        };
    }

    g[PagurianAlias].com.dialog = function(seletor, options) {
        var dialog = new Dialog();
        dialog.init(seletor, options);
        return dialog;
    }

});
