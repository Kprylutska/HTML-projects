        
    function Sum() 
    {
      var nfirstNum = parseFloat(document.querySelector("#firstNum").value.replace(/[,]/g, "."));
      var nsecondNum = parseFloat(document.querySelector("#secondNum").value.replace(/[,]/g, "."));
      
      var result = document.querySelector("#result");
        
      if (!nsecondNum) nsecondNum = 0;
      if (!nfirstNum) nfirstNum = 0;
      
      result.innerHTML = 
      "<div>" + nfirstNum +  "</div>" 
      + "<div>+</div>" 
      + "<div>" + nsecondNum + "</div>" 
      + "<span style='border-top: 1px solid black;'>" + (nfirstNum + nsecondNum) + "</span>";
    };