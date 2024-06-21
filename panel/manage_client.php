<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<style>
    body{
        color:black;
        background-color:#ededed;
    }
   h2{
    font-weight:bold;
   }
   .input-group {
    flex:auto;
    width: 400px;
    border:none;
}
.overflow{
    background-color:#fff ;
}
.text{
    display:flex;
    gap:930px
    /* margin-top:5px; */
}
.pr-btn , .nt-btn{
    background-color: #fff;
    color: black;
    font-weight: bold;
    border: none;
    border-radius:5px;
    font-size: 14px;
}
.pr-btn:hover, .nt-btn:hover{
    background-color: #ededed;
}
.overflow table td button{
    border-radius:50px;
    border:none;
}
 h5{
    font-weight:bold;
} 
.modal-footer button{
    background-color:rgb(79, 209, 197);
    color:black;
   }
   .modal-body p i{
    color:rgb(79, 209, 197);
   }
.out{
    margin:15px 0;
}
.hed, .con{
    font-size:1em;
}

</style>
		  
<div class="container mt-3">
        <h2 class=" heading d-flex align-items-center justify-content-between  mb-4">
        <span>Manage  Clients</span>
        <button class="colorBtn"  type="button" data-bs-toggle="modal" data-bs-target="#addClientModal"><i class="fas fa-plus"></i> Add Client</button> 
        </h2>   
         

  <div class="modal fade" id="addClientModal" tabindex="-1" aria-labelledby="addClientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addClientModalLabel">Add Client</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="clientName" class="form-label">Add Photo <span class="text-danger">*</span></label>
              <br>
              <img src="https://cdn-icons-png.flaticon.com/128/7002/7002154.png" alt="" class="rounded-circle h-25 w-25">
              
            </div>
            <div class="mb-3">
              <label for="clientName" class="form-label">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="clientName" aria-describedby="clientNameHelp" placeholder="First name">
              
            </div>
            <div class="mb-3">
              <label for="clientName" class="form-label">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="clientName" aria-describedby="clientNameHelp" placeholder="Last name">
              
            </div>
            <div class="mb-3">
              <label for="clientEmail" class="form-label">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="clientEmail" aria-describedby="clientEmailHelp" placeholder="email">
             
            </div>
            <div class="mb-3">
              <label for="clientEmail" class="form-label">Contact No <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="clientEmail" aria-describedby="clientEmailHelp" placeholder="Contact No">
             
            </div>
            <div class="mb-3">
              <label for="clientEmail" class="form-label">Company <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="clientEmail" aria-describedby="clientEmailHelp" placeholder="Companny Name">
             
            </div>
            <div class="mb-3">
              <label for="clientEmail" class="form-label">VAT Details<span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="clientEmail" aria-describedby="clientEmailHelp" placeholder="VAT Details">
             
            </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Save </button>
           
        </div>
      </div>
    </div>
  </div>
        
        <div class="row align-items-center">
            <div class="col-auto mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
