<div>
    @include('livewire.create')
    @include('livewire.update')
    <section>
        <style>
            nav svg{
                height:10px;
            }
        </style>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>

                    @endif
                    <div class="card">

                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <span class='h3'>All Student</span>
                                <span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addStudentModal">Add new Student</span>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="search" name="search" placeholder="Search....." wire:model='searchTerm'>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                    @php $i=1; @endphp

                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)

                                        <tr>
                                            <td>@php echo $i++ @endphp</td>
                                            <td>{{ $student->firstname }}</td>
                                            <td>{{ $student->lastname }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>
                                                <span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updateStudentModal" wire:click.prevent='edit({{ $student->id }})'>Edit</span>
                                                <span class="btn btn-danger btn-sm"  wire:click.prevent='delete({{ $student->id }})'>Delete</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $students->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


