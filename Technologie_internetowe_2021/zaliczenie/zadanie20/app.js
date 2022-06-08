function diffDates(day_one, day_two) 
    {
      return (day_one - day_two) / (60 * 60 * 24 * 1000);
    };

    // var button = document.querySelector("#zad-btn");
  
    function Lotto() 
    {

      var user_array_1 = (document.querySelector("#num").value).split(' ');
      var result = document.querySelector("#result");
      var numder = document.querySelector("#num");

      var user_array = user_array_1.reduce((x, y) => x.includes(y) ? x : [...x, y], []);

      numder.value = user_array.join(' ')

      if(user_array.length === 6)
      {
        for (let i = 0; i < user_array.length; i++) 
        {
          if(user_array[i] > 49 || user_array[i] < 1) 
          {
            result.innerHTML = "<div>1-49</div>";
          }else
          {
            let arr = [];

            do 
            {
              let num = Math.floor(Math.random() * 49 + 1);
              arr.push(num);
              arr = arr.filter((item, index) =>
              {
                return arr.indexOf(item) === index
              });
            } while (arr.length < 6);

            var arr_res = []

            for (let i = 0; i < user_array.length; i++)
            {
              for (let j = 0; j < arr.length; j++) 
              {
                if(user_array[i] == arr[j])
                {
                  arr_res.push(user_array[i])
                }
              }
            }
            result.innerHTML = "<div>" + arr + "</div>" + "<div style='color: red;'>" + arr_res + "</div>" + "<div'>" + arr_res.length + "</div>";
          }
        }
      }else
      {
        result.innerHTML = "<div>6</div>";
      }

    };