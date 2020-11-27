<div>
    Title : <input  type="text"  wire:model="title">
    Name : <input  type="text"  wire:model="name">

    <h3>Title: {{ $title }}</h3>
    <h3>Name: {{ $name }}</h3>

    <h3>Lifecycle Hooks Method</h3>
    @foreach ($infos as $info)
        <h4>{{ $info }}</h4>
    @endforeach
</div>
