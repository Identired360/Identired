<?php include('header.html') ?>

<section class="row ban-inicio">
    <div class="col-container">
        <!--h1 class="wow bounceInDown" data-wow-delay=".2s">Desarrollo web</h1-->
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%">
            <!-- Background -->
            <rect x="0" y="0" fill="transparent" width="100%" height="100%" />
            <!-- Text using the #pattern in defs as the fill -->
            <text x="50%" text-anchor="middle" y="50%" dy="0.4em" fill="url(#pattern)" font-family="Amaranth" font-size="7em">Zapatillas Lynx</text>
            <defs>  
                <!-- Da gradient -->
                <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0">
                    <stop offset="0%" style="stop-color:#237485;"/>
                    <stop offset="25%" style="stop-color:#2B8C48;"/>
                    <stop offset="50%" style="stop-color:#5FCF80;"/>
                    <stop offset="75%" style="stop-color:#44B6CE;"/>
                    <stop offset="100%" style="stop-color:#216C7C;"/>
                </linearGradient>
                <!-- Stitch 2 gradients together for seamless animation  -->
                <pattern id="pattern" x="0" y="0" width="300%" height="100%" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="150%" height="100%" fill="url(#gradient)">
                        <animate attributeType="XML"
                                 attributeName="x"
                                 from="0" to="150%"
                                 dur="7s"
                                 repeatCount="indefinite"/>
                    </rect>
                    <rect x="-150%" y="0" width="150%" height="100%" fill="url(#gradient)">
                        <animate attributeType="XML"
                                 attributeName="x"
                                 from="-150%" to="0"
                                 dur="7s"
                                 repeatCount="indefinite"/>
                    </rect>
                </pattern>
                <font horiz-adv-x="500" >
                    <font-face font-family="sonos-logoregular" units-per-em="2048" ascent="1920" descent="-128" />
                    <missing-glyph horiz-adv-x="500" />
                    <glyph unicode="&#xd;" horiz-adv-x="682" />
                    <glyph unicode=" " />
                    <glyph unicode="N" horiz-adv-x="812" d="M0 412h150v636l662 -664v1000h-148v-640l-664 664v-996z" />
                    <glyph unicode="O" horiz-adv-x="1946" d="M470 896q0 210 150 364q148 148 362 148t362 -148q150 -154 150 -364q0 -212 -150 -362t-362 -150t-362 150t-150 362zM620 896q0 -152 106 -258q104 -108 256 -108q154 0 256 108q108 108 108 258q0 148 -108 260q-104 108 -256 108q-148 0 -256 -108 q-106 -110 -106 -260z" />
                    <glyph unicode="S" horiz-adv-x="674" d="M0 1124q0 -58 26 -110q28 -52 80 -90q32 -26 86 -52q68 -30 124 -46q124 -40 174 -84q34 -30 34 -74q0 -52 -48 -92q-56 -42 -138 -42q-62 0 -122 26q-38 16 -72 40l-118 -80q0 -4 24 -24q24 -24 60 -46q108 -66 228 -66q70 0 132 22q66 24 108 62q44 38 72 92 q24 54 24 110q0 54 -26 110q-28 52 -78 90q-34 28 -88 52q-38 18 -122 46q-122 36 -174 82q-36 32 -36 74q0 54 50 92q54 44 138 44q60 0 120 -26q32 -12 72 -40l120 80q-2 0 -24 24q-18 18 -62 46q-104 64 -226 64q-74 0 -132 -20t-110 -62q-48 -44 -70 -92 q-26 -56 -26 -110z" />
                    <glyph unicode="&#xa0;" />
                    <glyph unicode="&#x2000;" horiz-adv-x="704" />
                    <glyph unicode="&#x2001;" horiz-adv-x="1408" />
                    <glyph unicode="&#x2002;" horiz-adv-x="704" />
                    <glyph unicode="&#x2003;" horiz-adv-x="1408" />
                    <glyph unicode="&#x2004;" horiz-adv-x="469" />
                    <glyph unicode="&#x2005;" horiz-adv-x="352" />
                    <glyph unicode="&#x2006;" horiz-adv-x="234" />
                    <glyph unicode="&#x2007;" horiz-adv-x="234" />
                    <glyph unicode="&#x2008;" horiz-adv-x="176" />
                    <glyph unicode="&#x2009;" horiz-adv-x="281" />
                    <glyph unicode="&#x200a;" horiz-adv-x="78" />
                    <glyph unicode="&#x202f;" horiz-adv-x="281" />
                    <glyph unicode="&#x205f;" horiz-adv-x="352" />
                    <glyph unicode="&#x25fc;" horiz-adv-x="1000" d="M0 0z" />
                </font>
            </defs>
        </svg>
        <div class="text-centb">
            <img title="Zapatillas Lynx" src="img/pantallas.jpg">
        </div>
    </div>
 
