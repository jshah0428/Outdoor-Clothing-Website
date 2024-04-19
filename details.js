$(document).ready(() => {
    // Apply grayscale effect on mouse enter and mouse leave

    var img = $('img')
    console.log($(this).attr('src'));
    img.css('opacity', '0.2');

    img.mouseover(function(){
        img.css('opacity', '1')
    });
    img.mouseout(function(){
        img.css('opacity', '0.2');
    });
});