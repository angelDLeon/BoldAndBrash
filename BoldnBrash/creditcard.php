<!DOCTYPE html>
<html lang="en-GB">

<head>
  <title>Credit Card PHP Validation Script</title>
  <meta name="description" content="A free PHP function for validating credit cards">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="John Gardner" />
  <meta name="copyright" content="2005-2021 John Gardner">
  <meta name="robots" content="index, follow">
  <meta name="rating" content="General">
  <meta name="sitemap-priority" content=".8">
  <meta name="sitemap-changefreg" content="monthly" />
  <link rel="stylesheet" type="text/css" href="_private/software.css">
  <link rel="icon" href="http://braemoor.co.uk/favicon.ico" type="image/x-icon"> 
  <link rel="shortcut icon" href="http://braemoor.co.uk/favicon.ico" type="image/x-icon">
  <script type="text/javascript" src="_private/adjustmenu.js"></script>
</head>

<body onload="AdjustMenu('creditcardphp');">

<nav>
  <p class="menutitle">Braemoor Software<br />Freebies</p>  
  <table class="menus">
    <tr><td><a id="introduction" title="Return to the introduction of the Software Section" href="index.shtml"><span class="menutext">Introduction</span></a></td></tr>
    <tr><td><a id="braemoor" title="Return to the Braemoor Website home page" href="../index.shtml"><span class="menutext">Braemoor Home Page</span></a></td></tr>
    <tr><td><a id="imagemapper" title="A free client-side image mapper written in Visual Basic" href="imagemapper.shtml"><span class="menutext">Client-side<br />Image Mapper<br />Visual Basic Program</span></a></td></tr>
    <tr><td><a id="sitemapper" title="A free PHP program to create a site map for your web site" href="sitemapper.shtml"><span class="menutext">Site Map Creator<br />PHP Web Transaction</span></a></td></tr>
    <tr><td><a id="linkchecker" title="A free PHP program to check all links within your web site" href="linkchecker.shtml"><span class="menutext">Website Link Checker<br />PHP Web Transaction</span></a></td></tr>
    <tr><td><a id="obfuscate" title="A free Visual Basic program to obfuscate email addresses" href="obfuscator.shtml"><span class="menutext">Email Address Obfuscator<br />Visual Basic Program</span></a></td></tr>
    <tr><td><a id="postcodes" title="Free JavaScript and PHP validation functions to validate a UK postcode against the formal specification" href="postcodes.shtml"><span class="menutext">UK Postcode Validation<br />JS and PHP Functions</span></a></td></tr>
    <tr><td><a id="telephones" title="Free JavaScript, VB, and PHP validation functions to validate a UK telephine number against the formal specification" href="telnumbers.shtml"><span class="menutext">UK Tel. No. Validation<br />JS/VB/PHP Functions</span></a></td></tr>
    <tr><td><a id="ni" title="A free JavaScript function to validate a UK National Insurance Number against the formal specification" href="nino.shtml"><span class="menutext">UK Nat. Ins. No. <br />Validation<br />JavaScript Function</span></a></td></tr>
    <tr><td><a id="taxcode" title="A free JavaScript function to validate a UK tax code against the formal specification" href="taxcode.shtml"><span class="menutext">UK Tax Code Validation<br />JavaScript Function</span></a></td></tr>
    <tr><td><a id="vat" title="A free JavaScript function to validate an EU VAT number against the various country-specific formal specificationa" href="vat.shtml"><span class="menutext">EU VAT No Validation<br />JavaScript Function</span></a></td></tr>
    <tr><td><a id="creditcardjs" title="A free JavaScript function to validate a credit card number against its type" href="creditcard.shtml"><span class="menutext">Credit Card Validation<br />JavaScript Function</span></a></td></tr>
    <tr><td><a id="creditcardphp" title="A free PHP function to validate a credit card number against its type" href="creditcard.php"><span class="menutext">Credit Card Validation<br />PHP Function</span></a></td></tr>
    <tr><td><a id="cookies" title="A free library of Cookie handling routines written in JavaScript" href="cookies.shtml"><span class="menutext">Cookie Handling<br />JavaScript Functions</span></a></td></tr>
    <tr><td><a id="datetime" title="A free JavaScript function that displays the date / time a page was last updated in a browser independent format" href="datemodified.shtml"><span class="menutext">Page Last Updated<br />JavaScript Functions</span></a></td></tr>
    <tr><td><a id="formtester" title="Free web form testing pages" href="testform.shtml"><span class="menutext">A Web Form Tester<br />PHP Script</span></a></td></tr>
    <tr><td><a id="robottrap" title="A free rogue robot trap written in PHP" href="robottrapphp.shtml"><span class="menutext">A Rogue Robot Trap<br />PHP Script</span></a></td></tr>
    <tr><td><a id="passwords" title="A free PHP script that allows you to password protect web pages" href="passwords.php"><span class="menutext">Password Protection<br />PHP Script</span></a></td></tr>
    <tr><td><a id="guestbook" title="Thoughts on how to make a spam-proof Guest Book" href="antispam.shtml"><span class="menutext">Guestbooks<br />Anti-spam Advice</span></a></td></tr>
    <tr><td><a id="error404" title="A free PHP error 404 page that (optionally) emails and logs errors" href="error404.shtml"><span class="menutext">PHP Error Page</span></a></td></tr>
  </table>
