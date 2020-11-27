<div>
    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                 <div class="col-md-6">
                     <div class="card">
                        <div class="card">
                             <div class="card-header">
                                 <h3>Contact Form</h3>
                             </div>
                             <div class="card-body">
                                 <form wire:submit.prevent="submitForm">
                                    <div class="form-group">
                                        <label for="name">Nom</label>
                                        <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" name="name" wire:model="name">
                                        @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" wire:model='email'>
                                        @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Téléphone</label>
                                        <input id="phone" class="form-control @error('phone') is-invalid @enderror" type="number" name="phone" wire:model='phone'>
                                        @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="msg">Message</label>
                                        <textarea id="msg" class="form-control @error('msg') is-invalid @enderror" name="msg" rows="3" wire:model='msg'></textarea>
                                        @error('msg') <span class="invalid-feedback">{{ $message }}</span> @enderror

                                    </div>
                                    <button type="submit" class="btn btn-outline-success btn-sm float-right">Soumettre</button>
                                 </form>
                             </div>
                         </div>

                     </div>
                 </div>
            </div>
        </div>
    </section>
</div>
