(() => {
    /**
     * Starts animation on home page
     * @return bool
     */
    let startAnimation = () => {
        /**
         * Checks is home page
         */
        if (location.href.search('home') > 0) {
            let code1, code2;
            code1 = $('#img1');
            code2 = $('#img2');
            code1.addClass('animation1');
            code2.addClass('animation2');
        } else {
            return false;
        }
    }

    $('#button').click(() => {
        if ($(menu).css('display') == 'none') {
            $(menu).css('display', 'block');
            $(menu).css('opacity', 1);
        } else {
            $(menu).css('opacity', 0);
            window.setTimeout(() => {
                $(menu).css('display', 'none');
            }, 300);
        }
    });
    $(window).on('DOMContentLoaded', () => {
        startAnimation();
    })
})();