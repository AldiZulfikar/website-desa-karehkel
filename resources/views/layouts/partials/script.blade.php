<!-- Bootstrap Bundle -->
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
crossorigin="anonymous"
></script>

<!-- Iconify -->
<script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
<script src="{{ asset('frontend-assets/js') }}/main.js"></script>
<script>
    // form message
    const scriptURL =
      "https://script.google.com/macros/s/AKfycbyllChJ4JhoibIFgQG461Wq9_umZIKo-zMwWtpSTy7EtJTrADGIvRonnm6yzSwgM0c/exec";
    const form = document.forms["email-subs"];
    const btnSend = document.querySelector(".btn-kirim");
    const btnLoading = document.querySelector(".btn-loading");
    const myAlert = document.querySelector(".my-alert");

    form.addEventListener("submit", (e) => {
      e.preventDefault();
      // ketika tombol submit di klik
      // tampilkan tombol loading, hilangkan tombol kirim
      btnLoading.classList.toggle("d-none");
      btnSend.classList.toggle("d-none");
      fetch(scriptURL, { method: "POST", body: new FormData(form) })
        .then((response) => {
          // tampilkan tombol kirim, hilangkan tombol loading
          btnLoading.classList.toggle("d-none");
          btnSend.classList.toggle("d-none");
          // tampilkan alert
          myAlert.classList.toggle("d-none");
          // reset form
          form.reset();
          console.log("Success!", response);
        })
        .catch((error) => console.error("Error!", error.message));
    });
  </script>