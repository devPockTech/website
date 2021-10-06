
<div class="menu-bar col-12">

    <div class="container-fluid">

        <div class="float-left">
            <div class="logo">
                <a href="index.php"><img class="img-fluid" src="img/logo.png"></a>
            </div>
        </div>

        <div class="float-right mt-4">

            <?php
                $link = $_SERVER['PHP_SELF'];
                $link_array = explode('/',$link);
                $page = end($link_array);
            ?>

            <?php
                if($page == "index.php"){
                    echo '<a class="mr-3 selected" href="index.php">Inicio</a>';
                }
                else{
                    echo '<a class="mr-3" href="index.php">Inicio</a>';
                }
            ?>
            
            <?php
                if($page == "quienes_somos.php"){
                    echo '<a class="mr-3 selected" href="quienes_somos.php">Quienes somos</a>';
                }
                else{
                    echo '<a class="mr-3" href="quienes_somos.php">Quienes somos</a>';
                }
            ?>

            <?php
                if($page == "servicios.php"){
                    echo '<a class="mr-3 selected" href="servicios.php">Servicios</a>';
                }
                else{
                    echo '<a class="mr-3" href="servicios.php">Servicios</a>';
                }
            ?>

            <?php
                if($page == "blog.php"){
                    echo '<a class="mr-3 selected" href="blog.php">Blog</a>';
                }
                else{
                    echo '<a class="mr-3" href="blog.php">Blog</a>';
                }
            ?>

            <?php
                if($page == "contacto.php"){
                    echo '<a class="mr-3 selected" href="contacto.php">Contacto</a>';
                }
                else{
                    echo '<a class="mr-3" href="contacto.php">Contacto</a>';
                }
            ?>

            <a class="mr-3 pock-btn" href=""><i class="fas fa-sign-in-alt mr-2"></i>Iniciar sesión</a>
        </div>

    </div>

</div>