</nav>
<div id="rh-col">

<header>
  <h1 class="pageheading">PHP Credit Card Validation Function</h1>
</header>

<main>

<p>This PHP function checks the validity of a credit card specified by the supplied parameters 
containing the card number and card type.</p>

<p>The specifications for valid credit cards have been taken from various sources on the web. The 
commonest credit cards are are supported in this implementation, but more may be added as required. 
One of the advantages of this routine is the ease with which additional cards may be added, as it is 
totally data driven.</p>

<p>Try the routine. Although no attempt is made to capture the input, it is suggested that you don't 
provide the number of your own credit card. The following are credit card numbers in a valid 
format:</p>

<table style="font-family: courier; margin-left: 20px; line-height: 0.9em;">
  <tr><td style="padding-right: 30px;">American Express</td><td>3400 0000 0000 009</td></tr>
  <tr><td>Carte Blanche</td><td>3000 0000 0000 04</td></tr> 
  <tr><td>Discover</td><td>6011 0000 0000 0004</td></tr> 
  <tr><td>Diners Club</td><td>3852 0000 0232 37</td></tr> 
  <tr><td>enRoute</td><td>2014 0000 0000 009</td></tr> 
  <tr><td>JCB</td><td>3566 0020 2036 0505</td></tr> 
  <tr><td>MasterCard</td><td>5500 0000 0000 0004</td></tr>
  <tr><td>Solo</td><td>6334 0000 0000 0004</td></tr> 
  <tr><td>Switch</td><td>4903 0100 0000 0009</td></tr> 
  <tr><td>Visa</td><td>4111 1111 1111 1111</td></tr>
  <tr><td>Laser</td><td>6304 1000 0000 0008</td></tr>
</table>

<form id="myform" method="post" action="creditcard.php">
  <p style="margin-top: 10px;"><span style="color: #ff0000; margin-left: 20px;">Select credit card:</span> 
    <input type="hidden" name="submitted" value="true" />       
    <select tabindex="11" name="CardType" style="margin-left: 10px;" >
      <option value="Visa">Visa</option>
      <option value="American Express">American Express</option>
      <option value="Carte Blanche">Carte Blanche</option>
      <option value="Diners Club">Diners Club</option>
      <option value="Discover">Discover</option>
      <option value="Enroute">enRoute</option>
      <option value="JCB">JCB</option>
      <option value="Maestro">Maestro</option>
      <option value="MasterCard">MasterCard</option>
      <option value="Solo">Solo</option>
      <option value="Switch">Switch</option>
      <option value="Visa">Visa</option>
      <option value="Visa Electron">Visa Electron</option>
      <option value="LaserCard">Laser</option>
    </select>
    <span style="color: #ff0000; margin-left: 20px;">Enter number:
      <input type="text" name="CardNumber" maxlength="24" size="24" style="margin-left: 10px;" value="4111 1111 1111 1111" tabindex="12" />    
      <input type="submit" name="submit" size="20" value="submit"  tabindex="13" /><br /> 
      <span style="display: block; margin: 10px 0 0 20px; color: red; font-weight: bold;">This card has a valid format</span>
    </span>
  </p>
</form>

<p>The function returns <em>true</em> or <em>false</em>, depending on whether the credit card name / 
number combination is found to be valid. If it is not valid, a numeric code is returned in one 
parameter, and error text returned in another as may be seen in the demonstration.</p>

<p>The credit card details are held in an array within the function, and additional cards may be 
readily added. The format of the array is as follows:</p>

<pre>
array ('name' => 'Visa', 
       'length' => '13,16', 
       'prefixes' => '4',
       'checkdigit' => true)
</pre>

<ul>
  <li><em>name</em> is the name of the credit card as supplied by the user.</li>
  <li><em>length</em> is a comma separated list of the number of valid digits in the associated card number. Thus in the above example, Visa cards may have either 13 or 16 digits.</li>
  <li><em>prefixes</em> is a comma separated list of the valid prefixes in the associated card number. In the above example, Visa cards must start with the digit "4".</li>
  <li><em>checkdigit</em> is a boolean value of true or false that indicates whether the last character of the credit card number is a modulus 10 check digit.</li>
</ul>

<p class="download" style="margin-top: 20px">Download compressed <a href="/software/downloads/phpcreditcard.zip">PHP file</a> (3,195 bytes)</p>

<p style="margin-top: 5px; font-size: smaller; line-height: 1.3;"><em>Note:</em> This routine was 
last updated on 6th May 2020 to replace a feature deprecated in PHP 7.4</p>

</main>

<footer>
  <hr />
  <p class="footer" style="margin-top:10px;">You may <a href="&#109;&#097;&#105;&#108;&#116;&#111;&#058;&#115;&#111;&#102;&#116;&#119;&#097;&#114;&#101;&#064;&#098;&#114;&#097;&#101;&#109;&#111;&#111;&#114;&#046;&#099;&#111;&#046;&#117;&#107;">email</a> 
  your comments 
  <a style="text-decoration: none; color: black;" href="http://validator.w3.org/check?verbose=1&amp;uri=https%3A%2F%2Fbraemoor.co.uk/software/creditcard.php">/</a> 
  corrections to the author.<br />
  Page last updated: Wednesday 03 February 2021<br /></p>
</footer>

</div>

</body>
</html>