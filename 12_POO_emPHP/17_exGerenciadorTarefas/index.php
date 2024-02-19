<?php
// Crie uma classe chamada Task que represente uma tarefa.
// A classe Task deve ter os seguintes atributos:
// title: título da tarefa.
// description: descrição da tarefa.
// completed: indica se a tarefa está concluída ou não.
// A classe Task deve ter os seguintes métodos:
// markAsCompleted(): marca a tarefa como concluída.
// markAsIncomplete(): marca a tarefa como não concluída.
// getTitle(): retorna o título da tarefa.
// getDescription(): retorna a descrição da tarefa.
// isCompleted(): retorna um booleano indicando se a tarefa está concluída ou não

class Task {
    public $title = "Estudar";
    public $description = "Estudar para a prova";
    public $completed;
    
    function markAsCompleted(){
        $this->completed = true;
    }
    
    function markAsIncomplete(){
        $this->completed = false;
    }
    
    function getTitle(){
        return $this->title;
    }
    
    function getDescription(){
        return $this->description;
    }
    
    function isCompleted(){
        if ($this->completed == true){
            return true;
        }
        else{
            return false;
        }
    }
}
?>