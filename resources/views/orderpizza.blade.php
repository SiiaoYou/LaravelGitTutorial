<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Pizza</title>
        <style>
            html {
                background: url(/images/b1.png) repeat center fixed; 
                font-family: Verdana, Geneva, sans-serif;   
            }
            
            form {
                display: -webkit-flex;
                display: flex;
                -webkit-flex-flow: row wrap; 
                flex-flow: row wrap;
            } 
            
           fieldset {
                background-color: rgb(234, 189, 142);
                margin: 150px;  
            }
            
            p{
                font-size: 25px;
            }

            h1{
                text-align: center;
                font-size: 30px;
            }

            div {
                margin: 20px;
                width: 100%;
            }
            
            legend {
                color: rgb(255, 200, 200);
                background-color: rgb(179, 20, 25);
            }
            
            label {
                display: inline-block;
                width: 120px;
            }
            
            input[type="submit"], input[type="reset"] {
                height: 50px;
                width: 200px;
            }
        </style>
</head>
<body>
   <section>
   <fieldset>
      <legend><h1>Order Pizza</h1></legend>
      <p>Everyone has their own pizza preferences. Choose from the following ingredients to make your special pizza. You can choose various toppings and their location, pizza sizes and pizza crusts.</p>
      <form action="" method="post">
            <div>
                <legend><h1>Please choose one of these two choices</h1></legend>
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                <input name="orderType" id="delivery" type="radio" checked /><label for="delivery">Food Delivery</label>  
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;                
                <input name="orderType" id="self" type="radio" /><label for="self">Self Collect</label>
            </div>
            <div>
               <label for="name">Name:</label>
               <input name="name" id="name" type="text" placeholder="First and Last Name" maxlength="30" required />
            </div>
            <div>
               <label for="email">Email:</label>
               <input name="email" id="email" type="email" placeholder="eg: abc123@gmail.com" required />
            </div>
            <div>
                <label for="phone">Phone:</label>
                <input name="phone" id="phone" type="tel" required placeholder="xxx-xxxxxxxx"
                   pattern="^(01)[0-46-9]*-[0-9]{7,8}$" />
            </div>
            <div>
                 <label for="pizzaSize">Pizza Size:</label>
                 <input name="pizzaSize" id="small" type="radio" /><label for="small">Small size</label>                  
                 <input name="pizzaSize" id="regular" type="radio" checked /><label for="regular">Regular size</label> &ensp;&ensp;
                 <input name="pizzaSize" id="large" type="radio" /><label for="large">Large size</label> 
            </div>
            <div>
               <label for="pizzaCrust">Pizza Crust:</label>
               <select name="pizzaCrust" id="pizzaCrust">
                  <option value="Thin">Thin</option>
                  <option value="Thick">Thick</option>
                  <option value="Stuffed">Stuffed</option>
                  <option value="Pan">Pan</option>
               </select>
            </div>
            <div>
               <label for="additional">Additional:</label>
               <input type="checkbox" id="cheeseBox" name="doubleCheese"/>
               <label for="cheese">Double Cheese</label>
               <input type="checkbox" id="sauceBox" name="doubleSauce"/>
               <label for="sauce">Double Sauce</label>
            </div>
            <div>
                <label for="quantity">Quantity:</label>
                <input name="quantity" id="quantity" type="number" min="1" max="10" value="1"/><br><br>
                <legend><h1>The location of the toppings on the pizza</h1></legend>
            <h4>&ensp;&ensp;&ensp;L=Left side of the pizza&ensp;&ensp;M=Middle of the pizza&ensp;&ensp;R=Right side of the pizza&ensp;&ensp;N=Non toppings&ensp;&ensp;</h4>
            </div>

            <legend>&ensp;&ensp;&ensp;&ensp;&ensp;Meat&ensp;&ensp;&ensp;&ensp;&ensp;<br>&ensp;&ensp;&ensp;Toppings&ensp;&ensp;&ensp;</legend>
            <b>&ensp;&ensp;&ensp;L&ensp;&ensp;M&ensp;&ensp;R&ensp;&ensp;N</b>
            <div>
               <label>Ham</label>
               <input type="radio" name="ham" value="left" />
               <input type="radio" name="ham" value="middle" />
               <input type="radio" name="ham" value="right" />
               <input type="radio" name="ham" value="none" checked />
            </div>
            <div>
            <label>Pork</label>
               <input type="radio" name="pork" value="left" />
               <input type="radio" name="pork" value="middle" />
               <input type="radio" name="pork" value="right" />
               <input type="radio" name="pork" value="none" checked />
            </div>
            <div>
               <label>Sausage</label>
               <input type="radio" name="sausage" value="left" />
               <input type="radio" name="sausage" value="middle" />
               <input type="radio" name="sausage" value="right" />
               <input type="radio" name="sausage" value="none" checked />
            </div>
            <div>
               <label>Chicken</label>
               <input type="radio" name="chicken" value="left" />
               <input type="radio" name="chicken" value="middle" />
               <input type="radio" name="chicken" value="right" />
               <input type="radio" name="chicken" value="none" checked />
               <br><br>
            </div>
       
            <legend>&ensp;&ensp;Vegetable&ensp;&ensp;<br>&ensp;&ensp;Toppings&ensp;&ensp;</legend>
            <b>&ensp;&ensp;&ensp;&ensp;L&ensp;&ensp;M&ensp;&ensp;R&ensp;&ensp;N</b>
            <div>
               <label>Mushrooms</label>
               <input type="radio" name="mushrooms" value="left" />
               <input type="radio" name="mushrooms" value="middle" />
               <input type="radio" name="mushrooms" value="right" />
               <input type="radio" name="mushrooms" value="none" checked />
            </div>

            <div>
               <label>Onions</label>
               <input type="radio" name="onions" value="left" />
               <input type="radio" name="onions" value="middle" />
               <input type="radio" name="onions" value="right" />
               <input type="radio" name="onions" value="none" checked />
            </div>

            <div>
               <label>Tomatoes</label>
               <input type="radio" name="tomatoes" value="left" />
               <input type="radio" name="tomatoes" value="middle" />
               <input type="radio" name="tomatoes" value="right" />
               <input type="radio" name="tomatoes" value="none" checked />
            </div>

            <div>
               <label>Jalapenos</label>
               <input type="radio" name="jalapenos" value="left" />
               <input type="radio" name="jalapenos" value="middle" />
               <input type="radio" name="jalapenos" value="right" />
               <input type="radio" name="jalapenos" value="none" checked />
            </div>

            <div>
                <a>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                   &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                </a>
                <input type="reset" value="Cancel Order"/>
                <input type="submit" value="Add to your Order" />
            </div>
         </fieldset>
      </form>
   </section>
</body>
</html>