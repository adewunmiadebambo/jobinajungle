const passwordInput = document.querySelector('#password-box input')
const passwordBtn = document.querySelector('#password-box button')

passwordBtn.addEventListener('click', () => {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text'
        passwordBtn.innerHTML = 'hide'
    } else {
        passwordInput.type = 'password'
        passwordBtn.innerHTML = 'show'
    }
})