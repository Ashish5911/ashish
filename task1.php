
<?php  
    // get query parameter
    function ifSet()
    {
        $val = isset($_GET['test']) ? $_GET['test'] : 'null';
        return $val;
    }

    $val=ifSet();
    echo "The query String is: ".$val."<br><br>";

    // get length of string
    // $length = strlen($val);
    function lent($v)
    {
        $l = strlen($v);
        return $l;
    }

    $lenght=lent($val);
    echo "The lenght of thr query String is: ".$lenght."<br><br>";

    //Print the converted required string
    function printString($str)
    {
        echo "The converted required string is: ".$str."<br><br>";
    }

    function convertString($lenght, $val)
    {
        // check if the length is less than 2, then convert this to uppercase and print the string
        if($length < 2) {
            $upperCaseString = strtoupper($val);
            printString($upperCaseString);
        } elseif ($length >= 2 && false === strpos(trim($val), ' ')) {
        /**
        * check if the string is having length more than 2 and not having any space between.
        * Then convert this to lower case and print the string
        */
            $lowerCaseString = strtolower($val);
            printString($lowerCaseString);
        } elseif ($length > 2 && strpos(trim($val), ' ') > 0) {
        
        /**
        * check if the string is having length more than 2 and having any space between.
        * Then convert this to sentence case and print the string
        */
            $sentenceCaseString = ucfirst(strtolower($val));
            printString($sentenceCaseString);
        } else {
            echo "Could not understand the string";
        }
    }
    convertString($lenght,$val);
?>
