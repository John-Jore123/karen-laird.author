<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="UTF-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <!--[if mso]>
    <noscript>
        <xml>
            <o:OfficeDocumentSettings>
                <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
        </xml>
    </noscript>
    <![endif]-->
    <style>
        table, td, div, h1, p {font-family: 'Poppins', sans-serif;}
    </style>
</head>
<body style="margin: 0;padding: 0;">
    <table role="presentation" style="width: 100%;border-collapse: collapse;border: 0;border-spacing: 0;background:#f5f5f5;">
        <tr>
        <td align="center" style="padding: 0;mso-line-height-rule:exactly;padding: 100px 0;">

            <table role="presentation" cellpadding="0" cellspacing="0">
                <tr style="padding: 0;margin: 0;">
                    <td style="border-radius: 20px;overflow: hidden;">

                        
                        <table role="presentation" bgcolor="#fff" style="width: 750px;border-collapse: collapse;border-spacing: 0;text-align: center;">
                            <tr>
                                <td style="padding:0;background-color: #372802; height: 150px;padding: 0 50px;">
                                    <img src="https://pageturner.us/images/main-logo.png" alt="PageTurner, Press and Media Logo" width="180" style="height: auto;display: block;">
                                </td>
                            </tr>
                            <tr>
                                <td align="left" style="padding: 50px">
                                    
                                    <table role="presentation" border="0" width="100%" cellpadding="0" cellspacing="0" align="left" style="height: auto;">
                                        <tr>
                                            <td style="padding: 0;margin: 0;">
                                                <h1>
                                                    {{ $emailData['name'] }}
                                                    {{-- {{ $name }} --}}
                                                </h1>
                                                <h3>
                                                    Email address: {{ $emailData['email'] }}
                                                    {{-- {{ $email }} --}}
                                                </h3>
                                                <h3>
                                                    Contact number: {{ $emailData['phone'] }}
                                                    {{-- {{ $phone }} --}}
                                                </h3>
                                            </td>
                                        </tr>

                                        <tr><td><hr style="background-color: #F7BB42; height: 5px;border: 0;"></td></tr>

                                        <tr>
                                            <td style="padding: 0;margin: 0;">
                                                <p>
                                                    {{ $emailData['message'] }}
                                                    {{-- {{ $message }} --}}
                                                </p>
                                            </td>
                                        </tr>
                                        
                                    </table>

                                </td>
                            </tr>
                            <tr><td style="line-height:30px;height:50px;mso-line-height-rule:exactly;">&nbsp;</td></tr>
                            <tr>
                                <td style="padding:0 50px">
                                    <hr style="background-color: #F7BB42; height: 2px;border: 0;">
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    <table role="presentation" align="center" cellpadding="0" cellspacing="0" width="100%" style="padding: 20px 50px;"> 
                                        <tr>
                                            <td align="center" bgcolor="#372802" style="border-radius: 50%;padding: 8px;">
                                                <img src="{{ asset('images/logo.png') }}" alt="" style="width: 20px;height: 20px;display: inline-block;object-fit: cover;position: relative;">
                                            </td>
                                            <td style="padding: 0 0 0 10px;margin: 0;">
                                                <a href="#" style="display: inline-block;">
                                                    {{ config('app.name') }}
                                                </a>
                                            </td>
                                            <td align="right">
                                                <img src="https://pageturner.us/images/main-logo.png" alt="PageTurner, Press and Media Logo" width="200" style="height: auto;display: inline-block;">
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table> 

                    </td>
                </tr>
            </table>
            <div style="line-height:20px;height:20px;mso-line-height-rule:exactly;">&nbsp;</div>
            <table role="presentation" cellpadding="0" cellspacing="0">
                <tr style="padding: 0;margin: 0;">
                    <td style="overflow: hidden;">
                       
                        <table role="presentation" cellpadding="0" cellspacing="0" width="750px">
                            <tr>
                                <td align="center" style="width: 100%;">

                                    <table role="presentation" width="80%">
                                        <tr>
                                            <td align="center">
                                                <p style="font-size: 12px; margin: 0;padding: 0;">Copyright © 2022 {{ config('app.name') }}. All Rights Reserved. We appreciate you!</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center">
                                                <div>
                                                    <a href="mailto:info@pageturner.us" style="color: #e89506;text-decoration: none;">info@pageturner.us</a>
                                                    <span style="padding: 0 10px;color: #e89506;">|</span>
                                                    <a href="tel:1-888-447-9651" style="color: #e89506;text-decoration: none;">1-888-447-9651</a>
                                                    <span style="padding: 0 10px;color: #e89506;">|</span>
                                                    <a href="https://pageturner.us/" target="_blank" rel="noopener noreferrer" style="color: #e89506;text-decoration: none;">pagetuner.us</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                            <tr><td style="line-height:20px;height:20px;mso-line-height-rule:exactly;">&nbsp;</td></tr>
                            <tr>
                                <td align="center">
                                    
                                    <table role="presentation" width="40%">
                                        <tr align="center">
                                            <td>
                                                <a href="https://www.facebook.com/pageturnerpressandmediallc" target="_blank" rel="noopener noreferrer" style="display: block;">
                                                    <img src="https://pageturner.us/images/facebook.png" alt="facebook logo" width="25">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="https://www.facebook.com/pageturnerpressandmediallc" target="_blank" rel="noopener noreferrer" style="display: block;">
                                                    <img src="https://pageturner.us/images/twitter.png" alt="twitter logo" width="25">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="https://www.instagram.com/pageturnerllc/" target="_blank" rel="noopener noreferrer" style="display: block;">
                                                    <img src="https://pageturner.us/images/instagram.png" alt="instagram logo" width="25">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="https://www.youtube.com/channel/UClotpn1jqpGlvkHl803DN8w" target="_blank" rel="noopener noreferrer" style="display: block;">
                                                    <img src="https://pageturner.us/images/youtube.png" alt="youtube logo" width="25">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="https://www.linkedin.com/company/pageturnerpressandmedia" target="_blank" rel="noopener noreferrer" style="display: block;">
                                                    <img src="https://pageturner.us/images/linkedin.png" alt="linkedin logo" width="25">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="https://www.pinterest.ph/pageturnerllc/" target="_blank" rel="noopener noreferrer" style="display: block;">
                                                    <img src="https://pageturner.us/images/pinterest.png" alt="pinterest logo" width="25">
                                                </a>
                                            </td>
                                            <td>
                                                <a href="https://pageturnerpressandmedia.quora.com/" target="_blank" rel="noopener noreferrer" style="display: block;">
                                                    <img src="https://pageturner.us/images/quora.png" alt="quora logo" width="25">
                                                </a>
                                            </td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>

        </td>
        </tr>
    </table>
</body>
</html>