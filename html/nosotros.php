<?php include('header.html') ?>

    <section class="row ban-inicio ban-nosotros" style="background-image: url('img/fondo3.png');">
        <div class="col-container">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%">
                <!-- Background -->
                <rect x="0" y="0" fill="transparent" width="100%" height="100%" />
                <!-- Text using the #pattern in defs as the fill -->
                <text x="50%" text-anchor="middle" y="50%" dy="0.4em" fill="url(#pattern)" font-family="Amaranth" font-size="7em">Equipo Identired</text>
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
                <div class="i-am-container">
                    <h3>Te damos:
                        <span class="txt-espb">
                            <div id="rotate">
                                <span>nuestra creatividad.</span>
                                <span>nuestra experiencia.</span>
                                <span>nuestra calidad.</span>
                                <span>nuestro tiempo.</span>
                            </div>
                        </span>
                    </h3>
                </div>
                <h1>Es un reto para nosotros llevarte al éxito.</h1>
           </div>
        </div>
        <img class="img-bann" src="img/ground.png"> 
    </section>
    <section id="empezar" class="row demo-2 back-cel">
        <div class="col-container">
            <div class="cont-textnos">
                <p>Somos una empresa peruana fundada en el 2011, especialista en <b>servicios web, soluciones tecnológicas y asesoría tecnológica</b> para negocios y emprendedores.</p>
                <p>Cada uno de nuestros clientes es un compromiso para nosotros, ofrecemos un servicio diferenciador, con un asesoramiento y soporte exclusivo, facilitando la solución más adecuada.</p>
                <p>El Equipo Identired, lo componemos profesionales apacionados por la tecnología.</p>
                <p>Nuestro objetivo es brindar una solución completa para dar a tu empresa una presencia sólida en Internet,  de esta manera crear un nuevo canal de ingreso de potenciales clientes.</p>
            </div>
        </div>
    </section>
    <section class="main sec-porq ser-porn">
        <!--img class="img-bann2" src="img/ground2.png"-->
        <h2><b>Deja en nuestras manos</b> tu proyecto, porque:</h2>
        <ul class="ch-grid">
            <li class="wow swing" data-wow-delay=".5s">
                <div class="ch-item ch-img-1">              
                    <div class="ch-info-wrap">
                        <div class="ch-info">
                            <div class="ch-info-front"><h3>Te escuchamos</h3></div>
                            <div class="ch-info-back">
                                <p>El ánálisis es la parte más importante para el desarrollo.</p>
                            </div>  
                        </div>
                    </div>
                </div>
            </li>
            <li class="wow swing">
                <div class="ch-item ch-img-2" data-wow-delay=".10s">
                    <div class="ch-info-wrap">
                        <div class="ch-info">
                            <div class="ch-info-front"><h3>No creemos en lo rápido y malo</h3></div>
                            <div class="ch-info-back">
                                <p>Estimamos los tiempos para obtener un producto de calidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="wow swing" data-wow-delay=".15s">
                <div class="ch-item ch-img-3">
                    <div class="ch-info-wrap">
                        <div class="ch-info">
                            <div class="ch-info-front"><h3>Siempre disponibles</h3></div>
                            <div class="ch-info-back">
                                <p>A cualquier consulta para ayudarte y guiarte.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="wow swing" data-wow-delay=".20s">
                <div class="ch-item ch-img-4">
                    <div class="ch-info-wrap">
                        <div class="ch-info">
                            <div class="ch-info-front"><h3>Tenemos experiencia</h3></div>
                            <div class="ch-info-back">
                                <p>Dedicación desde los más pequeños a grandes proyectos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="wow swing" data-wow-delay=".25s">
                <div class="ch-item ch-img-5">
                    <div class="ch-info-wrap">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"><h3>Somos creativos</h3></div>
                            <div class="ch-info-back">
                                <p>Ponemos nuestras ideas a tu disposición.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="wow swing" data-wow-delay=".30s">
                <div class="ch-item ch-img-5">
                    <div class="ch-info-wrap">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"><h3>Cliente parte del equipo</h3></div>
                            <div class="ch-info-back">
                                <p>Para cumplir con eficacia tus requerimientos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="wow swing" data-wow-delay=".35s">
                <div class="ch-item ch-img-5">
                    <div class="ch-info-wrap">
                        <div class="ch-info">
                            <div class="ch-info-front ch-img-3"><h3>Nuestro éxito es tu éxito</h3></div>
                            <div class="ch-info-back">
                                <p>Clientes satisfechos son nuestra mejor publicidad.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>    
    <section id="consulta" class="row backblue sec-info">
        <div class="col-container">
            <div class="titH2 wow slideInDown">
                <h2><b>Solicita</b> información</h2>
            </div>
            <div class="cont-comunic wow fadeIn">
                <p>Envíanos un watsapp para consultas o agendar una reunión sin ningún compromiso.</p>
                <a href="tel: 987 204 172"><i class="fa fa-whatsapp" aria-hidden="true"></i> 987 204 172</a>
            </div>
    </section>

    <section class="row backblue2 cont-formul">
        <div class="col-container">
            <div class="simform wow fadeIn" data-wow-delay=".3s">
                <div class="tit-form">
                    <h2>También puedes escribirnos</h2>
                    <p>Envíanos tu consulta y te enviaremos una respuesta lo más pronto posible</p>
                </div>
                <form id="formWeb" action="../php/register.php" method="post">
                    <input type="hidden" name="section" value="Desarrollo web">
                    <div class="card-form">
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
     </script>

</body>
</html>
