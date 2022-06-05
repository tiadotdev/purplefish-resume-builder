<?php
/**
 * Template Name: Builder Tool
 * Template Post Type: page
 **/

get_header(); 

?>

<div class="builder-template">
    <div class="builder-header">
        <div class="wrap">
            <h1 class="h4">Purple Fish Resume Builder</h1>
            <p>Fill out the sections below and your resume will automatically be generated into a well designed, easy-to-read PDF that is perfect for standing out to hiring managers and landing your next, better position. I’ll build your resume so you can spend your time doing what you like to do, code.</p>
        </div>
    </div>

    <div class="builder contact">
        <form method="GET" action="/builder/resume-preview/" id="resumebuilder-form"  target="_blank">

            <!-- Contact Info -->
            <div id="contact" class="builder-section">
                <div class="builder-section--header">
                    <div class="wrap">
                        <h2 class="h4">Contact Info</h2>
                        <svg data-name="Expand Form" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 15">
                            <path data-name="Expand Form Path" class="carat" d="M30,0,15,15,0,0Z" />
                        </svg>
                    </div>
                </div>
                <div class="builder-section--form">
                    <div class="wrap">
                        <div class="form-section--desc">
                            When filling out your website or portfolio don't include the "http://" in your link.
                        </div>
                        <div class="field-wrap">
                            <label for="bname">Name</label>
                            <input type="text" id="name" name="bname" value="">
                        </div>
                        <div class="field-wrap">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="location">Location</label>
                            <input type="text" id="location" name="location" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="website">Website / Portfolio</label>
                            <input type="text" id="website" name="website" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="bemail">Email</label>
                            <input type="email" id="email" name="bemail" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="phonenumber">Phone Number</label>
                            <input type="text" id="phonenumber" name="phonenumber" value="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Handles -->
            <div id="socials" class="builder-section">
                <div class="builder-section--header">
                    <div class="wrap">
                        <h2 class="h4">Social Handles</h2>
                        <svg data-name="Expand Form" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 15">
                            <path data-name="Expand Form Path" class="carat" d="M30,0,15,15,0,0Z" />
                        </svg>
                    </div>
                </div>
                <div class="builder-section--form">
                    <div class="wrap">
                        <div class="form-section--desc">
                            Only use your username/handle when filling out your social accounts. For stackoverflow user your numeric account number.
                        </div>
                        <div class="field-wrap float">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" id="linkedin" name="linkedin" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="twitter">Twitter</label>
                            <input type="text" id="twitter" name="twitter" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="medium">Medium</label>
                            <input type="text" id="medium" name="medium" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="instagram">Instagram</label>
                            <input type="text" id="instagram" name="instagram" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="stackoverflow">Stackoverflow</label>
                            <input type="text" id="stackoverflow" name="stackoverflow" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="github">Github</label>
                            <input type="text" id="github" name="github" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="tiktok">Tiktok</label>
                            <input type="text" id="tiktok" name="tiktok" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="youtube">YouTube</label>
                            <input type="text" id="youtube" name="youtube" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="codepen">Codepen</label>
                            <input type="text" id="codepen" name="codepen" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="behance">Behance</label>
                            <input type="text" id="behance" name="behance" value="">
                        </div>
<!--
                        <div class="field-wrap float">
                            <label for="facebook">Facebook</label>
                            <input type="text" id="facebook" name="facebook" value="">
                        </div>
                        <div class="field-wrap float">
                            <label for="socialother">Other</label>
                            <input type="text" id="socialother" name="socialother" value="">
                        </div>
