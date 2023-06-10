<html>
   
   <head>
      <title>View WorkMaster Records</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script></head>
    <link rel="stylesheet" href="division.css">

    <link rel="stylesheet" href="connnection_tableformate.php">



   </head>
   

   <body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Work-Master Record Display</h3>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <td>Work Id</td>
                              <td>Division Name</td>

                              <td>Sub Division Name</td>
                              <td>Fund Head</td>
                              <td>Name of Work</td>
                              <td>Amount Put to Tender</td>
                              <td>Agency :</td>
                              <td>DSR Year</td>
                              <td> Work Order No</td>
                              <td>Work Order Date</td>
                              <td>Below/Above:</td>
                              <td>a/b</td>
                              <td>Work Order Amount</td>
                              <td>Time Limit</td>
                              <td>Perd_Unit</td>
                              <td>Stipulated Date of Completion</td>
                              <td>Total Expenses</td>
                              <td>actual_complete_date</td>
                              <td colspan=3 text align="center">Action</td>




                            </tr>
                        </thead>
                        <tbody>
                            @foreach  ($users as $user)
                            <tr>
                            <td>{{ $user->Work_Id }}</td>

                            <td>{{ $user->Div }}</td>
                           <td>{{ $user->Sub_Div }}</td>
                           <td>{{ $user->F_H }}</td>
                           <td>{{ $user->Work_Nm }}</td>
                           <td>{{ $user->Tnd_Amt }}</td>
                           <td>{{ $user->Agency_Nm }}</td>
                           <td>{{ $user->DSR_year }}</td>
                           <td>{{ $user->WO_No }}</td>
                           <td>{{ $user->Wo_Dt }}</td>
                           <td>{{ $user->Above_Below }}</td>
                           <td>{{ $user->A_B_Pc }}</td>
                           <td>{{ $user->WO_Amt }}</td>
                           <td>{{ $user->Period }}</td>
                           <td>{{ $user->Perd_Unit }}</td>
                           <td>{{ $user->Stip_Comp_Dt }}</td>
                           <td>{{ $user->Tot_Exp }}</td>
                           <td>{{ $user->actual_complete_date }}</td>





                                <td>
                                    <a href="" class="btn btn-primary btn-sm">View</a>
                                </td>

                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                                
                            </tr>
                        </tbody>
                        @endforeach

                    </table>
                    <div class=" text-right">
    <small>&copy;sis infotech sangli</small>
</div>


                </div>
            </div>
        </div>
    </div>
</div>





































   <!-- <body>
      <h2>Work Master Record</h2>
      <table border = 1>
         <tr>
            <td>Division Name</td>
            <td>Work Id</td>
            <td>Sub Division Name</td>
            <td>Fund Head</td>
            <td>Name of Work</td>
            <td>Amount Put to Tender</td>
            <td>Agency :</td>
            <td>DSR Year</td>
            <td> Work Order No</td>
            <td>Work Order Date</td>
            <td>Below/Above:</td>
            <td>a/b</td>
            <td>Work Order Amount</td>
            <td>Time Limit</td>
            <td>Perd_Unit</td>
            <td>Stipulated Date of Completion</td>
            <td>Total Expenses</td>
            <td>actual_complete_date</td>

         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->Div }}</td>
            <td>{{ $user->Work_Id }}</td>
            <td>{{ $user->Sub_Div }}</td>
            <td>{{ $user->F_H }}</td>
            <td>{{ $user->Work_Nm }}</td>
            <td>{{ $user->Tnd_Amt }}</td>
            <td>{{ $user->Agency_Nm }}</td>
            <td>{{ $user->DSR_year }}</td>
            <td>{{ $user->WO_No }}</td>
            <td>{{ $user->Wo_Dt }}</td>
            <td>{{ $user->Above_Below }}</td>
            <td>{{ $user->A_B_Pc }}</td>
            <td>{{ $user->WO_Amt }}</td>
            <td>{{ $user->Period }}</td>
            <td>{{ $user->Perd_Unit }}</td>
            <td>{{ $user->Stip_Comp_Dt }}</td>
            <td>{{ $user->Tot_Exp }}</td>
            <td>{{ $user->actual_complete_date }}</td>




         </tr>
         @endforeach
      </table> -->
   </body>
</html>







