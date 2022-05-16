<?php include('includes/header.php');?>
    <div class="container">
        <div class="row" align="center">
            
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-3 mx-auto">
                <form action="search.php" method="post" class="form-horizontal" id="searchForm">
                    <div class="form-group">
                        <label for="">Départ</label>
                        <input type="text" class="form-control" name="from" id="from" placeholder="Départ">
                    </div>
                    <div class="form-group">
                        <label for="">Destination</label>
                        <input type="text" class="form-control" name="to" id="to" placeholder="Arrivée">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Recherche</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1 mx-auto">
                <div id="map">

                </div>
            </div>    
        </div>
    </div>
<?php include('includes/footer.php');?>