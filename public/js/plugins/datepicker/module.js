define(function(require, exports, module) {

    require("./datepicker.js");

    var g = window;

    $.fn.datepicker.dates['zh-CN'] = {
        days: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日"],
        daysShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六", "周日"],
        daysMin: ["日", "一", "二", "三", "四", "五", "六", "日"],
        months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
        monthsShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
        today: "今日",
        format: "yyyy年mm月dd日",
        weekStart: 1
    };

    function DatePicker(selector, options, callback) {

        var defaultDate;

        if (options && options.defaultDate) {
            defaultDate = moment(options.defaultDate);
        }

        this.options = {
            format: "YYYY-MM-DD",
            textFormat: "YYYY-MM-DD",
            language: 'zh-CN',
            autoclose: true,
            startView:0,
            minViewMode:'days'
        };
        this.init = function() {

            var o = this;
            if (!jQuery().datepicker) {
                return;
            }


            var opt = $.extend(true, this.options, options);
            this.options.format = this.options.textFormat.toLocaleLowerCase();

            var picker = $(selector).datepicker(this.options);

            if (defaultDate) {
                $(selector).val(defaultDate.format(this.options.textFormat));
            }

            picker.on("changeDate", function(e) {
                if (typeof callback === "function") {
                    callback({
                        //显示层的DATE
                        format_date: moment(e.date).format(o.options.textFormat),
                        //post的date格式
                        date_source: moment(e.date).format("YYYY-MM-DD")
                    });
                }
            });

            return picker;

        }
    }

    g[PagurianAlias].plugin.datePicker = function(seletor, options, callback) {
        var picker = new DatePicker(seletor, options, callback);
        return picker.init();
    }


});