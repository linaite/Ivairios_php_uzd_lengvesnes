<?php
//1. Sujunkite kintamuosius, kad atspausdintų tekstą "mano batai buvo du":
$a = "du";
$b = "mano";
$c = "batai buvo";
print "$b $c $a <br>";
print $b . ' ' . $c . ' ' . $a . '<br>';

print '<br>';

//2. Parašykite sąlygą: jeigu kintamasis $a daugiau už $b,
// spaudintų tekstą: " a daugiau už b";
$a = 5;
$b = 4;
if ($a > $b) {
    print 'a daugiau už b';
}
print '<br><br>';

//3. Priskirkite dviems konstantoms kokias nors reikšmes ir jas sujunkite. Atspausdinkite.
define('PIRMA', 'Labas,');
define('ANTRA', 'Giedriau');
print PIRMA . ' ' . ANTRA . '<br><br>';

//4. Ištaisykite klaidas, rezultate turi spausdinti žodį "Vokietija":
$salis = "uk";
switch ($salis) {
    case 'ca':
        echo("Kanada");
        break;
    case "cr":
        echo("Kosta Rika");
        break;
    case "de":
        echo("Vokietija");
        break;
    case "uk":
        echo("Didžioji Britanija");
        break;
    default:
        echo("JAV");
}
print '<br><br>';

//5. Kokias operacijas atlikti su $a ir $b, kad atspausdintų 11:
$a = "10 maišų";
$b = "1 maišas";
$array1 = explode(' ', $a);
$array2 = explode(' ', $b);

print $array1[0] + $array2[0] . '<br>';
//_______________________________
$a = "10 maišų";
$b = "1 maišas";
$a = (int)filter_var($a, FILTER_SANITIZE_NUMBER_INT);
$b = (int)filter_var($b, FILTER_SANITIZE_NUMBER_INT);
print $a + $b . '<br><br>';

//6. Kokį kintamąjį (kintamuosius) reikia ištrinti ar užkomentuoti, kad $e įgytų reikšmę 10:
$a = "11";
$b = "5";
$d = 4;
$pirmas = $d + $a - $b;
print $pirmas . '<br>';
//___________________________
$a = "11";
$b = "5";
$c = "6";
$d = 4;
$antras = $d + $c;
print $antras . '<br><br>';

//7. Ką reikia užkomentuoti, kad $e įgytų reikšmę 4:
$a = 5;
//$b = $a + 1;
$c = $a - 1;
//$d = $c - 1;
$e = /*$d + $a - $b +*/
    $c;
print $e . '<br><br>';

//8. Ištaisykite kodą: rezultate spausdins "skirtumas yra":
$a = 10;
$b = 30;
if ($a - $b) {
    echo "skirtumas yra <br><br>";
} else {
    echo "skirtumo nera";
}

//9. Turime kintamuosius ir reikšmes $vardas, $pavardė ir $atlyginimas.
//Parašykite sąlygą, jeigu egzistuoja kinamieji $vardas ir $pavarde, o
// $atlyginimas > 5000, spausdinti - visi duomenys yra; kitu atveju spausdinti:
// duomenys netinkami.
$vardas = '';
$pavarde = '';
$atlyginimas = 6000;
if (isset($vardas) && isset($pavarde) && $atlyginimas > 5000) {
    print 'visi duomenys yra' . '<br>';
} else {
    print 'duomenys netinkami';
}
//____________________________
$vardas = '';
$pavarde = '';
$atlyginimas = '4000';
if (empty($vardas) || empty($pavarde) || $atlyginimas < 5000) {
    print 'duomenys netinkami' . '<br><br>';
} else {
    print 'visi duomenys yra';
}

//10. Ką daryti, kad reikšmes naršyklėje rodytų skirtingose eilutėse:
$kintamasis = "a \n b \n c \n d";
echo nl2br($kintamasis) . '<br>';

