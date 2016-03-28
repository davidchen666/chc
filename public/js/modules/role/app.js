define(function(require, exports, module) {

    var app = require('../../lib/app');
    var model = require('./model');


    require('../../plugins/datatables/module');

    app.page.dataTable = function() {
        $p.plugin.dataTable("#my_table", {
            "dataSource": model.getDataList,
            "sClass": "table-fixed",
            "aaSorting": [
                [2, "desc"]
            ],
            "fnParams": function() {
                //获取角色ID，返回角色ID
                var tr_id = '';
                tr_id = $('._roleid').val();
                var search = $('._searchRoleUser').val();
                return {
                    'tr_id': tr_id,
                    'search': search
                };
            },
            "aoColumns": [{
                "bSortable":true,
                "mData": "login_name",
                "sTitle": "用户名"
            }, {
                "bSortable": false,
                "sTitle": "姓名",
                "mData": "vsername"
            }, {
                "bSortable": false,
                "sTitle": "手机号",
                "mData": "mobile"
            }, {
                "bSortable": false,
                "sTitle": "最近登录时间",
                "mData": "login_time"
            }, {
                "bSortable": false,
                "sTitle": "登录次数",
                "mData": "count"
            }]
        });
    };

    //用户搜索
    $("._searchRoleUser").on('keyup', function (e) {
        $('#my_table_wrapper').parent().html('<table id="my_table"></table>');
        pagurian.call("modules/role/app", function (app) {
            app.page.dataTable();
        });
    })
    app.page.dataGroup = function() {
        $p.plugin.dataTable("#my_group", {
            "dataSource": model.getDataList,
            "sClass": "table-fixed",
            "aaSorting": [
                [2, "desc"]
            ],
            "fnParams": function() {
                return {};
            },
            "aoColumns": [{
                "bSortable":true,
                "mData": "keywords",
                "sTitle": "组ID"
            }, {
                "bSortable": false,
                "sTitle": "组名称",
                "mData": "searchEngine"
            }, {
                "bSortable": false,
                "sTitle": "组描述",
                "mData": "searchEngine"
            }]
        });
    };
    app.page.dataRight = function() {
        $p.plugin.dataTable("#my_right", {
            "dataSource": model.getDataList,
            "sClass": "table-fixed",
            "aaSorting": [
                [2, "desc"]
            ],
            "fnParams": function() {
                return {};
            },
            "aoColumns": [{
                "bSortable":true,
                "mData": "keywords",
                "sTitle": "权限ID"
            }, {
                "bSortable": false,
                "sTitle": "权限名称",
                "mData": "searchEngine"
            }, {
                "bSortable": false,
                "sTitle": "权限描述",
                "mData": "searchEngine"
            }]
        });
    };
    app.page.selectuser = function() {
        $p.plugin.dataTable("#select_user", {
            "dataSource": model.getDataList,
            "sClass": "table-fixed",
            "aaSorting": [
                [2, "desc"]
            ],
            "fnParams": function() {
                return {};
            },
            "aoColumns": [{
                "bSortable":true,
                "mData": "keywords",
                "sTitle": "用户名称"
            }, {
                "bSortable": false,
                "sTitle": "操作",
                "mData": "searchEngine",
                mRender: function(data, type, full) {
                    return '<input type="checkbox">'
                }
            }]
        });
    };

    $p.com.dialog("#edit_btn", {
        title: "用户选择",
        body: $("#user_selest").html(),
        initForm: function(modal, form, params) {

            //获取用户信息
            //model.getUser(params.id, params, function(data) {
            //    $p.com.form(form).val(data);
            //});

        },
        validate: function(modal, data, params) {
            return true;
        },
        submit: function(modal, data, params, callback) {
            //更新用户信息
            model.update(params.id, data, function(resp) {
                $p.com.alert(resp.message);
                modal.hide();
            });
        }
    });

    module.exports = app;

});