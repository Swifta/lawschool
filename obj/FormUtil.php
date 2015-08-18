<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */




class FormUtil{
    
    public static function displayMaritalStatus($selected){
        $ret = "";
        $marital = array();
        $marital['Single'] = "Single";
        $marital['Married'] = "Married";
        $marital['Divorced'] = "Divorced";
        $marital['Widow'] = "Widow";
        $marital['Widower'] = "Widower";
        foreach($marital as $key=>$value){
            $sel = "";
            if($key == $selected){
                $sel = "selected";                    
            }
            $ret.="<option value='".$key."' ".$sel.">".$value."</option>";
        }
        return $ret;        
    }
    
    public static function displayUniversity($selected){
       $university = array();
       $university['Abia State University'] = "Abia State University";
       $university['Abubakar Tafawa Balewa University'] = "Abubakar Tafawa Balewa University";
       $university['Achievers University, Owo'] = "Achievers University, Owo";
       $university['Adamawa State University'] = "Adamawa State University";
       $university['Abubakar Tafawa Balewa University'] = "Abubakar Tafawa Balewa University";
       $university['Adekunle Ajasin University'] = "Adekunle Ajasin University";
       $university['Akungba Akoko'] = "Akungba Akoko";
       $university['Adeleke University'] = "Adeleke University";
       $university['Afe Babalola University'] = "Afe Babalola University";
       $university['African University of Science and Technology'] = "African University of Science and Technology";
       $university['Ahmadu Bello University'] = "Ahmadu Bello University";
       $university['Ajayi Crowther University'] = "Ajayi Crowther University";
       $university['Akwa Ibom State University'] = "Akwa Ibom State University";
       $university['Al-Hikmah University'] = "Al-Hikmah University";
       $university['Ambrose Alli University'] = "Ambrose Alli University";
       $university['American University of Nigeria'] = "American University of Nigeria";
       $university['Anambra State University'] = "Anambra State University";
       $university['Babcock University'] = "Babcock University";
       $university['Bauchi State University'] = "Bauchi State University";
       $university['Bayero University Kano'] = "Bayero University Kano";
       $university['Baze University'] = "Baze University";
       $university['Bells University of Technology'] = "Bells University of Technology";
       $university['Benson Idahosa University'] = "Benson Idahosa University";
       $university['Benue State University'] = "Benue State University";
       $university['Bingham University'] = "Bingham University";
       $university['Bowen University'] = "Bowen University";
       $university['Caleb University'] = "Caleb University";
       $university['Caritas University'] = "Caritas University";
       $university['City University'] = "City University";    
       $university['Covenant University'] = "Covenant University";
       $university['Covenant University'] = "Covenant University";
       $university['Crawford University'] = "Crawford University";
       $university['Crescent University'] = "Crescent University";
       $university['Cross River University of Sci. & Tech'] = "Cross River University of Sci. & Tech";
       $university['Delta State University, Abraka'] = "Delta State University, Abraka";
       $university['Ebonyi State University'] = "Ebonyi State University";
       $university['Ekiti State University, Ado Ekiti'] = "Ekiti State University, Ado Ekiti";
       $university['Elizade University'] = "Elizade University";
       $university['Enugu State University of Science and Technology'] = "Enugu State University of Science and Technology";
       $university['Federal University of Petroleum Resources'] = "Federal University of Petroleum Resources";
       $university['Federal University of Technology, Akure'] = "Federal University of Technology, Akure";
       $university['Federal University of Technology, Minna'] = "Federal University of Technology, Minna";
       $university['Federal University of Technology, Owerri'] = "Federal University of Technology, Owerri";
       $university['Federal University, Dutse'] = "Federal University, Dutse";
       $university['Federal University, Dutsin-Ma'] = "Federal University, Dutsin-Ma"; 
       $university['Federal University Gashua'] = "Federal University Gashua";
       $university['Federal University, Kashere'] = "Federal University, Kashere";
       $university['Federal University, Lafia'] = "Federal University, Lafia";
       $university['Federal University, Lokoja'] = "Federal University, Lokoja";
       $university['Federal University, Ndufu-Alike'] = "Federal University, Ndufu-Alike";
       $university['Federal University, Otuoke'] = "Federal University, Otuoke";
       $university['Federal University, Oye-Ekiti'] = "Federal University, Oye-Ekiti";
       $university['Federal University, Wukari'] = "Federal University, Wukari";
       $university['Fountain University'] = "Fountain University";
       $university['Godfrey Okoye University'] = "Godfrey Okoye University";
       $university['Gombe State University'] = "Gombe State University";
       $university['Ibrahim Badamasi Babangida University'] = "Ibrahim Badamasi Babangida University";
       $university['Igbinedion University Okada'] = "Igbinedion University Okada";
       $university['Imo State University'] = "Imo State University";
       $university['Joseph Ayo Babalola University'] = "Joseph Ayo Babalola University	";
       $university['Kaduna State University'] = "Kaduna State University";
       $university['Katsina University'] = "Katsina University";
       $university['Kebbi State University of Sci. and Tech'] = "Kebbi State University of Sci. and Tech";
       $university['Kogi State University'] = "Kogi State University";
       $university['Kwara State University'] = "Kwara State University";
       $university['Kwararafa University Wukari'] = "Kwararafa University Wukari";
       $university['Ladoke Akintola University of Technology'] = "Ladoke Akintola University of Technology";
       $university['Lagos State University'] = "Lagos State University";
       $university['Landmark University'] = "Landmark University";
       $university['Lead City University'] = "Lead City University";
       $university['Madonna University'] = "Madonna University";
       $university['Michael Okpara University of Agriculture'] = "Michael Okpara University of Agriculture";
       $university['Modibbo Adama University of Technology'] = "Modibbo Adama University of Technology";
       $university['Nasarawa State University'] = "Nasarawa State University";
       $university['Niger Delta University'] = "Niger Delta University";
       $university['Wilberforce Island Yenagoa'] = "Wilberforce Island Yenagoa";
       $university['Nigerian Turkish Nile University'] = "Nigerian Turkish Nile University";
       $university['Nnamdi Azikiwe University'] = "Nnamdi Azikiwe University";
       $university['Novena University'] = "Novena University";
       $university['Obafemi Awolowo University'] = "Obafemi Awolowo University";
       $university['Obong University'] = "Obong University";
       $university['Oduduwa University'] = "Oduduwa University";
       $university['Olabisi Onabanjo University'] = "Olabisi Onabanjo University";
       $university['Ondo State University of Sci. & Tech'] = "Ondo State University of Sci. & Tech";
       $university['Osun State University'] = "Osun State University";
       $university['Pan African University'] = "Pan African University";
       $university['Paul University'] = "Paul University";
       $university['Plateau State University'] = "Plateau State University";
       $university['Redeemer University'] = "Redeemers University";
       $university['Renaissance University'] = "Renaissance University";
       $university['Rhema University'] = "Rhema University";
       $university['Ritman University'] = "Ritman University";  
       $university['Salem University'] = "Salem University";
       $university['Salem University'] = "Salem University";
       $university['Samuel Adegboyega University'] = "Samuel Adegboyega University";
       $university['Sokoto State University'] = "Sokoto State University";
       $university['Tai Solarin University of Education'] = "Tai Solarin University of Education";
       $university['Tansian University'] = "Tansian University";
       $university['Taraba State University'] = "Taraba State University";
       $university['Umaru Musa YarAdua University'] = "Umaru Musa YarAdua University";
       $university['University of Abuja'] = "University of Abuja";
       $university['University of Ado Ekiti'] = "University of Ado Ekiti";
       $university['University of Agriculture, Abeokuta'] = "University of Agriculture, Abeokuta";
       $university['University of Agriculture, Makurdi'] = "University of Agriculture, Makurdi";
       $university['University of Benin'] = "University of Benin";
       $university['University of Calabar'] = "University of Calabar";
       $university['University of Ibadan'] = "University of Ibadan";
       $university['University of Ilorin'] = "University of Ilorin";
       $university['University of Jos'] = "University of Jos";
       $university['University of Lagos'] = "University of Lagos";
       $university['University of Maiduguri'] = "University of Maiduguri";
       $university['University of Mkar'] = "University of Mkar";
       $university['University of Nigeria'] = "University of Nigeria";
       $university['University of Port Harcourt'] = "University of Port Harcourt";
       $university['University of Uyo'] = "University of Uyo";
       $university['Umaru Musa Yaradua University'] = "Umaru Musa Yaradua University";
       $university['Usmanu Danfodio University'] = "Usmanu Danfodio University";
       $university['Wellspring University'] = "Wellspring University";
       $university['Wesley University of Science and Technology'] = "Wesley University of Science and Technology";
       $university['Western Delta University'] = "Western Delta University";
       $university['Yobe State University'] = "Yobe State University";
       $university['Aberystwyth University'] = "Aberystwyth University";  
       $university['Anglia Ruskin University'] = "";
       $university['Bangor University'] = "Bangor University";
       $university['Birbeck University of London'] = "Birbeck University of London";
       $university['birmingham city univ'] = "birmingham city univ";
       $university['bpp university coll'] = "bpp university coll";
       $university['bradford univ.'] = "bradford univ.";
       $university['brunel university'] = "brunel university";
       $university['carletoin univ.'] = "carletoin univ.";
       $university['conventry univ.'] = "conventry univ.";
       $university['de montfort univ.'] = "de montfort univ.";
       $university['durham univ.'] = "durham univ.";
       $university['griffith college dublin'] = "griffith college dublin";
       $university['houborn college of law'] = "houborn college of law";
       $university['houdegbe north america uni'] = "houdegbe north america uni";
       $university['keele university'] = "keele university";
       $university['kings college, london'] = "kings college, london";
       $university['kingston university'] = "kingston university";
       $university['kwame nkrumah univ.'] = "kwame nkrumah univ.";
       $university['lancaster univ.'] = "lancaster univ.";
       $university['london guildhall univ.'] = "london guildhall univ.";
       $university['london schl of econs & pol'] = "london schl of econs & pol";
       $university['london south bank uni.'] = "london south bank uni.";
       $university['middlesex univ.'] = "middlesex univ.";
       $university['newcastle univ.'] = "newcastle univ.";
       $university['nottingham trent univ.'] = "nottingham trent univ.";
       $university['queen mary univ of london'] = "queen mary univ of london";
       $university['schl.of law univ.of reading'] = "schl.of law univ.of reading";
       $university['southampton solent univ.'] = "southampton solent univ.";
       $university['swansea university'] = "swansea university";
       $university['the american univ.'] = "the american univ.";
       $university['the univ. of sheffield'] = "the univ. of sheffield";
       $university['univ. of aberystwyth'] = "univ. of aberystwyth";
       $university['univ. of bedfordshire'] = "";
       $university['univ. of birmingham'] = "univ. of birmingham";
       $university['univ. of bradford'] = "univ. of bradford";
       $university['univ. of brighton'] = "univ. of brighton";  
       $university['univ. of bristol'] = "univ. of bristol";
       $university['univ. of buckingham'] = "univ. of buckingham";
       $university['univ. of cambridge'] = "univ. of cambridge";
       $university['univ. of dundee'] = "univ. of dundee";
       $university['univ. of east anglia'] = "univ. of east anglia";
       $university['univ. of east london'] = "univ. of east london";
       $university['univ. of essex'] = "univ. of essex";
       $university['univ. of exeter'] = "univ. of exeter";
       $university['univ. of giruceotershire'] = "univ. of giruceotershire";
       $university['univ. of hertfordshire'] = "univ. of hertfordshire";
       $university['univ. of hull'] = "univ. of hull";
       $university['univ. of kent canterbury'] = "univ. of kent canterbury";
       $university['univ. of law'] = "univ. of law";
       $university['univ. of leeds'] = "univ. of leeds";
       $university['univ. of leicester'] = "univ. of leicester";
       $university['univ. of liverpool'] = "univ. of liverpool";
       $university['univ. of london'] = "univ. of london";
       $university['univ. of manchester'] = "univ. of manchester";
       $university['univ. of northampton'] = "univ. of northampton";
       $university['univ. of nottingham'] = "univ. of nottingham";
       $university['univ. of sheffield'] = "univ. of sheffield";
       $university['univ. of southampton'] = "univ. of southampton";
       $university['univ. of sussex'] = "univ. of sussex";
       $university['univ. of wales'] = "univ. of wales";
       $university['univ. of warwick'] = "univ. of warwick";
       $university['univ. of west engaland'] = "univ. of west engaland";
       $university['univ. of wolverhampton'] = "univ. of wolverhampton";
       $university['univ.of east anglia'] = "univ.of east anglia";
       $university['univ.of hertfordshire'] = "univ.of hertfordshire";
       $university['univ.of law, england'] = "univ.of law, england";
       $university['univ.of manchester'] = "univ.of manchester";
       $university['univ.of northampton'] = "univ.of northampton";
       $university['university of hull'] = "university of hull";
       $university['university of leeds'] = "university of leeds";
       $university['university of sorrey'] = "university of sorrey";
       $university['university of wales'] = "university of wales";
       $university['university of york'] = "university of york";              
       $university['Other'] = "Other";

        foreach($university as $key=>$value){
            $sel = "";
            if($key == $selected){
                $sel = "selected";                    
            }
            $ret.="<option value='".$key."' ".$sel.">".$value."</option>";
        }
        return $ret;
    }
    
