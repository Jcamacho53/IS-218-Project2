<?php
function get_acounts() {
    global $db;
    $query = 'SELECT * FROM accounts
              ORDER BY id';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_account_name($id) {
    global $db;
    $query = 'SELECT * FROM accounts
              WHERE accountID = :id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $accountID);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $accounts['fname, lname'];
    return $fname, $lname;
}
function add_account($id) {
    global $db;
    $query = 'INSERT INTO accounts
              WHERE accountID = :id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $accountID);
    $statement->execute();    
    $statement->closeCursor();
    }  
function delete_account($id) {
    global $db;
    $query = 'DELETE FROM accounts
              WHERE accountID = :id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $accountID);
    $statement->execute();
     $statement->closeCursor();
     }

     function edit_accounts ($id, $email, $fname, $lname, $phone, $birthday, $gender, $password) {
    global $db;
    $query = 'UPDATE todos 
                    (id, email, fname, lname, phone, birthday, gender, password)
                    VALUES
                 (:id, :email, :fname, :lname, :phone, :birthday, :gender, :password)';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':birthday', $birthday);
    $statement->bindValue(':gender', $gender);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}      
?>