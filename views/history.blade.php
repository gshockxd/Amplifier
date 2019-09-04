@extends('Profile')
@section('body')

    <form class="form-inline"> <input class="form-control mr-sm-2" placeholder="Search" style="margin-left:950px"> 
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button> </form>
    <center>
    <form action="#" style="margin-top:-40px">
            <button type="button " class="btn btn-outline-info" style="margin-left:10px">
                <span class="glyphicon glyphicon-user" data-toggle="modal" data-target="#addevent">
                    <label for="add user" style="font-family:tahoma"> Create Event </label></span></button>
    </form>
    </center>



<br>
<br>
<br>
    <table class="table table-bordered" style="max-width: 1200px; border-radius:25px" align="center"> 
        <thead > 
            <tr > 
            <th style="text-align:center" >EVENT ID</th>
            <th style="text-align:center">VENUE</th> 
            <th style="text-align:center">CLIENT </th> 
            <th style="text-align:center">PERFORMER</th> 
            <th style="text-align:center">DATE</th> 
            <th style="text-align:center">ACTION</th> 
            </tr>
        </thead> 
        <tbody> 
            <tr style="text-align: center">
                <th scope="row" style="text-align:center">322477P</th> 
                <td>Lancaster Hall, Cebu City</td> 
                <td>Kevin hart</td> 
                <td>The avengers</td> 
                <td>12-09-2019</td> 
                <td>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-eye-open" 
                            data-toggle="modal" data-target="#viewE"></span>
                    </a>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-trash" 
                            data-toggle="modal" data-target="#deletehistory"></span>
                    </a>
                </td> 

            </tr>

            <tr style="text-align: center">
                <th scope="row" style="text-align:center">322477P</th> 
                <td>Lancaster Hall, Cebu City</td> 
                <td>Kevin hart</td> 
                <td>The avengers</td> 
                <td>12-09-2019</td> 
                <td>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-eye-open" 
                            data-toggle="modal" data-target="#viewE"></span>
                    </a>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-trash" 
                            data-toggle="modal" data-target="#deletehistory"></span>
                    </a>
                </td> 

            </tr>

            <tr style="text-align: center">
                <th scope="row" style="text-align:center">322477P</th> 
                <td>Lancaster Hall, Cebu City</td> 
                <td>Kevin hart</td> 
                <td>The avengers</td> 
                <td>12-09-2019</td> 
                <td>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-eye-open" 
                            data-toggle="modal" data-target="#viewE"></span>
                    </a>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-trash" 
                            data-toggle="modal" data-target="#deletehistory"></span>
                    </a>
                </td> 

            </tr>

            <tr style="text-align: center">
                <th scope="row" style="text-align:center">322477P</th> 
                <td>Lancaster Hall, Cebu City</td> 
                <td>Kevin hart</td> 
                <td>The avengers</td> 
                <td>12-09-2019</td> 
                <td>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-eye-open" 
                            data-toggle="modal" data-target="#viewE"></span>
                    </a>     
                    <a href="#" class="btn btn-link btn-sm">
                    <span class="glyphicon glyphicon-trash" 
                            data-toggle="modal" data-target="#deletehistory"></span>
                    </a>
                </td> 

            </tr>

            <div class="modal fade" id="deletehistory" tabindex="-1" role="dialog" aria-labelledby="deletehistory" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="deletehistory"><b>DELETE HISTORY DETAILS<b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <H5>Are you Sure you want to delete event details?</H5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">YES</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>

                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="addevent" tabindex="-1" role="dialog" aria-labelledby="addevent" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="addevent"><b>ADD USER DETAILS<b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body">
                        <form action="#">
                            <div class="form-group">
                                <label for="venue">VENUE:</label>
                                <input type="text" class="form-control" id="venue">
                            </div>
                            <div class="form-group">
                                <label for="client">Client Name:</label>
                                <input type="text" class="form-control" id="Cname">
                            </div>
                            <div class="form-group">
                                <label for="Performer">Performer</label>
                                <input type="hidden" name="count" value="1" />
                                <div class="control-group" id="fields">
                                    <div class="controls" id="profs"> 
                                        <form class="input-append">
                                            <div id="field">
                                                <input autocomplete="off" class="form-control" id="field1" name="prof1" type="text" data-items="8"/>
                                                <button id="b1" class="btn add-more btn-outline-danger" type="button" style="margin-top:10px">+</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date">
                            </div>
                            <div class="form-group">
                                <label for="time">Time Start:</label>
                                <input type="time" class="form-control" id="Ftime">
                                <label for="text">Duration:</label>
                                <input type="text" class="form-control" id="Etime">
                            </div>
                            <div class="form-group">
                                <label for="payment">Down PAYMENT:</label>
                                <input type="number" class="form-control" id="Payment">
                            </div>
                            <div class="form-group">
                                <label for="payment">Total PAYMENT:</label>
                                <input type="number" class="form-control" id="Payment">
                            </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">SAVE</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>

                    </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="viewE" tabindex="-1" role="dialog" aria-labelledby="viewE" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="viewE"><b>EVENT DETAILS<b></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body">
                            <div class="form-group">
                                <label for="venue">Event id: </label>
                                <span><pre>&nbsp 322477P </span></pre>
                            </div>
                            <div class="form-group">
                                <label for="venue">VENUE: </label>
                                <span><pre>&nbsp Lancaster Hall, Cebu City</span></pre>
                            </div>
                            <div class="form-group">
                                <label for="client">Client Name: </label>
                                <span><pre>&nbsp Kevin hart</pre></span>
                            </div>
                            <div class="form-group">
                                <label for="Performer">Performer : </label>
                                <span><pre>&nbsp The Avengers</span></pre>
                            </div>
                            <div class="form-group">
                                <label for="date">Date : </label>
                                <span><pre>&nbsp 02-09-2019</span></pre>
                            </div>
                            <div class="form-group">
                                <label for="time">Time Start: </label>
                                <span><pre>&nbsp 6:00 am</span><br></pre>
                                <label for="time">Duration : </label>
                                <span><pre>&nbsp 3 hours</span></pre>
                            </div>
                            <div class="form-group">
                                <label for="payment">Down payment: </label>
                                <span><pre>&nbsp $5,000.00</span></pre>
                            </div>
                            <div class="form-group">
                                <label for="payment">Total payment: </label>
                                <span><pre>&nbsp $10,000.00</span></pre>
                            </div>
                            <div class="form-group">
                                <label for="payment"> Payments Made: </label>
                                <span><pre>&nbsp Full</span></pre>
                            </div>
                            <div class="form-group">
                                <label for="ratings"> Client Rating: &nbsp 
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span></label>
                            </div>
                            <div class="form-group">
                                <label for="ratings"> Performer Rating: &nbsp 
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span></label>
                            </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Exit</button>

                    </div>
                    </div>
                </div>
            </div>
            

         
        </tbody>
    </table>
    <br>
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

        <script type="text/javascript">
            $(document).ready(function()
            {
                var next = 1;
                var maxf = 5;
         

                $(".add-more").click(function(e){
                    e.preventDefault();
                    var addto = "#field" + next;
                   
                    next = next + 1;
                    var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text" style="margin-top:10px; width:100%" >';
                    var newInput = $(newIn);
                   
                    $(addto).after(newInput);
                
                    $("#field" + next).attr('data-source',$(addto).attr('data-source'));
                    $("#count").val(next);  
               
                      
                });
                

                
            });

        </script>
    </nav>

    
    
                
               
<br>

@stop
