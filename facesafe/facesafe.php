<?php
include('db.php')
?>

<!DOCTYPE html>

<head>
    <title>
        Facesafe
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- font files from common footer -->
    <link href="fonts/font-awesome.css" type="text/css" rel="stylesheet">
	<link href="fonts/FontAwesome.otf" type="text/css" rel="stylesheet">
	<link href="fonts/fontawesome-webfont.eot" type="text/css" rel="stylesheet">
	<link href="fonts/fontawesome-webfont.svg" type="text/css" rel="stylesheet">
	<link href="fonts/fontawesome-webfont.ttf" type="text/css" rel="stylesheet">
	<link href="fonts/fontawesome-webfont.woff" type="text/css" rel="stylesheet">
	<link href="fonts/fontawesome-webfont.woff2" type="text/css" rel="stylesheet">
    <!--font files from common footer -->

    <!-- css files from common footer -->


	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/jquery.fatNav.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/simplelightbox.css" rel="stylesheet" type="text/css" media="all" />


	<!-- css files from common footer -->


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
   
        // $(document).ready(function () {
        //     $("#whole").hide();
        //     $("#plus").click(function () {
        //         $("#whole").show();
        //         $("#plus").hide();

        //     });
        // });

        // $(document).ready(function () {
        //     $("#minus").click(function () {
        //         $("#whole").hide();
        //         $("#plus").show();

        //     });
        // });

        $(document).ready(function() {
            $(".whole").hide();
            $(".btn_p").click(function() {
                $(this).siblings(".whole").show();
                $(this).hide();
            });
        });

        $(document).ready(function() {
            $(".btn_m").click(function() {
                $(".whole").hide();
                $(".btn_p").show();
            });
        });
    </script>
</head>


