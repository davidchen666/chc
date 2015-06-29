/**
 * Created by hyanwang on 5/19/15.
 */
"use strict";
define(function (require, exports, module) {
    var app = require('../../lib/app');
    var model = require('./model');
    require('../../plugins/weekselect/module');
    app.page.weekselect = function () {
        $p.plugin.weekselect("#select_week", {
            yearlist: model.getYearList, //年份限制
            multichoice: false, //是否多选
            //limit_mulitichoice: 2, //多选限制
            //merge_data: true //是否日期对象数组，编程为
        }, function (data) {

            if (Array.isArray(data)) {
                if (data.merge_data()) {
                    console.log(data);
                    $("#select_week").val(data.start_day + "~" + data.end_day);
                } else {
                    //对于不整合日期对象数组的时候，可以在下面进行操作。
                    data.forEach(function (ele, index) {
                        console.log("序列号：" + index + ", 开始日期:" + ele.start_day + ", 结束日期:" + ele.end_day);
                    });
                }
            } else {
                $("#select_week").val(data.start_day + "~" + data.end_day);
            }

        });

    };
    module.exports = app;
});
