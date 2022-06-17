$(function () {
  var getPage = document.getElementById("pageName");

  if (getPage) {
    const getPage2 = getPage.value;
    $(".nav_list li a").each(function () {
      var getMenu = $(this).attr("data-page");
      if (getPage2 == getMenu) {
        $(this).addClass("activemenumain");
      }
    });
  }

  var getPageMenuMain = document.getElementById("pageName");
  var getPageMenuMain2 = document.getElementById("pageName2");

  if (getPageMenuMain || getPageMenuMain2) {
    const getPageMain2 = getPageMenuMain.value;
    const getPageMain3 = getPageMenuMain2.value;
    $(".nav_list li a").each(function () {
      var getMenuMain = $(this).attr("data-page");
      if (getPageMain2 == getMenuMain) {
        $(this).addClass("activemenumain");
      }
    });

    $(".box__nav li").each(function () {
      var getMenuMain = $(this).attr("data-page");
      if (getPageMain3 == getMenuMain) {
        $(this).addClass("activemenusub");
      }
    });
  }
});
