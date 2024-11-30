<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index(){
        $data = [
            [
                'id' => 1,
                'name' => "10 Dosa Besar Soeharto",
                'image' => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1266068843i/7725825.jpg",
                'description' => "Buku ini mengulas sisi gelap kekuasaan Soeharto selama Orde Baru. Dengan pendekatan kritis, penulis mengungkap berbagai pelanggaran besar yang dilakukan, mulai dari korupsi, nepotisme, pelanggaran hak asasi manusia, hingga penindasan terhadap oposisi politik. Analisis tajam ini membuka fakta-fakta yang selama ini tersembunyi dan memberikan pemahaman mendalam tentang dampak Orde Baru bagi masyarakat Indonesia.",
                'status' => 'Free Pinjaman',
            ],
            [
                'id' => 2,
                'name' => "Pikiran, Tindakan dan Catatan-Catatan Kelam Sang Diktator",
                'image' => "https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786237910411.jpg",
                'description' => "Buku ini mengupas pemikiran dan langkah-langkah diktator dalam membangun kekuasaan absolutnya. Melalui catatan sejarah dan fakta-fakta mendalam, pembaca diajak memahami strategi, manipulasi, dan dampak kelam dari kepemimpinan otoriter yang mencengkeram sebuah negara hingga ke akar-akarnya.",
                'status' => 'Free',
            ],
            [
                'id' => 3,
                'name' => "Marxisme dan Masalah Kebangsaan",
                'image' => "https://images.tokopedia.net/img/cache/700/VqbcmM/2024/10/11/b54cc416-b637-4e6e-914c-310d7bce34dd.jpg.webp",
                'description' => "Buku ini membahas bagaimana ideologi Marxisme berinteraksi dengan isu-isu kebangsaan di berbagai negara. Dengan analisis mendalam, penulis menjelaskan relevansi teori Marx dalam membentuk identitas bangsa, perjuangan kelas, dan perubahan sosial di tengah realitas politik global.",
                'status' => 'Free',
            ],
            [
                'id' => 4,
                'name' => "Kepemimpinan Militer",
                'image' => "https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/img20210922_15300432.jpg",
                'description' => "Buku ini mengupas prinsip-prinsip dasar kepemimpinan militer, termasuk bagaimana strategi dan taktik diterapkan dalam situasi konflik. Penulis juga membahas peran kepemimpinan dalam menjaga moral pasukan dan mengatasi tantangan di medan perang, baik dalam konteks sejarah maupun modern.",
                'status' => 'Free',
            ],
            [
                'id' => 5,
                'name' => "Kisah di Balik Perang Teluk 1990-1991",
                'image' => "https://images.tokopedia.net/img/cache/700/product-1/2016/7/21/354170/354170_4f5e989b-7035-492d-8cab-6c94af29729e.jpg",
                'description' => "Buku ini mengulas latar belakang, dinamika, dan konsekuensi dari Perang Teluk yang terjadi pada awal 1990-an. Penulis memaparkan konflik antara Irak dan koalisi internasional, strategi militer yang digunakan, serta dampak geopolitik perang ini terhadap kawasan Timur Tengah dan dunia.",
                'status' => 'Free',
            ],
            [
                'id' => 6,
                'name' => "The Management of Savagery",
                'image' => "https://m.media-amazon.com/images/I/71hYIENnBaL.jpg",
                'description' => "Buku ini membahas strategi brutal yang digunakan oleh kelompok ekstremis untuk menciptakan kekacauan dan memperluas kekuasaan mereka. Penulis memaparkan ideologi di balik tindakan kekerasan, propaganda yang digunakan untuk merekrut anggota, dan dampaknya terhadap masyarakat global.",
                'status' => 'Free',
            ],
            [
                'id' => 7,
                'name' => "Yahudi Dalang Perang Dunia I & II",
                'image' => "https://images.tokopedia.net/img/cache/250-square/VqbcmM/2024/3/9/fd0c0cdb-4948-4174-b1e0-70e92b061a87.jpg?ect=4g",
                'description' => "Buku ini memuat teori konspirasi kontroversial yang mengklaim bahwa komunitas Yahudi berperan dalam memicu Perang Dunia I dan II. Penulis menganalisis argumen-argumen tersebut dan implikasi politiknya, meskipun banyak dari klaim ini telah dibantah oleh sejarawan.",
                'status' => 'Free',
            ],
            [
                'id' => 8,
                'name' => "The Entire Life Story of Hitler and Stalin",
                'image' => "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSOgLP_uHU1topX5WvFeok5ecq-jhRpghmNG8m_RVOwJuSgd3ssdAoL3VK3wChgTJw-qmkF01gpEsvUGAL-3YN5Hl_pAEDSt4CVmc6c0FftJgBTrtjZ3AgJ&usqp=CAE",
                'description' => "Buku ini merupakan biografi lengkap dari dua tokoh besar abad ke-20, Adolf Hitler dan Joseph Stalin. Penulis membandingkan kehidupan pribadi, ideologi, serta strategi kekuasaan mereka yang membentuk sejarah dunia, termasuk dampak destruktif dari kebijakan mereka selama Perang Dunia II.",
                'status' => 'Free',
            ],
        ];
        

        return view('welcome', compact('data'));
        // return dd($data);
    }

}
