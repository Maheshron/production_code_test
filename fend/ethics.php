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



        .ethics-content h3 {
            margin-bottom: 10px;
            margin-top: 30px;
            color: #0068ab;
            font-weight: 700;
        }
                .ethics-content h2{
                color: #007bff;
    font-weight: 800;
}


        .ethics-content ul li{
            list-style-type: disc;
            margin: 20px;
}
                 .ethics-content h4{
            color: #0062cc;
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

                        <div class="ethics-content">

                            <h3>Publication Ethics</h3>
                            <p>Edelweiss Publications provides below the norms and conditions we follow as well as to be followed by authors during manuscript preparation, submission.Ethics to be followed by editors and reviewers can also be found in this page.</p>
                            <h3>Article Evaluation</h3>
                            <p>All the Manuscript submitted towards our journals is subjected to peer review process by following the strict publishing ethics. Guidelines for authors, editors, and reviewers regarding their duties to meet high standards are provided here in our website. We consult our Editors and reviewers (if required) who is expertise in their respective field for reviewing the manuscript for their comments and decision, We follow double blind peer review process i.e., identity of reviewers is not revealed to authors or vice versa . Once manuscript is submitted, it goes for plagiarism check using in-house plagiarism software and scrutiny of manuscript if it complete, then only submissions will be considered by peer-reviewers. Authors should make sure they submit complete manuscript at time of submission, Figures, tables, graphs, and references should be provided in the manuscript itself. Incomplete submission will be rejected immediately before review process.</p>
                            <h3>Plagiarism</h3>
                            <p>All articles published by Edelweiss Publications are solely original, which has never been published before anywhere. Any manuscript submitted by author, if found to be plagiarized will be send back to the author. By using the plagiarism software we do check for similarity like Content, Data duplication, citations, type of manuscript, whether the manuscript is published before or not. Reusing the same words should be avoided. We will reject the manuscript upon finding it is plagiarized, detail report of the plagiarism check will be provided to authors to correct the manuscript if required. Plagiarism percentage should be less than 20%.</p>
                            <h3>Duplicate Submission</h3>
                            <p>Journals of Edelweiss Publications publish only the original content, publishing duplicate articles or previously published articles are strictly prohibited by us. Manuscript submitted to our journals should not be submitted anywhere else, if the submitted article found to be published in any other journal, the article shall be rejected. Articles published in other language should also be informed to editorial team. Authors should submit Cover letter and Letter of Declaration at time of submission.</p>
                            <p>Samples of letters can be found here: Cover letter and Letter of Declaration</p>
                            <p>If the submitted manuscript has data of authors own published articles or articles under review, then the authors must differentiate how their manuscript is different from the previous one by citing the previous articles. Author shall be responsible for obtaining the permission from the copyright holder for re-using their own words or figures from previous articles.</p>
                            <h3>Salami Slicing</h3>
                            <p>Salami slicing involves segmenting a large study into two or more parts and get it published. But sliced parts should not publish more than once. This is unlike duplicate or multiple submissions. In most of the journals request that authors if research data represents sliced data, author should disclose the information while submitting the manuscript, as well as enclose any other papers weather manuscript is published or unpublished that might be part of the paper under consideration for easy processing of the submitted article.</p>
                            <p>Edelweiss Publications recommends authors to avoid Salami Slicing, as this will degrade the value of the article and also interest of readers. Even citation probability also decreases as reader might find hard to read all articles at once to get the understanding on the concept of your papers when data is widely scattered. Yes, it is ok when the research is done by different groups on different aspects of it of same topic it is justified.</p>
                            <h3>Citation Manipulation</h3>
                            <p>If the citations in the manuscript submitted by the author are unrelated or just added for the purpose to increase the citation number to a given author’s work or to articles shall be rejected. Author should not cite upon request for the purpose to increase the citation to their work. The authors are expected to provide genuine, appropriate original outcome of their research with relevant citations.</p>
                            <h3>Concurrent Publication</h3>
                            <p>Submitting or publishing same research in one or more journal is not encouraged, However Edelweiss Publications do not consider abstract; publication as an academic thesis; publication as an electronic preprint as published. This doesn’t revoke plagiarism case. Manuscripts related to these cases are accepted for review process.</p>
                            <h3>Authorship and Acknowledgements</h3>
                            <p>All authors’ names must be listed in the manuscript that has made significant scientific contribution towards the research conducted and must agree to be an author of particular manuscript and shall approve all its claims. Authors are supposed to follow strictly the authorship criteria.</p>
                            <p>Any financial support or anyone who contributed during research conduct or manuscript preparation apart from authors must be acknowledged in the manuscript. The author must submit the Cover letter and Letter of declaration to the editorial office along with the manuscript, cover letter must contain all the details of authors, complete affiliations of them including email ids and contact numbers and no interest of conflicts signed by all the authors. If received funding from any agency mention the details in the cover letter, and for letter of declaration: Author must states that the manuscript is submitted to only our journal and it is not published or under consideration for publication in any other journal or publisher. You have provided complete rights to publish to our journal only upon acceptance.</p>
                            <p><b>Reporting standards:</b> Manuscripts should be complete with all the necessary sections of it present in order. Original research should be presented with accurate work performed in detail. Support your manuscript with all the necessary data, images and graphs wherever it is necessary.</p>
                            <p><b>Hazards and human or animal subjects:</b> Compliance Statements of work is required when chemicals are used, procedures or equipments that have any unusual hazards upon usage, or if it involves the use of human subjects or animals.</p>
                            <p><b>Use of patient images or case details:</b> Studies on patients or human volunteers require approval from ethics committee and informed consent with written document as a proof.</p>
                            <h3>Corrections and Retractions</h3>
                            <p>Journals of Edelweiss publications take complete responsibility to maintain the integrity and completeness of the articles published. If there are any errors identified in the published articles, we will consult our editors for final decision; Editors of our journal are solely responsible for decision making which articles shall be published and if may require retraction or an expression of concern, we follows the COPE Retraction Guidelines in making the final decision.</p>
                            <p>Editor is guided by the policies of the journal’s Editorial board. Articles that have been published in our journals remain in archive for permanent. However some unavoidable circumstances arise after publishing the article requires retraction or article withdrawn. Such conditions occur only under exceptional circumstances. In corrigendum errors done by authors may be corrected. Where as in erratum errors done by the publisher corrected.</p>
                            <p>The early version of accepted articles present in the article in press can be withdrawn due to ethical codes, infringements, such as multiple submissions, plagiarism, fraudulent use of data in such cases article may get withdraw based on editor’s decision.</p>
                            <h3>Conflicts of Interest</h3>
                            <p>Conflicts of interest (COIs) may occur during research when any outside issue effect the neutrality/ impartiality/ fairness of the research work or its analysis. It may occur at any phase in the research cycle, for example during experimental stage, during manuscript preparation and also during the publication of the manuscript. Conflicts can occur for the reasons like personal relationships or rivalries, academic competition and intellectual beliefs. Conflicts of interest must be informed either they have any influence or not for further processing in the publication. Therefore, articles should be published with a document such as conflict of interest form, stating:</p>
                            <ul>
                                <li>Author’s conflicts of interest                                </li>
                                <li>Any source of support for the research work</li>
                                <li>Whether authors had access to the study data, design, collection, analysis and interpretation of data.</li>
                            </ul>
                            <h3>Article Processing Charge</h3>
                            <p>Edelweiss Publications is an open access publishers, we provide all the articles for free to the global readers making sure that the author work is reached to everyone and it is cited with proper recognition and credit is given to author. Article Processing Charges of accepted articles will be paid by authors after completion of peer-review process, authors are instructed to pay standard article processing fee based on the journal they are publishing. Article Publication Charges includes production cost, website maintenance, publishing articles online, cost occurs to create PDF and XML format of the article and so on. There are no submission charges in our publications. Based on author’s financial situations and authors from developing countries, we do provide discounts upon request and in few cases complete waiver is also provided. The detailed information on the publication charges is given at the link: Article Processing charges (APC)</p>
                            <h3>Editorial Board Members Role and Responsibilities</h3>
                            <p>Editorial board is a team of individual’s expertise in the journal’s field. Some individuals may also belong to the editorial boards of other journals.</p>
                            <p>Main duties of editorial board member:</p>
                            <ul>
                            <li> Editor must be expertise in their subject’s matter</li>
                                <li>Advising the journal</li>
                                <li>Reviewing the manuscript</li>
                                <li>Providing decisions on Manuscript and resolving issues if any arises</li>
                                <li> Attracting the authors for new submissions and contributing their own work for consideration and publication</li>
                                <li>Conducting the conferences for special issues and to have strong knowledge on newly emerging work which may necessitate inviting articles or special issues</li>
                                <li>To ensure and supply high quality of manuscripts, developing the strategies on the progress of the journal</li>'
                                <li>Involved in attending the annual editorial board meetings</li>
                                <li>Promotion of the journal among peers and colleagues</li>
                            </ul>
                            <h3>Copyright</h3>
                            <p>Copyright describes the rights related to the publication and distribution of research. In order to publish and circulate research articles a cross the world, we need publishing rights, by making a publishing agreement between the author and publishing house (Edelweiss publications). This agreement deals with the transfer or license of the copyright to publisher and authors to use and share their own published articles.</p>
                            <h3>For Open Access Articles</h3>
                            <p>Authors submitting manuscript to us also means he/she agree for terms of exclusive license agreement, where publishers can share authors’ articles in the same way to third parties under the relevant user license and the proper attribution and credit for the published work. Retain patent, trademark and other intellectual property rights (including research data).</p>
                            <h3>Rights Granted to Edelweiss Publications</h3>
                            <p>For open access journals, articles published on its online platforms will use relevant third party user license. The right to use the article on the latest technology even after publication and provide the information in different forms of social media.</p>
                            <p>The publisher has all the rights on the article on behalf of author against third parties in case of copyright, infringement and plagiarism issues.</p>
                            <h3>Protecting Author Rights</h3>
                            <p>The main aim of the copy right is to protect, defend the authors work and their reputation, and takes allegations of infringements, any ethical issues and fraud very seriously. If any scientific community plagiarized, fraud the article we recommend to contact our publishing house.</p>
                            <h3>User License</h3>
                            <p>Articles published under an edelweiss user license are protected by copyright. Users can access, download, copy, translate; text and data mine the articles, by citing the article using an appropriate bibliographic citation (i.e. author(s), journal, article title, volume, issue, page numbers, DOI) to Maintain the integrity of the article. Retain copyrights notices and links to users what can and cannot be done with the article.</p>
                            <h3>Open access licenses</h3>
                            <p>The aim of the open access is to provide the best choice of user license options, which explains about how readers can open access articles published on our platforms.</p>
                            <p><b>Choosing a license: </b>Under the CC BY-NC-ND 4.0 user license we allow our readers to Read, print and download, Redistribute/republish the article, Translate the article (for private use only), Download for text and data mining purposes, Reuse portions or extracts from the article in other works, except Sell or re-use for commercial purposes, unless author should be cited properly.</p>
                            <h3>Patient Consent</h3>
                            <p>Appropriate permissions must be obtained when authors needs to include case details or images of patients and any other individuals in our publications in order to obey laws and regulations concerning the privacy and/or security of personal information. It is the responsibility of the author to ensure that with legal authority to act on the individuals who appears in an image, photograph, and video, case report or in any identifiable form must be known the purpose of it to be used must be disclosed to edelweiss publishers or should be given with license of the work. Author must submit written consent by individual, legal guardian or person with legal authority must submit the written consent to the publisher, the written consent must be retaining by authors and publishers as evidence must contain all Data Protection and Privacy Laws. For example to display a child with learning disabilities/ some other where an individual's head or face appears or reference is made to an individual's name. In case if guardians of that child disagree to use of the images the author has no rights to us the images of child. Even if they give permission to display the images the proper care must be taken captioning of the individual and portrayal are respectful.</p>
                            <h3>Special Considerations for Clinical Trials</h3>
                            <p>All the personal details of the participant should not be displayed, like participant/subject name, Patients, initials, hospital, social security numbers, dates of birth other personal or identifying information should not be used. Images of the subjects should be use only if information is essential for scientific purposes and permission has been given as part of the consent Images of patients or research subjects should not be used unless the information is essential for scientific purposes even where consent has been given, identifying details should be omitted if they are not important.</p>
                            <h3>Non-Identifiable Images</h3>
                            <p>No need of consent if images of an individual’s cannot be identified like ultrasound images, x-rays, pathology slides or laparoscopic images does not contain any identifying marks. If consent has not been obtained, it is generally not sufficient to remove identifying particulars or details from a photograph simply by using eye bars or blurring the face of the individual concerned.</p>
                            <h3>Permissions</h3>
                            <p>As a general rule, permission should be taken from the copy right holder to replicate any part of the work like text, illustrations, charts, tables, photographs, or other material from previously published sources need to get permission to reuse content published by Edelweiss publishers and the foremost author should get benefited by proper citation for the copied information. Open access journals under a user license, how users can use the text we recommend readers check the license details found under the DOI and funding body information.</p>
                            <p>When permission is not required: Written permission may not need to be obtained in certain circumstances, such as the following:</p>
                            <p>Public domain works which are not protected by any intellectual property laws such as copyright, trademark, or patent laws, anyone can use a public domain work without obtaining permission but subjected to proper acknowledgement. However copy right is required for publish version of articles which is owned by publishers. Depending on the type of licenses used by the publisher copy right permissions vary, we recommend our readers to check the details of license before reusing the data. As we are open access publishers we use CC-BY user license where user needs require a proper acknowledgement and Permission from Edelweiss publisher.</p>
                            <p>For creating an original figures, graphs which is not previously published anywhere else does not require permission but it should subjected to a proper acknowledgement of the source from which it is taken.</p>
                            <p><b>From whom do I need permission:</b>Permission must be taken from the copy right holder of the material. In related to articles user need to contact publisher of the material. The publisher own all complete rights whether to grant the permission or not. If copyright holder needs proper credits and acknowledgement in a specific format as a footnote or in a reference list.</p>
                            <p>Can I post my article on Research Gate without violating copyright:</p>
                            <p>Authors are always encouraged to share their research work in the preprint version or a link to your article. Authors can also share their final published article in open access under a commercial license (CC-BY).</p>
                            <p>We recognize the importance of sharing research worldwide for development and to support the creation of new science.</p>
                            <h3>Open Access Licenses</h3>
                            <p>The aim of the open access is to provide the best choice of user license options, which explains about how readers can open access articles published on our platforms.</p>
                            <p><b>Choosing a license: </b>Under the CC BY-NC-ND 4.0 user license we allow our readers to Read, print and download, Redistribute/republish the article, Translate the article (for private use only), Download for text and data mining purposes, Reuse portions or extracts from the article in other works, except Sell or re-use for commercial purposes, unless author should be cited properly.</p>
                            <h3>Our Policy</h3>
                            <p>We encourage and support researchers to share research data for better understanding of the article.</p>
                            <p>We ensure the authors can gain credit for sharing research data by proper data citation practices and we maintain scientific relationship with research community to establish data review and published research data is valid, properly with no malpractices.
</p>




                            
                           
                           
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
