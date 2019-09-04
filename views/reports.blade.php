@extends('Profile')
@section('body')

    <form class="form-inline" style="margin-top:-70px"> 
        <input class="form-control mr-sm-2" placeholder="Search Event  ID" style="margin-left:950px; margin-top:10px"> 
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" ><label class="glyphicon glyphicon-search" style="margin-top:10px"></label></button> 

       
    </form>
    
    <form action="#" align="center">
            <button type="button " class="btn btn-warning" style="margin-left:10px" data-toggle="modal" data-target="#addrep">
                <span class="glyphicon glyphicon-envelope"  style="height:20px; weight:20px">
                    </span> &nbsp Create Report</button>
    </form>
  

    <br>
    <div class="container"> 
        <div class="row">   
            <div class="col-sm">
                <div class="card" style="max-height:1000px; max-width:500px;min-height:300px; min-width:500px; margin:20px"> 
                    <img class="card-img-top" src="{{ URL::asset('img/1.jpg') }}" alt="Card image cap">
                        <div class="card-block" style="margin:5px"> 
                        <img src="{{ URL::asset('img/wn2.jpg') }}" alt="none" style="width:50px;height:50px; border-radius:30px">
                            <h4 class="card-title"> User123</h4> 
                            <h6 class="card-subtitle mb-2 text-muted">Event ID: 1412441</h6> 
                                <p class="card-text"> Some quick example complainants content. Some quick example complainants content. Some quick example complainants content. Some quick example complainants content. </p> 
                                <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#viewd">View Details</button>
                                
                                <button type="button" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#delreport">
                                </button></span>
                        </div> 
                </div>
            </div> 
                <div class="col-sm">
                    <div class="card" style="max-height:1000px; max-width:500px;min-height:300px; min-width:400px; margin:20px"> 
                        <img class="card-img-top" src="{{ URL::asset('img/wn2.jpg') }}" alt="Card image cap">
                            <div class="card-block" style="margin:5px"> 
                            <img src="{{ URL::asset('img/1.jpg') }}" alt="none" style="width:50px;height:50px; border-radius:30px">
                                <h4 class="card-title"> User123</h4> 
                                <h6 class="card-subtitle mb-2 text-muted">Event ID: 1412441</h6> 
                                    <p class="card-text"> Some quick example complainants content. Some quick example complainants content. Some quick example complainants content. Some quick example complainants content. </p> 
                                    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#viewd">View Details</button>
                                    <button type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#delreport">
                                    </button></span>
                            </div> 
                    </div>
                </div> 
                <div class="col-sm">
                    <div class="card" style="max-height:1000px; max-width:500px;min-height:300px; min-width:400px; margin:20px"> 
                        <img class="card-img-top" src="{{ URL::asset('img/wn2.jpg') }}" alt="Card image cap">
                            <div class="card-block" style="margin:5px"> 
                            <img src="{{ URL::asset('img/1.jpg') }}" alt="none" style="width:50px;height:50px; border-radius:30px">
                                <h4 class="card-title"> User123</h4> 
                                <h6 class="card-subtitle mb-2 text-muted">Event ID: 1412441</h6> 
                                    <p class="card-text"> Some quick example complainants content. Some quick example complainants content. Some quick example complainants content. Some quick example complainants content. </p> 
                                    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#viewd">View Details</button>
                                    <button type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#delreport">
                                    </button></span>
                            </div> 
                    </div>
                </div> 
                <div class="col-sm">
                    <div class="card" style="max-height:1000px; max-width:500px;min-height:300px; min-width:400px; margin:20px"> 
                        <img class="card-img-top" src="{{ URL::asset('img/1.jpg') }}" alt="Card image cap">
                            <div class="card-block" style="margin:5px"> 
                            <img src="{{ URL::asset('img/wn2.jpg') }}" alt="none" style="width:50px;height:50px; border-radius:30px">
                                <h4 class="card-title"> User123</h4> 
                                <h6 class="card-subtitle mb-2 text-muted">Event ID: 1412441</h6> 
                                    <p class="card-text"> Some quick example complainants content. Some quick example complainants content. Some quick example complainants content. Some quick example complainants content. </p> 
                                    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#viewd">View Details</button>
                                    <button type="button" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash" data-toggle="modal" data-target="#delreport">
                                    </button></span>
                            </div> 
                    </div>
                </div> 
        </div> 
    </div>
    </div>
    </div>
    
        

    




    <div class="modal fade" id="delreport" tabindex="-1" role="dialog" aria-labelledby="delreport" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="deleteuser"><b>DELETE REPORT<b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <H5>Are you Sure you want to delete this Report?</H5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success">YES</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                        </div>
                    </div>
                </div>
    </div>
    
    

            <div class="modal fade" id="viewd" tabindex="-1" role="dialog" aria-labelledby="viewd" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="viewd"><b>DETAILS<b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <form action="#">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="venue">EVENT ID:</label>
                                        <input type="text" class="form-control" id="venue" placeholder="1412441" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="venue">VENUE:</label>
                                        <input type="text" class="form-control" id="venue" placeholder="Cebu City" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="client">Client Name:  
                                            <button type="button" class="btn btn-danger"style="border-radius:50px"  data-toggle="modal" data-target="#addoff">
                                                <span class="glyphicon glyphicon-ban-circle" ></span>&nbsp BAN
                                            </button>
                                        </label>
                                        <input type="text" class="form-control" id="Cname" placeholder="Lovely son" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="Performer">Performer: 
                                            <button type="button" class="btn btn-danger"style="border-radius:50px" data-toggle="modal" data-target="#addoff" >
                                            <span class="glyphicon glyphicon-ban-circle" ></span>&nbsp BAN
                                        </button>
                                        </label>
                                        <input type="text" class="form-control" id="pname" placeholder="banned kana" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="dtext" class="form-control" id="date" placeholder="12-01-2019" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="time">Time Start:</label>
                                        <input type="text" class="form-control" id="Ftime" placeholder="10:30am" disabled>
                                        <label for="text">Time end:</label>
                                        <input type="text" class="form-control" id="Etime" placeholder="11:00pm" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment">Total PAYMENT:</label>
                                        <input type="number" class="form-control" id="Payment" placeholder="$10,000" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment">Paid:</label>
                                        <input type="number" class="form-control" id="Payment" placeholder="YES" disabled>
                                    </div>
                                </form>
                        </div>                    
                    </div>
                </div>
            </div>

                <div class="modal fade" id="addoff" aria-labelledby="addoff" aria-hidden="true" style="width:1000px">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <H5>SELECT OFFENCE</H5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-check"> 
                                    <label class="form-check-label"> 
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked=""> &nbsp  &nbsp Increase Offence </label> 
                                </div> 
                                <div class="form-check"> <label class="form-check-label"> 
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2"> &nbsp  &nbsp 1st Offence: Ban account for 72 hours </label> 
                                </div>
                                <div class="form-check"> <label class="form-check-label"> 
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3"> &nbsp  &nbsp 2nd Offence: Ban account for 30 days </label> 
                                </div>
                                <div class="form-check"> <label class="form-check-label"> 
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option4"> &nbsp  &nbsp 3rd Offence: Delete Account</label> 
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">SUBMIT</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
               
            <div class="modal fade" id="addrep" tabindex="-1" role="dialog" aria-labelledby="addrep" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="viewd"><b>REPORT DETAILS<b></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="reporter">Reported By:</label>
                                        <input type="text" class="form-control" id="reporter">
                                    </div>
                                    <div class="form-group">
                                        <label for="ID">Event ID:</label>
                                        <input type="text" class="form-control" id="eventID">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Additional Info:</label>
                                        <input type="text" class="form-control" id="comment" style="height:300px;width:460px">
                                    </div>
                                    <label for="comment">Attach evidence(Optional):</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </form>
                        </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-success">SUBMIT</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                            </div>  
                        </div>                    
                    </div>
                </div>
            </div>
        </div>

            
    
@stop
