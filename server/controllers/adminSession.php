<?php
    session_start();
    if($_SESSION["Role"] == null)
    {        
        header("Location: ../../../client/public");
    }
    else
    {
        if($_SESSION["Role"] == "Admin")
        {}
        else
        {
            header("Location: ../../../client/public");
        }

    }
    
?>