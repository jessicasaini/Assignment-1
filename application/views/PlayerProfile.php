<hr>
<h3>Transactions</h3>
{playerdropdown}

<table style="width:100%">
    <tr>
        <th>DATE</th>
        <th>STOCK</th>
        <th>ACTION</th>
        <th>QUANTITY</th>
    </tr>
    {playerprofile}
    <tr>
        <td>{DateTime}</td>
        <td>{Stock}</td>
        <td>{Trans}</td>
        <td>{Quantity}</td>
    </tr>
    {/playerprofile}
</table>

</br>

<h3>Player Holdings</h3>
<table style="width:100%">
    <tr>
        <th>STOCK</th>
        <th>TOTAL</th>
    </tr>
    {playersholding}
    <tr>
        <td>{Stock}</td>
        <td>{Quantity}</td>
    </tr>
    {/playersholding}
</table>

