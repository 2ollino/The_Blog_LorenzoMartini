<x-layout>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-6 border rounded-5 p-3 bg">
                <form method="POST" action="{{ route('login') }}" class="p-3">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary">Accedi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
