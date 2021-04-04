<html>
<head>
    <link rel="stylesheet" href="css/teacher.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
          rel="stylesheet">
    <title>Teachers</title>
    @include("header")
</head>

<a class="material-icons floating-btn" onclick="openForm()">add</a>

<table class="table">
    <thead>
    <tr>
        <th>group</th>
        <th>edit</th>

    </tr>
    </thead>
    <tbody>

    @foreach($groups as $group)

        <tr>
            <td>{{$group->number}}</td>
            <td><a href="deleteg/{{$group->g_id}}"><button>Delete</button></a>
                <a href="updateg/{{$group->g_id}}"><button>update</button></a>
            </td>


        </tr>
    @endforeach

    </tbody>

</table>
<div class="form-popup" id="myForm">
    <form  method="POST" action="ajouterg"  class="form-container">
        @csrf
        <h1>Add Group</h1>

        <label for="group"><b>Number</b></label>
        <input type="text" placeholder="Enter Name" name="group" required>
        <br><br><br>

            <select name="promo" >
                @foreach($promos as $promo)
                <option value="{{$promo->id}}">{{$promo->promo}}</option>
                @endforeach
            </select>


        <br><br><br>

        <input type="submit" class="btn" value="add">
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>


</div>


</form>
</div>
<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>


</body>
</html>
