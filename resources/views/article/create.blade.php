<x-layout>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-8 border rounded-5 p-3 bg">
                <form  enctype="multipart/form-data" method="POST" action="{{ route('article.store') }}" class="p-3">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Inserisci qui il titolo</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Inserisci qui il sottotitolo</label>
                        <input type="text" class="form-control" name="subtitle" value="{{ old('subtitle') }}">
                        @error('subtitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    

                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <select name="category"  id="" class="form-control">
                            <option selected disabled>Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Inserisci qui il sottotitolo</label>
                        <input type="file" class="form-control" name="image" >
                        @error('subtitle')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Inserisci qui il corpo</label>
                        <textarea name="body" class="form-control"  cols="30" rows="10">{{(old('body'))}}</textarea>
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

</x-layout>
