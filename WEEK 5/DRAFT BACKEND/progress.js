let next=document.getElementById("next")
let previous=document.getElementById("previous")

function add(){
    if(i<4){
        i++  
        return i
    }

}

next.addEventListener('click',()=>{
    alert("hello")
    if(i<4){
        i++  
        return i
    }
})

previous.addEventListener('click',()=>{
    alert("wueeh")
        
})