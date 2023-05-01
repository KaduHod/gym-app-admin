import { isString, isBirthday, isEmail, validatePassword } from "./validate.js"

const form = document.forms['register-form'];
const fields = {
    name: document.getElementById('name-register'),
    email: document.getElementById('email-register'),
    password: document.getElementById('password-register'),
    passConfirm: document.getElementById('password-confirm'),
    username: document.getElementById('username-register'),
}

const validate = () => {
    const validateName = () => {
        const valid = isString(fields.name)
        if(valid) return
    }

    const validateUserName = () => {
        const valid = isString(fields.username)
        if(valid) return
    }

    const validateEmail = () => {
        const valid = isString(fields.email) && isEmail(fields.email)
        if(valid) return
    }

    const validatePass = () => {
        const valid = validatePassword(fields.password)
        if(valid) return
    }

    const confirmPassword = () => {
        const valid = fields.password === fields.passwordConfirmation
        if(valid) return
    }

    const validateBirthdate = () => {
        const valid = isBirthday(fields.birthday)
        if(valid) return
    }

    const main = () => {
        return validateName() && 
            validateBirthdate() && 
            validateEmail() && 
            validatePass() && 
            confirmPassword() && 
            validateUserName();
    }

    return main()
}

const warnMessage = (field) => {

}

const setEventRegister = () => {
    form.addEventListener('click', (e) => {
        e.preventDefault()
        const user = Object.keys(fields).reduce((acc, key) => {
            acc[key] = fields[key].value; return acc
        }, {})
        validate(user) ? form.submit() : null
    })
}
setEventRegister()
