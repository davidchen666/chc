define(function(require, exports, module) {
    var service = pagurian.lib.service;
    var api = pagurian.lib.api;
    function Model() {
        //获取数据列表
        this.getDataList = function(params, callback) {
            service.get(api.tableList, params, callback);
        };
        this.getExcelData = api.getExcelData;

    }
    module.exports = new Model();
});