    public static function displayState($selected){
        $ret = "";
        $states =  array('ABIA' => 'ABIA','ABUJA' => 'ABUJA','ANAMBRA' => 'ANAMBRA','ADAMAWA' => 'ADAMAWA',
        'AKWA IBOM' => 'AKWA IBOM','BAUCHI' => 'BAUCHI','BAYELSA' => 'BAYELSA','BENUE' => 'BENUE',
        'BORNO' => 'BORNO','CROSS RIVER' => 'CROSS RIVER','DELTA' => 'DELTA','EDO' => 'EDO','EKITI' => 'EKITI',
        'EBONYI' => 'EBONYI','ENUGU' => 'ENUGU','GOMBE' => 'GOMBE','IMO' => 'IMO','KANO' => 'KANO',
        'LAGOS' => 'LAGOS','NASSARAWA' => 'NASSARAWA','JIGAWA' => 'JIGAWA','KEBBI' => 'KEBBI',
        'KADUNA' => 'KADUNA','KOGI' => 'KOGI','KATSINA' => 'KATSINA','KWARA' => 'KWARA','NIGER' => 'NIGER',
        'OGUN' => 'OGUN','ONDO' => 'ONDO','OSUN' => 'OSUN','OYO' => 'OYO','PLATEAU' => 'PLATEAU',
        'RIVERS' => 'RIVERS','SOKOTO' => 'SOKOTO','TARABA' => 'TARABA','YOBE' => 'YOBE','ZAMFARAM' => 'ZAMFARA');
        
            foreach($states as $key=>$value){
                $sel = "";
                if($key == $selected){
                    $sel = "selected";                    
                }
                $ret.="<option value='".$key."' ".$sel.">".$value."</option>";
            }
            return $ret;
    }
    
