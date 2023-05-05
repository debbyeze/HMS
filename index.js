// date
 var date = new Date();
  var year = date.getFullYear();
 document.getElementById("copyright-date").innerHTML = year;

// history navigation
var backArrow = document.getElementById("back-arrow");

backArrow.addEventListener("click", () => {
    window.history.back()
});

// deleteRow
var index, table = document.getElementById("myTable");
for(var i =1; i < table.rows.length; i++){

 table.rows[i].cells[6].onclick = function() {
 index = this.parentElement.rowIndex;
 table.deleteRow(index);
 };
};


// close btn
var closeBtn = document.getElementsByClassName("close");

for(i = 0; i < closeBtn.length; i++){
const eachCloseBtn = closeBtn[i];
 eachCloseBtn.addEventListener("click", () => {
 eachCloseBtn.parentElement.style.display ="none";

})

};

