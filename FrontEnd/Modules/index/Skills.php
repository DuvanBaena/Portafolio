<?php
$recordsBackEnd=$data->ListSkillBackEndSumary();
$recordsFrontEnd=$data->ListSkillFrontEndSumary();
?>
<section id="skills" class="skills section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Skills</h2>
        </div>
        <div class="row skills-content">        
          <div class="col-lg-6" data-aos="fade-up">         
          <?php
            if(count($recordsBackEnd)>0){
            for($i=0;$i<count($recordsBackEnd);$i++){?>
            <div class="progress">
              <span class="skill"><?php echo $recordsBackEnd[$i]["SkillName"];?><i class="val"><?php echo $recordsBackEnd[$i]["SkillValue"];?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $recordsBackEnd[$i]["SkillValue"];?>" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <?php
              }
            }
          ?>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <?php
            if(count($recordsFrontEnd)>0){
            for($i=0;$i<count($recordsFrontEnd);$i++){?>
            <div class="progress">
              <span class="skill"><?php echo $recordsFrontEnd[$i]["SkillName"];?><i class="val"><?php echo $recordsFrontEnd[$i]["SkillValue"];?>%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $recordsFrontEnd[$i]["SkillValue"];?>" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>
            <?php
              }
            }
          ?>
          </div>
        </div>
      </div>
    </section>