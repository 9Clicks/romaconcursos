<div class="jumbotron">
    <div class="container-fluid" id="style-categoria">
        <h1><span class="icon-tag2"></span> Escolha por Categoria</h1>
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="row">

                    @foreach($appCursos as $info)

                        <div class="col-xl-4">
                            <a href="{{ url('/preparatorio') }}/{{ $info->tbl_slug }}/detalhes/{{ $info->id }}" class="card text-white mb-3" id="card-categoria">
                                <div class="card-header">
                                    <span class="icon-medal"></span> {{ $info->tbl_categoria }}
                                </div>
                            </a>
                        </div>

                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>