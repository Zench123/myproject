
    <nav> 

    <a href="/">HOME</a>
    <a href="/about">ABOUT</a>
    <a href="/customers">CUSTOMERS</a>
<a href="/users">USERS</a> 
</nav>
<?php


foreach($customers as $customer)

{
echo $customer['fullname'];
 echo $customer['email'];
echo$customer['phone'];
}


?>




