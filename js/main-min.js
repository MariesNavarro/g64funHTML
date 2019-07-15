window.performance = window.performance || {};
    window.performance.now = (function() {
    return performance.now       ||
    window.performance.mozNow    ||
    window.performance.msNow     ||
    window.performance.oNow      ||
    window.performance.webkitNow ||
    function() {return new Date().getTime(); };
})();
window.requestAnimFrame = (function(){
return  window.requestAnimationFrame       ||
            window.webkitRequestAnimationFrame ||
            window.mozRequestAnimationFrame    ||
            function( callback ){
                window.setTimeout(callback, 1000 / 60);
          };
})();
"use strict";
function _(el){return document.querySelector(el); }
function __(el){return document.querySelectorAll(el); }
var checkMobile = false;
if(bowser.mobile || bowser.tablet || /SymbianOS/.test(window.navigator.userAgent)) checkMobile = true;
var isMenuOpen = false,
    isMenuPurple = false;


function menu(c, t){
  var lines = __("#menuBtt > span"),
      menu = _("#menu"),
      lgMenu = _("#languageMenu");
  if(c === "open"){
    isMenuOpen = true;
    t.setAttribute("onclick", "menu('close', this)");
    lines[0].style.width = "25px";
    lines[2].style.width = "25px";
    lines[0].style.transform = "matrix(1.00,0.00,0.00,1.00,0,10)";
    lines[1].style.opacity = "0";
    lines[2].style.transform = "matrix(1.00,0.00,0.00,1.00,0,-10)";
    setTimeout(function(){
      lines[0].style.transform = "matrix(0.71,0.71,-0.71,0.71,0,10)";
      lines[2].style.transform = "matrix(0.71,-0.71,0.71,0.71,0,-10)";
      menu.style.display = "block";
      setTimeout(function(){
        menu.style.opacity = "1";
        showMenu("open");
        if(isMenuPurple){
          changeColorMenu("white");
        }
        if(checkMobile){
            lgMenu.setAttribute("style", " ");
        }
      },300);
    },1000);
  } else {
    if(isMenuPurple){
      changeColorMenu("purple");
    }
    isMenuOpen = false;
    t.setAttribute("onclick", "menu('open', this)");
    lines[0].setAttribute("style", " ");
    lines[1].setAttribute("style", " ");
    lines[2].setAttribute("style", " ");
    showMenu("close");
    if(checkMobile){
        lgMenu.setAttribute("style", "display:none");
    }
    menu.style.opacity = "0";
    setTimeout(function(){
      menu.style.display = "none";
    },300);
  }
}


function showMenu(c){
  var li = __("#menuIndex > li"),
      info = _("#menuContactInfo");
  if(c === "open"){
    for (var i = 0; i < li.length; i++) {
      (function (i) {
        setTimeout(function () {
          li[i].setAttribute("class", "displayFlex menuLinkOn");
      }, 300*i);
      })(i);
    }
    setTimeout(function(){
      info.setAttribute("class", "displayFlex menuLinkOn");
    },1800);
    } else {
      for (var i = 0; i < li.length; i++) {
        li[i].setAttribute("class", "displayFlex menuLinkOff");
      }
      info.setAttribute("class", "displayFlex menuLinkOff");
    }
}


function changeColorMenu(c){
  var logo = _("#logoNav"),
      langLines = __("#languageMenu > span"),
      langText = __("#languageMenu > a"),
      menuLines = __("#menuBtt > span");

  function chageColor(els,c){
    for (var i = 0; i < els.length; i++) {
      els[i].setAttribute("class", c);
    }
  }
  if(c === "purple"){
    logo.setAttribute("class", "purpleLogo");
    chageColor(langLines, "trans3 purpleBlueBack");
    chageColor(langText, "trans3 purpleBlueColor");
    chageColor(menuLines, "trans5 purpleBlueBack");
  } else {
    logo.setAttribute("class", "whiteLogo");
    chageColor(langLines, "trans3 whiteBack");
    chageColor(langText, "trans3 whiteColor");
    chageColor(menuLines, "trans5 whiteBack");
  }
}

