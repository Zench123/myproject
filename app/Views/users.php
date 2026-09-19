    <nav> 

    <a href="/">HOME</a>
    <a href="/about">ABOUT</a>
    <a href="/customers">CUSTOMERS</a>
<a href="/users">USERS</a> 
</nav>

<table>
<tr>

<th>position</th>
<th>FullName</th>
<th>Created_at</th>
</tr>







<?php
foreach($users as $user)

{?>

<tr>
<td><?=  $user['username']; ?>   </td>
<td><?=  $user['full_name'];  ?> 
  </td>
<td><?=  $user['created_at']; ?>   </td>
</tr>






<?php } ?>


</table>




