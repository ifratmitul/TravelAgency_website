<?php include ('admin_header.php'); ?>


<!------ Include the above in your HEAD tag ---------->





        <div class="card" id = "admin_panel">
                <div class="card-header ">Header

                </div>
                <div class="card-body">

                    <div class="content-section">
                        <div class="media">
                          <img class="rounded-circle account-img" src="profile.png" width=" 250" height="250">
                          <div class="media-body" style="padding-left:25px;">
                            <h2 class="account-heading">Mr. Kuddus</h2>
                            <p class=" font-weight-bold">Employe</p>


                            <p><span class="font-weight-bold">Phone:</span> 123456</p>
                            <p><span class="font-weight-bold">Email:</span><a href="#"> kuddus@mokbul.com</a></p>
                            
                            
                            
                  
                  
                  
                          </div>
                  
                  
                  
                        <div class="col-md-4 align-right" >
                          <div class="content-section">
                            <h3>Your Sidebar</h3>
                            <p class='text-muted'>
                            <div class="btn-group-vertical">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Package</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#booking_modal">Booking List</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#user_modal">User List</button>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#employe_modal">Add Employe</button>
                                <button type="button" class="btn btn-primary btn-warning"> Log Out</button>

                            </div>
                                
                            </p>
                          </div>
                        </div>
                        </div>
                  

                </div>


              </div>


              <?php include ('admin_footer.php'); ?>
              <!--This section is modal or pop-up form section-->

              <!--Add package modal starts-->

                  
                  <!-- Modal -->
                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Package</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                                <form>
                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Package Title</label>
                                          <input type="text" class="form-control" id="p_title" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleFormControlSelect1">Package Location</label>
                                          <select class="form-control" id="p_location">
                                            <option>Bangladesh</option>
                                            <option>Hong Kong</option>
                                            <option>USA</option>
                                            <option>Uk</option>
                                            <option>Germeny</option>
                                          </select>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="exampleFormControlTextarea1">Details</label>
                                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                                <label for="exampleFormControlFile1">Add Location Picture</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                              </div>

                                      </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add to Database</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                  
                  <!--modal-->

               <!--Package modal ends-->


               <!--Booking List Modal Starts-->
               <div class="modal fade" id="booking_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Booking History</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                                <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>User Name</th>
                                            <th>Booking Date</th>
                                            <th>Email</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                            <td>Mary</td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                          </tr>
                                          <tr>
                                            <td>July</td>
                                            <td>Dooley</td>
                                            <td>july@example.com</td>
                                          </tr>
                                        </tbody>
                                      </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          
                        </div>
                      </div>
                    </div>
                  </div>

               <!--Booking List Modal Ends-->
               <!--user List Modal start-->

               <div class="modal fade" id="user_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">User List</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                                <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>john@example.com</td>
                                          </tr>
                                          <tr>
                                            <td>Mary</td>
                                            <td>Moe</td>
                                            <td>mary@example.com</td>
                                          </tr>
                                          <tr>
                                            <td>July</td>
                                            <td>Dooley</td>
                                            <td>july@example.com</td>
                                          </tr>
                                        </tbody>
                                      </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          
                        </div>
                      </div>
                    </div>
                  </div>

               <!-- user List modal ends-->

               <!-- Add Employe Modal Starts-->
               <div class="modal fade" id="employe_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Add Employe</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                                <form>
                                        <div class="form-group">
                                          <label for="exampleFormControlInput1">Employee Name</label>
                                          <input type="text" class="form-control" id="p_title" placeholder="First and Last Name">
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleFormControlInput1">Employee Designation</label>
                                                <input type="text" class="form-control" id="D_gtitle" placeholder="Designation/title">
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                       </div>
                                        <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                         </div>
                                         <div class="form-group">
                                                <label for="exampleInputPassword1"> Confirm Password</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                         </div>
                                        


                                        <div class="form-group">
                                                <label for="exampleFormControlFile1">Add Profile Picture</label>
                                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                              </div>

                                      </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add Employe Details to Database</button>
                        </div>
                      </div>
                    </div>
                  </div>


               <!-- Add Employe Modal Ends-->