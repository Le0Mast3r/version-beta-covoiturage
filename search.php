<?php 
        include('includes/header.php');
        $sql="SELECT * FROM trip WHERE departure='".$_POST['from']."' AND destination ='".$_POST['to']."'";
        ?>
        
        <?php if($result = mysqli_query($con, $sql)):?>
        <?php if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)):?>
            <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Trajets</h1>
            </div>
            
        </div>
        
        
       
        <table class="table table-bordered table-striped">
        <tr>
             <th>Départ :</th>
             <th>Destination :</th>
             <th>Places :</th>
             <th>Prix :</th>
             <th>Le :</th>
             
             
            </tr>
            <tr>
             <td><?php echo $row["departure"];?></td>
             <td><?php echo $row["destination"];?></td>
             <td><?php echo $row["seatsavailable"].' '.'place(s)';?></td>
             <td><?php echo $row["price"].' '.'DH';?></td>
             <td><?php echo $row["date"];?>
             </tr>
        <?php 
        endwhile;
        }
        ?>
        <?php endif;?>  
        <?php include('includes/footer.php');?>