    public static function displayRelligion($selected){
        $ret = "";
        $religions = array();
        $religions['Christianity'] = "Christianity";
        $religions['Islamic'] = "Islamic";
        $religions['Others'] = "Others";
        foreach($religions as $key=>$value){
            $sel = "";
            if($key == $selected){
                $sel = "selected";                    
            }
            $ret.="<option value='".$key."' ".$sel.">".$value."</option>";
        }
        return $ret;
    }
    
    public static function displaySex($selected){
        $ret = "";
        $sex = array();
        $sex['Male'] = "Male";
        $sex['Female'] = "Female";
        foreach($sex as $key=>$value){
            $sel = "";
            if($key == $selected){
                $sel = "selected";                    
            }
            $ret.="<option value='".$key."' ".$sel.">".$value."</option>";
        }
        return $ret;
    }
    public static function displayCountry($selected){
        $ret = "";
        $country = array(
        'AF'=>'Afghanistan',
        'AL'=>'Albania',
        'DZ'=>'Algeria',
        'AS'=>'American Samoa',
        'AD'=>'Andorra',
        'AO'=>'Angola',
        'AI'=>'Anguilla',
        'AQ'=>'Antarctica',
        'AG'=>'Antigua And Barbuda',
        'AR'=>'Argentina',
        'AM'=>'Armenia',
        'AW'=>'Aruba',
        'AU'=>'Australia',
        'AT'=>'Austria',
        'AZ'=>'Azerbaijan',
        'BS'=>'Bahamas',
        'BH'=>'Bahrain',
        'BD'=>'Bangladesh',
        'BB'=>'Barbados',
        'BY'=>'Belarus',
        'BE'=>'Belgium',
        'BZ'=>'Belize',
        'BJ'=>'Benin',
        'BM'=>'Bermuda',
        'BT'=>'Bhutan',
        'BO'=>'Bolivia',
        'BA'=>'Bosnia And Herzegovina',
        'BW'=>'Botswana',
        'BV'=>'Bouvet Island',
        'BR'=>'Brazil',
        'IO'=>'British Indian Ocean Territory',
        'BN'=>'Brunei',
        'BG'=>'Bulgaria',
        'BF'=>'Burkina Faso',
        'BI'=>'Burundi',
        'KH'=>'Cambodia',
        'CM'=>'Cameroon',
        'CA'=>'Canada',
        'CV'=>'Cape Verde',
        'KY'=>'Cayman Islands',
        'CF'=>'Central African Republic',
        'TD'=>'Chad',
        'CL'=>'Chile',
        'CN'=>'China',
        'CX'=>'Christmas Island',
        'CC'=>'Cocos (Keeling) Islands',
        'CO'=>'Columbia',
        'KM'=>'Comoros',
        'CG'=>'Congo',
        'CK'=>'Cook Islands',
        'CR'=>'Costa Rica',
        'CI'=>'Cote D\'Ivorie (Ivory Coast)',
        'HR'=>'Croatia (Hrvatska)',
        'CU'=>'Cuba',
        'CY'=>'Cyprus',
        'CZ'=>'Czech Republic',
        'CD'=>'Democratic Republic Of Congo (Zaire)',
        'DK'=>'Denmark',
        'DJ'=>'Djibouti',
        'DM'=>'Dominica',
        'DO'=>'Dominican Republic',
        'TP'=>'East Timor',
        'EC'=>'Ecuador',
        'EG'=>'Egypt',
        'SV'=>'El Salvador',
        'GQ'=>'Equatorial Guinea',
        'ER'=>'Eritrea',
        'EE'=>'Estonia',
        'ET'=>'Ethiopia',
        'FK'=>'Falkland Islands (Malvinas)',
        'FO'=>'Faroe Islands',
        'FJ'=>'Fiji',
        'FI'=>'Finland',
        'FR'=>'France',
        'FX'=>'France, Metropolitan',
        'GF'=>'French Guinea',
        'PF'=>'French Polynesia',
        'TF'=>'French Southern Territories',
        'GA'=>'Gabon',
        'GM'=>'Gambia',
        'GE'=>'Georgia',
        'DE'=>'Germany',
        'GH'=>'Ghana',
        'GI'=>'Gibraltar',
        'GR'=>'Greece',
        'GL'=>'Greenland',
        'GD'=>'Grenada',
        'GP'=>'Guadeloupe',
        'GU'=>'Guam',
        'GT'=>'Guatemala',
        'GN'=>'Guinea',
        'GW'=>'Guinea-Bissau',
        'GY'=>'Guyana',
        'HT'=>'Haiti',
        'HM'=>'Heard And McDonald Islands',
        'HN'=>'Honduras',
        'HK'=>'Hong Kong',
        'HU'=>'Hungary',
        'IS'=>'Iceland',
        'IN'=>'India',
        'ID'=>'Indonesia',
        'IR'=>'Iran',
        'IQ'=>'Iraq',
        'IE'=>'Ireland',
        'IL'=>'Israel',
        'IT'=>'Italy',
        'JM'=>'Jamaica',
        'JP'=>'Japan',
        'JO'=>'Jordan',
        'KZ'=>'Kazakhstan',
        'KE'=>'Kenya',
        'KI'=>'Kiribati',
        'KW'=>'Kuwait',
        'KG'=>'Kyrgyzstan',
        'LA'=>'Laos',
        'LV'=>'Latvia',
        'LB'=>'Lebanon',
        'LS'=>'Lesotho',
        'LR'=>'Liberia',
        'LY'=>'Libya',
        'LI'=>'Liechtenstein',
        'LT'=>'Lithuania',
        'LU'=>'Luxembourg',
        'MO'=>'Macau',
        'MK'=>'Macedonia',
        'MG'=>'Madagascar',
        'MW'=>'Malawi',
        'MY'=>'Malaysia',
        'MV'=>'Maldives',
        'ML'=>'Mali',
        'MT'=>'Malta',
        'MH'=>'Marshall Islands',
        'MQ'=>'Martinique',
        'MR'=>'Mauritania',
        'MU'=>'Mauritius',
        'YT'=>'Mayotte',
        'MX'=>'Mexico',
        'FM'=>'Micronesia',
        'MD'=>'Moldova',
        'MC'=>'Monaco',
        'MN'=>'Mongolia',
        'MS'=>'Montserrat',
        'MA'=>'Morocco',
        'MZ'=>'Mozambique',
        'MM'=>'Myanmar (Burma)',
        'NA'=>'Namibia',
        'NR'=>'Nauru',
        'NP'=>'Nepal',
        'NL'=>'Netherlands',
        'AN'=>'Netherlands Antilles',
        'NC'=>'New Caledonia',
        'NZ'=>'New Zealand',
        'NI'=>'Nicaragua',
        'NE'=>'Niger',
        'NG'=>'Nigeria',
        'NU'=>'Niue',
        'NF'=>'Norfolk Island',
        'KP'=>'North Korea',
        'MP'=>'Northern Mariana Islands',
        'NO'=>'Norway',
        'OM'=>'Oman',
        'PK'=>'Pakistan',
        'PW'=>'Palau',
        'PA'=>'Panama',
        'PG'=>'Papua New Guinea',
        'PY'=>'Paraguay',
        'PE'=>'Peru',
        'PH'=>'Philippines',
        'PN'=>'Pitcairn',
        'PL'=>'Poland',
        'PT'=>'Portugal',
        'PR'=>'Puerto Rico',
        'QA'=>'Qatar',
        'RE'=>'Reunion',
        'RO'=>'Romania',
        'RU'=>'Russia',
        'RW'=>'Rwanda',
        'SH'=>'Saint Helena',
        'KN'=>'Saint Kitts And Nevis',
        'LC'=>'Saint Lucia',
        'PM'=>'Saint Pierre And Miquelon',
        'VC'=>'Saint Vincent And The Grenadines',
        'SM'=>'San Marino',
        'ST'=>'Sao Tome And Principe',
        'SA'=>'Saudi Arabia',
        'SN'=>'Senegal',
        'SC'=>'Seychelles',
        'SL'=>'Sierra Leone',
        'SG'=>'Singapore',
        'SK'=>'Slovak Republic',
        'SI'=>'Slovenia',
        'SB'=>'Solomon Islands',
        'SO'=>'Somalia',
        'ZA'=>'South Africa',
        'GS'=>'South Georgia And South Sandwich Islands',
        'KR'=>'South Korea',
        'ES'=>'Spain',
        'LK'=>'Sri Lanka',
        'SD'=>'Sudan',
        'SR'=>'Suriname',
        'SJ'=>'Svalbard And Jan Mayen',
        'SZ'=>'Swaziland',
        'SE'=>'Sweden',
        'CH'=>'Switzerland',
        'SY'=>'Syria',
        'TW'=>'Taiwan',
        'TJ'=>'Tajikistan',
        'TZ'=>'Tanzania',
        'TH'=>'Thailand',
        'TG'=>'Togo',
        'TK'=>'Tokelau',
        'TO'=>'Tonga',
        'TT'=>'Trinidad And Tobago',
        'TN'=>'Tunisia',
        'TR'=>'Turkey',
        'TM'=>'Turkmenistan',
        'TC'=>'Turks And Caicos Islands',
        'TV'=>'Tuvalu',
        'UG'=>'Uganda',
        'UA'=>'Ukraine',
        'AE'=>'United Arab Emirates',
        'UK'=>'United Kingdom',
        'US'=>'United States',
        'UM'=>'United States Minor Outlying Islands',
        'UY'=>'Uruguay',
        'UZ'=>'Uzbekistan',
        'VU'=>'Vanuatu',
        'VA'=>'Vatican City (Holy See)',
        'VE'=>'Venezuela',
        'VN'=>'Vietnam',
        'VG'=>'Virgin Islands (British)',
        'VI'=>'Virgin Islands (US)',
        'WF'=>'Wallis And Futuna Islands',
        'EH'=>'Western Sahara',
        'WS'=>'Western Samoa',
        'YE'=>'Yemen',
        'YU'=>'Yugoslavia',
        'ZM'=>'Zambia',
        'ZW'=>'Zimbabwe'
        );
        foreach($country as $key=>$value){
            $sel = "";
            if($key == $selected){
                $sel = "selected";                    
            }
            $ret.="<option value='".$key."' ".$sel.">".$value."</option>";
        }
        return $ret;        
    }
}
?>