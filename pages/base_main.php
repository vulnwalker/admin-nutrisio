<?php

$Main->Base =
"

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>

    <meta name='twitter:site' content='@metroui'>
    <meta name='twitter:creator' content='@pimenov_sergey'>
    <meta name='twitter:card' content='summary'>
    <meta name='twitter:title' content='Metro 4 Components Library'>
    <meta name='twitter:description' content='Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.'>
    <meta name='twitter:image' content='../../images/m4-logo-social.png'>

    <meta property='og:url' content='https://metroui.org.ua/v4/index.html'>
    <meta property='og:title' content='Metro 4 Components Library'>
    <meta property='og:description' content='Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.'>
    <meta property='og:type' content='website'>
    <meta property='og:image' content='../../images/m4-logo-social.png'>
    <meta property='og:image:secure_url' content='../../images/m4-logo-social.png'>
    <meta property='og:image:type' content='image/png'>
    <meta property='og:image:width' content='968'>
    <meta property='og:image:height' content='504'>

    <meta name='author' content='Sergey Pimenov'>
    <meta name='description' content='The most popular HTML, CSS, and JS library in Metro style.'>
    <meta name='keywords' content='HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework'>

    <!-- <link rel='shortcut icon' href='https://metroui.org.ua/favicon.ico' type='image/x-icon'>
    <link rel='icon' href='https://metroui.org.ua/favicon.ico' type='image/x-icon'> -->

    <link rel='apple-touch-icon' sizes='76x76' href='http://pilar.web.id/images/Logo/logoP.png'>
		<link rel='icon' type='image/png' href='http://pilar.web.id/images/Logo/logoP.png'>

    <link href='../css/metro-all8e71.css?ver=@@b-version' rel='stylesheet'>
    <link href='../css/start.css' rel='stylesheet'>

    <title>REZEKI KITA</title>
