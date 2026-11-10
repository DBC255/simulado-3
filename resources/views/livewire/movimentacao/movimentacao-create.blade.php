<div>
    <form action="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">produto id</label>
            <select name="" class="form-control" wire:model='produto_id' id="">
                @foreach ($produto as $p)
                    <option value="{{$p->id}}">{{$p->id}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">fornecedor_id</label>
            <select name="" class="form-control" wire:model='fornecedor_id' id="">
                @foreach ($fornecedores as $f1)
                    <option value="{{$f1->id}}">{{$f1->nome_razao_social}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">quantidade_movimentada</label>
            <input wire:model='quantidade_movimentada' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">funcionario_id</label>
            <select name="" class="form-control" wire:model='funcionario_id' id="">
                @foreach ($funcionarios as $f)
                    <option value="{{$f->id}}">{{$f->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tipo</label>
            <select wire:model='tipo' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <option value="">...</option>
                <option value="1">entrada</option>
                <option value="0">saida</option>
            </select>
        </div>
        <button type="submit" class="theme-success btn-solid btn-styled">criar</button> 
    </form>
    {{-- Do your work, then step back. --}}
</div>
