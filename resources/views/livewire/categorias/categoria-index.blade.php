<div>
    <h4>lista de categorias</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th >nome</th>
                <th>
                    ações
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->nome}}</td>
                    <td>
                        <button class="theme-danger btn-solid btn-styled btn-sm" wire:click='delete({{$c->id}})'>deletar</button>
                        <a class="theme-accent btn-solid btn-styled btn-sm" href="{{route('categorias.edit',$c->id)}}">editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('categorias.create')}}" type="button" class="btn-icon theme-success btn-solid btn-styled" aria-label="Icon only"><b><i>+</i></b></a>
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
