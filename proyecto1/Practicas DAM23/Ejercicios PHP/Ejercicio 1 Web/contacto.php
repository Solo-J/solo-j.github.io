

<?php 

/* Llamar a una funciones */
include("header.php");


?>



<h1>CONTACT</h1>

<main class="contact">
    
        <form class="form-register" action="">

            <h2>TOTAL FORM</h2>

            <!-- NOMBRE -->

            <div class="form-group">
                <label for="nombre">Name</label> <br>

                <!-- required para campo obligatorio -->
                <input type="text" id="nombre" name="name" placeholder="Your name" required>
            </div>

            <!-- EMAIL -->

            <div class="form-group">

                    <label for="email">Email</label> <br>

                <!-- required para campo obligatorio -->    
                <input type="email" id="email" name="email" placeholder="Your email" required>

            </div>

            <!-- PASSWORD -->

            <div class="form-group">

                <label for="password">Password</label> <br>

                <!-- required para campo obligatorio -->
                <input type="password" id="password" name="password" placeholder="Your password" required>

            </div>

            <!-- BOTON ENVIAR -->

            <div class="form-group">

                <button type="submit">Send</button>

            </div>

        </form>
</main>

<?php

include("footer.php");

?>
