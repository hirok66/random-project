<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<title>Responsive Email Template</title>
<meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">
/* Stop WebKit from changing text sizes */
body, table, td, a {
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}
body {
	height: 100% !important;
	margin: 0 !important;
	padding: 0 !important;
	width: 100% !important;
}
/* Removes spacing between tables in Outlook 2007+ */
table, td {
	mso-table-lspace: 0pt;
	mso-table-rspace: 0pt;
}
img {
	border: 0;
	line-height: 100%;
	text-decoration: none;
	-ms-interpolation-mode: bicubic; /* Smoother rendering in IE */
}
table {
	border-collapse: collapse !important;
}
/* iOS Blue Links */
a[x-apple-data-detectors] {
	color: inherit !important;
	text-decoration: none !important;
	font-size: inherit !important;
	font-family: inherit !important;
	font-weight: inherit !important;
	line-height: inherit !important;
}
/* Table fix for Outlook */
table {
	border-collapse:separate;
}
.ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td {
	line-height: 100%;
}
.ExternalClass {
	width: 100%;
}
/* Mobile Styling */
@media screen and (max-width: 525px){
.wrapper {
	width: 100% !important;
	max-width: 100% !important;
}
.hide-element {
	display: none !important;
}
.img-max {
	max-width: 100% !important;
	width: 100% !important;
	height: auto !important;
}
.table-max {
	width: 100% !important;
}
.mobile-btn-container {
	margin: 0 auto;
	width: 90% !important;
}
.mobile-btn {
	padding: 15px !important;
	border: 0 !important;
	font-size: 16px !important;
	display: block !important;
}
.text-center {
	text-align:center !important;
}
}
/* iPads (landscape) Styling */
@media handheld, all and (device-width: 768px) and (device-height: 1024px) and (orientation : landscape) {
.wrapper-ipad {
	max-width: 280px !important;
}
}

