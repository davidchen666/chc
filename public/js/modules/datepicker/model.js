/**
 * Created by hyanwang on 6/9/15.
 */
define(function (require, exports, module) {
    var service = pagurian.lib.service;
    var api = pagurian.lib.api;

    function Model() {
        this.getYearList = function (params, callback) {
            service.get(api.datelist, params, callback);
        };
    };

    module.exports = new Model();
});