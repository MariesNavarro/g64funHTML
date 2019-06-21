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

if(checkMobile){
  audio.style.display = "none";
  sliderVidMobile();
  canSeeImg();
} else {
  loadVideo();
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

function canSeeImg(){
  var img = _("#imgSlider"),
      load = _("#loading");
  img.addEventListener('load', function(){
    setTimeout(function(){
        load.style.opacity = "0";
        setTimeout(function(){
          load.setAttribute("class", "displayNone trans5");
        },500);
    },1000);
  });

}

function loadVideo(){
  var v = _("#coverVid"),
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
        return v.setAttribute("src", "assets/demo.webm");
      } else {
        if(mp4 === "probably"){
          return v.setAttribute("src", "assets/demo.mp4");
        } else {
          return sliderVidMobile();
        }
      }
    }
}

var countMob = 5;
function sliderVidMobile(){
  var w = _("#sliderMobileHome"), imgs = [], li;
      w.style.display = "block";
      for (var i = 0; i <= 5; i++) {
         li = document.createElement("LI");
         li.setAttribute("class", "trans5");
         if(checkMobile){
           li.style.backgroundImage = "url('img/slidermobile/mob/"+i+".jpg')";
         } else {
           li.style.backgroundImage = "url('img/slidermobile/desk/"+i+".jpg')";
         }
         w.appendChild(li);
         imgs.push(li);
      }
      setTimeout(function(){
        setInterval(function(){
          imgs[countMob].style.opacity = "0";
          countMob--;
          if(countMob < 0){
            countMob = 5;
            imgs[5].style.opacity = "1";
            setTimeout(function(){
              for(var i = 0; i <= 4; i++){
                imgs[i].style.opacity = "1";
              }
            },50);
          }
        },4000);
      },4000);
}

var service1 = new TypeIt('#service1', {
  strings: '<span class="highlight highPurpleDarkWhite">'+strServ1+'</span>',
  nextStringDelay: 30,
  cursor: false,
  speed: speedType,
  startDelete: false,
  beforeStep: function(){
    pathLenght--;
    circlesBullet[0].style.strokeDashoffset = pathLenght;
  },
  afterComplete: function(){
    pathLenght = 0;
    circlesBullet[0].style.strokeDashoffset = pathLenght;
    setTimeout(function(){
      setTimeout(function(){
          sliderHomeFun(1);
          circlesBullet[0].style.opacity = "0";
      },500);
    },2000);
  }
});

var service2 = new TypeIt('#service2', {
  strings: '<span class="highlight highPurpleDarkWhite">'+strServ2+'</span>',
  nextStringDelay: 30,
  cursor: false,
  speed: speedType,
  startDelete: false,
  beforeStep: function(){
    pathLenght--;
    circlesBullet[1].style.strokeDashoffset = pathLenght;
  },
  afterComplete: function(){
    pathLenght = 0;
    circlesBullet[1].style.strokeDashoffset = pathLenght;
    setTimeout(function(){
      setTimeout(function(){
          sliderHomeFun(2);
          circlesBullet[1].style.opacity = "0";
      },500);
    },2000);
  }
});

var service3 = new TypeIt('#service3', {
  strings: '<span class="highlight highPurpleDarkWhite">'+strServ3+'</span>',
  nextStringDelay: 30,
  cursor: false,
  speed: speedType,
  startDelete: false,
  beforeStep: function(){
    pathLenght--;
    circlesBullet[2].style.strokeDashoffset = pathLenght;
  },
  afterComplete: function(){
    pathLenght = 0;
    circlesBullet[2].style.strokeDashoffset = pathLenght;
    setTimeout(function(){
      setTimeout(function(){
          sliderHomeFun(3);
          circlesBullet[2].style.opacity = "0";
      },500);
    },2000);
  }
});

var service4 = new TypeIt('#service4', {
  strings: '<span class="highlight highPurpleDarkWhite">'+strServ4+'</span>',
  nextStringDelay: 30,
  cursor: false,
  speed: speedType,
  startDelete: false,
  beforeStep: function(){
    pathLenght--;
    circlesBullet[3].style.strokeDashoffset = pathLenght;
  },
  afterComplete: function(){
    pathLenght = 0;
    circlesBullet[3].style.strokeDashoffset = pathLenght;
    setTimeout(function(){
      setTimeout(function(){
          sliderHomeFun(4);
          circlesBullet[3].style.opacity = "0";
      },500);
    },2000);
  }
});

var service5 = new TypeIt('#services5', {
  strings: '<span class="highlight highPurpleDarkWhite">'+strServ5+'</span>',
  nextStringDelay: 30,
  cursor: false,
  speed: speedType,
  startDelete: false,
  beforeStep: function(){
    pathLenght--;
    circlesBullet[4].style.strokeDashoffset = pathLenght;
  },
  afterComplete: function(){
    pathLenght = 0;
    circlesBullet[4].style.strokeDashoffset = pathLenght;
    setTimeout(function(){
      setTimeout(function(){
          sliderHomeFun(5);
          circlesBullet[4].style.opacity = "0";
      },500);
    },2000);
  }
});