function wipesScroll(){
  var slides = __(".panel");
  var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
      triggerHook: 'onLeave',
      duration: "200%"
    }
  });
  for (var i=0; i<slides.length; i++) {
  	new ScrollMagic.Scene({
  		triggerElement: slides[i]
  	})
  	.setPin(slides[i], {pushFollowers: false})
  	.addTo(controller);
  }
}

  // .addIndicators()

function fadeInUp(t,el,d,o){
  var el = _(el);
  var titleControl = new ScrollMagic.Controller({globalSceneOptions: {duration: d, offset: o}});
  new ScrollMagic.Scene({triggerElement: t, triggerHook: 'onEnter'})
  .addTo(titleControl)
  .on("progress", function (e) {
    el.style.opacity = e.progress;
    el.style.transform = "translateY("+(100-(e.progress * 100))+"px)";
  });
}

function fadeScaleIn(t,els,o){
  var els = __(els);
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: 0, offset: o}});
  new ScrollMagic.Scene({triggerElement: t, triggerHook: 'onCenter'})
  .addTo(control)
  .on("enter leave", function (e) {
     if(e.type === "enter"){
      for(var i = 0; i < els.length; i++){
        (function (i) {
          setTimeout(function () {
            els[i].setAttribute("class", "trans5 clientSectionHomeOn");
          }, 200*i);
        })(i);
      };
     }
	})
}

function fadeScaleInFlex(t,els,o){
  var els = __(els);
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: 0, offset: o}});
  new ScrollMagic.Scene({triggerElement: t, triggerHook: 'onCenter'})
  .addTo(control)
  .on("enter leave", function (e) {
     if(e.type === "enter"){
      for(var i = 0; i < els.length; i++){
        (function (i) {
          setTimeout(function () {
            els[i].setAttribute("class", "displayFlex trans5 clientSectionHomeOn");
          }, 200*i);
        })(i);
      };
     }
	})
}

function fadeScaleOut(t,els){
  var els = __(els);
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: "100%", offset: 0}});
  new ScrollMagic.Scene({triggerElement: t, triggerHook: 'onCenter'})
  .addTo(control)
  .on("enter leave", function (e) {
    if(e.type === "enter"){
      for (var i = 0; i < els.length; i++) {
        els[i].setAttribute("class", "trans5 clientSectionHomeOff");
      }
    }
  });
}

function fadeScaleOutFlex(t,els){
  var els = __(els);
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: "100%", offset: 0}});
  new ScrollMagic.Scene({triggerElement: t, triggerHook: 'onCenter'})
  .addTo(control)
  .on("enter leave", function (e) {
    if(e.type === "enter"){
      for (var i = 0; i < els.length; i++) {
        els[i].setAttribute("class", "displayFlex trans5 clientSectionHomeOff");
      }
    }
  });
}

function contactLink(c){
  if(c === "nomenu"){
    window.location.href = 'index.php#contactHome';
  } else {
    var butt = _("#menuBtt");
    menu('close', butt);
    window.location.href = 'index.php#contactHome';
  }
}

function pressRoomOnMenu(c){
  if(c === "nomenu"){
    window.location.href = 'about.php#pressRoomAbout';
  } else {
    var butt = _("#menuBtt");
    menu('close', butt);
    window.location.href = 'about.php#pressRoomAbout';
  }
}


function canPlayVideo(){
  var load = _("#loading");
  setTimeout(function(){
      load.style.opacity = "0";
      setTimeout(function(){
        load.setAttribute("class", "displayNone trans5");
      },500);
  },1000);
}


