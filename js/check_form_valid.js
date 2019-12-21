/*
 * @params string1,string2: string
 * @return bool
 * Check params for non-letters sybmols with RegEx
 */
function is_not_letters_exists(string1, string2)
{
    let not_letters_string1 = string1.match(/[^a-zA-ZА-Яа-яЁё]/gi); 
    let not_letters_string2 = string2.match(/[^a-zA-ZА-Яа-яЁё]/gi);

    if(not_letters_string1 === null &&  not_letters_string2 === null)
    {
        return false;
    }
    else
    {
        return true;
    }
}

/*
 * @params string1,string2: string
 * @return bool
 * Check params for correct lenght (at least 3 letters)
 */
function is_letters_lenght_correct(string1, string2)
{
    if (string1.length >= 3 && string2.length >= 3)
    {
        return true;
    }
    else
    {
        return false;
    }
}

/*
 * @return bool
 * Check form validity by checking input strings
 * Alerts if error exists
 */
function is_form_valid()
{
    
    let country = document.querySelector('.country').value;
    let capital = document.querySelector('.capital').value;

    if (!is_not_letters_exists(country, capital) && is_letters_lenght_correct(country, capital))
    {
        return true;
    }
    else
    {
        alert("Error: min input lenght = 3, not-letter symbols not allowed!");
        return false;
    }
}

