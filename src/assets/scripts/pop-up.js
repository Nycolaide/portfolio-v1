function openPopup(el) {
    $('.popup').hide();
    $('#' + el).fadeIn(200);   
}

function closePopup() {
    $('.popup').fadeOut(300);
}

var popup = $('.popup');

window.onclick = function(event) {
    if (event.target == popup) {
        popup.style.display = "none";
    }
}