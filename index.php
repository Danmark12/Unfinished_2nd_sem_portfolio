<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Porfolio</title>
    <link rel="index.php css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/acde318e45.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- header -->
    <div id= "header">
<div class="container">

    <nav>
        <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/405828117_385062773877074_2099936351881724581_n.png?_nc_cat=110&ccb=1-7&_nc_sid=510075&_nc_eui2=AeFmsE5io_-pVYC1c-Om5Gv9iLMU1jcIViSIsxTWNwhWJKgcj5JdN3MFGunpz2dS7awiPZWPnjrgw1WlYN4X5sij&_nc_ohc=Jm_WCk5W5ekAX81LAVC&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdS_IXeX_eE3QPOAcD5JbhiBmPxHInu4MwKtUIUFLZ1-Fw&oe=6596868C" class="logo">
       <ul id="sidemenu">
          <li><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#project">Project</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
          <i class="fa-solid fa-x" onclick="closemenu()"></i>
       </ul>
       <i class="fa-solid fa-bars" onclick="openmenu()"></i>
    </nav>
    <div class="header-text">
        <p>Hi There! I'm</p>
        <h1>Dan Mark <span> Javier</h1>
        <h2>UI/UX Designer</h2>
        <p>Welcome to my Portfolio website, enjoy visiting my works<br> related to web development and ui/ux design</p>
    </div>
</div>
    </div>

    <!-- about -->
           
<div id="about">
  
        <div class="about-col-1">
            <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/386873157_722806096073345_8222889506942742435_n.jpg?stp=dst-jpg_p206x206&_nc_cat=103&ccb=1-7&_nc_sid=510075&_nc_eui2=AeE9rrGTJs_GIQsz8pdb6D2wK-rS2W246I4r6tLZbbjojkyXHjv2sJ0__Vg2aRbrNfZ6j9Fu3b_bp9lu4_bbEA4l&_nc_ohc=tVJHx0ksYlcAX9YYQku&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdTw_m_i90sxMSsgkaBOeVZxZ2BiWWMv0AYF8QM1XkoVlg&oe=65993311">
        </div>
        <div class="about-col-2">
            <h1 class="sub-title">About Me</h1>
            <p>Hi everyone!  My name is Dan Mark P. Javier just call me "Dan". I am studying in Northern Bukidnon State College as an second year Information Technology (IT) student. I'm UI/ UX designer from our last project and also learning to be a web developer. I believe that " Success is no accident. It is a hard work, perseverance, learning, studying, sacrifice and most of all love of  what you are doing or learning to do."</p>
             <p>I highly appreciated for visiting my website. I am passionate about helping your company grow through our collaboration, to build a functional and user friendly website.  My goal is to make my costumer satisfied. Please feel free for contacting me through the listed contact</p>
        </div>
        <div class="tab-titles">
            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
            <p class="tab-links" onclick="opentab('hobbies')">Hobbies</p>
            <p class="tab-links" onclick="opentab('experience')">Experience</p>
        </div>
        <div class="tab-contents active-tab" id="skills">
            <ul>
                <li><span>UI/UX</span><br> Designing Web</li>
                <li><span>web development </span><br>Designing Web</li>
                <li><span>App development</span><br>Designing Web</li>
            </ul>
        </div>
        <div class="tab-contents" id="experience">
            <ul>
                <li><span>sadsad</span><br> Designing Web</li>
                <li><span>web dedsa </span><br>Designing Web</li>
                <li><span>App sdsaddevelopment</span><br>Designing Web</li>
            </ul>
        </div>
        <div class="tab-contents" id="hobbies">
            <ul>
                <li><span>eating</span><br> Designing Web</li>
                <li><span>hating</span><br>Designing Web</li>
                <li><span>Aaaping</span><br>Designing Web</li>
            </ul>
        </div>
   

</div>
    <!-- ------------Project--------- -->
<div id="project">
     <div class="container">
           <h1 class="sub-title">My Project</h1>
           <div class="project-list">
            <div>
            <i class="fa-solid fa-code"></i>
               <h2>Web Design</h2> 
               <p>sndjffoufhwhjhdjdklqjdklqjd</p>
               <a href="#">learn more</a>
            </div>
            <div>
            <i class="fa-solid fa-crop"></i>
               <h2>ui/ux Design</h2  > 
               <p>sndjffoufhwhjhdjdklqjdklqjd</p>
               <a href="#">learn more</a>
            </div>          
</div>
</div>
</div>
<!-- ------------------my woks----------------- -->
<div id="portfolio">
    <div class="container">
       <h1 class="sub-title">My Work</h1>
       <p>Explore  the projects i've worked on so far. </p>
       <div class="work-list">
        <div class="work">
            <img src="data:image/jpeg;base64,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" >
       <div class="layer">
            <h3>Job Information Management System</h3>
       <p>A System used by businesses, the manager can easily assign job for her/his employee. </p>
       <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
        </div>
        <div class="work">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSqURL7TtxpZ3LFqu9ZDcMtMXpEUacWDxBvQ&usqp=CAU">
            <div class="layer">
            <h3>Personal Website /Portfolio</h3>
       <p>My personal website/portfolio.  i make this website to display my profile, skills, and project.</p>
       <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
        </div>
        </div>
       </div>
       <a href="#" class="btn">See More</a>
    </div>
</div>
<!-- --------------------contact------------------ -->
<div id="contact">
<footer>
<p>Dan Mark <span>Javier</span></p>
<p>Contact me Through the icon listed below.</p>

<div class="social">
    <a href="#"><i class="fa-brands fa-facebook"></i></a>
    <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
    <a href="#"><i class="fa-solid fa-g"></i></a>
    <a href="#"><i class="fa-solid fa-map-location-dot"></i></a>
</div>
<p class="end">Thank you for visiting</p>
</footer>
</div>

<script>
var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");

function  opentab(tabname){
    for(tablink of tablinks){
        tablink.classList.remove("active-link");
    }
    for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
    }
    even.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}


</script>

<script>
    var sidemenu = document.getElementById("sidemenu");

    function openmenu(){
        sidemenu.style.right = "0";
    }
    function closemenu(){
        sidemenu.style.right = "-200px";
    }

</script>
</body>
</html>