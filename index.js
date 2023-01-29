const navToggle = document.querySelector('.nav-toggle');
const navLinks = document.querySelectorAll('.nav__link') /* selecting all nav links */

navToggle.addEventListener('click', () => {
    document.body.classList.toggle('nav-open');
});

navLinks.forEach(link => {
    link.addEventListener('click', () => {
        document.body.classList.remove('nav-open');
    })
})

$(window).on("scroll", function() {
    var footer = $("footer");
    var footerTop = footer.offset().top;
    var windowHeight = $(window).height();
    var scrollPos = $(window).scrollTop() + windowHeight;

    if (scrollPos > footerTop) {
      $(".zoom-text").addClass("active");
    } else {
      $(".zoom-text").removeClass("active");
    }
    });