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
            yearlist: model.getYearList,
            multichoice: false
        }, function (data) {
            //console.log(data);
            $("#select_week").val(data.start_day + "~" + data.end_day);
        });
    };
    module.exports = app;
});
