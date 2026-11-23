<?php

// Exception errors -----------------------------------------------
function divide($a, $b)
{
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }

    return $a / $b;
}

try {
    echo divide(10, 2) . "<br>";
    echo divide(10, 0);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}


// Logs-----------------------------------------------------------

try {
    throw new Exception("Database connection failed.");
} catch (Exception $e) {

    error_log(
        date('Y-m-d H:i:s') .
        " - " .
        $e->getMessage() .
        PHP_EOL,
        3,
        "logs/app.log"
    );

    echo "Something went wrong.";
}


// Gobal Exception Handling ------------------------------------------------

set_exception_handler(function ($exception) {

    error_log(
        date('Y-m-d H:i:s') .
        " - Unhandled Exception: " .
        $exception->getMessage() .
        PHP_EOL,
        3,
        "logs/error.log"
    );

    http_response_code(500);

    echo "An unexpected error occurred.";
});

throw new Exception("Something broke!");
?>