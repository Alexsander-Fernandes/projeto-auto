    @extends('template.dashboard')

    @section('conteudo-principal')

        <div class="container-area">
            <div class="titulo">
                <h2>Controle De Abastecimentos</h2>
             </div>
                <form action="" class="search-bar">
                    <input type="search" name="search" pattern=".*\S.*" required>
                    <button class="search-btn" type="submit">
                        <span>Pesquisar</span>
                    </button>
                </form>
        </div>

    @endsection
