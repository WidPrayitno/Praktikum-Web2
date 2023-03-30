# Praktikum-Web2
Tugas-tugas praktikum web 2


Upload ke github menggunakan gitbash
- git add .
  untuk mentrack perubahan codingan yang ada di visual studio code
- git commit -m "Komentar untuk setiap perubahan"
  untuk memberikan komentar kepada file yang akan diupload
- git push origin main
  sebagai tempat(brach) upload yang diupload



Cara lengkap untuk upload di github
1. Mengunduh repository
    git clone <url repository> <Folder Tujuan>
2. Memperbaharui Repository yang telah di unduh di lokal dari github
    git pull
3. Mengunggah perubahan
    * Notes: untuk dapat mengupload kita diharuskan untuk melakukan pull terlebih dahulu sebelum melakukan push
  - Tambah file sekaligus
    git add .
  - Konfirmasi penambahan atau perubahan file
    git commit -m "Pesan dari commit"
  - Kirim perubahan ke dalam repository
    git push origin <Nama brach>