    <nav> 

    <a href="/">HOME</a>
    <a href="/about">ABOUT</a>
    <a href="/customers">CUSTOMERS</a>
<a href="/users">USERS</a> 
</nav>
<?php


foreach($users as $user)

{
echo $user['username'];
echo $user['fullname'];
echo $user['role'];
}


?>




