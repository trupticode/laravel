<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="work_master.css">



    <style>
        table,th,tr
        {
            margin-bottom: 20px;
            margin-top: 20px
        }
        table
        {
            width: 100%;


        }
        tr
        {
            text-align: center;
            border: 1px solid black;
            border-collapse: collapse;
            height: 30px;


        }
        th
        {
            border: 1px solid black;

        }
        td
        {
            border: 1px solid black;

        }
        
.n1
{
    display: flex;
    display: inline-block;
    /* border: 1px solid black; */
    justify-content: space-between;
    padding-left: 850px;
    padding-top: 20px;
    margin: 0px;
}
.b
{
    
    /* padding:10px;   */
    border: 1px solid black;
    border-radius: 10px;
    /* margin: 0px; */
    /* margin-left: 150px; */
    cursor: pointer;
    height: 25px;
    width: 100px;
    text-align: center;
    padding-top: 8px;
    display: inline-block;

}
#nav
{
 background-color: lightgray;
 margin-top: 20px;
 background-size: cover;
 padding-top: 20px;
 padding-bottom: 20px;
 display: flex;


}
.navb
{
  border:2px solid;
  border-radius: 25px;
  padding: 10px;
  margin: 10px;
  cursor: pointer;
}
.nav:hover
{
  background-color: lightskyblue;
}
.div2
{
    height: 40px;
    
    width: 98%;
    border: 1px solid black;
    margin: 20px 300px 30px 10px;
    background-color: cornflowerblue;
    border-top-right-radius: 25px;
    border-bottom-right-radius: 25px;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }

  .col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
  }
  
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }
  .row
  {
    margin-left: 200px;

  }

  .row:after {
    content: "";
    display: table;
    clear: both;

  }
  #ex_name
  {
      padding-left: 100px;
      margin-left: 5px;
  }
  .btn_save
  {
      font-weight: bold;
      height: 25px;
      font-size: 15px;
  }
  
  .div-a
  {
      width: 100%;
      margin-top: 15px;
      display: inline-block;
      display: flex;
      height: 130px;
      /* border: 1px solid black; */
      border-top-right-radius: 25px;
      border-bottom-right-radius: 25px;
      border-top-left-radius: 25px;
      border-bottom-left-radius: 25px;
      background-color: cornflowerblue;

  
  }





  /* //work information tab css// */
  .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
  }

  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }

  .tab button:hover {
    background-color: #ddd;
  }

  .tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 98%;
    border-left: none;
    height: 550px;
    margin: 0px ;
  }


  .active {
    background-color: #ccc;
  }
    
/* //work information css */
.wk_info
{
  margin: 40px;
  border-bottom: 1px solid black;
}
.wk_info1
{
  margin-bottom: 40px;
}
.wk_info2
{
  margin-left: 300px;
}
  
.wk_info3
{
  margin-left: 230px;

}

.wk_info4
{
  margin-left: 150px;

}

/* //estimate form css */
.est
{
  height: 80%;
  /* border: 1px solid black; */
}
.est1
{
  height: 15%;
  border-bottom: 1px solid black;
  display: flex;
  padding: 20px;
  color: red;

}
.est2
{
  height: 60%;
  justify-content: center;
  padding-top: 40px;

}
.est3
{
  margin-left: 400px;
}
.est4
{
  margin-left: 400px;
  padding: 5px;
}

.est5
{
  margin-right: 80px;
  margin-left: 95px;

}

.est6
{
  margin-left: 80px;

}
.est7
{
  margin-left: 120px;

}








table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  border-right:  1px solid black;
}
    </style>
    <!-- <link rel="stylesheet" href="work_master.js"> -->
</head>
<body>
@include('sweetalert::alert')
    
