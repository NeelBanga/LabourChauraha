<?xml version="1.0"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />

    <meta name="author" content="All: ... [Nazev webu - www.url.cz]; e-mail: info@url.cz" />
    <meta name="copyright" content="Design/Code: Vit Dlouhy [Nuvio - www.nuvio.cz]; e-mail: vit.dlouhy@nuvio.cz" />
    
    <title>JOB PORTAL</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">
<!--
.style1 {
	color: #000066;
	font-weight: bold;
}
.style2 {font-weight: bold}
-->
    </style>
</head>

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
<?php 
include "menu.php"
?>   


<div class="article">
                <h2><span><a href="#">Employer</a></span></h2>
<div class="login">
                <form name="form1" method="post" action="estorage.php">
                  <table width="100%" border="0">
                    <tr>
                      <td><strong>Name</strong></td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
                        <input type="varchar" name="varname" id="varname">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span>
          <label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Aadhar</strong></td>
                    </tr>
                    <tr>
                <td><span id="sprytextfield2">
                        <label>
                        <input type="varchar" name="varaadhar" id="varaadhar">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                    
                    
                    
					<tr>
                      <td><strong>Location</strong></td>
                    </tr>
                    <tr>
                     <td><span id="sprytextfield2">
                        <label>
                        <input type="varchar" name="varlocation" id="varlocation">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
<tr>
                      <td><strong>Phone Number</strong></td>
                    </tr>
                    <tr>
                     <td><span id="sprytextfield3">
                        <label>
                        <input type="varchar" name="varphone" id="varlphone">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                    
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="submit" name="button" id="button" value="Store">
                          </div>
                      </label></td>
                    </tr>
                  </table>
      </form>
              </div>
                <br/>
     
          </div> <!-- /col-in -->
</div> <!-- /col -->
        <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script> 

</div> <!-- /main -->

