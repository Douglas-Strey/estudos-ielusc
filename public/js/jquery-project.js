var btnSetItem = document.querySelector(".btnSetItem");
var btnGetItem = document.querySelector(".btnGetItem");
var btnClearData = document.querySelector(".btnClearData");

function validateCheckbox() {
  var messageModal = new bootstrap.Modal(
    document.getElementById("messageModal"),
    { backdrop: false }
  );
  messageModal.show();

  var message;

  if (!document.getElementById("gridCheck").checked) {
    message =
      "Para continuar com o precesso, favor concordar com os termos abaixo.";
  } else {
    message = "Muito obrigado, o envio dos dados foi feito com sucesso!";
  }
  document.getElementById("messageModalContent").innerText = message;
}

// function paramsLocalStorage() {
//   var params = [
//     (name = document.getElementById("inputName").value),
//     (email = document.getElementById("inputEmail").value),
//     (password = document.getElementById("inputPassword").value),
//     (adress = document.getElementById("inputAddress").value),
//     (complement = document.getElementById("inputComplement").value),
//     (city = document.getElementById("inputCity").value),
//     (state = document.getElementById("inputState").value),
//     (zip = document.getElementById("inputZip").value),
//   ];

//   return params;
// }

function setLocalStorage() {
  btnSetItem.addEventListener("click", () => {
    // paramsLocalStorage();
    validateCheckbox();

    var params = [
      (fullName = document.getElementById("inputName").value),
      (email = document.getElementById("inputEmail").value),
      (password = document.getElementById("inputPassword").value),
      (adress = document.getElementById("inputAddress").value),
      (complement = document.getElementById("inputComplement").value),
      (city = document.getElementById("inputCity").value),
      (state = document.getElementById("inputState").value),
      (zip = document.getElementById("inputZip").value),
    ];

    if (document.getElementById("gridCheck").checked) {
      localStorage.setItem("Nome", params[0]);
      localStorage.setItem("E-mail", params[1]);
      localStorage.setItem("Senha", params[2]);
      localStorage.setItem("Endereço", params[3]);
      localStorage.setItem("Complemento", params[4]);
      localStorage.setItem("Cidade", params[5]);
      localStorage.setItem("Estado", params[6]);
      localStorage.setItem("Zip", params[7]);
    }
  });
}

// function handleFormatData() {
//   setLocalStorage();

//   var nome = params[0];
//   var userEmail = params[1];
//   var senha = params[2];
//   var endereco = params[3];
//   var complemento = params[4];
//   var cidade = params[5];
//   var estado = params[6];
//   var zipCode = params[7];

//   return nome, userEmail, senha, endereco, complemento, cidade, estado, zipCode;
// }

function getLocalStorage() {
  // Rever ests function amanhã com o Gian
  // handleFormatData();
  var nome = document.getElementById("inputName").value;

  btnGetItem.addEventListener("click", () => {
    document.getElementById("getElementsModalContent").innerText = nome;
    document.getElementById("getElementsModalContent").innerText = userEmail;
    document.getElementById("getElementsModalContent").innerText = senha;
    document.getElementById("getElementsModalContent").innerText = endereco;
    document.getElementById("getElementsModalContent").innerText = complemento;
    document.getElementById("getElementsModalContent").innerText = cidade;
    document.getElementById("getElementsModalContent").innerText = estado;
    document.getElementById("getElementsModalContent").innerText = zipCode;
  });
}

function clearLocalStorage() {
  btnClearData.addEventListener("click", () => {
    if (localStorage) {
      localStorage.clear();
    }
  });
}

setLocalStorage();
getLocalStorage();
clearLocalStorage();
