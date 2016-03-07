/**
 * Created with JetBrains PhpStorm.
 * User: david
 * Date: 15-7-7
 * Time: 上午10:45
 * To change this template use File | Settings | File Templates.
 */
define(function(require, exports, module) {
    require('./jquery.uploadify');
    var g = window;

    function irsUpload(seletor, options){
        var themeCss = './uploadify.css';
        require.async(themeCss);
        seletor.uploadify(options);
    }
    g[PagurianAlias].plugin.irsUpload = function(seletor, options) {
        var upload = new irsUpload(seletor, options);
        return upload;
    }
});