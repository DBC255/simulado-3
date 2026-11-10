<div>
    <h4>lista de produtos</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>nome/razao social</th>
                <th>CPF_CNPJ</th>
                <th>telefone</th>
                <th>endereco</th>
                <th>email</th>
                <th>
                    ações
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fornecedores as $f)
                <tr>
                    <td>{{$f->id}}</td>
                    <td>{{$f->nome_razao_social}}</td>
                    <td>{{$f->CPF_CNPJ}}</td>
                    <td>{{$f->telefone}}</td>
                    <td>{{$f->endereco}}</td>
                    <td>{{$f->email}}</td>
                    <td>
                        <button class="theme-danger btn-solid btn-styled btn-sm" wire:click='delete({{$f->id}})'>deletar</button>
                        <a class="theme-accent btn-solid btn-styled btn-sm" href="{{route('fornecedor.edit',$f->id)}}">editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('produtos.create')}}" type="button" class="btn-icon theme-success btn-solid btn-styled" aria-label="Icon only"><b><i>+</i></b></a>

    {{-- The best athlete wants his opponent at his best. --}}
</div>
