import { isString, isBirthday, isEmail, validatePassword } from "./validate.js"

const form = document.forms['register-form'];
const fields = {
    name: document.getElementById('name-register'),
    email: document.getElementById('email-register'),
    password: document.getElementById('password-register'),
    passConfirm: document.getElementById('password-confirm'),
    username: document.getElementById('username-register'),
}

const validate = ({name, username, email, password, passwordConfirmation, birthday}) => {
    const validateName = () => {
        return isString(name)
    }

    const validateUserName = () => {
        return isString(username)
    }

    const validateEmail = () => {
        return isString(email) && isEmail(email)
    }

    const validatePass = () => {
        return validatePassword(password)
    }

    const confirmPassword = () => {
        return password === passwordConfirmation
    }

    const validateBirthdate = () => {
        return isBirthday(birthday)
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

const setEventRegister = () => {
    form.addEventListener('click', (e) => {
        e.preventDefault()
        const user = Object.keys(fields).reduce((acc, key) => {
            acc[key] = fields[key].value;
            return acc
        }, {})

        console.log({user})
        const valid = validate(user)

        console.log(valid)
    })
}
setEventRegister()
