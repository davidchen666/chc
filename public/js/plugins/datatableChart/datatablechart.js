//图标数据优化
function subValue(s) {
    s = s.substring(0, s.length - 1);
    return s;
}
//只能获取字段数据
function drawTitle(s) {
    var shtml = s.html();
    if (shtml == '') {
        return '';
    } else {

        if (shtml.indexOf('<') >= 0) {
            return s.find('.drawTitle').attr('title');
        } else {
            return s.html();
        }
    }
}


//生成图表
//table：生成表格的DIV, graph：图标类型, xname：图表X轴在表格的的几列（从0开始）, yname图表数值在表格的的哪几列（从0开始）,div：图表所显示的DIV,change：切换图表的按钮DIV
function drawTable(table, graph, xname, yname, div, change) {
//图标切换
    $(document).on('click', change, function (e) {
        if ($(table).is(":hidden")) {
            $('#' + div).hide(500);
            $(change).html('切换表格');
            $(table).show(500);
            $(table + '_wrapper').find('.bottom').show();

        } else {
            $('#' + div).show(500);
            $(change).html('切换图表');
            $(table).hide(500);
            $(table + '_wrapper').find('.bottom').hide();
        }

    });
    if (table == '') {
        alert('缺少数据表ID');
    }
    if (graph == '') {
        alert('缺少图表类型');
    }

    if (yname == '') {
        alert('缺少图表参数');
    }
    //获取数值条数
    var yLen = (yname.y.length + 1) / 2;
    var yVlaue = yname.y.split(',');
    var tablehtml = $(table).html();
    var yVlenArr = [];
    var yTitleArr = [];
    var x = '';
    var i = 0;
    for (var l = 0; l < yLen; l++) {
        yVlenArr[l] = '';
        yTitleArr[l] = [];
        yTitleArr[l] = $(table).find('th').eq(yVlaue[l]).html();
    }
    //console.log(table);
    $(table).find('tr').each(function () {
        if (i != 0) {

            x += '"' + drawTitle($(this).find('td').eq(xname)) + '",';
            for (var l = 0; l < yLen; l++) {
                yVlenArr[l] += drawTitle($(this).find('td').eq(yVlaue[l])) + ',';

            }

        }
        i += 1;
    })
    var ydata = '';
    for (var l = 0; l < yLen; l++) {
        ydata += '{"data":[' + subValue(yVlenArr[l]) + '],"name":"' + yTitleArr[l] + '"},';

    }
    if(graph=='solid_line'){
        var data = '{"x":{"data":[' + subValue(x) + '],"name":"Months"},"y":[' + subValue(ydata) + ']}'
    }
    if(graph=='2Dpie'){
        var data = '{"x":{"data":[' + subValue(x) + '],"name":"Months"},"y":[' + subValue(ydata) + ']}'
    }
    if(graph=='single_bar'){
        var data = '{"x":{"data":[' + subValue(x) + '],"name":"Months"},"y":[' + subValue(ydata) + ']}'
    }
    if(graph=='horizontal_bar'){
        var data = '{"x":{"data":[' + subValue(x) + '],"name":"Months"},"y":' + subValue(ydata) + '}'
    }

//console.log(data);
    //var data='{"x":{"data":["8月1号","8月2号","8月3号","8月4号","8月5号","8月6号","8月7号","8月8号","8月9号","8月10号","8月11号","8月12号","8月13号","8月14号","8月15号","8月16号"],"name":"Months"},"y":[{"data":[800,750,580,440,430,420,435,780,700,440,410,380,370,390,700,670],"name":"电视剧"},{"data":[600,630,620,630,650,640,630,620,610,580,590,585,590,595,600,640],"name":"动漫"},{"data":[370,380,300,280,290,300,310,320,330,340,320,330,340,350,360,370],"name":"电影"},{"data":[270,280,200,280,290,200,210,220,230,240,220,230,240,250,260,270],"name":"娱乐"},{"data":[170,180,100,180,190,100,110,120,130,140,120,130,140,150,160,170],"name":"少儿"},{"data":[72,83,83,83,73,91,72,83,71,94,79,  108,93,68,61,62],"name":"片花"},{"data":[82,73,93,73,83,81,92,73,91,84,109,88,83,78,71,92],"name":"原创"},{"data":[70,75,80,75,81,83,82,83,81,84,79,78,80,81,73,74],"name":"搞笑"},{"data":[10,25,20,35,21,23,42,23,21,24,19,18,20,21,13,14],"name":"音乐"}],"big_title":"爱奇艺-PC端-频道播放人数小时数据排行数据","small_title":"2014-08-23——2014.09.22（单位：万人）","source":"Source:iVideoTacker媒体实时数据，基于对视频播放器的加码监测获得。数据渠道：PC","sourceL":"©2014.9iResearchInc","sourceR":"www.iresearch.com.cn",}';
    graph_ajax({data: data, graph: graph, type: 'data', params: {'type': 2}}, $('#' + div));

}