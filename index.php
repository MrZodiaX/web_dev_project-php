<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>college admission from</title>
        <script type="text/javascript" src="code.js"></script>
        <link rel="stylesheet" type="text/css" href="styling.css">
    </head>
    <body>

        <div class="heading">
            <br>
            <img src="logo.png" style="float:right; height: 190px; width: 190px;"/>
            <h1 style="color: #800000;"><u>DELHI TECHNOLOGICAL UNIVERSITY</u></h1>
            <h2>Delhi, India</h2>
            <h2>APPLICATION FORM (2021-2022)</h2>
    <!--    <br clear="all"/>   clears image right floating, text will take full width even if white space is created above -->
        </div>


        <!-- FORM START FROM HERE-->
        <form > 
            <div class="fullpage">
            <hr>
            <h3 style="color:#800000;"><u>Details of the student</u></h1>
            <table border="0">
                <tr>
                    <td class="col1">First name *</td>
                    <td class="col2"><input id="first_name" type="text" onblur="checkfield_first();" placeholder="abc" required/></td>
                    <td class="col3"><span id="message">2-15 characters</span></td>	
                </tr>
                <tr>
                    <td class="col1">Last name </td>
                    <td class="col2"><input id="last_name" type="text" onblur="checkfield_last();" placeholder="abc" /></td>
                    <td class="col3"><span id="message2">2-15 characters</span></td>	
                </tr>
                <tr>
                    <td class="col1">Father's name </td>
                    <td class="col2"><input id="father_name" type="text" placeholder="abc";/></td>
                    <td class="col3"><span id="message">2-15 characters</span></td>	
                </tr>
                <tr>
                    <td class="col1">Date of Birth </td>
                    <td class="col2"><input id="dob" type="date"  /></td>
                    <td class="col3"><span id="message">day-month-year</span></td>	
                </tr>
                <tr>
                    <td class="col1">Nationality </td>
                    <td class="col2">
                        <select name="country" id="country">
                            <option value="op1">Indian</option>
                            <option value="op2">Migrant ( Bhutan/Nepal ) </option>
                            <option value="op2">Others</option>
                        </select>
                    </td>	
                </tr>
                <tr>
                    <td class="col1">Gender </td>
                    <td class="col2">
                        <input type="radio" name="sex" value="male" checked>Male<br>
                        <input type="radio" name="sex" value="female" >Female<br>
                        <input type="radio" name="sex" value="others" >Others<br>
                    </td>
                </tr>
                <tr>
                    <td class="col1">Address </td>
                    <td class="col2"><input id="add" type="text" onblur="check_add();" /></td>
                    <td class="col3"><span id="message3">5 - 30 characters</span></td>	
                </tr>
                <tr>
                    <td class="col1">Contact number </td>
                    <td class="col2"><input id="ph_no" type="text" onblur="check_contact();" placeholder="xxx-xxx-xxxx"/></td>
                    <td class="col3"><span id="phone">10 digits</span></td>	
                </tr>
                <tr>
                    <td class="col1">Batch </td>
                    <td class="col2"><input id="batch" type="text" value="2021-2022" readonly/></td>
                </tr>
                <tr>
                    <td class="col1">Courses of Interest </td>
                    <td class="col2">
                        <input type="checkbox" name="interest" value="coe" checked>Computer Science<br>                  
                        <input type="checkbox" name="interest" value="ece">Electronics<br>
                        <input type="checkbox" name="interest" value="ele">Electrical<br>
                        <input type="checkbox" name="interest" value="mec">Mechanical<br>
                        <input type="checkbox" name="interest" value="bio">Biotech<br>
                        <input type="checkbox" name="interest" value="cvl">Civil Engineering<br>
                    </td>
                    <td class="col3"><span id="message"></span></td>	
                </tr>
                <tr>
                    <td class="col1">Password </td>
                    <td class="col2"><input id="pass1" type="password" /></td>
                    <td class="col3"><span id="phone">for new DTU user ID </span></td>
                </tr>	
                <tr>
                    <td class="col1">Re-enter password </td>
                    <td class="col2"><input id="pass2" type="password" onblur="check_pass();"/></td>                
                    <td class="col3"><span id="password"></span></td>
                </tr>
            </table>
            </div>	

            <!-- BUTTON -->
            <br><br>
            <div class="container">
                <button type="button" class="button button1" onclick="submitted();" >Submit</button>
                <br>
                <br>
                <img src="campus.jpg" style="border: 5px solid white;">
            </div>
        
        </form>
        
        <p id="notes">
            <br>
            Note : your user ID is the phone number you entered.<br>
            * - necessary fields <br>
            For more information visit : <a href="http://dtu.ac.in/">dtu.ac.in</a><br>
            Developed by : Shantanu Singh
            Introduction to Web-development, Coursera
        </p>
     
    </body>
</html>
