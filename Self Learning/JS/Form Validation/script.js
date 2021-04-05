let name = document.getElementById('name')
let form = document.getElementById('form') 
let errorElement = document.getElementById('error') 

form.addEventListener('submit', (e) =>{
    let messages = []
    if(name.value === '' || name.value == null){
        messages.push("Name is required")
    }

    if(name.value.split(' ').length < 2){
        messages.push("Name should contain 2 words at least")
    }

    if(!name.value.includes(".") || !name.value.includes("-")){
        messages.push("special characters are allowed")
    }

    if(messages.length > 0)
    {
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
    
})