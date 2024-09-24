<?php

namespace controllers;

class IndexController {
    function index(array $data) : string {
        var_dump($data);

        return "<p>test</p>";
    }
}