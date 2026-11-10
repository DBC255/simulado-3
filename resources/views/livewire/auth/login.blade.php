<div>
    <form wire:submit.prevent='login'>
        <div class="mb-3">
            <label for="exampleInputEmail1" wire:model='email' class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" wire:model='password' class="form-label">senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn-solid theme-primary">logar</button>
    </form>
    {{-- The Master doesn't talk, he acts. --}}
</div>
