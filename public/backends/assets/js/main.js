"use strict";

function initProductHover() {
  $(document).on("mouseenter mouseleave", "#pageContent .product", function (
    e
  ) {
    var t = $(this),
      n = window.innerWidth,
      i = $(".tabs-wrapper");
    t.parents(".product-listing").hasClass("row-view") ||
      t.parents().hasClass("modal-quick-view") ||
      t.hasClass("no-hover") ||
      ("mouseenter" === e.type && n >= 1300
        ? (t
            .css({
              height: t.innerHeight(),
            })
            .addClass("hovered")
            .closest(i)
            .addClass("select-block"),
          $("body").addClass("hover-product"))
        : "mouseleave" === e.type &&
          e.relatedTarget &&
          (t
            .removeClass("hovered")
            .removeAttr("style")
            .closest(i)
            .removeClass("select-block"),
          $("body").removeClass("hover-product")));
  });
}

function priceSlider() {
  if ($(".priceSlider").length) {
    var e = document.getElementsByClassName("priceSlider")[0];
    noUiSlider.create(e, {
      start: [100, 900],
      connect: !0,
      tooltips: !0,
      step: 1,
      range: {
        min: 0,
        max: 1e3,
      },
    });
    var t = document.getElementById("priceMax"),
      n = document.getElementById("priceMin");
    e.noUiSlider.on("update", function (e, i) {
      var o = e[i];
      i ? (t.value = o) : (n.value = o);
    }),
      t.addEventListener("change", function () {
        e.noUiSlider.set([null, this.value]);
      }),
      n.addEventListener("change", function () {
        e.noUiSlider.set([this.value, null]);
      });
  }
}

function countDown(e) {
  if ($(".countdown").length) {
    var e = e || !1;
    $(".countdown").each(function () {
      var t = $(this),
        n = t.data("date"),
        i = !1,
        o = $("[name=timezone]");
      if (
        ("function" == typeof moment &&
          o.length &&
          (i = moment.tz(t.data("date"), o.attr("content"))),
        (n = n.split("-")))
      ) {
        n = n.join("/");
        var a = i ? i.toDate() : n;
        t.countdown(a, function (t) {
          function n(e, t, n) {
            (0 !== t || n) && e(i);
          }
          var i = '<span class="countdown-row">';
          n(
            function () {
              i +=
                '<span class="countdown-section"><span class="countdown-amount">' +
                t.offset.totalDays +
                '</span><span class="countdown-period">' +
                set_day +
                "</span></span>";
            },
            t.offset.totalDays,
            e
          ),
            n(
              function () {
                i +=
                  '<span class="countdown-section"><span class="countdown-amount">' +
                  t.offset.hours +
                  '</span><span class="countdown-period">' +
                  set_hour +
                  "</span></span>";
              },
              t.offset.hours,
              e
            ),
            n(
              function () {
                i +=
                  '<span class="countdown-section"><span class="countdown-amount">' +
                  t.offset.minutes +
                  '</span><span class="countdown-period">' +
                  set_minute +
                  "</span></span>";
              },
              t.offset.minutes,
              e
            ),
            n(
              function () {
                i +=
                  '<span class="countdown-section"><span class="countdown-amount">' +
                  t.offset.seconds +
                  '</span><span class="countdown-period">' +
                  set_second +
                  "</span></span>";
              },
              t.offset.seconds,
              e
            ),
            (i += "</span>"),
            $(this).html(i);
        });
      }
    });
  }
}

function productSmall() {
  if ($("#pageContent .product").length > 0) {
    var e = $("#pageContent  .product"),
      t = parseInt(e.width());
    209 >= t ? e.addClass("small") : e.removeClass("small"),
      140 >= t ? e.addClass("small-xs") : e.removeClass("small-xs");
  }
}

function carousel(e) {
  var t = (window.innerWidth || $(window).width(), $.makeArray(arguments)),
    n = t[1] > 0 ? t[1] : 6,
    i = t[2] > 0 ? t[2] : 4,
    o = t[3] > 0 ? t[3] : t[2],
    a = t[4] > 0 ? t[4] : t[3],
    r = t[5] > 0 ? t[5] : 1,
    s = 500;
  e.slick({
    slidesToShow: n,
    slidesToScroll: 1,
    speed: s,
    responsive: [
      {
        breakpoint: 1770,
        settings: {
          slidesToShow: i,
          slidesToScroll: i,
        },
      },
      {
        breakpoint: 1199,
        settings: {
          slidesToShow: o,
          slidesToScroll: o,
        },
      },
      {
        breakpoint: 798,
        settings: {
          slidesToShow: a,
          slidesToScroll: a,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: r,
          slidesToScroll: r,
        },
      },
    ],
  });
}

