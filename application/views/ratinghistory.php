<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
          <div class="layout-content-body">
            <div class="title-bar">

              <h1 class="title-bar-title">
                  <span class="d-ib">Rating History</span>

              </h1>

            </div>


              <div class="row gutter-xs">

                  <style>
                      td i{
                          color: #0288d1;
                      }
                  </style>
                  <div class="col-md-10">
                       <div class="card">
                  <div class="card-header">
                      <h3 align="center">Rating History</h3>

                  </div>
                  <div class="card-body">
                    <div class="table-flip-scroll">
                      <table class="table table-striped">
                        <thead>
                          <tr>

                            <th>Sl. No.</th>
                            <th>Date</th>
                             <th>Profile</th>
                              <th>View Rating</th>
                              <th>Remark</th>
                              <th>Status</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td>1</td>
                              <td>----</td>
                               <td>---</td>
                               <td><a href="#"><i class="fa fa-eye fa-2x"></i></a></td>
                               <td>----</td>
                               <td>---</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>----</td>
                               <td>---</td>
                              <td><a href="#"><i class="fa fa-eye fa-2x"></i></a></td>
                               <td>----</td>
                               <td>---</td>
                          </tr>
                          <tr>
                             <td>3</td>
                              <td>----</td>
                               <td>---</td>
                               <td><a href="#"><i class="fa fa-eye fa-2x"></i></a></td>
                               <td>----</td>
                               <td>---</td>
                          </tr>
                          <tr>
                            <td>4</td>
                              <td>----</td>
                               <td>---</td>
                              <td><a href="#"><i class="fa fa-eye fa-2x"></i></a></td>
                               <td>----</td>
                               <td>---</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                  </div>
                  <div class="col-md-2"></div>
              </div>
          </div>
        </div>
	<?php } else { ?>

   	    <?php redirect(base_url('AdminPanel')); ?>

   	<?php } ?>
   <!--<div class="layout-footer">
       <div class="layout-footer-body">
         <small class="version"></small>
         <small class="copyright">2019 &copy; Brain Storming. Designed And Developed By <a href="http://aytis.in" title="AYTIS CLOUD SOLUTIONS PVT. LTD.">AYTIS CLOUD SOLUTIONS PVT. LTD.</a></small>
       </div>
     </div>
   </div>-->
   <script src="<?php echo base_url('assets/js/vendor.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/elephant.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/application.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/demo.min.js');?>"></script>
   <script src="<?php echo base_url('assets/js/compose.min.js');?>"></script>
   <!--<script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
     ga('create', 'UA-83990101-1', 'auto');
     ga('send', 'pageview');
   </script>-->
 </body>
</html>
