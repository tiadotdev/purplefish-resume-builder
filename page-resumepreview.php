<?php

/**
 * Template Name: Resume Preview
 **/

require_once ($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');


//***** Contact Info ******//
$name = $_GET['bname'];
$title = $_GET['title'];
$location = $_GET['location'];
$email = $_GET['bemail'];
$phoneNumber = $_GET['phonenumber'];
$website = str_replace('https://', '', $_GET['website']);


//***** Work Experience 1 ******//
$companyName1 = $_GET['companyname1'];
$startYear1 = $_GET['startyear1'];
$endYear1 = $_GET['endyear1'];
if ($startYear1 && $endYear1) {
    $activeYears1 = $startYear1.' &#8211; '.$endYear1;
} else {
    $activeYears1 = $startYear1;
}
$jobTitle1 = $_GET['jobtitle1'];
$jobDesc1 = $_GET['jobdesc1'];

$companyName2 = $_GET['companyname2'];
$startYear2 = $_GET['startyear2'];
$endYear2 = $_GET['endyear2'];
if ($startYear2 && $endYear2) {
    $activeYears2 = $startYear2.' &#8211; '.$endYear2;
} else {
    $activeYears2 = $startYear2;
}
$jobTitle2 = $_GET['jobtitle2'];
$jobDesc2 = $_GET['jobdesc2'];

$companyName3 = $_GET['companyname3'];
$startYear3 = $_GET['startyear3'];
$endYear3 = $_GET['endyear3'];
if ($startYear3 && $endYear3) {
    $activeYears3 = $startYear3.' &#8211; '.$endYear3;
} else {
    $activeYears3 = $startYear3;
}
$jobTitle3 = $_GET['jobtitle3'];
$jobDesc3 = $_GET['jobdesc3'];

$companyName4 = $_GET['companyname4'];
$startYear4 = $_GET['startyear4'];
$endYear4 = $_GET['endyear4'];
if ($startYear4 && $endYear4) {
    $activeYears4 = $startYear4.' &#8211; '.$endYear4;
} else {
    $activeYears4 = $startYear4;
}
$jobTitle4 = $_GET['jobtitle4'];
$jobDesc4 = $_GET['jobdesc4'];

$companyName5 = $_GET['companyname5'];
$startYear5 = $_GET['startyear5'];
$endYear5 = $_GET['endyear5'];
if ($startYear5 && $endYear5) {
    $activeYears5 = $startYear5.' &#8211; '.$endYear5;
} else {
    $activeYears5 = $startYear5;
}
$jobTitle5 = $_GET['jobtitle5'];
$jobDesc5 = $_GET['jobdesc5'];


//***** Education ******//
$schoolName1 = $_GET['schoolname1'];
$eduTitle1 = $_GET['schooltitle1'];
$eduStartYear1 = $_GET['edustartyear1'];
$eduEndYear1 = $_GET['eduendyear1'];
if ($eduStartYear1 && $eduEndYear1) {
    $eduActiveYears1 = $eduStartYear1.' &#8211; '.$eduEndYear1;
} else {
    $eduActiveYears1 = $eduStartYear1;
}

$schoolName2 = $_GET['schoolname2'];
$eduTitle2 = $_GET['schooltitle2'];
$eduStartYear2 = $_GET['edustartyear2'];
$eduEndYear2 = $_GET['eduendyear2'];
if ($eduStartYear2 && $eduEndYear2) {
    $eduActiveYears2 = $eduStartYear2.' &#8211; '.$eduEndYear2;
} else {
    $eduActiveYears2 = $eduStartYear2;
}

$schoolName3 = $_GET['schoolname3'];
$eduTitle3 = $_GET['schooltitle3'];
$eduStartYear3 = $_GET['edustartyear3'];
$eduEndYear3 = $_GET['eduendyear3'];
if ($eduStartYear3 && $eduEndYear3) {
    $eduActiveYears3 = $eduStartYear3.' &#8211; '.$eduEndYear3;
} else {
    $eduActiveYears3 = $eduStartYear3;
}


$schoolName4 = $_GET['schoolname4'];
$eduTitle4 = $_GET['schooltitle4'];
$eduStartYear4 = $_GET['edustartyear4'];
$eduEndYear4 = $_GET['eduendyear4'];
if ($eduStartYear4 && $eduEndYear4) {
    $eduActiveYears4 = $eduStartYear4.' &#8211; '.$eduEndYear4;
} else {
    $eduActiveYears4 = $eduStartYear4;
}

$schoolName5 = $_GET['schoolname5'];
$eduStartYear5 = $_GET['edustartyear5'];
$eduEndYear5 = $_GET['eduendyear5'];
$eduTitle5 = $_GET['schooltitle5'];
if ($eduStartYear5 && $eduEndYear5) {
    $eduActiveYears5 = $eduStartYear5.' &#8211; '.$eduEndYear5;
} else {
    $eduActiveYears5 = $eduStartYear5;
}

//***** Certifications ******//
$certTitle1 = $_GET['certtitle1'];
$certAgency1 = $_GET['certagency1'];
$certYear1 = $_GET['certyear1'];

$certTitle2 = $_GET['certtitle2'];
$certAgency2 = $_GET['certagency2'];
$certYear2 = $_GET['certyear2'];

$certTitle3 = $_GET['certtitle3'];
$certAgency3 = $_GET['certagency3'];
$certYear3 = $_GET['certyear3'];

$certTitle4 = $_GET['certtitle4'];
$certAgency4 = $_GET['certagency4'];
$certYear4 = $_GET['certyear4'];

$certTitle5 = $_GET['certtitle5'];
$certAgency5 = $_GET['certagency5'];
$certYear5 = $_GET['certyear5'];

//***** Projects ******//
$projectName1 = $_GET['projectname1'];
$projectDesc1 = $_GET['projectdesc1'];
$projectURL1 = 'http://'.str_replace('https://', '', $_GET['projecturl1']);

$projectName2 = $_GET['projectname2'];
$projectDesc2 = $_GET['projectdesc2'];
$projectURL2 = 'http://'.str_replace('https://', '', $_GET['projecturl2']);

$projectName3 = $_GET['projectname3'];
$projectDesc3 = $_GET['projectdesc3'];
$projectURL3 = 'http://'.str_replace('https://', '', $_GET['projecturl3']);

$projectName4 = $_GET['projectname4'];
$projectDesc4 = $_GET['projectdesc4'];
$projectURL4 = 'http://'.str_replace('https://', '', $_GET['projecturl4']);

$projectName5 = $_GET['projectname5'];
$projectDesc5 = $_GET['projectdesc5'];
$projectURL5 = 'http://'.str_replace('https://', '', $_GET['projecturl5']);


//***** Social Links ******//
if (!empty($_GET['linkedin'])) {
    $url = 'https://www.linkedin.com/in/'.str_replace('https://', '', $_GET['linkedin']);
    $linkedin = '<a href="'.$url.'" target="_blank"><img style="width:18px;" class="pf-socials" src="/wp-content/themes/artfuture/images/resumeSocials/PF-ResumeIcon-linkedin.png" alt="LinkedIn" /></a>';
}

if (!empty($_GET['twitter'])) {
    $url = 'https://twitter.com/'.str_replace('https://', '', $_GET['twitter']);
    $twitter = '<a href="'.$url.'" target="_blank"><img style="width:16px;" class="pf-socials" src="/wp-content/themes/artfuture/images/resumeSocials/PF-ResumeIcon-twitter.png" alt="Twitter" /></a>';
}

if (!empty($_GET['medium'])) {
    $url = 'https://medium.com/@'.str_replace('https://', '', $_GET['medium']);
    $medium = '<a href="'.$url.'" target="_blank"><img style="width:18px;" class="pf-socials" src="/wp-content/themes/artfuture/images/resumeSocials/PF-ResumeIcon-medium.png" alt="Medium" /></a>';
}

if (!empty($_GET['instagram'])) {
    $url = 'https://instagram.com/'.str_replace('https://', '', $_GET['instagram']);
    $instagram = '<a href="'.$url.'" target="_blank"><img style="width:16.7px;" class="pf-socials" src="/wp-content/themes/artfuture/images/resumeSocials/PF-ResumeIcon-instagram.png" alt="Instagram" /></a>';
}

if (!empty($_GET['stackoverflow'])) {
    $url = 'https://stackoverflow.com/users'.str_replace('https://', '', $_GET['stackoverflow']);
    $stackoverflow = '<a href="'.$url.'" target="_blank"><img style="width:14.5px;" class="pf-socials" src="/wp-content/themes/artfuture/images/resumeSocials/PF-ResumeIcon-stackoverflow.png" alt="Stackoverflow" /></a>';
}

if (!empty($_GET['github'])) {
    $url = 'https://github.com/'.str_replace('https://', '', $_GET['github']);
    $github = '<a href="'.$url.'" target="_blank"><img style="width:17px;" class="pf-socials" src="/wp-content/themes/artfuture/images/resumeSocials/PF-ResumeIcon-github.png" alt="Github" /></a>';
}

if (!empty($_GET['tiktok'])) {
    $url = 'https://www.tiktok.com/@'.str_replace('https://', '', $_GET['tiktok']);
    $tiktok = '<a href="'.$url.'" target="_blank"><img style="width:14.5px;" class="pf-socials" src="/wp-content/themes/artfuture/images/resumeSocials/PF-ResumeIcon-tiktok.png" alt="Tiktok" /></a>';
}

if (!empty($_GET['youtube'])) {
    $url = 'https://www.youtube.com/channel/'.str_replace('https://', '', $_GET['youtube']);
    $youtube = '<a href="'.$url.'" target="_blank"><img style="width:20px;" class="pf-socials" src="/wp-content/themes/artfuture/images/resumeSocials/PF-ResumeIcon-youtube.png" alt="YouTube" /></a>';
}

if (!empty($_GET['codepen'])) {
    $url = 'https://codepen.io/'.str_replace('https://', '', $_GET['codepen']);
    $codepen = '<a href="'.$url.'" target="_blank"><img style="width:19px;" class="pf-socials" src="/wp-content/themes/artfuture/images/resumeSocials/PF-ResumeIcon-codepen.png" alt="Codepen" /></a>';
}

if (!empty($_GET['behance'])) {
    $url = 'https://www.behance.net/'.str_replace('https://', '', $_GET['behance']);
    $behance = '<a href="'.$url.'" target="_blank"><img style="width:21px;" class="pf-socials" src="/wp-content/themes/artfuture/images/resumeSocials/PF-ResumeIcon-behance.png" alt="Behance" /></a>';
}


//** Misc Variables **/
$socialsList = $linkedin.$twitter.$instagram.$tiktok.$youtube.$github.$stackoverflow.$codepen.$behance.$medium;


//***** Output PDF ******//
$file_name = str_replace(' ', '', $name).'-'.str_replace(' ', '', $title).'-Resume_PurpleFish.pdf';

// Set Up PDF, configure margins and fonts, define temp folder
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];
$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];


