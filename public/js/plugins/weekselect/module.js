/**
 * select Week module for ireSearch UI
 * Created by hyanwang on 5/19/15.
 */
"use strict";
define(function (require, exports, module) {

    require('./weekselect.js');
    require('./weekselect.css');
    var g = window;

    function WeekSelect(selector, options, callback) {
        var sub_data;
        options.yearlist("", function (data) {
            var maxdate, mindate, maxFullYear, minFullYear, selecthtml, year_list, select_month, month_list, select_week, clickweek, select_year;
            if (options.multichoice) {
                sub_data = [];
            }
            select_year = function () {
                maxdate = moment(data.maxdate);
                mindate = moment(data.mindate);
                maxFullYear = maxdate._d.getFullYear();
                minFullYear = mindate._d.getFullYear();
                year_list = "<select class='form-control input-small inline' name='reqYear' id='select_year'>";
                year_list += "<option class='option_year'>请选择年份</option>";
                while (maxFullYear >= minFullYear) {
                    year_list += "<option class='option_year' value='" + minFullYear + "'>" + minFullYear + "年</option>";
                    minFullYear++;
                }
                year_list += "</select>";
                select_month = "<span id='select_month'></span>";
                select_month += "<div id='output'></div><div id='choice'></div>";
                selecthtml = year_list + select_month;
                return selecthtml;
            };

            select_week = function (selector, month_option, month) {
                var week_info;
                week_info = "<table>";
                $(selector).html(month_option);
                month.forEach(function (ele) {
                    week_info += "<tr class='week' value='" +
                        "{\"weeknum\":\"" + ele.week_num + "\",\"start_day\":\"" + ele.start_day + "\",\"end_day\":\"" + ele.end_day + "\"}" +
                        "'><td>第" +
                        ele.week_num +
                        "周</td><td>开始日期:" +
                        ele.start_day +
                        "(周一)</td>" +
                        "<td>结束日期:" +
                        ele.end_day +
                        "(周日)</td></tr>";
                });
                week_info += "</table>";
                return week_info;
            };
            /**
             * 弹出对话框
             */
            $p.com.dialog(selector, {
                title: "选择周",
                body: select_year(),
                initForm: function () {
                    //关闭确认按钮
                    $(".btn-primary").addClass("disabled");
                },
                submit: function (modal, data, params, cb) {

                    if (!Array.isArray(sub_data)) {
                        //console.log(typeof sub_data);
                        if (typeof sub_data === "undefined") {
                            $p.com.alert("没有选择日期范围", "error");
                        } else {
                            $p.com.alert($("#select_year").find("option:selected").val() +
                                "年的第" + sub_data.weeknum +
                                "周</br>开始日期(周一):" + sub_data.start_day +
                                "</br>结束日期(周日)：" + sub_data.end_day);
                        }
                    } else {
                        //@todo:对于sub_data数组进行赛选
                        //console.log(sub_data);
                        sub_data.merge_data();
                    }
                    if (typeof callback === "function") {
                        callback(sub_data);
                    }
                    modal.hide();
                }
            });
            //对于sub_data进行数组整合
            sub_data.merge_data = function () {
                var start_arr = [], end_arr = [], start_day, end_day;
                if (Array.isArray(sub_data)) {
                    if (options.merge_data) {
                        sub_data.forEach(function (ele) {
                            start_arr.push(new Date(ele.start_day).getTime());
                            end_arr.push(new Date(ele.end_day).getTime());
                        });
                        //console.log(sub_data.sort());
                        start_day = moment(new Date(Math.min.apply(null, start_arr))).format("YYYY-MM-DD");
                        end_day = moment(new Date(Math.max.apply(null, end_arr))).format("YYYY-MM-DD");
                        sub_data.start_day = start_day;
                        sub_data.end_day = end_day;
                        console.log($("#choice").find(".delete").html());
                        return true;
                    } else {
                        return false;
                    }
                    //console.log(sub_data);
                }
            };
            clickweek = function (selector) {
                var count_push;

                $(selector).on("click", function () {
                    if (!options.multichoice) {
                        //单选
                        $(".btn-primary").removeClass("disabled");
                        $("tr").removeClass("active_on");
                        $(this).addClass("active_on");
                        sub_data = JSON.parse($(this).attr('value'));
                    } else {
                        //复选
                        $(".btn-primary").removeClass("disabled");

                        if (parseInt(sub_data.length) < parseInt(options.limit_mulitichoice)) {
                            sub_data.push(JSON.parse($(this).attr('value')));
                            count_push = sub_data.length - 1;
                            //console.log(sub_data);
                            var last_ele;
                            last_ele = '';
                            var render_subdata = function () {
                                sub_data.forEach(function (ele, index) {

                                    last_ele += "<div class='delete' value='" +
                                        "{\"weeknum\":\"" + ele.week_num + "\",\"start_day\":\"" + ele.start_day + "\",\"end_day\":\"" + ele.end_day + "\"}" + "'>" +
                                        "第" + ele.weeknum + "周 " +
                                        " 开始日期：" + ele.start_day +
                                        " 结束日期：" + ele.end_day +
                                        " <span class='icon icon-close-circle'></span></div>";
                                });
                            }
                            render_subdata();
                            $("#choice").html(last_ele);
                            //console.log(last_ele);
                            $(".delete").click(function () {
                                //console.log(parseInt($(this).attr('value')));
                                sub_data.splice($(this).attr('value'), 1);
                                //console.log("删掉后的结果");
                                //console.log(sub_data);
                                //render_subdata();
                                $(this).hide();
                                $(this).remove();
                                //$("#choice").html(last_ele);
                            });
                        }
                    }
                });
            };

            $("#select_year").change(
                function () {
                    var split_count;
                    var v1 = $(this).find('option:selected').val();
                    if (v1 != "") {
                        $("#select_month").html("选择月份");
                        var date_data = $(document).WeekSelect.ShowWeeks(v1);
                    }
                    month_list = "<table><tbody><tr>";
                    split_count = 1;
                    for (var month_val in date_data[v1]) {
                        if (split_count < 4) {
                            if (month_val / 4 != split_count) {
                                month_list += "<td class='month'>" + month_val + "月</td>";
                            } else {
                                month_list += "<td class='month'>" + month_val + "月</td>";
                                if (month_list == 12) {
                                    month_list += "</tr>";
                                } else {
                                    month_list += "</tr><tr>";
                                }
                                split_count++;
                            }
                        }
                    }
                    month_list += "</tbody></table>";
                    $("#output").html(month_list);
                    $(".month").on("click", function () {
                        var select_month = parseInt($(this).html());
                        var month_option = "<select class='form-control input-small inline' name='reqMon' id='select_mon'>";
                        for (month_val in date_data[v1]) {
                            if (parseInt(month_val) === parseInt(select_month)) {
                                month_option +=
                                    "<option selected>" +
                                    parseInt(month_val) +
                                    "月</option>";
                            } else {
                                month_option += "<option>" + parseInt(month_val) + "月</option>";
                            }
                        }
                        month_option += "月</select>";
                        $("#output").html(select_week("#select_month", month_option, date_data[v1][select_month]));
                        $("#select_mon").change(
                            function () {
                                var sel_month_again;
                                sel_month_again = parseInt($(this).find('option:selected').val());
                                $("#output").html(select_week("", "", date_data[v1][sel_month_again]));
                                clickweek(".week");
                            }
                        );
                        clickweek(".week");
                    });
                }
            );
        });
    };

    g[PagurianAlias].plugin.weekselect = function (selector, options, callback) {
        var weekselect = new WeekSelect(selector, options, callback);
        return weekselect;
    }
});