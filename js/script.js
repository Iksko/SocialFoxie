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

/*BACK-TO-TOP-ICON*/
const iconActive = document.getElementById("icon")
const header = document.getElementById("header")
const mobileNav = document.getElementById("mobile-navbar")

window.addEventListener("scroll", () => {
  if(window.pageYOffset>100){
    icon.classList.add("is-active")
  }
  if(window.pageYOffset>1){
    header.classList.add("is-active")
    mobileNav.classList.add("scroll")
  }
  else{
    icon.classList.remove("is-active")
    header.classList.remove("is-active")
    mobileNav.classList.remove("scroll")
  }
})
const iconScroll = document.getElementById("icon")
iconScroll.addEventListener("click", (event) => {
  event.preventDefault();
  const target = document.querySelector(iconScroll.getAttribute("href"));
  target.scrollIntoView({ behavior: "smooth" });
});