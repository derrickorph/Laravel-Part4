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
                            <h3>Upload Images</h3>
                        </div>
                        <div class="card-body">
                            <form  wire:submit.prevent='uploadImages' id="upload-images" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group"
                                    x-data="{isUploading: false,progress:0}"
                                    x-on:livewire-upload-start="isUploading = true"
                                    x-on:livewire-upload-finish="isUploading = false"
                                    x-on:livewire-upload-error="isUploading = false"
                                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                                >

                                    <label for="images">Choose Images</label>
                                    <input id="images" class="form-control-file" type="file" name="images" wire:model='images' multiple>
                                    {{-- <div wire:loading wire:target='images'>Uploading....</div> --}}
                                    {{-- Progess Bar --}}
                                    <div x-show="isUploading">
                                        <progress max="100" x-bind:value="progress" style="height: 30px; width=100%;"></progress>

                                    </div>
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
