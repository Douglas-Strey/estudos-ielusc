$(document).ready(function () {
    $("#productPrice").maskMoney({
        prefix: "R$ ",
        decimal: ",",
        thousands: "."
    });
});
