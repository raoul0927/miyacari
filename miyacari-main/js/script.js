(function (d) {
  var config = {
      kitId: "tdf0ssx",
      scriptTimeout: 3000,
      async: true,
    },
    h = d.documentElement,
    t = setTimeout(function () {
      h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
    }, config.scriptTimeout),
    tk = d.createElement("script"),
    f = false,
    s = d.getElementsByTagName("script")[0],
    a;
  h.className += " wf-loading";
  tk.src = "https://use.typekit.net/" + config.kitId + ".js";
  tk.async = true;
  tk.onload = tk.onreadystatechange = function () {
    a = this.readyState;
    if (f || (a && a != "complete" && a != "loaded")) return;
    f = true;
    clearTimeout(t);
    try {
      Typekit.load(config);
    } catch (e) {}
  };
  s.parentNode.insertBefore(tk, s);
})(document);

jQuery(function () {
  var showFlug = false;
  var topBtn = jQuery("#back-top");

  topBtn.css("right", "-300px");
  var showFlug = false;

  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 1000) {
      if (showFlug == false) {
        showFlug = true;
        topBtn.stop().animate({ right: "0px" }, 50);
      }
    } else {
      if (showFlug) {
        showFlug = false;
        topBtn.stop().animate({ right: "-300px" }, 50);
      }
    }
  });
});

$(window).on("load", function () {
  if (!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
    $("#splash-logo").delay(700).fadeOut("slow");
    $("#splash")
      .delay(1500)
      .fadeOut("slow", function () {
        $("body").addClass("appear");
      });
    $(".splashbg").on("animationend", function () {});
  }
});

$(window).on("load", function () {
  if (!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
    $("#splash-logo").delay(800).fadeOut("slow");
    $("#splash")
      .delay(1500)
      .fadeOut("slow", function () {
        $("body").addClass("appear");
      });
    $(".splashbg2").on("animationend", function () {});
  }
});

$(window).on("load", function () {
  $("#splash-logo").delay(1200).fadeOut("slow");
  $("#splash")
    .delay(1500)
    .fadeOut("slow", function () {
      $("body").addClass("appear");
    });
  $(".splashbg3").on("animationend", function () {});
});

$(function () {
  $('a[href^="#"]').click(function () {
    let speed = 1000;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top;
    $("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });
});

$(function () {
  $(window).scroll(function () {
    $(".fadeUp").each(function () {
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight) {
        $(this).addClass("effect-scroll");
      }
    });
  });
});

$(function () {
  $(window).scroll(function () {
    $(".fadeUp2").each(function () {
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight) {
        $(this).addClass("effect-scroll");
      }
    });
  });
});

$(function () {
  $(window).scroll(function () {
    $(".fadeUp3").each(function () {
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight) {
        $(this).addClass("effect-scroll");
      }
    });
  });
});

$(function () {
  $(window).scroll(function () {
    $(".fadeLeft").each(function () {
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 300) {
        $(this).addClass("effect-scroll");
      }
    });
  });
});

$(function () {
  $(window).scroll(function () {
    $(".fadeRight").each(function () {
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 300) {
        $(this).addClass("effect-scroll");
      }
    });
  });
});

$(function () {
  $(window).scroll(function () {
    $(".fadeIn").each(function () {
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight) {
        $(this).addClass("effect-scroll");
      }
    });
  });
});
