<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-8 border rounded-5 p-3 bg">
                <form enctype="multipart/form-data" wire:submit="store" class="p-3">

                    <div class="mb-3">
                        <label class="form-label">Inserisci qui il titolo</label>
                        <input type="text" class="form-control" wire:model.blur="title">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci qui il sottotitolo</label>
                        <input type="text" class="form-control" wire:model.blur="subtitle">
                        @error('subtitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <select wire:model.blur="category" id="" class="form-control">
                            <option selected disabled>Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Inserisci l'immaginne</label>
                        <input type="file" class="form-control" wire:model="image">
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Inserisci qui il corpo</label>
                        <textarea wire:model.blur="body" class="form-control" cols="30" rows="10"></textarea>
                        @error('body')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Pubblica</button>
                        <a href="{{ route('homepage') }}" class="btn btn-danger">Torna alla home</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
