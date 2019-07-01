function _(e) {
    return document.querySelector(e)
}

function __(e) {
    return document.querySelectorAll(e)
}
window.performance = window.performance || {}, window.performance.now = performance.now || window.performance.mozNow || window.performance.msNow || window.performance.oNow || window.performance.webkitNow || function() {
    return (new Date).getTime()
}, window.requestAnimFrame = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(e) {
    window.setTimeout(e, 1e3 / 60)
};
var checkMobile = !1;
(bowser.mobile || bowser.tablet || /SymbianOS/.test(window.navigator.userAgent)) && (checkMobile = !0);
var isMenuOpen = !1,
    isMenuPurple = !1;

function menu(e, t) {
    var n = __("#menuBtt > span"),
        o = _("#menu"),
        s = _("#languageMenu");
    "open" === e ? (isMenuOpen = !0, t.setAttribute("onclick", "menu('close', this)"), n[0].style.width = "25px", n[2].style.width = "25px", n[0].style.transform = "matrix(1.00,0.00,0.00,1.00,0,10)", n[1].style.opacity = "0", n[2].style.transform = "matrix(1.00,0.00,0.00,1.00,0,-10)", setTimeout(function() {
        n[0].style.transform = "matrix(0.71,0.71,-0.71,0.71,0,10)", n[2].style.transform = "matrix(0.71,-0.71,0.71,0.71,0,-10)", o.style.display = "block", setTimeout(function() {
            o.style.opacity = "1", showMenu("open"), isMenuPurple && changeColorMenu("white"), checkMobile && s.setAttribute("style", " ")
        }, 300)
    }, 1e3)) : (isMenuPurple && changeColorMenu("purple"), isMenuOpen = !1, t.setAttribute("onclick", "menu('open', this)"), n[0].setAttribute("style", " "), n[1].setAttribute("style", " "), n[2].setAttribute("style", " "), showMenu("close"), checkMobile && s.setAttribute("style", "display:none"), o.style.opacity = "0", setTimeout(function() {
        o.style.display = "none"
    }, 300))
}

function showMenu(e) {
    var t = __("#menuIndex > li"),
        n = _("#menuContactInfo");
    if ("open" === e) {
        for (var o = 0; o < t.length; o++) ! function(e) {
            setTimeout(function() {
                t[e].setAttribute("class", "displayFlex menuLinkOn")
            }, 300 * e)
        }(o);
        setTimeout(function() {
            n.setAttribute("class", "displayFlex menuLinkOn")
        }, 1800)
    } else {
        for (var o = 0; o < t.length; o++) t[o].setAttribute("class", "displayFlex menuLinkOff");
        n.setAttribute("class", "displayFlex menuLinkOff")
    }
}

function changeColorMenu(e) {
    var t = _("#logoNav"),
        n = __("#languageMenu > span"),
        o = __("#languageMenu > a"),
        s = __("#menuBtt > span");

    function r(e, t) {
        for (var n = 0; n < e.length; n++) e[n].setAttribute("class", t)
    }
    "purple" === e ? (t.setAttribute("class", "purpleLogo"), r(n, "trans3 purpleBlueBack"), r(o, "trans3 purpleBlueColor"), r(s, "trans5 purpleBlueBack")) : (t.setAttribute("class", "whiteLogo"), r(n, "trans3 whiteBack"), r(o, "trans3 whiteColor"), r(s, "trans5 whiteBack"))
}

function wipesScroll() {
    for (var e = __(".panel"), t = new ScrollMagic.Controller({
            globalSceneOptions: {
                triggerHook: "onLeave",
                duration: "200%"
            }
        }), n = 0; n < e.length; n++) new ScrollMagic.Scene({
        triggerElement: e[n]
    }).setPin(e[n], {
        pushFollowers: !1
    }).addTo(t)
}

function fadeInUp(e, t, n, o) {
    var t = _(t),
        s = new ScrollMagic.Controller({
            globalSceneOptions: {
                duration: n,
                offset: o
            }
        });
    new ScrollMagic.Scene({
        triggerElement: e,
        triggerHook: "onEnter"
    }).addTo(s).on("progress", function(e) {
        t.style.opacity = e.progress, t.style.transform = "translateY(" + (100 - 100 * e.progress) + "px)"
    })
}

