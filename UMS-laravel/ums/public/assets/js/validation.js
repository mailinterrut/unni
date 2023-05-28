function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validateMobileNumberWithCountryCode(number) {
const mobileRegex = /^\+\d{1,3}\s?\d{8,}$/;
return mobileRegex.test(number);
}

function isJSON(str) {
    try {
      JSON.parse(str);
      return true;
    } catch (error) {
      return false;
    }
}
function isNumber(value) {
    return typeof value === 'number' && !isNaN(value);
}

function isString(value) {
    return typeof value === 'string';
}

function isObject(value) {
    return typeof value === 'object' && value !== null;
}
  
  

  
  
