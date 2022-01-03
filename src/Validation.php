<?php
namespace ReagentValidation;

class Validation {

function reqquire(array $data , string $field) : bool {
    return isset($data[$field]);
}
}

?>