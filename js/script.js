function realizarPago() {
    Swal.fire({
        icon: 'success',
        title: '¡Pago realizado correctamente!',
        text: 'Gracias por tu compra, tu factura se esta generando, sera enviada a tu correo. Comunicate conmigo por WhatsApp',
        confirmButtonText: 'Volver a la página de inicio'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "index.php"; // Cambia la ruta según sea necesario
        }
    });
}
