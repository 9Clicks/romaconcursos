<div class="row">

    @foreach($appCursos as $curso)

        <div class="col-xl-4 mt-3">
            <div class="card text-center">
                <div class="card-header" id="card-title">
                    <strong>{{ $curso->tbl_titulo }}</strong>
                </div>
                <img class="card-img-top" src="{{  asset('images/cursos') }}/{{ $curso->tbl_img }}" classe="img-fluid" alt="">
                <div class="card-body" id="card-style">

                    <p class="card-text" style="height: 85px">{{ $curso->tbl_desc }}</p>
                    <hr>
                    <h2><small>R$</small> <strong>{{ $curso->tbl_preco }}</strong></h2>

                </div>
                <div class="card-footer">

                    <a href="{{ url('/preparatorio') }}/{{ $curso->tbl_slug }}/detalhes/{{ $curso->id }}" class="btn btn-warning btn-lg btn-block"><i class="fa fa-info-circle" aria-hidden="true"></i> Saiba Mais...</a>
                </div>
            </div>
        </div>

    @endforeach

</div>