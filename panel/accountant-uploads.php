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
}
.overflow{
    background-color:#fff ;
}
.text{
    display:flex;
    gap:900px
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
.card{
    width: 25%;
    border-radius: 15px;
}
.view{
    margin-left: 255px;
    font-size: 16px;
}
.section{
    font-size:1.06rem;
}
.section span{
    color:grey;
    font-weight:400;
    
}
.section p{
    font-weight:bold;
}
.view i{
    /* padding:3px; */
}
.outer{
    display:flex;
    gap:10px;
}
.overflow table td button{
    border-radius:50px;
    border:none;
    
}
.input-group{
    border:1px solid white;
    border-radius:5px;
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
.modal-content{
    padding: 10px 10px;
    width: 580px;
    height: 799px;
    top: 34px;

}   
.out{
    margin:15px 0;
}
.hed, .con{
    font-size:1em;
}

</style>
		  
<div class="container mt-3">
        <h2 class="mb-4">Accountant Uploads</h2>
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
            <div class="col-auto mb-3">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-filter"></i>
                </button>
            </div>
            <div class="col-auto mb-3">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-upload"></i>
                </button>
            </div>
            <div class="col-auto mb-3">
                <label for="from-date" class="sr-only">From Date</label>
                <input type="date" class="form-control" id="from-date" placeholder="From Date">
            </div>
            <div class="col-auto mb-3">
                <label for="to-date" class="sr-only">To Date</label>
                <input type="date" class="form-control" id="to-date" placeholder="To Date">
            </div>
           
        </div>
</div>

            <div class="col-md-12 col-12">
                <div class="customtable">
                    <h3 class="subHeading d-flex align-items-center justify-content-between">
                        
                     
                    </h3>
                    <div class="overflow">
                        <table class="col-md-12">
                            
                            <tr>
                                <th>File Name</th>
                                <th>Store Name</th>
                                <th>Comapny Name </th>
                                <th>Payment Method</th>
                                <th>Payment Status</th>
                                <th>Source</th>
                                <th>Data Upload</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>Restraunt File</td>
                                <td>Burger King</td>
                                <td>Burger King</td>
                                <td>Debit Card</td>
                                <td>Paid</td>
                                <td>
                                    Web
                                </td>
                                <td>
                                9 Jan 2024
                                </td>
                                <td>
                                    <button><i class="fas fa-download"></i></button>

                                    <button type="button" class="color-btn" data-bs-toggle="modal" data-bs-target="#viewUploadModal">  <i class="fas fa-eye"></i>  </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Restraunt File</td>
                                <td>Burger King</td>
                                <td>Burger King</td>
                                <td>Debit Card</td>
                                <td>Paid</td>
                                <td>
                                    Web
                                </td>
                                <td>
                                9 Jan 2024
                                </td>
                                <td>
                                <button><i class="fas fa-download"></i></button>

                                <button type="button" class="color-btn" data-bs-toggle="modal" data-bs-target="#viewUploadModal">  <i class="fas fa-eye"></i>  </button>
                                    </td>
                            </tr>
                            <tr>
                                <td>Restraunt File</td>
                                <td>Burger King</td>
                                <td>Burger King</td>
                                <td>Debit Card</td>
                                <td>Paid</td>
                                <td>
                                  Web
                                </td>
                                <td>
                                9 Jan 2024
                                </td>
                                <td>
                                <button><i class="fas fa-download"></i></button>

                                <button type="button" class="color-btn" data-bs-toggle="modal" data-bs-target="#viewUploadModal">  <i class="fas fa-eye"></i>  </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Restraunt File</td>
                                <td>Burger King</td>
                                <td>Burger King</td>
                                <td>Debit Card</td>
                                <td>Paid</td>
                                <td>
                                    Web
                                </td>
                                <td>
                                   9 Jan 2024
                                </td>
                                <td>
                                <button><i class="fas fa-download"></i></button>

                                <button type="button" class="color-btn" data-bs-toggle="modal" data-bs-target="#viewUploadModal">  <i class="fas fa-eye"></i>  </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Restraunt File</td>
                                <td>Burger King</td>
                                <td>Burger King</td>
                                <td>Debit Card</td>
                                <td>Paid</td>
                                <td>
                                    Web
                                </td>
                                <td>
                                    9 Jan 2024
                                </td>
                                <td>
                                <button><i class="fas fa-download"></i></button>

                                <button type="button" class="color-btn" data-bs-toggle="modal" data-bs-target="#viewUploadModal">  <i class="fas fa-eye"></i>  </button>
                                </td>
                            </tr>
                                <div class="modal fade" id="viewUploadModal" tabindex="-1" aria-labelledby="viewUploadModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="viewUploadModalLabel"> View accountant Uploads</h5>
                                                <button type="button" class="color-btn" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-xmark"></i></button>
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
                    <div class="left">Showing 1 on 8 out of 8 entries</div>
                    <div class="right">
                        <button class="pr-btn">Preview</button>
                        <button class="nt-btn">Next</button>
                    </div>
                </div>

                <!-- card section  -->
                
                
                
            </div>
        </div>  
    </div>
       
</div>
    
<?php include 'includes/footer.php'; ?>
   