function loadVideoAbout(){
  var v = _("#videoWrap>video"),
      mp4 = v.canPlayType('video/mp4; codecs="avc1.42E01E"'),
      webm = v.canPlayType('video/webm; codecs="vp8, vorbis"');
      v.setAttribute("oncanplay", "canPlayVideo()");
      var user = window.navigator.userAgent,
          chrome = user.indexOf('Chrome'),
          firefox = user.indexOf('Firefox'),
          safari = user.indexOf('Safari'),
          msie = user.indexOf('MSIE'),
          opera = user.indexOf('Opera');
          if(chrome > 1){
            supportVideo();
          } else if (firefox >= 0) {
            supportVideo();
          } else if(safari >= 0){
            supportVideo();
          } else if(msie >= 0){
            supportVideo();
          } else if (opera >= 0){
            supportVideo();
          }
    function supportVideo(){
      if(webm === "probably"){
        return v.setAttribute("src", "assets/about-timelapse.webm");
      } else {
        if(mp4 === "probably"){
          return v.setAttribute("src", "assets/about-timelapse.mp4");
        } else {
          return sliderVidMobile();
        }
      }
    }
}

function preventAboutVideo(){

}

function ratioGallery(w){
  var w = _(w),
  widthW = w.offsetWidth,
  newRatio = 580/1200,
  newHeight = widthW * newRatio;
  w.style.height = newHeight+"px";
}

var s = 0;
function messSubmit(c){
  var wr = _("#messageSubmit"),
      p = wr.children[0],
      interval;
      if(c === 1){
        wr.style.background = "#34d07c";
        p.innerHTML = "Your message has been sent successfully, thanks for contacting us · Your message has been sent successfully, thanks for contacting us · Your message has been sent successfully, thanks for contacting us · Your message has been sent successfully, thanks for contacting us · Your message has been sent successfully, thanks for contacting us · Your message has been sent successfully, thanks for contacting us";
      } else {
        wr.style.background = "#6d55d3";
        p.innerHTML = "Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent · Sorry there was a problem and your message could not be sent";
      }
      wr.style.height = "24px";
      interval = setInterval(function(){
        movefunction();
      },30);
      function movefunction(){
        var  w = 100;
        p.style.left = s +'px';
        if (s <= 0 - w+1) {
          s = w-1;
        }else {
          s=s-1;
        }
      }
      setTimeout(function(){
        wr.style.height = "0";
        clearInterval(interval);
      },5000);
}

function panicLoad(){
 var load = _("#loading");
 setTimeout(function(){
     load.style.opacity = "0";
     setTimeout(function(){
       load.setAttribute("class", "displayNone trans5");
     },500);
 },1000);
}

function loadSeq(){
  var logo = _("#logoNav"),
      frames = 23;
      for (var i = 0; i < frames; i++) {
        var fps = document.createElement("DIV");
        fps.style.display = "none";
        fps.setAttribute("class", "fpslogo")
        fps.style.backgroundImage = "url('img/seqLogo/"+i+".png')";
        logo.appendChild(fps);
      }
      var fps = __(".fpslogo");
      fps[0].style.display = "block";
}


var countHoverAnimate = 0;
function hoverAnimate(){
  countHoverAnimate++;
  console.log(countHoverAnimate);
  if(countHoverAnimate == 1){
    animateSeq();
  }
}


var count = 0, directionLogo = true;
function animateSeq(){
  countHoverAnimate = 2;
  if(count < 0) count = 0;
  var fps = __(".fpslogo"),
      req;
  if(directionLogo){
    fps[count].style.display = "none";
    count++;
    fps[count].style.display = "block";
    if(count >= 22) directionLogo = false;
  }
  if(!directionLogo){
    fps[count].style.display = "none";
    count--;
    fps[count].style.display = "block";
    if(count <= 0){
      count = 0;
      cancelAnimationFrame(req);
      fps[0].style.display = "block";
      setTimeout(function(){
        setAgain();
        directionLogo = true;
      },100);
    }
  }
  setTimeout(function(){
    req = requestAnimationFrame(animateSeq);
  },1000/12);
}

function setAgain(){
  var fps = __(".fpslogo");
  fps[0].style.display = "block";
  countHoverAnimate = 0;
}

