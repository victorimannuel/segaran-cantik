navItems = document.getElementsByClassName("nav-link")

function resetNav(){
    for(let i = 0; i < navItems.length; i++){
        navItem = navItems[i]
        
        navItem.style.fontWeight = "";
    }
}

for(let i = 0; i < navItems.length; i++){
    navItems[i].addEventListener("click", () =>{
        resetNav()
        navItems[i].style.fontWeight = "bold";
    })
}