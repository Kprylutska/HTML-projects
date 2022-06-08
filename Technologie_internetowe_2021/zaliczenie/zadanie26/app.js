      function Multiply() {
      var nfirstNum = parseFloat(document.querySelector("#firstNum").value.replace(/[,]/g, "."));
      var nsecondNum = parseFloat(document.querySelector("#secondNum").value.replace(/[,]/g, "."));
      var result = document.querySelector("#result");
      var str = 
        "<div>" 
        + nfirstNum 
        + "</div>" 
        + "<div>x</div>" 
        + "<div>" 
        + nsecondNum
        + "</div>"
        + "<div>_____</div>" 
      var num = 1
  
      if (!nsecondNum) nsecondNum = 0;
      if (!nfirstNum) nfirstNum = 0;
  
      for (let i = 0; i < nsecondNum.toString().length; i++) {
        str = str + "<div>" + nfirstNum * (Number((nsecondNum.toString()).substr((nsecondNum.toString().length) - i - 1, 1)) * num) + "</div>"
        num = num * 10
      }
  
      str = str + "<span style='border-top: 1px solid black;'>" + (nfirstNum * nsecondNum) + "</span>"
      result.innerHTML = str;
    };