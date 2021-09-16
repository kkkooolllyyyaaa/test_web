const sendButton = document.getElementById("submit_request")
const x = (document.getElementById('textX'));
const y = (document.getElementsByClassName('radioY'));
const r = (document.getElementById('textR'));

function validate() {
    const xVal = document.forms['form']['x'].value.replace(/,/, '.');
    const yVal = document.forms['form']['y'].value.replace(/,/, '.');
    const rVal = document.forms['form']['r'].value.replace(/,/, '.');
    console.log('form values: ' + xVal + ' ' + yVal + ' ' + rVal);
    if (isEmpty(xVal)) {
        alert('Enter a number in X field');
    } else if (isEmpty(yVal)) {
        alert('Select Y');
    } else if (isEmpty(rVal)) {
        alert('Enter a number in R field');
    } else {
        if (isNaN(xVal) || (Math.abs(xVal) >= 3)) {
            alert('X must be number in range (-3; 3)');
        } else if (isNaN(yVal) || yVal < -3 || yVal > 5) {
            alert('Y must be integer number in range [-3; 5]');
        } else if (isNaN(rVal) || rVal < 2 || rVal > 5) {
            alert('R must be number in range (2; 5)');
        }
    }
}
function isEmpty(obj) {
    for (let key in obj) {
        return false;
    }
    return true;
}

sendButton.onclick = validate