</head>
<body class='bg-dark fg-white'>

    <div class='container-fluid start-screen no-overflow'>
        <!-- <h1 class='start-screen-title' style='line-height: unset;'>Your Title</h1> -->

        <div class='tiles-area' style='margin-top: -25px;'>
            <div class='tiles-grid tiles-group size-2 fg-white'>
                <a href='pages.php?Pg=refMember' data-role='tile' class='bg-darkIndigo fg-white'>
                    <img class='icon' src='assets/images/penerimaan.png' alt=''>
                    <span class='branding-bar'>MEMBER</span>
                </a>
                <a href='pages.php?Pg=refArtikel' data-role='tile' class='bg-green fg-white'>
                    <img class='icon' src='assets/images/pengeluaran.png' alt=''>
                    <span class='branding-bar'>ARTIKEL</span>
                </a>
                <a href='pages.php?Pg=refProduk' data-role='tile' class='bg-orange fg-white' data-size='wide'>
                    <img class='icon' src='assets/images/spj.png' alt=''>
                    <span class='branding-bar'>PRODUK</span>
                </a>
                <a href='pages.php?Pg=penjualanProduk' data-role='tile' data-size='wide' class='fg-white bg-crimson'>
                		<img class='icon' src='assets/images/penanggung jawab spj.png' alt=''>
                    <span class='branding-bar'>PENJUALAN</span>
                </a>
            </div>

						<div class='tiles-grid tiles-group size-2 fg-white'>
                <a href='pages.php?Pg=pinjamanSaldo' data-role='tile' data-size='wide' class='bg-emerald fg-white'>
                    <img class='icon' src='assets/images/pinjaman 2nd.png' alt=''>
                    <span class='branding-bar'>PINJAMAN</span>
                </a>
                <a href='pages.php?Pg=bukuUmum' data-role='tile' class='bg-cyan fg-white'>
                    <img class='icon' src='assets/images/buku kas umum.png' alt=''>
                    <span class='branding-bar'>BUKU KAS UMUM</span>
                </a>
                <a href='pages.php?Pg=saldoAwal' data-role='tile' class='bg-grayBlue fg-white' data-size='medium'>
                    <img class='icon' src='assets/images/saldo awal.png' alt=''>
                    <span class='branding-bar'>SALDO AWAL</span>
                </a>
                <a href='pages.php?Pg=bayarPinjaman' data-role='tile' data-size='medium' class='fg-white bg-darkIndigo'>
                		<img class='icon' src='assets/images/bayar pinjaman.png' alt=''>
                    <span class='branding-bar'>BAYAR PINJAMAN</span>
                </a>
                <a href='pages.php?Pg=mutasiSaldo' data-role='tile' data-size='medium' class='fg-white bg-cobalt'>
                		<img class='icon' src='assets/images/mutasi.png' alt=''>
                    <span class='branding-bar'>MUTASI</span>
                </a>
            </div>

            <div class='tiles-grid tiles-group size-2 fg-white'>
                <a href='pages.php?Pg=userManage' data-role='tile' data-size='wide' class='bg-indigo fg-white'>
                    <img class='icon' src='assets/images/user management.png' alt=''>
                    <span class='branding-bar'>USER MANAGEMENT</span>
                </a>
                <a href='pages.php?Pg=refPemda' data-role='tile' data-size='wide' class='bg-cyan fg-white'>
                    <img class='icon' src='assets/images/pemda.png' alt=''>
                    <span class='branding-bar'>PEMDA</span>
                </a>
                <a href='pages.php?Pg=refKas' data-role='tile' class='bg-green fg-white' data-size='medium'>
                    <img class='icon' src='assets/images/kas.png' alt=''>
                    <span class='branding-bar'>KAS</span>
                </a>
                <a href='pages.php?Pg=refRekening' data-role='tile' data-size='medium' class='fg-white bg-cobalt'>
                		<img class='icon' src='assets/images/rekening 2nd.png' alt=''>
                    <span class='branding-bar'>REKENING</span>
                </a>
            </div>

            <div class='tiles-grid tiles-group size-2 fg-white'>
                <a href='pages.php?Pg=refBank' data-role='tile' class='bg-emerald fg-white'>
                    <img class='icon' src='assets/images/bank.png' alt=''>
                    <span class='branding-bar'>BANK</span>
                </a>
                <a href='pages.php?Pg=refPihakLuar' data-role='tile' class='bg-crimson fg-white'>
                    <img class='icon' src='assets/images/pihak luar.png' alt=''>
                    <span class='branding-bar'>PIHAK LUAR</span>
                </a>
                <a href='pages.php?Pg=refProjek' data-role='tile' class='bg-orange fg-white' data-size='medium'>
                    <img class='icon' src='assets/images/project.png' alt=''>
                    <span class='branding-bar'>PROJEK</span>
                </a>
                <a href='pages.php?Pg=refGajiPokok' data-role='tile' data-size='medium' class='bg-cyan fg-white'>
                    <img class='icon' src='assets/images/pemda.png' alt=''>
                    <span class='branding-bar'>GAJI POKOK</span>
                </a>
                <a href='pages.php?Pg=refPegawai' data-role='tile' data-size='medium' class='fg-white bg-indigo'>
                		<img class='icon' src='assets/images/pegawai.png' alt=''>
                    <span class='branding-bar'>PEGAWAI</span>
                </a>
                <a href='pages.php?Pg=refRekening' data-role='tile' data-size='medium' class='fg-white bg-cobalt'>
                		<img class='icon' src='assets/images/rekening 2nd.png' alt=''>
                    <span class='branding-bar'>REKENING</span>
                </a>
            </div>

            <div class='tiles-grid tiles-group size-2 fg-white'>
                <a href='pages.php?Pg=logAbsensi' data-role='tile' data-size='wide' class='bg-indigo fg-white'>
                    <img class='icon' src='assets/images/user management.png' alt=''>
                    <span class='branding-bar'>ABSENSI</span>
                </a>
                <a href='pages.php?Pg=dinasLuar' data-role='tile' data-size='medium' class='bg-cyan fg-white'>
                    <img class='icon' src='assets/images/pemda.png' alt=''>
                    <span class='branding-bar'>DINAS LUAR</span>
                </a>
                <a href='pages.php?Pg=perhitunganGaji' data-role='tile' data-size='medium' class='bg-cyan fg-white'>
                    <img class='icon' src='assets/images/pemda.png' alt=''>
                    <span class='branding-bar'>PENGGAJIAN</span>
                </a>
                <a href='pages.php?Pg=settingSystem' data-role='tile' class='bg-green fg-white' data-size='medium'>
                    <img class='icon' src='assets/images/user management.png' alt=''>
                    <span class='branding-bar'>SETTING</span>
                </a>

                <a href='index.php?Pg=LogOut' data-role='tile' data-size='medium' class='bg-grayBlue fg-white'>
                		<img class='icon' src='assets/images/logout white.png' alt=''>
                    <span class='branding-bar'>LOGOUT</span>
                </a>
            </div>



        </div>
    </div>


    <script src='../js/jquery-3.3.1.min.js'></script>
    <script src='../js/metro.js'></script>
    <script src='../js/start.js'></script>

</body>
</html>

";
?>
