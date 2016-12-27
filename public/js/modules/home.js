var home = function () {
    var setContentHeight = function () {
        // reset height
        $('.right_col').css('min-height', $(window).height());

        var bodyHeight = $('body').outerHeight(),
            footerHeight = $('body').hasClass('footer_fixed') ? -10 : $('footer').height(),
            leftColHeight = $('.left_col').eq(1).height() + $('.sidebar-footer').height(),
            contentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;

        // normalize content
        contentHeight -= $('.nav_menu').height() + footerHeight;

        $('.right_col').css('min-height', contentHeight);
    };
    var menu_toggle = function () {
        $("#menu_toggle").click(function () {
            if ($('body').hasClass('nav-md')) {
                $('#sidebar-menu').find('li.active ul').hide();
                $('#sidebar-menu').find('li.active').addClass('active-sm').removeClass('active');
            } else {
                $('#sidebar-menu').find('li.active-sm ul').show();
                $('#sidebar-menu').find('li.active-sm').addClass('active').removeClass('active-sm');
            }
            $('body').toggleClass('nav-md nav-sm');
        });
    };

    var sidebar_menu = function () {
        $('#sidebar-menu').find('a').on('click', function() {
            var $li = $(this).parent();

            if ($li.is('.active')) {
                $li.removeClass('active active-sm');
                $('ul:first', $li).slideUp(function() {
                    setContentHeight();
                });
            } else {
                // prevent closing menu if we are on child menu
                if (!$li.parent().is('.child_menu')) {
                    $('#sidebar-menu').find('li').removeClass('active active-sm');
                    $('#sidebar-menu').find('li ul').slideUp();
                }

                $li.addClass('active');

                $('ul:first', $li).slideDown(function() {
                    setContentHeight();
                });
            }
        });
    };

    var select_menu = function () {
        var CURRENT_URL = window.location.href.split('#')[0].split('?')[0];
        $('#sidebar-menu').find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('current-page');

        $('#sidebar-menu').find('a').filter(function () {
            return this.href == CURRENT_URL;
        }).parent('li').addClass('current-page').parents('ul').slideDown(function() {
            setContentHeight();
        }).parent().addClass('active');
    };

    return {
        init: function () {
            menu_toggle();
            sidebar_menu();
        }
    };
}();

$(function () {
    home.init();
});