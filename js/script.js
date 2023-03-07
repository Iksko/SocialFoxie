/*HAMMENU*/
const hamburger = document.getElementById("hamburger-menu")
const navbar = document.getElementById("mobile-navbar")
/*OPEN AND CLOSE*/
hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("is-active")
    navbar.classList.toggle("is-active")

})
document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("is-active")
    navbar.classList.remove("is-active")
    categoriesUlLinks.classList.remove("is-active")
    categoriesLinksDesktop.classList.remove("is-active")
}))

/*CATEGORIES DROP-DOWN ICON*/
const categories = document.getElementById("categoriesBtn")
const categoriesUlLinks = document.getElementById("categoriesLinks")
const chevronRight = document.getElementById("chevronRight")

categories.addEventListener("click", () => {
    categoriesUlLinks.classList.toggle("is-active")
    chevronRight.classList.toggle("is-active")
})

/*DESKTOP-CATEGORIES-DROP-DOWN-MENU*/
const categoriesDesktop = document.getElementById("category")
const categoriesLinksDesktop = document.getElementById("categoriesLinksDesktop")
const chevronRightDesktop = document.getElementById("chevronRightDesktop")

categoriesDesktop.addEventListener("click", () => {
    categoriesLinksDesktop.classList.toggle("is-active")
    chevronRightDesktop.classList.toggle("is-active")
})