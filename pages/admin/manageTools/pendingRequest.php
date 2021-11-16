<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script defer src="../../../auth/adminAuth.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="sweetalert2.all.min.js"></script>
    <script defer src="../../../scripts/pendingRequest.js"></script>
    <link rel="stylesheet" href="../../../styles/menu.css">
    <link rel="stylesheet" href="../../../styles/pendingManuals.css">
    <title>Manuales</title>
</head>

<body>

    <header>
    <img id="logo" src="../../../images/Logo.png" alt="">
        <img id="logoMenu" src="../../../images/menu.png" alt="" onclick="showHideMenu('menu')">
        <nav id="menu" class="hide">
            <img src="../../../images/hideMenu.png" alt="" id="hideMenu" onclick="showHideMenu('menu')">
            <ul>
                <li> <a href="">Iniciar Sesión</a> </li>
                <li> <a href="">Manuales</a> </li>
                <li><a href="">Herramientas</a></li>
                <li><a href="">Crear Cuenta</a></li>
            </ul>
        </nav>
        <nav id="menuWeb2">
            <ul>
                <li><a href="">Crear Cuenta</a></li>
                <li><a href="">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <nav id="menuWeb">
        <ul>
            <li> <a href="">Manuales</a> </li>
            <li><a href="../../herramientas/Herramientas.php">Herramientas</a></li>
        </ul>
    </nav>
    <main>
        <nav>
            <ul>
                <li><a href="./pendingManuals.php">Peticiones de herramientas</a></li>
                <li><a href="">Herramientas en uso</a></li>
            </ul>
        </nav>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Herramienta</th>
                        <th>Arrendatario</th>
                        <th>email</th>
                        <th>Fecha petición</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead> 
                <tbody>
                    <?php
                    include("../../../API/database/db.php");
                    $db = new DB();
                    $result = $db->select("herramienta", "*", "Solicitado = 1 AND Disponible = 1");
                    $direction = '../../../manuals/';
                    if ($result) {
                        while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <?php $toolid = $row['ID_Herramienta'] ?>
                    <?php $rent =  $db->select("alquila", "*", "ID_Herramienta = ".$toolid);?>
                    
                    <?php $userid = $rent['ID_Usuario'] ?>
                    <?php $user = $db->select("usuario", "*", "ID_Usuario = ".$userid) ?>
                        <tr>
                            <td><?php echo $row['NomHER'] ?></td>
                            <td><?php echo $user['Nombre'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $rent['fechaSolicitud'] ?></td>
                            <td class="validate" onclick="validate(<?php $toolid ?>)"><img src="../../../Images/cheque.png"></td>
                            <td class="reject"onclick="reject()"><img src="../../../Images/cancelar.png"></td>
                        </tr>
                    <?php
                        }
                    }
                    ?>

                </tbody>   
                
                
                    
                
            </table>
        </div>
    </main>
</body>

</html>