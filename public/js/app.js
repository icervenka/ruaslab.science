$(document).ready(function(){
  $('.network-card').hide();

  $('#svg_heart').hover(function() {
    $('.heart').toggle();
  });
  $('#svg_brain').hover(function() {
    $('.brain').toggle();
  });
  $('#svg_muscle').hover(function() {
    $('.muscle').toggle();
  });
  $('#svg_fat').hover(function() {
    $('.fat').toggle();
  });
  $('#svg_liver').hover(function() {
    $('.liver').toggle();
  });
  $('#svg_cogs').hover(function() {
    $('.cogs').toggle();
  });

  $(window).scroll(function() {
    if ($(window).scrollTop() >= 25) {
      $('header').css('opacity', 1);
    }
  });


  $('#carousel-mt .carousel-item:first').addClass('active');

  $('#carousel-1 .carousel-item:first').addClass('active');

  $('#carousel-mt').on('slide.bs.carousel', function onSlide(ev) {
    var id = ev.relatedTarget.id;
    $('.hover_path').css('fill', '#BCBEC0');
    $('.hover_path_2').css('fill', '#6D6E71');
    switch (id) {
      case "mtslide-heart":
        $('#svg_heart .hover_path').css('fill', '#C23532');
        $('#svg_heart .hover_path_2').css('fill', '#FFFFFF');
        break;
      case "mtslide-brain":
        $('#svg_brain .hover_path').css('fill', '#D87D6A');
        $('#svg_brain .hover_path_2').css('fill', '#FFFFFF');
        break;
      case "mtslide-fat":
        $('#svg_fat .hover_path').css('fill', '#F0C93A');
        $('#svg_fat .hover_path_2').css('fill', '#FFFFFF');
        break;
      case "mtslide-muscle":
        $('#svg_muscle .hover_path').css('fill', '#C0604D');
        $('#svg_muscle .hover_path_2').css('fill', '#FFFFFF');
        break;
      case "mtslide-liver":
        $('#svg_liver .hover_path').css('fill', '#78392A');
        $('#svg_liver .hover_path_2').css('fill', '#FFFFFF');
        break;
      default:
        $('.hover_path').css('fill', '#BCBEC0');
        $('.hover_path_2').css('fill', '#6D6E71');
        break;
    }
  })
});

$('#basic-gallery').lightGallery({
  autoplay: true,
  thumbnail: true
});

$("#basic-gallery").justifiedGallery({
  rowHeight : 225,
  lastRow : 'nojustify',
  margins : 3,
  captions: true
});

mybutton = document.getElementById("scrollTop");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  window.scroll({
    top: 0,
    left: 0,
    behavior: 'smooth'
  });
  //document.body.scrollTop = 0; // For Safari
  //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
