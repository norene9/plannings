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
        <th>Module</th>
        <th>promo</th>
        <th>edit</th>

    </tr>
    </thead>
    <tbody>

    @foreach($modules as $module)

        <tr>
            <td contenteditable="true">{{$module->module}}</td>
            <td>{{$module->promo}}</td>
            <td><a href="deletemodule/{{$module->m_id}}"><button>Delete</button></a>
            <br>
                <button onclick="updatef()">Update</button>
            </td>




        </tr>
    @endforeach

    </tbody>

</table>
<div class="form-popup" id="myForm">
    <form  method="POST" action="ajoutermodule"  class="form-container">
        @csrf
        <h1>Add Teacher</h1>

        <label for="module"><b>Module</b></label>
        <input type="text" placeholder="Enter Module" name="module" required>
        <br> <br><br>
        <select aria-label="Prof" name="prof">

                @foreach($teachers as $teacher)
                <option value={{$teacher->t_id}} >{{$teacher->firstname}}  {{$teacher->lastname}}</option>

                    @endforeach

        </select>
        <br><br><br>
        <select aria-label="Promotion" name="promo">

                @foreach($promos as $promo)
                    <option value={{$promo->id}}>{{$promo->promo}}</option>

                @endforeach


        </select>
        <br><br><br>
        <input type="submit" class="btn" value="add">
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>


</div>


<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
    function updatef() {
        document.getElementById("uForm").style.display = "block";
    }
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>


</body>
</html>