<body class="Rectangle-4" style="font-family: 'Montserrat', sans-serif;">
    <div class="navi">
        <a href="#" style="text-decoration: none;" class="Gradient-Overlay">Facesafe<br>Workspace</a>
        <a href="#" style="text-decoration: none;" class="Home" id="active">Home</a>
        <a href="#" style="text-decoration: none;" class="Key-Features">Key Features</a>
        <a href="#" style="text-decoration: none;" class="Testimonial">Testimonial</a>
        <a href="#" style="text-decoration: none;" class="Blog">Blog</a>
        <a href="#" style="text-decoration: none;" class="FAQ">FAQ</a>

        <span class="Rectangle-1">
            <a href="#" class="Inquire">Join Us</a>
        </span>
    </div>
    <br><br><br>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <img src="img/d3.jpg" style="margin-left: 65em;">
    <br><br><br>

    <img src="img/d1.jpg" style="margin-left: 12em;">
    <br><br>

    <img src="img/d2.jpg" style="margin-left: 45em;">
    <br><br><br><br>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="Vector-Smart-Object">
        <div style="margin-top: 10em; margin-left: -25em;">
            <span class="Rectangle-x">
                <span class="Rectangle-x2"></span>
                <span class="Choice">&nbsp&nbspAI based Work from Anywhere Application</span>
            </span>

            <h1 class="head1">Digital Authorization <br>and Project Management:<br>
                Safe, Simplified and Organised</h1>
            <h2 class="head2" style="line-height: 20px;">
                Digital authorization of employee, remote attendance with face recognition and timesheet,<br>
                Manage your project team and their productivity, schedule meetings hassle-free, and keep<br>
                track of your employees all at one single platform using Facesafe App</h2>
            <br><br><br>

            <span class="Rectangle-y">
                <a href="img/image.png" download="Download Browser" class="down">Download Brochure</a>
            </span>

            <a href="https://www.youtube.com/watch?v=yzSDnSTUkfc&t=8s" target="_blank" class="demo">Watch Demo video</a>
            <br><br><br><br><br><br><br><br><br>
            <img src="img/d3.jpg" style="margin-left: 15em;">
        </div>

        <div class="w3-content w3-section" style="max-width:500px">
            <!-- <img class="web_app" src="img/firstimg.jpg" style=" float: right; margin-right: 4em; margin-top: 2.5em;border:5px solid #789af3;"> -->
            <img class="web_app" src="img/Face_Recognised1.jpg" style=" float: right; margin-right: 4em; margin-top: 2.5em;border:5px solid #789af3;">
            <img class="web_app" src="img/Profile.jpg" style="float: right; margin-right: 4em; margin-top: 2.5em;border:5px solid #789af3;">
            <img class="web_app" src="img/Project.jpg" style="float: right; margin-right: 4em; margin-top: 2.5em;border:5px solid #789af3;">
            <img class="web_app" src="img/Task_ScheduleMeeting _In_Sanika.jpg" style="float: right; margin-right: 4em; margin-top: 2.5em;border:5px solid #789af3;">
            <img class="web_app" src="img/Task - Overview.jpg" style="float: right; margin-right: 4em; margin-top: 2.5em;border:5px solid #789af3;">
            <img class="web_app" src="img/Check_ IN.jpg" style="float: right; margin-right: 4em; margin-top: 2.5em;border:5px solid #789af3;">
        </div>


    </div>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <h3 class="head3" style="margin-top: 6em;">Trusted by companies like</h3>

    <div style="display: flex; flex: 0 0 100%; justify-content: center; ">
        <img src="img/companies.jpg">
    </div>
    <p><br><br><br></p>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="SmartJ">
        <!-- <img src="img/phone2.jpg" style="float:left;  max-width: 50%;"> -->

        <div style=" margin-bottom: 5em; display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <h4 class="head4">TOP Features</h4>
            <h5 class="head2" style="margin-left: 0; line-height: 20px;">Increase productivity with a simple to-do. An app to manage all requirements <br>
                to make virtual work easier,collaborative and intelligent

            </h5>
            <br><br><br>
            <div class="outer-container" style="display: flex; flex-direction: row; flex: wrap;">
            <div class="features1" style="margin: 2em">
            <div>
                <span class="demo2">Digital Authorization and Attendance</span><br>
                <span class="Rectangle-z2"></span>
                <p class="head2" style="font-size: 15px; line-height: 20px; margin-top: 0.8em; margin-left: 105px;">
                    Employees mark their attendance with just a camera <br>click.
                    An auto-generated record gets created for <br>employees
                    as well as management to keep track.</p>
            </div><br><br>

            <div>
                <span class="demo2">Tracks Time Efficiently</span><br>
                <span class="Rectangle-z2"></span>
                <p class="head2" style="font-size: 15px; line-height: 20px; margin-top: 0.8em; margin-left: 105px;">
                    Log-in and out from anywhere and anytime in <br>the world by
                    using Face-recognition feature.</p>
            </div><br><br>

            <div>
                <span class="demo2">Eases Payroll Processing</span><br>
                <span class="Rectangle-z2"></span>
                <p class="head2" style="font-size: 15px; line-height: 20px; margin-top: 0.8em; margin-left: 105px;">
                    Attendance and payroll go hand-in-hand and<br>
                    hence you don’t need multiple softwares for it.<br>
                    Everything is possible in our FaceSafe software.</p>
            </div>
            </div>
            <div class="features2" style="margin: 2em">
            <div>
                <span class="demo2">Digital Authorization and Attendance</span><br>
                <span class="Rectangle-z2"></span>
                <p class="head2" style="font-size: 15px; line-height: 20px; margin-top: 0.8em; margin-left: 105px;">
                    Employees mark their attendance with just a camera <br>click.
                    An auto-generated record gets created for <br>employees
                    as well as management to keep track.</p>
            </div><br><br>

            <div>
                <span class="demo2">Tracks Time Efficiently</span><br>
                <span class="Rectangle-z2"></span>
                <p class="head2" style="font-size: 15px; line-height: 20px; margin-top: 0.8em; margin-left: 105px;">
                    Log-in and out from anywhere and anytime in <br>the world by
                    using Face-recognition feature.</p>
            </div><br><br>

            <div>
                <span class="demo2">Eases Payroll Processing</span><br>
                <span class="Rectangle-z2"></span>
                <p class="head2" style="font-size: 15px; line-height: 20px; margin-top: 0.8em; margin-left: 105px;">
                    Attendance and payroll go hand-in-hand and<br>
                    hence you don’t need multiple softwares for it.<br>
                    Everything is possible in our FaceSafe software.</p>
            </div>
            </div>
            </div>
        </div>
    </div>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="SmartJ2">
        <div>
            <h7 class="head4" style="line-height: 50px; font-size:25px; position:relative; right:190px">
                <span style="font-size:50px; color: #7181e6;"> “</span>
                As a proponent of work-life flexibility to recruit and retain talent and an observer <br>
                &nbsp; &nbsp; of the World of Work, I support the notion of virtual workplaces and the reality of<br>
                &nbsp; &nbsp; having virtual or remote employees.Not everyone wants to, or can afford to, live in <br>
                &nbsp; &nbsp; Silicon Valley, Austin, Boston/Cambridge, Chicago, Raleigh-Durham or NYC <br>
                &nbsp; &nbsp; and around the globe the story is much of the same.<span style="font-size:50px; color: #7181e6;">”</span><br>
                 </h7>

            <div class="line" style="position: relative; left:378px; height:300px;bottom:150px;"></div>
            <p class="head2" style="font-size: 25px;color: #7181e6; margin-left: 34em; margin-top: -16.2em; line-height: 40px;">
            <b>— Meghan M. Biro,<br>
            &nbsp; &nbsp;&nbsp;Founder and CEO of TalentCulture</b>

            </p>
            
        </div>
        <br> <br> <br> <br> <br> <br> <br> <br><br><br><br><br><br>
        <div style="display: flex; flex-direction: column; flex-wrap: wrap;">
            <div style="margin-bottom: 3em">
            <span class="Rectangle-z2"></span>
            <span class="Rectangle-z2" style="margin-left: 18em;"></span>
            <span class="Rectangle-z2" style="margin-left: 18em;"></span>
            <br><br><br><br><br>

            <span class="demo">Flexible user-based settings</span>
            <span class="demo" style="margin-left: 5.1em;">Absence scheduler</span>
            <span class="demo" style="margin-left: 9em;">Get everyone's input</span>

            <p class="head2" style="margin-left: 0; line-height: 20px;">
                Employees can customize their taskbar<br> according
                to their needs. It could be just like <br>
                own cubicle</p>
            <p class="head2" style="margin-left: 24.2em; margin-top: -4.8em; line-height: 20px;">
                The HR team doesn’t need to keep <br>
                separate track for absence. Absence <br>
                recorder in sync with attendance<br> management
                system will do it for them.
            </p>
            <p class="head2" style="margin-left: 48.3em; margin-top: -6.8em; line-height: 20px;">
                Employees get to schedule their meeting <br>
                having prior knowledge of stakeholders involved </p>
            </div>
            <div style="margin-top: 3em">
            <span class="Rectangle-z2"></span>
            <span class="Rectangle-z2" style="margin-left: 18em;"></span>
            <span class="Rectangle-z2" style="margin-left: 18em;"></span>
            <br><br><br><br><br>

            <span class="demo">Flexible user-based settings</span>
            <span class="demo" style="margin-left: 5.1em;">Absence scheduler</span>
            <span class="demo" style="margin-left: 9em;">Get everyone's input</span>

            <p class="head2" style="margin-left: 0; line-height: 20px;">
                Employees can customize their taskbar<br> according
                to their needs. It could be just like <br>
                own cubicle</p>
            <p class="head2" style="margin-left: 24.2em; margin-top: -4.8em; line-height: 20px;">
                The HR team doesn’t need to keep <br>
                separate track for absence. Absence <br>
                recorder in sync with attendance<br> management
                system will do it for them.
            </p>
            <p class="head2" style="margin-left: 48.3em; margin-top: -6.8em; line-height: 20px;">
                Employees get to schedule their meeting <br>
                having prior knowledge of stakeholders involved </p>
            </div>
        </div>
        
    </div>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div style="display: flex; flex-direction: row; column-gap: 2em; flex-wrap: wrap; flex:0 0 50%; justify-content: center; align-items: center;">

        <img class="Slides" src="img/AssignTask -Schedule MeetingWEB.jpg" style="float:left; border:5px solid #789af3;">
        <img class="Slides" src="img/Camera On - Take Selfie – 1WEB.jpg" style="float:left;border:5px solid #789af3;">
        <img class="Slides" src="img/Assign TaskWEB.jpg" style="float:left;border:5px solid #789af3;">
        <img class="Slides" src="img/Face RecognisedWEB.jpg" style="float:left;border:5px solid #789af3;">
        <img class="Slides" src="img/LEAVES_WEB.jpg" style="float:left;border:5px solid #789af3;">
        <img class="Slides" src="img/My attendance - Drop DownWEB.jpg" style="float:left;border:5px solid #789af3;">
        <img class="Slides" src="img/People Invite - section –  SettingsWEB.jpg" style="float:left;border:5px solid #789af3;">
        <img class="Slides" src="img/ProfileWEB.jpg" style="float:left;border:5px solid #789af3;">
        <img class="Slides" src="img/CHATWEB.jpg" style="float:left;border:5px solid #789af3;">

        <br><br>

        <div style="margin-bottom: 250px;">
            <h4 class="head4">Designed & built by some
                of<br> the smartest brains in
                the <br>country using latest<br>
                AI technology

            </h4>
            <h5 class="head2" style="margin-left: 0;  line-height: 20px;">
                This product is an effort of Alumnus from IIT B
                and other upcoming brilliant engineers<br> who have
                contributed to this product with all their
                skills and heart.
            </h5>

            <br><br>
            <span class="Rectangle-y" style="margin-left: 0;">
                <a href="#" class="down">Learn more</a>
            </span>
        </div>
    </div>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div style="text-align: center; margin-top: 5em;">
        <h8 class="head4" style="line-height: 50px;">Why should you choose <br>our app?</h8>
        <h5 class="head2" style="margin-left: 0;  line-height: 20px;">
            FaceSafe gives us the opportunity to manage anything and everything
            related to documentation <br>of work and working hours all at one spot.
            Reducing your needs for different applications and<br> making it easier for
            you and your employees to work together without worrying about wasting time.

        </h5>
    </div>

    <div class="SmartJ2" style="margin-top: 5em; ">
        <div>
            <img src="img/appDev.jpg" alt="" style="margin-left: 4.2em;">
            <img src="img/award.jpg" style="margin-left: 16.3em;">
            <img src="img/storage.jpg" style="margin-left: 17.4em;">
            <br><br>

            <span class="demo3" style="margin-left: 2.8em;">App Development</span>
            <span class="demo3" style="margin-left: 11.2em;">10 Times Award</span>
            <span class="demo3" style="margin-left: 13.2em;">Cloud Storage</span>

            <p class="head2" style="margin-left: 0; line-height: 20px; width: 250px;text-align: center;">Get your blood
                tests delivered at
                <br>home collect a sample from the
                <br>news your blood tests.
            </p>
            <p class="head2" style="margin-left: 22.2em; margin-top: -4.8em; line-height: 20px;width: 250px;text-align: center;">Get
                your
                blood tests
                delivered at
                <br>home collect a sample from the
                <br>news your blood tests.
            </p>
            <p class="head2" style="margin-left: 45.3em; margin-top: -4.8em; line-height: 20px;width: 250px;text-align: center;">Get
                your
                blood tests
                delivered at
                <br>home collect a sample from the
                <br>news your blood tests.
            </p><br><br>
        </div>
        <div>
            <img src="img/custom.jpg" alt="" style="margin-left: 4.7em;">
            <img src="img/ux.jpg" style="margin-left: 16.9em;">
            <img src="img/custom.jpg" style="margin-left: 17.9em;">
            <br><br>

            <span class="demo3" style="margin-left: 3.3em;">Customization</span>
            <span class="demo3" style="margin-left: 13.2em;">UX Planning</span>
            <span class="demo3" style="margin-left: 13.2em;">Customer Support</span>

            <p class="head2" style="margin-left: 0; line-height: 20px;width: 250px;text-align: center;">Get your blood
                tests
                delivered at
                <br>home collect a sample from the
                <br>news your blood tests.
            </p>
            <p class="head2" style="margin-left: 22.2em; margin-top: -4.8em; line-height: 20px;width: 250px;text-align: center;">Get
                your
                blood tests
                delivered at
                <br>home collect a sample from the
                <br>news your blood tests.
            </p>
            <p class="head2" style="margin-left: 45.3em; margin-top: -4.8em; line-height: 20px;width: 250px;text-align: center;">Get
                your
                blood tests
                delivered at
                <br>home collect a sample from the
                <br>news your blood tests.
            </p>
        </div>
    </div>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="SmartJ" style="column-gap: 2em; margin-left: 9em;">
        <div>
            <h4 class="head4">Ultimate features<br>that we built</h4>
            <h5 class="head2" style="margin-left: 0; margin-top: 10px  ; line-height: 20px;">The rise of mobile devices
                transforms the way we
                <br>consume information entirely.
            </h5><br><br>

            <img src="img/appDev.jpg" alt="" style="margin-left: -0.7em;">
            <img src="img/ux.jpg" style="margin-left: 14em;">
            <br><br>

            <span class="demo3">App Development</span>
            <span class="demo3" style="margin-left: 9em;">UX Planning</span>

            <p class="head2" style="margin-left: 0; line-height: 20px;">Get your blood tests
                delivered at
                <br>home collect a sample from the
                <br>news your blood tests.
            </p>
            <p class="head2" style="margin-left: 20em; margin-top: -4.8em; line-height: 20px;">Get
                your
                blood tests
                delivered at
                <br>home collect a sample from the
                <br>news your blood tests.
            </p><br><br>

            <img src="img/storage.jpg" alt="" style="margin-left: -0.5em;">
            <img src="img/custom.jpg" style="margin-left: 14.2em;">
            <br><br>

            <span class="demo3">Cloud Storage</span>
            <span class="demo3" style="margin-left: 10.7em;">Customer Support</span>

            <p class="head2" style="margin-left: 0; line-height: 20px;">Get your blood tests
                delivered at
                <br>home collect a sample from the
                <br>news your blood tests.
            </p>
            <p class="head2" style="margin-left: 20em; margin-top: -4.8em; line-height: 20px;">Get
                your
                blood tests
                delivered at
                <br>home collect a sample from the
                <br>news your blood tests.
            </p>
            <br><br>
            <span class="Rectangle-y" style="margin-left: 0;">
                <a href="#" class="down">See all</a>
            </span>
        </div>
        <div>
            <img src="img/phone4.jpg" style="float: right; max-width: 90%;border:5px solid #789af3;" alt="">
        </div>
    </div>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div style="display: flex; flex-direction: row; flex: 0 0 50%; justify-content: center; align-items: center; margin-left: -52.2em;">
        <div>
            <h4 class="head4">Latest Post & Blog</h4>
            <h5 class="head2" style="margin-left: 0; margin-top: 10px  ; line-height: 20px;">The rise of mobile devices
                transforms the way we
                <br>consume information entirely.
            </h5>
        </div>
    </div>

    <div class="SmartJ" style="column-gap: 4em;">
        <div class="Rectangle-2">
            <img src="img/ls1.jpg" alt="">
            <br><br>
            <span class="demo4">
                <p class="head2" style="margin-left: 1em; line-height: 20px; font-size: 15px;">
                “Getting organized” usually ranks high on <br> new year’s resolutions
                 lists. But like<br> working out and dieting, organizational <br>systems 
                 can easily fall wayside by ......
                </p><br>
            </span>
            <span class="head2" style="margin-left: 1em; font-size: 14px;">May 20th 2020</span>
            <a href="https://www.entrepreneur.com/article/360812
