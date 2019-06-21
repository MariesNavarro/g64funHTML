var strServ1 = $("#strServ1").val();
var strServ2 = $("#strServ2").val();
var strServ3 = $("#strServ3").val();
var strServ4 = $("#strServ4").val();
var strServ5 = $("#strServ5").val();
var strServ6 = $("#strServ6").val();

var speedType = 60,
    pathLenght = 76.39474487304688,
    circlesBullet = __(".circleBullet"),
    audio = _("#menuAudio");


function canPlayVideo() {
    var e = _("#loading");
    setTimeout(function() {
        e.style.opacity = "0", setTimeout(function() {
            e.setAttribute("class", "displayNone trans5")
        }, 500)
    }, 1e3)
}

function canSeeImg() {
    var e = _("#imgSlider"),
        t = _("#loading");
    e.addEventListener("load", function() {
        setTimeout(function() {
            t.style.opacity = "0", setTimeout(function() {
                t.setAttribute("class", "displayNone trans5")
            }, 500)
        }, 1e3)
    })
}

function loadVideo() {
    var e = _("#coverVid"),
        t = e.canPlayType('video/mp4; codecs="avc1.42E01E"'),
        i = e.canPlayType('video/webm; codecs="vp8, vorbis"');
    e.setAttribute("oncanplay", "canPlayVideo()");
    var s = window.navigator.userAgent,
        n = s.indexOf("Chrome"),
        o = s.indexOf("Firefox"),
        r = s.indexOf("Safari"),
        l = s.indexOf("MSIE"),
        c = s.indexOf("Opera");

    function a() {
        return "probably" === i ? e.setAttribute("src", "assets/demo.webm") : "probably" === t ? e.setAttribute("src", "assets/demo.mp4") : sliderVidMobile()
    }
    1 < n ? a() : 0 <= o ? a() : 0 <= r ? a() : 0 <= l ? a() : 0 <= c && a()
}
checkMobile ? (audio.style.display = "none", sliderVidMobile(), canSeeImg()) : loadVideo();
var countMob = 5;

function sliderVidMobile() {
    var e = _("#sliderMobileHome"),
        t = [],
        i;
    e.style.display = "block";
    for (var s = 0; s <= 5; s++)(i = document.createElement("LI")).setAttribute("class", "trans5"), checkMobile ? i.style.backgroundImage = "url('img/slidermobile/mob/" + s + ".jpg')" : i.style.backgroundImage = "url('img/slidermobile/desk/" + s + ".jpg')", e.appendChild(i), t.push(i);
    setTimeout(function() {
        setInterval(function() {
            t[countMob].style.opacity = "0", --countMob < 0 && (t[countMob = 5].style.opacity = "1", setTimeout(function() {
                for (var e = 0; e <= 4; e++) t[e].style.opacity = "1"
            }, 50))
        }, 4e3)
    }, 4e3)
}


