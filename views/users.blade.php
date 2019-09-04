@extends('Profile')
@section('body')

<form class="form-inline"> 
    <input class="form-control mr-sm-2" placeholder="Search" style="margin-left:950px"> 
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button> 
</form>
<p align="center">
   <button type="button" class="btn btn-info" style="margin-left:10px">
           <span class="glyphicon glyphicon-user" data-toggle="modal" data-target="#adduser">
               <label for="add user" style="font-family:tahoma"> Add User </label>
            </span>
    </button>
    
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#sorting" aria-expanded="false" aria-controls="sorting" align="center">SORT</button>
</p>

    <div class="collapse" id="sorting" style="margin-left:500px">
    <div class="card card-body" style="width:50%; height:50%" >
    <form action="#">

        <H6>USERTYPE:</H6>
            <div class="custom-control custom-checkbox py-sm-5 d-inline-block" >&nbsp
                <input type="checkbox" class="custom-control-input" id="ADMIN">
                <label class="custom-control-label" for="ADMIN">&nbsp ADMIN</label>
            </div>
            <div class="custom-control custom-checkbox py-sm-5 d-inline-block"> &nbsp
                <input type="checkbox" class="custom-control-input" id="CLIENTS">
                <label class="custom-control-label" for="CLIENTS"> CLIENTS</label>
            </div>
            <div class="custom-control custom-checkbox py-sm-5 d-inline-block">&nbsp 
                <input type="checkbox" class="custom-control-input" id="PERFORMERS">
                <label class="custom-control-label" for="PERFORMERS">PERFORMERS</label>
            </div>

        <H6>STATUS:</H6>   
            <div class="custom-control custom-checkbox py-sm-5 d-inline-block">&nbsp 
                <input type="checkbox" class="custom-control-input" id="VERIFIED">
                <label class="custom-control-label" for="VERIFIED">VERIFIED</label>
            </div>
            <div class="custom-control custom-checkbox py-sm-5 d-inline-block">&nbsp 
                <input type="checkbox" class="custom-control-input" id="PENDING">
                <label class="custom-control-label" for="PENDING">PENDING</label>
            </div>
                <br>
                <button type="submit" class="btn btn-info" data-toggle="button" aria-pressed="false"> Sort</button>
            </div>
    </form>    
    </div>
