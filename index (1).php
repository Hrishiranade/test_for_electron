<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Open Elective Selection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Asests/css/style.css" rel="stylesheet">
    </head>
<body>
<div class="navbar">
    <img src="Asests/images/sit_logo1.png" alt="College Logo" class="college-logo">
    <div class="college-name">Sharad Institue of Technology college of Engineering
                              <p><h4>An Autonomus Institute</h4></p>
    </div>
    <div class="navbar-right">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Programs</a>
        <a href="#">Contact</a>
    </div>
</div>
<br><br>
<div class="container-md">
  <h1>TY B.Tech Open Elective-II preference Form</h1>
<form action="action.php" method="post">
  <label for="name">Enter Your Name:</label>
  <input type="text" id="name" name="uname" required> <br><br>
  <label for="prn">Enter Your PRN:</label>
  <input type="text" id="prn" name="prn" required> <br><br>
  <label for="department">Choose your Department:</label>
  <select id="department" name="department" required onchange="disableOptionsWithSameValue(this.value)">
  <option value="0">Select</option>
  <option value="OE611">Civil Engineeing</option>
  <option value="OE612">Computer Science & Engineeing</option>
  <option value="OE613">Mechanical Engineering</option>
  <option value="OE614">Electrical Engineering</option>
  <option value="OE615">Electronics & computer Science</option>
  <option value="OE616">Artifical Intilligance & Data Science</option>
  <option value="OE617">Mechantronics Engineering</option>
  <option value="OE618">Automation And Robotics</option>
  </select><br><br>
  <label for="name">Enter Your Division:</label>
  <input type="text" id="div" name="div" required> <br><br>
  <label for="name">Enter Your Roll NO.:</label>
  <input type="text" id="roll_no" name="roll_no" required> <br><br>
  <label for="name">Enter Your CGPA:</label>
  <input type="text" id="cgpa" name="cgpa" required> <br><br>
  <label for="Elective_1">Choose your Elective choice 1:</label>
  <select id="Elective_1" name="Elective_1" required onchange="disableOptionsWithSameValue1(this.value)" >
  <option value="0">Select</option>
  <option value="OE611">(OE611)Air and Noice Pollution control</option>
  <option value="OE612">(OE612)Object oriented modeling and design</option>
  <option value="OE613">(OE613)Non Conventional Energy Sources</option>
  <option value="OE614">(OE614)Energy Audit and conservation</option>
  <option value="OE615">(OE615)Internet Programming</option>
  <option value="OE616">(OE616)Principle of cyber Security</option>
  <option value="OE617">(OE617)Autotronics</option>
  <option value="OE618">(OE618)Applied Robotics</option>
  </select><br><br>
  <label for="Elective_2">Choose your Elective choice 2:</label>
  <select id="Elective_2" name="Elective_2" required onchange="disableOptionsWithSameValue1(this.value)">
  <option value="0">Select</option>
  <option value="OE611">(OE611)Air and Noice Pollution control</option>
  <option value="OE612">(OE612)Object oriented modeling and design</option>
  <option value="OE613">(OE613)Non Conventional Energy Sources</option>
  <option value="OE614">(OE614)Energy Audit and conservation</option>
  <option value="OE615">(OE615)Internet Programming</option>
  <option value="OE616">(OE616)Principle of cyber Security</option>
  <option value="OE617">(OE617)Autotronics</option>
  <option value="OE618">(OE618)Applied Robotics</option>
  </select><br><br>
  <label for="Elective_3">Choose your Elective choice 3:</label>
  <select id="Elective_3" name="Elective_3" required onchange="disableOptionsWithSameValue1(this.value)">
  <option value="0">Select</option>
  <option value="OE611">(OE611)Air and Noice Pollution control</option>
  <option value="OE612">(OE612)Object oriented modeling and design</option>
  <option value="OE613">(OE613)Non Conventional Energy Sources</option>
  <option value="OE614">(OE614)Energy Audit and conservation</option>
  <option value="OE615">(OE615)Internet Programming</option>
  <option value="OE616">(OE616)Principle of cyber Security</option>
  <option value="OE617">(OE617)Autotronics</option>
  <option value="OE618">(OE618)Applied Robotics</option>
  </select><br><br>
  <label for="Elective_4">Choose your Elective choice 4:</label>
  <select id="Elective_4" name="Elective_4" required onchange="disableOptionsWithSameValue1(this.value)">
  <option value="0">Select</option>
  <option value="OE611">(OE611)Air and Noice Pollution control</option>
  <option value="OE612">(OE612)Object oriented modeling and design</option>
  <option value="OE613">(OE613)Non Conventional Energy Sources</option>
  <option value="OE614">(OE614)Energy Audit and conservation</option>
  <option value="OE615">(OE615)Internet Programming</option>
  <option value="OE616">(OE616)Principle of cyber Security</option>
  <option value="OE617">(OE617)Autotronics</option>
  <option value="OE618">(OE618)Applied Robotics</option>
  </select><br><br>
  <label for="Elective_5">Choose your Elective choice 5:</label>
  <select id="Elective_5" name="Elective_5" required onchange="disableOptionsWithSameValue1(this.value)">
  <option value="0">Select</option>
  <option value="OE611">(OE611)Air and Noice Pollution control</option>
  <option value="OE612">(OE612)Object oriented modeling and design</option>
  <option value="OE613">(OE613)Non Conventional Energy Sources</option>
  <option value="OE614">(OE614)Energy Audit and conservation</option>
  <option value="OE615">(OE615)Internet Programming</option>
  <option value="OE616">(OE616)Principle of cyber Security</option>
  <option value="OE617">(OE617)Autotronics</option>
  <option value="OE618">(OE618)Applied Robotics</option>
  </select><br><br>
  <button type="submits" value="submit" name="submit" class="btn btn-primary">Submit</button><br><br><br>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
 function disableOptionsWithSameValue(selectElement) {
            // Get the selected option value from the provided select element
            var selectedOptionValue = selectElement;
            //alert(selectedOptionValue);
            if(selectElement=='OE611'){
              selectElement ="Civil Engineering";
              }
            else if(selectElement=='OE612')
              {
                selectElement="Computer science & Engineering";
              }
            else if(selectElement=='OE613')
              {
              selectElement ="Mechanical Engineering";
              }
            else if(selectElement=='OE614')
              {
              selectElement="Electrical Engineering";
              }
            else if(selectElement=='OE615')
              {
               selectElement="Electronics & Computer Science";
              }
            else if(selectElement=='OE616')
              {
              selectElement ="Artificial Intilligence and Data Science";
             }
             else if(selectElement=='OE617')
              {
              selectElement="Mechatronics Engineering";
              }
              else if(selectElement=='OE618')
              {
              selectElement="Automation and Robotics";
              }
            let text="You are from department "+selectElement ;
            if(confirm(text)==true){
            // let k=0;
            // Loop through all the select elements
            var selects = document.querySelectorAll('select');
            for (var i = 0; i < selects.length; i++) {
                var select = selects[i];
                
                // Loop through the options in each select element
                for (var j = 0; j < select.options.length; j++) {
                    var option = select.options[j];
                    
                    // Check if the option value matches the selected option value
                    if (option.value === selectedOptionValue) {
                       
                        option.hidden = true;
                      }
                        // Disable the option
                }
            }
          //  return selectedOptionValue;  
        }
        else{
        option.hidden=false;
        }
      }
      function disableOptionsWithSameValue1(selectElement) {
            // Get the selected option value from the provided select element
            var selectedOptionValue = selectElement;
            //alert(selectedOptionValue);
            if(selectElement=='OE611'){
               selectElement='(OE611)Air and Noice Pollution control';
                }
            else if(selectElement=='OE612'){
                 selectElement='(OE612)Object oriented modeling and design';
                 }
            else if(selectElement=='OE613'){
              selectElement='(OE613)Non Conventional Energy Sources';
             }
            else if(selectElement=='OE614'){
                selectElement='(OE614)Energy Audit and conservation';
              }
            else if(selectElement=='OE615'){
                selectElement='(OE615)Internet Programming';
            }
            else if(selectElement=='OE616'){
              selectElement='(OE616)Principle of cyber Security';
            }
            else if(selectElement=='OE617'){
             selectElement='(OE617)Autotronics';
            }
            else if(selectElement=='OE618')
              {
              selectElement="Applied Robotics";
              }

            let text="Your selected subject is "+selectElement ;
            if(confirm(text)==true){
            // let k=0;
            // Loop through all the select elements
            var selects = document.querySelectorAll('select');
            for (var i = 0; i < selects.length; i++) {
                var select = selects[i];
                
                // Loop through the options in each select element
                for (var j = 0; j < select.options.length; j++) {
                    var option = select.options[j];
                    
                    // Check if the option value matches the selected option value
                    if (option.value === selectedOptionValue) {
                       
                        option.hidden = true;
                      }
                        // Disable the option
                }
            }
          //  return selectedOptionValue;  
        }
        else{
        option.hidden=false;
        }}
      
  </script>
  </body>
</html>