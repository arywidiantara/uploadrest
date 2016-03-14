   ##        RESTful API dan LARAVEL
   
Disini saya menggunakan framework laravel untuk development. saya mengambil API dari imgur yang bisa kita cek di https://api.imgur.com/ mengharuskan anda juga memiliki authorization client-id. 

Untuk isi di dalam laravelnya sendiri saya membaginya menjadi dua. 
1. API dengan alamat "http://localhost/uploadrest/public/api"
    ini berisi data json yang di tampilakan menjadi 4 yaitu status, message, token dan data. di dalam api sendiri terdapat tampilan utama yang menampilkan semua data imgur http://localhost/uploadrest/public/api. kemudian list dari api sebelumnya ttp://localhost/uploadrest/public/api/list/2 untuk melihat lebih detail yaitu  http://localhost/uploadrest/public//api/detail/2/GmjhPWk. untuk penjelasan lebih detail silahkan lihat dokumentasi dari imgur nya sendiri.
2. kalau yang pertama berisi hanya data json yang ini saya menambahkan dengan tampilanny, dengan framework boostrap. dengan format yang sama seperti di atas, ketika di klik, maka akan tampil ke halaman selanjutnya.

