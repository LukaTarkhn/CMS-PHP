$('#languages').change(function () {
    window.location = 'languages/change?lang=' + $(this).val();
});


window.addEventListener('load', function() {

    var four = document.querySelector('.four');
    var imgfour = document.querySelector('.imgfour');
    var five = document.querySelector('.five');
    var six = document.querySelector('.six');
    delay = 900;

    setTimeout(function() {
        $('.content-2').addClass('loaded');
    }, 1000);
    setTimeout(function() {
        $('.rotated').addClass('loaded');
    }, 1000);

    var animation = function() {
        setTimeout(function() {
            four.style.fontSize = '1.5vw';
            imgfour.style.width = '10vw'
        }, delay *2);
        setTimeout(function() {
            four.style.fontSize = '0';
            imgfour.style.width = '0'
        }, delay * 5);

        setTimeout(function() {
            five.style.fontSize = '1.5vw';
        }, delay * 6);
        setTimeout(function() {
            five.style.fontSize = '0';
        }, delay * 11);

        setTimeout(function() {
            six.style.fontSize = '1.5vw';
        }, delay * 12);
        setTimeout(function() {
            six.style.fontSize = '0';
        }, delay * 17);
    };
    animation();
    setInterval(animation, delay * 16);
});