var cLogo = 0, directionLogo = true;
function animationLogo(){
  var logo = _("#logoNav");
    if(directionLogo){
      cLogo++;
      if(cLogo > 34) directionLogo = false;
    }
    if(!directionLogo){
       cLogo--;
       if(cLogo <= 0) directionLogo = true;
    }
    logo.style.backgroundImage = "url('img/seqLogo/"+cLogo+".png')";
}

function aboutTriggerLogo(){
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: 0, offset: -65}});
  new ScrollMagic.Scene({triggerElement: "#aboutRulebook", triggerHook: 'onLeave'})
  .addTo(control)
  .on("enter leave", function (e) {
    if(e.type === "enter"){
      changeColorMenu("purple");
      isMenuPurple = true;
    }
    if(e.type === "leave"){
      changeColorMenu("white");
      isMenuPurple = false;
    }
  });
}


function aboutTriggerLogoPress(){
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: 0, offset: -50}});
  new ScrollMagic.Scene({triggerElement: "#pressRoomAbout", triggerHook: 'onLeave'})
  .addTo(control)
  .on("enter leave", function (e) {
    if(e.type === "enter"){
      changeColorMenu("white");
      isMenuPurple = false;
    }
    if(e.type === "leave"){
      changeColorMenu("purple");
      isMenuPurple = true;
    }
  });
}

function aboutRuleAni(){
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: "100%", offset: 120}});
  new ScrollMagic.Scene({triggerElement: "#aboutRulebook", triggerHook: 'onEnter'})
  .addTo(control)
  .on("enter leave", function (e) {
    if(e.type === "enter"){
      latamRuleTx.go();
    }
    if(e.type === "leave"){
      latamRuleTx.reset();
    }
  });
}


function preventPointsAbout(){
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: "80%", offset: 0}});
  var cover = new ScrollMagic.Scene({triggerElement: "#aboutCover", triggerHook: 'onCenter'});
  var teamAbout = new ScrollMagic.Scene({triggerElement: "#teamAbout", triggerHook: 'onCenter'});
  teamAbout.addTo(control)
  cover.addTo(control)
  cover.on("enter leave", function (e) {
    if(e.type === "enter"){
      fadeScaleOut("#aboutCover", "#pointsRulebook>li");
    }
  });
  teamAbout.on("enter leave", function (e) {
    if(e.type === "enter"){
      fadeScaleOut("#aboutCover", "#pointsRulebook>li");
    }
  });
}

function lerp (start, end, amt){ return (1-amt)*start+amt*end }

var clientAboutX = 150,
    clientAboutY = 150;

var cursorShake = {
  el: _(".wrapIc"),
  x:0,
  y:0,
  update: function(){
    lx = this.x-0;
    ly = this.y-0;
    this.el.style = "transform: translate("+lx+"px, "+ly+"px)";
  }
};

function move(){
	cursorShake.x = clientAboutX - 75;
	cursorShake.y = clientAboutY - 75;
	cursorShake.update();
	requestAnimationFrame(move);
}


function insideGallery(){
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: "110%", offset: -45}});
  new ScrollMagic.Scene({triggerElement: "#insideGallery", triggerHook: 'onLeave'})
  .addTo(control)
  .on("enter leave", function (e) {
    if(e.type === "enter"){
      changeColorMenu("white");
      isMenuPurple = false;
    }
    if(e.type === "leave"){
      changeColorMenu("purple");
      isMenuPurple = true;
    }
  });
}

function projectsGallery(){
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: "110%", offset: -45}});
  new ScrollMagic.Scene({triggerElement: "#projectsGallery", triggerHook: 'onLeave'})
  .addTo(control)
  .on("enter leave", function (e) {
    if(e.type === "enter"){
      changeColorMenu("purple");
      isMenuPurple = true;
    }
    if(e.type === "leave"){
      changeColorMenu("white");
      isMenuPurple = false;
    }
  });
}

function overIcon(c, e, t){
  t.setAttribute('src', 'img/ic/' + e + c + '.svg');
}
