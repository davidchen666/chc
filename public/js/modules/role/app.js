
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
                var search = $('._search').val();
                return {
                    'tr_id': tr_id,
                    'search': search
                };
            },
            "aoColumns": [
                {
                    "bSortable":true,
                    "mData": "tr_id",
                    "sTitle": "角色ID"
                },
                {
                "bSortable":true,
                "mData": "role_name",
                "sTitle": "角色名称"
            },{
                "bSortable": true,
                "sTitle": "更新时间",
                "mData": "gen_time",
                mRender: function (data, type, full) {
                    //console.log(data);
                    var date = jQuery.parseJSON(data);
                    return new Date(date*1000).toLocaleDateString();   //http://zhidao.baidu.com/link?url=lkgB1FmHAK9UQRlS-tDl4IsGTu0MTEa132Pb-wbttl4-nhAQcnDD2i3fZaSk_PMUAsWTLZ7AG6SxqSs3vDbIeq
                }

            }, {
                "bSortable": false,
                "sTitle": "角色描述",
                "mData": "description"
            }]
        });
    };

    //用户搜索

    $("._search").on('keyup', function (e) {
        $('#my_table_wrapper').parent().html('<table id="my_table"></table>');
        pagurian.call("modules/role/app", function (app) {
            app.page.dataTable();
        });
    })
    module.exports = app;

});