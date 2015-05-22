define(function(require, exports, module) {

    var app = require('../../lib/app');
    require('../../plugins/daterangepicker/module');

    require('../../plugins/datepicker/module');

    app.page.daterange = function() {

        $p.plugin.dateRangePicker("#my_picker", {
            textForamt: "YYYY年MM月DD日",
            defaultDate: [moment().subtract('days', 6), moment()], //默认最近一周
        }, function(start, end) {
            $p.plugin.alert("开始时间：" + start + " , 结束时间：" + end);
        });

    };

    app.page.date = function() {

        $p.plugin.datePicker('#my_picker', {
            textFormat: "YYYY年MM月DD日",
            defaultDate: moment(),
        }, function(date) {
            $p.plugin.alert(date);
        });
    };


    module.exports = app;

});