/**
 * ChineseWeek for Select Week
 * Created by hyanwang on 5/19/15.
 */
define(function (require, exports, module) {
    (function ($) {
        var _showWeeks;
        $.fn.WeekSelect = function () {};
        _showWeeks = function (select_year) {
            var day_01, diff_day, start_day, count_week, week_data, m;
            var _days = [];
            var src_day = Date.UTC(parseInt(select_year), 0, 1);
            /**
             * 判断日期1月1日是否在星期一,如果1号为周一，则周系数为0，开始时间则为1月1日，如果1月1日为周日，那开始天数延后一天，周系数为0，其他周一之后则为8天-周几。
             * javascript周日为0
             */
            day_01 = moment(src_day).days();
            if (parseInt(day_01) > 1) {
                diff_day = 8 - day_01;
                start_day = moment(moment(src_day).add('days', diff_day).format("YYYY-MM-DD"));
                count_week = start_day.weeks() - 1;
            } else if (parseInt(day_01) === 0) {
                start_day = moment(moment(src_day).add('days', 1).format("YYYY-MM-DD"));
                count_week = 0;
            } else if (parseInt(day_01 === 1)) {
                console.log("monday is 1");
                start_day = moment(src_day.format("YYYY-MM-DD"));
                count_week = 0;
            }
            _days[select_year] = [];
            if (typeof start_day != "undefined") {
                m = parseInt(start_day.format("MM"));
                select_year = parseInt(select_year);
                while (m <= 12 && parseInt(start_day.format("YYYY")) === select_year) {
                    _days[select_year][m] = [];
                    while (m === parseInt(start_day.format("MM"))) {
                        week_data = {
                            week_num: count_week,
                            start_day: start_day.format("YYYY-MM-DD"),
                            end_day: start_day.add("days", 6).format("YYYY-MM-DD")
                        };
                        _days[select_year][m].push(week_data);
                        start_day.add("days", 1);
                        count_week++;
                    }
                    m = parseInt(start_day.format("MM"));
                }
            }
            return _days;
        };
        $.fn.WeekSelect.ShowWeeks = function (select_year) {
            s = new _showWeeks(select_year);
            return s;
        }
    })(window.jQuery);
});