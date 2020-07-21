<?php

// Simulates a high memory usage.
function highMemory() {
    file_get_contents('https://file-examples-com.github.io/uploads/2017/02/zip_10MB.zip');
}

// Simulates a slow execution.
function slowFunction() {
    sleep(10);
}

function highCpu() {
    for($i = 0; $i < 1000000000; $i++) {
        $a += $i;
    }
}

highMemory();
slowFunction();
highCpu();

echo 'Finished';
