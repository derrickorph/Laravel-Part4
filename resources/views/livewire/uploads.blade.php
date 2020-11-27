<div>
    <section class="pt-5">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>File Upload</h3>
                        </div>
                        <div class="card-body">
                            <form  wire:submit.prevent='fileUpload' id="form-upload"   enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input id="title" class="form-control @error('title') is-invalid @enderror" type="text" name="title" wire:model='title'>
                                    @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror

                                </div>
                                <div class="form-group">
                                    <label for="filename">File</label>
                                    <input id="filename" class="form-control-file @error('filename') is-invalid @enderror" type="file" name="filename" wire:model='filename'>
                                    @error('filename') <span class="invalid-feedback">{{ $message }}</span> @enderror

                                </div>
                                <button class="btn btn-success float-right btn-sm" type="submit">Upload</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
