/**
 * Created with JetBrains PhpStorm.
 * User: david
 * Date: 15-5-29
 * Time: 上午10:48
 * To change this template use File | Settings | File Templates.
 */
define(function(require, exports, module) {
    require('./dist/jstree.min');

    var g = window;
    function irsJsTree(seletor, options){

        var themeCss = './dist/themes/'+options.themes+'/style.css';

        require.async(themeCss);
        getDataList(seletor, options);
//        seletor.on("changed.jstree", function (e, data) {
//            if(data.selected.length) {
//                //alert('点击: ' + data.instance.get_node(data.selected[0]).text);
//            }
//        })
//            .jstree({
//                'core' : {
//                    'data' : [
//                        { "text" : "媒体", "children" : [
//                            { "text" : "新浪","id":89, "children" : [
//                                { "text" : "房产频道","id":1189 },
//                                { "text" : "汽车频道","id":1187 }
//                            ]},
//                            { "text" : "网易","id":90 }
//                        ]}
//                    ]
//                },
//                "plugins" : [ "checkbox"]
//            });

    }
    function getDataList(seletor, options){
        options.dataSource(options,function(dataSource){
            seletor.on("changed.jstree", function (e, data) {
                if(data.selected.length) {
                    //alert('点击: ' + data.instance.get_node(data.selected[0]).text);
                }
            })
                .jstree({
                    'core' : {
                        'data' : dataSource
                    },
                    "plugins" : options.plugins
                });
            seletor.jstree("set_theme",options.themes);
        });
    }
    g[PagurianAlias].plugin.irsTree = function(seletor, options) {
        var table = new irsJsTree(seletor, options);
        return table;
    }
});
