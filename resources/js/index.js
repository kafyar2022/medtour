const commentsCarousel = document.querySelector('.comments-slide');
if (commentsCarousel) {
   $(".comments-slide").owlCarousel({
      loop: true,
      nav: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      items: 1,
   });
}