
 <?php
  if(count($records)>0){
  for($i=0;$i<count($records);$i++){?>

<?php $FullName = $records[$i]["UserName"] ." ". $records[$i]["UserLastName"];?>

<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in" style="text-transform: uppercase;">
      <h1><?php echo $FullName;?></h1>
      <p>I'm <span class="typed detail-header" data-typed-items="DevOps, Developer, Cloud Engineer, Newsletter Creator"></span></p>
    </div>
</section>

<?php 
      }
    }
  ?>


