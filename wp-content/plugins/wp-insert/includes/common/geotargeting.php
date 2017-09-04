<?php
$wpInsertGeoLocation = false;
/* Begin Generate Country List */
function wp_insert_get_countries() {
	$data = array(
		array('value' => 'AD', 'text' => 'Andorra'),
		array('value' => 'AE', 'text' => 'United Arab Emirates'),
		array('value' => 'AF', 'text' => 'Afghanistan'),
		array('value' => 'AG', 'text' => 'Antigua and Barbuda'),
		array('value' => 'AI', 'text' => 'Anguilla'),
		array('value' => 'AL', 'text' => 'Albania'),
		array('value' => 'AM', 'text' => 'Armenia'),
		array('value' => 'AN', 'text' => 'Netherlands Antilles'),
		array('value' => 'AO', 'text' => 'Angola'),
		array('value' => 'AQ', 'text' => 'Antarctica'),
		array('value' => 'AR', 'text' => 'Argentina'),
		array('value' => 'AS', 'text' => 'American Samoa'),
		array('value' => 'AT', 'text' => 'Austria'),
		array('value' => 'AU', 'text' => 'Australia'),
		array('value' => 'AW', 'text' => 'Aruba'),
		array('value' => 'AZ', 'text' => 'Azerbaijan'),
		array('value' => 'BA', 'text' => 'Bosnia and Herzegovina'),
		array('value' => 'BB', 'text' => 'Barbados'),
		array('value' => 'BD', 'text' => 'Bangladesh'),
		array('value' => 'BE', 'text' => 'Belgium'),
		array('value' => 'BF', 'text' => 'Burkina Faso'),
		array('value' => 'BG', 'text' => 'Bulgaria'),
		array('value' => 'BH', 'text' => 'Bahrain'),
		array('value' => 'BI', 'text' => 'Burundi'),
		array('value' => 'BJ', 'text' => 'Benin'),
		array('value' => 'BM', 'text' => 'Bermuda'),
		array('value' => 'BN', 'text' => 'Brunei Darussalam'),
		array('value' => 'BO', 'text' => 'Bolivia'),
		array('value' => 'BR', 'text' => 'Brazil'),
		array('value' => 'BS', 'text' => 'Bahamas'),
		array('value' => 'BT', 'text' => 'Bhutan'),
		array('value' => 'BV', 'text' => 'Bouvet Island'),
		array('value' => 'BW', 'text' => 'Botswana'),
		array('value' => 'BY', 'text' => 'Belarus'),
		array('value' => 'BZ', 'text' => 'Belize'),
		array('value' => 'CA', 'text' => 'Canada'),
		array('value' => 'CC', 'text' => 'Cocos (Keeling) Islands'),
		array('value' => 'CD', 'text' => 'The Democratic Republic of the Congo'),
		array('value' => 'CF', 'text' => 'Central African Republic'),
		array('value' => 'CG', 'text' => 'Congo'),
		array('value' => 'CH', 'text' => 'Switzerland'),
		array('value' => 'CI', 'text' => 'Cote D\'Ivoire'),
		array('value' => 'CK', 'text' => 'Cook Islands'),
		array('value' => 'CL', 'text' => 'Chile'),
		array('value' => 'CM', 'text' => 'Cameroon'),
		array('value' => 'CN', 'text' => 'China'),
		array('value' => 'CO', 'text' => 'Colombia'),
		array('value' => 'CR', 'text' => 'Costa Rica'),
		array('value' => 'CU', 'text' => 'Cuba'),
		array('value' => 'CV', 'text' => 'Cape Verde'),
		array('value' => 'CX', 'text' => 'Christmas Island'),
		array('value' => 'CY', 'text' => 'Cyprus'),
		array('value' => 'CZ', 'text' => 'Czech Republic'),
		array('value' => 'DE', 'text' => 'Germany'),
		array('value' => 'DJ', 'text' => 'Djibouti'),
		array('value' => 'DK', 'text' => 'Denmark'),
		array('value' => 'DM', 'text' => 'Dominica'),
		array('value' => 'DO', 'text' => 'Dominican Republic'),
		array('value' => 'DZ', 'text' => 'Algeria'),
		array('value' => 'EC', 'text' => 'Ecuador'),
		array('value' => 'EE', 'text' => 'Estonia'),
		array('value' => 'EG', 'text' => 'Egypt'),
		array('value' => 'EH', 'text' => 'Western Sahara'),
		array('value' => 'ER', 'text' => 'Eritrea'),
		array('value' => 'ES', 'text' => 'Spain'),
		array('value' => 'ET', 'text' => 'Ethiopia'),
		array('value' => 'FI', 'text' => 'Finland'),
		array('value' => 'FJ', 'text' => 'Fiji'),
		array('value' => 'FK', 'text' => 'Falkland Islands (Malvinas)'),
		array('value' => 'FM', 'text' => 'Federated States of Micronesia'),
		array('value' => 'FO', 'text' => 'Faroe Islands'),
		array('value' => 'FR', 'text' => 'France'),
		array('value' => 'FX', 'text' => 'France Metropolitan'),
		array('value' => 'GA', 'text' => 'Gabon'),
		array('value' => 'GB', 'text' => 'United Kingdom'),
		array('value' => 'GD', 'text' => 'Grenada'),
		array('value' => 'GE', 'text' => 'Georgia'),
		array('value' => 'GF', 'text' => 'French Guiana'),
		array('value' => 'GH', 'text' => 'Ghana'),
		array('value' => 'GI', 'text' => 'Gibraltar'),
		array('value' => 'GL', 'text' => 'Greenland'),
		array('value' => 'GM', 'text' => 'Gambia'),
		array('value' => 'GN', 'text' => 'Guinea'),
		array('value' => 'GP', 'text' => 'Guadeloupe'),
		array('value' => 'GQ', 'text' => 'Equatorial Guinea'),
		array('value' => 'GR', 'text' => 'Greece'),
		array('value' => 'GS', 'text' => 'South Georgia and the South Sandwich Islands'),
		array('value' => 'GT', 'text' => 'Guatemala'),
		array('value' => 'GU', 'text' => 'Guam'),
		array('value' => 'GW', 'text' => 'Guinea-Bissau'),
		array('value' => 'GY', 'text' => 'Guyana'),
		array('value' => 'HK', 'text' => 'Hong Kong'),
		array('value' => 'HM', 'text' => 'Heard Island and McDonald Islands'),
		array('value' => 'HN', 'text' => 'Honduras'),
		array('value' => 'HR', 'text' => 'Croatia'),
		array('value' => 'HT', 'text' => 'Haiti'),
		array('value' => 'HU', 'text' => 'Hungary'),
		array('value' => 'ID', 'text' => 'Indonesia'),
		array('value' => 'IE', 'text' => 'Ireland'),
		array('value' => 'IL', 'text' => 'Israel'),
		array('value' => 'IN', 'text' => 'India'),
		array('value' => 'IO', 'text' => 'British Indian Ocean Territory'),
		array('value' => 'IQ', 'text' => 'Iraq'),
		array('value' => 'IR', 'text' => 'Islamic Republic of Iran'),
		array('value' => 'IS', 'text' => 'Iceland'),
		array('value' => 'IT', 'text' => 'Italy'),
		array('value' => 'JM', 'text' => 'Jamaica'),
		array('value' => 'JO', 'text' => 'Jordan'),
		array('value' => 'JP', 'text' => 'Japan'),
		array('value' => 'KE', 'text' => 'Kenya'),
		array('value' => 'KG', 'text' => 'Kyrgyzstan'),
		array('value' => 'KH', 'text' => 'Cambodia'),
		array('value' => 'KI', 'text' => 'Kiribati'),
		array('value' => 'KM', 'text' => 'Comoros'),
		array('value' => 'KN', 'text' => 'Saint Kitts and Nevis'),
		array('value' => 'KP', 'text' => 'Democratic People\'s Republic of Korea'),
		array('value' => 'KR', 'text' => 'Republic of Korea'),
		array('value' => 'KW', 'text' => 'Kuwait'),
		array('value' => 'KY', 'text' => 'Cayman Islands'),
		array('value' => 'KZ', 'text' => 'Kazakhstan'),
		array('value' => 'LA', 'text' => 'Lao People\'s Democratic Republic'),
		array('value' => 'LB', 'text' => 'Lebanon'),
		array('value' => 'LC', 'text' => 'Saint Lucia'),
		array('value' => 'LI', 'text' => 'Liechtenstein'),
		array('value' => 'LK', 'text' => 'Sri Lanka'),
		array('value' => 'LR', 'text' => 'Liberia'),
		array('value' => 'LS', 'text' => 'Lesotho'),
		array('value' => 'LT', 'text' => 'Lithuania'),
		array('value' => 'LU', 'text' => 'Luxembourg'),
		array('value' => 'LV', 'text' => 'Latvia'),
		array('value' => 'LY', 'text' => 'Libyan Arab Jamahiriya'),
		array('value' => 'MA', 'text' => 'Morocco'),
		array('value' => 'MC', 'text' => 'Monaco'),
		array('value' => 'MD', 'text' => 'Republic of Moldova'),
		array('value' => 'MG', 'text' => 'Madagascar'),
		array('value' => 'MH', 'text' => 'Marshall Islands'),
		array('value' => 'MK', 'text' => 'Macedonia'),
		array('value' => 'ML', 'text' => 'Mali'),
		array('value' => 'MM', 'text' => 'Myanmar'),
		array('value' => 'MN', 'text' => 'Mongolia'),
		array('value' => 'MO', 'text' => 'Macau'),
		array('value' => 'MP', 'text' => 'Northern Mariana Islands'),
		array('value' => 'MQ', 'text' => 'Martinique'),
		array('value' => 'MR', 'text' => 'Mauritania'),
		array('value' => 'MS', 'text' => 'Montserrat'),
		array('value' => 'MT', 'text' => 'Malta'),
		array('value' => 'MU', 'text' => 'Mauritius'),
		array('value' => 'MV', 'text' => 'Maldives'),
		array('value' => 'MW', 'text' => 'Malawi'),
		array('value' => 'MX', 'text' => 'Mexico'),
		array('value' => 'MY', 'text' => 'Malaysia'),
		array('value' => 'MZ', 'text' => 'Mozambique'),
		array('value' => 'NA', 'text' => 'Namibia'),
		array('value' => 'NC', 'text' => 'New Caledonia'),
		array('value' => 'NE', 'text' => 'Niger'),
		array('value' => 'NF', 'text' => 'Norfolk Island'),
		array('value' => 'NG', 'text' => 'Nigeria'),
		array('value' => 'NI', 'text' => 'Nicaragua'),
		array('value' => 'NL', 'text' => 'Netherlands'),
		array('value' => 'NO', 'text' => 'Norway'),
		array('value' => 'NP', 'text' => 'Nepal'),
		array('value' => 'NR', 'text' => 'Nauru'),
		array('value' => 'NU', 'text' => 'Niue'),
		array('value' => 'NZ', 'text' => 'New Zealand'),
		array('value' => 'OM', 'text' => 'Oman'),
		array('value' => 'PA', 'text' => 'Panama'),
		array('value' => 'PE', 'text' => 'Peru'),
		array('value' => 'PF', 'text' => 'French Polynesia'),
		array('value' => 'PG', 'text' => 'Papua New Guinea'),
		array('value' => 'PH', 'text' => 'Philippines'),
		array('value' => 'PK', 'text' => 'Pakistan'),
		array('value' => 'PL', 'text' => 'Poland'),
		array('value' => 'PM', 'text' => 'Saint Pierre and Miquelon'),
		array('value' => 'PN', 'text' => 'Pitcairn Islands'),
		array('value' => 'PR', 'text' => 'Puerto Rico'),
		array('value' => 'PS', 'text' => 'Palestinian Territory'),
		array('value' => 'PT', 'text' => 'Portugal'),
		array('value' => 'PW', 'text' => 'Palau'),
		array('value' => 'PY', 'text' => 'Paraguay'),
		array('value' => 'QA', 'text' => 'Qatar'),
		array('value' => 'RE', 'text' => 'Reunion'),
		array('value' => 'RO', 'text' => 'Romania'),
		array('value' => 'RU', 'text' => 'Russian Federation'),
		array('value' => 'RW', 'text' => 'Rwanda'),
		array('value' => 'SA', 'text' => 'Saudi Arabia'),
		array('value' => 'SB', 'text' => 'Solomon Islands'),
		array('value' => 'SC', 'text' => 'Seychelles'),
		array('value' => 'SD', 'text' => 'Sudan'),
		array('value' => 'SE', 'text' => 'Sweden'),
		array('value' => 'SG', 'text' => 'Singapore'),
		array('value' => 'SH', 'text' => 'Saint Helena'),
		array('value' => 'SI', 'text' => 'Slovenia'),
		array('value' => 'SJ', 'text' => 'Svalbard and Jan Mayen'),
		array('value' => 'SK', 'text' => 'Slovakia'),
		array('value' => 'SL', 'text' => 'Sierra Leone'),
		array('value' => 'SM', 'text' => 'San Marino'),
		array('value' => 'SN', 'text' => 'Senegal'),
		array('value' => 'SO', 'text' => 'Somalia'),
		array('value' => 'SR', 'text' => 'Suriname'),
		array('value' => 'ST', 'text' => 'Sao Tome and Principe'),
		array('value' => 'SV', 'text' => 'El Salvador'),
		array('value' => 'SY', 'text' => 'Syrian Arab Republic'),
		array('value' => 'SZ', 'text' => 'Swaziland'),
		array('value' => 'TC', 'text' => 'Turks and Caicos Islands'),
		array('value' => 'TD', 'text' => 'Chad'),
		array('value' => 'TF', 'text' => 'French Southern Territories'),
		array('value' => 'TG', 'text' => 'Togo'),
		array('value' => 'TH', 'text' => 'Thailand'),
		array('value' => 'TJ', 'text' => 'Tajikistan'),
		array('value' => 'TK', 'text' => 'Tokelau'),
		array('value' => 'TM', 'text' => 'Turkmenistan'),
		array('value' => 'TN', 'text' => 'Tunisia'),
		array('value' => 'TO', 'text' => 'Tonga'),
		array('value' => 'TL', 'text' => 'Timor-Leste'),
		array('value' => 'TR', 'text' => 'Turkey'),
		array('value' => 'TT', 'text' => 'Trinidad and Tobago'),
		array('value' => 'TV', 'text' => 'Tuvalu'),
		array('value' => 'TW', 'text' => 'Taiwan'),
		array('value' => 'TZ', 'text' => 'United Republic of Tanzania'),
		array('value' => 'UA', 'text' => 'Ukraine'),
		array('value' => 'UG', 'text' => 'Uganda'),
		array('value' => 'UM', 'text' => 'United States Minor Outlying Islands'),
		array('value' => 'US', 'text' => 'United States'),
		array('value' => 'UY', 'text' => 'Uruguay'),
		array('value' => 'UZ', 'text' => 'Uzbekistan'),
		array('value' => 'VA', 'text' => 'Holy See (Vatican City State)'),
		array('value' => 'VC', 'text' => 'Saint Vincent and the Grenadines'),
		array('value' => 'VE', 'text' => 'Venezuela'),
		array('value' => 'VG', 'text' => 'British Virgin Islands'),
		array('value' => 'VI', 'text' => 'U.S. Virgin Islands'),
		array('value' => 'VN', 'text' => 'Vietnam'),
		array('value' => 'VU', 'text' => 'Vanuatu'),
		array('value' => 'WF', 'text' => 'Wallis and Futuna'),
		array('value' => 'WS', 'text' => 'Samoa'),
		array('value' => 'YE', 'text' => 'Yemen'),
		array('value' => 'YT', 'text' => 'Mayotte'),
		array('value' => 'RS', 'text' => 'Serbia'),
		array('value' => 'ZA', 'text' => 'South Africa'),
		array('value' => 'ZM', 'text' => 'Zambia'),
		array('value' => 'ME', 'text' => 'Montenegro'),
		array('value' => 'ZW', 'text' => 'Zimbabwe'),
		array('value' => 'A1', 'text' => 'Anonymous Proxy'),
		array('value' => 'A2', 'text' => 'Satellite Provider'),
		array('value' => 'O1', 'text' => 'Other'),
		array('value' => 'AX', 'text' => 'Aland Islands'),
		array('value' => 'GG', 'text' => 'Guernsey'),
		array('value' => 'IM', 'text' => 'Isle of Man'),
		array('value' => 'JE', 'text' => 'Jersey'),
		array('value' => 'BL', 'text' => 'Saint Barthelemy'),
		array('value' => 'MF', 'text' => 'Saint Martin')
	);
	return $data;
}
/* End Generate Country List */

