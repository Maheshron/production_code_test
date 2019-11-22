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


                 .author-content h2{
                color: #007bff;
    font-weight: 800;
}

        .author-content h3 {
            margin-bottom: 10px;
            margin-top: 30px;
             color: #0068ab;
            font-weight: 700;
        }
         .author-content h4{
            color: #0062cc;
}

        .author-content ul {
            list-style: none;
            */ margin: 0px;
            padding: 0px 31px;
        }
        .author-content ul>li>ul li{
           list-style-type:disc;
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
                        <h2 class="text-center"><a href="author.html">For Authors</a></h2>

                            <hr>
                            <div id="sticky-sidebar">

                                <!--Single Article Start-->
                                <div class="single-article mb-30">

                                    <div id="navbar-example2">
                                        <ul class="list-of-article">
                                            <li><a class="nav-link1" href="#TypesofManuscripts">Types of Manuscripts</a> </li>
                                            <li><a class="nav-link1" href="#Submissiondeclaration">Submission declaration</a> </li>
                                            <li><a class="nav-link1" href="#Changestoauthorship">Changes to authorship</a> </li>
                                            <li><a class="nav-link1" href="#Roleofthefundingsource">Role of the funding source</a> </li>
                                            <li><a class="nav-link1" href="#CreativeCommonsAttribution">Creative Commons Attributio</a> </li>
                                            <li><a class="nav-link1" href="#CreativeCommonsAttributionNoncommercialNoDerivs">Creative Commons Attribution-Non-commercial-NoDerivs</a> </li>
                                            <li><a class="nav-link1" href="#Manuscriptpreparatione">Manuscript preparation</a> </li>
                                            <li><a class="nav-link1" href="#Essentialtitlepageinformation">Essential title page information</a> </li>
                                            <li><a class="nav-link1" href="#References">References</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Single Article End-->
                            </div>
                            <div class="author-content">
                                <div id="TypesofManuscripts">
                                    <h3 class="text-center">Manuscript Preparation</h3>
                                    <p>All authors must have to follow the instruction provided below while preparation of manuscript. Download the instruction provided here Manuscript preparation instructions</p>
                                    <h4>Types of manuscripts</h4>
                                    <h5>Edelweiss publications accept the following:</h5>
                                    <ul>
                                        <li>Original articles</li>
                                        <li>Reviews</li>
                                        <li>Abstracts</li>
                                        <li>Article-commentaries</li>
                                        <li>Rapid communications</li>
                                        <li>Letters to the editor</li>
                                        <li>Annual meeting abstracts</li>
                                        <li>Conference proceedings</li>
                                        <li>Case-reports</li>
                                    </ul>

                                </div>

                                <div id="Submissiondeclaration">
                                    <h3 class="text-center">Submission declaration</h3>
                                    <p>Submission of an article implies that the work described has not been published previously (except in the form of an abstract or as part of a published lecture or academic thesis), that it is not under consideration for publication elsewhere, that its publication is approved by all authors and tacitly or explicitly by the responsible authorities where the work was carried out, and that, if accepted, it will not be published elsewhere including electronically in the same form, in English or in any other language, without the written consent of the copyright-holder.</p>
                                    <h4>Contributors</h4>
                                    <p>All authors must have materially participated in the research and/or article preparation. The statement that all authors have approved the final article should be true and included in the disclosure.</p>
                                </div>
                                <div id="Changestoauthorship">
                                    <h3 class="text-center">Changes to authorship</h3>
                                    <p>This policy concerns the addition, deletion, or rearrangement of author names in the authorship of accepted manuscripts: Before the accepted manuscript is published in an online issue: Requests to add or remove an author, or to rearrange the author names, must be sent to editor of the journal, from the corresponding author of the accepted manuscript and must include: (a) the reason the name should be added or removed, or the author names rearranged and (b) written confirmation via e-mail from all authors that they agree with the addition, removal or rearrangement. Requests that are not sent by the corresponding author will be forwarded by editor of the journal to the corresponding author, who must follow the procedure as described above. Note that publication of the accepted manuscript in an online issue is suspended until authorship has been agreed. After the accepted manuscript is published in an online issue: Any requests to add, delete, or rearrange author names in an article published in an online issue will follow the same policies as noted above and result in a corrigendum.</p>


                                </div>
                                <div id="Roleofthefundingsource">
                                    <h3 class="text-center">Role of the funding source</h3>
                                    <p>You are requested to indicate who provided financial support to the research and preparation of the article and their role in the research work, in the writing of the report; and in the decision to submit the article for publication. If the funding source had no such involvement then this should be stated.</p>


                                </div>
                                <div id="CreativeCommonsAttribution">
                                    <h3 class="text-center">Creative Commons Attribution</h3>
                                    <p>we all allow and encourage others to copy the article, abstracts and revised versions, derivative works of the article. By following Creative Commons Attribution text, data of the article can be used for even commercial purposes until proper credits to authors is given, their work is cited and also it should not be modified in any way which can lead to damage to the honor or reputation to author or is work.</p>


                                </div>
                                <div id="CreativeCommonsAttributionNoncommercialNoDerivs">
                                    <h3 class="text-center">Creative Commons Attribution-Non-commercial-NoDerivs</h3>
                                    <p>we all allow and encourage others to copy the article, abstracts and revised versions, derivative works of the article. By following Creative Commons Attribution text, data of the article can be used for even commercial purposes until proper credits to authors is given, their work is cited and also it should not be modified in any way which can lead to damage to the honor or reputation to author or is work.</p>


                                </div>

                                <div id="Manuscriptpreparatione">
                                    <h3 class="text-center">Manuscript preparation</h3>
                                    <h4>Subdivision - numbered sections</h4>
                                    <p>Divide your article into clearly defined and numbered sections. Subsections should be numbered 1.1 (then 1.1.1, 1.1.2, ...), 1.2, etc. (the abstract is not included in section numbering). Use this numbering also for internal cross-referencing: do not just refer to 'the text'. Any subsection may be given a brief heading. Each heading should appear on its own separate line.</p>
                                    <h4>Introduction</h4>
                                    <p>State the objectives of the work and provide an adequate background, avoiding a detailed literature survey or a summary of the results.</p>
                                    <h4>Material and Methods</h4>
                                    <p>A complete explaniation of the procedure followed and design of the study, along with materials utilized in the study, with the details if any modifications has been done in the already publihsed procedures.</p>
                                    <h4>Results</h4>
                                    <p>Results should be clear and concise.</p>
                                    <h4>Discussion</h4>
                                    <p>This should explore the significance of the results of the work, not repeat them. Avoid extensive citations and discussion of published literature.</p>
                                    <h4>Conclusions</h4>
                                    <p>The main conclusions of the study may be presented in a short Conclusions section, which may stand alone or form a subsection of a Discussion or Results and Discussion section.</p>
                                    <h4>Appendices</h4>
                                    <p>If there is more than one appendix, they should be identified as A, B, etc. Formulae and equations in appendices should be given separate numbering: Eq. (A.1), Eq. (A.2), etc.; in a subsequent appendix, Eq. (B.1) and so on. Similarly for tables and figures: Table A.1; Fig. A.1, etc.</p>


                                </div>
                                <div id="Essentialtitlepageinformation">
                                    <h3 class="text-center">Essential title page information</h3>
                                    <h4>Title:</h4>
                                    <p> Concise and informative. Titles are often used in information-retrieval systems. Avoid abbreviations and formulae where possible. Author names and affiliations: Please clearly indicate the given name(s) and family name(s) of each author and check that all names are accurately spelled. Present the authors' affiliation addresses (where the actual work was done) below the names. Indicate all affiliations with a lower-case superscript letter immediately after the author's name and in front of the appropriate address. Provide the full postal address of each affiliation, including the country name and, if available, the e-mail address of each author.</p>
                                    <h4>Corresponding author:</h4>
                                    <p> Clearly indicate who will handle correspondence at all stages of refereeing and publication, also post-publication. Ensure that the e-mail address is given and that contact details are kept up to date by the corresponding author.</p>
                                    <h4>Present/permanent address:</h4>
                                    <p> If an author has moved since the work described in the article was done, or was visiting at the time, a 'Present address' (or 'Permanent address') may be indicated as a footnote to that author's name. The address at which the author actually did the work must be retained as the main, affiliation address. Superscript Arabic numerals are used for such footnotes.</p>
                                    <h4>Abstract:</h4>
                                    <p> A concise and factual abstract is required (maximum 350 words). The abstract should state briefly the purpose of the research, the principal results and major conclusions. An abstract is often presented separately from the article, so it must be able to stand alone. For this reason, References should be avoided, but if essential, then cite the author(s) and year(s). Also, non-standard or uncommon abbreviations should be avoided, but if essential they must be defined at their first mention in the abstract itself.</p>
                                    <h4>Abbreviations:</h4>
                                    <p> Define abbreviations that are not standard in this field in a footnote to be placed on the first page of the article. Such abbreviations that are unavoidable in the abstract must be defined at their first mention there, as well as in the footnote. Ensure consistency of abbreviations throughout the article.</p>
                                    <h4>Acknowledgements</h4>
                                    <p> Collate acknowledgements in a separate section at the end of the article before the references and do not, therefore, include them on the title page, as a footnote to the title or otherwise. List here those individuals who provided help during the research (e.g., providing language help, writing assistance or proof reading the article, funding acknowledgement etc.).</p>



                                </div>
                                <div id="References">
                                    <h3 class="text-center">References</h3>
                                    <h4>Citation in text:</h4>
                                    <p>Every reference cited in the text should be also present in the reference list (and vice versa) please ensure it before submitting. It is highly not recommended unpublished results and personal communications in the reference list, it can be mentioned in text if required. If these references are included in the reference list they should follow the standard reference style of the journal. Citation of a reference as 'in press' implies that the item has been accepted for publication.</p>
                                    <h4>Citation Format</h4>
                                    <p> Kindly avoid inline references in the body text of the manuscript, assign a number for each reference and cite the same in reference section of the manuscript.</p>
                                    <dl>
                                        <dt>The format of the references to be followed is: Author names (upto 5 author names (Lastnames) & more than 5 should be written as et al,), followed by Title of the article, followed by year in brackets and then the journal name and at the last volume number and page numbers separated by colon (:). Few examples are provided belwo please follow them.</dt>
                                        <dd> Watt RG. Parental knowledge and attitudes to oral health (2002) Br Dent J 193: 651-654.</dd>
                                        <dd>Miyamoto W, Chung CS and Yee PK. Effect of premature loss of deciduous canines and molars on malocclusion of the permanent dentition (1976) J Dent Res 55: 584-590.</dd>

                                        <dd>Leite B dos S, Fagundes NCF, Aragón MLC, Dias CGBT, Normando D, et al. Cleansing orthodontic brackets with air-powder polishing: effects on frictional force and degree of debris (2016) Dental Press J Orthod 21: 60–65.</dd>
                                    </dl>


                                    <h4>Web references</h4>
                                    <p> We request to provide full URL along with date of its publish in references. Information like DOI, author names, dates, reference, etc can be provided if known. Web references should be listed separately or it can be included in the reference list.</p>
                                    <h4>Submission checklist:</h4>
                                    <p>Here is the list which should be helpful for complete submission, please make sure all the items provided below are included in the submission. For any assistance during submission please mail us at editor@edelweisspublications.com</p>
                                    <p> Ensure that the following items are present:</p>                                    
                                    <ul>
                                        <li>E-mail addresses and affiliations of all the authors.</li>
                                                <li>One author has been designated as the corresponding author with contact details.
                                                    <ul>
                                                        <li>E-mail address of corresponding author.</li>
                                                        <li> Full postal address of corresponding author.</li>
                                                    </ul>
                                                </li>
                                         <li>All necessary files have been uploaded, and contain
                                                    <ul>
                                                        <li> Keywords</li>
                                                        <li> All figure along with captions</li>
                                                        <li>All tables (including title, description, footnotes)</li>
                                                    </ul>
                                                </li>
                                        <li>Further considerations
                                                    <ul>
                                                        <li>Manuscript has been 'spell-checked' and 'grammar-checked'.</li>
                                                        <li>References are in the correct format for this journal.</li>
                                                        <li>All references mentioned in the Reference list are cited in the text, and vice versa.</li>
                                                        <li>Permission has been obtained for use of copyrighted material from other sources.
                                                        </li>
                                                    </ul>
                                                </li>
                                       
                                        
                                                
                                               
                                                
                                            </ul>
                                    
                                        
                                    


            
                                    <h4>Cover letter and Letter of Declaration:</h4>
                                    <p> Submission of Cover letter and Letter of Declaration is mandatory while submitting the manuscript, this will help us for processing the manuscript fast, these document should be submitted as separate documents and the format is given below.</p>
                                    <h4>Cover letter:</h4>
                                    <p>All details of authors such as complete affiliations of them including email ids and contact numbers and authors should sign the documents agreeing to submission of manuscript to our journal. If received funding from any agency mention the details in the cover letter as well.</p>
                                    <h4>Letter of Declaration:</h4>
                                    Corresponding author should submit a letter of declaration (Official Letter head is preferred) written towards editorial office: mentioning manuscript submitted is to only our journal and it is not published or under consideration for publication in any other journal or publisher. You have provided complete rights to publish to our journal only upon acceptance.



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
