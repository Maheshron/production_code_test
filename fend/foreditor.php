<!doctype html>
<html class="no-js" lang="zxx">



<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Edelweiss Publications</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/helper.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        * {
            text-align: justify;
        }

                .foreditor-content  h2{
                color: #007bff;
    font-weight: 800;
}

        .foreditor-content h3 {
            margin-bottom: 10px;
            margin-top: 30px;
              color: #0068ab;
            font-weight: 700;
        }
                 .foreditor-content h4{
            color: #0062cc;
}

        .foreditor-content ul {
            list-style: none;
            */ margin: 0px;
            padding: 0px 31px;
        }

      

        dd {
            margin-left: 30px;
        }

        dt {
            font-weight: 400;
        }

        /* Start navbar */
        .nav {
            background-color: #f8f8f8;
            border-bottom: 1px solid #ececec;
            min-height: 50px;
            height: auto;
        }

        .nav .nav-heading {
            float: left
        }

        .nav .nav-heading .toggle-nav {
            padding: 2px 10px;
            border-radius: 5px;
            border: none;
            display: none;
            background-color: transparent;
        }

        .nav .nav-heading>a {
            text-decoration: none;
            color: #000;
            line-height: 60px;
            font-weight: 400;
            font-size: 19px;
        }

        /* Start menu */
        .nav .menu {
            float: left;
        }

        .nav .menu:after {
            content: "";
            clear: both;
            display: block;
        }

        .nav .list {
            float: right;
            margin: 0;
        }

        .nav .list>li {
            float: left;
            list-style: none;
        }

        .nav .list>li>a {
            color: #555;
            text-decoration: none;
            display: block;
            line-height: 60px;
            padding: 0 10px;
        }

        .nav .list>li>a:hover,
        .nav .list>li.active>a {
            color: #333
        }

        /* Start drodpwn menu */
        .categories {
            position: relative;
        }

        .nav .list .categories .drop-down {
            list-style: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #FFF;
            border: 1px solid #ccc;
            padding: 5px 0;
            min-width: 160px;
            width: auto;
            white-space: nowrap;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            display: none;
            z-index: 99999
        }

        .nav .list .drop-down>.seprator {
            height: 1px;
            width: 100%;
            margin: 9px 0;
            background-color: #e5e5e5
        }

        .drop-down>li>a {
            color: #333;
            display: block;
            padding: 3px 20px;
            text-decoration: none;
        }

        .show {
            display: block
        }

        /* Sub dropdown menu */
        .categories .drop-down .sub-drop-down {
            position: relative
        }

        .categories .drop-down .sub-drop-down:hover .sub-dropdown {
            display: block;
        }

        .categories .drop-down .sub-dropdown {
            position: absolute;
            top: -20px;
            left: 107%;
            list-style: none;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 3px;
            padding: 10px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            display: none;
        }

        .categories .drop-down .sub-dropdown:before {
            content: "";
            display: block;
            position: absolute;
            top: 20px;
            left: -20px;
            border-top: 10px solid transparent;
            border-left: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 10px solid #cccccc
        }

        .categories .drop-down .sub-dropdown>li>a {
            color: #555;
            padding: 5px 0;
            display: block
        }

        /* End sub dropdown menu */
        /* Dark theme */
        .dark-nav {
            background-color: #0068AB
        }

        .dark-nav .list>li>a {
            color: #fff;
            padding: 0px 37px;
        }

        .dark-nav .list>li>a:hover,
        .dark-nav .list>li.active>a {
            color: #FFF
        }

        .dark-nav .nav-heading>a {
            color: #EEE
        }

        .dark-nav .nav-heading .toggle-nav {
            color: #EEE
        }

        /* End Dark theme */

        /* Start media query for navbar */
        @media (max-width: 767px) {
            .input-group {
                margin-top: 15px;
            }

            .nav .container {
                padding-right: 0;
                padding-left: 0;
            }

            .nav .nav-heading {
                width: 100%;
                padding-left: 15px;
                padding-right: 15px;
                border-bottom: 1px solid #ffe7e7
            }

            .nav .nav-heading .brand {
                float: left
            }

            .nav .nav-heading .toggle-nav {
                display: block;
                float: right;
                margin-top: 14px;
            }

            .nav .menu {
                width: 100%;
                padding-left: 15px;
                padding-right: 15px;
                display: none;
            }

            .nav .list {
                float: left !important;
                width: 100%;
            }

            .nav .list>li {
                float: none;
                width: 100%;
            }

            .nav .list>li>a {
                padding: 12px 0;
                line-height: 1
            }

            .nav .list .categories .drop-down {
                background-color: transparent;
                border: none;
                position: static;
                -webkit-box-shadow: none;
                box-shadow: none;
                padding: 0
            }

            .categories .drop-down .sub-dropdown {
                position: static;
                background-color: transparent;
                border: none;
                -webkit-box-shadow: none;
                box-shadow: none;
                padding-left: 20px;
            }

            .categories .drop-down .sub-dropdown>li>a {
                color: #ff8;
            }

            .categories .drop-down .sub-dropdown:before {
                display: none
            }

            /* Simple reset for dark theme */
            .dark-nav .menu {
                background-color: #ff28ff
            }

            .dark-nav .nav-heading {
                border-bottom-color: #0068AB
            }

            .dark-nav .list .drop-down>li>a {
                color: #AAA
            }

            .dark-nav .list .categories .drop-down .seprator {
                background-color: #2a2d38
            }

        }

    </style>
