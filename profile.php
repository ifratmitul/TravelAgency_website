<?php include ('header.php');
//include('pay.php');

//session_start();


if(!isset($_SESSION['uemail']))
{
  header('location: register.php');
}
 
if(isset($_GET['ulogout']))
{
    session_destroy();
    unset($_SESSION['uemail']);
    //header_remove('uemail');
    header('location: index.php');


}






?>

<style>
#pro{
    padding: 80px;
}

#p_card
{

    margin: 0 auto;
    float: none;
    padding: 30px;
    max-width: 940px;

}
#p_card .card-body{
    padding: 30px;
}
#pic{

    height: 250px;
    width: 250px;


}
   
</style>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Profile</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb ends-->
        <!-- Profile card starts-->







        <!--  Make sure profile cards contain padding of 80px around it.-->
        <section id = "pro">
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="" id  = "p_card">
          <div class="row no-gutters">
          <div class="col-md-4">
          <?php echo '<img class="rounded-circle account-img" src = "data:image/jpeg;base64,'.base64_encode($_SESSION['upic'] ).'" width=" 250" height="250">' ?>
        </div>
    <div class="col-md-8">

      <div class="card-body">


        <h3 class="card-title"><?php echo $_SESSION['fname'];?> </h3>
        <p id = "Email"> <?php echo $_SESSION['uemail'];?></p>

        <p> <?php if(isset($_SESSION['blogged'])) { echo $_SESSION['blogged'];
                                        unset($_SESSION['blogged']); } ?>
                                        
                                                                        </p>


        <p> <?php if(isset($_SESSION['pmade'])) { 
            echo $_SESSION['pmade'];
            unset($_SESSION['pmade']); } ?></p>
        
        <button class = "btn btn-warning"><a href = "logout.php">Logout</a></button>


           
            </div>
            </div>
        </div>
        </div>

        </section>


 
        
        <!-- Profile card ends-->

  
    <!-- footer part start-->
    <?php include ('footer.php'); ?>