/**
 * Created with JetBrains PhpStorm.
 * User: david
 * Date: 16-2-24
 * Time: 下午3:35
 * To change this template use File | Settings | File Templates.
 */
define(function(require, exports, module) {
    var service = pagurian.lib.service;
    var api = pagurian.lib.api;
    function Model() {
        //获取数据列表
        this.getTemplate = function(params, callback) {
            service.get(api.jsonEditorTemplate, params, callback);
        };
    }
    module.exports = new Model();
});