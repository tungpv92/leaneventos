<html lang="en">
    <head>
        <title>Lean Eventos</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width">
        <link href="./css/leanevent.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="container">
                <div id="logo">
                    <a href="index.html"><img src="imagenes/logo.png" alt="logo-img"/></a>
                    <h1 class="logo-txt">LEANEVENTOS</p>
                </div>
                <nav>
                    <ul>
                        <?php
                            $id = $_GET["id"];
                            if($id !== ""){
                                echo "<li><a href=\"home_individual.php?id=$id\">Incio</a></li>";
                                echo "<li><a href=\"profile_individual.php?id=$id class=\"selected\">Individual</a></li>";
                            }
                            else{
                                echo "<li><a href=\"home_individual.html\">Incio</a></li>
                                <li><a href=\"profile_individual.html\" class=\"selected\">Individual</a></li>";
                            }
                        ?>  
                    </ul>
                </nav>
            </div>
        </header>
        <main>
           <section id="individual-main">
                <div id="container">
                    <h1>PERFIL</h1>
                    <h3><span>INCIO</span> PERFIL</h3>
                </div>
            </section>  
            <section id="individual-info">
                <div id="container">
                <h1>Tu informatión del Perfil</h1>
                <?php 
                    $server = "localhost:3306";
                    $username = "tungpvut_wp1";
                    $password = "Tung!402";
                    $db = "tungpvut_LEANEVENTO";
                    $id = $_GET["id"];

                    $conn = new mysqli($server, $username, $password, $db);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }                    
                    $sql = "SELECT * FROM Member Where id = $id";
                    $result = $conn->query($sql);
                    echo " ";
                    if ($result->num_rows > 0) {                     
                        // output data of each row
                        $row = $result->fetch_assoc(); 
                        $nombre = $row["firstname"];
                        $apellidos = $row["lastname"];
                        $address = $row["address"];
                        $email = $row["email"];
                        echo  "<div class=\"individual-col\">
                        <p> </p>
                        <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"book\" class=\"svg-inline--fa fa-book fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z\"></path></svg>
                        <p>$nombre</p>
                        <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"book\" class=\"svg-inline--fa fa-book fa-w-14\" role=\"img\" xmlns=\"http://www.w3.o\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z\"></path></svg>
                        <p>$apellidos</p>
                        <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"user\" class=\"svg-inline--fa fa-user fa-w-14\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\"><path fill=\"currentColor\" d=\"M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z\"></path></svg>
                        <p>Nombres del Usuario</p>
                        </div>
                        <div class=\"individual-col\">
                            <p> </p>
                            <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"map-marker-alt\" class=\"svg-inline--fa fa-map-marker-alt fa-w-12\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z\"></path></svg>
                            <p>$address</p>
                            <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\fas\" data-icon=\"phone\" class=\"svg-inline--fa fa-phone fa-w-1\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z\"></path></svg>
                            <p>+ 1235 2355 98</p>
                            <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"paper-plane\" class=\"svg-inline--fa fa-paper-plane fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M440 6.5L24 246.4c-34.4 19.9-31.1 70.8 5.7 85.9L144 379.6V464c0 46.4 59.2 65.5 86.6 28.6l43.8-59.1 111.9 46.2c5.9 2.4 12.1 3.6 18.3 3.6 8.2 0 16.3-2.1 23.6-6.2 12.8-7.2 21.6-20 23.9-34.5l59.4-387.2c6.1-40.1-36.9-68.8-71.5-48.9zM192 464v-64.6l36.6 15.1L192 464zm212.6-28.7l-153.8-63.5L391 169.5c10.7-15.5-9.5-33.5-23.7-21.2L155.8 332.6 48 288 464 48l-59.4 387.3z\"></path></svg>
                            <p>$email</p>
                            <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"globe\" class=\"svg-inline--fa fa-globe fa-w-16\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 496 512\"><path fill=\"currentColor\" d=\"M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z\"></path></svg>
                            <p>web.com</p>
                        </div>";
                            
                    }
                    $conn->close();
                ?>
                    <div class="individual-col">
                        <img src="imagenes/user.png">
                    </div>
                </div>
            </section>
            <section id="contact-form">
                <div class="wrap-form">
                <h1>Estar en contacto</h1>
                <form>  
                    <div class="halfleft-textbox align-left">
                        <div class="nombre">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
                        </div>    
                        <div class="apellido">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
                        </div>
                    </div>

                    <div class="upload-pic">
                        <table>
                            <tr>
                                <td><img src="imagenes/user.png" alt=""></td>           
                            </tr>
                            <tr>
                                <td><button class="lean-btn">Seleccionar Logo</button></td>
                            </tr>   
                        </table>
                    </div>

                    <div class="same-block">
                        <label for="correo">Correo</label>
                        <input type="text" id="correo" name="correo" placeholder="Tu correo electrónico">
                    </div>

                    <div class="individual-col profile-form">
                        <label for="telefono">Telefono</label>
                        <input type="text" id="telefono" name="telefono" placeholder="Telefono">
                    </div>    
                    <div class="individual-col profile-form" id="middle-form">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="usuario" placeholder="Nombre de Usuario">
                    </div>
                    <div class="individual-col profile-form" id="right-form">
                        <label for="contraseña">Contraseña</label>
                        <input type="text" id="contraseña" name="contraseña" placeholder="Contraseña">
                    </div>  
                    <p class="small-note">Nota:</p>
                    <p>Solo puede cambiar los datos (Telefono, Contraseña y Logo)</p>

                    <input type="submit" value="Guardar Cambios">       
                </form>
                </div>
            </section>
        </main>
    <footer>
        <p>
            Copyright &copy;2019 All rights reserved | This web is made with &#9825; by <span>DiazApps</span>
        </p>
    </footer>
    </body>
</html>