/* iPads (portrait) Styling */
@media handheld, all and  (device-width: 768px) and (device-height: 1024px) and (orientation : portrait) {
.wrapper-ipad {
	max-width: 280px !important;
}
}
</style>
</head>
<body style="margin: 0 !important; padding: 0 !important;">
<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td align="center">
      <!--[if (gte mso 9)|(IE)]>
      <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
      <tr>
      <td align="center" valign="top" width="600">
      <![endif]-->
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" class="wrapper">
        <tr>
          <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
        </tr>
        <tr>
          <td align="center" valign="bottom" style="font-size: 11px; font-family: Helvetica, Arial, sans-serif; color: #2C3E50;"> Place your emails preheader here | <a href="{{route('welcome')}}" title="Online Version" target="_blank" style="color:#26d0ae; text-decoration: none;">Online Version</a> </td>
        </tr>
        <tr>
          <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
        </tr>
        <tr>
          <td align="center"><a href="{{route('welcome')}}" title="Replace with your logo" target="_blank"> <img src="https://www.htmlemailcheck.com/assets/img/email/email-logo.jpg" width="66" height="79" alt="Replace with your logo" style="display: block; border:0; width:66px; height:79px;" border="0"></a></td>
        </tr>
        <tr>
          <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->
      </td>
  </tr>
  <tr>
    <td bgcolor="#ffffff" align="center" style="padding: 0 10px 0 10px;">
      <!--[if (gte mso 9)|(IE)]>
      <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
      <tr>
      <td align="center" valign="top" width="600">
      <![endif]-->
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" class="table-max">
        <tr>
          <td><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center">
                <a href="{{route('welcome')}}" title="Replace with your text" target="_blank">
                	<img src="https://www.htmlemailcheck.com/assets/img/email/email-sales-intro.jpg" width="100%" border="0" alt="Replace with your text" style="display: block; border:0; width:100%; height:auto !important;" class="img-max">
                </a>
              </td>
              </tr>
              <tr>
                <td><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left"><h1 style="font-family: Helvetica, Arial, sans-serif; font-size: 28px; font-weight:normal; color: #2C3E50; margin:0; mso-line-height-rule:exactly;">Responsive Email Template!</h1></td>
                    </tr>
                    <tr>
                      <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="left" style="font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 25px; color: #2C3E50;"> Place your editorial text here, to inform your readers what the email is about.<br>
                        <br>
                          Lorem ipsum dolor sit amet, <a href="{{route('welcome')}}" title="consetetur sadipscing" target="_blank" style="color: #26d0ae; text-decoration:none;">consetetur sadipscing</a> elitr, sed diam nonumy eirmod tempor <a href="{{route('welcome')}}" title="invidunt" target="_blank" style="color: #26d0ae; text-decoration:none;">invidunt</a> ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                        <br>
                          At vero eos et <a href="{{route('welcome')}}" title="accusam" target="_blank" style="color: #26d0ae; text-decoration:none;">accusam</a> et justo duo dolores et ea rebum. Stet clita <a href="{{route('welcome')}}" style="color: #26d0ae; text-decoration:none;">kasd gubergren</a>, no sea takimata sanctus est Lorem ipsum dolor sit. </td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
              </tr>
              <tr>
                <td align="center"><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td align="center">
                      <table role="presentation" border="0" cellspacing="0" cellpadding="0" class="mobile-btn-container">
                          <tr>
                            <td align="center" style="border-radius: 3px;" bgcolor="#26d0ae"><a href="{{route('welcome')}} "Take me to the deals!" target="_blank" style="font-family: Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 15px 25px; border: 1px solid #26d0ae; display: inline-block;" class="mobile-btn">Take me to the deals!</a></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->
      </td>
  </tr>

  <tr>
    <td align="center" style="padding: 0 10px 0 10px;">
      <!--[if (gte mso 9)|(IE)]>
      <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
      <tr>
      <td align="center" valign="top" width="600">
      <![endif]-->
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" class="table-max">
        <tr>
          <td><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
              </tr>
              <tr>
                <td height="50" align="left" bgcolor="#2C3E50" style="border-bottom:3px solid; border-bottom-color:#26d0ae;"><h2 style="font-family: Helvetica, Arial, sans-serif; font-size: 26px; font-weight:normal; color: #ffffff; margin:0; mso-line-height-rule:exactly;">&nbsp;&nbsp;TOP DEALS</h2></td>
              </tr>
              <tr>
                <td align="center" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
              </tr>
          </table></td>
        </tr>
        <tr>
          <td align="center" height="100%" valign="top" width="100%">
           <!--[if (gte mso 9)|(IE)]>
           <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
           <tr>
           <td align="center" valign="top" width="600">
           <![endif]-->
            <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
              <tr>
                <td align="center" valign="top" style="font-size:0;">
                  <!--[if (gte mso 9)|(IE)]>
                  <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                  <tr>
                  <td align="left" valign="top" width="240">
                  <![endif]-->
                  <div style="display:inline-block; max-width:50%; min-width:280px; vertical-align:top; width:100%;" class="wrapper wrapper-ipad">
                    <table role="presentation" align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:280px;" class="wrapper wrapper-ipad">
                      <tr>
                        <td align="center" valign="top"><table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                              <td><table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                  <tr>
                                    <td align="center" valign="middle"><a href="{{route('welcome')}}" title="Replace with your text" target="_blank"><img src="https://www.htmlemailcheck.com/assets/img/email/email-product01.jpg" width="280" height="153" style="display: block; border:0; width: 280px; height: 153px;" alt="Replace with your text" border="0" class="img-max"></a></td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;">Product Title</td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; color: #2C3E50;">Lorem ipsum dolor sit amet, conset sadipscing elitr, sed diam nonumy eirmod ut tempor lectus.</td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="eaeaea"><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="center" bgcolor="eaeaea"><table role="presentation" width="150" border="0" cellpadding="0" cellspacing="0" class="mobile-btn-container">
                                              <tr>
                                                <td align="left" height="25" style="font-family: Arial, sans-serif; font-size: 20px; line-height: 20px; color: #2C3E50;" class="text-center">was</td>
                                              </tr>
                                              <tr>
                                                <td height="30" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;"><strike style="text-decoration:line-through;">$1099.99</strike></td>
                                              </tr>
                                              <tr>
                                                <td align="left" height="40" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; font-style:italic; line-height: 20px; color: #26d0ae; border-top:1px solid; border-top-color:#cccccc;" class="text-center">now</td>
                                              </tr>
                                              <tr>
                                                <td height="40" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; color: #26d0ae;">$899.99</td>
                                              </tr>
                                              <tr>
                                                <td align="center" style="border-radius: 3px;" bgcolor="#26d0ae"><a href="{{route('welcome')}}" title="Buy Now" target="_blank" style="font-family: Helvetica, Arial, sans-serif; font-size: 15px; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 20px; border: 1px solid #26d0ae; display: inline-block;" class="mobile-btn">Buy Now</a></td>
                                              </tr>
                                          </table></td>
                                        </tr>
                                        <tr>
                                          <td height="35" align="center" valign="bottom" bgcolor="eaeaea" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 20px; color: #2C3E50;">*Include your terms here.</td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
				  <td width="20" style="font-size: 1px;">&nbsp;</td>
                  <td align="right" valign="top" width="240">
                  <![endif]-->
                  <div style="display:inline-block; max-width:50%; min-width:280px; vertical-align:top; width:100%;" class="wrapper wrapper-ipad">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                      <tr>
                        <td><table role="presentation" align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:280px; float: right;" class="wrapper wrapper-ipad">
                            <tr>
                              <td align="center" valign="top"><table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                  <tr>
                                    <td><table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                        <tr>
                                          <td align="center" valign="middle"><a href="{{route('welcome')}}" title="Replace with your text" target="_blank"><img src="https://www.htmlemailcheck.com/assets/img/email/email-product02.jpg" width="280" height="153" style="display: block; border:0; width: 280px; height: 153px;" alt="Replace with your text" border="0" class="img-max"></a></td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;">Product Title</td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; color: #2C3E50;">Lorem ipsum dolor sit amet, conset sadipscing elitr, sed diam nonumy eirmod ut tempor lectus.</td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="eaeaea"><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td align="center" bgcolor="eaeaea"><table role="presentation" width="150" border="0" cellpadding="0" cellspacing="0" class="mobile-btn-container">
                                                    <tr>
                                                      <td align="left" height="25" style="font-family: Arial, sans-serif; font-size: 20px; line-height: 20px; color: #2C3E50;" class="text-center">was</td>
                                                    </tr>
                                                    <tr>
                                                      <td height="30" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;"><strike style="text-decoration:line-through;">$799.99</strike></td>
                                                    </tr>
                                                    <tr>
                                                      <td align="left" height="40" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; font-style:italic; line-height: 20px; color: #26d0ae; border-top:1px solid; border-top-color:#cccccc;" class="text-center">now</td>
                                                    </tr>
                                                    <tr>
                                                      <td height="40" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; color: #26d0ae;">$649.99</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" style="border-radius: 3px;" bgcolor="#26d0ae"><a href="{{route('welcome')}}" title="Buy Now" target="_blank" style="font-family: Helvetica, Arial, sans-serif; font-size: 15px; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 20px; border: 1px solid #26d0ae; display: inline-block;" class="mobile-btn">Buy Now</a></td>
                                                    </tr>
                                                </table></td>
                                              </tr>
                                              <tr>
                                                <td height="35" align="center" valign="bottom" bgcolor="eaeaea" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 20px; color: #2C3E50;">*Include your terms here.</td>
                                              </tr>
                                              <tr>
                                                <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                              </tr>
                                          </table></td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                  </td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
        <tr>
          <td align="center" height="100%" valign="top" width="100%">
            <!--[if (gte mso 9)|(IE)]>
            <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
              <tr>
                <td align="center" valign="top" style="font-size:0;">
                  <!--[if (gte mso 9)|(IE)]>
                  <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                  <tr>
                  <td align="left" valign="top" width="240">
                  <![endif]-->
                  <div style="display:inline-block; max-width:50%; min-width:280px; vertical-align:top; width:100%;" class="wrapper wrapper-ipad">
                    <table role="presentation" align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:280px;" class="wrapper wrapper-ipad">
                      <tr>
                        <td align="center" valign="top"><table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                              <td><table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                  <tr>
                                    <td align="center" valign="middle"><a href="{{route('welcome')}}" title="Replace with your text" target="_blank"><img src="https://www.htmlemailcheck.com/assets/img/email/email-product03.jpg" width="280" height="153" style="display: block; border:0; width: 280px; height: 153px;" alt="Replace with your text" border="0" class="img-max"></a></td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;">Product Title</td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; color: #2C3E50;">Lorem ipsum dolor sit amet, conset sadipscing elitr, sed diam nonumy eirmod ut tempor lectus.</td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="eaeaea"><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="center" bgcolor="eaeaea"><table role="presentation" width="150" border="0" cellpadding="0" cellspacing="0" class="mobile-btn-container">
                                              <tr>
                                                <td align="left" height="25" style="font-family: Arial, sans-serif; font-size: 20px; line-height: 20px; color: #2C3E50;" class="text-center">was</td>
                                              </tr>
                                              <tr>
                                                <td height="30" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;"><strike style="text-decoration:line-through;">$499.99</strike></td>
                                              </tr>
                                              <tr>
                                                <td align="left" height="40" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; font-style:italic; line-height: 20px; color: #26d0ae; border-top:1px solid; border-top-color:#cccccc;" class="text-center">now</td>
                                              </tr>
                                              <tr>
                                                <td height="40" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; color: #26d0ae;">$399.99</td>
                                              </tr>
                                              <tr>
                                                <td align="center" style="border-radius: 3px;" bgcolor="#26d0ae"><a href="{{route('welcome')}}" title="Buy Now" target="_blank" style="font-family: Helvetica, Arial, sans-serif; font-size: 15px; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 20px; border: 1px solid #26d0ae; display: inline-block;" class="mobile-btn">Buy Now</a></td>
                                              </tr>
                                          </table></td>
                                        </tr>
                                        <tr>
                                          <td height="35" align="center" valign="bottom" bgcolor="eaeaea" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 20px; color: #2C3E50;">*Include your terms here.</td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
				  <td width="20" style="font-size: 1px;">&nbsp;</td>
                  <td align="right" valign="top" width="240">
                  <![endif]-->
                  <div style="display:inline-block; max-width:50%; min-width:280px; vertical-align:top; width:100%;" class="wrapper wrapper-ipad">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                      <tr>
                        <td class="mso-right">
                        <table role="presentation" align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:280px; float: right;" class="wrapper wrapper-ipad">
                            <tr>
                              <td align="center" valign="top"><table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                  <tr>
                                    <td><table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                        <tr>
                                          <td align="center" valign="middle"><a href="{{route('welcome')}}" title="Replace with your text" target="_blank"><img src="https://www.htmlemailcheck.com/assets/img/email/email-product04.jpg" width="280" height="153" style="display: block; border:0; width: 280px; height: 153px;" alt="Replace with your text" border="0" class="img-max"></a></td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;">Product Title</td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; color: #2C3E50;">Lorem ipsum dolor sit amet, conset sadipscing elitr, sed diam nonumy eirmod ut tempor lectus.</td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="eaeaea"><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                              <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td align="center" bgcolor="eaeaea"><table role="presentation" width="150" border="0" cellpadding="0" cellspacing="0" class="mobile-btn-container">
                                                  <tr>
                                                    <td align="left" height="25" style="font-family: Arial, sans-serif; font-size: 20px; line-height: 20px; color: #2C3E50;" class="text-center">was</td>
                                                  </tr>
                                                  <tr>
                                                    <td height="30" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;"><strike style="text-decoration:line-through;">$299.99</strike></td>
                                                  </tr>
                                                  <tr>
                                                    <td align="left" height="40" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; font-style:italic; line-height: 20px; color: #26d0ae; border-top:1px solid; border-top-color:#cccccc;" class="text-center">now</td>
                                                  </tr>
                                                  <tr>
                                                    <td height="40" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; color: #26d0ae;">$195.00</td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" style="border-radius: 3px;" bgcolor="#26d0ae"><a href="{{route('welcome')}}" title="Buy Now" target="_blank" style="font-family: Helvetica, Arial, sans-serif; font-size: 15px; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 20px; border: 1px solid #26d0ae; display: inline-block;" class="mobile-btn">Buy Now</a></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td height="35" align="center" valign="bottom" bgcolor="eaeaea" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 20px; color: #2C3E50;">*Include your terms here.</td>
                                            </tr>
                                            <tr>
                                              <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                            </tr>
                                          </table></td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                  </td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->
      </td>
  </tr>
  <tr>
    <td align="center" style="padding:0 10px 0 10px;">
      <!--[if (gte mso 9)|(IE)]>
      <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
      <tr>
      <td align="center" valign="top" width="600">
      <![endif]-->
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" class="table-max">
        <tr>
          <td><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center">
                <a href="{{route('welcome')}}" title="On the go?" target="_blank">
                	<img src="https://www.htmlemailcheck.com/assets/img/email/email-sales-banner.jpg" width="100%" alt="On the go?" border="0" style="display:block; border:0; width:100%; height:auto;" class="img-max">
                </a>
              </td>
              </tr>
            </table></td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->  </td>
  </tr>
  <tr>
    <td align="center" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" style="padding: 0 10px 0 10px;">
      <!--[if (gte mso 9)|(IE)]>
      <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
      <tr>
      <td align="center" valign="top" width="600">
      <![endif]-->
      <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;" class="table-max">
        <tr>
            <td height="50" align="left" bgcolor="#2C3E50" style="border-bottom:3px solid; border-bottom-color:#26d0ae;"><h2 style="font-family: Helvetica, Arial, sans-serif; font-size: 26px; font-weight:normal; color: #ffffff; margin:0; mso-line-height-rule:exactly;">&nbsp;&nbsp;ACCESSORIES</h2></td>
        </tr>
        <tr>
          <td width="100%" align="center" style="height:50px; font-size: 0;">&nbsp;</td>
        </tr>
        <tr>
          <td align="left" style="font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #2C3E50;">
          <!--[if (gte mso 9)|(IE)]>
            <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
            <tr>
            <td align="center" valign="top" width="600">
            <![endif]-->
            <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
              <tr>
                <td align="center" valign="top" style="font-size:0;">
                  <!--[if (gte mso 9)|(IE)]>
                  <table role="presentation" align="center" border="0" cellspacing="0" cellpadding="0" width="600">
                  <tr>
                  <td align="left" valign="top" width="195">
                  <![endif]-->
                  <div style="display:inline-block; min-width:195px; max-width:195px; vertical-align:top; width:100%;" class="wrapper">
                    <table role="presentation" align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:180px;" class="wrapper">
                      <tr>
                        <td align="center" valign="top"><table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                              <td><table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                  <tr>
                                    <td align="center" valign="middle"><a href="{{route('welcome')}}" title="Replace with your text" target="_blank"><img src="https://www.htmlemailcheck.com/assets/img/email/email-product05.jpg" width="170" height="95" style="display: block; border:0; width: 170px; height: 95px;" alt="Replace with your text" border="0" class="img-max"></a></td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;">Product Title</td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; color: #2C3E50;">Lorem ipsum dolor sit amet, conset sadipscing elitr, sed diam nonumy eirmod ut tempor lectus.</td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="eaeaea"><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                          <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="center" bgcolor="eaeaea"><table role="presentation" width="150" border="0" cellpadding="0" cellspacing="0" class="mobile-btn-container">
                                              <tr>
                                                <td align="left" height="25" style="font-family: Arial, sans-serif; font-size: 20px; line-height: 20px; color: #2C3E50;" class="text-center">was</td>
                                              </tr>
                                              <tr>
                                                <td height="30" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;"><strike style="text-decoration:line-through;">$49.00</strike></td>
                                              </tr>
                                              <tr>
                                                <td align="left" height="40" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; font-style:italic; line-height: 20px; color: #26d0ae; border-top:1px solid; border-top-color:#cccccc;" class="text-center">now</td>
                                              </tr>
                                              <tr>
                                                <td height="40" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; color: #26d0ae;">$35.99</td>
                                              </tr>
                                              <tr>
                                                <td align="center" style="border-radius: 3px;" bgcolor="#26d0ae"><a href="{{route('welcome')}}" title="Buy Now" target="_blank" style="font-family: Helvetica, Arial, sans-serif; font-size: 15px; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 20px; border: 1px solid #26d0ae; display: inline-block;" class="mobile-btn">Buy Now</a></td>
                                              </tr>
                                          </table></td>
                                        </tr>
                                        <tr>
                                          <td height="35" align="center" valign="bottom" bgcolor="eaeaea" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 20px; color: #2C3E50;">*Include your terms here.</td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
				  <td width="20" style="font-size: 1px;">&nbsp;</td>
                  <td align="right" valign="top" width="195">
                  <![endif]-->
                  <div style="display:inline-block; min-width:195px; max-width:195px; vertical-align:top; width:100%;" class="wrapper">
                    <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:180px;" class="wrapper">
                      <tr>
                        <td align="center" valign="top"><table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                              <td><table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                  <tr>
                                    <td align="center" valign="middle"><a href="{{route('welcome')}}" title="Replace with your text" target="_blank"><img src="https://www.htmlemailcheck.com/assets/img/email/email-product06.jpg" width="170" height="95" style="display: block; border:0; width: 170px; height: 95px;" alt="Replace with your text" border="0" class="img-max"></a></td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;">Product Title</td>
                                  </tr>
                                  <tr>
                                    <td align="left" style="font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; color: #2C3E50;">Lorem ipsum dolor sit amet, conset sadipscing elitr, sed diam nonumy eirmod ut tempor lectus.</td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td bgcolor="eaeaea"><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
                                      <tr>
                                        <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td align="center" bgcolor="eaeaea"><table role="presentation" width="150" border="0" cellpadding="0" cellspacing="0" class="mobile-btn-container">
                                            <tr>
                                              <td align="left" height="25" style="font-family: Arial, sans-serif; font-size: 20px; line-height: 20px; color: #2C3E50;" class="text-center">was</td>
                                            </tr>
                                            <tr>
                                              <td height="30" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;"><strike style="text-decoration:line-through;">$79.99</strike></td>
                                            </tr>
                                            <tr>
                                              <td align="left" height="40" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; font-style:italic; line-height: 20px; color: #26d0ae; border-top:1px solid; border-top-color:#cccccc;" class="text-center">now</td>
                                            </tr>
                                            <tr>
                                              <td height="40" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; color: #26d0ae;">$59.99</td>
                                            </tr>
                                            <tr>
                                              <td align="center" style="border-radius: 3px;" bgcolor="#26d0ae"><a href="{{route('welcome')}}" title="Buy Now" target="_blank" style="font-family: Helvetica, Arial, sans-serif; font-size: 15px; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 20px; border: 1px solid #26d0ae; display: inline-block;" class="mobile-btn">Buy Now</a></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td height="35" align="center" valign="bottom" bgcolor="eaeaea" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 20px; color: #2C3E50;">*Include your terms here.</td>
                                      </tr>
                                      <tr>
                                        <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                      </tr>

                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td align="center" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
				  <td width="20" style="font-size: 1px;">&nbsp;</td>
                  <td align="right" valign="top" width="195">
                  <![endif]-->
                  <div style="display:inline-block; min-width:195px; max-width:195px; vertical-align:top; width:100%;" class="wrapper">
                    <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                      <tr>
                        <td>
                        <table role="presentation" align="right" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:180px;" class="wrapper">
                            <tr>
                              <td align="center" valign="top"><table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                  <tr>
                                    <td><table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                        <tr>
                                          <td align="center" valign="middle"><a href="{{route('welcome')}}" title="Replace with your text" target="_blank"><img src="https://www.htmlemailcheck.com/assets/img/email/email-product07.jpg" width="170" height="95" style="display: block; border:0; width: 170px; height: 95px;" alt="Replace with your text" border="0" class="img-max"></a></td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;">Product Title</td>
                                        </tr>
                                        <tr>
                                          <td align="left" style="font-family: Arial, sans-serif; font-size: 14px; line-height: 20px; color: #2C3E50;">Lorem ipsum dolor sit amet, conset sadipscing elitr, sed diam nonumy eirmod ut tempor lectus.</td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="25" style="height:25px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="eaeaea"><table role="presentation" width="100%" border="0" cellspacing="0" cellpadding="0">
                                              <tr>
                                                <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                              </tr>
                                              <tr>
                                                <td align="center" bgcolor="eaeaea"><table role="presentation" width="150" border="0" cellpadding="0" cellspacing="0" class="mobile-btn-container">
                                                    <tr>
                                                      <td align="left" height="25" style="font-family: Arial, sans-serif; font-size: 20px; line-height: 20px; color: #2C3E50;" class="text-center">was</td>
                                                    </tr>
                                                    <tr>
                                                      <td height="30" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 20px; color: #2C3E50;"><strike style="text-decoration:line-through;">$89.99</strike></td>
                                                    </tr>
                                                    <tr>
                                                      <td align="left" height="40" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; font-style:italic; line-height: 20px; color: #26d0ae; border-top:1px solid; border-top-color:#cccccc;" class="text-center">now</td>
                                                    </tr>
                                                    <tr>
                                                      <td height="40" align="center" valign="top" style="font-family: Arial, sans-serif; font-size: 28px; font-weight:bold; color: #26d0ae;">$79.99</td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center" style="border-radius: 3px;" bgcolor="#26d0ae"><a href="{{route('welcome')}}" title="Buy Now" target="_blank" style="font-family: Helvetica, Arial, sans-serif; font-size: 15px; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 20px; border: 1px solid #26d0ae; display: inline-block;" class="mobile-btn">Buy Now</a></td>
                                                    </tr>
                                                </table></td>
                                              </tr>
                                              <tr>
                                                <td height="35" align="center" valign="bottom" bgcolor="eaeaea" style="font-family: Arial, sans-serif; font-size: 11px; line-height: 20px; color: #2C3E50;">*Include your terms here.</td>
                                              </tr>
                                              <tr>
                                                <td align="center" height="25" bgcolor="eaeaea" style="height:50px; font-size: 0;">&nbsp;</td>
                                              </tr>
                                          </table></td>
                                        </tr>
                                        <tr>
                                          <td align="center" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
                                        </tr>
                                    </table></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <!--[if (gte mso 9)|(IE)]>
                  </td>
                  </tr>
                  </table>
                  <![endif]-->
                  </td>
              </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
            </td>
        </tr>
      </table>
      <!--[if (gte mso 9)|(IE)]>
      </td>
      </tr>
      </table>
      <![endif]-->
      </td>
  </tr>
  <tr>
    <td align="center" bgcolor="#2C3E50">
  <table role="presentation" width="240" border="0" cellspacing="0" cellpadding="0" bgcolor="#2C3E50">
  <tr>
    <td align="center" bgcolor="#2C3E50" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#2C3E50">
    <table role="presentation" width="240" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" height="70" width="70">
            <a href="{{route('welcome')}}" title="Twitter" target="_blank">
                <img src="https://www.htmlemailcheck.com/assets/img/email/email-icon-twitter.png" height="70" width="70" alt="Twitter" style="display:block; border:0; width:70px; height:70px;">
            </a>
        </td>
        <td align="center" height="70" width="70">
            <a href="{{route('welcome')}}" title="Facebook" target="_blank">
                <img src="https://www.htmlemailcheck.com/assets/img/email/email-icon-facebook.png" height="70" width="70" alt="Facebook" style="display:block; border:0; width:70px; height:70px;">
            </a>
        </td>
        <td align="center" height="70" width="70">
            <a href="{{route('welcome')}}" title="Google Plus" target="_blank">
                <img src="https://www.htmlemailcheck.com/assets/img/email/email-icon-googleplus.png" height="70" width="70" alt="Google Plus" style="display:block; border:0; width:70px; height:70px;">
            </a>
       </td>
      </tr>
    </table>
   	</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#2C3E50" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#2C3E50" style="font-family: Helvetica, Arial, sans-serif; font-size: 11px; color:#ffffff; line-height:20px;">
		Place your contact information here.<br>
      	&copy; 2016 All rights reserved &nbsp;|&nbsp; <a href="{{route('welcome')}}" title="Unsubscribe" target="_blank" style="color: #ffffff; text-decoration: none;">Unsubscribe</a>
    </td>
  </tr>
  <tr>
    <td align="center" bgcolor="#2C3E50" height="50" style="height:50px; font-size: 0;">&nbsp;</td>
  </tr>
  </table>
  </td>
  </tr>
</table>
</body>
</html>
