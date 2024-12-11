$(function () {
  // topic slider
  $(".topic-slider").slick({
    infinite: true,
    slidesToShow: 3,
    dots: true,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          variableWidth: true
        }
      },
    ]
  });

  // news tabs
  $('#newsTabs a:not(:first)').addClass('inactive');
  $('.container').hide();
  $('.container:first').show();
  $('#newsTabs a').click(function () {
    var t = $(this).attr('id');
    if ($(this).hasClass('inactive')) { //this is the start of our condition 
      $('#newsTabs a').addClass('inactive');
      $(this).removeClass('inactive');

      $('.container').hide();
      $('#' + t + 'C').fadeIn('slow');
    }
  });

});