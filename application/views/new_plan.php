  <!-- page content -->
      <div class="right_col" role="main">
      
                <div class="row">

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">                        
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">


                        <!-- Smart Wizard -->
                        <div id="wizard" class="form_wizard wizard_horizontal">
                          <ul class="wizard_steps">
                            <li>
                              <a href="#step-1">
                                <span class="step_no">1</span>
                                <span class="step_descr">
                                  Step 1<br />
                                  <small>Plan Details</small>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#step-2">
                                <span class="step_no">2</span>
                                <span class="step_descr">
                                  Step 2<br />
                                  <small>Travel Costs</small>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#step-3">
                                <span class="step_no">3</span>
                                <span class="step_descr">
                                  Step 3<br />
                                  <small>Additional Costs</small>
                                </span>
                              </a>
                            </li>
                            <li>
                              <a href="#step-4">
                                <span class="step_no">4</span>
                                <span class="step_descr">
                                  Step 4<br />
                                  <small>Budgeting Details</small>
                                </span>
                              </a>
                            </li>
                          </ul>
                          <div id="step-1" style="min-height: 90%">
                            <form class="form-horizontal form-label-left" id="travel-details" method="post" action="<?php echo site_url('home/save_travel_details'); ?>">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name  <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="name" id="name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Name">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="grade">Grade <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select name="grade" id="grade" required="required" class="form-control col-md-7 col-xs-12">

                                  <?php 
                                    if(!empty($grades)){
                                      foreach($grades as $data){
                                  ?>
                                        <option value="<?php echo $data->id;?>"><?php echo $data->grade;?></option>
                                  <?php
                                      }
                                    }
                                  ?>

                                  </select> 
                                </div>
                              </div>

                             <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="meeting">Meeting/Institution <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input name="meeting" type="text" id="meeting" required="required" class="form-control col-md-7 col-xs-12" placeholder="Meeting/Institution">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="venue">Venue <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="venue" name="venue" required="required" class="form-control col-md-7 col-xs-12" placeholder="Venue">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="datepicker">Dates <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                  <input id="dates" class="datepicker form-control col-md-7 col-xs-12" required="required" type="text" name="dates" placeholder="Dates">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                  <input id="days" class="form-control col-md-7 col-xs-12" type="text" name="days" placeholder="Days Away">
                                </div>
                              </div>

                              <div class="form-group">
                                <label for="justification" class="control-label col-md-3 col-sm-3 col-xs-12">Justification</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea id="justification" class="form-control col-md-7 col-xs-12" type="text" name="justification" placeholder="Justification"></textarea> 
                                </div>
                              </div>
                            </form>

                          </div>
                          <div id="step-2" style="min-height: 90%">
                              <form class="form-horizontal form-label-left" id="project-details" method="post" action="<?php echo site_url('home/save_project_details'); ?>">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="project-name">Project <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="project-name"  name="project-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Budget Line <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="budget-line" name="budget-line" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Estimated travel costs <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="costs" class="datepicker form-control col-md-7 col-xs-12" required="required" type="text" name="costs">
                                </div>
                              </div>

                            </form>
                          </div>
                          <div id="step-3" style="min-height: 90%">
                            <form class="form-horizontal form-label-left" id="added-details" method="post" action="<?php echo site_url('home/save_added_details'); ?>">

                              <div class="row" id="first_child">
                               <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="datepicker"> Additional Cost 1
                                </label>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                  <input id="dates" class="datepicker form-control col-md-7 col-xs-12" required="required" type="text" name="additional_name[]" placeholder="Name">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                  <input id="days" class="form-control col-md-7 col-xs-12" type="text" name="additional_amount[]" placeholder="Amount">
                                </div>
                              </div>
                              </div>

                              <div class="col-md-3 col-md-offset-3 col-sm-3  col-sm-offset-3 col-xs-12">
                                <a href="#" class="btn btn-dark" onclick="add_fields()">Add cost</a>
                              </div>

                            </form>
                          </div>
                          <div id="step-4" style="min-height: 90%">
                            <form class="form-horizontal form-label-left" id="budget-details" method="post" action="<?php echo site_url('home/save_budget_details'); ?>">

                               <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Department<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select id="department" class="form-control col-md-7 col-xs-12" required="required" name="department">
                                  <?php 
                                    if(!empty($departments)){
                                      foreach($departments as $data){
                                  ?>
                                        <option value="<?php echo $data->id;?>"><?php echo $data->department;?></option>
                                  <?php
                                      }
                                    }
                                  ?>
                                  </select> 
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="yearly-budget">Total Allocated Travel budget for the year <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="yearly-budget" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="percentage">Percentage of travel budget spent <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="percentage" name="percentage" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="balance">Budget Balance as at <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input id="balance" class="form-control col-md-7 col-xs-12" required="required" type="text" name="balance">
                                </div>
                              </div>
                              
                            
                              <div class="form-group">
                                <label for="quarter" class="control-label col-md-3 col-sm-3 col-xs-12">Applicable Quarter</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select id="quarter" class="form-control col-md-7 col-xs-12">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                  </select> 
                                </div>
                              </div>

                        
                            </form>
                          </div>

                        </div>
                        <!-- End SmartWizard Content -->

                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->