        <!-- Right column -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<div id="col" class="noprint">
            

                <hr class="noscreen" />

                <!-- Category -->
                <h3 >Login</h3>
<div class="login">
                <form name="form1" method="post" action="login.php">
                  <table width="100%" border="0">
                    <tr>
                      <td><strong>Name</strong></td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
                        <input type="varchar" name="varname" id="Name">
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
                        <input type="varchar" name="varaadhar" id="Aadhar">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                    <tr>
                      <td><strong>Location</strong></td>
                    </tr>
                    <tr>
                     <td><span id="sprytextfield2">
                        <label>
                        <input type="varchar" name="varlocation" id="Location">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="Submit" name="button" id="button" value="Submit" <?include "storage.php"?>

                          </div>
                      </label></td>
                    </tr>
                    <tr>
                     
                    </tr>
                  </table>
      </form>
              </div>
                <br/>

      <hr class="noscreen" />

                <!-- Archive -->
              

            <hr class="noscreen" />

                <!-- Links -->
              
                <hr class="noscreen" />
          </div> <!-- /col-in -->
</div> <!-- /col -->
        <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
