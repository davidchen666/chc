// JavaScript Document

$(function() {
    var data = null;
    if (data == null) return;

    var strHtml = "<div style='position:relative;width:" + data.width + "px;'>";
    strHtml += "<img class='closeScreen' src='/plugin/ad/close.png' style='position:absolute;top:5px;right:5px;cursor:pointer;' alt='关闭' />";
    if (data.url == null || data.url.length == 0 || data.url == "http://") {
        strHtml += "<a></a>";
        strHtml += "<a></a>";
    }
    else {
        strHtml += "<a target='_blank' href='" + data.url + "'></a>";
        strHtml += "<a target='_blank' href='" + data.url + "'></a>";
    }
    strHtml += "</div>";
    
    var item = $(strHtml);
    item.find(".closeScreen").hide();
    $("body").prepend(item);

    var snActive = window.snActive = item.get(0),
        a = snActive.getElementsByTagName("a"),
        h = 0, imgSrc = [];

    imgSrc[0] = data.thum;
    imgSrc[1] = data.src;

    snActive.style.overflow = "hidden";
    a[0].style.display = "none";
    a[0].innerHTML += '<img width="' + data.width + '" height="' + data.height + '" src="' + imgSrc[0] + '" border="0" />';
    if (a[1]) a[1].innerHTML += '<img width="' + data.width + '" src="' + imgSrc[1] + '" border="0" />';

    if (data.sec > 0) {
        var hideImg = item.find("a:hidden"),
        close = item.find(".closeScreen"),
        timeout = !1;

        timeout = setTimeout(function() {
            item.animate({ height: data.height }, 600, function() {
                hideImg.siblings('a:visible').hide();
                hideImg.show();
                close.show().click(function(e) {
                    item.slideUp(300);
                });
            });
        }, data.sec * 1000);
    }
});
