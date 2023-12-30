<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

   
 
class CountrySeeder extends Seeder
{

    
   
    public function run(): void
    {

        // Create countries for Africa
        $AfricanCountries = [
            'Algeria', 'Angola', 'Benin', 'Botswana', 'Burkina Faso', 'Burundi', 'Cabo Verde', 'Cameroon', 'Central African Republic', 'Chad', 'Comoros', 'Congo (Congo-Brazzaville)', 'Democratic Republic of the Congo (Congo-Kinshasa)', 'Djibouti', 'Egypt', 'Equatorial Guinea', 'Eritrea', 'Eswatini', 'Ethiopia', 'Gabon', 'Gambia', 'Ghana', 'Guinea', 'Guinea-Bissau', 'Ivory Coast', 'Kenya', 'Lesotho', 'Liberia', 'Libya', 'Madagascar', 'Malawi', 'Mali', 'Mauritania', 'Mauritius', 'Morocco', 'Mozambique', 'Namibia', 'Niger', 'Nigeria', 'Rwanda', 'Sao Tome and Principe', 'Senegal', 'Seychelles', 'Sierra Leone', 'Somalia', 'South Africa', 'South Sudan', 'Sudan', 'Tanzania', 'Togo', 'Tunisia', 'Uganda', 'Zambia', 'Zimbabwe'
        ];

        $continentId1 = 1; // Assuming the continent_id for Africa is 1

        foreach ($AfricanCountries as  $AfricanCountry) {
            Country::create([
                'name' => $AfricanCountry,
                'continent_id' => $continentId1, // Africa
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        // Create Countries for Asia
        $AsianCountries = [
            'Afghanistan', 'Armenia', 'Azerbaijan', 'Bahrain', 'Bangladesh', 'Bhutan', 'Brunei', 'Cambodia', 'China', 'Cyprus', 'Georgia', 'India', 'Indonesia', 'Iran', 'Iraq', 'Israel', 'Japan', 'Jordan', 'Kazakhstan', 'Kuwait', 'Kyrgyzstan', 'Laos', 'Lebanon', 'Malaysia', 'Maldives', 'Mongolia', 'Myanmar (Burma)', 'Nepal', 'North Korea', 'Oman', 'Pakistan', 'Palestine', 'Philippines', 'Qatar', 'Saudi Arabia', 'Singapore', 'South Korea', 'Sri Lanka', 'Syria', 'Taiwan', 'Tajikistan', 'Thailand', 'Timor-Leste', 'Turkey', 'Turkmenistan', 'United Arab Emirates', 'Uzbekistan', 'Vietnam', 'Yemen'
        ];
    
        $continentId2 = 2; // Assuming the continent_id for Asia is 2

        foreach ($AsianCountries as  $AsianCountry) {
            Country::create([
                'name' => $AsianCountry,
                'continent_id' => $continentId2, // Asia
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }


          // Create Countries for Australia/ oceania
          $AustralianCountries = [
            // Australia is a country and a continent, and it doesn't have multiple countries within it. However, the region commonly referred to as "Oceania" includes several countries and territories. 
            //Here is a list of countries in the broader Oceania region:
            'Australia', 'Fiji', 'Kiribati', 'Marshall Islands', 'Micronesia', 'Nauru', 'New Zealand', 'Palau', 'Papua New Guinea', 'Samoa', 'Solomon Islands', 'Tonga', 'Tuvalu', 'Vanuatu'
           
           ];  
          
        $continentId3 = 3; // Assuming the continent_id for Australia is 3

        foreach ($AustralianCountries as  $AustralianCountry) {
            Country::create([
                'name' => $AustralianCountry,
                'continent_id' => $continentId3, // Australia
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }


        // Create Countries for Europe
        $EuropeanCountries = [
            'Albania', 'Andorra', 'Armenia', 'Austria', 'Azerbaijan', 'Belarus', 'Belgium', 'Bosnia and Herzegovina', 'Bulgaria', 'Croatia', 'Cyprus', 'Czech Republic', 'Denmark', 'Estonia', 'Finland', 'France', 'Georgia', 'Germany', 'Greece', 'Hungary', 'Iceland', 'Ireland', 'Italy', 'Kazakhstan', 'Kosovo', 'Latvia', 'Liechtenstein', 'Lithuania', 'Luxembourg', 'Malta', 'Moldova', 'Monaco', 'Montenegro', 'Netherlands', 'North Macedonia', 'Norway', 'Poland', 'Portugal', 'Romania', 'Russia', 'San Marino', 'Serbia', 'Slovakia', 'Slovenia', 'Spain', 'Sweden', 'Switzerland', 'Turkey', 'Ukraine', 'United Kingdom', 'Vatican City'
        ];
       $continentId4 = 4; // Assuming the continent_id for Europe is 5

        foreach ($EuropeanCountries as  $EuropeanCountry) {
            Country::create([
                'name' => $EuropeanCountry,
                'continent_id' => $continentId4, // Europe
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

      
      // Create Countries for North American 
      $NorthAmericanCountries = [
        'Antigua and Barbuda', 'Bahamas', 'Barbados', 'Belize', 'Canada', 'Costa Rica', 'Cuba', 'Dominica', 'Dominican Republic', 'El Salvador', 'Grenada', 'Guatemala', 'Haiti', 'Honduras', 'Jamaica', 'Mexico', 'Nicaragua', 'Panama', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Vincent and the Grenadines', 'Trinidad and Tobago', 'United States of America', 'Greenland'
    ];
    $continentId5 = 5; // Assuming the continent_id for North America is 3

    foreach ($NorthAmericanCountries as  $NorthAmericanCountry) {
        Country::create([
            'name' => $NorthAmericanCountry,
            'continent_id' => $continentId5, // North America
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

    // Create Countries for South American
    $SouthAmericanCountries = [
        'Argentina', 'Bolivia', 'Brazil', 'Chile', 'Colombia', 'Ecuador', 'Guyana', 'Paraguay', 'Peru', 'Suriname', 'Uruguay', 'Venezuela', 'French Guiana'
    ];

    $continentId6 = 6; // Assuming the continent_id for South America is 4
    
    foreach ($SouthAmericanCountries as  $SouthAmericanCountry) {
        Country::create([
            'name' => $SouthAmericanCountry,
            'continent_id' => $continentId6, // South America
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }


        // Create Countries for Antarctica  

    $AntarcticaCountries = [
        'Antarctica'
        /**  
         * Antarctica is a unique continent with no recognized countries. It is governed by the Antarctic Treaty System, an international treaty that establishes Antarctica as a scientific preserve and bans military activity on the continent. The treaty has been signed by multiple countries, and its aim is to ensure the freedom of scientific investigation and to promote international cooperation in Antarctica.
         * Therefore, Antarctica is not divided into separate countries, and its governance is based on international agreements for scientific research and environmental protection.
         * 
        */
    ];

   $continentId7 = 7; // Assuming the continent_id for Antarctica is 7

    foreach ($AntarcticaCountries as  $AntarcticaCountry) {
        Country::create([
            'name' => $AntarcticaCountry,
            'continent_id' => $continentId7, // Antarctica
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
        


             
       
    }
}
