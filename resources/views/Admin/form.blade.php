        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" value="{{isset($admin->nombre)?$admin->nombre:old('nombre')}}">
        <br>

        <label for="Primer_Apellido">Primer Apellido</label>
        <input type="text" name="Primer_apellido" id="Primer_Apellido" value="{{isset($admin->Primer_apellido)?$admin->Primer_apellido:old('Primer_apellido')}} ">
        <br>

        <label for="Segundo_Apellido">Segundo Apellido</label>
        <input type="text" name="Segundo_apellido" id="Segundo_Apellido" value="{{isset($admin->Segundo_apellido)?$admin->Segundo_apellido:old('Segundo_apellido')}}">
        <br>

        <label for="correo">Correo</label>
        <input type="email" name="correo" id="correo" value="{{isset($admin->correo)?$admin->correo:old('correo')}}">
        <br>

        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo" value="{{isset($admin->tipo)?$admin->tipo:old('tipo')}}">
        <br>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="{{isset($admin->password)?$admin->password:old('password')}}">
        <br>

        <input type="submit" value="Guardar Datos">
