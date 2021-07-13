var btnSetItem = document.querySelector(".btnSetItem");
var btnGetItem = document.querySelector(".btnGetItem");
var btnClearData = document.querySelector(".btnClearData");

function validateCheckbox() {
  document.querySelector('.alert-confirm').onclick = function () {
    if (!document.getElementById("gridCheck").checked) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Para continuar com a operação, é necessário concordar com os termos!',
      })
    } else {
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Seus dados foram enviados com sucesso!',
        showConfirmButton: true,
      })
    }
  };
  return;
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
  // Rever esta function amanhã com o Gian
  // handleFormatData();
  document.querySelector('.btnGetItem').onclick = function () {
    document.getElementById("getElementsModalContent1").innerText = localStorage.getItem("Nome");
    document.getElementById("getElementsModalContent2").innerText = localStorage.getItem("E-mail");
    document.getElementById("getElementsModalContent3").innerText = localStorage.getItem("Senha");
    document.getElementById("getElementsModalContent4").innerText = localStorage.getItem("Endereço");
    document.getElementById("getElementsModalContent5").innerText = localStorage.getItem("Complemento");
    document.getElementById("getElementsModalContent6").innerText = localStorage.getItem("Cidade");
    document.getElementById("getElementsModalContent7").innerText = localStorage.getItem("Estado");
    document.getElementById("getElementsModalContent8").innerText = localStorage.getItem("Zip");
  }
};

function clearLocalStorage() {
  document.querySelector('.btnClearData').onclick = function () {
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
      title: 'Você tem certeza?',
      text: "Você não será capaz de desfazer essa operação!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Sim, apague isso!',

      cancelButtonText: 'Não, cancelar!',
      reverseButtons: true
    }).then((result) => {
      if (result.isConfirmed) {
        swalWithBootstrapButtons.fire(
          'Apagado!',
          'Seus arquivos foram apagados com sucesso!',
          'success'
        )
        if (localStorage) {
          localStorage.clear();
        }
      } else if (
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelado',
          'Seus arquivos continuam seguros :)',
          'error'
        )
      }
    })
  };
};

setLocalStorage();
getLocalStorage();
clearLocalStorage();
