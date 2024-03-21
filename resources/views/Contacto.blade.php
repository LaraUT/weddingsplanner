@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div
    class="items-center mx-20 mt-8 overflow-auto bg-gray-200 border border-separate border-gray-300 rounded-t-lg h-250">
    <table class="w-full bg-gray-200 rounded-t-lg table-auto">
        <thead class="text-center text-white bg-[#325b87]">
            <tr>
                <th class="p-2">Nombre</th>
                <th class="p-2">Correo Electronico</th>
                <th class="p-2">Telefono</th>   
                <th class="p-2">Empresa</th>

            </tr>
        </thead>
        <tbody class="text-center bg-white">
            @foreach ($contacs as $item)
            <tr class= 'border border-gray-200'>
                <td>{{$item->nombre}}</td>
                <td>{{$item->correo_electronico}}</td>
                <td>{{$item->telefono}}</td>
                <td>{{$item->empresa}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>