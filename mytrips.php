    <?php 
    include('includes/header.php');
    $sql="SELECT * FROM trip WHERE user_id='".$_SESSION['user_id']."'";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Mes Trajets</h1>
            </div>
            
        </div>
        
        
        <div class="pull-right">
        <a href="./add.php" class="btn btn-success fa fa-plus"></a>
        </div>
        <table class="table table-bordered table-striped">
        <tr>
             <th>Départ :</th>
             <th>Destination :</th>
             <th>Places :</th>
             <th>Prix :</th>
             <th>Le :</th>
             <th></th>
             
            </tr>
            <?php if($result = mysqli_query($con, $sql)):?>
            <?php if(mysqli_num_rows($result) > 0){
                
            while($row = mysqli_fetch_array($result)):?>
            
            <tr>
             <td><?php echo $row["departure"];?></td>
             <td><?php echo $row["destination"];?></td>
             <td><?php echo $row["seatsavailable"].' '.'place(s)';?></td>
             <td><?php echo $row["price"].' '.'DH';?></td>
             <td><?php echo $row["date"];?> à <?php echo $row["time"];?></td>
        
                <td>
                    <a href="" class="btn btn-primary">Details</a>
                    <a href="editTrip.php?id=<?php echo $row['trip_id'];?>" class="btn btn-info">Editer</a>
                    <a onclick="deleteTrip(<?php echo $row['trip_id'];?>);" class="btn btn-danger">Supprimer</a>   
                </td>       
            </tr>
            <?php 
             endwhile;
    }
    ?>
    <?php endif;?> 
           </table>
           
    </div>
    <?php include('includes/footer.php');?>