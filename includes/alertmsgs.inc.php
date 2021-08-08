<?php
    if(isset($_GET["log"])){
        if($_GET["log"]=="loggedout"){
            echo '<script> window.onload = function(){
                alert("You have successfully logged out");
               }
            </script>';
        }
        else if($_GET["log"]=="loginsucceeded"){
            echo '<script> window.onload = function(){
                alert("You have successfully logged in");
               }
            </script>';
        }
    }
    if(isset($_GET["error"])){
        if($_GET["error"]== "emptyinput" || $_GET["error"]== "emptyinputlogin"){
        echo '<script> window.onload = function(){
            alert("Fill in all fields");
           }
        </script>';
        }
        else if($_GET["error"] == "invaliduid"){
        echo '<script> window.onload = function(){
            alert("Choose a proper username");
           }
        </script>';
        }
        else if($_GET["error"] == "invalidemail"){
        echo '<script> window.onload = function(){
            alert("Choose a proper email");
           }
        </script>';
        }
        else if($_GET["error"] == "passwordsdontmatch"){
        echo '<script> window.onload = function(){
            alert("Passwords does not match");
           }
        </script>';
        }
        else if($_GET["error"] == "usernametaken"){
            echo '<script> window.onload = function(){
                alert("The user name is already signned up");
               }
            </script>';
        }
    }