/**
 * Created with JetBrains PhpStorm.
 * User: david
 * Date: 15-5-29
 * Time: 上午10:14
 * To change this template use File | Settings | File Templates.
 */
define(function(require, exports, module) {
    var app = require('../../lib/app');
    require('../../plugins/uploadify/module');
    var service = pagurian.lib.service;
    var api = pagurian.lib.api;
    app.page.index = function() {
        var params = {
            'buttonText':'上传Excel',
            'swf'      : '../../js/plugins/uploadify/uploadify.swf',
            'uploader' : '../../../?m=demo&a=uploadFile',
            onUploadSuccess : function(file,data,response){
                service.get(api.importExcel, {"filename":data}, function(){

                });
            }
        };
        $p.plugin.irsUpload($("#file_upload"),params);
    };
    module.exports = app;
});