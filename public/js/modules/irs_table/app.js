define(function(require, exports, module) {

    var app = require('../../lib/app');
    var model = require('./model');

    require('../../plugins/fixTables/module');
    app.page.index = function() {
        var columns='[{"name":"advername","cname":"广告主"},' +
            '{"name":"service_name_cn","cname":"媒体服务"},' +
            '{"name":"csov","cname":"CSOV"},' +
            '{"name":"csou","cname":"CSOU"},' +
            '{"name":"tsov","cname":"TSOV"},' +
            '{"name":"tsou","cname":"TSOU"},{"name":"perpv","cname":"人均曝光"}]';
        var data_search_params = {
            page:1,
            start_time:'2015-03-23',
            end_time:'2015-03-29',
            time_type:'week',
            graph_type:'trend',
            data_type:'UV_Percent',
            vm:'4',
            vs:'18',
            code:"3,2,0,1,0",
            columns:columns,
            dimension:'4',
            sort_key:'csov',
            sort_info:'desc',
            keyword:'',
            compare:''
        };
        var tableData = model.getDataList;
        var fixcloumns=2;
        $p.plugin.irsDataTable("#datainfo",{
            data_search_params:data_search_params,
            dataSource: tableData,
            cssSkin: "sDefault",
            fixedCols: fixcloumns,
            headerRows: 2,
            isoverflowx:true,
            onStart: function() {
                this.start = new Date();
            },
            onFinish: function(bd) {
            },
            ispage: true,
            copydata:true,
            datapic:true,
            exportExcel:model.getExcelData
        });
    };
    module.exports = app;

});