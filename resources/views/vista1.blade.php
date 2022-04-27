<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Tours</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
     <header>
         <div class="logo">
             <h1>City Tours ✈</h1>
         </div>
        <nav>
            <h1>
            <ul>
                <li> <a href="/"> Inicio </a> </li>
                <li> <a> Quienes somos </a> </li>
                <li> <a> Paquetes Turisticos </a> </li>
                <li> <a> Oficinas  </a> </li>
                <li> <a href="/info"> Contactos </a> </li>                                                                                
            </ul>
            </h1>
        </nav>
    </header>
    <div class="info_cities">
        <ul class="cities">        
            <li class="city"><a href="https://es.wikipedia.org/wiki/Cusco"><img src="img/image1.jpg" width="500"></a>
                <h2>Cusco</h2>
                <p>Cusco, Cuzco o Qosqo son los nombres por los que se conoce a la antigua capital del Imperio Inca.</p>
            </li>
            <li class="city"><a href="https://es.wikipedia.org/wiki/Puno"><img src="img/image3.jpg" width="500"></a>
                <h2>Puno</h2>
                <p>Capital del folclore peruano, Ciudad de plata, Tierra de artistas y poetas, Ciudad del lago sagrado.</p>
            </li>
            <li class="city"><a href="https://www.machupicchu.gob.pe/"><img src="img/image4.jpg" width="500"></a>
                <h2>Machu Picchu</h2>
                <p>Sitio arqueológico inca más sobresaliente debido a su creativo diseño urbano, la belleza de su arquitectura y el fino trabajo en piedra de sus construcciones. En su planificación se aprovechó notablemente la topografía de la cima de la montaña a la que transformó en una imponente llaqta.</p>
            </li>
            <li class="city"><a href="https://es.wikipedia.org/wiki/Arequipa"><img src="img/image5.jpg" width="500"></a>
                <h2>Arequipa</h2>
                <p>Es conocida como la Ciudad Blanca debido a su arquitectura construida con piedra volcánica blanca, llamada sillar</p>
            </li>
        </ul>

    </div>

    <!-- <section id="contenedor">
        <section id="principal"> 
            <article id="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li> <img src="img/image1.jpg" width="500"> </li>
                        <li> <img src="img/image2.jpg" width="500"> </li>
                        <li> <img src="img/image3.jpg" width="500"> </li>
                        <li> <img src="img/image4.jpg" width="500"> </li>
                        <li> <img src="img/image5.jpg" width="500"> </li>                                                                                                               
                    </ul>
                </div>
            </article>  
        </section>            
    </section> -->
</body>
</html>