" target="_blank" class="head2" style="margin-left: 7.5em; font-size: 14px; text-decoration: none; text-align: right ;">Read
                more</a>

        </div>

        <div class="Rectangle-2">
            <img src="img/ls2.jpg" alt="">
            <br><br>
            <span class="demo4">
                <p class="head2" style="margin-left: 1em; line-height: 20px; font-size: 15px;">
                We all have the same 24 hours in a day,
                 but<br> we don’t spend them the same way.
                 Some  <br>prioritize family time or household
                  chores,<br> while others cherish a good night’s......
                  
                </p><br>
            </span>
            <span class="head2" style="margin-left: 1em; font-size: 14px;">May 20th 2020</span>
            <a href="https://www.visualcapitalist.com/how-people-spend-their-time-globally/
" target="_blank" class="head2" style="margin-left: 7.5em; font-size: 14px; text-decoration: none; text-align: right ;">Read
                more</a>

        </div>

        <div class="Rectangle-2">
            <img src="img/ls3.jpg" alt="">
            <br><br>
            <span class="demo4">
                <p class="head2" style="margin-left: 1em; line-height: 20px; font-size: 15px;">
                Consider when you’re working on a project<br> and 
                get a call from a friend. You know 
                you<br> need to finish your work, but you feel 
                rude<br> for not talking when you technically......
               
                </p><br>
            </span>
            <span class="head2" style="margin-left: 1em; font-size: 14px;">May 20th 2020</span>
            <a href="https://hbr.org/2017/09/how-to-stay-focused-when-youre-working-from-home?utm_medium=social&utm_campaign=hbr&utm_source=facebook&tpcc=orgsocial_edit
