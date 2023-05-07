
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "bloodbank");  
 $sql = "SELECT * FROM camps INNER JOIN hospital ON address=city=contact=date=time";  
 $result = mysqli_query($connect, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Fetch Data from Two or more Table Join using PHP and MySql</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                          "<th>hospital</th>";
     "<th>address</th>";
   "<th>city</th>";
    "<th>contact</th>";
     "<th>date</th>";
   "<th>time</th>";
                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result)>0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["hospital"];?></td>  
                               <td><?php echo $row["adress"]; ?></td>
                               <td><?php echo $row["city"];?></td>  
                               <td><?php echo $row["contact"]; ?></td> 
                               <td><?php echo $row["date"];?></td>  
                               <td><?php echo $row["time"]; ?></td>   
                          </tr>  
                           
                     </table>  
                </div>  
           </div>  
           <br/>  
      </body>  
 </html> 