-->
                    </div>
                </div>
            </div>

            <!-- Work Experience -->
            <div id="work" class="builder-section multiple">

                <div class="builder-section--header">
                    <div class="wrap">
                        <h2 class="h4">Work Experience</h2>
                        <svg data-name="Expand Form" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 15">
                            <path data-name="Expand Form Path" class="carat" d="M30,0,15,15,0,0Z" />
                        </svg>
                    </div>
                </div>
                <div class="builder-section--form">
                    
                    <!-- form wrap -->
                    <div class="wrap">
                        <div class="form-section--desc">
                            Showcase your most recent positions first. Try and include a well documented description of your role and resposibilites for each job.
                        </div>

                        <!-- Single Work Post -->
                        <div class="work single">
                            <div class="field-wrap">
                                <label for="companyname1">Company Name</label>
                                <input type="text" id="companyname1" name="companyname1" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="startyear1">Start Year</label>
                                <input type="text" id="startyear1" name="startyear1" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="endyear1">End Year</label>
                                <input type="text" id="endyear1" name="endyear1" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="jobtitle1">Title</label>
                                <input type="text" id="jobtitle1" name="jobtitle1" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="jobdesc1">Job Description</label>
                                <textarea id="jobdesc1" name="jobdesc1" value="" rows="5"></textarea>
                            </div>
                        </div>
                        
                        <!-- Single Work Post -->
                        <div class="work single">
                            <hr>
                            <div class="field-wrap">
                                <label for="companyname2">Company Name</label>
                                <input type="text" id="companyname2" name="companyname2" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="startyear2">Start Year</label>
                                <input type="text" id="startyear2" name="startyear2" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="endyear2">End Year</label>
                                <input type="text" id="endyear2" name="endyear2" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="jobtitle2">Title</label>
                                <input type="text" id="jobtitle2" name="jobtitle2" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="jobdesc2">Job Description</label>
                                <textarea id="jobdesc2" name="jobdesc2" value="" rows="5"></textarea>
                            </div>
                        </div>
                        
                        <!-- Single Work Post -->
                        <div class="work single">
                            <hr>
                            <div class="field-wrap">
                                <label for="companyname3">Company Name</label>
                                <input type="text" id="companyname3" name="companyname3" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="startyear3">Start Year</label>
                                <input type="text" id="startyear3" name="startyear3" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="endyear3">End Year</label>
                                <input type="text" id="endyear3" name="endyear3" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="jobtitle3">Title</label>
                                <input type="text" id="jobtitle3" name="jobtitle3" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="jobdesc3">Job Description</label>
                                <textarea id="jobdesc3" name="jobdesc3" value="" rows="5"></textarea>
                            </div>
                        </div>
                        
                        <!-- Single Work Post -->
                        <div class="work single">
                            <hr>
                            <div class="field-wrap">
                                <label for="companyname4">Company Name</label>
                                <input type="text" id="companyname4" name="companyname4" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="startyear4">Start Year</label>
                                <input type="text" id="startyear4" name="startyear4" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="endyear4">End Year</label>
                                <input type="text" id="endyear4" name="endyear4" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="jobtitle4">Title</label>
                                <input type="text" id="jobtitle4" name="jobtitle4" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="jobdesc4">Job Description</label>
                                <textarea id="jobdesc4" name="jobdesc4" value="" rows="5"></textarea>
                            </div>
                        </div>
                        
                        <!-- Single Work Post -->
                        <div class="work single">
                            <hr>
                            <div class="field-wrap">
                                <label for="companyname5">Company Name</label>
                                <input type="text" id="companyname5" name="companyname5" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="startyear5">Start Year</label>
                                <input type="text" id="startyear5" name="startyear5" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="endyear5">End Year</label>
                                <input type="text" id="endyear5" name="endyear5" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="jobtitle5">Title</label>
                                <input type="text" id="jobtitle5" name="jobtitle5" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="jobdesc5">Job Description</label>
                                <textarea id="jobdesc5" name="jobdesc5" value="" rows="5"></textarea>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- show more -->
                    <div class="showmorebtns">
                        <div class="wrap">
                            <div class="plus">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg>
                            </div>
                            <div class="minus disabled">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" class="svg-inline--fa fa-minus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Education -->
            <div id="education" class="builder-section multiple">


                <div class="builder-section--header">
                    <div class="wrap">
                        <h2 class="h4">Education</h2>
                        <svg data-name="Expand Form" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 15">
                            <path data-name="Expand Form Path" class="carat" d="M30,0,15,15,0,0Z" />
                        </svg>
                    </div>
                </div>

                <div class="builder-section--form">
                    
                    <!-- form wrap -->
                    <div class="wrap">