var service6 = new TypeIt('#service6', {
  strings: '<span class="highlight highPurpleDarkWhite">'+strServ6+'</span>',
  nextStringDelay: 30,
  cursor: false,
  speed: speedType,
  startDelete: false,
  beforeStep: function(){
    pathLenght--;
    circlesBullet[5].style.strokeDashoffset = pathLenght;
  },
  afterComplete: function(){
    pathLenght = 0;
    circlesBullet[5].style.strokeDashoffset = pathLenght;
    setTimeout(function(){
      setTimeout(function(){
          sliderHomeFun(0);
          circlesBullet[5].style.opacity = "0";
      },500);
    },2000);
  }
});

function sliderHomeFun(c){
  var ul = _("#sliderHome");
  switch (c) {
    case 0:
      resetAll();
      ul.style.left = "0";

      setTimeout(function(){
        aniQuestionSlider(0);
        setTimeout(function(){
          sliderTypeIt(service1);
        },500);
      },700);
    break;
    case 1:
      resetAll();
      ul.style.left = "-100vw";

      setTimeout(function(){
        aniQuestionSlider(1);
        setTimeout(function(){
          sliderTypeIt(service2);
        },500);
      },700);
    break;
    case 2:
      resetAll();
      ul.style.left = "-200vw";
      setTimeout(function(){
        aniQuestionSlider(2);
        setTimeout(function(){
          sliderTypeIt(service3);
        },500);
      },700);
    break;
    case 3:
      resetAll();
      ul.style.left = "-300vw";
      setTimeout(function(){
        aniQuestionSlider(3);
        setTimeout(function(){
          sliderTypeIt(service4);
        },500);
      },700);
    break;
    case 4:
      resetAll();
      ul.style.left = "-400vw";
      setTimeout(function(){
        aniQuestionSlider(4);
        setTimeout(function(){
          sliderTypeIt(service5);
        },500);
      },700);
    break;
    case 5:
      resetAll();
      ul.style.left = "-500vw";
      setTimeout(function(){
        aniQuestionSlider(5);
        setTimeout(function(){
          sliderTypeIt(service6);
        },500);
      },700);
    break;
  }
  function aniQuestionSlider(c){
    var h4 = __("#sliderHome>li>div>h4"),
        lines = __("#sliderHome>li>div>h4>span");
    h4[c].style.opacity = "1";
    setTimeout(function(){
      lines[c].style.width = "80px";
    },500);
  }
  function resetAll(){
    var h4 = __("#sliderHome>li>div>h4"),
        lines = __("#sliderHome>li>div>h4>span");
        pathLenght = 76.39474487304688;
        service1.reset();
        service2.reset();
        service3.reset();
        service4.reset();
        service5.reset();
        service6.reset();
    for (var i = 0; i < h4.length; i++) {
      h4[i].style.opacity = "0";
      lines[i].style.width = "0";
      circlesBullet[i].style.opacity = "1";
      circlesBullet[i].style.strokeDashoffset = 76.39474487304688;
    }
  }
  function sliderTypeIt(el){
    el.go();
  }
}

function scrollHomeCover(){
  var vid = _("#coverVid"),
      interface = _("#sliderHomeWrap");
  var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: "80%", offset: 0}});
  new ScrollMagic.Scene({triggerElement: "#clientsHome", triggerHook: 'onEnter'})
  .addTo(controller)
  .on("progress", function (e) {
      vid.style.transform = "scale("+(1+(e.progress/1.8))+")";
      // interface.style.transform = "translateY(-"+(e.progress*500)+"px)";
      interface.style.opacity = 1 - e.progress;
  });
}

function homeTriggersLogo(){
  var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: "100%", offset: -65}});
  new ScrollMagic.Scene({triggerElement: "#gamingTextHome", triggerHook: 'onLeave'})
  .addTo(controller)
  .on("enter leave", function (e) {
    if(e.type === "enter"){
      if(!isMenuOpen){
        changeColorMenu("purple");
        isMenuPurple = true;
      }
    } else {
        changeColorMenu("white");
        isMenuPurple = false;
    }
  })
  new ScrollMagic.Scene({triggerElement: "#contactHome", triggerHook: 'onLeave'})
  .addTo(controller)
  .on("enter leave", function (e) {
    if(e.type === "enter"){
      if(!isMenuOpen){
        changeColorMenu("purple");
        isMenuPurple = true;
      }
    } else {
        changeColorMenu("white");
        isMenuPurple = false;
    }
  })
}

