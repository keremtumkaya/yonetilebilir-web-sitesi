<?php require_once("includes/config.php");?>
<?php require_once("includes/header.php");?>

<?php
error_reporting(E_ALL ^ E_NOTICE);    
?>

<?php
  if($_GET[kayit]==1){
        
    
    if(!isset($_POST[isim]) || empty($_POST[isim])){
        
        $hata="tüm alanların doldurulması gerekiyor.";
    }
    if(!isset($_POST[icerik]) || empty($_POST[icerik])){
        
        $hata="tüm alanların doldurulması gerekiyor.";
    }
  
      if(!$hata){
          
          mysql_query("INSERT INTO icerik(isim,konu_bolumu,konu_kisalt,icerik)
     VALUES('$_POST[isim]','$_POST[konu_bolumu]','$_POST[konu_kisalt]','$_POST[icerik]')");
          
          $mesaj="kayıt başarıyla oluşturulmuştur";
      }
  
}


?>


<div class="yonetim_menu">
<ul>
<li><a href="yeni_sayfa.php">YENİ SAYFA OLUSTUR</a></li>  
<li><a href="#">MEVCUT KONU SAYFALARI</a></li>    
<li><a href="#">SAYFA GUNCELLEME</a></li>    
<li><a href="#">SAYFA SİLME</a></li>    
<li><a href="#">ÇIKIŞ</a></li>    
</ul>
</div>

<br />
<center>  
<h2>YENİ SAYFA</h2>
    
    <?php
    if($hata){
        echo"<p>{$hata}</p>";    
    }
    if($mesaj){
        echo"<p>{$mesaj}</p>";
        
        
    }
    
    ?>

<form name="yeni_sayfa" action="yeni_sayfa.php?kayit=1" method="post">

<p class="isimclasi">İSİM:<br><input id="submit" type="text" name="isim"/></p>
<br>
<p class="isimclasi">KONU BÖLÜMÜ:<br><input id="submit" type="text" name="konu_bolumu"/></p>
<br>
    KONUNUN KISALTILMIŞI
    <div class="ck">
    
    <textarea class="ckeditor" name="konu_kisalt" cols="70" rows="10">
        <?php echo $bilgi[konu_kisalt] ?>
        </textarea>
        </div>
    
        <br>
    İÇERİK
    <div class="ck">
        <textarea class="ckeditor" name="icerik" cols="70" rows="10">
        <?php echo $bilgi[icerik] ?>
        </textarea>
    
    
    </div>
    <br>
    <p><input type="submit" class="giris" id="submit" value="Oluştur" /></p>

</form>
    </center>

<?php
include("includes/footer.php")    
?>
