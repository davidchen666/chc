(function ($) {
    $.fn.fixTable = function (options) {

        var that = this, ispostback = false;
        var opts = $.extend(options.data, $.fn.fixTable.defaults, options);
        var bd = {
            binded: function () {
                if (ispostback) bd.loading('正在加载数据...');
                setTimeout(function () {
                    this.start = new Date();
                    var table = $("<div></div>").html(opts.table); //fast
                    //var table = $(opts.table);
                    var thead = table.find('thead');
                    var theadtr = $('tr', thead);
                    var tbody = table.find('tbody');

                    //alert("Finished..." + ((new Date()) - this.start) + "ms.");
                    if (opts.showCol) {
                        if (opts.showCol.length > 0) {
                            j = thead.find('th').length
                            $('tr', table).each(function (i, o) {
                                for (i = 0; i < j; i++) {
                                    if ($.inArray(i, opts.showCol) == -1) {
                                        $(o).children(':eq(' + i + ')').remove();
                                    }
                                }
                            });
                        }
                    }
                    var tableId = 'fixTable_' + Math.round(Math.random() * 10000);
                    var table2 = $('<table id="' + tableId + '" class="demoTable"><thead></thead><tbody></tbody></table>');
                    for (i = 0; i < theadtr.length; i++) {
                        table2.find('thead').append(theadtr[i]);
                    }

                    if (opts.issort && ispostback) {
                        if (opts.sortCol > 0)
                            tbody = sorttable.getSortable(tbody, opts.sortCol, opts.sortOrder);
                    }
                    if (opts.isfilter) {
                        if (opts.filter != '')
                            tbody = filtertable.getFilterTable(tbody, opts.filter);
                    }

                    if (opts.ispage) {
                        var tbodytr = $('tr', tbody);
                        var len = tbodytr.length;
                        opts.totcount = len;
                        var start = (opts.pageindex - 1) * opts.pagesize;
                        var end = start + opts.pagesize;
                        for (i = start; i < end && i < len; i++) {
                            //tbodytr[i].cells[0].innerText = i + 1;
                            //$('td:first', tbodytr[i]).text(i + 1);
                            table2.find('tbody').append(tbodytr[i]);
                        }

                        var theadsize = theadtr.find('th').length;
                        if (theadsize <= 6) {
                            var maxsize = 11;
                            table2.find('tr').each(function (i) {
                                if (i == 0)
                                    $(this).append('<th width="' + ((maxsize - theadsize) * 70) + '"></th>');
                                else
                                    $(this).append('<td>&nbsp;</td>');
                            });
                        }
                    }
                    that.empty().html(table2);
                    bd.table = table2;
                    opts.table = table2;
                    bd.getTablePic(table2,'aa');
                    try {
                        var mySt = new superTable(tableId, opts);
                    }
                    catch (e) { this.callbackFunc = opts.onFinish || null; this.callbackFunc && this.callbackFunc(); }
                    bd.pager();
                }, 10);
            },
            getTablePic:function(table,h5type){
                var tb = $(table), curTbl = tb[0];
                bd.tableColumnBar(curTbl);

            },
            //竖向百分比柱状图
            tableColumnBar:function (curTbl){
                var startData = parseInt(options.fixedCols || "0");
                var arrayX = new Array();
                var startlie=startData+1;
                var startheader = startData+1;
                var arrayY = new Array();
                var lietotal = curTbl.rows[0].cells.length;
                var howlong  = 11;
                curTbl.rows.length<11?howlong=curTbl.rows.length:howlong  = 11;
                var arr1 = new Array();
                for(var j=0;j<lietotal;j++){
                    arr1[j]=new Array();
                    for (var i=0;i<howlong;i++){
                        if(j==0){
                            if(startData===1){
                                arr1[j][i]= $.trim(curTbl.rows[i].cells[j].innerText);
                                arr1[j][i]=arr1[j][i].substr(0,6);
                                arr1[j][i]+='...';
                            }
                            else {
                                arr1[j][i]=$.trim(curTbl.rows[i].cells[j].innerText)+$.trim(curTbl.rows[i].cells[j+1].innerText);
                                arr1[j][i]=arr1[j][i].substr(0,6);
                                arr1[j][i]+='...';
                            }
                        }else{
                            if(i===0){
                                arr1[j][i]= $.trim(curTbl.rows[i].cells[j].innerText);
                            }
                            else{
                                arr1[j][i]=parseFloat(curTbl.rows[i].cells[j].innerText);
                            }

                        }

                    }
                }
                arrayX = arr1[0].slice(1,arr1[0].length);
                for(var i=startheader,x=0;i<arr1.length;i++,x++){
                    //var trdata = arr1[i];
                    var nowname=$.trim(arr1[i].slice(0,1));

                    var trdatafloat = arr1[i].slice(1,arr1[i].length);
                    arrayY[x]={"data":trdatafloat,"name":nowname};
                }
                var unit_value = '%';
                var unit_title = '百分比';
                var charname_value=7;
                var exJson ={
                    "x":
                    {"data":arrayX,
                        "name":"Labels"
                    },
                    "y": arrayY ,

                    "big_title":"IADM-"+$("#showDimensionh4").text()+"-"+$(".channel").text(),

                    "small_title":opts.data_search_params.start_time+"--"+opts.data_search_params.end_time+"（单位："+unit_title+"）",

                    "source":"Source：根据100万中国网民上网行为数据，推及获得广告曝光占比数据",
                    //       "sourceL": "?2015.4 iResearch Inc",
                    "sourceR": "www.iresearch.com.cn",
                    "setParam":[{
                        "unit":unit_value
                    }]
                };
                $("#exportPic input[name='charname']").val(charname_value);
                var exJsonString=JSON.stringify(exJson);
                $("#exportPic input[name='data']").val(exJsonString);
                $("#exportPic input[name='h5charttype']").val("mcolumn_bar");
                //调用远程方法显示图表格
                graph_ajax({'data':exJsonString,'url':null,'graph':"mcolumn_bar",'type':'data'},$('#irs-table-pic'));
                $('#irs-table-pic').hide();
            },
            sorted: function (th, i) {
                var img = $(th).find('img').attr('src');
                opts.sortCol = i;
                opts.sortOrder = (img != undefined && img != null && img.indexOf('desc') >= 0) ? 'asc' : 'desc';
                bd.binded();
            },
            pager: function () {
                if (opts.pageindex) {
                    var sPage = $('.pager');
                    $('a', sPage).unbind('click').click(function () {

                        bd.pagered($(this).attr('class'));
                        return false;
                    });

                    pagecount = opts.pages == -1 ? Math.ceil(opts.totcount / opts.pagesize) : opts.pages;

                    var selecthtml = '';
                    for (var i = 1; i <= pagecount; i++) {
                        if (opts.pageindex == i) {
                            selecthtml += ' <option value=' + i + ' selected=selected>' + i.toString() + '</option>';
                        }
                        else {
                            selecthtml += ' <option value=' + i + '>' + i.toString() + '</option>';
                        }
                    }
                    selecthtml = "&nbsp;<select  id=\"sel_page\" >" + selecthtml + "</select>&nbsp;";

                    //$('.pInfo', sPage).html(opts.pageindex + '/' + pagecount);
                    $('.pInfo', sPage).html(selecthtml + '/' + pagecount);

                    //alert(opts.pageindex);
                    $("#sel_page").unbind('change').change(function () {

                        if ($(this).val() == opts.pageindex || $(this).val() == undefined) {
                            return false;
                        }

                        opts.pageindex = parseInt($(this).val());
                        bd.binded();

                        return false;
                    });

                }
            },
            pagered: function (type) {

                switch (type) {

                    case 'pFirst': opts.newp = 1; break;
                    case 'pPrev': if (opts.pageindex > 1) opts.newp = opts.pageindex - 1; break;
                    case 'pNext': if (opts.pageindex < pagecount) opts.newp = opts.pageindex + 1; break;
                    case 'pLast': opts.newp = pagecount; break;

                }

                if (opts.newp == opts.pageindex || opts.newp == undefined) {
                    return false;
                }
                opts.pageindex = opts.newp;
                bd.binded();
            },
            search: function () {
                a = $('.search'), b = a.find('.filter'), c = a.find(':button');
                c.unbind('click').click(function () {
                    opts.pageindex = 1;
                    opts.filter = $(this).prev('.filter').val();
                    bd.binded();
                    return false;
                });
            },
            copydata: function () {
                $(document).on('click','.irs-copy-data',function(e){
                    //若是开启了图表，切换为图表时下载图片
                    if(opts.datapic && $('#datainfo').is(":hidden")){
                        $("#exportPic").submit();
                        return;
                    }
                    try {
                        var tb = $(bd.table), curTbl = tb[0], outStr = '', rowSpan = 0;
                        for (var j = 0; j < curTbl.rows.length; j++) {
                            for (var i = 0; i < curTbl.rows[j].cells.length; i++) {
                                if (i == 0 && rowSpan > 0) {
                                    outStr += " \t";
                                    rowSpan -= 1;
                                }
                                //增加斜线判断拆分单元格
                                if(curTbl.rows[j].cells[i].innerText.indexOf("\/")>0){
                                    var strArr= curTbl.rows[j].cells[i].innerText.split("\/");
                                    for(var x=0;x<strArr.length;x++){
                                        outStr += strArr[x] + "\t";
                                    }
                                }
                                else {
                                    outStr += curTbl.rows[j].cells[i].innerText.replace(/(\r)?\n/g, '') + "\t";
                                }
                                if (curTbl.rows[j].cells[i].colSpan > 1) {
                                    for (var k = 0; k < curTbl.rows[j].cells[i].colSpan - 1; k++) {
                                        outStr += " \t";
                                    }
                                }
                                if (i == 0) {
                                    if (rowSpan == 0 && curTbl.rows[j].cells[i].rowSpan > 1) {
                                        rowSpan = curTbl.rows[j].cells[i].rowSpan - 1;
                                    }
                                }
                            }
                            outStr += "\r\n";
                        }
                        if (window.clipboardData) {
                            window.clipboardData.setData("Text", outStr);
                        } else {
                            var _win = window.open("about:blank", _win, "width=400, height=300");
                            _win.document.write("<body><textarea id='txtcopy' name='txtcopy' style='width: 100%; height=100%;' rows='10'></textarea></body>");
                            _win.document.getElementById('txtcopy').value = outStr;
                        }
                        alert("数据已成功复制到剪贴板！");
                    }
                    catch (e) {
                        alert("复制数据出现错误！");
                    }
                    return false;
                });
            },
            loading: function (s) {
                var sMask = $('.sMask');
                sMask.html('正在加载数据...');

                sMask.css({ display: 'block', width: that.width(), height: that.height() });
            }
        };

        var sorttable = {
            getSortable: function (table, col, sort) {
                sorttable.DATE_RE = /^(\d\d?)[\/\.-](\d\d?)[\/\.-]((\d\d)?\d\d)$/;
                row_array = [];
                var tb = $('<tbody></tbody>');

                rows = table[0].rows;
                for (var j = 0; j < rows.length; j++) {
                    row_array[row_array.length] = [sorttable.getInnerText(rows[j].cells[col]), rows[j]];
                }
                row_array.sort(sorttable.guessType(table, col));
                if (sort == 'desc') {
                    row_array.reverse();
                }
                for (var j = 0; j < row_array.length; j++) {
                    tb.append(row_array[j][1]);
                }
                /*
                delete row_array;
                if (sort == 'desc') {
                newtr = $('tr', tb);
                newrows = [];
                for (var i = 0; i < newtr.length; i++) {
                newrows[newrows.length] = newtr[i];
                }
                for (var i = newrows.length - 1; i >= 0; i--) {
                tb.append(newrows[i]);
                }
                delete newrows;
                }*/
                return tb;
            },
            guessType: function (table, column) {
                sortfn = sorttable.sort_alpha;
                for (var i = 0; i < table[0].rows.length; i++) {
                    text = sorttable.getInnerText(table[0].rows[i].cells[column]);
                    if (text != '') {
                        if (text.match(/^-?[??[\d,.]+%?$/)) {
                            return sorttable.sort_numeric;
                        }
                        possdate = text.match(sorttable.DATE_RE)
                        if (possdate) {
                            first = parseInt(possdate[1]);
                            second = parseInt(possdate[2]);
                            if (first > 12) {
                                return sorttable.sort_ddmm;
                            } else if (second > 12) {
                                return sorttable.sort_mmdd;
                            } else {
                                sortfn = sorttable.sort_ddmm;
                            }
                        }
                    }
                }
                return sortfn;
            },

            getInnerText: function (node) {
                return $(node).text().replace(/^\s+|\s+$/g, '');
                /*
                hasInputs = (typeof node.getElementsByTagName == 'function') &&
                node.getElementsByTagName('input').length;

                if (node.getAttribute("sorttable_customkey") != null) {
                return node.getAttribute("sorttable_customkey");
                }
                else if (typeof node.textContent != 'undefined' && !hasInputs) {
                return node.textContent.replace(/^\s+|\s+$/g, '');
                }
                else if (typeof node.innerText != 'undefined' && !hasInputs) {
                return node.innerText.replace(/^\s+|\s+$/g, '');
                }
                else if (typeof node.text != 'undefined' && !hasInputs) {
                return node.text.replace(/^\s+|\s+$/g, '');
                }
                else {
                switch (node.nodeType) {
                case 3:
                if (node.nodeName.toLowerCase() == 'input') {
                return node.value.replace(/^\s+|\s+$/g, '');
                }
                case 4:
                return node.nodeValue.replace(/^\s+|\s+$/g, '');
                break;
                case 1:
                case 11:
                var innerText = '';
                for (var i = 0; i < node.childNodes.length; i++) {
                innerText += sorttable.getInnerText(node.childNodes[i]);
                }
                return innerText.replace(/^\s+|\s+$/g, '');
                break;
                default:
                return '';
                }
                }*/
            },

            reverse: function (tbody) {
                newrows = [];
                for (var i = 0; i < tbody.rows.length; i++) {
                    newrows[newrows.length] = tbody.rows[i];
                }
                for (var i = newrows.length - 1; i >= 0; i--) {
                    tbody.appendChild(newrows[i]);
                }
                delete newrows;
            },

            sort_numeric: function (a, b) {
                aa = parseFloat(a[0].replace(/[^0-9.-]/g, ''));
                if (isNaN(aa)) aa = 0;
                bb = parseFloat(b[0].replace(/[^0-9.-]/g, ''));
                if (isNaN(bb)) bb = 0;
                return aa - bb;
            },
            sort_alpha: function (a, b) {
                if (a[0] == b[0]) return 0;
                if (a[0] < b[0]) return -1;
                return 1;
            },
            sort_ddmm: function (a, b) {
                mtch = a[0].match(sorttable.DATE_RE);
                y = mtch[3]; m = mtch[2]; d = mtch[1];
                if (m.length == 1) m = '0' + m;
                if (d.length == 1) d = '0' + d;
                dt1 = y + m + d;
                mtch = b[0].match(sorttable.DATE_RE);
                y = mtch[3]; m = mtch[2]; d = mtch[1];
                if (m.length == 1) m = '0' + m;
                if (d.length == 1) d = '0' + d;
                dt2 = y + m + d;
                if (dt1 == dt2) return 0;
                if (dt1 < dt2) return -1;
                return 1;
            },
            sort_mmdd: function (a, b) {
                mtch = a[0].match(sorttable.DATE_RE);
                y = mtch[3]; d = mtch[2]; m = mtch[1];
                if (m.length == 1) m = '0' + m;
                if (d.length == 1) d = '0' + d;
                dt1 = y + m + d;
                mtch = b[0].match(sorttable.DATE_RE);
                y = mtch[3]; d = mtch[2]; m = mtch[1];
                if (m.length == 1) m = '0' + m;
                if (d.length == 1) d = '0' + d;
                dt2 = y + m + d;
                if (dt1 == dt2) return 0;
                if (dt1 < dt2) return -1;
                return 1;
            },

            shaker_sort: function (list, comp_func) {
                var b = 0;
                var t = list.length - 1;
                var swap = true;

                while (swap) {
                    swap = false;
                    for (var i = b; i < t; ++i) {
                        if (comp_func(list[i], list[i + 1]) > 0) {
                            var q = list[i]; list[i] = list[i + 1]; list[i + 1] = q;
                            swap = true;
                        }
                    } // for
                    t--;

                    if (!swap) break;

                    for (var i = t; i > b; --i) {
                        if (comp_func(list[i], list[i - 1]) < 0) {
                            var q = list[i]; list[i] = list[i - 1]; list[i - 1] = q;
                            swap = true;
                        }
                    } // for
                    b++;

                } // while(swap)
            }
        }

        var filtertable = {
            getFilterTable: function (jq, phrase, column, ifHidden) {

                //                if (phrase == '大类,小类' || phrase == '厂商,品牌' || phrase == '渠道,店铺') {
                //                    phrase = '';
                //                }

                var arrSearch = ["媒体", "分类", "影片", "视频", "频道", "媒体,分类", "媒体,影片"];

                $.each(arrSearch, function (n, value) {
                    if (phrase == value) {
                        {
                            phrase = '';

                        }
                    }
                });



                var new_hidden = false;
                if (this.last_phrase === phrase) return false;

                var phrase_length = phrase.length;
                var words = phrase.toLowerCase().split(" ");

                var matches = function (elem) { elem.show() }
                var noMatch = function (elem) { elem.remove(); new_hidden = true }
                var getText = function (elem) { return $(elem).find('td:lt(4)').text() }

                if (column) {
                    var index = null;
                    jq.find("thead > tr:last > th").each(function (i) {
                        if ($(this).text() == column) {
                            index = i; return false;
                        }
                    });
                    if (index == null) throw ("given column: " + column + " not found")

                    getText = function (elem) {
                        return jQuery(elem.find(
				  ("td:eq(" + index + ")"))).text()
                    }
                }

                if ((words.size > 1) && (phrase.substr(0, phrase_length - 1) ===
					this.last_phrase)) {

                    if (phrase[-1] === " ")
                    { this.last_phrase = phrase; return false; }

                    var words = words[-1];
                    matches = function (elem) { ; }
                    var elems = jq.find("tbody > tr:visible")
                }
                else {
                    new_hidden = true;
                    var elems = jq.find("tr")
                }

                elems.each(function () {
                    var elem = jQuery(this);
                    filtertable.has_words(getText(elem), words, false) ?
				  matches(elem) : noMatch(elem);
                });

                last_phrase = phrase;
                if (ifHidden && new_hidden) ifHidden();
                return jq;
            },
            has_words: function (str, words, caseSensitive) {
                var text = caseSensitive ? str : str.toLowerCase();
                for (var i = 0; i < words.length; i++) {
                    if (text.indexOf(words[i]) === -1) return false;
                }
                return true;
            }
        }

        var superTable = function (tableId, options) {
            /////* Initialize */
            options = options || {};
            this.cssSkin = options.cssSkin || "";
            this.headerRows = parseInt(options.headerRows || "1");
            this.fixedCols = parseInt(options.fixedCols || "0");
            this.colWidths = options.colWidths || [];
            this.initFunc = options.onStart || null;
            this.callbackFunc = options.onFinish || null;
            this.initFunc && this.initFunc();

            /////* Create the framework dom */
            this.sBase = document.createElement("DIV");
            this.sFHeader = this.sBase.cloneNode(false);
            this.sHeader = this.sBase.cloneNode(false);
            this.sHeaderInner = this.sBase.cloneNode(false);
            this.sFData = this.sBase.cloneNode(false);
            this.sFDataInner = this.sBase.cloneNode(false);
            this.sData = this.sBase.cloneNode(false);
            this.sColGroup = document.createElement("COLGROUP");
            this.sMask = this.sBase.cloneNode(false);

            this.sDataTable = document.getElementById(tableId);
            this.sDataTable.style.margin = "0px"; /* Otherwise looks bad */
            if (this.cssSkin !== "") {
                this.sDataTable.className += " " + this.cssSkin;
            }
            if (this.sDataTable.getElementsByTagName("COLGROUP").length > 0) {
                this.sDataTable.removeChild(this.sDataTable.getElementsByTagName("COLGROUP")[0]); /* Making our own */
            }
            this.sParent = this.sDataTable.parentNode;
            this.sParentHeight = this.sParent.offsetHeight;
            this.sParentWidth = this.sParent.offsetWidth;

            /////* Attach the required classNames */
            this.sBase.className = "sBase";
            this.sFHeader.className = "sFHeader";
            this.sHeader.className = "sHeader";
            this.sHeaderInner.className = "sHeaderInner";
            this.sFData.className = "sFData";
            this.sFDataInner.className = "sFDataInner";
            this.sData.className = "sData";
            this.sMask.className = "sMask";

            /////* Clone parts of the data table for the new header table */
            var alpha, beta, touched, clean, cleanRow, i, j, k, m, n, p;
            this.sHeaderTable = this.sDataTable.cloneNode(false);
            if (this.sDataTable.tHead) {
                alpha = this.sDataTable.tHead;
                this.sHeaderTable.appendChild(alpha.cloneNode(false));
                beta = this.sHeaderTable.tHead;
            } else {
                alpha = this.sDataTable.tBodies[0];
                this.sHeaderTable.appendChild(alpha.cloneNode(false));
                beta = this.sHeaderTable.tBodies[0];
            }
            alpha = alpha.rows;
            for (i = 0; i < this.headerRows; i++) {
                if (alpha[i])
                    beta.appendChild(alpha[i].cloneNode(true));
            }
            this.sHeaderInner.appendChild(this.sHeaderTable);

            if (this.fixedCols > 0) {
                this.sFHeaderTable = this.sHeaderTable.cloneNode(true);
                this.sFHeader.appendChild(this.sFHeaderTable);
                this.sFDataTable = this.sDataTable.cloneNode(true);
                this.sFDataInner.appendChild(this.sFDataTable);
            }

            /////* Set up the colGroup */
            alpha = this.sDataTable.tBodies[0].rows;
            if (alpha.length == 0)
                alpha = this.sDataTable.tHead.rows;
            for (i = 0, j = alpha.length; i < j; i++) {
                clean = true;
                for (k = 0, m = alpha[i].cells.length; k < m; k++) {
                    if (alpha[i].cells[k].colSpan !== 1 || alpha[i].cells[k].rowSpan !== 1) {
                        i += alpha[i].cells[k].rowSpan - 1;
                        clean = false;
                        break;
                    }
                }
                if (clean === true) break; /* A row with no cells of colSpan > 1 || rowSpan > 1 has been found */
            }
            cleanRow = (clean === true) ? i : 0; /* Use this row index to calculate the column widths */
            for (i = 0, j = alpha[cleanRow].cells.length; i < j; i++) {
                if (i === this.colWidths.length || this.colWidths[i] === -1) {
                    this.colWidths[i] = alpha[cleanRow].cells[i].offsetWidth;
                }
            }
            for (i = 0, j = this.colWidths.length; i < j; i++) {
                this.sColGroup.appendChild(document.createElement("COL"));
                this.sColGroup.lastChild.setAttribute("width", this.colWidths[i]);
            }
            this.sDataTable.insertBefore(this.sColGroup.cloneNode(true), this.sDataTable.firstChild);
            this.sHeaderTable.insertBefore(this.sColGroup.cloneNode(true), this.sHeaderTable.firstChild);
            if (this.fixedCols > 0) {
                this.sFDataTable.insertBefore(this.sColGroup.cloneNode(true), this.sFDataTable.firstChild);
                this.sFHeaderTable.insertBefore(this.sColGroup.cloneNode(true), this.sFHeaderTable.firstChild);
            }

            /////* Style the tables individually if applicable */
            if (this.cssSkin !== "") {
                this.sDataTable.className += " " + this.cssSkin + "-Main";
                this.sHeaderTable.className += " " + this.cssSkin + "-Headers";
                if (this.fixedCols > 0) {
                    this.sFDataTable.className += " " + this.cssSkin + "-Fixed";
                    this.sFHeaderTable.className += " " + this.cssSkin + "-FixedHeaders";
                }
            }

            /////* Throw everything into sBase */
            this.sBase.appendChild(this.sMask);
            if (this.fixedCols > 0) {
                this.sBase.appendChild(this.sFHeader);
            }
            this.sHeader.appendChild(this.sHeaderInner);
            this.sBase.appendChild(this.sHeader);
            if (this.fixedCols > 0) {
                this.sFData.appendChild(this.sFDataInner);
                this.sBase.appendChild(this.sFData);
            }
            this.sBase.appendChild(this.sData);
            this.sParent.insertBefore(this.sBase, this.sDataTable);
            this.sData.appendChild(this.sDataTable);

            /////* Align the tables */
            var sDataStyles, sDataTableStyles;
            //this.sHeaderHeight = this.sDataTable.tBodies[0].rows[(this.sDataTable.tHead) ? 0 : this.headerRows].offsetTop;
            if (this.sDataTable.tHead == null || this.sDataTable.tBodies[0].rows.length == 0) {
                this.sHeaderHeight = 0;
            } else {
                this.sHeaderHeight = this.sDataTable.tBodies[0].rows[(this.sDataTable.tHead) ? 0 : this.headerRows].offsetTop;
            }
            sDataTableStyles = "margin-top: " + (this.sHeaderHeight * -1) + "px;";
            sDataStyles = "margin-top: " + this.sHeaderHeight + "px;";
            sDataStyles += "height: " + (this.sParentHeight - this.sHeaderHeight) + "px;";
            if (this.fixedCols > 0) {
                /* A collapsed table's cell's offsetLeft is calculated differently (w/ or w/out border included) across broswers - adjust: */
                this.sFHeaderWidth = this.sDataTable.tBodies[0].rows[cleanRow].cells[this.fixedCols].offsetLeft;
                if (window.getComputedStyle) {
                    alpha = document.defaultView;
                    beta = this.sDataTable.tBodies[0].rows[0].cells[0];
                    if (navigator.taintEnabled) { /* If not Safari */
                        this.sFHeaderWidth += Math.ceil(parseInt(alpha.getComputedStyle(beta, null).getPropertyValue("border-right-width")) / 2);
                    } else {
                        this.sFHeaderWidth += parseInt(alpha.getComputedStyle(beta, null).getPropertyValue("border-right-width"));
                    }
                } else if (/*@cc_on!@*/0) { /* Internet Explorer */
                    alpha = this.sDataTable.tBodies[0].rows[0].cells[0];
                    beta = [alpha.currentStyle["borderRightWidth"], alpha.currentStyle["borderLeftWidth"]];
                    if (/px/i.test(beta[0]) && /px/i.test(beta[1])) {
                        beta = [parseInt(beta[0]), parseInt(beta[1])].sort();
                        this.sFHeaderWidth += Math.ceil(parseInt(beta[1]) / 2);
                    }
                }

                /* Opera 9.5 issue - a sizeable data table may cause the document scrollbars to appear without this: */
                if (window.opera) {
                    this.sFData.style.height = this.sParentHeight + "px";
                }

                this.sFHeader.style.width = this.sFHeaderWidth + "px";
                sDataTableStyles += "margin-left: " + (this.sFHeaderWidth * -1) + "px;";
                sDataStyles += "margin-left: " + this.sFHeaderWidth + "px;";
                sDataStyles += "width: " + (this.sParentWidth - this.sFHeaderWidth) + "px;";
            } else {
                sDataStyles += "width: " + this.sParentWidth + "px;";
            }
            this.sData.style.cssText = sDataStyles;
            this.sDataTable.style.cssText = sDataTableStyles;
            //当数据列少于10时隐藏x轴滚动条
            var cloumnsNum = $('tr:first th', this.sHeader).length;
            if(cloumnsNum<9)
            {

                this.sData.style.cssText = sDataStyles+';overflow-x: hidden;';
            }
            //$(this.sHeader).css({ 'width': (that.width() - 16) + 'px' });
            $('tr:first th', this.sHeader).each(function (i) {
                var th = $(this);
                var abbr = th.attr('abbr');
                if (i == options.sortCol) {
                    th.find('div').append(' <img src="../plugins/fixTables/img/sort_' + options.sortOrder + '.png" />');
                }

                th.click(function () {
                    if ($(this).text() != '')
                    {
                        //屏蔽排序
                        //bd.sorted(this, i);
                    }
                });
            });

            /////* Set up table scrolling and IE's onunload event for garbage collection */
            (function (st) {
                if (st.fixedCols > 0) {
                    st.sData.onscroll = function () {
                        st.sHeaderInner.style.right = st.sData.scrollLeft + "px";

                        st.sFDataInner.style.top = (st.sData.scrollTop * -1) + "px";
                    };
                } else {
                    st.sData.onscroll = function () {
                        st.sHeaderInner.style.right = st.sData.scrollLeft + "px";
                    };
                }
                if (/*@cc_on!@*/0) { /* Internet Explorer */
                    window.attachEvent("onunload", function () {
                        st.sData.onscroll = null;
                        st = null;
                    });
                }
            })(this);

            this.callbackFunc && this.callbackFunc();
        };

        return this.each(function () {
            try {
                bd.binded();
                if (!ispostback) {
                    bd.copydata();
                }
                ispostback = true;
            }
            catch (e) {
                alert(e);
                e.toString();
                console.log(e);

            }
        });
    }

    $.fn.fixTable.defaults = {};
})(jQuery);