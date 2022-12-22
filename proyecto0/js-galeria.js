
function expandir(imgs) {
    
  // Obtener la imagen ampliada
  var expandImg = document.getElementById("expandedImg");
    
  // Obtener el texto de la imagen
  var imgText = document.getElementById("imgtext");
    
  // Use el mismo src en la imagen expandida que la imagen en la que se hace clic desde la cuadrícula
  expandImg.src = imgs.src;
    
  // Use el valor del atributo alt de la imagen en la que se puede hacer clic como texto dentro de la imagen expandida
  imgText.innerHTML = imgs.alt;
    
  // Mostrar el elemento contenedor (oculto con CSS)
  expandImg.parentElement.style.display = "block";
}


 
