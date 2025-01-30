<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <title>Add User</title>
</head>
<body>
    <div>
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
        <div class="row">
        <div class="col">
            <h1>Masukkan Data</h1>
            </div>
            </div>
            </div>
        </div>
        <div class="container">
        <form action="cek.php" method ="post">
            <div class="form-group">
                <label for="ex1">Nama Lengkap : </label>
                <input class="form-control" id="ex1" type="text"  name="name" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <label for="ex2">Alamat : </label>
                <input class="form-control" id="ex2" type="text"  name="address" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label for="ex3">No. Telepon : </label>
                <input class="form-control" id="ex3" type="number"  name="phone" placeholder="No. Telepon" required>
            </div>
            <div class="form-group">
                <label for="ex4">Tanggal Lahir : </label>
                <input class="form-control" id="ex4" type="date"  name="birthday" required>
            </div>
            <div class="form-group">
                <label for="ex5">E-Mail : </label>
                <input class="form-control" id="ex5" type="email" name="email" placeholder="E-Mail" required>
            </div>
            <button class="btn btn-primary" type="submit" name="create">Submit</button>
            <br/>
            <br/>
        </form>
        </div>
    </div>
</body>
</html>