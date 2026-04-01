<?php
class UserService
{
    public function getUserById(int $id) : string
    {
        $users = //Fake DB (Normalerweise aus einem HTTP/s fetch)
            [
                1 => "Max",
                2 => "Anna"
            ];

        if(!array_key_exists($id, $users)){
            throw new Exception("User with id {$id} not found");
        }
        return $users[$id];
    }
}