</section>

<section class="row pad-secc sec-vent">
    <!--img class="img-bann2" src="img/ground2.png"-->
    <div class="col-container">
        <div class="cont-proy">
            <p>Zapatillas Lynx es una marca de Calzados Atlas, que tiene como público objetivo niños y jóvenes desde</p>
            <p>Según el público objetivo se ha desarrollado un diseño atractivo  </p>

        </div>    
    </div>
    <img class="img-bann3" src="img/ground4.png"> 
</section>

<section class="row sec-tecn">
    <div class="col-container">
        <div class="titH2 wow slideInDown">
            <h2><b>Tecnologías</b> que utilizamos para el desarrollo</h2>
        </div>
        <div class="tecn wow zoomIn">
            <ul>
                <li><img title="Php" src="img/tecn/php.png"> <h3>PHP</h3></li>
                <li><img title="Html5" src="img/tecn/html5.png"> <h3>Html5</h3></li>
                <li><img title="CSS3" src="img/tecn/css3.png"> <h3>CSS3</h3></li>
                <li><img title="CSS3" src="img/tecn/bootstrap.png"> <h3>Bootstrap</h3></li>
                <li><img title="CSS3" src="img/tecn/stylus.png"> <h3>Stylus</h3></li>
                <li><img title="JavaScript" src="img/tecn/js.png"> <h3>JavaScript</h3></li>
                <li><img title="Wordpress" src="img/tecn/wordpress.png"> <h3>Wordpress</h3></li>
                <li><img title="Composer" src="img/tecn/composer.png"> <h3>Composer</h3></li>
                <li><img title="Yii Framework" src="img/tecn/yii.png"> <h3>Yii Framework</h3></li>
            </ul>
        </div>
    </div>
</section>

