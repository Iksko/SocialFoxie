/*HAMMENU*/
const hamburger = document.getElementById("hamburger-menu")
const navbar = document.getElementById("mobile-navbar")

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("is-active")
    navbar.classList.toggle("is-active")

})
document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("is-active")
    navbar.classList.remove("is-active")
}))

const exploreMore = document.getElementById("explore-more")
const exploreMoreLinks = document.getElementById("explore-more-links")

exploreMore.addEventListener("click", () => {
    exploreMoreLinks.classList.toggle("is-active")
})