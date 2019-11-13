<?php
    echo GetMagicNumberByDate($_POST["days"], $_POST["month"], $_POST["year"]);

function GetMagicNumberByDate($days, $month, $year)
{
    $result = GetDigitsSumOfInt($days) + GetDigitsSumOfInt($month) + GetDigitsSumOfInt($year);
    while($result > 9)
    {
        $result = GetDigitsSumOfInt($result);
    }

    return $result;
}

function GetDigitsSumOfInt($number)
{
    $array = str_split($number);
    $result = 0;
    foreach ($array as $item)
    {
        $result += $item;
    }

    unset($item);

    return $result;
}