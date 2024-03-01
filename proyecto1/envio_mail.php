<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

// Verificar el campo oculto anti-spam
    if (!empty($_POST['honeypot'])) {
    // Si el campo oculto no está vacío, es probable que sea un bot de spam
    // Puedes ignorar la solicitud o tomar medidas adicionales, como registrar la IP del remitente o redirigirlos a una página de error
    exit();
    }    
    // Recopila la información del formulario
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $mensaje = $_POST["message"];

    // Validación de datos
    if (empty($nombre) || empty($email) || empty($mensaje) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Por favor, completa todos los campos correctamente.";
    exit();
    }

    // Protección contra ataques de inyección
    $nombre = htmlspecialchars($nombre);
    $email = htmlspecialchars($email);
    $mensaje = htmlspecialchars($mensaje);
    
    // Dirección de correo electrónico a la que se enviará el mensaje
    $destinatario = "jomarogu@gmail.com";

    // Asunto del correo electrónico
    $asunto = "Nuevo mensaje de contacto de $nombre";

    // Cuerpo del correo electrónico
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Cabeceras del correo electrónico
    $cabeceras = "From: $email\r\n";

    // Intenta enviar el correo electrónico
    try {
        if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
            echo "<div class='h2 text-center'>Mensaje enviado con éxito. Gracias por ponerte en contacto.</div>";
        } else {
            throw new Exception("<div class='h2 text-center'>Error al enviar el mensaje.</div>");
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Acceso denegado.";
}
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>