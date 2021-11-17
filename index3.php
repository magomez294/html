<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/menu.css">
    <link rel="stylesheet" href="./styles/index3.css">
    <title>fixpoint</title>
</head>
<body>
    <header>
        <img id="logo" src="./images/Logo.png" alt="">
        <img id="logoMenu" src="./images/menu.png" alt="" onclick="showHideMenu('menu')">
        <nav id="menu" class="hide">
            <img src="./images/hideMenu.png" alt="" id="hideMenu" onclick="showHideMenu('menu')">
            <ul>
                <?php if(isset($_SESSION['loged']) && $_SESSION['loged'] == true){ ?>
                    <li><a href="">Iniciar Sesión</a></li>
                    <li><a href="">Crear Cuenta</a></li>
                <?php } ?>
                    <li> <a href="">Manuales</a> </li>
                    <li><a href="./pages/herramientas/Herramientas.php">Herramientas</a></li>
                <?php if(!isset($_SESSION['loged'])){ ?>
                    <li><button onclick="logOut()">Cerrar sesión</button></li>
                <?php } ?>
            </ul>
        </nav>
        <nav id="menuWeb2">
        <?php if(isset($_SESSION['loged']) && $_SESSION['loged'] == true){ ?>
            <ul>
                <li><a href="">Crear Cuenta</a></li>
                <li><a href="">Iniciar Sesión</a></li>
            </ul>
        <?php } ?>
        <?php if(!isset($_SESSION['loged'])){ ?>
            <ul>
                <li><button onclick="logOut()">Cerrar sesión</button></li>
            </ul>
        <?php } ?>
        </nav>
    </header>
    <nav id="menuWeb">
        <ul>
            <li> <a href="">Manuales</a> </li>
            <li><a href="./pages/herramientas/Herramientas.php">Herramientas</a></li>
        </ul>
    </nav>
    <main>
        <div>
            <div>
                <article>¡Volvemos a la carga con muchas ganas y con las debidas precauciones!
                    Date de alta como usuario y colabora con este proyecto. 
                </article>
                <article>Abierto (de momento) para alumnos y 
                    profesionales del C.I.F.P Pico Frentes de Soria .
                </article>
                <h1>FixPoint es una iniciativa circular sostenible.</h1>
                <div>
                    <div>
                        <h2>Misión</h2>
                        <article>
                            Como una comunidad de ávidos manitas, deportistas al aire libre y personas con conciencia ambiental, la Biblioteca de herramientas FixPoint, quiere provocar un cambio en el sistema de sobreproducción e ineficiencia resultante, la contaminación ambiental y la desigualdad (social). La misión de FixPoint es transformar la mentalidad en la sociedad, en la que la propiedad se elige sobre el acceso. Queremos hacer esto inspirando a la población y organizaciones a abrir una Biblioteca FixPoint en su vecindario para que la gente tenga acceso a cosas que solo necesitan de vez en cuando,en lugar de posesión. 
                        </article>
                    </div>
                    <div>
                        <h2>Visión</h2>
                        <article>
                            FixPoint es un proyecto que lucha por una economía circular. Esto significa que creemos en un sistema cerrado de materias primas, en el que los productores seguirán siendo los propietarios de las materias primas contenidas en los productos en el futuro. Para lograr esto, sin embargo, debemos facilitar que 'acceder a' sea más fácil, más barato y más divertido que 'poseer'. 
                        </article>
                        <img src="./images/taller.jpg" alt="">
                    </div>
                </div>
                
            </div>
            <div>
                <div id="direccion">
                    <h2>Dirección</h2>
                    <aside>
                        <div>
                            <span>C.I.F.P Pico Frentes</span> <br>
                            <span>Gervasio Manrique de Lara s/n</span> <br>
                            <span>Soria, 42004</span> <br>
                            <span>Spain</span>
                        </div>
                    </aside>
                </div>
                <div id="contacto">
                    <h2>Contacto</h2>
                    <aside>975 23 94 43</aside>
                </div>
                <div id="horarios">
                    <h2>Horarios</h2>
                    <aside>
                        <div>
                            <span>Lunes 10:00–15:00</span> <br>
                            <span>Martes 10:00–14:05</span> <br>
                            <span>Miércoles Closed</span> <br>
                            <span>Jueves 10:00–14:05</span> <br>
                            <span>Viernes 10:00–14:05</span> <br>
                            <span>Sábado Closed</span> <br>
                            <span>Domingo Closed</span>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div>
            <div>
                <h2>Misión</h2>
                <article>
                    Como una comunidad de ávidos manitas, deportistas al aire libre y personas con conciencia ambiental, la Biblioteca de herramientas FixPoint, quiere provocar un cambio en el sistema de sobreproducción e ineficiencia resultante, la contaminación ambiental y la desigualdad (social). La misión de FixPoint es transformar la mentalidad en la sociedad, en la que la propiedad se elige sobre el acceso. Queremos hacer esto inspirando a la población y organizaciones a abrir una Biblioteca FixPoint en su vecindario para que la gente tenga acceso a cosas que solo necesitan de vez en cuando,en lugar de posesión. 
                </article>
            </div>
            <div>
                <h2>Visión</h2>
                <article>
                    FixPoint es un proyecto que lucha por una economía circular. Esto significa que creemos en un sistema cerrado de materias primas, en el que los productores seguirán siendo los propietarios de las materias primas contenidas en los productos en el futuro. Para lograr esto, sin embargo, debemos facilitar que 'acceder a' sea más fácil, más barato y más divertido que 'poseer'. 
                </article>
                <img src="./images/taller.jpg" alt="">
            </div>
        </div>
        <div>
            <h1>
                ¿Que es una Biblioteca de herramientas?
            </h1>
            <article>
                FixPoint es la primera Biblioteca de préstamo de España. Las Bibliotecas de herramientas funcionan como cualquier otra Biblioteca. Te conviertes en miembro y luego puedes tomar prestadas herramientas.
                No tenemos fines de lucro y buscamos ser una organización benéfica.
            </article>
        </div>
        <div>
            <div>
                <h2>Los objetivos son simples:</h2>
                <ul>
                    <li>
                        Promover las habilidades de bricolaje, fabricación y reparación mediante el intercambio de herramientas
                    </li>
                    <li>
                        Hacer de Soria una ciudad más sostenible
                    </li>
                    <li>
                        Crear oportunidades de aprendizaje y desarrollo
                    </li>
                </ul>
                <div>
                    <img src="./images/settings.png" alt="">
                </div>
            </div>
            <div>
                <article>
                    Se planea tener un taller comunitario abierto a los miembros (en un principio, alumnos del Pico Frentes), un espacio para trabajar en sus propios proyectos y aprender nuevas habilidades.
                    <br>
                    <br>
                    El Taller dispondrá de herramientas y equipos fijos más grandes, disponibles para que los miembros lo usen. En el futuro, esperamos impartir clases de bricolaje, fabricación, construcción y uso seguro de herramientas.
                </article>
            </div>
        </div>
        <div>
            <div>
                <img src="./images/logoFP.png" alt="">
            </div>
            <div>
                <img src="./images/LogoPicoFuentes.png" alt="">
            </div>
        </div>
    </main>
    <footer>
        <div>Powered by G2</div>
        <a href="#logo">
            <img src="./images/up-arrow.png" alt="">
        </a>
        
    </footer>
    <script src="./scripts/menu.js"></script>
</body>
</html>