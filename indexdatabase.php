<!-- Sales Details -->
<?php
//library phpqrcode
include "phpqrcode/qrlib.php";
include 'config.php';
 
//direktory tempat menyimpan hasil generate qrcode jika folder belum dibuat maka secara otomatis akan membuat terlebih dahulu
$tempdir = "temp/"; 
if (!file_exists($tempdir))
    mkdir($tempdir);
 
?>

            <div class="modal-body">
                <div class="container-fluid">
                    
                    <table class="table table-bordered table-striped">
                        
                        <tbody>
                            <?php
                                $sql="select * from purchase_detail left join product on product.productid=purchase_detail.productid where purchaseid='".$row['purchaseid']."'";
                                $dquery=$conn->query($sql);
                                $qr="";
                                $tot='0';
                                while($row=$dquery->fetch_array()){
                                    ?>
                                   
                                        
                                            <?php
                                           
                                            $custname = $row['custname'];
                                            $pn = $row['productname'];
                                            $price = $row['price'];
                                            $quantity = $row['quantity'];
                                            $des=$row['description'];
                                            $header= "WELCOME TO OUR CASH ON DELIVERY WEBSITE";
                                            $footer= "      THANK YOU USING OUR SERVICE      ";
                                            $line="---------------------------------------";
                                            $name=" NAME         :";
                                            $desc =" DESCRIPTION  :";
                                            $pname  =" PRODUCT NAME :";
                                            $pricee  =" PRICE PER QUANTITY       : KZT";
                                            $qntity  =" QUALITY      :";


                                            $tot=$tot+($price*$quantity);
                                            

                                            $qr =$qr.$pname." ".$pn."\n "."\n "
                                            .$desc." ".$des."\n "."\n "
                                            .$pricee." ".$price."\n "."\n "
                                            .$qntity." ".$quantity."\n "."\n "
                                            .$line."\n "."\n";



                //Nama file yang akan disimpan pada folder temp 

                                            
                                                                        ?>
                                                                        
                                     
                                    <?php
                                    
                                }
                                            $new=$header."\n "."\n ".$name." ".$custname."\n "."\n ".$line."\n".$qr."TOTAL :KZT".$tot."\n"."\n"."\n".$footer;
                                            $namafile1 = $custname.".png";
                                            //Kualitas dari QRCode 
                                            $quality1 = 'H'; 
                                            //Ukuran besar QRCode
                                            $ukuran1 = 4; 
                                            $padding1 = 0; 
                                            QRCode::png($new,$tempdir.$namafile1,$quality1,$ukuran1,$padding1);
                                            

                            ?>

                                <td style="padding: 20px;"><img src="temp/<?php echo $namafile1; ?>" width="200px"></td>                            
                        </tbody>`
                        

                    </table>

                </div>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
