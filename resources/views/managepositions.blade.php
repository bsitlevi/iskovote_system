@extends('layout.app')

@section('title')
Manage Positions
@endsection

@section('content')
<!--page content-->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Positions</h3>
              </div>
            </div>

            <br/><br/>

              <button id="delete_position" data-toggle="modal" data-target="#deletePosition" class="btn btn-danger" style="float: right;">Delete Position</button>
              <button id="edit_position" data-toggle="modal" data-target="#editPosition" class="btn btn-primary" style="float: right;">Edit Position</button>
              <button id="add_position" data-toggle="modal" data-target="#addPosition" class="btn btn-success" style="float: right;">Add Position</button>

          <!-- Modal (add) -->
        <div id="addPosition" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Position</h4>
              </div>

              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                          <label class="control-label col-md-3">ID<span class="required">*</span>
                          </label>
                          <div class="ccol-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="positionID" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Position <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="position" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  
                </form>
              </div>

              <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Add</button>
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
              </div>
          </div>

        </div>
      </div>
      <!--end of modal for add position-->

      <!-- Modal (add) -->
        <div id="editPosition" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Position</h4>
              </div>

              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="form-group">
                          <label class="control-label col-md-3">ID<span class="required">*</span>
                          </label>
                          <div class="ccol-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="positionID" disabled="disabled" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  <div class="form-group">
                          <label class="control-label col-md-3">Position <span class="required">*</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="position" required="required" class="form-control col-md-7 col-xs-12">
                          </div>
                        </div>
                  
                </form>
              </div>

              <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Save Changes</button>
              <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
              </div>
          </div>

        </div>
      </div>
      <!--end of modal for add student-->

        <!--position data table-->
                 <div class="x_panel">
                  <div class="x_content">
                       <table id="tbl_positions" class="table table-striped jambo_table table-bordered bulk_action datatable-checkbox" cellspacing="0" width="100%">
                        <thead>
                          <tr class="headings">
                            <th class="dark">
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">ID</th>
                            <th class="column-title">Position </th>
                            <th class="bulk-actions" colspan="3">
                              <a class="antoo" style="color:white; font-weight:500;">Positions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            <td>
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td>1</td>
                            <td>President</td>
                          </tr>
                         
                        </tbody>
                      </table>
                    </div>
          </div>
          <!--/datatable-->


           </div>
    </div>
    <!--/end of page content-->
      </div>
    </div>
@endsection