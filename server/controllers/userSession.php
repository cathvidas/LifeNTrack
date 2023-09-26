<?php
    session_start();
    if($_SESSION["Role"] == null)
    {        
        header("Location: ../../../client/public");
    }
    else
    {
        if($_SESSION["Role"] == "User")
        {}
        else
        {
            header("Location: ../../../client/public");
        }

    }
    
?>