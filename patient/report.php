<?php
require_once 'header.php'; 
?>
    <div class="content-wrapper" >
        <div style="margin:10px">
       <div class="dropdown" style="margin-top: 2vw;">
        <button type="button" class="btn border dropdown-toggle" data-toggle="dropdown">Diseases</button>
         <div class="dropdown-menu">
           <a class="dropdown-item" href="#">Liver</a>
           <a class="dropdown-item" href="#">Heart</a>
           <a class="dropdown-item" href="#">Brain</a>
           <a class="dropdown-item" href="#">Skin</a>
           <a class="dropdown-item" href="#">Digestive</a>
          </div>
         </div>
       <div class="row" style="margin-top: 2vw;">
         <div class="col-6">
           <h2>Digestive</h2>
         </div>
         <div class="col-6">
           <h2>Thrusday,22 Jan 2009</h2>
         </div>
        </div>
        <div class="row" style="margin-top: 2vw;">
            <div class="col-6">
              <p>Digestive Inspection</p>
              <textarea style="width: 30vw;" disabled>Normal</textarea>
            </div>
            <div class="col-6">
              <p>Liver</p>
              <textarea style="width: 30vw;" disabled>No hepatomegaly</textarea>
            </div>
         </div>
        
        <div class="row" style="margin-top: 2vw;">
            <div class="col-6">
              <p>Digestive auscultation</p>
              <textarea style="width: 30vw;" disabled>Normal abdomen noises</textarea>
            </div>
            <div class="col-6">
              <p>Rectal</p>
              <textarea style="width: 30vw;" disabled></textarea>
            </div>
         </div>
        
        <div style="margin-top: 2vw;">
              <p>Digestive palpation</p>
              <textarea style="width: 30vw;" disabled>Little pain on the right lower area</textarea>
            </div>
        
        <img class="img-fluid" src="images/download.jpg" style="width: 40vw;height: 25vw; border: 2px solid black;margin-top: 3vw;" ><br>
        
        <button type="button" style="width: 12vw;height: 3vw;margin-top: 2vw;font-size: 1vw;">Download Image</button>
        
        </div>
    </div>
    
<?php
	 
	require_once 'js-links.php';
?>