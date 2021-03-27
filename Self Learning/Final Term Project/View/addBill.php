<?php  
    include_once('../Model/db.php');
    include_once('../Partial View/header.php');
?>

<div class="content-wraper">
        <section class="content-header">
            <h1>Add Bill <small></small></h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Level</a></li>
                <li class="active"></li>
            </ol>
        </section>

        <section class="content container-fluid">
            <div class="box box-warning">
                <form action="" method="POST">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Order</div>
                    </div>

                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Patient ID</label>
                                <input type="number" class="form-control" name="P_ID" placeholder="Enter Patient ID">
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input type="datetime-local" class="form-control" name="P_ID" placeholder="Enter Patient ID">
                            </div>

                        </div>

                        <div class="box-body">
                            <div class="col-md-12">
                                <table class="table table-striped" id="orderTable"> 
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Service</th>
                                            <th>Cost</th>
                                             <th>Sessions</th>   
                                             <th>Total</th> 
                                              <th>
                                                  <button type="button" name="add" class="btn btn-success">Add</button>
                                              </th>          
                                        </tr>
                                    </thead>
                                </table>
                        </div>




                        <!-- <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Subtotal</label>
                                    <input type="number" class="form-control" name="txtSubTotal">
                                </div>

                                <div class="form-group">
                                    <label for="">Subtotal</label>
                                    <input type="number" class="form-control" name="txtSubTotal">
                                </div>
                            </div>
                        </div> -->



                        </div>

                    </div>
                        
                </form>
            </div>
        </section>

</div>