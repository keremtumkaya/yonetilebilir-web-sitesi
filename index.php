<?php
require_once("includes/config.php")
?>

<?php
include("includes/header.php")
?>

<?php
include("includes/functions.php")
?>



<?php
error_reporting(E_ALL ^ E_NOTICE);    
?>


<div class="container">
  <div class="row">
      
    <div class="col-md-3">
        
         <div class="enson">
             <h3>  
            <i class="fa fa-spinner"><a href="#">En Son Konular</a></i>
             </h3>    
<hr/>
             <?php
                 enson_konu($_GET[page]);
                 if($_GET[page]){
                     
                     header("location:yazi.php");
                 }
             ?>
             
         </div>    
         <br/>
         <div class="kategori enson">
         <i class="fa fa-folder-open"><a data-toggle="collapse" href="#collapseExample" 
          aria-expanded="false">Kategoriler</a></i> 
         <div class="collapse" id="collapseExample">
                   
             <hr/>
             <div class="kategoriyazi">
             
           <i class="fa fa-archive"><a href="#">CSS VE HTML</a></i>
                 <br/>
                 
            <i class="fa fa-archive"><a href="#">MYSQL</a></i>
                 <br/>
                 
            <i class="fa fa-archive"><a href="#">BOOTSTRAP</a></i> 
                 <br>
             <i class="fa fa-archive"><a href="#">JAVASCRİPT</a></i> 
     
             </div>
           </div>   
        </div>
       </div>  

         <br />  
    
  
     <div class="col-md-6">
     <br>
          
         <?php
         
         echo "<div class=\"konu_alani\">";
         menu_olustur($_GET[page]);
         if($_GET[page]){
             
             header("location:yazi.php");
             
         }
         
         echo"</div>";
         
         ?>
     
     </div>
      
      
     
         <div class="col-md-3"> 
                <div class="enson">
             <h3>  
            <i class="fa fa-thumbs-up"><a href="#">En Popüler Konular</a></i>
                </h3>
             <hr/>
             <?php
                 enpopuler_konular($_GET[page]);
                 if($_GET[page]){
                     
                     header("location:yazi.php");
                 }
             ?>
             
         </div> 
     
     
       </div> 
      
  
     
    </div>
</div>

<?php
include("includes/footer.php")    
?>