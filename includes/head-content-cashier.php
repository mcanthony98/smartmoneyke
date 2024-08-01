    <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/sierra-favicon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/sierra-favicon.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/sierra-favicon.png" />
  <link rel="manifest" href="../assets/favicon/manifest.json" />
  <link rel="mask-icon" href="../assets/img/sierra-favicon.png" color="#5bbad5" />
  <link rel="shortcut icon" href="../assets/img/sierra-favicon.png" />
  <meta name="msapplication-config" content="../assets/favicon/browserconfig.xml" />
  <meta name="theme-color" content="#ffffff" />

  <!-- Libs CSS -->
  <link rel="stylesheet" href="../assets/css/libs.bundle.css" />

  <!-- Theme CSS -->
  <link rel="stylesheet" href="../assets/css/theme.bundle.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com/" />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&amp;family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
    rel="stylesheet" />

  <!-- Map -->
  <link rel="stylesheet" href="../../api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css" />

  <!-- 
      Color mode switch
      - For demonstration purposes only
      - If you do not have the possibility to store user preferences on the backend, I highly recommend switching to a media query implementation: https://getbootstrap.com/docs/5.3/customize/color-modes/#building-with-sass
    -->
    <script>
    (() => {
      window.addEventListener("DOMContentLoaded", () => {
        document.body.setAttribute("data-bs-theme", "dark");
      });
    })();
  </script>

  <style>
    body {
      font-family: 'Helvetica', 'Arial', sans-serif;
    }
  </style>



<?php
function slagify($input) {
    // Convert the string to lowercase
    $lowercaseString = strtolower($input);

    // Replace spaces with hyphens
    $formattedString = str_replace(' ', '-', $lowercaseString);

    return $formattedString;
}

if(isset($_SESSION['cashsms'])){
  echo '<script>alert("'.$_SESSION['cashsms'].'");</script>';
  unset($_SESSION['cashsms']);
}
?>

