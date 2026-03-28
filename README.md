# Website Portofolio (HTML + CSS + PHP + MySQL) ──★ ˙🍓 ̟ !!

Nama   : Dilla Maharani

NIM    : 2409116023

Kelas  : Sistem Informasi A'24

---

## ──★ ˙Deskripsi Website

Website ini merupakan website portofolio statis berbasis HTML + CSS dengan 3 section utama:
- **Home (Hero Section)**: perkenalan singkat + foto
- **About Me**: deskripsi diri, skill (progress bar), dan pengalaman.
- **Certificates**: daftar sertifikat dalam bentuk card.

---

## ──★ ˙Pengembangan Website (Dinamis)

Pada Mini Project 2, website ini dikembangkan menjadi dinamis, artinya:
- Data tidak lagi ditulis langsung di kode
- Data diambil dari **database (MySQL)**
- Perubahan data bisa dilakukan tanpa mengedit kode

---
## ──★ ˙Fitur-Fitur

### Fitur Statis
- Navbar (header + navigasi section)
- Section Home (Hero)
- Section About Me
- Layout responsive menggunakan flex & Bootstrap

### Fitur Dinamis
- **Pengalaman**
  - Data diambil dari database (`pengalaman`)
  - Ditampilkan menggunakan loop PHP

- **Certificates**
  - Data diambil dari database (`sertifikat`)
  - Gambar ditampilkan dari path database
  - Warna card otomatis looping

- **Skills**
  - Data diambil dari database (`skill`)
  - Progress bar menyesuaikan persentase

---

## ──★ ˙Teknologi yang Digunakan

### Frontend
- **HTML5**  
- **CSS3**  
- **Bootstrap 5 (CDN)**  

### Backend
- **PHP**
  - Menghubungkan website dengan database
  - Mengambil dan menampilkan data

### Database
- **MySQL**
  - Menyimpan data pengalaman, sertifikat, dan skill

---

## ──★ ˙Struktur Folder

```
portofolio/
│
├── index.php
├── koneksi.php
├── style.css
└── images/
    ├── mypoto.png
    ├── instagram.png
    ├── inforsa.png
    ├── pengmas.jpg
    └── makrab.png
```

---

## ──★ ˙Tampilan dan Penjelasan Code Setiap Section / Fitur

### 1) Navbar

<img width="1921" height="188" alt="image" src="https://github.com/user-attachments/assets/32434f25-c28e-4313-a9ef-6507d57d7382" />

**Fungsi:**
- Menampilkan identitas singkat “My Portofolio ♡”
- Navigasi anchor link ke setiap section `#home`, `#about`, `#certificate`
- Menampilkan ikon instagram + username

#### ✿ HTML
```html
<header>
  <div class="container-navbar">
    <div class="logo">My Portofolio ♡</div>
    <nav>
      <a href="#home">Home</a>
      <a href="#about">About Me</a>
      <a href="#certificate">Certificate</a>
    </nav>
  </div>
</header>
```
- ```<header>``` → membungkus area navbar

- ```href="#home"``` → mengarahkan ke section dengan id home

- ```.container-navbar``` → mengatur layout navbar

#### ✿ CSS
```css
.container-navbar{
  display: flex;
  justify-content: space-between;
  align-items: center;
}
```
- ```display: flex;``` → membuat logo dan menu sejajar

- ```justify-content: space-between;``` → memberi jarak kiri & kanan
  
- ```align-items: center;``` → membuat posisi vertikal rata tengah

---

### 2) Home (Hero Section)

<img width="1921" height="1031" alt="image" src="https://github.com/user-attachments/assets/73f759f6-e0a7-4e8b-9d04-d607955b0ba6" />


**Fungsi:**
- Menampilkan perkenalan singkat
- Menampilkan 1 gambar profil

#### ✿ HTML
```html
<section id="home">
  <div class="container-home">
    <div class="teksperkenalan">
      <h1>Halo, Saya Dilla Maharani</h1>
      <p>Mahasiswa Sistem Informasi...</p>
    </div>

    <div class="fotoku">
      <img src="images/mypoto.png" alt="Foto Saya">
    </div>
  </div>
</section>
```

