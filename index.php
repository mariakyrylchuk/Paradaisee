
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Головна</title>
        <meta name="description" content="Paradaise">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css" type="text/css" >
        <script href="script.js" type="text/javascript"></script>
    </head>
    <body>
    
    
    <?php
    	echo date("F j, Y, g:i:a");
    ?>
    
    
    
        <script>document.getElementsByClassName("collapsible").src = "script.js";
</script>
<button type="button" class="collapsible">Open Collapsible</button>
<div class="content" id="collapsible">
  <p>Інформація в розробці...</p>
</div>
        <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
        
    <header>
        <h1 style="position: relative; text-align: center;">Вас вітає бар "Paradaise"</h1>
		<h2 style="position: relative; text-align: center;">Насолоджуйся, відпочивай, усе твоїх руках!</h2>
         <div class="img">
        <img style="position: relative;" src="images/photo_2022-12-08_17-11-27.jpg" alt=""></div>
        </header>
        
    
            <nav>
                <button class="button button1"><a href="index.html">Бар "Paradaise"</a></button>
                <button class="button button2"><a href="menu.html">Меню</a></button>
                <button class="button button3"><a href="about.html">Історія створення</a></button>
                <button class="button button4"><a href="drinks.html">Напої</a></button>
                </nav>

       <section>
    <aside>
        <p>
             Поглянь на це Combo сьогодні :
		</p>
		<ol>
			<li>Дайкірі</li>
            <li>Космополітен</li>
            <li>Май-Тай</li>
            <li>Лонг-Айленд</li>
            <li>Маргарита</li>
            <li>Кривава Мері</li>
		</ol> 
    </aside>    
           
        <article>
        <div class="img">
        <img style="position: relative;width: 250px;height: 250px;" src="images/Depositphotos_116011260_xl-2015-1_1602866083.jpg" alt="">
        
         <img style="position: relative;width: 250px;height: 250px;" src="images/l27jkz---c740x493x50px50p-c740x493x50px50p-up--208d0540927b463e178794a8d1f1db36.jpg" alt="">
        
         <img style="position: relative;width: 250px;height: 250px;" src="images/long.jpg" alt="">
        
         <img style="position: relative;width: 250px;height: 250px;" src="images/margarita-cocktail.jpg" alt="">
        
        <img style="position: relative;width: 250px;height: 250px;" src="images/p_O.jpg" alt="">
             <img style="position: relative;width: 250px;height: 250px;" src="images/936-bloody-mary.jpg" alt="">
            </div>
        </article>
        </section>

            
     
        <footer>
        <form action="function.php" method="post" >
                <label for="username">User name<br/>
            <input type="text" name="username" id="username" cols="15" rows="15">
                </label><br/>
                <label for="age">Age<br/>
            <input type="number" name="age" id="age" cols="15" rows="15">
                </label><br/>
                <label for="comment">Comments:<br/>
            <textarea name="comment" id="comment" cols="25" rows="5"></textarea>
                </label><br/><br/>
                <input type="submit" name="" value="Send me">
            </form>
            
           
            <h3>Наша адреса: 
            м. Вінниця
            вул.Соборна</h3>
            <h3>Тел:+380968544872</h3>
            <h3>By Maria Kyrylchuk</h3>
            <h3>Emal:mariakyrylchuk@gmail.com</h3>
            <h3>Instagram:haqwerry</h3>
            </footer>
    </body>
</html>
