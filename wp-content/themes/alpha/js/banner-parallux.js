
/**
 * Custom Banner Background Parallux Effect
 * @param  scrollTop
 * @return scroll event
 */
(function($){
    "use strict";

    $("#bnrParallax").each(function() {

        var bigYellowCircle = document.querySelector("#bnrParallax");
        var yScrollPosition;

        function setTranslate(xPos, yPos, el) {
            el.style.transform = "translate3d(" + xPos + ", " + yPos + "px, 0)";
            el.style.transform = "WebkitTranslate3d(" + xPos + ", " + yPos + "px, 0)";
        }

        window.addEventListener("DOMContentLoaded", function scrollLoop() {
            yScrollPosition = window.scrollY;
            setTranslate(0, yScrollPosition * -0.14, bigYellowCircle);
            requestAnimationFrame(scrollLoop);
        });
    });

})(jQuery);