<section class="row demo-2 back-proy">
    <!--img class="img-bann2" src="img/ground6.png"-->
    <div class="col-container">
        <div class="titH2 white-tit wow slideInDown">
            <h2><b>Proyectos</b> realizados</h2>
        </div>
        <div id="grid" class="grid clearfix wow slideInUp" data-wow-delay=".3s">
            <a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
                <figure>
                    <img src="img/proy/zapatillaslynx.jpg" />
                    <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                    <figcaption>
                        <h2>Zapatillas Lynx</h2>
                        <p>Desarrollo Web UX, Tienda virtual</p>
                        <button>Ver proyecto</button>
                    </figcaption>
                </figure>
            </a>
            <a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
                <figure>
                    <img src="img/proy/zapatillastigre.jpg" />
                    <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                    <figcaption>
                        <h2>Zapatillas Tigre</h2>
                        <p>Desarrollo Pasarela de Pagos</p>
                        <button>Ver proyecto</button>
                    </figcaption>
                </figure>
            </a>
            <a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
                <figure>
                    <img src="img/proy/fottiva.jpg" />
                    <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                    <figcaption>
                        <h2>Fottiva</h2>
                        <p>Desarrollo de aplicación y desarrollo Web UX</p>
                        <button>Ver proyecto</button>
                    </figcaption>
                </figure>
            </a>
            <a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
                <figure>
                    <img src="img/proy/andestone.jpg" />
                    <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                    <figcaption>
                        <h2>Andestones USA</h2>
                        <p>Desarrollo Web UX</p>
                        <button>Ver proyecto</button>
                    </figcaption>
                </figure>
            </a>
            <a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
                <figure>
                    <img src="img/proy/gesym.jpg" />
                    <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                    <figcaption>
                        <h2>Contadores GESYM</h2>
                        <p>Desarrollo Web UX</p>
                        <button>Ver proyecto</button>
                    </figcaption>
                </figure>
            </a>
            <a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
                <figure>
                    <img src="img/proy/huallamarca.jpg" />
                    <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                    <figcaption>
                        <h2>Edificio Huallamarca</h2>
                        <p>Desearrollo Web UX</p>
                        <button>Ver proyecto</button>
                    </figcaption>
                </figure>
            </a>
            <a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
                <figure>
                    <img src="img/proy/sysel.jpg" />
                    <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                    <figcaption>
                        <h2>Sysel SAC</h2>
                        <p>Desarrollo Web UX</p>
                        <button>Ver proyecto</button>
                    </figcaption>
                </figure>
            </a>
            <a href="#" data-path-hover="m 0,0 0,47.7775 c 24.580441,3.12569 55.897012,-8.199417 90,-8.199417 34.10299,0 65.41956,11.325107 90,8.199417 L 180,0 z">
                <figure>
                    <img src="img/proy/calzadosatlas.jpg" />
                    <svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="m 0,0 0,171.14385 c 24.580441,15.47138 55.897012,24.75772 90,24.75772 34.10299,0 65.41956,-9.28634 90,-24.75772 L 180,0 0,0 z"/></svg>
                    <figcaption>
                        <h2>Calzados Atlas</h2>
                        <p>Desarrollo Web UX</p>
                        <button>Ver proyecto</button>
                    </figcaption>
                </figure>
            </a>
        </div>		
    </div>
    <!--img class="img-bann3" src="img/ground4.png"-->
</section>

<section class="row cont-cost">
    <div class="col-container">
        <div class="titH2 wow slideInDown">
            <h2><b>¿Cuanto</b> cuesta?</h2>
            <p>Ajustamos nuestras cotizaciones de acuerdo a tus necesidades</p>
        </div>
        <div class="list-paq">
            <div class="small-12 medium-6 large-4 columns">
                <div class="item-paq wow zoomIn" data-wow-delay=".5s">
                    <h3>Opción 1</h3>
                    <h2>Según tu presupuesto</h2>
                    <p>Ajustado <b>según tu presupuesto,</b> hacemos el desarrollo escalable, es decir preparamos el <b>desarrollo por módulos</b>, el pago es según lo avanzado.</p>
                    <p>Incluye:</p>
                    <ul>
                        <li>Análisis y diseño según tus requerimientos.</li>
                        <li>Primera etapa: desarrollo del home con formulario de contacto.</li>
                        <li>Creación de Fanpage en Facebook GRATIS. </li>
                        <li>Dominio y hosting gratuito por un año.</li>
                        <li>Reporte mensual de Google Analytics.</li>
                    </ul>
                    <a href="#consulta" class="bot-p bot-blanco" title="Empieza ahora">Empieza ahora</a>
                </div>
            </div>
            <div class="small-12 medium-6 large-4 columns">
                <div class="item-paq wow zoomIn" data-wow-delay="1s">
                    <h3>Opción 2</h3>
                    <h2>Página vendedora</h2>
                    <p>Desarrollada con el objetivo de <b>promocionar y hacer conocido tus productos o servicios</b>. Te brindamos asesoría para una campaña exitosa, de esta manera conseguir más clientes.</p>
                    <p>Incluye:</p>
                    <ul>
                        <li>Análisis y diseño según tus requerimientos.</li>
                        <li>Desarrollo de Landing Page.</li>
                        <li>Creación de Fanpage en Facebook.</li>
                        <li>Campaña de publicidad en Facebook.</li>
                        <li>Dominio y Hosting gratuito por un año.</li>
                        <li>Reporte mensual de Google Analytics.</li>
                    </ul>
                    <a href="#consulta" class="bot-p bot-blanco" title="Empieza ahora">Empieza ahora</a>
                </div>
            </div>
            <div class="small-12 medium-6 large-4 columns">
                <div class="item-paq wow zoomIn" data-wow-delay="1.5s">
                    <h3>Opción 3</h3>
                    <h2>Según tus requerimientos</h2>
                    <p>Para este tipo de desarrollo, es necesario <b>conocer tus requerimientos</b> para cumplir tus objetivos, si es posible agendar una <b>reunión sin ningún compromiso</b>, de esta manera poder  asesorarte y hacer una cotización exacta para lograr un proyecto exitoso.</p>
                    <p>Incluye:</p>
                    <ul>
                        <li>Análisis, diseño y desarrollo según tus requerimientos.</li>
                        <li>Creación de Fanpage en Facebook GRATIS.</li>
                        <li>Dominio y hosting gratuito por un año.</li>
                        <li>Reporte mensual de Google Analytics.</li>
                    </ul>
                    <a href="#consulta" class="bot-p bot-blanco" title="Empieza ahora">Empieza ahora</a>
                </div>
            </div>
        </div>
    </div>

    <!--img class="img-bann3" src="img/ground5.png"-->