$mpdf = new \Mpdf\Mpdf(
    [
        'tempDir' => __DIR__ . '/mpdf/tmp',
        'fontDir' => array_merge($fontDirs, [
            __DIR__ . '/mpdf/ttfonts']),
        'fontdata' => $fontData + [
                'light' => [
                    'R' => 'Inter-ExtraLight.ttf',
                ],
                'regular' => [
                    'R' => 'Inter-Regular.ttf',
                ],
                'medium' => [
                    'R' => 'Inter-Medium.ttf',
                ],
                'bold' => [
                    'R' => 'Inter-Bold.ttf',
                ]
            ],
        'default_font' => 'regular',
        'default_font_size' => 14,
        'margin_left' => 15,
        'margin_top' => 15,
        'margin_right' => 15,
        'margin_bottom' => 15,
    ]
);

//***** Include Stylesheet *****//
$stylesheet = '';

$stylesheet .= '

    pre {
        font-family: regular;
        font-size: 16px;
    }

    table {
        width: 100%;
    }
    
    header {
        font-size: 54px;
        font-family: light;
    }
    
    .title {
        font-size: 20px;
        font-family: bold;
    }
    
    .floatright {
        text-align: right;
    }
    
    .pf-socials {
        padding-left: 12.5px;
    }
    
    td {
      vertical-align: top;
    }
    
    .valigncenter {
        vertical-align: center;
    }
    
    .valignbottom {
        vertical-align: bottom ;
    }
    
    a {
        color: #000;
        text-decoration: none;
    }
    
    .contactinfo {
        margin-bottom: 45px;
    }
    
    .workexperience-section--left {
        width: 25%;
        padding-right 5%;
        float: left;
    }
    
    .workexperience-section--right{
        width: 75%;
        float: left;
    }
    
    .bold {
        font-family: bold;
    }
    
    .space5 {
        margin-bottom: 5px;
    }
    
    .space10 {
        margin-bottom: 10px;
    }
    
    .font13 {
        font-size: 13px;
    }
    
    .light {
        font-family: light;
    }
    
    .regular {
        font-family: regular;
    }
    
