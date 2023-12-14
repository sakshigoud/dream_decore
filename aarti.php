<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration Form</title>
    <style>
      body{
        font-family: calibri, Helvetica, sans-serif;
        background-color: cyan;
        width: 80%;
        
      }  
      .container{
        padding:50px;
        background-color:pink;  
     }
     input[type=text], input[type=password], input[type=email] ,textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1; 
} 
hr{
    border:1px solid #f1f1f1;
    margin-bottom: 25px;
} 
      </style>
    </head>
    <body></br>
<form>
<center> <h1>Student Registration Form</h1></center>
    <div class="container">
        <label>Firstname</label>
        <input type="text" name="Firstname" placeholder="firstname" required/></br>
        <label>Middlename</label>
        <input type="text" name="Middlename" placeholder="middlename"/></br>
        <label>Lastname</label>
        <input type="text" name="Lastname" placeholder="lastname" required /></br>
    
   <label>Gender: </label></br>
   <input type="radio"  name="gender" value="Male">Male
   <input type="radio"  name="gender" value="Female">Female
   <input type="radio"  name="gender" value="Others">Others</br>

<label>Phone:</label>
<input type="text" name="Country code" placeholder="country_code" value="+91"/></br>
<input type="text"  name="phone" placeholder="phone"/></br>
Email:  
<input type="email" id="email" name="email" required/> </br>    
Password:  
<input type="Password" id="pass" name="pass"required> </br>  
Re-type password:  
<input type="Password" id="repass" name="repass"required></br> 
Address  
<br>  
<textarea cols="80" rows="5" value="address"required></textarea></br>
<label>Course :</label>  
<select>  
<option value="Course">UG Course</option>  
<option value="BCA">BCA</option>  
<option value="Bsc CS">Bsc CS</option>  
<option value="Bsc Zoology">Bsc Zoology</option>  
<option value="Bsc Biotechnology">Bsc Biotechnology</option>  
<option value="Bsc Forensic">Bsc Forensic</option>  
<option value="Bsc Fishers Science ">Bsc Fishers Science</option> 
<option value="Bsc Pharmaceutical Chemistry">Bsc Pharmaceutical Chemistry</option>  
<option value="Bsc Horticulture Science">Bsc Horticulture Science</option>  
<option value="Bsc Electonics">Bsc Electronics</option>  
<option value="Bsc Physics">Bsc Physics</option>  
<option value="Bsc Chemistry">Bsc Chemistry</option>  
<option value="Bsc Botony">Bsc Botany</option> 
<option value="Bsc Economics">Bsc Economics</option>  
<option value="Bsc Environmental Science">Bsc Environmental Science</option>  
<option value="Bsc Geography">Bsc Geography</option>  
<option value="Bsc Biochemistry">Bsc Biochemistry</option>  
<option value="Bsc Bio-infomatics">Bsc Bio-infomatics</option>  
</select> 
<label>Year:</label>
<select>
<option value="year">YEAR</option> required</br>

<option value="1st year">1st year</option>  
<option value="2nd year">2nd year</option> 
<option value="3rd year">3rd year</option> 
</select></br>
<center><button type="submit" class="registerbtn">Register</button></center>
    </div>
</form>
    </body>
</html>