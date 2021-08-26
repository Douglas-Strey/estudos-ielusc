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

function setLocalStorage() {
  btnSetItem.addEventListener("click", () => {
    validateCheckbox();

    if (document.getElementById("gridCheck").checked) {
      localStorage.setItem("Nome", $("#inputName").val());
      localStorage.setItem("E-mail", $("#inputEmail").val());
      localStorage.setItem("Senha", $("#inputPassword").val());
      localStorage.setItem("Endereço", $("#inputAddress").val());
      localStorage.setItem("Complemento", $("#inputComplement").val());
      localStorage.setItem("Cidade", $("#inputCity").val());
      localStorage.setItem("Estado", $("#inputState").val());
      localStorage.setItem("Zip", $("#inputZip").val());
    }
  });
}

function getLocalStorage() {
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
        confirmButton: 'btn btn-success popUpMargin',
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
