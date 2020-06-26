<?php 

  require_once dirname(dirname(__DIR__)) . "/bootstrap.php";
  require APPROOT . '/views/inc/header.php'; 
  
?>

  <div id="app-7">
    <ol>
      <todo-item
        v-for="item in groceryList"
        v-bind:todo="item"
        v-bind:key="item.id"
      ></todo-item>
    </ol>
  </div>

  <script>
    Vue.component('todo-item', {
  // Le composant todo-item accepte maintenant une
  // « prop » qui est comme un attribut personnalisé.
  // Cette prop est appelée todo.
      props: ['todo'],
      template: '<li>{{ todo.text }}</li>'
    })

    var app7 = new Vue({
      el: '#app-7',
      data: {
        groceryList: [
          { id: 0, text: 'Légumes' },
          { id: 1, text: 'Fromage' },
          { id: 2, text: 'Test' }
        ]
      }
    })
  </script>
</body>
</html>