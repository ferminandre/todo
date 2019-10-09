<?php
namespace App\Repositories;

use App\todoModel;

interface todoInterface {
    public function create(string $description);
    public function all(); 
    public function getById($id);
    public function delete($id);
    public function update($id, string $description, $status);
}
?>