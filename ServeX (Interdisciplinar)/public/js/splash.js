
// Splash JS

$(document).ready(() => {
    setTimeout(() => {
        $('.container').addClass('anime-start')
    }, 600)

    setTimeout(() => {
        $('.container').removeClass('anime-start')
    }, 2500)

    setTimeout(() => {
        $.get('dashboard', data => $('html').html(data))
    }, 3000)
})

