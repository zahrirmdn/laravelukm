
<title>Halaman Tiket</title>

<form action="/tiket" method="post">

@csrf



<input class="form-control form-control-lg" type="boolean" placeholder="vip/vvip" name="jenis_tiket">
<br>
<input class="form-control" type="number" placeholder="T:50/F:100" name="harga">
<br>
<input class="form-control form-control-sm" type="text" placeholder="atas nama" name="nama_tiket">
<br>
<input class="form-control form-control-sm" type="number" placeholder="event id berapa?" name="event_id">
<br>
<input class="form-control form-control-sm" type="number" placeholder="pesanan id berapa" name="pemesanan_id">
<button type="submit" style="text-align: center">Submit</button>
</form>