';

$data = '';

// Contact Info & Socials
$data .= '<div class="contactinfo">
    <table>
        <tr>
            <td class="valignbottom"><header>'.$name.'</header></td>
            <td class="floatright valignbottom font13"><a href="tel:'.$phoneNumber.'">'.$phoneNumber.'</a></td>
        </tr>
        <tr>
            <td class="valignbottom" style="padding-left: 5px;"><p class="title">'.$title.'</p></td>
            <td class="floatright valigncenter font13"><a href="mailto:'.$email.'">'.$email.'</a></td>
        </tr>
        
        <tr>
            <td class="valignbottom valignbottom font13" style="padding-left: 5px;"><a href="http://'.$website.'">'.$website.'</a> &#8226; '.$location.'</td>
            <td class="floatright valignbottom">'.$socialsList.'</td>
        </tr>
    </table>
</div>';

// Work Experience 1
if ($jobTitle1) {
    
    $data .= '<div class="workexperience">

        <p class="light font13">EXPERIENCE</p>
        <div class="workexperience-section">
            <div class="workexperience-section--left">
                <section class="bold space5 font13">'.$companyName1.'</section>
                <section class="font13">'.$activeYears1.'</section>
            </div>
            <div class="workexperience-section--right">
                <section class="bold space5">'.$jobTitle1.'</section>
                <section class="font13">'.$jobDesc1.'</section>
            </div>
        </div>
        <br>

    </div>';
    
}


