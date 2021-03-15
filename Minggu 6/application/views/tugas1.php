<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas No. 1</title>
</head>
<body>
        <h2>Penjelasan bagaimana sebuah proses login pada sebuah web bekerja menggunakan konsep MVC :</h2> 

        <p>1. Ketika kita memasuki suatu aplikasi/web kemungkinan di sana ditampilkan form untuk mengisi data diri pengunjung/member. Kita bisa simpulkan bahwa di sini, browser (sebagai client) meminta aksi kepada server (yang ditangani oleh controller) untuk menampilkan halaman form input data. Lalu controller memutuskan dan mengerti bahwasanya ia hanya perlu menampilkan view. Maka controller memanggil dan mengembalikan view (atau halaman) yang diminta.</p>

        <p>2.Kita kemudian mengisi data. Lalu menekan tombol submit. Di sini browser (sebagai client) mengirimkan data kita kepada server. Data itu ditangkap oleh controller dan controller tahu apa yang harus dia lakukan. Yaitu memanggil model dan memberi data tersebut untuk kemudian disimpan (oleh model) ke dalam database. Setelah proses penyimpanan selesai, controller memanggil dan mengembalikan view kepada user sebagai informasi bahwa data telah masuk.Jika ada pengunjung baru, maka kembali ke step 1.</p>
</body>
</html>