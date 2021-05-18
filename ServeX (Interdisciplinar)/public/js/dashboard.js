
// Splash JS

$(document).ready(() => {
    splash()
    // $('.container-splash').css('display', 'none')
    // $('.container-dash').css('display', 'inline')
    // $('.container-dash').addClass('anime-left')
    // setTimeout(() => {
    //     $('.container-dash').addClass('anime-start')
    // }, 100)
})

const splash = () => {
    setTimeout(() => {
        $('.wrapper-splash').addClass('anime-start')
    }, 600)

    setTimeout(() => {
        $('.wrapper-splash').removeClass('anime-start')
    }, 2500)

    setTimeout(() => {
        $('.container-splash').addClass('anime-background')
    }, 2700)

    setTimeout(() => {
        $('.container-splash').css('display', 'none')
        $('.container-dash').css('display', 'table')
        $('.container-dash').addClass('anime-left')
    }, 3700)

    setTimeout(() => {
        $('.container-dash').addClass('anime-start')
    }, 3800)

    setTimeout(() => {
        $('.container-dash').css('display', 'initial')
    }, 4600)
}

// Dashboard JS

$(window).scroll(() => {
    navBar()
    stickyFilter() 
})

const navBar = (w) => {
    this.scrollY > 20
    ? $('nav').addClass('sticky')
    : $('nav').removeClass('sticky')
}

const stickyFilter = (w) => {
    var sticky = $('.sticky-filter');
    var cards = $('.cards');
    if($(this).scrollTop() + sticky.outerHeight() <= cards.outerHeight()){
        sticky.css('position', 'fixed')
        sticky.css('margin-top', 0)
        return
    } 
    sticky.css('position', 'absolute')
    sticky.css('margin-top', cards.outerHeight() - sticky.outerHeight())
}
