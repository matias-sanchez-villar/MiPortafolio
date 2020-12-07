<!DOCTYPE html>
<html lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matias Sanchez Villar - Portafolio Personal</title>
    <link rel="icon" type="icono/ico" href="../imagenes/icono.ico" />
    <link rel="icon" type="image/png" href="../imagenes/icono.png" />
    <meta name="description" content="Portfolio personal de Matias Sanchez Villar, programador FULL-STACK "/>
    <meta name="author" content="Matias Sanchez Villar" />
    <meta name="robots" content="index,follow"/>
    <meta name="keywords" content="programador, programador freelance, desarrollador web, programacion web, programador web">
   
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/articulos.css">
    <link rel="stylesheet" href="../css/footer.css">
    <script src="https://kit.fontawesome.com/2608d06942.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Playfair+Display:wght@686&family=Roboto+Mono:ital,wght@1,516&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container logo-nav-container">
            <a href="#" class="logo"><i class="fas fa-laptop-code container-nav__icon"></i></a>
            <span class="menu-icon"><i class="fas fa-bars"></i></span>
            <nav class="navigation">
                <ul class="show">
                    <li><a href="#">Inicio</a></li>
                    <!--<li><a href="#SobreMI">Sobre mi</a></li>-->
                    <li><a href="#estudios">Estudios</a></li>
                    <li><a href="#Habilidades">Habilidades</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="presentacion-caja" id="SobreMI">
            <h1 class="presentacion__h1">Matias Sanchez Villar</h1>
            </div>
                <div class="presentacion">
                    <p class="presentacion__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, doloribus? Hic quod nihil adipisci, quos numquam harum ad ex. Impedit dicta doloribus quasi cumque quis molestias odit delectus enim. Expedita. >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, doloribus? Hic quod nihil adipisci, quos numquam harum ad ex. Impedit dicta doloribus</p>
                    <img class="presentacion__img" src="../imagenes/Programador.jpg" alt="Foto de perfil mia">
                </div>
                <div class="presentacion-icon">
                   <div class="icon-presentacion__linkedin">
                        <a href="https://www.linkedin.com/in/matias-sanchez-villar/" target="_blank"><i class="fab fa-linkedin presentacion-fa-linkedin"></i></a>
                    </div>
                    <div class="icon-presentacion__git">
                        <a href="https://github.com/matias-sanchez-villar" target="_blank"><i class="fab fa-github presentacion-fa-git"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="educacion" id="estudios">
                <h2 class="educacion__h2">Estudios</h2>
            <article class="educacion__Universitaria">
                <div class="educacion__separados">
                    <h3 class="educacion__H3">Colegio Militar de la Nacion</h3>
                    <p class="educacion__P">Licenciado en Conducción y Gestión Operativa</p>
                    <p class="educacion__P">estado: Abandonado</p>
                </div>
                <div class="educacion__separados">
                    <h3 class="educacion__H3">Universidad Tecnologica Naciona</h3>
                    <p class="educacion__P">Tecnicatura Universitaria en Programación</p>
                    <p class="educacion__P">Estado: Cursando</p>
                </div>
            </article>
            <article class="educacion__Cursos">
                <div class="educacion__separados">
                    <h3 class="educacion__H3">Centro de e-Learning</h3>
                    <p class="educacion__P">Programador Web Inicial</p>
                    <p class="educacion__P">Estado: Cursando</p>
                </div>
                <div class="educacion__separados">
                    <h3 class="educacion__H3">Udemy</h3>
                    <p class="educacion__P">Desarrollo web HTML desde cero</p>
                    <p class="educacion__P">Estado: Cursado</p>
                </div>
            </article>
        </section>
        <section class="Habilidades" id="Habilidades">
                <h2 class="habilidades__h2">Habilidades</h2>
                <nav class="Habilidades_navegation">
                    <ul class="show">
                        <li><a href="index.php?id=c++#Habilidades">C++</a></li>
                        <li><a href="index.php?id=php#Habilidades">PHP</a></li>
                        <li><a href="index.php?id=mysql#Habilidades">MYSQL</a></li>
                        <li><a href="index.php?id=html#Habilidades">HTML</a></li>
                        <li><a href="index.php?id=css#Habilidades">CSS</a></li>
                    </ul>
                </nav>
            <?php
                if(isset($_GET['id'])){
                    switch($_GET['id']){
                        case 'c++':
                            $titulo='C++';
                            $imagen='../imagenes/c++.svg';
                            $texto='Lorem Ipsum es simplemente texto de relleno de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto de relleno estándar de la industria desde la década de 1500, cuando un impresor desconocido tomó una galera de tipos y la mezcló para hacer un libro de muestras tipográfico. Ha sobrevivido no solo a cinco siglos, sino también al salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios.';
                        break;
                        case 'php':
                            $titulo='PHP';
                            $imagen='../imagenes/php.svg';
                            $texto='Lorem Ipsum es simplemente texto de relleno de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto de relleno estándar de la industria desde la década de 1500, cuando un impresor desconocido tomó una galera de tipos y la mezcló para hacer un libro de muestras tipográfico. Ha sobrevivido no solo a cinco siglos, sino también al salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios.';
                        break;
                        case 'html':
                            $titulo='HTML';
                            $imagen='../imagenes/html5.svg';
                            $texto='Lorem Ipsum es simplemente texto de relleno de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto de relleno estándar de la industria desde la década de 1500, cuando un impresor desconocido tomó una galera de tipos y la mezcló para hacer un libro de muestras tipográfico. Ha sobrevivido no solo a cinco siglos, sino también al salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios.';
                        break;
                        case 'mysql':
                            $titulo='MYSQL';
                            $imagen='../imagenes/mysql.svg';
                            $texto='Lorem Ipsum es simplemente texto de relleno de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto de relleno estándar de la industria desde la década de 1500, cuando un impresor desconocido tomó una galera de tipos y la mezcló para hacer un libro de muestras tipográfico. Ha sobrevivido no solo a cinco siglos, sino también al salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios.';
                        break;
                        case 'css':
                            $titulo='CSS';
                            $imagen='../imagenes/css-5.svg';
                            $texto='Lorem Ipsum es simplemente texto de relleno de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto de relleno estándar de la industria desde la década de 1500, cuando un impresor desconocido tomó una galera de tipos y la mezcló para hacer un libro de muestras tipográfico. Ha sobrevivido no solo a cinco siglos, sino también al salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios.';
                        break;
                    }
                }else{
                    $titulo='C++';
                    $imagen='../imagenes/c++.svg';
                    $texto='Lorem Ipsum es simplemente texto de relleno de la industria de la impresión y la composición tipográfica. Lorem Ipsum ha sido el texto de relleno estándar de la industria desde la década de 1500, cuando un impresor desconocido tomó una galera de tipos y la mezcló para hacer un libro de muestras tipográfico. Ha sobrevivido no solo a cinco siglos, sino también al salto a la composición tipográfica electrónica, permaneciendo esencialmente sin cambios.';
                }
            ?>
            <article class="habilidades_article">
                <div class="habilidades_caja">
                    <img src="<?php echo $imagen; ?>" alt="logo c++">
                </div>
                <div class="habilidades_caja">
                    <h3><?php echo $titulo; ?></h3>
                    <p><?php echo $texto; ?></p>
                </div>
            </article>
        </section>
        <section class="contacto" id="contacto">
            <article>
                <form method="post">
                    <fieldset>
                        <legend>Contacto</legend>
                            <div>
                                <p><label>Nombre: <input type="text" name="nombre" placeholder="Nombre" required></label></p>
                            </div>
                            <div>
                                <p><label>Apellido: <input type="text" name="apellido" placeholder="Apellido" required></label></p>
                            </div>
                            <div>
                                <p><label>Correo: <input type="email" name="correo" placeholder="Correo" required></label></p>
                            </div>
                            <div>
                                <p><label>Asunto: <input type="text" name="asunto" placeholder="Asunto" required></label></p>
                            </div>
                            <div>
                                <p>Mensaje</p>
                                <textarea name="texto" placeholder="Escriba su mensaje" required class=estilotextarea></textarea>
                            </div>
                            <div>
                                <input type="submit" value="Enviar" name="enviar" class="boton"/>
                                <input type="reset" value="Borrar" name="Restablecer" class="boton"/>
                            </div>
                    </fieldset>
                </form>
            </article>
            <article>
                <?php
                    if(isset($_GET['enviado'])){
                        echo "<h3>Mensaje enviado</h3>";
                        exit;
                    }
                    if(isset($_GET['error'])){
                        echo "<h3>Mensaje sin enviar, error del servidor</h3>";
                    }
                ?>
            </article>
        </section>
    </main>
    <footer class="footer">
        <nav class="navigation-footer">
            <ul class="navigation-footer__ul">
                <li class="navigation-footer__li"><a class="navigation-footer__a" href="index1.html">Inicio</a></li>
                <li class="navigation-footer__li"><a class="navigation-footer__a" href="#">Sobre mi</a></li>
                <li class="navigation-footer__li"><a class="navigation-footer__a" href="#">Habilidades</a></li>
                <li class="navigation-footer__li"><a class="navigation-footer__a" href="#">Estudios</a></li>
                <li class="navigation-footer__li"><a class="navigation-footer__a" href="#">Contacto</a></li>
            </ul>
        </nav>
        <div class="descripcion-footer">     
            <h3 class="descripcion-footer__H3">Matias Sanchez villar</h3>
            <p class="descripcion-footer__p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, fuga quae cumque quo hic ad quisquam</p>
        </div>
        <div class="icon-footer">
            <div class="icon-footer__linkedin">
                <a href="https://www.linkedin.com/in/matias-sanchez-villar/" target="_blank"><i class="fab fa-linkedin footer-fa-linkedin"></i></a>
            </div>
            <div class="icon-footer__git">
                <a href="https://github.com/matias-sanchez-villar" target="_blank"><i class="fab fa-github footer-fa-github"></i></a>
            </div>
        </div>
    </footer>
    <?php include ("form.php"); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/javaS1.js"></script>
</body>

</html>