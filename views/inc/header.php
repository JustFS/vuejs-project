<?php 

  require_once dirname(dirname(__DIR__)) . "/bootstrap.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <title>Vuejs Playground</title>

  <link rel="icon" href="img/vueLogo.png" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?= URLROOT; ?>/style.css">

  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>

  <header class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md rounded-full m-10" style="font-size: 3rem;">
      <h1 class="text-center">VUE JS PLAYGROUND</h1>
      <img class="" style="width: 6%; margin: auto;" src="http://localhost/vuejs-project/img/vueLogo.png" alt="">
  </header>