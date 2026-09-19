    <nav> 

    <a href="/">HOME</a>
    <a href="/about">ABOUT</a>
    <a href="/customers">CUSTOMERS</a>
<a href="/users">USERS</a> 
</nav>

<table>

<tr>
<th>ID</th>
<th>username</th>
<th>full_name</th>

</tr>

</table>

<?php






foreach($users as $user)

{
echo $user['username'];
echo $user['fullname'];
echo $user['role'];
}


?>




