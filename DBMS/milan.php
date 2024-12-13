<div class="container">
            <div class="col-md-12">
            <hr>
            </div>

<div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6">
                             

                        <img src=" <?php  echo $row['./sjec.jpeg'];?>" class="img-responsive">
                        </div>
                        <div class="subcontent col-md-6">                        
                            <h1 style="color:#003300 ; font-size:38px ;" ><u><strong><?php echo '<td>' . $row['event_title'] . '</td>';?></strong></u></h1><!--title-->
                            <p style="color:#003300  ;font-size:20px "><!--content-->
                            <?php
                            
                           
                            echo 'CompID:' . $row['CompID'] .'<br>'; 
                            echo 'CompName:' . $row['CompName'] .'<br>'; 
                            echo 'EventID:' . $row['EventID'] .'<br>';
                            echo 'Date:' . $row['Date'] .'<br>'; 
                    
                        ?>
                            </p>
                            
                            <br><br>
                        <?php echo
                             '<a class="btn btn-default" href="User.php"> <span class="glyphicon glyphicon-circle-arrow-right"></span>Register</a>'
                            ?>
                                                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
</div>
 </div><!--row div-->