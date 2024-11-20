<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="overlayer">
        <div class="text">
            <h1>Wanda <span>&</span> Gina</h1>
            <p class="dearText">Dear To <br>Bapak/Ibu/Sahabat</p>
            <h2 id="namaTo">Reja</h5>
            <button id="bukaUndangan"><i class="bi bi-envelope-paper-heart"></i>&nbsp;Buka Undangan</button>
            <p class="textFooter">Mohon maaf apabila ada kesalahan penulisan nama/gelar</p>
        </div>
    </div>

    <div class="main" style="display: none;">
        <div class="slider">
            <img src="{{ asset('images/cewe-cowo.jpeg') }}" class="active" alt="Slide 1">
            <img src="{{ asset('images/cewe-cowo-duduk.jpeg') }}" alt="Slide 2">
            <img src="{{ asset('images/cewe-cowo-pegangan.jpeg') }}" alt="Slide 3">
        </div>
        <div class="text">
            <h1>Wanda <span>&</span> Gina</h1>
            <h4>25 Desember 2024</h2>
        </div>
        <div class="hitungMundur">
            <div class="ht-text">
                <h1 id="days">00</h1>
                <p>Day</p>
            </div>
            <div class="ht-text">
                <h1 id="hours">00</h1>
                <p>Hour</p>
            </div>
            <div class="ht-text">
                <h1 id="minutes">00</h1>
                <p>Minute</p>
            </div>
        </div>
        <div class="overlayer-blur"></div>
    </div>

    <div class="frame1" style="display: none;">
        <p class="frame1-header-text">“Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.​”
        <br>(Ar Rum Ayat 21​)</p>

        <div class="frame1-box">
            <div class="frame1-box-text-left">
                <h1>The</h1>
                <h1>Groom</h1>
            </div>
            <div class="frame1-box-image">
                <img src="{{ asset('images/cowo-sendiri.jpeg') }}">
                <h1>Wanda Wibiksana</h1>
                <p>Putra terakhir dari Bpk Zaenal Abidin dan ibu Dede</p>
            </div>
        </div>

        <h1 class="dan-frame1">&</h1>

        <div class="frame1-box2">
            <div class="frame1-box2-image">
                <img src="{{ asset('images/cewe-sendiri.jpeg') }}">
                <h1>Gina Fauziah</h1>
                <p>Putri kedua dari bpk.U Sunarya dan Ibu Siti Sopiah</p>
            </div>
            <div class="frame1-box2-text-right">
                <h1>The</h1>
                <h1>Bride</h1>
            </div>
        </div>
    </div>

    <div class="frame2" style="display: none;">
        <h1 class="title-frame2">Save <span>The Date</span></h1>

        <div class="box-frame2">
            <h1>Akad</h1>
            <p>Minggu, 27 Oktober 2024</p>
            <p>08:00 WIB</p>
        </div>

        <div class="box-frame2" style="margin-top: 20px;text-align: right;">
            <h1>Resepsi</h1>
            <p>Minggu, 27 Oktober 2024</p>
            <p>10:00 WIB - Selesai</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#bukaUndangan').on('click', function() {
                $('.overlayer').fadeOut(500); // Hilangkan dengan durasi 500ms
                $('.main').fadeIn(5000);
                $('.frame1').fadeIn(5000);
                $('.frame2').fadeIn(5000);
            });

            let $slides = $('.slider img'); // Semua gambar dalam slider
            let currentIndex = 0; // Indeks slide yang aktif

            function showNextSlide() {
                $slides.eq(currentIndex).fadeOut(1000).removeClass('active'); // Sembunyikan slide saat ini
                currentIndex = (currentIndex + 1) % $slides.length; // Pindah ke slide berikutnya
                $slides.eq(currentIndex).fadeIn(1000).addClass('active'); // Tampilkan slide berikutnya
            }

            setInterval(showNextSlide, 5000); // Jalankan setiap 3 detik

            // Tanggal target hitung mundur (24 Desember 2024 WIB)
            const targetDate = new Date('2024-12-24T00:00:00+07:00').getTime();

            function updateCountdown() {
                const now = new Date().getTime();
                const timeLeft = targetDate - now; // Selisih waktu

                if (timeLeft > 0) {
                    const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));

                    // Tampilkan ke elemen HTML
                    $('#days').text(days.toString().padStart(2, '0'));
                    $('#hours').text(hours.toString().padStart(2, '0'));
                    $('#minutes').text(minutes.toString().padStart(2, '0'));
                } else {
                    // Waktu habis
                    $('#days, #hours, #minutes').text('00');
                }
            }

            // Perbarui countdown setiap detik
            setInterval(updateCountdown, 1000);

            // Jalankan pertama kali saat halaman dimuat
            updateCountdown();
        });
    </script>
</body>
</html>