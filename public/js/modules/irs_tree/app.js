/**
 * Created with JetBrains PhpStorm.
 * User: david
 * Date: 15-5-29
 * Time: 上午10:14
 * To change this template use File | Settings | File Templates.
 */
define(function(require, exports, module) {

    var app = require('../../lib/app');
    var model = require('./model');
    require('../../plugins/jstree/module');
    app.page.index = function() {
        var params="";
        var treeData = model.getDataList;
        $p.plugin.irsTree($("#jsTree"),params);
    };
    module.exports = app;

});