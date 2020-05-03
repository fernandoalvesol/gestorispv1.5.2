<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Relatório Gerencial</title>
    </head>
    <body>

        <h1>Relatório de Ressarcimentos</h1>

        <div class="row">
            <table class="tabela table table-striped" style="margin-left: 5px">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Placa</th>
                        <th>Data Ressarcimento</th>
                        <th>Chassi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($Ressarcimento as $ressarcimento)
                    
                    <tr>
                        <td>{{$ressarcimento->name}}</td>
                        <td>{{$ressarcimento->placa}}</td>
                        <td> {{date('d/m/Y', strtotime($ressarcimento->dtressarcimento))}} </td>
                        <td>{{$ressarcimento->chassi}}</td>
                    </tr>
                    @empty
                <div style="text-align: center;">
                    <h3><b>NÃO TEM REGISTRO</b></h3>
                </div>
                @endforelse
                </tbody>
            </table>
        </div>    
    </body>
</html>