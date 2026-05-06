<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Englishvit - Clone</title>

    <!-- Load Vite (Tailwind v4) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-white font-sans antialiased">
    <x-navbar />

    <main class="min-h-screen">
        <!-- Konten yang unik di halaman beranda -->
        <x-hero />
        <x-programs :programs="$recommendedPrograms" />
        <x-testimonials :testimonials="$testimonials" />
        <x-testimonials-instansi :clients="$clients" />
        <x-promo />
        <x-why />
        <x-faq />
        <x-blog />
    </main>

    <x-footer />

</body>

</html>
