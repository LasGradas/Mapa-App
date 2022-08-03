<!DOCTYPE html>
<html lang="es">
	<head>

		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
    <!-- mapa -->

    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css' rel='stylesheet' />

    <script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.min.js'></script>
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v2.3.0/mapbox-gl-geocoder.css' type='text/css' />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>




		
    <script src="https://code.jquery.com/jquery-3.6.0.js" 
		integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

		<script src="Localizacion.js" defer></script>
		
		<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./style-map.css" />
		
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<!-- JavaScript Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
		</script>

	</head>
	<body style="background: black;">
<!-- 
//////////////////////////////////////////////////////////////////////////////////
  _   _   _____   __  __   _     
 | | | | |_   _| |  \/  | | |    
 | |_| |   | |   | |\/| | | |    
 |  _  |   | |   | |  | | | |___ 
 |_| |_|   |_|   |_|  |_| |_____|
                                 
//////////////////////////////////////////////////////////////////////////////////
 -->

<!-- MAPA -->
		
<div id='map'></div>


<!-- CANVAS INICIO -->

<div class="offcanvas offcanvas-start show" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Seleccione el deporte</h5>
  </div>
  <div class="offcanvas-body row align-items-center">
    <button id="boton-pop-futbol" type="button" data-bs-dismiss="offcanvas" class="boton-deporte btn btn-success">FÚTBOL</button>
    <br>
    <button id="boton-pop-motor" type="button" data-bs-dismiss="offcanvas" class="boton-deporte btn btn-success">MOTOR</button>
    <br>
    <button id="boton-pop-tenis" type="button" data-bs-dismiss="offcanvas" class="boton-deporte btn btn-success">TENIS</button>
    <br>
  </div>
</div>


<!-- CANVAS FÚTBOL -->

<div id="canvas-ligas" class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Seleccione la liga</h5>
  </div>
  <div class="offcanvas-body row align-items-center">
  <div class="categoria-nombre">
  <label for="1" style="font-size:30px" id="nombre-liga1">Primera División</label>
  <input id="boton-pop-liga1" type="image" src="Imagenes/primera-division.png" value="Primera división" class="categoria"  alt="...">

</div>
<div class="categoria-nombre">
  <label for="1" style="font-size:30px;" id="nombre-liga2">Segunda División</label>
  <input id="boton-pop-liga2" type="image" src="Imagenes/segunda-division.png" value="Segunda División" class="categoria"  alt="...">
  
</div>
  </div>
</div>


<!-- CANVAS EQUIPOS -->

<div id="canvas-futbol-equipos" class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Seleccione el equipo</h5>
  </div>
  <div class="offcanvas-body row align-items-center equipos">

<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/real-madrid.png"  value="real-madrid" class="equipo"  alt="...">
  <label for="0" id="nombre-equipo">Real Madrid</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/barcelona.png"  value="barcelona" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Barcelona</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/atletico.png"  value="atletico" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Atletico</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/betis.png"  value="betis" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Betis</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/athletic.png"  value="athletic" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Athletic</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/valencia.png"  value="valencia" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Valencia</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/sevilla.png" value="sevilla" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Sevilla</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/celta.png"  value="celta" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Celta</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/rayo.png"  value="rayo" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Rayo Vallecano</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/girona.png"  value="girona" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Girona</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/real-sociedad.png"  value="real-sociedad" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Real Sociedad</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/espanyol.png"  value="espanyol" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Espanyol</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/getafe.png"  value="getafe" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Getafe</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/villarreal.png"  value="villarreal" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Villarreal</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/osasuna.png"  value="osasuna" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Osasuna</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/cadiz.png"  value="cadiz" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Cadiz</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/elche.png"  value="elche" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Elche</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/almeria.png"  value="almeria" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Almería</label>
</div>
<div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos/mallorca.png"  value="mallorca" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Mallorca</label>
</div>

  </div>
</div>

