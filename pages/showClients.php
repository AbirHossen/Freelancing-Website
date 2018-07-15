<?php 
include 'admin_index.php';
?>
<head><title>Admin Records | FreelancerBD</title></head>

<div class="new">
        <div class="first_block"  style="margin:30px;margin-left:30px">
              <input type="text" placeholder="Input Client ID here" name="" id="">
            <input type="submit" class="" value="Search" >
    
        
        </div>
    
       

        <table border = "1" cellpadding = "5" cellspacing = "5" style="width:60%;text-align:center">
       
         <tr>
            <th >Username</th>
            <th>Name</th>
             <th>Last login</th>
             <th>Active Jobs</th>
             <th>Job Posted</th>
             <th>Completed Jobs</th>
             <th>Message</th>
             
         </tr>
         <tr>
            <td>client01</td>
            <td>abir</td>
            <td>2h ago</td>
             <td>2</td>
             <td>5</td>
             <td>50</td>
             <td><a href="message.php"><span class="glyphicon">&#x2709;</span></a> </td>
         </tr>
         <tr>
            <td>client02</td>
            <td>arafat</td>
            <td>5h ago</td>
             <td>2</td>
             <td>5</td>
             <td>39</td>
             <td> <a href="message.php"><span class="glyphicon">&#x2709;</span></a></td>
         </tr>
         <tr>
            <td>client03</td>
            <td>koushik</td>
            <td>5h ago</td>
             <td>2</td>
             <td>5</td>
             <td>30</td>

             <td> <a href="message.php"><span class="glyphicon">&#x2709;</span></a></td>
         </tr>
      </table>
    
</div>