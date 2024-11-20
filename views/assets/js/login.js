// toogle password
const checkbox = document.querySelector("input[type='checkbox']")
const password = document.querySelector('#senha')
checkbox.addEventListener('click', () => {
    if(password.type === 'text'){
        password.type = 'password'
    }
    else{
        password.type = 'text'
    }
})