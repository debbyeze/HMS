 let userName = document.getElementById('firstname');
 let LastName = document.getElementById('lastname');
 let loginForm = document.getElementById("personalinfo");
 let usernameErr = document.getElementById("usernameErr");
 let usernameErr1 = document.getElementById("usernameErr1");
 let Email = document.getElementById('email');
 let PhoneNumber = document.getElementById('tel');



 userName.addEventListener('input', function(e){
    let pattern = /^[\w]{6,8}$/;
    let currentValue = e.target.value;
    let valid = pattern.test(currentValue);

    if(valid){
usernameErr.style.display = 'block'

    }
    else{
        usernameErr.style.display = 'none'
    }
    
 });
 LastName.addEventListener('input', function(e){
    let pattern = /^[\w]{6,8}$/;
    let currentValue = e.target.value;
    let valid = pattern.test(currentValue);

    if(valid){
        usernameErr1.style.display = 'block'

    }
    else{
        usernameErr1.style.display = 'none'
    }
    
 });

 //Email Validation code starts here

 Email.addEventListener('input', function(e){
    const emailPattern = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/
    let currentValue = e.target.value;
    let EmailErr = document.getElementById('EmailError');
    let valid = emailPattern.test(currentValue);

    if(valid){
       EmailErr.style.display = 'none'

    }
    else{
       
        EmailErr.style.display = 'block'
    }
    
 });
let Phone = document.getElementById('phonenumber');

Phone.addEventListener('input', function(e){
    const phonePattern = /^\d{0,12}$/
    let currentValue = e.target.value;
    let PhoneErr = document.getElementById('phoneErr');
    let valid = phonePattern.test(currentValue);

    if(valid){
        PhoneErr.style.display = 'none'

    }
    else{
       
        PhoneErr.style.display = 'block'
    }
    
 });

 let PhoneTel = document.getElementById('tel');

 PhoneTel.addEventListener('input', function(e){
    const phonePattern = /^\d{0,12}$/
    let currentValue = e.target.value;
    let PhoneErr1 = document.getElementById('PhoneErr1');
    let valid = phonePattern.test(currentValue);

    if(valid){
        PhoneErr1.style.display = 'none'

    }
    else{
       
        PhoneErr1.style.display = 'block'
    }
    
 });

 let NatID = document.getElementById('Natid');

 NatID.addEventListener('input', function(e){
    const phonePattern = /^\d{0,16}$/
    let currentValue = e.target.value;
    let NatidErr = document.getElementById('NatidErr');
    let valid = phonePattern.test(currentValue);

    if(valid){
        NatidErr.style.display = 'none'

    }
    else{
       
        NatidErr.style.display = 'block'
    }
    
 });

 
 
//contact

let contactPerson = document.getElementById('contactpersonform');
let FirstName1 = document.getElementById('firstname1');
let FirstNamen1err = document.getElementById('firstNameErr');
let LastName1 = document.getElementById('lastname'); 
let LastName1err = document.getElementById('LastNameErr');
let Phone11 = document.getElementById('tel');
let Phoneerr = document.getElementById('numberror');
let NatIDerr = document.getElementById('Natiderr')

 FirstName1.addEventListener('input', function(e){

    let pattern22 = /^[\w]{6,8}$/;
    let currentValue22 = e.target.value;
    let valid = pattern22.test(currentValue22);

    if(valid){
        FirstNamen1err.style.display = 'block'

    }
    else{
        FirstNamen1err.style.display = 'none'
    }
    
 });

 LastName1.addEventListener('input', function(e){

    let pattern2 = /^[\w]{6,8}$/;
    let currentValue2 = e.target.value;
    let valid = pattern2.test(currentValue2);

    if(valid){
        LastName1err.style.display = 'block'

    }
    else{
        LastName1err.style.display = 'none'
    }
    
 });

Phone11.addEventListener('input', function(e){

    let pattern23 =  /^\d{0,12}$/;
    let currentValue23 = e.target.value;
    let valid = pattern23.test(currentValue23);

    if(valid){
       Phoneerr.style.display = 'none'

    }
    else{
        Phoneerr.style.display = 'block'
    }
    
 });
 NatID.addEventListener('input', function(e){

    let pattern24 =  /^\d{0,16}$/;
    let currentValue24 = e.target.value;
    let valid = pattern24.test(currentValue24);

    if(valid){
       NatIDerr.style.display = 'none'

    }
    else{
        NatIDerr.style.display = 'block'
    }
    
 });
