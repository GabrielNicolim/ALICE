function loginValidate(event) {
    
    let valid = true; 

    let email = event.target.email
    let password = event.target.password

    let passwordValue = password.value.trim()
    let emailValue = email.value.trim()

    // Email
    if(voidCheck(emailValue) || emailValidate(emailValue)) {
        email.classList = 'error'
        valid = false 
    }
    else {
        email.classList = 'normal'
    }

    // Password
    if(voidCheck(passwordValue)) {
        password.classList = 'error'
        valid = false 
    }
    else {
        password.classList = 'normal'
    }

    return valid
}