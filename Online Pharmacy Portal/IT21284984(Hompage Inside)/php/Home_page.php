<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online pharmacy website</title>
<link rel="stylesheet" href="../styles/style1.css"> 
<link rel="stylesheet" href="../styles/feedback_styles.css"> 
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet"> 
</head>
<body>

<?php 

  require_once "../../IT21286414/php/header.php";

  if (isset($_SESSION['userID']))
  {
        if($_SESSION['userID'] === 1)
        {
          require_once "../../IT21286414/php/navbar-admin-home.php";
        }
        else
        {
          require_once "../../IT21286414/php/navbar-userMain.php";
        }
        
  }
  else
  {
    require_once "navbar-general.php";
  }

  if(isset($_GET['payment']))
  {
    if($_GET['payment'] === 'success')
    {
      echo '<script>alert("Your Payment is Succsessful")</script>';
    }
  }

  if(isset($_GET['Feedback']))
  {
    if($_GET['Feedback'] === 'success')
    {
      echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); </script>';
    }
  }

  
  ?>     

      </div>
    </nav>
<div class="all-content1" >    
<div class="slideshow-container">

        <div class="mySlides fade">
          <div class="banner-1"><h1>WE CARE</h1> <br><h3>ABOUT YOUR </h3><br><h2>HEALTH</h2></div>
          <div class="banner1-1"><a href=""> READ MORE</a></div>
          <img src="../image/Banner1 .jpg" style="width:fit-content">
          
        </div>
        
        <div class="mySlides fade">
          <div class="banner-2">
            <h2><i class="fa fa-quote-left"></i></h2><h3>All leading </h3><br><h1>international medical brands</h1> <h2>are under one roof </h2><br><h2><i class="fa fa-quote-right"> </h2></i></div>
          <img src="../image/Banner2.jpg" style="width:fit-content;">
         
        </div>
        
        <div class="mySlides fade">
          <div class="banner-3"><h2><i class="fa fa-quote-left"></i></h2><h3>For the fist time,<br>TruHealth pharmacy <br>
            brings you an offer that you should never miss. </h3><h1>Flat 25% off on all skincare products</h1><h2><i class="fa fa-quote-right"> </h2></i></div>
          <img src="../image/Banner3.jpg" style="width:fit-content">
         
        </div>
        <div class="mySlides fade">
          
          <img src="../image/Banner4.jpg" style="width:fit-content">
         
        </div>
        <div class="mySlides fade">
          <div class="banner-5"><h2><i class="fa fa-quote-left"></i></h2><h1></i>Emergency   </h1> <br><h3> Ambulance</h3><br><h2>Service<br><i class="fa fa-phone"></i> 1990</h2><h2><i class="fa fa-quote-right"></i></h2></div>
          <img src="../image/Banner5.jpg" style="width:fit-content">
         
        </div>
        </div>

        
        <div style="text-align:center">
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span>
          <span class="dot"></span> 
        </div>


