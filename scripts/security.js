function privileges(user_type)
{
    switch (user_type)
    {
     case 'basic':
    jQuery(function(){
   //dom ready codes
    $('.admin-privileges').remove();
    $('.super-admin-privileges').remove();
    });
    break;
    case 'admin':
    break;
    case 'super-admin':
    break;
    }

}
