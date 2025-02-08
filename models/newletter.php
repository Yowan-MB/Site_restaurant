<?php 

class newletter{

static public function add_newletter($mail)
{
    $sql = "INSERT INTO newletter (mail) VALUES (:mail)";
    $stmt = db::connect()->prepare($sql);
    $stmt->bindParam(':mail', $mail);
    $stmt->execute();
}
}


?>