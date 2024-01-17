function realizarPago() {
    Swal.fire({
        icon: 'success',
        title: '¡Pago realizado correctamente!',
        text: 'Gracias por tu compra, comunicate por WhatsApp con nosotros y envia tu comprobante de pago.',
        confirmButtonText: 'Volver a la página de inicio'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "index.html"; // Cambia la ruta según sea necesario
        }
    });
}
