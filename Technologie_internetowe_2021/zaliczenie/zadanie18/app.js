function firstNum() {
    var check = document.getElementById("number").value;
    if (check % 3 === 0) {
      document.getElementById("result").innerHTML = "Jest to liczba podzielna przez 3";
    } else {
      document.getElementById("result").innerHTML = "Nie jest to liczba podzielna przez 3";
    }
  }