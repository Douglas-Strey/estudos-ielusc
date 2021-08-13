$(document).ready(function () {
    $("#productPrice").maskMoney({
        prefix: "R$ ",
        decimal: ",",
        thousands: "."
    });
});

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
await Toast.fire({
    icon: 'success',
    title: 'Success'
})
