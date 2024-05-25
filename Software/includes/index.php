<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
            body{
                background-color: rgb(45, 43, 43);
               
            }  
        </style>
    </head>
    <body>
                                <form action="includes/formhandler.php" method="get">
                                <input type="text" name ="name" placeholder="Full Name" required>
                                <input type ="email" name="email" placeholder="Your Email" required>
                                <input type ="number" name="website" placeholder="Phone Number" required>
                                <input type ="number" name="comment" placeholder="Age" required>
                                <div class="custom-select" style="width:200px;">
                                    <select>
                                        <option value="0" name="gender">Gender:</option>
                                        <option value="1" name="gender">Female</option>
                                        <option value="1" name="gender">male</option>
                                    </select></div>
                                <div class="custom-select" style="width:200px;">
                                <select id ="select1" name="choose1">
                                    <option value="0">Select clinic:</option>
                                    <option value="1">Light Diet Center</option>
                                    <option value="2">Dr. Raed M. Abutteen Specialty</option>
                                    <option value="3">Dermatology Clinics</option>
                                    <option value="4">Shami Eye Center</option>
                                    <option value="5">Dr. Ibrahim AbdelJawad Center</option>
                                    <option value="6">Physio Medic</option>
                                  </select></div>
                                  <div class="custom-select" style="width:200px;">
                                    <select id="select2" name="choose2">
                                        <option value="0">Select Time:</option>
                                        <option value="1">8:00-9:00</option>
                                        <option value="2">8:00-10:00</option>
                                        <option value="3">10:00-11:00</option>
                                        <option value="4">11:00-12:00</option>
                                        <option value="5">13:00-14:00</option>
                                        <option value="6">14:00-15:00</option>
                                        <option value="6">15:00-16:00</option>
                                      </select></div><br>
                                      <label for="reservation">Select Date </label>
                                      <input type="date" id="date" name="date">
                                <textarea name="Message" rows ="6" placeholder="Your Message"></textarea>
                                <button type="submit" class="btn btn2">Submit</button>
                            </form>
                         </body>
        </html>