//11. Masyve, t.y. masyvo elementuose patalpinti HTML fragmentai.
// Masyvas turi tris elementus:
//
//    a) Forma, turinti vieną tekstinį elementą, vieną paslėptą (hidden) elementą
// ir mygtuką,
//    b) Trys nuorodos, išdėliotos į tris eilutes
//    c) Lentelė iš dviejų stulpeliu ir vienos eilutės.
//
//Priklausomai nuo kito kintamojo $a reikšmių 1, -1 ir 0, išvedamas atitinkamas masyvo
// elementas. Jeigu $a neapibrėžtas, nieko neišveda puslapyje. Naudoti if,
// elseif, else sąlygas.
//
//Klausimai:
//1. Koks skirtumas tarp = = =, = =,  = PHP kalboje? Kuo skiriasi $a == 0 ir !$a sąlygos?
//    2. Kuo skiriasi switch nuo if?
$array = ['<form action=""><h3>Text</h3><h1 style="display: none">Hidden</h1><input type="button"></form>', '<ul><li><a href="">Link</a></li><li><a href="">Link</a></li><li><a href="">Link</a></li></ul>', '<table style="border:1px solid black; border-collapse:collapse"><tr><td style="border:1px solid black;">pirma</td><td style="border:1px solid black;">antra</td></tr></table>'];
$a = 1; //-1, 0
if ($a === -1) {
    print $array[0];
} elseif ($a === 0) {
    print $array[1];
} elseif ($a === 1) {
    print $array[2];
}
print '<br>';

//12. Turime masyvą:
$a = [10, 20, 30, 1, 1, 50, 0, 0, "jonas", "petras"];
//Padidinkite masyvo elementų reikšmes 10 kartų ir atspausdinkite foreach
// pagalba. Tekstinės lieka nepakeistos.
//I budas
foreach ($a as $value) {
    if (is_numeric($value)) {
        print $value * 10 . ', ';
    } elseif (!is_numeric($value)) {
        print $value . ', ';
    }
}
//___________________
//II budas
$b = array_slice($a, 8);
var_dump($b);
for ($i = 0; $i < 8; $i++) {
    $new[] = $a[$i] * 10;
}
$result = array_merge($new, $b);
var_dump($result);
//_________________________
//III budas
foreach ($a as $b) {
    if (is_numeric($b)) {
        $new_array[] = $b * 10;
    } else {
        $new_array[] = $b;
    }
}
var_dump($new_array);
print '<br>';

//13. Turime masyvą:
//Sukurkite seno masyvo pagrindu naują masyvą. Palikite tiek vardų - elementų,
// kokia yra pirma masyvo reikšmė ir atspausdinkite. Surasti, kiek masyve elementų,
// naudokite $count = count($a); sakinį, (masyvo elementų kiekį). Konfigūracijos parametro,
// t.y. pirmo elemento nelieka.
$a = [
    "0"=>3,
    "jonas" => 20,
    "petras" => 20,
    "simas" => 30,
    "ana" => 40,
    "gita" => 50
];
$new_array = array_slice($a, 1, $a[0]);
var_dump($new_array);


//14. Turime masyvą:
//Sukurkite seno masyvo pagrindu naują masyvą. Sumažinkite jo elementų
// kiekį 2 kartus, t.y. palikite kas antrą elementą ir atspausdinkite.
$a = [10, 20, 30, 50, 60, 70, 80];
$count = count($a);
$new_array = [];
for ($i = 0; $i < $count; $i += 2) {
    array_push($new_array, $a[$i]);
}
foreach ($new_array as $item) {
    echo $item . ', ';
}
print '<br><br>';
//15. Masyve, jo elementuose, yra surašytos HTML spalvos:
//1 elementas - red, 2 elementas - blue, 3 elementas - green, 4
// elementas - yellow, 5 elementas - pink. Atspausdinti spalvotą tekstą foreach
// ciklo pagalba, kai vartojamos to masyvo elementuose aprašytos spalvos.
$colors = ['red', 'blue', 'green', 'yellow', 'pink'];
foreach ($colors as $color) {
    print "<div style='color:$color'>$color</div>";
}

