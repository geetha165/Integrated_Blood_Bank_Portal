<?php 
include "config.php";

$blood_group = $_POST["BLOOD"];
$sql = "SELECT * FROM blood_donor WHERE BLOOD='$blood_group'";
$result = $con->query($sql);

if($result->num_rows > 0) {
    $i = 0;
    echo "<div class='table-responsive'>
            <table class='table table-striped table-bordered'>
                <tr class='text-primary'>    
                    <th>Sno</th>
                    <th>Name</th>
                    <th>Picture</th>
                    <th>Blood Group</th>
                    <th>Eligibility</th>
                    <th>Degree</th>
                    <th>Department</th>
                    <th>Year</th>
                    <th>Mobile1</th>
                    <th>Mobile2</th>
                </tr>";
    
    while($row = $result->fetch_assoc()) {
        $i++;
        $last_donation = $row["LAST_D_DATE"];
        $today = date("Y-m-d");
        $days_since_donation = date_diff(date_create($last_donation), date_create($today))->days;
        
        // Eligibility check (90 days cooldown)
        $eligibility_status = ($days_since_donation > 90) ? 
            "<span class='label label-success'>Eligible</span>" : 
            "<span class='label label-warning'>Wait ".(90 - $days_since_donation)." days</span>";
        
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>{$row["NAME"]}</td>";
        echo "<td><img src='{$row["DONOR_PIC"]}' class='don_img' height='50px' width='50px'></td>";
        echo "<td>{$row["BLOOD"]}</td>";
        echo "<td>{$eligibility_status}</td>";
        echo "<td>{$row["DEGREE"]}</td>";
        echo "<td>{$row["DEPARTMENT"]}</td>";
        echo "<td>{$row["YEAR"]}</td>";
        echo "<td>{$row["CONTACT_1"]}</td>";
        echo "<td>{$row["CONTACT_2"]}</td>";
        echo "</tr>";
    }
    
    echo "</table></div>";
} else {
    echo "<div class='alert alert-danger'><i class='fa fa-users'></i> No Donors Found for Blood Group: $blood_group</div>";
}
?>

<!-- Modal for image preview -->
<div class="modal fade" id="Mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src='' id="md_img" style="max-height: 80vh; width: auto;">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".don_img").click(function(){
            var img_src = $(this).attr("src");
            $("#md_img").attr("src", img_src);
            $("#Mymodal").modal("show");
        });
    });
</script>