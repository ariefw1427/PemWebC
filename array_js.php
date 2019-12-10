<!doctype html>
<html ng-app="arsipApp">
<head>
  <title>Aplikasi Web Arsip</title>
  <script src="js/angular.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Aplikasi Arsip</h2>
    <hr/>
    <div ng-controller="arsipController as arsip">
      <input type="text" ng-model="arsip.cari" class="form-control" style="border-radius: 50px;" placeholder="Masukkan kata kunci untuk mencari" />
      <hr/>
      <h5>Tambah Data Arsip</h5>
      <form name="formArsip" ng-submit="arsip.tambah()">
        <div class="row">
          <div class="col">
            <input type="text" ng-model="arsip.inputKode" class="form-control" placeholder="Kode arsip" required />
          </div>
          <div class="col">
            <input type="text" ng-model="arsip.inputJudul" class="form-control" placeholder="Judul arsip" required />
          </div>
          <div class="col">
            <input class="btn btn-primary" type="submit" value="Tambah" ng-disabled="formArsip.$invalid">
          </div>
        </div>
      </form>
      <hr/>
      <div class="alert alert-info">Jumlah total arsip {{arsip.total()}}</div>
      <table class="table table-bordered table-striped">
        <thead>
          <tr><th>Kode</th><th>Judul</th><th> </th></tr>
        </thead>
        <tbody>
          <tr ng-repeat="data in arsip.data | filter:arsip.cari track by data.kode">
            <td>{{data.kode}}</td>
            <td>{{data.judul}}</td>
            <td><button type="button" class="btn btn-danger" ng-click="arsip.hapus(data.kode)">Hapus</button></td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
<script>
	/**
 * Modul "arsipApp"
 * Controller "arsipController"
 */
angular.module('arsipApp', []).controller('arsipController', function() {
  // variabel "arsip" merujuk kepada objek/instance dari "arsipController"
  var arsip = this;

  // controller "arsipController" memiliki property/anggota "data" untuk menampung data arsip
  arsip.data = [];

  // metode "tambah" untuk menambahkan data arsip
  arsip.tambah = function() {
    arsip.data.push({kode: arsip.inputKode, judul:arsip.inputJudul});
    arsip.inputJudul = '';
    arsip.inputKode = '';
  };

  // metode "hapus" untuk menghapus data arsip terpilih
  arsip.hapus = function() {
    var konf = confirm('Yakin akan menghapus data ini?');
    if (konf) {
      arsip.data.splice(this.$index, 1);
    }
  };

  // metode "total" untuk mendapatkan jumlah total data arsip
  arsip.total = function() {
    var count = arsip.data.length;
    return count;
  };
});

</script>
</body>
</html>