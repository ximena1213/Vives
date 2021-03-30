<?php
    include ("header.php");
?>


<section class="form_wrap">

    <section class="cantact_info">
        <section class="info_title">
            <span class="fa fa-user-circle"></span>
            <h2>INFORMACION<br>DE CONTACTO</h2>
        </section>
        <section class="info_items">
            <p><span class="fa fa-envelope"></span> VIVES-COL@gmail.com</p>
            <p><span class="fa fa-mobile"></span> +01 8000 345 715</p>
        </section>
    </section>

    <form action="" class="form_contact">
        <h2>Envianos un mensaje</h2>
        <div class="user_info">
            <label for="names">Nombres *</label>
            <input type="text" id="names">

            <label for="phone">Telefono / Celular</label>
            <input type="text" id="phone">

            <label for="email">Correo electronico *</label>
            <input type="text" id="email">

            <label for="mensaje">Mensaje *</label>
            <textarea id="mensaje"></textarea>

            <input type="button" value="Enviar Mensaje" id="btnSend">
        </div>
    </form>

</section>





<?php
    include ("footer.php");
?>
