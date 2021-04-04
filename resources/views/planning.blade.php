<html>
<head>
    <link rel="stylesheet" href="css/teacher.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
          rel="stylesheet">
    <title>Plannings</title>
    @include("header")
</head>

<a class="material-icons floating-btn" onclick="openForm()">add</a>


<button type="button" class="btn btn-primary" onclick="openTable1()">Planning S1</button>
<button type="button" class="btn cancel" onclick="closeTable1()">Close</button>
<table class="table contents" id="wrapper1">
    <thead>


    <tr>
        <th>/</th>
        @foreach($seances as $seance)
        <th ></th>
            @endforeach
    </tr>

    </thead>
    <tbody>


    @foreach($days as $day)
    <tr>
        <td>{{$day->day}}</td>
        @foreach($seances as $seance)
        @if($seance->day_ref_scid==$day->d_id && $seance->planning_ref_sid==1)
            <td>
                <ol>

                    <li>{{$seance->module}}</li>
                    <li>{{$seance->group}}</li>
                    <li>{{$seance->teacher}}</li>
                    <li>{{$seance->time}}</li>

                </ol>
            </td>
        @endif
            @endforeach
    </tr>
        @endforeach






    </tbody>

</table>
<button type="button" class="btn btn-primary" onclick="openTable2()">Planning S2</button>
<button type="button" class="btn cancel" onclick="closeTable2()">Close</button>
<table class="table contents" id="wrapper2">
    <thead>


    <tr>
        <th>/</th>
        @foreach($seances as $seance)
            <th ></th>
        @endforeach
    </tr>

    </thead>
    <tbody>


    @foreach($days as $day)
        <tr>
            <td>{{$day->day}}</td>
            @foreach($seances as $seance)
                @if($seance->day_ref_scid==$day->d_id && $seance->planning_ref_sid==2)
                    <td>
                        <ol>

                            <li>{{$seance->module}}</li>
                            <li>{{$seance->group}}</li>
                            <li>{{$seance->teacher}}</li>
                            <li>{{$seance->time}}</li>

                        </ol>
                    </td>
                @endif
            @endforeach
        </tr>
    @endforeach






    </tbody>

</table>
<button type="button" class="btn btn-primary" onclick="openTable3()">Planning exam</button>
<button type="button" class="btn cancel" onclick="closeTable3()">Close</button>
<table class="table contents" id="wrapper3">
    <thead>


    <tr>
        <th>/</th>
        @foreach($seances as $seance)
            <th ></th>
        @endforeach
    </tr>

    </thead>
    <tbody>


    @foreach($days as $day)
        <tr>
            <td>{{$day->day}}</td>
            @foreach($seances as $seance)
                @if($seance->day_ref_scid==$day->d_id && $seance->planning_ref_sid==3)
                    <td>
                        <ol>

                            <li>{{$seance->module}}</li>
                            <li>{{$seance->group}}</li>
                            <li>{{$seance->teacher}}</li>
                            <li>{{$seance->time}}</li>

                        </ol>
                    </td>
                @endif
            @endforeach
        </tr>
    @endforeach






    </tbody>

</table>

<div class="form-popup" id="myForm">
    <form  method="POST" action="ajouterseance"  class="form-container">
        @csrf
        <h1>Add Seance</h1>

        <label for="module"><b>Module</b></label>

        <select aria-label="Prof" name="module">

            @foreach($modules as $module)
                <option value={{$module->module}} >{{$module->module}}

                </option>

            @endforeach

        </select>
        <br> <br><br>
        <label>prof</label>
        <select aria-label="Prof" name="prof">

            @foreach($teachers as $teacher)
                <option value={{$teacher->firstname}}  {{$teacher->lastname}} >{{$teacher->firstname}}  {{$teacher->lastname}}</option>

            @endforeach

        </select>
        <br> <br><br>
        <label>group/Section</label>
        <select aria-label="Prof" name="group">

            @foreach($groups as $group)
                <option value={{$group->g_id}} >{{$group->number}}</option>

            @endforeach

        </select>
        <label>day</label>
        <select aria-label="Prof" name="day">

            @foreach($days as $day)
                <option value={{$day->d_id}} >{{$day->day}}</option>

            @endforeach

        </select>
        <select aria-label="Prof" name="planning">

            @foreach($planning as $p)
                <option value={{$p->p_id}} >{{$p->type}}</option>

            @endforeach

        </select>
        <select aria-label="type" name="type">


                <option value="cours" >cours</option>
            <option value="td" >td</option>


        </select>
        <br><br><br>
    <label for="time">time</label>
        <input type="text" id="time" name="time">
        <br><br><br>
        @foreach($promos as $promo)
        <input type="text" id="promo" name="promo" value={{$promo->id}} hidden>
        @endforeach
        <label for="salle">Salle</label>
        <input type="text" id="salle" name="salle">
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
     function openTable1() {
        document.getElementById("wrapper1").style.display = "block";
    }
      function openTable2() {
        document.getElementById("wrapper2").style.display = "block";
    }
        function openTable3() {
        document.getElementById("wrapper3").style.display = "block";
    }
      function closeTable1() {
        document.getElementById("wrapper1").style.display = "none";
    }
        function closeTable2() {
        document.getElementById("wrapper2").style.display = "none";
    }
        function closeTable3() {
        document.getElementById("wrapper3").style.display = "none";
    }
    
</script>
</body>


</html>
