<?php
/*
|--------------------------------------------------------------------------
| Controller
|--------------------------------------------------------------------------
|
*/
_auth();
$ui->assign('selected_navigation', 'contacts');
$ui->assign('_title', $_L['Accounts'] . '- ' . $config['CompanyName']);
$action = $routes['1'];
$user = User::_info();
$ui->assign('user', $user);
switch ($action) {
    case 'user':
        $id = $routes['2'];
        $id = str_replace('_tr', '', $id);

        echo ' <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Responsive</h4>
  </div>
  <div class="modal-body">
  <div class="row">
            <div class="col-md-6">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" id="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Active</label>
                        <div class="col-sm-10">
                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary btn-outline active">
                                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Yes
                                </label>
                                <label class="btn btn-primary btn-outline">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> No
                                </label>

                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Access Level</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>Full Access</option>
                                <option>Sales</option>

                            </select>
                        </div>
                    </div>




                </div>
            </div>
        </div>
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-default">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>';

        break;

    default:
        echo 'action not defined';
}
