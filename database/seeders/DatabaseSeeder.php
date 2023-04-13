<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Event;
use App\Models\Mangrove;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'charmijul',
            'email' => 'charmijul@gmail.com',
            'password' => bcrypt('qwerty')
        ]);

        // Mangrove::create([
        //     'name' => 'Bakau Minyak',
        //     'scientifik_name' => 'Rhizophora Apiculata',
        //     'description' => 'Pohon dengan ketinggian mencapai 30 m dengan diameter batang mencapai 50 cm. Memiliki perakaran yang khas hingga mencapai ketinggian 5 meter, dan kadang-kadang memiliki akar udara yang keluar dari cabang. Kulit kayu berwarna abu-abu tua dan berubah-ubah.Tumbuh pada tanah berlumpur, halus, dalam dan tergenang pada saat pasang normal. Tidak menyukai substrat yang lebih keras yang bercampur dengan pasir. Tingkat dominasi dapat mencapai 90% dari vegetasi yang tumbuh di suatu lokasi. Menyukai perairan pasang surut yang memiliki pengaruh masukan air tawar yang kuat secara permanen.',
        //     'benefit' => 'Kayu dimanfaatkan untuk bahan bangunan, kayu bakar dan arang. Kulit kayu berisi hingga 30% tanin (per sen berat kering). Bisa digunakan untuk obat muntah, rematik dan nyeri otot, luka dalam, TBC dan luka baru.',
        //     'image' => 'mangrove-images/Rhizophora Apiculata.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Bakau Kurap',
        //     'scientifik_name' => 'Rhizophora Mucronata',
        //     'description' => 'Pohon dengan ketinggian mencapai 27 m, jarang melebihi 30 m. Batang memiliki diameter hingga 70 cm dengan kulit kayu berwarna gelap hingga hitam dan terdapat celah horizontal. Akar tunjang dan akar udara yang tumbuh dari percabangan bagian bawah. Di areal yang sama dengan R.apiculata tetapi lebih toleran terhadap substrat yang lebih keras dan pasir. Pada umumnya tumbuh dalam kelompok, dekat atau pada pematang sungai pasang surut dan di muara sungai, jarang sekali tumbuh pada daerah yang jauh dari air pasang surut.',
        //     'benefit' => 'Kayu digunakan sebagai bahan bakar dan arang. Tanin dari kulit kayu digunakan untuk pewarnaan, dan kadang-kadang digunakan sebagai obat dalam kasus hematuria (perdarahan pada air seni). Kadang-kadang ditanam di sepanjang tambak untuk melindungi pematang.',
        //     'image' => 'mangrove-images/Rhizophora Mucronata.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Bakau Kecil',
        //     'scientifik_name' => 'Rhizophora Stylosa',
        //     'description' => 'Pohon dengan satu atau banyak batang, tinggi hingga 10 m. Kulit kayu halus, bercelah, berwarna abu-abu hingga hitam. Memiliki akar tunjang dengan panjang hingga 3 m, dan akar udara yang tumbuh dari cabang bawah.Tumbuh pada habitat yang beragam di daerah pasang surut: lumpur, pasir dan batu. Menyukai pematang sungai pasang surut, tetapi juga sebagai jenis pionir di lingkungan pesisir atau pada bagian daratan dari mangrove.',
        //     'benefit' => 'Sebagai bahan bangunan, kayu bakar, dan arang. Masyarakat Aborigin di Australia menggunakan kayu jenis ini untuk pembuatan bumerang, tombak serta berbagai obyek upacara. Anggur ringan serta minuman untuk mengobati hematuria (pendarahan pada air seni) dapat dibuat dari buahnya.',
        //     'image' => 'mangrove-images/Rhizophora Stylosa.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Kandelia Candel',
        //     'scientifik_name' => 'Kandelia Candel',
        //     'description' => 'Semak atau pohon kecil, tinggi hingga 7 meter dengan pangkal batang lebih tebal. Umumnya tanpa akar nafas. Kulit kayu berwarna keabu-abuan hingga coklat-kemerahan, permukaan halus dan memiliki lentisel.Tumbuh secara sporadis pada pematang sungai pasang surut. Menempati relung yang sempit.',
        //     'benefit' => 'Umumnya untuk kayu bakar',
        //     'image' => 'mangrove-images/Kandelia Candel.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Bintaro',
        //     'scientifik_name' => 'Cerbera Manghas',
        //     'description' => 'Pohon atau belukar dengan ketinggian mencapai 20 m. Kulit kayu bercelah, berwarna abu-abu hingga cokelat, memiliki lentisel dan cairan putih susu. Akar menjalar di permukaan tanah, tetapi kurang memiliki akar udara dan akar nafas. Tumbuh di hutan rawa pesisir atau di pantai hingga jauh ke darat (400 m d.p.l), menyukai tanah pasir yang memiliki sistem pengeringan yang baik, terbuka terhadap udara dari laut serta tempat yang tidak teratur tergenang oleh pasang surut. Biasanya tumbuh di bagian tepi daratan dari mangrove.',
        //     'benefit' => 'Minyak yang diperas dari biji dan buah mudanya dapat digunakan untuk mengatasi gatal-gatal, reumatik, serta pilek. Minyak biji dapat digunakan untuk meracuni ikan (di Burma juga digunakan sebagai insektisida). Kulit kayu dan daun digunakan sebagai obat pencahar. Kayu digunakan sebagai kayu bakar dan bahan arang. Belakangan ini banyak dipakai sebagai tanaman hias/peneduh di dalam kompleks perumahan.',
        //     'image' => 'mangrove-images/Cerbera Manghas.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Pidada Putih',
        //     'scientifik_name' => 'Sonneratia Alba',
        //     'description' => 'Pohon selalu hijau, tumbuh tersebar, ketinggian kadang-kadang hingga 15 m. Kulit kayu berwarna putih tua hingga coklat, dengan celah longitudinal yang halus. Akar berbentuk kabel di bawah tanah dan muncul kepermukaan sebagai akar nafas yang berbentuk kerucut tumpul dan tingginya mencapai 25 cm. Jenis pionir, tidak toleran terhadap air tawar dalam periode yang lama. Menyukai tanah yang bercampur lumpur dan pasir, kadang-kadang pada batuan dan karang. Sering ditemukan di lokasi pesisir yang terlindung dari hempasan gelombang, juga di muara dan sekitar pulau-pulau lepas pantai. Di lokasi dimana jenis tumbuhan lain telah ditebang, maka jenis ini dapat membentuk tegakan yang padat.',
        //     'benefit' => 'Buahnya asam dapat dimakan. Di Sulawesi, kayu dibuat untuk perahu dan bahan bangunan, atau sebagai bahan bakar ketika tidak ada bahan bakar lain. Akar nafas digunakan oleh orang Irian untuk gabus dan pelampung.',
        //     'image' => 'mangrove-images/Sonneratia Alba.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Kedabu',
        //     'scientifik_name' => 'Sonneratia Ovata',
        //     'description' => 'Pohon berukuran kecil atau sedang, biasanya hingga 5 m, kadang-kadang mencapai 20 m, dengan cabang muda berbentuk segi empat serta akar nafas vertikal.Tumbuh di tepi daratan hutan mangrove yang airnya kurang asin, tanah berlumpur dan di sepanjang sungai kecil yang terkena pasang surut. Tidak pernah tumbuh pada substrat karang. Perbungaan terjadi sepanjang tahun.',
        //     'benefit' => 'Kayu bakar. Buah muda dapat dimakan sebagai rujakan. Bisa digunakan juga sebagai bahan baku sirup',
        //     'image' => 'mangrove-images/Sonneratia Ovata.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Pidada Merah',
        //     'scientifik_name' => 'Sonneratia Caseolaris',
        //     'description' => 'Pohon, ketinggian mencapai 15 m, jarang mencapai 20 m. Memiliki akar nafas vertikal seperti kerucut (tinggi hingga 1 m) yang banyak dan sangat kuat. Ujung cabang/ranting terkulai, dan berbentuk segi empat pada saat muda.Tumbuh di bagian yang kurang asin di hutan mangrove, pada tanah lumpur yang dalam, seringkali sepanjang sungai kecil dengan air yang mengalir pelan dan terpengaruh oleh pasang surut. Tidak pernah tumbuh pada pematang/ daerah berkarang. Juga tumbuh di sepanjang sungai, mulai dari bagian hulu dimana pengaruh pasang surut masih terasa, serta di areal yang masih didominasi oleh air tawar. Tidak toleran terhadap naungan.',
        //     'benefit' => 'Buah asam dapat dimakan (dirujak). Kayu dapat digunakan sebagai kayu bakar jika kayu bakar yang lebih baik tidak diperoleh. Setelah direndam dalam air mendidih, akar nafas dapat digunakan untuk mengganti gabus.',
        //     'image' => 'mangrove-images/Sonneratia Caseolaris.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Tumu',
        //     'scientifik_name' => 'Bruguiera sexangula',
        //     'description' => '"Pohon yang selalu hijau dengan ketinggian kadang-kadang mencapai 30 m. Kulit kayu coklat muda-abu-abu, halus hingga kasar, memiliki sejumlah lentisel berukuran besar, dan pangkal batang yang membengkak. Akar lutut, dan kadangkadang akar papan.Tumbuh di sepanjang jalur air dan tambak pantai, pada berbagai tipe substrat yang tidak sering tergenang. Biasanya tumbuh pada kondisi yang lebih basah dibanding B. gymnorrhiza. Kadang-kadang terdapat pada pantai berpasir. Toleran terhadap kondisi air asin, payau dan tawar. Perbungaan terjadi sepanjang tahun. Bunganya yang besar diserbuki oleh burung. Hipokotil disebarkan melalui air.
        //     "',
        //     'benefit' => 'Untuk kayu bakar, tiang dan arang. Buahnya dilaporkan digunakan untuk mengobati penyakit herpes, akar serta daunnya digunakan untuk mengatasi kulit terbakar. Di Sulawesi buahnya dimakan setelah direndam dan dididihkan.',
        //     'image' => 'mangrove-images/Bruguiera sexangula.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Putut',
        //     'scientifik_name' => 'Bruguiera gymnorrhiza',
        //     'description' => 'Pohon yang selalu hijau dengan ketinggian kadang-kadang mencapai 30 m. Kulit kayu memiliki lentisel, permukaannya halus hingga kasar, berwarna abu-abu tua sampai coklat (warna berubah-ubah). Akarnya seperti papan melebar ke samping di bagian pangkal pohon, juga memiliki sejumlah akar lutut.Merupakan jenis yang dominan pada hutan mangrove yang tinggi dan merupakan ciri dari perkembangan tahap akhir dari hutan pantai, serta tahap awal dalam transisi menjadi tipe vegetasi daratan. Tumbuh di areal dengan salinitas rendah dan kering, serta tanah yang memiliki aerasi yang baik. Jenis ini toleran terhadap daerah terlindung maupun yang mendapat sinar matahari langsung. Mereka juga tumbuh pada tepi daratan dari mangrove, sepanjang tambak serta sungai pasang surut dan payau. Ditemukan di tepi pantai hanya jika terjadi erosi pada lahan di hadapannya. Substrat-nya terdiri dari lumpur, pasir dan kadang-kadang tanah gambut hitam.',
        //     'benefit' => 'Bagian dalam hipokotil dimakan (manisan kandeka), dicampur dengan gula. Kayunya yang berwarna merah digunakan sebagai kayu bakar dan untuk membuat arang.',
        //     'image' => 'mangrove-images/Bruguiera gymnorrhiza.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Api-Api Jambu',
        //     'scientifik_name' => 'Avicennia marina',
        //     'description' => 'Belukar atau pohon yang tumbuh tegak atau menyebar, ketinggian pohon mencapai 30 meter. Memiliki sistem perakaran horizontal yang rumit dan berbentuk pensil (atau berbentuk asparagus), akar nafas tegak dengan sejumlah lentisel. Kulit kayu halus dengan burik-burik hijau-abu dan terkelupas dalam bagian-bagian kecil. Ranting muda dan tangkai daun berwarna kuning, tidak berbulu. Merupakan tumbuhan pionir pada lahan pantai yang terlindung, memiliki kemampuan menempati dan tumbuh pada berbagai habitat pasang-surut, bahkan di tempat asin sekalipun. Jenis ini merupakan salah satu jenis tumbuhan yang paling umum ditemukan di habitat pasang-surut.',
        //     'benefit' => 'Daun digunakan untuk mengatasi kulit yang terbakar. Resin yang keluar dari kulit kayu digunakan sebagai alat kontrasepsi. Buah dapat dimakan. Kayu menghasilkan bahan kertas berkualitas tinggi. Daun digunakan sebagai makanan ternak.',
        //     'image' => 'mangrove-images/Avicennia marina.jpg'
        // ]);
        // Mangrove::create([
        //     'name' => 'Api-Api Putih',
        //     'scientifik_name' => 'Avicennia alba',
        //     'description' => 'Belukar atau pohon yang tumbuh menyebar dengan ketinggian mencapai 25 m. Kumpulan pohon membentuk sistem perakaran horizontal dan akar nafas yang rumit. Akar nafas biasanya tipis, berbentuk jari (atau seperti asparagus) yang ditutupi oleh lentisel. Kulit kayu luar berwarna keabu-abuan atau gelap kecoklatan, beberapa ditumbuhi tonjolan kecil, sementara yang lain kadangkadang memiliki permukaan yang halus. Pada bagian batang yang tua, kadangkadang ditemukan serbuk tipis.Merupakan jenis pionir pada habitat rawa mangrove di lokasi pantai yang terlindung, juga di bagian yang lebih asin di sepanjang pinggiran sungai yang dipengaruhi pasang surut, serta di sepanjang garis pantai. Mereka umumnya menyukai bagian muka teluk.',
        //     'benefit' => 'Kayu bakar dan bahan bangunan bermutu rendah. Getah dapat digunakan untuk mencegah kehamilan. Buah dapat dimakan.',
        //     'image' => 'mangrove-images/Avicennia alba.jpg'
        // ]);

        // Event::create([
        //     "title" => "Kegiatan Kerja Bakti Bersama Warga oleh Bontang Mangrove Information Center",
        //     "slug" => "Kegiatan-Kerja-Bakti-Bersama-Warga-oleh-Bontang-Mangrove-Information-Center",
        //     "excerpt" => "Bontang Mangrove Information Center (BMIC) adalah sebuah pusat informasi tentang hutan bakau yang terletak di kota Bontang, Kalimantan Timur. Selain menyediakan informasi tentang hutan bakau, BMIC juga aktif mengadakan kegiatan sosial dan lingkungan untuk mendorong masyarakat setempat untuk lebih peduli dengan lingkungan sekitar mereka. Salah satu kegiatan yang baru-baru ini dilakukan oleh BMIC adalah kerja bakti bersama warga untuk membersihkan daerah sekitar hutan bakau.",
        //     "body" => "<br>Bontang Mangrove Information Center (BMIC) adalah sebuah pusat informasi tentang hutan bakau yang terletak di kota Bontang, Kalimantan Timur. Selain menyediakan informasi tentang hutan bakau, BMIC juga aktif mengadakan kegiatan sosial dan lingkungan untuk mendorong masyarakat setempat untuk lebih peduli dengan lingkungan sekitar mereka. <br><br>
        //     Salah satu kegiatan yang baru-baru ini dilakukan oleh BMIC adalah kerja bakti bersama warga untuk membersihkan daerah sekitar hutan bakau. <br><br>
        //     Pada hari Sabtu pagi, sekitar 50 warga setempat berkumpul di BMIC untuk memulai kerja bakti. Mereka memakai alat-alat seperti sapu, cangkul, dan karung untuk membersihkan sampah dan tanaman liar yang tumbuh di sekitar hutan bakau. BMIC juga menyediakan sarana air bersih dan makanan ringan untuk semua peserta agar tetap segar dan bersemangat selama kegiatan. <br><br>
        //     Selama beberapa jam, para peserta kerja bakti bekerja keras membersihkan daerah sekitar hutan bakau. Mereka membersihkan sampah, merapikan tanaman, dan memotong rumput liar yang mengganggu. Meskipun tugasnya berat, semangat para peserta tidak surut. Mereka berbicara dan tertawa bersama, saling membantu dan memotivasi satu sama lain. <br><br>
        //     Setelah beberapa jam bekerja, daerah sekitar hutan bakau terlihat jauh lebih bersih dan rapi. Para peserta kerja bakti juga merasa senang dan bangga atas hasil kerja mereka. Setelah selesai, BMIC mengundang semua peserta untuk berkumpul kembali di pusat informasi untuk makan siang dan berdiskusi tentang cara menjaga lingkungan yang bersih dan sehat. <br><br>
        //     Kegiatan kerja bakti bersama warga yang dilakukan oleh BMIC bukan hanya membuat daerah sekitar hutan bakau menjadi lebih bersih dan rapi, tetapi juga menjadi ajang untuk membangun solidaritas dan kebersamaan antara masyarakat setempat. Dengan kegiatan seperti ini, BMIC berharap dapat meningkatkan kesadaran dan kepedulian masyarakat terhadap lingkungan sekitar mereka, serta memotivasi mereka untuk turut serta dalam menjaga kebersihan dan kelestarian lingkungan.",
        //     "image" => "event-images/kerja bakti.jpg"
        // ]);

        // Event::create([
        //     "title" => "Kegiatan Penanaman Kembali Hutan Bakau oleh Bontang Mangrove Information Center",
        //     "slug" => "Kegiatan-Penanaman-Kembali-Hutan-Bakau-oleh-Bontang-Mangrove-Information-Center",
        //     "excerpt" => "Bontang Mangrove Information Center (BMIC) terus berkomitmen untuk menjaga kelestarian hutan bakau di kota Bontang, Kalimantan Timur. Selain mengadakan kegiatan sosial dan lingkungan, BMIC juga aktif dalam kegiatan restorasi hutan bakau yang telah rusak akibat pembangunan atau aktivitas manusia lainnya.",
        //     "body" => "<br>Bontang Mangrove Information Center (BMIC) terus berkomitmen untuk menjaga kelestarian hutan bakau di kota Bontang, Kalimantan Timur. Selain mengadakan kegiatan sosial dan lingkungan, BMIC juga aktif dalam kegiatan restorasi hutan bakau yang telah rusak akibat pembangunan atau aktivitas manusia lainnya. <br><br>
        //     Salah satu kegiatan restorasi yang baru-baru ini dilakukan oleh BMIC adalah penanaman kembali hutan bakau di sepanjang sungai di dekat pusat informasi. Kegiatan ini bertujuan untuk mengembalikan fungsi hutan bakau sebagai habitat bagi berbagai spesies hewan dan tumbuhan, serta sebagai penahan gelombang dan erosi pantai. <br><br>
        //     Pada hari Sabtu pagi, sekitar 30 relawan dari BMIC dan masyarakat sekitar berkumpul di sepanjang sungai untuk memulai kegiatan penanaman kembali hutan bakau. Mereka memakai alat-alat seperti sekop, sabit, dan cangkul untuk membuka lubang tanam dan menanam bibit hutan bakau. Bibit hutan bakau yang digunakan adalah jenis-jenis yang sesuai dengan kondisi tanah dan iklim di daerah tersebut. <br><br>
        //     Selama beberapa jam, para relawan bekerja keras menanam bibit hutan bakau. Mereka membagi tugas dan saling membantu untuk mempercepat proses penanaman. BMIC juga menyediakan sarana air bersih dan makanan ringan untuk semua peserta agar tetap segar dan bersemangat selama kegiatan. <br><br>
        //     Setelah beberapa jam menanam, sepanjang sungai terlihat jauh lebih hijau dan asri dengan pohon-pohon bakau yang baru ditanam. Para relawan juga merasa senang dan bangga atas hasil kerja mereka. Setelah selesai, BMIC mengundang semua peserta untuk berkumpul kembali di pusat informasi untuk makan siang dan berdiskusi tentang pentingnya menjaga kelestarian hutan bakau. <br><br>
        //     Kegiatan penanaman kembali hutan bakau yang dilakukan oleh BMIC merupakan langkah konkret untuk menjaga keberlangsungan hidup hutan bakau di daerah tersebut. Dengan kegiatan seperti ini, BMIC berharap dapat memberikan contoh bagi masyarakat setempat untuk turut serta dalam menjaga kelestarian hutan bakau, serta meningkatkan kesadaran dan kepedulian masyarakat terhadap lingkungan sekitar mereka. Kita semua dapat berperan dalam menjaga keberlangsungan hidup hutan bakau dan lingkungan di sekitar kita, dan kegiatan seperti ini adalah salah satu cara yang efektif untuk melakukannya.",
        //     "image" => "event-images/penanaman benih.jpg"
        // ]);

        // Event::create([
        //     "title" => "Menyusuri Muara Sungai dengan Bontang Mangrove Information Center",
        //     "slug" => "Menyusuri-Muara-Sungai-dengan-Bontang-Mangrove-Information-Center",
        //     "excerpt" => "Bontang Mangrove Information Center (BMIC) menawarkan kegiatan menarik bagi para wisatawan dan pengunjung yang ingin menikmati keindahan hutan bakau di kota Bontang, Kalimantan Timur. Salah satu kegiatan yang populer adalah tour menyusuri muara sungai yang dilakukan oleh BMIC.",
        //     "body" => "<br>Bontang Mangrove Information Center (BMIC) menawarkan kegiatan menarik bagi para wisatawan dan pengunjung yang ingin menikmati keindahan hutan bakau di kota Bontang, Kalimantan Timur. Salah satu kegiatan yang populer adalah tour menyusuri muara sungai yang dilakukan oleh BMIC. <br><br>
        //     Tour ini mengajak para pengunjung untuk menikmati pemandangan hutan bakau yang indah dan kaya akan keanekaragaman hayati. Pengunjung akan ditemani oleh pemandu yang berpengalaman dan terlatih untuk menjelaskan berbagai hal tentang hutan bakau dan ekosistemnya. <br><br>
        //     Tour dimulai dari pusat informasi BMIC, di mana pengunjung akan diberikan pengenalan tentang hutan bakau dan kegiatan yang dilakukan oleh BMIC untuk menjaga kelestariannya. Kemudian, pengunjung akan naik perahu untuk menyusuri muara sungai yang indah. Perahu yang digunakan adalah perahu kayu tradisional yang dioperasikan oleh nelayan setempat. <br><br>
        //     Saat menyusuri muara sungai, pengunjung akan melihat berbagai spesies hewan dan tumbuhan yang hidup di sekitar hutan bakau, seperti burung-burung air, kepiting, dan ikan-ikan kecil. Pemandu akan menjelaskan tentang masing-masing spesies dan peran pentingnya dalam ekosistem hutan bakau. Pengunjung juga akan melihat langsung dampak dari kerusakan hutan bakau dan upaya yang dilakukan oleh BMIC untuk memperbaikinya. <br><br>
        //     Setelah sekitar satu jam menyusuri muara sungai, pengunjung akan kembali ke pusat informasi BMIC. Di sana, mereka dapat mengunjungi pusat informasi dan museum hutan bakau untuk memperdalam pengetahuan mereka tentang hutan bakau. Pengunjung juga dapat membeli oleh-oleh dan suvenir di toko oleh-oleh yang terdapat di pusat informasi. <br><br>
        //     Kegiatan tour menyusuri muara sungai yang dilakukan oleh BMIC adalah pengalaman yang tak terlupakan bagi para pengunjung. Selain menikmati keindahan hutan bakau yang masih asli, pengunjung juga akan belajar tentang pentingnya menjaga kelestarian hutan bakau dan ekosistemnya. BMIC berharap dengan kegiatan seperti ini, masyarakat dapat lebih menyadari pentingnya menjaga lingkungan sekitar, serta memberikan dampak positif bagi pengembangan pariwisata di kota Bontang. Jadi, tunggu apa lagi? Jangan lewatkan kesempatan untuk menyusuri muara sungai dengan BMIC!",
        //     "image" => "event-images/tour-2.jpg"
        // ]);
    }
}
