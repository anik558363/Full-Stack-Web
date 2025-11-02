<?php




class Student
{
    public function __construct(private Database $db) {}

    private $table = 'students';

    public function getStudents()
    {
        $sqlQuery = $this->db->conn->prepare(
            "SELECT * FROM {$this->table}"
        );

        $sqlQuery->execute();
        $result = $sqlQuery->get_result();

        $students = $result->fetch_all(MYSQLI_ASSOC);

        return $this->responseModel("Get all students", $students);
    }

    public function insertStudent(array $data)
    {
        $sqlQuery = $this->db->conn->prepare(
            "INSERT INTO {$this->table}(`name`, `email`, `bod`, `age`, `status`) 
             VALUES (?, ?, ?, ?, ?)"
        );

        $sqlQuery->bind_param(
            "sssii",
            $data['name'],
            $data['email'],
            $data['bod'],
            $data['age'],
            $data['status']
        );

        if ($sqlQuery->execute()) {
            $insertedId = $this->db->conn->insert_id;
            return $this->responseModel("Student inserted successfully", [
                "id"    => $insertedId,
                "name"  => $data['name'],
                "email" => $data['email']
            ], 200);
        }

        return $this->responseModel("Failed to insert student", [], 500);
    }

    public function editStudent(array $data)
    {


        if (!$this->isIdExist($data['id'])) {
            return $this->responseModel("Invalid student ID", [], 404);
        }

        $sqlUpdate = $this->db->conn->prepare(
            "UPDATE {$this->table} SET name = ?, email = ?, bod = ?, age = ?, status = ? WHERE id = ?"
        );
        $sqlUpdate->bind_param(
            "sssiii",
            $data['name'],
            $data['email'],
            $data['bod'],
            $data['age'],
            $data['status'],
            $data['id']
        );

        if ($sqlUpdate->execute()) {
            return $this->responseModel("Student updated successfully", [
                "id" => $data['id'],
                "name" => $data['name'],
                "email" => $data['email']
            ], 200);
        }

        return $this->responseModel("Failed to update student", [], 500);
    }




    public function deleteStudent(int $id)
    {
        if (!$this->isIdExist($id)) {
            return $this->responseModel("Invalid student ID", [], 404);
        }

        $deleteQuery = $this->db->conn->prepare(
            "DELETE FROM {$this->table} WHERE id = ?"
        );
        $deleteQuery->bind_param("i", $id);

        if ($deleteQuery->execute()) {
            return $this->responseModel("Student deleted successfully", [], 200);
        }

        return $this->responseModel("Failed to delete student", [], 500);
    }

    private function isIdExist(int $id): bool
    {
        $sqlQuery = $this->db->conn->prepare(
            "SELECT id FROM {$this->table} WHERE id = ? LIMIT 1"
        );
        $sqlQuery->bind_param("i", $id);
        $sqlQuery->execute();
        $result = $sqlQuery->get_result();

        return $result->num_rows > 0;
    }



    public function isEmailExist($email)
    {
        $sqlQuery = $this->db->conn->prepare(
            "SELECT id FROM {$this->table} WHERE email = ? LIMIT 1"
        );
        $sqlQuery->bind_param("s", $email);
        $sqlQuery->execute();
        $result = $sqlQuery->get_result();

        if ($result->num_rows > 0) {
            echo $this->responseModel("Email already exists", [], 409);
            exit;
        }
    }

    private function responseModel($msz, $data = [], $status = 200)
    {
        http_response_code($status);
        return json_encode([
            "message" => $msz,
            "data"    => $data,
            "status"  => $status
        ]);
    }
}
