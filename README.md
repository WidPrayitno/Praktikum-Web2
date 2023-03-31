# Daftar isi dari praktikum web-2
* [Mengenal Tentang Repository Praktikum-Web2](https://github.com/WidPrayitno/Praktikum-Web2#praktikum-web2)
* [Time Line Praktikum](https://github.com/WidPrayitno/Praktikum-Web2#Time-line-praktikum)
* [Panduan Upload Menggunakan Git](https://github.com/WidPrayitno/Praktikum-Web2#Upload-menggunakan-GIT)

# Praktikum-Web2
Praktikum-web2 akan membahas tentang seputar php dan penggunaanya untuk database web

Modul dan Framework tambahan untuk keperluan praktikum.
* [Module yang digunakan dalam praktikum web 2](https://guiltless-speedboat-6e6.notion.site/2e137b94dd9e4a7498465183020b1eb4?v=874549c4593441b8ab821a170edf90d3)
* [Boostrap](https://getbootstrap.com/docs/4.6/getting-started/introduction/)
* [Formbuilder](https://bootstrapformbuilder.com/)
* [AdminLTE](https://github.com/ColorlibHQ/AdminLTE)

# Time line praktikum

Repository ini merupakan hasil dari pada praktikum yang dilakukan di saat semester 2, berikut time line dari hasil praktikum maupun hasil tugas yang sudah diberikan.

```
Praktikum01: Membahas sintaks, Variable, dan Array pada php
Praktikum02: Membahas php form dengan menangkap hasil inputan pengguna menggunakan $_GET dan $_POST. dan mengenal percabangan if else dan switch
Praktikum03: Membahas looping, Template web, dan Function
Praktikum04: Memisahkan bagian-bagian dari html menggunakan php, membahas perbedaan include dan require, dan cara membuat login web sederhana menggunakan admin lte
Praktikum05: Praktikum yang membahas PDO dan cara penggunaannya agar dapat terhubung dengan database mysql
Praktikum06: Merupakan praktikum lanjutan dari praktikum yang dilakukan pada Praktikum05
Praktikum07:
UTS:
```

# Upload menggunakan GIT
* [Mengunduh Repository](https://github.com/WidPrayitno/Praktikum-Web2#Mengunduh-Repository)
* [Memperbaharui Repository](https://github.com/WidPrayitno/Praktikum-Web2#Memperbarui-Repository)
* [Upload Perubahan Ke Dalam Repository](https://github.com/WidPrayitno/Praktikum-Web2#Upload-Repository)

## Mengunduh Repository

Unduh repository ke dalam komputer menggunakan perintah `git clone`. Url
repository dapat dilihat di dalam repository yang diinginkan.

```
git clone <url repository> <folder tujuan>
```

#### Contoh

```
user@host:~$ git clone https://github.com/WidPrayitno/Praktikum-Web2.git 
```


## Memperbarui Repository

Perbarui repository yang telah diunduh ke dalam komputer menggunakan perintah
`git pull`.

```
git pull origin <nama branch>
```

#### Contoh

```
git pull https://github.com/WidPrayitno/Praktikum-Web2.git main
```



## Upload Repository
Disarankan untuk melakukan pull terlebih dahulu sebelum melakukan push.

**Tambah beberapa file baru atau ubah file sekaligus**
```
git add .
```

**Konfirmasi penambahan/perubahan file dan komentar pada file**
```
git commit -m <Pesan Commit>
```

**Mengirim perubahan ke dalam repository**
```
git push origin <nama branch>
```