<?php

function testEveryChar($str)
{
    /*if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/\"', $str))
    {
        return false;
    }
    else {
        return true;
    }   
*/
return (preg_match('/[\'^£$%&*()}{@#~?><>\",|=_+¬-]/', $str))?false :true;
}

?>