<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
  <?php if (!empty($Loginid)){ ?>
    <div class="layout-content">
      <div class="layout-content-body">
        <div class="title-bar">

          <h1 class="title-bar-title">
              <span class="d-ib">360<sup>o</sup> Report</span>
            <div id="time" style="float: right"></div>
          </h1>

        </div>



      </div>
    </div>
    <?php } else { ?>

   				  <?php redirect(base_url('AdminPanel')); ?>

   	<?php } ?>
<script>
(function () {
    function checkTime(i) {
        return (i < 10) ? "0" + i : i;
    }

    function startTime() {
        var today = new Date(),
            h = checkTime(today.getHours()),
            m = checkTime(today.getMinutes()),
            s = checkTime(today.getSeconds());
        document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
        t = setTimeout(function () {
            startTime()
        }, 500);
    }
    startTime();
})();
</script>
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
   <!--<script src="<?php //echo base_url('assets/js/caleandar.js');?>"></script>
   <script src="<?php //echo base_url('assets/js/demo.js');?>"></script>-->

 </body>
</html>
