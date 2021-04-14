<!DOCTYPE html>
<html lang="en">
<?php include "view/_partials/head.view.php"; ?>
    <body class="bg-secondary text-black">
    <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1 class="mt-5">Naujos Įmonės pridėjimas</h1>
            <form method="post">
             <input type="text" name="name" placeholder="Įmonės Pavadinimas">
             <input type="text" name="code" placeholder="Įmonės Kodas">
             <input type="text" name="pvm_code" placeholder="Įmonės PVM Kodas">
             <input type="text" name="address" placeholder="Įmonės Adresas">
             <input type="tel" name="phone" placeholder="Įmonės Tel. Nr.">
             <input type="email" name="email" placeholder="Įmonės El. paštas">
             <input type="text" name="activity" placeholder="Įmonės Veikla">
             <input type="text" name="owner" placeholder="Įmonės Vadovas">
             <button type="sumbit" name="send" class ="btn btn-danger">Pridėti</button>

            </form>  
            
        </div>
    </body>
</html>