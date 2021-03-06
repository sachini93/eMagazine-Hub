
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Article</title>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
	<style>
		#new-article{

		}
	</style>
</head>
<body>
<h1><center>Add New Article</center></h1>
<div id="new-article" class="row">
	<div class="container">
		<div class="col-lg-12">
			<form action="">
				<div class="form-group">
					<label for="Title">Article Title</label>
					<input type="text" class="form-control" id="Title" placeholder="Title of the Article">
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
					<label for="">Article</label>
					<textarea name="" id="Article" rows="8" class="form-control"></textarea>

				</div>
				<button type="submit" class="btn btn-primary">Add</button>
				<button type="reset" class="btn btn-primary">Reset</button>
			</form>

		</div>

	</div>

</div>
<script>
	$(document).ready(function() {
		$('#Article').summernote({
			height: 300
		});
	});
</script>
</body>
</html>
