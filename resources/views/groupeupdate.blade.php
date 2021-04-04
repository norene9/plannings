<html>
<head>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/header.css">
    <title>Home</title>
    <meta http-equiv="redirect" content="5";url="google.come"/>
    @include("header")
</head>
<body class="bodyh">
<div >
    <form  method="POST" action="updateGroupe"  class="form-container">
        @csrf
        <h1> Update Group</h1>


        @foreach($groups as $group)
            <label for="group"><b>Number</b></label>
            <input type="text" placeholder="{{$group->number}}" name="group" required>
            <br><br><br>
        <label for="group"><b>Number</b></label>
        <input type="text" placeholder="Enter Name" name="id"  value="{{$group->g_id}}" hidden>
        @endforeach
        <select name="promo" >
            @foreach($promos as $promo)
                <option value="{{$promo->id}}">{{$promo->promo}}</option>
            @endforeach
        </select>


        <br><br><br>

        <input type="submit" class="btn" value="add">

    </form>
</body>
</html>
