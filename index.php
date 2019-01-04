<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<div id="page-wrap">

<h1>Quiz for CodeGorilla</h1>

<form action="grade.php" method="post" id="quiz">

    <ol>
    
        <li>
        
            <h3>When did whe begin on our bootcamp...</h3>
            
            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                <label for="question-1-answers-A">A) 27-11-2018 </label>
            </div>
            
            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                <label for="question-1-answers-B">B) 03-12-2018</label>
            </div>
            
            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                <label for="question-1-answers-C">C) 05-12-2018</label>
            </div>
            
            <div>
                <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                <label for="question-1-answers-D">D) 25-11-2018</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>In how many places will this bootcamp be held...</h3>
            
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                <label for="question-2-answers-A">A) 7</label>
            </div>
            
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                <label for="question-2-answers-B">B) 3</label>
            </div>
            
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                <label for="question-2-answers-C">C) 5</label>
            </div>
            
            <div>
                <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                <label for="question-2-answers-D">D) 9</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>What do you learn for front-end development...</h3>
            
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                <label for="question-3-answers-A">A) PHP, Laravel, MySQL, Linux</label>
            </div>
            
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                <label for="question-3-answers-B">B) Self improvement, Communication, Problem solving, Time management</label>
            </div>
            
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                <label for="question-3-answers-C">C) HTML, CSS, Bootstrap, JavaScript, Angular</label>
            </div>
            
            <div>
                <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                <label for="question-3-answers-D">D) Scrum with Trello, Visual Studio code, GIT version control, Cloud deployment, OWASP websecurity</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>When are we done with the bootcamp...</h3>
            
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                <label for="question-4-answers-A">A) 06-03-2019</label>
            </div>
            
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                <label for="question-4-answers-B">B) 24-04-2019</label>
            </div>
            
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                <label for="question-4-answers-C">C) 28-02-2019</label>
            </div>
            
            <div>
                <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                <label for="question-4-answers-D">D) 15-03-2019</label>
            </div>
        
        </li>
        
        <li>
        
            <h3>The bootcamp consists of how many steps...</h3>
            
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                <label for="question-5-answers-A">A) 2</label>
            </div>
            
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                <label for="question-5-answers-B">B) 4</label>
            </div>
            
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                <label for="question-5-answers-C">C) 5</label>
            </div>
            
            <div>
                <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                <label for="question-5-answers-D">D) 3</label>
            </div>
        
        </li>
    
    </ol>
    
    <input type="submit" value="Submit Quiz" />

</form>

</div>


<div class="visitor-count">

   <?php include "counter.php";  ?>
   </div>


</body>
</html>




