<h2>Criar Contato</h2>

<div>
    <form wire:submit.prevent="create" method="post">

        <div>
            <label>Nome</label>

            <input type="text" wire:model="name">

            <div class="error-message">
                @error('name')
                    {{$message}}
                @enderror
            </div>
        </div>

        <div>
            <label>Email</label>

            <input type="email" wire:model="email">

            <div class="error-message">
                @error('email')
                    {{$message}}
                @enderror
            </div>
        </div>

        <div>
            <label>Telefone</label>

            <input type="text" wire:model="phone">

            <div class="error-message">
                @error('phone')
                    {{$message}}
                @enderror
            </div>
        </div>

        <button type="submit">
            Adicionar Contato
        </button>
    </form>
</div>