<!--all part-->
    <div class="container">
      <div class="item item-1" id="item item-1">
        
        <h1><i class="fa fa-home "></i> Home</h1>
        <div class="container-1-1">
          <div class="item-1-1" ><div class="item-1-1-1" ><img src="../image/home1.jpg" alt="home1" width="500px"  ></div></div>
          <div class="item-1-1"style="flex-grow:8; font-family: 'Roboto Slab', serif;";> 
            <div class="item-1-1-2" >
            <h1>Traditional medicine</h1>
            <p>Traditional medicine (also known as indigenous or folk medicine) refers to medicinal parts of traditional knowledge that developed through generations inside many communities' folk beliefs prior to the advent of modern medicine. Traditional medicine is defined by the World Health Organization (WHO) as "the sum total of knowledge, skills, and practices based on theories, beliefs, and experiences indigenous to different cultures, whether explicable or not, used in the maintenance of health as well as the prevention, diagnosis, improvement, or treatment of physical and mental illness, whether explicable or not." Traditional medicine and scientific medicine are frequently contrasted. <br><br>
            Traditional medicine is used by up to 80% of the population in various Asian and African nations for primary health care. Original medicine is frequently labeled as alternative medicine when it is taken outside of its traditional society. Traditional European medicine, traditional Chinese medicine, traditional Korean medicine, traditional African medicine, Ayurveda, Siddha medicine, Unani, ancient Iranian medicine, traditional Iranian medicine, medieval Islamic medicine, Muti, and If are all examples of traditional medicines. Herbalism, ethnomedicine, ethnobotany, and medical anthropology are some of the scientific fields that research traditional medicine.<br><br>
            However, the WHO warns that "inappropriate use of traditional medicines or practices might have severe or harmful consequences" and that "more study is needed to determine the efficacy and safety" of traditional medicine practices and medicinal plants. As a response, the WHO has launched a nine-year strategy to "assist Member States in creating proactive policies and putting in place action plans that will increase the role of traditional medicine in keeping populations healthy." <br>
            </p></div></div>
        </div>

        <div class="container-1-2">
          <div class="item-1-2 item-1-2-1" style="flex-grow:8" ;><h1>Modern medicine</h1><p>Medicine is the science and practice of caring for a patient, including managing their diagnosis, prognosis, prevention, treatment, palliation, and improving their health. Medicine is a broad term that refers to a multitude of health-care methods that have emerged to preserve and restore health through sickness prevention and treatment. Modern medicine uses biomedical sciences, biomedical research, genetics, and medical technology to diagnose, treat, and prevent injury and disease, typically with pharmaceuticals or surgery, but also with psychotherapy, external splints and traction, medical devices, biologics, and ionizing radiation, among other therapies.<br><br>
          Medicine has been practiced since prehistoric times, and for the most part, it was an art (a field of skill and knowledge) with strong ties to local religious and philosophical ideas. For example, a medicine man would use herbs and pray for healing, or an ancient philosopher and physician might use humorism ideas to administer bloodletting. Since the emergence of modern science in the nineteenth century, most medicine has evolved into a hybrid of art and science (both basic and applied, under the umbrella of medical science). While suture sewing technique is learnt by practice, science provides insight into what happens at the cellular and molecular level in the tissues being sewn.
            </p></div>
          <div class="item-1-2 " ><img src="../image/home2.jpg" alt="home2" width="500px"></div>
        </div>
    
      </div>   
        
     
      <div class="item item-2" id="item item-2">
        <h2><i class="fa fa-tasks"></i> Categories</h2>
        <div class="container-2">
          <div class="item-2-0 item-2-1"><a href=""><h3><i class="fa fa-heartbeat "></i>
            MEDICINE</h3></a>
            <ul>
            <li>HEART</li>
            <li>CENTRAL</li>
            <li>EAR, NOSE, THROAT </li>
            <li>DIABETES</li>
            <li>EYE</li>
            <LI>VITAMINS & MINERALS</LI>
            <LI>SKIN(PHARMA)</LI>
  
            </ul></div>
          <div class="item-2-0 item-2-2"><a href=""><h3><i class="fa fa-stethoscope"></i>
            MEDICAL DEVICES</h3></a>
            <ul>
            <li>FIRST AID</li>
            <li>HELTH DEVICES</li>
            <li>SUPPORTS & BRACES</li>
  
            </ul></div>
          <div class="item-2-0 item-2-3">
            <a href=""><h3><i class="fa fa-medkit"></i>
            WELLENESS</h3></a>
            <ul>
            <li>MOTHER & BABY</li>
            <li>COUGH, COLD & ALLERGY</li>
            <li>DIET & NUTRITION</li>
            <li>TRADITIONAL REMEDIES</li>
            <LI>EWYES & EARS</LI>
            <li>PET CARE</li>
            <LI>MOSQUITO PROTECTION</LI>
            <LI>SEXUAL HEALTH</LI>
  
            </ul>
  </div>
          <div class="item-2-0 item-2-4">
            <a href=""><h3><i class="	fa fa-user-md"></i>
              PERSONAL CARE</h3></a>
              <UL>
              <LI>NOURISHMENT</LI>
              <LI>ACCESSORIES</LI>
              <LI>SKIN CARE</LI>
              <LI>HAND & FOOT CARE</LI>
              <LI>BODAY CARE</LI>
              <LI>WOMENS PERSONAL CARE</LI>
    
              </UL></div>
        </div>

        
        
        

        
        


      </div>


