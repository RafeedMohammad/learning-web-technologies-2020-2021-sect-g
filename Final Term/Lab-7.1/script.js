let name = document.getElementById('name')
let form = document.getElementById('form') 
let email = document.getElementById('email')


function showError(input, message){
    const formControl = input.parentElement;
    formControl.className = 'form-control error';
    const small = formControl.querySelector('small');
    small.innerText = message;

}

function showSuccess(input){
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}


form.addEventListener('submit', function(e){
    e.preventDefault();

    if(name.value ==='')
    {
        showError(name, 'Username is required');
    }

    else
    {
        showSuccess(name);
    }

    if(email.value === '')
    {
        showError(email, 'Email is required');
    }

    if(!email.value.includes('@'))
    {
        showError(email, "Email is invalid");
    }

    else
    {
        showSuccess(email);
    }



})