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
</style>
		  
<div class="container mt-3">
        <h2 class="mb-4">Accountant Document</h2>
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
            <div class="col-auto mb-3">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-list"></i>
                </button>
            </div>
            <div class="col-auto mb-3">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-th"></i>
                </button>
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

                                    <button><i class="fas fa-eye"></i></button>
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

                                    <button><i class="fas fa-eye"></i></button>
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

                                    <button><i class="fas fa-eye"></i></button>
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

                                    <button><i class="fas fa-eye"></i></button>
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

                                    <button><i class="fas fa-eye"></i></button>
                                </td>
                            </tr>
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
   