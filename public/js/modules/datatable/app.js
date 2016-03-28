define(function(require, exports, module) {

    var app = require('../../lib/app');
    var model = require('./model');


    require('../../plugins/datatables/module');
    require('../../plugins/datatablechart/datatablechart');
    require('http://180.169.19.166/graph_html5/js/charts.js');
//生成切换图表按钮
    var seletor='#my_table';
    $(seletor).before('<div class="row irs-table-change-pic-div"><div class="col-md-12"><button class="btn btn-default tooltips irs-table-change-pic" data-placement="bottom" data-original-title="点击切换图表">切换图表</button></div></div>');
    $(seletor).before('<div id="irs-table-pic"></div>');
    $('#irs-table-pic').hide();
    $('#irs-table-pic').css({'width':$('#my_table').width()});
    app.page.dataTable = function() {
        $p.plugin.dataTable("#my_table", {
            "dataSource": model.getDataList,
            "sClass": "table-fixed",
            "aaSorting": [
                [2, "desc"]
            ],
            "fnInitComplete":function(){
                //drawTable('#my_table','solid_line','irs-table-pic',{'y1name':'浏览量(PV)','y2n
                // ame':'独立访问者(UV)','y3name':'访问次数(VV)'});
                //drawTable('#my_table','solid_line',0,{'y':'2,3,4'},'irs-table-pic','.irs-table-change-pic');//实心线形图
                //drawTable('#my_table','horizontal_bar',1,{'y':'2'},'irs-table-pic','.irs-table-change-pic');//横向柱状图
                //drawTable('#my_table','single_bar',1,{'y':'2'},'irs-table-pic','.irs-table-change-pic');//纵向柱状图
                drawTable('#my_table','2Dpie',1,{'y':'2'},'irs-table-pic','.irs-table-change-pic');//2D分状饼图
            },
            "fnParams": function() {
                return {};
            },
            "aoColumns": [{
                "bSortable": false,
                "mData": "keywords",
                "sTitle": "关键字",
                mRender: function(data, type, full) {
                    return '<span title="' + full.keywords + '">' + full.keywords + '</span>';
                }
            }, {
                "bSortable": false,
                "sTitle": "搜索引擎",
                "mData": "searchEngine"
            }, {
                "sClass": "t-a-r",
                "sTitle": "浏览量(PV)",
                "mData": "pageViews"
            }, {
                "sClass": "t-a-r",
                "sTitle": "独立访问者(UV)",
                "mData": "uniqueVisitors"
            }, {
                "sClass": "t-a-r",
                "sTitle": "访问次数(VV)",
                "mData": "visitViews"
            }]
        });
    };


    app.page.dataTableExtend = function() {

        var oTable = $p.plugin.dataTable("#my_table", {
            "dataSource": model.getDataList,
            "sClass": "table-fixed",
            "bExtendDetails": true,
            "aaSorting": [
                [2, "desc"]
            ],
            "fnParams": function() {
                return {};
            },
            "fnExtendDetails": function(oTable, nTr, fnCallback) {

                var aData = oTable.fnGetData(nTr);
                var sOut = '<table class="table"><tbody>';
                sOut += '<tr><td class="w50"></td><td >' + aData.keywords + '-细分</td><td class="w150">' + aData.searchEngine + '</td><td class="w150 t-a-r ">123</td><td class="w150 t-a-r ">456</td><td class="w150 t-a-r ">212</td></tr>';
                sOut += '<tr><td class="w50"></td><td >' + aData.keywords + '-细分</td><td class="w150">' + aData.searchEngine + '</td><td class="w150 t-a-r ">123</td><td class="w150 t-a-r ">456</td><td class="w150 t-a-r ">212</td></tr>';
                sOut += '<tr><td class="w50"></td><td >' + aData.keywords + '-细分</td><td class="w150">' + aData.searchEngine + '</td><td class="w150 t-a-r ">123</td><td class="w150 t-a-r ">456</td><td class="w150 t-a-r ">212</td></tr>';
                sOut += '</tbody></table>';
                
                fnCallback(sOut);
            },
            "aoColumns": [{
                "bSortable": false,
                "mData": "keywords",
                "sTitle": "关键字",
                mRender: function(data, type, full) {
                    return '<span title="' + full.keywords + '">' + full.keywords + '</span>';
                }
            }, {
                "bSortable": false,
                "sTitle": "搜索引擎",
                "sClass": "w150",
                "mData": "searchEngine"
            }, {
                "sClass": "t-a-r w150",
                "sTitle": "浏览量(PV)",
                "mData": "pageViews"
            }, {
                "sClass": "t-a-r w150",
                "sTitle": "独立访问者(UV)",
                "mData": "uniqueVisitors"
            }, {
                "sClass": "t-a-r w150",
                "sTitle": "访问次数(VV)",
                "mData": "visitViews"
            }]
        });
    };


    module.exports = app;

});