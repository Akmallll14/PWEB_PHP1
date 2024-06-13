<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    session_start();
    if($_SESSION['is_logged_in'] != TRUE)
    {
        header("location: formlogin.php");
        exit();
    }
    ?>
    <main>
    <div class="container mt-5 col-md-12">
    <div class="row">
        
        <div class="col-md-3">
            <h4>Akmal Dafa Adyatma</h4>
            <ul class="list-group">
                <a href="formlogin.php" class="list-group-item">Login</a>
                <a href="biodata.html" class="list-group-item">Biodata</a>
                <a href="logout.php" class="list-group-item">Logout</a>
            </ul>
        </div>

        
        <div class="col-md-9">
            <h6>ijinkan saya perkenalkan diri saya</h6>
            <section class="mt-3">
                <p>Selamat pagi, siang, ataupun malam. Saya Akmal Dafa Adyatma Mahasiswa Universitas Dian Nuswantoro, Fakultas Ilmu Komputer, Program Studi Sistem Informasi. Saya disini sedang belajar tentang bagaimana cara menggunakan framework css dalam pembuatan web. Saya akan sedikit memperkenalkan diri saya, Saya lahir di kabupaten Demak pada 14 Mei 2004. Saya mempunyai hobi bermain bola basket </p>
            </section>
            <section class="mt-3">
                <img src="WhatsApp Image 2024-04-19 at 10.10.59 PM.jpeg" width="210px" height="300px" >
                <h6>Ini adalah foto saya ketika 
                    saya bermain basket dengan teman-teman
                </h6>
            </section>
            <section class="mt-5">
                
                <p>Saya sangat bersyukur dapat kuliah di UDINUS karena saya mempelajari banyak ilmu yang saya dapat di UDINUS. Bukan hanya ilmu di dalam kelas, saya juga mendapat banyak ilmu ketika saya berorganisasi di kampus. </p>
            </section>
            <section class="mt-3">
                <P>Sekian perkenalan singkat dari saya.</P>
                <h5>TERIMA KASIH</h5>
            </section>
        </div>
    </div>
</div>

    </main>
</body>
</html>