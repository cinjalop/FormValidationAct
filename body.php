<div class="card-body">


<div class="container">

    <form class="well form-horizontal" action="conditions.php " method="post"  id="validation_form">
<style type="text/css">
fieldset {

    border: 1px solid #004d4d;
    width: 80%;
    margin:auto;
    border-width: thick;
    background-color: #BEBE;

}

</style>
<body>
<fieldset>
    
<legend><h1>Student Registration Form</h1></legend>

<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label">First Name</label>  
    </div>
      <div class="col-6 inputGroupContainer">
          <input name="first_name" placeholder="First Name" class="form-control"  type="text" required>
      </div>
    </div>
</div>

<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
       <label class="col-12 control-label" >Last Name</label> 
    </div>
      <div class="col-6 inputGroupContainer">
        <input name="last_name" placeholder="Last Name" class="form-control"  type="text" required>
      </div>
    </div>
</div>
<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label" >Middle Name</label> 
    </div>
    <div class="col-6 inputGroupContainer">
      <input name="middle_name" placeholder="Middle Name" class="form-control"  type="text" required>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label">Address</label> 
    </div> 
    <div class="col-6 inputGroupContainer">
        <input name="address" placeholder="Address" class="form-control" type="text" required>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label">Date Of Birth</label>
    </div>  
    <div class="col-6 inputGroupContainer">
        <input name="DOB" placeholder="Date of Birth" class="form-control" type="date" required>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label">Place Of Birth</label>  
    </div>
    <div class="col-6 inputGroupContainer">
        <input name="placeofBirth" placeholder="Place of Birth" class="form-control" type="text" required>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label">Gender</label >
    </div>
      <div class="radio" >
        <input type="radio" name="gender" value="Male" /> Male
        <input type="radio" name="gender" value="Female" /> Female 
      </div>
    </div>
</div>
<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label">Guardian</label>  
    </div>
    <div class="col-6 inputGroupContainer">
        <input name="guardian" placeholder="Guardian" class="form-control" type="text" required>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label">Contact Number</label> 
    </div> 
    <div class="col-6 inputGroupContainer">
        <input name="contactnum" placeholder="(+63)555-1212" class="form-control" type="text" required>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label">Civil Status</label>  
    </div>
    <div class="col-6 inputGroupContainer">
        <input name="civilStatus" placeholder="Civil Status" class="form-control" type="text" required>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-inline"> 
    <div class="col-6">
      <label class="col-12 control-label">Year Level</label>
    </div>
    <div class="col-6 selectContainer">
      <select name="yearLevel" class="form-control selectpicker" >
        <option value=" " >Please select your year Level</option>
        <option>First Year</option>
        <option>Second Year</option>
        <option >Third Year</option>
        <option >Fourth Year</option>
        <option >Fifth Year</option>
      </select>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-inline"> 
    <div class="col-6">
      <label class="col-12 control-label">Course</label>
    </div>
    <div class="col-6 selectContainer">
      <select name="course" class="form-control selectpicker" >
        <option value=" " >Please select your course</option>
        <option>B.S. in Automotive Mechanical Technology</option>
        <option>B.S. in Electrical and Technology Management</option>
        <option>B.S. in Electro-Mechanical Technology</option>
        <option>B.S. in Electronics and Communication Technology</option>
        <option>B.S. in Applied Mathematics</option>
        <option>B.S. in Applied Physical Sciences</option>
        <option>B.S. in Chemistry</option>
        <option>B.S. in Environmental Science and Technology</option>
        <option>B.S. in Food Science and Technology</option>
        <option>M.S. in Applied Mathematical Sciences</option>
        <option>M.S. in Environmental Science and Technology</option>
        <option>B.S. in Architecture</option>
        <option>B.S. in Civil Engineering</option>
        <option>B.S. in Electrical Engineering</option>
        <option>B.S. in Electronics Engineering</option>
        <option>B.S. in Mechanical Engineering</option>
        <option>Bachelor of Elementary Education</option>
        <option>Bachelor of Public Administration</option>
        <option>Bachelor of Secondary Education</option>
        <option>Bachelor of Technical Teacher Education</option>
        <option>B.S. in Computer Engineering</option>
        <option>B.S. in Information Technology</option>
        <option>B.S. in Technology Communication Management</option>
        <option>B.S. in Data Science</option>
      </select>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label">School Year</label> 
    </div> 
    <div class="col-6 inputGroupContainer">
        <input name="schoolYear" placeholder="School Year" class="form-control" type="text" required>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="form-inline">
    <div class="col-6">
      <label class="col-12 control-label">E-Mail</label>  
    </div>
    <div class="col-6 inputGroupContainer">
        <input name="email" placeholder="E-Mail Address" class="form-control"  type="email" required>
    </div>
  </div>
</div>

<!-- Button -->
<div style="text-align:center">   
    <button type="submit"style="width: 300px; margin: 0 auto;" class="btn btn-warning"  >Submit</button>  
</div> 

</fieldset>
</body>
</form>
</div>
</div>