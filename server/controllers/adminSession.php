<?php
    session_start();
    if($_SESSION["Role"] == null)
    {        
        header("Location: ../../public");
    }
    else
    {
        if($_SESSION["Role"] == "Admin")
        {}
        else
        {
            header("Location: ../../public");
        }

    }
    
?>