define(function(require, exports, module) {

    var app = require('../../lib/app');

    require('../../plugins/daterangepicker/module');
    require('../../plugins/datepicker/module');

    app.page.daterange = function() {
        var module = require('./model');
        $p.plugin.dateRangePicker("#my_picker", {
            textForamt: "YYYY年MM月DD日",
            defaultDate: [moment().subtract('days', 6), moment()], //默认最近一周
            yearlist:module.getYearList, //获取时间区间
            multichoice: false
        }, function(start, end) {
            $p.com.alert("开始时间：" + start + " , 结束时间：" + end);
        });
    };

    app.page.date = function() {
        $p.plugin.datePicker('#my_picker', {
            format: 'YYYY-MM-DD',
            textFormat: "YYYY年MM月DD日",
            startView:0,
            defaultDate: moment(),
        }, function(date) {
            $p.com.alert(date.format_date);
            console.log(date);
        });
        $p.plugin.datePicker('#single_montn', {
            format:"YYYY-MM-DD",
            textFormat: "YYYY年MM月",
            startView:0,
            minViewMode:'months',
            defaultDate: moment(),
        }, function(date) {
            $p.com.alert(date.format_date);
            console.log(date);
        });
    };

    module.exports = app;

});