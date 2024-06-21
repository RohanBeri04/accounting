<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>
<style>
    .overflow{
        height:100%;
    }
    .image{
        border-radius:50px;
        margin-left:25px;
    }
    .frm{
        height:100px;
        margin-left:25px;
    }
    input{
        width:500px;
        /* border:1px solid grey;    */
        padding:5px;
        border-radus:10px;
    }
    label{
        color:grey;
        font-weight:500;
    }
    .customtable{
        margin-left:30px;
        }
    }
    .heading{
        margin-left:30px;
    }
</style>
		  
    <div class="dashboardContent">
        <h2 class="heading d-flex align-items-center justify-content-between mb-4">
            <span>User Profile</span>
            <!-- <button class="colorBtn"><i class="fas fa-plus"></i> Upload Document</button> -->
        </h2>
        <div class="row">
          
            <div class="col-md-8 col-12">
                <div class="customtable">
                    <h3 class="subHeading d-flex align-items-center justify-content-between">
                        <!-- <span>Tracking Stats</span> -->
                        <!-- <button class="colorBtn">VIEW ALL</button> -->
                    </h3>
                    <div class="overflow">
                        <img src="https://yt3.ggpht.com/zacqRbSg838WT96hMSp99NenXV85OjGWNqvUVvmW47Hw5fKR0wT_B49UClNGKCac7psVzr8N=s88-c-k-c0x00ffffff-no-rj" alt="" class="image">
                        <br>
                        <br>
                        <form>
                             <div class="frm"> 
                                <div class=""><label for="name">Name</label></div>
                                    <div class="lbl"><input type="text" id="name" name="name" placeholder="Your name.."></div>
                                </div>

                                 <div class="frm"><div class=""><label for="email">Email</label></div>
                                     <div class="lbl"><input type="text" id="email" name="email" placeholder="Your email.."></div>
                                </div>

                                 <div class="frm"><div class=""><label for="phone">Phone Number</label></div>
                                    <div class="lbl"><input type="text" id="phone" name="phone" placeholder="Your phone number.."></div>
                                </div>

                                <div class="frm"><div class=""><label for="vat">VAT Details</label></div>  
                                    <div class="lbl"><input type="text" id="vat" name="vat" placeholder="Your VAT details.."></div>

                                </div>
                                
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
       

    </div>
    
        
<?php include 'includes/footer.php'; ?>
   