document.addEventListener('DOMContentLoaded', () => {
	document.addEventListener('scroll', () => {
		// NavBar Scroll

		let navbar = document.querySelector('#navbar'),
			scroll = document.documentElement

		if (scroll.scrollTop >= 50) {
			navbar.classList.add('navbar-scroll')
		} else {
			navbar.classList.remove('navbar-scroll')
		}

		// LeafAnimation Scroll HomePage

		let leafHome = document.querySelectorAll('.leaf-home')

		leafHome.forEach((leaf) => {
			if (scroll.scrollTop >= 2000) {
				leaf.classList.add('leaf_animation')
			}
		})

		// Tags Scroll Fixed ProductsPage
		console.log(scroll.scrollTop)

		if (document.querySelector('#tags')) {

			let tags = document.querySelector('#tags'),
				fakeTags = document.querySelector('#fakeTags')

			if (scroll.scrollTop >= 710) {
				fakeTags.classList.add('fakeTags')
				tags.classList.add('tagsFixed')
			} else {
				fakeTags.classList.remove('fakeTags')
				tags.classList.remove('tagsFixed')
			}
		}
	})

	// Change image on ProductPage

	let imgsProduct = document.querySelectorAll('.imgsProduct'),
		imgProduct = document.querySelector('#imgProduct')

	imgsProduct.forEach((element) => {
		element.addEventListener('click', () => {
			let imgProductSrc = document.querySelector('#imgProduct').getAttribute('src'),
				elementSrc = element.getAttribute('src')

			element.setAttribute('src', imgProductSrc)

			imgProduct.setAttribute('src', elementSrc)
		})
	})

	// Quantity on ProductPage

	if (document.querySelector('#quantity')) {
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
	}

	// Animation Form ConnexionPage

	if (document.querySelector('#createAccount')) {
		let createAccount = document.querySelector('#createAccount'),
			connexionOne = document.querySelector('#connexion-one'),
			forgotPassword = document.querySelector('#forgotPassword'),
			connexionTwo = document.querySelector('#connexion-two'),
			connexionThree = document.querySelector('#connexion-three'),
			backToConnexion = document.querySelectorAll('.backToConnexion'),
			createAccount1 = document.querySelector('#createAccount1'),
			createAccount2 = document.querySelector('#createAccount2'),
			PartOneCreateAcount = document.querySelector('#PartOneCreateAcount'),
			PartTwoCreateAcount = document.querySelector('#PartTwoCreateAcount')

		createAccount.addEventListener('click', () => {
			connexionOne.classList.add('out')
			connexionTwo.classList.add('in')
		})

		forgotPassword.addEventListener('click', () => {
			connexionOne.classList.add('out')
			connexionThree.classList.add('in')
		})

		backToConnexion.forEach((back) => {
			back.addEventListener('click', () => {
				connexionOne.classList.remove('out')
				connexionTwo.classList.remove('in')
				connexionThree.classList.remove('in')
			})
		})

		PartOneCreateAcount.addEventListener('click', () => {
			createAccount1.classList.add('opacityOut')

			setTimeout(() => {
				createAccount1.classList.add('none')
				createAccount2.classList.remove('none')
				createAccount2.classList.add('opacityIn')
			}, 300)
		})

		PartTwoCreateAcount.addEventListener('click', () => {
			createAccount2.classList.add('opacityOut')

			setTimeout(() => {
				createAccount2.classList.add('none')
				createAccount1.classList.remove('none')
				createAccount1.classList.add('opacityIn')
			}, 300)
		})
	}


	// Animation Account Page

	if (document.querySelector('#account')) {
		let accountOne = document.querySelector('#account-one'),
			accounttwo = document.querySelector('#account-two'),
			accountthree = document.querySelector('#account-three'),
			subscriptionProfile = document.querySelector('#subscriptionProfile'),
			infoProfile = document.querySelector('#infoProfile'),
			backToProfile = document.querySelectorAll('.backToProfile')

		subscriptionProfile.addEventListener('click', () => {
			accountOne.classList.add('opacityOut')

			setTimeout(() => {
				accountOne.classList.add('none')
				accounttwo.classList.remove('none')
				accounttwo.classList.add('opacityIn')
			}, 500)
		})

		infoProfile.addEventListener('click', () => {
			accountOne.classList.add('opacityOut')

			setTimeout(() => {
				accountOne.classList.add('none')
				accountthree.classList.remove('none')
				accountthree.classList.add('opacityIn')
			}, 500)
		})

		backToProfile.forEach((back) => {
			back.addEventListener('click', () => {
				accounttwo.classList.add('opacityOut')
				accountthree.classList.add('opacityOut')

				setTimeout(() => {
					accounttwo.classList.add('none')
					accountthree.classList.add('none')
					accountOne.classList.remove('none')
					accountOne.classList.add('opacityIn')
				}, 400)
			})
		})
	}


	// Data Account Page

	if (document.querySelector('#dataMail')) {

		let dataMail = document.querySelector('#dataMail'),
			dataMailValue = dataMail.value,
			dataAddress = document.querySelector('#dataAddress'),
			dataAddressValue = dataAddress.value,
			dataPhone = document.querySelector('#dataPhone'),
			dataPhoneValue = dataPhone.value,
			dataPassword = document.querySelector('#dataPassword'),
			dataPasswordValue = dataPassword.value

		let changeDataMail = document.querySelector('#changeDataMail'),
			changeDataAddress = document.querySelector('#changeDataAddress'),
			changeDataPhone = document.querySelector('#changeDataPhone'),
			changeDataPassword = document.querySelector('#changeDataPassword')

		let changingDataMail = document.querySelector('#changingDataMail'),
			changingDataAddress = document.querySelector('#changingDataAddress'),
			changingDataPhone = document.querySelector('#changingDataPhone'),
			changingDataPassword = document.querySelector('#changingDataPassword')

		let validateDataMail = document.querySelector('#validateDataMail'),
			validateDataAddress = document.querySelector('#validateDataAddress'),
			validateDataPhone = document.querySelector('#validateDataPhone'),
			validateDataPassword = document.querySelector('#validateDataPassword')

		let cancelDataMail = document.querySelector('#cancelDataMail'),
			cancelDataAddress = document.querySelector('#cancelDataAddress'),
			cancelDataPhone = document.querySelector('#cancelDataPhone'),
			cancelDataPassword = document.querySelector('#cancelDataPassword')




		// Data Mail

		changeDataMail.addEventListener('click', () => {

			dataMail.classList.add('changing')
			dataMail.disabled = false
			dataMail.value = ""
			changeDataMail.classList.add('none')
			changingDataMail.classList.remove('none')

		})

		cancelDataMail.addEventListener('click', () => {

			dataMail.classList.remove('changing')
			dataMail.disabled = true
			dataMail.value = dataMailValue
			changeDataMail.classList.remove('none')
			changingDataMail.classList.add('none')

		})

		validateDataMail.addEventListener('click', () => {

			dataMail.classList.remove('changing')
			dataMail.disabled = true
			changeDataMail.classList.remove('none')
			changingDataMail.classList.add('none')

		})


		// Data Address

		changeDataAddress.addEventListener('click', () => {

			dataAddress.classList.add('changing')
			dataAddress.disabled = false
			dataAddress.value = ""
			changeDataAddress.classList.add('none')
			changingDataAddress.classList.remove('none')

		})

		cancelDataAddress.addEventListener('click', () => {

			dataAddress.classList.remove('changing')
			dataAddress.disabled = true
			dataAddress.value = dataAddressValue
			changeDataAddress.classList.remove('none')
			changingDataAddress.classList.add('none')

		})

		validateDataAddress.addEventListener('click', () => {

			dataAddress.classList.remove('changing')
			dataAddress.disabled = true
			changeDataAddress.classList.remove('none')
			changingDataAddress.classList.add('none')

		})


		// Data Phone

		changeDataPhone.addEventListener('click', () => {

			dataPhone.classList.add('changing')
			dataPhone.disabled = false
			dataPhone.value = ""
			changeDataPhone.classList.add('none')
			changingDataPhone.classList.remove('none')

		})

		cancelDataPhone.addEventListener('click', () => {

			dataPhone.classList.remove('changing')
			dataPhone.disabled = true
			dataPhone.value = dataPhoneValue
			changeDataPhone.classList.remove('none')
			changingDataPhone.classList.add('none')

		})

		validateDataPhone.addEventListener('click', () => {

			dataPhone.classList.remove('changing')
			dataPhone.disabled = true
			changeDataPhone.classList.remove('none')
			changingDataPhone.classList.add('none')

		})


		// Data Password

		changeDataPassword.addEventListener('click', () => {

			dataPassword.classList.add('changing')
			dataPassword.disabled = false
			dataPassword.value = ""
			changeDataPassword.classList.add('none')
			changingDataPassword.classList.remove('none')

		})

		cancelDataPassword.addEventListener('click', () => {

			dataPassword.classList.remove('changing')
			dataPassword.disabled = true
			dataPassword.value = dataPasswordValue
			changeDataPassword.classList.remove('none')
			changingDataPassword.classList.add('none')

		})

		validateDataPassword.addEventListener('click', () => {

			dataPassword.classList.remove('changing')
			dataPassword.disabled = true
			changeDataPassword.classList.remove('none')
			changingDataPassword.classList.add('none')

		})


	}
})