function fadeScaleIn(e, n, t) {
    var n = __(n),
        o = new ScrollMagic.Controller({
            globalSceneOptions: {
                duration: 0,
                offset: t
            }
        });
    new ScrollMagic.Scene({
        triggerElement: e,
        triggerHook: "onCenter"
    }).addTo(o).on("enter leave", function(e) {
        if ("enter" === e.type)
            for (var t = 0; t < n.length; t++) ! function(e) {
                setTimeout(function() {
                    n[e].setAttribute("class", "trans5 clientSectionHomeOn")
                }, 200 * e)
            }(t)
    })
}

function fadeScaleOut(e, n) {
    var n = __(n),
        t = new ScrollMagic.Controller({
            globalSceneOptions: {
                duration: "100%",
                offset: 0
            }
        });
    new ScrollMagic.Scene({
        triggerElement: e,
        triggerHook: "onCenter"
    }).addTo(t).on("enter leave", function(e) {
        if ("enter" === e.type)
            for (var t = 0; t < n.length; t++) n[t].setAttribute("class", "trans5 clientSectionHomeOff")
    })
}

function contactLink(e) {
    var t;
    "nomenu" === e ? window.location.href = "index.php#contactHome" : (menu("close", _("#menuBtt")), window.location.href = "index.php#contactHome")
}

function ratioGallery(e) {
    var e, t, n, o = (e = _(e)).offsetWidth * (580 / 1200);
    e.style.height = o + "px"
}
var s = 0;

function messSubmit(e) {
    var t = _("#messageSubmit"),
        n = t.children[0],
        o;

    function r() {
        var e = 100;
        n.style.left = s + "px", s <= -99 ? s = 99 : s -= 1
    }
    n.innerHTML = 1 === e ? (t.style.background = "#34d07c", "Your message has been sent successfully, thanks for contacting us · Your message has been sent successfully, thanks for contacting us · Your message has been sent successfully, thanks for contacting us · Your message has been sent successfully, thanks for contacting us · Your message has been sent successfully, thanks for contacting us · Your message has been sent successfully, thanks for contacting us") : (t.style.background = "#6d55d3", "Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent"), t.style.height = "24px", o = setInterval(function() {
        r()
    }, 30), setTimeout(function() {
        t.style.height = "0", clearInterval(o)
    }, 5e3)
}

function panicLoad() {
    var e = _("#loading");
    setTimeout(function() {
        e.style.opacity = "0", setTimeout(function() {
            e.setAttribute("class", "displayNone trans5")
        }, 500)
    }, 1e3)
}

function loadSeq() {
    for (var e = _("#logoNav"), t = 23, n = 0; n < 23; n++) {
        var o;
        (o = document.createElement("DIV")).style.display = "none", o.setAttribute("class", "fpslogo"), o.style.backgroundImage = "url('img/seqLogo/" + n + ".png')", e.appendChild(o)
    }
    var o;
    (o = __(".fpslogo"))[0].style.display = "block"
}
var countHoverAnimate = 0;

function hoverAnimate() {
    countHoverAnimate++, console.log(countHoverAnimate), 1 == countHoverAnimate && animateSeq()
}
var count = 0,
    directionLogo = !0;

function animateSeq() {
    countHoverAnimate = 2, count < 0 && (count = 0);
    var e = __(".fpslogo"),
        t;
    directionLogo && (e[count].style.display = "none", e[++count].style.display = "block", 22 <= count && (directionLogo = !1)), directionLogo || (e[count].style.display = "none", e[--count].style.display = "block", count <= 0 && (count = 0, cancelAnimationFrame(t), e[0].style.display = "block", setTimeout(function() {
        setAgain(), directionLogo = !0
    }, 100))), setTimeout(function() {
        t = requestAnimationFrame(animateSeq)
    }, 1e3 / 12)
}

function setAgain() {
    var e;
    __(".fpslogo")[0].style.display = "block", countHoverAnimate = 0
}
var cLogo = 0,
    directionLogo = !0;

function animationLogo() {
    var e = _("#logoNav");
    directionLogo && 34 < ++cLogo && (directionLogo = !1), directionLogo || --cLogo <= 0 && (directionLogo = !0), e.style.backgroundImage = "url('img/seqLogo/" + cLogo + ".png')"
}

function pressRoom(e) {
    var t = _("#pressRoom"),
        n = _("#menuBtt");
    "open" === e ? (t.style.display = "block", t.style.opacity = "1", closePress.style.display = "block", closePress.style.opacity = "1", menu("close", n), changeColorMenu("purple")) : (t.style.opacity = "0", closePress.style.opacity = "0", setTimeout(function() {
        t.style.display = "none", closePress.style.display = "none"
    }, 1e3))
}
