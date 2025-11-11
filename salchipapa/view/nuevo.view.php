<h1>Nuevo usuario:</h1>
<a href="?accion=inicio">Volver</a>
<form  method="post" action="?accion=guardar">
    <label>nombre:</label>
    <input type="text" name="nombre">
    <label>apellido:</label>
    <input type="text" name="apellido">
    <label>genero:</label>
    <select name="genero">
        <option>Seleccione</option>
        <option value="m">M</option>
        <option value="f">F</option>
        <option value="o">O</option>
    </select>
    <label>nacimiento:</label>
    <input type="date" name="nacimiento">
    <label>telefono:</label>
    <input type="text" name="telefono">
    <button type="submit">Enviar</button>
</form>