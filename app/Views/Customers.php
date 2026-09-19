
    <nav> 

    <a href="/">HOME</a>
    <a href="/about">ABOUT</a>
    <a href="/customers">CUSTOMERS</a>
<a href="/users">USERS</a> 
</nav>

<table>
<tr>

<th>Name</th>
<th>Email</th>
<th>Phone</th>
</tr>





<?php


foreach($customers as $customer)

{
echo $customer['full_name'];
 echo $customer['email'];
echo$customer['phone'];
}


?></table>




