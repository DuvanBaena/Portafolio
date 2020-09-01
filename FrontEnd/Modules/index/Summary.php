<?php
$records=$data->ListSumaryInformation();
?>  

   <section id="resume" class="resume ">
      <div class="container">
        <div class="section-title">
          <span>resumen</span>
          <h2>resume</h2>
          <p>I still have a long way to go, academically and professionally, I already did the most difficult thing, was
            to start.<strong> 🖥️Lifelong learning💻</strong></p>
        </div>
 
        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Actually</h4>
              <p><em>American Colombo of Medellín, Col</em></p>
              <ul>
                <li>I'm a student of English language and literature, General</li>                
              </ul> 
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
            <div class="resume-item">
              <h4>DevOps &amp; Cloud Engineer</h4>
              <h5>2018 - Present</h5>
              <p><em>Globo Studio of Colombia S.A.S, Medellín, Col </em></p>
              <ul>
                <li>Create automated deployments by using configuration management technology. Deploy new modules and
                  updates and fix bug within the production environment.</li>
                <li>Monitoring the availability Cloud PaaS/SaaS solutions, performance and health of production systems
                  in support of meeting service level objectives.</li>
                <li>Administration within the Azure ecosystem complemented by the use of CI / CD technologies and
                  management of source code repositories.</li>
                <li>Research, propose and implement good practices to maintain the infrastructure.</li>
              </ul>
            </div>            
            <div class="resume-item">
              <h4>IT Infrastructure Engineer</h4>
              <h5>2008 - 2018</h5>
              <p><em>Colombia National Police, Medellín, Col
                  <Col>
                  </Col></em></p>
              <ul>
                <li>Maximizing network efficiency by monitoring performance, troubleshooting network problems and
                  outages, scheduling upgrades, supporting PC / computers (HW, OS, drivers, interfaces, software, etc.)
                </li>
                <li>Secure network systems by establishing and applying policies, defining and monitoring access and
                  computer systems that are available during production hours.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>