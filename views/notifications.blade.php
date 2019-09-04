@extends('Profile')
@section('body')
<form class="form-inline" style="margin-top:-50px"> 
    <input class="form-control mr-sm-2" type="date" placeholder="Search" style="margin-left:15px"> 
    <button class="btn btn-outline-success my-2 my-sm-0 glyphicon glyphicon-search" type="submit" ></button> 
</form>
<br>
<input class="form-control-plaintext" type="text" placeholder="Selected Date:08/20/2019" readonly="Selected Date:08/20/2019" style="margin-left:15px">
<div class="list-group" style="margin:15px">
  <a href="#!" class="list-group-item list-group-item-info flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Pending Email Verification for User123</h5>
      <small class="text-muted">3 days ago
      <br>
      <Button class="btn btn-danger glyphicon glyphicon-trash" data-toggle="modal" data-target="#delreport" style="margin-top:10px;margin-left:20px"></button>
      </small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>  
  <a href="#!" class="list-group-item list-group-item-danger flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">User626 has reported user 69</h5>
      <small class="text-muted">3 days ago
      <br>
      <Button class="btn btn-danger glyphicon glyphicon-trash" data-toggle="modal" data-target="#delreport" style="margin-top:10px;margin-left:20px"></button>
      </small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  <a href="#!" class="list-group-item list-group-item-success flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">User54 has been assigned to an event</h5>
      <small class="text-muted">3 days ago
      <br>
      <Button class="btn btn-danger glyphicon glyphicon-trash" data-toggle="modal" data-target="#delreport" style="margin-top:10px;margin-left:20px"></button>
      </small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>  
  <a href="#!" class="list-group-item list-group-item-info flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago
      <br>
      <Button class="btn btn-danger glyphicon glyphicon-trash" data-toggle="modal" data-target="#delreport" style="margin-top:10px;margin-left:20px"></button>
      </small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  <a href="#!" class="list-group-item list-group-item-success flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">user 623 has been scheduled to an event</h5>
      <small class="text-muted">3 days ago
      <br>
      <Button class="btn btn-danger glyphicon glyphicon-trash" data-toggle="modal" data-target="#delreport" style="margin-top:10px;margin-left:20px"></button>
      </small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>  
  <a href="#!" class="list-group-item list-group-item-danger flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">user 626 has been terminated</h5>
      <small class="text-muted">3 days ago
      <br>
      <Button class="btn btn-danger glyphicon glyphicon-trash" data-toggle="modal" data-target="#delreport" style="margin-top:10px;margin-left:20px"></button>
      </small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
</div>

<div class="modal fade" id="delreport" tabindex="-1" role="dialog" aria-labelledby="delreport" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="delreport"><b>DELETE NOTIFICATION<b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <H5>Are you Sure you want to delete this notification?</H5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">YES</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>

                    </div>
                    </div>
                </div>
            </div>
@stop