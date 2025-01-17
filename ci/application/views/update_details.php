<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" defer></script>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
<script type="text/javascript">
    
    function check_aadhar()
    {
            
            var aadhar = $('#aadhar').val();
           
            var n = aadhar.length;
            if(n!=12)
            {
                alert("Aadhar number must be of 12 digits");
               $('#aadhar').val('');
               $('#aadhar').focus;
               //break;
               return ;
           
            }
            
           
    }
    
    function check_mobile()
    {
        var mobile1 = $('#mobile1').val();
        
           
            var ns = mobile1.length;
           
            if(ns!=10)
            {
                alert("Mobile number must be of 10 digits");
               $('#mobile1').val('');
               $('#mobile1').focus;
               //break;
               return ;
           
            }
    }

    
</script>
<style>
    .custom_margin {
    margin-top: 12em !important;
    }
    @media only screen and (max-width: 992px) {
    .custom_margin {
    margin-top: 1em !important;
    }
    }	
    .select-editable {
    position:relative;
    background-color:white;
    width:120px;
    height:18px;
    }
    .select-editable select {
    position:absolute;
    top:0px;
    left:0px;
    font-size:14px;
    border: 1px solid #ccc;
    width:270px;
    margin:0;
    padding: 6px 12px;
    height: 34px;
    }
    .select-editable input {
    position:absolute;
    top:0px;
    left:0px;
    width:250px;
    padding:1px;
    font-size:14px;
    border: 1px solid #ccc;
    padding: 6px 12px;
    height: 34px;
    }
    .select-editable select:focus, .select-editable input:focus {
    outline:none;
    }
