<?php

function getKey() {
    return ["200915", "secret", "abc"];
}

function isValid($input) {
    $apikey = $input["api_key"];
    if (in_array($apikey, getKey())) {
        return true;
    } else {
        return false;
    }
}

function jsonOut($status, $message, $data) {
    $respon = ["status" => $status, "message" => $message, "data" => $data];

    header("Content-type: application/json");
    echo json_encode($respon);
}

function getmahasiswa() {
    $mahasiswa = [
        ["npm" => "187006004", "nama" => "mahasiswa ini mahasiswa ke-1"],
        ["npm" => "187006018", "nama" => "mahasiswa ini mahasiswa ke-2"],
        
    ];
    return $mahasiswa;
}

if (isValid($_GET)) {
    jsonOut("berhasil", "apikey valid", getmahasiswa());
} else {
    jsonOut("gagal", "apikey not valid!!!", null);
}

?>