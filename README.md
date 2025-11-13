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

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/099e34b64d96d61fbc34b14d985556844f61c042/ss%20praktikum7/3.png) 


### 🔹 Halaman 62 — Predefine Variable $_GET

File : latihan_get.php
Menampilkan data nama yang dikirim melalui URL.

**Kode Singkat:**

```$nama = $_GET['nama'];
echo "Selamat Datang " . $nama;
```

**Hasil :**

![foto](https://github.com/ramzi121006/lab7_php_dasar/blob/e561b5fe08403582eca4ab89196d8f312ada6def/ss%20praktikum7/3.png)


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

![foto](https://github.com/NadhiaShafira/Lab7Web/blob/5bd81aa83880c2a05d5ebee89fc3ffb95e7620c8/Screenshots_Prak7_PHPDasar/04_post_result.png)


### 🔹 Halaman 64 — Operator PHP

File : operator.php
Menghitung gaji sebelum dan sesudah pajak.

**Hasil :**

```Gaji sebelum pajak = Rp. 1000000
Gaji yang dibawa pulang = Rp. 900000
```

![foto](https://github.com/NadhiaShafira/Lab7Web/blob/bc2c4b0afa522aad8883b1736fb1051c7b40788d/Screenshots_Prak7_PHPDasar/05_operator_result.png)


### 🔹 Halaman 65 — Kondisi IF

File : kondisi_if.php
Menampilkan nama hari berdasarkan tanggal saat ini menggunakan IF–ELSE.

**Hasil :**

```Kondisi IF
Rabu
```

![foto](https://github.com/NadhiaShafira/Lab7Web/blob/2077f74973d3c47f76fd92940f5c5837a9cf8598/Screenshots_Prak7_PHPDasar/06_if_condition.png)


### 🔹 Halaman 66 — Kondisi SWITCH

File : kondisi_switch.php
Menampilkan nama hari menggunakan struktur SWITCH–CASE.

**Hasil :**

```Kondisi Switch
Rabu
```

![foto](https://github.com/NadhiaShafira/Lab7Web/blob/850712d6ae937ae59efd6e645318f5ef2dc8b83f/Screenshots_Prak7_PHPDasar/07_switch_condition.png)


### 🔹 Halaman 67 — Perulangan FOR

File : perulangan_for.php
Menampilkan angka 1–10, lalu menurun dari 10–1.

**Hasil :**

```Perulangan ke: 1
Perulangan ke: 2
...
Perulangan ke: 10
```

![foto](https://github.com/NadhiaShafira/Lab7Web/blob/62f7aa37cef36837e61fa248f6f46952f39f8b37/Screenshots_Prak7_PHPDasar/08_for_loop.png) 


### 🔹 Halaman 68 — Perulangan WHILE

File : perulangan_while.php
Menampilkan angka 1–10 menggunakan struktur WHILE.

**Hasil :**

![foto](https://github.com/NadhiaShafira/Lab7Web/blob/4b21de9844612a860dc816d654d805c1822b7acd/Screenshots_Prak7_PHPDasar/09_while_loop.png) 


### 🔹 Halaman 69 — Perulangan DO WHILE

File : perulangan_do_while.php
Menampilkan angka 1–10 dengan perulangan DO–WHILE.

**Hasil :**

![foto](https://github.com/NadhiaShafira/Lab7Web/blob/ebaef49ae5c66b0531fc138409716ffc07cf6e4f/Screenshots_Prak7_PHPDasar/10_do_while_loop.png) 


### 🔹 Halaman 70 — Form Input dan Output

File : form_input_output.php
Menampilkan form input (Nama, Tanggal Lahir, Pekerjaan) dan menghitung umur otomatis.

**Hasil Sebelum Di Isi :**

![foto](https://github.com/NadhiaShafira/Lab7Web/blob/ec8e0d28e671aa918c02536222ec84ade5a38f9d/Screenshots_Prak7_PHPDasar/form_output_result%20(1).png) 

**Hasil Sesudah Di Isi :**

![foto](https://github.com/NadhiaShafira/Lab7Web/blob/2d7adda6b163210a190499f787d004ef77f24599/Screenshots_Prak7_PHPDasar/form_output_result%20(2).png) 
