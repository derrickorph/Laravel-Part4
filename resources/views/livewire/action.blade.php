<div>
    <button type="button" wire:click="addTwoNumbers(35,10)">Somme</button><br><br>
    <textarea wire:keydown="DisplayMessage($event.target.value)"></textarea><br>

    <form wire:submit.prevent="getSum">
        Entrer num1 : <input  type="text" name="num1" wire:model="num1">
        Entrer num2 : <input  type="text" name="num2" wire:model="num2">
        <button type="submit">Soumettre</button>
    </form>
    Sum: {{ $sum }}
    <br>
    Message: {{ $message }}
</div>
