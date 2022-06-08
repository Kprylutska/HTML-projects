function czas() {
  
    let t = moment().format('hh:mm:ss a');
    document.getElementById('time').innerHTML = t;
    
    setInterval(() => {
      t = moment().format('hh:mm:ss a');
      document.getElementById('time').innerHTML = t;
    }, 1000)
  }
  
  czas();