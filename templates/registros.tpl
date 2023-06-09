<h1>Deja tu comentario</h1>

<table border="1px">
    {foreach from=$registros item=$registro}
        <tr>
            <td>{$registro->comentario}</td>
            <td>{$registro->usuario}</td>
        </tr>
    {/foreach} 
    <td><h3><button type="{BASE_URL}comentario/agregado/" value="submit">Agregar</button></td>   
</table>

