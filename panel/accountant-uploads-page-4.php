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
.text{
    display:flex;
    justify-content:center;
    height:500px;
    align-items:center;
    font-weight:900;
}
.text h1{
    font-weight:bold;
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
                           
                        </table>
                        <div class="text">
                            <h1>No data at the moment   </h1>
                        </div>
                    </div>
                </div>
                

                <!-- card section  -->
              
                
                
            </div>
        </div>  
    </div>
       
</div>
    
<?php include 'includes/footer.php'; ?>
   