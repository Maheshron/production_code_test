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


                .price-content  h2{
                color: #007bff;
    font-weight: 800;
}
        .price-content h3 {
            margin-bottom: 10px;
            margin-top: 30px;
              color: #0068ab;
            font-weight: 700;
        }

        .price-content ul {
            list-style: none;
            */ margin: 0px;
            padding: 0px 31px;
        }
         .price-content h4{
            color: #0062cc;
}
        table{
            margin: 10px auto;
        }
        table tr,th, td{
            padding: 10px;
          
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
                        <h2 class="text-center"><a href="price.html">For Authors</a></h2>

                        <hr>

                        <div id="sticky-sidebar">

                            <!--Single Article Start-->
                            <div class="single-article mb-30">


                                <div id="navbar-example2">
                                    <ul class="list-of-article">
                                        <li><a class="nav-link1" href="#PublicationCharges">Publication Charges</a> </li>
                                        <li><a class="nav-link1" href="#MembershipCharges">Membership Charges</a> </li>

                                        <li><a class="nav-link1" href="#OrderHardCopies">Order Hard Copies</a> </li>
                                    </ul>

                                </div>
                            </div>

                            <!--Single Article End-->
                        </div>
                        <div class="price-content">
                            <div id="PublicationCharges">
                                <h3 class="text-center">Publication Charges</h3>
                                <p>Edelweiss Publications is an open access publishers, we provide all the articles for free to the readers making sure your work is reached to everyone and it is cited with proper recognition and credit is given.</p>
                                <p>Edelweiss Publications has a moto – “Science can be done by anyone”, we welcome manuscripts from all the parts of globe, and we provide support to developing countries in form of fee waivers and special discounts to authors. Authors with insufficient funds to cover the publications fees will be entertained with wavier; it will be approved upon request and approval from editor on case by case basis.</p>
                                <p>Being open access and self-financed we are obliged to charge the authors for processing and publishing. Article Publication Charges includes production cost, website maintenance, publishing articles online, cost occurs to create PDF and XML format of the article and so on.</p>
                                <h4 >Article Publication Charges</h4>
                                <table border="2" class="text-center">
                                    <tr>
                                        <th>Journal Name</th>
                                        <th>Publication charges</th>
                                    </tr>
                                    <tr>
                                        <td>Edelweiss Applied Science and Technology</td>
                                        <td>1000 USD</td>
                                    </tr>  
                                    <tr>
                                        <td>Biochemistry and Modern Applications</td>
                                        <td>1000 USD</td>
                                    </tr>  
                                    <tr>
                                        <td>Nursing and Health Care</td>
                                        <td>1500 USD</td>
                                    </tr> 
                                    <tr>
                                        <td>Dental Research and Management</td>
                                        <td>800 USD</td>
                                    </tr>  
                                    <tr>
                                        <td>Edelweiss Psychiatry Open Access</td>
                                        <td>800 USD</td>
                                    </tr> 
                                    <tr>
                                        <td>Clinical Cardiology and Cardiovascular Medicine</td>
                                        <td>1500 USD</td>
                                    </tr> 
                                    <tr>
                                        <td>Edelweiss Chemical Science Journal</td>
                                        <td>800 USD</td>
                                    </tr> 
                                    <tr>
                                        <td>Edelweiss Neurophysiology and Rehabilitation</td>
                                        <td>800 USD</td>
                                    </tr> 
                                    <tr>
                                        <td>Journal of heterocyclics</td>
                                        <td>500 USD</td>
                                    </tr>
                                    <tr>
                                        <td>Journal of Obesity & Diabetes</td>
                                        <td>1500 USD</td>
                                    </tr>
                                    <tr>
                                        <td>Edelweiss Pharma Analytica Acta</td>
                                        <td>500 USD</td>
                                    </tr>
                                     <tr>
                                        <td>Pharmacovigilance and Pharmacoepidemiology</td>
                                        <td>300 USD</td>
                                    </tr>
                                       <tr>
                                        <td>Nanomaterial Chemistry and Technology</td>
                                        <td>400 USD</td>
                                    </tr>
                                       <tr>
                                        <td>Edelweiss Journal of AIDS/td>
                                        <td>200 USD</td>
                                    </tr>
                                </table>
                                <p>Publication charges for Commentary, Editorials is USD 200 only for all journals.</p>
                                <p>Article Publication Charges of accepted articles will be paid by authors after completion of peer-review process. There are no submission charges.</p>


                            </div>

                             <div id="MembershipFees">
                                <h3 class="text-center">Membership Fees</h3>
                                <p>You can get membership in Edelweiss Publications and get an membership for a minimum one year tenure, During the tenure you can publish unlimited number of manuscripts in any of the journals related to Edelweiss Publications, You can access all of the articles published in Edelweiss Publications journals</p>
                     
                                <h4 >Membership fees</h4>
                                <table border="2" class="text-center">
                                    <tr>
                                        <th>Membership Tenure</th>
                                        <th>Membership fees</th>
                                    </tr>
                                    <tr>
                                        <td>One year</td>
                                        <td>USD 2500 only</td>
                                    </tr>  
                                    <tr>
                                        <td>Two years</td>
                                        <td>USD 3500 only</td>
                                    </tr>  
                                    <tr>
                                        <td>Five years</td>
                                        <td>USD 5000 only</td>
                                    </tr> 
                                   
                                   
                                </table>
                               

                            </div>

                                  <div id="OrderHardCopies">
                                <h3 class="text-center">Order Hard Copies</h3>
                                <p>You can also order hard copies of articles published in edelweiss publications journals and get it delivered to anywhere in globe.</p>
                                      <p>Mail us at editor@edelweisspublications.com with the details of article you require hard copies, also include the number of copies and complete address to delivery it.</p>
                     
                                <h4 >Membership fees</h4>
                                <table border="2" class="text-center">
                                    <tr>
                                        <th>Number of copies</th>
                                        <th>Charges (Excluding delivery fees)</th>
                                    </tr>
                                    <tr>
                                        <td>150 Copies</td>
                                        <td>USD 400 only</td>
                                    </tr>  
                                    <tr>
                                        <td>500 Copies</td>
                                        <td>USD 750 only</td>
                                    </tr>  
                                    <tr>
                                        <td>1000 Copies</td>
                                        <td>USD 1000 only</td>
                                    </tr> 
                                   
                                   
                                </table>
                                      <p>Once the payment is made, we need atleast 2 weeks of time to deliver it to your address, we delivery all the corners of the globe.</p>
                               

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
</body></html>
