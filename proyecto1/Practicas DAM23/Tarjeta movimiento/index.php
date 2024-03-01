<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Animación con Acelerómetro</title>
</head>
<body>

<div class="card" style="width: 200px; height: 200px; background-color: #3498db; color: #fff; text-align: center; line-height: 200px; font-size: 18px;">
    Tarjeta de Prueba
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let gyroMessage = document.createElement('div');
        gyroMessage.innerHTML = 'Este dispositivo no es compatible con la detección de movimiento.';
        gyroMessage.style.color = 'red';
        gyroMessage.style.fontWeight = 'bold';
        gyroMessage.style.textAlign = 'center';
        gyroMessage.style.marginTop = '20px';
        gyroMessage.style.display = 'none'; // Inicialmente oculto
        gyroMessage.style.zIndex = '9999'; // Valor alto para asegurar que aparezca por encima de otros elementos

        document.body.appendChild(gyroMessage);

        if (window.DeviceMotionEvent) {
            window.addEventListener('devicemotion', function (event) {
                let accelerationX = event.accelerationIncludingGravity.x * 10; // Multiplica por 10 para un movimiento más pronunciado en el eje X
                console.log('Aceleración X:', accelerationX);

                let cardElement = document.querySelector('.card');

                if (cardElement) {
                    cardElement.style.transform = `translateX(${accelerationX}px)`;
                }
            });
        } else {
            gyroMessage.style.display = 'block'; // Muestra el mensaje de compatibilidad si el evento no está disponible
        }
    });
</script>

</body>
</html>
