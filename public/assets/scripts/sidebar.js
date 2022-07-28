let sidebarState = document.querySelector('body>div')
let menuToggle = document.getElementById('menu-toggle')

menuToggle.addEventListener('click', () => {
    let state = sidebarState.getAttribute("state")
    if(state === "aside-closed")
        sidebarState.setAttribute("state", "aside-open")
    if(state === "aside-open")
        sidebarState.setAttribute("state", "aside-closed")
})

