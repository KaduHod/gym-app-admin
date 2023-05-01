export const isString = (val) =>  typeof val === 'string';
export const isNumber = (val) => typeof val === 'number';
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
export const isEmail = (val) => emailRegex.test(val)
export const isBirthday = (birthdate) => {
    const birthday = new Date(birthdate);
    return isNaN(birthday.getTime()) || new Date() > birthday;
}
const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[^\w\s])(?=\S+$).{6,}$/;
const hasUpperCaseLetters = /(?=.*[A-Z])/
const hasLowerCaseLetters = /(?=.*[a-z])/
const hasNumbers = /(?=.*\d)/
const hasWhitespaces = /^\S+$/;
const minLengthRegex = /^.{6,}$/
const hasSpecialCHars = /(?=.*[^\w\s])/
export const validatePassword = (val) => {
    if(passwordRegex.test(val)) return true;
    const hasUpper = hasUpperCaseLetters.test(val)
    const hasLower = hasLowerCaseLetters.test(val)
    const hasNumber = hasNumbers.test(val)
    const notWhiteSpaces = !hasWhitespaces.test(val)
    const hasMinLen = minLengthRegex.test(val)
    const hasSpecialCharacters = hasSpecialCHars.test(val)
    const verify = {
        hasUpper,
        hasLower,
        hasNumber,
        notWhiteSpaces,
        hasMinLen,
        hasSpecialCharacters
    }
    return Object.keys(verify).filter(key => !verify[key])
}

