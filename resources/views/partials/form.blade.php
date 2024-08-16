@csrf
<div style="border: 3px solid #ccc; padding: 20px; width: 30%; margin-top: 20px; box-sizing: border-box; text-align: center;">
    <ul style="list-style-position: inside; padding: 0; text-align: left;">
        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="Nombres" style="margin-right: 10px;">Nombres</label>
            <input type="text" name="Nombres" value="{{ old('Nombres',$cliente->Nombres) }}" style="flex-grow: 1;">
        </li>
        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="Email" style="margin-right: 10px;">Email</label>
            <input type="text" name="Email" value="{{ old('Email',$cliente->Email) }}" style="flex-grow: 1;">
        </li>
        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="Direccion" style="margin-right: 10px;">Dirección</label>
            <input type="text" name="Direccion" value="{{ old('Direccion',$cliente->Direccion) }}" style="flex-grow: 1;">
        </li>
        <li style="display: flex; align-items: center; margin-bottom: 10px;">
            <label for="Fono" style="margin-right: 10px;">Fono</label>
            <input type="text" name="Fono" value="{{ old('Fono',$cliente->Fono) }}" style="flex-grow: 1;">
        </li>
        <li style="display: flex; justify-content: center; margin-top: 20px;">
            <button type="submit" style="padding: 10px 20px;">{{$btnText}}</button>
        </li>
    </ul>
</div>
