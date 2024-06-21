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
    gap:910px
    /* margin-top:5px; */
}
.pr-btn , .nt-btn{
    background-color: #fff;
    color: black;
    font-weight: bold;
    border: none;
    border-radius:5px;
    font-size: 15px;
}
.pr-btn:hover, .nt-btn:hover{
    background-color: #ededed;
}
.select{
    border: none;
    flex: auto;
    height: 38px;
    width: 112px;
    padding: 0 4px;
    border-radius: 9px;
    font-weight: 700;

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
.select1{
    width:100%;
    padding:8px;
    border:1px solid #cecece;
    border-radius:5px;
}
.modal-footer button{
    background-color:rgb(79, 209, 197);
    color:black;
   }

.out input{
    
    width: 100%;
    height: 100px;
    
}
</style>
		  
    <div class="dashboardContent">
        <h2 class="heading d-flex align-items-center justify-content-between mb-4">
            <span>Ticket</span>
            
            <!-- <button class="colorBtn"><i class="fas fa-plus"></i> Upload Document</button> -->
        </h2>
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
            <select class="select">
                                        <option>Select Team</option>
                                        <option>Team A</option>
                                        <option>Team B</option>
                                        <option>Team C</option>
                                    </select>
            </div>
            <div class="col-auto mb-3">
            <select class="select">
                                        <option>Status</option>
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
            </div>
            <div class="col-auto mb-3">
            <select class="select">
                                        <option>Deadline</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                        <option>None</option>
                                    </select>
            </div>
            <div class="col-auto mb-3">
            <select class="select">
                                        <option>Priority</option>
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
            </div>
            <div class="col-auto mb-3">
            <select class="select">
                                        <option>Select Client</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                        <option>None</option>
                                    </select>
            </div>
            
        </div>
        <div class="row">
           
            <div class="col-md-12 col-12">
                <div class="customtable">
                    <!-- <h3 class="subHeading d-flex align-items-center justify-content-between">
                        <span>Tracking Stats</span>
                       
                    </h3> -->
                    <div class="overflow ">
                        <table>
                            <tr>
                                <th>Client</th>
                                <th>Source</th>
                                <th>Nature </th>
                                <th>Team</th>
                                <th>Period</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>Ankita Sharma</td>
                                <td>Portal</td>
                                <td>Adminstrative</td>
                                <td>Salaries</td>
                                <td>April 2024</td>
                                <td>
                                    <select class="select2">
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="select2">
                                        <option>Not Stared</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td> <button type="button" class="color-btn" data-bs-toggle="modal" data-bs-target="#ticketViewModal"><i class="fas fa-eye"></i></button></td>
                            </tr>
                            <tr>
                                <td>Ankita Sharma</td>
                                <td>Portal</td>
                                <td>Adminstrative</td>
                                <td>Salaries</td>
                                <td>April 2024</td>
                                <td>
                                    <select class="select2">
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="select2">
                                        <option>Not Stared</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td> <button type="button" class="color-btn" data-bs-toggle="modal" data-bs-target="#ticketViewModal"><i class="fas fa-eye"></i></button></td>
                            </tr>
                            <tr>
                                <td>Ankita Sharma</td>
                                <td>Portal</td>
                                <td>Adminstrative</td>
                                <td>Salaries</td>
                                <td>April 2024</td>
                                <td>
                                    <select class="select2">
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="select2">
                                        <option>Not Stared</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td> <button type="button" class="color-btn" data-bs-toggle="modal" data-bs-target="#ticketViewModal"><i class="fas fa-eye"></i></button></td>
                            </tr>
                            <tr>
                                <td>Ankita Sharma</td>
                                <td>Portal</td>
                                <td>Adminstrative</td>
                                <td>Salaries</td>
                                <td>April 2024</td>
                                <td>
                                    <select class="select2">
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="select2">
                                        <option>Not Stared</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td> <button type="button" class="color-btn" data-bs-toggle="modal" data-bs-target="#ticketViewModal"><i class="fas fa-eye"></i></button></td>
                    
                            </tr>
                            <tr>
                                <td>Ankita Sharma</td>
                                <td>Portal</td>
                                <td>Adminstrative</td>
                                <td>Salaries</td>
                                <td>April 2024</td>
                                <td>
                                    <select class="select2">
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td>
                                    <select class="select2">
                                        <option>Not Stared</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td> <button type="button" class="color-btn" data-bs-toggle="modal" data-bs-target="#ticketViewModal"><i class="fas fa-eye"></i></button></td>
                            </tr>
                            <div class="modal fade" id="ticketViewModal" tabindex="-1" aria-labelledby="ticketViewModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="ticketViewModalLabel">Ticket View</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="out">
                                            <div class="hed color-grey">Client:</div>
                                            <div class="con"><b>Ankita sharma</b></div>
                                        </div>
                                        <div class="out">
                                            <div class="hed color-grey">Source:</div>
                                            <div class="con"><b>Portal</b></div>
                                        </div>
                                        <div class="out">
                                            <div class="hed color-grey">Nature:</div>
                                            <div class="con"><b>Administritive</b></div>
                                        </div>
                                        <div class="out">
                                            <div class="hed color-grey">Team:</div>
                                            <div class="con"><b>Salaries</b></div>
                                        </div>
                                        <div class="out">
                                            <div class="hed color-grey">Period:</div>
                                            <div class="con"><b>April 2024</b></div>
                                        </div>
                                        <div class="out">
                                            <div class="hed color-grey">Subject:</div>
                                            <div class="con"><b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, minima?</b></div>
                                        </div>
                                        <div class="out">
                                            <div class="hed color-grey">Priority: <span class="text-danger">*</span></div>
                                            <div class="con">
                                                <select class="select1">
                                                    <option>High</option>
                                                    <option>Low</option>
                                                    <option>Modrate</option>
                                                    <option>None</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="out">
                                            <div class="hed color-grey">Status<span class="text-danger">*</span></div>
                                            <div class="con">
                                                <select class="select1">
                                                    <option>Open</option>
                                                    <option>Close</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="out">
                                            <div class="hed color-grey">Description:</div>
                                            <div class="con"><b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, minima? Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dignissimos?</b></div>
                                        </div>
                                        <div class="out">
                                            <div class="hed color-grey">Comment :</div>
                                            <div class="con"><input type="text" id="shortDescription" name="shortDescription" placeholder="Enter Description."></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary ">Save</button>
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
        
<?php include 'includes/footer.php'; ?>
   