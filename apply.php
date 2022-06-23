<!DOCTYPE html>
<html>

  <head>
    <title> META LAB KUST </title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

    <!-- Local CSS file -->
    <link rel="stylesheet" href="myhome.css">
  </head>
<body>

 <style>


div.main{
 
 float:left;
 border-radius: 5px;
 Border:2px solid #999900;
 padding:0px 50px 20px;
 font-family: 'Raleway', sans-serif;
}
#error{
 display:block;
 margin-top: 10px;
 margin-bottom: 10px;
}
#success{
 color:green;
 font-weight:bold;
}
span{
 color:red;
}
h2{
background-color: #FEFFED;
padding: 32px;
margin: 0 -50px;
text-align: center;
border-radius: 5px 5px 0 0;
}
b{
font-size:18px;
display: block;
color: #555;
}

label{
color: white;
font-size: 14px;
font-weight: bold;
}
input[type=text],
input[type=password],
input[type=number],
input[type=email]{
width:96%;
height:25px;
padding:5px;
margin-top:5px;
margin-bottom:15px;
}
input[type=radio]
{
margin:20px;
}
button{
  color:#ffbc00;
  border:2px solid #fafafa;
  border-radius: 30px;
  padding :7px;
  border :none;
  border-radius:4px;
}
select{
margin-bottom: 15px;
margin-top: 5px;
width: 100%;
height: 35px;
font-size: 16px;
font-family: cursive;
}
input[type=submit],
input[type=reset]{
padding: 10px;
background: linear-gradient(#ffbc00
 5%, #ffdd7f 100%);
border: 1px solid #e5a900;
color: #524f49;
cursor: pointer;
width: 49.2%;
border-radius: 2px;
margin-bottom: 15px;
font-weight:bold;
font-size:16px;
}
input[type=submit]:hover,
input[type=reset]:hover
{
background: linear-gradient(#7e6111 5%, #ffbc00 100%);
}
body{
  background-color:mediumseagreen;
}

</style>
<form method="post" action=" mycenterapplication1.php">
 <div class="container">
 <div class="main">
<div class="body-text">
 <h2> WELCOME TO META LAB KUST WUDIL<br> In collaboration with Department of Mechatronix Engineering </h2>
 <span id="error">
 <form action="" method="post">
 <label>Full Name:<span>*</span></label><br>
 <input name="name" type="text" placeholder="full name"required ><br>

 <label>REG. NO:<span>*</span></label><br>
 <label> <input name="regnum" type="text" placeholder="Registration number" required> </label><br>

 <label>Department:<span>*</span> </label><br>
<label> <input name="dept" type="text" placeholder="Department"required > </label><br>

 <label> Current level:<span>*</span> </label><br>
             <select name="currentlevel"required>
             <option value="select"> select </option>
              <option value="level 100"> level 100 </option>
              <option value="level 200"> level 200 </option>
              <option value="level 300"> level 300 </option>
              <option value="level 400"> level 400 </option>
              <option value="level 500"> level 500 </option>
              <option value="graduate"> graduate </option>

            </select>
            <label>Phone:<span>*</span></label><br>
 <input name="phone" type="number" placeholder="11-digit number"required ><br>
 
 <label>Email:<span>*</span></label><br>
<input name="email" type="email" placeholder="Ex-anderson@gmail.com" required><br>
 
 <label>Marital Status:<span>*</span></label><br>
<select name="marital" required><br><br>
<option value="select">select</>
<option value="single">single</option><br>
<option value="married">married</option><br>
<option value="single">single</option><br>
<option value="married">married</option><br>
</select><br>
<!--input name="marital" type="text" placeholder="Marital Status"required ><br-->
  
  <label> Gender:<span>*</span> </label> <br>
 <select name="sex"required>
 <option value="select"> select </option>
 <label> <option value="male"> male </option></label>
<label><option value="female"> female </option> </label>
</select>

<label>RELIGION:<span>*</span></label><br>
<select name="religion" required><br>
<option value="select"> select </option>
<option value="islam">islam</option>
<option value="christianity">christianity</option>
<option value="other">other</option>
</select>

<label>:<span>*</span></label><br>
<label>Tribe:<span>*</span></label><br>
<label><input name="tribe" type="text" placeholder="tribe"required ></label><br>

<label>Nationality:<span>*</span></label><br>
<label><input name="nationality" type="text" placeholder="nationality"required ></label><br>

          <label> State of Origin:<span>*</span> </label><br>
              <select name="state" required>
              <option value="select">select</option>
              <option value="Abia">Abia </option>
              <option value="Adamawa"> Adamawa </option>
              <option value=" Akwa Ibon"> Akwa Ibon </option>
              <option value=" Anambra"> Anambra </option>
              <option value=" Bauchi"> Bauchi </option>
              <option value=" Bayelsa"> Bayelsa </option>
              <option value=" Benue"> Benue </option>
              <option value=" Borno"> Borno </option>
              <option value=" Cross River"> Cross River </option>
              <option value="Delta"> Delta </option>
              <option value="Ebonyi"> Ebonyi </option>
              <option value="Edo"> Edo </option>
              <option value="Ekiti"> Ekiti </option>
              <option value="Enugu"> Enugu </option>
              <option value="Gombe"> Gombe </option>
              <option value="Imo"> Imo </option>
              <option value="Jigawa"> Jigawa </option>
              <option value="Kaduna"> Kaduna </option>
              <option value="Kano"> Kano </option>
              <option value="Katsina"> Katsina </option>
              <option value="Kebbi"> Kebbi </option>
              <option value="Kogi"> Kogi </option>
              <option value="Kwara"> Kwara </option>
              <option value="Lagos"> Lagos </option>
              <option value="Nassarawa"> Nassarawa </option>
              <option value="Niger"> Niger </option>
              <option value="Ogun"> Ogun </option>
              <option value="Ondo"> Ondo </option>
              <option value="Osun"> Osun </option>
              <option value="Oyo"> Oyo </option>
              <option value="plateau"> Plateau </option>
              <option value="Rivers"> Rivers </option>
              <option value=" Sokoto"> Sokoto </option>
              <option value=" Taraba"> Taraba </option>
              <option value=" Yobe"> Yobe </option>
              <option value=" Zamfara"> Zamfara </option>
              <option value=" FCT"> FCT </option>
              <option value=" Other">Other </option>
              <br>
            </select>       
 <label> Local Government Area:<span>*</span> </label><br>
 <input name="localgov" type="text" placeholder="local Government Area"required > </label><br>
 
 <label> Permanent Home Address:<span>*</span> </label><br>
 <label><input name="phomeadd" type="text" placeholder="permanent home address"required > </label><br>

<label> Date Of Birth (DOB):<span>*</span> </label><br>
<label><input name="date" type="date" placeholder="date"required > </label><br><br>

<label>I ensure that all informations i provided it's true, and i would abide by all rules and regulations of the CENTER:<span>*</span> </label> <br> 
<label><input name="checkbox" type="checkbox" required> </label>
<p>

<label> WELCOME TO CENTER FOR ARTIFICIAL INTELLEGENCE AND ROBOTICS STUDIES:<span>*</span> </label><br>
<select name="mycourse" required>
            <option value="Select The COURSE OF YOUR CHOICE">Select The COURSE OF YOUR CHOICE</option>
              <option value="Web Development">Web Development </option>
              <option value=" Introduction to bootsrap">Introduction to bootsrap</option>
              <!-- <option value="Game Development"> Game Development </option> -->
              <option value=" Andriod Development"> Andriod  Development </option>
              <!-- <option value="Robotics Development">Robotics Development </option> -->
              <option value=" Artificial Intellegence"> Artificial Intellegence </option>
               <option value="Ethical Hacking"> Ethical Hacking </option>
              <option value="Cyber Security"> Cyber Security </option>
              <option value="Networking"> Networking </option>
              <!-- <option value="Machine Learning"> Machine Learning </option> -->
              <!-- <option value=" Deef Learning"> Deef Learning </option> -->
              <option value="Introduction To Electronics & Arduino">Introduction To Electronics & Arduino</option>
              <option value=" Computer Engineering Tech"> Computer Engineering Tech </option>
              <option value="Introduction To Git & Github"> Introduction To Git & Github </option>
              <option value="Python Programming Language">Python Programming Language </option>
              <option value="Graphic Design">Graphic Design</option>
              <option value="Html/Css">Html/Css</option>
              <option value="Microsoft Office">Microsoft Office</option>
              <option value="Africanstalk">Africanstalk </option>
              
              <br>
            </select>
            <button name="mechatronics" type="submit">SUBMIT</button><br>
            </div>
 </form>
 </body>
</html>