$(function () {
  var getPage = document.getElementById("pageName");

  if (getPage) {
    const getPage2 = getPage.value;
    $(".box__nav  li").each(function () {
      var getMenu = $(this).attr("data-page");
      if (getPage2 == getMenu) {
        $(this).addClass("activemenu");
      }
    });
  }

  var getPageMenuMain = document.getElementById("pagemenuName");
  var getPageMenuMain2 = document.getElementById("pagemenuName2");

  if (getPageMenuMain || getPageMenuMain2) {
    const getPageMain2 = getPageMenuMain.value;
    $(".nav_list li a").each(function () {
      var getMenuMain = $(this).attr("data-page");
      if (getPageMain2 == getMenuMain) {
        $(this).addClass("activemenumain");
      }
    });
    const getPageMain3 = getPageMenuMain2.value;
    // $(".nav_list li a").each(function () {
    //   var getMenuMain = $(this).attr("data-page");
    //   if (getPageMain2 == getMenuMain) {
    //     $(this).addClass("activemenumain");
    //   }
    // });

    $(".nav_list .itemdropdown li").each(function () {
      var getMenuMain = $(this).attr("data-page");
      if (getPageMain3 == getMenuMain) {
        $(this).addClass("activemenusub");
      }
    });
  }
});
