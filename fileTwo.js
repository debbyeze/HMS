// output container
var output = document.getElementById("output");

// add medical Record 
var addNurseRecCard = document.querySelector(".addNurseRecCard");
var recordingForm =  document.querySelector(".addRecording-form");

addNurseRecCard.addEventListener("click", () => {
output.style.display="block";
recordingForm.style.display="block";

});

// View patient form
var viewCard = document.querySelector(".viewPatCard");
var viewForm =  document.querySelector(".view-form");

viewCard.addEventListener("click", () => {
output.style.display="block";
viewForm.style.display="block";

});