<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>laravel simple crud</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="/resources/css/app.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row" style="justify-content: space-between">
					<div class="col-sm-6">
						<h2>Manage <b>GYM</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Athlet</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>

						<th>Name</th>
						<th>Age</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>

						@foreach ($athlets as $athlet)
                        <tr>
                            <td>{{$athlet['name']}}</td>
                            <td>{{$athlet['age']}}</td>
                            <td>{{$athlet['adresse']}}</td>
                            <td>{{$athlet['phone']}}</td>
                        	<td>
							<a href={{'edite/'.$athlet['id']}} class="edit" ><i class="material-icons"  title="Edit">&#xE254;</i></a>
							<a href={{'delete/'.$athlet['id']}} class="delete" ><i class="material-icons"  title="Delete">&#xE872;</i></a>
						</td>
                    </tr>
						@endforeach
				</tbody>
			</table>

		</div>
	</div>
</div>
<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
            <form action="added" method="POST">
                @csrf

				<div class="modal-header">
					<h4 class="modal-title">Add Athlet</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Age</label>
						<input type="text" name="age" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea name="adresse" class="formvcv-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
                    <button type="reset">Cancel</button>
					<button type="submit">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- add Modal HTML -->



<script src="/resources/js/app.js"></script>
</body>
</html>
