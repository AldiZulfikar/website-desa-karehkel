<?php
  date_default_timezone_set('Asia/Jakarta');
?>
<div class="contact" id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col pb-3 mb-5 mx-auto">
          <h5 class="fw-bold text-primary text-uppercase">Hubungi Kami</h5>
          <h1 class="mb-0">Sampaikan Keluh <br> Kesah Anda</h1>
      </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
            <strong>Terimakasih!</strong> Pesan anda telah berhasil dikirim.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <form name="email-subs">
            <input type="datetime" name="Timestamp" value="{{ date("Y-m-d | H:i:s")}}" hidden>
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="Nama">
            </div>
            <div class="mb-3">
              <label for="notel" class="form-label">Nomor Whatsapps</label>
              <input type="number" class="form-control" id="notel" aria-describedby="notel" name="No_WA">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" id="message" rows="3" name="Pesan"></textarea>
            </div>
            <div class="send text-center mt-4 text-center">
              <button type="submit" class="btn-kirim">Kirim</button>
            </div>
            <div class="loading text-center">
              <button class="btn btn-loading d-none" type="button" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>