/*
 * @fileOverview app基础模块，所有的app模块继承该模块
 * @version 0.1
 *
 */
define(function(require, exports, module) {
    require('../plugins/bootstrap/js/bootstrap');
    require('../plugins/uniform/jquery.uniform');
    require('../plugins/jquery-cookie/jquery-cookie');
    require('../plugins/jquery-json/2.4/jquery-json');
    require('../plugins/moment/moment');
    require('../plugins/jquery-blockUI/jquery.blockUI');//loading插件

    require('./core/tpl');

    require('./com/form');
    require('./com/alert');
    require('./com/dialog');
    require('./com/select');

    require('./tool/url');

    var layout = require('./core/layout');
    var service = require('./service');

    var api = require('../conf/api');
    var locale = require('../conf/locale.zh-cn');

    pagurian.locale = locale;
    pagurian.lib = {
        service: service,
        api: api
    }

    var app = {
        page: {},
        events: {},
        init: function() {

            //初始化页面布局
            layout.init();
            layout.custom();
            layout.resize(function() {
                if (app.events.resize && "function" === typeof app.events.resize) {
                    app.events.resize();
                }
            });
            
        }
    };

    app.init();

    module.exports = app;

});