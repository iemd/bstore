<!-- /header -->
        <!-- Header-->
 <?php $Loginid = $this->session->userdata('ID');?>
 <?php if (!empty($Loginid)){ ?>
   <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">

            <h1 class="title-bar-title">
                <span class="d-ib">Complain Management</span>

            </h1>

          </div>
            <div class="row gutter-xs" style="margin-top: 30px">
                <h3 align="center">Raise Complain</h3>
                <div class="col-sm-1"></div>
                <div class="col-sm-10">



                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="md-form-group md-label-floating">
              <input class="md-form-control" type="text" name="date" spellcheck="false" autocomplete="off"  required>
              <label class="md-control-label">Date :</label>
            </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="md-form-group md-label-floating">
              <input class="md-form-control" type="text" name="day" spellcheck="false" autocomplete="off"  required>
              <label class="md-control-label">Day :</label>
            </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="md-form-group md-label-floating">
              <input class="md-form-control" type="text" name="time" spellcheck="false" autocomplete="off"  required>
              <label class="md-control-label">Time :</label>
            </div>
                                    </div>
                                     <div class="col-sm-3">
                                           <div class="md-form-group">
                     <select class="md-form-control" name="role">
                         <option value="">Select Concern</option>
                         <option value="complain">Complain</option>
                           <option value="request">Request</option>
                             <option value="report">Report</option>


                     </select>
                     <label class="md-control-label"></label>
                 </div>
                                     </div>
                                    <div class="col-sm-3">
                                           <div class="md-form-group">
                     <select class="md-form-control" name="role">
                         <option value="">Select Department</option>
                         <option value="training">Training</option>
                           <option value="hr">HR</option>
                             <option value="bd">Business Developement</option>
                             <option value="zm">ZM</option>
                             <option value="nh">NH</option>


                     </select>
                     <label class="md-control-label"></label>
                 </div>
                                     </div>
                                </div>
                                <div class="row" style="margin-top:6px">
                                    <div class="col-sm-12">
                                        <div class="compose">
                                      <div class="compose-body">
              <div class="compose-message">
                <div class="compose-editor"></div>
                <div class="compose-toolbar">
                  <div class="btn-toolbar" data-role="editor-toolbar">
                    <div class="btn-group">
                      <div class="btn-group dropup">
                        <button class="btn btn-link link-muted" title="Font Size" data-toggle="dropdown" type="button">
                          <span class="icon icon-text-height"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="fs-Five" data-edit="fontSize 5">Huge</a></li>
                          <li><a class="fs-Three" data-edit="fontSize 3">Normal</a></li>
                          <li><a class="fs-One" data-edit="fontSize 1">Small</a></li>
                        </ul>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-link link-muted" title="Bold (Ctrl/Cmd+B)" data-edit="bold" type="button">
                          <span class="icon icon-bold"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Italic (Ctrl/Cmd+I)" data-edit="italic" type="button">
                          <span class="icon icon-italic"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Strikethrough" data-edit="strikethrough" type="button">
                          <span class="icon icon-strikethrough"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Underline (Ctrl/Cmd+U)" data-edit="underline" type="button">
                          <span class="icon icon-underline"></span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-link link-muted" title="Bullet list" data-edit="insertunorderedlist" type="button">
                          <span class="icon icon-list-ul"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Number list" data-edit="insertorderedlist" type="button">
                          <span class="icon icon-list-ol"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Reduce indent (Shift+Tab)" data-edit="outdent" type="button">
                          <span class="icon icon-outdent"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Indent (Tab)" data-edit="indent" type="button">
                          <span class="icon icon-indent"></span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-link link-muted" title="Align Left (Ctrl/Cmd+L)" data-edit="justifyleft" type="button">
                          <span class="icon icon-align-left"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Center (Ctrl/Cmd+E)" data-edit="justifycenter" type="button">
                          <span class="icon icon-align-center"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Align Right (Ctrl/Cmd+R)" data-edit="justifyright" type="button">
                          <span class="icon icon-align-right"></span>
                        </button>
                        <button class="btn btn-link link-muted" title="Justify (Ctrl/Cmd+J)" data-edit="justifyfull" type="button">
                          <span class="icon icon-align-justify"></span>
                        </button>
                      </div>
                      <div class="btn-group">
                        <label class="btn btn-link link-muted file-upload-btn" title="Insert picture">
                          <span class="icon icon-picture-o"></span>
                          <input class="file-upload-input" type="file" name="file" data-edit="insertImage">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
                                        </div>
                                        </div>
                                </div>
                                <div class="row" style="margin-top:6px">
                                    <div class="col-sm-4">
                                        <input type="file" class="form-control" name="image[]" multiple />
                                        <span>(max. 5 file can upload)</span>
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary" name="send">SEND</button>

                                    </div>
                                    <div class="col-sm-5">

                                    </div>
                                </div>
                            </form>


                </div>
                    <div class="col-sm-1"></div>
            </div>
            <div class="row gutter-xs" style="margin-top: 30px;margin-bottom: 20px;">
                <h3 align="center">Complain Status</h3>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="card">

                <div class="card-body">
                  <div class="table-flip-scroll">
                    <table class="table table-striped">
                      <thead>
                        <tr>

                          <th>Sl. No.</th>
                          <th>Date</th>
                           <th>Concern</th>
                            <th>Status</th>
                            <th>Remark</th>
                            <th>Notes</th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>----</td>
                             <td>---</td>
                             <td>---</td>
                             <td>----</td>
                             <td>---</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>----</td>
                             <td>---</td>
                            <td>---</td>
                             <td>----</td>
                             <td>---</td>
                        </tr>
                        <tr>
                           <td>3</td>
                            <td>----</td>
                             <td>---</td>
                             <td>---</td>
                             <td>----</td>
                             <td>---</td>
                        </tr>
                        <tr>
                          <td>4</td>
                            <td>----</td>
                             <td>---</td>
                            <td>---</td>
                             <td>----</td>
                             <td>---</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
                 <div class="col-md-1"></div>
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