function slickSlider(e) {
  e.not(".slick-initialized").slick({
    infinite: !0,
    dots: !0,
    arrows: !1,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
}

function addResizeCarousels(e, t, n) {
  if (!e) return !1;
  var i = $(e),
    t = t || 768,
    n = n || null,
    o = window.innerWidth || $(window).width();
  t > o
    ? i.each(function () {
        $(this).not(".slick-initialized").slick(n);
      })
    : i.each(function () {
        $(this).hasClass("slick-initialized") && $(this).slick("unslick");
      });
}

function expanderList() {
  $(".expander-list .expander").each(function () {
    $(this).parent("li").hasClass("active") &&
      ($(this).next("ul").slideDown(0), $(this).parent().addClass("open"));
  }),
    $(".expander-list .expander").on("click", function (e) {
      e.preventDefault;
      var t = 300,
        n = $(this).parent(),
        i = $(this).next("ul");
      n.hasClass("open")
        ? (n.removeClass("open"), i.slideUp(t))
        : (n.addClass("open"), i.slideDown(t));
    });
}

function collapseBlock() {
  if ($("#pageContent .collapse-block").length > 0) {
    var e = $("#pageContent .collapse-block"),
      t = $("#pageContent .collapse-block_title"),
      n = $(".collapse-block_content");
    e.each(function () {
      $(this).hasClass("open")
        ? $(this).find(n).slideDown()
        : $(this).find(n).slideUp();
    }),
      t.on("click", function (e) {
        e.preventDefault;
        var t = 300,
          n = $(this).parent(),
          i = $(this).next(".collapse-block_content");
        n.hasClass("open")
          ? (n.removeClass("open"), i.slideUp(t))
          : (n.addClass("open"), i.slideDown(t));
      });
  }
}

function submenuBlock() {
  if ($("#pageContent .submenu-block").length > 0) {
    var e = $("#pageContent .submenu-block"),
      t = $("#pageContent .submenu-block_title"),
      n = $(".submenu-block_content");
    e.each(function () {
      $(this).hasClass("open")
        ? $(this).find(n).slideDown()
        : $(this).find(n).slideUp();
    }),
      t.on("click", function (e) {
        e.preventDefault;
        var t = 300,
          n = $(this).parent(),
          i = $(this).next(".submenu-block_content");
        n.hasClass("open")
          ? (n.removeClass("open"), i.slideUp(t))
          : (n.addClass("open"), i.slideDown(t));
      });
  }
}

function leftColumnMobile() {
  $(".slide-column-close").trigger("click");
}

function rowViewProductSmall() {
  var e = $(".product-listing.row-view .product").width();
  591 > e && $(".product").addClass("short");
}

function listingModeToggle() {
  var e = $(".filters-row");
  if (e.length) {
    var t = e.find("a.link-row-view"),
      n = e.find("a.link-grid-view"),
      i = e.find(".link-view-mobile"),
      o = $(".product-listing");
    t.on("click", function (e) {
      e.preventDefault(),
        $(this).addClass("active"),
        n.removeClass("active"),
        i.removeClass("active"),
        o
          .addClass("row-view")
          .removeClass("row-view-one")
          .find(".product")
          .removeClass("small small-xs"),
        rowViewProductSmall();
    }),
      n.on("click", function (e) {
        e.preventDefault(),
          $(this).addClass("active"),
          t.removeClass("active"),
          i.removeClass("active"),
          o.removeClass("row-view").removeClass("row-view-one"),
          $(window).trigger("resize");
      }),
      i.on("click", function (e) {
        e.preventDefault(),
          $(this).toggleClass("active"),
          n.removeClass("active"),
          t.removeClass("active"),
          o.removeClass("row-view").toggleClass("row-view-one");
      });
  }
}

function headerViewSearch() {
  $("body")
    .on("click", "header .search-open", function (e) {
      e.preventDefault(),
        $(this).parent(".search").addClass("open"),
        $(this).next("#search-dropdown, .search-dropdown").addClass("open"),
        $("header .badge").addClass("badge--hidden"),
        $(".header-01, .header-02, .header-03").length > 0 &&
          $(".header-menu").addClass("opacity"),
        ($(".header-04").length > 0 || $(".header-08").length > 0) &&
          $(
            ".logo, .toggle-menu, .language, .currency, .account, .cart"
          ).addClass("opacity"),
        $(".header-05").length > 0 &&
          $(".logo, .account, .cart, .header-menu").addClass("opacity"),
        $(".header-07").length > 0 && $(".cart").addClass("opacity");
    })
    .on("click", "header .search-close", function (e) {
      e.preventDefault(),
        $(this).closest(".search").removeClass("open"),
        $(this)
          .closest("#search-dropdown, .search-dropdown")
          .removeClass("open"),
        $("header .badge").removeClass("badge--hidden"),
        $(".header-01, .header-02, .header-03").length > 0 &&
          $(".header-menu").removeClass("opacity"),
        ($(".header-04").length > 0 || $(".header-08").length > 0) &&
          $(
            ".logo, .toggle-menu, .language, .currency, .account, .cart"
          ).removeClass("opacity"),
        $(".header-05").length > 0 &&
          $(".logo, .account, .cart, .header-menu").removeClass("opacity"),
        $(".header-07").length > 0 && $(".cart").removeClass("opacity");
    });
}

function slideColumn() {
  $(".leftColumn, .slide-column-close").length > 0 &&
    ($(".slide-column-close").addClass("position-fix"),
    $(".slide-column-open").on("click", function (e) {
      e.preventDefault(),
        $(".leftColumn, .slide-column-close").addClass("column-open"),
        $("body").css("top", -$("body").scrollTop()),
        $("body")
          .addClass("no-scroll")
          .append('<div class="modal-filter"></div>'),
        $(".modal-filter").length > 0 &&
          $(".modal-filter").click(function () {
            $(".slide-column-close").trigger("click");
          });
    }),
    $(".slide-column-close").on("click", function (e) {
      e.preventDefault(),
        $(".leftColumn, .slide-column-close").removeClass("column-open");
      var t = -1 * parseInt($("body").css("top").replace("px", ""));
      $("body").removeAttr("style"),
        $("body").removeClass("no-scroll"),
        $("body").scrollTop(t),
        $(".modal-filter").unbind(),
        $(".modal-filter").remove();
    }));
}

function listDetachRightCol() {
  var e = $("#pageContent .leftColumn .detach-rightCol"),
    t = $("#pageContent .rightColumn .detach-rightCol"),
    n = $("#pageContent .rightColumn"),
    i = $("#pageContent .leftColumn");
  if (e.length && "block" == n.css("display")) {
    var o = e.detach();
    n.prepend(o);
  } else if (t.length && "none" == n.css("display")) {
    var a = t.detach();
    i.append(a);
  }
}

function cartTableDetach() {
  var e = $(".shopping-cart-table .detach-quantity-desctope"),
    t = $(".shopping-cart-table .detach-quantity-mobile");
  if (e.length && "block" == t.parent().css("display")) {
    var n = e.find(".input").detach().get(0);
    t.prepend(n);
  } else if (t.length && "none" == t.parent().css("display")) {
    var n = t.find(".input").detach().get(0);
    e.prepend(n);
  }
}

function inputCounter() {
  $(".input-counter").length > 0 &&
    ($(".minus-btn, .plus-btn").click(function (e) {
      var t = $(this).parent().find("input"),
        n =
          parseInt(t.val()) +
          parseInt("plus-btn" == e.currentTarget.className ? 1 : -1);
      t.val(n).change();
    }),
    $(".input-counter input")
      .change(function () {
        var e = $(this),
          t = 1,
          n = parseInt(e.val()),
          i = parseInt(e.attr("size"));
        (n = Math.min(n, i)), (n = Math.max(n, t)), e.val(n);
      })
      .on("keypress", function (e) {
        13 == e.keyCode && e.preventDefault();
      }));
}

function footerCollapse() {
  $("body").on("click", ".mobile-collapse_title", function (e) {
    e.preventDefault, $(this).parent(".mobile-collapse").toggleClass("open");
  });
}

function searchDropDown() {
  var e = $("header .search-open"),
    t = $("header .search-close"),
    n = $("header .badge");
  e.length &&
    (e.on("click", function (e) {
      e.preventDefault(),
        $(this).parent(".search").addClass("open"),
        $(this).next("#search-dropdown, .search-dropdown").addClass("open"),
        n.addClass("badge--hidden");
    }),
    t.on("click", function (e) {
      e.preventDefault(),
        $(this).closest(".search").removeClass("open"),
        $(this)
          .closest("#search-dropdown, .search-dropdown")
          .removeClass("open"),
        n.removeClass("badge--hidden");
    }));
}

function cartSlideIni() {
  $("header .cart").length > 0 &&
    ($("body")
      .on("click", "header .cart .dropdown-toggle", function (e) {
        headerCartSize(),
          setTimeout(function () {
            $(".cart .dropdown").toggleClass("open");
          }, 0),
          e.preventDefault();
      })
      .on("click", "header .cart .cart-close", function (e) {
        $(".cart .dropdown").toggleClass("open"),
          $("body").removeClass("cart-open"),
          e.preventDefault();
      }),
    $(window).resize(function () {
      $(".cart .dropdown").hasClass("open") && headerCartSize();
    }));
}

function headerCartSize() {
  $("header .cart").find(".dropdown-menu").scrollTop(0), cartHeight();
}

function cartHeight() {
  var e = $("header .cart").find(".dropdown-menu");
  e.removeAttr("style"),
    setTimeout(function () {
      var t = $(window).height(),
        n = e.height(),
        i = parseInt(t - n);
      0 > i
        ? (e.css({
            "max-height": n + i,
            overflow: "auto",
            "overflow-x": "hidden",
          }),
          $("body").addClass("cart-open"))
        : $("body").removeClass("cart-open");
    }, 10);
}

function radioClickList() {
  $(".radio-list").length > 0 &&
    $(".radio-list li").on("click", function () {
      $(".radio-list li").removeClass("active"), $(this).addClass("active");
    });
}

function calendarDatepicker() {
  $(".calendarDatepicker").length > 0 && $(".calendarDatepicker").datepicker();
}

function verticalCarousel() {
  var e = $(".vertical-carousel");
  return 0 == e.length
    ? !1
    : (e.slick({
        infinite: !1,
        dots: !1,
        vertical: !0,
        slidesToShow: 2,
        slidesToScroll: 1,
      }),
      void $(window).on("resize", function () {
        e.slick("setPosition").slick("setPosition");
      }));
}

function gridGalleryMasonr() {
  $(window).on("load", function () {
    if ($(".gallery-masonry").length > 0) {
      var e = $(".grid-gallery-masonry").isotope({
          itemSelector: ".element-item",
          layoutMode: "masonry",
          masonry: {
            gutter: 0,
          },
        }),
        t = {
          ium: function () {
            var e = $(this).find(".name").text();
            return e.match(/ium$/);
          },
        };
      $(".gallery-masonry .filter-nav").on("click", ".button", function () {
        var n = $(this).attr("data-filter");
        (n = t[n] || n),
          e.isotope({
            filter: n,
          });
      }),
        $(".gallery-masonry .filter-nav .button").each(function (e, t) {
          var n = $(t);
          n.on("click", ".button", function () {
            n.find(".is-checked").removeClass("is-checked"),
              $(this).addClass("is-checked");
          });
        });
    }
  });
}

function videoPost() {
  $(".video-block").length > 0 &&
    $(".link-video").click(function (e) {
      e.preventDefault();
      var t = $(this).parent().find(".movie")[0];
      t.paused
        ? (t.play(), $(this).addClass("play"))
        : (t.pause(), $(this).removeClass("play"));
    });
}

function videoPopup() {
  $("#modalVideoProduct")
    .on("show.bs.modal", function (e) {
      var t = $(e.relatedTarget),
        n = t.attr("data-value"),
        i = t.attr("data-type");
      ("youtube" == i || "vimeo" == i || void 0 == i) &&
        $('<iframe src="' + n + '" allowfullscreen></iframe>').appendTo(
          $(this).find(".modal-video-content")
        ),
        "video" == i &&
          ($(
            '<div class="video-block"><a href="#" class="link-video"></a><video class="movie"  src="' +
              n +
              '" allowfullscreen></video></div>'
          ).appendTo($(this).find(".modal-video-content")),
          videoPost());
    })
    .on("hidden.bs.modal", function () {
      $(this).find(".modal-video-content").empty();
    });
}

function initStuck(e) {
  if (!$stucknav.hasClass("disabled")) {
    var e = e || !1,
      t = -1 !== getInternetExplorerVersion() ? !0 : !1;
    if ("off" == e) return !1;
    $(window).scroll(function () {
      var e = $("header").innerHeight() - 20;
      if ($(window).scrollTop() > e) {
        if ($stucknav.hasClass("stuck")) return !1;
        $stucknav.hide(),
          $stucknav.addClass("stuck"),
          window.innerWidth < 1025
            ? $stuckmenuparentbox.append($menumobile.detach())
            : $stuckmenuparentbox.append($menu.detach()),
          $stuckcartparentbox.append($cart.detach()),
          $stucknav
            .find(".stuck-cart-parent-box > .cart > .dropdown")
            .hasClass("open") || t
            ? $stucknav.stop().show()
            : $stucknav.stop().fadeIn(300);
      } else {
        if (!$stucknav.hasClass("stuck")) return !1;
        if (
          ($stucknav.hide(),
          $stucknav.removeClass("stuck"),
          window.innerWidth < 1025)
        )
          return (
            $mobilemenuparentbox.append($menumobile.detach()),
            $mobileparentcart.append($cart.detach()),
            !1
          );
        $menuparentbox.append($menu.detach()),
          $cartparentbox.append($cart.detach());
      }
    }),
      $(window).resize(function () {
        return $stucknav.hasClass("stuck")
          ? void setTimeout(function () {
              $(window).width() < 1025
                ? ($menuparentbox.append($menu.detach()),
                  $stuckmenuparentbox.append($menumobile.detach()))
                : ($mobilemenuparentbox.append($menumobile.detach()),
                  $stuckmenuparentbox.append($menu.detach()));
            }, 0)
          : !1;
      });
  }
}

function mobileparentcart() {
  $(window).resize(function () {
    setTimeout(function () {
      if (window.innerWidth < 1025) {
        if ($mobileparentcart.children().lenght) return !1;
        if ($(".stuck").length) return !1;
        $mobileparentcart.append($cart.detach());
      } else {
        if ($cartparentbox.children().lenght) return !1;
        if ($(".stuck").length) return !1;
        $cartparentbox.append($cart.detach());
      }
    }, 0);
  });
}

function mobileParentCurrency() {
  $(window).resize(function () {
    setTimeout(function () {
      if (window.innerWidth < 1025) {
        if ($mobileparentcurrency.children().lenght) return !1;
        $mobileparentcurrency.append($currency.detach());
      } else {
        if ($currencyparentbox.children().lenght) return !1;
        $currencyparentbox.append($currency.detach());
      }
    }, 0);
  });
}

function mobileParentLanguage() {
  $(window).resize(function () {
    setTimeout(function () {
      if (window.innerWidth < 1025) {
        if ($mobileparentlanguage.children().lenght) return !1;
        $mobileparentlanguage.append($language.detach());
      } else {
        if ($languageparentbox.children().lenght) return !1;
        $languageparentbox.append($language.detach());
      }
    }, 0);
  });
}

function setSlickGallery(e) {
  if (0 == e.length) return !1;
  var t = $.makeArray(arguments),
    n = window[t[t.length - 1]];
  "function" == typeof n && n(t[0], t[1], t[2], t[3], t[4], t[5]);
}

function l9rectangle() {
  var e = $(".l9-one-product-js");
  e.find(".row").removeAttr("style"),
    setTimeout(function () {
      var t = window.innerHeight,
        n = e.offset().top,
        i = e.outerHeight(),
        o = parseInt(t - n - i);
      o > 0 && e.find(".row").css("padding-bottom", o);
    }, 100);
}

function getInternetExplorerVersion() {
  var e = -1;
  if ("Microsoft Internet Explorer" == navigator.appName) {
    var t = navigator.userAgent,
      n = new RegExp("MSIE ([0-9]{1,}[.0-9]{0,})");
    null != n.exec(t) && (e = parseFloat(RegExp.$1));
  } else if ("Netscape" == navigator.appName) {
    var t = navigator.userAgent,
      n = new RegExp("Trident/.*rv:([0-9]{1,}[.0-9]{0,})");
    null != n.exec(t) && (e = parseFloat(RegExp.$1));
  }
  return e;
}

function eventHandler(e) {
  $("#" + e.target.id)
    .find("[data-sectionname]")
    .initSection();
}

function initProductOptions() {
  $("body").on("click", ".productitem-option1-js a", function (e) {
    var t = $(this);
    optionsHandler(e, t);
    var n = "." + t.attr("data-tag") + "-js",
      i = t.closest(".product_inside_info");
    (n = i.optionsSetParams(n, ".productitem-option2-js")),
      i.optionsSetParams(n, ".productitem-option3-js");
  }),
    $("body").on("click", ".productitem-option2-js a", function (e) {
      var t = $(this);
      optionsHandler(e, t);
      var n = "." + t.attr("data-tag") + "-js",
        i = t.closest(".product_inside_info");
      i.optionsSetParams(n, ".productitem-option3-js");
    }),
    $("body").on("click", ".productitem-option3-js a", function (e) {
      optionsHandler(e, $(this));
    });
}

function optionsHandler(e, t) {
  return (
    e.preventDefault(), t.parent().hasClass("active") ? !1 : void setNewData(t)
  );
}

function setNewData(e) {
  e.parent().parent().find(".active").removeClass("active"),
    e.parent().addClass("active");
  var t = e.closest(".product"),
    n = e.attr("data-img");
  "" != n && t.find("img").first().attr("src", n),
    t
      .find(".addtocart-item-js")
      .attr("href", "/cart/add.js?quantity=1&id=" + e.attr("data-var_id"));
  var i = t.find(".price span:first-child"),
    o = t.find(".old-price");
  i.html(Shopify.formatMoney(e.attr("data-price"), money_format));
  var a = String(e.attr("data-compprice"));
  o.html(Shopify.formatMoney(a, money_format)),
    a
      ? (o.hasClass("hide") && o.removeClass("hide"),
        !i.hasClass("new-price") && i.addClass("new-price"))
      : (!o.hasClass("hide") && o.addClass("hide"),
        i.hasClass("new-price") && i.removeClass("new-price")),
    $("body").trigger("refreshCurrency");
}

function autoscrollhandler() {
  var e = $(".autoscroll");
  if (0 == e.length) return !1;
  var t = parseInt(e.parent().offset().top),
    n = getWindowHeight() + getWindowTopY();
  n >= t && e.removeClass("autoscroll").trigger("click");
}

function getWindowHeight() {
  return window.innerHeight;
}

function getWindowTopY() {
  return window.pageYOffset || document.documentElement.scrollTop;
}
var $ = jQuery.noConflict(),
  header_menu_timeout = 200,
  header_menu_delay = 200;
$(".product").length && initProductHover(),
  $(window).on("load resize", productSmall);
var addResizeCarousels_timeout;
$(window).resize(function () {
  clearTimeout(addResizeCarousels_timeout),
    (addResizeCarousels_timeout = setTimeout(function () {
      addResizeCarousels(".carousel-products-mobile", 1200, {
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 922,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      }),
        addResizeCarousels(".carousel-products-mobile-md", 1025, {
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 583,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        }),
        addResizeCarousels(".carousel-new-mobile", 992, {
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 426,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 376,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        }),
        addResizeCarousels(".carousel-new-mobile-index", 992, {
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 426,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 376,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        }),
        addResizeCarousels(".carousel-new-mobile2", 769, {
          slidesToShow: 2,
          slidesToScroll: 1,
          rows: 2,
          arrows: false,
          dots: true,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 426,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 376,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        }),
        addResizeCarousels(".carousel-category-mobile", 1025, {
          slidesToShow: 2,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 922,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
          ],
        }),
        addResizeCarousels(".carousel-properties-mobile", 1085, {
          slidesToShow: 4,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 922,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 414,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
          ],
        });
    }, 100));
}),
  jQuery(function (e) {
    function t() {
      function t() {
        var t = o.find("div.pull-left .filters-row_select").detach(),
          n = o.find("div.pull-right .filters-row_select").detach(),
          i = o.find(".link-sort-top");
        e(".filters-mobile")
          .append(i, t, n)
          .find(".filters-row_select")
          .removeClass("hidden-sm hidden-xs");
      }

      function n() {
        var e = a.find(".filters-row_select").first().detach(),
          t = a.find(".filters-row_select").last().detach(),
          n = a.find(".link-sort-top").detach();
        o.find("div.pull-left").prepend(e, n),
          o.find("div.pull-right").prepend(t);
      }
      var i = window.innerWidth || e(window).width(),
        o = e(".filters-row"),
        a = e(".filters-mobile");
      1024 >= i
        ? t()
        : i > 1024
        ? n()
        : (e("#pageContent .filters-row")
            .addClass("filter-no-sidebar")
            .find(".filters-row_select")
            .removeClass("hidden-sm hidden-xs"),
          e("#pageContent .filters-row .slide-column-open").remove());
    }
    e(window).on("ready resize", function () {
      e("#pageContent .filters-row").length &&
        e("#pageContent .leftColumn").length &&
        t();
    });
  }),
  $(window).on("ready resize", function () {
    $("#pageContent .rightColumn").length && listDetachRightCol();
  }),
  $(window).on("ready resize", function () {
    $(".shopping-cart-table").length && cartTableDetach();
  }),
  (function () {
    function e() {
      var e = $(".dropdown.hover");
      e.find(".dropdown-menu").not(".one-col").length && e.length && o.call(e);
    }
    var t = header_menu_timeout,
      n = header_menu_delay,
      i = !1,
      o = function () {
        var e = window.innerHeight,
          t = $(this).find(".dropdown-menu"),
          n = t.get(0).getBoundingClientRect().top,
          i = e - n,
          o = t.innerHeight(),
          a = $(".back-to-top");
        if (o > i) {
          var r = $("body"),
            s = $(".stuck-nav");
          t.css({
            maxHeight: i - 20,
            overflow: "auto",
          });
          var l = function () {
            var e = $("<div>").css({
              overflowY: "scroll",
              width: "50px",
              height: "50px",
              visibility: "hidden",
            });
            r.append(e);
            var t = e.get(0).offsetWidth - e.get(0).clientWidth;
            return e.remove(), t;
          };
          r.css({
            overflowY: "hidden",
            paddingRight: l(),
          }),
            s.css({
              paddingRight: l(),
            }),
            a.css({
              right: l(),
            });
        }
      };
    $(".header-menu, .menu-vertical nav").length > 0 &&
      ($(document).on(
        {
          mouseenter: function () {
            var e = $(this),
              a = this;
            i = setTimeout(function () {
              var t = e.find(".carousel-menu-1.header-menu-product"),
                i = e.find(".dropdown-menu");
              if (
                (e
                  .addClass("active")
                  .find(".dropdown-menu")
                  .stop()
                  .addClass("hover")
                  .fadeIn(n),
                i.length & !i.hasClass("one-col") && o.call(a),
                t.length)
              ) {
                t.hasClass("slick-initialized")
                  ? t.slick("setPosition")
                  : setSlickGallery(t, 2, 2, 2, 2, 2, "carousel");
                var r = $(".header-menu .header-menu-product");
                if (r.length) {
                  var s = r.parent().width(),
                    s = s - 8;
                  r.css({
                    width: s,
                  });
                }
              }
            }, t);
          },
          mouseleave: function (e) {
            var t = $(this),
              n = t.find(".dropdown-menu");
            (!$(e.target).parents(".dropdown-menu").length ||
              $(e.target).parents(".megamenu-submenu").length ||
              $(e.target).parents(".one-col").length) &&
              (i !== !1 && (clearTimeout(i), (i = !1)),
              n.length
                ? n.stop().fadeOut({
                    duration: 0,
                    complete: function () {
                      t.removeClass("active")
                        .find(".dropdown-menu")
                        .removeClass("hover");
                    },
                  })
                : t
                    .removeClass("active")
                    .find(".dropdown-menu")
                    .removeClass("hover"),
              n.removeAttr("style"),
              $("body").removeAttr("style"),
              $(".stuck-nav").css({
                paddingRight: "inherit",
              }),
              $(".back-to-top").css({
                right: 0,
              }));
          },
        },
        ".header-menu li, .menu-vertical nav li"
      ),
      $(".multicolumn ul li").hover(
        function () {
          var e = $(this).find("ul:first");
          if (e.length) {
            var t = window.innerWidth,
              n = (window.innerHeight, parseInt(e.css("width"))),
              i = this.getBoundingClientRect().right,
              o = this.getBoundingClientRect().left;
            n > t - i
              ? e.removeClass("left").addClass("right")
              : n > o
              ? e.removeClass("right").addClass("left")
              : e.removeClass("left right"),
              e.stop(!0, !0).fadeIn(300);
          }
        },
        function () {
          $(this)
            .find("ul:first")
            .stop(!0, !0)
            .fadeOut(300)
            .removeAttr("style");
        }
      ),
      $(".megamenu-submenu li").hover(
        function () {
          var e = $(this).find("ul:first");
          if (e.length) {
            var t = $(this).parents(".dropdown").find(".dropdown-menu"),
              n = t.get(0).getBoundingClientRect().left,
              i = t.get(0).getBoundingClientRect().right,
              o = t.get(0).getBoundingClientRect().bottom,
              a = parseInt(e.css("width")),
              r = this.getBoundingClientRect().right,
              s = this.getBoundingClientRect().left;
            a > i - 20 - r
              ? e.removeClass("left").addClass("right")
              : n > s - a - 20
              ? e.removeClass("right").addClass("left")
              : e.removeClass("left right"),
              e.stop(!0, !0).fadeIn(300);
            var l = e.get(0).getBoundingClientRect().bottom;
            if (l > o) {
              var c = o - l;
              e.css({
                top: c,
              });
            }
          }
        },
        function () {
          $(this)
            .find("ul:first")
            .stop(!0, !0)
            .fadeOut(300)
            .removeAttr("style");
        }
      ),
      $(".megamenu div").hover(
        function () {
          $(this).children(".title-underline").addClass("active");
        },
        function () {
          $(this).children(".title-underline").removeClass("active");
        }
      )),
      $(".menu-vertical nav").length > 0 &&
        $(".menu-vertical nav li:not(.multicolumn)").hover(
          function () {
            var e = ($(this), $(".menu-vertical").innerHeight()),
              t = $(this).find(".dropdown-menu").innerHeight();
            e >= t &&
              $(this).find(".dropdown-menu").css({
                minHeight: e,
              });
          },
          function () {
            $(this).find(".dropdown-menu").removeAttr("style");
          }
        ),
      $(window).on("scroll", function () {
        e();
      });
  })(),
  $(function () {
    // $("[data-toggle=popover]").popover()
  });
