<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portjar</title>
    <style>

        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    body {
        font-family: Arial, sans-serif;
        background-color: #0a0a23;
        color: #fff;
        line-height: 1.6;
    }
    
    header {
        background: #0a0a23;
        padding: 20px 0;
    }
    
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .logo {
        font-size: 1.5em;
        color: #fff;
        margin-left: 20px;
    }
    
    nav ul {
        display: flex;
        list-style: none;
    }
    
    nav ul li {
        margin-right: 20px;
    }
    
    nav ul li a {
        text-decoration: none;
        color: #fff;
    }
    
    .header-content {
        text-align: center;
        margin-top: 50px;
    }
    
    .header-content h1, .header-content h2 {
        margin: 10px 0;
    }
    
    .header-content button {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: #fff;
        border: none;
        padding: 10px 20px;
        margin-top: 20px;
        cursor: pointer;
        font-size: 1em;
    }
    
    .header-content a{
        text-decoration: none;
        color: black;
    }
    
    .about {
        display: flex;
        padding: 50px 20px;
        align-items: center;
        justify-content: center;
    }
    
    .about img {
        border-radius: 50%;
        width: 200px;
        height: 230px;
        margin-right: 20px;
    }
    
    .about-text {
        max-width: 600px;
    }
    
    .about-text h2 {
        margin-bottom: 20px;
    }
    
    .about-text p {
        margin-bottom: 20px;
    }
    
    .about-text button {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: #fff;
        border: none;
        padding: 10px 20px;
        margin-right: 10px;
        cursor: pointer;
    }

    .about-text a{
        text-decoration: none;
        color: black;
    }
    
    .portfolio {
        text-align: center;
        padding: 50px 20px;
    }
    
    .projects {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .project {
        background: #1a1a3d;
        border-radius: 10px;
        margin: 10px;
        padding: 20px;
        width: 300px;
        text-align: left;
    }
    
    .project img {
        width: 100%;
        border-radius: 10px;
    }
    
    .project h3 {
        margin: 20px 0 10px;
    }
    
    .project p {
        margin-bottom: 10px;
    }
    
    .project a {
        text-decoration: none;
        color: #6a11cb;
    }
    
    .portfolio button {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: #fff;
        border: none;
        padding: 10px 20px;
        margin-top: 20px;
        cursor: pointer;
        font-size: 1em;
    }
    
    
    .contact {
        text-align: center;
        padding: 50px 20px;
    }
    
    .contact-content {
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    .contact-content a {
        text-decoration: none;
        color: white;
        background: linear-gradient(to right, #6a11cb, #2575fc);
    }
    
    .contact-info {
        margin-right: 20px;
        text-align: left;
    }
    
    .contact-info p {
        margin-bottom: 10px;
    }
    
    form {
        background: #1a1a3d;
        padding: 20px;
        border-radius: 10px;
    }
    
    form input, form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 5px;
    }
    
    form button {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
    }
    
    footer {
        text-align: center;
        padding: 20px;
        background: #0a0a23;
    }
    
    footer p {
        margin-bottom: 10px;
    }
    
    .social-links a {
        text-decoration: none;
        color: #fff;
        margin: 0 10px;
    }
    </style>

</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1>Portfolio</h1>
            </div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="header-content">
            <h2>I`m</h2>
            <h1>Muhamad Fajar Ramdani</h1>
            <button><a href="https://github.com/Fajaranakbaik1">Project</a></button>
        </div>
    </header>

    <section id="about" class="about">
        <div class="about-content">
            <img src="{{ asset('asset/img/foto-nametag.jpg') }}" alt="Profile Picture">
            <div class="about-text">
                <h2>About Me</h2>
                <p>Saya Muhamad Fajar Ramdani, saya murid dari SMK WIKRAMA KOTA BOGOR.
                    umur saya 17 tahun dan saya tinggal di Bogor. Jika ada yang di tanyakan
                    bisa hubungi saya di tombol di bawah ini.
                </p>
                <button><a href="https://www.linkedin.com/in/muhamad-fajar-ramdani-743a97311/">Hire Me</a></button>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <h2>Portfolio</h2>
        <div class="projects">
            <div class="project">
                <img src="{{asset('asset/img/foto-kasir.png')}}" alt="Project 1">
                <h3>Toko Barang Menggunakan SESSION PHP</h3>
                <p>Web ini sama dengan kasir online / anda bisa memakai untuk membayar saat sudah berbelanja</p>
                <a href="http://tokofajarssa.000.pe/index.php">Read more</a>
            </div>
            <div class="project">
                <img src="{{'asset/img/foto-datasiswa.png'}}" alt="Project 2">
                <h3>Data Siswa Menggunakan SESSION PHP</h3>
                <p>Web yang bisa menginput data siswa dan mencetak menjadi pdf. Cocok untuk para guru</p>
                <a href="https://datasiswafromjar.free.nf/">Read more</a>
            </div>
            <div class="project">
                <img src="{{'asset/img/foto-bb.png'}}" alt="Project 3">
                <h3>Pembelian Bahan Bakar Shell > OOP PHP</h3>
                <p>Web tentang Pembelian Bahan Bakar Shell Secara Online dan Bisa mencetak struk nya</p>
                <a href="http://bensinshelljar.000.pe">Read more</a>
            </div>
            <div class="project">
                <img src="{{'asset/img/foto-rental.png'}}" alt="Project 4">
                <h3>Toko Rental Motor Honda OOP PHP</h3>
                <p>Web Yang cocok untuk para pengusaha rental motor</p>
                <a href="http://rentalmotorjar.000.pe">Read more</a>
            </div>
        </div>
        <button>ALL PROJECT ME IN GITHUB AND LINKEDIN</button>
    </section>


    <section id="contact" class="contact">
        <h2>Contact</h2>
        <div class="contact-content">
            <div class="contact-info">
                <p>Drop Me a Message</p>
                <p>Jl. Mayjen sukma KM 14, Cikereteg Caringin Bogor</p>
                <p><a href="tel:+6285719034643">Whatsapp</a></p>
                <p><a href="mailto:muhamadfajarramdani@smkwikrama.sch.id">muhamadfajarramdani@smkwikrama.sch.id</a></p>
            </div>
            <form action="#">
                <input type="text" name="name" placeholder="MUHAMAD FAJAR RAMDANI">
                <input  placeholder="0857-1903-4643">
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 - Fajar. All rights reserved</p>
        <div class="social-links">
            <a href="https://www.instagram.com/fajarrmdniii/">IG</a>
            <a href="https://github.com/Fajaranakbaik1">GITHUB</a>
            <a href="https://www.linkedin.com/in/muhamad-fajar-ramdani-743a97311/">LI</a>
        </div>
    </footer>
</body>
</html>
