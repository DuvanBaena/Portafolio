<?php
$records=$data->ListSumaryInformation();
$records2=$data->ListCurrentSumary();
$recordsB=$data->ListWorkSumary();

?>

   <section id="resume" class="resume ">
      <div class="container">
        <div class="section-title">
          <span>summary</span>
          <h2>summary</h2>
          <p>I still have a long way to go academically and professionally. But I already did the 
             most difficult thing, that is, to start.
           <strong> 🖥️ Lifelong learning 💻</strong></p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Currently</h4>
              <?php
            if(count($records2)>0){
            for($i=0;$i<count($records2);$i++){?>
              <p><em><?php echo $records2[$i]["PlaceStudy"];?>, Col</em></p>
              <ul>
                <li><?php echo $records2[$i]["Remark"];?></li>
              </ul>
              <?php
              }
            }
          ?>
            </div>
            <h3 class="resume-title">Education</h3>
            <?php
            if(count($records)>0){
            for($i=0;$i<count($records);$i++){?>
            <div class="resume-item">
              <h4><?php echo $records[$i]["Title"];?></h4>
              <h5><?php echo $records[$i]["StartYear"];?> - <?php echo $records[$i]["FinalYear"];?></h5>
              <p><em><?php echo $records[$i]["School"];?>, Col</em></p>
              <p><?php echo $records[$i]["Remark"];?>.</p>
            </div>
            <?php
              }
            }
          ?>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <?php
            if(count($recordsB)>0){
            for($i=0;$i<count($recordsB);$i++){?>
            <?php $Time = $recordsB[$i]["StartYear"] ." - ". $recordsB[$i]["FinalYear"];?>
            <div class="resume-item">
              <h4><?php echo $recordsB[$i]["TitleWork"];?></h4>
              <h5><?php echo $Time;?></h5>
              <p><em><?php echo $recordsB[$i]["Company"];?>, Medellín, Col </em></p>
              <p><em>Duties:</em></p>
              <ul>
                <li><?php echo $recordsB[$i]["Remark1"];?>.</li>
                <li><?php echo $recordsB[$i]["Remark2"];?>.</li>
                <li><?php echo $recordsB[$i]["Remark3"];?>.</li>               
              </ul>
            </div>
            <?php
              }
            }
          ?>



          </div>
        </div>
      </div>
    </section>