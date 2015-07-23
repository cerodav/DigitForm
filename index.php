<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    .message_submit
    {
      background-color: #FC0;
      color: #000;
      text-align: center;
    }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Form</title>

    <link href="css/nittform.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  </head>
  <body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Digital India 2015</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#event">Event Catogeries</a></li>
            <li><a href="#form">Register</a></li>
          </ul>
        </div>
      </div>
  </nav>

  <div class="container" id="home">
    <div class="jumbotron">
      <div class="row">
        <?php
        if(isset($_GET['status']))
        {
          if(strcmp($_GET['status'],"success")==0)
            echo "<div class='message_submit'>Successfully registered</div>";
          else
            echo "<div class='message_submit'>Registration failed, try again later</div>";
        }

        ?>
        <div class="col-md-2">
          <img src="./images/nitt.jpg" class="img-responsive" alt="Responsive image">
        </div>
        <div class="col-md-8">
          <h1 align="center">Digital India Workshop</h1>
          <h3 align="center">National Institute of Technology</h3>
          <h3 align="center">Tiruchirappalli - 620015</h3>
        </div>
        <div class="col-md-2">
          <img src="./images/digi.jpg" class="img-responsive" alt="Responsive image">
        </div>
      </div>
      <div class="row">
        <center><u><h4 align="center">Kind Attention : Students of Colleges/Schools and Faculty Members</h4></u>
        <u><h5 align="center">(open to both NIT Trichy and other institutions)</h5></u>
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="text-justify">
            In order to transform the entire ecosystem of public services through the use of information
            technology, the Government of India has launched the Digital India programme with the vision
            to transform India into a digitally empowered society and knowledge economy.
            In view of this, a series of events (as given below in <a href="#event"> Annexure I</a>) followed by Digital India
            Workshop are planned at National Institute of Technology, Tiruchirappalli .
            The series of events will be planned, monitored and scrutinized by committees. They will be
            completed before 18th August, 2015. The winners will be awarded prizes on 18th August 2015.
            Interested students / faculty members are requested to participate in as many events as
            possible after registration.
          </div>
          <center>
            <br><br>
            <strong>There is NO registration fee.</strong><br><br>
            <mark>Kindly Fill the form before 20th July 2015.</mark><br><br>
            <strong>The main workshop is scheduled on 18th August 2015.</strong><br><br>
            In this regard, it is requested to give wide publicity to take part in the events and workshop and
            get benefitted.<br><br>
          </center>
          <div class="pull-right">
            Digital India Workshop<br>
            Nodal Office<br>
            NIT Trichy<br>
            digitalindia@nitt.edu
          </div>
          <div class="row"><br><br><br><br>
            <hr>
            For details, kindly contact : Dr.S.R.Balasundaram, NIT Trichy, <a href="https://mail.google.com/mail/?extsrc=mailto&url=mailto%3Ablsundar%40nitt.edu">blsundar@nitt.edu</a>, 9994291420
          </div>
        </div>
        <div class="col-md-2"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="container" id="event">
    <div class="jumbotron">
      <h4 align="right">Annexure I</h4>
      <u><h2 align="center">Event Categories</h2></u>
      <ol>
        <li><strong>Research Paper/Poster Writings</li></strong><br>
        <li><strong>Story/script writing on benefits from e-services/online services </li></strong><br>
        <li><strong>Skit by students on benefits from digital learning/e-services</li></strong><br>
        <li><strong>Digi Art Work</li><br></strong>
          <strong><br>Introduction - </strong>Digital art is an artistic work or practice that uses digital technology as an essential part
          of the creative or presentation process. Digital Art brings together Art, Technology, Math and Science.
          Digital art requires a creative spirit and the knowledge of art, design and computers. The digital artists
          must be able to move easily between the worlds of art, science, math and technology.
          <strong><br><br>Major Categories</strong><br>
          <ul>
            <li>Graphic illustrations – in advertising, logos, brochures, posters</li>
            <li>Illustrations - in Books, Comics, web sites</li>
            <li>3D models – in Animations, Movies, Video Games</li>
            <li>Digital photo artwork to create posters, advertisements</li>
            <li>Digital painting</li>
            <li>Web sites</li>
            <li>Computer generated images</li>
            <li>Animations</li>
            <li>Games</li>
            <li>Instillations from digital/electronics waste</li>
          </ul>
          <strong><br><br>Why Digital Art<br></strong>
          <ul>
            <li><strong>Builds creativity & innovation – key 21st century skills :</strong> Tomorrow’s workforce must be
              fluent in technology as well as demonstrate creativity and innovation.</li><br>
            <li><strong>Teaches visual communication in today’s multimedia world :</strong> Most of our communication
              now takes place using computers. Text is no longer the default communication method. Every
              presentation or communication includes photos, graphics, video and other multimedia
              elements. Everyone must be able to communicate in this increasingly non textual and multimedia
              way. Knowledge of visual design and digital technologies to manipulate multimedia is
              now essential.</li><br>
            <li><strong>Brings ‘’STEM” to schools </strong>(STEM= Science, Technology, Engineering, and Math) through
              the medium of Art.</li><br>
            <li><strong>Prepares workforce for tomorrow’s jobs :</strong>Digital artists will find an increased demand for
              their work in this increasingly non textual, multimedia world. Web sites, presentations, games,
              movies all use digital technologies.</li><br>
          </ul>

          <strong><br><br>Useful Readings<br></strong>
          <ul>
            <li><a href="http://moca.virtual.museum/editorial/jdessay.asp">http://moca.virtual.museum/editorial/jdessay.asp</a></li>
            <li><a href="http://www.wikihow.com/Make-Digital-Art">http://www.wikihow.com/Make-Digital-Art</a></li>
            <li><a href="https://www.youtube.com/watch?v=2RWop0Gln24">https://www.youtube.com/watch?v=2RWop0Gln24</a></li>
            <li><a href="http://www.slideshare.net/tephnii/forms-of-digital-arts-2">http://www.slideshare.net/tephnii/forms-of-digital-arts-2</a></li>



          </ul><br>
        <li><strong>State Specific e-Services Toolkit/Handbook Writing</strong>
          Currently many of the government services (passport, PAN, record of rights, scholarships, ration
          card, tax filing and many more) are being delivered electronically/ online. One may access various
          government services by accessing designated portals or by visiting designated kiosks/CSCs
          (Common Services Centres).
          The institute may develop a toolkit/handbook on e-services through competition. In the handbook the
          following are to be listed:
          <ul>
            <li>Portals providing e-services (e.g.) :
              <ul>
                <li>Education (know your college/school, scholarships, admissions, results etc)</li><br>
                <li>Health (MCTS, National Health Portal, Helplines etc)</li><br>
                <li>Livelihood (Business registration, NREGS, job applications etc)</li><br>
                <li>Agriculture (e.g. Kisan Call Centre, Weather/Market Price etc)</li><br>
                <li>Others (Income Tax Online, Passport application, RTI, Public Grievance etc)</li><br>
              </ul>
            </li>
            <li>End-to-end access of e-services via flow chart/diagram</li>
              The toolkit/handbook shall be relevant to the state/UT in which the Institute is situated. To identify, list
              and know details about the services, the website/portals of central/state government,
              ministries/departments are to be visited.
          </ul><br>
          <strong>Useful Readings</strong>
          <strong>For e-Services Toolkit</strong>
          <ul>
            <li><a href="http://www.itmission.kerala.gov.in/e-jaalakam.php">http://www.itmission.kerala.gov.in/e-jaalakam.php</a></li>
            <li><a href="http://teresas.ac.in/main/downloads/vivara.pdf">http://teresas.ac.in/main/downloads/vivara.pdf</a></li>
            <li><a href="http://www.teresas.ac.in/main/eJaalakam.asp/">http://www.teresas.ac.in/main/eJaalakam.asp/</a></li>
          </ul>
          <strong>For e-Services</strong>
          <ul>
            <li><a href="http://indiagovernance.gov.in/map.php">http://indiagovernance.gov.in/map.php</a></li>
            <li><a href="https://negp.gov.in/service/finalservices.php?cat=-2:1">https://negp.gov.in/service/finalservices.php?cat=-2:1</a></li>
            <li><a href="http://india.gov.in/">http://india.gov.in/</a></li>
            <li><a href="http://vikaspedia.in/index">http://vikaspedia.in/index</a></li>
            <li>Concerned website of Ministry/Department of Central Government</li>
            <li>State/UT Government’s Portal</li>
            <li>Concerned website of Ministry/Department of State/UT Government</li>
          </ul>
        </li><br>
        <li><strong>Hackathon<br><br>Introduction<br></strong>
          A Hackathon (also known as a hack day, hackfest or codefest) is an event in which computer
          programmers and others involved in software development, including graphic designers, interface
          designers and project managers, collaborate intensively on software projects. In general, Mobile
          Apps, Web/Applications Development and Video/Learning Game Development etc take place during
          Hackathons. Occasionally, there is a hardware component as well. Hackathon on civic event focused
          on creating solutions for civic issues, specifically solutions that in some way can improve or assist 
          either government or citizen or both. Hackathons typically last between a day and a week. Some
          Hackathons are intended simply for educational or social purposes, although in many cases the goal
          is to create usable software. Hackathons tend to have a specific focus, which can include
          the programming language used, the operating system, an application, an API or the subject and the
          demographic group of the programmers. In other cases, there is no restriction on the type of software
          being created. The following Themes/Topics are proposed for organizing Hackathon:
          <ul>
            <li>Services delivery</li>
            <li>Citizen Engagement</li>
            <li>Improving education, health, livelihood, transportation</li>
            <li>Game & learning (Children, Adults, Women & Elders)</li>
            <li>Open Data & Analytics</li>
            <li>Evaluation & Learning</li>
            <li>Awareness & Communications</li>
            <li>Open Government</li>
            <li>Improving safety & Cyber Security</li>
            <li>Swacchh Digital Bharat</li>
            <li>Improving daily life / quality of life</li>
            <li>Disaster management and crisis response</li>
            <li>Smart cities</li>
            <li>Business & Finance</li>
            <li>Sports & Culture</li>
            <li>Environment & Cleanliness</li>
            <li>Authentication & integration</li>
          </ul><br>
          <strong>Target Groups :</strong> Individuals, students & faculty members, teams of individuals are invited for
            participation.
          <strong><br><br>Note :<br>
            Competitions & Timeline</strong><br>
            <ul>
              <li>Committee will be constituted for planning and monitoring (categories, target groups, timeline,
                  announcement, location and channel of submission, selection & number of entries etc).</li>
              <li>Communications will be done through online (two weeks prior to the Digital India event).</li>
            </ul>
        </li><br>
      </ol>
    </div>
  </div>

  <div class="container" id="form">
  <div class="jumbotron" backround-image="url(./images/formbg.jpg)">
    <div class="container-fluid">
      <h1 align="center">Digital India Event 2015</h1>
      <h2 align="center">Registration form</h2>
      <br>
    </div>
    <div class="container">
      <form action="submit.php" method="post">
        <div class="form-group">
          <label for="inputName">Name</label>
          <input type="text" class="form-control" id="member_name" name="name" placeholder="John Doe" required>
        </div>
        <div class="form-group">
          <label for="inputdept">Choose the category you belong to :</label>
          <div class="radio">
            <label>
              <input type="radio" name="category" id="optionsRadios1" value="student" checked="">College student</label>
          </div>
          <div class="radio">
            <label>
              <input type="radio" name="category" id="optionsRadios2" value="faculty">Faculty
            </label>
          </div>
        </div>
        <div class="form-group">
          <label for="inputaboutme">Institution Details</label>
          <h6>If student, enter the degree, branch, institution name, location etc.
          <br>If faculty, desigation, department, institution, location etc.</h6>
          <textarea class="form-control" rows="7" id="aboutme" name="insti_details" placeholder="Institute details..." required></textarea>
        </div>
        <div class="form-group">
          <label for="inputdept">Which of the following events are you interested in?
            <br>
            <h6>*More details at annexure I*<br>Workshop is to be held on 18 August 2015.
            All other events will end before that and winners will be felicitated on the same day, 18 Aug 2015.</h6>
          </label>
          <div class="checkbox">
            <label>
              <input name="event1" type="checkbox" value="yes" required>Research Paper/Poster Writings
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="event2" value="yes" required>Story/script writing on benefits from e-services/online services tion 2
              </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="event3" value="yes" required>Skit by students on benefits from digital learning/e-serviceson 3
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="event4" value="yes" required>Digi Art Work
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="event5" value="yes" required>State Specific e-Services Toolkit/Handbook Writingtion 5
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="event6" value="yes" required>Hackathon
            </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="event7" value="yes" required>Workshop
            </label>
          </div>
          <!--<textarea class="form-control" rows="7" id="aboutme" placeholder=""></textarea>-->
        </div>
        <div class="form-group">
          <label for="inputName">E-mail id</label>
          <input type="email" class="form-control" id="member_name" name="email_id" placeholder="abc@xyz.com" required>
        </div>
        <div class="form-group">
          <label for="inputName">Mobile Number</label>
          <input type="tel" class="form-control" id="member_name" name="mobile_no" placeholder="Mobile number" required>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
  </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/nittformjs.min.js"></script>
    <script type="text/javascript">
    var requiredCheckboxes = $(':checkbox[required]');
      requiredCheckboxes.change(function(){
          if(requiredCheckboxes.is(':checked')) {
              requiredCheckboxes.removeAttr('required');
          }
          else {
              requiredCheckboxes.attr('required', 'required');
          }
      });
    </script>
  </body>
</html>
