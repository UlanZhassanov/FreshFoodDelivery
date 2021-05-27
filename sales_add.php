<!-- Sales Details -->
<div class="modal fade" id="adddetails<?php echo $row['purchaseid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delivery Address Full Details</h4></center>
            </div>
            <div class="modal-body">
                 <div class="container-fluid">
                   </h5>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Address</th>




                           
                        </thead> <div class="container-fluid">
                    <h5>Customer: <b><?php echo $row['customer']; ?></b>
                        <span class="pull-right">
                            <?php echo date('M d, Y h:i A', strtotime($row['date_purchase'])) ?>
                        </span>
                        <tbody>
                            <?php
                                $sql="select * from locations order by modified_on desc limit 1";
                                $dquery=$conn->query($sql);
                                while($drow=$dquery->fetch_array()){
                                    ?>
                                    <tr>
                                        <td><?php echo $drow['lat']; ?></td>
                                        <td><?php echo $drow['lng']; ?></td>
                                        <td><?php echo $drow['description']; ?></td>
                                        
                                    </tr>
                                    <?php
                                    
                                }
                            ?>
                           
                        </tbody>
                    </table>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
