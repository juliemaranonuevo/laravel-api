<?php

use Illuminate\Database\Seeder;
use App\Province;
use App\Town;
use App\Barangay;
use Illuminate\Support\Facades\DB;

class PBTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ptbs = array(
            //Start of CALABARZON
            array(
                'province_name' => 'Laguna',
                array ( 
                    'town_name' => 'Alaminos',
                    array ( 
                        'barangay_name' => 'Del Carmen',
                    ),
                    array ( 
                        'barangay_name' => 'Palma',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion II',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion III',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres',
                    ),
                    array ( 
                        'barangay_name' => 'San Benito (Palita)',
                    ),
                    array ( 
                        'barangay_name' => 'San Gregorio',
                    ),
                    array ( 
                        'barangay_name' => 'San Ildefonso',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Rosa',
                    ),
                ),
                array ( 
                    'town_name' => 'Bay',
                    array ( 
                        'barangay_name' => 'Bitin',
                    ),
                    array ( 
                        'barangay_name' => 'Calo',
                    ),
                    array ( 
                        'barangay_name' => 'Dila',
                    ),
                    array ( 
                        'barangay_name' => 'Maitim',
                    ),
                    array ( 
                        'barangay_name' => 'Masaya',
                    ),
                    array ( 
                        'barangay_name' => 'Paciano Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Puypuy',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cruz',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Domingo',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin',
                    ),
                    array ( 
                        'barangay_name' => 'San Nicolas ',
                    ),
                    array ( 
                        'barangay_name' => 'Tagumpay',
                    ),
                    array ( 
                        'barangay_name' => 'Tranca',
                    ),
                ),
                array ( 
                    'town_name' => 'Los Baños',
                    array ( 
                        'barangay_name' => 'Anos',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Bambang',
                    ),
                    array ( 
                        'barangay_name' => 'Batong Malake',
                    ),
                    array ( 
                        'barangay_name' => 'Baybayin',
                    ),
                    array ( 
                        'barangay_name' => 'Bayog',
                    ),
                    array ( 
                        'barangay_name' => 'Lalakay',
                    ),
                    array ( 
                        'barangay_name' => 'Maahas',
                    ),
                    array ( 
                        'barangay_name' => 'Malinta',
                    ),
                    array ( 
                        'barangay_name' => 'Mayondon',
                    ),
                    array ( 
                        'barangay_name' => 'Tuntungin-Putho',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'Tadlac',
                    ),
                    array ( 
                        'barangay_name' => 'Timugan ',
                    ),
                ),
                array ( 
                    'town_name' => 'Lumban',
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Balimbingan',
                    ),
                    array ( 
                        'barangay_name' => 'Balubad',
                    ),
                    array ( 
                        'barangay_name' => 'Caliraya',
                    ),
                    array ( 
                        'barangay_name' => 'Concepcion',
                    ),
                    array ( 
                        'barangay_name' => 'Lewin',
                    ),
                    array ( 
                        'barangay_name' => 'Maracta',
                    ),
                    array ( 
                        'barangay_name' => 'Maytalang I',
                    ),
                    array ( 
                        'barangay_name' => 'Maytalang II',
                    ),
                    array ( 
                        'barangay_name' => 'Primera Parang',
                    ),
                    array ( 
                        'barangay_name' => 'Primera Pulo',
                    ),
                    array ( 
                        'barangay_name' => 'Salac',
                    ),
                    array ( 
                        'barangay_name' => 'Segunda Parang',
                    ),
                    array ( 
                        'barangay_name' => 'Segunda Pulo',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'Wawa',
                    ),
                ),
                array ( 
                    'town_name' => 'Biñan',
                    array ( 
                        'barangay_name' => 'Biñan',
                    ),
                    array ( 
                        'barangay_name' => 'Bungahan',
                    ),
                    array ( 
                        'barangay_name' => 'Canlalay',
                    ),
                    array ( 
                        'barangay_name' => 'Casile',
                    ),
                    array ( 
                        'barangay_name' => 'De La Paz',
                    ),
                    array ( 
                        'barangay_name' => 'Ganado',
                    ),
                    array ( 
                        'barangay_name' => 'Langkiwa',
                    ),
                    array ( 
                        'barangay_name' => 'Loma',
                    ),
                    array ( 
                        'barangay_name' => 'Malaban',
                    ),
                    array ( 
                        'barangay_name' => 'Malamig',
                    ),
                    array ( 
                        'barangay_name' => 'Mamplasan',
                    ),
                    array ( 
                        'barangay_name' => 'Platero',
                    ),
                    array ( 
                        'barangay_name' => 'Bungahan',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Domingo',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Tomas',
                    ),
                    array ( 
                        'barangay_name' => 'Timbao',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Tomas',
                    ),
                    array ( 
                        'barangay_name' => 'Tubigan',
                    ),
                    array ( 
                        'barangay_name' => 'Zapote',
                    ),   
                ),
                array ( 
                    'town_name' => 'Cabuyao',
                    array ( 
                        'barangay_name' => 'Baclaran',
                    ),
                    array ( 
                        'barangay_name' => 'Banaybanay',
                    ),
                    array ( 
                        'barangay_name' => 'Banlic',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Dos (Poblacion)',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Tres (Poblacion)',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Uno (Poblacion)',
                    ),
                    array ( 
                        'barangay_name' => 'Bigaa',
                    ),
                    array ( 
                        'barangay_name' => 'Butong',
                    ),
                    array ( 
                        'barangay_name' => 'Casile',
                    ),
                    array ( 
                        'barangay_name' => 'Diezmo',
                    ),
                    array ( 
                        'barangay_name' => 'Gulod',
                    ),
                    array ( 
                        'barangay_name' => 'Mamatid',
                    ),
                    array ( 
                        'barangay_name' => 'Marinig',
                    ),
                    array ( 
                        'barangay_name' => 'Niugan',
                    ),
                    array ( 
                        'barangay_name' => 'Pittland',
                    ),
                    array ( 
                        'barangay_name' => 'Pulo',
                    ),
                    array ( 
                        'barangay_name' => 'Sala',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                ),
                array ( 
                    'town_name' => 'Calamba',
                    array ( 
                        'barangay_name' => 'Bagong Kalsada',
                    ),
                    array ( 
                        'barangay_name' => 'Banadero',
                    ),
                    array ( 
                        'barangay_name' => 'Banlic',
                    ),
                    array ( 
                        'barangay_name' => 'Barandal',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Batino',
                    ),
                    array ( 
                        'barangay_name' => 'Bubuyan',
                    ),
                    array ( 
                        'barangay_name' => 'Bucal',
                    ),
                    array ( 
                        'barangay_name' => 'Bunggo',
                    ),
                    array ( 
                        'barangay_name' => 'Burol',
                    ),
                    array ( 
                        'barangay_name' => 'Camaligan',
                    ),
                    array ( 
                        'barangay_name' => 'Canlubang',
                    ),
                    array ( 
                        'barangay_name' => 'Halang',
                    ),
                    array ( 
                        'barangay_name' => 'Hornalan',
                    ),
                    array ( 
                        'barangay_name' => 'Kay-Anlog',
                    ),
                    array ( 
                        'barangay_name' => 'La Mesa',
                    ),
                    array ( 
                        'barangay_name' => 'Laguerta',
                    ),
                    array ( 
                        'barangay_name' => 'Lawa',
                    ),
                    array ( 
                        'barangay_name' => 'Lecheria',
                    ),
                    array ( 
                        'barangay_name' => 'Lingga',
                    ),
                    array ( 
                        'barangay_name' => 'Looc',
                    ),
                    array ( 
                        'barangay_name' => 'Mabato',
                    ),
                    array ( 
                        'barangay_name' => 'Majada Labas',
                    ),
                    array ( 
                        'barangay_name' => 'Makiling',
                    ),
                    array ( 
                        'barangay_name' => 'Majada Labas',
                    ),
                    array ( 
                        'barangay_name' => 'Mapagong',
                    ),
                    array ( 
                        'barangay_name' => 'Masili',
                    ),
                    array ( 
                        'barangay_name' => 'Maunong',
                    ),
                    array ( 
                        'barangay_name' => 'Mayapa',
                    ),
                    array ( 
                        'barangay_name' => 'Milagrosa',
                    ),
                    array ( 
                        'barangay_name' => 'Paciano Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Palingon',
                    ),
                    array ( 
                        'barangay_name' => 'Palo-Alto',
                    ),
                    array ( 
                        'barangay_name' => 'Pansol',
                    ),
                    array ( 
                        'barangay_name' => 'Palingon',
                    ),
                    array ( 
                        'barangay_name' => 'Parian',
                    ),
                    array ( 
                        'barangay_name' => 'Prinza',
                    ),
                    array ( 
                        'barangay_name' => 'Punta',
                    ),
                    array ( 
                        'barangay_name' => 'Puting Lupa',
                    ),
                    array ( 
                        'barangay_name' => 'Real',
                    ),
                    array ( 
                        'barangay_name' => 'Saimsim',
                    ),
                    array ( 
                        'barangay_name' => 'Sampiruhan',
                    ),
                    array ( 
                        'barangay_name' => 'San Cristobal',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'Sirang Lupa',
                    ),
                    array ( 
                        'barangay_name' => 'Sucol',
                    ),
                    array ( 
                        'barangay_name' => 'Turbina',
                    ),
                    array ( 
                        'barangay_name' => 'Ulango',
                    ),
                    array ( 
                        'barangay_name' => 'Uwisan',
                    ),
                ),
                array ( 
                    'town_name' => 'Calauan',
                    array ( 
                        'barangay_name' => 'Bangyas',
                    ),
                    array ( 
                        'barangay_name' => 'Dayap',
                    ),
                    array ( 
                        'barangay_name' => 'Hanggan',
                    ),
                    array ( 
                        'barangay_name' => 'Imok',
                    ),
                    array ( 
                        'barangay_name' => 'Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Lumot 1',
                    ),
                    array ( 
                        'barangay_name' => 'Lumot 2',
                    ),
                    array ( 
                        'barangay_name' => 'Limao',
                    ),
                    array ( 
                        'barangay_name' => 'Mabacan',
                    ),
                    array ( 
                        'barangay_name' => 'Masiit',
                    ),
                    array ( 
                        'barangay_name' => 'Paliparan',
                    ),
                    array ( 
                        'barangay_name' => 'Perez',
                    ),
                    array ( 
                        'barangay_name' => 'Prinza',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro ',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Tomas',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan',
                    ),
                ),
                array ( 
                    'town_name' => 'Cavinti',
                    array ( 
                        'barangay_name' => 'Anglas',
                    ),
                    array ( 
                        'barangay_name' => 'Bangco',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Bulajo',
                    ),
                    array ( 
                        'barangay_name' => 'Cansuso',
                    ),
                    array ( 
                        'barangay_name' => 'Duhat',
                    ),
                    array ( 
                        'barangay_name' => 'Inao-Awan',
                    ),
                    array ( 
                        'barangay_name' => 'Kanluran Talaongan',
                    ),
                    array ( 
                        'barangay_name' => 'Labayo',
                    ),
                    array ( 
                        'barangay_name' => 'Labasin',
                    ),
                    array ( 
                        'barangay_name' => 'Layug',
                    ),
                    array ( 
                        'barangay_name' => 'Mahipon',
                    ),
                    array ( 
                        'barangay_name' => 'Paowin',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan Talaongan',
                    ),
                    array ( 
                        'barangay_name' => 'Sisilmin',
                    ),
                    array ( 
                        'barangay_name' => 'Sumucab',
                    ),
                    array ( 
                        'barangay_name' => 'Tibatib',
                    ),
                    array ( 
                        'barangay_name' => 'Udia',
                    ),
                ),
                array ( 
                    'town_name' => 'Famy',
                    array ( 
                        'barangay_name' => 'Asana',
                    ),
                    array ( 
                        'barangay_name' => 'Bacong-Sigsigan',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Pag-asa',
                    ),
                    array ( 
                        'barangay_name' => 'Balitoc',
                    ),
                    array ( 
                        'barangay_name' => 'Banaba',
                    ),
                    array ( 
                        'barangay_name' => 'Batuhan',
                    ),
                    array ( 
                        'barangay_name' => 'Bulihan',
                    ),
                    array ( 
                        'barangay_name' => 'Caballero',
                    ),
                    array ( 
                        'barangay_name' => 'Calumpang',
                    ),
                    array ( 
                        'barangay_name' => 'Cuebang Bato',
                    ),
                    array ( 
                        'barangay_name' => 'Damayan',
                    ),
                    array ( 
                        'barangay_name' => 'Kapatalan',
                    ),
                    array ( 
                        'barangay_name' => 'Kataypuanan',
                    ),
                    array ( 
                        'barangay_name' => 'Liyang',
                    ),
                    array ( 
                        'barangay_name' => 'Maate',
                    ),
                    array ( 
                        'barangay_name' => 'Magdalo',
                    ),
                    array ( 
                        'barangay_name' => 'Mayatba',
                    ),
                    array ( 
                        'barangay_name' => 'Minayutan',
                    ),
                    array ( 
                        'barangay_name' => 'Salangbato',
                    ),
                    array ( 
                        'barangay_name' => 'Tunhac',
                    ),
                ),
				array ( 
                    'town_name' => 'Kalayaan',
                    array ( 
                        'barangay_name' => 'Longos',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
				),
				array ( 
                    'town_name' => 'Liliw',
                    array ( 
                        'barangay_name' => 'Bagong Anyo',
                    ),
                    array ( 
                        'barangay_name' => 'Bayate',
                    ),
                    array ( 
                        'barangay_name' => 'Bongkol',
                    ),
                    array ( 
                        'barangay_name' => 'Bubukal',
                    ),
                    array ( 
                        'barangay_name' => 'Cabuyao',
                    ),
                    array ( 
                        'barangay_name' => 'Calumpang',
                    ),
                    array ( 
                        'barangay_name' => 'Culoy',
                    ),
                    array ( 
                        'barangay_name' => 'Dagatan',
                    ),
                    array ( 
                        'barangay_name' => 'Daniw',
                    ),
                    array ( 
                        'barangay_name' => 'Dita',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Palina',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Sungi',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Taykin',
					),
                    array ( 
                        'barangay_name' => 'Kanlurang Bukal',
					),
                    array ( 
                        'barangay_name' => 'Laguan',
                    ),
                    array ( 
                        'barangay_name' => 'Luquin',
					),
                    array ( 
                        'barangay_name' => 'Malabo-Kalantukan',
					),
                    array ( 
                        'barangay_name' => 'Masikap',
					),
                    array ( 
                        'barangay_name' => 'Maslun',
					),
                    array ( 
                        'barangay_name' => 'Mojon',
					),
                    array ( 
                        'barangay_name' => 'Novaliches',
					),
                    array ( 
                        'barangay_name' => 'Oples',
					),
                    array ( 
                        'barangay_name' => 'Pag-Asa',
					),
                    array ( 
                        'barangay_name' => 'Palayan',
					),
                    array ( 
                        'barangay_name' => 'Rizal',
					),
                    array ( 
                        'barangay_name' => 'San Isidro',
					),
                    array ( 
                        'barangay_name' => 'Silangang Bukas',
					),
                    array ( 
                        'barangay_name' => 'Tuy-Baanan',
					),
                ),
				array ( 
                    'town_name' => 'Los Baños',
                    array ( 
                        'barangay_name' => 'Anos',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Bambang',
                    ),
                    array ( 
                        'barangay_name' => 'Batong Malake',
                    ),
                    array ( 
                        'barangay_name' => 'Baybayin',
                    ),
                    array ( 
                        'barangay_name' => 'Bayog',
                    ),
                    array ( 
                        'barangay_name' => 'Lalakay',
                    ),
                    array ( 
                        'barangay_name' => 'Maahas',
                    ),
                    array ( 
                        'barangay_name' => 'Malinta',
                    ),
                    array ( 
                        'barangay_name' => 'Mayondon',
                    ),
                    array ( 
                        'barangay_name' => 'Tuntungin-Putho',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'Tadlac',
                    ),
                    array ( 
                        'barangay_name' => 'Timugan ',
                    ),
                ),
				array ( 
                    'town_name' => 'Luisiana',
                    array ( 
                        'barangay_name' => 'Barangay Zone I ',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone II',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone III',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone IV',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone V',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone VI',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone VII',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone VIII',
                    ),
                    array ( 
                        'barangay_name' => 'De La Paz',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Buenaventura',
                    ),
                    array ( 
                        'barangay_name' => 'San Diego',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Luis',
                     ),
                    array ( 
                        'barangay_name' => 'San Pablo',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'San Salvador',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Domingo',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Tomas',
					),
                ),
				array ( 
                    'town_name' => 'Lumban',
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Balimbingan',
                    ),
                    array ( 
                        'barangay_name' => 'Balubad',
                    ),
                    array ( 
                        'barangay_name' => 'Caliraya',
                    ),
                    array ( 
                        'barangay_name' => 'Conception',
                    ),
                    array ( 
                        'barangay_name' => 'Lewin',
                    ),
                    array ( 
                        'barangay_name' => 'Maracta',
                    ),
                    array ( 
                        'barangay_name' => 'Maytalang I',
                    ),
                    array ( 
                        'barangay_name' => 'Maytalang II',
                    ),
                    array ( 
                        'barangay_name' => 'Primera Parang',
                    ),
                    array ( 
                        'barangay_name' => 'Primera Pulo',
                    ),
                    array ( 
                        'barangay_name' => 'Salac',
                    ),
                    array ( 
                        'barangay_name' => 'Segunda Parang',
                    ),
                    array ( 
                        'barangay_name' => 'Segunda Pulo',
					),
                    array ( 
                        'barangay_name' => 'Wawa',
                    ),
                ),
				array ( 
                    'town_name' => 'Mabitac',
                    array ( 
                        'barangay_name' => 'Amuyong',
                    ),
                    array ( 
                        'barangay_name' => 'Bayanihan',
                    ),
                    array ( 
                        'barangay_name' => 'Lambac',
                    ),
                    array ( 
                        'barangay_name' => 'Libis ng Nayon',
                    ),
                    array ( 
                        'barangay_name' => 'Lucon',
                    ),
                    array ( 
                        'barangay_name' => 'Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Matalatala',
                    ),
                    array ( 
                        'barangay_name' => 'Nanguma',
                    ),
                    array ( 
                        'barangay_name' => 'Numero',
                    ),
                    array ( 
                        'barangay_name' => 'Paagahan',
                    ),
                    array ( 
                        'barangay_name' => 'Pag-Asa',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'Sinagtaka',
                    ),
                ),
				array ( 
                    'town_name' => 'Magdalena',
                    array ( 
                        'barangay_name' => 'Alipit',
                    ),
                    array ( 
                        'barangay_name' => 'Baanan',
                    ),
                    array ( 
                        'barangay_name' => 'Balanac',
                    ),
                    array ( 
                        'barangay_name' => 'Bucal',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista',
                    ),
                    array ( 
                        'barangay_name' => 'Bungkol',
                    ),
                    array ( 
                        'barangay_name' => 'Buo',
                    ),
                    array ( 
                        'barangay_name' => 'Burlungan',
                    ),
                    array ( 
                        'barangay_name' => 'Cigaras',
                    ),
                    array ( 
                        'barangay_name' => 'Halayhayin',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Atingay',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Butnong',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Atingay',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Butnong',
					),
                    array ( 
                        'barangay_name' => 'Ilog',
                    ),
                    array ( 
                        'barangay_name' => 'Malaking Ambling',
                    ),
                    array ( 
                        'barangay_name' => 'Malinao',
                    ),
                    array ( 
                        'barangay_name' => 'Maravilla',
                    ),
                    array ( 
                        'barangay_name' => 'Munting Ambling',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'Salasad',
                    ),
                    array ( 
                        'barangay_name' => 'Tanawan',
					),
                    array ( 
                        'barangay_name' => 'Tipunan',
                    ),
                ),
				array ( 
                    'town_name' => 'Majayjay',
                    array ( 
                        'barangay_name' => 'Amonoy',
                    ),
                    array ( 
                        'barangay_name' => 'Bakia',
                    ),
                    array ( 
                        'barangay_name' => 'Balanac',
                    ),
                    array ( 
                        'barangay_name' => 'Balayong',
                    ),
                    array ( 
                        'barangay_name' => 'Banilad',
                    ),
                    array ( 
                        'barangay_name' => 'Banti',
                    ),
                    array ( 
                        'barangay_name' => 'Bitaoy',
                    ),
                    array ( 
                        'barangay_name' => 'Botocan',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Burgos',
                    ),
                    array ( 
                        'barangay_name' => 'Burol',
                    ),
                    array ( 
                        'barangay_name' => 'Coralao',
                    ),
                    array ( 
                        'barangay_name' => 'Gagalot',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Banga',
                    ),
					array ( 
                        'barangay_name' => 'Ibabang Bayuacain',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Banga',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Bayucain',
                    ),
                    array ( 
                        'barangay_name' => 'Isabang',
                    ),
                    array ( 
                        'barangay_name' => 'Malinao',
                    ),
                    array ( 
                        'barangay_name' => 'May-It',
                    ),
                    array ( 
                        'barangay_name' => 'Munting Kawayan',
                    ),
                    array ( 
                        'barangay_name' => 'Olla',
                    ),
                    array ( 
                        'barangay_name' => 'Oobi',
                    ),
                    array ( 
                        'barangay_name' => 'Origuel',
                    ),
                    array ( 
                        'barangay_name' => 'Panalaban',
                    ),
                    array ( 
                        'barangay_name' => 'Pangil',
                    ),
                    array ( 
                        'barangay_name' => 'Panglan',
					),
                    array ( 
                        'barangay_name' => 'Piit',
                    ),
                    array ( 
                        'barangay_name' => 'Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Catalina',
                    ),
                    array ( 
                        'barangay_name' => 'Suba',
                    ),
                    array ( 
                        'barangay_name' => 'Talortor',
                    ),
                    array ( 
                        'barangay_name' => 'Tanawan',
                    ),
                    array ( 
                        'barangay_name' => 'Taytay',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Nogales',
					),
				),
				array ( 
                    'town_name' => 'Nagcarlan',
                    array ( 
                        'barangay_name' => 'Abo',
                    ),
                    array ( 
                        'barangay_name' => 'Alibungbungan',
                    ),
                    array ( 
                        'barangay_name' => 'Alumbrado',
                    ),
                    array ( 
                        'barangay_name' => 'Balayong',
                    ),
                    array ( 
                        'barangay_name' => 'Balimbing',
                    ),
                    array ( 
                        'barangay_name' => 'Balinacon',
                    ),
                    array ( 
                        'barangay_name' => 'Bambang',
                    ),
                    array ( 
                        'barangay_name' => 'Banago',
                    ),
                    array ( 
                        'barangay_name' => 'Banca-Banca',
                    ),
                    array ( 
                        'barangay_name' => 'Bangcuro',
                    ),
                    array ( 
                        'barangay_name' => 'Banilad',
                    ),
                    array ( 
                        'barangay_name' => 'Bayaquitos',
                    ),
                    array ( 
                        'barangay_name' => 'Buboy',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista',
					),
                    array ( 
                        'barangay_name' => 'Buhanginan',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Bunga',
                    ),
                    array ( 
                        'barangay_name' => 'Cabuyew',
                    ),
                    array ( 
                        'barangay_name' => 'Calumpang',
                    ),
                    array ( 
                        'barangay_name' => 'Kanluran Kabubuhayan',
                    ),
                    array ( 
                        'barangay_name' => 'Kanluran Lazaan',
                    ),
                    array ( 
                        'barangay_name' => 'Labangan',
                    ),
                    array ( 
                        'barangay_name' => 'Lagulo',
                    ),
                    array ( 
                        'barangay_name' => 'Lawaguin',
                    ),
                    array ( 
                        'barangay_name' => 'Maiit',
					),
                    array ( 
                        'barangay_name' => 'Malaya',
                    ),
                    array ( 
                        'barangay_name' => 'Malinao',
                    ),
                    array ( 
                        'barangay_name' => 'Manaol',
                    ),
                    array ( 
                        'barangay_name' => 'Maravilla',
                    ),
                    array ( 
                        'barangay_name' => 'Nagcalbang',
                    ),
                    array ( 
                        'barangay_name' => 'Oples',
                    ),
                    array ( 
                        'barangay_name' => 'Palayan',
                    ),
                    array ( 
                        'barangay_name' => 'Palina',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion II',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion III',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Lucia',
                    ),
                    array ( 
                        'barangay_name' => 'Sibulan',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan Kabubuhayan',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan Lazaan',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan Napapatid',
                    ),
                    array ( 
                        'barangay_name' => 'Sinipian',
                    ),
                    array ( 
                        'barangay_name' => 'Sulsugin',
                    ),
                    array ( 
                        'barangay_name' => 'Talahib',
                    ),
                    array ( 
                        'barangay_name' => 'Talangan',
                    ),
                    array ( 
                        'barangay_name' => 'Taytay',
                    ),
                    array ( 
                        'barangay_name' => 'Tipacan',
                    ),
                    array ( 
                        'barangay_name' => 'Wakat',
					),
                    array ( 
                        'barangay_name' => 'Yukos',
					),
                ),
				array ( 
                    'town_name' => 'Paete',
                    array ( 
                        'barangay_name' => 'Bagumbayan',
                    ),
                    array ( 
                        'barangay_name' => 'Bangkusay',
                    ),
                    array ( 
                        'barangay_name' => 'Ermita',
                    ),
                    array ( 
                        'barangay_name' => 'Ibaba del Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Ibaba del Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Ilaya del Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Ilaya del Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Maytoong',
                    ),
                    array ( 
                        'barangay_name' => 'Quinale',
                    ),
                ),
				array ( 
                    'town_name' => 'Pagsanjan',
                    array ( 
                        'barangay_name' => 'Anibong',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II',
                    ),
                    array ( 
                        'barangay_name' => 'Biñan',
                    ),
                    array ( 
                        'barangay_name' => 'Buboy',
                    ),
                    array ( 
                        'barangay_name' => 'Cabanbanan',
                    ),
                    array ( 
                        'barangay_name' => 'Calusiche',
                    ),
                    array ( 
                        'barangay_name' => 'Dingin',
                    ),
                    array ( 
                        'barangay_name' => 'Lambac',
                    ),
                    array ( 
                        'barangay_name' => 'Layugan',
                    ),
                    array ( 
                        'barangay_name' => 'Magdapio',
                    ),
                    array ( 
                        'barangay_name' => 'Maulawin',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagsanjan',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc',
					),
                    array ( 
                        'barangay_name' => 'San Isidro',
					),
                ),
				array ( 
                    'town_name' => 'Pakil',
                    array ( 
                        'barangay_name' => 'Banilan',
                    ),
                    array ( 
                        'barangay_name' => 'Biñan',
                    ),
                    array ( 
                        'barangay_name' => 'Burgos',
                    ),
                    array ( 
                        'barangay_name' => 'Casa Real',
                    ),
                    array ( 
                        'barangay_name' => 'Casinsin',
                    ),
                    array ( 
                        'barangay_name' => 'Dorado',
                    ),
                    array ( 
                        'barangay_name' => 'Gonzales',
                    ),
                    array ( 
                        'barangay_name' => 'Kabulusan',
                    ),
                    array ( 
                        'barangay_name' => 'Matikiw',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Saray',
                    ),
                    array ( 
                        'barangay_name' => 'Taft',
                    ),
				),
				array ( 
                    'town_name' => 'Pangil',
                    array ( 
                        'barangay_name' => 'Tavera',
                    ),
                    array ( 
                        'barangay_name' => 'Balian',
					),
                    array ( 
                        'barangay_name' => 'Dambo',
                    ),
                    array ( 
                        'barangay_name' => 'Galalan',
					),
                    array ( 
                        'barangay_name' => 'Isla',
					),
                    array ( 
                        'barangay_name' => 'Mabato-Azufre',
					),
                    array ( 
                        'barangay_name' => 'Natividad',
					),
                    array ( 
                        'barangay_name' => 'San Jose',
					),
                    array ( 
                        'barangay_name' => 'Sulib',
                    ),
                ),
				array ( 
                    'town_name' => 'Pila',
                    array ( 
                        'barangay_name' => 'Aplaya',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Bulilan Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Bulilan Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Concepcion',
                    ),
                    array ( 
                        'barangay_name' => 'Labuin',
                    ),
                    array ( 
                        'barangay_name' => 'LInga',
                    ),
                    array ( 
                        'barangay_name' => 'Masico',
                    ),
                    array ( 
                        'barangay_name' => 'Mojon',
                    ),
                    array ( 
                        'barangay_name' => 'Pansol',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagbayanan',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
					),
                    array ( 
                        'barangay_name' => 'Santa Clara Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Clara Sur',
					),
                    array ( 
                        'barangay_name' => 'Tubuan',
                    ),
                ),
				array ( 
                    'town_name' => 'Rizal',
                    array ( 
                        'barangay_name' => 'East Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Entablado',
                    ),
                    array ( 
                        'barangay_name' => 'Laguan',
                    ),
                    array ( 
                        'barangay_name' => 'Paule 1',
                    ),
                    array ( 
                        'barangay_name' => 'Paule 2',
                    ),
                    array ( 
                        'barangay_name' => 'Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Tala',
                    ),
                    array ( 
                        'barangay_name' => 'Talaga',
                    ),
                    array ( 
                        'barangay_name' => 'Tuy',
                    ),
                    array ( 
                        'barangay_name' => 'West Poblacion',
                    ),
                ),
				array ( 
                    'town_name' => 'San Pablo',
                    array ( 
                        'barangay_name' => 'Atisan',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Bayan II-A',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Pook IV-C',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I-B',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II-B',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II-C',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II-D',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II-E',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II-F',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III-B',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III-C',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III-D',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III-E',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III-F',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV-B',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV-C',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay V-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay V-B',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay V-C',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay V-D',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay VI-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay VI-B',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay VI-C',
					),
                    array ( 
                        'barangay_name' => 'Barangay VI-D',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay VI-E',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay VII-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay VII-B',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay VII-C',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay VII-D',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay VII-E',
                    ),
                    array ( 
                        'barangay_name' => 'Bautista',
                    ),
                    array ( 
                        'barangay_name' => 'Concepcion',
                    ),
                    array ( 
                        'barangay_name' => 'Del Remedio',
                    ),
                    array ( 
                        'barangay_name' => 'Dolores',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio I',
                    ),
                    array ( 
                        'barangay_name' => 'San Antionio II',
					),
                    array ( 
                        'barangay_name' => 'San Bartolome',
                    ),
                    array ( 
                        'barangay_name' => 'San Buenaventura',
                    ),
                    array ( 
                        'barangay_name' => 'San Crispin',
                    ),
                    array ( 
                        'barangay_name' => 'San Cristobal',
                    ),
                    array ( 
                        'barangay_name' => 'San Diego',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'San Gabriel',
                    ),
                    array ( 
                        'barangay_name' => 'San Gregorio',
                    ),
                    array ( 
                        'barangay_name' => 'San Ignacio',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Joaquin',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
					),
                    array ( 
                        'barangay_name' => 'San Lorenzo',
                    ),
                    array ( 
                        'barangay_name' => 'San Lucas 1',
                    ),
                    array ( 
                        'barangay_name' => 'San Lucas 2',
                    ),
                    array ( 
                        'barangay_name' => 'San Marcos',
                    ),
                    array ( 
                        'barangay_name' => 'San Mateo',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Nicolas',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Ana',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cruz',
					),
                    array ( 
                        'barangay_name' => 'Santa Elena',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Felomina',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Isabel',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria Magdalena',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Monica',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Veronica',
                    ),
                    array ( 
                        'barangay_name' => 'Santiago I',
                    ),
                    array ( 
                        'barangay_name' => 'Santiago II',
                    ),
                    array ( 
                        'barangay_name' => 'Santisimo Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Angel',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Cristo',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
					),
                    array ( 
                        'barangay_name' => 'Soledad',
					),
				),
				array ( 
                    'town_name' => 'San Pedro',
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Calendola',
                    ),
                    array ( 
                        'barangay_name' => 'Chrisanthemum',
                    ),
                    array ( 
                        'barangay_name' => 'Cuyab',
                    ),
                    array ( 
                        'barangay_name' => 'Estrella',
                    ),
                    array ( 
                        'barangay_name' => 'Fatima',
                    ),
                    array ( 
                        'barangay_name' => 'G.S.I.S.',
                    ),
                    array ( 
                        'barangay_name' => 'Landayan',
                    ),
                    array ( 
                        'barangay_name' => 'Langgam',
                    ),
                    array ( 
                        'barangay_name' => 'Laram',
                    ),
                    array ( 
                        'barangay_name' => 'Magsaysay',
                    ),
                    array ( 
                        'barangay_name' => 'Maharlika',
                    ),
                    array ( 
                        'barangay_name' => 'Narra',
                    ),
                    array ( 
                        'barangay_name' => 'Nueva',
					),
                    array ( 
                        'barangay_name' => 'Pacita 1',
                    ),
                    array ( 
                        'barangay_name' => 'Pacita 2',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Riverside',
                    ),
                    array ( 
                        'barangay_name' => 'Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaguita Village',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Lorenzo Ruiz',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'United Bayanihan',
                    ),
                    array ( 
                        'barangay_name' => 'United Better Living',
                    ),
                ),
				array ( 
                    'town_name' => 'Santa Cruz',
                    array ( 
                        'barangay_name' => 'Alipit',
                    ),
                    array ( 
                        'barangay_name' => 'Bagumbayan',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay V',
                    ),
                    array ( 
                        'barangay_name' => 'Bubukal',
                    ),
                    array ( 
                        'barangay_name' => 'Calios',
                    ),
                    array ( 
                        'barangay_name' => 'Duhat',
                    ),
                    array ( 
                        'barangay_name' => 'Gatid',
                    ),
                    array ( 
                        'barangay_name' => 'Jasaan',
                    ),
                    array ( 
                        'barangay_name' => 'Labuin',
                    ),
                    array ( 
                        'barangay_name' => 'Malinao',
					),
                    array ( 
                        'barangay_name' => 'Oogong',
                    ),
                    array ( 
                        'barangay_name' => 'Pagsawitan',
                    ),
                    array ( 
                        'barangay_name' => 'Palasan',
                    ),
                    array ( 
                        'barangay_name' => 'Patimbao',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Pablo Norte',
                    ),
                    array ( 
                        'barangay_name' => 'San Pablo Sur',
					),
                    array ( 
                        'barangay_name' => 'Santisima Cruz',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Angel Central',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Angel Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Angel Sur',
					),
                ),
				array ( 
                    'town_name' => 'Santa Maria',
                    array ( 
                        'barangay_name' => 'Adia',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Bagumbayan',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay V',
                    ),
                    array ( 
                        'barangay_name' => 'Bubukal',
                    ),
                    array ( 
                        'barangay_name' => 'Cabooan',
                    ),
                    array ( 
                        'barangay_name' => 'Calangay',
                    ),
                    array ( 
                        'barangay_name' => 'Cambuja',
                    ),
                    array ( 
                        'barangay_name' => 'Coralan',
                    ),
                    array ( 
                        'barangay_name' => 'Cueva',
					),
                    array ( 
                        'barangay_name' => 'Inayapan',
                    ),
                    array ( 
                        'barangay_name' => 'Jose Laurel, Sr',
                    ),
                    array ( 
                        'barangay_name' => 'Jose Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Mayhakat',
					),
                    array ( 
                        'barangay_name' => 'Macasipac',
                    ),
                    array ( 
                        'barangay_name' => 'Masinao',
                    ),
                    array ( 
                        'barangay_name' => 'Mataling-Ting',
                    ),
                    array ( 
                        'barangay_name' => 'Pao-o',
                    ),
                    array ( 
                        'barangay_name' => 'Parang ng Buho',
                    ),
                    array ( 
                        'barangay_name' => 'Santiago',
                    ),
                    array ( 
                        'barangay_name' => 'Talangka',
                    ),
                    array ( 
                        'barangay_name' => 'Tungkod',
                    ),
                ),
				array ( 
                    'town_name' => 'Santa Rosa',
                    array ( 
                        'barangay_name' => 'Aplaya',
                    ),
                    array ( 
                        'barangay_name' => 'Balibago',
                    ),
                    array ( 
                        'barangay_name' => 'Calingin',
                    ),
                    array ( 
                        'barangay_name' => 'Dila',
                    ),
                    array ( 
                        'barangay_name' => 'Dita',
                    ),
                    array ( 
                        'barangay_name' => 'Don Jose',
                    ),
                    array ( 
                        'barangay_name' => 'Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Labas',
                    ),
                    array ( 
                        'barangay_name' => 'Macabling',
                    ),
                    array ( 
                        'barangay_name' => 'Malitlit',
                    ),
                    array ( 
                        'barangay_name' => 'Malusak',
                    ),
                    array ( 
                        'barangay_name' => 'Market Area',
                    ),
                    array ( 
                        'barangay_name' => 'Pook',
					),
                    array ( 
                        'barangay_name' => 'Pulong Santa Cruz',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Domingo',
                    ),
                    array ( 
                        'barangay_name' => 'Sinalhan',
                    ),
                    array ( 
                        'barangay_name' => 'Tagapo',
                    ),
                ),
				array ( 
                    'town_name' => 'Siniloan',
                    array ( 
                        'barangay_name' => 'Acevida',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Pag-Asa',
                    ),
                    array ( 
                        'barangay_name' => 'Baumbarangay',
                    ),
                    array ( 
                        'barangay_name' => 'Buhay',
                    ),
                    array ( 
                        'barangay_name' => 'G.Redor',
                    ),
                    array ( 
                        'barangay_name' => 'Gen. Luna',
                    ),
                    array ( 
                        'barangay_name' => 'Halayhayin',
                    ),
                    array ( 
                        'barangay_name' => 'J. Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Kapatalan',
                    ),
                    array ( 
                        'barangay_name' => 'Laguio',
                    ),
                    array ( 
                        'barangay_name' => 'Liyan',
                    ),
                    array ( 
                        'barangay_name' => 'Llavac',
                    ),
                    array ( 
                        'barangay_name' => 'Macatad',
                    ),
                    array ( 
                        'barangay_name' => 'Magsaysay',
					),
                    array ( 
                        'barangay_name' => 'Mayatba',
                    ),
                    array ( 
                        'barangay_name' => 'Mendiola',
                    ),
                    array ( 
                        'barangay_name' => 'P. Burgos',
                    ),
                    array ( 
                        'barangay_name' => 'Pandeno',
					),
                    array ( 
                        'barangay_name' => 'Salubungan',
					),
                    array ( 
                        'barangay_name' => 'Wawa',
                    ),
                ),
				array ( 
                    'town_name' => 'Victoria',
                    array ( 
                        'barangay_name' => 'Banca-Banca',
                    ),
                    array ( 
                        'barangay_name' => 'Daniw',
                    ),
                    array ( 
                        'barangay_name' => 'Masapang',
                    ),
                    array ( 
                        'barangay_name' => 'Nanhaya',
                    ),
                    array ( 
                        'barangay_name' => 'Pagalangan',
                    ),
                    array ( 
                        'barangay_name' => 'San Benito',
                    ),
                    array ( 
                        'barangay_name' => 'San Felix',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                ),
            ),
			//*end of Laguna Province
			  
				
				
			//*Start of Cavite Province	
			array(
                'province_name' => 'Cavite',
				array ( 
                    'town_name' => 'Alfonso',
                    array ( 
                        'barangay_name' => 'Amuyong',
                    ),
                    array ( 
                        'barangay_name' => 'Bilog',
                    ),
                    array ( 
                        'barangay_name' => 'Buck Estate',
                    ),
                    array ( 
                        'barangay_name' => 'Esperanza Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Esperanza Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Kaysuyo (Kaytitinga IV)',
                    ),
                    array ( 
                        'barangay_name' => 'Kaytitinga I',
                    ),
                    array ( 
                        'barangay_name' => 'Kaytitinga II',
                    ),
                    array ( 
                        'barangay_name' => 'Kaytitinga III',
                    ),
                    array ( 
                        'barangay_name' => 'Luksuhin Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Luksuhin Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Mangas I',
                    ),
                    array ( 
                        'barangay_name' => 'Mangas II',
                    ),
                    array ( 
                        'barangay_name' => 'Marahan I',
					),
                    array ( 
                        'barangay_name' => 'Marahan II',
                    ),
                    array ( 
                        'barangay_name' => 'Matagbak I',
                    ),
                    array ( 
                        'barangay_name' => 'Matagbak II',
                    ),
                    array ( 
                        'barangay_name' => 'Pajo Malupit',
                    ),
                    array ( 
                        'barangay_name' => 'Palumlum',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion II',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion III',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion IV',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion V',
                    ),
                    array ( 
                        'barangay_name' => 'Sicat',
                    ),
                    array ( 
                        'barangay_name' => 'Sinaliw Malaki',
                    ),
                    array ( 
                        'barangay_name' => 'Sinaliw Munti',
					),
                    array ( 
                        'barangay_name' => 'Santa Theresa',
					 ),
                    array ( 
                        'barangay_name' => 'Sulsugin',
                    ),
                    array ( 
                        'barangay_name' => 'Taywanak Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Taywanak Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Upli',
                    ),
                ),
				array ( 
                    'town_name' => 'Bacoor West (District 1)',
                    array ( 
                        'barangay_name' => 'Alima',
                    ),
                    array ( 
                        'barangay_name' => 'Aniban I',
                    ),
                    array ( 
                        'barangay_name' => 'Aniban II',
                    ),
                    array ( 
                        'barangay_name' => 'Aniban III',
                    ),
                    array ( 
                        'barangay_name' => 'Aniban IV',
                    ),
                    array ( 
                        'barangay_name' => 'Aniban V',
                    ),
                    array ( 
                        'barangay_name' => 'Banalo',
                    ),
                    array ( 
                        'barangay_name' => 'Camposanto',
                    ),
                    array ( 
                        'barangay_name' => 'Daang-Bukid',
                    ),
                    array ( 
                        'barangay_name' => 'Digman',
                    ),
                    array ( 
                        'barangay_name' => 'Dulong-Bayan',
                    ),
                    array ( 
                        'barangay_name' => 'Kaingin',
                    ),
                    array ( 
                        'barangay_name' => 'Habay I',
                    ),
                    array ( 
                        'barangay_name' => 'Habay II',
					),
                    array ( 
                        'barangay_name' => 'Ligas I',
                    ),
                    array ( 
                        'barangay_name' => 'Ligas II',
                    ),
                    array ( 
                        'barangay_name' => 'Ligas III',
                    ),
                    array ( 
                        'barangay_name' => 'Mabolo I',
                    ),
                    array ( 
                        'barangay_name' => 'Mabolo II',
                    ),
                    array ( 
                        'barangay_name' => 'Mabolo III',
                    ),
                    array ( 
                        'barangay_name' => 'Maliksi I',
                    ),
                    array ( 
                        'barangay_name' => 'Maliksi II',
                    ),
                    array ( 
                        'barangay_name' => 'Maliksi III',
                    ),
                    array ( 
                        'barangay_name' => 'Niog I',
                    ),
                    array ( 
                        'barangay_name' => 'Niog II',
					),
                    array ( 
                        'barangay_name' => 'Niog III',
                    ),
                    array ( 
                        'barangay_name' => 'Panapaan I',
                    ),
                    array ( 
                        'barangay_name' => 'Panapaan II',
                    ),
                    array ( 
                        'barangay_name' => 'Panapaan III',
					),
                    array ( 
                        'barangay_name' => 'Panapaan IV',
                    ),
                    array ( 
                        'barangay_name' => 'Panapaan V',
                    ),
                    array ( 
                        'barangay_name' => 'Panapaan VI',
                    ),
                    array ( 
                        'barangay_name' => 'Panapaan VII',
					),
                    array ( 
                        'barangay_name' => 'Panapaan VIII',
                    ),
                    array ( 
                        'barangay_name' => 'Real I',
                    ),
                    array ( 
                        'barangay_name' => 'Real II',
                    ),
                    array ( 
                        'barangay_name' => 'Salinas I',
					),
                    array ( 
                        'barangay_name' => 'Salinas II',
                    ),
                    array ( 
                        'barangay_name' => 'Salinas III',
                    ),
                    array ( 
                        'barangay_name' => 'Salinas IV',
                    ),
                    array ( 
                        'barangay_name' => 'San Nicolas I',
					),
                    array ( 
                        'barangay_name' => 'San Nicolas II',
                    ),
                    array ( 
                        'barangay_name' => 'San Nicolas III',
                    ),
                    array ( 
                        'barangay_name' => 'Sineguelasan',
                    ),
                    array ( 
                        'barangay_name' => 'Tabing-Dagat',
					),
                    array ( 
                        'barangay_name' => 'Talaba I',
                    ),
                    array ( 
                        'barangay_name' => 'Talaba II',
                    ),
                    array ( 
                        'barangay_name' => 'Talaba III',
                    ),
                    array ( 
                        'barangay_name' => 'Talaba IV',
					),
                    array ( 
                        'barangay_name' => 'Talaba V',
                    ),
                    array ( 
                        'barangay_name' => 'Talaba VI',
                    ),
                    array ( 
                        'barangay_name' => 'Talaba VII',
                    ),
                    array ( 
                        'barangay_name' => 'Zapote I',
					),
                    array ( 
                        'barangay_name' => 'Zapote II',
                    ),
                    array ( 
                        'barangay_name' => 'Zapote III',
                    ),
                    array ( 
                        'barangay_name' => 'Zapote VI',
                    ),
                    array ( 
                        'barangay_name' => 'Zapote V',
                    ),
                ),
				array ( 
                    'town_name' => 'Bacoor East (District 2)',
                    array ( 
                        'barangay_name' => 'Bayanan',
                    ),
                    array ( 
                        'barangay_name' => 'Mambog I',
                    ),
                    array ( 
                        'barangay_name' => 'Mambog II',
                    ),
                    array ( 
                        'barangay_name' => 'Mambog III',
                    ),
                    array ( 
                        'barangay_name' => 'Mambog VI',
                    ),
                    array ( 
                        'barangay_name' => 'Mambog V',
                    ),
                    array ( 
                        'barangay_name' => 'Molino I',
                    ),
                    array ( 
                        'barangay_name' => 'Molino II',
                    ),
                    array ( 
                        'barangay_name' => 'Molino III',
                    ),
                    array ( 
                        'barangay_name' => 'Molino IV',
                    ),
                    array ( 
                        'barangay_name' => 'Molino V',
                    ),
                    array ( 
                        'barangay_name' => 'Molino VI',
                    ),
                    array ( 
                        'barangay_name' => 'Molino VII',
                    ),
                    array ( 
                        'barangay_name' => 'Queens Row Central',
					),
                    array ( 
                        'barangay_name' => 'Queens Row East',
                    ),
                    array ( 
                        'barangay_name' => 'Queens Row West',
                    ),
                ),
				array ( 
                    'town_name' => 'Carmona',
                    array ( 
                        'barangay_name' => 'Bancal',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 8',
                    ),
                    array ( 
                        'barangay_name' => 'Cabilang Baybay',
                    ),
                    array ( 
                        'barangay_name' => 'Lantic',
                    ),
                    array ( 
                        'barangay_name' => 'Maduya',
                    ),
                    array ( 
                        'barangay_name' => 'Mabuhay',
                    ),
                    array ( 
                        'barangay_name' => 'Milagrosa',
                    ),
                ),
				array ( 
                    'town_name' => 'Cavite',
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 8',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 9',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 10-A',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 10-M',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 10-B',                 
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 11',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 12',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 13',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 14',
					),
                    array ( 
                        'barangay_name' => 'Barangay 15',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 16',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 17',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 18',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 19',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 20',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 21',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 22',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 22-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 23',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 24',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 25',
					),
					array ( 
                        'barangay_name' => 'Barangay 26',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 27',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 28',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 29',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 29-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 30',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 31',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 32',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 33',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 34',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 35',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 36',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 36-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 37-M',
                    ),
					 array ( 
                        'barangay_name' => 'Barangay 37-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 38',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 38-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 39',
					),
                    array ( 
                        'barangay_name' => 'Barangay 40',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 41',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 42',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 42-A',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 42-B',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 42-C',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 43',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 44',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 45',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 45-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 46',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 47',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 47-A',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 47-B',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 48',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 48-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 49',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 49-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 50',
					),
                    array ( 
                        'barangay_name' => 'Barangay 51',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 52',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 53',
                    ),
					 array ( 
                        'barangay_name' => 'Barangay 53-A',
                    ),
					 array ( 
                        'barangay_name' => 'Barangay 53-B',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 54-A',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 54-M',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 55',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 56',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 57',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 58',
                    ),
					array ( 
                        'barangay_name' => 'Barangay 58-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 59',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 60',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 61',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 61-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 62',
					),
                    array ( 
                        'barangay_name' => 'Barangay 62-A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 62-B',                    
                    ),
                ),
				array ( 
                    'town_name' => 'Dasmariñas',
                    array ( 
                        'barangay_name' => 'Burol',
                    ),
                    array ( 
                        'barangay_name' => 'Burol I',
                    ),
                    array ( 
                        'barangay_name' => 'Burol II',
                    ),
                    array ( 
                        'barangay_name' => 'Burol III',
                    ),
                    array ( 
                        'barangay_name' => 'Datu Esmael',
                    ),
                    array ( 
                        'barangay_name' => 'Emmanuel Bergado',
                    ),
                    array ( 
                        'barangay_name' => 'Fatima I',
                    ),
                    array ( 
                        'barangay_name' => 'Fatima II',
                    ),
                    array ( 
                        'barangay_name' => 'Fatima III',
                    ),
                    array ( 
                        'barangay_name' => 'H-2',
                    ),
                    array ( 
                        'barangay_name' => 'Langkaan I',
                    ),
                    array ( 
                        'barangay_name' => 'Langkaan II',
                    ),
                    array ( 
                        'barangay_name' => 'Luzviminda I',
                    ),
                    array ( 
                        'barangay_name' => 'Luzviminda II',
					),
                    array ( 
                        'barangay_name' => 'Paliparan I',
                    ),
                    array ( 
                        'barangay_name' => 'Paliparan II',
                    ),
                    array ( 
                        'barangay_name' => 'Paliparan III',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'Saint Peter I',
                    ),
                    array ( 
                        'barangay_name' => 'Saint Peter II',
                    ),
                    array ( 
                        'barangay_name' => 'Salawag',
                    ),
                    array ( 
                        'barangay_name' => 'Salitran I',
					),
                    array ( 
                        'barangay_name' => 'Salitran II',
                    ),
                    array ( 
                        'barangay_name' => 'Salitran III',
                    ),
                    array ( 
                        'barangay_name' => 'Salitran IV',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc I',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc II',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc III',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc IV',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc V',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin I',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin II',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin III',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres I',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres II',
					),
                    array ( 
                        'barangay_name' => 'San Antonio de Padua I',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio de Padua II',
                    ),
                    array ( 
                        'barangay_name' => 'San Dionisio',
                    ),
                    array ( 
                        'barangay_name' => 'San Esteban',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco I',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco II',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Labrador I',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Labrador II',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Lorenzo Ruiz I',
                    ),
                    array ( 
                        'barangay_name' => 'San Lorenzo II',
                    ),
                    array ( 
                        'barangay_name' => 'San Luis I',
					 ),
                    array ( 
                        'barangay_name' => 'San Luis II',
                    ),
                    array ( 
                        'barangay_name' => 'Manuel I',
                    ),
                    array ( 
                        'barangay_name' => 'Manuel II',
                    ),
                    array ( 
                        'barangay_name' => 'San Mateo',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel II',
                    ),
                    array ( 
                        'barangay_name' => 'San Nicolas I',
                    ),
                    array ( 
                        'barangay_name' => 'San Nicolas II',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'San Simon',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cristina I',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cristina II',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cruz I',
					),
                    array ( 
                        'barangay_name' => 'Santa Cruz II',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Fe',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Lucia',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Cristo',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño I',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño II',
                    ),
                    array ( 
                        'barangay_name' => 'Victoria Reyes',
                    ),
                    array ( 
                        'barangay_name' => 'Zone I',
                    ),
                    array ( 
                        'barangay_name' => 'Zone I-B',
                    ),
                    array ( 
                        'barangay_name' => 'Zone II',
                    ),
                    array ( 
                        'barangay_name' => 'Zone III',
                    ),
                    array ( 
                        'barangay_name' => 'Zone IV',
                    ),
                ),
				array ( 
                    'town_name' => 'General Emilio Aguinaldo',
                    array ( 
                        'barangay_name' => 'Dalusag',
                    ),
                    array ( 
                        'barangay_name' => 'Batas Dao',
                    ),
                    array ( 
                        'barangay_name' => 'Castaños Cerca',
                    ),
                    array ( 
                        'barangay_name' => 'Castaños Lejos',
                    ),
                    array ( 
                        'barangay_name' => 'Kabulusan',
                    ),
                    array ( 
                        'barangay_name' => 'Kaymisas',
                    ),
                    array ( 
                        'barangay_name' => 'Kaypaaba',
                    ),
                    array ( 
                        'barangay_name' => 'Lumipa',
                    ),
                    array ( 
                        'barangay_name' => 'Narvaez',
                    ),
                    array ( 
                        'barangay_name' => 'Tabora',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 1',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 2',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 3',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 4',
					),
                ),
				array ( 
                    'town_name' => 'General Mariano Alvarez',
                    array ( 
                        'barangay_name' => 'Aldiano Olaes',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 1',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 2',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 3',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 4',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 5',
                    ),
                    array ( 
                        'barangay_name' => 'Benjamin Tirona',
                    ),
                    array ( 
                        'barangay_name' => 'Bernardo Pulido',
                    ),
                    array ( 
                        'barangay_name' => 'Epifanio Malia',
                    ),
                    array ( 
                        'barangay_name' => 'Francisco De Castro',
                    ),
                    array ( 
                        'barangay_name' => 'Francisco Reyes',
                    ),
                    array ( 
                        'barangay_name' => 'Fiorello Calimag',
                    ),
                    array ( 
                        'barangay_name' => 'Gavino Maderan ',
                    ),
                    array ( 
                        'barangay_name' => 'Gregoria De Jesus',
					),
                    array ( 
                        'barangay_name' => 'Inocencio Salud',
                    ),
                    array ( 
                        'barangay_name' => 'Jacinto Lumbreras',
                    ),
                    array ( 
                        'barangay_name' => 'Kapitan Kua',
                    ),
                    array ( 
                        'barangay_name' => 'Koronel Jose P. Elises',
                    ),
                    array ( 
                        'barangay_name' => 'Macario Dacon',
                    ),
                    array ( 
                        'barangay_name' => 'Marcelino Memije',
                    ),
                    array ( 
                        'barangay_name' => 'Nicolasa Virata',
                    ),
                    array ( 
                        'barangay_name' => 'Pantaleon Granados',
                    ),
                    array ( 
                        'barangay_name' => 'Ramon Cruz Sr.',
                    ),
                    array ( 
                        'barangay_name' => 'San Gabriel',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'Severino De Las Alas',
                    ),
                    array ( 
                        'barangay_name' => 'Tiniente Tiago',	
                    ),
                ),
				array ( 
                    'town_name' => 'General Trias',
                    array ( 
                        'barangay_name' => 'Alingaro',
                    ),
                    array ( 
                        'barangay_name' => 'Arnaldo',
                    ),
                    array ( 
                        'barangay_name' => 'Bacao I',
                    ),
                    array ( 
                        'barangay_name' => 'Bacao II',
                    ),
                    array ( 
                        'barangay_name' => 'Bagumbayan',
                    ),
                    array ( 
                        'barangay_name' => 'Biclatan',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista I',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista II',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista III',
                    ),
                    array ( 
                        'barangay_name' => 'Corregidor',
                    ),
                    array ( 
                        'barangay_name' => 'Governor Ferrer',
                    ),
                    array ( 
                        'barangay_name' => 'Javalera',
                    ),
                    array ( 
                        'barangay_name' => 'Manggahan',
                    ),
                    array ( 
                        'barangay_name' => 'Navarro',
					),
                    array ( 
                        'barangay_name' => 'Panungyanan',
                    ),
                    array ( 
                        'barangay_name' => 'Pasong Camachile I',
                    ),
                    array ( 
                        'barangay_name' => 'Pasong Camachile II',
                    ),
                    array ( 
                        'barangay_name' => 'Pasong Kawayan I',
                    ),
                    array ( 
                        'barangay_name' => 'Pasong Kawayan II',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagtipunan',
                    ),
                    array ( 
                        'barangay_name' => 'Prinza',
                    ),
                    array ( 
                        'barangay_name' => 'Sampalucan',
                    ),
                    array ( 
                        'barangay_name' => 'Santiago',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'San Gabriel',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan I',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan II',	
                    ),
                    array ( 
                        'barangay_name' => 'Santa Clara',	
                    ),
					array ( 
                        'barangay_name' => 'Tapia',	
                    ),
					array ( 
                        'barangay_name' => 'Tejero',	
                    ),
					array ( 
                        'barangay_name' => 'Vibora',	
                    ),
					array ( 
                        'barangay_name' => '1896th',	
                    ),
                ),
				array ( 
                    'town_name' => 'Imus',
                    array ( 
                        'barangay_name' => 'Alapan I-A',
                    ),
                    array ( 
                        'barangay_name' => 'Alapan I-B',
                    ),
                    array ( 
                        'barangay_name' => 'Alapan I-C',
                    ),
                    array ( 
                        'barangay_name' => 'Alapan II-A',
                    ),
                    array ( 
                        'barangay_name' => 'Alapan II-B',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu I-A',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu I-B',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu I-C',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu I-D',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu I-E',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu I-F',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu I-G',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu II-A',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu II-B',
					),
                    array ( 
                        'barangay_name' => 'Anabu II-C',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu II-D',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu II-E',
                    ),
                    array ( 
                        'barangay_name' => 'Anabu II-F',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Silang (Bahayang Pag-asa)',
                    ),
                    array ( 
                        'barangay_name' => 'Bayan Luma I',
                    ),
                    array ( 
                        'barangay_name' => 'Bayan Luma II',
                    ),
                    array ( 
                        'barangay_name' => 'Bayan Luma III',
                    ),
                    array ( 
                        'barangay_name' => 'Bayan Luma IV',
                    ),
                    array ( 
                        'barangay_name' => 'Bayan Luma IX',
                    ),
                    array ( 
                        'barangay_name' => 'Bayan Luma V',
                    ),
                    array ( 
                        'barangay_name' => 'Bayan Luma VI',
                    ),
                    array ( 
                        'barangay_name' => 'Bayan Luma VII',	
                    ),
					array ( 
                        'barangay_name' => 'Bayan Luma VIII',
                    ),
                    array ( 
                        'barangay_name' => 'Bucandala I',
                    ),
                    array ( 
                        'barangay_name' => 'Bucandala II',
                    ),
                    array ( 
                        'barangay_name' => 'Bucandala III',
                    ),
                    array ( 
                        'barangay_name' => 'Bucandala IV',
                    ),
                    array ( 
                        'barangay_name' => 'Bucandala V',
					),
                    array ( 
                        'barangay_name' => 'Buhay na Tubig',
                    ),
                    array ( 
                        'barangay_name' => 'Carsadang Bago I',
                    ),
                    array ( 
                        'barangay_name' => 'Carsadang Bago II',
                    ),
                    array ( 
                        'barangay_name' => 'Magdalo',
                    ),
                    array ( 
                        'barangay_name' => 'Maharlika',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang I-A',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang I-B',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang I-C',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang I-D',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang I-E',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang I-F',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang I-G',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang II-A',
					),
                    array ( 
                        'barangay_name' => 'Malagasang II-B',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang II-C',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang II-D',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang II-E',
                    ),
                    array ( 
                        'barangay_name' => 'Malagasang II-F',
					),
                    array ( 
                        'barangay_name' => 'Malagasang II-G',
                    ),
                    array ( 
                        'barangay_name' => 'Mariano Espeleta I',
                    ),
                    array ( 
                        'barangay_name' => 'Mariano Espeleta II',
                    ),
                    array ( 
                        'barangay_name' => 'Mariano Espeleta III',
                    ),
                    array ( 
                        'barangay_name' => 'Medicion I-A',
					),
                    array ( 
                        'barangay_name' => 'Medicion I-B',
                    ),
                    array ( 
                        'barangay_name' => 'Medicion I-C',
                    ),
                    array ( 
                        'barangay_name' => 'Medicion I-D',
                    ),
                    array ( 
                        'barangay_name' => 'Medicion II-A',
                    ),
                    array ( 
                        'barangay_name' => 'Medicion II-B',
					),
                    array ( 
                        'barangay_name' => 'Medicion II-C',
                    ),
                    array ( 
                        'barangay_name' => 'Medicion II-D',
                    ),
                    array ( 
                        'barangay_name' => 'Medicion II-E',
                    ),
                    array ( 
                        'barangay_name' => 'Medicion II-F',
                    ),
                    array ( 
                        'barangay_name' => 'Pag-asa I',
					),
                    array ( 
                        'barangay_name' => 'Pag-asa II',
                    ),
                    array ( 
                        'barangay_name' => 'Pag-asa III',
                    ),
                    array ( 
                        'barangay_name' => 'Palico I',
                    ),
                    array ( 
                        'barangay_name' => 'Palico II',
                    ),
                    array ( 
                        'barangay_name' => 'Palico III',
					),
                    array ( 
                        'barangay_name' => 'Palico IV',
                    ),
                    array ( 
                        'barangay_name' => 'Pasong Buaya I',
                    ),
                    array ( 
                        'barangay_name' => 'Pasong Buaya II',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagbuklod',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I-A',
					),
                    array ( 
                        'barangay_name' => 'Poblacion I-B',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I-C',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion II-A',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion II-B',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion III-A',
					),
                    array ( 
                        'barangay_name' => 'Poblacion III-B',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion IV-A',
					),
                    array ( 
                        'barangay_name' => 'Poblacion IV-B',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion IV-C',
					),
                    array ( 
                        'barangay_name' => 'Poblacion IV-D',
                    ),
                    array ( 
                        'barangay_name' => 'Tanzang Luma I',
					),
                    array ( 
                        'barangay_name' => 'Tanzang Luma II',
                    ),
                    array ( 
                        'barangay_name' => 'Tanzang Luma III',
					),
                    array ( 
                        'barangay_name' => 'Tanzang Luma IV',
                    ),
                    array ( 
                        'barangay_name' => 'Tanzang Luma V',
					),
                    array ( 
                        'barangay_name' => 'Tanzang Luma VI',
                    ),
                    array ( 
                        'barangay_name' => 'Toclong I-A',
					),
                    array ( 
                        'barangay_name' => 'Toclong I-B',
                    ),
                    array ( 
                        'barangay_name' => 'Toclong I-C',
					),
                    array ( 
                        'barangay_name' => 'Toclong II-A',
                    ),
                    array ( 
                        'barangay_name' => 'Toclong II-B',
                    ),
                ),
				array ( 
                    'town_name' => 'Indang',
                    array ( 
                        'barangay_name' => 'Agus-us',
                    ),
                    array ( 
                        'barangay_name' => 'Alulod',
                    ),
                    array ( 
                        'barangay_name' => 'Banaba Cerca',
                    ),
                    array ( 
                        'barangay_name' => 'Banaba Lejos',
                    ),
                    array ( 
                        'barangay_name' => 'Bancod',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Buna Cerca',
                    ),
                    array ( 
                        'barangay_name' => 'Buna Lejos I',
                    ),
                    array ( 
                        'barangay_name' => 'Buna Lejos II',
                    ),
                    array ( 
                        'barangay_name' => 'Calumpang Cerca',
                    ),
                    array ( 
                        'barangay_name' => 'Calumpang Lejos I',
					),
                    array ( 
                        'barangay_name' => 'Carasuchi',
                    ),
                    array ( 
                        'barangay_name' => 'Daine I',
                    ),
                    array ( 
                        'barangay_name' => 'Daine II',
                    ),
                    array ( 
                        'barangay_name' => 'Guyam Malaki',
                    ),
                    array ( 
                        'barangay_name' => 'Guyam Munti',
                    ),
                    array ( 
                        'barangay_name' => 'Harasan',
                    ),
                    array ( 
                        'barangay_name' => 'Kayquit I',
                    ),
                    array ( 
                        'barangay_name' => 'Kayquit II',
                    ),
                    array ( 
                        'barangay_name' => 'Kayquit III',
                    ),
                    array ( 
                        'barangay_name' => 'Kaytambog',
                    ),
                    array ( 
                        'barangay_name' => 'Kaytapos',
                    ),
                    array ( 
                        'barangay_name' => 'Limbon',
                    ),
                    array ( 
                        'barangay_name' => 'Lumampong Balagbag',
					),
                    array ( 
                        'barangay_name' => 'Lumampong Halayhay',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabangkahoy Cerca',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabangkahoy Lejos',
                    ),
                    array ( 
                        'barangay_name' => 'Mataas na Lupa',
                    ),
                    array ( 
                        'barangay_name' => 'Pulo',
                    ),
                    array ( 
                        'barangay_name' => 'Tambo Balagbag',
					),
                    array ( 
                        'barangay_name' => 'Tambo Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Tambo Kulit',
                    ),
                    array ( 
                        'barangay_name' => 'Tambo Malaki',	
                    ),
                ),
				array ( 
                    'town_name' => 'Kawit',
                    array ( 
                        'barangay_name' => 'Balsahan-Bisita',
                    ),
                    array ( 
                        'barangay_name' => 'Batong Dalig',
                    ),
                    array ( 
                        'barangay_name' => 'Binakayan-Aplaya',
                    ),
                    array ( 
                        'barangay_name' => 'Binakayan-Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Congbalay-Legaspi',
                    ),
                    array ( 
                        'barangay_name' => 'Gahak',
                    ),
                    array ( 
                        'barangay_name' => 'Kaingen',
                    ),
                    array ( 
                        'barangay_name' => 'Magdalo',
                    ),
                    array ( 
                        'barangay_name' => 'Manggahan-Lawin',
                    ),
                    array ( 
                        'barangay_name' => 'Marulas',
                    ),
                    array ( 
                        'barangay_name' => 'Panamitan',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Pulvorista',
                    ),
                    array ( 
                        'barangay_name' => 'Samala-Marquez',
					),
                    array ( 
                        'barangay_name' => 'San Sebastian',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Isabel',
                    ),
                    array ( 
                        'barangay_name' => 'Tabon I',
                    ),
                    array ( 
                        'barangay_name' => 'Tabon II',
                    ),
                    array ( 
                        'barangay_name' => 'Tabon III',
                    ),
                    array ( 
                        'barangay_name' => 'Toclong',
                    ),
                    array ( 
                        'barangay_name' => 'Tramo-Bantayan',
                    ),
                    array ( 
                        'barangay_name' => 'Wakas I',
                    ),
                    array ( 
                        'barangay_name' => 'Wakas II',	
                    ),
                ),
				array ( 
                    'town_name' => 'Magallanes',
                    array ( 
                        'barangay_name' => 'Baliwag',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Bendita I',
                    ),
                    array ( 
                        'barangay_name' => 'Bendita II',
                    ),
                    array ( 
                        'barangay_name' => 'Caluangan',
                    ),
                    array ( 
                        'barangay_name' => 'Kabulusan',
                    ),
                    array ( 
                        'barangay_name' => 'Medina',
                    ),
                    array ( 
                        'barangay_name' => 'Pacheco',
                    ),
                    array ( 
                        'barangay_name' => 'Ramirez',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin',
					),
                    array ( 
                        'barangay_name' => 'Tua',
                    ),
                    array ( 
                        'barangay_name' => 'Urdaneta',
                    ),
                ),
				array ( 
                    'town_name' => 'Maragondon',
                    array ( 
                        'barangay_name' => 'Bucal I',
                    ),
                    array ( 
                        'barangay_name' => 'Bucal II',
                    ),
                    array ( 
                        'barangay_name' => 'Bucal III A',
                    ),
                    array ( 
                        'barangay_name' => 'Bucal III B',
                    ),
                    array ( 
                        'barangay_name' => 'Bucal IV A',
                    ),
                    array ( 
                        'barangay_name' => 'Bucal IV B',
                    ),
                    array ( 
                        'barangay_name' => 'Caingin Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Garita I A',
                    ),
                    array ( 
                        'barangay_name' => 'Garita I B',
                    ),
                    array ( 
                        'barangay_name' => 'Layong Mabilog',
                    ),
                    array ( 
                        'barangay_name' => 'Mabato',
                    ),
                    array ( 
                        'barangay_name' => 'Pantihan I',
					),
                    array ( 
                        'barangay_name' => 'Pantihan II',
                    ),
                    array ( 
                        'barangay_name' => 'Pantihan III',
                    ),
                    array ( 
                        'barangay_name' => 'Pantihan IV',
                    ),
                    array ( 
                        'barangay_name' => 'Patungan',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagsanhan I A',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagsanhan I B',
					),
                    array ( 
                        'barangay_name' => 'Poblacion I A',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I B',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion II A',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion II B',
					),
                    array ( 
                        'barangay_name' => 'San Miguel I A',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel I B',
                    ),
                    array ( 
                        'barangay_name' => 'Talipusngo',
                    ),
                    array ( 
                        'barangay_name' => 'Tulay Kanluran',
					),
                    array ( 
                        'barangay_name' => 'Tulay Silangan',
                    ),
                ),
				array ( 
                    'town_name' => 'Mendez',
                    array ( 
                        'barangay_name' => 'Anuling Cerca I',
                    ),
                    array ( 
                        'barangay_name' => 'Anuling Cerca II',
                    ),
                    array ( 
                        'barangay_name' => 'Anuling Lejos I',
                    ),
                    array ( 
                        'barangay_name' => 'Anuling Lejos II',
                    ),
                    array ( 
                        'barangay_name' => 'Asis I',
                    ),
                    array ( 
                        'barangay_name' => 'Asis II',
                    ),
                    array ( 
                        'barangay_name' => 'Asis III',
                    ),
                    array ( 
                        'barangay_name' => 'Banayad',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Galicia I',
                    ),
                    array ( 
                        'barangay_name' => 'Galicia II',
                    ),
                    array ( 
                        'barangay_name' => 'Galicia III',
                    ),
                    array ( 
                        'barangay_name' => 'Miguel Mojica',
                    ),
                    array ( 
                        'barangay_name' => 'Palocpoc I',	
					),
                    array ( 
                        'barangay_name' => 'Palocpoc II',
                    ),
                    array ( 
                        'barangay_name' => 'Panungyan I',
                    ),
                    array ( 
                        'barangay_name' => 'Panungyan II',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I',
					),
                    array ( 
                        'barangay_name' => 'Poblacion II',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion III',
					),
                    array ( 
                        'barangay_name' => 'Poblacion IV',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion V',
					),
                    array ( 
                        'barangay_name' => 'Poblacion VI',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion VII',
                    ),
                ),
				array ( 
                    'town_name' => 'Naic',
                    array ( 
                        'barangay_name' => 'Bagong Karsada',
                    ),
                    array ( 
                        'barangay_name' => 'Balsahan',
                    ),
                    array ( 
                        'barangay_name' => 'Bancaan',
                    ),
                    array ( 
                        'barangay_name' => 'Bucana Malaki',
                    ),
                    array ( 
                        'barangay_name' => 'Bucana Sasahan',
                    ),
                    array ( 
                        'barangay_name' => 'Calubcob',
                    ),
                    array ( 
                        'barangay_name' => 'Capt. C. Nazareno',
                    ),
                    array ( 
                        'barangay_name' => 'Gomez-Zamora',
                    ),
                    array ( 
                        'barangay_name' => 'Halang',
                    ),
                    array ( 
                        'barangay_name' => 'Humbac',
                    ),
                    array ( 
                        'barangay_name' => 'Ibayo Estacion',
                    ),
                    array ( 
                        'barangay_name' => 'Ibayo Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Labac',
					),
                    array ( 
                        'barangay_name' => 'Latoria',
                    ),
                    array ( 
                        'barangay_name' => 'Mabolo',
                    ),
                    array ( 
                        'barangay_name' => 'Makina',
                    ),
                    array ( 
                        'barangay_name' => 'Malainen Bago',
                    ),
                    array ( 
                        'barangay_name' => 'Malainen Luma',
                    ),
                    array ( 
                        'barangay_name' => 'Molino',
                    ),
                    array ( 
                        'barangay_name' => 'Munting Mapino',
                    ),
                    array ( 
                        'barangay_name' => 'Muzon',
                    ),
                    array ( 
                        'barangay_name' => 'Palangue 1',
                    ),
                    array ( 
                        'barangay_name' => 'Palangue 2',
                    ),
                    array ( 
                        'barangay_name' => 'Palangue 3',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang',
					),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Santulan',
                    ),
                    array ( 
                        'barangay_name' => 'Sapa',
                    ),
                    array ( 
                        'barangay_name' => 'Timalan Balsahan',
					),
                    array ( 
                        'barangay_name' => 'Timalan Concepcion',
                    ),
                ),
				array ( 
                    'town_name' => 'Noveleta',
                    array ( 
                        'barangay_name' => 'Magdiwang',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Salcedo I',
                    ),
                    array ( 
                        'barangay_name' => 'Salcedo II',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio I',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio II',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose I',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose II',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan I',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan II',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael I',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael II',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael III',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael IV',
					),
                    array ( 
                        'barangay_name' => 'Santa Rosa I',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Rosa II',
                    ),
                ),
				array ( 
                    'town_name' => 'Rosario',
                    array ( 
                        'barangay_name' => 'Bagbag I',
                    ),
                    array ( 
                        'barangay_name' => 'Bagbag II',
                    ),
                    array ( 
                        'barangay_name' => 'Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Ligtong I',
                    ),
                    array ( 
                        'barangay_name' => 'Ligtong II',
                    ),
                    array ( 
                        'barangay_name' => 'Ligtong III',
                    ),
                    array ( 
                        'barangay_name' => 'Ligtong IV',
                    ),
                    array ( 
                        'barangay_name' => 'Muzon I',
                    ),
                    array ( 
                        'barangay_name' => 'Muzon II',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Sapa I',
                    ),
                    array ( 
                        'barangay_name' => 'Sapa II',
                    ),
                    array ( 
                        'barangay_name' => 'Sapa III',
                    ),
                    array ( 
                        'barangay_name' => 'Sapa IV',
					),
					array ( 
                        'barangay_name' => 'Silangan I',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan II',
                    ),
                    array ( 
                        'barangay_name' => 'Tejeros Convention',
                    ),
                    array ( 
                        'barangay_name' => 'Wawa I',
                    ),
                    array ( 
                        'barangay_name' => 'Wawa II',
					),
                    array ( 
                        'barangay_name' => 'Wawa III',
                    ),
                ),
				array ( 
                    'town_name' => 'Silang',
                    array ( 
                        'barangay_name' => 'Acacia',
                    ),
                    array ( 
                        'barangay_name' => 'Adlas',
                    ),
                    array ( 
                        'barangay_name' => 'Anahaw I',
                    ),
                    array ( 
                        'barangay_name' => 'Anahaw II',
                    ),
                    array ( 
                        'barangay_name' => 'Balite I',
                    ),
                    array ( 
                        'barangay_name' => 'Balite II',
                    ),
                    array ( 
                        'barangay_name' => 'Balubad',
                    ),
                    array ( 
                        'barangay_name' => 'Banaba',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay V',
                    ),
                    array ( 
                        'barangay_name' => 'Batas',
					),
                    array ( 
                        'barangay_name' => 'Biga I',
                    ),
                    array ( 
                        'barangay_name' => 'Biga II',
                    ),
                    array ( 
                        'barangay_name' => 'Biluso',
                    ),
                    array ( 
                        'barangay_name' => 'Bucal',
                    ),
                    array ( 
                        'barangay_name' => 'Buho',
                    ),
                    array ( 
                        'barangay_name' => 'Bulihan',
                    ),
                    array ( 
                        'barangay_name' => 'Cabangaan',
                    ),
                    array ( 
                        'barangay_name' => 'Carmen',
                    ),
                    array ( 
                        'barangay_name' => 'Hoyo',
                    ),
                    array ( 
                        'barangay_name' => 'Hukay',
                    ),
                    array ( 
                        'barangay_name' => 'Iba',
                    ),
                    array ( 
                        'barangay_name' => 'Inchican',
					),
                    array ( 
                        'barangay_name' => 'Ipil I',
                    ),
                    array ( 
                        'barangay_name' => 'Ipil II',
                    ),
                    array ( 
                        'barangay_name' => 'Kalubkob',
                    ),
                    array ( 
                        'barangay_name' => 'Kaong',
                    ),
                    array ( 
                        'barangay_name' => 'Lalaan I',
                    ),
                    array ( 
                        'barangay_name' => 'Lalaan II',
					),
                    array ( 
                        'barangay_name' => 'Litlit',
                    ),
                    array ( 
                        'barangay_name' => 'Lucsuhin',
                    ),
                    array ( 
                        'barangay_name' => 'Lumil',
                    ),
                    array ( 
                        'barangay_name' => 'Maguyam',
                    ),
                    array ( 
                        'barangay_name' => 'Malabag',
                    ),
                    array ( 
                        'barangay_name' => 'Malaking Tatyao',
					),
                    array ( 
                        'barangay_name' => 'Mataas na Burol',
                    ),
                    array ( 
                        'barangay_name' => 'Munting Ilog',
                    ),
                    array ( 
                        'barangay_name' => 'Narra I',
                    ),
                    array ( 
                        'barangay_name' => 'Narra II',
                    ),
                    array ( 
                        'barangay_name' => 'Narra III',
                    ),
                    array ( 
                        'barangay_name' => 'Paligawan',
					),
					array ( 
                        'barangay_name' => 'Pasong Langka',
                    ),
                    array ( 
                        'barangay_name' => 'Pooc I',
                    ),
                    array ( 
                        'barangay_name' => 'Pooc II',
                    ),
                    array ( 
                        'barangay_name' => 'Pulong Bunga',
                    ),
                    array ( 
                        'barangay_name' => 'Pulong Saging',
                    ),
                    array ( 
                        'barangay_name' => 'Puting Kahoy',
                    ),
                    array ( 
                        'barangay_name' => 'Sabutan',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel I',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel II',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente I',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente II',
                    ),
                    array ( 
                        'barangay_name' => 'Santol',
                    ),
                    array ( 
                        'barangay_name' => 'Tartaria',
					),
                    array ( 
                        'barangay_name' => 'Tibig',
                    ),
                    array ( 
                        'barangay_name' => 'Toledo',
                    ),
                    array ( 
                        'barangay_name' => 'Tubuan I',
                    ),
                    array ( 
                        'barangay_name' => 'Tubuan II',
                    ),
                    array ( 
                        'barangay_name' => 'Tubuan III',
                    ),
                    array ( 
                        'barangay_name' => 'Ulat',
                    ),
                    array ( 
                        'barangay_name' => 'Yakal',
                    ),
                    array ( 
                        'barangay_name' => 'Silang Junction North',
                    ),
                    array ( 
                        'barangay_name' => 'Silang Junction South',
                    ),
                ),
				array ( 
                    'town_name' => 'Tagaytay',
                    array ( 
                        'barangay_name' => 'Asisan',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Tubig',
                    ),
                    array ( 
                        'barangay_name' => 'Calabuso',
                    ),
                    array ( 
                        'barangay_name' => 'Dapdap East',
                    ),
                    array ( 
                        'barangay_name' => 'Dapdap West',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'Guinhawa North',
                    ),
                    array ( 
                        'barangay_name' => 'Guinhawa South',
                    ),
                    array ( 
                        'barangay_name' => 'Iruhin East',
                    ),
                    array ( 
                        'barangay_name' => 'Iruhin South',
                    ),
                    array ( 
                        'barangay_name' => 'Iruhin West',
                    ),
                    array ( 
                        'barangay_name' => 'Kaybagal East',
                    ),
                    array ( 
                        'barangay_name' => 'Kaybagal North',
                    ),
                    array ( 
                        'barangay_name' => 'Kaybagal South ',
					),
                    array ( 
                        'barangay_name' => 'Mag-Asawang Ilat',
                    ),
                    array ( 
                        'barangay_name' => 'Maharlika East',
                    ),
                    array ( 
                        'barangay_name' => 'Maharlika West',
                    ),
                    array ( 
                        'barangay_name' => 'Maitim 2nd Central',
                    ),
                    array ( 
                        'barangay_name' => 'Maitim 2nd East',
                    ),
                    array ( 
                        'barangay_name' => 'Maitim 2nd West',
                    ),
                    array ( 
                        'barangay_name' => 'Mendez Crossing East',
                    ),
                    array ( 
                        'barangay_name' => 'Mendez Crossing West',
                    ),
                    array ( 
                        'barangay_name' => 'Neogan',
                    ),
                    array ( 
                        'barangay_name' => 'Patutong Malaki North',
                    ),
                    array ( 
                        'barangay_name' => 'Patutong Malaki South',
                    ),
                    array ( 
                        'barangay_name' => 'Sambong',
					),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'Silang Junction North',
                    ),
                    array ( 
                        'barangay_name' => 'Silang Junction South',
					),
                    array ( 
                        'barangay_name' => 'Sungay North',
                    ),
                    array ( 
                        'barangay_name' => 'Sungay South',
                    ),
                    array ( 
                        'barangay_name' => 'Tolentino East',
					),
                    array ( 
                        'barangay_name' => 'Tolentino West',
                    ),
                    array ( 
                        'barangay_name' => 'Zambal',
                    ),
                ),
				array ( 
                    'town_name' => 'Tanza',
                    array ( 
                        'barangay_name' => 'Amaya I',
                    ),
                    array ( 
                        'barangay_name' => 'Amaya II',
                    ),
                    array ( 
                        'barangay_name' => 'Amaya III',
                    ),
                    array ( 
                        'barangay_name' => 'Amaya IV',
                    ),
                    array ( 
                        'barangay_name' => 'Amaya V',
                    ),
                    array ( 
                        'barangay_name' => 'Amaya VI',
                    ),
                    array ( 
                        'barangay_name' => 'Amaya VII',
                    ),
                    array ( 
                        'barangay_name' => 'Bagtas',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV',
                    ),
                    array ( 
                        'barangay_name' => 'Biga',
                    ),
                    array ( 
                        'barangay_name' => 'Biwas',
					),
                    array ( 
                        'barangay_name' => 'Bucal',
                    ),
                    array ( 
                        'barangay_name' => 'Bunga',
                    ),
                    array ( 
                        'barangay_name' => 'Calibuyo',
                    ),
                    array ( 
                        'barangay_name' => 'Capipisa',
                    ),
                    array ( 
                        'barangay_name' => 'Daang Amaya I',
                    ),
                    array ( 
                        'barangay_name' => 'Daang Amaya II',
                    ),
                    array ( 
                        'barangay_name' => 'Daang Amaya III',
                    ),
                    array ( 
                        'barangay_name' => 'Halayhay',
                    ),
                    array ( 
                        'barangay_name' => 'Julugan I',
                    ),
                    array ( 
                        'barangay_name' => 'Julugan II',
                    ),
                    array ( 
                        'barangay_name' => 'Julugan III',
                    ),
                    array ( 
                        'barangay_name' => 'Julugan IV',
					),
                    array ( 
                        'barangay_name' => 'Julugan V',
                    ),
                    array ( 
                        'barangay_name' => 'Julugan VI',
                    ),
                    array ( 
                        'barangay_name' => 'Julugan VII',
					),
                    array ( 
                        'barangay_name' => 'Julugan VIII',
                    ),
                    array ( 
                        'barangay_name' => 'Lambingan',
                    ),
                    array ( 
                        'barangay_name' => 'Mulawin',
					),
                    array ( 
                        'barangay_name' => 'Paradahan I',
                    ),
                    array ( 
                        'barangay_name' => 'Paradahan II',
                    ),
                    array ( 
                        'barangay_name' => 'Punta I',
					),
                    array ( 
                        'barangay_name' => 'Punta II',
                    ),
                    array ( 
                        'barangay_name' => 'Sahud Ulan',
                    ),
                    array ( 
                        'barangay_name' => 'Sanja Mayor',
					),
                    array ( 
                        'barangay_name' => 'Santol',
					),
                    array ( 
                        'barangay_name' => 'Tanauan',
					),
                    array ( 
                        'barangay_name' => 'Tres Cruses',
                    ),
                ),
				array ( 
                    'town_name' => 'Ternate',
                    array ( 
                        'barangay_name' => 'Bucana',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I A',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion II ',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion III',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan I',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan II',
                    ),
                    array ( 
                        'barangay_name' => 'Sapang I',
                    ),
                    array ( 
                        'barangay_name' => 'Sapang II',		
                    ),
                ),
				array ( 
                    'town_name' => 'Trece Martires',
                    array ( 
                        'barangay_name' => 'Aguado',
                    ),
                    array ( 
                        'barangay_name' => 'Cabezas',
                    ),
                    array ( 
                        'barangay_name' => 'Cabuco',
                    ),
                    array ( 
                        'barangay_name' => 'Conchu ',
                    ),
                    array ( 
                        'barangay_name' => 'De Ocampo',
                    ),
                    array ( 
                        'barangay_name' => 'Gregorio',
                    ),
                    array ( 
                        'barangay_name' => 'Inocencio',
                    ),
                    array ( 
                        'barangay_name' => 'Lallana',
                    ),
                    array ( 
                        'barangay_name' => 'Lapidario',
                    ),
                    array ( 
                        'barangay_name' => 'Luciano',
                    ),
                    array ( 
                        'barangay_name' => 'Osorio',
                    ),
                    array ( 
                        'barangay_name' => 'Perez',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin',
                    ),
                ),
            ),
				//*End of Cavite Province
				
				//*Start of Batangas Province
				
			array(
                'province_name' => 'Batangas',
				array ( 
                    'town_name' => 'Agoncillo',
                    array ( 
                        'barangay_name' => 'Adia',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Sikat',
                    ),
                    array ( 
                        'barangay_name' => 'Balangon',
                    ),
                    array ( 
                        'barangay_name' => 'Bangin',
                    ),
                    array ( 
                        'barangay_name' => 'Banyaga',
                    ),
                    array ( 
                        'barangay_name' => 'Barigon',
                    ),
                    array ( 
                        'barangay_name' => 'Bilibinwang',
                    ),
                    array ( 
                        'barangay_name' => 'Coral na Munti',
                    ),
                    array ( 
                        'barangay_name' => 'Guitna',
                    ),
                    array ( 
                        'barangay_name' => 'Mabini',
                    ),
                    array ( 
                        'barangay_name' => 'Pamiga',
                    ),
                    array ( 
                        'barangay_name' => 'Panhulan',
                    ),
                    array ( 
                        'barangay_name' => 'Pansipit',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
					),
                    array ( 
                        'barangay_name' => 'Pook',
                    ),
                    array ( 
                        'barangay_name' => 'San Jacinto',
                    ),
                    array ( 
                        'barangay_name' => 'San Teodoro',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cruz',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Tomas',
                    ),
                    array ( 
                        'barangay_name' => 'Subic Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Subic Ilaya',						
                    ),
                ),
				array ( 
                    'town_name' => 'Alitagtag',
                    array ( 
                        'barangay_name' => 'Balagbag',
                    ),
                    array ( 
                        'barangay_name' => 'Concepcion',
                    ),
                    array ( 
                        'barangay_name' => 'Concordia',
                    ),
                    array ( 
                        'barangay_name' => 'Dalipit East',
                    ),
                    array ( 
                        'barangay_name' => 'Dalipit West',
                    ),
                    array ( 
                        'barangay_name' => 'Dominador East',
                    ),
                    array ( 
                        'barangay_name' => 'Dominador West',
                    ),
                    array ( 
                        'barangay_name' => 'Munlawin Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Munlawin Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Muzon Primero',
                    ),
                    array ( 
                        'barangay_name' => 'Muzon Segundo',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagkurusan',
                    ),
                    array ( 
                        'barangay_name' => 'Ping-As',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion East',
					),
                    array ( 
                        'barangay_name' => 'Poblacion West',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cruz',
                    ),
                    array ( 
                        'barangay_name' => 'Tadlac',		
                    ),
                ),
				array ( 
                    'town_name' => 'Balayan',
                    array ( 
                        'barangay_name' => 'Baclaran',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 8',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 9',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 10',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 11',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 12',
                    ),
                    array ( 
                        'barangay_name' => 'Calan',
					),
                    array ( 
                        'barangay_name' => 'Caloocan',
                    ),
                    array ( 
                        'barangay_name' => 'Calzada',
                    ),
                    array ( 
                        'barangay_name' => 'Canda',
                    ),
                    array ( 
                        'barangay_name' => 'Carenahan',
                    ),
                    array ( 
                        'barangay_name' => 'Caybunga',
                    ),
                    array ( 
                        'barangay_name' => 'Cayponce',
                    ),
                    array ( 
                        'barangay_name' => 'Dalig',
                    ),
                    array ( 
                        'barangay_name' => 'Dao',
                    ),
                    array ( 
                        'barangay_name' => 'Dilao',
                    ),
                    array ( 
                        'barangay_name' => 'Duhatan',
                    ),
                    array ( 
                        'barangay_name' => 'Durungao',
                    ),
                    array ( 
                        'barangay_name' => 'Gimalas',
					),
                    array ( 
                        'barangay_name' => 'Gumamela',
                    ),
                    array ( 
                        'barangay_name' => 'Lagnas',
                    ),
                    array ( 
                        'barangay_name' => 'Lanatan',
                    ),
                    array ( 
                        'barangay_name' => 'Langgangan',
                    ),
                    array ( 
                        'barangay_name' => 'Lucban Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Lucban Putol',
                    ),
                    array ( 
                        'barangay_name' => 'Magabe',
					),
                    array ( 
                        'barangay_name' => 'Malalay',
                    ),
                    array ( 
                        'barangay_name' => 'Munting Tubig',
                    ),
                    array ( 
                        'barangay_name' => 'Navotas',
                    ),
                    array ( 
                        'barangay_name' => 'Palikpikan',
                    ),
                    array ( 
                        'barangay_name' => 'Patugo',
					),
                    array ( 
                        'barangay_name' => 'Pooc',
                    ),
                    array ( 
                        'barangay_name' => 'Sambat',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaga',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Piro',
					),
                    array ( 
                        'barangay_name' => 'Santol',
                    ),
                    array ( 
                        'barangay_name' => 'Sukol',
                    ),
                    array ( 
                        'barangay_name' => 'Tactac',
                    ),
                    array ( 
                        'barangay_name' => 'Taludtud',
                    ),
                    array ( 
                        'barangay_name' => 'Tanggoy',
                    ),
                ),
				array ( 
                    'town_name' => 'Balete',
                    array ( 
                        'barangay_name' => 'Alangilan',
                    ),
                    array ( 
                        'barangay_name' => 'Calawit',
                    ),
                    array ( 
                        'barangay_name' => 'Looc',
                    ),
                    array ( 
                        'barangay_name' => 'Magapi',
                    ),
                    array ( 
                        'barangay_name' => 'Makina',
                    ),
                    array ( 
                        'barangay_name' => 'Malabanan',
                    ),
                    array ( 
                        'barangay_name' => 'Paligawan',
                    ),
                    array ( 
                        'barangay_name' => 'Palsara',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Sala',
                    ),
                    array ( 
                        'barangay_name' => 'Sampalocan',
                    ),
                    array ( 
                        'barangay_name' => 'San Sebastian',
                    ),
                    array ( 
                        'barangay_name' => 'Solis',
                    ),
                ),
				array ( 
                    'town_name' => 'Batangas',
                    array ( 
                        'barangay_name' => 'Alangilan',
                    ),
                    array ( 
                        'barangay_name' => 'Balagtas',
                    ),
                    array ( 
                        'barangay_name' => 'Banaba Center',
                    ),
                    array ( 
                        'barangay_name' => 'Banaba Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Banaba Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Banaba Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 8',
					),
                    array ( 
                        'barangay_name' => 'Barangay 9',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 10',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 11',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 12',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 13',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 14',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 15',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 16',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 17',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 18',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 19',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 20',
					),
                    array ( 
                        'barangay_name' => 'Barangay 21',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 22',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 23',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 24',
                    ),
                    array ( 
                        'barangay_name' => 'Bilogo',
                    ),
                    array ( 
                        'barangay_name' => 'Bolbok',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Calicanto',
                    ),
                    array ( 
                        'barangay_name' => 'Catandala',
                    ),
                    array ( 
                        'barangay_name' => 'Concepcion',
                    ),
                    array ( 
                        'barangay_name' => 'Conde Itaas',
                    ),
                    array ( 
                        'barangay_name' => 'Conde Labak',
                    ),
                    array ( 
                        'barangay_name' => 'Cuta',
					),
					array ( 
                        'barangay_name' => 'Dalig',
                    ),
                    array ( 
                        'barangay_name' => 'Dela Paz',
                    ),
                    array ( 
                        'barangay_name' => 'Dela Paz Pulot Aplaya',
                    ),
                    array ( 
                        'barangay_name' => 'Dela Paz Pulot Itaas',
                    ),
                    array ( 
                        'barangay_name' => 'Domoclay',
                    ),
                    array ( 
                        'barangay_name' => 'Dumantay',
                    ),
                    array ( 
                        'barangay_name' => 'Gulod Itaas',
                    ),
                    array ( 
                        'barangay_name' => 'Gulod Labak',
                    ),
                    array ( 
                        'barangay_name' => 'Haligue Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Haligue Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Ilihan',
                    ),
                    array ( 
                        'barangay_name' => 'Kumba',
					),
                    array ( 
                        'barangay_name' => 'Kumintang Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Kumintang Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Libjo',
                    ),
                    array ( 
                        'barangay_name' => 'Maapas',
                    ),
                    array ( 
                        'barangay_name' => 'Mabacong',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabang Dahilig',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabang Parang',
                    ),
                    array ( 
                        'barangay_name' => 'Mahacot Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Mahacot Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Malalim',
                    ),
                    array ( 
                        'barangay_name' => 'Malibayo',
                    ),
                    array ( 
                        'barangay_name' => 'Malitam',
                    ),
                    array ( 
                        'barangay_name' => 'Maruclap',
					),
                    array ( 
                        'barangay_name' => 'Pagkilatan',
                    ),
                    array ( 
                        'barangay_name' => 'Paharang Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Paharang Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Pallocan Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Pallocan Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Pinamucan',
                    ),
                    array ( 
                        'barangay_name' => 'Pinamucan Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Pinamucan Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaga',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose Sico',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
					),
                    array ( 
                        'barangay_name' => 'San Pedro',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Clara',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Rita Aplaya',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Rita Karsada',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Domingo',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'Simlong',
                    ),
                    array ( 
                        'barangay_name' => 'Sirang Lupa',
                    ),
                    array ( 
                        'barangay_name' => 'Sorosoro Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Sorosoro Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Sorosoro Karsada',
                    ),
                    array ( 
                        'barangay_name' => 'Tabangao Ambulong',
                    ),
                    array ( 
                        'barangay_name' => 'Tabangao Aplaya',
					),
                    array ( 
                        'barangay_name' => 'Tabangao Dao',
                    ),
                    array ( 
                        'barangay_name' => 'Talahib Pandayan',
                    ),
                    array ( 
                        'barangay_name' => 'Talahib Payapa',
                    ),
                    array ( 
                        'barangay_name' => 'Talumpok Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'Talumpok Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Tinga Itaas',
                    ),
                    array ( 
                        'barangay_name' => 'Tinga Labak',
                    ),
                    array ( 
                        'barangay_name' => 'Tulo',
                    ),
                    array ( 
                        'barangay_name' => 'Wawa',
                    ),
                ),
				array ( 
                    'town_name' => 'Bauan',
                    array ( 
                        'barangay_name' => 'Alagao',
                    ),
                    array ( 
                        'barangay_name' => 'Aplaya',
                    ),
                    array ( 
                        'barangay_name' => 'As-Is',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Baguilawa',
                    ),
                    array ( 
                        'barangay_name' => 'Balayong',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV',
                    ),
                    array ( 
                        'barangay_name' => 'Bolo',
                    ),
                    array ( 
                        'barangay_name' => 'Colvo',
                    ),
                    array ( 
                        'barangay_name' => 'Cupang',
                    ),
                    array ( 
                        'barangay_name' => 'Durungao',
					),
                    array ( 
                        'barangay_name' => 'Gulibay',
                    ),
                    array ( 
                        'barangay_name' => 'Inicbulan',
                    ),
                    array ( 
                        'barangay_name' => 'Locloc',
                    ),
                    array ( 
                        'barangay_name' => 'Magalang-Galang',
                    ),
                    array ( 
                        'barangay_name' => 'Malindig',
                    ),
                    array ( 
                        'barangay_name' => 'Manalupong',
                    ),
                    array ( 
                        'barangay_name' => 'Manghinao Proper',
                    ),
                    array ( 
                        'barangay_name' => 'Manghinao Uno',
                    ),
                    array ( 
                        'barangay_name' => 'New Danglayan',
                    ),
                    array ( 
                        'barangay_name' => 'Orense',
                    ),
                    array ( 
                        'barangay_name' => 'Pitugo',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
					),
                    array ( 
                        'barangay_name' => 'Sampaguita',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres Proper',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres Uno',
                    ),
                    array ( 
                        'barangay_name' => 'San Diego',
					),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Pablo',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'San Teodoro',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Domingo',
                    ),
                    array ( 
                        'barangay_name' => 'Sinala',	
                    ),
                ),
				array ( 
                    'town_name' => 'Calaca',
                    array ( 
                        'barangay_name' => 'Baclas',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Tubig',
                    ),
                    array ( 
                        'barangay_name' => 'Balimbing',
                    ),
                    array ( 
                        'barangay_name' => 'Bambang',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Bisaya',
                    ),
                    array ( 
                        'barangay_name' => 'Cahil',
                    ),
                    array ( 
                        'barangay_name' => 'Calantas',
                    ),
                    array ( 
                        'barangay_name' => 'Caluangan',
					),
                    array ( 
                        'barangay_name' => 'Camastilisan',
                    ),
                    array ( 
                        'barangay_name' => 'Coral ni Bacal',
                    ),
                    array ( 
                        'barangay_name' => 'Coral ni Lopez',
                    ),
                    array ( 
                        'barangay_name' => 'Dacanlao',
                    ),
                    array ( 
                        'barangay_name' => 'Dila',
                    ),
                    array ( 
                        'barangay_name' => 'Loma',
                    ),
                    array ( 
                        'barangay_name' => 'Lumbang Calzada',
                    ),
                    array ( 
                        'barangay_name' => 'Lumbang na Bata',
                    ),
                    array ( 
                        'barangay_name' => 'Lumbang na Matanda',
                    ),
                    array ( 
                        'barangay_name' => 'Madalunot',
                    ),
                    array ( 
                        'barangay_name' => 'Makina',
                    ),
                    array ( 
                        'barangay_name' => 'Matipok',
					),
                    array ( 
                        'barangay_name' => 'Munting Coral',
                    ),
                    array ( 
                        'barangay_name' => 'Niyugan',
                    ),
                    array ( 
                        'barangay_name' => 'Pantay',
                    ),
                    array ( 
                        'barangay_name' => 'Puting Bato East',
					),
                    array ( 
                        'barangay_name' => 'Puting Bato West',
                    ),
                    array ( 
                        'barangay_name' => 'Puting Kahoy',
                    ),
                    array ( 
                        'barangay_name' => 'Quisumbing',
                    ),
                    array ( 
                        'barangay_name' => 'Salong',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael',
                    ),
                    array ( 
                        'barangay_name' => 'Sinisian',
                    ),
                    array ( 
                        'barangay_name' => 'Taklang Anak',
                    ),
                    array ( 
                        'barangay_name' => 'Talisay',
                    ),
                    array ( 
                        'barangay_name' => 'Tamayo',
                    ),
                    array ( 
                        'barangay_name' => 'Timbain',
                    ),
                ),
				array ( 
                    'town_name' => 'Calatagan',
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Baha',
                    ),
                    array ( 
                        'barangay_name' => 'Balibago',
                    ),
                    array ( 
                        'barangay_name' => 'Balitoc',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Biga',
                    ),
                    array ( 
                        'barangay_name' => 'Bucal',
                    ),
                    array ( 
                        'barangay_name' => 'Carlosa',
                    ),
                    array ( 
                        'barangay_name' => 'Carretunan',
                    ),
                    array ( 
                        'barangay_name' => 'Encarnacion',
                    ),
                    array ( 
                        'barangay_name' => 'Gulod',
					),
                    array ( 
                        'barangay_name' => 'Hukay',
                    ),
                    array ( 
                        'barangay_name' => 'Lucsuhin',
                    ),
                    array ( 
                        'barangay_name' => 'Luya',
                    ),
                    array ( 
                        'barangay_name' => 'Paraiso',
                    ),
                    array ( 
                        'barangay_name' => 'Quilitisan',
                    ),
                    array ( 
                        'barangay_name' => 'Real',
                    ),
                    array ( 
                        'barangay_name' => 'Sambungan',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Ana',
                    ),
                    array ( 
                        'barangay_name' => 'Talibayog',
                    ),
                    array ( 
                        'barangay_name' => 'Talisay',
                    ),
                    array ( 
                        'barangay_name' => 'Tanagan',		
                    ),
                ),
				array ( 
                    'town_name' => 'Cuenca',
                    array ( 
                        'barangay_name' => 'Balagbag',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 8',
                    ),
                    array ( 
                        'barangay_name' => 'Bungahan',
                    ),
                    array ( 
                        'barangay_name' => 'Calumayin',
                    ),
                    array ( 
                        'barangay_name' => 'Dalipit East',
                    ),
                    array ( 
                        'barangay_name' => 'Dalipit West',
                    ),
                    array ( 
                        'barangay_name' => 'Dita',
					),
                    array ( 
                        'barangay_name' => 'Don Juan',
                    ),
                    array ( 
                        'barangay_name' => 'Emmanuel',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabao',
                    ),
                    array ( 
                        'barangay_name' => 'Labac',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagkaisahan',
                    ),
                    array ( 
                        'barangay_name' => 'San Felipe',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                ),
				array ( 
                    'town_name' => 'Ibaan',
                    array ( 
                        'barangay_name' => 'Bago',
                    ),
                    array ( 
                        'barangay_name' => 'Balanga',
                    ),
                    array ( 
                        'barangay_name' => 'Bungahan',
                    ),
                    array ( 
                        'barangay_name' => 'Calamias',
                    ),
                    array ( 
                        'barangay_name' => 'Catandala',
                    ),
                    array ( 
                        'barangay_name' => 'Coliat',
                    ),
                    array ( 
                        'barangay_name' => 'Dayapan',
                    ),
                    array ( 
                        'barangay_name' => 'Lapu-lapu',
                    ),
                    array ( 
                        'barangay_name' => 'Lucsuhin',
                    ),
                    array ( 
                        'barangay_name' => 'Mabalor',
                    ),
                    array ( 
                        'barangay_name' => 'Malainin',
                    ),
                    array ( 
                        'barangay_name' => 'Matala',
                    ),
                    array ( 
                        'barangay_name' => 'Munting-Tubig',
                    ),
                    array ( 
                        'barangay_name' => 'Palindan',
					),
                    array ( 
                        'barangay_name' => 'Pangao',
                    ),
                    array ( 
                        'barangay_name' => 'Panghayaan',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Quilo',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'Salaban I',
                    ),
                    array ( 
                        'barangay_name' => 'Salaban II',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin',
                    ),
                    array ( 
                        'barangay_name' => 'Sandalan',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'Talaibon',
                    ),
                    array ( 
                        'barangay_name' => 'Tulay na Patpat',		
                    ),
                ),
				array ( 
                    'town_name' => 'Laurel',
                    array ( 
                        'barangay_name' => 'As-Is',
                    ),
                    array ( 
                        'barangay_name' => 'Balakilong',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Berinayan',
                    ),
                    array ( 
                        'barangay_name' => 'Bugaan East',
                    ),
                    array ( 
                        'barangay_name' => 'Bugaan West',
                    ),
                    array ( 
                        'barangay_name' => 'Buso-buso',
                    ),
                    array ( 
                        'barangay_name' => 'Dayap Itaas',
                    ),
                    array ( 
                        'barangay_name' => 'Gulod',
                    ),
                    array ( 
                        'barangay_name' => 'J. Leviste',
					),
                    array ( 
                        'barangay_name' => 'Molinete',
                    ),
                    array ( 
                        'barangay_name' => 'Niyugan',
                    ),
                    array ( 
                        'barangay_name' => 'Paliparan',
                    ),
                    array ( 
                        'barangay_name' => 'San Gabriel',
                    ),
                    array ( 
                        'barangay_name' => 'San Gregorio',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria',
                    ),
                    array ( 
                        'barangay_name' => 'Ticub',
                    ),
                ),
				array ( 
                    'town_name' => 'Lemery',
                    array ( 
                        'barangay_name' => 'Anak-Dagat',
                    ),
                    array ( 
                        'barangay_name' => 'Arumahan',
                    ),
                    array ( 
                        'barangay_name' => 'Ayao-iyao',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Sikat',
                    ),
                    array ( 
                        'barangay_name' => 'Balanga',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Cahilan I',
                    ),
                    array ( 
                        'barangay_name' => 'Cahilan II',
                    ),
                    array ( 
                        'barangay_name' => 'Dayapan',
                    ),
                    array ( 
                        'barangay_name' => 'District I ',
                    ),
                    array ( 
                        'barangay_name' => 'District II',
                    ),
                    array ( 
                        'barangay_name' => 'District III',
                    ),
                    array ( 
                        'barangay_name' => 'District IV',
					),
                    array ( 
                        'barangay_name' => 'Dita',
                    ),
                    array ( 
                        'barangay_name' => 'Gulod',
                    ),
                    array ( 
                        'barangay_name' => 'Lucky',
                    ),
                    array ( 
                        'barangay_name' => 'Maguihan',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabang Dahilig',
                    ),
                    array ( 
                        'barangay_name' => 'Mahayahay',
                    ),
                    array ( 
                        'barangay_name' => 'Maigsing Dahilig',
                    ),
                    array ( 
                        'barangay_name' => 'Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Malinis',
                    ),
                    array ( 
                        'barangay_name' => 'Masalisi',
                    ),
                    array ( 
                        'barangay_name' => 'Mataas na Bayan',
                    ),
                    array ( 
                        'barangay_name' => 'Matingain I',
					),
                    array ( 
                        'barangay_name' => 'Matingain II',
                    ),
                    array ( 
                        'barangay_name' => 'Mayasang',
                    ),
                    array ( 
                        'barangay_name' => 'Niugan',
                    ),
                    array ( 
                        'barangay_name' => 'Nonong Casto',
                    ),
                    array ( 
                        'barangay_name' => 'Palanas',
                    ),
                    array ( 
                        'barangay_name' => 'Payapa Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Payapa Ilaya',
					),
					array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Sambal Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Sambal Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Itaas',
                    ),
                    array ( 
                        'barangay_name' => 'Sangalang',
                    ),
                    array ( 
                        'barangay_name' => 'Sinisian East',
                    ),
                    array ( 
                        'barangay_name' => 'Sinisian West',
                    ),
                    array ( 
                        'barangay_name' => 'Talaga',
                    ),
                    array ( 
                        'barangay_name' => 'Tubigan',
                    ),
                    array ( 
                        'barangay_name' => 'Tubuan',
                    ),
                    array ( 
                        'barangay_name' => 'Wawa Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Wawa Ilaya',
                    ),
                ),
				array ( 
                    'town_name' => 'Lian',
                    array ( 
                        'barangay_name' => 'Coliat',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Balibago',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Binubusan',
                    ),
                    array ( 
                        'barangay_name' => 'Bungahan',
                    ),
                    array ( 
                        'barangay_name' => 'Cumba',
                    ),
                    array ( 
                        'barangay_name' => 'Humayingan',
                    ),
                    array ( 
                        'barangay_name' => 'Kapito',
                    ),
                    array ( 
                        'barangay_name' => 'Lumaniag',
					),
                    array ( 
                        'barangay_name' => 'Luyahan',
                    ),
                    array ( 
                        'barangay_name' => 'Malaruhatan',
                    ),
                    array ( 
                        'barangay_name' => 'Matabungkay',
                    ),
                    array ( 
                        'barangay_name' => 'Prenza',
                    ),
                    array ( 
                        'barangay_name' => 'Puting-Kahoy',
                    ),
                    array ( 
                        'barangay_name' => 'San Diego',		
                    ),
                ),
				array ( 
                    'town_name' => 'Lipa',
                    array ( 
                        'barangay_name' => 'Adya',
                    ),
                    array ( 
                        'barangay_name' => 'Anilao',
                    ),
                    array ( 
                        'barangay_name' => 'Anilao-Labac',
                    ),
                    array ( 
                        'barangay_name' => 'Antipolo del Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Antipolo del Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Balintawak',
                    ),
                    array ( 
                        'barangay_name' => 'Banaybanay',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 12',
                    ),
                    array ( 
                        'barangay_name' => 'Bolbok',
                    ),
                    array ( 
                        'barangay_name' => 'Bugtong na Pulo',
                    ),
                    array ( 
                        'barangay_name' => 'Bulacnin',
                    ),
                    array ( 
                        'barangay_name' => 'Bulaklakan',
                    ),
                    array ( 
                        'barangay_name' => 'Calamias',
					),
                    array ( 
                        'barangay_name' => 'Cumba',
                    ),
                    array ( 
                        'barangay_name' => 'Dagatan',
                    ),
                    array ( 
                        'barangay_name' => 'Duhatan',
                    ),
                    array ( 
                        'barangay_name' => 'Halang',
                    ),
                    array ( 
                        'barangay_name' => 'Inosloban',
                    ),
                    array ( 
                        'barangay_name' => 'Kayumanggi',
                    ),
                    array ( 
                        'barangay_name' => 'Latag',
                    ),
                    array ( 
                        'barangay_name' => 'Lodlod',
                    ),
                    array ( 
                        'barangay_name' => 'Lumbang',
                    ),
                    array ( 
                        'barangay_name' => 'Mabini',
                    ),
                    array ( 
                        'barangay_name' => 'Malagonlong',
                    ),
                    array ( 
                        'barangay_name' => 'Malitlit',
					),
                    array ( 
                        'barangay_name' => 'Marauoy',
                    ),
                    array ( 
                        'barangay_name' => 'Mataas na Lupa',
                    ),
                    array ( 
                        'barangay_name' => 'Munting Pulo',
                    ),
                    array ( 
                        'barangay_name' => 'Pagolingin Bata',
                    ),
                    array ( 
                        'barangay_name' => 'Pagolingin East',
                    ),
                    array ( 
                        'barangay_name' => 'Pagolingin West',
                    ),
                    array ( 
                        'barangay_name' => 'Pangao',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagkawitan',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagtongulan',
                    ),
                    array ( 
                        'barangay_name' => 'Plaridel',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 3',
					),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 8',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 9',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 9-A',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 10',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 11',
                    ),
                    array ( 
                        'barangay_name' => 'Pusil',
                    ),
                    array ( 
                        'barangay_name' => 'Quezon',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
					),
                    array ( 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaguita',
                    ),
                    array ( 
                        'barangay_name' => 'San Benito',
                    ),
                    array ( 
                        'barangay_name' => 'San Carlos',
                    ),
                    array ( 
                        'barangay_name' => 'San Celestino',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'San Guillermo',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Lucas',
                    ),
                    array ( 
                        'barangay_name' => 'San Salvador',
                    ),
                    array ( 
                        'barangay_name' => 'San Sebastian',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Toribio',
					),
                    array ( 
                        'barangay_name' => 'Sapac',
                    ),
                    array ( 
                        'barangay_name' => 'Sico',
                    ),
                    array ( 
                        'barangay_name' => 'Talisay',
                    ),
                    array ( 
                        'barangay_name' => 'Tambo',
                    ),
                    array ( 
                        'barangay_name' => 'Tangob',
                    ),
                    array ( 
                        'barangay_name' => 'Tanguay',
                    ),
                    array ( 
                        'barangay_name' => 'Tibig',
                    ),
                    array ( 
                        'barangay_name' => 'Tipacan',
                    ),
                ),
				array ( 
                    'town_name' => 'Lobo',
                    array ( 
                        'barangay_name' => 'Apar',
                    ),
                    array ( 
                        'barangay_name' => 'Balatbat',
                    ),
                    array ( 
                        'barangay_name' => 'Balibago',
                    ),
                    array ( 
                        'barangay_name' => 'Banalo',
                    ),
                    array ( 
                        'barangay_name' => 'Biga',
                    ),
                    array ( 
                        'barangay_name' => 'Bignay',
                    ),
                    array ( 
                        'barangay_name' => 'Calo',
                    ),
                    array ( 
                        'barangay_name' => 'Calumpit',
                    ),
                    array ( 
                        'barangay_name' => 'Fabrica',
                    ),
                    array ( 
                        'barangay_name' => 'Jaybanga',
                    ),
                    array ( 
                        'barangay_name' => 'Lagadlarin',
                    ),
                    array ( 
                        'barangay_name' => 'Mabilog na Bundok',
                    ),
                    array ( 
                        'barangay_name' => 'Malabrigo',
                    ),
                    array ( 
                        'barangay_name' => 'Malalim na Sanog',
					),
                    array ( 
                        'barangay_name' => 'Malapad na Parang',
                    ),
                    array ( 
                        'barangay_name' => 'Masaguitsit',
                    ),
                    array ( 
                        'barangay_name' => 'Nagtalongtong',
                    ),
                    array ( 
                        'barangay_name' => 'Nagtoctoc',
                    ),
                    array ( 
                        'barangay_name' => 'Olo-olo',
                    ),
                    array ( 
                        'barangay_name' => 'Pinaghawanan',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Nicolas',
                    ),
                    array ( 
                        'barangay_name' => 'Sawang',
                    ),
                    array ( 
                        'barangay_name' => 'Soloc',
                    ),
                    array ( 
                        'barangay_name' => 'Tayuman',		
                    ),
                ),
				array ( 
                    'town_name' => 'Mabini',
                    array ( 
                        'barangay_name' => 'Anilao East',
                    ),
                    array ( 
                        'barangay_name' => 'Anilao Proper',
                    ),
                    array ( 
                        'barangay_name' => 'Bagalangit',
                    ),
                    array ( 
                        'barangay_name' => 'Bulacan',
                    ),
                    array ( 
                        'barangay_name' => 'Calamias',
                    ),
                    array ( 
                        'barangay_name' => 'Estrella',
                    ),
                    array ( 
                        'barangay_name' => 'Gasang',
                    ),
                    array ( 
                        'barangay_name' => 'Laurel',
                    ),
                    array ( 
                        'barangay_name' => 'Ligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Mainaga',
                    ),
                    array ( 
                        'barangay_name' => 'Mainit',
                    ),
                    array ( 
                        'barangay_name' => 'Majuben',
                    ),
                    array ( 
                        'barangay_name' => 'Malimatoc I',
                    ),
                    array ( 
                        'barangay_name' => 'Malimatoc II',
					),
                    array ( 
                        'barangay_name' => 'Nag-Iba',
                    ),
                    array ( 
                        'barangay_name' => 'Pilahan',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Pulang Lupa',
                    ),
                    array ( 
                        'barangay_name' => 'Pulong Anahao',
                    ),
                    array ( 
                        'barangay_name' => 'Pulong Balibaguhan',
                    ),
                    array ( 
                        'barangay_name' => 'Pulong Niogan',
                    ),
                    array ( 
                        'barangay_name' => 'Saguing',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaguita',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
					),
                    array ( 
                        'barangay_name' => 'San Teodoro',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Ana',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Mesa',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
					),
                    array ( 
                        'barangay_name' => 'Santo Tomas',
                    ),
                    array ( 
                        'barangay_name' => 'Solo',
                    ),
                    array ( 
                        'barangay_name' => 'Talaga East',
                    ),
                    array ( 
                        'barangay_name' => 'Talaga Proper',
                    ),
                ),
				array ( 
                    'town_name' => 'Malvar',
                    array ( 
                        'barangay_name' => 'Bagong Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Bilucao',
                    ),
                    array ( 
                        'barangay_name' => 'Bulihan',
                    ),
                    array ( 
                        'barangay_name' => 'Luta del Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Luta del Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres',
                    ),
                    array ( 
                        'barangay_name' => 'San Fernando',
                    ),
                    array ( 
                        'barangay_name' => 'San Gregorio',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro East',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro I ',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro II',
                    ),
                    array ( 
                        'barangay_name' => 'San Pioquinto',
					),
                    array ( 
                        'barangay_name' => 'Santiago',	
                    ),
                ),
				array ( 
                    'town_name' => 'Mataasnakahoy',
                    array ( 
                        'barangay_name' => 'Barangay II-A',
                    ),
                    array ( 
                        'barangay_name' => 'Bayorbor',
                    ),
                    array ( 
                        'barangay_name' => 'Bubuyan',
                    ),
                    array ( 
                        'barangay_name' => 'Calingatan',
                    ),
                    array ( 
                        'barangay_name' => 'District I',
                    ),
                    array ( 
                        'barangay_name' => 'District II',
                    ),
                    array ( 
                        'barangay_name' => 'District III',
                    ),
                    array ( 
                        'barangay_name' => 'District IV',
                    ),
                    array ( 
                        'barangay_name' => 'Kinalaglagan',
                    ),
                    array ( 
                        'barangay_name' => 'Loob',
                    ),
                    array ( 
                        'barangay_name' => 'Lumang Lipa',
                    ),
                    array ( 
                        'barangay_name' => 'Lumang Lipa',
                    ),
                    array ( 
                        'barangay_name' => 'Manggahan',
                    ),
                    array ( 
                        'barangay_name' => 'Nangkaan',
					),
					array ( 
                        'barangay_name' => 'San Sebastian',
                    ),
                    array ( 
                        'barangay_name' => 'Santol',
                    ),
                    array ( 
                        'barangay_name' => 'Upa',		
                    ),
                ),
				array ( 
                    'town_name' => 'Nasugbu',
                    array ( 
                        'barangay_name' => 'Aga',
                    ),
                    array ( 
                        'barangay_name' => 'Balaytigui',
                    ),
                    array ( 
                        'barangay_name' => 'Banilad',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 8',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 9',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 10',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 11',
					),
                    array ( 
                        'barangay_name' => 'Barangay 12',
                    ),
                    array ( 
                        'barangay_name' => 'Bilaran',
                    ),
                    array ( 
                        'barangay_name' => 'Bucana',
                    ),
                    array ( 
                        'barangay_name' => 'Bulihan',
                    ),
                    array ( 
                        'barangay_name' => 'Bunducan',
                    ),
                    array ( 
                        'barangay_name' => 'Butucan',
                    ),
                    array ( 
                        'barangay_name' => 'Calayo',
                    ),
                    array ( 
                        'barangay_name' => 'Catandaan',
                    ),
                    array ( 
                        'barangay_name' => 'Cogunan',
                    ),
                    array ( 
                        'barangay_name' => 'Dayap',
                    ),
                    array ( 
                        'barangay_name' => 'Kaylaway',
                    ),
                    array ( 
                        'barangay_name' => 'Kayrilaw',
					),
                    array ( 
                        'barangay_name' => 'Latag',
                    ),
                    array ( 
                        'barangay_name' => 'Looc',
					),
                    array ( 
                        'barangay_name' => 'Lumbangan',
                    ),
                    array ( 
                        'barangay_name' => 'Malapad na Bato',
                    ),
                    array ( 
                        'barangay_name' => 'Mataas na Pulo',
                    ),
                    array ( 
                        'barangay_name' => 'Maugat',
                    ),
                    array ( 
                        'barangay_name' => 'Munting Indan',
                    ),
                    array ( 
                        'barangay_name' => 'Natipuan',
                    ),
                    array ( 
                        'barangay_name' => 'Pantalan',
                    ),
                    array ( 
                        'barangay_name' => 'Papaya',
                    ),
                    array ( 
                        'barangay_name' => 'Putat',
                    ),
                    array ( 
                        'barangay_name' => 'Reparo',
                    ),
                    array ( 
                        'barangay_name' => 'Talangan',
                    ),
                    array ( 
                        'barangay_name' => 'Tumalim',
					),
                    array ( 
                        'barangay_name' => 'Utod',
                    ),
                    array ( 
                        'barangay_name' => 'Wawa',
                    ),
                ),
				array ( 
                    'town_name' => 'Padre Garcia',
                    array ( 
                        'barangay_name' => 'Banaba',
                    ),
                    array ( 
                        'barangay_name' => 'Banaybanay',
                    ),
                    array ( 
                        'barangay_name' => 'Bawi',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Castillo',
                    ),
                    array ( 
                        'barangay_name' => 'Cawongan',
                    ),
                    array ( 
                        'barangay_name' => 'Manggas',
                    ),
                    array ( 
                        'barangay_name' => 'Maugat East',
                    ),
                    array ( 
                        'barangay_name' => 'Maugat West',
                    ),
                    array ( 
                        'barangay_name' => 'Pansol',
                    ),
                    array ( 
                        'barangay_name' => 'Payapa',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Quilo-quilo North',
                    ),
                    array ( 
                        'barangay_name' => 'Quilo-quilo South',
					),
                    array ( 
                        'barangay_name' => 'San Felipe',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'Tamak',
                    ),
                    array ( 
                        'barangay_name' => 'Tangob',		
                    ),
                ),
				array ( 
                    'town_name' => 'Rosario',
                    array ( 
                        'barangay_name' => 'Alupay',
                    ),
                    array ( 
                        'barangay_name' => 'Antipolo',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Balibago',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay A',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay B',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay C',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay  D',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay  E',
                    ),
                    array ( 
                        'barangay_name' => 'Bayawang',
                    ),
                    array ( 
                        'barangay_name' => 'Baybayin',
                    ),
                    array ( 
                        'barangay_name' => 'Bulihan',
                    ),
                    array ( 
                        'barangay_name' => 'Cahigam',
                    ),
                    array ( 
                        'barangay_name' => 'Calantas',
					),
                    array ( 
                        'barangay_name' => 'Colongan',
                    ),
                    array ( 
                        'barangay_name' => 'Itlugan',
                    ),
                    array ( 
                        'barangay_name' => 'Leviste',
                    ),
                    array ( 
                        'barangay_name' => 'Lumbangan',
                    ),
                    array ( 
                        'barangay_name' => 'Maalas-As',
                    ),
                    array ( 
                        'barangay_name' => 'Mabato',
                    ),
                    array ( 
                        'barangay_name' => 'Mabunga',
                    ),
                    array ( 
                        'barangay_name' => 'Macalamcam A',
                    ),
                    array ( 
                        'barangay_name' => 'Macalamcam B',
                    ),
                    array ( 
                        'barangay_name' => 'Malaya',
                    ),
                    array ( 
                        'barangay_name' => 'Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Marilag',
					),
                    array ( 
                        'barangay_name' => 'Masaya',
                    ),
                    array ( 
                        'barangay_name' => 'Matamis',
                    ),
                    array ( 
                        'barangay_name' => 'Mavalor',
                    ),
                    array ( 
                        'barangay_name' => 'Mayuro',
                    ),
                    array ( 
                        'barangay_name' => 'Namuco',
                    ),
                    array ( 
                        'barangay_name' => 'Namunga',
                    ),
                    array ( 
                        'barangay_name' => 'Nasi',
                    ),
                    array ( 
                        'barangay_name' => 'Natu',
                    ),
                    array ( 
                        'barangay_name' => 'Palakpak',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagsibaan',
                    ),
                    array ( 
                        'barangay_name' => 'Putingkahoy',
                    ),
                    array ( 
                        'barangay_name' => 'Quilib',
					),
                    array ( 
                        'barangay_name' => 'Salao',
                    ),
                    array ( 
                        'barangay_name' => 'San Carlos',
                    ),
                    array ( 
                        'barangay_name' => 'San Ignacio',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cruz',
                    ),
                    array ( 
                        'barangay_name' => 'Timbugan',
                    ),
                    array ( 
                        'barangay_name' => 'Tiquiwan',
                    ),
                    array ( 
                        'barangay_name' => 'Tulos',
                    ),
                ),
				array ( 
                    'town_name' => 'San Jose',
                    array ( 
                        'barangay_name' => 'Aguila',
                    ),
                    array ( 
                        'barangay_name' => 'Anus',
                    ),
                    array ( 
                        'barangay_name' => 'Aya',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Balagtasin',
                    ),
                    array ( 
                        'barangay_name' => 'Balagtasin I',
                    ),
                    array ( 
                        'barangay_name' => 'Banaybanay I',
                    ),
                    array ( 
                        'barangay_name' => 'Banaybanay II',
                    ),
                    array ( 
                        'barangay_name' => 'Bigain I',
                    ),
                    array ( 
                        'barangay_name' => 'Bigain II',
                    ),
                    array ( 
                        'barangay_name' => 'Bigain South',
                    ),
                    array ( 
                        'barangay_name' => 'Calansayan',
                    ),
                    array ( 
                        'barangay_name' => 'Dagatan',
                    ),
                    array ( 
                        'barangay_name' => 'Don Luis',
					),
                    array ( 
                        'barangay_name' => 'Galamay-Amo',
                    ),
                    array ( 
                        'barangay_name' => 'Lalayat',
                    ),
                    array ( 
                        'barangay_name' => 'Lapolapo I',
                    ),
                    array ( 
                        'barangay_name' => 'Lapolapo II',
                    ),
                    array ( 
                        'barangay_name' => 'Lepute',
                    ),
                    array ( 
                        'barangay_name' => 'Lumil',
                    ),
                    array ( 
                        'barangay_name' => 'Mojon-Tampoy',
                    ),
                    array ( 
                        'barangay_name' => 'Natunuan',
                    ),
                    array ( 
                        'barangay_name' => 'Palanca',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagtung-Ulan',
                    ),
                    array (	 
                        'barangay_name' => 'Poblacion Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay II',	
					),
                    array (	 
                        'barangay_name' => 'Poblacion Barangay III',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay IV',
					),
                    array (	 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'Salaban',
					),
                    array (	 
                        'barangay_name' => 'Santo Cristo',
					),
                    array (	 
                        'barangay_name' => 'Taysan',
					),
                    array (	 
                        'barangay_name' => 'Tugtug',
                    ),
                ),
				array ( 
                    'town_name' => 'San Juan',
                    array ( 
                        'barangay_name' => 'Abung',
                    ),
                    array ( 
                        'barangay_name' => 'Balagbag',
                    ),
                    array ( 
                        'barangay_name' => 'Barualte',
                    ),
                    array ( 
                        'barangay_name' => 'Bataan',
                    ),
                    array ( 
                        'barangay_name' => 'Buhay na Sapa',
                    ),
                    array ( 
                        'barangay_name' => 'Bulsa',
                    ),
                    array ( 
                        'barangay_name' => 'Calicanto',
                    ),
                    array ( 
                        'barangay_name' => 'Calitcalit',
                    ),
                    array ( 
                        'barangay_name' => 'Calubcub I',
                    ),
                    array ( 
                        'barangay_name' => 'Calubcub II',
                    ),
                    array ( 
                        'barangay_name' => 'Catmon',
                    ),
                    array ( 
                        'barangay_name' => 'Coloconto',
                    ),
                    array ( 
                        'barangay_name' => 'Escribano',
                    ),
                    array ( 
                        'barangay_name' => 'Hugom',
					),
                    array ( 
                        'barangay_name' => 'Imelda',
                    ),
                    array ( 
                        'barangay_name' => 'Janaojanao',
                    ),
                    array ( 
                        'barangay_name' => 'Laiya-Aplaya',
                    ),
                    array ( 
                        'barangay_name' => 'Laiya-Ibabao',
                    ),
                    array ( 
                        'barangay_name' => 'Libato',
                    ),
                    array ( 
                        'barangay_name' => 'Lipahan',
                    ),
                    array ( 
                        'barangay_name' => 'Mabalanoy',
                    ),
                    array ( 
                        'barangay_name' => 'Maraykit',
                    ),
                    array ( 
                        'barangay_name' => 'Muzon',
                    ),
                    array ( 
                        'barangay_name' => 'Nagsaulay',
                    ),
                    array ( 
                        'barangay_name' => 'Palahanan I',
                    ),
                    array ( 
                        'barangay_name' => 'Palahanan II',
					 ),
                    array ( 
                        'barangay_name' => 'Palingowak',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagbayanan',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Poctol',
                    ),
                    array ( 
                        'barangay_name' => 'Pulangbato',
                    ),
                    array ( 
                        'barangay_name' => 'Putingbuhangin',
                    ),
                    array ( 
                        'barangay_name' => 'Quipot',
                    ),
                    array ( 
                        'barangay_name' => 'Sampiro',
                    ),
                    array ( 
                        'barangay_name' => 'Sapangan',
                    ),
                    array ( 
                        'barangay_name' => 'Sico I',
                    ),
                    array ( 
                        'barangay_name' => 'Sico II',
                    ),
                    array ( 
                        'barangay_name' => 'Subukin',
                    ),
                    array ( 
                        'barangay_name' => 'Talahiban I',
					),
					array ( 
                        'barangay_name' => 'Talahiban II',
                    ),
                    array ( 
                        'barangay_name' => 'Ticalan',
                    ),
                    array ( 
                        'barangay_name' => 'Tipaz',
                    ),
                ),
				array ( 
                    'town_name' => 'San Luis',
                    array ( 
                        'barangay_name' => 'Abiacao',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Tubig',
                    ),
                    array ( 
                        'barangay_name' => 'Balagtasin',
                    ),
                    array ( 
                        'barangay_name' => 'Balite',
                    ),
                    array ( 
                        'barangay_name' => 'Banoyo',
                    ),
                    array ( 
                        'barangay_name' => 'Boboy',
                    ),
                    array ( 
                        'barangay_name' => 'Bonliw',
                    ),
                    array ( 
                        'barangay_name' => 'Calumpang East',
                    ),
                    array ( 
                        'barangay_name' => 'Calumpang West',
                    ),
                    array ( 
                        'barangay_name' => 'Dulangan',
                    ),
                    array ( 
                        'barangay_name' => 'Durungao',
                    ),
                    array ( 
                        'barangay_name' => 'Locloc',
                    ),
                    array ( 
                        'barangay_name' => 'Luya',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabang Parang',
					),
                    array ( 
                        'barangay_name' => 'Manggahan',
                    ),
                    array ( 
                        'barangay_name' => 'Muzon',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Martin',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Monica',
                    ),
                    array ( 
                        'barangay_name' => 'Taliba',
                    ),
                    array ( 
                        'barangay_name' => 'Talon',
                    ),
                    array ( 
                        'barangay_name' => 'Tejero',
                    ),
                    array ( 
                        'barangay_name' => 'Tungal',		
                    ),
                ),
				array ( 
                    'town_name' => 'San Nicolas',
                    array ( 
                        'barangay_name' => 'Abelo',
                    ),
                    array ( 
                        'barangay_name' => 'Alas-as',
                    ),
                    array ( 
                        'barangay_name' => 'Balete',
                    ),
                    array ( 
                        'barangay_name' => 'Baluk-baluk',
                    ),
                    array ( 
                        'barangay_name' => 'Bancoro',
                    ),
                    array ( 
                        'barangay_name' => 'Bangin',
                    ),
                    array ( 
                        'barangay_name' => 'Calangay',
                    ),
                    array ( 
                        'barangay_name' => 'Hipit',
                    ),
                    array ( 
                        'barangay_name' => 'Maabud North',
                    ),
                    array ( 
                        'barangay_name' => 'Maabud South',
                    ),
                    array ( 
                        'barangay_name' => 'Munlawin',
                    ),
                    array ( 
                        'barangay_name' => 'Pansipit',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Pulang-Bato',
					),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'Sinturisan',
                    ),
                    array ( 
                        'barangay_name' => 'Tagudtod',
                    ),
                    array ( 
                        'barangay_name' => 'Talang',		
                    ),
                ),
				array ( 
                    'town_name' => 'San Pascual',
                    array ( 
                        'barangay_name' => 'Alalum',
                    ),
                    array ( 
                        'barangay_name' => 'Antipolo',
                    ),
                    array ( 
                        'barangay_name' => 'Balimbing',
                    ),
                    array ( 
                        'barangay_name' => 'Banaba',
                    ),
                    array ( 
                        'barangay_name' => 'Bayanan',
                    ),
                    array ( 
                        'barangay_name' => 'Danglayan',
                    ),
                    array ( 
                        'barangay_name' => 'Del Pilar',
                    ),
                    array ( 
                        'barangay_name' => 'Gelerang Kawayan',
                    ),
                    array ( 
                        'barangay_name' => 'Ilat North',
                    ),
                    array ( 
                        'barangay_name' => 'Ilat South',
                    ),
                    array ( 
                        'barangay_name' => 'Kaingin',
                    ),
                    array ( 
                        'barangay_name' => 'Laurel',
                    ),
                    array ( 
                        'barangay_name' => 'Malaking Pook',
                    ),
                    array ( 
                        'barangay_name' => 'Mataas na Lupa',
					),
                    array ( 
                        'barangay_name' => 'Natunuan North',
                    ),
                    array ( 
                        'barangay_name' => 'Natunuan South',
                    ),
                    array ( 
                        'barangay_name' => 'Padre Castillo',
                    ),
                    array ( 
                        'barangay_name' => 'Palsahingin',
                    ),
                    array ( 
                        'barangay_name' => 'Pila',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Pook ni Banal',
                    ),
                    array ( 
                        'barangay_name' => 'Pook ni Kapitan',
                    ),
                    array ( 
                        'barangay_name' => 'Resplandor',
                    ),
                    array ( 
                        'barangay_name' => 'Sambat',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Mariano',
					),
                    array ( 
                        'barangay_name' => 'San Mateo',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Elena',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                ),
				array ( 
                    'town_name' => 'Santa Teresita',
                    array ( 
                        'barangay_name' => 'Antipolo',
                    ),
                    array ( 
                        'barangay_name' => 'Bihis',
                    ),
                    array ( 
                        'barangay_name' => 'Burol',
                    ),
                    array ( 
                        'barangay_name' => 'Calayaan',
                    ),
                    array ( 
                        'barangay_name' => 'Calumala',
                    ),
                    array ( 
                        'barangay_name' => 'Cuta East',
                    ),
                    array ( 
                        'barangay_name' => 'Cutang Cawayan',
                    ),
                    array ( 
                        'barangay_name' => 'Irukan',
                    ),
                    array ( 
                        'barangay_name' => 'Pacifico',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion II',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion III',
                    ),
                    array ( 
                        'barangay_name' => 'Saimsim',
                    ),
                    array ( 
                        'barangay_name' => 'Sampa',
					),
                    array ( 
                        'barangay_name' => 'Sinipian',
                    ),
                    array ( 
                        'barangay_name' => 'Tambo Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Tambo Ilaya',	
                    ),
                ),
				array ( 
                    'town_name' => 'Santo Tomas',
                    array ( 
                        'barangay_name' => 'Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Bartolome',
                    ),
                    array ( 
                        'barangay_name' => 'San Felix',
                    ),
                    array ( 
                        'barangay_name' => 'San Fernando',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Norte',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Sur',
                    ),
                    array ( 
                        'barangay_name' => 'San Joaquin',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
					),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Luis',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Pablo',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Ana',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Anastacia',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Clara',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cruz',
					),
                    array ( 
                        'barangay_name' => 'Santa Elena',	
					),
                    array ( 
                        'barangay_name' => 'Santa Maria',	
					),
                    array ( 
                        'barangay_name' => 'Santa Teresita',	
					),
                    array ( 
                        'barangay_name' => 'Santiago',	
                    ),
                ),
				array ( 
                    'town_name' => 'Taal',
                    array ( 
                        'barangay_name' => 'Apacay',
                    ),
                    array ( 
                        'barangay_name' => 'Balisong',
                    ),
                    array ( 
                        'barangay_name' => 'Bihis',
                    ),
                    array ( 
                        'barangay_name' => 'Bolbok',
                    ),
                    array ( 
                        'barangay_name' => 'Buli',
                    ),
                    array ( 
                        'barangay_name' => 'Butong',
                    ),
                    array ( 
                        'barangay_name' => 'Carasuche',
                    ),
                    array ( 
                        'barangay_name' => 'Cawit',
                    ),
                    array ( 
                        'barangay_name' => 'Caysasay',
                    ),
                    array ( 
                        'barangay_name' => 'Cubamba',
                    ),
                    array ( 
                        'barangay_name' => 'Cultihan',
                    ),
                    array ( 
                        'barangay_name' => 'Gahol',
                    ),
                    array ( 
                        'barangay_name' => 'Halang',
                    ),
                    array ( 
                        'barangay_name' => 'Iba',
					),
                    array ( 
                        'barangay_name' => 'Ilog',
                    ),
                    array ( 
                        'barangay_name' => 'Imamawo',
                    ),
                    array ( 
                        'barangay_name' => 'Ipil',
                    ),
                    array ( 
                        'barangay_name' => 'Laguile',
                    ),
                    array ( 
                        'barangay_name' => 'Latag',
                    ),
                    array ( 
                        'barangay_name' => 'Luntal',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabang Lodlod',
                    ),
                    array ( 
                        'barangay_name' => 'Niogan',
                    ),
                    array ( 
                        'barangay_name' => 'Pansol',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 1',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 2',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 3',
					),
                    array ( 
                        'barangay_name' => 'Poblacion 4',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 5',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 6',	
					),
                    array ( 
                        'barangay_name' => 'Poblacion 7',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 8',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 9',	
					),
                    array ( 
                        'barangay_name' => 'Poblacion 10',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 11',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 12',	
					),
                    array ( 
                        'barangay_name' => 'Poblacion 13',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 14',
                    ),
                    array ( 
                        'barangay_name' => 'Pook',	
					),
                    array ( 
                        'barangay_name' => 'Seiran',
                    ),
                    array ( 
                        'barangay_name' => 'Tatlong Maria',
                    ),
                    array ( 
                        'barangay_name' => 'Tierra Alta',
					),
                    array ( 
                        'barangay_name' => 'Tulo',
                    ),
                ),
				array ( 
                    'town_name' => 'Talisay',
                    array ( 
                        'barangay_name' => 'Aya',
                    ),
                    array ( 
                        'barangay_name' => 'Balas',
                    ),
                    array ( 
                        'barangay_name' => 'Banga',
                    ),
                    array ( 
                        'barangay_name' => 'Buco',
                    ),
                    array ( 
                        'barangay_name' => 'Caloocan',
                    ),
                    array ( 
                        'barangay_name' => 'Leynes',
                    ),
                    array ( 
                        'barangay_name' => 'Miranda',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 7',
					),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 8',
                    ),
                    array ( 
                        'barangay_name' => 'Quiling',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc',
                    ),
                    array ( 
                        'barangay_name' => 'San Guillermo',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria',
                    ),
                    array ( 
                        'barangay_name' => 'Tranca',
                    ),
                    array ( 
                        'barangay_name' => 'Tumaway',		
                    ),
                ),
				array ( 
                    'town_name' => 'Tanauan',
                    array ( 
                        'barangay_name' => 'Altura Bata',
                    ),
                    array ( 
                        'barangay_name' => 'Altura Matanda',
                    ),
                    array ( 
                        'barangay_name' => 'Altura-South',
                    ),
                    array ( 
                        'barangay_name' => 'Ambulong',
                    ),
                    array ( 
                        'barangay_name' => 'Bagbag',
                    ),
                    array ( 
                        'barangay_name' => 'Bagumbayan',
                    ),
                    array ( 
                        'barangay_name' => 'Balele',
                    ),
                    array ( 
                        'barangay_name' => 'Banadero',
                    ),
                    array ( 
                        'barangay_name' => 'Banjo East',
                    ),
                    array ( 
                        'barangay_name' => 'Banjo Laurel',
                    ),
                    array ( 
                        'barangay_name' => 'Bilog-bilog',
                    ),
                    array ( 
                        'barangay_name' => 'Boot',
                    ),
                    array ( 
                        'barangay_name' => 'Cale',
                    ),
                    array ( 
                        'barangay_name' => 'Darasa',
					),
                    array ( 
                        'barangay_name' => 'Gonzales',
                    ),
                    array ( 
                        'barangay_name' => 'Hidalgo',
                    ),
                    array ( 
                        'barangay_name' => 'Janopol',
                    ),
                    array ( 
                        'barangay_name' => 'Janopol Oriental',
                    ),
                    array ( 
                        'barangay_name' => 'Laurel',
                    ),
                    array ( 
                        'barangay_name' => 'Luyos',
                    ),
                    array ( 
                        'barangay_name' => 'Mabini',
                    ),
                    array ( 
                        'barangay_name' => 'Malaking Pulo',
                    ),
                    array ( 
                        'barangay_name' => 'Maria Paz',
                    ),
                    array ( 
                        'barangay_name' => 'Maugat',
                    ),
                    array ( 
                        'barangay_name' => 'Montaña',
                    ),
                    array ( 
                        'barangay_name' => 'Natatas',	
					),
                    array ( 
                        'barangay_name' => 'Pagaspas',
                    ),
                    array ( 
                        'barangay_name' => 'Pantay Bata',
                    ),
                    array ( 
                        'barangay_name' => 'Pantay Matanda',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 1',	
					),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 5',	
					),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Sala',
                    ),
                    array ( 
                        'barangay_name' => 'Sambat',	
					),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'Santol',
                    ),
                    array ( 
                        'barangay_name' => 'Santor',
                    ),
                    array ( 
                        'barangay_name' => 'Sulpoc',
					),
                    array ( 
                        'barangay_name' => 'Suplang',
                    ),
                    array ( 
                        'barangay_name' => 'Talaga',
                    ),
                    array ( 
                        'barangay_name' => 'Tinurik',	
					),
                    array ( 
                        'barangay_name' => 'Trapiche',
                    ),
                    array ( 
                        'barangay_name' => 'Ulango',
                    ),
                    array ( 
                        'barangay_name' => 'Wawa',	
                    ),
                ),
				array ( 
                    'town_name' => 'Taysan',
                    array ( 
                        'barangay_name' => 'Bacao',
                    ),
                    array ( 
                        'barangay_name' => 'Bilogo',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Dagatan',
                    ),
                    array ( 
                        'barangay_name' => 'Guinhawa',
                    ),
                    array ( 
                        'barangay_name' => 'Laurel',
                    ),
                    array ( 
                        'barangay_name' => 'Mabayabas',
                    ),
                    array ( 
                        'barangay_name' => 'Mahanadiong',
                    ),
                    array ( 
                        'barangay_name' => 'Mapulo',
                    ),
                    array ( 
                        'barangay_name' => 'Mataas na Lupa',
                    ),
                    array ( 
                        'barangay_name' => 'Pag-asa',
                    ),
                    array ( 
                        'barangay_name' => 'Panghayaan',
                    ),
                    array ( 
                        'barangay_name' => 'Piña',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagbayanan',
					),
					array ( 
                        'barangay_name' => 'Poblacion East',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion West',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Marcelino',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'Tilambo',						
                    ),
                ),
				array ( 
                    'town_name' => 'Tingloy',
                    array ( 
                        'barangay_name' => 'Barangay 13',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 14',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 15',
                    ),
                    array ( 
                        'barangay_name' => 'Corona',
                    ),
                    array ( 
                        'barangay_name' => 'Gamao',
                    ),
                    array ( 
                        'barangay_name' => 'Makawayan',
                    ),
                    array ( 
                        'barangay_name' => 'Marikaban',
                    ),
                    array ( 
                        'barangay_name' => 'Papaya',
                    ),
                    array ( 
                        'barangay_name' => 'Pisa',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Tomas',
					),
                    array ( 
                        'barangay_name' => 'Talahib',	
                    ),
                ),
				array ( 
                    'town_name' => 'Tuy',
                    array ( 
                        'barangay_name' => 'Acle',
                    ),
                    array ( 
                        'barangay_name' => 'Bayudbud',
                    ),
                    array ( 
                        'barangay_name' => 'Bolboc',
                    ),
                    array ( 
                        'barangay_name' => 'Dalima',
                    ),
                    array ( 
                        'barangay_name' => 'Dao',
                    ),
                    array ( 
                        'barangay_name' => 'Guinhawa',
                    ),
                    array ( 
                        'barangay_name' => 'Lumbangan',
                    ),
                    array ( 
                        'barangay_name' => 'Luna',
                    ),
                    array ( 
                        'barangay_name' => 'Luntal',
                    ),
                    array ( 
                        'barangay_name' => 'Magahis',
                    ),
                    array ( 
                        'barangay_name' => 'Malibu',
                    ),
                    array ( 
                        'barangay_name' => 'Mataywanac',
                    ),
                    array ( 
                        'barangay_name' => 'Palincaro',
                    ),
                    array ( 
                        'barangay_name' => 'Putol',
					),
                    array ( 
                        'barangay_name' => 'Rillo',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'Talon',
                    ),
                    array ( 
                        'barangay_name' => 'Toong',
                    ),
                    array ( 
                        'barangay_name' => 'Tuyon-tuyon',
                    ),
                ),
            ),
				//*End of Batangas Province
				
				//*Start of Quezon Province
			array(
                'province_name' => 'Quezon',
				array ( 
                    'town_name' => 'Agdangan',
                    array ( 
                        'barangay_name' => 'Binagbag',
                    ),
                    array ( 
                        'barangay_name' => 'Dayap',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Kinagunan',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Kinagunan',
                    ),
                    array ( 
                        'barangay_name' => 'Kanlurang Calutan',
                    ),
                    array ( 
                        'barangay_name' => 'Kanlurang Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Salvacion',
                    ),
                    array ( 
                        'barangay_name' => 'Silangang Calutan',
                    ),
                    array ( 
                        'barangay_name' => 'Silangang Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Sildora',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion II',		
                    ),
                ),
				array ( 
                    'town_name' => 'Alabat',
                    array ( 
                        'barangay_name' => 'Angeles',
                    ),
                    array ( 
                        'barangay_name' => 'Bacong',
                    ),
                    array ( 
                        'barangay_name' => 'Balungay',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista',
                    ),
                    array ( 
                        'barangay_name' => 'Caglate',
                    ),
                    array ( 
                        'barangay_name' => 'Camagong',
                    ),
                    array ( 
                        'barangay_name' => 'Gordon',
                    ),
                    array ( 
                        'barangay_name' => 'Pambilan Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Pambilan Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
					),
                    array ( 
                        'barangay_name' => 'Villa Esperanza',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Jesus Este',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Jesus Weste',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Victoria',
                    ),
                ),
				array ( 
                    'town_name' => 'Atimonan',
                    array ( 
                        'barangay_name' => 'Angeles',
                    ),
                    array ( 
                        'barangay_name' => 'Balubad',
                    ),
                    array ( 
                        'barangay_name' => 'Balugohin',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay Zone 4',
                    ),
                    array ( 
                        'barangay_name' => 'Buhangin',
                    ),
                    array ( 
                        'barangay_name' => 'Caridad Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Caridad Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Habingan',
                    ),
                    array ( 
                        'barangay_name' => 'Inaclagan',
                    ),
                    array ( 
                        'barangay_name' => 'Inalig',
                    ),
                    array ( 
                        'barangay_name' => 'Kilait',
					),
                    array ( 
                        'barangay_name' => 'Kilait',
                    ),
                    array ( 
                        'barangay_name' => 'Lakip',
                    ),
                    array ( 
                        'barangay_name' => 'Lubi',
                    ),
                    array ( 
                        'barangay_name' => 'Lumutan',
                    ),
                    array ( 
                        'barangay_name' => 'Magsaysay',
                    ),
                    array ( 
                        'barangay_name' => 'Malinao Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Malinao Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Malusak',
                    ),
                    array ( 
                        'barangay_name' => 'Manggalayan Bundok',
                    ),
                    array ( 
                        'barangay_name' => 'Manggalayan Labak',
                    ),
                    array ( 
                        'barangay_name' => 'Matanag',
                    ),
                    array ( 
                        'barangay_name' => 'Montes Balaon',
					),
                    array ( 
                        'barangay_name' => 'Montes Kallagan',
                    ),
                    array ( 
                        'barangay_name' => 'Ponon',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres Bundok',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres Labak',	
					),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose Balatok',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Catalina',
                    ),
                    array ( 
                        'barangay_name' => 'Sapaan',	
					),
                    array ( 
                        'barangay_name' => 'Sokol',
                    ),
                    array ( 
                        'barangay_name' => 'Tagbakin',
                    ),
                    array ( 
                        'barangay_name' => 'Talaba',
                    ),
                    array ( 
                        'barangay_name' => 'Tinandog',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Ibaba',	
					),
                    array ( 
                        'barangay_name' => 'Villa Ilaya',	
                    ),
                ),
				array ( 
                    'town_name' => 'Buenavista',
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Batabat Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Batabat Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Bulo',
                    ),
                    array ( 
                        'barangay_name' => 'Cabong',
                    ),
                    array ( 
                        'barangay_name' => 'Cadlit',
                    ),
                    array ( 
                        'barangay_name' => 'Catulin',
                    ),
                    array ( 
                        'barangay_name' => 'Cawa',
                    ),
                    array ( 
                        'barangay_name' => 'De La Paz',
                    ),
                    array ( 
                        'barangay_name' => 'Del Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'Hagonghong',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Wasay',
					),
                    array ( 
                        'barangay_name' => 'Ilayang Wasay',
                    ),
                    array ( 
                        'barangay_name' => 'Lilukin',
                    ),
                    array ( 
                        'barangay_name' => 'Mabini',
                    ),
                    array ( 
                        'barangay_name' => 'Mabutag',
                    ),
                    array ( 
                        'barangay_name' => 'Magallanes',
                    ),
                    array ( 
                        'barangay_name' => 'Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Manlana',
                    ),
                    array ( 
                        'barangay_name' => 'Masaya',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang Pinamasagan',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang Piris',	
					),
                    array ( 
                        'barangay_name' => 'San Diego',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'San Pablo',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',	
					),
                    array ( 
                        'barangay_name' => 'Siain',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Aurora',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Batabat',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Magsaysay',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Veronica',
                    ),
                ),
				array ( 
                    'town_name' => 'Burdeos',
                    array ( 
                        'barangay_name' => 'Aluyon',
                    ),
                    array ( 
                        'barangay_name' => 'Amot',
                    ),
                    array ( 
                        'barangay_name' => 'Anibawan',
                    ),
                    array ( 
                        'barangay_name' => 'Bonifacio',
                    ),
                    array ( 
                        'barangay_name' => 'Cabugao',
                    ),
                    array ( 
                        'barangay_name' => 'Cabungalunan',
                    ),
                    array ( 
                        'barangay_name' => 'Calutcot',
                    ),
                    array ( 
                        'barangay_name' => 'Caniwan',
                    ),
                    array ( 
                        'barangay_name' => 'Carlagan',
                    ),
                    array ( 
                        'barangay_name' => 'Mabini',
                    ),
                    array ( 
                        'barangay_name' => 'Palasan',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael',
                    ),
                ),
				array ( 
                    'town_name' => 'Calauag',
                    array ( 
                        'barangay_name' => 'Agoho',
                    ),
                    array ( 
                        'barangay_name' => 'Anahawan',
                    ),
                    array ( 
                        'barangay_name' => 'Anas',
                    ),
                    array ( 
                        'barangay_name' => 'Apad Lutao',
                    ),
                    array ( 
                        'barangay_name' => 'Apad Quezon',
                    ),
                    array ( 
                        'barangay_name' => 'Apad Taisan',
                    ),
                    array ( 
                        'barangay_name' => 'Atulayan',
                    ),
                    array ( 
                        'barangay_name' => 'Baclaran',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Balibago',
                    ),
                    array ( 
                        'barangay_name' => 'Bangkuruhan',
                    ),
                    array ( 
                        'barangay_name' => 'Bantolinao',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II',
					),
                    array ( 
                        'barangay_name' => 'Barangay III',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay V',
                    ),
                    array ( 
                        'barangay_name' => 'Bigaan,',
                    ),
                    array ( 
                        'barangay_name' => 'Binutas',
                    ),
                    array ( 
                        'barangay_name' => 'Biyan',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Buli',
                    ),
                    array ( 
                        'barangay_name' => 'Dapdap',
                    ),
                    array ( 
                        'barangay_name' => 'Dominlog',
                    ),
                    array ( 
                        'barangay_name' => 'Doña Aurora',
                    ),
                    array ( 
                        'barangay_name' => 'Guinosayan',	
					),
                    array ( 
                        'barangay_name' => 'Ipil',
                    ),
                    array ( 
                        'barangay_name' => 'Kalibo',
                    ),
                    array ( 
                        'barangay_name' => 'Kapaluhan',
                    ),
                    array ( 
                        'barangay_name' => 'Katangtang',
                    ),
                    array ( 
                        'barangay_name' => 'Kigtan',
                    ),
                    array ( 
                        'barangay_name' => 'Kinalin Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Kinalin Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Kinamaligan',
                    ),
                    array ( 
                        'barangay_name' => 'Kumaludkud',
                    ),
                    array ( 
                        'barangay_name' => 'Kunalum',
                    ),
                    array ( 
                        'barangay_name' => 'Kuyaoyao',
                    ),
                    array ( 
                        'barangay_name' => 'Lagay',
                    ),
                    array ( 
                        'barangay_name' => 'Lainglaingan',
					),
                    array ( 
                        'barangay_name' => 'Lungib',
                    ),
                    array ( 
                        'barangay_name' => 'Mabini',
                    ),
                    array ( 
                        'barangay_name' => 'Madlangdungan',
                    ),
                    array ( 
                        'barangay_name' => 'Maglipad',
                    ),
                    array ( 
                        'barangay_name' => 'Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Mambaling',
                    ),
                    array ( 
                        'barangay_name' => 'Manhulugin',
                    ),
                    array ( 
                        'barangay_name' => 'Marilag',
                    ),
                    array ( 
                        'barangay_name' => 'Mulay',
                    ),
                    array ( 
                        'barangay_name' => 'Pandanan',
                    ),
                    array ( 
                        'barangay_name' => 'Pansol',
                    ),
                    array ( 
                        'barangay_name' => 'Patihan',
					),
                    array ( 
                        'barangay_name' => 'Pinagbayanan',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagkamaligan',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagsakahan',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagtalleran',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang I',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang II',
                    ),
                    array ( 
                        'barangay_name' => 'Salvacion',
                    ),
                    array ( 
                        'barangay_name' => 'San Quintin',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cecilia',
					),
                    array ( 
                        'barangay_name' => 'Santa Maria',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Milagrosa',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Rosa',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Angel',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Domingo',
                    ),
                    array ( 
                        'barangay_name' => 'Sinag',
                    ),
                    array ( 
                        'barangay_name' => 'Sumilang',
                    ),
                    array ( 
                        'barangay_name' => 'Sumulong',
                    ),
                    array ( 
                        'barangay_name' => 'Tabansak',
                    ),
                    array ( 
                        'barangay_name' => 'Talingting',
                    ),
                    array ( 
                        'barangay_name' => 'Tamis',
                    ),
                    array ( 
                        'barangay_name' => 'Tikiwan',
					),
                    array ( 
                        'barangay_name' => 'Tiniguiban',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Magsino',
					),
                    array ( 
                        'barangay_name' => 'Villa San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'Viñas',
					),
                    array ( 
                        'barangay_name' => 'Yaganak',
                    ),
                ),
				array ( 
                    'town_name' => 'Candelaria',
                    array ( 
                        'barangay_name' => 'Buenavista East',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista West',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Kinatihan I',
                    ),
                    array ( 
                        'barangay_name' => 'Kinatihan II',
                    ),
                    array ( 
                        'barangay_name' => 'Malabanban Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Malabanban Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Mangilag Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Mangilag Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Masalukot I',
                    ),
                    array ( 
                        'barangay_name' => 'Masalukot II',
                    ),
                    array ( 
                        'barangay_name' => 'Masalukot III',
                    ),
                    array ( 
                        'barangay_name' => 'Masalukot IV',
					),
                    array ( 
                        'barangay_name' => 'Masalukot V',
                    ),
                    array ( 
                        'barangay_name' => 'Masin Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Masin Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Mayabobo',
                    ),
                    array ( 
                        'barangay_name' => 'Pahinga Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Pahinga Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Catalina Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Catalina Sur',
                    ),
                ),
				array ( 
                    'town_name' => 'Catanauan',
                    array ( 
                        'barangay_name' => 'Ajos',
                    ),
                    array ( 
                        'barangay_name' => 'Anusan',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 8',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 9',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 10',
                    ),
                    array ( 
                        'barangay_name' => 'Bolo',
                    ),
                    array ( 
                        'barangay_name' => 'Bulagsong',
					),
                    array ( 
                        'barangay_name' => 'Camandiison',
                    ),
                    array ( 
                        'barangay_name' => 'Catumbo',
                    ),
                    array ( 
                        'barangay_name' => 'Cawayanin Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Cawayanin Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Cutcutan',
                    ),
                    array ( 
                        'barangay_name' => 'Dahican',
                    ),
                    array ( 
                        'barangay_name' => 'Doongan Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Doongan Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Gatasan',
                    ),
                    array ( 
                        'barangay_name' => 'Macpac',
                    ),
                    array ( 
                        'barangay_name' => 'Madulao',
                    ),
                    array ( 
                        'barangay_name' => 'Matandang Sabang Kanluran',
					),
                    array ( 
                        'barangay_name' => 'Matandang Sabang Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Milagrosa',
                    ),
                    array ( 
                        'barangay_name' => 'Navitas',
                    ),
                    array ( 
                        'barangay_name' => 'Pacabit',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio Magkupa',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio Pala',
					),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Pablo',
                    ),
                    array ( 
                        'barangay_name' => 'San Pablo',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria',
                    ),
                    array ( 
                        'barangay_name' => 'Tagabas Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Tagabas Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Tagbacan Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Tagbacan Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Tagbacan Silangan',	
                    ),
                    array ( 
                        'barangay_name' => 'Tuhian',	
                    ),
                ),
				array ( 
                    'town_name' => 'Dolores',
                    array ( 
                        'barangay_name' => 'Antonino',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Anyo',
                    ),
                    array ( 
                        'barangay_name' => 'Bayanihan',
                    ),
                    array ( 
                        'barangay_name' => 'Bulakin I',
                    ),
                    array ( 
                        'barangay_name' => 'Bulakin II',
                    ),
                    array ( 
                        'barangay_name' => 'Bungoy',
                    ),
                    array ( 
                        'barangay_name' => 'Cabatang',
                    ),
                    array ( 
                        'barangay_name' => 'Dagatan',
                    ),
                    array ( 
                        'barangay_name' => 'Kinabuhayan',
                    ),
                    array ( 
                        'barangay_name' => 'Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Manggahan',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagdanlayan',
                    ),
                    array ( 
                        'barangay_name' => 'Putol',
                    ),
                    array ( 
                        'barangay_name' => 'San Mateo',
					),
                    array ( 
                        'barangay_name' => 'Santa Lucia',	
					),
                    array ( 
                        'barangay_name' => 'Silanganan',	
                    ),
                ),
				array ( 
                    'town_name' => 'General Luna',
                    array ( 
                        'barangay_name' => 'Bacong Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Bacong Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 8',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 9',
                    ),
                    array ( 
                        'barangay_name' => 'Lavides',
                    ),
                    array ( 
                        'barangay_name' => 'Magsaysay',
                    ),
                    array ( 
                        'barangay_name' => 'Malaya',
					),
                    array ( 
                        'barangay_name' => 'Nieva',
                    ),
                    array ( 
                        'barangay_name' => 'Recto',
                    ),
                    array ( 
                        'barangay_name' => 'San Ignacio Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'San Ignacio Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Nicolas',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Sumilang',
					),
                    array ( 
                        'barangay_name' => 'Villarica',	
                    ),
                ),
				array ( 
                    'town_name' => 'General Nakar',
                    array ( 
                        'barangay_name' => 'Anoling',
                    ),
                    array ( 
                        'barangay_name' => 'Banglos',
                    ),
                    array ( 
                        'barangay_name' => 'Batangan',
                    ),
                    array ( 
                        'barangay_name' => 'Canaway',
                    ),
                    array ( 
                        'barangay_name' => 'Catablingan',
                    ),
                    array ( 
                        'barangay_name' => 'Lumutan',
                    ),
                    array ( 
                        'barangay_name' => 'Magsikap',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabang Lalim',
                    ),
                    array ( 
                        'barangay_name' => 'Maigang',
                    ),
                    array ( 
                        'barangay_name' => 'Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Minahan Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Minahan Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Pagsangahan',
                    ),
                    array ( 
                        'barangay_name' => 'Pamplona',
					),
                    array ( 
                        'barangay_name' => 'Pisa',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Sablang',
                    ),
                    array ( 
                        'barangay_name' => 'San Marcelino',
                    ),
                    array ( 
                        'barangay_name' => 'Umiray',		
                    ),
                ),
				array ( 
                    'town_name' => 'Guinayangan',
                    array ( 
                        'barangay_name' => 'A. Mabini',
                    ),
                    array ( 
                        'barangay_name' => 'Aloneros',
                    ),
                    array ( 
                        'barangay_name' => 'Arbismen',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Balinarin',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Cabibihan',
                    ),
                    array ( 
                        'barangay_name' => 'Cabong Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Cabong Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Calimpak',
                    ),
                    array ( 
                        'barangay_name' => 'Capuluan Central',
                    ),
                    array ( 
                        'barangay_name' => 'Capuluan Tulon',
                    ),
                    array ( 
                        'barangay_name' => 'Dancalan Caimawan',
                    ),
                    array ( 
                        'barangay_name' => 'Dancalan Central',
					),
                    array ( 
                        'barangay_name' => 'Danlagan Batis',
                    ),
                    array ( 
                        'barangay_name' => 'Danlagan Cabayao',
                    ),
                    array ( 
                        'barangay_name' => 'Danlagan Central',
                    ),
                    array ( 
                        'barangay_name' => 'Danlagan Reserva',
                    ),
                    array ( 
                        'barangay_name' => 'Del Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'Dungawan Central',
                    ),
                    array ( 
                        'barangay_name' => 'Dungawan Paalyunan',
                    ),
                    array ( 
                        'barangay_name' => 'Dungawan Pantay',
                    ),
                    array ( 
                        'barangay_name' => 'Ermita',
                    ),
                    array ( 
                        'barangay_name' => 'Gapas',
                    ),
                    array ( 
                        'barangay_name' => 'Himbubulo Este',
                    ),
                    array ( 
                        'barangay_name' => 'Himbubulo Weste',
					),
                    array ( 
                        'barangay_name' => 'Hinabaan',
                    ),
                    array ( 
                        'barangay_name' => 'Ligpit Bantayan',
                    ),
                    array ( 
                        'barangay_name' => 'Lubigan',
                    ),
                    array ( 
                        'barangay_name' => 'Magallanes',
                    ),
                    array ( 
                        'barangay_name' => 'Magsaysay',
                    ),
                    array ( 
                        'barangay_name' => 'Manggagawa',
                    ),
                    array ( 
                        'barangay_name' => 'Manggalang',
                    ),
                    array ( 
                        'barangay_name' => 'Manlayo',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Salakan',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
					),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Lorenzo',
                    ),
                    array ( 
                        'barangay_name' => 'San Luis I',
                    ),
                    array ( 
                        'barangay_name' => 'San Luis II',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro I',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro II',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cruz',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Teresita',
					),
                    array ( 
                        'barangay_name' => 'Sintones',
					),
                    array ( 
                        'barangay_name' => 'Sisi',
					),
                    array ( 
                        'barangay_name' => 'Tikay',
					),
                    array ( 
                        'barangay_name' => 'Triumpo',
					),
                    array ( 
                        'barangay_name' => 'Villa Hiwasayan',
                    ),
                ),
				array ( 
                    'town_name' => 'Gumaca',
                    array ( 
                        'barangay_name' => 'Adia Bitaog',
                    ),
                    array ( 
                        'barangay_name' => 'Anonangin',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Buhay',
                    ),
                    array ( 
                        'barangay_name' => 'Bamban',
                    ),
                    array ( 
                        'barangay_name' => 'Bantad',
                    ),
                    array ( 
                        'barangay_name' => 'Batong Dalig',
                    ),
                    array ( 
                        'barangay_name' => 'Biga',
                    ),
                    array ( 
                        'barangay_name' => 'Binambang',
                    ),
                    array ( 
                        'barangay_name' => 'Buensuceso',
                    ),
                    array ( 
                        'barangay_name' => 'Bungahan',
                    ),
                    array ( 
                        'barangay_name' => 'Butaguin',
                    ),
                    array ( 
                        'barangay_name' => 'Calumangin',
                    ),
                    array ( 
                        'barangay_name' => 'Camohaguin',
                    ),
                    array ( 
                        'barangay_name' => 'Casasahan Ibaba',
					),
                    array ( 
                        'barangay_name' => 'Casasahan Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Cawayan',
                    ),
                    array ( 
                        'barangay_name' => 'Gayagayaan',
                    ),
                    array ( 
                        'barangay_name' => 'Gitnang Barrio',
                    ),
                    array ( 
                        'barangay_name' => 'Hagakhakin',
                    ),
                    array ( 
                        'barangay_name' => 'Hardinan',
                    ),
                    array ( 
                        'barangay_name' => 'Inaclagan',
                    ),
                    array ( 
                        'barangay_name' => 'Inagbuhan Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Labnig',
                    ),
                    array ( 
                        'barangay_name' => 'Laguna',
                    ),
                    array ( 
                        'barangay_name' => 'Lagyo',
                    ),
                    array ( 
                        'barangay_name' => 'Mabini',	
					),
                    array ( 
                        'barangay_name' => 'Mabunga',
                    ),
                    array ( 
                        'barangay_name' => 'Malabtog',
                    ),
                    array ( 
                        'barangay_name' => 'Manlayaan',
                    ),
                    array ( 
                        'barangay_name' => 'Marcelo H. del Pilar',
                    ),
                    array ( 
                        'barangay_name' => 'Mataas na Bundok',
                    ),
                    array ( 
                        'barangay_name' => 'Maunlad',	
					),
                    array ( 
                        'barangay_name' => 'Pagsabangan',
                    ),
                    array ( 
                        'barangay_name' => 'Panikihan',
                    ),
                    array ( 
                        'barangay_name' => 'Peñafrancia',
                    ),
                    array ( 
                        'barangay_name' => 'Pipisik',
                    ),
                    array ( 
                        'barangay_name' => 'Progreso',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
					),
                    array ( 
                        'barangay_name' => 'Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin',
                    ),
                    array ( 
                        'barangay_name' => 'San Diego',
                    ),
                    array ( 
                        'barangay_name' => 'San Diego Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Kanluran',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro Silangan',	
					),
                    array ( 
                        'barangay_name' => 'San Juan de Jesus',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Sastre',
                    ),
                    array ( 
                        'barangay_name' => 'Tabing Dagat',
                    ),
                    array ( 
                        'barangay_name' => 'Tumayan',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Arcaya',	
					),
                    array ( 
                        'barangay_name' => 'Villa Bota',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Fuerte',
                    ),
                    array ( 
                        'barangay_name' => 'Villa M. Principe',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Mendoza',
					),
                    array ( 
                        'barangay_name' => 'Villa Nava',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Padua',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Perez',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Tañada',
					),
                    array ( 
                        'barangay_name' => 'Villa Victoria',
                    ),
                ),
				array ( 
                    'town_name' => 'Infanta',
                    array ( 
                        'barangay_name' => 'Abiawin',
                    ),
                    array ( 
                        'barangay_name' => 'Agos-agos',
                    ),
                    array ( 
                        'barangay_name' => 'Alitas',
                    ),
                    array ( 
                        'barangay_name' => 'Amolongin',
                    ),
                    array ( 
                        'barangay_name' => 'Anibong',
                    ),
                    array ( 
                        'barangay_name' => 'Antikin',
                    ),
                    array ( 
                        'barangay_name' => 'Bacong',
                    ),
                    array ( 
                        'barangay_name' => 'Balobo',
                    ),
                    array ( 
                        'barangay_name' => 'Bantilan',
                    ),
                    array ( 
                        'barangay_name' => 'Banugao',
                    ),
                    array ( 
                        'barangay_name' => 'Batican',
                    ),
                    array ( 
                        'barangay_name' => 'Binonoan',
                    ),
                    array ( 
                        'barangay_name' => 'Binulasan',
                    ),
                    array ( 
                        'barangay_name' => 'Boboin',
					),
                    array ( 
                        'barangay_name' => 'Catambungan',
                    ),
                    array ( 
                        'barangay_name' => 'Cawaynin',
                    ),
                    array ( 
                        'barangay_name' => 'Comon',
                    ),
                    array ( 
                        'barangay_name' => 'Dinahican',
                    ),
                    array ( 
                        'barangay_name' => 'Gumian',
                    ),
                    array ( 
                        'barangay_name' => 'Ilog',
                    ),
                    array ( 
                        'barangay_name' => 'Ingas',
                    ),
                    array ( 
                        'barangay_name' => 'Langgas',
                    ),
                    array ( 
                        'barangay_name' => 'Libjo',
                    ),
                    array ( 
                        'barangay_name' => 'Lual',
                    ),
                    array ( 
                        'barangay_name' => 'Magsaysay',
                    ),
                    array ( 
                        'barangay_name' => 'Maypulot',	
					),
                    array ( 
                        'barangay_name' => 'Miswa',
                    ),
                    array ( 
                        'barangay_name' => 'Pilaway,',
                    ),
                    array ( 
                        'barangay_name' => 'Pinaglapatan',	
					),
                    array ( 
                        'barangay_name' => 'Poblacion 1',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 38',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 39',	
					),
                    array ( 
                        'barangay_name' => 'Pulo',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Tongohin',
					),
                    array ( 
                        'barangay_name' => 'Tudturan',
                    ),
                ),
				array ( 
                    'town_name' => 'Jomalig',
                    array ( 
                        'barangay_name' => 'Apad',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Casuguran',
                    ),
                    array ( 
                        'barangay_name' => 'Gango',
                    ),
                    array ( 
                        'barangay_name' => 'Talisoy',
                    ),
                ),
				array ( 
                    'town_name' => 'Lopez',
                    array ( 
                        'barangay_name' => 'Bacungan',
                    ),
                    array ( 
                        'barangay_name' => 'Bagacay',
                    ),
                    array ( 
                        'barangay_name' => 'Banabahin Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Banabahin Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Bayabas',
                    ),
                    array ( 
                        'barangay_name' => 'Bebito',
                    ),
                    array ( 
                        'barangay_name' => 'Bigajo',
                    ),
                    array ( 
                        'barangay_name' => 'Binahian A',
                    ),
                    array ( 
                        'barangay_name' => 'Binahian B',
                    ),
                    array ( 
                        'barangay_name' => 'Binahian C',
                    ),
                    array ( 
                        'barangay_name' => 'Bocboc',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista',
                    ),
                    array ( 
                        'barangay_name' => 'Burgos',
                    ),
                    array ( 
                        'barangay_name' => 'Buyacanin',
					),
                    array ( 
                        'barangay_name' => 'Cagacag',
                    ),
                    array ( 
                        'barangay_name' => 'Calantipayan',
                    ),
                    array ( 
                        'barangay_name' => 'Canda Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Canda Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Cawayan',
                    ),
                    array ( 
                        'barangay_name' => 'Cawayanin',
                    ),
                    array ( 
                        'barangay_name' => 'Cogorin Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Cogorin Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Concepcion',
                    ),
                    array ( 
                        'barangay_name' => 'Danlagan',
                    ),
                    array ( 
                        'barangay_name' => 'De La Paz',
                    ),
                    array ( 
                        'barangay_name' => 'Del Pilar',
					),
                    array ( 
                        'barangay_name' => 'Del Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'Esperanza Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Esperanza Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Gomez',
                    ),
                    array ( 
                        'barangay_name' => 'Guihay',	
					),
                    array ( 
                        'barangay_name' => 'Guinuangan',
                    ),
                    array ( 
                        'barangay_name' => 'Guites',
                    ),
                    array ( 
                        'barangay_name' => 'Hondagua',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Ilog A',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Ilog B',
					),
                    array ( 
                        'barangay_name' => 'Inalusan',
                    ),
                    array ( 
                        'barangay_name' => 'Jongo',
                    ),
                    array ( 
                        'barangay_name' => 'Lalaguna',
                    ),
                    array ( 
                        'barangay_name' => 'Lourdes',
                    ),
                    array ( 
                        'barangay_name' => 'Mabanban',	
					),
                    array ( 
                        'barangay_name' => 'Mabini',
                    ),
                    array ( 
                        'barangay_name' => 'Magallanes',
                    ),
                    array ( 
                        'barangay_name' => 'Magsaysay',
                    ),
                    array ( 
                        'barangay_name' => 'Maguilayan',
                    ),
                    array ( 
                        'barangay_name' => 'Mahayod-Hayod',		
					),
                    array ( 
                        'barangay_name' => 'Mal-ay',
                    ),
                    array ( 
                        'barangay_name' => 'Mandoog',
                    ),
                    array ( 
                        'barangay_name' => 'Manguisian',
                    ),
                    array ( 
                        'barangay_name' => 'Matinik',
                    ),
                    array ( 
                        'barangay_name' => 'Monteclaro',
					 ),
                    array ( 
                        'barangay_name' => 'Pamampangin',
                    ),
                    array ( 
                        'barangay_name' => 'Pansol',
                    ),
                    array ( 
                        'barangay_name' => 'Peñafrancia',
                    ),
                    array ( 
                        'barangay_name' => 'Pisipis',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Roma',
                    ),
                    array ( 
                        'barangay_name' => 'Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'Samat',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres',
                    ),
                    array ( 
                        'barangay_name' => 'San Antonio',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco A',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco B',
					),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Catalina',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Elena',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Jacobe',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Lucia',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Maria',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Rosa',
					),
                    array ( 
                        'barangay_name' => 'Santa Teresa',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Sugod',
                    ),
                    array ( 
                        'barangay_name' => 'Sumalang',
                    ),
                    array ( 
                        'barangay_name' => 'Talolong',
					),
                    array ( 
                        'barangay_name' => 'Tan-ag Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Tan-ag Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Tocalin',
                    ),
                    array ( 
                        'barangay_name' => 'Vegaflor',
                    ),
                    array ( 
                        'barangay_name' => 'Vergaña',
                    ),
                    array ( 
                        'barangay_name' => 'Veronica',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Aurora',
					),
                    array ( 
                        'barangay_name' => 'Villa Espina',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Geda',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Hermosa',
                    ),
                    array ( 
                        'barangay_name' => 'Villamonte',
                    ),
                    array ( 
                        'barangay_name' => 'Villanacaob',
                    ),
                ),
				array ( 
                    'town_name' => 'Lucban',
                    array ( 
                        'barangay_name' => 'Abang',
                    ),
                    array ( 
                        'barangay_name' => 'Aliliw',
                    ),
                    array ( 
                        'barangay_name' => 'Atulinao',
                    ),
                    array ( 
                        'barangay_name' => 'Ayuti',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 7',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 8',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 9',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 10',
					),
                    array ( 
                        'barangay_name' => 'Igang',
                    ),
                    array ( 
                        'barangay_name' => 'Kabatete',
                    ),
                    array ( 
                        'barangay_name' => 'Kakawit',
                    ),
                    array ( 
                        'barangay_name' => 'Kalangay',
                    ),
                    array ( 
                        'barangay_name' => 'Kalyaat',
                    ),
                    array ( 
                        'barangay_name' => 'Kilib',
                    ),
                    array ( 
                        'barangay_name' => 'Kulapi',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabang Parang',
                    ),
                    array ( 
                        'barangay_name' => 'Malupak',
                    ),
                    array ( 
                        'barangay_name' => 'Manasa',
                    ),
                    array ( 
                        'barangay_name' => 'May-It',
                    ),
                    array ( 
                        'barangay_name' => 'Nagsinamo',	
					),
                    array ( 
                        'barangay_name' => 'Nalunao',
                    ),
                    array ( 
                        'barangay_name' => 'Palola',
					),
                    array ( 
                        'barangay_name' => 'Piis',
                    ),
                    array ( 
                        'barangay_name' => 'Samil',
					),
                    array ( 
                        'barangay_name' => 'Tiawe',
                    ),
                    array ( 
                        'barangay_name' => 'Tinamnan',
                    ),
                ),
				array ( 
                    'town_name' => 'Macalelon',
                    array ( 
                        'barangay_name' => 'Amontay',
                    ),
                    array ( 
                        'barangay_name' => 'Anos',
                    ),
                    array ( 
                        'barangay_name' => 'Buyao',
                    ),
                    array ( 
                        'barangay_name' => 'Calantas',
                    ),
                    array ( 
                        'barangay_name' => 'Candangal',
                    ),
                    array ( 
                        'barangay_name' => 'Castillo',
                    ),
                    array ( 
                        'barangay_name' => 'Damayan',
                    ),
                    array ( 
                        'barangay_name' => 'Lahing',
                    ),
                    array ( 
                        'barangay_name' => 'Luctob',
                    ),
                    array ( 
                        'barangay_name' => 'Mabini Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Mabini Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Malabahay',
                    ),
                    array ( 
                        'barangay_name' => 'Mambog',
                    ),
                    array ( 
                        'barangay_name' => 'Masipag',
					),
                    array ( 
                        'barangay_name' => 'Olongtao Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Olongtao Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Padre Herrera',
                    ),
                    array ( 
                        'barangay_name' => 'Pag-asa',
                    ),
                    array ( 
                        'barangay_name' => 'Pajarillo',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagbayanan',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Rodriquez',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Nicolas',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
					),
                    array ( 
                        'barangay_name' => 'Taguin',
                    ),
                    array ( 
                        'barangay_name' => 'Tubigan Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Tubigan Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Vista Hermosa',	
                    ),
                ),
				array ( 
                    'town_name' => 'Mauban',
                    array ( 
                        'barangay_name' => 'Abo-abo',
                    ),
                    array ( 
                        'barangay_name' => 'Alitap',
                    ),
                    array ( 
                        'barangay_name' => 'Baao',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Bayan',
                    ),
                    array ( 
                        'barangay_name' => 'Balaybalay',
                    ),
                    array ( 
                        'barangay_name' => 'Bato',
                    ),
                    array ( 
                        'barangay_name' => 'Cagbalete I',
                    ),
                    array ( 
                        'barangay_name' => 'Cagbalete II',
                    ),
                    array ( 
                        'barangay_name' => 'Cagsiay I',
                    ),
                    array ( 
                        'barangay_name' => 'Cagsiay II',
                    ),
                    array ( 
                        'barangay_name' => 'Cagsiay III',
                    ),
                    array ( 
                        'barangay_name' => 'Concepcion',
                    ),
                    array ( 
                        'barangay_name' => 'Daungan',
                    ),
                    array ( 
                        'barangay_name' => 'Liwayway',
					),
                    array ( 
                        'barangay_name' => 'Lual',
                    ),
                    array ( 
                        'barangay_name' => 'Lual Rural',
                    ),
                    array ( 
                        'barangay_name' => 'Lucutan',
                    ),
                    array ( 
                        'barangay_name' => 'Luya-luya',
                    ),
                    array ( 
                        'barangay_name' => 'Mabato',
                    ),
                    array ( 
                        'barangay_name' => 'Macasin',
                    ),
                    array ( 
                        'barangay_name' => 'Polo',
                    ),
                    array ( 
                        'barangay_name' => 'Remedios I',
                    ),
                    array ( 
                        'barangay_name' => 'Remedios II',
                    ),
                    array ( 
                        'barangay_name' => 'Rizaliana',
                    ),
                    array ( 
                        'barangay_name' => 'Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'Sadsaran',
					),
                    array ( 
                        'barangay_name' => 'San Gabriel',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
					),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Lorenzo',
					),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael',
					),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
					),
                    array ( 
                        'barangay_name' => 'Santa Lucia',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Angel',
					),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'Santol',
					),
                    array ( 
                        'barangay_name' => 'Soledad',
                    ),
                    array ( 
                        'barangay_name' => 'Tapucan',
                    ),
                ),
				array ( 
                    'town_name' => 'Malunay',
                    array ( 
                        'barangay_name' => 'Ajos',
                    ),
                    array ( 
                        'barangay_name' => 'Amuguis',
                    ),
                    array ( 
                        'barangay_name' => 'Anonang',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Bagupaye',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Bolo',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista',
                    ),
                    array ( 
                        'barangay_name' => 'Burgos',
                    ),
                    array ( 
                        'barangay_name' => 'Butanyog',
                    ),
                    array ( 
                        'barangay_name' => 'Canuyep',
					),
                    array ( 
                        'barangay_name' => 'F. Nanadiego',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Cambuga',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Yuni',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Cambuga',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Yuni',
                    ),
                    array ( 
                        'barangay_name' => 'Latangan',
                    ),
                    array ( 
                        'barangay_name' => 'Magsaysay',
                    ),
                    array ( 
                        'barangay_name' => 'Matataja',
                    ),
                    array ( 
                        'barangay_name' => 'Pakiing',
                    ),
                    array ( 
                        'barangay_name' => 'Patabog',
                    ),
                    array ( 
                        'barangay_name' => 'Sagongon',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
					 ),
                    array ( 
                        'barangay_name' => 'San Pedro',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Rosa',
                    ),
                ),
				array ( 
                    'town_name' => 'Padre Burgos',
                    array ( 
                        'barangay_name' => 'Basiao',
                    ),
                    array ( 
                        'barangay_name' => 'Burgos',
                    ),
                    array ( 
                        'barangay_name' => 'Cabuyao Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Cabuyao Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Campo',
                    ),
                    array ( 
                        'barangay_name' => 'Danlagan',
                    ),
                    array ( 
                        'barangay_name' => 'Duhat',
                    ),
                    array ( 
                        'barangay_name' => 'Hinguiwin',
                    ),
                    array ( 
                        'barangay_name' => 'Kinagunan Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Kinagunan Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Lipata',
                    ),
                    array ( 
                        'barangay_name' => 'Marao',
                    ),
                    array ( 
                        'barangay_name' => 'Marquez',
                    ),
                    array ( 
                        'barangay_name' => 'Punta',
					),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Sipa',
                    ),
                    array ( 
                        'barangay_name' => 'Tulay Buhangin',
                    ),
                    array ( 
                        'barangay_name' => 'Villapaz',
                    ),
                    array ( 
                        'barangay_name' => 'Walay',
                    ),
                    array ( 
                        'barangay_name' => 'Yawe',		
                    ),
                ),
				array ( 
                    'town_name' => 'Pagbilao',
                    array ( 
                        'barangay_name' => 'Alupaye',
                    ),
                    array ( 
                        'barangay_name' => 'Añato',
                    ),
                    array ( 
                        'barangay_name' => 'Antipolo',
                    ),
                    array ( 
                        'barangay_name' => 'Bantigue',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1 Castillo',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2 Daungan',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3 del Carmen',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4 Parang ',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5 Santa',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6 Tambak',
                    ),
                    array ( 
                        'barangay_name' => 'Bigo',
                    ),
                    array ( 
                        'barangay_name' => 'Binahaan',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Bagumbungan',
					),
                    array ( 
                        'barangay_name' => 'Ibabang Palsabangon',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Polo',
                    ),
                    array ( 
                        'barangay_name' => 'Ikirin',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Bagumbungan',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Palsabangon',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Polo',
                    ),
                    array ( 
                        'barangay_name' => 'Kanluran Malicboy',
                    ),
                    array ( 
                        'barangay_name' => 'Mapagong',
                    ),
                    array ( 
                        'barangay_name' => 'Mayhay',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagbayanan',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan Malicboy',
                    ),
                    array ( 
                        'barangay_name' => 'Talipan',	
					),
                    array ( 
                        'barangay_name' => 'Tukalan',
                    ),
                ),
				array ( 
                    'town_name' => 'Panukulan',
                    array ( 
                        'barangay_name' => 'Balungay',
                    ),
                    array ( 
                        'barangay_name' => 'Bato',
                    ),
                    array ( 
                        'barangay_name' => 'Bonbon',
                    ),
                    array ( 
                        'barangay_name' => 'Calasumanga',
                    ),
                    array ( 
                        'barangay_name' => 'Kinalagti',
                    ),
                    array ( 
                        'barangay_name' => 'Libo',
                    ),
                    array ( 
                        'barangay_name' => 'Lipata',
                    ),
                    array ( 
                        'barangay_name' => 'Matangkap',
                    ),
                    array ( 
                        'barangay_name' => 'Milawid',
                    ),
                    array ( 
                        'barangay_name' => 'Pagitan',
                    ),
                    array ( 
                        'barangay_name' => 'Pandan',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',	
                    ),
                ),
				array ( 
                    'town_name' => 'Patnanungan',
                    array ( 
                        'barangay_name' => 'Amaga',
                    ),
                    array ( 
                        'barangay_name' => 'Busdak',
                    ),
                    array ( 
                        'barangay_name' => 'Kilogan',
                    ),
                    array ( 
                        'barangay_name' => 'Luod',
                    ),
                    array ( 
                        'barangay_name' => 'Patnanungan Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Patnanungan Sur',	
                    ),
                ),
				array ( 
                    'town_name' => 'Perez',
                    array ( 
                        'barangay_name' => 'Bagong Pag-asa Poblacion ',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Silang Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Maabot',
                    ),
                    array ( 
                        'barangay_name' => 'Mainit Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Mainit Sur',
                    ),
                    array ( 
                        'barangay_name' => 'Mapagmahal Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Pagkakaisa Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Pambuhan',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagtubigan Este',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagtubigan Weste',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Sangirin',
                    ),
                    array ( 
                        'barangay_name' => 'Villamanzano Norte',
					),
                    array ( 
                        'barangay_name' => 'Villamanzano Sur',
                    ),
                ),
				array ( 
                    'town_name' => 'Pitogo',
                    array ( 
                        'barangay_name' => 'Amontay',
                    ),
                    array ( 
                        'barangay_name' => 'Biga',
                    ),
                    array ( 
                        'barangay_name' => 'Bilucao',
                    ),
                    array ( 
                        'barangay_name' => 'Cabulihan',
                    ),
                    array ( 
                        'barangay_name' => 'Castillo',
                    ),
                    array ( 
                        'barangay_name' => 'Cawayanin',
                    ),
                    array ( 
                        'barangay_name' => 'Cometa',
                    ),
                    array ( 
                        'barangay_name' => 'Dalampasigan',
                    ),
                    array ( 
                        'barangay_name' => 'Dulong Bayan',
                    ),
                    array ( 
                        'barangay_name' => 'Gangahin',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Burgos',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Pacatin',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Piña',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Soliyao',
					),
                    array ( 
                        'barangay_name' => 'Ilayang Burgos',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Pacatin',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Piña',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Soliyao',
                    ),
                    array ( 
                        'barangay_name' => 'Maaliw',
                    ),
                    array ( 
                        'barangay_name' => 'Manggahan',
                    ),
                    array ( 
                        'barangay_name' => 'Masaya',
                    ),
                    array ( 
                        'barangay_name' => 'Mayubok',
                    ),
                    array ( 
                        'barangay_name' => 'Nag-Cruz',
                    ),
                    array ( 
                        'barangay_name' => 'Osmeña',
                    ),
                    array ( 
                        'barangay_name' => 'Pag-asa',
                    ),
                    array ( 
                        'barangay_name' => 'Pamilihan',
					),
                    array ( 
                        'barangay_name' => 'Payte',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagbayanan',
                    ),
                    array ( 
                        'barangay_name' => 'Poctol',
					),
                    array ( 
                        'barangay_name' => 'Quezon',
                    ),
                    array ( 
                        'barangay_name' => 'Quinagasan',
                    ),
                    array ( 
                        'barangay_name' => 'Rizalino',
                    ),
                    array ( 
                        'barangay_name' => 'Saguinsinan',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Sisirin',
                    ),
                    array ( 
                        'barangay_name' => 'Sumag Este',
                    ),
                    array ( 
                        'barangay_name' => 'Sumag Norte',
                    ),
                    array ( 
                        'barangay_name' => 'Sumag Weste',
                    ),
                ),
				array ( 
                    'town_name' => 'Polillo',
                    array ( 
                        'barangay_name' => 'Anawan',
                    ),
                    array ( 
                        'barangay_name' => 'Atulayan',
                    ),
                    array ( 
                        'barangay_name' => 'Balesin',
                    ),
                    array ( 
                        'barangay_name' => 'Bañadero',
                    ),
                    array ( 
                        'barangay_name' => 'Binibitinan',
                    ),
                    array ( 
                        'barangay_name' => 'Bislian',
                    ),
                    array ( 
                        'barangay_name' => 'Bucao',
                    ),
                    array ( 
                        'barangay_name' => 'Canicanian',
                    ),
                    array ( 
                        'barangay_name' => 'Kalubakis',
                    ),
                    array ( 
                        'barangay_name' => 'Languyin',
                    ),
                    array ( 
                        'barangay_name' => 'Libjo',
                    ),
                    array ( 
                        'barangay_name' => 'Pamatdan',
                    ),
                    array ( 
                        'barangay_name' => 'Pilion',
                    ),
                    array ( 
                        'barangay_name' => 'Pinaglubayan',
					),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'Salipsip',
                    ),
                    array ( 
                        'barangay_name' => 'Sibulan',
                    ),
                    array ( 
                        'barangay_name' => 'Taluong',
                    ),
                    array ( 
                        'barangay_name' => 'Tamulaya-Anitong',	
                    ),
                ),
				array ( 
                    'town_name' => 'Quezon',
                    array ( 
                        'barangay_name' => 'Apad',
                    ),
                    array ( 
                        'barangay_name' => 'Argosino',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay V',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay VI',
                    ),
                    array ( 
                        'barangay_name' => 'Cagbalogo',
                    ),
                    array ( 
                        'barangay_name' => 'Caridad',
                    ),
                    array ( 
                        'barangay_name' => 'Cometa',
                    ),
                    array ( 
                        'barangay_name' => 'Del Pilar',
                    ),
                    array ( 
                        'barangay_name' => 'Guinhawa',
                    ),
                    array ( 
                        'barangay_name' => 'Gumubat',
					),
                    array ( 
                        'barangay_name' => 'Magsino',
                    ),
                    array ( 
                        'barangay_name' => 'Mascariña',
                    ),
                    array ( 
                        'barangay_name' => 'Montaña',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Silangan',
                    ),
                    array ( 
                        'barangay_name' => 'Tagkawa',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Belen',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Francia',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Gomez',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Mercedes',
                    ),
                ),
				array ( 
                    'town_name' => 'Real',
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Capalong',
                    ),
                    array ( 
                        'barangay_name' => 'Cawayan',
                    ),
                    array ( 
                        'barangay_name' => 'Kiloloran',
                    ),
                    array ( 
                        'barangay_name' => 'Llavac',
                    ),
                    array ( 
                        'barangay_name' => 'Lubayat',
                    ),
                    array ( 
                        'barangay_name' => 'Malapad',
                    ),
                    array ( 
                        'barangay_name' => 'Maragondon',
                    ),
                    array ( 
                        'barangay_name' => 'Masikap',
                    ),
                    array ( 
                        'barangay_name' => 'Maunlad',
                    ),
                    array ( 
                        'barangay_name' => 'Pandan',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion 61',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion I ',
					),
                    array ( 
                        'barangay_name' => 'Tagumpay',
                    ),
                    array ( 
                        'barangay_name' => 'Tanauan',
                    ),
                    array ( 
                        'barangay_name' => 'Tignoan',
					),
                    array ( 
                        'barangay_name' => 'Ungos',
                    ),
                ),
				array ( 
                    'town_name' => 'Sampaloc',
                    array ( 
                        'barangay_name' => 'Alupay',
                    ),
                    array ( 
                        'barangay_name' => 'Apasan',
                    ),
                    array ( 
                        'barangay_name' => 'Banot',
                    ),
                    array ( 
                        'barangay_name' => 'Bataan',
                    ),
                    array ( 
                        'barangay_name' => 'Bayongon',
                    ),
                    array ( 
                        'barangay_name' => 'Bilucao',
                    ),
                    array ( 
                        'barangay_name' => 'Caldong',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Owain',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Owain',
                    ),
                    array ( 
                        'barangay_name' => 'Mamala',
                    ),
                    array ( 
                        'barangay_name' => 'San Bueno',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Taquico',
                    ),
                ),
				array ( 
                    'town_name' => 'San Andres',
                    array ( 
                        'barangay_name' => 'Alibihaban',
                    ),
                    array ( 
                        'barangay_name' => 'Camflora',
                    ),
                    array ( 
                        'barangay_name' => 'Mangero',
                    ),
                    array ( 
                        'barangay_name' => 'Pansoy',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Tala',
                    ),
                    array ( 
                        'barangay_name' => 'Talisay',	
                    ),
                ),
				array ( 
                    'town_name' => 'San Antonio',
                    array ( 
                        'barangay_name' => 'Arawan',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Niing',
                    ),
                    array ( 
                        'barangay_name' => 'Balat Atis',
                    ),
                    array ( 
                        'barangay_name' => 'Briones',
                    ),
                    array ( 
                        'barangay_name' => 'Bulihan',
                    ),
                    array ( 
                        'barangay_name' => 'Buliran',
                    ),
                    array ( 
                        'barangay_name' => 'Callejon',
                    ),
                    array ( 
                        'barangay_name' => 'Corazon',
                    ),
                    array ( 
                        'barangay_name' => 'Loob',
                    ),
                    array ( 
                        'barangay_name' => 'Magsaysay',
                    ),
                    array ( 
                        'barangay_name' => 'Matipunso',
                    ),
                    array ( 
                        'barangay_name' => 'Niing',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Pulo',
					),
                    array ( 
                        'barangay_name' => 'Pury',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaga',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaguita',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'Sinturisan',	
                    ),
                ),
				array ( 
                    'town_name' => 'San Francisco',
                    array ( 
                        'barangay_name' => 'Butanguiad',
                    ),
                    array ( 
                        'barangay_name' => 'Casay',
                    ),
                    array ( 
                        'barangay_name' => 'Cawayan I',
                    ),
                    array ( 
                        'barangay_name' => 'Cawayan II',
                    ),
                    array ( 
                        'barangay_name' => 'Don Juan Vercelos',
                    ),
                    array ( 
                        'barangay_name' => 'Huyon-Uyon',
                    ),
                    array ( 
                        'barangay_name' => 'Ibabang Tayuman',
                    ),
                    array ( 
                        'barangay_name' => 'Ilayang Tayuman',
                    ),
                    array ( 
                        'barangay_name' => 'Inabuan',
                    ),
                    array ( 
                        'barangay_name' => 'Mabuñga',
                    ),
                    array ( 
                        'barangay_name' => 'Nasalaan',
                    ),
                    array ( 
                        'barangay_name' => 'Pagsangahan',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Pugon',
					),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'Silongin',		
                    ),
                ),
				array ( 
                    'town_name' => 'San Narciso',
                    array ( 
                        'barangay_name' => 'Abuyon',
                    ),
                    array ( 
                        'barangay_name' => 'Andres Bonifacio',
                    ),
                    array ( 
                        'barangay_name' => 'Bani',
                    ),
                    array ( 
                        'barangay_name' => 'Bayanihan',
                    ),
                    array ( 
                        'barangay_name' => 'Binay',
                    ),
                    array ( 
                        'barangay_name' => 'Buenavista',
                    ),
                    array ( 
                        'barangay_name' => 'Busokbusokan',
                    ),
                    array ( 
                        'barangay_name' => 'Calwit',
                    ),
                    array ( 
                        'barangay_name' => 'Guinhalinan',
                    ),
                    array ( 
                        'barangay_name' => 'Lacdayan',
                    ),
                    array ( 
                        'barangay_name' => 'Maguiting',
                    ),
                    array ( 
                        'barangay_name' => 'Maligaya',
                    ),
                    array ( 
                        'barangay_name' => 'Manlampong',
                    ),
                    array ( 
                        'barangay_name' => 'Pagdadamayan ',
					),
                    array ( 
                        'barangay_name' => 'Pagkakaisa',
                    ),
                    array ( 
                        'barangay_name' => 'Punta',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Vigo Central',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Aurin',
                    ),
                    array ( 
                        'barangay_name' => 'Villa Reyes',
                    ),
                    array ( 
                        'barangay_name' => 'White Cliff',	
                    ),
                ),
				array ( 
                    'town_name' => 'Sariaya',
                    array ( 
                        'barangay_name' => 'Antipolo',
                    ),
                    array ( 
                        'barangay_name' => 'Balubal',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 3',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 4',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 5',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay 6',
                    ),
                    array ( 
                        'barangay_name' => 'Bignay 1',
                    ),
                    array ( 
                        'barangay_name' => 'Bignay 2',
                    ),
                    array ( 
                        'barangay_name' => 'Bucal',
                    ),
                    array ( 
                        'barangay_name' => 'Canda',
                    ),
                    array ( 
                        'barangay_name' => 'Castañas',
                    ),
                    array ( 
                        'barangay_name' => 'Concepcion Banahaw',
					),
                    array ( 
                        'barangay_name' => 'Concepcion No. 1',
                    ),
                    array ( 
                        'barangay_name' => 'Concepcion Palasan',
                    ),
                    array ( 
                        'barangay_name' => 'Concepcion Pinagbakuran',
                    ),
                    array ( 
                        'barangay_name' => 'Gibanga',
                    ),
                    array ( 
                        'barangay_name' => 'Guisguis-San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Guisguis-Talon',
                    ),
                    array ( 
                        'barangay_name' => 'Janagdong 1',
                    ),
                    array ( 
                        'barangay_name' => 'Janagdong 2',
                    ),
                    array ( 
                        'barangay_name' => 'Limbon',
                    ),
                    array ( 
                        'barangay_name' => 'Lutucan 1',
                    ),
                    array ( 
                        'barangay_name' => 'Lutucan Bata',
                    ),
                    array ( 
                        'barangay_name' => 'Lutucan Malabag',	
					),
                    array ( 
                        'barangay_name' => 'Mamala I',
                    ),
                    array ( 
                        'barangay_name' => 'Mamala II',
                    ),
                    array ( 
                        'barangay_name' => 'Manggalang 1',
                    ),
                    array ( 
                        'barangay_name' => 'Manggalang Tulo-tulo',	
					),
                    array ( 
                        'barangay_name' => 'Manggalang-Bantilan',
                    ),
                    array ( 
                        'barangay_name' => 'Manggalang-Kiling',
                    ),
                    array ( 
                        'barangay_name' => 'Montecillo',
                    ),
                    array ( 
                        'barangay_name' => 'Morong',	
					),
                    array ( 
                        'barangay_name' => 'Pili',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc 1',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc 2',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc Bogon',	
					),
                    array ( 
                        'barangay_name' => 'Sampaloc Santo Cristo',
                    ),
                    array ( 
                        'barangay_name' => 'Talaan Aplaya',
                    ),
                    array ( 
                        'barangay_name' => 'Talaanpantoc',
                    ),
                    array ( 
                        'barangay_name' => 'Tumbaga 1',
					),
                    array ( 
                        'barangay_name' => 'Tumbaga 2',
						
                    ),
                ),
				array ( 
                    'town_name' => 'Tagkawayan',
                    array ( 
                        'barangay_name' => 'Aldavoc',
                    ),
                    array ( 
                        'barangay_name' => 'Aliji',
                    ),
                    array ( 
                        'barangay_name' => 'Bagong Silang',
                    ),
                    array ( 
                        'barangay_name' => 'Bamban',
                    ),
                    array ( 
                        'barangay_name' => 'Bosigon',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Cabibihan',
                    ),
                    array ( 
                        'barangay_name' => 'Cabugwang',
                    ),
                    array ( 
                        'barangay_name' => 'Cagascas',
                    ),
                    array ( 
                        'barangay_name' => 'Candalapdap',
                    ),
                    array ( 
                        'barangay_name' => 'Casispalan',
                    ),
                    array ( 
                        'barangay_name' => 'Colong-colong',
                    ),
                    array ( 
                        'barangay_name' => 'Del Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'Katimo',
					),
                    array ( 
                        'barangay_name' => 'Kinatakutan',
                    ),
                    array ( 
                        'barangay_name' => 'Landing',
                    ),
                    array ( 
                        'barangay_name' => 'Laurel',
                    ),
                    array ( 
                        'barangay_name' => 'Magsaysay',
                    ),
                    array ( 
                        'barangay_name' => 'Maguibuay',
                    ),
                    array ( 
                        'barangay_name' => 'Mahinta',
                    ),
                    array ( 
                        'barangay_name' => 'Malbog',
                    ),
                    array ( 
                        'barangay_name' => 'Manato Central',
                    ),
                    array ( 
                        'barangay_name' => 'Manato Station',
                    ),
                    array ( 
                        'barangay_name' => 'Mangayao',
                    ),
                    array ( 
                        'barangay_name' => 'Mansilay',
                    ),
                    array ( 
                        'barangay_name' => 'Mapulot',
					),
                    array ( 
                        'barangay_name' => 'Munting Parang',
                    ),
                    array ( 
                        'barangay_name' => 'Payapa',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'Sabang',
                    ),
                    array ( 
                        'barangay_name' => 'San Diego',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Cecilia',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Monica',
					),
                    array ( 
                        'barangay_name' => 'Santo Niño I',
					),
                    array ( 
                        'barangay_name' => 'Santo Niño II',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Tomas',
                    ),
                    array ( 
                        'barangay_name' => 'Seguiwan',
                    ),
                    array ( 
                        'barangay_name' => 'Tabason',
                    ),
                    array ( 
                        'barangay_name' => 'Tunton',
                    ),
                    array ( 
                        'barangay_name' => 'Victoria',
                    ),
                ),
				array ( 
                    'town_name' => 'Tiaong',
                    array ( 
                        'barangay_name' => 'Anastacia',
                    ),
                    array ( 
                        'barangay_name' => 'Aquino',
                    ),
                    array ( 
                        'barangay_name' => 'Ayusan I',
                    ),
                    array ( 
                        'barangay_name' => 'Ayusan II',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay I',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay II',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay III',
                    ),
                    array ( 
                        'barangay_name' => 'Barangay IV',
                    ),
                    array ( 
                        'barangay_name' => 'Behia',
                    ),
                    array ( 
                        'barangay_name' => 'Bukal',
                    ),
                    array ( 
                        'barangay_name' => 'Bula',
                    ),
                    array ( 
                        'barangay_name' => 'Bulakin',
                    ),
                    array ( 
                        'barangay_name' => 'Cabatang',
                    ),
                    array ( 
                        'barangay_name' => 'Cabay',
					),
                    array ( 
                        'barangay_name' => 'Del Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'Lagalag',
                    ),
                    array ( 
                        'barangay_name' => 'Lalig',
                    ),
                    array ( 
                        'barangay_name' => 'Lumingon',
                    ),
                    array ( 
                        'barangay_name' => 'Lusacan',
                    ),
                    array ( 
                        'barangay_name' => 'Paiisa',
                    ),
                    array ( 
                        'barangay_name' => 'Palagaran',
                    ),
                    array ( 
                        'barangay_name' => 'Quipot',
                    ),
                    array ( 
                        'barangay_name' => 'San Agustin',
                    ),
                    array ( 
                        'barangay_name' => 'San Francisco',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
					),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro',
					),
                    array ( 
                        'barangay_name' => 'Tagbakin',
                    ),
                    array ( 
                        'barangay_name' => 'Talisay',
					),
                    array ( 
                        'barangay_name' => 'Tamisian',
                    ),
                ),
				array ( 
                    'town_name' => 'Unisun',
                    array ( 
                        'barangay_name' => 'Almacen',
                    ),
                    array ( 
                        'barangay_name' => 'Balagtas',
                    ),
                    array ( 
                        'barangay_name' => 'Balanacan',
                    ),
                    array ( 
                        'barangay_name' => 'Bonifacio',
                    ),
                    array ( 
                        'barangay_name' => 'Bulo Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Bulo Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Burgos',
                    ),
                    array ( 
                        'barangay_name' => 'Cabulihan Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Cabulihan Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Caigdal',
                    ),
                    array ( 
                        'barangay_name' => 'F. de Jesus ',
                    ),
                    array ( 
                        'barangay_name' => 'General Luna',
                    ),
                    array ( 
                        'barangay_name' => 'Kalilayan Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Kalilayan Ilaya',
					),
                    array ( 
                        'barangay_name' => 'Mabini',
                    ),
                    array ( 
                        'barangay_name' => 'Mairok Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Mairok Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Malvar',
                    ),
                    array ( 
                        'barangay_name' => 'Maputat',
                    ),
                    array ( 
                        'barangay_name' => 'Muliguin',
                    ),
                    array ( 
                        'barangay_name' => 'Pagaguasan',
                    ),
                    array ( 
                        'barangay_name' => 'Panaon Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Panaon Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'Plaridel',
                    ),
                    array ( 
                        'barangay_name' => 'Poctol',
                    ),
                    array ( 
                        'barangay_name' => 'Punta',
					),
                    array ( 
                        'barangay_name' => 'R. Lapu-lapu ',
                    ),
                    array ( 
                        'barangay_name' => 'R. Magsaysay ',
                    ),
                    array ( 
                        'barangay_name' => 'Raja Soliman',		
					),
                    array ( 
                        'barangay_name' => 'Rizal Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal Ilaya',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',		
					),
                    array ( 
                        'barangay_name' => 'Socorro',
                    ),
                    array ( 
                        'barangay_name' => 'Tagumpay',
                    ),
                    array ( 
                        'barangay_name' => 'Tubas',
					),
                    array ( 
                        'barangay_name' => 'Tubigan',
                    ),
                ),
            ),
				//*End of Quezon Province
				
				//*Start of Rizal Province
			array(
                'province_name' => 'Rizal',
				array ( 
                    'town_name' => 'Angono',
                    array ( 
                        'barangay_name' => 'Bagumbayan',
                    ),
                    array ( 
                        'barangay_name' => 'Kalayaan',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabang Parang',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Ibaba',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion Itaas',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'San Vicente',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',		
                    ),
                ),
				array ( 
                    'town_name' => 'Antipolo',
                    array ( 
                        'barangay_name' => 'Bagong Nayon',
                    ),
                    array ( 
                        'barangay_name' => 'Beverly Hills',
                    ),
                    array ( 
                        'barangay_name' => 'Calawis',
                    ),
                    array ( 
                        'barangay_name' => 'Cupang',
                    ),
                    array ( 
                        'barangay_name' => 'Dalig',
                    ),
                    array ( 
                        'barangay_name' => 'Dela Paz',
                    ),
                    array ( 
                        'barangay_name' => 'Inarawan',
                    ),
                    array ( 
                        'barangay_name' => 'Mambugan',
                    ),
                    array ( 
                        'barangay_name' => 'Mayamot',
                    ),
                    array ( 
                        'barangay_name' => 'Muntingdilaw',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Luis',
					),
                    array ( 
                        'barangay_name' => 'San Roque',
					),
                    array ( 
                        'barangay_name' => 'Santa Cruz',
                    ),
                ),
				array ( 
                    'town_name' => 'Baras',
                    array ( 
                        'barangay_name' => 'Concepcion',
                    ),
                    array ( 
                        'barangay_name' => 'Evangelista',
                    ),
                    array ( 
                        'barangay_name' => 'Mabini',
                    ),
                    array ( 
                        'barangay_name' => 'Pinugay',
                    ),
                    array ( 
                        'barangay_name' => 'Rizal',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Miguel',
                    ),
                    array ( 
                        'barangay_name' => 'San Salvador',
                    ),
                    array ( 
                        'barangay_name' => 'Santiago',
                    ),
                ),
				array ( 
                    'town_name' => 'Binangonan',
                    array ( 
                        'barangay_name' => 'Bangad',
                    ),
                    array ( 
                        'barangay_name' => 'Batingan',
                    ),
                    array ( 
                        'barangay_name' => 'Bilibiran',
                    ),
                    array ( 
                        'barangay_name' => 'Binitagan',
                    ),
                    array ( 
                        'barangay_name' => 'Bombong',
                    ),
                    array ( 
                        'barangay_name' => 'Buhangin',
                    ),
                    array ( 
                        'barangay_name' => 'Calumpang',
                    ),
                    array ( 
                        'barangay_name' => 'Ginoong Sanay',
                    ),
                    array ( 
                        'barangay_name' => 'Gulod',
                    ),
                    array ( 
                        'barangay_name' => 'Habagatan',
                    ),
                    array ( 
                        'barangay_name' => 'Ithan',
                    ),
                    array ( 
                        'barangay_name' => 'Janosa',
                    ),
                    array ( 
                        'barangay_name' => 'Kalawaan',
                    ),
                    array ( 
                        'barangay_name' => 'Kalinawan',
					),
                    array ( 
                        'barangay_name' => 'Kasile',
                    ),
                    array ( 
                        'barangay_name' => 'Kaytome',
                    ),
                    array ( 
                        'barangay_name' => 'Kinaboogan',
                    ),
                    array ( 
                        'barangay_name' => 'Kinagatan',
                    ),
                    array ( 
                        'barangay_name' => 'Layunan',
                    ),
                    array ( 
                        'barangay_name' => 'Libid',
                    ),
                    array ( 
                        'barangay_name' => 'Libis',
                    ),
                    array ( 
                        'barangay_name' => 'Limbon-limbon',
                    ),
                    array ( 
                        'barangay_name' => 'Lunsad',
                    ),
                    array ( 
                        'barangay_name' => 'Macamot',
                    ),
                    array ( 
                        'barangay_name' => 'Mahabang Parang',
                    ),
                    array ( 
                        'barangay_name' => 'Malakaban',
					 ),
                    array ( 
                        'barangay_name' => 'Mambog',
                    ),
                    array ( 
                        'barangay_name' => 'Pag-asa',
                    ),
                    array ( 
                        'barangay_name' => 'Palangoy',
                    ),
                    array ( 
                        'barangay_name' => 'Pantok',
                    ),
                    array ( 
                        'barangay_name' => 'Pila Pila',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagdilawan',
                    ),
                    array ( 
                        'barangay_name' => 'Pipindan',
                    ),
                    array ( 
                        'barangay_name' => 'Rayap',
                    ),
                    array ( 
                        'barangay_name' => 'San Carlos',
                    ),
                    array ( 
                        'barangay_name' => 'Sapang',
                    ),
                    array ( 
                        'barangay_name' => 'Tabon',
                    ),
                    array ( 
                        'barangay_name' => 'Tagpos',
                    ),
                    array ( 
                        'barangay_name' => 'Tatala',
					),
                    array ( 
                        'barangay_name' => 'Tayuman',
                    ),
                ),
				array ( 
                    'town_name' => 'Cainta',
                    array ( 
                        'barangay_name' => 'San Andres',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Rosa',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Domingo',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',		
                    ),
                ),
				array ( 
                    'town_name' => 'Cardona',
                    array ( 
                        'barangay_name' => 'Balibago',
                    ),
                    array ( 
                        'barangay_name' => 'Boor',
                    ),
                    array ( 
                        'barangay_name' => 'Calahan',
                    ),
                    array ( 
                        'barangay_name' => 'Dalig',
                    ),
                    array ( 
                        'barangay_name' => 'Del Remedio',
                    ),
                    array ( 
                        'barangay_name' => 'Iglesia',
                    ),
                    array ( 
                        'barangay_name' => 'Lambac',
                    ),
                    array ( 
                        'barangay_name' => 'Looc',
                    ),
                    array ( 
                        'barangay_name' => 'Malanggam-Calubacan',
                    ),
                    array ( 
                        'barangay_name' => 'Nagsulo',
                    ),
                    array ( 
                        'barangay_name' => 'Navotas',
                    ),
                    array ( 
                        'barangay_name' => 'Patunhay',
                    ),
                    array ( 
                        'barangay_name' => 'Real ',
                    ),
                    array ( 
                        'barangay_name' => 'Sampad',	
					),
                    array ( 
                        'barangay_name' => 'San Roque',
                    ),
                    array ( 
                        'barangay_name' => 'Subay',
					),
                    array ( 
                        'barangay_name' => 'Ticulio',
                    ),
                    array ( 
                        'barangay_name' => 'Tuna',
                    ),
                ),
				array ( 
                    'town_name' => 'Jalajala',
                    array ( 
                        'barangay_name' => 'Bagumbong',
                    ),
                    array ( 
                        'barangay_name' => 'Bayugo',
                    ),
                    array ( 
                        'barangay_name' => 'Lubo',
                    ),
                    array ( 
                        'barangay_name' => 'Paalaman',
                    ),
                    array ( 
                        'barangay_name' => 'Pagkalinawan',
                    ),
                    array ( 
                        'barangay_name' => 'Palaypalay',
                    ),
                    array ( 
                        'barangay_name' => 'Punta',
                    ),
                    array ( 
                        'barangay_name' => 'Second District',
                    ),
                    array ( 
                        'barangay_name' => 'Sipsipin',	
					 ),
                    array ( 
                        'barangay_name' => 'Special District',
                    ),
                    array ( 
                        'barangay_name' => 'Third District',
                    ),
                ),
				array ( 
                    'town_name' => 'Morong',
                    array ( 
                        'barangay_name' => 'BOmbongan',
                    ),
                    array ( 
                        'barangay_name' => 'Can-Cal-Lan',
                    ),
                    array ( 
                        'barangay_name' => 'Lagundi',
                    ),
                    array ( 
                        'barangay_name' => 'Maybancal',
                    ),
                    array ( 
                        'barangay_name' => 'San Guillermo',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'San Pedro',	
                    ),
                ),
				array ( 
                    'town_name' => 'Pililla',
                    array ( 
                        'barangay_name' => 'Bagumbayan',
                    ),
                    array ( 
                        'barangay_name' => 'Halayhayin',
                    ),
                    array ( 
                        'barangay_name' => 'Hulo',
                    ),
                    array ( 
                        'barangay_name' => 'Imatong',
                    ),
                    array ( 
                        'barangay_name' => 'Malaya',
                    ),
                    array ( 
                        'barangay_name' => 'Niogan',
                    ),
                    array ( 
                        'barangay_name' => 'Quisao',
                    ),
                    array ( 
                        'barangay_name' => 'Takungan',
                    ),
                    array ( 
                        'barangay_name' => 'Wawa',		
                    ),
                ),
				array ( 
                    'town_name' => 'Rodriquez',
                    array ( 
                        'barangay_name' => 'Balite',
                    ),
                    array ( 
                        'barangay_name' => 'Burgos',
                    ),
                    array ( 
                        'barangay_name' => 'Geronimo',
                    ),
                    array ( 
                        'barangay_name' => 'Macabud',
                    ),
                    array ( 
                        'barangay_name' => 'Manggahan',
                    ),
                    array ( 
                        'barangay_name' => 'Mascap',
                    ),
                    array ( 
                        'barangay_name' => 'Puray',
                    ),
                    array ( 
                        'barangay_name' => 'Rosario',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Jose',
                    ),
                    array ( 
                        'barangay_name' => 'San Rafael',		
                    ),
                ),
				array ( 
                    'town_name' => 'San Mateo',
                    array ( 
                        'barangay_name' => 'Ampid I',
                    ),
                    array ( 
                        'barangay_name' => 'Ampid II',
                    ),
                    array ( 
                        'barangay_name' => 'Banaba',
                    ),
                    array ( 
                        'barangay_name' => 'Dulong Bayan 1',
                    ),
                    array ( 
                        'barangay_name' => 'Dulong Bayan 2',
                    ),
                    array ( 
                        'barangay_name' => 'Guinayang',
                    ),
                    array ( 
                        'barangay_name' => 'Guitnang Bayan I',
                    ),
                    array ( 
                        'barangay_name' => 'Guitnang Bayan II',
                    ),
                    array ( 
                        'barangay_name' => 'Gulod Malaya',
                    ),
                    array ( 
                        'barangay_name' => 'Malanday',
                    ),
                    array ( 
                        'barangay_name' => 'Maly',
                    ),
                    array ( 
                        'barangay_name' => 'Pintong Bocawe',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Ana',
                    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',	
					),
                    array ( 
                        'barangay_name' => 'Silangan',
                    ),
                ),
				array ( 
                    'town_name' => 'Tanay',
                    array ( 
                        'barangay_name' => 'Cayabu',
                    ),
                    array ( 
                        'barangay_name' => 'Cuyambay',
                    ),
                    array ( 
                        'barangay_name' => 'Daraitan',
                    ),
                    array ( 
                        'barangay_name' => 'Katipunan-Bayan',
                    ),
                    array ( 
                        'barangay_name' => 'Kaybuto',
                    ),
                    array ( 
                        'barangay_name' => 'Laiban',
                    ),
                    array ( 
                        'barangay_name' => 'Mag-Ampon',
                    ),
                    array ( 
                        'barangay_name' => 'Mamuyao',
                    ),
                    array ( 
                        'barangay_name' => 'Pinagkamaligan',
                    ),
                    array ( 
                        'barangay_name' => 'Plaza Aldea',
                    ),
                    array ( 
                        'barangay_name' => 'Sampaloc',
                    ),
                    array ( 
                        'barangay_name' => 'San Andres',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Inez',
		    ),
                    array ( 
                        'barangay_name' => 'Santo Niño',
                    ),
                    array ( 
                        'barangay_name' => 'Tabing Ilog',
                    ),
                    array ( 
                        'barangay_name' => 'Tandang Kutyo',
                    ),
                    array ( 
                        'barangay_name' => 'Tinucan',
                    ),
                    array ( 
                        'barangay_name' => 'Wawa',	
                    ),
                ),
				array ( 
                    'town_name' => 'Taytay',
                    array ( 
                        'barangay_name' => 'Dolores',
                    ),
                    array ( 
                        'barangay_name' => 'Muzon',
                    ),
                    array ( 
                        'barangay_name' => 'San Isidro',
                    ),
                    array ( 
                        'barangay_name' => 'San Juan',
                    ),
                    array ( 
                        'barangay_name' => 'Santa Ana',	
                    ),
                ),
				array ( 
                    'town_name' => 'Teresa',
                    array ( 
                        'barangay_name' => 'Bagumbayan',
                    ),
                    array ( 
                        'barangay_name' => 'Calumpang Santo Cristo',
                    ),
                    array ( 
                        'barangay_name' => 'Dalig',
                    ),
                    array ( 
                        'barangay_name' => 'Dulumbayan',
                    ),
                    array ( 
                        'barangay_name' => 'May‑Iba',
                    ),
                    array ( 
                        'barangay_name' => 'Poblacion',
                    ),
                    array ( 
                        'barangay_name' => 'Prinza',
                    ),
                    array ( 
                        'barangay_name' => 'San Gabriel',
                    ),
                    array ( 
                        'barangay_name' => 'San Roque',	
                    ),
                ),
            ),
            //End of CALABARZON


            //Start
            //Start Mark pogi sundan mo ito
            // array(
            //     'province_name' => 'Province 1',
            //     array ( 
            //         'town_name' => 'town 1',
            //         array ( 
            //             'barangay_name' => 'Barangay 1',
            //         ),
            //     )
            // ),
            // array(
            //     'province_name' => 'Province 2',
            //     array ( 
            //         'town_name' => 'town 2',
            //         array ( 
            //             'barangay_name' => 'Barangay 2',
            //         ),
            //     )
            // ),
            //End Mark pogi sundan mo ito
            //End
		);

        DB::beginTransaction();
        
        try { 

            $ptbArrays = $ptbs;

            $province_count = count( $ptbs );
            for ($p = 0; $p<$province_count; $p++) { 

                $province = new Province;
                $province->province_name = $ptbArrays[$p]['province_name'];
                $province->status = true;
                $province->save();

                $town_count = count( $ptbArrays[$p] );
                for ($t = 0; $t<$town_count - 1; $t++) {

                    $town = new Town;
                    $town->town_name = $ptbArrays[$p][$t]['town_name'];
                    $town->status = true;
                    $town->province_id = $province->id;
                    $town->save();
                    
                    $barangay_count = count( $ptbArrays[$p][$t]);
                    for ($b = 0; $b<$barangay_count - 1; $b++) {
                        
                        $barangay = new Barangay;
                        $barangay->barangay_name = $ptbArrays[$p][$t][$b]['barangay_name'];
                        $barangay->status = true;
                        $barangay->town_id = $town->id;
                        $barangay->save();
        
                    }

                }

            }

            DB::commit();

        } catch ( \Exception $e ) {
                
            DB::rollBack();
            dd($e);

        }

    }
}