<div id="canvas-futbol-equipos-2" class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Seleccione el equipo</h5>
  </div>
  <div class="offcanvas-body row align-items-center equipos">


  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/alaves.png"  value="alaves" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Alavés</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/albacete.png"  value="albacete" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Albacete</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/andorra.png"  value="andorra" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Andorra</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/burgos.png"  value="burgos" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Burgos</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/cartagena.png"  value="cartagena" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Cartagena</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/eibar.png"  value="eibar" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Eibar</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/granada.png"  value="granada" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Granada</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/huesca.png"  value="huesca" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Huesca</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/ibiza.png"  value="ibiza" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Ibiza</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/las-palmas.png"  value="las-palmas" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Las Palmas</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/leganes.png"  value="leganes" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Leganés</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/levante.png"  value="levante" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Levante</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/lugo.png"  value="lugo" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Lugo</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/malaga.png"  value="malaga" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Málaga</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/mirandes.png"  value="mirandes" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Mirandés</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/oviedo.png"  value="oviedo" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Oviedo</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/pontferradina.png"  value="pontferradina" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Pontferradina</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/racing.png"  value="racing" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Racing</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/sporting.png"  value="sporting" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Sporting</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/tenerife.png"  value="tenerife" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Tenerife</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/villarreal-b.png"  value="villarreal-b" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Villarreal</label>
</div>
  <div class="escudo-nombre">
  <input type="image" src="Imagenes/escudos_2/zaragoza.png"  value="zaragoza" class="equipo"  alt="...">
  <label for="1" id="nombre-equipo">Zaragoza</label>
</div>

  </div>
</div>



<!-- CANVAS MOTOR -->

<div id="canvas-motor" class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Seleccione la categoría</h5>
  </div>
  <div class="offcanvas-body row align-items-center">
  <div class="categoria-nombre">
  <input id="boton-pop-f1" type="image" src="Imagenes/f1.png" value="f1" class="categoria"  alt="...">
</div>
<div class="categoria-nombre">
  <input id="boton-pop-gp" type="image" src="Imagenes/motogp.png" value="moto gp" class="categoria"  alt="...">
</div>
  </div>
</div>

<!-- CANVAS CIRCUITOS F1 -->

<div id="canvas-circuitos-f1"  class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Seleccione el circuito de F1</h5>
  </div>
  <div class="offcanvas-body row align-items-center">

<div class="circuito-nombre">
  

<div class="card mb-3 circuito"  name="circuito-f1" value="Sakhir">
  <div class="row align-items-center">
      <div class="col">
      <img src="Imagenes/128x96/bh.png" class="img-fluid rounded-start" alt="...">
        </div>
      <div class="col">
        <h5 class="card-title" id="nombre-circuito">Sakhir</h5>
      </div>
</div>
</div>
<div class="card mb-3 circuito"  name="circuito-f1" value="Jeddah International Street Circuit">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/sa.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Jeddah International Street Circuit</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1" value="Albert Park">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/au.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Albert Park</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Imola">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/it.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Imola</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Hard Rock Stadium Circuit">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/us.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Hard Rock Stadium Circuit</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Catalunya">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/es.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Catalunya</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Montecarlo">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/mc.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Montecarlo</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Baku City Circuit">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/az.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Baku City Circuit</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Gilles Villeneuve">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/ca.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Gilles Villeneuve</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Silverstone">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/gb.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Silverstone</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Red Bull Ring">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/at.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Red Bull Ring</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Paul Ricard">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/fr.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Paul Ricard</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Hungaroring">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/hu.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Hungaroring</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Spa-Francorchamps">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/be.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Spa-Francorchamps</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Zandvoort">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/nl.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Zandvoort</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Monza">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/it.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Monza</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Marina Bay">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/sg.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Marina Bay</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Suzuka">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/jp.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Suzuka</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Las Americas">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/us.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Las Américas</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Hermanos Rodriguez">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/mx.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Hermanos Rodríguez</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Interlagos">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/br.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Interlagos</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito-f1"  value="Yas Marina">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/ae.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Yas Marina</h5>
    </div>
    </div>
</div>


</div>
</div>
</div>


<!-- CANVAS CIRCUITOS MOTO GP -->

<div id="canvas-circuitos-gp" class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Seleccione el circuito de Moto GP</h5>
  </div>
  <div class="offcanvas-body row align-items-center">

<div class="circuito-nombre">

