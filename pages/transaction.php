<?php 
include 'admin_index.php';
?>
<head><title>Transactions | FreelancerBD</title></head>

<div class="new">
        
        <legend>Records of last month</legend>
        
        <table border = "1" cellpadding = "5" cellspacing = "5" style="width:60%;text-align:center">
         <tr>
            <th >Client</th>
            <th>Developer</th>
             <th>JobID</th>
             <th>Amount</th>
             <th>Time</th>
             <th>Percentage(15%)</th>
             
         </tr>
         <tr>
            <td>client01</td>
            <td>dev03</td>
            <td>graph353</td>
             <td>5000BDT</td>
             <td>5hr ago</td>
             <td>250BDT</td>
         </tr>
           <tr>
           <td>client09</td>
            <td>dev06</td>
            <td>graph353</td>
             <td>10000BDT</td>
             <td>6d ago</td>
             <td>1500BDT</td>
         </tr>
           <tr>
           <td>client06</td>
            <td>dev08</td>
            <td>embeded901</td>
             <td>20000BDT</td>
             <td>9d ago</td>
             <td>3000BDT</td>
         </tr>
      </table>
    
    <div class="new">
        <fieldset>
        <hr>

    <label for="start">Search by month</label>
    <input type="month" id="start" name="start"
           min="2018-03" value="2018-05" />
    <span class="validity"></span>

</fieldset>
         <input type="submit"   value="Search" >

    </div>
    
</div>