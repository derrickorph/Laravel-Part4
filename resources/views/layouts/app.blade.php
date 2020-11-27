<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <title>Livewire</title>
    @livewireStyles
</head>
<body>

    {{ $slot }}

    <script src="/assets/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/sweetalert.min.js"></script>
    @livewireScripts
    <script>
        window.livewire.on('studentAdded',()=>{
            $('#addStudentModal').modal('hide');
        });
        window.livewire.on('studentUpdated',()=>{
            $('#updateStudentModal').modal('hide');
        });
        window.livewire.on('fileUploaded',()=>{
            $('#form-upload')[0].reset();
        });
        window.livewire.on('imagesUploaded',()=>{
            $('#upload-images')[0].reset();
        });
    </script>

</body>
</html>