var elevateZoomWidget = {
  scroll_zoom: !0,
  class_name: ".zoom-product",
  thumb_parent: $("#smallGallery"),
  scrollslider_parent: $(".slider-scroll-product"),
  checkNoZoom: function () {
    return $(this.class_name).parent().parent().hasClass("no-zoom");
  },
  init: function (e) {
    var t = this,
      n = window.innerWidth || $(window).width(),
      i = $(t.class_name),
      o = t.thumb_parent;
    if ((t.initBigGalleryButtons(), t.scrollSlider(), 0 == i.length)) return !1;
    if (!t.checkNoZoom()) {
      var a = i.parent().parent().attr("data-scrollzoom");
      (a = a ? a : t.scroll_zoom),
        (t.scroll_zoom = "false" == a ? !1 : !0),
        n > 767 && t.configureZoomImage(),
        t.resize();
    }
    if (0 == o.length) return !1;
    var r =
      o.parent().attr("class").indexOf("-vertical") > -1
        ? "vertical"
        : "horizontal";
    t[r](o), t.setBigImage(o);
  },
  configureZoomImage: function () {
    var e = this;
    $(".zoomContainer").remove();
    var t = $(this.class_name);
    t.each(function () {
      var e = $(this),
        t = e.removeData("elevateZoom").clone();
      e.after(t).remove();
    }),
      setTimeout(function () {
        $(e.class_name).elevateZoom({
          gallery: e.thumb_parent.attr("id"),
          zoomType: "inner",
          scrollZoom: Boolean(e.scroll_zoom),
          cursor: "crosshair",
          zoomWindowFadeIn: 300,
          zoomWindowFadeOut: 300,
        });
      }, 100);
  },
  resize: function () {
    var e = this;
    $(window).resize(function () {
      var t = window.innerWidth || $(window).width();
      return 767 >= t ? !1 : void e.configureZoomImage();
    });
  },
  horizontal: function (e) {
    e.slick({
      infinite: !0,
      dots: !1,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
          },
        },
      ],
    });
  },
  vertical: function (e) {
    e.slick({
      vertical: !0,
      infinite: !0,
      slidesToShow: 5,
      slidesToScroll: 1,
      verticalSwiping: !0,
      arrows: !0,
      dots: !1,
      centerPadding: "6px",
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 1,
          },
        },
      ],
    });
  },
  initBigGalleryButtons: function () {
    var e = $(".bigGallery");
    return 0 == e.length
      ? !1
      : void $("body")
          .on("mouseenter", ".zoomContainer", function () {
            e.find("button").addClass("show");
          })
          .on("mouseleave", ".zoomContainer", function () {
            e.find("button").removeClass("show");
          });
  },
  scrollSlider: function () {
    var e = this.scrollslider_parent;
    return 0 == e.length
      ? !1
      : (e.on("init", function (t, n) {
          e.css({
            opacity: 1,
          });
        }),
        void e
          .css({
            opacity: 0,
          })
          .slick({
            infinite: !1,
            vertical: !0,
            verticalScrolling: !0,
            dots: !0,
            arrows: !1,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                },
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                },
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                },
              },
            ],
          })
          .mousewheel(function (e) {
            e.preventDefault(),
              e.deltaY < 0
                ? $(this).slick("slickNext")
                : $(this).slick("slickPrev");
          }));
  },
  setBigImage: function (e) {
    var t = this;
    e.find("a").click(function (n) {
      t.checkNoZoom() && n.preventDefault();
      var i = $(t.class_name),
        o = t.checkNoZoom() ? "data-image" : "data-zoom-image",
        a = t.checkNoZoom() ? "src" : "data-zoom-image",
        r = $(this).attr(o);
      return (
        i.attr(a, r),
        t.checkNoZoom()
          ? (e.find(".zoomGalleryActive").removeClass("zoomGalleryActive"),
            void $(this).addClass("zoomGalleryActive"))
          : !1
      );
    });
  },
};
elevateZoomWidget.init(),
  $(document).ready(function () {
    countDown(!0),
      productSmall(),
      expanderList(),
      collapseBlock(),
      submenuBlock(),
      listingModeToggle(),
      slideColumn(),
      inputCounter(),
      footerCollapse(),
      searchDropDown(),
      cartSlideIni(),
      radioClickList(),
      calendarDatepicker(),
      priceSlider(),
      verticalCarousel(),
      gridGalleryMasonr(),
      headerViewSearch(),
      videoPopup(),
      videoPost(),
      setSlickGallery($(".slider-blog-fluid"), 1, 1, 1, 1, 1, "slickSlider"),
      setSlickGallery($(".brands-page-js"), 6, 5, 4, 2, 1, "carousel"),
      setSlickGallery($(".carousel-menu-2"), 5, 5, 4, 3, 2, "carousel"),
      setSlickGallery($(".bigGallery"), 3, 3, 3, 2, 1, "carousel"),
      setSlickGallery($(".mobileGallery"), 1, 1, 1, 1, 1, "carousel"),
      setSlickGallery($(".carousel-products-2"), 3, 3, 2, 1, 1, "carousel"),
      setSlickGallery($(".carousel-products-3"), 2, 2, 2, 2, 1, "carousel"),
      setSlickGallery($(".carousel-products-4"), 4, 3, 2, 1, 1, "carousel"),
      setSlickGallery($(".mobileGallery-product"), 1, 1, 1, 1, 1, "carousel"),
      setSlickGallery(
        $(".mobileGallery-product-big"),
        2,
        2,
        2,
        2,
        1,
        "carousel"
      ),
      setSlickGallery($(".slider-blog"), 1, 1, 1, 1, 1, "carousel"),
      initStuck(),
      mobileparentcart(),
      mobileParentCurrency(),
      mobileParentLanguage(),
      $(window).trigger("resize"),
      setTimeout(function () {
        $("#pageContent").addClass("show"),
          $(".breadcrumbs").length && $(".breadcrumbs").addClass("show");
      }, 0),
      initProductOptions();
  });