</head>

<body>

    <div id="main-wrapper">

        <!--Header section start-->
        <header>
            <div class="default-header-area header">
                <div class="container-fluid container-1370">
                    <div class="row align-items-center">

                        <div class="col-lg-4">
                            <nav class="main-menu" style="float: left">
                                <ul>
                                    <li><a href="index.html">Journals List</a>
                                    </li>
                                    <li><a href="index.html">Articals</a>
                                    </li>
                                    <li><a href="index.html">Contact Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--Logo start-->
                        <div class="col-lg-4 ">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <!--Logo end-->
                        <!--Menu start-->
                        <div class="col-lg-4 ">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-primary" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--Menu end-->
                        <!--Search start-->

                        <!--Search end-->


                    </div>

                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->

                </div>
            </div>
        </header>
        <!--Header section end-->
        <div class="sub-navbar">
            <nav class="nav dark-nav">
                <div class="container">
                    <div class="nav-heading">
                        <button class="toggle-nav" data-toggle="open-navbar1"><i class="fa fa-align-right"></i></button>
                    </div>
                    <div class="menu" id="open-navbar1">
                        <ul class="list">
                            <li><a href="#">Home</a></li>

                            <li><a href="#">Editorial Panel</a></li>
                            <li><a href="#">Manuscript Submissions</a></li>
                            <li><a href="article-in-press.html">Articles in Press</a></li>
                            <li><a href="currrnt-issue.html">Current Issue</a></li>
                            <li><a href="previous-issue.html">Previous Issue</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--Support section start-->
        <div class="pt-95 pt-lg-75 pt-md-65 pt-sm-60 pt-xs-50 pb-85 pb-lg-65 pb-md-55 pb-sm-45 pb-xs-40">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <h2 class="text-center"><a href="foreditor.html">For Editors</a></h2>

                        <hr>
                        <p>Trust is the foundation of the Edelweiss Publications we are independent, impartial and honest. We are committed to achieving the highest standards of due accuracy and impartiality and strive to avoid knowingly and materially misleading our readers. Editors of our journals are essential and valuable resources, there are vested with the job of gaining trust among readers. Experts in each field are been invited to form editorial board of Edelweiss Publications journals. Their role is to handle the peer review of manuscripts, make recommendation on the acceptance or rejection of a paper and attract high-quality submissions. Below are some guidelines for editors, based on COPE Code of Conduct and Best Practice Guidelines for Journal Editors.</p>
                        <div id="sticky-sidebar">

                            <!--Single Article Start-->
                            <div class="single-article mb-30">
                                <p>Editors of edelweiss publications will be asked to adhere to the guidelines strictly, which helps us in serving scientific community</p>

                                <div id="navbar-example2">
                                    <ul class="list-of-article">
                                        <li><a class="nav-link1" href="#AssigningReviewers">Assigning Reviewers</a> </li>
                                        <li><a class="nav-link1" href="#PeerReviewProcess">Peer Review Process</a> </li>
                            
                                        <li><a class="nav-link1" href="#ComplaintsMisconduct">Complaints & Misconduct</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <!--Single Article End-->
                        </div>
                        <div class="foreditor-content">
                            <div id="AssigningReviewers">
                                <h3 class="text-center">Assigning Reviewers</h3>
                                <p>Editors should ensure that appropriate reviewers are selected for submissions (i.e. individuals who are able to judge the work and are free from disqualifying competing interests). Editors should ideally choose at least two reviewers to provide a report.</p>
                                <p>Editors should cease to use reviewers who consistently produce discourteous, poor quality or late reviews. Editors should use a wide range of sources to identify potential new reviewers, give equal importance to authors suggestions apart from their known associates.</p>


                            </div>

                            <div id="PeerReviewProcess">
                                <h3 class="text-center">Peer Review Process</h3>
                                <p>Journal editors should give unbiased consideration to each manuscript submitted for consideration for publication, and should judge each on its merits, without regard to race, religion, nationality, sex, seniority, or institutional affiliation of the author(s).</p>

                                <p>Editors should be ready to justify any important deviation from the described peer review process. Editors should make sure require reviewers do not have any potential competing interests before agreeing to review a submission.</p>
                                <p>Editors should decide is the study scientifically valid and clearly presented; for example is the sample size adequate, are the results adequately and clearly presented and explained, and have the investigators excluded or considered the possible confounding factors and/or biases? Second, does the study contribute sufficiently to knowledge to make acceptance and publication a possibility?</p>
                                <p>Do the benefits outweigh the harms in this particular study’s case? If there is doubt about local law or regulations, editors should clarify this with the authors and ask them to provide a letter from the individual research ethics committee or the research ethics authority in that country about the research.</p>
                                <p>Content of the manuscript and the details of the peer review process should be held with high level of confidentiality. Author information and about the manuscript must not be shared outside apart from reviewers.</p>
                            </div>
                            <div id="ComplaintsMisconduct">
                                <h3 class="text-center">Complaints & Misconduct</h3>
                                <p>Misconduct and unethical behaviour may be identified and brought to the attention of the editor and publisher at any time, by anyone.</p>
                                <p>Scientific misconduct includes but is not necessarily limited to data fabrication; data falsification including deceptive manipulation of images; and plagiarism Some people consider failure to publish the results of clinical trials and other human studies a form of scientific misconduct. While each of these practices is problematic, they are not equivalent. Each situation requires individual assessment by relevant stakeholders. When scientific misconduct is alleged, or concerns are otherwise raised about the conduct or integrity of work described in submitted or published papers, the editor should initiate appropriate procedures detailed by such committees such as the Committee on Publication Ethics (COPE) and may choose to publish an expression of concern pending the outcomes of those procedures.</p>
                                <p>Whoever informs the editor-in-chief or publisher of such conduct must provide all the information needed for the investigation to be initiated. All allegations should be taken seriously and treated in the same way, until a successful decision or conclusion is reached.</p>
                                <p>Editorial board members must guarantee prompt responses to the complainants by taking action and correcting the signalled errors. Evidence should be gathered, while avoiding spreading any allegations beyond those who need to know.</p>
                                <p>Edelweiss Publications is an open access publisher.</p>


                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--Support section end-->

        <!--Footer section start-->
        <footer>

            <!--Footer Top start-->
            <div class="footer-top section light-green-bg pt-30  pt-md-130 pt-sm-120 pt-xs-50  pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
                <div class="container container-1370">
                    <div class="row justify-content-xl-around justify-content-between content-between">
                        <!--Footer Widget Start-->
                        <div class="col-md-3">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">About Us</h3>
                                <p>Edelweiss is an established peer-reviewed open access publisher with sole motive to promulgate the advancement of science among research communities online for free of charge. Edelweiss is supported by a network of reliable journals and societies as well as internationally renowned editorial board members. <br><span><a href="#">Read More...</a></span></p>
                            </div>
                        </div>
                        <!--Footer Widget End-->
                        <!--Footer Widget Start-->
                        <div class="col-md-2">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">Quick Links</h3>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">For Authors</a></li>
                                    <li><a href="#">Reviewers</a></li>
                                    <li><a href="#">Publication Ethics</a></li>

                                </ul>
                            </div>
                        </div>
                        <!--Footer Widget End-->
                        <!--Footer Widget Start-->
                        <div class="col-md-2">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">Go To</h3>
                                <ul>
                                    <li><a href="#">Publication Charges</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Footer Widget Start-->
                        <div class="col-md-3">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">Head Office</h3>
                                <p>Edelweiss Publications Inc
                                    12W441<br>
                                    Williams St<br>
                                    Winfield<br>
                                    Illinois 60190<br>
                                    USA</p>
                            </div>
                        </div>
                        <!--Footer Widget End-->
                        <div class="col-md-2">
                            <div class="single-footer-widget mb-35">
                                <h3 class="footer-title">Follow Us</h3>
                                <ul class="social-icons">
                                    <li>
                                        <a href="https://twitter.com/">
                                            <span>Twitter</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com/‎">
                                            <span>Google+</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/">
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/">
                                            <span>LinkedIn</span>
                                        </a>
                                    </li>

                                </ul>
                                <h4 class="toll-free">Our Toll Free Number <br> 1844-669-0266</h4>
                            </div>
                        </div>
                        <!--Footer Widget End-->

                    </div>
                </div>
            </div>
            <!--Footer Top end-->

            <!--Footer bottom start-->
            <div class="footer-bottom section">
                <div class="container container-1370">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright text-center">
                                <p>Copyright &copy;2019 <a href="#">Edelweiss Publications Inc., USA</a>. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer bottom end-->

        </footer>
        <!--Footer section end-->
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

    </script>
    <script>
        $(document).ready(function() {
            $(".nav-link1").click(function() {
                var t = $(this).attr("href");
                $('.active').removeClass('active');
                $("html, body").animate({
                    scrollTop: $(t).offset().top - 50
                }, {
                    duration: 1e3,
                });

                $('body').scrollspy({
                    target: '#navbar-example2',
                    offset: $(t).offset().top
                });
                $(this).parent().addClass('active');





                return false;
            });

        });



        //navbar
        var distance = $('#site-header').offset().top,
            $window = $(window);

        $window.scroll(function() {
            if ($window.scrollTop() >= distance) {
                $('#site-header').addClass('fixed-nav')
            }
            if ($window.scrollTop() <= distance) {
                $('#site-header').removeClass('fixed-nav')
            }
        });


        $('body').scrollspy({
            target: '#navbar-example2',
            offset: 0
        });

    </script>
</body>

</html>
