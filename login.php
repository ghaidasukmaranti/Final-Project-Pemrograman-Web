<?php
echo "<link rel=stylesheet type=text/css href=tp.css>";//memanggil file css
if (isset($_POST['submit'])){//mengecek apakah submit sudah terdeklarasi atau belum
        if(empty($_POST['namad']) || empty($_POST['divisi'])){
        alert("Lengkapi form");}

        $Namad=$_POST['Namad'];//namad akan terbentuk sebagai array dengan index berupa nilai dari atribut namad
        $Namab=$_POST['Namab'];//namab akan terbentuk sebagai array dengan index berupa nilai dari atribut namab
        $Nim=$_POST['Nim'];//Nim akan terbentuk sebagai array dengan index berupa nilai dari atribut Nim
        $Email=$_POST['Email'];//Email akan terbentuk sebagai array dengan index berupa nilai dari atribut Email
        $Divisi=$_POST['Divisi'];//Divisi akan terbentuk sebagai array dengan index berupa nilai dari atribut Divisi


        echo "<div class=tengah>";
        echo "<div class=awal>";
        echo "<div class=awall>";
        echo "<h2> ANDA TELAH MENDAFTAR<br>HIMPUNAN TEKNIK INFORMATIKA<br>UNIVERSITAS AHMAD DAHLAN</h2>";
        echo "<hr align=center width=80%><br>";
        $buka=fopen("data1.txt",'w');// '$buka' berisi perintah membuka file data1.txt dengan mode w. yang berfunsig untuk menulis dan menghapus konten yang sebelumnya sudah ada di file data1.txt

        fwrite($buka,"Nama ${Namad}");//menuliskan nilai dari'$Namad' di file data1.txt
        fwrite($buka,"${Namab}<br>");//menuliskan nilai dari'$Namab' di file data1.txt
        fwrite($buka,"${Nim}<br>");//menuliskan nilai dari'$Nim' di file data1.txt
        fwrite($buka," ${Email}<br>"); //menuliskan nilai dari'$Email' di file data1.txt
        fwrite($buka, "${Divisi}<br>");//menuliskan nilai dari'$Divisi' di file data1.txt
        fclose($buka);//menutup file data1.txt
        echo readfile("data1.txt");//mmenampilkan hasil membaca dari fili dat1.txt
        echo"</div>";
        echo"</div>";
        echo"</div>";
   

}?>