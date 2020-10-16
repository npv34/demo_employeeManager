<?php


class EmployeeManager
{
    protected $file;
    public function __construct($file)
    {
        $this->file = $file;
    }

    function add()
    {

    }

    function getAll($file)
    {
        $arr = $this->readDataFile($file, true);
        $employees = [];
        foreach ($arr as $item) {
            $employee = new Employee($item);
            $employee->setId($item['id']);
            array_push($employees, $employee);
        }

        return $employees;
    }

    function edit($id, $data)
    {
        $index = $this->getIndex($id);
        if ($index == -1) {
            echo "du lieu k chinh xac";
            exit();
        }

        $newData = [
            'id' => $data['id'],
            'firstName' => $data['first_name'],
            'lastName' => $data['last_name'],
            'address' => $data['address'],
            'birthday' => $data['birthday'],
            'role' => $data['role']
        ];

        $arr = $this->readDataFile($this->file, true);
        $arr[$index] = $newData;
        $this->saveFile($arr);

    }

    function delete($id)
    {

    }

    function getIndex($id) {
        $arr = $this->readDataFile($this->file, true);
        foreach ($arr as $key => $item) {
            if ($item['id'] == $id) {
                return $key;
            }
        }

        return -1;
    }

    function getById($id)
    {
        $employ = null;
        $arr = $this->readDataFile($this->file, true);
        foreach ($arr as $item) {
            if ($item['id'] == $id) {
                $employ = new Employee($item);
                $employ->setId($item['id']);
            }
        }

        return $employ;
    }

    function readDataFile($file, $option) {
        $dataJson = file_get_contents($file);
        return json_decode($dataJson, $option);
    }

    function saveFile($array) {
        $dataJson = json_encode($array, true);
        file_put_contents($this->file, $dataJson);
    }
}