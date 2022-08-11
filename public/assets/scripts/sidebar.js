let sidebarState = document.querySelector('body>div')
let menuToggle = document.getElementById('menu-toggle')
let aside = document.getElementById('sidebar')

var closeSidebar = () => {
    sidebarState.setAttribute("state", "aside-closed")
}
var openSidebar = () =>{
    sidebarState.setAttribute("state", "aside-open")
}

menuToggle.addEventListener('click', () => {
    let state = sidebarState.getAttribute("state")
    if(state === "aside-closed")
        openSidebar()
    if(state === "aside-open")
        closeSidebar()
})

let menuToggleMobile = document.getElementById('menu-toggle-mobile')

menuToggleMobile.addEventListener('click', () => {
    let state = sidebarState.getAttribute("state")
    if(state === "aside-closed")
        openSidebar()
    if(state === "aside-open")
        closeSidebar()
})


/* adding interactive sidebar on mobile */

let navItems = document.querySelectorAll(".nav-item")
for(let i=0; i<navItems.length; i++){
    navItems[i].addEventListener('click', () => {
        if(sidebarState.getAttribute("view") === "mobile"){
            closeSidebar()
        }
        console.log(sidebarState.getAttribute("state"))
    })
    console.log(navItems[i])
}

/* trying out media query */

let mediaQuerySmall = window.matchMedia('(max-width: 1000px)')
let mediaQueryLarge = window.matchMedia('(min-width: 1000px)')
function smallScreen(e) {
    if(e.matches){
        sidebarState.setAttribute("state", "aside-closed")
        sidebarState.setAttribute("view", "mobile")  
    }
}
function largeScreen(e) {
    if(e.matches){
        sidebarState.setAttribute("state", "aside-open")
        sidebarState.setAttribute("view", "desktop")   
    }
}

mediaQuerySmall.addListener(smallScreen)
mediaQueryLarge.addListener(largeScreen)
handleTabletChange(mediaQuerySmall)
handleTabletChange(mediaQueryLarge)