<div class="card mb-3 circuito" name="circuito"  value="Losail">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/bh.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Circuito Internacional de Losail</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Pertamina Mandalika Circuit">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/id.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Pertamina Mandalika Circuit</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Termas de Río Hondo">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/ar.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Termas de Río Hondo</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Las Américas">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/us.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Las Américas</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Algarve International Circuit">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/pt.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Algarve International Circuit</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Jerez">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/es.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Jerez</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Le Mans">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/fr.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Le Mans</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Mugello">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/it.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Mugello</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Catalunya">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/es.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Catalunya</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Sachsering">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/de.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Sachsering</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Assen">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/nl.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Assen</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Silverstone">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/gb.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Silverstone</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Red Bull Ring">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/at.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Red Bull Ring</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Misano Marco Simoncelli">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/sm.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Misano Marco Simoncelli</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Motorland Aragón">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/es.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Motorland Aragón</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Motegi">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/jp.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Motegi</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Chang">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/th.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Chang</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Philip Island">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/au.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Philip Island</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Sepang">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/my.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Sepang</h5>
    </div>
    </div>
</div>
<div class="card mb-3 circuito" name="circuito"  value="Ricardo Tormo">
<div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/128x96/es.png" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h5 class="card-title" id="nombre-circuito">Ricardo Tormo</h5>
    </div>
    </div>
</div>



</div>
</div>
</div>


<!-- CANVAS TENIS -->

<!-- <div id="canvas-tenis" class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Seleccione el Evento</h5>
  </div>
  <div class="offcanvas-body row align-items-center">

<p>Texto de ejemplo</p>

  </div>
</div> -->



<!-- CANVAS EVENTOS -->

<!-- <div id="canvas-eventos" class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Seleccione el Evento</h5>
  </div>
  <div id="div-entradas">
  <label class="entradas" for="entradas-id">Seleccione el número en entradas que desea.</label>
  <input class="entradas" id="entradas-id" type="number">
  <button type="button" data-bs-dismiss="offcanvas" class="btn btn-success entradas">Buscar</button>
</div>
  <div class="offcanvas-body row align-items-center">


<p>LISTADO DE EVENTOS</p>

  </div>
</div> -->


<!-- DIV INFORMATIVO BARES -->


  <div class="row align-items" id="botones-ampliada">

    <p style="white-space: pre;" id="boton-pop" class="col" >Resetear Filtros</p>

    <p class="col" style="white-space: pre;" id="boton-vista">Mostrar Bares</p>

  </div>



<div id="ficha-bar"></div>


<!-- VISTA AMPLIADA -->


<div class="offcanvas offcanvas-bottom" id="canvas-bottom" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Bares filtrados</h5>
    <button type="button" id="boton-cerrar" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
    <div class="row align-items-center">
    <div class="col">
    <img src="Imagenes/Bar-Restaurante-Solo-Croquetas-Madrid-6-b.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col">
    <h3 class="card-title">BAR RESTAURANTE SOLO CROQUETAS</h3>
    </div>
  </div>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <div style="width:100%;white-space: pre;" class="btn-group" role="group" aria-label="Basic mixed styles example">
        <button  type="button" class="btn btn-success zoom">Ubicar</button>
        <button  onclick="reservar()" type="button" class="btn btn-danger">Reservar</button>
        <button  onclick="googleMap()" type="button" class="btn btn-primary">Cómo llegar</button>
</div>
</div>
  </div>
</div>


		
		
	</body>

  <script defer>

//////////////////////////////////////////////////////////////////////////////////
//       _                           ____                  _           _        //
//      | |   __ _  __   __   __ _  / ___|    ___   _ __  (_)  _ __   | |_      //
//   _  | |  / _` | \ \ / /  / _` | \___ \   / __| | '__| | | | '_ \  | __|     //
//  | |_| | | (_| |  \ V /  | (_| |  ___) | | (__  | |    | | | |_) | | |_      //
//   \___/   \__,_|   \_/    \__,_| |____/   \___| |_|    |_| | .__/   \__|     //
//                                                            |_|               //
//////////////////////////////////////////////////////////////////////////////////

// REFRESCAR FILTROS

document.getElementById("boton-pop").addEventListener('click', _ => {
  location.reload();
})


// FILTROS

// FÚTBOL

document.getElementById("boton-pop-futbol").addEventListener('click', () => {
  document.getElementById("canvas-ligas").classList.add("show")
})

document.getElementById("boton-pop-liga1").addEventListener('click', () => {
  document.getElementById("canvas-futbol-equipos").classList.add("show")
  document.getElementById("canvas-ligas").classList.add("hiding")

  // COMUNICACIÓN CON LA BASE DE DATOS
  console.log("Primera División")
})

