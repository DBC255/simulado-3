<div>
    <h4>edição de categorias</h4>
    <form wire:submit.prevent='update' action="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nome</label>
            <input wire:model='nome' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="theme-success btn-solid btn-styled">editar</button>
    </form>
    {{-- The Master doesn't talk, he acts. --}}
</div>