//16. panaudokite while cikla ir aprasykite taip jog fraze
//'Atspausdina' pasikartotu 5 kartus.
$string = 'atspausdinta';
$i = 1;
while ($i <= 5) {
    echo 'atspausdinta' . ', ';
    $i++;
}
print '<br><br>';

//17. papildykite pirma uzduoti jog atspausdintu ne tik fraze bet ir ciklo numeri

$string = 'atspausdinta';
$i = 1;
while ($i <= 5) {
    echo $i . ' ' . 'atspausdinta' . '<br><br>';
    $i++;
}
//18. panaudojant swich metoda aprasykite kvadrato spalva kuri priklauso
//nuo musu kintamojo $color (spalvos 3)


$i = 'moteris';
switch ($i) {
    case 'vyras':
        echo "<div style='background-color: gray; height: 150px; width: 150px;'></div>";
        break;
    case 'moteris':
        echo "<div style='background-color: yellow; height: 150px; width: 150px;'></div>";
        break;
    default:
        echo "<div style='background-color: red; height: 150px; width: 150px;'></div>";
        break;
}
print '<br><br>';

//19. masyvas -> https://gist.githubusercontent.com/Ingramz/a0d02350c56c9e0a9d99/raw/7664e4c581d7863461e6ea0a57b3d4d9abef4f24/famfamfam-php-flags.php
//    pritaikyti foreach cikla ir jo pagalba bei papildomu funciju pagalba
//    atvaizduoti ekrane visas salis kurios prasideda is B raides

