/**
 * Created with JetBrains PhpStorm.
 * User: david
 * Date: 15-5-29
 * Time: 上午10:37
 * To change this template use File | Settings | File Templates.
 */
define(function(require, exports, module) {
    var service = pagurian.lib.service;
    var api = pagurian.lib.api;
    function Model() {
        //获取数据列表
        this.getDataList = function(params, callback) {
            service.get(api.treeList, params, callback);
        };
    }
    module.exports = new Model();
});