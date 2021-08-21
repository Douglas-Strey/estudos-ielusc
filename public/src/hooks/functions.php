<?php

function encript($usuario, string $password)
{
    return password_hash($usuario, PASSWORD_DEFAULT);
}

function verifyPassword($usuario, $hash)
{
    return password_verify($usuario, $hash);
}
