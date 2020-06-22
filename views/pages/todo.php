<?php require 'C:\wamp64\www/vuejs-project/views/inc/header.php'; ?>

  <div id="todo-list-example">
    <form v-on:submit.prevent="addNewTodo">
      <label for="new-todo">Ajouter une tâche</label>
      <input
        v-model="newTodoText"
        id="new-todo"
        placeholder="Ex. nourrir le chat"
      >
      <button>Add</button>
    </form>
    <ul>
      <li
        is="todo-item"
        v-for="(todo, index) in todos"
        v-bind:key="todo.id"
        v-bind:title="todo.title"
        v-on:remove="todos.splice(index, 1)"
      ></li>
    </ul>
  </div>

  <script>
    Vue.component('todo-item', {
      template: '\
        <li>\
          {{ title }}\
          <button v-on:click="$emit(\'remove\')" class="bg-gray-300">Supprimer</button>\
        </li>\
      ',
      props: ['title']
    })
    
    new Vue({
      el: '#todo-list-example',
      data: {
        newTodoText: '',
        todos: [
          {
            id: 1,
            title: 'Faire la vaisselle',
          },
          {
            id: 2,
            title: 'Sortir les poubelles',
          },
          {
            id: 3,
            title: 'Tondre la pelouse'
          }
        ],
        nextTodoId: 4
      },
      methods: {
        addNewTodo: function () {
          this.todos.push({
            id: this.nextTodoId++,
            title: this.newTodoText
          })
          this.newTodoText = ''
          console.log(this.$data.todos)
        }
      },      
    })    
  </script>
</body>
</html>