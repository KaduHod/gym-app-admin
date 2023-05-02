import { isString, isBirthday, isEmail, validatePassword, isPhone } from "./validate.js"

const form = document.forms['register-form'];

const validate = () => {
    let errors = {}
    let elements = null;
    const validateName = () => {
        const valid = isString(elements['name'].value)
        if(valid) return
        errors.name = elements['name']
    }

    const validateNickname = () => {
        const valid = isString(elements['nickname'].value)
        if(valid) return
        errors.nickname = elements['nickname']
    }

    const validateEmail = () => {
        const valid = isString(elements['email'].value) && isEmail(elements['email'].value)
        if(valid) return
        errors.email = elements['email']
    }

    const validatePass = () => {
        const valid = validatePassword(elements['password'].value)
        if(valid.constructor.name !== 'Error') return
        console.log({valid})
        errors.password = elements['password']
    }

    const confirmPassword = () => {
        const valid = elements['password'].value ===  elements['password-confirmation'].value
        if(valid) return
        errors.passwordConfirmation = elements['password-confirmation']
    }

    const validateBirthdate = () => {
        const valid = isBirthday(elements['birthdate'].value)
        if(valid) return
        errors.birthday = elements['birthdate']
    }

    const validateCellphone = () => {
        const valid = isPhone(elements['cellphone'].value)
        if(valid) return
        errors.cellphone = elements['cellphone']
    }

    const main = () => {
        errors = {}
        elements = form.elements
        validateName() 
        validateBirthdate() 
        validateEmail() 
        validatePass() 
        confirmPassword() 
        validateNickname()
        validateCellphone()
    }

    main()

    return errors
}

const setEventRegister = () => {
    form.addEventListener('click', (e) => {
        e.preventDefault()     
        if(e.target.id !== "register-button") return   
        const errors = validate()
        console.log(errors)
        if(Object.keys(errors).length) return
        form.submit();
    })
}

setEventRegister()
