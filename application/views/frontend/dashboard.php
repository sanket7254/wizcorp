<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js" ></script>
<style type="text/css">
    .swal-button {
  padding: 7px 19px;
  border-radius: 2px;
  background-color: #4962B3;
  font-size: 12px;
  border: 1px solid #3e549a;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
}
.swal-footer {
  background-color: rgb(245, 248, 250);
  margin-top: 32px;
  border-top: 1px solid #E9EEF1;
  overflow: hidden;
}
.swal-overlay {
  background-color: #8abe51;
}
</style>
<?php if ($this->session->flashdata('welcome')): ?>
                            <script>
                                swal({
                                    title: "Welcome",
                                    text: "<?php echo $this->session->flashdata('welcome'); ?>",
                                    icon: "success",
                                    timer: 1500,
                                    type: 'success'
                                });
                            </script>
                    <?php endif; ?>
            <!-- start page content -->
    <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        
                    </div>
                   <!-- start widget -->
                    <div class="state-overview">
                            <div class="row">
                                <div class="col-xl-3 col-md-6 col-12">
                                  <div class="info-box bg-b-green">
                                    <span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
                                    <div class="info-box-content">
                                      <span class="info-box-text">Added<br>Students</span>
                                      <span class="info-box-number"><?php $count = $this->students->num_rows() ?>
                                          <?php echo" $count "; ?>
                                      </span>
                                      <!-- <div class="progress">
                                        <div class="progress-bar" style="width: 45%"></div>
                                      </div>
                                      <span class="progress-description">
                                            45% Increase in 28 Days
                                          </span> -->
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-xl-3 col-md-6 col-12">
                                  <div class="info-box bg-b-yellow">
                                    <span class="info-box-icon push-bottom"><i class="material-icons">person</i></span>
                                    <div class="info-box-content">
                                      <span class="info-box-text">Total<br>Users</span>
                                      <span class="info-box-number"><?php $count = $this->mlogin->num_rows() ?>
                                          <?php echo" $count "; ?></span>
                                      <!-- <div class="progress">
                                        <div class="progress-bar" style="width: 40%"></div>
                                      </div>
                                      <span class="progress-description">
                                            40% Increase in 28 Days
                                          </span> -->
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-xl-3 col-md-6 col-12">
                                  <div class="info-box bg-b-blue">
                                    <span class="info-box-icon push-bottom"><i class="material-icons">school</i></span>
                                    <div class="info-box-content">
                                      <span class="info-box-text">Total<br>Students</span>
                                      <span class="info-box-number"><?php $count = $this->students->num_students() ?>
                                          <?php echo" $count "; ?></span>
                                      <!-- <div class="progress">
                                        <div class="progress-bar" style="width: 85%"></div>
                                      </div>
                                      <span class="progress-description">
                                            85% Increase in 28 Days
                                          </span> -->
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                                <div class="col-xl-3 col-md-6 col-12">
                                  <div class="info-box bg-b-pink">
                                    <span class="info-box-icon push-bottom"><i class="material-icons">monetization_on</i></span>
                                    <div class="info-box-content">
                                      <span class="info-box-text">Total Commission<br>Paid</span>
                                      <span class="info-box-number"><?php $count = $this->students->admin_calculate_commission();
                                        if ($count == 0)
                                        {
                                        echo "0";
                                        }
                                        else
                                        {
                                        echo" $count ";
                                        }
                                        ?>
                                          </span>
                                      <!-- <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                      </div>
                                      <span class="progress-description">
                                            50% Increase in 28 Days
                                          </span> -->
                                    </div>
                                    <!-- /.info-box-content -->
                                  </div>
                                  <!-- /.info-box -->
                                </div>
                                <!-- /.col -->
                              </div>
                        </div>
                    
                     <!-- start new student list -->
                    
            <!-- start chat sidebar -->

            <!-- end chat sidebar -->
        </div>
        <!-- end page container -->
        <!-- start footer -->
        