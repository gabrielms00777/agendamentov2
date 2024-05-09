<div class="container w-full mx-auto max-w-7xl">
    <h1 class="mb-4 text-3xl font-bold text-primary">Perfil</h1>

    <div id="profile-form" x-data="{ name: '', email: '', password: '' }" x-init="getUserData()">
        <form @submit.prevent="submitForm">
            <div class="shadow-xl card bg-base-100">
                <div class="card-body">
                    <div class="form-control">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name" x-model="name" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" x-model="email" class="input input-bordered"
                            required />
                    </div>
                    <div class="form-control">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" x-model="password"
                            class="input input-bordered" required />
                        <span class="text-xs text-muted">Mostrar senha</span>
                    </div>
                    <button type="submit" class="mt-4 btn btn-primary">Salvar alterações</button>
                </div>
            </div>
        </form>
    </div>
</div>
