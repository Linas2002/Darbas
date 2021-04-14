<!DOCTYPE html>
<html lang="en">
<?php include "view/_partials/head.view.php"; ?>
    <body class="bg-secondary text-black">
    <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1><?=$company['name']?></h1>
        
            <ul>
                <li>Kodas: <?=$company['code']?></li>
                <li>PVM Kodas: <?=$company['pvm_code']?></li>
                <li>Adresas: <?=$company['address']?></li>
                <li>Telefono Nr: <?=$company['phone']?></li>
                <li>El. paštas: <?=$company['email']?></li>
                <li>Veikla: <?=$company['activity']?></li>
                <li>Vadovas: <?=$company['owner']?></li>
               </ul> 

               <a href="/Edit-Company/<?=$company['id']?>" class ="btn btn-success">Redaguoti</a>
            <a href="/Delete-Company/<?=$company['id']?>" class ="btn btn-danger">Istrinti</a>
        </div>
    </body>
</html>