<?php 

require_once __DIR__ . '/bootstrap.php';
require APPROOT . '/views/inc/header.php'; 
// print_r(dirname(__FILE__));
// print_r(dirname(__DIR__));
?> 

  <main class="m-10">
    <a href="./views/pages/components.php">
      <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-10 px-20 border-b-4 border-green-700 hover:border-green-500 rounded text-5xl">Les components</button>
    </a>
    <a href="./views/pages/todo.php">
      <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-10 px-20 border-b-4 border-green-700 hover:border-green-500 rounded text-5xl">Todo list</button>
    </a>
    <a href="./views/pages/likeButton.php">
      <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-10 px-20 border-b-4 border-green-700 hover:border-green-500 rounded text-5xl">Like Button</button>
    </a>
    <a href="./views/pages/changeElement.php">
      <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-10 px-20 border-b-4 border-green-700 hover:border-green-500 rounded text-5xl">Changer élément sur le DOM</button>
    </a>
    <a href="./views/pages/vueel.php">
      <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-10 px-20 border-b-4 border-green-700 hover:border-green-500 rounded text-5xl">Test</button>
    </a>
  </main>

