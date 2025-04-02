<x-layout>
    <div class="container justify-content-center align-items-center d-flex">
        <div class="row">
            <div class="col-8">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label  class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
    
            </div>
        </div>
    </div>
    
</x-layout>