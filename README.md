Repositori ini berisi contoh dan tutorial tentang konsep Pemrograman Berorientasi Objek (OOP) dalam PHP. Ini mencakup topik seperti kelas, objek, konstruktor, dan lainnya, memberikan pemahaman dasar tentang prinsip-prinsip OOP dalam PHP.

Class produk: Ini adalah blueprint atau cetakan untuk membuat objek. Class ini memiliki tiga properti: $judul, $penerbit, dan $harga, serta satu method getLabel().

Properti: $judul, $penerbit, dan $harga adalah properti dari objek produk.
Properti tersebut diatur melalui constructor __construct() atau memiliki nilai default jika tidak diatur.
Constructor __construct(): Ini adalah method khusus yang secara otomatis dipanggil ketika objek dibuat dengan new produk(). Constructor ini digunakan untuk mengatur properti objek saat objek dibuat.

Method getLabel(): Method ini mengembalikan string yang berisi informasi judul, penerbit, dan harga dari objek.

Objek: Tiga objek ($produk3, $produk4, $produk5) dibuat menggunakan class produk dengan menggunakan new produk().

Pemanggilan Method: Method getLabel() dipanggil untuk setiap objek dan hasilnya ditampilkan dengan echo.

Dengan menggunakan konsep OOP, kode menjadi lebih terstruktur dan mudah dikelola, terutama saat ada banyak objek dengan properti dan perilaku yang sama.




