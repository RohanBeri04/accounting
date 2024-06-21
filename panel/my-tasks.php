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
.overflow td i{
    gap:12px;
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
</style>
		  
    <div class="dashboardContent">
        <h2 class="heading d-flex align-items-center justify-content-between mb-4">
            <span>My Tasks</span>
            
            <button class="colorBtn"><i class="fas fa-plus"></i>New Task</button>
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
            <div class="col-auto mb-3">
                <button class="btn btn-outline-secondary" type="button">
                <i class="fas fa-refresh"></i>  </a>
                </button>
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
                                <th>Title</th>
                                <th>Due Date</th>
                                <th>Stage</th>
                                <th>Priority</th>
                                <th>Client</th>
                                <th>Assigned to</th>                               
                                <th>Action</th>
                            </tr>
                            <tr>
                                <td>Invoice Documentation</td>
                                <td>April 2024</td>
                                <td>  <select class="select2">
                                        <option>Not started</option>
                                        <option>in hold</option>
                                        <option>on progress</option>
                                        <option>None</option>
                                    </select></td>
                                <td>  <select class="select2">
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                        <option>None</option>
                                    </select></td>
                                <td>Ankita Sharma</td>
                                <td>
                                   Abhinav Singh
                                </td>
                                <td>
                                <button><i class="fas fa-eye"></i></button>
                                 <button><i class="fas fa-edit"></i></button>
                                </td>
                                <!-- <td> <i class="fas fa-eye"></i></td> -->
                            </tr>
                            <tr>
                                <td>Invoice Documentation</td>
                                <td>April 2024</td>
                                <td>  <select class="select2">
                                        <option>Not Started</option>
                                        <option>On Hold</option>
                                        <option>In progress</option>
                                        <option>None</option>
                                    </select></td>
                                <td>  <select class="select2">
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select></td>
                                <td>Ankita Sharma</td>
                                <td>
                                    Abhinav Singh
                                </td>
                                <td>
                                 <button><i class="fas fa-eye"></i></button>
                                 <button><i class="fas fa-edit"></i></button>
                                </td>
                                <!-- <td> <i class="fas fa-eye"></i></td> -->
                            </tr>
                            <tr>
                                <td>Invoice Documentation</td>
                                <td>April 2024</td>
                                <td>  <select class="select2">
                                        <option>Not Started</option>
                                        <option>On Hold</option>
                                        <option>In progress</option>
                                        <option>None</option>
                                    </select></td>
                                <td>  <select class="select2">
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select></td>
                                <td>Ankita Sharma</td>
                                <td>
                                    Abhinav Singh
                                </td>
                                <td>
                                <button><i class="fas fa-eye"></i></button>
                                 <button><i class="fas fa-edit"></i></button>
                                </td>
                                <!-- <td> <i class="fas fa-eye"></i></td> -->
                            </tr>
                            <tr>
                                <td>Invoice Documentation</td>
                                <td>April 2024</td>
                                <td>  <select class="select2">
                                        <option>Not Started</option>
                                        <option>On Hold</option>
                                        <option>In progress</option>
                                        <option>None</option>
                                    </select></td>
                                <td>  <select class="select2">
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select></td>
                                <td>Ankita Sharma</td>
                                <td>
                                    Abhinav Singh
                                </td>
                                <td>
                                <button><i class="fas fa-eye"></i></button>
                                 <button><i class="fas fa-edit"></i></button>
                                </td>
                                <!-- <td> <i class="fas fa-eye"></i></td> -->
                    
                            </tr>
                            <tr>
                                <td>Invoice Documentation</td>
                                <td>April 2024</td>
                                <td>
                                <select class="select2">
                                        <option>Not Started</option>
                                        <option>On Hold</option>
                                        <option>In progress</option>
                                        <option>None</option>
                                    </select>
                                </td>
                                <td>  <select class="select2">
                                        <option>High</option>
                                        <option>Low</option>
                                        <option>Modrate</option>
                                        <option>None</option>
                                    </select></td>
                                <td>Ankita Sharma</td>
                                <td>
                                  Abhinav Singh
                                </td>
                                <td>
                                <button><i class="fas fa-eye"></i></button>
                                 <button><i class="fas fa-edit"></i></button>
                                </td>
                                <!-- <td> <i class="fas fa-eye"></i></td> -->
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
        
<?php include 'includes/footer.php'; ?>
   