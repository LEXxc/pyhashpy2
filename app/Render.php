<?php

namespace OOP;

class Render {
    static public function PrintInfo($data)
    {
        foreach ($data as $item) {
            if (gettype($item) == "array") {
                foreach ($item as $task) {
                    echo '- ' . $task . '<br>';
                }
            } else {
            echo $item . '<br>';
            }
        }
    }
}