</section>

<section id="consulta" class="row backblue sec-info">
    <div class="col-container">
        <div class="titH2 wow slideInDown">
            <h2><b>Solicita</b> información</h2>
        </div>
        <div class="cont-comunic wow lightSpeedIn">
            <p>Envíanos un watsapp para consultas o agendar una reunión sin ningún compromiso.</p>
            <a href="tel: 987 204 172"><i class="fa fa-whatsapp" aria-hidden="true"></i> 987 204 172</a>
        </div>
</section>
<section class="row backblue2 cont-formul">
    <div class="col-container">
        <div class="simform wow fadeInLeft" data-wow-delay=".3s">
            <div class="tit-form">
                <h2>También puedes escribirnos</h2>
                <p>Envíanos tu consulta y te enviaremos una respuesta lo más pronto posible</p>
            </div>
            <form id="formWeb" action="../php/register.php" method="post">
                <div class="card">
                    <div class="input-wrapper">
                        <input type="text" id="nombre" name="name" required>
                            <label>Nombre y Apellido</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="email" id="correo" name="email" required>
                            <label>Correo electrónico</label>
                    </div>
                    <div class="input-wrapper">
                        <input type="tel" class="digits" id="telefono" name="phone" required>
                            <label>Teléfono</label>
                    </div>
                    <div class="input-wrapper textcont">
                        <textarea name="msg" required></textarea>
                        <label>Mensaje</label>
                    </div>
                    <div class="cont-check">
                        <input type="checkbox" id="test5"> <label for="test5">Deseo recibir novedades en mi correo.</label>  
                    </div>  
                    <div class="cont-submit">
                        <div class="but-input sub-news">
                            <input type="submit" class="bot-p bot-blanco" value="Enviar mi consulta">
                        </div>
                    </div>  
                </div>			
            </form>			
        </div>		
    </div>
</section>

<?php include('footer.html') ?>

<script src="js/snap.svg-min.js"></script>
<script>
    /*Para proyectos*/
    (function () {

        function init() {
            var speed = 330,
                    easing = mina.backout;

            [].slice.call(document.querySelectorAll('#grid > a')).forEach(function (el) {
                var s = Snap(el.querySelector('svg')), path = s.select('path'),
                        pathConfig = {
                            from: path.attr('d'),
                            to: el.getAttribute('data-path-hover')
                        };

                el.addEventListener('mouseenter', function () {
                    path.animate({'path': pathConfig.to}, speed, easing);
                });

                el.addEventListener('mouseleave', function () {
                    path.animate({'path': pathConfig.from}, speed, easing);
                });
            });
        }

        init();

    })();
    /*Para height*/
    jQuery(window).load(function () {
        equalheight('.item-desa');
        equalheight('.item-vent');
        equalheight('.item-paq');
    });

    jQuery(window).resize(function () {
        equalheight('.item-desa');
        equalheight('.item-vent');
        equalheight('.item-paq');
    });

</script>

</body>
</html>