<div class="containerd m-3">
                    <div class="m-2">

                        <div  style="text-align: right; font-size: 20px; font-weight:bold;">
                            <input type="submit" value="Find"/>
                            <input type="submit" value="New"/>

                        </div>
        
    
      <form action="workmaster"   method="post">
        @csrf
                
        <div class="row m-2">
            
            <div class="col-12  col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                <label for="div_name">Division Name:</label>
            </div>
               
                <div class="col-12  col-xs-2 col-sm-2 col-md-4 col-lg-5 col-xl-4">
                        <select id="" style="width: 400px;" name="Div" >
                            <option >Pune</option>
                            <option >Sangli</option>
                            <option >Satara</option>
                            <option >Kolhapur</option>
                        </select>
                    
                </div>
                <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                        <label for="exe_name">Work Id:</label>
                    </div>
                    <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-3">
                        <input type="number" id="wk_id" name="Work_Id">

                    </div>

            </div>
                    </div>
                









            <div class="row m-2">
            
                <div class="col-12  col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <label for="div_name">Sub Division Name:</label>
                </div>
                   
                    <div class="col-12  col-xs-2 col-sm-2 col-md-4 col-lg-5 col-xl-4">
                            <select id="" style="width: 400px;" name="Sub_Div">
                                <option >Pune</option>
                                <option >Sangli</option>
                                <option >Satara</option>
                                <option >Kolhapur</option>
                            </select>
                        
                    </div>
                    <div class="col-12  col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                        <label for="">Fund Head:</label>
                    </div>
                        <div class="col-12  col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-3">
                            <input type="text" id="" name="'F_H">
    
                        </div>
    
                </div>
                
    






                <div class="row m-2">
            
                    <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                        <label for="">Name of Work:</label>
                    </div>
                       
                        <div class="col-12  col-xs-2 col-sm-3 col-md-10 col-lg-5 col-xl-4">
                            <textarea name="Work_Nm" rows="3" cols="53">
                                 </textarea>
                         </div>
                        <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                            <label for="">Amount Put to Tender :</label>
                        </div>
                            <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                <input type="text" id="" name="Tnd_Amt">
        
                            </div>
        
                    </div>
        

    



                    <div class="row m-2">
            
                        <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                            <label for="">Agency :</label>
                        </div>
                            <div class="col-12  col-xs-2 col-sm-3 col-md-4 col-lg-5 col-xl-4">
                                <input type="text" id="" name="Agency_Nm"  style="width: 420px;" required>
                            </div>
                                <div class="col-12  col-xs-2 col-sm-3 col-md-6 col-lg-2 col-xl-2">
                                    <input type="text" id="" name="">
                                </div></div>

                                <div class="row m-2">

       
                            <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                <label for="">DSR Year:</label>
                            </div>
                                <div class="col-12  col-xs-2 col-sm-3 col-md-10 col-lg-2 col-xl-2">
                                    <input type="text" id="" name="DSR_year" >
                                    
            
                                </div>
                               
            
                        </div>
            
    
    



                       



    
    




    
        

                    </div> 
                </div>
            








                <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'work_ifo')" id="defaultOpen">Work information</button>
                            <!-- <button class="tablinks" onclick="openCity(event, 'agency')">Agency</button>
                            <button class="tablinks" onclick="openCity(event, 'Estimation')">Estimation</button>
                            <button class="tablinks" onclick="openCity(event, 'Escalation')">price Escalation</button> -->
                            <button class="tablinks" onclick="openCity(event, 'w_detail')">BoQ</button>


                          </div>
                        <!-- //work information form -->
                          <div id="work_ifo" class="tabcontent">
                            <h3>Work information</h3>
                            <!-- //main div -->



                            <div  class="wk_info">
                                <label for="" > Work Order No:</label>
                                <input type="text" id="" name="WO_No" class="wk_info1" >
                                <label for="" class="wk_info2"> Work Order Date:</label>
                                <input type="text" id="" name="Wo_Dt">
                                <label for="">(2017-2018)</label>
                            </div>



                        <div class="wk_info">
                            <label for="">Below/Above:</label>
                            <input type="text" id="" name="Above_Below" class="wk_info1">
                            <label for="">%</label>
                            <select id="" name="a/b">
                                <option  selected name="A_B_Pc">Below</option>
                                <option >Above</option>
                            </select>
                            <label for=""  class="wk_info3"> Work Order Amount:</label>
                            <input type="text" id="" name="WO_Amt">
                        </div>



                                 <div  class="wk_info">
                                    <label for="">Time Limit:</label>
                            <input type="text" id="" name="Period" class="wk_info1">
                             <label for="">month</label> 
                             <select id="" name="Perd_Unit">
                                <option  selected >Day</option>
                                <option >Month</option>
                                <option >Year</option>

                            </select>
                            <label for=""  class="wk_info4"> Stipulated Date of Completion:</label>
                            <input type="text" id="" name="Stip_Comp_Dt">
                                </div>





                                <div  class="wk_info">
                                    <label for="">Time Limit Extension:</label>
                                    <input type="text" id="" name="tm_lm_extension" class="wk_info1">
                                    <label for="">Days</label>
                                    <label for=""  class="wk_info3"> Revised Date of Completion:</label>
                                    <input type="text" id="" name="rs_dt_comp">




                                    

                                </div> 
  



                                <div  class="wk_info">
                                    <label for="">Total Expenses:</label>
                                <input type="text" id="" name="Tot_Exp"class="wk_info1">
                                <label for=""  class="wk_info2"> Actual date Completion:</label>
                                <input type="text" id="" name="actual_complete_date">
                                </div>

                               

                            </div>


                        
                          





                            <div id="w_detail" class="tabcontent">
                            <h3>Work Detail</h3>

                            <div class="container">
                                <div style="text-align: center;font-weight: bold ; color: red;">
                                <label >Bill Of Quantities</label>
                                </div>
                                <div style="text-align: right;">
                                    <input type="submit" value="Import" class="btn btn-success">
                                </div>
                                <div>
                                <table class="table-responsive" >
                                    <tr>
                                    <th>
                                <!-- <div class="row m-2"> -->
            
                                    <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-1">
                                        <label for="">Item No </label>
                                    </div>
                                </th>
                                <th>
                                    <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                        <label for="">Quantity</label>
                                    </div>
                                </th>
            

                                    <th>
                                    <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-4">
                                        <label for="">Item Of Work</label>
                                    </div>
                                    </th>

                                    <th>
                                    <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                        <label for="">Rate</label>
                                    </div>
                                </th>
            
                                <th>
                                    <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-1">
                                        <label for="">Unit </label>
                                    </div>
                                </th>


                                <th>
                                    <div class="col-12  col-xs-2 col-sm-3 col-md-2 col-lg-2 col-xl-2">
                                        <label for="">Amount</label>
                                    </div>
                                </th>
                                    </tr>
                                    
                                </table>
                                <div style="text-align: right;">
                                    <label>Total</label>
                                    <input type="text" required>
                                </div>


</div>
<div>

<button type="submit">Submit</button></div>







</form>




                                
    <script>

  
function openCity(evt, cityName) 
{
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) 
  {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++)
   {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>





</body>
</html>