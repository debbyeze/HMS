

// output container
var output = document.getElementById("output");


// add diagnose
var addDiagCard = document.querySelector(".addDiagCard");
var diagnoseForm =  document.querySelector(".diag-form");

addDiagCard.addEventListener("click", () => {
output.style.display="block";
diagnoseForm.style.display="block";


});

// add Treatment 
var addTreatCard = document.querySelector(".addTreatCard");
var treatForm =  document.querySelector(".addTreat-form");

addTreatCard.addEventListener("click", () => {
output.style.display="block";
treatForm.style.display="block";

});



// Death Record
var addDeathCard = document.querySelector(".addDeathCard");
var deathForm =  document.querySelector(".addDeathRec-form");

addDeathCard.addEventListener("click", () => {
output.style.display="block";
deathForm.style.display="block";

});

// View patient form
var viewCard = document.querySelector(".viewPatCard");
var viewForm =  document.querySelector(".view-form");

viewCard.addEventListener("click", () => {
output.style.display="block";
viewForm.style.display="block";

});


