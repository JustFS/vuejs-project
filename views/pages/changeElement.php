<?php 

  require_once dirname(dirname(__DIR__)) . "/bootstrap.php";
  require APPROOT . '/views/inc/header.php'; 
  
?>

<div id="app">
  <p>{{ texte }}</p>
  <!-- cela ne va plus mettre à jour `foo` ! -->
  <button v-on:click="texte = 'Changé !'">Changer texte</button>
</div>


<script>
  var obj = {
    texte: 'Texte à changer'
  }

// très utile pour que le variable ne soit pas effecté par l'instance de Vue.
// Object.freeze(obj)

new Vue({
  el: '#app',
  data: obj
})
   
</script>

</body>
</html>