<?php require_once("includes/config.php");?>
<?php require_once("includes/functions.php");?>
<?php require_once("includes/header.php");?>

<?php
error_reporting(E_ALL ^ E_NOTICE);    
?>

<div class="container">
  <div class="row>">
    
      <div class="col-md-3">
         <div id="isim">  
     
          
        <?php
            $sorgu=mysql_query("SELECT * FROM icerik WHERE id='$_GET[page]'");
            $bilgi=mysql_fetch_array($sorgu);
          echo "<ul id=\"konu_adi\">";
          echo"<h3>";  
          echo "<li>{$bilgi[konu_kisalt]}</li>";  
          echo"</h3>";
          echo"</ul>";
          ?>
          
        </div>
      
      </div>
      
      <div class="col-md-6">
      <br />
      <div id="disicerik"> 
      <div id="icerik"> 
        
          <?php
            $sorgu=mysql_query("SELECT * FROM icerik WHERE id='$_GET[page]'");
            $bilgi=mysql_fetch_array($sorgu);
          
          echo "<br />";
          echo "<ul id=\"konu_icerik\">";
          echo "<li>{$bilgi[icerik]}</li>";
          echo"</ul>";
          
          ?>
          
      </div>      
      </div>   
          <button class="button"><a href="index.php">GERİ</a></button>
     </div>
      
      <div class="col-md-3">
      
      
      
      </div>
        
    
      
      
</div>
</div>

<?php
include("includes/footer.php")    
?>
