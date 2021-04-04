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
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>Email</th>

                </tr>
                </thead>
                <tbody>

                @foreach($teachers as $teacher)

                <tr>
                    <td>{{$teacher->firstname}}</td>
                    <td>{{$teacher->lastname}}</td>
                    <td>{{$teacher->email}}</td>
                    <td><a href="deletep/{{$teacher->t_id}}"><button>Delete</button></a>
                <a href="updateProf/{{$teacher->t_id}}"><button>update</button></a>
            </td>
                </tr>
                @endforeach

                </tbody>

            </table>
<div class="form-popup" id="myForm">
    <form  method="POST" action="ajouter"  class="form-container">
        @csrf
        <h1>Add Teacher</h1>

        <label for="email"><b>First Name</b></label>
        <input type="text" placeholder="Enter Name" name="firstname" required>
        <br><br><br>
        <label for="sname"><b>Surname</b></label>
        <input type="text" placeholder="Surname" name="sname" required>
        <br><br><br>
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="email" name="email" required>
        <br> <br><br>
        <input type="submit" class="btn" value="add">
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </form>


</div>

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