var service1 = new TypeIt("#service1", {
        strings: '<span class="highlight highPurpleDarkWhite">'+strServ1+'</span>',
        nextStringDelay: 30,
        cursor: !1,
        speed: speedType,
        startDelete: !1,
        beforeStep: function() {
            pathLenght--, circlesBullet[0].style.strokeDashoffset = pathLenght
        },
        afterComplete: function() {
            circlesBullet[pathLenght = 0].style.strokeDashoffset = pathLenght, setTimeout(function() {
                setTimeout(function() {
                    sliderHomeFun(1), circlesBullet[0].style.opacity = "0"
                }, 500)
            }, 2e3)
        }
    }),
    service2 = new TypeIt("#service2", {
        strings: '<span class="highlight highPurpleDarkWhite">'+strServ2+'</span>',
        nextStringDelay: 30,
        cursor: !1,
        speed: speedType,
        startDelete: !1,
        beforeStep: function() {
            pathLenght--, circlesBullet[1].style.strokeDashoffset = pathLenght
        },
        afterComplete: function() {
            pathLenght = 0, circlesBullet[1].style.strokeDashoffset = pathLenght, setTimeout(function() {
                setTimeout(function() {
                    sliderHomeFun(2), circlesBullet[1].style.opacity = "0"
                }, 500)
            }, 2e3)
        }
    }),
    service3 = new TypeIt("#service3", {
        strings: '<span class="highlight highPurpleDarkWhite">'+strServ3+'</span>',
        nextStringDelay: 30,
        cursor: !1,
        speed: speedType,
        startDelete: !1,
        beforeStep: function() {
            pathLenght--, circlesBullet[2].style.strokeDashoffset = pathLenght
        },
        afterComplete: function() {
            pathLenght = 0, circlesBullet[2].style.strokeDashoffset = pathLenght, setTimeout(function() {
                setTimeout(function() {
                    sliderHomeFun(3), circlesBullet[2].style.opacity = "0"
                }, 500)
            }, 2e3)
        }
    }),
    service4 = new TypeIt("#service4", {
        strings: '<span class="highlight highPurpleDarkWhite">'+strServ4+'</span>',
        nextStringDelay: 30,
        cursor: !1,
        speed: speedType,
        startDelete: !1,
        beforeStep: function() {
            pathLenght--, circlesBullet[3].style.strokeDashoffset = pathLenght
        },
        afterComplete: function() {
            pathLenght = 0, circlesBullet[3].style.strokeDashoffset = pathLenght, setTimeout(function() {
                setTimeout(function() {
                    sliderHomeFun(4), circlesBullet[3].style.opacity = "0"
                }, 500)
            }, 2e3)
        }
    }),
    service5 = new TypeIt("#services5", {
        strings: '<span class="highlight highPurpleDarkWhite">'+strServ5+'</span>',
        nextStringDelay: 30,
        cursor: !1,
        speed: speedType,
        startDelete: !1,
        beforeStep: function() {
            pathLenght--, circlesBullet[4].style.strokeDashoffset = pathLenght
        },
        afterComplete: function() {
            pathLenght = 0, circlesBullet[4].style.strokeDashoffset = pathLenght, setTimeout(function() {
                setTimeout(function() {
                    sliderHomeFun(5), circlesBullet[4].style.opacity = "0"
                }, 500)
            }, 2e3)
        }
    }),
    service6 = new TypeIt("#service6", {
        strings: '<span class="highlight highPurpleDarkWhite">'+strServ6+'</span>',
        nextStringDelay: 30,
        cursor: !1,
        speed: speedType,
        startDelete: !1,
        beforeStep: function() {
            pathLenght--, circlesBullet[5].style.strokeDashoffset = pathLenght
        },
        afterComplete: function() {
            pathLenght = 0, circlesBullet[5].style.strokeDashoffset = pathLenght, setTimeout(function() {
                setTimeout(function() {
                    sliderHomeFun(0), circlesBullet[5].style.opacity = "0"
                }, 500)
            }, 2e3)
        }
    });

function sliderHomeFun(e) {
    var t = _("#sliderHome");
    switch (e) {
        case 0:
            s(), t.style.left = "0", setTimeout(function() {
                i(0), setTimeout(function() {
                    n(service1)
                }, 500)
            }, 700);
            break;
        case 1:
            s(), t.style.left = "-100vw", setTimeout(function() {
                i(1), setTimeout(function() {
                    n(service2)
                }, 500)
            }, 700);
            break;
        case 2:
            s(), t.style.left = "-200vw", setTimeout(function() {
                i(2), setTimeout(function() {
                    n(service3)
                }, 500)
            }, 700);
            break;
        case 3:
            s(), t.style.left = "-300vw", setTimeout(function() {
                i(3), setTimeout(function() {
                    n(service4)
                }, 500)
            }, 700);
            break;
        case 4:
            s(), t.style.left = "-400vw", setTimeout(function() {
                i(4), setTimeout(function() {
                    n(service5)
                }, 500)
            }, 700);
            break;
        case 5:
            s(), t.style.left = "-500vw", setTimeout(function() {
                i(5), setTimeout(function() {
                    n(service6)
                }, 500)
            }, 700)
    }

    function i(e) {
        var t = __("#sliderHome>li>div>h4"),
            i = __("#sliderHome>li>div>h4>span");
        t[e].style.opacity = "1", setTimeout(function() {
            i[e].style.width = "80px"
        }, 500)
    }

    function s() {
        var e = __("#sliderHome>li>div>h4"),
            t = __("#sliderHome>li>div>h4>span");
        pathLenght = 76.39474487304688, service1.reset(), service2.reset(), service3.reset(), service4.reset(), service5.reset(), service6.reset();
        for (var i = 0; i < e.length; i++) e[i].style.opacity = "0", t[i].style.width = "0", circlesBullet[i].style.opacity = "1", circlesBullet[i].style.strokeDashoffset = 76.39474487304688
    }

    function n(e) {
        e.go()
    }
}