// Work Experience 2
if ($jobTitle2) {
    
    $data .= '<div class="workexperience">
    
        <div class="workexperience-section">
            <div class="workexperience-section--left">
                <section class="bold space5 font13">'.$companyName2.'</section>
                <section class="font13">'.$activeYears2.'</section>
            </div>
            <div class="workexperience-section--right">
                <section class="bold space5">'.$jobTitle2.'</section>
                <section class="font13">'.$jobDesc2.'</section>
            </div>
        </div>
        <br>

    </div>';
    
}

// Work Experience 3
if ($jobTitle3) {
    
    $data .= '<div class="workexperience">
    
        <div class="workexperience-section">
            <div class="workexperience-section--left">
                <section class="bold space5 font13">'.$companyName3.'</section>
                <section class="font13">'.$activeYears3.'</section>
            </div>
            <div class="workexperience-section--right">
                <section class="bold space5">'.$jobTitle3.'</section>
                <section class="font13">'.$jobDesc3.'</section>
            </div>
        </div>
        <br>

    </div>';
    
}

// Work Experience 4
if ($jobTitle4) {
    
    $data .= '<div class="workexperience">
    
        <div class="workexperience-section">
            <div class="workexperience-section--left">
                <section class="bold space5 font13">'.$companyName4.'</section>
                <section class="font13">'.$activeYears4.'</section>
            </div>
            <div class="workexperience-section--right">
                <section class="bold space5">'.$jobTitle4.'</section>
                <section class="font13">'.$jobDesc4.'</section>
            </div>
        </div>
        <br>

    </div>';
    
}

