$(document).ready(function()
{
//open popup
    $("#pop").click(function() {
        $("#overlay_form").fadeIn(1000);

        positionPopup();
    });

});

function formPopup() {
    //open popup
    $("#pop").click(function() {

        $("#overlay_form").fadeIn(1000);
        positionPopup();
    });

}
function catchErrors(){
    $("#login_button").click(function() {


    });
}


//close popup
function formFadeOut() {
    $("#close").click(function()
    {
        if($_session['error'] =''){
            $("#overlay_form").fadeOut(300);
        }



    });
}


function fadeOut(elem, speed) {
    var opacityDec = (10/speed);
    if(!elem.style.opacity){elem.style.opacity = 1;}
    setInterval(function() {
        elem.style.opacity -= opacityDec;
    }, 10);
}


//position the popup at the center of the page
function positionPopup()
{
    if(!$("#overlay_form").is(':visible'))
    {
        return;
    }
    $("#overlay_form").css({
        left: ($(window).width() - $('#overlay_form').width()) / 2,
        top: ($(window).width() - $('#overlay_form').width()) / 30,
        position:'absolute'
    });
}

//maintain the popup at center of the page when browser resized
$(window).bind('resize',positionPopup);

function clear_form_elements(ele) {

    $(ele).find(':input').each(function() {
        switch(this.type) {
            case 'password':
            case 'select-multiple':
            case 'select-one':
            case 'text':
            case 'textarea':
                $(this).val('');
                break;
            case 'checkbox':
            case 'radio':
                this.checked = false;
        }
    });

}

