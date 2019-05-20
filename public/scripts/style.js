document.addEventListener("DOMContentLoaded", () => {

    document.addEventListener('scroll', () => {

        let navbar = document.querySelector('#navbar'),
            scroll = document.documentElement

        if (scroll.scrollTop >= 50) {
            navbar.classList.add('navbar-scroll')
        } else {
            navbar.classList.remove('navbar-scroll')
        }
    })

})