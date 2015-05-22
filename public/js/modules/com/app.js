define(function(require, exports, module) {

    var app = require('../../lib/app');
    var model = require('./model');


    app.page.alert = function() {

        $("#btn_alert_1").click(function() {
            $p.com.alert("报表保持成功", "success");
        });

        $("#btn_alert_2").click(function() {
            $p.com.alert("您有5条系统提醒未读", "info");
        });

        $("#btn_alert_3").click(function() {
            $p.com.alert("您将要删除该项目", "warning");
        });

        $("#btn_alert_4").click(function() {
            $p.com.alert("找不到您筛选的数据,请尝试刷新页面!", "error");
        });

    };

    app.page.dialogs = function() {

        $p.com.dialog("#btn_remove", {
            title: "提示",
            body: "你确定要删除吗？",
            submit: function(modal, data, params, callback) {
                $p.com.alert("你点击了确定");
                modal.hide();
            }
        });

        $p.com.dialog("#btn_add", {
            title: "添加用户",
            body: $("#tpl_user").html(),
            validate: function(modal, data, params) {
                return true;
            },
            submit: function(modal, data, params, callback) {
                $p.com.alert("你点击了确定");
                modal.hide();
            }
        });

        $p.com.dialog("#btn_update", {
            title: "编辑用户",
            body: $("#tpl_user").html(),
            initForm: function(modal, form, params) {

                //获取用户信息
                model.getUser(params.id, params, function(data) {
                    $p.com.form(form).val(data);
                });

            },
            validate: function(modal, data, params) {
                return true;
            },
            submit: function(modal, data, params) {
                //更新用户信息
                model.update(params.id, data, function(resp, valid) {

                    modal.complete(resp, valid);

                    if (valid) {
                        modal.hide();
                        $p.com.alert(resp.message);
                    }
                });
            }
        });

    };

    app.page.popover = function() {

    };

    app.page.tooltip = function() {

    };

    module.exports = app;
    
});