<html>
<head>
    <title>User Base App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
</body>
<div class="container">
    <form id="userAdd">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="username" class="form-control" id="username" value=""/>
        </div>
        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input type="email" name="useremail" class="form-control" id="useremail" value="">
        </div>
        <button type="submit" class="btn btn-primary">Add User</button>
    </form>
    <hr/>
    <button type="button" class="btn btn-primary" id="getusersdb" onClick="showUsers('database');">SHOW Database Users</button>
    <button type="button" class="btn btn-primary" id="getusersredis" onClick="showUsers('redis');">SHOW Redis Users</button>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody id="allUsersData">
        </tbody>
    </table>
</div>
</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
<script src="/frontEnd/apiCall.js"></script>
</html>
