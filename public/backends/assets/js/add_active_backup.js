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

    $(".nav_list .itemdropdown li").each(function () {
      var getMenuMain = $(this).attr("data-page");
      if (getPageMain3 == getMenuMain) {
        $(this).addClass("activemenusub");
      }
    });
  }

  // var getPagenavmenu = document.getElementById("navpageName");
  const Pagenavmenu = $("#navpageName").val();
  console.log(Pagenavmenu);
  if (Pagenavmenu !== undefined) {
    // const Pagenavmenu = getPagenavmenu.value;
    $(".box__profilemenu .box__nav li").removeClass('activemenusub');
    $(".box__profilemenu .box__nav li").each(function () {
      var getMenu = $(this).attr("data-page");
      console.log(getMenu)
      if (Pagenavmenu == getMenu) {
        $(this).addClass("activemenusub");
      }
    });
  }

  var getPageMenuMain = document.getElementById("pagemenuName");
  var getPageMenuMain2 = document.getElementById("pagemenuName2");

  if (getPageMenuMain || getPageMenuMain2) {
    const getPageMain2 = getPageMenuMain.value;
    const getPageMain3 = getPageMenuMain2.value;
    $(".nav_list li a").each(function () {
      var getMenuMain = $(this).attr("data-page");
      if (getPageMain2 == getMenuMain) {
        $(this).addClass("activemenumain");
        $(".item-show-"+getMenuMain).addClass("show");
      }
    });

    $(".nav_list .itemdropdown li").each(function () {
      var getMenuMain = $(this).attr("data-page");
      if (getPageMain3 == getMenuMain) {
        $(this).addClass("activemenusub");
      }
    });
  }
});
