<?php
require_once "../conf/connection.php";
class SelectOneRow
{
    private $conn;
    private $tableName;
    private $params;

    public function  __construct($tablenaem, $aparms)
    {
        global $db;
        $this->conn = $db;
        $this->tableName = $tablenaem;
        $this->params = $aparms;

    }

    public function viewData()
    {
        $sql = $this->conn->prepare("SELECT * FROM $this->tableName");
        $sql->execute();
        return $datas = $sql->fetch(PDO::FETCH_ASSOC);

    }


}

$datas = new SelectOneRow("users1aa11", ["aa", 123]);
print_r($datas->viewData());
