// Responsive Navigation
var navigation = responsiveNav("responsive-navigation", {customToggle: ".nav-toggle"});

// Background Slider
$(function(){
	jQuery('#maximage').maximage();
});

// Functionality
$('.banner').flexslider({
	animation: "fade",
	slideshowSpeed: 4000,
	pauseOnAction: false,
	pauseOnHover: false,
	controlNav: false,
	directionNav: false,
	randomize: false,
	startAt: 0
});

$('#galleryCarousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 100,
    itemMargin: 5,
    prevText: "",
    nextText: "",
    asNavFor: '#gallery'
});

$('#gallery').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    prevText: "",
    nextText: "",
    smoothHeight: true,
    sync: "#galleryCarousel"
});

// Box Centering
var box = $('.content');

// Centering
var scrollInit = function() {
	box.each(function() {
	    $(this).css("padding-top", (($(window).height()-$(this).height())/2) + "px");
	    // $(this).css("padding-bottom", "50px");
	});
}
$(window).scroll(scrollInit);
$(window).resize(scrollInit);
scrollInit();

var menus = $('.menu-area');

var appSection = $('#appetizers');
var breadSection = $('#indianBreads');
var idlySection = $('#idly');
var basicsSection = $('#dosaBasics');
var signatureSection = $('#signatureDosa');
var jainSection = $('#jain');
var uthapamsSection = $('#uthapams');
var sidesSection = $('#sides');
var dessertSection = $('#dessert');
var beveragesSection = $('#beverages');
var lunchSection = $('#lunch');

var appetizers = $('#navAppetizers');
var soups = $('#navSoups');
var indianBreads = $('#navIndianBreads');
var idly = $('#navIdly');
var dosaBasics = $('#navDosaBasics');
var signatureDosa = $('#navSignatureDosa');
var jain = $('#navJain');
var uthapams = $('#navUthapams');
var sides = $('#navSides');
var dessert = $('#navDessert');
var beverages = $('#navBeverages');
var lunch = $('#navLunch');

// Menu Navigation
$('a.menu-btn').on('click', function(e) {
    e.preventDefault();
    var idChosen = $(this).attr('id');
    if( idChosen == "navAppetizers" ) {
        $(menus).slideUp();
        $(appSection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(appetizers).addClass("selected");
    } else if ( idChosen == "navIndianBreads" ) {
        $(menus).slideUp();
        $(breadSection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(indianBreads).addClass("selected");
    } else if ( idChosen == "navIdly" ) {
        $(menus).slideUp();
        $(idlySection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(idly).addClass("selected");
    } else if ( idChosen == "navDosaBasics" ) {
        $(menus).slideUp();
        $(basicsSection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(dosaBasics).addClass("selected");
    } else if ( idChosen == "navSignatureDosa" ) {
        $(menus).slideUp();
        $(signatureSection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(signatureDosa).addClass("selected");
    } else if ( idChosen == "navJain" ) {
        $(menus).slideUp();
        $(jainSection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(jain).addClass("selected");
    } else if ( idChosen == "navUthapams" ) {
        $(menus).slideUp();
        $(uthapamsSection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(uthapams).addClass("selected");
    } else if ( idChosen == "navSides" ) {
        $(menus).slideUp();
        $(sidesSection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(sides).addClass("selected");
    } else if ( idChosen == "navDessert" ) {
        $(menus).slideUp();
        $(dessertSection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(dessert).addClass("selected");
    } else if ( idChosen == "navBeverages" ) {
        $(menus).slideUp();
        $(beveragesSection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(beverages).addClass("selected");
    } else if ( idChosen == "navLunch" ) {
        $(menus).slideUp();
        $(lunchSection).slideToggle();
        $(".menu-btn").removeClass("selected");
        $(lunch).addClass("selected");
    } else {

    }
});

/* Menu Widgets */
var unowidget_menu =  new UnoappMenuWidget({
    appID:110460,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110460"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110462,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110462"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110472,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110472"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110473,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110473"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110474,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110474"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110475,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110475"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110476,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110476"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110477,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110477"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110478,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110478"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110479,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110479"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110480,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110480"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110481,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110481"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110482,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110482"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110483,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110483"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110484,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110484"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110485,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110485"
});

var unowidget_menu =  new UnoappMenuWidget({
    appID:110486,
    border:false,
    width:"994",
    height:"1000",
    key:"498f2c21688f6451d9f5fd09d53edda7",
    layoutid:"6437",
        cid:107863,
    widgetcontainer:"menu_widget_110486"
});

/* Reviews Widget */
var unowidget_review =  new UnoappWidget({
    appID:110490,
    border:false,
    width:"994",
    height:"600",
    key:"6495fc163fb8f2fc0fe7c8a06fc8ed18",
    widgetcontainer:"review_widget_110490"
}); 