function audioMuted(t, c){
  var bars = __(".bar"),
      vid = _("#coverVid");
  if(c === "mute"){
    vid.muted = true;
    t.setAttribute("onclick", "audioMuted(this, 'unmute')");
    for (var i = 0; i < bars.length; i++) {
      bars[i].setAttribute("class", "bar noAnim");
    }
  } else {
    vid.muted = false;
    t.setAttribute("onclick", "audioMuted(this, 'mute')");
    for (var i = 0; i < bars.length; i++) {
      bars[i].setAttribute("class", "bar");
    }
  }
}

function imagesMoveHome(e, c){
  var movingEl = _("#movingEl"),
      spans = __(".gamingExperience");
  var x = e.clientX;
  var y = e.clientY;
      movingEl.setAttribute("src", "img/gaming/"+c+".gif");
      movingEl.style.opacity = "0.9";
      for (var i = 0; i < spans.length; i++) {
        spans[i].style.opacity = "0";
      }
}

function imagesOutHome(){
  var movingEl = _("#movingEl"),
  spans = __(".gamingExperience");
  movingEl.style.opacity = "0";
  for (var i = 0; i < spans.length; i++) {
    spans[i].style.opacity = "1";
  }
}

function fadeGamingText(){
  var p = _("#gamingText"),
     control = new ScrollMagic.Controller({
      globalSceneOptions:{
        duration: "100%",
        offset: 0
      }
  })
  new ScrollMagic.Scene({
    triggerElement: "#gamingText",
    triggerHook: "onEnter"
  })
  .addTo(control)
  .on("enter leave", function(e){
    if(e.type === "enter"){
      p.style.opacity = "1";
      animateSeq();
    }
    if(e.type === "leave"){
      p.style.opacity = "0";
    }
  })
}

function animationSectionsHome(){
  fadeInUp("#clientsTitle","#clientsTitle>span",300, 0);
  fadeInUp("#clientsTitle","#clientsText",300, 80);
  fadeInUp("#servicesTitle","#servicesTitle>span",300, 0);
  fadeInUp("#servicesTitle","#servicesText",300, 80);
  fadeScaleIn("#anchorClients", ".gridClients>ul>li", -50);
  fadeScaleIn("#anchorServices", ".gridServices>ul>li", -50);
  fadeScaleOut("#homeCover", ".gridClients>ul>li");
  fadeScaleOut("#gamingTextHome", ".gridServices>ul>li");
  contactTrigger();
  fadeGamingText();
}

var sayhi = new TypeIt("#sayhi", {
  strings: "Say Hi. Don't Be Shy!",
  cursor: false,
  speed: 60,
  afterComplete: function(){
      elementsContact("enter");
  }
});

function contactTrigger(){
  var h4 = _("#sayhi");
  var control = new ScrollMagic.Controller({globalSceneOptions: {duration: "200%", offset: 0}});
  new ScrollMagic.Scene({triggerElement: "#contactHome", triggerHook: 'onEnter'})
  .addTo(control)
  .on("enter leave", function (e) {
    if(e.type === "enter"){
      setTimeout(function(){
        h4.style.opacity = "1";
        sayhi.go();
      },500);
    }
    if(e.type === "leave"){
      h4.style.opacity = "0";
      elementsContact("out");
      sayhi.reset();
    }
  });
}

function elementsContact(c){
  var p = _("#formWrap>p"),
      form = _("#contactForm"),
      slider = _("#sliderContact");
  if(c === "enter"){
    p.style.opacity = "1";
    form.style.opacity = "1";
    slider.style.opacity = "1";
  } else {
    p.style.opacity = "0";
    form.style.opacity = "0";
    slider.style.opacity = "0";
  }
}

var cSliderContact = 0,
    slides = __(".slideContact"),
    circle = __(".bulletContact");
function sliderContactCount(){
  setInterval(function(){
    cSliderContact++;
    if(cSliderContact > 3) cSliderContact = 0;
      sliderContact(cSliderContact);
  },4000);
}

function resetAll(){
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.opacity = "0";
    circle[i].setAttribute("class", "circleBullet bulletContact");
    circle[i].style.strokeDashoffset = 76.39474487304688;
  }
}

function sliderContact(n){
  switch (n) {
    case 0:
      resetAll();
      slides[0].style.opacity = "1";
      circle[0].style.strokeDashoffset = 0;
      cSliderContact = 0;
    break;
    case 1:
      resetAll();
      slides[1].style.opacity = "1";
      circle[1].style.strokeDashoffset = 0;
      cSliderContact = 1;
    break;
    case 2:
      resetAll();
      slides[2].style.opacity = "1";
      circle[2].style.strokeDashoffset = 0;
      cSliderContact = 2;
    break;
    case 3:
      resetAll();
      slides[3].style.opacity = "1";
      circle[3].style.strokeDashoffset = 0;
      cSliderContact = 3;
    break;
  }
}
