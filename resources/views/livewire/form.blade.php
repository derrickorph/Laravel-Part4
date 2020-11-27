<div>
    Name: <br>
    <input type="text" wire:model.debounce.1000ms = "name"><br>

    Message: <br>
    <textarea wire:model="message"></textarea> <br>

    Marital Status: <br>
    Single<input type="radio" value="Single" wire:model="marital_status">
    Married<input type="radio" value="Married" wire:model="marital_status"><br>

    Favourite Color: <br>
    Red<input type="checkbox" value="Red" wire:model="colors" ><br>
    Green<input type="checkbox" value="Green" wire:model="colors"><br>
    Blue<input type="checkbox" value="Blue" wire:model="colors"><br>

    Favourite Fruit:<br>
    <select wire:model="fruit">
        <option value="">Select Fruit</option>
        <option value="Apple">Apple</option>
        <option value="Mango">Mango</option>
        <option value="Banana">Banana</option>
    </select>
<hr>
    Name: {{ $name }} <br>
    Message: {{ $message }}<br>
    Marital Status: {{ $marital_status }}<br>
    Favourite Color:
        <ul>
            @foreach ($colors as $color)
                <li>{{ $color }}</li>
            @endforeach
        </ul>
    Favourite Fruit: {{ $fruit }}



</div>
