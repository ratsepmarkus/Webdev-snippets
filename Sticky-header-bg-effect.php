<?php
/**
 * Custom Sticky Header
 * Adds scroll effect to the header and styles for transparent → scrolled state.
 */

// Add JavaScript to the footer
add_action('wp_footer', function () { ?>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const header = document.querySelector(".custom-sticky-header");
            if (!header) return;

            window.addEventListener("scroll", function () {
                if (window.scrollY > 50) {
                    header.classList.add("is-scrolled");
                } else {
                    header.classList.remove("is-scrolled");
                }
            });
        });
    </script>
<?php });

// Add CSS to the header
add_action('wp_head', function () { ?>
    <style>
        /* Base header (transparent state) */
        .custom-sticky-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            transition: background-color 0.4s ease, box-shadow 0.4s ease, color 0.4s ease;
            background-color: transparent !important;
        }

        /* Links & logo text color when transparent */
        .custom-sticky-header .hfe-nav-menu .hfe-menu-item,
        .custom-sticky-header .hfe-nav-menu .elementor-button {
            color: #ffffff !important;
            transition: color 0.4s ease;
        }

        /* Scrolled state (semi-transparent white) */
        .custom-sticky-header.is-scrolled {
            background-color: rgba(255, 255, 255, 0.9) !important;
            backdrop-filter: blur(6px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        /* Links & button when scrolled */
        .custom-sticky-header.is-scrolled .hfe-nav-menu .hfe-menu-item,
        .custom-sticky-header.is-scrolled .hfe-nav-menu .elementor-button {
            color: #2A323C !important;
        }
    </style>
<?php });
