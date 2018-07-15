<?php 
include 'admin_index.php';
?>
<head><title>Admin Home | FreelancerBD</title></head>


<div class="new">
    <legend>Logged in as : admin00</legend>
    <legend>Login time: 2hr</legend>
    <legend>Past Actions:</legend>
    
    
    <div>
     <fieldset>
        <hr>

         <label for="start">Search by month</label>
        <input type="month" id="start" name="start"
           min="2018-03" value="2018-05" />
        <span class="validity"></span>
         
         <input type="submit"   value="Search" >

</fieldset>
        <table class="table" style="width:1000px">
            <tr>
                <th>ActionID</th>
                <th>Action Detail</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>001</td>
                <td>Deleted Report</td>
                <td>1minute ago</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Warned Developer</td>
                <td>5minute(s) ago</td>
            </tr>
            <tr>
                <td>003</td>
                <td>Deleted Pending Post</td>
                <td>7minute(s) ago</td>
            </tr>
            <tr>
                <td>004</td>
                <td>Removed a Developer</td>
                <td>9minute(s) ago</td>
            </tr>
        </table>
    </div>

</div>