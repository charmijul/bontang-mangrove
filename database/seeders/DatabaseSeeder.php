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
            'name' => 'reynaldi',
            'email' => 'reynaldi@gmail.com',
            'password' => bcrypt('qwerty')
        ]);

        Mangrove::create([
            'name' => 'Bakau Minyak',
            'scientifik_name' => 'Rhizophora Apiculata',
            'description' => 'Pohon dengan ketinggian mencapai 30 m dengan diameter batang mencapai 50 cm. Memiliki perakaran yang khas hingga mencapai ketinggian 5 meter, dan kadang-kadang memiliki akar udara yang keluar dari cabang. Kulit kayu berwarna abu-abu tua dan berubah-ubah.Tumbuh pada tanah berlumpur, halus, dalam dan tergenang pada saat pasang normal. Tidak menyukai substrat yang lebih keras yang bercampur dengan pasir. Tingkat dominasi dapat mencapai 90% dari vegetasi yang tumbuh di suatu lokasi. Menyukai perairan pasang surut yang memiliki pengaruh masukan air tawar yang kuat secara permanen.',
            'benefit' => 'Kayu dimanfaatkan untuk bahan bangunan, kayu bakar dan arang. Kulit kayu berisi hingga 30% tanin (per sen berat kering). Bisa digunakan untuk obat muntah, rematik dan nyeri otot, luka dalam, TBC dan luka baru.',
            'image' => 'mangrove-images/Rhizophora Apiculata.jpg'
        ]);
        Mangrove::create([
            'name' => 'Bakau Kurap',
            'scientifik_name' => 'Rhizophora Mucronata',
            'description' => 'Pohon dengan ketinggian mencapai 27 m, jarang melebihi 30 m. Batang memiliki diameter hingga 70 cm dengan kulit kayu berwarna gelap hingga hitam dan terdapat celah horizontal. Akar tunjang dan akar udara yang tumbuh dari percabangan bagian bawah. Di areal yang sama dengan R.apiculata tetapi lebih toleran terhadap substrat yang lebih keras dan pasir. Pada umumnya tumbuh dalam kelompok, dekat atau pada pematang sungai pasang surut dan di muara sungai, jarang sekali tumbuh pada daerah yang jauh dari air pasang surut.',
            'benefit' => 'Kayu digunakan sebagai bahan bakar dan arang. Tanin dari kulit kayu digunakan untuk pewarnaan, dan kadang-kadang digunakan sebagai obat dalam kasus hematuria (perdarahan pada air seni). Kadang-kadang ditanam di sepanjang tambak untuk melindungi pematang.',
            'image' => 'mangrove-images/Rhizophora Mucronata.jpg'
        ]);
        Mangrove::create([
            'name' => 'Bakau Kecil',
            'scientifik_name' => 'Rhizophora Stylosa',
            'description' => 'Pohon dengan satu atau banyak batang, tinggi hingga 10 m. Kulit kayu halus, bercelah, berwarna abu-abu hingga hitam. Memiliki akar tunjang dengan panjang hingga 3 m, dan akar udara yang tumbuh dari cabang bawah.Tumbuh pada habitat yang beragam di daerah pasang surut: lumpur, pasir dan batu. Menyukai pematang sungai pasang surut, tetapi juga sebagai jenis pionir di lingkungan pesisir atau pada bagian daratan dari mangrove.',
            'benefit' => 'Sebagai bahan bangunan, kayu bakar, dan arang. Masyarakat Aborigin di Australia menggunakan kayu jenis ini untuk pembuatan bumerang, tombak serta berbagai obyek upacara. Anggur ringan serta minuman untuk mengobati hematuria (pendarahan pada air seni) dapat dibuat dari buahnya.',
            'image' => 'mangrove-images/Rhizophora Stylosa.jpg'
        ]);
        Mangrove::create([
            'name' => 'Kandelia Candel',
            'scientifik_name' => 'Kandelia Candel',
            'description' => 'Semak atau pohon kecil, tinggi hingga 7 meter dengan pangkal batang lebih tebal. Umumnya tanpa akar nafas. Kulit kayu berwarna keabu-abuan hingga coklat-kemerahan, permukaan halus dan memiliki lentisel.Tumbuh secara sporadis pada pematang sungai pasang surut. Menempati relung yang sempit.',
            'benefit' => 'Umumnya untuk kayu bakar',
            'image' => 'mangrove-images/Kandelia Candel.jpg'
        ]);
        Mangrove::create([
            'name' => 'Bintaro',
            'scientifik_name' => 'Cerbera Manghas',
            'description' => 'Pohon atau belukar dengan ketinggian mencapai 20 m. Kulit kayu bercelah, berwarna abu-abu hingga cokelat, memiliki lentisel dan cairan putih susu. Akar menjalar di permukaan tanah, tetapi kurang memiliki akar udara dan akar nafas. Tumbuh di hutan rawa pesisir atau di pantai hingga jauh ke darat (400 m d.p.l), menyukai tanah pasir yang memiliki sistem pengeringan yang baik, terbuka terhadap udara dari laut serta tempat yang tidak teratur tergenang oleh pasang surut. Biasanya tumbuh di bagian tepi daratan dari mangrove.',
            'benefit' => 'Minyak yang diperas dari biji dan buah mudanya dapat digunakan untuk mengatasi gatal-gatal, reumatik, serta pilek. Minyak biji dapat digunakan untuk meracuni ikan (di Burma juga digunakan sebagai insektisida). Kulit kayu dan daun digunakan sebagai obat pencahar. Kayu digunakan sebagai kayu bakar dan bahan arang. Belakangan ini banyak dipakai sebagai tanaman hias/peneduh di dalam kompleks perumahan.',
            'image' => 'mangrove-images/Cerbera Manghas.jpg'
        ]);
        Mangrove::create([
            'name' => 'Pidada Putih',
            'scientifik_name' => 'Sonneratia Alba',
            'description' => 'Pohon selalu hijau, tumbuh tersebar, ketinggian kadang-kadang hingga 15 m. Kulit kayu berwarna putih tua hingga coklat, dengan celah longitudinal yang halus. Akar berbentuk kabel di bawah tanah dan muncul kepermukaan sebagai akar nafas yang berbentuk kerucut tumpul dan tingginya mencapai 25 cm. Jenis pionir, tidak toleran terhadap air tawar dalam periode yang lama. Menyukai tanah yang bercampur lumpur dan pasir, kadang-kadang pada batuan dan karang. Sering ditemukan di lokasi pesisir yang terlindung dari hempasan gelombang, juga di muara dan sekitar pulau-pulau lepas pantai. Di lokasi dimana jenis tumbuhan lain telah ditebang, maka jenis ini dapat membentuk tegakan yang padat.',
            'benefit' => 'Buahnya asam dapat dimakan. Di Sulawesi, kayu dibuat untuk perahu dan bahan bangunan, atau sebagai bahan bakar ketika tidak ada bahan bakar lain. Akar nafas digunakan oleh orang Irian untuk gabus dan pelampung.',
            'image' => 'mangrove-images/Sonneratia Alba.jpg'
        ]);
        Mangrove::create([
            'name' => 'Kedabu',
            'scientifik_name' => 'Sonneratia Ovata',
            'description' => 'Pohon berukuran kecil atau sedang, biasanya hingga 5 m, kadang-kadang mencapai 20 m, dengan cabang muda berbentuk segi empat serta akar nafas vertikal.Tumbuh di tepi daratan hutan mangrove yang airnya kurang asin, tanah berlumpur dan di sepanjang sungai kecil yang terkena pasang surut. Tidak pernah tumbuh pada substrat karang. Perbungaan terjadi sepanjang tahun.',
            'benefit' => 'Kayu bakar. Buah muda dapat dimakan sebagai rujakan. Bisa digunakan juga sebagai bahan baku sirup',
            'image' => 'mangrove-images/Sonneratia Ovata.jpg'
        ]);
        Mangrove::create([
            'name' => 'Pidada Merah',
            'scientifik_name' => 'Sonneratia Caseolaris',
            'description' => 'Pohon, ketinggian mencapai 15 m, jarang mencapai 20 m. Memiliki akar nafas vertikal seperti kerucut (tinggi hingga 1 m) yang banyak dan sangat kuat. Ujung cabang/ranting terkulai, dan berbentuk segi empat pada saat muda.Tumbuh di bagian yang kurang asin di hutan mangrove, pada tanah lumpur yang dalam, seringkali sepanjang sungai kecil dengan air yang mengalir pelan dan terpengaruh oleh pasang surut. Tidak pernah tumbuh pada pematang/ daerah berkarang. Juga tumbuh di sepanjang sungai, mulai dari bagian hulu dimana pengaruh pasang surut masih terasa, serta di areal yang masih didominasi oleh air tawar. Tidak toleran terhadap naungan.',
            'benefit' => 'Buah asam dapat dimakan (dirujak). Kayu dapat digunakan sebagai kayu bakar jika kayu bakar yang lebih baik tidak diperoleh. Setelah direndam dalam air mendidih, akar nafas dapat digunakan untuk mengganti gabus.',
            'image' => 'mangrove-images/Sonneratia Caseolaris.jpg'
        ]);
        Mangrove::create([
            'name' => 'Tumu',
            'scientifik_name' => 'Bruguiera sexangula',
            'description' => '"Pohon yang selalu hijau dengan ketinggian kadang-kadang mencapai 30 m. Kulit kayu coklat muda-abu-abu, halus hingga kasar, memiliki sejumlah lentisel berukuran besar, dan pangkal batang yang membengkak. Akar lutut, dan kadangkadang akar papan.Tumbuh di sepanjang jalur air dan tambak pantai, pada berbagai tipe substrat yang tidak sering tergenang. Biasanya tumbuh pada kondisi yang lebih basah dibanding B. gymnorrhiza. Kadang-kadang terdapat pada pantai berpasir. Toleran terhadap kondisi air asin, payau dan tawar. Perbungaan terjadi sepanjang tahun. Bunganya yang besar diserbuki oleh burung. Hipokotil disebarkan melalui air.
            "',
            'benefit' => 'Untuk kayu bakar, tiang dan arang. Buahnya dilaporkan digunakan untuk mengobati penyakit herpes, akar serta daunnya digunakan untuk mengatasi kulit terbakar. Di Sulawesi buahnya dimakan setelah direndam dan dididihkan.',
            'image' => 'mangrove-images/Bruguiera sexangula.jpg'
        ]);
        Mangrove::create([
            'name' => 'Putut',
            'scientifik_name' => 'Bruguiera gymnorrhiza',
            'description' => 'Pohon yang selalu hijau dengan ketinggian kadang-kadang mencapai 30 m. Kulit kayu memiliki lentisel, permukaannya halus hingga kasar, berwarna abu-abu tua sampai coklat (warna berubah-ubah). Akarnya seperti papan melebar ke samping di bagian pangkal pohon, juga memiliki sejumlah akar lutut.Merupakan jenis yang dominan pada hutan mangrove yang tinggi dan merupakan ciri dari perkembangan tahap akhir dari hutan pantai, serta tahap awal dalam transisi menjadi tipe vegetasi daratan. Tumbuh di areal dengan salinitas rendah dan kering, serta tanah yang memiliki aerasi yang baik. Jenis ini toleran terhadap daerah terlindung maupun yang mendapat sinar matahari langsung. Mereka juga tumbuh pada tepi daratan dari mangrove, sepanjang tambak serta sungai pasang surut dan payau. Ditemukan di tepi pantai hanya jika terjadi erosi pada lahan di hadapannya. Substrat-nya terdiri dari lumpur, pasir dan kadang-kadang tanah gambut hitam.',
            'benefit' => 'Bagian dalam hipokotil dimakan (manisan kandeka), dicampur dengan gula. Kayunya yang berwarna merah digunakan sebagai kayu bakar dan untuk membuat arang.',
            'image' => 'mangrove-images/Bruguiera gymnorrhiza.jpg'
        ]);
        Mangrove::create([
            'name' => 'Api-Api Jambu',
            'scientifik_name' => 'Avicennia marina',
            'description' => 'Belukar atau pohon yang tumbuh tegak atau menyebar, ketinggian pohon mencapai 30 meter. Memiliki sistem perakaran horizontal yang rumit dan berbentuk pensil (atau berbentuk asparagus), akar nafas tegak dengan sejumlah lentisel. Kulit kayu halus dengan burik-burik hijau-abu dan terkelupas dalam bagian-bagian kecil. Ranting muda dan tangkai daun berwarna kuning, tidak berbulu. Merupakan tumbuhan pionir pada lahan pantai yang terlindung, memiliki kemampuan menempati dan tumbuh pada berbagai habitat pasang-surut, bahkan di tempat asin sekalipun. Jenis ini merupakan salah satu jenis tumbuhan yang paling umum ditemukan di habitat pasang-surut.',
            'benefit' => 'Daun digunakan untuk mengatasi kulit yang terbakar. Resin yang keluar dari kulit kayu digunakan sebagai alat kontrasepsi. Buah dapat dimakan. Kayu menghasilkan bahan kertas berkualitas tinggi. Daun digunakan sebagai makanan ternak.',
            'image' => 'mangrove-images/Avicennia marina.jpg'
        ]);
        Mangrove::create([
            'name' => 'Api-Api Putih',
            'scientifik_name' => 'Avicennia alba',
            'description' => 'Belukar atau pohon yang tumbuh menyebar dengan ketinggian mencapai 25 m. Kumpulan pohon membentuk sistem perakaran horizontal dan akar nafas yang rumit. Akar nafas biasanya tipis, berbentuk jari (atau seperti asparagus) yang ditutupi oleh lentisel. Kulit kayu luar berwarna keabu-abuan atau gelap kecoklatan, beberapa ditumbuhi tonjolan kecil, sementara yang lain kadangkadang memiliki permukaan yang halus. Pada bagian batang yang tua, kadangkadang ditemukan serbuk tipis.Merupakan jenis pionir pada habitat rawa mangrove di lokasi pantai yang terlindung, juga di bagian yang lebih asin di sepanjang pinggiran sungai yang dipengaruhi pasang surut, serta di sepanjang garis pantai. Mereka umumnya menyukai bagian muka teluk.',
            'benefit' => 'Kayu bakar dan bahan bangunan bermutu rendah. Getah dapat digunakan untuk mencegah kehamilan. Buah dapat dimakan.',
            'image' => 'mangrove-images/Avicennia alba.jpg'
        ]);

        Event::create([
            "title" => "Kunjugan Dewan Direksi Tokyo Gas ke Bontang Mangrove Information Center",
            "slug" => "Kunjugan-Dewan-Direksi-Tokyo-Gas-ke-Bontang-Mangrove-Information-Center",
            "excerpt" => "Dewan direksi utama perusahaan energi Tokyo Gas, yang dipimpin oleh CEO Isao Hosoya dan Presiden Direktur Takashi Shukuya, baru saja melakukan kunjungan ke Bontang Mangrove Information Center di Indonesia. Kunjungan ini bertujuan untuk mempelajari tentang pentingnya pengelolaan dan pemeliharaan hutan mangrove bagi lingkungan dan masyarakat sekitar.",
            "body" => "Dewan direksi utama perusahaan energi Tokyo Gas, yang dipimpin oleh CEO Isao Hosoya dan Presiden Direktur Takashi Shukuya, baru saja melakukan kunjungan ke Bontang Mangrove Information Center di Indonesia. Kunjungan ini bertujuan untuk mempelajari tentang pentingnya pengelolaan dan pemeliharaan hutan mangrove bagi lingkungan dan masyarakat sekitar.<br><br>
            Tokyo Gas adalah perusahaan energi terkemuka di Jepang dan telah lama berkomitmen untuk mengembangkan energi bersih dan ramah lingkungan. Melalui kunjungan ini, CEO Isao Hosoya dan Presiden Direktur Takashi Shukuya ingin mempelajari lebih lanjut tentang upaya konservasi hutan mangrove yang dilakukan oleh pemerintah dan masyarakat setempat di Indonesia.<br><br>
            Pada kunjungan tersebut, mereka bertemu dengan perwakilan pemerintah setempat dan komunitas lokal yang telah berperan aktif dalam memelihara dan mengelola hutan mangrove. Mereka juga diberikan tur ke hutan mangrove yang dikelola secara lestari dan mempelajari tentang manfaatnya bagi lingkungan dan masyarakat.<br><br>
            Dalam pernyataannya setelah kunjungan, CEO Isao Hosoya menyatakan bahwa Tokyo Gas memiliki komitmen yang kuat untuk memperkuat program tanggung jawab sosial dan lingkungan mereka di Indonesia dan di seluruh dunia. Sementara itu, Presiden Direktur Takashi Shukuya menambahkan bahwa kunjungan ini merupakan kesempatan untuk belajar dan memahami praktik terbaik dalam konservasi lingkungan dan pembangunan berkelanjutan.<br><br>
            Kunjungan ini menunjukkan pentingnya kerja sama antara sektor swasta dan publik dalam menjaga kelestarian lingkungan dan membantu masyarakat setempat meningkatkan kesejahteraan mereka. CEO Isao Hosoya dan Presiden Direktur Takashi Shukuya berharap bahwa kunjungan ini dapat menjadi awal dari kemitraan yang baik antara Tokyo Gas dan masyarakat setempat dalam upaya konservasi hutan mangrove.<br><br>
            Sebagai perusahaan energi terkemuka, Tokyo Gas memiliki tanggung jawab besar untuk berkontribusi pada pembangunan berkelanjutan dan memperkuat program tanggung jawab sosial dan lingkungan mereka di seluruh dunia. Kunjungan dewan direksi utama perusahaan ke Bontang Mangrove Information Center menunjukkan komitmen Tokyo Gas dalam hal ini dan diharapkan dapat menjadi contoh bagi perusahaan lainnya dalam upaya menjaga kelestarian lingkungan dan memperkuat kemitraan dengan masyarakat setempat.",
            "image" => "event-images/kunjugan-tokyo-gas.jpeg"
        ]);

        Event::create([
            "title" => "Penanaman 1000 Benih Mangrove dalam Rangka HUT Perkumpulan Wanita Patra (PWP) di Bontang Mangrove Information Center",
            "slug" => "Penanaman-1000-Benih-Mangrove-dalam-Rangka-HUT-Perkumpulan-Wanita-Patra-(PWP)-di-Bontang-Mangrove-Information-Center",
            "excerpt" => "Perkumpulan Wanita Patra (PWP) di Bontang Mangrove Information Center mengadakan acara penanaman 1000 benih mangrove dalam rangka merayakan hari ulang tahun organisasi mereka yang ke-23. Acara ini bertujuan untuk meningkatkan kesadaran masyarakat tentang pentingnya menjaga dan memelihara hutan mangrove sebagai bagian dari upaya konservasi lingkungan yang lebih luas.",
            "body" => "Perkumpulan Wanita Patra (PWP) di Bontang Mangrove Information Center mengadakan acara penanaman 1000 benih mangrove dalam rangka merayakan hari ulang tahun organisasi mereka yang ke-23. Acara ini bertujuan untuk meningkatkan kesadaran masyarakat tentang pentingnya menjaga dan memelihara hutan mangrove sebagai bagian dari upaya konservasi lingkungan yang lebih luas.<br><br>
            Penanaman benih mangrove ini dihadiri oleh para anggota PWP serta masyarakat setempat dan juga dihadiri oleh perwakilan dari Pemerintah Kota Bontang. Acara ini dimulai dengan sambutan dari ketua PWP dan juga dihadiri oleh beberapa pemimpin lokal. Selain penanaman benih mangrove, acara ini juga menampilkan berbagai aktivitas seperti pameran fotografi dan berbagai kegiatan lingkungan yang melibatkan masyarakat setempat.<br><br>
            Mangrove adalah spesies pohon yang tumbuh di daerah pantai dan berfungsi sebagai habitat alami bagi berbagai jenis fauna laut. Hutan mangrove juga dapat membantu mengurangi dampak bencana alam seperti tsunami dan badai. Namun, hutan mangrove di Indonesia terus mengalami kerusakan akibat perambahan dan eksploitasi yang tidak berkelanjutan.<br><br>
            Melalui kegiatan penanaman benih mangrove, PWP dan masyarakat setempat berkomitmen untuk memperkuat program konservasi dan restorasi hutan mangrove. Penanaman benih mangrove juga menjadi bagian dari upaya untuk meningkatkan partisipasi masyarakat dalam upaya menjaga lingkungan dan membantu mengatasi dampak perubahan iklim.<br><br>
            Dalam sambutannya, ketua PWP menyatakan bahwa kegiatan penanaman benih mangrove ini merupakan bagian dari upaya organisasi mereka untuk memberdayakan dan mengedukasi masyarakat tentang pentingnya menjaga lingkungan dan memelihara hutan mangrove. Ia juga menambahkan bahwa kegiatan ini merupakan contoh nyata dari bagaimana masyarakat dapat berkontribusi dalam upaya konservasi lingkungan.<br><br>
            Penanaman benih mangrove ini merupakan bagian dari upaya yang lebih besar untuk menjaga kelestarian hutan mangrove dan memberdayakan masyarakat setempat. Kegiatan ini juga menunjukkan bahwa masyarakat dapat berperan aktif dalam upaya konservasi dan restorasi lingkungan. Diharapkan kegiatan seperti ini dapat menjadi contoh dan diikuti oleh masyarakat dan organisasi lainnya dalam upaya menjaga kelestarian lingkungan.",
            "image" => "event-images/penanaman-mangrove.jpeg"
        ]);

        Event::create([
            "title" => "Aksi World Clean Up Day 2022 di Bontang Mangrove Information Center",
            "slug" => "Aksi-World-Clean-Up-Day-2022-di-Bontang-Mangrove-Information-Center",
            "excerpt" => "Pada tanggal 15 September 2022, dunia akan merayakan World Clean Up Day, sebuah gerakan global untuk membersihkan lingkungan dan mengurangi jumlah sampah di seluruh dunia. Di Indonesia, Bontang Mangrove Information Center akan menjadi salah satu tempat pelaksanaan aksi World Clean Up Day 2022.",
            "body" => "Pada tanggal 15 September 2022, dunia akan merayakan World Clean Up Day, sebuah gerakan global untuk membersihkan lingkungan dan mengurangi jumlah sampah di seluruh dunia. Di Indonesia, Bontang Mangrove Information Center akan menjadi salah satu tempat pelaksanaan aksi World Clean Up Day 2022.<br><br>
            Aksi World Clean Up Day di Bontang Mangrove Information Center akan diikuti oleh para relawan dari berbagai latar belakang, termasuk masyarakat lokal, mahasiswa, dan organisasi lingkungan. Para relawan akan bekerja sama untuk membersihkan pantai dan hutan mangrove di sekitar Bontang Mangrove Information Center dari sampah-sampah plastik yang mencemari lingkungan.<br><br>
            Sebagai bagian dari aksi World Clean Up Day, para relawan juga akan terlibat dalam berbagai aktivitas lingkungan, termasuk edukasi tentang pentingnya menjaga lingkungan dan meminimalisir penggunaan plastik sekali pakai. Para relawan juga akan mengajak masyarakat setempat untuk bergabung dan berpartisipasi dalam aksi membersihkan lingkungan ini.<br><br>
            Aksi World Clean Up Day di Bontang Mangrove Information Center juga diharapkan dapat memberikan dampak positif bagi lingkungan sekitar. Selain membersihkan sampah-sampah plastik, aksi ini juga dapat membantu meningkatkan kesadaran masyarakat tentang pentingnya menjaga lingkungan dan mengurangi penggunaan plastik sekali pakai. Diharapkan aksi ini juga dapat memberikan contoh bagi masyarakat lainnya untuk melakukan aksi serupa di tempat-tempat lain di seluruh Indonesia.<br><br>
            Sebagai perwujudan komitmen untuk menjaga lingkungan, aksi World Clean Up Day di Bontang Mangrove Information Center menjadi momentum untuk menginspirasi masyarakat untuk terus melakukan aksi-aksi positif dan berkontribusi dalam upaya menjaga kelestarian lingkungan. Diharapkan melalui aksi ini, masyarakat semakin sadar akan pentingnya menjaga kebersihan lingkungan dan meminimalisir penggunaan plastik sekali pakai sehingga dapat tercipta lingkungan yang lebih bersih dan sehat bagi generasi masa depan.",
            "image" => "event-images/kerja-bakti.jpeg"
        ]);
    }
}
