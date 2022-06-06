const arr = document.querySelectorAll(".account-item")

const items = [... arr]




function addActive(e){
    for(let item of items){
        if(item.getAttribute("class").split(" ")[1] == "active"){
            item.classList.remove("active")
        }
    }
    e.srcElement.classList.add("active")
    // console.log(e.srcElement.classList);
}