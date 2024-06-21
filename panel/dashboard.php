<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<style>
   .modal-footer button{
    background-color:rgb(79, 209, 197);
    color:black;
   }
   .modal-body p i{
    color:rgb(79, 209, 197);
   }
</style>
		  
    <div class="dashboardContent">
        <h2 class="heading d-flex align-items-center justify-content-between mb-4">
            <span>Dashboard</span>
            <button class="colorBtn"  type="button" data-bs-toggle="modal" data-bs-target="#imageUploadModal"><i class="fas fa-plus"></i> Upload Document</button>

                    <div class="modal fade" id="imageUploadModal" tabindex="-1" aria-labelledby="imageUploadModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageUploadModalLabel">Success</h5>
                            </div>
                            <div class="modal-body">
                                <p><i class="fas fa-check-circle"></i> Document uploaded successfully!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
        </h2>
        <div class="row">
            <div class="col-md-4 col-12">
                <div class="calendar calendar-first pb-0" id="calendar_first">
                    <div class="calendar_header">
                        <h2></h2>
                        <div class="d-flex">
                            <button class="switch-month switch-left"><img src="../images/left.png"/></button>
                            <button class="switch-month switch-right"> <img src="../images/right.png"/></button>
                        </div>
                    </div>
                    <div class="calendar_weekdays"></div>
                    <div class="calendar_content"></div>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="customtable">
                    <h3 class="subHeading d-flex align-items-center justify-content-between">
                        <span>Tracking Stats</span>
                        <button class="colorBtn">VIEW ALL</button>
                    </h3>
                    <div class="overflow">
                        <table>
                            <tr>
                                <th>Client</th>
                                <th>Source</th>
                                <th>Nature </th>
                                <th>Team</th>
                                <th>Period</th>
                                <th>Priority</th>
                                <th>Status</th>
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
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 col-12">
                <div class="customtable pb-2">
                    <h3 class="subHeading d-flex align-items-center justify-content-between">
                        <span>Recent Upload</span>
                        <button class="colorBtn">VIEW ALL</button>
                    </h3>
                    <div class="customContent">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Company 1</h4>
                            <div class="d-flex">
                                <img src="images/pdf.png" alt="" /> 1
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Company 1</h4>
                            <div class="d-flex">
                                <img src="images/pdf.png" alt="" /> 2
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Company 1</h4>
                            <div class="d-flex">
                                <img src="images/pdf.png" alt="" /> 3
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Company 1</h4>
                            <div class="d-flex">
                                <img src="images/pdf.png" alt="" /> 4
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>Company 1</h4>
                            <div class="d-flex">
                                <img src="images/pdf.png" alt="" /> 5
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="customtable pb-2">
                    <h3 class="subHeading d-flex align-items-center justify-content-between">
                        <span>Recent Upload</span>
                        <button class="colorBtn">VIEW ALL</button>
                    </h3>
                    <div class="customContent">
                        <div class="d-block mb-2">
                            <h4>Restaurant Invoice</h4>
                            <h5>Company 1</h5>
                        </div>
                        <div class="d-block mb-2">
                            <h4>Restaurant Invoice</h4>
                            <h5>Company 2</h5>
                        </div>
                        <div class="d-block mb-2">
                            <h4>Restaurant Invoice</h4>
                            <h5>Company 3</h5>
                        </div>
                        <div class="d-block mb-2">
                            <h4>Restaurant Invoice</h4>
                            <h5>Company 4</h5>
                        </div>
                        <div class="d-block mb-2">
                            <h4>Restaurant Invoice</h4>
                            <h5>Company 5</h5>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>
        
<?php include 'includes/footer.php'; ?>
   