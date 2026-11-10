<div>
    <h4>criação de fornecedor</h4>
    <form wire:submit.prevent='create' action="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nome/rasão Social</label>
            <input wire:model='nome_razao_social' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">CPF/CNPJ</label>
            <input wire:model='CPF_CNPJ' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">telefone</label>
            <input wire:model='telefone' type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">endereço</label>
            <input wire:model='endereco' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">email</label>
            <input wire:model='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="theme-success btn-solid btn-styled">criar</button>
    </form>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
</div>