<!--
                        <div class="form-section--desc">
                            Include a brief description of your program (usually found on the school website) to better showcase what you learned.
                        </div>
-->

                        <!-- Single Education Post -->
                        <div class="education single">
                            <div class="field-wrap">
                                <label for="schoolname1">School Name</label>
                                <input type="text" id="schoolname1" name="schoolname1" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="edustartyear1">Start Year</label>
                                <input type="text" id="edustartyear1" name="edustartyear1" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="eduendyear1">End Year</label>
                                <input type="text" id="eduendyear1" name="eduendyear1" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="schooltitle1">Program Name &amp; Degree/Diploma Earned</label>
                                <input type="text" id="schooltitle1" name="schooltitle1" value="">
                            </div>
                        </div>
                        
                        <!-- Single Education Post -->
                        <div class="education single">
                            <hr>
                            <div class="field-wrap">
                                <label for="schoolname2">School Name</label>
                                <input type="text" id="schoolname2" name="schoolname2" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="edustartyear2">Start Year</label>
                                <input type="text" id="edustartyear2" name="edustartyear2" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="eduendyear2">End Year</label>
                                <input type="text" id="eduendyear2" name="eduendyear2" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="schooltitle2">Program Name &amp; Degree/Diploma Earned</label>
                                <input type="text" id="schooltitle2" name="schooltitle2" value="">
                            </div>
                        </div>
                        
                        <!-- Single Education Post -->
                        <div class="education single">
                            <hr>
                            <div class="field-wrap">
                                <label for="schoolname3">School Name</label>
                                <input type="text" id="schoolname3" name="schoolname3" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="edustartyear3">Start Year</label>
                                <input type="text" id="edustartyear3" name="edustartyear3" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="eduendyear3">End Year</label>
                                <input type="text" id="eduendyear3" name="eduendyear3" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="schooltitle3">Program Name &amp; Degree/Diploma Earned</label>
                                <input type="text" id="schooltitle3" name="schooltitle3" value="">
                            </div>
                        </div>
                        
                        <!-- Single Education Post -->
                        <div class="education single">
                            <hr>
                            <div class="field-wrap">
                                <label for="schoolname4">School Name</label>
                                <input type="text" id="schoolname4" name="schoolname4" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="edustartyear4">Start Year</label>
                                <input type="text" id="edustartyear4" name="edustartyear4" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="eduendyear4">End Year</label>
                                <input type="text" id="eduendyear4" name="eduendyear4" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="schooltitle4">Program Name &amp; Degree/Diploma Earned</label>
                                <input type="text" id="schooltitle4" name="schooltitle4" value="">
                            </div>
                        </div>
                        
                        <!-- Single Education Post -->
                        <div class="education single">
                            <hr>
                            <div class="field-wrap">
                                <label for="schoolname5">School Name</label>
                                <input type="text" id="schoolname5" name="schoolname5" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="edustartyear5">Start Year</label>
                                <input type="text" id="edustartyear5" name="edustartyear5" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="eduendyear5">End Year</label>
                                <input type="text" id="eduendyear5" name="eduendyear5" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="schooltitle5">Program Name &amp; Degree/Diploma Earned</label>
                                <input type="text" id="schooltitle5" name="schooltitle5" value="">
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- show more -->
                    <div class="showmorebtns">
                        <div class="wrap">
                            <div class="plus">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg>
                            </div>
                            <div class="minus disabled">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" class="svg-inline--fa fa-minus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>

            <!-- Certifications -->
            <div id="certifications" class="builder-section multiple">


                <div class="builder-section--header">
                    <div class="wrap">
                        <h2 class="h4">Certifications</h2>
                        <svg data-name="Expand Form" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 15">
                            <path data-name="Expand Form Path" class="carat" d="M30,0,15,15,0,0Z" />
                        </svg>
                    </div>
                </div>
                <div class="builder-section--form">
                    
                    <!-- form wrap -->
                    <div class="wrap">
                        <div class="form-section--desc">
                            Linkedin, BrainStation, Skillshare. Showcase whatever relevant certificates to your industry.
                        </div>

                        <!-- Single Certification Post -->
                        <div class="cert single">
                            <div class="field-wrap">
                                <label for="certtitle1">Certificate Title</label>
                                <input type="text" id="certtitle1" name="certtitle1" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="certagency1">Certifying Agency or Body</label>
                                <input type="text" id="certagency1" name="certagency1" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="certyear1">Year Completed</label>
                                <input type="text" id="certyear1" name="certyear1" value="">
                            </div>
                        </div>
                        
                        <!-- Single Certification Post -->
                        <div class="cert single">
                            <hr>
                            <div class="field-wrap">
                                <label for="certtitle2">Certificate Title</label>
                                <input type="text" id="certtitle2" name="certtitle2" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="certagency2">Certifying Agency or Body</label>
                                <input type="text" id="certagency2" name="certagency2" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="certyear2">Year Completed</label>
                                <input type="text" id="certyear2" name="certyear2" value="">
                            </div>
                        </div>
                        
                        <!-- Single Certification Post -->
                        <div class="cert single">
                            <hr>
                            <div class="field-wrap">
                                <label for="certtitle3">Title of Certification</label>
                                <input type="text" id="certtitle3" name="certtitle3" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="certagency3">Name of Certifying Agency or Body</label>
                                <input type="text" id="certagency3" name="certagency3" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="certyear3">Year Completed</label>
                                <input type="text" id="certyear3" name="certyear3" value="">
                            </div>
                        </div>
                        
                        <!-- Single Certification Post -->
                        <div class="cert single">
                            <hr>
                            <div class="field-wrap">
                                <label for="certtitle4">Title of Certification</label>
                                <input type="text" id="certtitle4" name="certtitle4" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="certagency4">Name of Certifying Agency or Body</label>
                                <input type="text" id="certagency4" name="certagency4" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="certyear4">Year Completed</label>
                                <input type="text" id="certyear4" name="certyear4" value="">
                            </div>
                        </div>
                        
                        <!-- Single Certification Post -->
                        <div class="cert single">
                            <hr>
                            <div class="field-wrap">
                                <label for="certtitle5">Title of Certification</label>
                                <input type="text" id="certtitle5" name="certtitle5" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="certagency5">Name of Certifying Agency or Body</label>
                                <input type="text" id="certagency5" name="certagency5" value="">
                            </div>
                            <div class="field-wrap float">
                                <label for="certyear5">Year Completed</label>
                                <input type="text" id="certyear5" name="certyear5" value="">
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- show more -->
                    <div class="showmorebtns">
                        <div class="wrap">
                            <div class="plus">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg>
                            </div>
                            <div class="minus disabled">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" class="svg-inline--fa fa-minus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>

            <!-- Projects -->
            <div id="projects" class="builder-section multiple">


                <div class="builder-section--header">
                    <div class="wrap">
                        <h2 class="h4">Projects</h2>
                        <svg data-name="Expand Form" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 15">
                            <path data-name="Expand Form Path" class="carat" d="M30,0,15,15,0,0Z" />
                        </svg>
                    </div>
                </div>
                <div class="builder-section--form">
                    
                    <!-- form wrap -->
                    <div class="wrap">
                        <div class="form-section--desc">
                            When filling out the project URL don't include the "http://" in your link.
                        </div>

                        <!-- Single Project Post -->
                        <div class="project single">
                            <div class="field-wrap">
                                <label for="projectname1">Name of Project</label>
                                <input type="text" id="projectname1" name="projectname1" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="projectdesc1">Short Description</label>
                                <textarea id="projectdesc1" name="projectdesc1" value="" rows="3"></textarea>
                            </div>
                            <div class="field-wrap">
                                <label for="projecturl1">Project URL</label>
                                <input type="text" id="projecturl1" name="projecturl1" value="">
                            </div>
                        </div>
                        
                        <!-- Single Project Post -->
                        <div class="project single">
                            <hr>
                            <div class="field-wrap">
                                <label for="projectname2">Name of Project</label>
                                <input type="text" id="projectname2" name="projectname2" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="projectdesc2">Short Description</label>
                                <textarea id="projectdesc2" name="projectdesc2" value="" rows="3"></textarea>
                            </div>
                            <div class="field-wrap">
                                <label for="projecturl2">Project URL</label>
                                <input type="text" id="projecturl2" name="projecturl2" value="">
                            </div>
                        </div>
                        
                        <!-- Single Project Post -->
                        <div class="project single">
                            <hr>
                            <div class="field-wrap">
                                <label for="projectname3">Name of Project</label>
                                <input type="text" id="projectname3" name="projectname3" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="projectdesc3">Short Description</label>
                                <textarea id="projectdesc3" name="projectdesc3" value="" rows="3"></textarea>
                            </div>
                            <div class="field-wrap">
                                <label for="projecturl3">Project URL</label>
                                <input type="text" id="projecturl3" name="projecturl3" value="">
                            </div>
                        </div>
                        
                        <!-- Single Project Post -->
                        <div class="project single">
                            <hr>
                            <div class="field-wrap">
                                <label for="projectname4">Name of Project</label>
                                <input type="text" id="projectname4" name="projectname4" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="projectdesc4">Short Description</label>
                                <textarea id="projectdesc4" name="projectdesc4" value="" rows="3"></textarea>
                            </div>
                            <div class="field-wrap">
                                <label for="projecturl4">Project URL</label>
                                <input type="text" id="projecturl4" name="projecturl4" value="">
                            </div>
                        </div>
                        
                        <!-- Single Project Post -->
                        <div class="project single">
                            <hr>
                            <div class="field-wrap">
                                <label for="projectname5">Name of Project</label>
                                <input type="text" id="projectname5" name="projectname5" value="">
                            </div>
                            <div class="field-wrap">
                                <label for="projectdesc5">Short Description</label>
                                <textarea id="projectdesc5" name="projectdesc5" value="" rows="3"></textarea>
                            </div>
                            <div class="field-wrap">
                                <label for="projecturl5">Project URL</label>
                                <input type="text" id="projecturl5" name="projecturl5" value="">
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- show more -->
                    <div class="showmorebtns">
                        <div class="wrap">
                            <div class="plus">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg>
                            </div>
                            <div class="minus disabled">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" class="svg-inline--fa fa-minus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
            
            <!-- Review -->
            <div id="review" class="builder-section">
                <div class="builder-section--header">
                    <div class="wrap">
                        <h2 class="h4">Final Review</h2>
                        <svg data-name="Expand Form" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 15">
                            <path data-name="Expand Form Path" class="carat" d="M30,0,15,15,0,0Z" />
                        </svg>
                    </div>
                </div>
                <div class="builder-section--form">
                    <div class="wrap">
                        <div class="form-section--desc">
                            Clicking the button below will open your resume in a new window. You can keep this tab open, make changes and re-click the button to generate a new PDF with the changes. Once you are satisfied with your resume you can download it and save it. Good luck on your career journey!
                        </div>
                        <div class="field-wrap">
                            <input type="submit" name="submit" value="Preview Resume">
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<?

get_footer();