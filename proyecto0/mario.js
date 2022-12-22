var player = document.getElementById('mario')
var powerup = {
  audio: new Audio('http://themushroomkingdom.net/sounds/wav/smb/smb_powerup.wav'),
  play: function() { 
    this.audio.currentTime = 0;
    this.audio.play() 
  }
}

// Actualizamos la ubicación del personaje
function updateElement(element, incx, incy) {
  var x = Number(element.getAttribute('data-x')) + incx
  var y = Number(element.getAttribute('data-y')) + incy
  
  /*
  // Ejemplo básico de límite de regiones
  if ((x < 0) || (x > 600)) 
    return
  */
  
  element.style.transform = 'translate('+ x +'px, '+ y +'px)'
  
  if (element.classList.contains('mirror'))
    element.style.transform += ' scaleX(-1)'
    
  if (element.classList.contains('big'))
    element.style.transform += ' scale(2)'
  
  // Update HTML
  element.setAttribute('data-x', x)
  element.setAttribute('data-y', y)
}

// Cuando el usuario pulsa una tecla
window.addEventListener('keydown', function(e) {
  console.log(e)
  
  var speed = 10;
  //var speed = (e.ctrlKey ? 20 : 10)
  
  // Cursor hacia la derecha
  if (e.keyCode == 39) {
    player.classList.add('caminar')
    player.classList.remove('mirror')
    updateElement(player, +speed, 0)
  }
  // Cursor hacia la izquierda
  else if (e.keyCode == 37) {
    player.classList.add('caminar')
    player.classList.add('mirror')
    updateElement(player, -speed, 0)
  }
  
  if (e.keyCode == 85) {
    player.classList.toggle('big')
    //new Audio('http://themushroomkingdom.net/sounds/wav/smb/smb_powerup.wav').play()
    powerup.play(); // fix network lag sound    
    updateElement(player, 0, 0)
  }
  
})

// Cuando el usuario suelta una tecla
window.addEventListener('keyup', function(e) {
  // Eliminamos la clase caminar para detener la animación
  // y que se detenga en el primer fotograma, como cuando no
  // realiza animación.
  player.classList.remove('caminar')
})

// Inicialización
updateElement(player, 0, 0)