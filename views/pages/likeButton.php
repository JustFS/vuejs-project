<?php 

  require_once dirname(dirname(__DIR__)) . "/bootstrap.php";
  require APPROOT . '/views/inc/header.php'; 
  
?>

<div id="like">
  <button 
    id="likeButton"
    v-on:click="likeDislike"
  >
    Like
  </button>
</div>

  <script>
    new Vue({
      el: '#like',
      methods: {
        likeDislike: function() {
          document.getElementById('likeButton').classList.toggle('like')
          }
        }
      })    

  </script>
</body>
</html>