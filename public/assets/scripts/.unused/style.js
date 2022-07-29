let menuToggle = document.getElementById('menu-toggle')
let logout = document.getElementById('logout')
let aside = document.getElementsByTagName('aside')[0]
let main = document.getElementsByTagName('main')[0]

const navHide = document.querySelectorAll("[navHide]")

menuToggle.addEventListener("click",() =>{
    state = aside.getAttribute("state")
    if(state == "open")
        closeNav()
    else if (state == "closed")
        openNav()
})

function closeNav() {
    aside.style.width= "5%"
    aside.setAttribute("state", "closed")

    main.style.marginLeft= "5%"
    main.style.width = "90%"
    menuToggle.style.transform= "rotate(180deg)"
    logout.style.transform= "rotate(180deg)"
    logout.removeAttribute("hidden")

    hide()

}

function openNav() {
    aside.style.width= "15%"
    aside.setAttribute("state", "open")
    

    main.style.marginLeft= "18%"
    main.style.width = "77%"
    menuToggle.style.transform= "rotate(360deg)"
    logout.style.transform= "rotate(360deg)"
    logout.setAttribute("hidden", "")
    unhide()
}

function hide(){
    for(var i=0; i<navHide.length; i++){
        
    navHide[i].setAttribute("hidden", "")

    }
}

function unhide(){
    for(var i=0; i<navHide.length; i++){
        navHide[i].removeAttribute("hidden")
    }
}

navItem = document.querySelectorAll("aside nav li")
navIcon = document.querySelectorAll("nav ul li img")

for(var i=0; i<navItem.length; i++){
    navItemChild = navItem[i].children
    if(navItem[i].getAttribute("chosen") == "true"){
        navItemChild[0].removeAttribute("hidden")
    }
}

