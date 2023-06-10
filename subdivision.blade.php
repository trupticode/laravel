<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script></head>
    <link rel="stylesheet" href="division.css">

    <link rel="stylesheet" href="connnection_tableformate.php">

</head>


<body>
@include('sweetalert::alert')
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class ="panel-heading text-center">
                    <h3>SubDivision Form</h3>
</div>
<div class=" panel-body">
<form action="subdivision"  method="post">
        @csrf
        <div class="form-group">
        <label class="" for="region">Region:</label></div>
        <select class="form-control" name="region" id="region">
                <option value="pune">Pune</option>
              <option value="sangli">Sangli</option>
              <option value="satara">Satara</option>
              <option value="solapur">Solapur</option>
            </select>


            <div class="form-group">
            <label class="" for="circle" >Circle:</label>
            <select class="form-control" name="circle" id="circle" >
            <option value="pune">Pune</option>
          <option value="sangli">Sangli</option>
          <option value="satara">Satara</option>
          <option value="solapur">Solapur</option>
        </select>


        <div class="form-group">
        <label class="" for="divname" >Division Name:</label>
        <select class="form-control" name="division_name" id="divname">
                <option value="pune">Pune</option>
              <option value="sangli">Sangli</option>
              <option value="satara">Satara</option>
              <option value="solapur">Solapur</option>
            </select>


            <div class="form-group">
            <label class="mrg1" for="subdivname"> Sub Division:</label>
            <input type="text" class="form-control" name="subdivision_name" id="subdivname" required>



            <div class="form-group">
            <label class="" for="add1">Address 1:</label>
            <input type="text"  class="form-control" name="address1" id="add1" required>


            <div class="form-group">
            <label class="mrg1" for="add2">Address 2:</label>
            <input type="text"  class="form-control" name="add2" required>


            <div class="form-group">
             <label class="" for="place">Place:</label>
            <input type="text"  name="place" class="form-control" id="place" required>

    
            
            <div class="form-group">
            <label class="mrg" for="mail">Email:</label>
            <input type="email"  name="email" class="form-control" id="mail" required>



            <div class="form-group">
            <label class="mrg" for="phone">Phone No:</label>
            <input type="tel"  name="phone_no"  class="form-control" id="phone" required>


            <div class="form-group ">
            <label class="" for="des">Designation:</label>
            <input type="text"  name="designation" placeholder="Deputy Engineer" id="des" class="form-control" required>

            <input type="submit" class="btn btn-primary" value="Insert/Save">
            <input type="submit" class="btn btn-primary" value="Update">

            <input type="submit" class="btn btn-primary" value="Delete">


            <input type="submit" class="btn btn-primary" value="Exit">
</div>


</div>
</form>
</div>
<div class=" panel-footer text-right">
    <small>&copy;sis infotech sangli</small>
</div>
</div>
</div>
</div>
</body>







































































<!-- <body>

    <div class="container">
    <div class="row col-md-6  col-md-offset-3">

            <div class="panel panel-primary">   
        <div class="m-2">

        <div class="panelbody">

            <form action="subdivision"  method="post">
                <div class="form-group">
@csrf



    <div class="row m-2" >

        <div class="col-12  col-xs-2 col-sm-6 col-md-5 col-lg-4 col-xl-2">
            
            <label class="" for="">Region:</label></div>
            <div class="col-12  col-xs-2 col-sm-6 col-md-7 col-lg-4 col-xl-2">

            <select class="" name="region" id="">
                <option value="pune">Pune</option>
              <option value="sangli">Sangli</option>
              <option value="satara">Satara</option>
              <option value="solapur">Solapur</option>
            </select>
        </div>
            
        </div>
    
    <div class="row m-2">

    <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
        <label class="mrg" for="circle-names" >Circle:</label></div>
        <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2 " >

        <select class="region" name="circle" id="region-names" >
            <option value="pune">Pune</option>
          <option value="sangli">Sangli</option>
          <option value="satara">Satara</option>
          <option value="solapur">Solapur</option>
        </select>
    </div>
        

    </div>
    





    <div class="row m-2">

        <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
            <label class="mrg" for="circle-names" >Division Name:</label></div>
            <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-8 col-xl-2">

            <select class="region1" name="division_name" id="region-names">
                <option value="pune">Pune</option>
              <option value="sangli">Sangli</option>
              <option value="satara">Satara</option>
              <option value="solapur">Solapur</option>
            </select>
            </div>
                        
    
        </div>
    


        <div class="row m-2">

            <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                <label class="mrg1" for="circle-names"> Sub Division:</label>
            </div>
                <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-8 col-xl-2">

                <input type="text" class="text1234_wei" name="subdivision_name" required></div>
                                            
        
            </div>
        

            <div class="row m-2">

                <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                    <label class="mrg1" for="circle-names">Address 1:</label></div>
                    <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">

                    <input type="text"  class="text_wei" name="address1" required></div>
                                                                    
            
                </div>
            
                <div class="row m-2">

                    <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                        <label class="mrg1" for="circle-names">Address 2:</label></div>
                        <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">

                        <input type="text"  class="text_wei" name="address2" required></div>
                                                                        
                
                    </div>
    
                    <div class="row m-2">

                        <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                            <label class="mrg" for="circle-names">Place:</label></div>
                            <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">

                            <input type="text"  name="place" class="text2_wei" required></div>
                                                                                                        
                    
                        </div>
        

                        <div class="row m-2">

                            <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                                <label class="mrg" for="circle-names">Email:</label></div>
                                <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">
                                    <input type="email"  name="email" class="text3_wei" required></div>
                                                                                                                                            
                        
                            </div>



                            <div class="row m-2">

                                <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                                    <label class="mrg" for="circle-names">Phone No:</label></div>
                                    <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">
                                        <input type="tel"  name="phone_no"  class="text22_wei" required></div>
                                                                                                                                                                                    
                            
                                </div>
    
                                <div class="row m-2">

                                    <div class="col-12  col-xs-2 col-sm-3 col-md-5 col-lg-4 col-xl-2">
                                        <label class="mrg  form-control" for="circle-names">Designation:</label>
                                    </div>
                                    <div class="col-12  col-xs-2 col-sm-3 col-md-7 col-lg-4 col-xl-2">

                                    <input type="text"  name="designation" placeholder="Deputy Engineer"  class="text23_wei" required><br><br>
                                    </div>                                                                                                                                                                             
                                
                                    </div>


                                    <div class="row m-2">

                                        <div class="col-12  col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 g-1">

                                                 <input type="submit" name="back" value="Back"> -->
                                                <!-- <a href="sub_division.php"> Back</a> -->

                                             
                                              
                                        <!-- </div> -->
                                        <!-- <div class="col-12  col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 g-1">
                                            <input type="submit" name="NEW" value="EDIT"/>
                                              
                                        </div> -->
                                        <!-- <div class="col-12  col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 g-1"> -->
                                          
                                            <!-- <input type="submit" name="Save" value="SAVE"/> -->
                                              
                                              
                                        <!-- </div> -->
                                        <!-- <div class="col-12  col-xs-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 g-1"> -->
                                                <!-- <input type="submit" name="Exit" value="EXIT"/> -->

                                                  <!-- <a href="#"></a> -->
                                              
                                        <!-- </div> -->
                                        <!-- //row complete -->
                                        <!-- </div> -->
                                        <!-- </div></div>
                                        </div> -->




            
<!-- </div></div>
                                </form>
                                <div class="panel-footer text-center">
                                                <small>&copy; sis infotech@sangli</small>
                                        </div>

</div>
</div>

 -->



<!-- </body> -->
</html>