- ```id="home"``` → id agar bisa dipanggil dari navbar

- ```.container-home``` → membagi layout menjadi 2 kolom

- ```<img>``` → tag untuk mengupload gambar

#### ✿ CSS
```css
.container-home{
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 30px;
}

.fotoku img{
  max-width: 300px;
  border-radius: 20px;
}
```

- ```display: flex;``` → membuat teks & gambar sejajar

- ```gap``` → memberi jarak antar kolom

- ```border-radius``` → membuat sudut gambar membulat/menumpul
 
---

### 3) About Me
Section ini terdiri dari deskripsi, skills, dan pengalaman.


<img width="1921" height="1034" alt="image" src="https://github.com/user-attachments/assets/562c2908-6f2a-4810-a7e2-dda184208911" />



#### a) Deskripsi Diri

##### ✿ HTML
```html
<div class="deskripsi">
  <h2>About Me</h2>
  <p>Saya adalah mahasiswa...</p>
</div>
```

##### ✿ CSS
```css
.deskripsi{
  padding: 40px;
  border-radius: 20px;
}
```

- Digunakan sebagai wadah teks profil

- Diberi padding agar tidak terlalu rapat

#### b) Skills (Progress Bar)


**Fungsi:** Menampilkan kemampuan dalam bentuk progress bar.

##### ✿ HTML
```html
<div class="skill">
  <p>HTML</p>
  <div class="bar">
    <div class="fill" style="width:80%"></div>
  </div>
</div>
```

- ```.bar``` → background progress bar

- ```.fill``` → isi progress bar sesuai persentase

- ```style="width:80%"``` → menentukan nilai persentase skill

##### ✿ CSS
```css
.bar{
  background: #ddd;
  border-radius: 10px;
  overflow: hidden;
}

.fill{
  height: 10px;
  border-radius: 10px;
}
```

- ```overflow: hidden;``` → agar isi bar tidak keluar background

- ```border-radius``` → membuat progress bar lebih modern dan tumpul

#### c) Pengalaman

##### ✿ HTML
```html
<div class="timeline">
  <div class="timeline-item">
    <h3>Panitia Makrab</h3>
    <p>2024 - Divisi Acara</p>
  </div>
</div>
```

##### ✿ CSS
```css
.timeline{
  position: relative;
  padding-left: 30px;
}

.timeline::before{
  content:"";
  position:absolute;
  left:10px;
  top:0;
  bottom:0;
  width:3px;
}

.timeline-item::before{
  content:"";
  position:absolute;
  left:-24px;
  width:12px;
  height:12px;
  border-radius:50%;
}
```

- ```::before``` → digunakan untuk membuat garis dan titik timeline

- ```position: absolute;``` → untuk mengatur posisi garis
---

### 4) Certificates (Card / Grid)

<img width="1921" height="1175" alt="image" src="https://github.com/user-attachments/assets/039059b8-6a3f-48d1-9c47-96be2439d333" />

**Fungsi:**

- Menampilkan daftar sertifikat dalam bentuk card

- Menggunakan Bootstrap 5 untuk komponen card

#### ✿ HTML
```html
<section id="certificate">
  <div class="sertif">
    <div class="card custom-card" style="width: 18rem;">
      <img src="images/inforsa.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">INFORSA 2024</h5>
        <p class="card-text">Sertifikat kepanitiaan...</p>
      </div>
    </div>
  </div>
</section>
```

- ```class="card"``` → komponen dari Bootstrap 5

```.custom-card``` → tambahan styling dari CSS sendiri

#### ✿ CSS
```css
.sertif{
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.custom-card{
  border-radius: 20px;
}
```

- ```flex-wrap: wrap;``` → agar card turun ke bawah jika layar kecil

- ```gap``` → memberi jarak antar card

---

## ──★ ˙Keseluruhan Gambar Tampilan Website

<img width="1921" height="3391" alt="screencapture-localhost-portofolio-2026-03-28-07_36_25" src="https://github.com/user-attachments/assets/5d4a33af-bb78-4173-a36c-4cd9df5de728" />

---

## 👩🏻‍💻 Author
**Dilla Maharani**  
© 2026
