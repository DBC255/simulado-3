<div>
    <h4>criação de categorias</h4>
    <form wire:submit.prevent='create' action="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nome</label>
            <input wire:model='nome' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="theme-success btn-solid btn-styled">criar</button>
    </form>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
</div>
