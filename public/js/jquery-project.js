var btnSetItem = document.querySelector('.btnSetItem');
var btnGetItem = document.querySelector('.btnGetItem');

function setLocalStorage() {

    var name = document.getElementById('inputName').value;
    var email = document.getElementById('inputEmail').value;
    var password = document.getElementById('inputPassword').value;
    var adress = document.getElementById('inputAddress').value;
    var complement = document.getElementById('inputComplement').value;
    var city = document.getElementById('inputCity').value;
    var state = document.getElementById('inputState').value;
    var zip = document.getElementById('inputZip').value;
    var checkbox = document.getElementById('gridCheck').value;

    btnSetItem.addEventListener('click', () => {
        localStorage.setItem('name', name);
        localStorage.setItem('email', email);
        localStorage.setItem('password', password);
        localStorage.setItem('adress', adress);
        localStorage.setItem('complement', complement);
        localStorage.setItem('city', city);
        localStorage.setItem('state', state);
        localStorage.setItem('zip', zip);
        localStorage.setItem('checkbox', checkbox);
    })
};

function getLocalStorage() {
    btnGetItem.addEventListener('click', () => {
        console.log(localStorage.getItem('name'))
    })
};

setLocalStorage();
getLocalStorage();