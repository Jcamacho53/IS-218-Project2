<?php

function get_todos($id) {
    global $db;
    $query = 'SELECT * FROM todos
              WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(":id", $id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_todo($id) {
    global $db;
    $query = 'DELETE FROM todos
              WHERE id = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->execute();
    $statement->closeCursor();
}

function add_todo($id, $createddate, $duedate, $message, $isdone) {
    global $db;
    $query = 'INSERT INTO todos
                 (id, createddate, duedate, message, isdone)
              VALUES
                 (:id, :createddate, :duedate, :message, isdone)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':createddate', $createddate);
    $statement->bindValue(':duedate', $duedate);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':isdone', $isdone);
    $statement->execute();
    $statement->closeCursor();
}

function edit_todo ($id, $createddate, $duedate, $message, $isdone) {
    global $db;
    $query = 'UPDATE todos 
                    (id, createddate, duedate, message, isdone)
                    VALUES
                 (:id, :createddate, :duedate, :message, isdone)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':createddate', $createddate);
    $statement->bindValue(':duedate', $duedate);
    $statement->bindValue(':message', $message);
    $statement->bindValue(':isdone', $isdone);
    $statement->execute();
    $statement->closeCursor();
}
?>
