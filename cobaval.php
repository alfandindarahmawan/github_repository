<script>
    function validasi(){
        var namaValid    = /^[a-zA-Z]+(([\'\,\.\- ][a-zA-Z ])?[a-zA-Z]*)*$/;
        var emailValid   = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
        var nama         = formulir.nama.value;
        var jeniskelamin = formulir.jenis_kelamin.value;
        var email        = formulir.email.value;
        var pesan = '';
         
        if (nama == '') {
            pesan = '-Nama tidak boleh kosong\n';
        }
         
        if (nama != '' && !nama.match(namaValid)) {
            pesan += '-nama tidak valid\n';
        }
         
        if (jeniskelamin == '') {
            pesan += '-jenis kelamin harus dipilih\n';
        }
         
        if (email == '') {
            pesan += '-email tidak boleh kosong\n';
        }
         
        if (email !=''  && !email.match(emailValid)) {
            pesan += '-alamat email tidak valid\n';
        }
         
        if (pesan != '') {
            alert('Maaf, ada kesalahan pengisian Formulir : \n'+pesan);
            return false;
        }
    return true
    }
</script>
 
<fieldset style="margin:auto; width:40%;">
<legend>Formulir Biodata</legend>
<form name="formulir" action="simpan_data.php" method="post" onSubmit="return validasi()">
    <p>
        Nama Lengkap :
 
        <input type="text" name="nama" placeholder="nama lengkap Anda" />
    </p>
     
    <p>
        Jenis Kelamin :
 
        <select name="jenis_kelamin">
            <option value="">-Pilih-</option>
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
    </p>
     
    <p>
        Email Anda :
 
        <input type="text" name="email" placeholder="email Anda" />
    </p>
     
    <p>
        <input type="submit" value="Simpan Data" name="submit" />
        <input type="reset" value="Reset Form" name="reset" />
    </p>
</form>
 
</fieldset>