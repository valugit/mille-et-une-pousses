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

    let imgsProduct = document.querySelectorAll('.imgsProduct'),
        imgProduct = document.querySelector('#imgProduct')

    imgsProduct.forEach(element => {
        element.addEventListener('click', () => {

            let imgProductSrc = document.querySelector('#imgProduct').getAttribute('src'),
                elementSrc = element.getAttribute('src')

            element.setAttribute('src', imgProductSrc)

            imgProduct.setAttribute('src', elementSrc)
        })
    });

    let less = document.querySelector('#less'),
        more = document.querySelector('#more'),
        quantity = document.querySelector('#quantity'),
        q = parseInt(quantity.value, 10)


    less.addEventListener('click', () => {

        if (q > 1) {
            q -= 1
            quantity.value = q
        }
    })

    more.addEventListener('click', () => {
        q += 1
        quantity.value = q
    })
})