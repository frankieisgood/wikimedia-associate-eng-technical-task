<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Support Wikipedia!</title>
    </head>
    <body class="container">

        <h1>Support Wikipedia!</h1>
        <form id="donorinfo" action="review.php" method="POST">
            <fieldset>
                <legend>Prospective Donors</legend>
                <ul>
                    <li><label for="donor-last-name">Last Name</label>
                        <input type="text" id="lastname" name='lastname'/></li>
                    <li><label for="donor-first-name">First Name</label>
                        <input type="text" id="firstname" name="firstname"/>
                    </li>
                    <li><label for="street-address">Street Address</label>
                        <input type="text" id="street-address" name="streetaddress" />
                    </li>
                    <li><label for="city">City</label>
                        <input type="text" id="city" name="city" />
                    </li>
                    <li><label for="state-region">State/Region</label>
                        <input type="text" id="state-region" name="stateregion" />
                    </li>
                    <li>
                        <label for="country">Country</label>
                        <select id="country" name="country">
                        <option selected="selected">Select your country...</option>
                        <?php

                        $countries = array(
                            "Afghanistan",
                            "Albania",
                            "Algeria",
                            "Andorra",
                            "Angola",
                            "Antigua & Deps",
                            "Argentina",
                            "Armenia",
                            "Australia",
                            "Austria",
                            "Azerbaijan",
                            "Bahamas",
                            "Bahrain",
                            "Bangladesh",
                            "Barbados",
                            "Belarus",
                            "Belgium",
                            "Belize",
                            "Benin",
                            "Bhutan",
                            "Bolivia",
                            "Bosnia Herzegovina",
                            "Botswana",
                            "Brazil",
                            "Brunei",
                            "Bulgaria",
                            "Burkina",
                            "Burundi",
                            "Cambodia",
                            "Cameroon",
                            "Canada",
                            "Cape Verde",
                            "Central African Rep",
                            "Chad",
                            "Chile",
                            "China",
                            "Colombia",
                            "Comoros",
                            "Congo",
                            "Congo {Democratic Rep}",
                            "Costa Rica",
                            "Croatia",
                            "Cuba",
                            "Cyprus",
                            "Czech Republic",
                            "Denmark",
                            "Djibouti",
                            "Dominica",
                            "Dominican Republic",
                            "East Timor",
                            "Ecuador",
                            "Egypt",
                            "El Salvador",
                            "Equatorial Guinea",
                            "Eritrea",
                            "Estonia",
                            "Ethiopia",
                            "Fiji",
                            "Finland",
                            "France",
                            "Gabon",
                            "Gambia",
                            "Georgia",
                            "Germany",
                            "Ghana",
                            "Greece",
                            "Grenada",
                            "Guatemala",
                            "Guinea",
                            "Guinea-Bissau",
                            "Guyana",
                            "Haiti",
                            "Honduras",
                            "Hungary",
                            "Iceland",
                            "India",
                            "Indonesia",
                            "Iran",
                            "Iraq",
                            "Ireland {Republic}",
                            "Israel",
                            "Italy",
                            "Ivory Coast",
                            "Jamaica",
                            "Japan",
                            "Jordan",
                            "Kazakhstan",
                            "Kenya",
                            "Kiribati",
                            "Korea North",
                            "Korea South",
                            "Kosovo",
                            "Kuwait",
                            "Kyrgyzstan",
                            "Laos",
                            "Latvia",
                            "Lebanon",
                            "Lesotho",
                            "Liberia",
                            "Libya",
                            "Liechtenstein",
                            "Lithuania",
                            "Luxembourg",
                            "Macedonia",
                            "Madagascar",
                            "Malawi",
                            "Malaysia",
                            "Maldives",
                            "Mali",
                            "Malta",
                            "Marshall Islands",
                            "Mauritania",
                            "Mauritius",
                            "Mexico",
                            "Micronesia",
                            "Moldova",
                            "Monaco",
                            "Mongolia",
                            "Montenegro",
                            "Morocco",
                            "Mozambique",
                            "Myanmar, {Burma}",
                            "Namibia",
                            "Nauru",
                            "Nepal",
                            "Netherlands",
                            "New Zealand",
                            "Nicaragua",
                            "Niger",
                            "Nigeria",
                            "Norway",
                            "Oman",
                            "Pakistan",
                            "Palau",
                            "Panama",
                            "Papua New Guinea",
                            "Paraguay",
                            "Peru",
                            "Philippines",
                            "Poland",
                            "Portugal",
                            "Qatar",
                            "Romania",
                            "Russian Federation",
                            "Rwanda",
                            "St Kitts & Nevis",
                            "St Lucia",
                            "Saint Vincent & the Grenadines",
                            "Samoa",
                            "San Marino",
                            "Sao Tome & Principe",
                            "Saudi Arabia",
                            "Senegal",
                            "Serbia",
                            "Seychelles",
                            "Sierra Leone",
                            "Singapore",
                            "Slovakia",
                            "Slovenia",
                            "Solomon Islands",
                            "Somalia",
                            "South Africa",
                            "South Sudan",
                            "Spain",
                            "Sri Lanka",
                            "Sudan",
                            "Suriname",
                            "Swaziland",
                            "Sweden",
                            "Switzerland",
                            "Syria",
                            "Taiwan",
                            "Tajikistan",
                            "Tanzania",
                            "Thailand",
                            "Togo",
                            "Tonga",
                            "Trinidad & Tobago",
                            "Tunisia",
                            "Turkey",
                            "Turkmenistan",
                            "Tuvalu",
                            "Uganda",
                            "Ukraine",
                            "United Arab Emirates",
                            "United Kingdom",
                            "United States",
                            "Uruguay",
                            "Uzbekistan",
                            "Vanuatu",
                            "Vatican City",
                            "Venezuela",
                            "Vietnam",
                            "Yemen",
                            "Zambia",
                            "Zimbabwe",
                        );

                        foreach($countries as $item) {
                            echo "<option value='$item'>$item</option>";
                        }
                        ?>
                        </select>
                    </li>
                    <li>
                        <label for="postal-code">Postal Code</label>
                        <input type="text" id="postal-code" name="postalcode" />
                    </li>
                    <li><label for="phone-number">Phone Number</label>
                        <input type="tel" id="phone-number" name="phonenumber" />
                    </li>
                    <li><label for="email">Email</label>
                        <input type="email" id="email" name="email" />
                    </li>
                    <li><label for="preferred-contact">Preferred Mode of Contact</label>
                        <select id="preferred-contact" name="preferredcontact">
                            <option value="phone">Phone</option>
                            <option value="email">Email</option>
                        </select>
                    </li>
                    <li><select id="donation-frequency" name="donationfrequency">
                        <option value="monthly">Monthly</option>
                        <option value="yearly">Yearly</option>
                        <option value="one-time">One-Time</option>
                    </select></li> 
                    <li>
                        <label for="donation-sum">donation of</label>
                        <input type="number" id="donation-sum" name="donationsum" /></li>
                    <li>
                        <label for="donation-currency">in</label>
                        <select id="currency" name="donationcurrency">
                            <option value="USD">USD</option>
                            <option value="Euro">Euro</option>
                            <option value="BTC">BTC</option>
                        </select>
                    </li>
                    <li>
                        <label for="comments">comments</label>
                        <input type="text" id="comments" name="comments"/></li>
                </ul>
                
            </fieldset>
            <input type="submit" name="submit" value="Review Your Information"></button>
        </form>
    </body>
</html>