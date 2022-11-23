<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FeedbacK TruHelth</title>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

*{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
}

body{
    background-image: url(../image/pay2.jpg);
   
}
.FeedbacK_body{
	
 
   
    margin-top: 10vw;
    margin-left: 25vw;
    margin-right: 25vw;
    border-radius: 20px;

}
.radiobtn{
    list-style: none;
}


.radiobtn{
    position: relative;
    text-transform: capitalize;
    left: 10vw;
}

form{
   
    padding: 30px;
 
}


.bodycenter{
	border: 3px solid #DC143C;
    color: white;
    background-color: black;
    border-radius: 25px;
    padding: 50px;
}


.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  
  



  /* Hide the browser's default radio button */
  .container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }
  
  /* Create a custom radio button */
  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
  }

  /* On mouse-over, add a grey background color */
  .container:hover input ~ .checkmark {
    background-color: #ccc;
  }
  
  /* When the radio button is checked, add a blue background */
  .container input:checked ~ .checkmark {
    background-color: #2196F3;
  }
  
  /* Create the indicator (the dot/circle - hidden when not checked) */
  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }
  
  /* Show the indicator (dot/circle) when checked */
  .container input:checked ~ .checkmark:after {
    display: block;
  }
  
  /* Style the indicator (dot/circle) */
  .container .checkmark:after {
       top: 9px;
      left: 9px;
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: white;
  }

  /* comment area */
  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
  }

  /* input */
  input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;

  }
  input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
  }

  /* lable */


  /* Button */
  .button {
    display: inline-block;
    border-radius: 4px;
    background-color: #DC143C;
    border: none;
    color: white;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    font-weight: 500;

 
  }
  
  .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }
  
  .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }
  
  .button:hover span {
    padding-right: 25px;
  }
  
  .button:hover span:after {
    opacity: 1;
    right: 0;
  }


 
</style>

</head>

<body>

</body>

</html>


   

<div class="bodycenter">
<body class="FeedbacK_body">

    <center>
    <h1 class="FeedbacK_body_header">Feedback Form</h1>
   <div class="from_main">

	  <h3 >Please help us to serve you better by taking a couple of minutes. </h3>

	    <form action="feedback.php" method="post" >

		  <h2>How satisfied were you with our Service?</h2></center>

					<ul class="radiobtn">
						
						<li><label class="container">excellent
							<input type="radio" checked="checked" name="radio">
							<span class="checkmark"></span>
							</label>
						</li>

						<li>
							<label class="container">good
							<input type="radio" name="radio">
							<span class="checkmark"></span>
							</label>
						</li>

						<li>
							<label class="container">neutral
							<input type="radio" name="radio">
							<span class="checkmark"></span>
							</label>
						</li>
						<li>	<label class="container">poor
							<input type="radio" name="radio">
							<span class="checkmark"></span>
							</label>
			
						</li>

	   </ul>	  

				

	<textarea name="comments" placeholder="Additional comments"></textarea>

	<label for="name">User Name</label>
	<input type="text"  placeholder="Your Name" name="name">

	<label for="lname">Your Email Address</label>
	<input type="email" placeholder="Your Email "  name="email">

	<label for="lname">Your Contact Number</label>
	<input type="text" placeholder="Your Phone Number"  name="num">

	<button class="button" name="submit1" style="vertical-align:middle"><span>Submit Feedback</span></button>

</div>

</body>
</html>
