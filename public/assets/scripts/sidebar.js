let sidebarState = document.querySelector('body>div')
let menuToggle = document.getElementById('menu-toggle')

menuToggle.addEventListener('click', () => {
    let state = sidebarState.getAttribute("state")
    if(state === "aside-closed")
        sidebarState.setAttribute("state", "aside-open")
    if(state === "aside-open")
        sidebarState.setAttribute("state", "aside-closed")
})

/* trying out media query */

// let mediaQuery = window.matchMedia('(min-width: 768px)')

// function handleMediaQuery(e) {
//     if(e.matches){
//         alert('bisa bwang')
//     }
// }

// mediaQuery.addListener(handleMediaQuery)
// handleTabletChange(mediaQuery)