</div>
<br>
<br>
<br>
    <table class="table table-hover" style="max-width: 1100px; border-radius:25px" align="center"> 
        <thead > 
            <tr > 
            <th style="text-align:center" >ID</th>
            <th style="text-align:center">USERNAME</th> 
            <th style="text-align:center">FIRST NAME</th> 
            <th style="text-align:center">LAST NAME</th> 
            <th style="text-align:center">EMAIL ADDRESS</th> 
            <th style="text-align:center">USERTYPE</th>
            <th style="text-align:center">STATUS</th> 
            <th style="text-align:center">VERIFIED</th> 
            <th style="text-align:center">DATE VERIFIED</th> 
            <th style="text-align:center">ACTION</th> 
            </tr>
        </thead> 
        <tbody> 
            <tr style="text-align: center">
                <th scope="row">1</th> 
                <td>cob123</td> 
                <td>ton</td> 
                <td>Jac</td> 
                <td>Thor@gmail.com</td> 
                <td>Admin</td> 
                <td>Normal</td> 
                <td><div class="btn btn-success btn-sm">
                    <span class="glyphicon glyphicon-check"></span>
                </td> 
                <td>12-1-2019</td> 
                <td>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-pencil" 
                            data-toggle="modal" data-target="#edituser"></span>
                    </a>
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-trash" 
                            data-toggle="modal" data-target="#deleteuser"></span>
                    </a>
                </td> 
            </tr>

            <tr style="text-align: center">
                <th scope="row">3</th> 
                <td>cob123</td> 
                <td>ton</td> 
                <td>Jac</td> 
                <td>Thor@gmail.com</td> 
                <td>CLIENT</td> 
                <td>72 hour Banned</td> 
                <td><div class="btn btn-danger btn-sm disabled" >
                    <span class="glyphicon glyphicon-remove-circle"></span>
                </td> 
                <td> </td> 
                <td>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-pencil" 
                            data-toggle="modal" data-target="#edituser"></span>
                    </a>
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-trash" 
                            data-toggle="modal" data-target="#deleteuser"></span>
                    </a>
                </td> 
            </tr>

            <tr style="text-align: center">
                <th scope="row">4</th> 
                <td>cob123</td> 
                <td>ton</td> 
                <td>Jac</td> 
                <td>Thor@gmail.com</td> 
                <td>CLIENT</td> 
                <td>Account Terminated</td> 
                <td><div class="btn btn-success btn-sm">
                    <span class="glyphicon glyphicon-check"></span>
                </td> 
                <td>12-1-2019</td> 
                <td>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-pencil" 
                            data-toggle="modal" data-target="#edituser"></span>
                    </a>
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-trash" 
                            data-toggle="modal" data-target="#deleteuser"></span>
                    </a>
                </td> 
            </tr>

            <tr style="text-align: center">
                <th scope="row">5</th> 
                <td>cob123</td> 
                <td>ton</td> 
                <td>Jac</td> 
                <td>Thor@gmail.com</td> 
                <td>Performer</td> 
                <td>30 days banned</td> 
                <td><div class="btn btn-success btn-sm">
                    <span class="glyphicon glyphicon-check"></span>
                </td> 
                <td>12-1-2019</td> 
                <td><a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-pencil" 
                            data-toggle="modal" data-target="#edituser"></span>
                    </a>
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-trash" 
                            data-toggle="modal" data-target="#deleteuser"></span>
                    </a>
                </td> 
            </tr>

        
            <div class="modal fade" id="edituser" tabindex="-1" role="dialog" aria-labelledby="edituser" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="edituser"><b>EDIT USER DETAILS<b></h4>
                        <button type="button" class="close" data-dismiss="modal" style="text-align:right" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="First Name">First Name:</label>
                                <input type="text" class="form-control" id="fname">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Last Name:</label>
                                <input type="text" class="form-control" id="lname">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Username:</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Old Password:</label>
                                <input type="password" class="form-control" id="Password">
                            </div>
                            <div class="form-group">
                                <label for="pwd">New Password:</label>
                                <input type="password" class="form-control" id="Password">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Confirm Password:</label>
                                <input type="password" class="form-control" id="Password">
                            </div>
                            <div class="form-group">
                                    <label for="Usertype">Usertype:</label><br>
                                <select class="custom-select" class="form-control" id="password" style="max-width:200px;">
                                    <option value=""> </option>
                                    <option value="1">Admin</option> 
                                    <option value="2">Client</option>
                                    <option value="3">Performer</option> 
                                </select>
                            </div>
                            <div class="form-group">
                                    <label for="Usertype">Status</label><br>
                                <select class="form-control" id="password" style="max-width:200px;">
                                    <option value=""> </option>
                                    <option value="1">Remove Ban Restriction</option> 
                                    <option value="2">72 hour Ban</option> 
                                    <option value="3">30 days Ban</option>
                                    <option value="4">Account Closed</option> 
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="deleteuser" tabindex="-1" role="dialog" aria-labelledby="deleteuser" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="deleteuser"><b>DELETE USER DETAILS<b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <H5>Are you Sure you want to delete this Account?</H5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">YES</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>

                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="deleteuser" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="deleteuser"><b>ADD USER DETAILS<b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="#">
                            <div class="form-group">
                                <label for="First Name">First Name:</label>
                                <input type="text" class="form-control" id="fname">
                            </div>
                            <div class="form-group">
                                <label for="Last Name">Last Name:</label>
                                <input type="text" class="form-control" id="lname">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="Password">
                            </div>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                    <label for="Usertype">Usertype:</label><br>
                                <select class="form-control" id="password" style="max-width:200px;">
                                    <option value=""> </option>
                                    <option value="1">Admin</option> 
                                    <option value="2">Client</option>
                                    <option value="3">Performer</option> 
                                </select>
                            </div>
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">SAVE</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>

                    </div>
                    </div>
                </div>
            </div>
            

         
        </tbody>
    </table>
<br>
    <nav aria-label="pagination" align="center"> 
        <ul class="pagination"> 
            <li class="page-item disabled"> 
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item">
                <a class="page-link" href=" #">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href=" #">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href=" #">3</a>
            </li>
            <li class="page-item active"> 
                <a class="page-link" href="#">Next</a> </li> 
        </ul>
    </nav>
    
                
               
<br>

@stop
