<?php
// New news way: Place the news items in the following array for
// automatic display.  If you're having grief with double-quotes, use
// single quotes instead, or escape them by putting in a backslash ('\').
//
// Format: (date, text, initials, isPinned);

    $news[] = array("8/25/26", "Welcome to CS421, Fall 2026, at 3:30pm TR in CIF 1025.
    This page will be the main bulletin board for the CS 421 lectures, and
    hence is always <i>under construction</i>.  Please check it
    frequently. Essential notices will be posted here.  <br/> We will
    be using PrairieLearn this semester.  Please go to <a
    href='https://www.prairielearn.org'>https://www.prairielearn.org</a>
    and add <br/><br/>CS 421: Programming Languages and Compilers,
    Fall 2026<br/><br/> as one of your courses there for this
    semester.", "ELG", false);

    $pinnedNewsArr = array();
    $normalNewsArr = array();
    foreach($news as $n)
    {
      $newsItem = "<li><strong>" . $n[0] . "</strong> - " . $n[1] . " - <em>" . $n[2] . "</em></li>";
      if (array_key_exists(3, $n) && $n[3] === true) {
        $pinnedNewsArr[] = $newsItem;
      } else {
        $normalNewsArr[] = $newsItem;
      }
    }

    $pinnedNews = join("<hr />", $pinnedNewsArr);
    $normalNews = join("<hr />", $normalNewsArr);
    //pretty simple, and easy to break, but good enough for our purposes
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
  <meta http-equiv="Pragma" CONTENT="no-cache">

  <title>CS 421 (Fall 2026): main</title>
  <link rel="shortcut icon" href="lambda.ico" type="image/x-icon">
  <link rel="stylesheet" href="default.css" type="text/css"
        media="all">
</head>

<body>

  <table border="0" width="100%" cellpadding="3">
    <tr>
      <td>
        <table class="title" width="100%" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" class="title">
              <big class="title">CS 421: Programming Languages and Compilers</big>
            </td>
          </tr>

          <tr>
            <td class="nav" align="center">
                  main
                    &nbsp;::&nbsp;
                  <a href="policy.html">policy</a>
                    &nbsp;::&nbsp;
                  <a href="lectures/index.html">lectures</a>
                    &nbsp;::&nbsp;
<!--
                  <a href="mps/index.html">mps</a>
                    &nbsp;::&nbsp;
-->
                  <a href="mps.html">mps</a>
                    &nbsp;::&nbsp;
                  <a href="exams/index.html">exams</a>
                    &nbsp;::&nbsp;
                  <a href="project.html">unit project</a>
                    &nbsp;::&nbsp;
                  <a href="resources/index.html">resources</a>
                    &nbsp;::&nbsp;
                  <a href="faq.html">faq</a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <table border="0" width="100%" cellspacing="0" cellpadding="6">
    <tr valign="top">

  <td width="80%">

<!-- Announcements -->
<?php
    // This makes it so that the Pinned Announcements module only shows up
    // if there are announcements. Else only the news shows up.
    if (strlen($pinnedNews) > 0):
?>

<table border="0" class="module" width="100%" cellspacing="0" cellpadding="4">
  <tr>
    <th class="module_title">Pinned Announcements</th>
  </tr>
  <tr>
    <td>
      <?php
          print $pinnedNews;
      ?>
    </td>
  </tr>
</table>

<br />

<?php endif; ?>

<!-- News -->

<table border="0" class="module" width="100%" cellspacing="0" cellpadding="4">
  <tr>
    <th class="module_title">News for Fall 2026</th>
  </tr>
  <tr>
    <td>
      <?php
        print $normalNews;
      ?>
    </td>
  </tr>
</table>
</td>

  <td width="20%">

<table border="0" class="module" width="100%" cellspacing="0" cellpadding="4">
  <tr>
    <th class="module_title">README</th>
  </tr>
  <tr>
    <td>

<table class="index" border="0" width="100%">
<tr>
<td>
  <a href="policy.html#objectives">Objectives</a><br/>
  <a href="policy.html#contact">Contacting Staff</a><br/>
  <a href="policy.html#assignments">Submitting Assignments</a><br/>
  <a href="policy.html#extensions">Extensions</a><br/>
  <a href="policy.html#regrade">Regrade Policy</a><br/>
  <a href="policy.html#collaboration">Collaboration</a><br/>
  <a href="policy.html#cheating">Policy on Cheating</a><br/>
  <a href="policy.html#grades">Grading</a><br/>
  <a href="policy.html#books">Textbooks</a><br/>
  <a href="faq.html">FAQ</a>
</td>
<td>
<a href="policy.html#mental health">Mental Health Assistance</a><br/>
<a href="policy.html#caring community">Caring Community</a><br/>
<a href="policy.html#inclusion">Inclusive Community</a><br/>
<a href="policy.html#dres">Students with Disabilities</a><br/>
<a href="policy.html#disruptive behavior">Disruptive Behavior</a><br/>
<a href="policy.html#emergency">Emergency Response Recommendations</a><br/>
<a href="policy.html#religious">Religious Observances</a><br/>
<a href="policy.html#sexual misconduct">Sexual Misconduct Reporting Obligation</a><br/>
  <a href="faq.html">FAQ</a>
</td>
</tr>
</table>

    </td>
  </tr>
</table>
<p>

<table border="0" class="module" width="100%" cellspacing="0" cellpadding="4">
  <tr>
    <th class="module_title">Class Schedule</th>
  </tr>
  <tr>
    <td>

  <center>
    <small>
      <b>Lecture:</b><br/>
      Tues, Thurs 3:30pm - 4:45pm<br/>
      0027/1025 CIF<br/>
      <br/>
      Zoom Info:<br/>
      Meeting Id: 838 6324 1301</br>
      Passcode: cs421<br/>
      URL:
      <a href='https://illinois.zoom.us/j/83863241301?pwd=U2dtRm9RUmhVQUw4d3dFOVJxNHY4UT09'>
      https://illinois.zoom.us/j/83863241301?pwd=U2dtRm9RUmhVQUw4d3dFOVJxNHY4UT09
      </a><br/>
    </small>
  </center>

    </td>
  </tr>


  <tr><th class="module_title">Info for Office Hours</th></tr>
        <td>
         <small>
         <b>Urbana:</b> Tutoring Center <b>(TC)</b>, Siebel Center basement<br/><!--
         <b>Zoom Meeting Id:</b> 863 0474 2033<br/>
         <b>Zoom Passcode:</b> 255510<br/>
         <b>URL:</b> <a href="https://illinois.zoom.us/j/86304742033?pwd=SPo2yLeAraGi5q04Bz9W7jPyuySMfp.1
">Zoom</a> <br/>-->
        </small>
        </td>

</table>
<p>

<table border="0" class="module" width="100%" cellspacing="0" cellpadding="4">
  <tr>
    <th class="module_title">Staff</th>
  </tr>
  <tr>
    <td>

    <table class="index" border="0" width="100%">
      <tr><th>Instructor</th></tr>

    <tr>
      <td>
        <b>Elsa Gunter</b><br/>
        <b>Email: </b><a href="mailto:egunter@illinois.edu">egunter@illinois.edu</a><br/>
        <b>Office:</b> 2112 SC<br/>
        <b>Office Hours Info:</b><br/> 
        Tues <!-- 10:30am-11:30am and --> 3:30pm-4:20pm in SC 2112 and Zoom<br/>
        Subject to change from rebalencing, or because of medical appointments beyond my control<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Meeting Id: 871 2339 8534<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Passcode: ugrads<br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Zoom URL: <a href='https://illinois.zoom.us/j/87123398534?pwd=d1JzUG9NanJHd2hLNjRtYWZybXgwUT09'>
         https://illinois.zoom.us/j/87123398534?pwd=d1JzUG9NanJHd2hLNjRtYWZybXgwUT09
         </a><br/>
      Also by appointment<br/>
                <br/>
      </td>
    </tr>


      <tr><th>Teaching Assistants for CS 421</th></tr>

    <tr>
      <td>
        <b>Aryan Arora</b><br/>
        <b>Email:</b> <a href="mailto:aarora14@illinois.edu">aarora14@illinois.edu</a><br/>
        <b>Office Hours Info:</b> <br/>
        Mon 3-4pm TC<br/>
        Tue 2-3pm TC<br/>
<!--
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Meeting Id: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Passcode: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        URL: <a href="     ">Zoom</a> <br/>
-->
        <br/>
      </td>
    </tr>

    <tr>
      <td>
        <b>Hrishikesh	Balakrishnan</b><br/>
        <b>Email:</b> <a href="mailto:hb19@illinois.edu">hb19@illinois.edu</a><br/>
        <b>Office Hours Info:</b><br/>
        Mon 4-5pm TC<br/>
        Thu 3:30-4:30pm TC<br/>
<!--
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Meeting Id: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Passcode: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="   ">Zoom</a>
        <br/>
-->
        <br/>
      </td>
    </tr>

    <tr>
      <td>
        <b>Ali Reza	Ibrahimzada</b><br/>
        <b>Email:</b> <a href="mailto:alirezai@illinois.edu">alirezai@illinois.edu</a><br/>
        <b>Office Hours Info:</b><br/>
        Fri 2-4pm TC<br/>
<!--
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Meeting Id: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Passcode: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        URL: <a href="     ">Zoom</a> <br/>
-->
        <br/>
      </td>
    </tr>

    <tr>
      <td>
        <b>Nausheen	Mohammed</b><br/>
        <b>Email:</b> <a href="mailto:jnm6@illinois.edu">jnm6@illinois.edu</a><br/>
        <b>Office Hours Info:</b><br/>
        Thu 9:30-10:30am <a href="https://illinois.zoom.us/j/86199671762?pwd=IQe04NL5eFTmNVSdUfKbeeZeqBowLA.1">Zoom</a><br/>
        Thu 2-3pm TC<br/>
<!--
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Meeting Id: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Passcode: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        URL: <a href="     ">Zoom</a> <br/>
-->
        <br/>
      </td>
    </tr>

    <tr>
      <td>
        <b>Shuai Wang</b><br/>
        <b>Email:</b> <a href="mailto:swang516@illinois.edu">swang516@illinois.edu</a><br/>
        <b>Office Hours Info:</b> <br/>
        Wed 2-3pm <a href="https://illinois.zoom.us/j/9645383509?pwd=WUhHaUdCSmY3MlNDRUFaUjJNbHpvQT09">Zoom</a><br/>
        Wed 3-4pm TC<br/>
<!--
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Meeting Id: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Passcode: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        URL: <a href="     ">Zoom</a> <br/>
-->
        <br/>
      </td>
    </tr>

    <tr>
      <td>
        <b>Atharva Naik</b><br/>
        <b>Email:</b> <a href="mailto:annaik2@illinois.edu">annaik2@illinois.edu</a><br/>
        <b>Office Hours Info:</b> <br/>
        Fri 10am-12pm TC<br/>

<!--
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Meeting Id: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Passcode: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        URL: <a href="     ">Zoom</a> <br/>
-->
        <br/>
      </td>
    </tr>

    <tr>
      <td>
        <b>Grace He</b><br/>
        <b>Email:</b> <a href="mailto:gche3@illinois.edu">gche3@illinois.edu</a><br/>
        <b>Office Hours Info:</b><br/> 
        Mon 11am-12pm TC<br/>
        Wed 11am-12pm TC<br/>

<!--
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Meeting Id: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Passcode: <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        URL: <a href="     ">Zoom</a> <br/>
-->
        <br/>
      </td>
    </tr>


      </table>

    </td>
  </tr>
</table>
<p>

</td>

    </tr>
  </table>

</body>
</html>
