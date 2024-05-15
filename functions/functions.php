<?php
    function authenticateLogin($conn, $email, $password, $usertype){
        $sql = "SELECT * FROM accounts WHERE email = ? AND password = ? AND usertype=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $email, $password, $usertype);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        if(mysqli_num_rows($result) > 0)
            return true;
        else
            return false;
    }

    function saveData($conn, $table, $columns, $data){
        $columnNames = implode(', ', $columns);
        $placeholders = rtrim(str_repeat('?, ', count($columns)), ', ');
    
        $sql = "INSERT INTO $table ($columnNames) VALUES($placeholders)";
    
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, str_repeat('s', count($data)), ...$data);
        $success = mysqli_stmt_execute($stmt);
        // Return true if insert was successful, otherwise false
        return $success;
    }

    function updateData($conn, $table, $columns, $data, $conditions){
        $setClause = '';
        foreach ($columns as $column) {
            $setClause .= "$column = ?, ";
        }
        $setClause = rtrim($setClause, ', ');
    
        $sql = "UPDATE `$table` SET $setClause WHERE $conditions";
    
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, str_repeat('s', count($data)), ...$data);

        $success = mysqli_stmt_execute($stmt);
    
        // Return true if update was successful, otherwise false
        return $success;
    }
    
    function selectData($conn, $table, $columns, $conditions){
        $columnNames = implode(', ', $columns);
    
        $sql = "SELECT $columnNames FROM `$table` WHERE $conditions";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    
    function deleteData($conn, $table, $id){
        $sql = "DELETE FROM `$table` WHERE id = '$id'";
        $stmt = mysqli_prepare($conn, $sql);
        $success = mysqli_stmt_execute($stmt);
        // Return true if delete was successful, otherwise false
        return $success;
    }
    
    function selectAllData($conn, $table){
    
        $sql = "SELECT * FROM `$table`";

        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function countData($conn, $column, $table, $condition){
        $sql = "SELECT COUNT($column) AS count FROM $table WHERE $condition";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $count = mysqli_fetch_assoc($result)['count'];
        return $count;
    }
    