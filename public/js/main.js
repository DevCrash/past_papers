/**
 * Created with JetBrains PhpStorm.
 * User: Bemigho
 * Date: 17.07.13
 * Time: 13:17
 * To change this template use File | Settings | File Templates.
 */
$(function () {
    $('#activator').click(function () {
        $('#overlay').fadeIn('fast', function () {
            $('#box').animate({'top': '160px'}, 500);
            $('#loginForm').show();
        });
    });
    $('#boxclose').click(function () {
        $('#box').animate({'top': '-200px'}, 500, function () {
            $('#loginForm').hide();
            $('#overlay').fadeOut('fast');
        });
    });

});