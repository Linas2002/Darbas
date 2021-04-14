<!DOCTYPE html>
<html lang="en">
<?php include "view/_partials/head.view.php"; ?>
    <body class="bg-secondary text-black">
    <?php include "view/_partials/nav.view.php"; ?>
        <div class="container text-center w-100">
            <h1 class="mt-5">Visos įmonės</h1>
            <table class="table">
        <thead class ="bg-light text-black">
          <tr>
            <th scope="col">Pavadinimas</th>   
            <th scope="col">Adresas</th>  
            <th scope="col">El. Pastas</th>  
        </tr>
         </thead>
         <tbody class ="bg-light text-black">
         <?php foreach($companies->AllCompanies($page) as $company): ?>
         <tr> 
         <th scope ="row"><a href="/imone/<?=$company['id']?>"><?=$company['name']?></a></th>
           <td><?=$company['address']?></td>
           <td><?=$company['email']?></td>
           </tr>
      <?php endforeach; ?>
          </tbody>
          </table> 


           
            <nav aria-label="Page navigation example">
  <ul class="pagination">
  <?php if($page != 1): ?>
    <li class="page-item"><a class="page-link, btn btn-danger" href="/all/<?=$page-1?>">🎆Atgal🎆</a></li>
    <?php endif ?>
   
    <li class="page-item"><a class="page-link, btn btn-danger" href="/all/ <?=$page+1?>">🎇Toliau🎇</a></li>
  </ul>
</nav>
        
       
       
    </body>
</html>