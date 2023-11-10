<!DOCTYPE html>
<html lang="en">
<?php
    include("partials/head.php")
    
    ?>
    <head><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script></head>

    
<body>
 <?php
    include("partials/header.php");
    include("partials/loader.php");
    
    
    ?>
<section class="chpsa ">
      
        <h1 class="heropara"><?php echo $_REQUEST['tp'].".";?> Chapter 
          <?php $tp=$_REQUEST['tp'];  
              if($tp==1)
              {
                echo "Force";
              }
            elseif($tp==2){
                echo "Work Power Energy";
              }
              elseif($tp==3){
                echo "Machines";
              }
              elseif($tp==4){
                echo "Refarction of light at plane surfaces";
              }
              elseif($tp==5){
                echo "Refarction through lens";
              }
              elseif($tp==6){
                echo "Spectrum";
              }
              elseif($tp==7){
                echo "Sound";
              }
              elseif($tp==8){
                echo "Current Electricity";
              }
              elseif($tp==9){
                echo "Electrical power and household circuits";
              }
              elseif($tp==10){
                echo "Electromagnetism";
              }
              elseif($tp==11){
                echo "Calorimetry";
              }
              elseif($tp==12){
                echo "Radioctivity";
              }
            else{
              header("chapterselect.php");
            }

            ?>
        </h1>
        <div style="text-align:center;">
         <button class="btn filter-button" data-filter="num"> Numericals</button>
         <button class="btn filter-button" data-filter="txt">Theory </button>
         </div>



 

        
        <?php
  include("../partials/dbconnect.php");
      $type=$_REQUEST['s'];
      $postsSQL = "SELECT * from $type WHERE topic=$tp";
      $res = $db->query($postsSQL);
      $n=1;

      while ($final = $res->fetch_assoc())
      {
        ?>
<div class="filter <?php echo $final['type'];?>">      
  <div class="jumbotron outb">

    <div >

    
<img src="../assets/owlfq.png" alt="exam" class="qni">
<h4>Question <?php echo $n; $n++ ?></h4> 
</div>
  <div class="row">
    <div class="col-lg">

        <div class="jumbotron box-qn">
        <div class="imgbo">
        <img src="images/<?php echo $type."/".$final['qlink'] ?>" alt="exam" >
        </div>
   
      
        <div class="container">
          <div class="row" style="text-align: center;">
            <div class="col-sm">
            <button id="vo" type="button" class="btn btn-warning btnss vao" data-toggle="modal" data-target="#vsm" data-id="<?php echo  $final['av']; ?>">Video Solution</button>
            
            </div>
            <div class="col-sm">
            <button id="io" type="button" class="btn btn-warning btnss iao" data-toggle="modal" data-target="#ism" data-id="<?php echo "images/".$type."/".$final['ai']; ?>">Image Solution</button>
            </div>

            <div class="col-sm">
            <button type="button" class="btn btn-warning btnss">Save Question</button>
            </div>
          </div>
</div>
         </div>
     </div>
    
    </div>
  </div>
</div>
      </div>
                 <?php
      }
        ?>





<!-- Image Solution Modal -->
<div class="modal fade" id="ism" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="overflow: auto; height:700px">
      <img src="" alt="exam"  id="is" class="imsol">
      </div>
      
    </div>
  </div>
</div>

<!-- Video Sollution Modal -->
<div class="modal fade" id="vsm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" >
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <div><div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><figure style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%; margin-block-end: 0; margin-block-start: 0; margin-inline-start: 0; margin-inline-end: 0;" ><iframe id="vlink" src="" scrolling="no" style="border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute; overflow:hidden; border-radius: 5px;" allowfullscreen="1" allow="autoplay"></iframe></figure></div></div>
    </div>
    </div>
  </div>
</div>





</section>
<section class="foot">
   <script type="text/javascript">
        $(document).on("click", ".iao", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #is").attr('src',myBookId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});
    </script>

    <script type="text/javascript">
        $(document).on("click", ".vao", function () {
     var link = $(this).data('id');
     $("#vlink").attr('src',link );
   
     
});
$(document).on({
    "contextmenu": function(e) {
        console.log("ctx menu button:", e.which); 

        // Stop the context menu
        e.preventDefault();
    },
    "mousedown": function(e) { 
        console.log("normal mouse down:", e.which); 
    },
    "mouseup": function(e) { 
        console.log("normal mouse up:", e.which); 
    }
});
    </script>
    <script>
      $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

});
    </script>
<?php
    include("../partials/footer.php")
    
    ?>
    </section>


   <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
    
</body>
</html>