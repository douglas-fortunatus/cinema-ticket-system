<?php

    error_reporting( E_ALL );
    ini_set( "display_errors", 1 );

    session_start();

    require('connect.php');

    // to be deleted
    function dd($value)
    {
        echo "<pre>", print_r($value, true), "</pre>";
        die();
    }

    function executeQuery($sql, $data)
    {
        global $conn;

        $stmt = $conn->prepare($sql);
        $value = array_values($data);
        $types = str_repeat('s', count($value));
        $stmt->bind_param($types, ...$value);
        $stmt->execute();
        return $stmt;
    }

    function selectAll($table, $conditions = []) {
        global $conn;
        $sql = "SELECT * FROM $table";

        if(empty($conditions))
        {
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }
        else
        {

            $i = 0;
            foreach ($conditions as $key => $value)
            {
                if($i === 0)
                {
                    $sql = $sql . " WHERE $key=?";
                }
                else 
                {
                    $sql = $sql . " AND $key=?";
                }
                $i++;
            }

            $stmt = executeQuery($sql, $conditions);
            $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            return $records;
        }
    }

    function selectOne($table, $conditions) {
        global $conn;
        $sql = "SELECT * FROM $table";

        $i = 0;
        foreach ($conditions as $key => $value){
            if($i === 0){
                $sql = $sql . " WHERE $key=?";
            }else {
                $sql = $sql . " AND $key=?";
            }
            $i++;
        }
        
        $sql = $sql . " LIMIT 1";
        $stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_assoc();
        return $records;
    }

    function selectValidation($table, $row, $conditions) {
        global $conn;
        $sql = "SELECT $row FROM $table";

        $i = 0;
        foreach ($conditions as $key => $value){
            if($i === 0){
                $sql = $sql . " WHERE $key=?";
            }else {
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

        $sql = "INSERT INTO $table SET";

        $i = 0;
        foreach ($data as $key => $value){
            if($i==0){
                $sql = $sql . " $key=?";
            }else{
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
            if($i==0){
                $sql = $sql . " $key=?";
            }else{
                $sql = $sql . ", $key=?";
            }
            $i++;
        }

        $sql = $sql . " WHERE id=?";
        $data["id"] = $id;
        $stmt = executeQuery($sql, $data);
        return $stmt->affected_rows;
    }

    function delete($table, $id){   
        global $conn;
        $sql = "DELETE from $table WHERE id=?";
        $stmt = executeQuery($sql, ['id' => $id]);
        return $stmt->affected_rows;
    }

    function joinTheater($table1, $table2){

        global $conn;

        $sql = "SELECT $table1.id, $table1.th_name, $table2.region_name FROM $table1 JOIN $table2 ON $table1.region_id = $table2.id";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;

    }

    function joinScreen($table1, $table2){

        global $conn;

        $sql = "SELECT $table1.id, $table1.screen_name, $table2.th_name FROM $table1 JOIN $table2 ON $table1.theater_id = $table2.id";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;

    }

    function hoursToMinutes($hours){
		$minutes = 0;
		
		if(strpos($hours, ':') !== false){
			list($hours, $minutes) = explode(':', $hours);
		}
		
		return $hours * 60 + $minutes;
	}

    function minutesToHours($minutes){
		$hours = (int)($minutes / 60);
		$minutes -= $hours * 60;
		return sprintf("%d:%02.0f", $hours, $minutes);
	}

    function endTime($hours, $duration){
		$minutes = 0;
		
		if(strpos($hours, ':') !== false){
			list($hours, $minutes) = explode(':', $hours);
		}

        $min = $hours * 60 + $minutes;

        $endtime = $min + $duration;

        $x = (int)($endtime / 60);

        $endtime -= $x * 60;
		
        $endtime = $endtime + 1;

		return sprintf("%d:%02.0f", $x, $endtime);
	}

    function a(){

        global $conn;

        $sql = "SELECT 
                    schedular.*, 
                    movies.*, 
                    screens.screen_name 
                FROM
                    schedular
                JOIN
                    movies
                ON
                    schedular.movie_id = movies.id
                JOIN
                    screens
                ON
                    schedular.screen_id = screens.id";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    }

    function todayPost(){

        global $conn;

        $sql = "SELECT 
                    schedular.*, 
                    movies.*, 
                    screens.screen_name 
                FROM
                    schedular
                JOIN
                    movies
                ON
                    schedular.movie_id = movies.id
                JOIN
                    screens
                ON
                    schedular.screen_id = screens.id
                WHERE 
                    DATE(date) = CURDATE()";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    }





