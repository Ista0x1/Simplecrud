<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel simple crud</title>

</head>
<body>
<div id="editEmployeeModal"cv class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
            <form action="edite" method="POST">
                @csrf
				<div class="modal-header">
					<h4 class="modal-title">Edit Athlet</h4>
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
						<textarea class="form-control" name="adresse" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phone" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="reset">cancel</button>
                    <button type="submit">Edite</button>
				</div>
			</form>
		</div>
	</div>
</div>
