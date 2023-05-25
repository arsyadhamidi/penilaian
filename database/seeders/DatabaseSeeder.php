<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Peserta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nama_lengkap' => 'Admin - SAFE2023',
            'username' => 'safe2023',
            'password' => bcrypt('12345678'),
            'level' => 'Admin'
        ]);

        // Non-Student-01
        Peserta::create([
            'nama_peserta' => 'Dr.Ir. Pawana Nur Indah.MSi',
            'email_peserta' => 'pawana_ni@upnjatim.ac.id',
            'asal_peserta' => 'UPN "Veteran" Jawa Timur Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Cocoa roasting machine',
        ]);

        // Non-Student-02
        Peserta::create([
            'nama_peserta' => 'Ir. Rully Tuiyo, MSI',
            'email_peserta' => 'rullytuiyo2017@gmail.com',
            'asal_peserta' => 'Universitas Negeri Gorontalo',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Basmingro Seaweed Nutrition: Increasing the Production of Disease-Resistant Seaweed using the Mass Tissue Culture Technology',
        ]);

        // Non-Student-03
        Peserta::create([
            'nama_peserta' => 'Dr. Ir. Endang Yektiningsih, MP',
            'email_peserta' => 'endangyn@gmail.com',
            'asal_peserta' => 'University of Pembangunan Nasional Veteran Jawa Timur',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Empowerment of Salt Farmers Through Improving Production Technology',
        ]);

        // Non-Student-04
        Peserta::create([
            'nama_peserta' => 'Dr. Ni Made Ayu Suardani Singapurwa, S.TP.,M.Si',
            'email_peserta' => 'triswari2015@gmail.com',
            'asal_peserta' => 'Warmadewa University, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Empowerment of Salt Farmers Through Improving Production Lemuru Fish “Pedetan” without Aspergillus sp. Contamination',
        ]);

        // Non-Student-05
        Peserta::create([
            'nama_peserta' => 'Assoc. Prof. Thitiphan Chimsook, Ph.D.',
            'email_peserta' => 'thitiphan.cs@gmail.com',
            'asal_peserta' => 'Maejo University, Thailand',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Thai Herbal Yellow Oil from Turmeric and Thai Herbs (KAMIN curcumin oil)',
        ]);

        // Non-Student-06
        Peserta::create([
            'nama_peserta' => 'Dr.Ir.Luluk Sulistiyo Budi, MP',
            'email_peserta' => 'luluksb@unmer-Madiun.ac.id',
            'asal_peserta' => 'Universitas Merdeka Madiun',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Sesame Oil for Skin Care Low carbon',
        ]);

        // Non-Student-07
        Peserta::create([
            'nama_peserta' => 'Assit.Prof.Dr.Jiraporn Inthasan',
            'email_peserta' => 'inthasan@mju.ac.th',
            'asal_peserta' => 'Soil Science, Maejo University, Thailand',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Coffee Substrate Culture',
        ]);


        // Non-Student-08
        Peserta::create([
            'nama_peserta' => 'Antonia Nani Cahyanti, S.Si, M.Si',
            'email_peserta' => 'nanicahyanti_ftp@usm.ac.id',
            'asal_peserta' => 'Department of Agricultural Product Technology, Faculty of Agricultural Technology, Semarang University, Soekarno-Hatta, Tlogosari, Semarang, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Local Indonesian Salak Fermented Drink : Its Potential for Oxidative Stress Recovery',
        ]);

        // Non-Student-09
        Peserta::create([
            'nama_peserta' => 'Ir. Anak Agung Sagung Putri Risa Andriani, M.Si.',
            'email_peserta' => 'putri_risa69@yahoo.com',
            'asal_peserta' => 'Warmadewa University',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'PUTRI BALI: THREE-IN-ONE PRODUCT OF A MIXED CULTURE OF AN EFFECTIVE DECOMPOSER, BIOCONTROL AND BIOFERTILIZER TO SOLVE ORGANIC WASTE PROBLEMS',
        ]);


        // Non-Student-10
        Peserta::create([
            'nama_peserta' => 'Waeisul Bismi, M.Kom & Prof. Dr. Ir. Dwiza Riana, S.Si, MM, M.Kom, IPU.',
            'email_peserta' => 'dwiza@nusamandiri.ac.id',
            'asal_peserta' => 'Universitas Nusa Mandiri',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'FIGAPP Aplication for Disease Detection on Tin Plant Leaves Base on Android',
        ]);


        // Non-Student-11
        Peserta::create([
            'nama_peserta' => 'Chutima S. Vaddhanaphuti.',
            'email_peserta' => 'chutima.srimaroeng@cmu.ac.th',
            'asal_peserta' => 'Faculty of Medicine, Chiang Mai University',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Coffogenic drink',
        ]);


        // Non-Student-12
        Peserta::create([
            'nama_peserta' => 'Prof. Dr. Ir.Haslina, M.Si',
            'email_peserta' => 'chana_panca@yahoo.com',
            'asal_peserta' => 'Semarang University',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'CORN SILK AS ANTI-HYPERCHOLESTEROLEMIA FUNCTIONAL FOODS',
        ]);


        // Non-Student-13
        Peserta::create([
            'nama_peserta' => 'Assoc. Prof. Dr Siti Norasmah Surip',
            'email_peserta' => 'snorasmah@uitm.edu.my',
            'asal_peserta' => 'UNIVERSITI TEKNOLOGI MARA, MALAYSIA',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Antimicrobial & Biodegradable Plastic Film',
        ]);


        // Non-Student-14
        Peserta::create([
            'nama_peserta' => 'Dr. Asmawati. S.TP., M.Sc',
            'email_peserta' => 'asmawati.msail@usk.ac.id',
            'asal_peserta' => 'Syiah Kuala University',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Inovasi Snack Bar (Avoca Bar) Berbahan Low Calory (Ampas Tahu) dan Kaya Serat (Tepung Alpukat Takengon)',
        ]);


        // Non-Student-15
        Peserta::create([
            'nama_peserta' => 'Prof. Dr. Ratu Safitri, MS',
            'email_peserta' => 'ratu.safitri@unpad.ac.id',
            'asal_peserta' => 'Padjadjaran University',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Caesalpinia Sappan L. As an adjuvant to iron chelation therapy for people with thalassemia',
        ]);

        // Non-Student-16
        Peserta::create([
            'nama_peserta' => 'Ir. Teltje Koapaha, MP',
            'email_peserta' => 'teltjek@unsrat.ac.id',
            'asal_peserta' => 'Sam Ratulangi University, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Innovation in processing coconut shells into natural preservatives',
        ]);


        // Non-Student-17
        Peserta::create([
            'nama_peserta' => 'Assoc. Prof. Thitiphan Chimsook, Ph.D.',
            'email_peserta' => 'thitiphan.cs@gmail.com',
            'asal_peserta' => 'Maejo University, Thailand',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Thai Herbal Yellow Oil from Turmeric and Thai Herbs (KAMIN curcumin oil)',
        ]);


        // Non-Student-18
        Peserta::create([
            'nama_peserta' => 'Prof. Dr. Ir. Lucia Cecilia Mandey, MS',
            'email_peserta' => 'stevemzz@yahoo.com',
            'asal_peserta' => 'Universitas Sam Ratulangi, Indonesia & CV Emka Indococo Sejahtera, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Virgin Coconut Oil "Indococo"',
        ]);

        // Non-Student-19
        Peserta::create([
            'nama_peserta' => 'Assoc. Prof. Thitiphan Chimsook, Ph.D.',
            'email_peserta' => 'thitiphan.cs@gmail.com',
            'asal_peserta' => 'Maejo University, Thailand',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Formulation of Thai Perfume from Damask Rose',
        ]);

        // Non-Student-20
        Peserta::create([
            'nama_peserta' => 'Antonia Nani Cahyanti',
            'email_peserta' => 'nanicahyanti_ftp@usm.ac.id',
            'asal_peserta' => 'Department of Agricultural Product Technology, Faculty of Agricultural Technology, Semarang University, Soekarno-Hatta, Tlogosari, Semarang, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Local Indonesian Salak Fermented Drink : Its Potential for Oxidative Stress Recovery',
        ]);


        // Non-Student-21
        Peserta::create([
            'nama_peserta' => 'Ir. Ni Made Putu Darmadi, Msi',
            'email_peserta' => 'madedarmadi240466@gmail.com',
            'asal_peserta' => 'Aquatic Resources Managemen Study Program, Agriculture Faculty, Warmadewa Univercity',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Fish Tendon Crackers',
        ]);


        // Non-Student-22
        Peserta::create([
            'nama_peserta' => 'Eksa Rusdiyana, S.P., M.Sc',
            'email_peserta' => 'eksarusdiyana@staff.uns.ac.id',
            'asal_peserta' => 'Universitas Sebelas Maret, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Child Farmer Groups as Solutions for Millennial Farmer Regeneration in Indonesia',
        ]);


        // Non-Student-23
        Peserta::create([
            'nama_peserta' => 'Eksa Rusdiyana, S.P., M.Sc',
            'email_peserta' => 'eksarusdiyana@staff.uns.ac.id',
            'asal_peserta' => 'Universitas Sebelas Maret, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Agritainment: Efforts to Increase the Level of Farmers and Agricultural Activities',
        ]);

        // Non-Student-24
        Peserta::create([
            'nama_peserta' => 'Ir. Ni Made Darmadi, M.Si, Dr. Ni Putu Anom Sulistyowati, Made Satya Ade  Nugraha, Ni Putu Ayu Wijayanti',
            'email_peserta' => 'madedarmadi240466@gmail.com',
            'asal_peserta' => 'Warmadewa University.  Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Abon Jaen: Innovation in processing shredded catfish (Clarias Sp)',
        ]);

        // Non-Student-25
        Peserta::create([
            'nama_peserta' => 'Yus Isnainita Wahyu, S.Pi, M.P.',
            'email_peserta' => 'wahyunita1@gmail.com',
            'asal_peserta' => 'Politechnic Marine and Fisheries Sidoarjo, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Jumputan Batik with Natural Dyes From Mangrove (Rhizopora mucronata) Propagules',
        ]);


        // Non-Student-26
        Peserta::create([
            'nama_peserta' => 'Dr. Dewi Yunita, S.TP., M.Res.',
            'email_peserta' => 'dewi_yunita@usk.ac.id',
            'asal_peserta' => 'Universitas Syiah Kuala, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Frensgurt: A Shake Yogurt with Local Fruits',
        ]);

        // Non-Student-27
        Peserta::create([
            'nama_peserta' => 'Dr. Ir. Frangky J. Paat, S.P., M.Si.',
            'email_peserta' => 'frangkypaat@unsrat.ac.id',
            'asal_peserta' => 'Agrotechnology Study Program, Faculty of Agriculture, Sam Ratulangi University, Manado, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Mifra Nutmeg Syrup Local North Minahasa Indonesia',
        ]);

        // Non-Student-28
        Peserta::create([
            'nama_peserta' => 'Dr. Ir. Frangky J. Paat, S.P., M.Si.',
            'email_peserta' => 'frangkypaat@unsrat.ac.id',
            'asal_peserta' => 'Agrotechnology Study Program, Faculty of Agriculture, Sam Ratulangi University, Manado, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'White Milk Insecticides Barringtonia asiatica L. Kurz Local North Sulawesi Indonesia',
        ]);

        // Non-Student-29
        Peserta::create([
            'nama_peserta' => 'Dr. Sophia Dwiratna NP, STP., MT.',
            'email_peserta' => 'sophia.dwiratna@unpad.ac.id',
            'asal_peserta' => 'Universitas Padjadjaran',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Smart Watering: Zero electricity automated irrigation',
        ]);


        // Non-Student-30
        Peserta::create([
            'nama_peserta' => 'Humiras Hardi Purba.',
            'email_peserta' => 'humiras.hardi@mercubuana.ac.id',
            'asal_peserta' => 'Mercu Buana University, Jakarta',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'Renewable Energy Sources Development Priority of Indonesian Perspective in 2025-2060',
        ]);

        // Non-Student-31
        Peserta::create([
            'nama_peserta' => 'Ir. Dedie Tooy, MSi, PhD.',
            'email_peserta' => 'dtooy@unsrat.ac.id',
            'asal_peserta' => 'Sam Ratulangi University, Indonesia',
            'kategori_peserta' => 'Non-student',
            'judul_peserta' => 'A Continuous Small Scale Coconut Peeler',
        ]);



        /////////////////////////////////////////////////////////////////////////////


        // Student-01
        Peserta::create([
            'nama_peserta' => 'Nabila Khairunisa Azzahra',
            'email_peserta' => 'nabilakhairunisa@student.uns.ac.id',
            'asal_peserta' => 'Sebelas Maret University, Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Smartwatch for Mommy: Surface Electromyography Sensor-Based Smartwatch for Early Detection of Emergencies in Pregnant Women',
        ]);

        // Student-02
        Peserta::create([
            'nama_peserta' => 'Ni Wayan Ayu Ningsih, Irene Weldinia Armanto,  Gusti A,M. Krisna Dewi',
            'email_peserta' => 'Ayuningsih1999o@gmail.com',
            'asal_peserta' => 'Faculty of Animal Science, Udayana University, Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'FERMENTED DRAGON FRUIT PEEL JUICE',
        ]);


        // Student-03
        Peserta::create([
            'nama_peserta' => 'Sheva Amanda, Tasya Reviana Azhari',
            'email_peserta' => 'amandasheva9@gmail.com',
            'asal_peserta' => 'Mercu Buana University',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Laptop standing desk',
        ]);

        // Student-04
        Peserta::create([
            'nama_peserta' => 'Fauzi Ardiansyah, Indah Setyawati, Umi Nurul Solikhah',
            'email_peserta' => 'ardiansyahfauzi80@gmail.com',
            'asal_peserta' => 'Universitas Mercu Buana',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Sikat Gigi Ramah Lingkungan',
        ]);

        // Student-05
        Peserta::create([
            'nama_peserta' => 'Sang Ayu Made Agung Prasetiawati Djelantik,  Gusti Ngurah Oka Jiwantara, Anita Eti Bella, Kristina Ratnasari Antu., N iLuh Suariani, Ni Made Ayu Suardani',
            'email_peserta' => 'ayuagungchan@gmail.com',
            'asal_peserta' => 'Warmadewa University',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Traditional Food Product "Chicken Urutan" Fermented with Yogurt',
        ]);

        // Student-06
        Peserta::create([
            'nama_peserta' => 'Arsyad Hamidi',
            'email_peserta' => 'arsyadhamidi04@gmail.com',
            'asal_peserta' => 'Politeknik Negeri Padang',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Lapak Petani (Moving The World, Shaping Your Needs)',
        ]);

        // Student-07
        Peserta::create([
            'nama_peserta' => 'Varunya Fuangchoom',
            'email_peserta' => 'varunya.f.m@gmail.com',
            'asal_peserta' => 'Maejo university',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Long Gun Shot (Encapsulation of crude extract powder from Dimocarpus longan)',
        ]);

        // Student-08
        Peserta::create([
            'nama_peserta' => 'Naruemon Boonmee',
            'email_peserta' => 'naruemon.en@gmail.com',
            'asal_peserta' => 'Maejo univesity, Thailand',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'COLDBICA (cold brew coffee with innovative process)',
        ]);


        // Student-09
        Peserta::create([
            'nama_peserta' => 'Gybran Nauval Yuhandika',
            'email_peserta' => 'nauvalgybran@gmail.com',
            'asal_peserta' => 'Politeknik Negeri Padang, Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Agricultural E-Commerce Application to Improve and Distribute Products from Farmers to Customers First-Hand',
        ]);

        // Student-10
        Peserta::create([
            'nama_peserta' => 'Ranaufal Muha, Alvin Fadli Dwi Mulya, Abdillah Hendra Rahmatullah, Kurnia Adilla',
            'email_peserta' => 'kurniaadll.nai@gmail.com',
            'asal_peserta' => 'Politeknik Negeri Padang, Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Application of Internet of Things (IoT) and Artificial Intelligence (AI) Technology in Feeding Automation on Chicken Farms',
        ]);


        // Student-11
        Peserta::create([
            'nama_peserta' => 'Ni Putu Ayu Wijayanti',
            'email_peserta' => 'yuwija12@gmail.com',
            'asal_peserta' => 'Warmadewa University',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'The Quality of innovation in processing shredded catfish (Clarias Sp) Combined with Oyster Mushroom (Pleurotus Ostreatus)',
        ]);


        // Student-12
        Peserta::create([
            'nama_peserta' => 'Afiz Zullah, Iresna Dewi,  Rusdianasari',
            'email_peserta' => 'afizzullah@gmail.com',
            'asal_peserta' => 'Politeknik Negeri Sriwijaya',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Design and Implementation of Solar Power System on Board Pilot Ship in Tropical Setting',
        ]);


        // Student-13
        Peserta::create([
            'nama_peserta' => 'Fauzi Ardiansyah, Indah Setyawati, Umi Nurul Solikhah',
            'email_peserta' => 'indahsetyawati711@gmail.com',
            'asal_peserta' => 'Universitas Mercu Buana Jakarta, Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'eco-friendly toothbrush',
        ]);


        // Student-14
        Peserta::create([
            'nama_peserta' => 'Riztamala Diana,  Rusdianasari, Leila Kalsum',
            'email_peserta' => 'riztamd@gmail.com',
            'asal_peserta' => 'Politeknik Negeri Sriwijaya, Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Biopellets from Palm Shell and Empty Fruit Bunch for Co-firing',
        ]);


        // Student-15
        Peserta::create([
            'nama_peserta' => 'Nuttapong Saetang',
            'email_peserta' => 'nutsaet@live.com',
            'asal_peserta' => 'Maejo University, Thailand',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Beta-G Plus',
        ]);


        // Student-16
        Peserta::create([
            'nama_peserta' => 'Najla Rosyadah Chandra Putri',
            'email_peserta' => 'putrinajla2@gmail.com',
            'asal_peserta' => 'Food and Agricultural Product Technology. Agricultural Faculty.  Andalas University.  Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'TANNING LOTION WITH LOCAL RAW INGREDIENTS GAMBIR (Uncaria Gambir Roxb)',
        ]);


        // Student-17
        Peserta::create([
            'nama_peserta' => 'Afiz Zullah, S.T',
            'email_peserta' => 'afizzullah@gmail.com',
            'asal_peserta' => 'Politeknik Negeri Sriwijaya',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Design and Implementation of Solar Power System on Board Pilot Ship in Tropical Setting',
        ]);


        // Student-18
        Peserta::create([
            'nama_peserta' => 'Della Afriyanti, Rina Yenrina, Aisman',
            'email_peserta' => 'dellaafriyanti34@gmail.com',
            'asal_peserta' => 'Food and Agricultural Product Technology. Agricultural Faculty.  Andalas University.  Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'High Antioxidant and Beautiful Color Syrup Made from a Mixture of Chayote, Butterfly Pea and Lime Fruit',
        ]);


        // Student-19
        Peserta::create([
            'nama_peserta' => 'Zavira Hayanur Rahmi,  Prof. Dr. Ir. Rini, M.P, Neswati, STP. MS.i',
            'email_peserta' => 'rinibahar59@yahoo.com',
            'asal_peserta' => 'Food and Agricultural Product Technology. Agricultural Faculty.  Andalas University.  Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'A Vitamin A Deficiency Prevention, Red Palm Oil Sausage',
        ]);


        // Student-20
        Peserta::create([
            'nama_peserta' => 'Ferdino Siski, Rina Yenrina, Tuty Anggraini',
            'email_peserta' => 'ferdinosiski00@gmail.com',
            'asal_peserta' => 'Food and Agricultural Product Technology. Agricultural Faculty.  Andalas University.  Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Chili sauce with kolang kaling as thickener',
        ]);


        // Student-21
        Peserta::create([
            'nama_peserta' => 'Lathifah Makarim, Hasbullah, Cesar Welya Refdi',
            'email_peserta' => 'makarimlathifah@gmail.com',
            'asal_peserta' => 'Food and Agricultural Product Technology. Agricultural Faculty.  Andalas University.  Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Natural Yeast Refreshed Starter Form Cucumber for Helthier Breads',
        ]);


        // Student-22
        Peserta::create([
            'nama_peserta' => 'Zaadah, Novizar Nazir, Novelina,, Fitria Indah,  Permatasari, Adila Solana, Ramala Sundari, Brigita Mega Putri, Novita Sari Ulina',
            'email_peserta' => 'nazir_novizar@ae.unand.ac.id',
            'asal_peserta' => 'Food and Agricultural Product Technology. Agricultural Faculty.  Andalas University.  Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Katekin+: Natural Tooth Paste',
        ]);


        // Student-23
        Peserta::create([
            'nama_peserta' => 'Mutiara Eliza, Fitria Indah Permatasari, Zacky Hibatullah Gandidi, Novizar Nazir, Tuty Anggraini',
            'email_peserta' => '',
            'asal_peserta' => 'Food and Agricultural Product Technology. Agricultural Faculty.  Andalas University.  Indonesia',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'NaturoHoney Kombucha',
        ]);

        // Student-24
        Peserta::create([
            'nama_peserta' => 'Fauzur Rahmat',
            'email_peserta' => 'fauzurrahmat82@gmail.com',
            'asal_peserta' => 'Syiah Kuala University, Indonesia.',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'ArrLab: Sophisticated App for predicting food product shelf-life of Micro, Small, and Medium Enterprises (MSMEs) to integrate effective food safety pr',
        ]);


        // Student-25
        Peserta::create([
            'nama_peserta' => 'Joardan Lasop',
            'email_peserta' => 'joardan28@gmail.com',
            'asal_peserta' => 'Andalas University, Indonesia.',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'CAP-RQ: Portable Fresh Chili Storage Based Controlled Atmosphere',
        ]);


        // Student-28
        Peserta::create([
            'nama_peserta' => 'Agristia Erena Imammah Santoso',
            'email_peserta' => 'erenaagristia@gamil.com',
            'asal_peserta' => 'Merdeka Madiun University, Indonesia.',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Salur Coffee (with Salak Seeds and Egg Shells)',
        ]);


        // Student-29
        Peserta::create([
            'nama_peserta' => 'Aisyah Shakira Putri, Zahra Abidina Pintaito',
            'email_peserta' => 'aisyahshakira3007@gmail.com',
            'asal_peserta' => 'Andalas University, Indonesia.',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Salur Coffee (with Salak Seeds and Egg Shells)',
        ]);

        // Student-30
        Peserta::create([
            'nama_peserta' => 'Ms. Chanamon Leknamnarong',
            'email_peserta' => 'chanamonlek@gmail.com',
            'asal_peserta' => 'Chiang Mai Rajabhat University Mae-Rim Campus, Saluang subdistrict, Mae-Rim District, Chiang Mai, 50330 Thailand.',
            'kategori_peserta' => 'Student',
            'judul_peserta' => 'Thai indigenous chickens (Pradu Hangdum) fed with naturally fermented silage having probiotics Lactobacillus plantarum CMRU 80 as a creative community',
        ]);



    }
}
