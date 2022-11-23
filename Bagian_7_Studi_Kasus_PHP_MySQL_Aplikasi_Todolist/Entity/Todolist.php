<?php 

namespace Entity {
    class Todolist {
        private string $todo;

        private int $id;

        public function __construct(string $todo = "")
        {
            $this->todo = $todo;
        }
        public function getId() {
            return $this->id;
        }
        public function setId(int $id){
            $this->id = $id;
        }
        public function getTodo()
        {
            return $this->todo;
        }
    
        public function setTodo($todo)
        {
           $this->todo = $todo;
        }
    }

}
