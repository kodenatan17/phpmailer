<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale =1.0">
    <title>Halaman Index</title>
</head>

<body>
    <h1>kirim email dari localhost dengan codeigniter</h1>
    <hr>

    <form action="kirim_proses" method="post">
        <p>
            <label>Email Penerima</label>
            <input type ="text" name ="email_penerima" placeholder="Silahkan isi email penerima">
        </p>
        <p>
            <label>Subject</label>
            <input type ="text" name ="subject" placeholder="Silahkan isi subject">
        </p>
        <p>
            <label>Isi Pesan</label>
            <input type ="text" name ="isi_pesan" placeholder="Silahkan isi pesan">
        </p>
        <button type ="submit" name="submit">Kirim</button>
    </form>
</body>

</html>