// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable

if($('.masthead').offset()!=null) {
  var mainbottom = $('.masthead').offset().top + $('.masthead').height();
} else {
  var mainbottom = $('.container').offset().top + $('.container').height();
}

console.log("asd")
// on scroll, 
$(window).on('scroll',function(){

  // we round here to reduce a little workload
  var stop = Math.round($(window).scrollTop());

  if (stop > mainbottom) {
      $('.navbar').addClass('past-main');
        console.log("add")

    } else {
        $('.navbar').removeClass('past-main');
        console.log("remove")
    }

});
//$('#forfun').mouseover(function() {
//  alert("Elle ne vous prendra jamais pour un pigeon!")
//});