<div class="container mx-auto p-4 h-screen">
    <h1 class="text-3xl font-bold">Dashboard</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Próximo Agendamento</h2>
                <p>Cliente: Maria Silva</p>
                <p>Serviço: Limpeza de Pele</p>
                <p>Data/Hora: 20/11/2023 às 10:00</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary btn-sm">Confirmar</button>
                    <button class="btn btn-secondary btn-sm">Adiar</button>
                </div>
            </div>
        </div>
        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Estatísticas (últimos 30 dias)</h2>
                <ul class="list-disc">
                    <li>
                        <div>
                            <strong>Atendimentos:</strong> 10
                        </div>
                    </li>
                    <li>
                        <div>
                            <strong>Serviços mais procurados:</strong>
                            <ul class="list-disc pl-4">
                                <li>Limpeza de Pele</li>
                                <li>Manicure</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div>
                            <strong>Faturamento:</strong> R$ 500,00
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="overflow-x-auto mt-4">
        <table class="table w-full">
            <thead>
                <tr>
                    <th>Cliente</th>
                    <th>Serviço</th>
                    <th>Data/Hora</th>
                    <th>Status</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>João Pedro</td>
                    <td>Corte de Cabelo</td>
                    <td>15/11/2023 às 14:00</td>
                    <td>Confirmado</td>
                    <td>
                        <button class="btn btn-primary btn-xs">Detalhes</button>
                        <button class="btn btn-secondary btn-xs">Adiar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
