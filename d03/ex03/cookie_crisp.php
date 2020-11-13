<?php 


    
    if($_GET['action'] == 'set')
    {
        if($_GET['name'])
            setcookie($_GET['name'], $_GET['value'], time()+3600);
    }
    elseif($_GET['action'] == 'get')
    {
          foreach ($_COOKIE as $name => $value)
           {
               if($name == $_GET['name'])
                echo "$value\n";
           }
    }
    elseif($_GET['action'] == 'del')
    {
        if($_GET['name'])
            setcookie($_GET['name'], 0 , time()-3600);
    }
?>