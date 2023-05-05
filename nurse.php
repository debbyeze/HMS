<?php 
session_start ();
if(!isset($_SESSION["loginsuccess"]))

	header("location:index.php"); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;1,200&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="doctor.css?v=<?php echo time();?>" />
    <title>Nurse Dashborad</title>
  </head>
  <body>
    <!-- header -->
    <header>
      <h2 class="h5 p-1">Dora hospital</h2>
    </header>
    <main class="container-fluid">
    <div id="back-arrow">
    <img src="images/icons8-arrow-pointing-left-24.png" alt="" height="20px">
    </div>
      <!-- logged-in user -->
      <section class="user container-fluid d-flex pt-2">
        <img
          src="images//humberto-chavez-FVh_yqLR9eA-unsplash.jpg"
          alt="user-img"
          width="70px"
          class="me-3 d-block"
        />
        <ul class="user-info list-unstyled d-flex p-2">
          <li class="me-3">Name: <span id="user-name">Debby Nwiwa</span></li>
          <li class="me-3">Profession: <span id="user-prof">Nurse</span></li>
          <li class="me-3">
            Specialty: <span id="user-specialty">Nurse II</span>
          </li>
          <li class="me-3">ID-NUMBER: <span id="user-prof"><?php echo $_SESSION["loginsuccess"]; ?></span></li>
        </ul>
        <span><a href="logout.php" class="nav-link text-black">Logout</a></span>
      </section>

      <!-- cards -->
      <section class="main d-flex">
      <section class="left-container" id="left-container">
   

   
   
      <?php
    
      if(isset($_GET['recadded'])){
      $message = " patient medical record added";
      echo $message;
    };

    ?>
   

      <div class="display p-3 d-flex">
         <div class="m-3 bg-primary addPatCard"><p class="pt-4 text-center"><a href="addpatient.php" class="text-white nav-link">Add Patient</a></p>
         </div>
         <div class="addNurseRecCard  m-3 bg-warning"><p class="pt-4 text-center">Add Recordings</p>
         </div>
         <div class="viewPatCard m-3 bg-secondary"><p class="pt-4 text-center">View Patient Profile</p></div>
      </div>

   <!-- appointment list -->
     <h4 class="container text-center mt-5  appoint-head">Doctor's Appointment</h4>

      <table class="container" id="myTable">
      <thead>
      <tr>
        <th>#</th>
        <th>Patient ID</th>
        <th>Patient Name</th>
        <th>Mobile Number</th>
        <th> Appointment Date</th>
        <th>Appointment Time</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
      <tr>
       <td>1</td>
       <td>#4rrr3223</td>
       <td>Adam clent</td>
       <td>09066544</td>
       <td>2/5/2022</td>
       <td>8:40</td>
       <td>x</td>
      </tr>
       <tr>
       <td>2</td>
       <td>#67rrr3223</td>
       <td>Esther amant</td>
       <td>07066543</td>
       <td>2/5/2022</td>
       <td>9:40</td>
       <td>x</td>
      </tr>
      <tr>
       <td>3</td>
       <td>#63rrr3223</td>
       <td>Deborah Ezenwankwo</td>
       <td>07056143</td>
       <td>2/5/2022</td>
       <td>11:00</td>
       <td>x</td>
      </tr>
      </tbody>
      </table>
    </section>


      <!-- output -->
      <section class="pt-3 output container" id="output">
      <img src="images/icons8-close-30.png" alt="close" width="10px" height="10px" class="close float-end">

      <!-- add Nurse Record output -->
      <article class="addRecording-form container shadow border m-3">
      <img src="images/icons8-close-30.png" alt="close" width="18px" height="18px" class="close  float-end">

        <h5 class="text-center p-3 text-primary">Patient Medical recording</h5>

        <form action="medrecording.php" method="post" class="mx-auto mb-3 shadow p-3">
         <div class="container d-flex justify-content-between">
        <div class="mb-3 me-3">
            <label for="date" class="form-label text-primary">Enter current date</label>
            <input
              type="date"
              class="form-control"
              id="date" name="rec-date"
              aria-describedby="emailHelp container-sm"
              required 
            />
          </div>
          <div class="mb-3">
            <label for="staffId" class="form-label text-primary"
              >Staff ID</label
            >
            <input
              type="text"
              class="form-control"
              id="staffId" name="rec-staff" value="<?php echo $_SESSION["loginsuccess"];?>"
              required
            />
            </div>
          </div>
        <div class="container d-flex justify-content-between">
           <div class="mb-3 me-2">
            <label for="patientName" class="form-label text-primary">Patient's Name</label>
            <input
              type="text"
              class="form-control"
              id="patientName" name="rec-patName"
              aria-describedby="emailHelp container-sm"
              required 
            />
          </div>
          <div class="mb-3">
            <label for="patientId" class="form-label text-primary"
              >Patient's ID</label
            >
            <input
              type="text"
              class="form-control"
              id="patientId" name="rec-patId"
              required
            />
            </div>
        </div>
        <div class="container d-flex justify-content-evenly">
        <div class="form-check ">
         <input class="form-check-input" type="radio" name="rec-patType" id="in-patient">
         <label class="form-check-label" for="in-patient">
    In-Patient
          </label>
         </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="rec-patType" id="out-patient" checked>
          <label class="form-check-label" for="out-patient">
    Out-patient
          </label>
         </div>
         </div>
         <div class="container d-flex justify-content-between">
           <div class="mb-3 me-2">
            <label for="patientHeight" class="form-label text-primary">Height</label>
            <input
              type="text"
              class="form-control"
              id="patientHeight" placeholder="cm" name="rec-height"
              aria-describedby="emailHelp container-sm"
              required 
            />
          </div>
          <div class="mb-3">
            <label for="patientWeight" class="form-label text-primary"
              >Weight</label
            >
            <input
              type="text"
              class="form-control" name="rec-weight"
              id="patientWeight" placeholder="kg"
              required
            />
            </div>
        </div>
        <div class="container d-flex justify-content-between">
           <div class="mb-3 me-2">
            <label for="patientBp" class="form-label text-primary">Blood Pressure</label>
            <input
              type="text"
              class="form-control"
              id="patientBp" name="rec-bp" 
              aria-describedby="emailHelp container-sm"
              required 
            />
          </div>
          <div class="mb-3">
            <label for="patientTem" class="form-label text-primary"
              >Temperature</label
            >
            <input
              type="text"
              class="form-control" name="rec-tem"
              id="patientTem" placeholder="celsuis"
              required
            />
            </div>
        </div>
        <div class="mb-3">
            <label for="symptoms" class="form-label text-primary">Patient symptoms</label>
            <textarea name="rec-symp" id="symptoms" cols="10" rows="4" class="form-control" aria-describedby="emailHelp container-sm"
              required ></textarea>
          </div>          
        <button type="submit" name="rec-submit" class="btn btn-primary mx-auto d-block">Submit</button>
        </form>
      </article>
      
      <!-- add view profile output -->
      <article class="view-form   container shadow border m-3">
      <img src="images/icons8-close-30.png" alt="close" width="18px" height="18px" class="close  float-end">

        <h5 class="text-center p-3 text-primary">View Patient Profile</h5>
        <!-- search patient -->
    <div class="container shadow  py-4 mb-3">
    <div class="row">
    <form action="viewprofile.php" method="post">
        <div class=" mx-auto">
            <div class="small fw-light">Enter Patient's ID</div>
            <div class="input-group">
                <input class="form-control border-end-0 border rounded-pill" type="search"
                 id="patientId" name="view-patid">
                
                    <input type="submit" class="btn btn-outline-secondary bg-primary border-bottom-0 border rounded-pill  text-white" type="button" name="view-patient">
                      
                
            </div>
          </div>
    </form>
    </div>  
      <!-- patient profile box -->
          <div class="patientProfile container">
          <ul class="list-unstyled">
        
            <li>Name:<span id="viewPatName">
            
            </span></li>
            <li>National ID:<span id="viewPatNatId">Nigeria</span></li>
            <li>Patient ID:<span id="viewPatId"></span></li>
            <li>Gender:<span id="viewPatGender"></span></li>
            <li>Mobile:<span id="viewPatMobile"></span></li>
            <li>Email:<span id="viewPatEmail"></span></li>
            <li>Marital Status:<span id="viewPatMarital"></span></li>
            <li>Address<span id="viewPatAdd"></span></li>
            <li>Date of Birth:<span id="viewPatDob"></span></li>
             <li>Occupation:<span id="viewPatOccu"></span></li>
            <li>LGA:<span id="viewPatLga"></span></li>
            <li>State Of Origin:<span id="viewPatState"></span></li>
            <li>Country:<span id="viewPatCountry"></span></li>
            <li>Blood Group:<span id="viewPatBloodG"></span></li>
            <li>Genotype:<span id="viewPatGeno"></span></li>
            <li>HIV Status:<span id="viewPatHiv"></span></li>
            <li>Next Of Kin:<span id="viewPatNkin"></span></li>
            <li>Next of kin phone Contact:<span id="viewPatNkinPho"></span></li>
            <li>Next of Kin Relationship:<span id="viewPatNkinRel"></span></li>
            <li>Patient Recordings:<span id="viewPatRec"></span></li>
            <li>Patient Treatment History:<span id="viewPatTreaHis"></span></li>
            <li>Patient Diagonsis History:<span id="viewPatDiagHis"></span></li>
            <li>Death?:<span id="viewPatDeath"></span></li>
            
          </ul>
        </div>     
    </div>
      </article>
      </section>

      </section>
    </main>
   <footer class="container-fluid p-2">
     <p class="small text-center">&copy;Copyright <span id="copyright-date"></span> Deborah Ezenwankwo</p>
    </footer>
    <script src="index.js"></script>
    <script src="fileTwo.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
