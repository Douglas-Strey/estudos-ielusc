var btnSetItem = document.querySelector('.btnSetItem');
var btnGetItem = document.querySelector('.btnGetItem');
var btnClearData = document.querySelector('.btnClearData');

function validateCheckbox() {
    var messageModal = new bootstrap.Modal(document.getElementById('messageModal'), { backdrop: false });
    messageModal.show();

    var message;

    if (!document.getElementById('gridCheck').checked) {
        message = 'Para continuar com o precesso, favor concordar com os termos abaixo.';
    } else {
        message = 'Muito obrigado, o envio dos dados foi feito com sucesso!';
    }
    document.getElementById('messageModalContent').innerText = message;
};

function paramsLocalStorage() {
    var params = [
        id = document.getElementById('inputName').value,
        email = document.getElementById('inputEmail').value,
        password = document.getElementById('inputPassword').value,
        adress = document.getElementById('inputAddress').value,
        complement = document.getElementById('inputComplement').value,
        city = document.getElementById('inputCity').value,
        state = document.getElementById('inputState').value,
        zip = document.getElementById('inputZip').value
    ];

    return params;
};

function setLocalStorage() {

    btnSetItem.addEventListener('click', () => {
        paramsLocalStorage();
        validateCheckbox();

        if (document.getElementById('gridCheck').checked) {
            localStorage.setItem('Data', params[0]);
        }
    });
};

function getLocalStorage() {
    btnGetItem.addEventListener('click', () => {
        document.getElementById("dados").innerHTML = email;
    })
};

function clearLocalStorage() {
    btnClearData.addEventListener('click', () => {
        if (localStorage) {
            localStorage.clear()
        }
    })
};

setLocalStorage();
getLocalStorage();
clearLocalStorage();