$countries = array(
    'AF' => 'Afghanistan',
    'AX' => '&Aring;land Islands',
    'AL' => 'Albania',
    'DZ' => 'Algeria',
    'AS' => 'American Samoa',
    'AD' => 'Andorra',
    'AO' => 'Angola',
    'AI' => 'Anguilla',
    'AG' => 'Antigua and Barbuda',
    'AR' => 'Argentina',
    'AM' => 'Armenia',
    'AW' => 'Aruba',
    'AU' => 'Australia',
    'AT' => 'Austria',
    'AZ' => 'Azerbaijan',
    'BS' => 'Bahamas (the)',
    'BH' => 'Bahrain',
    'BD' => 'Bangladesh',
    'BB' => 'Barbados',
    'BY' => 'Belarus',
    'BE' => 'Belgium',
    'BZ' => 'Belize',
    'BJ' => 'Benin',
    'BM' => 'Bermuda',
    'BT' => 'Bhutan',
    'BO' => 'Bolivia (Plurinational State of)',
    'BA' => 'Bosnia and Herzegovina',
    'BW' => 'Botswana',
    'BV' => 'Bouvet Island',
    'BR' => 'Brazil',
    'IO' => 'British Indian Ocean Territory (the)',
    'BN' => 'Brunei Darussalam',
    'BG' => 'Bulgaria',
    'BF' => 'Burkina Faso',
    'BI' => 'Burundi',
    'KH' => 'Cambodia',
    'CV' => 'Cabo Verde',
    'CM' => 'Cameroon',
    'CA' => 'Canada',
    'CT' => 'Catalonia',
    'KY' => 'Cayman Islands (the)',
    'CF' => 'Central African Republic (the)',
    'TD' => 'Chad',
    'CL' => 'Chile',
    'CN' => 'China',
    'CX' => 'Christmas Island',
    'CC' => 'Cocos (Keeling) Islands (the)',
    'CO' => 'Colombia',
    'KM' => 'Comoros',
    'CD' => 'Congo (the Democratic Republic of the)',
    'CG' => 'Congo (the)',
    'CK' => 'Cook Islands (the)',
    'CR' => 'Costa Rica',
    'CI' => 'C&ocirc;te d\'Ivoire',
    'HR' => 'Croatia',
    'CU' => 'Cuba',
    'CY' => 'Cyprus',
    'CZ' => 'Czech Republic (the)',
    'DK' => 'Denmark',
    'DJ' => 'Djibouti',
    'DM' => 'Dominica',
    'DO' => 'Dominican Republic (the)',
    'EC' => 'Ecuador',
    'EG' => 'Egypt',
    'SV' => 'El Salvador',
    'EN' => 'England',
    'GQ' => 'Equatorial Guinea',
    'ER' => 'Eritrea',
    'EE' => 'Estonia',
    'ET' => 'Ethiopia',
    'EU' => 'European Union',
    'FK' => 'Falkland Islands (the) [Malvinas]',
    'FO' => 'Faroe Islands (the)',
    'FJ' => 'Fiji',
    'FI' => 'Finland',
    'FR' => 'France',
    'GF' => 'French Guiana',
    'PF' => 'French Polynesia',
    'TF' => 'French Southern Territories (the)',
    'GA' => 'Gabon',
    'GM' => 'Gambia (the)',
    'GE' => 'Georgia',
    'DE' => 'Germany',
    'GH' => 'Ghana',
    'GI' => 'Gibraltar',
    'GR' => 'Greece',
    'GL' => 'Greenland',
    'GD' => 'Grenada',
    'GP' => 'Guadeloupe',
    'GU' => 'Guam',
    'GT' => 'Guatemala',
    'GN' => 'Guinea',
    'GW' => 'Guinea-Bissau',
    'GY' => 'Guyana',
    'HT' => 'Haiti',
    'HM' => 'Heard Island and McDonald Islands',
    'VA' => 'Holy See (the)',
    'HN' => 'Honduras',
    'HK' => 'Hong Kong',
    'HU' => 'Hungary',
    'IS' => 'Iceland',
    'IN' => 'India',
    'ID' => 'Indonesia',
    'IR' => 'Iran (Islamic Republic of)',
    'IQ' => 'Iraq',
    'IE' => 'Ireland',
    'IL' => 'Israel',
    'IT' => 'Italy',
    'JM' => 'Jamaica',
    'JP' => 'Japan',
    'JO' => 'Jordan',
    'KZ' => 'Kazakhstan',
    'KE' => 'Kenya',
    'KI' => 'Kiribati',
    'KP' => 'Korea (the Democratic People\'s Republic of)',
    'KR' => 'Korea (the Republic of)',
    'KW' => 'Kuwait',
    'KG' => 'Kyrgyzstan',
    'LA' => 'Lao People\'s Democratic Republic (the)',
    'LV' => 'Latvia',
    'LB' => 'Lebanon',
    'LS' => 'Lesotho',
    'LR' => 'Liberia',
    'LY' => 'Libya',
    'LI' => 'Liechtenstein',
    'LT' => 'Lithuania',
    'LU' => 'Luxembourg',
    'MO' => 'Macao',
    'MK' => 'Macedonia (the former Yugoslav Republic of)',
    'MG' => 'Madagascar',
    'MW' => 'Malawi',
    'MY' => 'Malaysia',
    'MV' => 'Maldives',
    'ML' => 'Mali',
    'MT' => 'Malta',
    'MH' => 'Marshall Islands (the)',
    'MQ' => 'Martinique',
    'MR' => 'Mauritania',
    'MU' => 'Mauritius',
    'YT' => 'Mayotte',
    'MX' => 'Mexico',
    'FM' => 'Micronesia (Federated States of)',
    'MD' => 'Moldova (the Republic of)',
    'MC' => 'Monaco',
    'MN' => 'Mongolia',
    'ME' => 'Montenegro',
    'MS' => 'Montserrat',
    'MA' => 'Morocco',
    'MZ' => 'Mozambique',
    'MM' => 'Myanmar',
    'NA' => 'Namibia',
    'NR' => 'Nauru',
    'NP' => 'Nepal',
    'NL' => 'Netherlands (the)',
    'AN' => 'Netherlands Antilles',
    'NC' => 'New Caledonia',
    'NZ' => 'New Zealand',
    'NI' => 'Nicaragua',
    'NE' => 'Niger (the)',
    'NG' => 'Nigeria',
    'NU' => 'Niue',
    'NF' => 'Norfolk Island',
    'MP' => 'Northern Mariana Islands (the)',
    'NO' => 'Norway',
    'OM' => 'Oman',
    'PK' => 'Pakistan',
    'PW' => 'Palau',
    'PS' => 'Palestine, State of',
    'PA' => 'Panama',
    'PG' => 'Papua New Guinea',
    'PY' => 'Paraguay',
    'PE' => 'Peru',
    'PH' => 'Philippines (the)',
    'PN' => 'Pitcairn',
    'PL' => 'Poland',
    'PT' => 'Portugal',
    'PR' => 'Puerto Rico',
    'QA' => 'Qatar',
    'RE' => 'R&eacute;union',
    'RO' => 'Romania',
    'RU' => 'Russian Federation (the)',
    'RW' => 'Rwanda',
    'SH' => 'Saint Helena, Ascension and Tristan da Cunha',
    'KN' => 'Saint Kitts and Nevis',
    'LC' => 'Saint Lucia',
    'PM' => 'Saint Pierre and Miquelon',
    'VC' => 'Saint Vincent and the Grenadines',
    'WS' => 'Samoa',
    'SM' => 'San Marino',
    'ST' => 'Sao Tome and Principe',
    'SA' => 'Saudi Arabia',
    'AB' => 'Scotland',
    'SN' => 'Senegal',
    'RS' => 'Serbia',
    'CS' => 'Serbia and Montenegro',
    'SC' => 'Seychelles',
    'SL' => 'Sierra Leone',
    'SG' => 'Singapore',
    'SK' => 'Slovakia',
    'SI' => 'Slovenia',
    'SB' => 'Solomon Islands',
    'SO' => 'Somalia',
    'ZA' => 'South Africa',
    'GS' => 'South Georgia and the South Sandwich Islands',
    'ES' => 'Spain',
    'LK' => 'Sri Lanka',
    'SD' => 'Sudan (the)',
    'SR' => 'Suriname',
    'SJ' => 'Svalbard and Jan Mayen',
    'SZ' => 'Swaziland',
    'SE' => 'Sweden',
    'CH' => 'Switzerland',
    'SY' => 'Syrian Arab Republic',
    'TW' => 'Taiwan (Province of China)',
    'TJ' => 'Tajikistan',
    'TZ' => 'Tanzania, United Republic of',
    'TH' => 'Thailand',
    'TL' => 'Timor-Leste',
    'TG' => 'Togo',
    'TK' => 'Tokelau',
    'TO' => 'Tonga',
    'TT' => 'Trinidad and Tobago',
    'TN' => 'Tunisia',
    'TR' => 'Turkey',
    'TM' => 'Turkmenistan',
    'TC' => 'Turks and Caicos Islands (the)',
    'TV' => 'Tuvalu',
    'UG' => 'Uganda',
    'UA' => 'Ukraine',
    'AE' => 'United Arab Emirates (the)',
    'GB' => 'United Kingdom of Great Britain and Northern Ireland (the)',
    'UM' => 'United States Minor Outlying Islands (the)',
    'US' => 'United States of America (the)',
    'UY' => 'Uruguay',
    'UZ' => 'Uzbekistan',
    'VU' => 'Vanuatu',
    'VE' => 'Venezuela (Bolivarian Republic of)',
    'VN' => 'Viet Nam',
    'VG' => 'Virgin Islands (British)',
    'VI' => 'Virgin Islands (U.S.)',
    'WA' => 'Wales',
    'WF' => 'Wallis and Futuna',
    'EH' => 'Western Sahara',
    'YE' => 'Yemen',
    'ZM' => 'Zambia',
    'ZW' => 'Zimbabwe'
);

foreach ($countries as $country) {
    if(substr($country, 0, 1) === 'C'){
        print "$country <br>";
    }
}

?>