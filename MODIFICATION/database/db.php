<?php 

session_start();

require('connect.php');


$table1 = 'gateaucategory';
$table2 = 'gateau';

$Categorys = selectAll($table1);
$Gateaus = selectAll($table2);
$NewGateaus = Newgateaus();


//Hadi lii katbe3 les value li kayjiw ghii temp
function Pri($value){ 
    echo "<pre>", print_r($value, true), "<pre>";
    die();
}


function executeQuery($sql, $data){
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat("s", count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}


function selectAll($table, $conditions = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    else {
        $i = 0;
        foreach ($conditions as $key => $value){
            if ($i === 0){
                $sql = $sql . " WHERE $key=?";
            }
            else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}


function selectAllL($table, $conditions = []){
    global $conn;
    $sql = "SELECT * FROM $table LIMIT 3";
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
    else {
        $i = 0;
        foreach ($conditions as $key => $value){
            if ($i === 0){
                $sql = $sql . " WHERE $key=?";
            }
            else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        $sql = $sql . " LIMIT 3;";
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}

function selectOne($table, $conditions = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    $i = 0;
    foreach ($conditions as $key => $value){
        if ($i === 0){
            $sql = $sql . " WHERE $key=?";
        }
        else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }
    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}


function create($table, $data){
    global $conn;
    $sql = "INSERT INTO $table SET ";
    $i = 0;
    foreach ($data as $key => $value){
        if ($i === 0){
            $sql = $sql . " $key=?";
        }
        else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}


function update($table, $id, $data){
    global $conn;
    $sql = "UPDATE $table SET";
    $i = 0;
    foreach ($data as $key => $value){
        if ($i === 0){
            $sql = $sql . " $key=?";
        }
        else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows; 
}


function delate($table, $id){
    // video 10
    global $conn;
    /* $sql = "DELETE FROM $table WHERE id=$?";
    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows; */
    $sql = "DELETE FROM $table WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        return 1;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}


function RandomOneThing($table){
    global $conn;
    $sql = "SELECT * FROM $table ORDER BY RAND() LIMIT 1;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
}

function Newgateaus(){
    global $conn;
    $sql = "SELECT G.*, c.Category
            FROM gateau AS G JOIN gateaucategory AS c ON G.gateauCategory=c.id
            ORDER BY ID DESC LIMIT 3 ;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $r = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $r;
}
