<?php include ('admin_header.php');







?>     
<style>
.card
{ 
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 100px; /* Added */
        margin-top: 100px;
        width:  500px;
}
</style>        
            


                          <div class="card">
                            <div class="card-body">
             
                                 <form id = "a_login" method = "post" action = "admin_server.php">
                                         <div class="form-group">
                                           <label for="exampleInputEmail1">Email address</label>
                                           <input type="email" name = "email" class="form-control" id="L_email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                         </div>
                                         <div class="form-group">
                                           <label for="exampleInputPassword1">Password</label>
                                           <input type="password" name = "pass" class="form-control" id="l_p" placeholder="Password" required>
                                         </div>

                                         <button type="submit" name = "alogin" form = "a_login"class="btn btn-primary float-right">Log-In</button>
                                       </form>
             
                            </div>
                        </div> 
             




                    

           

            <?php include ('admin_footer.php'); ?>