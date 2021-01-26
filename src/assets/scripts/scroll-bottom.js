$(document).ready(function(){
    function scrollDown() {
        $('#scroll-d').effect('bounce', {times:3}, 3000, scrollDown);
    }
    scrollDown();
});