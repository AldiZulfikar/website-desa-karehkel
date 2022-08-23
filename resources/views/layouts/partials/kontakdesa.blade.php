<?php
  date_default_timezone_set('Asia/Jakarta');
?>
<!-- Kontak Kami -->
<section id="kontak-kami" class="kontak-kami">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>Kontak Kami</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="contact-footer">
            <p>
              Berikut ini merupakan kontak Desa Karehkel yang dapat dihubungi.
            </p>
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td class="icons-col text-center">
                    <span
                      class="icons iconify"
                      data-icon="fluent:location-16-filled"
                    ></span>
                  </td>
                  <td>
                    <p>
                      <a
                        href="https://www.google.com/maps?ll=-6.549067,106.634665&z=13&t=m&hl=id&gl=ID&mapclient=embed&q=Karehkel+Kec.+Leuwiliang+Kabupaten+Bogor+Jawa+Barat"
                        >Jl. Raya Karehkel - Kec. Leuwiliang, Kab. Bogor.</a
                      >
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="icons-col text-center">
                    <span
                      class="icons iconify"
                      data-icon="carbon:phone-filled"
                    ></span>
                  </td>
                  <td><p>0895-4226-53276</p></td>
                </tr>
                <tr>
                  <td class="icons-col text-center">
                    <span
                      class="icons iconify"
                      data-icon="ic:baseline-email"
                    ></span>
                  </td>
                  <td><p>desakarehkel1@gmail.com</p></td>
                </tr>
                <tr>
                  <td class="icons-col text-center">
                    <span
                      class="icons iconify"
                      data-icon="akar-icons:instagram-fill"
                    ></span>
                  </td>
                  <td>
                    <p>
                      <a href="https://www.instagram.com/kantor_desakarehkel/"
                        >kantor_desakarehkel</a
                      >
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="icons-col text-center">
                    <span
                      class="icons iconify"
                      data-icon="fa-brands:facebook-square"
                    ></span>
                  </td>
                  <td>
                    <p>
                      <a href="https://web.facebook.com/Id.Irawansuteja/"
                        >Desa Karehkel</a
                      >
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-footer">
            <div class="contact" id="contact">
              <div class="container">
                <div class="row text-center mb-3">
                  <div class="col">
                    <h3>Sampaikan Keluh Kesah Anda</h3>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-md-">
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
                        <label for="notel" class="form-label">Nomor WhatsApp</label>
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
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Kontak Kami -->