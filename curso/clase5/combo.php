<?php
include '../layouts/header.php';
?>
    <main class="container py-3">
        <h1>Combo</h1>


        <form action="procesa.php" method="post">

            <select name="dato" >
                <option value="1">Primero</option>
                <option value="2">Francia</option>
                <option value="3">Tercero</option>
                <option value="4">Cuarto</option>
                <option value="5">Quinto</option>
            </select>
            <button>
                enviar
            </button>
        </form>

        evento change de js

    </main>
<?php
include '../layouts/footer.php';
