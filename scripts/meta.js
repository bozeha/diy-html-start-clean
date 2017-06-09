

function addMetaDescreption()
{
var disc_string = $('h2').text();
disc_string = replaceToascii(disc_string) ;
    $('head').append("<meta name='description' content='"+disc_string+"'>");
     $('head').append("<meta name='keywords' content='"+guide_keywords+"'>");
}


function replaceToascii(get_string)
{
get_string = get_string.replace(/\)/g,"&#41;",-1)
get_string = get_string.replace(/\(/g,"&#40;",-1)
get_string = get_string.replace(/\'/g,"&#39;",-1)
get_string = get_string.replace(/\"/g,"&#34;",-1)
get_string = get_string.replace(/\,/g,"&#44;",-1)
get_string = get_string.replace(/\[/g,"&#91;",-1)
get_string = get_string.replace(/\]/g,"&#93;",-1)
get_string = get_string.replace(/\\/g,"&#92;",-1)
get_string = get_string.replace(/\//g,"&#47;",-1)


return get_string;

}
