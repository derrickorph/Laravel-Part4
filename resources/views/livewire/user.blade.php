<div>
    <style>
        nav svg{
            height:10px;
        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-header">
                                <h3>All Users</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                        @php $i=1; @endphp

                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)

                                            <tr>
                                                <td>@php echo $i++ @endphp</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $users->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
