<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./MyStyle.css">
    <!-- <link rel="stylesheet" href="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/css/bootstrap-select-country.min.css" />
 -->
    <title>Registration Form</title>
    <style>
        /* table ,td,th { border: 1px solid red; text-align: center; width: 400px;  } */
        /* table tr label { background-color: #E0F0E8; text-align: left;} */
    </style>
</head>

<body>
    <!-- <header>
        <div class="main">
            <nav>
                <ul>
                    <li><a href="./1.Index_Home.html" title="ITI Landing Home Page">Home</a></li>
                    <li><a href="./2.Roadmap.html" title="ITI Alexandria CMS Track Roadmap">Roadmap</a></li>
                    <li><a href="./3.Registration Form.html"
                            title="ITI Alexandria CMS Track Registration Form">Registration Form</a></li>
                    <li><a href="https://www.iti.gov.eg" title="ITI Site" target="_blank">Contact</a></li>
                </ul>
            </nav>
            <img class="logo" src="./img/ITI_logo.png" alt="ITI Logo" width="200">
        </div>
    </header> -->
    <?php include 'Header.PHP';?>
    <br>

    <div id="form-div">
        <h2 id="form-h1" style="color: #55917A;">Register - Create Account</h2>
        <p id="form-p"> &nbsp; Field marked with <span id="asterisk">*</span> are compulsory fields</p>
        <form action="Demo.php" method="post" target="_blank">
            <table>
                <!-- <caption>Register - Create Account</caption> -->
                <!-- <caption>Register - Create Account</caption> -->
                <!-- style="color: red;" -->
                <tbody>
                    <tr>
                        <td class="label"><label for="username"><span id="asterisk">*</span>Your Name</label></td>
                        <td><input id="username" type="text" required placeholder="John Kennedy" name="username"
                                minlength="3" maxlength="30" size="40%"></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="email"><span id="asterisk">*</span>E-Mail ID</label></td>
                        <td><input id="email" type="text" required placeholder="exmple@gmail.com" name="email"
                                minlength="3" maxlength="50" size="40%"></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="Alternate-email">Alternate e-mail</label></td>
                        <td><input id="Alternate-email" type="text" placeholder="exmple@yahoo.com"
                                name="Alternate-email" size="40%"></td>
                    </tr>
                    <tr>
                        <td class="label" rowspan="2"><label for="phone">Your Phone</label></td>
                        <td><label for="Contry-Code">Contry Code - City Code - Phone Number</label></td>
                    </tr>
                    <tr>
                        <td><input id="Contry-Code" type="tel" placeholder="xx" name="Contry-Code" maxlength="3"
                                size="6">
                            <label for="Contry-Code"> - </label>
                            <input id="City-Code" type="text" placeholder="xx" name="City-Code" maxlength="2" size="4">
                            <label for="Contry-Code"> - </label>
                            <input id="Phone-Number" type="text" placeholder="xxxxxx" name="Phone-Number" maxlength="6"
                                size="15">
                        </td>
                        <!-- <td ><input id="City-Code" type="text"  placeholder="City-Code" name="City-Code"maxlength="3" size="3"></td>
                    <td ><input id="Phone-Number" type="text"  placeholder="Phone-Number" name="Phone-Number"maxlength="10" size="10"></td> -->
                    </tr>
                    <tr>
                        <td class="label"><label for="mobile-phone">Mobile Phone</label></td>
                        <td><input id="mobile-phone" type="tel" placeholder="e.g 01xxxxxxxxx" maxlength="11"
                                name="mobile-phone" size="40%"></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="postal-address"><span id="asterisk">*</span>Your Postal
                                Address</label></td>
                        <td><textarea name="postal-address" id="postal-address" cols="40" rows="5" maxlength="200   "
                                size="40%" required placeholder="Write Your Postal Address "></textarea></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="country"><span id="asterisk">*</span>Country</label></td>
                        <td><select name="country" id="country" required placeholder="Your Country">
                                <!-- <select class="selectpicker countrypicker" data-flag="true"></select> -->
                                <div>
                                    <option value="a" selected>----------------------- Select One
                                        -----------------------</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BA">Bosnia and Herzegowina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="BN">Brunei Darussalam</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CD">Congo, the Democratic Republic of the</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CI">Cote d'Ivoire</option>
                                    <option value="HR">Croatia (Hrvatska)</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="TP">East Timor</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands (Malvinas)</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="FX">France, Metropolitan</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard and Mc Donald Islands</option>
                                    <option value="VA">Holy See (Vatican City State)</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran (Islamic Republic of)</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IE">Ireland</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KP">Korea, Democratic People's Republic of</option>
                                    <option value="KR">Korea, Republic of</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Lao People's Democratic Republic</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libyan Arab Jamahiriya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macau</option>
                                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia, Federated States of</option>
                                    <option value="MD">Moldova, Republic of</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="MP">Northern Mariana Islands</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russian Federation</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint LUCIA</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="WS">Samoa</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome and Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia (Slovak Republic)</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SH">St. Helena</option>
                                    <option value="PM">St. Pierre and Miquelon</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syrian Arab Republic</option>
                                    <option value="TW">Taiwan, Province of China</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania, United Republic of</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States</option>
                                    <option value="UM">United States Minor Outlying Islands</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Viet Nam</option>
                                    <option value="VG">Virgin Islands (British)</option>
                                    <option value="VI">Virgin Islands (U.S.)</option>
                                    <option value="WF">Wallis and Futuna Islands</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="YE">Yemen</option>
                                    <option value="YU">Yugoslavia</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </div>
                            </select>
                            <!-- <script src="//cdn.tutorialjinni.com/jquery/3.6.1/jquery.min.js"></script>
                    <script src="//cdn.tutorialjinni.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <script src="//cdn.tutorialjinni.com/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
                    <script src="//g.tutorialjinni.com/mojoaxel/bootstrap-select-country/dist/js/bootstrap-select-country.min.js"></script> -->
                        </td>
                    </tr>
                    <tr>
                        <td class="label"><label for="password"><span id="asterisk">*</span>Password</label></td>
                        <td><input id="password" type="password" required placeholder="Write a Complex Password"
                                name="password" value="" minlength="10" maxlength="30" size="40%"></td>
                    </tr>
                    <tr>
                        <td class="label"><label for="re-enter-password"><span
                                    id="asterisk">*</span>Re-Enter-Password</label></td>
                        <td><input id="re-enter-password" type="password" required
                                placeholder="Write a Complex Password" name="re-enter-password" value="" minlength="10"
                                maxlength="30" size="40%"></td>
                    </tr>

                </tbody>
                <tfoot>

                </tfoot>
            </table>
            <div style=" text-align: center;">
                <input id="terms" type="checkbox" required name="terms" value="terms" checked>
                <label for="terms" id="term"> I accept the <span style="color: blue;"><u><b>Terms of Use</b> </u>
                    </span></label>
                <div>
                    <input type="submit">
                    <input type="submit" value="Continue >>">
                    <input type="reset" value="Reset">

                </div>
            </div>

        </form>
    </div>
    <br>
    <hr>
    <?php include 'Footer.PHP';?>

    <!-- <footer style="text-align: center;">Copyright 2023 by Ahmed Saber &#174;. All Rights Reserved </footer> -->
</body>

</html>