var $stucknav = $(".stuck-nav"),
  $menu = $(".header-menu"),
  $menuparentbox = $(".menu-parent-box"),
  $stuckmenuparentbox = $(".stuck-menu-parent-box"),
  $mobilemenuparentbox = $(".mobile-parent-menu"),
  $menumobile = $mobilemenuparentbox.children(),
  $stuckcartparentbox = $(".stuck-cart-parent-box"),
  $cartparentbox = $(".main-parent-cart"),
  $mobileparentcart = $(".mobile-parent-cart"),
  $cart = $("header .cart"),
  $currencyparentbox = $(".main-parent-currency"),
  $mobileparentcurrency = $(".mobile-parent-currency"),
  $currency = $("header .currency"),
  $languageparentbox = $(".main-parent-language"),
  $mobileparentlanguage = $(".mobile-parent-language"),
  $language = $("header .language");
($(".mobile-menu-toggle").length || $(".mobile-categories-toggle").length) &&
  $(".mobile-menu-toggle").initMM({
    enable_breakpoint: !0,
    mobile_button: !0,
    breakpoint: 1024,
    menu_class: "mainmenu-mobile",
    close_button_name: mobile_menu_close,
    back_button_name: mobile_menu_back,
  }),
  $(".mobile-categories-toggle").length &&
    $(".mobile-categories-toggle").initMM({
      enable_breakpoint: !0,
      mobile_button: !0,
      breakpoint: 1024,
      menu_class: "layout2-mobile",
      close_button_name: mobile_menu_close,
      back_button_name: mobile_menu_back,
    }),
  jQuery(function (e) {
    function t(t) {
      t.each(function () {
        var t = e(this),
          i = t.find(".input-group-addon");
        i.length &&
          t.click(function () {
            n.removeClass("active"), t.addClass("active");
          });
      });
    }
    var n = e(".form-group");
    n.length && t(n);
  }),
  jQuery(function (e) {
    e(".gallery, .gallery-masonry").length &&
      e(".gallery .zomm-gallery, .gallery-masonry .zomm-gallery").magnificPopup(
        {
          type: "image",
          gallery: {
            enabled: !0,
          },
        }
      );
  }),
  jQuery(function (e) {
    var t = "";
    e(".filter-nav div").click(function () {
      e("#all-filter-content").hide(0),
        e("#all-filter-content").fadeIn(500),
        e(".filter-nav div").removeClass("current"),
        e(this).addClass("current"),
        (t = e(this).attr("rel")),
        e(".item")
          .not("." + t)
          .fadeOut(),
        e("." + t).fadeIn(),
        e("#all-filter-content").fadeIn(0);
    });
  }),
  ($.fn.sliderScroll = function () {
    var e = this;
    if (!e.length) return !1;
    var t = e.find(".nav-slider-scroll");
    t.on("click", "li", function (n) {
      for (
        var i,
          o,
          a,
          r,
          s = window.innerHeight,
          l = window.innerWidth,
          c = t.children(),
          d = 768 > l && s > 562 ? (s - 562) / 2 : 0,
          u = 0,
          f = 0;
        f < c.length;
        f++
      )
        c.get(f) === this && (u = f);
      return (
        (i = e.find(".item").eq(u)),
        (o = i.offset().top),
        (a = i.outerHeight()),
        (r = o - s / 2 + a / 2),
        $("html, body").animate(
          {
            scrollTop: r + d,
          },
          500
        ),
        n.preventDefault(),
        n.stopPropagation(),
        !1
      );
    }),
      $(window).on("resize scroll load", function () {
        var n = window.innerHeight,
          i = window.innerWidth,
          o = e.find(".item"),
          a = parseInt(t.find("li:last-child a").css("margin-bottom")),
          r = t.innerHeight() - a - 14,
          s = t.offset().top,
          l = e.find(".item:last-child"),
          c = l.offset().top,
          d = l.outerHeight(),
          u = c + d / 2,
          f = e.find(".item").eq(0),
          h = f.offset().top,
          p = f.outerHeight(),
          g = h + p / 2,
          v = 0,
          m = 768 > i && n > 562 ? (n - 562) / 2 : 0,
          $ = 0;
        for (
          v =
            u < pageYOffset + n / 2 - m
              ? u - r / 2 - pageYOffset
              : g > pageYOffset + n / 2 - m
              ? g - r / 2 - pageYOffset
              : n / 2 - r / 2 - m,
            t.css({
              top: v,
            });
          $ < o.length;
          $++
        ) {
          var w = o.eq($),
            b = w.offset().top + w.outerHeight();
          if (b > s + r / 2) {
            t.find("li").removeClass("active").eq($).addClass("active");
            break;
          }
        }
      });
  }),
  $(".l9-one-product-js").length &&
    (l9rectangle(), $(window).resize(l9rectangle));