document.getElementById("boton-pop-liga2").addEventListener('click', () => {
  document.getElementById("canvas-futbol-equipos-2").classList.add("show")
  document.getElementById("canvas-ligas").classList.add("hiding")

  // COMUNICACIÓN CON LA BASE DE DATOS
  console.log("Segunda División")
})

let generalE = document.querySelectorAll(".equipo");
  for(let i=0;i<generalE.length;i++){
    generalE[i].addEventListener("click",function(){
        console.log(generalE[i].getAttribute("value"));

      document.getElementById("canvas-futbol-equipos-2").classList.add("hiding")
      document.getElementById("canvas-futbol-equipos").classList.add("hiding")


      document.getElementById("canvas-eventos").classList.add("show")

    })
}

   


// MOTOR

document.getElementById("boton-pop-motor").addEventListener('click', () => {
  document.getElementById("canvas-motor").classList.add("show")
})

document.getElementById("boton-pop-f1").addEventListener('click', () => {
  document.getElementById("canvas-circuitos-f1").classList.add("show")
  document.getElementById("canvas-motor").classList.add("hiding")

  // COMUNICACIÓN CON LA BASE DE DATOS
  console.log("Formula 1")
})

document.getElementById("boton-pop-gp").addEventListener('click', () => {
  document.getElementById("canvas-circuitos-gp").classList.add("show")
  document.getElementById("canvas-motor").classList.add("hiding")

  // COMUNICACIÓN CON LA BASE DE DATOS
  console.log("Moto GP")
})

  let generalC = document.querySelectorAll(".circuito");
  for(let i=0;i<generalC.length;i++){
    generalC[i].addEventListener("click",function(){
        console.log(generalC[i].getAttribute("value"));

      document.getElementById("canvas-circuitos-f1").classList.add("hiding")
      document.getElementById("canvas-circuitos-gp").classList.add("hiding")

      
      // document.getElementById("canvas-eventos").classList.add("show")

    })
}


// TENIS

document.getElementById("boton-pop-tenis").addEventListener('click', () => {
  document.getElementById("canvas-eventos").classList.add("show")
})



// API DEL MAPA


mapboxgl.accessToken = 'pk.eyJ1Ijoib25kaWdpdGFsIiwiYSI6ImNsNXFpcWhjejEzY3AzaW9lMXQwczFhM2UifQ.5HvN0zihtT3auHddppiAhQ';
const map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/ondigital/cl5tltoku000h15o5mkkxxnra',
center: [-3.6995518447242817, 40.416159911769135],
maxZoom: 20,
minZoom: 6,
zoom: 11
});






// EVENTO DE POPUP EN LAS UBICACIONES DEL MAPA

map.on('click', (event) => {
  

  const features = map.queryRenderedFeatures(event.point, {
    layers: ['bares']
  });
  if (!features.length) {
    return;
  }
  const feature = features[0];

  document.getElementById("ficha-bar").innerHTML = 
    `
    <div class="container text-center">
  <div class="row">
    <div class="col-6 col-sm-3 col-bar">
    <img src="Imagenes/Bar-Restaurante-Solo-Croquetas-Madrid-6-b.jpg" style="width:100%;max-height:75px;" alt="...">
    </div>
    <div style="justify-content: center;display: flex;align-items: center;" class="col-6 col-sm-3 col-bar">
    <p style="font-weight:700">${feature.properties.title}</p>
    </div>

    <div class="w-100"></div>

    <div class="col-6 col-sm-3 col-bar">
    <button onclick="reservar()" type="button" class="btn btn-danger w-100 botones-ficha">Reservar</button>
    </div>
    <div class="col-6 col-sm-3 col-bar">
    <button onclick="googleMap()" type="button" class="btn btn-primary w-100 botones-ficha">Cómo llegar</button>
    </div>
  </div>
</div>



    `


});

// OFFCANVAS BOTTOM

document.getElementById("boton-vista").addEventListener('click', _ => {
  document.getElementById("canvas-bottom").classList.add("show")
})

document.getElementById("boton-cerrar").addEventListener('click', _ => {
  document.getElementById("canvas-bottom").classList.remove("show")
})

// BOTONES "UBICAR", "RESERVAR" Y "COMO LLEGAR"

map.on('style.load', () => {
map.setFog({});
});
  document.querySelector('.zoom').addEventListener('click', () => {

map.flyTo({
center: [-3.6995518447242817, 40.416159911769135],

essential: true, 
zoom:18

});

})

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




       


</script>

	<style>
		
	</style>
</html>
