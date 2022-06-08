function diffDates(day_one, day_two) {
  return (day_one - day_two) / (60 * 60 * 24 * 1000);
};

function Data() {
var day_1 = new Date(document.querySelector("#firstDate").value);
var day_2 = new Date(document.querySelector("#secondDate").value);

result.innerHTML = 
  "<div>" + Math.abs(diffDates(day_2, day_1)) +  "</div>";
};