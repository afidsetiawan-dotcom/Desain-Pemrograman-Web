
require_once('kelas/Koneksi_db.php');

$db = new Koneksi_db();

$db->connect();

// query ambil data
$sql = "SELECT * FROM mahasiswa";

// jalankan query
$query = mysqli_query($db->conn,$sql);

// tampil data
while($data = mysqli_fetch_array($query))
    {
        echo "ID : " . $data['id'];
        echo "<br>";

        echo "Nama : " . $data ['nama'];
        echo"<br>";

        echo "Umur : " . $data['umur'];
        echo "<br><hr>";
    }

?>