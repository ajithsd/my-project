<h1>Api Call</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>photo</th>
    </tr>
    @foreach ($datas as $item)
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src="{{$item['avatar']}}" alt=""></td>
    </tr>
    @endforeach
    
</table>