// Work Experience 5
if ($jobTitle5) {
    
    $data .= '<div class="workexperience">
    
        <div class="workexperience-section">
            <div class="workexperience-section--left">
                <section class="bold space5 font13">'.$companyName5.'</section>
                <section class="font13">'.$activeYears5.'</section>
            </div>
            <div class="workexperience-section--right">
                <section class="bold space5">'.$jobTitle5.'</section>
                <section class="font13">'.$jobDesc5.'</section>
            </div>
        </div>
        <br>

    </div>';
    
}

// Education 1
if ($eduTitle1) {
    
    $data .= '<div class="education">

        <p class="light font13">EDUCATION</p>
        <div class="workexperience-section">
            <section class="bold space5">'.$eduTitle1.'</section>
            <section class="font13">'.$schoolName1.' <span class="regular">&#40;'.$eduActiveYears1.'&#41;</span></section>
        </div>
        <br>

    </div>';
    
}

// Education 2
if ($eduTitle2) {
    
    $data .= '<div class="education">

        <div class="workexperience-section">
            <section class="bold space5">'.$eduTitle2.'</section>
            <section class="font13">'.$schoolName2.' <span class="regular">&#40;'.$eduActiveYears2.'&#41;</span></section>
        </div>
        <br>

    </div>';
    
}

// Education 3
if ($eduTitle3) {
    
    $data .= '<div class="education">

        <div class="workexperience-section">
            <section class="bold space5">'.$eduTitle3.'</section>
            <section class="font13">'.$schoolName3.' <span class="regular">&#40;'.$eduActiveYears3.'&#41;</span></section>
        </div>
        <br>

    </div>';
    
}

// Education 4
if ($eduTitle4) {
    
    $data .= '<div class="education">

        <div class="workexperience-section">
            <section class="bold space5">'.$eduTitle4.'</section>
            <section class="font13">'.$schoolName4.' <span class="regular">&#40;'.$eduActiveYears4.'&#41;</span></section>
        </div>
        <br>

    </div>';
    
}

// Education 5
if ($eduTitle5) {
    
    $data .= '<div class="education">

        <div class="workexperience-section">
            <section class="bold space5">'.$eduTitle5.'</section>
            <section class="font13">'.$schoolName5.' <span class="regular">&#40;'.$eduActiveYears5.'&#41;</span></section>
        </div>
        <br>

    </div>';
    
}

// Certification 1
if ($certTitle1) {
    
    $data .= '<div class="certifications">

        <p class="light font13">CERTIFICATIONS</p>
        <div class="workexperience-section">
            <div class="workexperience-section--left">
                <section class="bold space10 font13">'.$certAgency1.'</section>
            </div>
            <div class="workexperience-section--right">
                <section class="bold space10">'.$certTitle1.' <span class="regular">&#40;'.$certYear1.'&#41;</span></section>
            </div>
        </div>
        <br>

    </div>';
    
}

// Certification 2
if ($certTitle2) {
    
    $data .= '<div class="certifications">

        <div class="workexperience-section">
            <div class="workexperience-section--left">
                <section class="bold space10 font13">'.$certAgency2.'</section>
            </div>
            <div class="workexperience-section--right">
                <section class="bold space10">'.$certTitle2.' <span class="regular">&#40;'.$certYear2.'&#41;</span></section>
            </div>
        </div>
        <br>

    </div>';
    
}

