  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>.
      <!-- sweetalert -->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <style>
          @import url('https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap');
      </style>
      <style>
          .swal2-popup {
              font-family: 'Mitr', sans-serif !important;
          }
      </style>
  </head>


  <script type="text/javascript">
      function logoutsuccess() {
          Swal.fire({
              title: 'ออกจากระบบสำเร็จ',
              icon: 'success',
              showConfirmButton: false,
              timer: 1000
          }).then(function() {
              window.location = "./index.php"
          });
      }

      function checksuccess() {
          Swal.fire({
              title: 'ตรวจสอบข้อมูลสำเร็จ',
              icon: 'success',
              showConfirmButton: false,
              timer: 1000
          }).then(function() {
              window.location = "./checkapplicant.php"
          });
      }
  </script>


  </html>