$(document).ready(function() {
    height = $(window).height(), width = $(window).width(), $("#menu").css("width", width), $("#menu").css("height", height), $("#menu").css("top", -height);
    var i = height - 200;
    $("#menulist").css("height", i), $(".menuelement").css("height", i / 10), $("#socialslab").find("img").transition({
        x: width / 8 * .8 - 28
    }, 0);
    var t = 1;
    $("#menutoggle").mouseenter(function() {
        1 == t && $("#menutoggle").transition({
            rotate: "180deg"
        })
    }).mouseleave(function() {
        1 == t && $("#menutoggle").transition({
            rotate: "0deg"
        })
    }), $("#menutoggle").click(function() {
        1 == t ? ($("#menu").transition({
            y: height
        }).find("li").transition({
            opacity: 1,
            delay: 400
        }), $("#line1").transition({
            y: "6px"
        }).transition({
            rotate: "45deg"
        }, {
            queue: !1
        }), $("#line2").css("visibility", "hidden"), $("#line3").transition({
            y: "-6px"
        }).transition({
            rotate: "-45deg"
        }, {
            queue: !1
        }), t = 0) : ($("#menu").find("li").transition({
            opacity: 0
        }), $("#menu").transition({
            y: 0
        }), $("#line1").transition({
            y: "0px"
        }).transition({
            rotate: "0deg"
        }, {
            queue: !1
        }), $("#line2").css("visibility", "visible"), $("#line3").transition({
            y: "-0px"
        }).transition({
            rotate: "0deg"
        }, {
            queue: !1
        }), t = 1)
    }), $(document).keyup(function(i) {
        27 == i.keyCode && 0 == t && ($("#menu").find("li").transition({
            opacity: 0
        }), $("#menu").transition({
            y: 0
        }), $("#line1").transition({
            y: "0px"
        }).transition({
            rotate: "0deg"
        }, {
            queue: !1
        }), $("#line3").transition({
            y: "-0px"
        }).transition({
            rotate: "0deg"
        }, {
            queue: !1
        }), $("#line2").css("visibility", "visible"), t = 1)
    }), $("#socialslab").find("img").mouseenter(function() {
        $(this).transition({
            scale: 1.2
        })
    }).mouseleave(function() {
        $(this).transition({
            scale: 1
        })
    }), $(window).resize(function() {
        height = $(window).height(), width = $(window).width(), $("#menu").css("width", width), $("#menu").css("height", height), $("#menu").css("top", -height);
        var i = height - 250;
        $("#menulist").css("height", i), $(".menuelement").css("height", i / 10), $("#menu").find("li").transition({
            opacity: 0
        }), $("#menu").transition({
            y: 0
        }), $("#line1").transition({
            y: "0px"
        }).transition({
            rotate: "0deg"
        }, {
            queue: !1
        }), $("#line3").transition({
            y: "-0px"
        }).transition({
            rotate: "0deg"
        }, {
            queue: !1
        }), $("#line2").css("visibility", "visible"), t = 1, $("#socialslab").find("img").transition({
            x: width / 8 * .8 - 28
        }, 0)
    })
});