" target="_blank" class="head2" style="margin-left: 7.5em; font-size: 14px; text-decoration: none; text-align: right ;">Read
                more</a>

        </div>
    </div>


    
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div style="text-align: center; margin-top: 7em;">
        <h8 id="faq" class="head4" style="line-height: 50px;">Frequently asked questions</h8>
        <h5 class="head2" style="margin-left: 0;  line-height: 20px;">The rise of mobile devices transforms the way we
            consume information entirely
            <br>and the world's most elevant channels such as Facebook.
        </h5>
    </div>

    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 10px;">
        <div class="Rectangle-7">
            <span class="demo4">How to contact with
                riders emergency?</span>

            <button id="plus" class="btn_p">
                <img src="img/plus.jpg" alt="" style="height: 26px;  margin-bottom: -6px; ">
            </button>

            <span id="whole" class="whole">
                <button id="minus" class="btn_m">
                    <img src="img/minus.jpg" alt="" style="height: 10px;  margin-top: 10px;">
                </button>
                <br>
                <p id="content" class="head2" style="margin-left: 1em; line-height: 24px; font-size: 16px; max-width: 850px; margin-bottom: 0; ">
                    Leverage agile
                    frameworks to provide a robust synopsis for high level overviews. Iterative approaches to
                    <br>collaborative thinking to further the overall value proposition. Organically grow the holistic
                    world view of disruptive innovation via
                    <br>workplace diversity and empowerment. Bring to the table win-win survival strategies to proactive
                    domination.
                </p>
            </span>
        </div>

        <div class="Rectangle-7">
            <span class="demo4">App installation failed, how to update system information?</span>

            <button id="plus" class="btn_p">
                <img src="img/plus.jpg" alt="" style="height: 26px;  margin-bottom: -6px;">
            </button>

            <span id="whole" class="whole">
                <button id="minus" class="btn_m">
                    <img src="img/minus.jpg" alt="" style="height: 10px;  margin-top: 10px;">
                </button>
                <br>
                <p id="content" class="head2" style="margin-left: 1em; line-height: 24px; font-size: 16px; max-width: 850px; margin-bottom: 0; ">
                    Leverage agile
                    frameworks to provide a robust synopsis for high level overviews. Iterative approaches to
                    <br>collaborative thinking to further the overall value proposition. Organically grow the holistic
                    world view of disruptive innovation via
                    <br>workplace diversity and empowerment. Bring to the table win-win survival strategies to proactive
                    domination.
                </p>
            </span>
        </div>

        <div class="Rectangle-7">
            <span class="demo4">Website reponse taking time, how to improve?</span>

            <button id="plus" class="btn_p">
                <img src="img/plus.jpg" alt="" style="height: 26px;  margin-bottom: -6px;">
            </button>

            <span id="whole" class="whole">
                <button id="minus" class="btn_m">
                    <img src="img/minus.jpg" alt="" style="height: 10px;  margin-top: 10px;">
                </button>
                <br>
                <p id="content" class="head2" style="margin-left: 1em; line-height: 24px; font-size: 16px; max-width: 850px; margin-bottom: 0; ">
                    Leverage agile
                    frameworks to provide a robust synopsis for high level overviews. Iterative approaches to
                    <br>collaborative thinking to further the overall value proposition. Organically grow the holistic
                    world view of disruptive innovation via
                    <br>workplace diversity and empowerment. Bring to the table win-win survival strategies to proactive
                    domination.
                </p>
            </span>
        </div>

        <div class="Rectangle-7">
            <span class="demo4">New update fixed all bug and issues</span>

            <button id="plus" class="btn_p">
                <img src="img/plus.jpg" alt="" style="height: 26px;  margin-bottom: -6px;">
            </button>

            <span id="whole" class="whole">
                <button id="minus" class="btn_m">
                    <img src="img/minus.jpg" alt="" style="height: 10px;  margin-top: 10px;">
                </button>
                <br>
                <p id="content" class="head2" style="margin-left: 1em; line-height: 24px; font-size: 16px; max-width: 850px; margin-bottom: 0; ">
                    Leverage agile
                    frameworks to provide a robust synopsis for high level overviews. Iterative approaches to
                    <br>collaborative thinking to further the overall value proposition. Organically grow the holistic
                    world view of disruptive innovation via
                    <br>workplace diversity and empowerment. Bring to the table win-win survival strategies to proactive
                    domination.
                </p>
            </span>
        </div>

        <div class="Rectangle-7">
            <span class="demo4">How to contact with riders emergency?</span>

            <button id="plus" class="btn_p">
                <img src="img/plus.jpg" alt="" style="height: 26px;  margin-bottom: -6px;">
            </button>

            <span id="whole" class="whole">
                <button id="minus" class="btn_m">
                    <img src="img/minus.jpg" alt="" style="height: 10px;  margin-top: 10px;">
                </button>
                <br>
                <p id="content" class="head2" style="margin-left: 1em; line-height: 24px; font-size: 16px; max-width: 850px; margin-bottom: 0; ">
                    Leverage agile
                    frameworks to provide a robust synopsis for high level overviews. Iterative approaches to
                    <br>collaborative thinking to further the overall value proposition. Organically grow the holistic
                    world view of disruptive innovation via
                    <br>workplace diversity and empowerment. Bring to the table win-win survival strategies to proactive
                    domination.
                </p>
            </span>
        </div>
    </div>

    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="foot">
       <!-- <div>
            <span class="fhead">About Us</span>
            <br><br>
            <span class="fcont">Lorem ipsum dolor sit amet,
                <br>consectetur adipisicing elit, sed do
                <br>eiusmod tempor incididunt ut
                <br>labore dolore magna aliqua.</span>
        </div>

        <div>
            <span class="fhead">Contact Us</span>
            <br><br>
            <span class="fcont">56/8, bir uttam qazi nuruzzaman road,
                <br>west panthapath, kalabagan, Dhanmondi,
                <br>Dhaka - 1205</span>
            <br><br>
            <span class="fhead" style="font-size: 22px;">012-6532-568-9746</span><br>
            <span class="fhead" style="font-size: 22px;">012-6532-568-9748</span>
        </div>

        <div>
            <span class="fhead">Newsletter</span>
            <br><br>
            <span class="fcont">You can trust us. we only send promo offers, not a single spam.</span><br><br><br>
            <div class="form">
                <input type="text" placeholder="Your Email address" name="news" id="news" class="newsbox">
                <input type="submit" value="" class="sub">
            </div>
        </div>-->

        

        <div class="w3_agile-contact jarallax site-section" id="contact-section">
            <div class="container">
            <h3 class="h3-w3l" >Connect With Us</h3>
			<span class="w3-line"></span>

            <div class="agile-contact text-center">
				<div class="col-md-3 col-sm-3  col-xs-6 w3-mail">
					<span class="icon fa fa-phone" aria-hidden="true"></span>
					<span class="text">Call Us:</span>
					<p>+91 9730694979</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 w3-mail">
					<span class="fa fa-envelope icon" aria-hidden="true"></span>
					<span class="text">Mail Us:</span>
					<p><a href="mailto:connect@alorbtech.com">connect@alorbtech.com</a></p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 w3-mail">
					<span class="fa fa-map-marker icon" aria-hidden="true"></span>
					<span class="text">Address:</span>
					<p>Bengaluru | Nagpur</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6 w3-mail">
					<span class="fa fa-angle-double-right icon" aria-hidden="true"></span>
					<span class="text">Follow us:</span>
					<div class="social-icons">
						<ul>
							<li><a href="https://www.facebook.com/AlorbTech" target="_blank" class="fa fa-facebook  icon-border facebook"> </a></li>
							<li><a href="https://twitter.com/AlorbTechnolog1" target="_blank" class="fa fa-twitter  icon-border twitter"> </a></li>
							<li><a href="https://www.linkedin.com/company/alorb-technologies-private-limited/" target="_blank" class="fa fa-linkedin icon-border linkedin"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

                <div class="agileits_w3layouts-form">
                    <form action="submit_footer.php" method="post" id="form_footer" class="agile_form">
                        <input type="text" name="name" class="username" placeholder="Your Name" required="">
                        <input type="email" name="email" class="email" placeholder="Your Mail" required="">
                        <input type="number" name="phone" placeholder="Your Phone Number" pattern="[0-9]{10}" required>
                        <br />
                        <textarea name="message" id="foooter_message" placeholder="Your Message" required=""></textarea>
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
        </div>
        <div class="copy">
            <div>
                <span class="fcont">Copyright © 2021.All rights reserved to
                    <span class="fcont" style="color: #ebebeb;">Facesafe</span></span>
            </div>
        </div>

    </div>



    <div id="form_success_modal">

        <!-- Modal content -->
        <div class="form_success_modal_content">

            Thank You, Our team will reach you sooon
        </div>

    </div>


    <div class="container-box">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#getquote_modal">
            get
            <br />
            Quote
        </button>
    </div>



    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="getquote_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <h2 class="form_title">GET A QUOTE</h2>
                <p style="margin-left: 15px">Please feel free to fill contact form</p>
                <br />
                <div class="form_container">
                    <form id="getquote_form" action="/action_page.php">
                        <div class="sides">
                            <div class="form_grp">

                                <input type="text" placeholder="Name*" id="name" name="name" required />
                            </div>
                            <div class="form_grp">

                                <input type="text" id="business_name" placeholder="Business/Organization Name" name="business_name" />

                            </div>
                        </div>

                        <div class="sides">
                            <div class="form_grp">

                                <input type="email" id="footer_email" placeholder="Email*" name="email" class="email" required>


                            </div>
                            <div class="form_grp">

                                <input type="number" placeholder="Phone*" id="phone" name="phone" pattern="[0-9]{10}" required>
                            </div>
                        </div>

                        <div class="sides">
                            <div class="form_grp">

                                <input placeholder="city" type="text" id="city" name="city" />
                            </div>
                            <div class="form_grp">

                                <input placeholder="Postal Code*" type="number" id="postal_code" name="postal_code" pattern="[0-9]{6}" required>
                            </div>
                        </div>

                        <div class="sides">
                            <div class="form_grp">

                                <input placeholder="Prefered Method of Contact" type="text" id="contact_method" name="contact_method" />
                            </div>
                            <div class="form_grp">

                                <input placeholder="Country" type="text" id="country" name="country" required />
                            </div>
                        </div>

                        <br />
                        <label for="product_service">Product/Services</label>
                        <br />
                        <select style="margin-left: 10px" name="buying_for">
                            <option class="non" value="FaceSafe">FaceSafe</option>
                            <option class="non" value="Other">Other</option>


                        </select>
                        <br />
                        <label for="buying_for">Buying Quantity</label>
                        <br />
                        <div id="quantity_input">
                            <select id="buying_for" style="margin-left: 10px" name="buying_for">
                                <option class="non" value="1">1-10</option>
                                <option class="non" value="1-5">10-100</option>
                                <option class="non" value="1-5">100-1000</option>
                                <option class="non" value="1-5">more than 1000</option>
                                <option class="editable" value="">Custom Value</option>
                            </select>
                            <br />
                            <input type="text" class="editOption" style="display:none;" placeholder="enter buying quantity"></input>
                        </div>
                        <br />
                        <label for="customized">Customized Requirement/ Design Servies</label>
                        <br />
                        <textarea id="custom_service" name="custom_service" style="height: 130px"></textarea>
                        <br />

                        <p>
                            Your personal data will be processed in accordance with our
                            Privacy Policy
                        </p>
                        <span style="margin-left: 10px">
                            <label class="radio-inline" required>
                                <input type="checkbox" name="optradio" required /> I agree the terms and conditions
                            </label>

                        </span>

                        <br />
                        <input type="submit" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    var myWebIndex = 0;
    carouselWeb();

    function carouselWeb() {
        var i;
        var x = document.getElementsByClassName("web_app");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myWebIndex++;
        if (myWebIndex > x.length) {
            myWebIndex = 1
        }
        x[myWebIndex - 1].style.display = "block";
        setTimeout(carouselWeb, 2000); // Change image every 2 seconds
    }
