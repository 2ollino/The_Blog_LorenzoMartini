<x-layout>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-8 border rounded-5 p-3 bg">
                <form method="POST" action="{{ route('register') }}" class="p-3">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Inserisci qui il tuo Username</label>
                        <input type="name" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary ">Registrati</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</x-layout>
