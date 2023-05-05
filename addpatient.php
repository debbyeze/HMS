<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,200&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="addpatient.css?v=<?php echo time();?>">
    <title>Add Patient</title>
</head>
<body >
    <!-- header -->
    <header>
      <h2 class="h5 p-1">Dora hospital</h2>
    </header>
<main>
<div id="back-arrow">
    <img src="images/icons8-arrow-pointing-left-24.png" alt="" height="18px">
    </div>
    <?php
    
      if(isset($_GET['added'])){
    $message = "New patient added";
    echo $message;
    }
    ?>
    
<section>
 <div class="form ">
   <form action="registration.php" method="post" id="personalinfo">
        <fieldset >
           <legend>Personal Information</legend>
      <div class="container">
       <div>
           <label for="id">National ID</label>
           <input type="number" id="id" name="txtNationId" required>
        </div>
         <div>
            <label for="gender">Gender</label>
         <select id="gender" required name="txtGender">
            <option value="male" >Male</option>
            <option value="female" >Female</option>
         </select>
      </div>
         <div>
           <label for="mobile">Mobile</label>
           <input type="tel" id="mobile" name="txtPhone" >
        </div>
        <div>
           <label for="email">Email</label>
           <input type="email" id="email" placeholder="example@gmail.com" name="txtEmail">
        </div>
      <div>
       <label for="marital">Marital status</label>
      <select id="marital" name="txtMarital">
         <option value="married" >Married</option>
         <option value="single">Single</option>
         <option value="divorced" >Divorced</option>
      </select>
      </div>
       <div>
       <label for="blood">Blood type</label>
      <select id="blood" name="txtBlood" required>
         <option value="ominus" >O-</option>
         <option value="oplus" >O+</option>
         <option value="abplus" >AB+</option>
         <option value="abminus" >AB-</option>
         <option value="aplus" >A+</option>
         <option value="aminus" >A-</option>
         <option value="bplus" >B+</option>
         <option value="bminus" >B-</option>
      </select>
      </div>
      <div>
           <label for="weight">Height</label>
           <input type="text" id="height" placeholder="cm" name="txtHeight" required>
        </div>
      </div>
      <div class="container">
       <div>
           <label for="fullname">Full Name</label>
           <input type="text" id="fullname" placeholder="Deborah Ezenwankwo" name="txtFname" required>
        </div>
         <div>
           <label for="weight">Weight</label>
           <input type="text" id="weight" placeholder="kg" name="txtWeight" required>
        </div>
         <div>
           <label for="bp">Blood pressure</label>
           <input type="text" id="bp" name="txtBp" placeholder="celsuis">
        </div>
        <div>
           <label for="date">Date of Birth</label>
           <input type="date" id="date" name="txtDob" required>
        </div>
        <div>
       <label for="genotype">Genotype</label>
      <select id="genotype" name="txtGenotype" required>
         <option value="aa" >AA</option>
         <option value="as">AS</option>
         <option value="ss" >SS</option>
      </select>
      </div>
      
        <div>
           <label for="patId">Patient ID</label>
           <input type="text"  id="patId" placeholder="Enter Id for patient" name="txtPatientId" required>
        </div>
        
      </div>
        </fieldset>
        <fieldset>
           <legend>Other Information</legend>
         <div class="container">
           <div>
            <label for="country">Country</label>
            <select id="country" name="txtCountry" required>
            <option value="Egypt" >Egypt</option>
            <option value="South africa">South africa</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niger">Niger</option>
            <option value="Ghana">Ghana</option>
            <option value="Zimbwabwe">Zimbwabwe</option>
           <option value="Togo">Togo</option>
           <option value="Cameroon">Cameroon</option>
          <option value="Uganda">Uganda</option>
          </select>
          </div>
         <div>
            <label for="city">City</label>
         <select id="city" name="txtCity">
            <option value="lagos" >lagos</option>
            <option value="port harcourt">port harcourt</option>
            <option value="abuja">abuja</option>
            <option value="yenegoa">yenegoa</option>
            <option value="uyo">uyo</option>
            <option value="calabar">calabar</option>
            <option value="onitsha">onitsha</option>
            <option value="warri">warri</option>
            <option value="aba">aba</option>
         </select>
         </div>
      
      </div>
      <div class="container">
           <div>
            <label for="nationality">Nationality</label>
            <select id="nationality" name="txtNation" required>
            <option value="Egyptian" >Egyptian</option>
            <option value="South african">South african</option>
            <option value="Nigerian">Nigerian</option>
            <option value="Nigerien">Nigerien</option>
            <option value="Ghanaian">Ghanaian</option>
            <option value="Zimbwabwean">Zimbwabwean</option>
           <option value="Togolese">Togolese</option>
           <option value="Cameroonia">Cameroonia</option>
          <option value="Ugandan">Ugandan</option>
          </select>
          </div>
          <div>
           <label for="street">Street</label>
           <input type="text" id="street" name="txtStr">
        </div>
        </div> 
      </div>
      </fieldset>
      <aside>
       <fieldset id="photofield">
          <legend id="photolegend">Personal Photo</legend>
          <div class="photo-output">
          <img id="blah" alt="your image" width="200px" height="200px" />
           <input type="file" name="txtPhoto" 
           onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"/>
           </div>
        </fieldset>
        
 </aside>
      </form> 
       
 </div>

 
</div>
</section>
   <div class="submitbtn">
      <input type="reset" value="Clear" form="personalinfo">
      <input type="submit" value="Save" name="submit"  form="personalinfo">
   </div>

<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="dflex jcc">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Patient Form Saved!</p>
  </div>
  </div>
</div>
</main>
<footer class="container-fluid p-2">
     <p>&copy;Copyright <span id="copyright-date"></span> Deborah Ezenwankwo</p>
    </footer>
    <script src="index.js"></script>
    <script src="addpatient.js"></script>
</body>
</html>