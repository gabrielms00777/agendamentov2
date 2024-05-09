<div class="container h-screen p-4 mx-auto">
    <h1 class="text-3xl font-bold">Histórico de Agendamentos</h1>

    <div class="flex justify-between mt-4">
        <div class="btn-group">
            <button class="btn">Todos</button>
            <button class="btn">Futuros</button>
            <button class="btn">Passados</button>
        </div>
        <input type="text" placeholder="Pesquisar..." class="w-full max-w-xs input input-bordered input-sm" />
    </div>

    <div class="mt-4 overflow-x-auto">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Local</th>
                    <th>Profissional</th>
                    <th>Data/Hora</th>
                    <th>Status</th>
                    <th>Avaliação</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Corte de Cabelo</td>
                    <td>Barbearia do João</td>
                    <td>João Pedro</td>
                    <td>15/11/2023 às 14:00</td>
                    <td>Agendado</td>
                    <td>-</td>
                    <td>
                        <button class="btn btn-primary btn-xs">Detalhes</button>
                        <button class="btn btn-secondary btn-xs">Cancelar</button>
                    </td>
                </tr>
                <tr>
                    <td>Massagem Relaxante</td>
                    <td>Spa Bem-Estar</td>
                    <td>Maria Silva</td>
                    <td>05/11/2023 às 16:00</td>
                    <td>Concluído</td>
                    <td>
                        <!-- Adicione aqui a representação da avaliação (estrelas, etc.) -->
                    </td>
                    <td>
                        <button class="btn btn-primary btn-xs">Detalhes</button>
                    </td>
                </tr>
                <tr>
                    <td>Manicure</td>
                    <td>Salão da Maria</td>
                    <td>Ana Souza</td>
                    <td>28/10/2023 às 10:00</td>
                    <td>Cancelado</td>
                    <td>-</td>
                    <td>
                        <button class="btn btn-primary btn-xs">Detalhes</button>
                    </td>
                </tr>
                <!-- Adicione mais linhas de agendamentos aqui -->
            </tbody>
        </table>
    </div>
</div>
