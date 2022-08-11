navItems = document.getElementsByClassName("nav-link")

function resetNav(){
    for(let i = 0; i < navItems.length; i++){
        navItem = navItems[i]
        
        navItem.style.fontWeight = "";
    }
}

for(let i = 0; i < navItems.length; i++){
    navItems[i].addEventListener("click", () =>{
        console.log(navItems[i]);
        resetNav()
        navItems[i].style.fontWeight = "bold";
        console.log(navItems[i])
    })
}
