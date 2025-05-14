<!--
=============================
CLEANED INDEX.HTML - DENTO SITE
With clear section comments
=============================
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Professional Dental Billing Services</title>

  <!-- ========== Favicon and Metadata ========== -->
  <link rel="shortcut icon" href="assets/images/mbr-192x128.jpg" type="image/x-icon">
  <meta name="description" content="Professional dental billing services for dental practices. We specialize in claims management, insurance verification, patient billing, and revenue cycle optimization to maximize your practice’s profitability.">

  <!-- ========== Fonts ========== -->
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Liter&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Liter&display=swap"></noscript>

  <!-- ========== CSS Dependencies ========== -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css">

  <!-- ========== Global Styles ========== -->
  <style>
    /* Logo Styles */
    .logo-main {
      font-size: 2rem;
      font-weight: bold;
      line-height: 1;
    }
    .logo-sub {
      font-size: 1rem;
      opacity: 0;
      animation: fadeInSub 1.2s ease-out 1.2s forwards;
      transform: translateY(10px);
      line-height: 1.2;
    }
    @keyframes fadeInSub {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Global cursor style except interactive elements */
    body * {
      cursor: default;
      user-select: none;
    }
    a, button, input, textarea, select, label {
      cursor: pointer;
      user-select: auto;
    }

    /* Background video setup */
    #bg-video {
      position: fixed;
      top: 0;
      left: 0;
      min-width: 100vw;
      min-height: 100vh;
      object-fit: cover;
      z-index: -1;
      pointer-events: none;
    }

    /* Overlay that fades out as video fades in */
    #video-fade-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: #000;
      z-index: 2;
      pointer-events: none;
      opacity: 1;
      transition: opacity 2.5s cubic-bezier(0.25, 1, 0.5, 1);
    }
    body.video-ready #video-fade-overlay {
      opacity: 0;
    }

    /* Slogan fade-in */
    .fade-after-video {
      opacity: 0;
      transform: translateY(10px);
      transition: opacity 0.5s ease-out, transform 0.5s ease-out;
      transition-delay: 0.5s;
    }
    body.video-ready .fade-after-video {
      opacity: 1;
      transform: translateY(0);
    }

    /* Header menu fade-in */
    #menu-5-uFObdqOt7t {
      opacity: 0;
      pointer-events: none;
      will-change: opacity;
      transition: opacity 1s ease-in-out;
    }
    body.header-ready #menu-5-uFObdqOt7t {
      opacity: 1;
      pointer-events: auto;
    }
  </style>

  <!-- ========== Smooth Animation Script ========== -->
  <script>
    window.addEventListener("load", () => {
      requestAnimationFrame(() => {
        setTimeout(() => {
          document.body.classList.add("header-ready");
          setTimeout(() => {
            document.body.classList.add("video-ready");
          }, 100); // delay between header and video fade
        }, 50); // small delay for better layout stability
      });
    });
  </script>
</head>

<body>
  <!-- ========== Video Overlay ========== -->
  <div id="video-fade-overlay"></div>

  <!-- ========== Background Video ========== -->
  <video id="bg-video" autoplay muted loop playsinline preload="auto">
    <source src="assets/videos/background.mp4" type="video/mp4">
  </video>

  <!-- ========== Header Navigation ========== -->
  <!-- Keep existing nav section here -->

  <!-- ========== Hero Section ========== -->
  <!-- Keep existing hero section with slogan -->

  <!-- ========== Page Content ========== -->
  <!-- About, Services, Contact, etc. sections remain unchanged -->

  <!-- ========== Scripts ========== -->
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/index.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/theme/js/script.js?v=2"></script>
</body>
</html>
