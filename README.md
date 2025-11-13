# lab7_php_dasar

**Nama                 : Muhamad Valentino Ramzi** 

**NIM                  : 312410454**  

**Kelas                : TI.24.A.5**

**Mata Kuliah          : Pemograman Web 1**

---

## 🧩 Langkah-langkah Praktikum

### 🔹 Halaman 61 — Menampilkan Teks Dasar PHP

**Kode Singkat:**

```php
<?php
echo "<h1>Belajar PHP Dasar</h1>";
echo "Hello World<br>";
?>
```

**Hasil :**

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/b1c051316fd0df364af8922df86be790f1369bcf/ss%20praktikum7/2.png) 


### 🔹 Halaman 62— Variabel PHP

File : php_dasar.php
Menambahkan variabel NIM dan Nama, serta menampilkannya di browser.

**Kode Singkat:**

```$nim = "312410454";
$nama = "";valengans";
echo "NIM : " . $nim . "<br>";
echo "Nama : " . $nama;
```

**Hasil :**

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/04dacb86250be06f94e0ccffc96d1fcaf3520c9e/ss%20praktikum7/2.png) 


### 🔹 Halaman 62 — Predefine Variable $_GET

File : latihan_get.php
Menampilkan data nama yang dikirim melalui URL.

**Kode Singkat:**

```$nama = $_GET['nama'];
echo "Selamat Datang " . $nama;
```

**Hasil :**

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/615d0f3dec6a3f9ca50ca627c61ff5af726ba902/ss%20praktikum7/3.png)


### 🔹 Halaman 63 — Predefine Variable $_POST

File : latihan_post.php
Mengirim data melalui form menggunakan metode POST.

**Kode Singkat:**

```<form method="post" action="">
    <label>Nama: </label>
    <input type="text" name="nama" required>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    echo "<h3>Halo $nama, selamat datang di praktikum web.</h3>";
}
?>
```

**Hasil :**

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/5ae43c55916d75384e4399f97fd3a220a91b7f88/ss%20praktikum7/4.png)


### 🔹 Halaman 64 — Operator PHP

File : operator.php
Menghitung gaji sebelum dan sesudah pajak.

**Hasil :**

```Gaji sebelum pajak = Rp. 1000000
Gaji yang dibawa pulang = Rp. 900000
```

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/90498be1213695c87f5a01e6dce43d037c1af79b/ss%20praktikum7/5.png)


### 🔹 Halaman 65 — Kondisi IF

File : kondisi_if.php
Menampilkan nama hari berdasarkan tanggal saat ini menggunakan IF–ELSE.

**Hasil :**

```Kondisi IF
Rabu
```

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/b4dc937e6fafcfa117f8aeba1e1c853728747c8d/ss%20praktikum7/6.png)


### 🔹 Halaman 66 — Kondisi SWITCH

File : kondisi_switch.php
Menampilkan nama hari menggunakan struktur SWITCH–CASE.

**Hasil :**

```Kondisi Switch
Rabu
```

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/1febb248280f9a3e0782235213f198c7bd4e9e4a/ss%20praktikum7/7.png)


### 🔹 Halaman 67 — Perulangan FOR

File : perulangan_for.php
Menampilkan angka 1–10, lalu menurun dari 10–1.

**Hasil :**

```Perulangan ke: 1
Perulangan ke: 2
...
Perulangan ke: 10
```

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/864d3768e6ee24873e3898e51b40412e670bdbad/ss%20praktikum7/8.png) 


### 🔹 Halaman 68 — Perulangan WHILE

File : perulangan_while.php
Menampilkan angka 1–10 menggunakan struktur WHILE.

**Hasil :**

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/a72e46fab573bfc8a265d860290602d7fa67d875/ss%20praktikum7/9.png) 


### 🔹 Halaman 69 — Perulangan DO WHILE

File : perulangan_do_while.php
Menampilkan angka 1–10 dengan perulangan DO–WHILE.

**Hasil :**

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/74942ce9b6f412e73d561dacb32eaf7130482557/ss%20praktikum7/10.png) 


### 🔹 Halaman 70 — Form Input dan Output

File : form_input_output.php
Menampilkan form input (Nama, Tanggal Lahir, Pekerjaan) dan menghitung umur otomatis.

**Hasil Sebelum Di Isi :**

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/2463cc9a46db2bad40afb382c218505dc97613c7/ss%20praktikum7/11.png) 

**Hasil Sesudah Di Isi :**

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/a9c1d0008f42ab1e83993eed088c7b8d248ad996/ss%20praktikum7/12.png) 
