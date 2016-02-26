/**
 * Created with JetBrains PhpStorm.
 * User: david
 * Date: 16-2-24
 * Time: 下午4:52
 * To change this template use File | Settings | File Templates.
 */
define(function(require, exports, module) {

    require('./jsoneditor.css');
    require('./jsoneditor');
    require('./asset/ace/ace');
    require('./asset/jsonlint/jsonlint');
    var g = window;
    function jsJsonEditor(seletor, options) {
        getDataList(seletor, options);
        function getDataList(seletor, options){
            options.dataSource(options,function(dataSource){
                //格式化模板数据
                var abc = formatDataSource(dataSource);
                var basicJson = dataSource.basic;
                var container = document.getElementById(seletor);
                options.showTab=function(jsonOb){
                    console.log(jsonOb);
                    var jsonData = jsonOb.editor.get();
                    console.log(jsonData);
                    $("#jsonEditorIDShowTab").html("aaa");
                    alert("showTab");
                };
                console.log(abc);
                var editor = new JSONEditor(container, options,abc);
                editor.setMode("tree");
                editor.expandAll();
            });
        };
    }
    //格式化模板数据
    function formatDataSource(dataSource){
        var rsTextShowJason;
        rsTextShowJason = formatJson(dataSource.basic);
        return rsTextShowJason;
    }
    function formatJson(jsonData){
        var rsJson={};
        $(jsonData).each(function(e){
            var fname = this.fieldsName;
            var ftype = this.type;
            switch(this.type){
                case 'String':
                    rsJson[fname] = ftype;
                    break;
                case 'Article':
                    rsJson[fname] = {"type":"Article","info":"","value":""};
                    break;
                case 'File':
                    rsJson[fname] = {"type":"Media","info":"",value:""};
                    break;
                case 'Object':
                    rsJson[fname] = this.default;
                    break;
            };
            //console.log(this);
        });
        return rsJson;
    }
    g[PagurianAlias].plugin.jsonEditor = function(seletor, options) {
        var jsonEditor = new jsJsonEditor(seletor, options);
        return jsonEditor;
    }

});