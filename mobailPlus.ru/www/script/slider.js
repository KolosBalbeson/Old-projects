var slArr = new Array("imager/slider/banner2.png", "imager/slider/banner3.png");

var maps = $("#maping").attr('src');

var sliderMaps = new Array("imager/maps/map1.jpg", "imager/maps/map.jpg");

$( ".left-sliderMap" ).click(function() {
  var maps = $("#maping").attr('src', sliderMaps[0]);
});
$( ".right-sliderMap" ).click(function() {
  		var maps = $("#maping").attr('src', sliderMaps[1]);
});