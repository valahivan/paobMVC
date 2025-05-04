<?php 

class Osis {

    protected $hostName = 'localhost';
    protected $userName = 'root';
    protected $password = '';
    protected $dbName = 'paob';
    
    private $query = "SELECT * FROM osis";
    private $rows = [];

    public function connectDb()
    {
        $hostName = $this->hostName;
        $userName = $this->userName;
        $password = $this->password;
        $dbName = $this->dbName;

        return mysqli_connect($hostName, $userName, $password, $dbName);
    }

    public function orderBy($column, $sort)
    {
        $query = "SELECT * FROM osis ORDER BY $column $sort";
        if ($this->query) {
            $this->query = $query;
        }
        return $this;
    }

    public function where($column, $operator, $value)
    {
        $querySelect = "SELECT * FROM osis WHERE $column $operator '$value'";
        $queryDelete = "DELETE FROM osis WHERE $column $operator '$value'";

        if ($this->query) {
            $this->query = $querySelect;
        }

        if($column === 'id' && $value !== is_string($value)){
            $this->query = $queryDelete;
        }

        return $this;
    }

    public function find($id)
    {
        $query = "SELECT * FROM osis WHERE id = $id";
        $result = mysqli_query($this->connectDb(), $query);

        while($row = mysqli_fetch_object($result)){
            return $row;
        }
        mysqli_close($this->connectDb());
    }

    public function all()
    {
        $query = "SELECT * FROM osis";
        $result = mysqli_query($this->connectDb(), $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) {
                $this->rows[] = $row;
            }
            return $this->rows;
        }
        mysqli_close($this->connectDb());
        return $this;
    }

    public function get()
    {
        $query = $this->query;
        $result = mysqli_query($this->connectDb(), $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) {
                $this->rows[] = $row;
            }
            return $this->rows;
        }
        mysqli_close($this->connectDb());
        return $this;
    }

    public function create($nama, $tgl_lahir, $gender, $kelas, $no_hp, $alasan)
    {
        $query = "INSERT INTO osis (nama, tanggal_lahir, gender, kelas, no_hp, alasan)
                  VALUES ('$nama', '$tgl_lahir', '$gender', '$kelas', '$no_hp', '$alasan')";
        if (mysqli_query($this->connectDb(), $query)) {
            return mysqli_affected_rows($this->connectDb());
        }
        mysqli_close($this->connectDb());
    }

    public function delete()
    {
        $query = $this->query;
        if (mysqli_query($this->connectDb(), $query)) {
            return mysqli_affected_rows($this->connectDb());
        }
        mysqli_close($this->connectDb());
        return $this;
    }

}


