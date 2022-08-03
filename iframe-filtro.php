<!DOCTYPE html>
<html lang="es">
	<head>
		<style>
			
		</style>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZAfONuLG0MokjbzO7V3SqV8WkZMS3Qrk&callback=initMap"></script> 
		<script src="https://code.jquery.com/jquery-3.6.0.js" 
		integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script src="Localizacion.js" defer></script>
		
		<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    		<link rel="stylesheet" type="text/css" href="./style-frame.css" />
		
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
		</script>

	</head>



<body>

<div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="Imagenes/Bar-Restaurante-Solo-Croquetas-Madrid-6-b.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">BAR RESTAURANTE SOLO CROQUETAS</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <button style="margin:5px;" id="zoom" type="button" class="btn btn-success">Ubicar</button>
        <button style="margin:5px;" onclick="reservar()" type="button" class="btn btn-danger">Reservar</button>
        <button style="margin:5px;" onclick="googleMap()"
    
    type="button" class="btn btn-primary">Como llegar</button>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="Imagenes/ROYAL-BAR.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="Imagenes/Bar-Restaurante-Solo-Croquetas-Madrid-4-b.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<div class="card mb-3" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="Imagenes/ROYAL-BAR.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>





</body>

<script>

mapboxgl.accessToken = 'pk.eyJ1Ijoib25kaWdpdGFsIiwiYSI6ImNsNXFpcWhjejEzY3AzaW9lMXQwczFhM2UifQ.5HvN0zihtT3auHddppiAhQ';
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/ondigital/cl5tltoku000h15o5mkkxxnra',
center: [-3.6995518447242817, 40.416159911769135],
maxZoom: 20,
minZoom: 6,
zoom: 11
});



function reservar() {
let preguntaProducto = confirm('Esta acción te dirige al formulario de compra');
    if(preguntaProducto === true){
    location.href="https://lasgradas.com/producto/proyectos-nuevos-formula1-yas-marina-circuit/"
    }else{console.log('denegado')};
  }

function googleMap() {
  let preguntaMaps = confirm('¿Desea abrir Google Maps?');
    if(preguntaMaps === true){
    location.href='https://www.google.com/maps/dir//Solo+de+Croquetas+Echegaray'
    }else{console.log('denegado')};
}

map.on('style.load', () => {
map.setFog({});
});
  document.getElementById('zoom').addEventListener('click', () => {

map.flyTo({
center: [-3.6995518447242817, 40.416159911769135],

essential: true, 
zoom:18


});

})



</script>

    <style>
		
    </style>
    </html>