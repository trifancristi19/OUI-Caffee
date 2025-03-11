<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oui caffee</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <main>
      <header><?php include 'php/header.php'; headerSection();?></header>
      <section><?php include 'php/whatsOnTheMenu.php'; wotm();?></section>
      <article class="menu"><?php include 'php/menu.php'; MenuSection();?></article>
      <section class="aboutUsSection"><?php include 'php/aboutUs.php'; aboutUs();?></section>
    </main>
    <footer class="copyrightText">&copy; Copyright 2023 - OUI</footer>
    <script src="scriptJS/script.js"></script>
  </body>
</html>
