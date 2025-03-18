<form name="formAltaConsulta" method="POST" action="altaConsulta.php">
    <label> Pregunta: </label>
    <input type="text" name="pregunta"> <br/>
    <label> Respuesta: </label>
    <input type="text" name="respuesta"> <br/>
    <select name="categoria">
        <option value="Sistema Operativo"> Sistema Operativo</option>
        <option value="Software"> Software</option>
        <option value="Hardware"> Hardware</option>
        <option value="Conectividad"> Conectividad</option>
        <option value="Seguridad"> Seguridad</option>
    </select>
    <input type="submit" value="Aceptar" />
</form>