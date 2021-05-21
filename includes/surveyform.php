<html>
<link rel='stylesheet' type='text/css' href='includes/surveyform.css' />
<div class="container">
	<header class="header">
	<h1 id="title" class="text-center">SeedNshovel Survey Form</h1>
	<p id="description" class="description text-center">Thank you for taking time to help us to improve</p><br>
	</header>
		<body>
		<form id="survey-form">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required/>
			</div>
			<div class="form-group">
				<label id="email-label" for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email Address" required/>
			</div>
			<div class="form-group">
				<label id="number-label" for="number">Age<span class="clue">(optional)</span></label>
				<input type="number" name="age" id="number" class="form-control" placeholder="Enter your Age" required/>
			</div>
			<div class="form-group">
				<p>How do you hear about this website?</p>
				<select class="form-control" required/>
				<option>Social Media</option>
				<option>Advertising</option>
				<option>Search Engine</option>
				<option>Friend</option>
				<option>Other</option>
				</select>
			</div>
			<div class="form-group">
				<p>What browser do you use to access our website?</p>
				<select class="form-control" required/>
				<option>Google Chrome</option>
				<option>Firefox</option>
				<option>Microsoft Edge</option>
				<option>Opera</option>
				<option>Other</option>
				</select>
			</div>
				<div class="form-group">
				<p>Which device did you use to access the website?</p>
				<select class="form-control" required/>
				<option>Desktop</option>
				<option>Pad devices</option>
				<option>Mobile devices</option>
				</select>
			</div>
			<div class="form-group">
				<p>Are you satisfied that you found out our website?</p>
				<select class="form-control" required/>
				<option>Very satisfied</option>
				<option>Satisfied</option>
				<option>Neutral</option>
				<option>Unsatisfied</option>
				<option>Very Unsatisfied</option>
				</select>
			</div>
			<div class="form-group">
				<label>Any suggestions?</label>
				<input type="text" name="suggest" id="suggest" class="form-control" placeholder="Enter your suggestions" required/>
			</div>
			<input type="submit" name="submit" value="SUBMIT" class="submit" /> <br><br><br>
		</form>
		</body>
</div>
</html>