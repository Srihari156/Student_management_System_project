<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PreLoader Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Preloader styles */
    #preloader {
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background-color: #ffffff;
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .spinner-border {
      width: 4rem;
      height: 4rem;
    }

    body.loading {
      overflow: hidden;
    }

    /* Hide PreLoader once content is loaded */
    body.loaded #preloader {
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.5s ease-in-out, visibility 0.5s;
    }
  </style>
</head>
<body class="loading">
  <!-- Preloader -->
  <div id="preloader">
    <div class="spinner-border text-warning" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
    <span> L</span>
    <span> O</span>
    <span> A</span>
    <span> D</span>
    <span> I</span>
    <span> N</span>
    <span> G</span>
  </div>

  <!-- Content -->
  <!-- <div class="container mt-5">
    <h1>Welcome to the website!</h1>
    <p>This is the content that will appear after the PreLoader disappears.</p>
  </div> -->

  <script>
    // Simulating page load
    window.addEventListener('load', function() {
      document.body.classList.remove('loading');
      document.body.classList.add('loaded');
    });
  </script>
</body>
</html>
