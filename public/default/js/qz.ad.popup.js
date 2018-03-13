// JavaScript Document

$(function() {
    var data = null;
    if (data == null) return;

    function popup() {
        var strHtml = "<img src='" + data.src + "' border='0' />";
        if (data.url != null && data.url.length > 0 && data.url != "http://") strHtml = "<a href='" + data.url + "' target='_blank'>" + strHtml + "</a>";
        strHtml += "<img class='closePopup' src='/plugin/ad/close.png' style='position:absolute;top:5px;right:5px;cursor:pointer;' alt='关闭' />";

        try {
            var i = $.layer({
                type: 1,
                shade: data.shade ? [0.2, '#000', true] : false,
                title: false,
                closeBtn: false,
                border: [5, 0.5, '#666', true],
                offset: ['', ''],
                area: [data.width + 'px', data.height + 'px'],
                page: {
                    html: strHtml
                },
                success: function() {
                    if (data.sec > 0) {
                        window.setTimeout("$('.closePopup').trigger('click')", data.sec * 1000);
                    }
                }
            });

            $(".closePopup").on('click', function() {
                layer.close(i);
            });
        }
        catch (err) { }
    }

    var loaded = false;
    var loadFile = "http://" + window.location.host + "/plugin/layer/layer.min.js";
    for (var i = 0; i < document.scripts.length; i++) {
        if (document.scripts[i].src.indexOf(loadFile) == 0) {
            loaded = true; break;
        }
    }

    if (!loaded) {
        var script = document.createElement('script');
        script.src = loadFile;
        script.type = "text/javascript";
        document.getElementsByTagName('head')[0].appendChild(script);

        script.onload = script.onreadystatechange = function() {
            popup();
        }
    }
    else popup();
});
