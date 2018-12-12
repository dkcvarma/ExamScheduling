(function() {
  var header = document.getElementById("blackHeader");
  var shader = document.getElementById("shader");

  

  var _scrollY = function () {
    if (window.scrollY) {
      return window.scrollY;
    } else if (document.documentElement.scrollTop) {
      return document.documentElement.scrollTop;
    }
    return function () {};
  };

  var scrollHandler = function(event) {

    if (_scrollY() >= window.innerHeight) {
      header ? header.className = "check background" : null;
      shader ? shader.className = "locked" : null;
    } else {
      header ? header.className = "" : null;
      shader ? shader.className = "" : null;
    }
  };

  document.addEventListener("scroll", scrollHandler);
  scrollHandler();

  var mobileNavButton = document.getElementById("mobile-nav-touch");
  var nav = document.getElementById("main-nav");

  mobileNavButton.addEventListener("click", function(event) {
    nav.classList.toggle("open");
    mobileNavButton.classList.toggle("open");
  });

  nav.addEventListener("click", function(event) {
      if (event.target) {
        nav.classList.toggle("open");
        mobileNavButton.classList.toggle("open");
      }
    });
})();
