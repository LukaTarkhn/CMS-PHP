$('#languages').change(function () {
    window.location = '/languages/change?lang=' + $(this).val();
});



$('#play-button').click(function(){
    $('#embed').attr('src', 'https://www.youtube.com/embed/PTYyM6xyedg?rel=0&amp;controls=1&amp;showinfo=0&amp;autoplay=0');
});

window.addEventListener('load', function() {

    var home = document.querySelector('.home');
    delay = 0;

    setTimeout(function() {
        $('.headcontent').addClass('loaded');
    }, 1500);

    var headchange = function() {
        setTimeout(function() {
            home.style.backgroundImage = 'url(../images/backgrounds/1.jpg), url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.2.jpg)';
            home.style.backgroundSize = '100% 100%';
        }, delay);
        setTimeout(function() {
            home.style.backgroundImage = 'url(../images/backgrounds/1.jpg), url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.2.jpg)';
            home.style.backgroundSize = '300% 300%';
        }, delay + 4700);
        setTimeout(function() {
            home.style.backgroundImage = 'url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.jpg), url(../images/backgrounds/1.2.jpg)';
            home.style.backgroundSize = '100% 100%';
        }, delay + 5700);
        setTimeout(function() {
            home.style.backgroundImage = 'url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.jpg), url(../images/backgrounds/1.2.jpg)';
            home.style.backgroundSize = '300% 300%';
        }, delay + 12700);
        setTimeout(function() {
            home.style.backgroundImage = 'url(../images/backgrounds/1.2.jpg), url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.jpg)';
            home.style.backgroundSize = '100% 100%';
        }, delay + 13700);
        setTimeout(function() {
            home.style.backgroundImage = 'url(../images/backgrounds/1.2.jpg), url(../images/backgrounds/1.1.jpg), url(../images/backgrounds/1.jpg)';
            home.style.backgroundSize = '300% 300%';
        }, delay + 20700);
    };
    headchange();
    setInterval(headchange, delay + 21700);
});

window.addEventListener('load', function() {

    var offerimg = document.querySelector('.offerimg');
    del = 0;

    setTimeout(function() {
        $('.headcontent').addClass('loaded');
    }, 1500);

    var headchange = function() {
        setTimeout(function() {
            offerimg.style.transform = 'rotate(0)';
            offerimg.style.width = '210px';
        }, del);
        setTimeout(function() {
            offerimg.style.transform = 'rotate(-20deg)';
            offerimg.style.width = '250px';
        }, del + 5500);


    };
    headchange();
    setInterval(headchange, delay + 8200);
});
