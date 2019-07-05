function info() {//nama fungsi untuk pop up
	alert("Pendaftaran akan ditutup pada Senin 8 - Juli - 2019");//proses fungsi info nantinya akan muncul pesan berupa pop up
}
function tanggal() {
	var tgl= new  Date();
	document.getElementById("tanggal").innerHTML = tgl;

}
function konfirmasi() {//nama fungsi untuk konfirmasi
	confirm("apakah anda yakin ingin kemsbali ke beranda?"); // proses untuk fungsi konfirmasi yang nantinya akan tampil pop up berupa konfirmasi
}