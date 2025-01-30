<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
</head>

<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1 class="col">Masukan Data</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="Insert.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama barang:</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="barcode">Barcode:</label>
                        <input type="text" class="form-control" id="barcode" name="barcode">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal Masuk:</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah">
                    </div>
                    <div>
                        <p>Jenis barang:</p>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="Konsumsi" value="Konsumsi" onclick="display()">
                        <label class="form-check-label" for="Konsumsi">
                            Konsumsi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="Elektronik" value="Elektronik" onclick="display()">
                        <label class="form-check-label" for="Elektronik">
                            Elektronik
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="Perabotan" value="Perabotan" onclick="display()">
                        <label class="form-check-label" for="Perabotan">
                            Perabotan
                        </label>
                    </div>
                    <br>
                    <div class="form-group hideme" id="dexpired">
                        <label for="expired">Expired:</label>
                        <input type="date" class="form-control" id="expired" name="expired">
                    </div>

                    <div class="form-group hideme" id="ddaya">
                        <label for="daya">Daya:</label>
                        <input type="number" class="form-control" id="daya" name="daya">
                    </div>

                    <div class="form-group hideme" id="djenis">
                        <label for="jenis">Jenis:</label>
                        <input type="text" class="form-control" id="jenis" name="bahan">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function display() {
            if (document.getElementById("Konsumsi").checked) {
                document.getElementById("dexpired").className = "form-group showme";
                document.getElementById("ddaya").className = "form-group hideme";
                document.getElementById("djenis").className = "form-group hideme";
            } else if (document.getElementById("Elektronik").checked) {
                document.getElementById("dexpired").className = "form-group hideme";
                document.getElementById("ddaya").className = "form-group showme";
                document.getElementById("djenis").className = "form-group hideme";
            } else if (document.getElementById("Perabotan").checked) {
                document.getElementById("dexpired").className = "form-group hideme";
                document.getElementById("ddaya").className = "form-group hideme";
                document.getElementById("djenis").className = "form-group showme";
            }
        }
    </script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>