var cssFix = (function () {
  var e = navigator.userAgent.toLowerCase(),
    t = function (t) {
      return -1 != e.indexOf(t);
    };
  $("html").addClass(
    [
      !/opera|webtv/i.test(e) && /msie (\d)/.test(e)
        ? "ie ie" + RegExp.$1
        : t("firefox/2")
        ? "gecko ff2"
        : t("firefox/3")
        ? "gecko ff3"
        : t("gecko/")
        ? "gecko"
        : t("opera/9")
        ? "opera opera9"
        : /opera (\d)/.test(e)
        ? "opera opera" + RegExp.$1
        : t("konqueror")
        ? "konqueror"
        : t("applewebkit/")
        ? "webkit safari"
        : t("mozilla/")
        ? "gecko"
        : "",
      t("x11") || t("linux")
        ? " linux"
        : t("mac")
        ? " mac"
        : t("win")
        ? " win"
        : "",
    ].join("")
  );
})();
-1 !== getInternetExplorerVersion() && $("html").addClass("ie"),
  jQuery(function (e) {
    if ("devicePixelRatio" in window && 2 == window.devicePixelRatio) {
      e("body").addClass("mac");
      for (
        var t = jQuery(".footer-logo img, .logo img").get(),
          n = 0,
          i = t.length;
        i > n;
        n++
      ) {
        var o = t[n].src;
        (o = o.replace(/\.(png|jpg|gif)+$/i, ".$1")), (t[n].src = o);
      }
      e(".bigGallery").each(function () {
        e("body").addClass("ipad-bigGallery");
      });
    }
  }),
  jQuery(function (e) {
    e("#pageContent .collapse-block").hasClass(":not(.open)") ||
      e(".collapse-block_title").click(function () {
        e(".vertical-carousel").slick("setPosition").slick("setPosition");
      });
  }),
  jQuery(function (e) {
    e("#pageContent .submenu-block").hasClass(":not(.open)") ||
      e(".submenu-block_title").click(function () {
        e(".vertical-carousel").slick("setPosition").slick("setPosition");
      });
  }),
  jQuery(function (e) {
    function t(t) {
      t.each(function () {
        var t = e(this),
          n = t.find(".title-value"),
          i = t.find(".dropdown-menu li.active");
        if (i.length) n.text(i.data("top-value"));
        else {
          var o = t.find(".dropdown-menu li").first();
          n.text(o.data("top-value"));
        }
      });
    }
    var n = e(".select-change");
    t(n),
      n.on("click", "li", function () {
        var t = e(this);
        t.siblings().removeClass("active"),
          t.addClass("active"),
          t
            .closest(".select-change")
            .find(".title-value")
            .text(t.data("top-value"));
      });
  }),
  jQuery(function (e) {
    e.fn.ttTabs = function (t) {
      function n(n) {
        function i(t, n) {
          function i(e) {
            "toggle" === S
              ? e.hide().removeAttr("style")
              : "slide" === S
              ? e.slideUp(a)
              : e.slideUp(a);
          }
          var o,
            a = {
              duration: $,
              complete: function () {
                e(this).removeAttr("style");
              },
            };
          if (n || k)
            h.removeClass("active"),
              (o = m
                .filter(".active")
                .removeClass("active")
                .find("> div")
                .stop()),
              i(o);
          else {
            var r = h.index(t);
            t.removeClass("active"),
              (o = m.eq(r).removeClass("active").find("> div").stop()),
              i(o);
          }
        }

        function o(e, t, n, i, o) {
          function a(t) {
            n && n(e.find("> span")),
              "toggle" === S
                ? (t.show(), i && i(l))
                : "slide" === S
                ? t.slideDown(c)
                : t.slideDown(c);
          }
          var r,
            s = h.index(e),
            l = m.eq(s),
            c = {
              duration: $,
              complete: function () {
                i && i(l);
              },
            };
          e.addClass("active"),
            (r = l.addClass("active").find("> div").stop()),
            a(r);
        }

        function a(e, t) {
          if (e.length)
            var n = e.get(0).getBoundingClientRect().left,
              i = u.get(0).getBoundingClientRect().left,
              o = {
                left: n - i,
                width: e.width(),
              };
          else
            var o = {
              left: 0,
              width: 0,
            };
          t ? g.stop().animate(o, $) : g.stop().css(o);
        }

        function r(e, t) {
          var n = e.find("> span").get(0).getBoundingClientRect().left,
            i = e.find("> span").get(0).getBoundingClientRect().right,
            o = {
              l: u.get(0).getBoundingClientRect().left,
              r: u.get(0).getBoundingClientRect().right,
            };
          n < o.l
            ? c(Math.ceil(o.l - n), o, !1, function () {
                t();
              })
            : i > o.r
            ? c(-1 * Math.ceil(i - o.r), o, !1, function () {
                t();
              })
            : t();
        }

        function s(t, n, s) {
          var l = window.innerWidth,
            c = l > b,
            u = 0,
            f = e(T),
            p = h.filter('[data-tab="' + t + '"]'),
            g = e(n),
            v = {};
          c && f.length && (u = f.height()),
            p.hasClass("active") ||
              (v = {
                scrollTop: d.offset().top - u,
              }),
            e("html, body")
              .stop()
              .animate(v, {
                duration: w,
                complete: function () {
                  r(p, function () {
                    i(p, c),
                      o(
                        p,
                        c,
                        function (e) {
                          a(e, !0);
                        },
                        function () {
                          g.length &&
                            e("html, body").animate(
                              {
                                scrollTop: g.offset().top - u,
                              },
                              {
                                duration: w,
                                complete: function () {
                                  var t = e(s);
                                  t.length && t.focus();
                                },
                              }
                            );
                        }
                      );
                  });
                },
              });
        }

        function l(e) {
          var t = {
            l: h.first().find("> span").get(0).getBoundingClientRect().left,
            r: h.last().find("> span").get(0).getBoundingClientRect().right,
          };
          t.l < e.l ? x.removeClass("disabled") : x.addClass("disabled"),
            t.r > e.r ? z.removeClass("disabled") : z.addClass("disabled");
        }

        function c(e, t, n, i) {
          var o = parseInt(f.css("left"), 10),
            a = parseInt(g.css("left"), 10),
            r = n ? 0 : $,
            s = {
              left: o + e,
            };
          n
            ? (f.css(s), l(t))
            : (g.animate(
                {
                  left: a + e,
                },
                $
              ),
              f.animate(s, {
                duration: r,
                complete: function () {
                  l(t), i && i(), (B = !1);
                },
              }));
        }
        var d = e(n),
          u = d.find(".tt-tabs__head"),
          f = u.find("> ul"),
          h = f.find("> li"),
          p = h.find("> span"),
          g = u.find(".tt-tabs__border"),
          v = d.find(".tt-tabs__body"),
          m = v.find("> div"),
          $ = t.anim_tab_duration || 500,
          w = t.anim_scroll_duration || 500,
          b = 1025,
          C = void 0 !== t.scrollToOpenMobile ? t.scrollToOpenMobile : !0,
          k = void 0 !== t.singleOpen ? t.singleOpen : !0,
          y = void 0 !== t.toggleOnDesktop ? t.toggleOnDesktop : !0,
          S = void 0 !== t.effect ? t.effect : "slide",
          T = void 0 !== t.offsetTop ? t.offsetTop : "",
          _ = t.goToTab,
          x = e("<div>").addClass("tt-tabs__btn-prev disabled"),
          z = e("<div>").addClass("tt-tabs__btn-next"),
          B = !1;
        return (
          u.on("click", "> ul > li > span", function (t, n) {
            var s = e(this),
              l = s.parent(),
              c = window.innerWidth,
              d = c > b,
              n = "trigger" === n ? !0 : !1;
            if (l.hasClass("active")) {
              if (d && !y) return;
              i(l, d), a("", !0);
            } else
              r(l, function () {
                i(l, d),
                  o(
                    l,
                    d,
                    function (e) {
                      if (d) {
                        var t = !n;
                        a(e, t);
                      }
                    },
                    function (t) {
                      if (!d && !n && C) {
                        var i = t.offset().top;
                        e("html, body").stop().animate(
                          {
                            scrollTop: i,
                          },
                          {
                            duration: w,
                          }
                        );
                      }
                    }
                  );
              });
          }),
          v.on("click", "> div > span", function (t) {
            var n = e(this),
              i = n.parent(),
              o = m.index(i);
            h.eq(o).find("> span").trigger("click");
          }),
          e.isArray(_) &&
            _.length &&
            e(_).each(function () {
              var t = this.elem,
                n = this.tab,
                i = this.scrollTo,
                o = this.focus;
              e(t).on("click", function (e) {
                return s(n, i, o), e.preventDefault(), !1;
              });
            }),
          d.on("click", ".tt-tabs__btn-prev, .tt-tabs__btn-next", function () {
            var t = e(this);
            if (!t.hasClass("disabled") && !B) {
              B = !0;
              var n = {
                l: u.get(0).getBoundingClientRect().left,
                r: u.get(0).getBoundingClientRect().right,
              };
              t.hasClass("tt-tabs__btn-next")
                ? p.each(function (t) {
                    var i = e(this),
                      o = i.get(0).getBoundingClientRect().right;
                    return o > n.r
                      ? (c(-1 * Math.ceil(o - n.r), n), !1)
                      : void 0;
                  })
                : t.hasClass("tt-tabs__btn-prev") &&
                  e(p.get().reverse()).each(function (t) {
                    var i = e(this),
                      o = i.get(0).getBoundingClientRect().left;
                    return o < n.l ? (c(Math.ceil(n.l - o), n), !1) : void 0;
                  });
            }
          }),
          e(window).on("resize load", function () {
            var t = window.innerWidth,
              n = t > b,
              r = u.innerWidth(),
              s = 0;
            if (
              (h.each(function () {
                s += e(this).innerWidth();
              }),
              n)
            ) {
              var l = h.filter(".active"),
                d = l.find("> span");
              if (!k && d.length > 1) {
                var v = l.first();
                i("", n), o(v, n);
              }
              if (s > r) {
                if (
                  (u.addClass("slider").append(x).append(z),
                  f.css({
                    "margin-right": -1 * (s - u.innerWidth()),
                  }),
                  d.length)
                ) {
                  var m = d.get(0).getBoundingClientRect().right,
                    $ = p.last().get(0).getBoundingClientRect().right,
                    w = {
                      l: u.get(0).getBoundingClientRect().left,
                      r: u.get(0).getBoundingClientRect().right,
                    };
                  m > w.r
                    ? c(-1 * Math.ceil(m - w.r), w, !0)
                    : $ < w.r && c(w.r - $, w, !0),
                    a(d, !1);
                }
              } else
                f.removeAttr("style"),
                  x.remove(),
                  z.remove(),
                  u.removeClass("slider"),
                  a(d, !1);
              u.css({
                visibility: "visible",
              });
            } else g.removeAttr("style");
          }),
          h
            .filter('[data-active="true"]')
            .find("> span")
            .trigger("click", ["trigger"]),
          d
        );
      }
      var i = new n(e(this).eq(0));
      return i;
    };
    var t = e(".tt-tabs");
    t.length &&
      t.ttTabs({
        singleOpen: !1,
        anim_tab_duration: 270,
        anim_scroll_duration: 500,
        toggleOnDesktop: !1,
        scrollToOpenMobile: !1,
        effect: "slide",
        offsetTop: '.tt-header[data-sticky="true"]',
        goToTab: [
          {
            elem: ".tt-product-head__review-count",
            tab: "review",
            scrollTo: ".tt-review__comments",
          },
          {
            elem: ".tt-product-head__review-add, .tt-review__head > a",
            tab: "review",
            scrollTo: ".tt-review__form",
            focus: "#reviewName",
          },
        ],
      });
  }),
  jQuery(function (e) {
    e(window).on("load resize ready", function () {
      setTimeout(function () {
        var t = e(".blog-thumb"),
          n = t.find(".img"),
          i = t.closest(".carousel-products-mobile").find(".slick-arrow");
        if (n.length && i.length) {
          e.fn.findHeight = function () {
            var t = e(this),
              n = t.eq(0).height();
            return (
              t.each(function () {
                n = e(this).height() > n ? e(this).height() : n;
              }),
              n / 2
            );
          };
          var o = n.findHeight(),
            a = parseInt(t.css("marginTop"));
          i.css({
            top: o + a + "px",
          });
        }
      }, 225);
    });
  }),
  jQuery(function (e) {
    function t(t, n) {
      t.each(function () {
        var t = e(this),
          i = t.width();
        i > n && t.closest("ul").addClass("large-width");
      });
    }
    var n = e(".header-menu .multicolumn ul"),
      i = 290,
      o = e(".menu-vertical .multicolumn ul"),
      a = 207;
    n.length && t(n, i), o.length && t(o, a);
  }),
  jQuery(function (e) {
    function t() {
      return !!("ontouchstart" in window) || !!("onmsgesturechange" in window);
    }

    function n(t) {
      t.on("touchend", function () {
        var n = e(this);
        n.hasClass("gallery-click") ||
          (t.removeClass("gallery-click finish-animation"),
          n.addClass("gallery-click"),
          setTimeout(function () {
            n.addClass("finish-animation");
          }, 300));
      });
    }
    if (t()) {
      var i = e(".gallery-content figure");
      e("body").addClass("touch-device"), i.length && n(i);
    }
  }),
  jQuery(function (e) {
    var t = e(".airSticky"),
      n = e(".tt-tabs .tt-tabs__head > ul > li");
    t.length &&
      (e(window).on("resize load", function () {
        var n = window.innerWidth || e(window).width();
        n >= 789 &&
          t.airStickyBlock({
            debug: !1,
            stopBlock: ".airSticky_stop-block",
            offsetTop: 10,
          });
      }),
      e(document).bind("resize scroll", n, function () {
        t.trigger("render.airStickyBlock");
      }));
  }),
  jQuery(function (e) {
    e(window).on("resize load", function () {
      function t(t) {
        t.each(function () {
          var t = e(this);
          return t.is(":visible") ? (t.addClass("first-child"), !1) : void 0;
        });
      }
      var n = e(".promo-box .block-table-cell")
        .children()
        .removeClass("first-child");
      n.length && t(n);
    });
  });
