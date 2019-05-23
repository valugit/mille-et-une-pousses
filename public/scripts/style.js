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

    let imgsProduct = document.querySelectorAll('.imgsProduct')
    let imgProduct = document.querySelector('#imgProduct')

    imgsProduct.forEach(element => {
        element.addEventListener('click', () => {

            let imgProductSrc = document.querySelector('#imgProduct').getAttribute('src')
            let elementSrc = element.getAttribute('src')

            element.setAttribute('src', imgProductSrc)

            imgProduct.setAttribute('src', elementSrc)
        })
    });



})