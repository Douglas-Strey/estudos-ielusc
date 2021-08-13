$('.signupToast').onclick = function () {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true
    })

    Swal.fire({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
        icon: 'success',
        title: 'Login bem sucedido!'
    });
}