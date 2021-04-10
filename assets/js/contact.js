let fName = document.getElementById('firstname');
let fNameErrMsg = document.getElementById('fNameErr');

let lName = document.getElementById('lastname');
let lNameErrMsg = document.getElementById('lNameErr');

let emailAddress = document.getElementById('email');
let emailAddressErrMsg = document.getElementById('emailErr');

let msg = document.getElementById('message');
let msgErrMsg = document.getElementById('msgErr');

let response = document.querySelector('.response');



const clearErr = () => {
    if (fName.value.length > 0) {
        fNameErrMsg.textContent = '';
    } 
    if (lName.value.length > 0) {
        lNameErrMsg.textContent = '';
    }
    if (emailAddress.value.length > 0) {
        emailAddressErrMsg.textContent = '';
    }
    if (msg.value.length > 0) {
        msgErrMsg.textContent = '';
    }
}
fName.addEventListener('keyup', clearErr);
lName.addEventListener('keyup', clearErr);
emailAddress.addEventListener('keyup', clearErr);
msg.addEventListener('keyup', clearErr);

// added timeout for removing the response
if (response) {
    setTimeout(() => {
        response.remove();
    }, 5000);
}