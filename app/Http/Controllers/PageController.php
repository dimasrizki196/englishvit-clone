<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Data Program Global
     */
    private function getProgramsData()
    {
        return [
            ['title' => 'TOEFL Listening', 'category' => 'Test Prep', 'icon' => 'fas fa-headphones', 'color' => 'yellow', 'price' => 'Rp150.000', 'old_price' => null, 'discount' => null, 'image' => 'https://picsum.photos/seed/toefl1/400/250', 'desc' => 'Fokus kuasai trik menjawab soal Listening TOEFL dengan cepat dan tepat.'],
            ['title' => 'Panduan Persiapan TOEFL', 'category' => 'Test Prep', 'icon' => 'fas fa-book', 'color' => 'yellow', 'price' => 'Rp99.000', 'old_price' => null, 'discount' => null, 'image' => 'https://picsum.photos/seed/toefl2/400/250', 'desc' => 'Langkah awal terbaik untuk memahami struktur dan sistem skor TOEFL.'],
            ['title' => 'Grammar for TOEFL Hack', 'category' => 'Grammar', 'icon' => 'fas fa-pen-nib', 'color' => 'blue', 'price' => 'Rp175.000', 'old_price' => null, 'discount' => null, 'image' => 'https://picsum.photos/seed/toefl3/400/250', 'desc' => 'Cara cepat menaklukkan soal Structure & Written Expression.'],
            ['title' => 'English Pro', 'category' => 'Pro Level', 'icon' => 'fas fa-briefcase', 'color' => 'green', 'price' => 'Rp250.000', 'old_price' => null, 'discount' => null, 'image' => 'https://picsum.photos/seed/engpro/400/250', 'desc' => 'Kuasai bahasa Inggris untuk kebutuhan profesional dan dunia kerja.'],
            ['title' => 'Grammar for Speaking', 'category' => 'Speaking', 'icon' => 'fas fa-comments', 'color' => 'blue', 'price' => 'Rp302.500', 'old_price' => 'Rp605.000', 'discount' => '50%', 'image' => 'https://picsum.photos/seed/grammspeak/400/250', 'desc' => 'Jago Speaking tanpa mikir grammar kelamaan.'],
            ['title' => 'IELTS Bootcamp', 'category' => 'Intensive', 'icon' => 'fas fa-award', 'color' => 'yellow', 'price' => 'Rp332.000', 'old_price' => 'Rp830.000', 'discount' => '60%', 'image' => 'https://picsum.photos/seed/bootcamp/400/250', 'desc' => 'Belajar strategi lengkap dan latihan intensif menjawab soal IELTS.'],
            ['title' => 'English for Basic', 'category' => 'Beginner', 'icon' => 'fas fa-star', 'color' => 'pink', 'price' => 'Rp125.000', 'old_price' => null, 'discount' => null, 'image' => 'https://picsum.photos/seed/basic/400/250', 'desc' => 'Mulai perjalanan bahasa Inggrismu dari nol dengan materi yang fun.'],
        ];
    }

    private function getTestimonialsData()
    {
        return [
            ['name' => 'Anisa Cendani H.', 'sub' => 'Learn with Yovi', 'title' => 'Alumni TOEFL', 'role' => 'Colleger', 'text' => 'Saya belajar penggunaan grammar dengan cara yang lebih mudah dipahami. Saya juga dapat banyak kosakata baru yang membuat saya lebih pede.', 'img' => 'https://i.pravatar.cc/150?img=1'],
            ['name' => 'Aristya Naziiha', 'sub' => 'Learn with Elsa', 'title' => 'Alumni IELTS', 'role' => 'Mechanical Engineering Student', 'text' => 'Ini adalah kelas online pertama yang berkesan buat saya. Teachernya helpful banget dan membuat kita PD untuk speaking tanpa takut salah.', 'img' => 'https://i.pravatar.cc/150?img=5'],
            ['name' => 'Feri Anggara', 'sub' => 'Learn with Renny', 'title' => 'Alumni Speaking', 'role' => 'Lecturer', 'text' => 'Ms. Renny ngajarnya asik banget, materi yang diberikan sangat berguna banget untuk ningkatin skor IELTS saya. Thank you Ms!', 'img' => 'https://i.pravatar.cc/150?img=11'],
            ['name' => 'Budi Santoso', 'sub' => 'Learn with Yovi', 'title' => 'Alumni Professional', 'role' => 'Software Engineer', 'text' => 'Dari yang awalnya malu ngomong bahasa Inggris, sekarang di kantor udah berani presentasi pakai full English berkat kelas One on One.', 'img' => 'https://i.pravatar.cc/150?img=12'],
            ['name' => 'Siti Aminah', 'sub' => 'Learn with Yovi', 'title' => 'Alumni Beginner', 'role' => 'Teacher', 'text' => 'Sistem belajarnya terstruktur banget. Sangat ngebantu buat persiapan beasiswa LPDP saya kemaren.', 'img' => 'https://i.pravatar.cc/150?img=20'],
            ['name' => 'Rina Wati', 'sub' => 'Learn with Elsa', 'title' => 'Alumni Entrepreneur', 'role' => 'Entrepreneur', 'text' => 'Materinya padat dan jelas. Nggak nyesel ambil program speaking di sini, teman sekelasnya juga pada aktif.', 'img' => 'https://i.pravatar.cc/150?img=33'],
            ['name' => 'Dedi Mulyadi', 'sub' => 'Learn with Renny', 'title' => 'Alumni Data Analyst', 'role' => 'Data Analyst', 'text' => 'Tutornya asik parah! Kita diajak ngobrol santai tapi tetep dikoreksi kalau ada grammar yang salah. Very recommended.', 'img' => 'https://i.pravatar.cc/150?img=59'],
            ['name' => "Laras Ayu", "sub" => "Learn with Renny", "title" => "Alumni Fresh Graduate", "role" => "Fresh Graduate", "text" => "Bener-bener tempat terbaik buat ningkatin skor TOEFL. Tips and tricks dari tutornya work banget pas ngerjain soal beneran.", "img" => "https://i.pravatar.cc/150?img=47"],
        ];
    }

    private function getClientsData()
    {
        return [
            ['name' => 'BNEC', 'img' => 'images/logos/bnec.webp'],
            ['name' => 'Bhina Bhakti Husada', 'img' => 'images/logos/bhina-bhakti-husada.webp'],
            ['name' => 'Himatekkits', 'img' => 'images/logos/himatekkits.webp'],
            ['name' => 'Indmira', 'img' => 'images/logos/indmira.webp'],
            ['name' => 'SiCepat', 'img' => 'images/logos/sicepat.webp'],
            ['name' => 'Thenblank', 'img' => 'images/logos/thenblank.webp'],
        ];
    }

    public function welcome()
    {
        return view('welcome', [
            'recommendedPrograms' => $this->getProgramsData(),
            'testimonials' => $this->getTestimonialsData(),
            'clients' => $this->getClientsData(),
        ]);
    }
    public function liveClass()
    {
        return view('live-class', [
            'recommendedPrograms' => $this->getProgramsData(),
            'testimonials' => $this->getTestimonialsData(),
            'clients' => $this->getClientsData(),
        ]);
    }

    public function oneOnOne()
    {
        // 1. Data Alumni Shorts
        $alumniTestimonials = [
            ['video_id' => 'ekDlJq8COIQ'],
            ['video_id' => 'sG_sdKVhOnE'],
            ['video_id' => 'av_l-WE1tCM'],
            ['video_id' => 'YryQVHdZcQ8'],
            ['video_id' => 'JWRex_zJFl8'],
            ['video_id' => 'KIvDQBb9wE4'],
            ['video_id' => 'cJimxbLn-dY'],
        ];

        // 2. Data Mentor
        $mentorsData = [
            [
                'name' => 'Selma Wulandari',
                'desc' => 'Joyful learning, solid understanding',
                'rating' => '4.5 | 30 siswa',
                'video_id' => 'eWESf5yL-lo',
                'image' => 'https://img.youtube.com/vi/eWESf5yL-lo/maxresdefault.jpg'
            ],
            [
                'name' => 'Yovi',
                'desc' => 'Professional & Engaging',
                'rating' => '4.8 | 45 siswa',
                'video_id' => 'd_-ByO3zYI4',
                'image' => 'https://img.youtube.com/vi/d_-ByO3zYI4/maxresdefault.jpg'
            ],
            [
                'name' => 'Mentor Tiga',
                'desc' => 'Interactive and fun learning',
                'rating' => '4.7 | 25 siswa',
                'video_id' => 'tkP1U8-DW0M',
                'image' => 'https://img.youtube.com/vi/tkP1U8-DW0M/maxresdefault.jpg'
            ],
            [
                'name' => 'Mentor Empat',
                'desc' => 'Focus on speaking fluency',
                'rating' => '4.9 | 50 siswa',
                'video_id' => 'vkJyQTa7Ov8',
                'image' => 'https://img.youtube.com/vi/vkJyQTa7Ov8/maxresdefault.jpg'
            ]
        ];

        return view('one-on-one', [
            'programs' => $this->getProgramsData(),
            'alumniShorts' => $alumniTestimonials,
            'mentors' => $mentorsData,
            'testimonials' => $this->getTestimonialsData(),
        ]);
    }

    public function certificationTest()
    {
        return view('certification-test', [
            'testimonials' => $this->getTestimonialsData(),
            'clients' => $this->getClientsData(),
        ]);
    }

    public function learningPackage()
    {
        return view('learning-package', [
            'programs' => $this->getProgramsData(),
            'testimonials' => $this->getTestimonialsData(),
            'clients' => $this->getClientsData(),
        ]);
    }

    public function smartBook()
    {
        return view('smart-book', [
            'programs' => $this->getProgramsData(),
            'testimonials' => $this->getTestimonialsData(),
            'clients' => $this->getClientsData(),
        ]);
    }
}
