/**
 * Created with JetBrains PhpStorm.
 * User: david
 * Date: 16-2-24
 * Time: 下午3:35
 * To change this template use File | Settings | File Templates.
 */
define(function(require, exports, module) {

    var app = require('../../lib/app');
    var model = require('./model');

    require('../../plugins/jsoneditor/module');
    app.page.index = function() {
        var templateData = model.getTemplate;
        var params = {
            dataSource: templateData,
            mode: 'tree',
            modes: ['code', 'form', 'text', 'tree', 'view'], // allowed modes
            onError: function (err) {
                alert(err.toString());
            },
            onChange: function () {
            }

        };
        var jsonEditor = $p.plugin.jsonEditor("jsonEditorID",params);

    };
    module.exports = app;

});