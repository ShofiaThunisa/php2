<form action="proses-pendaftaran-olahraga.php" method="POST">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="l"> Laki-Laki <br>
        <input type="radio" name="jenis_kelamin" value="p"> Perempuan
    </div>
    <div>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal_lahir">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Olahraga</label> <br>
        <input type="radio" name="olahraga" value="sepak_bola"> Sepak Bola <br>
        <input type="radio" name="olahraga" value="bulu_tangis"> Bulu Tangis <br>
        <input type="radio" name="olahraga" value="renang"> Renang <br>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Kelas</label> <br>
        <input type="radio" name="kelas" value="pemula"> Pemula <br>
        <input type="radio" name="kelas" value="menengah"> Menengah <br>
        <input type="radio" name="kelas" value="lanjutan"> Lanjutan <br>
    </div>
    <div>
        <label>Kemampuan Fisik</label> <br>
        <textarea name="kemampuan_fisik"></textarea>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Pembayaran</label> <br>
        <select name="pembayaran">
            <option value="transfer_bank">Transfer Bank</option>
            <option value="kartu_kredit">Kartu Kredit</option>
        </select>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Metode Harga</label> <br>
        <select name="metode_harga">
            <option value="sepakbola">sepakbola</option>
            <option value="200000">Pemula</option>
            <option value="250000">Menengah</option>
            <option value="300000">Lanjutan</option>
        </select>
        <select name="harga">
            <option value="Bulu Tangkis">Bulu Tangkis</option>
            <option value="150000">Pemula</option>
            <option value="200000">Menengah</option>
            <option value="250000">Lanjutan</option>
        </select>
        <select name="harga">
            <option value="Renang">Renang</option>
            <option value="180000">Pemula</option>
            <option value="220000">Menengah</option>
            <option value="270000">Lanjutan</option>
        </select>
    </div>
    <div>
        <button>Submit</button>
    </div>
</form>