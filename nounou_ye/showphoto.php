<?php

function show($email){
    echo "<img src='http://localhost:8080/nounou_ye/photos/$email'>";
}
function addressPhoto($email){
    echo "http://localhost:8080/nounou_ye/photos/$email";
}