</script>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("Slides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>




<script>
    var modal = document.getElementById("form_success_modal");


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    $(document).ready(function() {




        $("#getquote_form").on("submit", function(e) {
            e.preventDefault();


            formdata = $(this).serialize();

            $.ajax({
                url: "http://localhost:8012/facesafe/submit_form.php",
                method: "POST",

                data: formdata,
                success: function(data) {


                    $("#getquote_modal").modal("hide");
                    modal.children[0].innerHTML = data
                    modal.style.display = 'block';
                    $('#getquote_form')[0].reset()

                    setTimeout(function() {
                        modal.style.display = 'none';
                    }, 2000);




                }
            })


        })

        $("#form_footer").on("submit", function(e) {
            e.preventDefault();
            formdata = $(this).serialize();

            $.ajax({
                url: "http://localhost:8012/facesafe/submit_footer.php",
                method: "POST",

                data: formdata,
                success: function(data) {

                    $("#getquote_modal").modal("hide");
                    modal.children[0].innerHTML = data
                    modal.style.display = 'block';
                    $('#form_footer')[0].reset()
                    setTimeout(function() {
                        modal.style.display = 'none';
                    }, 2000);



                }
            })


        })





    })
</script>

<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script>
    var initialText = $('.editable').val();
    $('.editOption').val(initialText);

    $('#buying_for').change(function() {
        var selected = $('option:selected', this).attr('class');
        var optionText = $('.editable').text();

        if (selected == "editable") {
            $('.editOption').show();


            $('.editOption').keyup(function() {
                var editText = $('.editOption').val();
                $('.editable').val(editText);
                $('.editable').html(editText);
            });

        } else {
            $('.editOption').hide();
        }
    });
</script>