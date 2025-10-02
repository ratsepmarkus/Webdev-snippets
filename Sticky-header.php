// desktop header - #custom-sticky-header
// mobile header - #custom-sticky-header-mobile
// logo - #header-logo

add_action('wp_footer', function () { ?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const desktopHeader = document.querySelector("#custom-sticky-header");
    const mobileHeader = document.querySelector("#custom-sticky-header-mobile");

    window.addEventListener("scroll", function () {
        if (desktopHeader) {
            if (window.scrollY > 50) {
                desktopHeader.classList.add("is-scrolled");
            } else {
                desktopHeader.classList.remove("is-scrolled");
            }
        }

        if (mobileHeader) {
            if (window.scrollY > 50) {
                mobileHeader.classList.add("is-scrolled");
            } else {
                mobileHeader.classList.remove("is-scrolled");
            }
        }
    });
});
</script>
<?php });

add_action('wp_head', function () { ?>
<style>
/* Desktop header */
#custom-sticky-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    width: 100%;
    height: 100px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    transition: height 0.4s ease, background-color 0.4s ease, box-shadow 0.4s ease;
}

#custom-sticky-header.is-scrolled {
    height: 70px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.15);
}

#custom-sticky-header-mobile {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    width: 100%;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    justify-content: space-between;
    transition: padding 0.4s ease, background-color 0.4s ease, box-shadow 0.4s ease;
}

#custom-sticky-header-mobile .e-con-inner {
    transition: padding 0.4s ease;
}

#custom-sticky-header-mobile.is-scrolled .e-con-inner {
    padding-top: 0;
    padding-bottom: 0;
}

/* Logo */
#header-logo {
    transform-origin: left center;
    transition: transform 0.4s ease;
}

#custom-sticky-header-mobile.is-scrolled #header-logo {
    transform: scale(0.8);
}

#custom-sticky-header.is-scrolled #header-logo {
    transform: scale(0.8);
}

/* Hamburger toggle */
#custom-sticky-header-mobile .hfe-nav-menu__toggle {
    height: auto;
    padding: 0;
}

/* Hamburger icon */
#custom-sticky-header-mobile .hfe-nav-menu-icon svg {
    display: block;
    width: 30px;
    height: 30px;
    font-size: 30px;
    line-height: 30px;
    transition: width 0.4s ease, height 0.4s ease, font-size 0.4s ease;
}

#custom-sticky-header-mobile.is-scrolled .hfe-nav-menu-icon svg {
    width: 20px;
    height: 20px;
    font-size: 20px;
}
</style>
<?php });
