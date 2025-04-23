<?php
// header.php
if (!isset($pageTitle)) { $pageTitle = 'Home - Vemico Tech'; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <!-- Bootstrap v5.3.5 CSS :contentReference[oaicite:14]{index=14} -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-…" crossorigin="anonymous"
  >

    <!-- Custom CSS -->
     <link href="assets/css/main.css" rel="stylesheet">
  <!-- Font Awesome-->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    rel="stylesheet"
  >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<nav class="navbar navbar-expand-custom navbar-mainbg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand navbar-logo" href="index.php">Vemico Tech</a>
    <button class="navbar-toggler" type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
        <li class="nav-item <?= ($page==='home')?'active':'' ?>">
          <a class="nav-link" href="index.php"><i class="fas fa-home"></i>Home</a>
        </li>
        <li class="nav-item <?= ($page==='services')?'active':'' ?>">
          <a class="nav-link" href="services.php"><i class="fas fa-cogs"></i>Services</a>
        </li>
        <li class="nav-item <?= ($page==='portfolio')?'active':'' ?>">
          <a class="nav-link" href="portfolio.php"><i class="fas fa-briefcase"></i>Portfolio</a>
        </li>
        <li class="nav-item <?= ($page==='contact')?'active':'' ?>">
          <a class="nav-link" href="contact.php"><i class="fas fa-envelope"></i>Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Offset for fixed navbar -->
<div class="pt-5 mt-4">
