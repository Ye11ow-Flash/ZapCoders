<?php session_start(); ?>
<form id="skills-form" class="applicant-form" method="post" action="courses.php" style="width: 500px; margin: 20px auto;">
  <div id="form-inputs">
    <div class="form-group">
      <label for="grade">Course Platform</label>
      <select class="form-control" id="grade" name="source[]">
        <option value="coursera">Coursera</option>
        <option value="udemy">Udemy</option>
        <option value="udacity">Udacity</option>
        <option value="other">Others</option>
      </select>
    </div>
    <div class="form-group">
      <label for="domain">Select your domain</label>
      <select class="form-control" id="domain" name="domain[]">
        <option name="ml" value="machine-learning">Machine Learning</option>
        <option name="ai" value="artificial-intelligence">Artificial Intelligence</option>
        <option name="dl" value="deep-learning">Deep Learning</option>
        <option name="game-theory" value="game-theory">Game Theory</option>
        <option name="front-end" value="front-end">Front End</option>
        <option name="back-end" value="back-end">Back End</option>
      </select>
    </div>
    <div class="form-group">
      <label for="tech">What technology do you use?</label>
      <select class="form-control" id="tech" name="tech[]">
        <option value="computer">HTML</option>
        <option value="css">CSS</option>
        <option value="javascript">Javascript</option>
        <option value="c++">C++</option>
        <option value="python">Python</option>
        <option value="angular">Angular</option>
        <option value="java">Java</option>
        <option value="android">Android</option>
      </select>
    </div>
  </div>

  <a onclick="add()">Add New Course</a><br>
  <button type="submit" id="submit" class="btn btn-primary" name="add">Submit</button>
</form>