</div>

            <div class="col-md-12 col-12">
                <div class="customtable">
                    <h3 class="subHeading d-flex align-items-center justify-content-between">
                        
                     
                    </h3>
                    <div class="overflow">
                        <table class=" col-md-12">
                            
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Created Date</th>
                                <th>Acion</th>
                                <th>Block / Unblock</th>
                               
                            </tr>
                            <tr>
                                <td><img src="https://yt3.ggpht.com/zacqRbSg838WT96hMSp99NenXV85OjGWNqvUVvmW47Hw5fKR0wT_B49UClNGKCac7psVzr8N=s88-c-k-c0x00ffffff-no-rj" alt="" class="rounded-circle " style="height:40px; width:40px;">
                                        Ankita Sharma</td>
                                <td>ankitasharma@gmail.com</td>
                                <td>90909009090</td>
                                <td>9 Jan 2024</td>
                                <td>

                                   <button  type="button" data-bs-toggle="modal" data-bs-target="#editClientModal"> <i class="fas fa-edit"></i></button>
                                   
                                            <div class="modal fade" id="editClientModal" tabindex="-1" aria-labelledby="addClientModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="editClientModalLabel">Edit Client Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form>
                                                        <div class="mb-3">
                                                        <label for="clientName" class="form-label">Add Photo <span class="text-danger">*</span></label>
                                                        <br>
                                                        <img src="https://cdn-icons-png.flaticon.com/128/7002/7002154.png" alt="" class="rounded-circle h-25px w-25px">
                                                        
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="clientName" class="form-label">First Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="clientName" aria-describedby="clientNameHelp" placeholder="First name">
                                                        
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="clientName" class="form-label">Last Name <span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="clientName" aria-describedby="clientNameHelp" placeholder="Last name">
                                                        
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="clientEmail" class="form-label">Email <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="clientEmail" aria-describedby="clientEmailHelp" placeholder="email">
                                                        
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="clientEmail" class="form-label">Contact No <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="clientEmail" aria-describedby="clientEmailHelp" placeholder="Contact No">
                                                        
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="clientEmail" class="form-label">Company <span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="clientEmail" aria-describedby="clientEmailHelp" placeholder="Companny Name">
                                                        
                                                        </div>
                                                        <div class="mb-3">
                                                        <label for="clientEmail" class="form-label">VAT Details<span class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="clientEmail" aria-describedby="clientEmailHelp" placeholder="VAT Details">
                                                        
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary">Save </button>
                                                    
                                                    </div>
                                                </div>
                                                </div>
                                            </div>

                                    <button data-bs-toggle="modal" data-bs-target="#deleteClientModal" data-client-id="1"><i class="text-danger fas fa-trash"></i></button>
                                </td>
                                <td>
                                <button data-bs-toggle="modal" data-bs-target="#banClientModal" data-client-id="1"><i class="text-danger fas fa-ban"></i> </button></td>
                               
                            </tr>
                            <tr>
                                <td><img src="https://yt3.ggpht.com/zacqRbSg838WT96hMSp99NenXV85OjGWNqvUVvmW47Hw5fKR0wT_B49UClNGKCac7psVzr8N=s88-c-k-c0x00ffffff-no-rj" alt="" class="rounded-circle " style="height:40px; width:40px;">  Ankita Sharma</td>
                                <td>ankitasharma@gmail.com</td>
                                <td>90909009090</td>
                                <td>9 Jan 2024</td>
                                <td> <button type="button" data-bs-toggle="modal" data-bs-target="#editClientModal"><i class="fas fa-edit"></i></button>

                                    <button data-bs-toggle="modal" data-bs-target="#deleteClientModal" data-client-id="1"><i class="text-danger fas fa-trash"></i></button>
                                    <div class="modal fade" id="deleteClientModal" tabindex="-1" aria-labelledby="deleteClientModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content text-sm">
                                            <div class="modal-header align-items-center justify-content-center">
                                            <!-- <h5 class="modal-title" id="deleteClientModalLabel">Delete Client Confirmation</h5> -->
                                            <img src="https://cdn-icons-png.flaticon.com/128/179/179386.png" alt="Danger Icon" class="danger-icon d-flex align-items-center justify-content-center h-25 w-25">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <h3><b>Are you sure to delete the client?</b></h3> <span id="client-name"></span>
                                            </div>
                                            <div class="modal-footer d-flex alignn-items-center justify-content-center">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger delete-confirmed" data-client-id="">Confirm</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                                                    </td>
                                <td>
                                <button data-bs-toggle="modal" data-bs-target="#banClientModal" data-client-id="1"> <i class="text-danger fas fa-ban"></i> </button>
                                <div class="modal fade" id="banClientModal" tabindex="-1" aria-labelledby="deleteClientModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content text-sm">
                                            <div class="modal-header align-items-center justify-content-center">
                                            <!-- <h5 class="modal-title" id="deleteClientModalLabel">Delete Client Confirmation</h5> -->
                                            <img src="https://cdn-icons-png.flaticon.com/128/179/179386.png" alt="Danger Icon" class="danger-icon d-flex align-items-center justify-content-center h-25 w-25">

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <h3><b>Are you sure to Block the client?</b></h3> <span id="client-name"></span>
                                            </div>
                                            <div class="modal-footer d-flex alignn-items-center justify-content-center">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-danger delete-confirmed" data-client-id="">Delete</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><img src="https://yt3.ggpht.com/zacqRbSg838WT96hMSp99NenXV85OjGWNqvUVvmW47Hw5fKR0wT_B49UClNGKCac7psVzr8N=s88-c-k-c0x00ffffff-no-rj" alt="" class="rounded-circle " style="height:40px; width:40px;">  Ankita Sharma</td>
                                <td>ankitasharma@gmail.com</td>
                                <td>90909009090</td>
                                <td>9 Jan 2024</td>
                                <td><button type="button" data-bs-toggle="modal" data-bs-target="#editClientModal"><i class="fas fa-edit"></i></button>

                                   <button data-bs-toggle="modal" data-bs-target="#deleteClientModal" data-client-id="1"> <i class="text-danger fas fa-trash"></i</button>
                                </td>
                                <td>
                               <button data-bs-toggle="modal" data-bs-target="#banClientModal" data-client-id="1"> <i class="text-danger fas fa-ban"></i> </button>
                                </td>
                                
                            </tr>
                            <tr>
                                <td><img src="https://yt3.ggpht.com/zacqRbSg838WT96hMSp99NenXV85OjGWNqvUVvmW47Hw5fKR0wT_B49UClNGKCac7psVzr8N=s88-c-k-c0x00ffffff-no-rj" alt="" class="rounded-circle " style="height:40px; width:40px;">  Ankita Sharma</td>
                                <td>ankitasharma@gmail.com</td>
                                <td>90909009090</td>
                                <td>9 Jan 2024</td>
                                <td><button type="button" data-bs-toggle="modal" data-bs-target="#editClientModal"><i class="fas fa-edit"></i></button>

                                    <button data-bs-toggle="modal" data-bs-target="#deleteClientModal" data-client-id="1"><i class="text-danger fas fa-trash"></i></button>
                                </td>
                                <td>
                                <button data-bs-toggle="modal" data-bs-target="#banClientModal" data-client-id="1"><i class="text-danger fas fa-ban"></i> </button></td>
                               
                            </tr>
                            <tr>
                                <td><img src="https://yt3.ggpht.com/zacqRbSg838WT96hMSp99NenXV85OjGWNqvUVvmW47Hw5fKR0wT_B49UClNGKCac7psVzr8N=s88-c-k-c0x00ffffff-no-rj" alt="" class="rounded-circle " style="height:40px; width:40px;">  Ankita Sharma</td>
                                <td>ankitasharma@gmail.com</td>
                                <td>90909009090</td>
                                <td>9 Jan 2024</td>
                                <td><button type="button" data-bs-toggle="modal" data-bs-target="#editClientModal"><i class="fas fa-edit"></i></button>
 
                                    <button data-bs-toggle="modal" data-bs-target="#deleteClientModal" data-client-id="1"><i class="text-danger fas fa-trash"></i></button>
                                </td>
                                <td>
                                <button data-bs-toggle="modal" data-bs-target="#banClientModal" data-client-id="1"><i class="text-danger fas fa-ban"></i>  </button>
                                </td>
                                
                            </tr>

                                    <div class="modal fade" id="viewUploadModal" tabindex="-1" aria-labelledby="viewUploadModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewUploadModalLabel"> View client Uploads</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-xmark"></i></button>
                                        </div>
                                        <div class="modal-body">

                                            <div class="out">
                                            <div class="hed">File Name:</div>
                                            <div class="con"> <b> Restraunt File </b></div>
                                            </div>


                                            <div class="out"> 
                                                <div class="hed">Store Name:</div>
                                            <div class="con"> <b> Restraunt File </b></div>
                                            </div>

                                            <div class="out">
                                            <div class="hed">Company Name:</div>
                                            <div class="con"> <b> Restraunt File </b></div>
                                            </div>

                                            <div class="out">
                                            <div class="hed">Payment Method:</div>
                                            <div class="con"> <b> Restraunt File </b></div>
                                            </div>

                                            <div class="out">
                                            <div class="hed">Payment Status:</div>
                                            <div class="con"> <b> Restraunt File </b></div>
                                            </div>

                                            <div class="out">
                                            <div class="hed">Source:</div>
                                            <div class="con"> <b> Restraunt File </b></div>
                                            </div>

                                            <div class="out">
                                            <div class="hed">Date Upload:</div>
                                            <div class="con"> <b> Restraunt File </b></div>
                                            </div>

                                            <div class="out">
                                            <div class="hed">Attachment:</div>
                                            <div class="con"> <b> Restraunt File </b></div>
                                            </div>

                                                
                                            <div class="out">
                                            <div class="hed">Description</div>
                                            <div class="con"><b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt nisi ipsum vero distinctio nostrum doloribus accusantium quos sed rem laudantium.</b></div>
                                            </div>
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </table>
                    </div>
                </div>
                <div class="text mt-3">
                    <div class="left">Showning 1 to 8 of 8 entries</div>
                    <div class="right">
                        <button class="pr-btn">Preview</button>
                        <button class="nt-btn">Next</button>
                    </div>
                </div>
            </div>
            
        </div>  
    </div>
       
</div>
    
<?php include 'includes/footer.php'; ?>
   