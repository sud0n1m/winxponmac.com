<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type"
        content="text/html; charset=utf-8" />
  <meta name="robots"
        content="all" />

  <title>Contact</title>
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/aqualicious/styles.css" />
  <link rel="stylesheet"
        type="text/css"
        media="print"
        href="../rw_common/themes/aqualicious/print.css" />
  <link rel="stylesheet"
        type="text/css"
        media="handheld"
        href="../rw_common/themes/aqualicious/handheld.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/aqualicious/css/styles/metal.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/aqualicious/css/sidebar/sidebar_right.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/aqualicious/css/font/modern.css" />
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href=
        "../rw_common/themes/aqualicious/css/background/white.css" />
        
  <link rel="stylesheet"
        type="text/css"
        media="screen"
        href="../rw_common/themes/aqualicious/css/width/680.css" />
<script type="text/javascript"
      src="../rw_common/themes/aqualicious/javascript.js">
</script>
</head>

<body>
  <div id="gradient"></div>

  <div id="navcontainer">
    <!-- Start Navigation -->

    <ul>
      <li><a href="../index.html"
         rel="self">The Contest</a></li>

      <li><a href="../The_Team/The_Team.html"
         rel="self">The Team</a></li>

      <li><a href="../Donors/Donors.html"
         rel="self">Donors</a></li>

      <li><a href="../Downloads/Download.html"
         rel="self">Download</a></li>

      <li><a href="../Store/index.html"
         rel="self">Store</a></li>

      <li><a href="Contact.php"
         rel="self"
         id="current"
         name="current">Contact</a></li>
    </ul>
  </div><!-- End navigation -->

  <div id="container">
    <!-- Start container -->

    <div id="pageHeader">
      <!-- Start page header -->

      <h1>Winxponmac.com</h1>

      <h2>Windows XP on the Intel Mac</h2>
    </div><!-- End page header -->

    <div id="sidebarContainer">
      <!-- Start Sidebar wrapper -->

      <div class="sideHeader"></div><!-- Sidebar header -->

      <div id="sidebar">
        <!-- Start sidebar content -->

        <br />
        <!-- sidebar content you enter in the page inspector -->
         <!-- sidebar content such as the blog archive links -->
         <script type="text/javascript">
//<![CDATA[
<!--
                          amazon_ad_tag = "winxponmac-20";  amazon_ad_width = "120";  amazon_ad_height = "600";  amazon_ad_logo = "hide";//-->
//]]>
</script> <script type="text/javascript"
     src="http://www.assoc-amazon.com/s/ads.js">
</script>
      </div><!-- End sidebar content -->
    </div><!-- End sidebar wrapper -->

    <div id="contentContainer">
      <!-- Start main content wrapper -->

      <div id="content">
        <!-- Start content -->

        <div class="contentSpacer"></div>
        <!-- this makes sure the content is long enough for the design -->
        <?php
        if(!array_key_exists('formMessage', $_SESSION))
        $_SESSION['formMessage'] = "";
        if(!array_key_exists('form_element0', $_SESSION))
        $_SESSION['form_element0'] = "";
        if(!array_key_exists('form_element1', $_SESSION))
        $_SESSION['form_element1'] = "";
        if(!array_key_exists('form_element2', $_SESSION))
        $_SESSION['form_element2'] = "";
        if(!array_key_exists('form_element3', $_SESSION))
        $_SESSION['form_element3'] = "";
        ?>

        <div class="message-text">
          <?php
          if (!$_SESSION['formMessage']) { 
          echo "Fill in the form below to send us an email.";
          } else {
           echo $_SESSION['formMessage'];
           }
           ?>
        </div>
        <br />

        <form action="./files/mailer.php"
              method="post"
              enctype="multipart/form-data">
          <label>Your Name:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element0']; ?>"
                name="form_element0"
                size="40" />
          <br />
          <br />
          <label>Your Email:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element1']; ?>"
                name="form_element1"
                size="40" />
          <br />
          <br />
          <label>Subject:</label> *
          <br />
          <input class="form-input-field"
                type="text"
                value="<?php echo $_SESSION['form_element2']; ?>"
                name="form_element2"
                size="40" />
          <br />
          <br />
          <label>Message:</label> *
          <br />
          <textarea class="form-input-field"
                name="form_element3"
                rows="8"
                cols="38">
<?php echo $_SESSION['form_element3']; ?>
</textarea>
          <br />
          <br />
          <input class="form-input-button"
                type="reset"
                name="resetButton"
                value="Reset" /> <input class="form-input-button"
                type="submit"
                name="submitButton"
                value="Submit" />
        </form><?php session_destroy(); ?>

        <div class="clear"></div>

        <div class="clearer"></div>
      </div><!-- End content -->
    </div><!-- End main content wrapper -->

    <div class="clearer"></div>

    <div id="footer">
      <!-- Start Footer -->

      <div id="breadcrumbcontainer">
        <!-- Start the breadcrumb wrapper -->

        <ul>
          <li><a href="../index.html">The
          Contest</a>&nbsp;&gt;&nbsp;</li>

          <li><a href=
          "Contact.php">Contact</a>&nbsp;&gt;&nbsp;</li>
        </ul>
      </div><!-- End breadcrumb -->

      <p>© 2007 Colin Nederkoorn</p>
    </div><!-- End Footer -->
  </div><!-- End container -->
  <script src="http://www.google-analytics.com/urchin.js"
      type="text/javascript">
</script><script type="text/javascript">
//<![CDATA[
_uacct = "UA-1143006-1";
urchinTracker();
//]]>
</script>
</body>
</html>
