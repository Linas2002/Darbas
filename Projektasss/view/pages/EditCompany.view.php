<!DOCTYPE html>
<html lang="en">
<?php include "view/_partials/head.view.php"; ?>
    <body class="bg-secondary text-black">
    <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1 class="mt-5"> Įmonės Redagavimas</h1>
            <form method="post">
             <input type="text" name="name" value="<?=$company['name'] ?>" placeholder="Įmonės Pavadinimas">
             <input type="text" name="code" value="<?=$company['code'] ?>"placeholder="Įmonės Kodas">
             <input type="text" name="pvm_code" value="<?=$company['pvm_code'] ?>" placeholder="Įmonės PVM Kodas">
             <input type="text" name="address"  value="<?=$company['address'] ?>" placeholder="Įmonės Adresas">
             <input type="tel" name="phone"  value="<?=$company['phone'] ?>" placeholder="Įmonės Tel. Nr.">
             <input type="email" name="email"  value="<?=$company['email'] ?>" placeholder="Įmonės El. paštas">
             <input type="text" name="activity"  value="<?=$company['activity'] ?>" placeholder="Įmonės Veikla">
             <input type="text" name="owner"  value="<?=$company['owner'] ?>" placeholder="Įmonės Vadovas">
             <button type="sumbit" name="send">Pakeisti</button>

            </form>  
            
        </div>
    </body>
</html>