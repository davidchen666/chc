/**
 * Created with JetBrains PhpStorm.
 * User: david
 * Date: 15-3-23
 * Time: 上午10:36
 * To change this template use File | Settings | File Templates.
 */

define(function(require, exports, module) {
    var g = window;
    require('./js/fixTables');
    var irs_charts = require('http://180.169.19.166/graph_html5/js/charts.js');
    require('./css/superTables.css');
    function irsDataTables(seletor, options) {

        getDataList(seletor, options)
        //分页
        $(document).on('click','.irs-table-page-no a',function(e){
            e.preventDefault();
            if(!this.href) return false;
            var url = $(this).attr("href");
            options.data_search_params.page=url.match(/page=.{1,10}/)[0].substr(5);
            $('#irs-table-pic').remove();
            $('#datainfo').show();
            getDataList(seletor, options);
        });
        //排序
        $(document).on('click','._sort',function(e){
            if($(this).attr("sortinfo")==='desc' || $(this).attr("sortinfo")==='both'){
                options.data_search_params.sort_info='asc';
            }else{
                options.data_search_params.sort_info='desc';
            }
            options.data_search_params.sort_key=$(this).attr("sortkey");
            getDataList(seletor, options);
        });
        //搜索
        $(document).keypress(function(kp){
            if(kp.keyCode == 13 ){
                options.data_search_params.keyword = $('.irs-table-form-control').val();
                getDataList(seletor, options);
            };
        });
        $(document).on('click','.irs-table-search-icon',function(e){
            options.data_search_params.keyword = $('.irs-table-form-control').val();
            getDataList(seletor, options);
        });
        //图标切换
        $(document).on('click','.irs-table-change-pic',function(e){
            if($('#datainfo').is(":hidden")){
                $('#irs-table-pic').hide(500);
                $('#datainfo').show(500);
            }
            else{
                $('#irs-table-pic').show(500);
                $('#datainfo').hide(500);
            }
        });
        $(document).on('click','#exportToExcel',function(){
            $("#exportExcel").submit();
            var miao = $("#table_export_excel_loading_time").val()*20/2;
            console.log(miao);
            $.blockUI({ message: '<img src="../resources/img/loading2.gif" />&nbsp;请稍等...',
                timeout: miao, //2 秒后消失
                css: {
                    left:'50%',
                    width:'100px'
                }
            });
        });
    }
    function getDataList(seletor, options){

        loading_tab($(seletor));
        options.dataSource(options.data_search_params,function(data){
            var table = data.html;
            var page = data.page;
            //这里增加表格分页和导出相关功能
            if(data.total>0){


                options.data = { table: table, pages: -1, pageindex: 1, pagesize: 50 };
                //设置了图表切换
                if(options.datapic){
                    //报表数据部分初始化
                    $("#exportPic").remove();
                    var exportPicForm ='<form action="http://180.169.19.166/graph_api/chart.php" method="post" name="exportPic" id="exportPic">' +
                        '<input type="hidden" name="charname" />' +
                        '<input type="hidden" name="chartype" value="1"/>' +
                        '<input type="hidden" name="dis" value="1"/>' +
                        '<input type="hidden" name="h5charttype" value=""/>' +
                        '<input type="hidden" name="data" /></form>';
                    $(seletor).after(exportPicForm);

                    //切换图表
                    $(".irs-table-change-pic-div").remove();
                    $("#irs-table-pic").remove();
                    $(seletor).before('<div class="row irs-table-change-pic-div"><div class="col-md-12"><button class="btn btn-default tooltips irs-table-change-pic" data-placement="bottom" data-original-title="点击切换图表">切换图表</button></div></div>');
                    $(seletor).before('<div id="irs-table-pic"></div>');
                }
                //导出数据
                $("#exportExcel").remove();
                var exportExcelForm ="<form action='"+options.exportExcel+"' method='post' name='exportExcel' id='exportExcel'>" +
                    '<input type="hidden" name="pr" id="pr" value="'+data.exec+'"/>' +
                    "<input type='hidden' name='keys' id='keys' value='"+data.keys+"'/>" +
                    "<input type='hidden' name='header' id='table_header'/>" +
                    "<input type='hidden' name='data' id='table_data'/>" +
                    "<input type='hidden' name='loading_time' id='table_export_excel_loading_time' value='"+data.total+"'/>" +
                    "<input type='hidden' name='hide_media' id='table_hide_media' value='0'/></form>";
                $(seletor).after(exportExcelForm);

                $(seletor).fixTable(options);
                //分页,搜索,导出初始话
                $('.irs-table-form-control').val(options.data_search_params.keyword);
                $(".irs-table-page").remove();
                $(seletor).after("<div class='irs-table-page row'></div>");
                $('.irs-table-page').append('<div class="col-md-3 irs-table-copy"><i class="fa fa-copy "></i>&nbsp;<a href="#" class="irs-copy-data">复制当前数据</a>' +
                    '&nbsp;&nbsp;<i class="fa fa-share-square-o"></i>&nbsp;<a href="#" id="exportToExcel">导出全部数据</a></div>');
                $('.irs-table-page').append('<div class="irs-table-input-group irs-table-input-sm input-medium col-md-3">' +
                    '<input type="email" class="form-control irs-table-form-control" placeholder="查询关键字">'+
                    '<span class="input-group-addon irs-table-input-group-addon">'+
                    '<i class="fa fa-search irs-table-search-icon"></i>'+
                    '</span></div>');
                $('.irs-table-page').append('<div class="col-md-6 irs-table-page-no">'+page+'</div>');
                $('.irs-table-form-control').val(options.data_search_params.keyword);


            }
            else {
                nodata_tab_two($(seletor));
            }
        });
    }
    //读取数据
    function loading_tab(obj){
        obj.html('<div class="irs-table-loading"><img src="../plugins/fixTables/img/loading.gif" border="0" /></div>');
    }
    //查询无数据
    function nodata_tab(obj){
        obj.html("<div class='irs-table-no-data'><img src='../plugins/fixTables/img/icon2.png'><p>抱歉！没有找到符合条件的数据，请<a href='?m=index&a=condition'>重新筛选</a></p></div>");
    }
    function nodata_tab_two(obj){
        obj.html("<div class='irs-table-no-data'><img src='../plugins/fixTables/img/icon.png'><p>抱歉！没有找到符合条件的数据，请重新输入关键字</p></div>");
    }
    g[PagurianAlias].plugin.irsDataTable = function(seletor, options) {
        var table = new irsDataTables(seletor, options);
        return table;
    }

});