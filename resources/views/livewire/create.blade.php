<!-- Modal -->
<div wire:ignore.self class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add new student</h5>
            <span type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </span>
        </div>
        <div class="modal-body">
            <form>
                @csrf
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input id="firstname" class="form-control" type="text" name="firstname" wire:model='firstname'>
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input id="lastname" class="form-control" type="text" name="lastname" wire:model='lastname'>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email" wire:model='email'>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input id="phone" class="form-control" type="number" name="phone" wire:model='phone'>
                </div>
                <button type="button" class="btn btn-primary " data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success float-right" wire:click.prevent="store()">Add Student</button>
            </form>
        </div>

        </div>
    </div>
</div>
