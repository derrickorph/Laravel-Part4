<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit student</h5>
            <span type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </span>
        </div>
        <div class="modal-body">
            <form>
                @csrf

                <input class="form-control" type="hidden" name="id" id="id"  wire:model='ids'>
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input id="firstname" class="form-control @error('firstname') is-invalid @enderror" type="text" name="firstname" wire:model='firstname'>
                    @error('firstname') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input id="lastname" class="form-control  @error('lastname') is-invalid @enderror" type="text" name="lastname" wire:model='lastname'>
                    @error('lastname') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control  @error('email') is-invalid @enderror" type="email" name="email" wire:model='email'>
                    @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input id="phone" class="form-control  @error('phone') is-invalid @enderror" type="number" name="phone" wire:model='phone'>
                    @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </form>
            <button type="button" class="btn btn-primary " data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success float-right" wire:click.prevent="update()">Update Student</button>
        </div>

        </div>
    </div>
</div>
