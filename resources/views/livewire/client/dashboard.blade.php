<div class="container h-screen p-4 mx-auto">
    <h1 class="text-3xl font-bold">Dashboard</h1>


    <div>
        <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
            <div class="shadow-xl card bg-base-100">
                <div class="card-body">
                    <h2 class="card-title">Próximo Agendamento</h2>
                    <p>Corte de Cabelo</p>
                    <p>Barbearia do João - 15/11/2023 às 14:00</p>
                    <div class="justify-end card-actions">
                        <button class="btn btn-primary btn-sm">Detalhes</button>
                        <button class="btn btn-secondary btn-sm">Cancelar</button>
                    </div>
                </div>
            </div>
            <div class="shadow-xl card bg-base-100">
                <div class="card-body">
                    <h2 class="card-title">Histórico de Agendamentos (5)</h2>
                    <ul class="list-disc">
                        <li>
                            <div>
                                <strong>Massagem Relaxante</strong>
                                <span>Spa Bem-Estar - 05/11/2023</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <strong>Manicure</strong>
                                <span>Salão da Maria - 28/10/2023</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <strong>Consulta com Dr. Silva</strong>
                                <span>Clínica Médica - 15/10/2023</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-4 overflow-x-auto">
            <x-card>
                <table class="table w-full">
                    <thead>
                        <tr>
                            <th>Serviço</th>
                            <th>Local</th>
                            <th>Data/Hora</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>Limpeza de Pele</td>
                            <td>Clínica Estética</td>
                            <td>20/11/2023 às 10:00</td>
                            <td>
                                <button class="btn btn-primary btn-xs">Detalhes</button>
                                <button class="btn btn-secondary btn-xs">Cancelar</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </x-card>
        </div>
    </div>

</div>
