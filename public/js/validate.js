export const isString = (val) =>  typeof val === 'string';
export const isNumber = (val) => typeof val === 'number';
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
export const isEmail = (val) => emailRegex.test(val)
export const isBirthday = (birthdate) => {
    const birthday = new Date(birthdate);
    return isNaN(birthday.getTime()) || new Date() > birthday;
}
const hasUpperCaseLetters = /(?=.*[A-Z])/
const hasLowerCaseLetters = /(?=.*[a-z])/
const hasNumbers = /(?=.*\d)/
const noWhitespaces = /^\S+$/;
const minLengthRegex = /^.{6,}$/
export const validatePassword = (val) => {
    const hasUpper = hasUpperCaseLetters.test(val)
    const hasLower = hasLowerCaseLetters.test(val)
    const hasNumber = hasNumbers.test(val)
    const notWhiteSpaces = noWhitespaces.test(val)
    const hasMinLen = minLengthRegex.test(val)
    return hasLower && 
        hasUpper && 
        hasNumber && 
        notWhiteSpaces && 
        hasMinLen;
}

