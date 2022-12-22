<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<script>
function test()
{
    if(confirm('Are you sure to delete'))
    {
        alert('Data will deleted succefully')
        window.location='https://www.flipkart.com';
    }   
    else 
    {
        window.location='confirm.php';

    } 

}
</script>

<button type="button" onclick="test()">Click to Delete</button>

</body>
</html>