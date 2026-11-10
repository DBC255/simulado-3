<div>
    <h4>lista de produtos</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>categoria</th>
                <th>marca</th>
                <th>descrição</th>
                <th>unidade de medida</th>
                <th>qundidade disponivel</th>
                <th>estoque minimo</th>
                <th>preço custo</th>
                <th>preço venda</th>
                <th>
                    ações
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nome}}</td>
                    <td>{{$p->id_categoria}}</td>
                    <td>{{$p->marca}}</td>
                    <td>{{$p->descricao}}</td>
                    <td>{{$p->unidade_medida}}</td>
                    <td>{{$p->quantidade_disponivel}}</td>
                    <td>{{$p->estoque_minimo}}</td>
                    <td>{{$p->preco_custo}}</td>
                    <td>{{$p->preco_venda}}</td>
                    <td>
                        <button class="theme-danger btn-solid btn-styled btn-sm" wire:click='delete({{$p->id}})'>deletar</button>
                        <a class="theme-accent btn-solid btn-styled btn-sm" href="{{route('produtos.edit',$p->id)}}">editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('produtos.create')}}" type="button" class="btn-icon theme-success btn-solid btn-styled" aria-label="Icon only"><b><i>+</i></b></a>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>
