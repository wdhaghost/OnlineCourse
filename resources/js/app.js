

const addThemeBtn=document.getElementById("add-theme-btn");
const newTheme=document.getElementById("new-theme");

addThemeBtn.addEventListener('click',function(event){
    event.preventDefault();
    console.log(newTheme.value);
    addTheme(newTheme.value)
})


async function addTheme(theme){

    const url =document.getElementById("add-theme-btn").dataset.route;
    const response=await fetch(url,{
        method:"POST", 
        headers: {'Content-type':'application/json'},
        body:JSON.stringify({
            name:theme
        })
    });

    const data = await response.json()
    if (data.ok) console.log(theme, data.id) 
   
}
