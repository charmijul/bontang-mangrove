<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use App\Models\User;
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
            'password' => bcrypt('Qwerty123')
        ]);

        Event::create([
            "title" => "Kegiatan Kerja Bakti Bersama Warga oleh Bontang Mangrove Information Center",
            "slug" => "Kegiatan-Kerja-Bakti-Bersama-Warga-oleh-Bontang-Mangrove-Information-Center",
            "excerpt" => "Bontang Mangrove Information Center (BMIC) adalah sebuah pusat informasi tentang hutan bakau yang terletak di kota Bontang, Kalimantan Timur. Selain menyediakan informasi tentang hutan bakau, BMIC juga aktif mengadakan kegiatan sosial dan lingkungan untuk mendorong masyarakat setempat untuk lebih peduli dengan lingkungan sekitar mereka. Salah satu kegiatan yang baru-baru ini dilakukan oleh BMIC adalah kerja bakti bersama warga untuk membersihkan daerah sekitar hutan bakau.",
            "body" => "<br>Bontang Mangrove Information Center (BMIC) adalah sebuah pusat informasi tentang hutan bakau yang terletak di kota Bontang, Kalimantan Timur. Selain menyediakan informasi tentang hutan bakau, BMIC juga aktif mengadakan kegiatan sosial dan lingkungan untuk mendorong masyarakat setempat untuk lebih peduli dengan lingkungan sekitar mereka. <br><br>
            Salah satu kegiatan yang baru-baru ini dilakukan oleh BMIC adalah kerja bakti bersama warga untuk membersihkan daerah sekitar hutan bakau. <br><br>
            Pada hari Sabtu pagi, sekitar 50 warga setempat berkumpul di BMIC untuk memulai kerja bakti. Mereka memakai alat-alat seperti sapu, cangkul, dan karung untuk membersihkan sampah dan tanaman liar yang tumbuh di sekitar hutan bakau. BMIC juga menyediakan sarana air bersih dan makanan ringan untuk semua peserta agar tetap segar dan bersemangat selama kegiatan. <br><br>
            Selama beberapa jam, para peserta kerja bakti bekerja keras membersihkan daerah sekitar hutan bakau. Mereka membersihkan sampah, merapikan tanaman, dan memotong rumput liar yang mengganggu. Meskipun tugasnya berat, semangat para peserta tidak surut. Mereka berbicara dan tertawa bersama, saling membantu dan memotivasi satu sama lain. <br><br>
            Setelah beberapa jam bekerja, daerah sekitar hutan bakau terlihat jauh lebih bersih dan rapi. Para peserta kerja bakti juga merasa senang dan bangga atas hasil kerja mereka. Setelah selesai, BMIC mengundang semua peserta untuk berkumpul kembali di pusat informasi untuk makan siang dan berdiskusi tentang cara menjaga lingkungan yang bersih dan sehat. <br><br>
            Kegiatan kerja bakti bersama warga yang dilakukan oleh BMIC bukan hanya membuat daerah sekitar hutan bakau menjadi lebih bersih dan rapi, tetapi juga menjadi ajang untuk membangun solidaritas dan kebersamaan antara masyarakat setempat. Dengan kegiatan seperti ini, BMIC berharap dapat meningkatkan kesadaran dan kepedulian masyarakat terhadap lingkungan sekitar mereka, serta memotivasi mereka untuk turut serta dalam menjaga kebersihan dan kelestarian lingkungan.",
            "image" => "event-images/kerja bakti.jpg"
        ]);

        Event::create([
            "title" => "Kegiatan Penanaman Kembali Hutan Bakau oleh Bontang Mangrove Information Center",
            "slug" => "Kegiatan-Penanaman-Kembali-Hutan-Bakau-oleh-Bontang-Mangrove-Information-Center",
            "excerpt" => "Bontang Mangrove Information Center (BMIC) terus berkomitmen untuk menjaga kelestarian hutan bakau di kota Bontang, Kalimantan Timur. Selain mengadakan kegiatan sosial dan lingkungan, BMIC juga aktif dalam kegiatan restorasi hutan bakau yang telah rusak akibat pembangunan atau aktivitas manusia lainnya.",
            "body" => "<br>Bontang Mangrove Information Center (BMIC) terus berkomitmen untuk menjaga kelestarian hutan bakau di kota Bontang, Kalimantan Timur. Selain mengadakan kegiatan sosial dan lingkungan, BMIC juga aktif dalam kegiatan restorasi hutan bakau yang telah rusak akibat pembangunan atau aktivitas manusia lainnya. <br><br>
            Salah satu kegiatan restorasi yang baru-baru ini dilakukan oleh BMIC adalah penanaman kembali hutan bakau di sepanjang sungai di dekat pusat informasi. Kegiatan ini bertujuan untuk mengembalikan fungsi hutan bakau sebagai habitat bagi berbagai spesies hewan dan tumbuhan, serta sebagai penahan gelombang dan erosi pantai. <br><br>
            Pada hari Sabtu pagi, sekitar 30 relawan dari BMIC dan masyarakat sekitar berkumpul di sepanjang sungai untuk memulai kegiatan penanaman kembali hutan bakau. Mereka memakai alat-alat seperti sekop, sabit, dan cangkul untuk membuka lubang tanam dan menanam bibit hutan bakau. Bibit hutan bakau yang digunakan adalah jenis-jenis yang sesuai dengan kondisi tanah dan iklim di daerah tersebut. <br><br>
            Selama beberapa jam, para relawan bekerja keras menanam bibit hutan bakau. Mereka membagi tugas dan saling membantu untuk mempercepat proses penanaman. BMIC juga menyediakan sarana air bersih dan makanan ringan untuk semua peserta agar tetap segar dan bersemangat selama kegiatan. <br><br>
            Setelah beberapa jam menanam, sepanjang sungai terlihat jauh lebih hijau dan asri dengan pohon-pohon bakau yang baru ditanam. Para relawan juga merasa senang dan bangga atas hasil kerja mereka. Setelah selesai, BMIC mengundang semua peserta untuk berkumpul kembali di pusat informasi untuk makan siang dan berdiskusi tentang pentingnya menjaga kelestarian hutan bakau. <br><br>
            Kegiatan penanaman kembali hutan bakau yang dilakukan oleh BMIC merupakan langkah konkret untuk menjaga keberlangsungan hidup hutan bakau di daerah tersebut. Dengan kegiatan seperti ini, BMIC berharap dapat memberikan contoh bagi masyarakat setempat untuk turut serta dalam menjaga kelestarian hutan bakau, serta meningkatkan kesadaran dan kepedulian masyarakat terhadap lingkungan sekitar mereka. Kita semua dapat berperan dalam menjaga keberlangsungan hidup hutan bakau dan lingkungan di sekitar kita, dan kegiatan seperti ini adalah salah satu cara yang efektif untuk melakukannya.",
            "image" => "event-images/penanaman benih.jpg"
        ]);

        Event::create([
            "title" => "Menyusuri Muara Sungai dengan Bontang Mangrove Information Center",
            "slug" => "Menyusuri-Muara-Sungai-dengan-Bontang-Mangrove-Information-Center",
            "excerpt" => "Bontang Mangrove Information Center (BMIC) menawarkan kegiatan menarik bagi para wisatawan dan pengunjung yang ingin menikmati keindahan hutan bakau di kota Bontang, Kalimantan Timur. Salah satu kegiatan yang populer adalah tour menyusuri muara sungai yang dilakukan oleh BMIC.",
            "body" => "<br>Bontang Mangrove Information Center (BMIC) menawarkan kegiatan menarik bagi para wisatawan dan pengunjung yang ingin menikmati keindahan hutan bakau di kota Bontang, Kalimantan Timur. Salah satu kegiatan yang populer adalah tour menyusuri muara sungai yang dilakukan oleh BMIC. <br><br>
            Tour ini mengajak para pengunjung untuk menikmati pemandangan hutan bakau yang indah dan kaya akan keanekaragaman hayati. Pengunjung akan ditemani oleh pemandu yang berpengalaman dan terlatih untuk menjelaskan berbagai hal tentang hutan bakau dan ekosistemnya. <br><br>
            Tour dimulai dari pusat informasi BMIC, di mana pengunjung akan diberikan pengenalan tentang hutan bakau dan kegiatan yang dilakukan oleh BMIC untuk menjaga kelestariannya. Kemudian, pengunjung akan naik perahu untuk menyusuri muara sungai yang indah. Perahu yang digunakan adalah perahu kayu tradisional yang dioperasikan oleh nelayan setempat. <br><br>
            Saat menyusuri muara sungai, pengunjung akan melihat berbagai spesies hewan dan tumbuhan yang hidup di sekitar hutan bakau, seperti burung-burung air, kepiting, dan ikan-ikan kecil. Pemandu akan menjelaskan tentang masing-masing spesies dan peran pentingnya dalam ekosistem hutan bakau. Pengunjung juga akan melihat langsung dampak dari kerusakan hutan bakau dan upaya yang dilakukan oleh BMIC untuk memperbaikinya. <br><br>
            Setelah sekitar satu jam menyusuri muara sungai, pengunjung akan kembali ke pusat informasi BMIC. Di sana, mereka dapat mengunjungi pusat informasi dan museum hutan bakau untuk memperdalam pengetahuan mereka tentang hutan bakau. Pengunjung juga dapat membeli oleh-oleh dan suvenir di toko oleh-oleh yang terdapat di pusat informasi. <br><br>
            Kegiatan tour menyusuri muara sungai yang dilakukan oleh BMIC adalah pengalaman yang tak terlupakan bagi para pengunjung. Selain menikmati keindahan hutan bakau yang masih asli, pengunjung juga akan belajar tentang pentingnya menjaga kelestarian hutan bakau dan ekosistemnya. BMIC berharap dengan kegiatan seperti ini, masyarakat dapat lebih menyadari pentingnya menjaga lingkungan sekitar, serta memberikan dampak positif bagi pengembangan pariwisata di kota Bontang. Jadi, tunggu apa lagi? Jangan lewatkan kesempatan untuk menyusuri muara sungai dengan BMIC!",
            "image" => "event-images/tour-2.jpg"
        ]);
    }
}
