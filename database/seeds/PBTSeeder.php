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
            )
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
