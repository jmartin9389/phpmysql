<?php
echo 'hello world';

$db = mysqli_connect('localhost', 'pmd', 'pmd1234', 'chat');

if (mysqli_connect_errno()) {
    echo '<p>Error: Could not connect to database.<br/>
    Please try again later.</p>';
    exit;
}

?>