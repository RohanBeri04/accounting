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
    margin-bottom:250px;
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
                    
                </div>
               

                <!-- card section  -->
                <div class="outer mt-3 ">
                    <div class="card">
                        <div class="view">
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-download"></i>

                        </div>
                        <div class="section mt-2 ml-4">
                            <div> <p><span class="grey">File Name</span> Restraunt file </p> </div>
                            <div> <p><span class="grey">Store Name</span> Burger King</p> </div>
                            <div> <p><span class="grey">Company Name</span> Burger King </p> </div>
                            <div> <p><span class="grey">Payment Method</span> Debit card </p> </div>
                            <div> <p><span class="grey">Payment satus</span> Paid </p> </div>
                            <div> <p><span class="grey">Source</span> Web </p> </div>
                            <div> <p><span class="grey">Data upload</span> 09 jan 2024 </p> </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="view">
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-download"></i>

                        </div>
                        <div class="section mt-2 ml-4">
                            <div> <p><span class="grey">File Name</span> Restraunt file </p> </div>
                            <div> <p><span class="grey">Store Name</span> Burger King</p> </div>
                            <div> <p><span class="grey">Company Name</span> Burger King </p> </div>
                            <div> <p><span class="grey">Payment Method</span> Debit card </p> </div>
                            <div> <p><span class="grey">Payment satus</span> Paid </p> </div>
                            <div> <p><span class="grey">Source</span> Web </p> </div>
                            <div> <p><span class="grey">Data upload</span> 09 jan 2024 </p> </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="view">
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-download"></i>

                        </div>
                        <div class="section mt-2 ml-4">
                            <div> <p><span class="grey">File Name</span> Restraunt file </p> </div>
                            <div> <p><span class="grey">Store Name</span> Burger King</p> </div>
                            <div> <p><span class="grey">Company Name</span> Burger King </p> </div>
                            <div> <p><span class="grey">Payment Method</span> Debit card </p> </div>
                            <div> <p><span class="grey">Payment satus</span> Paid </p> </div>
                            <div> <p><span class="grey">Source</span> Web </p> </div>
                            <div> <p><span class="grey">Data upload</span> 09 jan 2024 </p> </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="view">
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-download"></i>

                        </div>
                        <div class="section mt-2 ml-4">
                            <div> <p><span class="grey">File Name</span> Restraunt file </p> </div>
                            <div> <p><span class="grey">Store Name</span> Burger King</p> </div>
                            <div> <p><span class="grey">Company Name</span> Burger King </p> </div>
                            <div> <p><span class="grey">Payment Method</span> Debit card </p> </div>
                            <div> <p><span class="grey">Payment satus</span> Paid </p> </div>
                            <div> <p><span class="grey">Source</span> Web </p> </div>
                            <div> <p><span class="grey">Data upload</span> 09 jan 2024 </p> </div>
                        </div>
                    </div>
                </div>
                <div class="text mt-3 ">
                    <div class="left">Showing 1 on 8 out of 8 entries</div>
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
   