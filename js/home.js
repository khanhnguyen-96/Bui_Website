$(document).ready(function () {
    var scrollTop = 0;
    if ($(window).width() < 992) {
        //Check if this is desktop screen size large
        setCompactMode();
    }
    autoMargin();
    $(window).resize(function () {
        if ($(window).width() < 992) {
            setCompactMode();
            autoMargin();
        } else {
            setFullMode();
            changeNavigationBar();
            autoMargin(); //auto margin right after height changed
        }
    });
    $(window).scroll(function () {
        scrollTop = $(window).scrollTop();

        if (scrollTop >= 5) {
            $(".my-nav").addClass("top-nav-collapse");

            if ($(window).width() > 992) {
                setCompactMode();
            }
        } else if (scrollTop < 5) {
            $(".my-nav").removeClass("top-nav-collapse");

            if ($(window).width() > 992) {
                setFullMode();
            } else {
                setCompactMode();
            }
        }
        autoMargin(); //auto margin right after height changed
    });

    // initialize snap scroll
    // var options = {
    //   $menu: false,
    //   menuSelector: "a",
    //   panelSelector: "> section",
    //   namespace: ".panelSnap",
    //   onSnapStart: function() {},
    //   onSnapFinish: function() {},
    //   onActivate: function() {},
    //   directionThreshold: 50,
    //   slideSpeed: 200,
    //   easing: "linear",
    //   offset: 178,
    //   navigation: {
    //     keys: {
    //       nextKey: false,
    //       prevKey: false
    //     },
    //     buttons: {
    //       $nextButton: false,
    //       $prevButton: false
    //     },
    //     wrapAround: false
    //   }
    // };
    // $("#main").panelSnap(options);
});

function setFullMode() {
    var $navbarBrand = $(".navbar-brand"),
        $leftLogo = $("#left-logo"),
        $buiMidHeader = $("#bui-mid");
    // Left logo removal
    $navbarBrand.addClass("d-block");
    $leftLogo.removeClass("d-block");
    $leftLogo.addClass("d-none");

    // Mid logo addtition
    $buiMidHeader.removeClass("d-none");
    $buiMidHeader.addClass("d-block col-2 container-fluid");
    $("#img-bui-mid").show();
    $("#text-bui-mid").show();
}

function setCompactMode() {
    var $navbarBrand = $(".navbar-brand"),
        $leftLogo = $("#left-logo"),
        $buiMidHeader = $("#bui-mid");
    // Left logo addtition
    $navbarBrand.show();
    $leftLogo.addClass("d-block");
    $leftLogo.removeClass("d-none");

    // Mid logo removal
    $buiMidHeader.addClass("d-none");
    $buiMidHeader.removeClass("d-inline col-2 container-fluid");
    $("#img-bui-mid").hide();
    $("#text-bui-mid").hide();
}

function autoMargin() {
    var mr = $(".my-nav").height() + 30;
    $("#main").css("marginTop", mr + "px");
    // changeSectionSize();
    var offsetSnap = $(window).height() - $(".home-section-bg").height();
    // to-do
}

function changeNavigationBar() {
    var scrollTop = $(window).scrollTop();

    if (scrollTop >= 5) {
        //Resizing nav bar
        $(".my-nav").addClass("top-nav-collapse");

        if ($(window).width() > 992) {
            setCompactMode();
        }
    } else if (scrollTop < 5) {
        //Resizing nav bar
        $(".my-nav").removeClass("top-nav-collapse");

        if ($(window).width() > 992) {
            setFullMode();
        } else {
            setCompactMode();
        }
    }
    autoMargin(); //auto margin right after height changed
}

// function changeSectionSize() {
//     var fitHeight = $(window).height() - $(".my-nav").height();
//     $(".home-section-bg").height(fitHeight);
//     $("#home-end").height(fitHeight);
// }