/* Begin Get Geo Targeted Ad Code */
function wp_insert_get_geotargeted_adcode($adOptions) {
	global $wpInsertGeoLocation;
	global $wpInsertABTestingMode;
	if(($wpInsertGeoLocation != false) && ($wpInsertGeoLocation != '') && (is_array($adOptions['geo_group1_countries']) || is_array($adOptions['geo_group2_countries']))) {
		if(($adOptions['geo_group1_adcode'] != '') && in_array($wpInsertGeoLocation, $adOptions['geo_group1_countries'])) {
			return do_shortcode(stripslashes($adOptions['geo_group1_adcode']));
		}
		if(($adOptions['geo_group2_adcode'] != '') && in_array($wpInsertGeoLocation, $adOptions['geo_group2_countries'])) {
			return do_shortcode(stripslashes($adOptions['geo_group2_adcode']));
		}
	}
	switch($wpInsertABTestingMode) {
		case 1:
			return do_shortcode(stripslashes($adOptions['primary_ad_code']));
		case 2:
			return do_shortcode(stripslashes($adOptions['secondary_ad_code']));
		case 3:
			return do_shortcode(stripslashes($adOptions['tertiary_ad_code']));
		default:
			return do_shortcode(stripslashes($adOptions['primary_ad_code']));
	}
}

//add_action('init', 'wp_insert_ip_to_country');
function wp_insert_ip_to_country() {
	global $wpInsertGeoLocation;
	$userIp = $_SERVER["REMOTE_ADDR"];
	if($wpInsertGeoLocation != false) {
		return $wpInsertGeoLocation;
	} else {
		$countryCode = get_transient('wp_insert_ip_'.$userIp);
		if($countryCode === false) {
			$response = wp_remote_get('http://api.hostip.info/country.php?ip='.$userIp, array('timeout' => 5));
			if(!is_wp_error($response) && isset($response['response']['code']) && ($response['response']['code'] == 200) && isset($response['body']) && ($response['body'] != '') && ($response['body'] != 'XX')) {
				$wpInsertGeoLocation = $response['body'];
				set_transient('wp_insert_ip_'.$userIp, $wpInsertGeoLocation, WEEK_IN_SECONDS);				
			}
		} else {
			$wpInsertGeoLocation = $countryCode;
		}
	}
}
/* End Get Geo Targeted Ad Code */
?>