// JavaScript Document

(function($) {
    jQuery.fn.PositionFixed = function(options) {
        var defaults = {
            css: '',
            top: -1,
            bottom: -1,
            left: -1,
            right: -1
        };
        var o = jQuery.extend(defaults, options);

        var isIe6 = false;
        //if ($.browser.msie && parseInt($.browser.version) == 6)
        //    isIe6 = true;

        var html = $("html");
        //if (isIe6 && html.css('backgroundAttachment') !== 'fixed') {
        //    html.css('backgroundAttachment', 'fixed')
        //};

        return this.each(function() {
            var domThis = $(this)[0];
            var objThis = $(this);
            if (isIe6) {
                objThis.css('position', 'absolute');
                if (o.top >= 0) domThis.style.setExpression('top', 'eval((document.documentElement).scrollTop + ' + o.top + ') + "px"');
                if (o.bottom >= 0) domThis.style.setExpression('bottom', 'eval((document.documentElement).scrollBottom + ' + o.bottom + ') + "px"');
                if (o.left >= 0) domThis.style.setExpression('left', 'eval((document.documentElement).scrollLeft + ' + o.left + ') + "px"');
                if (o.right >= 0) domThis.style.setExpression('left', 'eval(document.documentElement.scrollLeft+document.documentElement.clientWidth-this.offsetWidth-(parseInt(this.currentStyle.marginLeft,10)||0)-(parseInt(this.currentStyle.marginRight,10)||0) - ' + o.right + ') + "px"');
            }
            else {
                objThis.css('position', 'fixed');
                if (o.top >= 0) objThis.css('top', o.top);
                if (o.bottom >= 0) objThis.css('bottom', o.bottom);
                if (o.left >= 0) objThis.css('left', o.left);
                if (o.right >= 0) objThis.css('right', o.right);
            }
        });
    };
})(jQuery);


$(function() {
    var data = [];

    for (var i = 0; i < data.length; i++) {
        var strHtml = "<div style='z-index:9999'>";
        if (data[i].url == null || data[i].url.length == 0 || data[i].url == "http://") strHtml += "<img src='" + data[i].src + "' border='0'  width='100%'/>";
        else strHtml += "<a href='" + data[i].url + "' target='_blank'><img src='" + data[i].src + "' border='0' width='100%' /></a>";
        strHtml += "<img src='/plugin/ad/close.png' style='position:absolute;top:5px;right:5px;cursor:pointer;' onclick='$(this).parent().remove()' alt='关闭' />";
        strHtml += "</div>";

        var item = $(strHtml);

        if (data[i].location == 1) item.PositionFixed({ top: data[i].top, left: data[i].left });
        else if (data[i].location == 2) item.PositionFixed({ top: data[i].top, right: data[i].right });
        else if (data[i].location == 3) item.PositionFixed({ bottom: data[i].bottom, left: data[i].left });
        else if (data[i].location == 4) item.PositionFixed({ bottom: data[i].bottom, right: data[i].right });
        else continue;

        $("body").append(item);
    }
});
