@extends('layouts.master') @section('content')
<div class="row">
    <div class="col-md-4">
  	@include('partials.product-sidebar')
    </div>

    <div class="col-md-8">
        <div class="width">

            <div class="row">

                <div class='container margin-top-20'>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
p {
  animation-duration: 3s;
  animation-name: slidein;
  animation-iteration-count: 1;
}
@keyframes slidein {
  from {
    margin-left: 100%;
    width: 300%;
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}

/* Add a gray background color with some padding */


/* Header/Blog Title */
.header {
	height: 75px;
	width:970px;
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
	font-family: calibri;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
  width: 75%;
	font-family: calibri;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
	font-family: calibri;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
	font-family: calibri;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
	 font-family: calibri;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
	font-family: calibri;
}

body {
background-color: #baf4c8;

}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>
<br>
<br>
<div class="header">
  <h2>About</h2>
</div>


<div class="row">
		&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp
  <div class="leftcolumn">

    <div class="card">
				<h5>
      <p>

				Ranking Management System is a web based
application that is designed to keep track of your friends
submissions on various competitive websites(Codeforces, UVa, Spoj, HackerEarth, HackerRank).
And that is just not it. It has a lot of other features —
<br>
<br>
1. Streak notifier of your friends.
<br>
2. Feel like solving algorithmic problems — Why go to Codeforces
and search for a problem? Solve problems from across all the
platforms.
<br>
3. Want to solve problems that other coders are solving recently
- We got a list of trending problems both globally and also
amongst your friends.
<br>
4. A global leaderboard along with a unique rating which includes
submissions from all the websites.
<br>
The goal is to keep people motivated in algorithmic programming
and solve more and more problems. And yeah we do have a
referral program.

</p>
</h5>

    </div>

  </div>
</div>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>


</div>
</div>
</div>
</div>
</div>
@endsection
