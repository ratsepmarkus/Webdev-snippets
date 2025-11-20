document.addEventListener("DOMContentLoaded", function () {
  // Select all links with hash hrefs
  const anchorLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');

  anchorLinks.forEach(link => {
    link.addEventListener("click", function (e) {
      const targetID = this.getAttribute("href").substring(1);
      const target = document.getElementById(targetID);

      if (target) {
        e.preventDefault();

        // Calculate scroll position for middle
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
        const middleOffset = window.innerHeight / 2 - target.offsetHeight / 2;

        window.scrollTo({
          top: targetPosition - middleOffset,
          behavior: "smooth"
        });
      }
    });
  });
});