</style>
<div id="page-wrapper">
    <div class="forms">
        <?php
        if (!empty($this->session->flashdata('approve_mes'))) { ?>
            <h4 align="center" style="background-color:#D3D3D3 !important; border-radius:3px; line-height:30px;">
                <span style="margin:7px; color:green;"><?php print_r($this->session->flashdata('approve_mes')); ?></span>
            </h4></br>
        <?php } ?>
        <?php
        if (!empty($this->session->flashdata('error_mes'))) { ?>
            <h4 align="center" style="background-color:#D3D3D3 !important; border-radius:3px; line-height:30px;">
                <span style="margin:7px; color:red;"><?php print_r($this->session->flashdata('error_mes')); ?></span>
            </h4></br>
        <?php } ?>
        <h3 class="title1">Information</h3>
        <div class="form-grids row widget-shadow" data-example-id="basic-forms">
            <div class="form-title">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#personal">Personal Information</a></li>
                    
                    
                </ul>
            </div>
            <form action="<?php echo base_url().'Welcome/updatedata/'.$data->id; ?>" method="POST">
                <!-- Div tab content starts -->
                <div class="tab-content">
                    <!--div tab2 starts-->
                    <!-- div menu1 starts-->
                    <div id="personal" class="tab-pane fade in active">
                        <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                            <div id="aadhar_err"></div>

                            <div class="form-title">
                                <h4> Personal Information</h4>
                            </div>
                            <div class="form-body">
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label><b>Title</b></label>
                                        <select type="select" class="form-control" id="title" name="title" required >
                                        <?php if($data->title=="not select"){ ?>
                                        <option value="not select" selected> Select Title</option>
                                        <option value="Mr.">Mr.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Dr.">Dr.</option>
                                        <?php } else if($data->title=="Mr."){ ?>
                                        <?php ?>
                                        <option value="not select" selected> Select Title</option>
                                        <option value="Mr."selected>Mr.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Dr.">Dr.</option>
                                        <?php } 
                                        else if($data->title=="Ms."){ ?>
                                           <option value="not select" > Select Title</option>
                                        <option value="Mr.">Mr.</option>
                                            <option value="Ms."selected>Ms.</option>
                                            <option value="Mrs." >Mrs.</option>
                                            <option value="Dr.">Dr.</option>
                                            <?php } else if($data->title=="Mrs."){ ?>
                                            <option value="not select" > Select Title</option>
                                        <option value="Mr.">Mr.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Mrs." selected>Mrs.</option>
                                            <option value="Dr.">Dr.</option>
                                            <?php }  else if($data->title=="Dr."){ ?>
                                            <option value="not select" > Select Title</option>
                                        <option value="Mr.">Mr.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Mrs." >Mrs.</option>
                                            <option value="Dr."selected>Dr.</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3"> 
                                        <label><b>First Name</b></label>
                                        <input type="text" class="form-control" id="first_name" placeholder="First Name" name="fname" value=" <?php echo $data->fname; ?>"required> 
                                    </div>
                                    <div class="form-group col-md-3"> 
                                        <label><b>Middle Name</b></label>
                                        <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" name="mname" value=" <?php echo $data->mname; ?>"> 
                                    </div>
                                    <div class="form-group col-md-3"> 
                                        <label><b>Last Name</b></label>
                                        <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="lname" value=" <?php echo $data->lname; ?>" required > 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-5"> 
                                        <label><b>Aadhar Number</b></label>
                                        <input type="text"   class="form-control" id="aadhar" placeholder="Enter Aadhar Number" name="aadhar"  onblur="check_aadhar()" value=" <?php echo $data->aadhar; ?>" required> 
                                    </div>

                                    <div class="form-group col-md-5"> 
                                       <label><b>PAN</b></label>
                                       <input type="text" class="form-control" id="pan_no" placeholder="PAN Number" name="pan_no" value=" <?php echo $data->pan_no; ?>" required > 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-5"> 
                                        <label><b>Mobile Number</b></label>
                                        <input type="text" class="form-control" id="mobile1" placeholder="Mobile Number" name="mobile1" onblur="check_mobile()" value=" <?php echo $data->mobile1; ?>" required> 
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label><b>Gender</b></label>
                                        <select class="form-control" id="gender" name="gender" required>
                                           
                                            <?php if($data->gender==""){ ?>
                                                <option value="" selected>Select Gender </option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Other </option>
                                            <?php } else if($data->gender=="M"){ ?>
                                            <?php ?>
                                            <option value="">Select Gender </option>
                                            <option value="M" selected>Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Other </option>
                                            <?php } 
                                            else if($data->gender=="F"){ ?>
                                                <option value="">Select Gender </option>
                                            <option value="M">Male</option>
                                            <option value="F" selected>Female</option>
                                            <option value="O">Other </option>
                                                <?php }else{ ?>
                                                <option value="O"></option>
                                                <?php } ?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="form-group col-md-5"> 
                                        <label><b>Date of Birth</b></label>
                                        <input type="date"  class="form-control" id="date_of_birth" placeholder="DOB" name="dob" value=" <?php echo $data->dob; ?>" required > 
                                    </div>
                                
                                <div class="form-group col-md-5"> 
                                        <label><b>Email ID</b></label>
                                        <input type="email"  class="form-control" id="email" placeholder="Email ID" name="email" value=" <?php echo $data->email; ?>" required> 
                                    </div>
                                    
                                    </div>
                                <div class="row">
                                    <div class="form-group col-md-5">
                                        <label><b>Category</b></label>
                                        <select class="form-control"  name="category" required>
                                            <?php if($data->category==""){ ?>
                                                <option value=""selected>Select Category </option>
                                            <option value="General" >General</option>
                                            <option value="OBC">OBC</option>
                                            <option value="SC">SC</option>
                                            <option value="ST">ST</option>
                                        <?php } else if($data->category=="General"){ ?>
                                        <?php ?>
                                       <option value="">Select Category </option>
                                            <option value="General" selected>General</option>
                                            <option value="OBC" >OBC</option>
                                            <option value="SC">SC</option>
                                            <option value="ST">ST</option>
                                        <?php } 
                                        else if($data->category=="OBC"){ ?>
                                      <option value="">Select Category </option>
                                            <option value="General">General</option>
                                            <option value="OBC" selected>OBC</option>
                                            <option value="SC" >SC</option>
                                            <option value="ST">ST</option>
                                            <?php } else if($data->category=="SC"){ ?>
                                                <option value="">Select Category </option>
                                            <option value="General">General</option>
                                            <option value="OBC">OBC</option>
                                            <option value="SC" selected>SC</option>
                                            <option value="ST">ST</option>
                                            <?php }  else if($data->category=="ST"){ ?>
                                                <option value="">Select Category </option>
                                            <option value="General">General</option>
                                            <option value="OBC">OBC</option>
                                            <option value="SC">SC</option>
                                            <option value="ST" selected>ST</option>
                                            <?php } ?> 
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label><b>Blood Group</b></label>
                                        <select class="form-control" name="blood_group" required>
                    
                                            <?php if($data->blood_group==""){ ?>
                                            <option value=""selected>Select Blood Group </option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        <?php } else if($data->blood_group=="A+"){ ?>
                                      
                                        <option value="">Select Blood Group </option>
                                            <option value="A+" selected>A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        <?php } 
                                        else if($data->blood_group=="A-"){ ?>
                                     <option value="">Select Blood Group </option>
                                            <option value="A+">A+</option>
                                            <option value="A-" selected>A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <?php } else if($data->blood_group=="B+"){ ?>
                                                <option value="">Select Blood Group </option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+" selected>B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <?php }  else if($data->blood_group=="B-"){ ?>
                                                <option value="">Select Blood Group </option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-" selected>B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <?php }   else if($data->blood_group=="AB+"){ ?>
                                                <option value="">Select Blood Group </option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+" selected>AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <?php }  else if($data->blood_group=="AB-"){ ?>
                                                <option value="">Select Blood Group </option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-" selected>AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <?php }  else if($data->blood_group=="O+"){ ?>
                                                <option value="">Select Blood Group </option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+" selected>O+</option>
                                            <option value="O-">O-</option>
                                            <?php }  else if($data->blood_group=="O-"){ ?>
                                                <option value="">Select Blood Group </option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-" selected>O-</option>
                                            <?php } ?> 
                                        </select>
                                    </div>
                                    </div>
                                <div class="row">	
                                    <div class="form-group col-md-4">
                                        <label><b>Religion</b></label>
                                        <select class="form-control" name="religion" required>
                                        
                                            <?php if($data->religion==""){ ?>
                                                <option value="" selected>Select Religion </option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Parsi">Parsi</option>
                                            <option value="Jain">Jain</option>
                                        <?php } else if($data->religion=="Hindu"){ ?>
                                        
                                        <option value="">Select Religion </option>
                                            <option value="Hindu" selected>Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Parsi">Parsi</option>
                                            <option value="Jain">Jain</option>
                                        <?php } 
                                        else if($data->religion=="Muslim"){ ?>
                                        <option value="">Select Religion </option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim" selected>Muslim</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Parsi">Parsi</option>
                                            <option value="Jain">Jain</option>
                                            <?php } else if($data->religion=="Sikh"){ ?>
                                                <option value="">Select Religion </option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Sikh" selected>Sikh</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Parsi">Parsi</option>
                                            <option value="Jain">Jain</option>
                                            <?php }  else if($data->religion=="Christian"){ ?>
                                                <option value="">Select Religion </option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Christian" selected>Christian</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Parsi">Parsi</option>
                                            <option value="Jain">Jain</option>
                                            <?php }   else if($data->religion=="Buddhist"){ ?>
                                                <option value="">Select Religion </option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddhist" selected>Buddhist</option>
                                            <option value="Parsi">Parsi</option>
                                            <option value="Jain">Jain</option>
                                            <?php }  else if($data->religion=="Parsi"){ ?>
                                                <option value="">Select Religion </option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Parsi" selected>Parsi</option>
                                            <option value="Jain">Jain</option>
                                            <?php }  else if($data->religion=="Jain"){ ?>
                                                <option value="">Select Religion </option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Buddhist">Buddhist</option>
                                            <option value="Parsi">Parsi</option>
                                            <option value="Jain" selected>Jain</option>
                                            <?php }  ?> 
                                        </select>
                                    </div>
                                
                                        
                                    <div class="form-group col-md-4">
                                        <label><b>Minority</b></label>
                                        <select class="form-control" name="minority"  required>
                                       
                                        <?php if($data->minority==""){ ?>
                                            <option value="" selected>Not Select</option>
                                        <option value="No">No</option>
                                        <option value="Minority">Minority </option>
                                        <?php } else if($data->minority=="No"){ ?>
                                        
                                            <option value="">Not Select</option>
                                        <option value="No" selected>No</option>
                                        <option value="Minority">Minority </option>
                                        <?php } 
                                        else if($data->minority=="Minority"){ ?>
                                       <option value="">Not Select</option>
                                        <option value="No">No</option>
                                        <option value="Minority" selected>Minority </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label><b>Handicap</b></label>
                                        <select class="form-control"  name="handicap"  required>
                                            
                                            <?php if($data->handicap==""){ ?>
                                                <option value="" selected>Is Handicapped </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        <?php } else if($data->handicap=="Yes"){ ?>
                                        
                                            <option value="">Is Handicapped </option>
                                            <option value="Yes" selected>Yes</option>
                                            <option value="No">No</option>
                                        <?php } 
                                        else if($data->handicap=="No"){ ?>
                                     <option value="">Is Handicapped </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No" selected>No</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4"> 
                                        <label><b>Local Address </b></label>
                                        <input type="text" class="form-control" id="address_line1" placeholder="Enter Address Line 1" name="laddress" value=" <?php echo $data->laddress; ?>" required>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <label><b>Permanant Address </b></label>
                                        <input type="text" class="form-control" id="address_line2" placeholder="Enter Address Line 2" name="paddress"value=" <?php echo $data->paddress; ?>" required>
                                    </div>
                                    <div class="form-group col-md-4"> 
                                        <label><b>City</b></label>
                                        <input type="text" class="form-control" id="city" placeholder="Enter City" name="city"value=" <?php echo $data->city; ?>" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4"> 
                                        <label><b>District</b></label>
                                        <input type="text" class="form-control" id="district" placeholder="Enter District" name="district" value=" <?php echo $data->district; ?>"required>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label><b>Pincode</b></label>
                                        <input type="number" class="form-control" id="pincode" placeholder="Pincode" name="pincode" value="<?php echo $data->pincode;?>"required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label><b>State</b></label>
                                        <select class="form-control"  name="state"  required>
                                            <option value="">Select State</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option selected value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Orissa">Orissa</option>
                                            <option value="Pondicherry">Pondicherry</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttaranchal">Uttaranchal</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- div form-body ends -->
                        </div>
                        <!--one form end & second starts-->
                        <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                            <div class="form-title">
                                <h4>Parent's Information</h4>
                            </div>
                            <div class="form-body">

                                <div class="row">
                                    <div class="form-group col-md-5"> 
                                        <label><b>Father's Name</b></label>
                                        <input type="text" class="form-control" id="father_name" placeholder="Enter Father's Name" name="father_name" value=" <?php echo $data->father_name; ?>"required> 
                                    </div>
                                    <div class="form-group col-md-5"> 
                                        <label><b>Mother's Name</b></label>
                                        <input type="text" class="form-control" id="mother_name" placeholder="Enter Mother's Name" name="mother_name" value=" <?php echo $data->mother_name; ?>" required> 
                                    </div>
                                </div>

                            

                                <div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
											<button type="submit" class="btn btn-success">Update Details</button>
										</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- div tab-content ends-->
            </form>
        </div>
    </div>
    <!-- div forms ends-->
</div>

