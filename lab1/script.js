function SetMaxDaysCount(elementId, month, year) {
    let input = document.getElementById(elementId);
    let daysCount = GetDaysCount(month, year);
    input.setAttribute("max", daysCount);
    input.value = 1;
}

/**
 * @return {number}
 */
function GetDaysCount(month, year)
{
    let daysCount;
    switch (month)
    {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            daysCount = 31;
            break;
        case 2:
            daysCount = year % 4 !== 0 ? 28 : 29;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            daysCount = 30;
            break;
        default:
            throw new Error();
    }

    return daysCount;
}

function GetMagicNumberFromPHP(days, month, year, callbackItemId)
{
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "getMagicNumber.php");
    xhr.onload = function (e)
    {
        if(xhr.status === 200)
        {
            let magicNumber = parseInt(xhr.responseText);
            document.getElementById('responseNumberFromPHP').innerText = magicNumber;
            GetMagicNumberTextFromPHP(magicNumber, callbackItemId, PrintCallBack);
        }
    };
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    let request = "days=" + days + "&month=" + month + "&year=" + year;
    xhr.send(request);
}

function PrintCallBack(callbackItemId, message)
{
    let callbackItem = document.getElementById(callbackItemId);
    callbackItem.innerText = message;
}

/**
 * @return {string}
 */
function GetMagicNumberTextFromPHP(magicNumber, callbackItemId, callback)
{
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "getTextByMagicNumber.php", true);
    xhr.onload = function (e)
    {
        if(xhr.readyState === 4)
        {
            if(xhr.status === 200)
            {
                callback.apply(xhr, [callbackItemId, xhr.responseText]);
            }
        }
    };
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    let request = "magicNumber=" + magicNumber;
    xhr.send(request);
}