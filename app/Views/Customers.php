
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

{?>

<tr>
<td><?=  $customer['full_name']; ?>   </td>
<td><?=  $customer['email'];  ?> 
  </td>
<td><?=  $customer['phone']; ?>   </td>
</tr>






<?php } ?>


</table>




