<!DOCTYPE html>
<html>
    <head>
        <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
          margin-left: auto;
          margin-right: auto;
          text-align: center; 
        }

        form {
          margin-left: auto;
          margin-right: auto;
          text-align: center; 
        }

        button {
          background-color: #f44336;
        }
        </style>
    </head>
    <body>

        <table style="width:30%" class="center">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Website</th>
            <th>Action</th>
          </tr>
          @foreach($table as $row)
          <tr>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->logo }}</td>
            <td>{{ $row->website }}</td>
            <!-- <td>@if($row->occupied == '1')
                    YES
                @else
                    NO
                @endif
            </td> -->
            <td><button type="submit">Edit</td>
            <td><button type="submit" class="delete">Delete</td>
          @endforeach
        </table>
        <br>
        @csrf
<!--         <form action="table" method="POST" class="form">
            <label>Total Table: </label>
            <input type="text" id="total_table" name="total_table"><br>
            <label>Total Chair: </label>
            <input type="text" id="total_chair" name="total_chair"><br><br>
            <button type="submit">Add table</button> -->
        <!-- </form>                 -->
    </body>
</html>