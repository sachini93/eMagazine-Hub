<!DOCTYPE html>
<html>
<head>
	<title>CreateNewMagazine</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<h1><center>Create New Magazine</center></h1>
<div class="row">
	<div class="container">
		<div class="col-lg-12">
			<form>
				<div class="form-group">
					<label for="Title">Title</label>
					<input type="text" class="form-control" id="Title" placeholder="Title of the Magazine">
				</div>

				<div class="form-group">
					<label for="Author">Author</label>
					<input type="text" class="form-control" id="Author" placeholder="Name of the Author" aria-describedby="authorName">
					<small id="authorName" class="form-text text-muted">This name will be published as the author's name.</small>
				</div>

				<div class="form-group">
					<label for="Category">Select Category</label>
					<select class="form-control" id="Category">
						<option></option>
						<option>Education</option>
						<option>Fashion</option>
						<option>Health</option>
						<option>Sports</option>
						<option>Cooking & Food</option>
						<option>Entertainment</option>
						<option>Tours & Travel</option>
						<option>Lifestyles & Culture</option>
						<option>Other</option>
					</select>
				</div>

				<div class="form-group">
					<label for="Available">Available for</label>
					<select class="form-control" id="Available">
						<option>Free</option>
						<option>Buy</option>
					</select>
				</div>


				<button type="submit" class="btn btn-primary">Add</button>
				<button type="reset" class="btn btn-primary">Reset</button>
			</form>

		</div>

	</div>

</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
