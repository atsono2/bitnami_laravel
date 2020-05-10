<?php

namespace App\Services;

class MetricsService {
    public function test () {
        return 'testメソッドです！！';
    }

    public function bow($array) {
        $keys = '';
        $values = '';
        foreach ($array as $key => $value) {
            $values .= $value. ' ';
        }

        return $values;
    }
}
