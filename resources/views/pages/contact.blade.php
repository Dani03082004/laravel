<x-app-layout>
    <main class="container">
        <h2 class="text-2xl px-6"> Contact </h2>
        <div>
            <form action="/sendContact" method="POST">
                @csrf
                <label for="email">Email: </label>
                <input type="email" name="email" id="">
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>
</x-app-layout>