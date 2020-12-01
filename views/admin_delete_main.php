<!DOCTYPE html>
   <html lang="hu">
    <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" >
    <script>
    function deleteData(par){
       $.ajax({
       type: "POST",
       url: "admin_delete.php?action=del&login="+par,
       success:function(msg){
       alert('Felhaszáló törölve!');
     }
    });
    }
    </script>
  </head>
  <body>
<div id="users" class="container">
<h2>Felhasználók</h2>
<?php foreach($viewData as $hir){?>
<div class="users"><?= (isset($hir['csaladi']) ? $hir['csaladi']." " : "") ?>
<?= (isset($hir['uto']) ? $hir['uto']." " : "") ?>
<?= (isset($hir['login']) ? $hir['login'] : "") ?><button onclick="deleteData('<?= (isset($hir['login']) ? $hir['login'] : "") ?>');">Törlés</button></div>
</div>
<?php } ?>
<h2><br><?= (isset($viewData['uzenet']) ? $viewData['uzenet'] : "") ?><br></h2>
   </div>

     <!-- jQuery first, then Tether, then Bootstrap JS. -->
     <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="../views/js/bootstrap.min.js" ></script>
    <script>
$(document).ready(function() {

      $.ajax({
       type: "POST",
       url: "admin_delete.php?action=load",            
       success:function(msg){
       alert('Success');       
     }
    });   
});
  </script>
 </body>
 </html>