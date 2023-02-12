<?php 
require 'connect.php';
$id = $_GET['id'];
                                        $qry=mysqli_query($con,"SELECT * from chat where tid = $id");
                                        while($rw = mysqli_fetch_array($qry)){
                                            $tid = $rw['tid'];
                                            $name = $rw['name'];
                                            $position = $rw['position'];
                                            $msg = $rw['msg'];
                                            $dtm = $rw['dtm'];

                                            
                                        ?>

 <!--CB-->
 <div class="d-flex align-items-baseline mb-4">
                                                <!--Avatar-->
                                                
                                                <div class="position-relative avatar">
                                                    <img src="res-chatbot/itro.png"
                                                        class="img-fluid rounded-circle" alt="">
                                                    <span
                                                        class="position-absolute bottom-0 start-100 translate-middle p-1 ">
                                                        <span class="visually-hidden">New alerts</span>
                                                    </span>
                                                </div>
                                                
                                                <!--Message-->
                                                <div class="pe-2">
                                                    <div>
                                                        <div class="card card-text d-inline-block p-2 px-3 m-1"><?=$rw['msg']?></div>
                                                    </div>
                                                    <div>
                                                        <div class="small"><?=$rw['dtm']?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="height:5%;"></div>


<?php }
                                        ?>

