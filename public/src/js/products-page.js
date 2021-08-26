function clearDataStorage() {
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

clearDataStorage();