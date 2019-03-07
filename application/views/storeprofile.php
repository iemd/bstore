<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
           <div class="layout-content-body">
             <div class="title-bar">

               <h1 class="title-bar-title">
                   <span class="d-ib">PROFILE MANAGEMENT</span>

               </h1>

             </div>
               <div class="row gutter-xs desk" style="margin-top: 30px">
                   <h3 align="center" style="margin-bottom:30px">Change Username And Password</h3>
                   <div class="col-sm-1"></div>
                   <div class="col-sm-10">
                       <form action="" method="post">
                           <div class="row">
                               <div class="col-sm-4">
                                   <div class="md-form-group md-label-floating">
                 <input class="md-form-control" type="text" name="username" spellcheck="false" autocomplete="off"  required>
                 <label class="md-control-label">Username</label>
               </div>
                               </div>
                                <div class="col-sm-4">
                                    <div class="md-form-group md-label-floating">
                 <input class="md-form-control" type="password" name="password" required>
                 <label class="md-control-label">Password</label>
               </div>
                               </div>
                               <div class="col-sm-1">
                               </div>
                                <div class="col-sm-2">
                                     <button class="btn btn-primary btn-block" type="submit" name="submit">Update</button>
                               </div>
                                <div class="col-sm-1">
                               </div>
                           </div>
                       </form>
                   </div>

                   <div class="col-sm-1"></div>
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