function scrollHomeCover() {
    var t = _("#coverVid"),
        i = _("#sliderHomeWrap"),
        e = new ScrollMagic.Controller({
            globalSceneOptions: {
                duration: "80%",
                offset: 0
            }
        });
    new ScrollMagic.Scene({
        triggerElement: "#clientsHome",
        triggerHook: "onEnter"
    }).addTo(e).on("progress", function(e) {
        t.style.transform = "scale(" + (1 + e.progress / 1.8) + ")", i.style.opacity = 1 - e.progress
    })
}

function homeTriggersLogo() {
    var e = new ScrollMagic.Controller({
        globalSceneOptions: {
            duration: "100%",
            offset: -65
        }
    });
    new ScrollMagic.Scene({
        triggerElement: "#gamingTextHome",
        triggerHook: "onLeave"
    }).addTo(e).on("enter leave", function(e) {
        "enter" === e.type ? isMenuOpen || (changeColorMenu("purple"), isMenuPurple = !0) : (changeColorMenu("white"), isMenuPurple = !1)
    }), new ScrollMagic.Scene({
        triggerElement: "#contactHome",
        triggerHook: "onLeave"
    }).addTo(e).on("enter leave", function(e) {
        "enter" === e.type ? isMenuOpen || (changeColorMenu("purple"), isMenuPurple = !0) : (changeColorMenu("white"), isMenuPurple = !1)
    })
}

function audioMuted(e, t) {
    var i = __(".bar"),
        s = _("#coverVid");
    if ("mute" === t) {
        s.muted = !0, e.setAttribute("onclick", "audioMuted(this, 'unmute')");
        for (var n = 0; n < i.length; n++) i[n].setAttribute("class", "bar noAnim")
    } else {
        s.muted = !1, e.setAttribute("onclick", "audioMuted(this, 'mute')");
        for (var n = 0; n < i.length; n++) i[n].setAttribute("class", "bar")
    }
}

function imagesMoveHome(e, t) {
    var i = _("#movingEl"),
        s = __(".gamingExperience"),
        n = e.clientX,
        o = e.clientY;
    i.setAttribute("src", "img/gaming/" + t + ".gif"), i.style.opacity = "0.9";
    for (var r = 0; r < s.length; r++) s[r].style.opacity = "0"
}

function imagesOutHome() {
    var e = _("#movingEl"),
        t = __(".gamingExperience");
    e.style.opacity = "0";
    for (var i = 0; i < t.length; i++) t[i].style.opacity = "1"
}

function animationSectionsHome() {
    fadeInUp("#gamingText", "#gamingText", 400, 100), fadeInUp("#clientsTitle", "#clientsTitle>span", 300, 0), fadeInUp("#clientsTitle", "#clientsText", 300, 80), fadeInUp("#servicesTitle", "#servicesTitle>span", 300, 0), fadeInUp("#servicesTitle", "#servicesText", 300, 80), fadeScaleIn("#anchorClients", ".gridClients>ul>li", -50), fadeScaleIn("#anchorServices", ".gridServices>ul>li", -50), fadeScaleOut("#homeCover", ".gridClients>ul>li"), fadeScaleOut("#gamingTextHome", ".gridServices>ul>li")
}
