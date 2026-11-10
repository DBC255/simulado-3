<div>
    <h4>criação de produtos</h4>
    <form wire:submit.prevent='create' action="">
        <div class='row'>
        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">nome</label>
            <input wire:model='nome' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">categoria id</label>
            <select class="form-control" wire:model='id_categoria' name="" id="">
                <option value="">...</option>
                @foreach ($categoria as $c)
                    <option value="{{$c->id}}">{{$c->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">descrição</label>
            <input wire:model='descricao' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">marca</label>
            <input wire:model='marca' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        </div>
        <div class="row">
        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">unidade de medida</label>
            <input wire:model='unidade_medida' type="text" class="form-control" id="exampleInputEmail1" placeholder="unidade que se vende o produto ex:m para metros">
        </div>
        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">quantidade disponivel</label>
            <input wire:model='quantidade_disponivel' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">estoque minimo</label>
            <input wire:model='estoque_minimo' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">preço custo</label>
            <input wire:model='preco_custo' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 col">
            <label for="exampleInputEmail1" class="form-label">preço venda</label>
            <input wire:model='preco_venda' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        </div>
        <button type="submit" class="theme-success btn-solid btn-styled">criar</button>
    </form>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