var hoverColors = {
  params: {
    baseColor: "data-c",
    activeColor: "data-ac",
    bgBaseColor: "data-bgc",
    bgActiveColor: "data-abgc",
    borderBaseColor: "data-borc",
    borderActiveColor: "data-aborc",
  },
  init: function () {
    var e = this.params,
      t = $("[data-hovercolors]");
    return 0 == t.length
      ? !1
      : void t.each(function () {
          hoverColors.getCurrentColors(
            $(this),
            e.baseColor,
            e.bgBaseColor,
            e.borderBaseColor
          );
        });
  },
  initEvents: function () {
    var e = this.params;
    $("body").on(
      {
        mouseenter: function () {
          hoverColors.getCurrentColors(
            $(this),
            e.activeColor,
            e.bgActiveColor,
            e.borderActiveColor
          );
        },
        mouseleave: function () {
          hoverColors.getCurrentColors(
            $(this),
            e.baseColor,
            e.bgBaseColor,
            e.borderBaseColor
          );
        },
      },
      "[data-hovercolors]"
    );
  },
  getCurrentColors: function (e, t, n, i) {
    hoverColors.setCurrentColors(e, t, n, i);
    var o = e.find("[" + t + "]");
    return 0 == o.length
      ? !1
      : void o.each(function () {
          hoverColors.setCurrentColors($(this), t, n, i);
        });
  },
  setCurrentColors: function (e, t, n, i) {
    var o = e.attr(t);
    return (
      e.css("color", o),
      hoverColors.setCurrentBgColor(e, n),
      hoverColors.setCurrentBorderColor(e, i),
      !1
    );
  },
  setCurrentBgColor: function (e, t) {
    var n = e.attr(t);
    "undefined" != typeof n && n !== !1 && e.css("background", n);
  },
  setCurrentBorderColor: function (e, t) {
    var n = e.attr(t);
    "undefined" != typeof n && n !== !1 && e.css("border-color", n);
  },
};
hoverColors.initEvents(),
  $(document)
    .on("shopify:section:load", eventHandler)
    .ready(function () {
      $("[data-sectionname]").each(function () {
        $(this).initSection();
      });
    }),
  ($.fn.initSection = function () {
    var e = this,
      t = e.data("sectionname");
    switch (t) {
      case "promotion_slick":
        e.find(".carousel-promotion").initSlick(2, 1, 1);
        break;
      case "index_new":
        e.find(".carousel-new").initSlick(1, 1, 1);
        break;
      case "dashboard_insurance":
        e.find(".carousel-dashboard").initSlick(1, 1, 1);
        break;

      case "inside_insurance":
        e.find(".carousel-insurance").initSlick(2, 1, 1);
        break;

      case "inside_insurance-detail":
        e.find(".carousel-insurance-detail").initSlick(1, 1, 1);
        break;
      case "index_instagram":
        e.index_instagram();
        break;
      case "index_sliderscroll":
        e.index_sliderscroll();
        break;
      case "slider_withbanners":
        e.find(".slick-slider-content").dotSlick();
        break;
      case "index_verticaltabs":
        e.find(".nav-tabs--carusel").verticalTabs();
        break;
      case "index_horizontaltabs":
        e.horizontalTabs();
        break;
      case "index11_products":
        e.find(".grid").initIsotope();
        break;
      case "layout2testimonials":
        e.find(".testimonialsAsid").dotSlick();
        break;
      case "index_revolution":
        e.find(".slider-revolution").initRevolution();
        break;
      case "lookbook":
        e.find(".carousel-look-book").initLookbook(3, 2, 1, 1);
    }
  }),
  ($.fn.index_sliderscroll = function () {
    this.find(".slider-scroll").sliderScroll();
  }),
  ($.fn.index_instagram = function () {
    var e = this.find("[data-userid]");
    if ("function" != typeof Instafeed)
      return (
        e.replaceWith(
          '<span class="text-center" style="display: inherit;">Save and reload page.</span>'
        ),
        !1
      );
    var t = e.attr("id"),
      n = e.data("userid"),
      i = e.data("clientid"),
      o = e.data("accesstoken"),
      a = e.data("count"),
      r = new Instafeed({
        target: t,
        get: "user",
        userId: n,
        clientId: i,
        limit: a,
        sortBy: "most-liked",
        resolution: "standard_resolution",
        accessToken: o,
        template:
          '<a href="{{link}}" target="_blank"><img src="{{image}}" /></a>',
      });
    r.run();
  }),
  ($.fn.initLookbook = function (e, t, n, i) {
    this.slick({
      slidesToShow: e,
      slidesToScroll: e,
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: t,
            slidesToScroll: t,
          },
        },
        {
          breakpoint: 798,
          settings: {
            slidesToShow: n,
            slidesToScroll: n,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: i,
            slidesToScroll: i,
          },
        },
      ],
    });
  }),
  ($.fn.initSlick = function (e, t, n) {
    this.slick({
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: e,
            slidesToScroll: e,
          },
        },
        {
          breakpoint: 798,
          settings: {
            slidesToShow: t,
            slidesToScroll: t,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: n,
            slidesToScroll: n,
          },
        },
      ],
    });
  }),
  ($.fn.dotSlick = function () {
    this.slick({
      infinite: !0,
      dots: !0,
      arrows: !1,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  }),
  ($.fn.verticalTabs = function () {
    var e = this,
      t = {
        init: function () {
          t.initTabSlider(), e.find(".active a").trigger("click");
        },
        initTabSlider: function () {
          var t = window.innerWidth || $(window).width();
          e.each(function () {
            $(this)
              .find("a")
              .each(function () {
                $(this).click(function () {
                  $(this).unbind();
                  var e = $(this).attr("href"),
                    n = e + "-clone";
                  $(e).empty(), $(n).children().clone().appendTo($(e));
                  var i = $(e).find(".carouselTab1");
                  return (
                    i.css("visibility", "hidden"),
                    0 == i.length
                      ? !1
                      : void setTimeout(function () {
                          i.hide().css("visibility", "visible").fadeIn(0),
                            791 >= t && i.initSlick(2, 2, 1);
                        }, 5)
                  );
                });
              });
          });
        },
      };
    $(window).on("resize", function () {
      t.init();
    }),
      t.init();
  }),
  ($.fn.horizontalTabs = function () {
    var e = this;
    $(document).on("click", ".tabs-wrapper .nav-tabs--carusel a", function () {
      var t = $(this),
        n = t.parents(".tabs-wrapper"),
        i = t.attr("href"),
        o = n.find(i),
        a = n.find(i + "-clone");
      a.children().clone().appendTo(o.empty()),
        o.find(".carousel-products").initSlick(3, 2, 1),
        o.find(".grid").length &&
          o.find(".grid").isotope({
            itemSelector: ".element-item",
            layoutMode: "masonry",
            masonry: {
              columnWidth: ".element-item",
            },
          });
      var r = e.find(".block-title");
      r.length && r.html(t.html());
    }),
      setTimeout(function () {
        e.find(".tabs-wrapper .nav-tabs--carusel .active a").trigger("click");
      }, 1e3);
  }),
  ($.fn.initIsotope = function () {
    var e = this,
      t = {
        grid: e,
        init: function () {
          var e = this;
          if (0 == e.grid.length) return !1;
          this.grid.isotope({
            itemSelector: ".element-item",
            layoutMode: "masonry",
            masonry: {
              columnWidth: ".element-item",
            },
          });
          var t = {
            numberGreaterThan50: function () {
              var e = $(this).find(".number").text();
              return parseInt(e, 10) > 50;
            },
            ium: function () {
              var e = $(this).find(".name").text();
              return e.match(/ium$/);
            },
          };
          $(".nav-tab-filter").on("click", "button", function () {
            var n = $(this).attr("data-filter");
            (n = t[n] || n),
              e.grid.isotope({
                filter: n,
              });
          }),
            $(".button-group").each(function (e, t) {
              var n = $(t);
              n.on("click", "button", function () {
                n.find(".is-checked").removeClass("is-checked"),
                  $(this).addClass("is-checked");
              });
            }),
            $(".filter-isotop").length &&
              $(".filter-isotop").find(".is-checked").trigger("click");
        },
      };
    setTimeout(function () {
      t.init();
    }, 1e3);
  }),
  ($.fn.initRevolution = function () {
    function e() {
      var e = $(this),
        t = e.find("li video");
      t.length &&
        (t.on("play", function () {
          var e = $(this).parents("li").find(".video-play");
          e.addClass("pause"),
            $(this)
              .parents(".tp-caption.fullscreenvideo")
              .addClass("click-video");
        }),
        t.on("pause ended", function () {
          var e = $(this).parents("li").find(".video-play");
          e.removeClass("pause");
        }),
        e.find(".video-play").on("click", function (e) {
          var t = $(this).parents("li").find("video");
          return (
            t.trigger("click"), e.preventDefault(), e.stopPropagation(), !1
          );
        }),
        e.on("revolution.slide.onbeforeswap", function (e, t) {
          $(this)
            .find(".tp-caption.fullscreenvideo")
            .removeClass("click-video");
        }));
    }

    function t(e) {
      var t = $(this);
      t.each(function () {
        var e = $(this),
          t = function () {
            e.on("revolution.slide.onchange", function (t, n) {
              var i = $(this),
                o = i.find("li").eq(n.slideIndex - 1),
                a = o.find("video"),
                r = o.find(".tp-caption").attr("data-autoplay");
              if (a.length && "true" === r) {
                var s = a.get(0);
                (s.currentTime = 0),
                  e.one("revolution.slide.onafterswap", function (e, t) {
                    s.paused && s.play();
                  });
              }
            });
          };
        e.hasClass("revslider-initialised")
          ? t()
          : e.one("revolution.slide.onloaded", function () {
              t();
            });
      });
    }
    if (0 == $("body").find(".revolution_included").length)
      return (
        this.replaceWith(
          '<span class="text-center" style="display: inherit;">Save and reload page.</span>'
        ),
        !1
      );
    $.fn.resizeRevolution = function (e, t, n, i) {
      if (!$(this).length || !$(e.slider).length || !e.breakpoints) return !1;
      var o = this,
        a = e.slider,
        r = e.breakpoints,
        s = e.fullscreen_BP || !1,
        t = t || {},
        n = n || [],
        l = {
          dottedOverlay: "none",
          delay: i,
          startwidth: 1920,
          hideThumbs: 200,
          hideTimerBar: "on",
          thumbWidth: 100,
          thumbHeight: 50,
          thumbAmount: 5,
          navigationArrows: "none",
          touchenabled: "on",
          onHoverStop: "on",
          swipe_velocity: 0.7,
          swipe_min_touches: 1,
          swipe_max_touches: 1,
          drag_block_vertical: !1,
          parallax: "mouse",
          parallaxBgFreeze: "on",
          parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
          keyboardNavigation: "off",
          navigationHAlign: "center",
          navigationVAlign: "bottom",
          navigationHOffset: 0,
          navigationVOffset: 20,
          soloArrowLeftHalign: "left",
          soloArrowLeftValign: "center",
          soloArrowLeftHOffset: 20,
          soloArrowLeftVOffset: 0,
          soloArrowRightHalign: "right",
          soloArrowRightValign: "center",
          soloArrowRightHOffset: 20,
          soloArrowRightVOffset: 0,
          shadow: 0,
          spinner: "",
          h_align: "left",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          forceFullWidth: "off",
          hideThumbsOnMobile: "off",
          hideNavDelayOnMobile: 1500,
          hideBulletsOnMobile: "off",
          hideArrowsOnMobile: "off",
          hideThumbsUnderResolution: 0,
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          startWithSlide: 0,
          fullScreenOffsetContainer: !1,
        };
      $.extend(l, t);
      var c = function (e) {
          return e.find(a);
        },
        d = function () {
          for (var e = window.innerWidth, t = 0; t < r.length; t++) {
            var n = r[t];
            if (!r.length) return !1;
            if (n >= e) {
              if (0 === t) return n;
              if (n > r[t - 1]) return n;
            } else if (e > n && t === r.length - 1) return 1 / 0;
          }
          return !1;
        },
        u = $(o);
      u.each(function () {
        function t(e) {
          var t,
            n = window.innerWidth;
          t = setInterval(function () {
            var i = window.innerWidth;
            n === i &&
              setTimeout(function () {
                e();
              }, 200),
              clearInterval(t);
          }, 100);
        }
        var i = $(this),
          o = c(i),
          a = i.clone(),
          r = d();
        if (!o.length) return !1;
        var u = function (t, i) {
          var o = window.innerWidth,
            a = {},
            r = {},
            c = {};
          if (s) {
            var d = o >= s ? "off" : "on",
              u = o >= s ? "on" : "off";
            r = {
              fullWidth: d,
              fullScreen: u,
            };
          }
          if (n.length)
            for (var f = 0; f < n.length; f++) {
              var h = n[f];
              if (h.bp && 2 === h.bp.length && h.bp[0] < h.bp[1]) {
                var p = h.bp[0],
                  g = h.bp[1];
                if (i >= p && g >= i)
                  for (var v in h) "bp" !== v && (a[v] = h[v]);
              }
            }
          $.extend(c, l, a, r),
            $(t).show().revolution(c),
            $(e.functions).each(function () {
              this.call(t);
            });
        };
        u(o, r);
        var f = function (e) {
          $(o).hasClass("revslider-initialised") &&
            ((r = e || 0),
            o.revkill(),
            i.replaceWith(a),
            (i = a),
            (a = i.clone()),
            (o = c(i)),
            u(o, r));
        };
        $(window).on("resize", function () {
          t(function () {
            var e = d();
            e !== r && f(e);
          });
        });
      });
    };
    var n = this.data("speed");
    this.hasClass("revolution-default")
      ? this.resizeRevolution(
          {
            slider: ".tp-banner",
            breakpoints: [414, 767, 1025],
            fullscreen_BP: 768,
            functions: [e, t],
          },
          {
            fullScreenOffsetContainer: "header",
          },
          [
            {
              bp: [0, 768],
              startheight: 1100,
            },
          ],
          n
        )
      : this.resizeRevolution(
          {
            slider: ".tp-banner",
            breakpoints: [414, 767, 1025],
            fullscreen_BP: 768,
            functions: [e, t],
          },
          {
            fullScreenOffsetContainer: "header-static",
          },
          [
            {
              bp: [0, 768],
              startheight: 1300,
            },
            {
              bp: [0, 1025],
              fullScreenOffsetContainer: "header",
            },
          ],
          n
        );
  }),
  ($.fn.optionsSetParams = function (e, t) {
    var n = this.find(t);
    return 0 == n.length
      ? !1
      : (n
          .show()
          .find("li")
          .each(function () {
            $(this).hide().removeClass("active");
          }),
        0 == n.find(e).length
          ? !1
          : (n.find(e).show().first().addClass("active"),
            "." + n.find(".active").find("a").attr("data-tag") + "-js"));
  }),
  $(".autoscroll_yes").length &&
    $(window).scroll(function () {
      autoscrollhandler();
    }),
  jQuery(function (e) {
    var t = e(".desktop-header .box-info");
    if (t.length) {
      var n = t.closest(".container").innerHeight();
      null === n && (n = t.closest(".container-fluid").innerHeight()),
        t.innerHeight(n);
    }
    e(window).on("load", function () {
      e("body").addClass("loaded");
    });
  });

// function mycopylink() {

//   var copyText = document.getElementById("myInput");
//   copyText.select();
//   copyText.setSelectionRange(0, 99999)
//   document.execCommand("copy");
//   alert("คัดลอกลิงค์สําเร็จ: " + copyText.value);

// }

function myFunction(attr) {
  var x = $(attr).attr("id");
  // console.log($('#'+x).attr("data-show"))
  if (
    $("#" + x).attr("data-show") == undefined ||
    $("#" + x).attr("data-show") == false
  ) {
    $("#" + x).attr("data-show", true);
    $("#menu_" + x).slideDown();
  } else {
    $("#" + x).removeAttr("data-show", false);
    $("#menu_" + x).slideUp();
  }
}

function categoryFunction(attr) {
  var x = $(attr).attr("id");
  // console.log($('#'+x).attr("data-show"))
  var savesub = $("#savesub").val();
  $("#savesub").val(x);

  if (savesub != x) {
    $(".sub").removeAttr("data-show", false);
    $(".category_sub").slideUp();
  }

  if (
    $("#" + x).attr("data-show") == undefined ||
    $("#" + x).attr("data-show") == false
  ) {
    $("#" + x).attr("data-show", true);
    $("#category_" + x).slideDown();
  } else {
    $("#" + x).removeAttr("data-show", false);
    $("#category_" + x).slideUp();
  }
}

$(".flip").hover(function () {
  $(this).find(".card").toggleClass("flipped");
});
