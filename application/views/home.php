<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Travel Plan Requests <small></small></h3>
              </div>

              <div class="pull-right">
                <a id="new_plan" href="<?php echo site_url('home/new_plan');?>" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Create new plan</a>
              </div>

            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Projects</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <p></p>

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 15%">Project Name</th>
                          <th style="width: 15%">Staff Name</th>
                          <th style="width: 15%">Meeting</th>
                          <th style="width: 10%">Total Cost</th>
                          <th style="width: 10%">Status</th>
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#</td>
                          <td>
                            <a>Project 1</a>
                            <br />
                            <small>Created 01.01.2015</small>
                          </td>
                          <td>
                            <a>John Doe</a>
                            <br />
                            <small>Grade </small>
                          </td>
                          <td>
                            <a>Meeting1</a>
                            <br />
                            <small>Dates 01.01.2015 - 03.01.2015</small>
                          </td>
                           <td>
                            <a>$2500.00</a>
                            <br />
                            <small>Additional $1000.00</small>
                          </td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs">Pendind Approval</button>
                          </td>
                          <td>
                            <a href="project_detail.html" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="addplan.html" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                    <!-- end project list -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
