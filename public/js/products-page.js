function maskInput() {
    $("#productPrice").keypress(function () {
        $(this).mask('R$ #.##0,00', { reverse: true });
    });

    return;
}

maskInput();
