
<?php session_start();
include "inc/header.php"; 
      //include "dbconect.php";

      //$note = $_REQUEST['note'];  
?>


    <!-- Section -->

    <section class="section">					
        <div class=" pubg">
            <h1 class="gamer-1">I am a gamer </h1>
            <h1 class="gamer">not because i have no life</h1>
            <h1 class="gamer"> but because i choose to have many</h1>
        </div>
    </section>

    <!-- Contact -->
    <div class="row coment">
        <div class="col-lg-8 col-md-8 col-sm-8">

            <?php
                if(isset($_SESSION['status'])) 
                {
                    ?>
                    
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                         <?php echo $_SESSION['status']; ?>
                    </div>

                <?php
                    unset($_SESSION['status']);
                }

                //if(isset($_SESSION['status'])) {
                   // echo "<h4>".$_SESSION['status']."</h4>";
                   // unset($_SESSION['status']);
                //}
            ?>

            <div class="container cont-form">
                <h2>Contact us</h2>

                <?php  

                    //if(isset($_SESSION['success']) && $_SESSION['success'] !='')            
                    //{
                    ?>
        

                        <script>
                            //swal({
                                //title: "<?php echo $_SESSION['success']?>",
                                //text:"You clicked the button!",
                                //icon:"success",
                                //button:"Aw yiss!",
                            //});
                        </script>
                    <?php
                        //unset($_SESSION['success']);
                    //}
                    //if($note == 'success') {
                        //echo "Successfully!";
                    //}
                ?>
                <script>
                    //swal("Successfully!");
                </script>

                <form action="contact_process.php" method="post" name="contact" class="form-input">
                    <input class="focus-only" type="text" name="fname" placeholder="First Name">

                    <input class="focus-only" type="text" name="lname" placeholder="Last Name">
                    
                    <input class="focus-only" type="email" name="email" placeholder="Email Address">
                    
                    <br>

                    <textarea class="focus-only" name="message" placeholder="Message" style="height:200px"></textarea>
                    <br>

                    <input type="submit" name="insert_data" value="Send">
                </form>
            </div>
        </div>
    </div>

    <section class="">
        <div id="map"></div>
    </section>

    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
<?php include "inc/footer.php"; ?>
    