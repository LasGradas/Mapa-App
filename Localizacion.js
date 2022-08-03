let map;

function initialize() {

    var markers = new Array();

    var mapOptions = {
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: new google.maps.LatLng(40.4167515, -3.7038322),

    };

    var locations = [
        [new google.maps.LatLng(40.41595, -3.69956), 'Croquetas Reina Echegaray',
            "<img class='card-img-top' src='Imagenes/Bar-Restaurante-Solo-Croquetas-Madrid-4-b.jpg' id='Croquetas_Reina_Echegaray'/>",
            "<img class='card-img-top' src='Imagenes/Bar-Restaurante-Solo-Croquetas-Madrid-4-b2.jpg' />",
            "1"

        ],
        [new google.maps.LatLng(40.4254998, -3.5621552), 'Royal Bar',
            "<img class='card-img-top' src='Imagenes/ROYAL-BAR.jpg' id='Royal_Bar'/>",
            "<img class='card-img-top' src='Imagenes/ROYAL-BAR2.jpg'/>",
            "2"

        ],
        [new google.maps.LatLng(40.4297602, -3.7393645), 'Solo de Croquetas Reina Victoria',
            "<img class='card-img-top' src='Imagenes/Bar-Restaurante-Solo-Croquetas-Madrid-6-b.jpg' id='Croquetas_Reina_Victoria'/>",
            "<img class='card-img-top' src='Imagenes/Bar-Restaurante-Solo-Croquetas-Madrid-6-b2.jpg' />",
            "3"

        ],

    ];

    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    var infowindow = new google.maps.InfoWindow();


    for (var i = 0; i < locations.length; i++) {

        document.getElementById("tarjetas").innerHTML += `
       
            <div class="col-3">
                <div class="card" >
                    ${locations[i][2]} 
                    <div class="card-body">
                    <h5>
                        <a class="card-title marker-link" data-markerid='${i}' href="#" style="text-decoration:none;color:black;"> ${locations[i][1]} </a>
                    </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">Web:</li>
                    <li class="list-group-item">Direccion</li>
                    <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>        
        `



        var marker = new google.maps.Marker({
            position: locations[i][0],
            map: map,
            title: locations[i][1],


        });
        marker.setIcon("Imagenes/Chincheta2-blanca.png");
        // Register a click event listener on the marker to display the corresponding infowindow content
        google.maps.event.addListener(marker, 'click', (function(marker, i) {

            return function() {
                infowindow.setContent(locations[i][3]);
                infowindow.open(map, marker);



            }

        })(marker, i));

        // Add marker to markers array

        markers.push(marker);




        window.location.replace("ondigitalmc.com/bares/")

    }

    // Trigger a click event on each marker when the corresponding marker link is clicked


    const myCarousel = document.getElementById('carouselExampleControls');

    myCarousel.addEventListener('slide.bs.carousel', event => {
            //alert("Cambiado");
            google.maps.event.trigger(markers[$(this).data('markerid')], 'click');
        })
        marker.setIcon("Imagenes/Chincheta2.png");




    //});



    document.getElementById("Croquetas_Reina_Echegaray").addEventListener("click", function() {
         window.location.replace("https://ondigitalmc.com/lasgradas/bares/solodecocretas/");
     });

     document.getElementById("Royal_Bar").addEventListener("click", function() {
         window.location.replace("https://ondigitalmc.com/lasgradas/bares/royal-bar/")
     })

     document.getElementById("Croquetas_Reina_Victoria").addEventListener("click", function() {
         window.location.replace("https://ondigitalmc.com/lasgradas/bares/proyectos-nuevos/");

     })






}
initialize();