// Certification 3
if ($certTitle3) {
    
    $data .= '<div class="certifications">

        <div class="workexperience-section">
            <div class="workexperience-section--left">
                <section class="bold space10 font13">'.$certAgency3.'</section>
            </div>
            <div class="workexperience-section--right">
                <section class="bold space10">'.$certTitle3.' <span class="regular">&#40;'.$certYear3.'&#41;</span></section>
            </div>
        </div>
        <br>

    </div>';
    
}

// Certification 4
if ($certTitle4) {
    
    $data .= '<div class="certifications">

        <div class="workexperience-section">
            <div class="workexperience-section--left">
                <section class="bold space10 font13">'.$certAgency4.'</section>
            </div>
            <div class="workexperience-section--right">
                <section class="bold space10">'.$certTitle4.' <span class="regular">&#40;'.$certYear4.'&#41;</span></section>
            </div>
        </div>
        <br>

    </div>';
    
}

// Certification 5
if ($certTitle5) {
    
    $data .= '<div class="certifications">

        <div class="workexperience-section">
            <div class="workexperience-section--left">
                <section class="bold space10 font13">'.$certAgency5.'</section>
            </div>
            <div class="workexperience-section--right">
                <section class="bold space10">'.$certTitle5.' <span class="regular">&#40;'.$certYear5.'&#41;</span></section>
            </div>
        </div>
        <br>

    </div>';
    
}

// Projects 1
if ($projectName1) {
    
    $data .= '<div class="certifications">

        <p class="light font13">PROJECTS</p>
        <div class="workexperience-section">
            <section class="space5">'.$projectName1.'</section>
            <section class="space5 bold font13">'.$projectURL1.'</section>
            <section class="font13">'.$projectDesc1.'</section>
        </div>
        <br>

    </div>';
    
}

// Projects 2
if ($projectName2) {
    
    $data .= '<div class="certifications">

        <div class="workexperience-section">
            <section class="space5">'.$projectName2.'</section>
            <section class="space5 bold font13">'.$projectURL2.'</section>
            <section class="font13">'.$projectDesc2.'</section>
        </div>
        <br>

    </div>';
    
}

// Projects 3
if ($projectName3) {
    
    $data .= '<div class="certifications">

        <div class="workexperience-section">
            <section class="space5">'.$projectName3.'</section>
            <section class="space5 bold font13">'.$projectURL3.'</section>
            <section class="font13">'.$projectDesc3.'</section>
        </div>
        <br>

    </div>';
    
}

// Projects 4
if ($projectName4) {
    
    $data .= '<div class="certifications">

        <div class="workexperience-section">
            <section class="space5">'.$projectName4.'</section>
            <section class="space5 bold font13">'.$projectURL4.'</section>
            <section class="font13">'.$projectDesc4.'</section>
        </div>
        <br>

    </div>';
    
}

// Projects 5
if ($projectName5) {
    
    $data .= '<div class="certifications">

        <div class="workexperience-section">
            <section class="space5">'.$projectName5.'</section>
            <section class="space5 bold font13">'.$projectURL5.'</section>
            <section class="font13">'.$projectDesc5.'</section>
        </div>
        <br>

    </div>';
    
}


//// Add Watermark Image
//$mpdf->SetWatermarkImage('/wp-content/themes/artfuture/images/PF-ResumePreview-Watermark-Final.svg', 0.2, 'F', 'F');
//$mpdf->showWatermarkImage = true;
//
//// Encrypt PDF
//$mpdf->SetProtection(array());

// Add Styles to PDF
$mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);

// Add Data to PDF
$mpdf->WriteHTML(stripslashes($data),\Mpdf\HTMLParserMode::HTML_BODY);

// Output a PDF file directly to the browser
$mpdf->Output($file_name, 'I');

exit;