<div class="item item-10" id="about-us">
        <h2 style="font-size: 30px;"><i class="fa fa-group"></i> Our Team</h2>   

        
        <div class="Our-team">
          <div class="container-10">
            <div class="Our-team-0 item-10-1">
              <img src="../image/aboutUs/our-team1.jpg" alt=""><h2>L.P. N. Gunathilaka</h2>
              <p class="title-Our-team"><i class="fa fa-briefcase"></i>Team Leader</p>
              
              <p><a href="IT21286414@my.sliit.lk">IT21286414@my.sliit.lk</a></p>
              <p><button class="button-Our-team">Contact</button></p></div>

            <div class="Our-team-0 item-10-2"><img src="../image/aboutUs/our-team2.jpg" alt="">
              <h2>A. N .De Zoysa</h2>
              <p class="title-Our-team"><i class="fa fa-wrench"></i>Team member</p>
           
              <p><a href="IT21288708@my.sliit.lk">IT21288708@my.sliit.lk</a></p>
              <p><button class="button-Our-team">  Contact</button></p></div>

            <div class="Our-team-0 item-10-3">
              <img src="../image/aboutUs/our-team3.jpg" alt="">
              <h2>W. D. S. P. Perera</h2>
              <p class="title-Our-team"><i class="fa fa-wrench"></i>Team member</p>
              
              <p><a href="IT21285110@my.sliit.lk">IT21285110@my.sliit.lk</a></p>
              <p><button class="button-Our-team">Contact</button></p></div>

            <div class="Our-team-0 item-10-4">
              <img src="../image/aboutUs/our-team4.jpg" alt="">
              <h2>R. A. G. D. Ranathunga</h2>
              <p class="title-Our-team"><i class="  fa fa-wrench"></i>Team member</p>
              <p><a href="IT21284984@my.sliit.lk">IT21284984@my.sliit.lk</a></p>
              <p><button class="button-Our-team">Contact</button></p></div>

            <div class="Our-team-0 item-10-5">
              <img src="../image/aboutUs/our-team5.jpg"  alt="">
              <h2>M.M. Hewakapuge </h2>
              <p class="title-Our-team"><i class="  fa fa-wrench"></i>Team member</p>
              <p><a href="IT21268908@my.sliit.lk">IT21268908@my.sliit.lk</a></p>
              <p><button class="button-Our-team"> Contact</button></p></div>
          </div>
        </div>
      </div>
        
        
        
  
      </div> 

      <div class="item item-11" id="contact-us">
        <h2 style="color:white;">Contact Us</h2>
        <h1><a href=""><i class="	fa fa-google-plus-square"></i></a>
        <a href=""><i class="	fa fa-instagram"></i></a>
        <a href=""><i class="	fa fa-linkedin-square"></i></a>
        <a href=""><i class="	fa fa-twitter-square"></i></a>
        <a href=""><i class="	fa fa-whatsapp"></i></a>
        <a href=""><i class="	fa fa-youtube-square"></i></a>
        <a href=""><i class="	fa fa-facebook-square"></i></a>	
      </h1>

      
    </div>   

</div> 
 
</body>
</html>








<script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
  }
  </script>

<script>
  window.onscroll = function() {myFunction()};
  
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky")
    } else {
      navbar.classList.remove("sticky");
    }
  }
  </script>